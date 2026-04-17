<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>

<main style="background: yellow; flex: 1;"> <!-- 他テンプレートと統一 -->
    <div class="news_wrap">
        <h1 class="news_title">これは single-test.php です</h1>
        <div class="news_content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>