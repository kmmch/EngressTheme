<?php

// アイキャッチを有効化
add_theme_support('post-thumbnails');


// カスタムスタイル・スクリプトを読み込む
function custom_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('script_js', get_template_directory_uri().'/scripts/script.js', array());
    wp_enqueue_style('style_css', get_template_directory_uri().'/styles/style.css', array());
    wp_enqueue_style('reset_css', get_template_directory_uri().'/styles/vendor/reset.css', array());
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');


// ページタイトルを取得して表示する
add_theme_support('title-tag');

function top_only_title($title) {
    if (is_home()) {
        $title['tagline'] = '';
    }
    return $title;
}
add_filter('document_title_parts', 'top_only_title');

add_filter('document_title_separator', 'title_separator');
function title_separator($separator){
	$separator = '|'; 
	return $separator;
}


// ヘッダー・フッターのカスタムメニュー化
register_nav_menus (
    array(
        'place_header_menu' => 'ヘッダーメニュー',
        'place_footer_menu' => 'フッターメニュー',
    )
);


// 参考：https://zenn.dev/minnanowp/articles/823e3eabd24f20
// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


// 特定の記事を抽出する
function get_specific_posts($post_type, $taxonomy=null, $term=null, $number=-1){
    $args = array(
        'post_type' => $post_type,
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term,
            ),
        ),
        'posts_per_page' => $number,
    );
    $specific_post = new WP_Query($args);
    return $specific_post;
}


// ブログ一覧で本文を任意の文字数のみ表示する
function get_content_defined_count($count=1, $content) {
    // 取得がした本文が任意の文字数以上であれば、
    // 切り出し後の本文の末尾に「...」をつける。
    $content_length = mb_strlen($content);

    $content_tail = '';
    if($content_length > $count) {
        $content_tail = '...';
    }

    $result = mb_substr($content, 0, $count-1);
    
    $result .= $content_tail;

    return $result;
}



/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );