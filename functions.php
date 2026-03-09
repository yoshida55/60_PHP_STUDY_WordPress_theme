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
  };

  wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
  }

  wp_enqueue_style('archive', get_template_directory_uri() . '/css/archive.css');

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
/* ✨
**はい、覚える必要はあります。**

理由は以下の通りです。

1.  **WordPress開発の必須知識:** テーマを作成・カスタマイズする際、アイキャッチ画像や投稿フォーマットなどの機能を有効化するために必ず使う関数だからです。
2.  **頻出する:** どのテーマ開発でもほぼ確実に記述するため、いちいち調べる手間を省くために覚えておくと効率的です。

ただし、丸暗記するよりも「`functions.php` でテーマの機能を許可（サポート）させるための関数」という役割を理解しておくことが重要です。
*/

/* ✨
`add_theme_support`は、WordPressテーマで**特定の機能（アイキャッチ画像、投稿フォーマット、HTML5など）を有効にするための関数**です。

`functions.php`内で使用し、テーマがサポートする機能をWordPress本体に登録するために使われます。
*/
