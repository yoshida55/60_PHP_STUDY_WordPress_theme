<?php get_header(); ?>

<main>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="contact_content">
                <!-- CF7ショートコードを管理画面のページ本文に貼ればここに表示される -->
                <?php the_content(); ?>
            </div>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>