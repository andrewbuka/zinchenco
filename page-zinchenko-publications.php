<?php
/**
 * Template Name: Публикации учёного — Зинченко
 *
 * Assigned to the six child pages created by scripts/setup-zinchenko-pages.php.
 */
$zinchenko = mbio_zinchenko_data();
$section_slug = get_post_field('post_name', get_queried_object_id());
$selected_category = null;
foreach (($zinchenko['categories'] ?? []) as $candidate) {
    if ($candidate['slug'] === $section_slug) {
        $selected_category = $candidate;
        break;
    }
}
$is_pdf_page = $section_slug === 'pdf-articles';
$section_title = $is_pdf_page ? 'Статьи в PDF' : ($selected_category['title'] ?? get_the_title());
$pdf_articles = $zinchenko['pdf_articles'] ?? [];
$selected_pdf = isset($_GET['pdf']) && is_string($_GET['pdf']) && ctype_digit(wp_unslash($_GET['pdf']))
    ? (int) $_GET['pdf'] : -1;
if ($selected_pdf >= count($pdf_articles)) {
    $selected_pdf = -1;
}
get_header();
?>

<main id="main-content" class="zinchenko-page zinchenko-publication-page">
    <header class="zinchenko-hero zinchenko-hero-small" id="top">
        <div class="auto-container">
            <nav class="zinchenko-breadcrumb" aria-label="Навигационная цепочка">
                <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
                <span aria-hidden="true">/</span>
                <a href="<?php echo esc_url(mbio_zinchenko_url()); ?>"><?php echo esc_html($zinchenko['name'] ?? 'Зинченко Анатолий Иванович'); ?></a>
                <span aria-hidden="true">/</span>
                <span aria-current="page"><?php echo esc_html($section_title); ?></span>
            </nav>
            <p class="zinchenko-eyebrow">Научные труды</p>
            <h1><?php echo esc_html($section_title); ?></h1>
            <p class="zinchenko-lead">
                <?php if ($is_pdf_page) : ?>
                    <?php echo esc_html(count($pdf_articles)); ?> документов для чтения
                <?php elseif ($selected_category) : ?>
                    <?php echo esc_html(mbio_zinchenko_entry_count($selected_category['count'])); ?> · <?php echo esc_html($selected_category['first_year'] . '–' . $selected_category['last_year']); ?>
                <?php endif; ?>
            </p>
        </div>
    </header>

    <div class="auto-container zinchenko-content">
        <nav class="zinchenko-section-nav" aria-label="Разделы публикаций">
            <a href="<?php echo esc_url(mbio_zinchenko_url()); ?>">Профиль учёного</a>
            <?php foreach (($zinchenko['categories'] ?? []) as $category) : ?>
                <a href="<?php echo esc_url(mbio_zinchenko_url($category['slug'])); ?>"<?php echo $section_slug === $category['slug'] ? ' aria-current="page"' : ''; ?>><?php echo esc_html($category['title']); ?></a>
            <?php endforeach; ?>
            <a href="<?php echo esc_url(mbio_zinchenko_url('pdf-articles')); ?>"<?php echo $is_pdf_page ? ' aria-current="page"' : ''; ?>>Статьи в PDF</a>
        </nav>

        <?php if ($selected_category) : ?>
            <section class="zinchenko-bibliography" aria-label="Библиографический список">
                <div class="zinchenko-list-toolbar">
                    <p>Список сохранён по годам в порядке исходного документа.</p>
                    <a href="#year-<?php echo esc_attr(end($selected_category['years'])['year']); ?>">К последнему году ↓</a>
                </div>
                <details class="zinchenko-year-index">
                    <summary>Перейти к году</summary>
                    <nav aria-label="Годы публикаций">
                        <?php foreach ($selected_category['years'] as $group) : ?>
                            <a href="#year-<?php echo esc_attr($group['year']); ?>"><?php echo esc_html($group['year']); ?></a>
                        <?php endforeach; ?>
                    </nav>
                </details>
                <?php $start = 1; ?>
                <?php foreach ($selected_category['years'] as $group) : ?>
                    <section class="zinchenko-year" id="year-<?php echo esc_attr($group['year']); ?>" aria-labelledby="year-title-<?php echo esc_attr($group['year']); ?>">
                        <div class="zinchenko-year-heading">
                            <h2 id="year-title-<?php echo esc_attr($group['year']); ?>"><?php echo esc_html($group['year']); ?></h2>
                            <span><?php echo esc_html(mbio_zinchenko_entry_count(count($group['entries']))); ?></span>
                        </div>
                        <ol start="<?php echo esc_attr($start); ?>">
                            <?php foreach ($group['entries'] as $entry) : ?>
                                <li><?php echo esc_html($entry); ?></li>
                            <?php endforeach; ?>
                        </ol>
                    </section>
                    <?php $start += count($group['entries']); ?>
                <?php endforeach; ?>
            </section>
        <?php elseif ($is_pdf_page) : ?>
            <section class="zinchenko-pdf-section" aria-label="Статьи в формате PDF">
                <p class="zinchenko-list-note">Выберите статью, чтобы прочитать PDF на этой странице, или откройте файл в отдельной вкладке.</p>
                <ul class="zinchenko-pdf-list">
                    <?php foreach ($pdf_articles as $index => $article) : ?>
                        <?php $pdf_url = mbio_zinchenko_pdf_url($article['file']); ?>
                        <li class="zinchenko-pdf-card">
                            <span class="zinchenko-pdf-icon" aria-hidden="true">PDF</span>
                            <div>
                                <?php if ($article['year']) : ?><span class="zinchenko-pdf-year"><?php echo esc_html($article['year']); ?></span><?php endif; ?>
                                <h2><?php echo esc_html($article['title']); ?></h2>
                                <div class="zinchenko-pdf-actions">
                                    <a href="<?php echo esc_url(add_query_arg('pdf', $index, get_permalink()) . '#reader'); ?>">Читать на странице</a>
                                    <a href="<?php echo esc_url($pdf_url); ?>" target="_blank" rel="noopener">Открыть PDF <span class="screen-reader-text">(в новой вкладке)</span></a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php if ($selected_pdf >= 0) : ?>
                    <?php $article = $pdf_articles[$selected_pdf]; ?>
                    <?php $pdf_url = mbio_zinchenko_pdf_url($article['file']); ?>
                    <section class="zinchenko-pdf-reader" id="reader" aria-labelledby="zinchenko-reader-title">
                        <div class="zinchenko-reader-heading">
                            <h2 id="zinchenko-reader-title"><?php echo esc_html($article['title']); ?></h2>
                            <a href="<?php echo esc_url($pdf_url); ?>" target="_blank" rel="noopener">Открыть PDF отдельно <span class="screen-reader-text">(в новой вкладке)</span></a>
                        </div>
                        <iframe title="Просмотр PDF: <?php echo esc_attr($article['title']); ?>" src="<?php echo esc_url($pdf_url); ?>" loading="lazy"></iframe>
                        <p>Если PDF не отображается в вашем браузере, воспользуйтесь ссылкой «Открыть PDF отдельно».</p>
                    </section>
                <?php endif; ?>
            </section>
        <?php else : ?>
            <p>Раздел публикаций не найден.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
