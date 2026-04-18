 <?php echo '【テンプレート】' . basename(__FILE__); ?>

 <?php get_header(); ?>



 <main id="front-page">

   <!-- <a href="" class="works_item"></a> -->
   <?php
    $query = new WP_Query(
      array(
        'post_type' => 'sweets',
        'posts_per_page' => 1,
      )
    );
    ?>

   <?php
    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
    ?>

       <a href="<?php the_permalink(); ?>" class="works_item">
         <?php the_post_thumbnail('thumbnail', array('class' => 'works_thumbnail')); ?>
         <h2 class="works_title"><?php the_title(); ?></h2>
       </a>

   <?php
      endwhile;
    endif; ?>

   <?php wp_reset_postdata(); // クエリのリセット 
    ?>

 </main>

 <?php get_footer(); ?>