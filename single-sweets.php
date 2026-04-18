<?php get_header(); ?>

<main style="flex: 1;">
  <section class="single_wrap">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <h1 class="single_title"><?php the_title(); ?></h1>

        <!-- 記事の詳細を取得 -->
        <?php the_content(); ?>

        <!-- アイキャッチ画像を取得 -->
        <?php if (has_post_thumbnail()) {
          the_post_thumbnail('thumbnail', array('class' => 'single_thumbnail'));
        } ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>