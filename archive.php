<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>
<section>
  <ul>
    <?php if (have_posts()):
      while (have_posts()): the_post();
    ?>
        <?php $categories = get_the_category(); ?>
        <li class="title"><?php echo esc_html($categories[0]->name); ?>
        </li>

        <li class="title">タイトル：<?php echo esc_html(get_the_title()); ?></li>

        <li class="category">コンテンツ：<?php the_content(); ?></li>

        <?php echo esc_url(get_permalink()); ?>

        <br>

    <?php endwhile;
    endif
    ?>
  </ul>
</section>



<?php get_footer(); ?>