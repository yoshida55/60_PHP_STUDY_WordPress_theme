<?php

/*====================================
 * CSS読み込み
====================================*/
function enqueue_style(){

  // wp_enqueue_style( $handle, $src)
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

}
add_action('wp_enqueue_scripts', 'enqueue_style');


/*====================================
 * JS読み込み
====================================*/
function enqueue_script(){

  wp_enqueue_script('jquery');//wordpressに同梱されているjQueryを読み込む
  // wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
  
}
add_action('wp_enqueue_scripts', 'enqueue_script');



/*====================================
 * 投稿のアーカイブページを作成
====================================*/
function set_post_archive($args, $post_type){ // 設定後に（パーマリンク更新すること）
    if ('post' == $post_type) {
        $args['rewrite'] = array('with_front' => false);
        $args['has_archive'] = 'news';
        $args['label'] = 'お知らせ';
    }
    return $args;
}
add_filter('register_post_type_args', 'set_post_archive', 10, 2);


