<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>

<?php get_header(); ?>
<main>
    <section>
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>


                <!-- 投稿の一覧を表示する -->
                <ul>
                    <li>
                        <a href='<?php the_permalink(); ?>'>
                            <?php the_title(); ?>
                        </a>
                    </li>

                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail', array('class' => 'archive_thumbnail'));
                    }
                    ?>


                </ul>


            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>