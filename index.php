<?php echo '【テンプレート】' . basename(__FILE__); ?>

<?php get_header(); ?>

 <!-- 投稿があるかどうかの条件分岐 -->
<?php if (have_posts()) :

  // <!-- 投稿がある場合、全投稿を取得して最後までループする -->
  while (have_posts()) : the_post();

    // <!-- もし投稿にアイキャッチ画像が設定されている場合、アイキャッチ画像を表示する -->
    if (has_post_thumbnail()):
      the_post_thumbnail();
    endif;

    // <!-- 投稿タイトル(リンク付き)を表示する -->
    echo '<a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>';



  endwhile;
endif;

get_footer(); ?>