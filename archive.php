<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>
<main class="archive_main">
  <section>
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


    <!-- ページネーション -->
    <div class="pagination">
      <?php
      echo paginate_links(array(
        'prev_text' => '前へ',
        'next_text' => '次へ',
        'type' => 'list',
      ));
      ?>
    </div>



  </section>
</main>


<?php get_footer(); ?>