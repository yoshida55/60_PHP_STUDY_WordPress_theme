<!-- ブラウザで該当のファイル名を表示する -->
<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>
<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>

<?php get_header(); ?>

<!-- ループ内のグローバルを宣言 -->
<?php global $wp_query; ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main>

      <div class="page_title">お知らせ</div>

      <section class="news_wrap">
        <ul class="news_category">
          <li><?php the_category(', '); ?></li>
        </ul>
        <h1 class="news_title"><?php the_title(); ?></h1>
        <div class="news_meta">
          <time class="news_date" datetime="2025-4-27"><?php the_date('Y.n.j'); ?></time>
          <p class="author"><?php the_author(); ?></p>
        </div>


        <a href="<?php the_permalink(); ?>" class="news_item"></a>

        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('large', array('class' => 'news_img')); ?>
        <?php else: ?>
          <img src="<?php echo get_theme_file_uri('/img/news.jpg'); ?>" alt="" class="new_msg">
        <?php endif; ?>

        <div class="news_content">
          <?php the_title(); ?>
          <?php the_content(); ?>
        </div>


      </section>
    </main>






  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>