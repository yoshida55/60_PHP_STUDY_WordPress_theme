<?php

/*====================================
 * CSS読み込み
====================================*/
function enqueue_style()
{

  // wp_enqueue_style( $handle, $src)

  // wp_enqueue_styleはメソッドで決まり文句 
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

  // wp_enqueue_style( $handle, $src)の$srcは、テーマのディレクトリを取得する関数と組み合わせて書くことが多い
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

  if(is_single()){
    wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css');
  }

  wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');


  wp_enqueue_style('archive', get_template_directory_uri() . '/css/archive.css');


}

//  wp_enqueue_scriptsは、CSSとJS両方を読み込むことができるメソッド。まぎらわしい
add_action('wp_enqueue_scripts', 'enqueue_style');


/*====================================
 * JS読み込み
====================================*/
function enqueue_script()
{

  wp_enqueue_script('jquery'); //wordpressに同梱されているjQueryを読み込む
  // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);


}

add_action('wp_enqueue_scripts', 'enqueue_script');




/*====================================
 * 投稿のアーカイブページを作成
====================================*/
function set_post_archive($args, $post_type)
{ // 設定後に（パーマリンク更新すること）
  if ('post' == $post_type) {
    $args['rewrite'] = array('with_front' => false);
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'set_post_archive', 10, 2);


/*====================================
 * サムネイルを表示する（アイキャッチ画像）
====================================*/
add_theme_support('post-thumbnails');


