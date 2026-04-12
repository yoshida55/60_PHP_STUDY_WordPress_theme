<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>
<main class="archive_main">
  <section class="archive_section">
    <ul>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="archive_item">
            <?php $category = get_the_category();
            if ($category) {
              echo '<span class="category">' . esc_html($category[0]->name) . '</span>';
            }; ?>
            <a class="archive_permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_post_thumbnail('thumbnail', array('class' => 'archive_thumbnail')); ?>
          </li>

        <?php endwhile; ?>
      <?php else : ?>
        <li>記事が見つかりませんでした。</li>
      <?php endif; ?>
    </ul>


  </section>
  <!-- ページネーション -->
  <div class="pagination">
    <?php
    $args = array(
      'mid_size'           => 1,
      'prev_text'          => '«',
      'next_text'          => '»',
      'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>
  </div>
</main>




<?php get_footer(); ?>