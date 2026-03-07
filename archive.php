<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>


<main>
    <h1 class="page_title">お知らせ</h1>
    <section class="news_section">

        <!-- カテゴリーによる絞り込み -->
        <ul class="category_list">
            <li><a class="category_link">イベント</a></li>
            <li><a class="category_link">グルメ</a></li>
        </ul>

        <!-- ここから記事 -->
        <a href="" class="news_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="" class="news_img">
            <div class="news_info">
                <div class="news_meta">
                    <time class="news_date">2023.10.01</time>
                    <p class="author">田中太郎</p>
                </div>
                <h3 class="news_title">お知らせタイトルが入ります。</h3>
                <!-- 記事についたカテゴリー -->
                <ul class="news_category">
                    <li>お知らせ</li>
                </ul>
            </div>
        </a>
        <!-- ここまで記事 -->

        <!-- ページネーション -->
    </section>

</main>

<?php get_footer();?>