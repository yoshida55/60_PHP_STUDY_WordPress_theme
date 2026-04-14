<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>
<main class="archive_main">

  <!-- 全カテゴリの一覧を表示する -->
  <h2 class="archive_title">【カテゴリ一覧】</h2>
  <ul class="archive_category_list">
    <?php
    $categories = get_categories(array('hide_empty' => false));
    foreach ($categories as $category) {
      echo '<li class="archive_category_item">' . esc_html($category->name) . '</li>';
    }
    ?>
  </ul>

  <br>
  <br>

  <!-- 特定のカテゴリで絞る -->
  <h2 class="archive_title">【特定のカテゴリで絞る】</h2>

  <?php

  $args = array(
    'category_name' => 'これがでればOK', // カテゴリースラッグを指定
    'posts_per_page' => 5, // 表示する記事数を指定
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    echo '<ul class="archive_category_query">';
    while ($query->have_posts()) {
      $query->the_post();

      // カテゴリー名を取得する。そのカテゴリ―が複数ある場合は最初のものを表示する。
      the_title();
    }
    echo '</ul>';
    wp_reset_postdata();
  } else {
    echo '記事が見つかりませんでした。';
  }

  ?>

  <br>

  <!-- 全投稿の最新の３件だけを表示する -->
  <h2 class="archive_title">【全投稿の最新の３件】</h2>
  <section class="archive_section">
    <ul>
      <?php
      $args = array(
        'posts_per_page' => 2, // 最新の3件を取得
      );
      $latest_posts = new WP_Query($args);
      if ($latest_posts->have_posts()) :
        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
          <li class="archive_item">
            <a class="archive_permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_post_thumbnail('thumbnail', array('class' => 'archive_thumbnail')); ?>
          </li>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <li>記事が見つかりませんでした。</li>
      <?php endif; ?>
    </ul>
  </section>



  <!-- 全投稿の一覧を表示する -->
  <h2 class="archive_title">【全投稿の一覧】</h2>
  <section class="archive_section">
    <ul>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="archive_item">get_the_category
            <?php $category = get_the_category(); ?>

            // カテゴリを表示
            the_category();

            <div class="archive_category_list">
              <?php echo esc_html(get_the_category_list(', ')); ?>
            </div>

            if ($category) {
            echo '<span class="category">' . esc_html($category[0]->name) . '</span>';
            }; ?>
            <a class="archive_permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_post_thumbnail('thumbnail', array('class' => 'archive_thumbnail')); ?>
          </li>the_permalink

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