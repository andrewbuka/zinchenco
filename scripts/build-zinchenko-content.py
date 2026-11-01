#!/usr/bin/env python3
"""Build the scientist section's web content from the supplied Word files.

The PDF files are indexed by filename only; their contents are never extracted.
Run from any directory with Python 3's standard library.
"""

import json
import re
import sys
import xml.etree.ElementTree as ET
from pathlib import Path
from zipfile import ZipFile


ROOT = Path(__file__).resolve().parents[1]
SOURCE = ROOT / "assets" / "zinchenko"
DESTINATION = ROOT / "data" / "zinchenko.json"
WORD = "{http://schemas.openxmlformats.org/wordprocessingml/2006/main}"
SYMBOL_FONT = {"61": "α", "62": "β", "2D": "−", "A2": "′"}

CATEGORIES = (
    ("monographs", "Брошюры и коллективные монографии"),
    ("journal-articles", "Статьи в журналах и сборниках"),
    ("patents", "Авторские свидетельства и патенты"),
    ("conference-papers", "Статьи в материалах конференций"),
    ("abstracts", "Тезисы докладов"),
)


def paragraphs(path):
    with ZipFile(path) as archive:
        root = ET.fromstring(archive.read("word/document.xml"))
    body = root.find(f"{WORD}body")
    for paragraph in body.iter(f"{WORD}p"):
        pieces = []
        for node in paragraph.iter():
            if node.tag == f"{WORD}t" and node.text:
                pieces.append(node.text)
            elif node.tag == f"{WORD}tab":
                pieces.append(" ")
            elif node.tag in (f"{WORD}br", f"{WORD}cr"):
                pieces.append(" ")
            elif node.tag == f"{WORD}noBreakHyphen":
                pieces.append("-")
            elif node.tag == f"{WORD}sym":
                font = node.get(f"{WORD}font")
                code = node.get(f"{WORD}char", "")[-2:].upper()
                if font != "Symbol" or code not in SYMBOL_FONT:
                    raise ValueError(f"Unsupported Word symbol {font}:{code} in {path.name}")
                pieces.append(SYMBOL_FONT[code])
        value = re.sub(r"\s+", " ", "".join(pieces).replace("\u00a0", " ")).strip()
        if value:
            yield value


def publication_category(number, slug, title):
    matches = list((SOURCE / "Публикации").glob(f"{number} *.docx"))
    if len(matches) != 1:
        raise ValueError(f"Expected one Word file numbered {number}, found {len(matches)}")
    source = matches[0]
    groups = []
    count = 0
    for text in paragraphs(source):
        if re.fullmatch(r"(?:19|20)\d{2}", text):
            groups.append({"year": int(text), "entries": []})
            continue
        if not groups:
            continue  # Document title before the first year.
        count += 1
        prefix = re.match(r"^(\d+)[.)]\s+", text)
        if prefix:
            if int(prefix.group(1)) != count:
                print(
                    f"Numbering correction in {source.name}: "
                    f"source {prefix.group(1)}, position {count}",
                    file=sys.stderr,
                )
            text = text[prefix.end():]
        groups[-1]["entries"].append(text)
    if not groups or count == 0:
        raise ValueError(f"No publications found in {source.name}")
    if sum(len(group["entries"]) for group in groups) != count:
        raise ValueError(f"Publication count mismatch in {source.name}")
    return {
        "slug": slug,
        "title": title,
        "source": source.name,
        "count": count,
        "first_year": groups[0]["year"],
        "last_year": groups[-1]["year"],
        "years": groups,
    }


def main():
    information = list(paragraphs(SOURCE / "Информация.docx"))
    if len(information) != 7 or not information[0].startswith("Зинченко"):
        raise ValueError("The biography's expected structure changed")
    categories = [
        publication_category(index, slug, title)
        for index, (slug, title) in enumerate(CATEGORIES, start=1)
    ]
    articles = []
    for pdf in sorted((SOURCE / "Статьи").glob("*.pdf")):
        year = re.match(r"^(\d{4})-", pdf.stem)
        label = pdf.stem[len(year.group(0)):] if year else pdf.stem
        articles.append({
            "file": pdf.name,
            "title": label.replace("-", " — "),
            "year": int(year.group(1)) if year else None,
        })
    if not articles:
        raise ValueError("No PDF attachments found")
    data = {
        "name": information[0],
        "role": information[1],
        "biography": information[2:],
        "categories": categories,
        "pdf_articles": articles,
    }
    DESTINATION.parent.mkdir(exist_ok=True)
    DESTINATION.write_text(json.dumps(data, ensure_ascii=False, indent=2) + "\n", encoding="utf-8")
    print(f"Saved {sum(item['count'] for item in categories)} publications in five lists and {len(articles)} PDF links")


if __name__ == "__main__":
    main()
