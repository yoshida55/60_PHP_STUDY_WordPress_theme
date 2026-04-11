<!-- ブラウザで該当のファイル名を表示する -->
<?php echo '【テンプレート】' . basename(__FILE__) . "<br>"; ?>

<?php get_header(); ?>

<section>
    <?php
    if (have_posts()):
        while (have_posts()): the_post();

            // カテゴリーの取得/表示
            $getCategory = get_the_category();
            if ($getCategory):
                foreach ($getCategory as $category) {
                    echo '<p class="single_category">' . esc_html($category->name) . '</p>';
                }
            endif;

            // タイトルの取得/表示
            the_title('<h1 class="single_title">', '</h1>');

            // 投稿日の取得/表示
            echo '<p class="single_date">' . esc_html(get_the_date()) . '</p>';

            // アイキャッチ画像の取得/表示
            if (has_post_thumbnail()):
                the_post_thumbnail('full', array('class' => 'single_thumbnail'));
            endif;

            // 本文の取得/表示
            the_content();

            echo '<a href="' . esc_url(home_url('/news/')) . '" class="single_back">一覧へ戻る</a>';


        endwhile;
    endif;
    ?>

</section>

<?php get_footer(); ?>