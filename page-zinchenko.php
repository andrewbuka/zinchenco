<?php
/**
 * Template Name: Профиль учёного — Зинченко
 *
 * The profile text and publication summaries come from the supplied Word files.
 */
$zinchenko = mbio_zinchenko_data();
get_header();
?>

<main id="main-content" class="zinchenko-page">
    <header class="zinchenko-hero" id="top">
        <div class="auto-container">
            <nav class="zinchenko-breadcrumb" aria-label="Навигационная цепочка">
                <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
                <span aria-hidden="true">/</span>
                <span>Наши учёные</span>
                <span aria-hidden="true">/</span>
                <span aria-current="page"><?php echo esc_html($zinchenko['name'] ?? get_the_title()); ?></span>
            </nav>
            <p class="zinchenko-eyebrow">Институт микробиологии НАН Беларуси</p>
            <h1><?php echo esc_html($zinchenko['name'] ?? get_the_title()); ?></h1>
            <?php if (!empty($zinchenko['role'])) : ?>
                <p class="zinchenko-lead"><?php echo esc_html($zinchenko['role']); ?></p>
            <?php endif; ?>
            <a class="zinchenko-hero-link" href="#publications">Научные труды <span aria-hidden="true">↓</span></a>
        </div>
    </header>

    <div class="auto-container zinchenko-content">
        <?php if (!empty($zinchenko['biography'])) : ?>
            <section class="zinchenko-section zinchenko-biography" aria-labelledby="zinchenko-biography-title">
                <div class="zinchenko-section-intro">
                    <p class="zinchenko-kicker">Профиль учёного</p>
                    <h2 id="zinchenko-biography-title">Биография и научная деятельность</h2>
                </div>
                <div class="zinchenko-prose">
                    <?php foreach ($zinchenko['biography'] as $paragraph) : ?>
                        <p><?php echo esc_html($paragraph); ?></p>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <section class="zinchenko-section" id="publications" aria-labelledby="zinchenko-publications-title">
            <div class="zinchenko-section-intro">
                <p class="zinchenko-kicker">Библиография</p>
                <h2 id="zinchenko-publications-title">Научные труды</h2>
                <p>Публикации распределены по видам работ. Каждый список доступен на отдельной странице.</p>
            </div>
            <div class="zinchenko-card-grid">
                <?php foreach (($zinchenko['categories'] ?? []) as $category) : ?>
                    <a class="zinchenko-card" href="<?php echo esc_url(mbio_zinchenko_url($category['slug'])); ?>">
                        <span class="zinchenko-card-count"><?php echo esc_html(mbio_zinchenko_entry_count($category['count'])); ?></span>
                        <h3><?php echo esc_html($category['title']); ?></h3>
                        <span class="zinchenko-card-years"><?php echo esc_html($category['first_year'] . '–' . $category['last_year']); ?></span>
                        <span class="zinchenko-card-action">Смотреть список <span aria-hidden="true">→</span></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="zinchenko-section zinchenko-pdf-teaser" aria-labelledby="zinchenko-pdf-title">
            <div>
                <p class="zinchenko-kicker">Полные тексты</p>
                <h2 id="zinchenko-pdf-title">Статьи в PDF</h2>
                <p>Подборка из <?php echo esc_html(count($zinchenko['pdf_articles'] ?? [])); ?> документов. Файлы можно читать на сайте или открыть отдельно в браузере.</p>
            </div>
            <a class="zinchenko-button" href="<?php echo esc_url(mbio_zinchenko_url('pdf-articles')); ?>">Перейти к статьям <span aria-hidden="true">→</span></a>
        </section>
    </div>
</main>

<?php get_footer(); ?>
