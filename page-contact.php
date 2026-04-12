<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>

<main>
  <section>
</main>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main>
      <h1 class="page_title">お問い合わせ</h1>


      <div class="form_wrap">
        <!-- <form action=""> -->
        <?php echo do_shortcode('[contact-form-7 id="e4d28d7"]') ?>

      </div>
    </main>

  <?php endwhile; ?>
<?php endif; ?>
</section>
</main>
<?php get_footer(); ?>