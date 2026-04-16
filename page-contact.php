<?php get_header(); ?>

<main>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="contact_content">
                <?php the_content(); ?>

                <!-- 通常のHTMLフォームを使う場合 -->
                <?php get_template_part('template-parts/contact-form'); ?>

                <!-- またはContact Form 7ショートコードを使う場合 -->
                <!-- 管理画面でショートコードをページ本文に貼る -->
            </div>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>