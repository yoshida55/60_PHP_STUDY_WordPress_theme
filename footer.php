<footer class="footer">
    <small class="footer_text">&copy; Test株式会社 All Rights Reserved.</small>
    <?php if (is_archive()) : ?>
        <!-- アーカイブphpの時だけ、お知らせの上位三つの見出しを書く -->

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>
                <h2><?php the_title(); ?></h2>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>


    <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>