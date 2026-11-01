<?php
/** Helpers shared by the Zinchenko profile and publication pages. */

function mbio_zinchenko_data() {
    static $data = null;

    if ($data === null) {
        $file = get_theme_file_path('data/zinchenko.php');
        $loaded = is_readable($file) ? require $file : null;
        $data = is_array($loaded) ? $loaded : [];
    }

    return $data;
}

function mbio_zinchenko_url($section = '') {
    $path = 'zinchenko' . ($section ? '/' . $section : '');
    $page = get_page_by_path($path, OBJECT, 'page');

    return $page && $page->post_status === 'publish'
        ? get_permalink($page)
        : home_url('/' . $path . '/');
}

function mbio_zinchenko_pdf_url($filename) {
    return trailingslashit(get_theme_file_uri('assets/zinchenko'))
        . rawurlencode('Статьи') . '/' . rawurlencode($filename);
}

function mbio_zinchenko_entry_count($count) {
    $last_two = $count % 100;
    $last = $count % 10;
    $word = ($last_two >= 11 && $last_two <= 14) ? 'записей'
        : ($last === 1 ? 'запись' : (($last >= 2 && $last <= 4) ? 'записи' : 'записей'));

    return number_format_i18n($count) . ' ' . $word;
}

add_action('wp_enqueue_scripts', function () {
    if (!is_page('zinchenko') && !is_page_template('page-zinchenko.php')
        && !is_page_template('page-zinchenko-publications.php')) {
        return;
    }

    $path = get_theme_file_path('assets/css/zinchenko.css');
    wp_enqueue_style(
        'mbio-zinchenko',
        get_theme_file_uri('assets/css/zinchenko.css'),
        [],
        is_file($path) ? (string) filemtime($path) : null
    );
}, 20);
