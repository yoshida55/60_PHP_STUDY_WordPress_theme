<?php echo '【テンプレート】' . basename(__FILE__); ?>

<?php get_header(); ?>
<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <?php if (is_archive() && has_post_thumbnail()): ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>

    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>




  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>