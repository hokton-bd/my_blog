<?php 

function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');


function my_script_init() {

    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', array(), '5.15.1', 'all' );
    wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/index.min.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array('jquery'), '3.4.1',  true);
    wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'my_script_init');


function my_menu_init() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
            'footer' => 'フッターメニュー',
        )
        );
}

add_action('init', 'my_menu_init');


function my_widget_init() {
    register_sidebar(
        array(
            'name' => 'サイドバー',
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title">',
            'after_title' => '</div>',
        )
        );
}

add_action('widgets_init', 'my_widget_init');


; ?>