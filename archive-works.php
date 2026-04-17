<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>

<?php get_header(); ?>
<main>

  <h1 class="page_title">制作実績一覧に対する、付随するターム</h1>


  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>



      <ul>
        <!-- /それぞれに記事タイプに紐づく記事のそれぞれのタームを取得する/ -->
        <?php
        $terms = get_the_terms(get_the_ID(), 'works-category');
        foreach ($terms as $term) {
          echo '<li>' . esc_html($term->name) . '</li>';
        }
        ?>
      </ul>

      <br>

    <?php endwhile; ?>
  <?php endif; ?>

  <br>

  <div>制作実績一覧に対する、すべてのターム</div>

  <ul>
    <!-- すべてのタームを取得する -->
    <?php
    $terms = get_terms('works-category');
    foreach ($terms as $term) {
      echo '<li>' . esc_html($term->name) . '</li>';
    }
    ?>
  </ul>



</main>






<?php get_footer(); ?>