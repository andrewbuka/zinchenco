<?php
/**
 * Convert the supplied DOCX bibliographies to data/zinchenko.php.
 *
 * Usage: php scripts/build-zinchenko-content.php
 * Requires PHP CLI with the zip and DOM extensions. PDF contents are not read.
 */

declare(strict_types=1);

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

if (!class_exists(ZipArchive::class) || !class_exists(DOMDocument::class)) {
    fwrite(STDERR, "PHP extensions zip and DOM are required.\n");
    exit(1);
}

$root = dirname(__DIR__);
$source = $root . '/assets/zinchenko';
$destination = $root . '/data/zinchenko.php';
$wordNamespace = 'http://schemas.openxmlformats.org/wordprocessingml/2006/main';
$symbolCharacters = ['61' => 'α', '62' => 'β', '2D' => '−', 'A2' => '′'];
$categories = [
    ['monographs', 'Брошюры и коллективные монографии'],
    ['journal-articles', 'Статьи в журналах и сборниках'],
    ['patents', 'Авторские свидетельства и патенты'],
    ['conference-papers', 'Статьи в материалах конференций'],
    ['abstracts', 'Тезисы докладов'],
];

function wordParagraphs(string $path, string $namespace, array $symbols): array
{
    $archive = new ZipArchive();
    if ($archive->open($path) !== true) {
        throw new RuntimeException("Cannot open Word file: $path");
    }
    $xml = $archive->getFromName('word/document.xml');
    $archive->close();
    if ($xml === false) {
        throw new RuntimeException("Missing document.xml in $path");
    }

    $document = new DOMDocument();
    if (!$document->loadXML($xml, LIBXML_NONET | LIBXML_COMPACT)) {
        throw new RuntimeException("Invalid Word XML in $path");
    }
    $xpath = new DOMXPath($document);
    $xpath->registerNamespace('w', $namespace);
    $paragraphs = [];

    foreach ($xpath->query('/w:document/w:body//w:p') as $paragraph) {
        $text = '';
        foreach ($xpath->query('.//w:t | .//w:tab | .//w:br | .//w:cr | .//w:noBreakHyphen | .//w:sym', $paragraph) as $node) {
            switch ($node->localName) {
                case 't':
                    $text .= $node->textContent;
                    break;
                case 'tab':
                case 'br':
                case 'cr':
                    $text .= ' ';
                    break;
                case 'noBreakHyphen':
                    $text .= '-';
                    break;
                case 'sym':
                    $font = $node->getAttributeNS($namespace, 'font');
                    $code = strtoupper(substr($node->getAttributeNS($namespace, 'char'), -2));
                    if ($font !== 'Symbol' || !isset($symbols[$code])) {
                        throw new RuntimeException("Unsupported Word symbol $font:$code in $path");
                    }
                    $text .= $symbols[$code];
                    break;
            }
        }
        $text = trim((string) preg_replace('/\s+/u', ' ', str_replace("\u{00A0}", ' ', $text)));
        if ($text !== '') {
            $paragraphs[] = $text;
        }
    }
    return $paragraphs;
}

function publicationCategory(int $number, string $slug, string $title, string $source, string $namespace, array $symbols): array
{
    $files = glob($source . '/Публикации/' . $number . ' *.docx');
    if (count($files) !== 1) {
        throw new RuntimeException("Expected one Word file numbered $number, found " . count($files));
    }
    $groups = [];
    $count = 0;
    foreach (wordParagraphs($files[0], $namespace, $symbols) as $text) {
        if (preg_match('/^(?:19|20)\d{2}$/D', $text)) {
            $groups[] = ['year' => (int) $text, 'entries' => []];
            continue;
        }
        if (!$groups) {
            continue; // The document title precedes the first year.
        }
        $count++;
        if (preg_match('/^(\d+)[.)]\s+/u', $text, $match)) {
            if ((int) $match[1] !== $count) {
                fwrite(STDERR, "Numbering correction in " . basename($files[0]) . ": source {$match[1]}, position $count\n");
            }
            $text = (string) preg_replace('/^\d+[.)]\s+/u', '', $text, 1);
        }
        $groups[count($groups) - 1]['entries'][] = $text;
    }
    if (!$groups || !$count) {
        throw new RuntimeException('No publications found in ' . basename($files[0]));
    }
    return [
        'slug' => $slug,
        'title' => $title,
        'source' => basename($files[0]),
        'count' => $count,
        'first_year' => $groups[0]['year'],
        'last_year' => $groups[count($groups) - 1]['year'],
        'years' => $groups,
    ];
}

try {
    $information = wordParagraphs($source . '/Информация.docx', $wordNamespace, $symbolCharacters);
    if (count($information) !== 7 || strpos($information[0], 'Зинченко') !== 0) {
        throw new RuntimeException('The biography structure has changed.');
    }
    $publicationCategories = [];
    foreach ($categories as $index => [$slug, $title]) {
        $publicationCategories[] = publicationCategory($index + 1, $slug, $title, $source, $wordNamespace, $symbolCharacters);
    }

    $articles = [];
    $pdfs = glob($source . '/Статьи/*.pdf');
    sort($pdfs, SORT_STRING);
    foreach ($pdfs as $pdf) {
        $filename = basename($pdf);
        $stem = substr($filename, 0, -4);
        $hasYear = preg_match('/^(\d{4})-/', $stem, $match) === 1;
        $label = $hasYear ? substr($stem, strlen($match[0])) : $stem;
        $articles[] = [
            'file' => $filename,
            'title' => str_replace('-', ' — ', $label),
            'year' => $hasYear ? (int) $match[1] : null,
        ];
    }
    if (!$articles) {
        throw new RuntimeException('No PDF attachments found.');
    }

    $data = [
        'name' => $information[0],
        'role' => $information[1],
        'biography' => array_slice($information, 2),
        'categories' => $publicationCategories,
        'pdf_articles' => $articles,
    ];
    $content = "<?php\n/** Generated from assets/zinchenko by scripts/build-zinchenko-content.php. */\nreturn "
        . var_export($data, true) . ";\n";
    $content = (string) preg_replace('/[ \t]+$/m', '', $content);
    if (file_put_contents($destination, $content) === false) {
        throw new RuntimeException("Could not write $destination");
    }
    echo 'Saved ' . array_sum(array_column($publicationCategories, 'count'))
        . ' publications in five lists and ' . count($articles) . " PDF links\n";
} catch (Throwable $error) {
    fwrite(STDERR, $error->getMessage() . "\n");
    exit(1);
}
