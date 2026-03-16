<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>

<main>
  <h1 class="page_title">お知らせ</h1>
  <section class="news_section">

    <?php if (have_posts()): ?>

      <?php while (have_posts()) : the_post(); ?>

        <?php
        $related_id = get_post_meta(get_the_ID(), 'related_test_id', true);
        $url = $related_id ? get_permalink($related_id) : get_permalink();
        ?>
        <a href="<?php echo $url; ?>" class="news_item">

          <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', array('class' => 'news_img')); ?>
          <?php else: ?>
            <img src="<?php echo get_theme_file_uri('img/news.jpg'); ?>" alt="" class="news_img">
          <?php endif; ?>


          <div class="news_info">
            <div class="news_meta">
              <time class="news_date"><?php the_time('Y.m.d'); ?></time>
              <p class="author"><?php the_author(); ?></p>
            </div>
            <h3 class="news_title"><?php the_title(); ?></h3>

            <!-- Uncategorized以外のカテゴリを表示すうｒ -->
            <ul class="news_category">
              <?php $categories = get_the_category(); ?>
              <?php
              foreach ($categories as $category) {
                // Uncategorizedと一致した場合、表示
                if ($category->name != 'Uncategorized'):
                  echo "<li>" . esc_html($category->name)  . "</li>";
                endif;
              }
              ?>
            </ul>
          </div>

        </a>

      <?php endwhile; ?>

    <?php endif; ?>

    <?php the_posts_pagination(); ?>

  </section>
</main>

<?php get_footer(); ?>