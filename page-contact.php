<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>

<?php get_header(); ?>


<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main>
      <h1 class="page_title">お問い合わせ</h1>


      <div class="form_wrap">
        <!-- <form action=""> -->
        <?php echo do_shortcode('[contact-form-7 id="86df0b3"]') ?>

      </div>

    </main>
  <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>