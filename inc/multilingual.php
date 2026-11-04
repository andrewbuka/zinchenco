<?php
/**
 * Theme integration for manually maintained Polylang translations.
 * The site keeps working in Russian until Polylang is installed and configured.
 */

function mbio_theme_strings() {
    return array(
        'Адрес',
        'Аспирантура и докторантура',
        'Буклет',
        'Версия для слабовидящих',
        'Выбор языка',
        'Главная',
        'Издания и публикации',
        'Институт',
        'Институт микробиологии НАН Беларуси',
        'История',
        'История Института',
        'Книги и монографии',
        'Книги и публикации',
        'Коллекция микроорганизмов',
        'Контакты',
        'Контакты подробно',
        'Конференции',
        'Купить продукцию (физ. лица)',
        'Купить продукцию (юр. лица)',
        'Личный прием',
        'Навигационная цепочка',
        'Направления и задачи',
        'Наши ученые',
        'Новости',
        'Обращения',
        'Общественное объединение Микробиологическое общество',
        'Общественные объединения',
        'Объекты интеллектуальной собственности',
        'Первичная профсоюзная организация Института',
        'Первичная профсоюзная организация Института микробиологии НАН Беларуси',
        'Пн - Чт: 9:00 - 18:00, Пт: 9:00 - 15:55',
        'Политика в отношении обработки персональных данных',
        'Почтовый портал',
        'Продукция',
        'Публикации',
        'Совет молодых ученых',
        'Совет по защите диссертаций',
        'Сборники научных трудов',
        'Структура института',
        'Телефон',
    );
}

add_action( 'init', 'mbio_register_theme_strings', 20 );
function mbio_register_theme_strings() {
    if ( ! function_exists( 'pll_register_string' ) ) {
        return;
    }

    foreach ( mbio_theme_strings() as $string ) {
        pll_register_string( 'mbio_' . md5( $string ), $string, 'Тема сайта' );
    }
}

function mbio_t( $string ) {
    return function_exists( 'pll__' ) ? pll__( $string ) : $string;
}

function mbio_current_language() {
    $language = function_exists( 'pll_current_language' ) ? pll_current_language() : false;
    return $language ? $language : 'ru';
}

function mbio_home_link() {
    if ( function_exists( 'pll_home_url' ) && function_exists( 'pll_current_language' ) ) {
        return pll_home_url( mbio_current_language() );
    }

    return home_url( '/' );
}

function mbio_translated_post_id( $post_id ) {
    if ( function_exists( 'pll_get_post' ) ) {
        $translation_id = pll_get_post( (int) $post_id );
        if ( $translation_id ) {
            return $translation_id;
        }
    }

    return $post_id;
}

function mbio_page_link( $page_id ) {
    return get_page_link( mbio_translated_post_id( $page_id ) );
}

function mbio_language_switcher() {
    if ( ! function_exists( 'pll_the_languages' ) ) {
        return '';
    }

    $languages = pll_the_languages( array( 'raw' => 1, 'hide_if_no_translation' => 1 ) );
    if ( ! is_array( $languages ) || count( $languages ) < 2 ) {
        return '';
    }

    $html = '<nav class="mbio-language-switcher" aria-label="' . esc_attr( mbio_t( 'Выбор языка' ) ) . '"><ul>';
    foreach ( $languages as $language ) {
        if ( empty( $language['slug'] ) || empty( $language['url'] ) ) {
            continue;
        }

        $code = strtoupper( $language['slug'] );
        $name = isset( $language['name'] ) ? $language['name'] : $code;
        $html .= '<li>';
        if ( ! empty( $language['current_lang'] ) ) {
            $html .= '<span aria-current="page" title="' . esc_attr( $name ) . '">' . esc_html( $code ) . '</span>';
        } else {
            $html .= '<a href="' . esc_url( $language['url'] ) . '" hreflang="' . esc_attr( $language['slug'] ) . '" lang="' . esc_attr( $language['slug'] ) . '" aria-label="' . esc_attr( $name ) . '">' . esc_html( $code ) . '</a>';
        }
        $html .= '</li>';
    }

    return $html . '</ul></nav>';
}
