<?php
/**
 * Run once with WP-CLI: wp eval-file scripts/setup-zinchenko-pages.php
 *
 * Creates the parent profile and its six child pages if they are absent.
 * Existing pages and their content are never changed.
 */

if (!defined('WP_CLI')) {
    exit("Run this script with WP-CLI.\n");
}

$data_file = get_theme_file_path('data/zinchenko.php');
$data = is_readable($data_file) ? require $data_file : null;
if (!is_array($data) || count($data['categories'] ?? []) !== 5) {
    WP_CLI::error('The Zinchenko content data is missing or incomplete.');
}

function mbio_zinchenko_ensure_page($path, $title, $slug, $parent_id, $template, $order) {
    $existing = get_page_by_path($path, OBJECT, 'page');
    if ($existing) {
        WP_CLI::log('Existing page: ' . $path . ' (' . $existing->ID . ')');
        return (int) $existing->ID;
    }

    $id = wp_insert_post([
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_title' => $title,
        'post_name' => $slug,
        'post_parent' => $parent_id,
        'post_content' => '',
        'comment_status' => 'closed',
        'menu_order' => $order,
    ], true);
    if (is_wp_error($id)) {
        WP_CLI::error('Could not create ' . $path . ': ' . $id->get_error_message());
    }
    update_post_meta($id, '_wp_page_template', $template);
    WP_CLI::log('Created page: ' . $path . ' (' . $id . ')');
    return (int) $id;
}

$parent = mbio_zinchenko_ensure_page(
    'zinchenko', $data['name'], 'zinchenko', 0, 'page-zinchenko.php', 0
);

foreach ($data['categories'] as $index => $category) {
    mbio_zinchenko_ensure_page(
        'zinchenko/' . $category['slug'],
        $category['title'],
        $category['slug'],
        $parent,
        'page-zinchenko-publications.php',
        $index + 1
    );
}

mbio_zinchenko_ensure_page(
    'zinchenko/pdf-articles', 'Статьи в PDF', 'pdf-articles', $parent,
    'page-zinchenko-publications.php', 6
);
