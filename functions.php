<?php
// <title>タグを表示させる
function theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');
// CSSファイルを読み込む
function enqueue_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');