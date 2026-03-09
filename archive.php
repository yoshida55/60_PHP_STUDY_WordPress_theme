<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>

  <?php $categories = get_the_category(); ?>
  <?php $firstCategory = $categories[0]->name; ?>
  

<main>
    <h1 class="page_title">お知らせ</h1>
    <section class="news_section">
        

        <!-- ここから記事 -->
        <?php while( have_posts()): the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="news_item">


        
        <!-- サムネイル -->
            <?php if (has_post_thumbnail()){ ?>              
                <?php the_post_thumbnail('thumbnail', ['class' => 'news_img']) ?>
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="" class="news_img">
            <?php } ?>   
  

            <div class="news_info">
                
                <!-- 登校日と著者 -->
                <div class="news_meta">
                    <time class="news_date"><?php the_time('Y.m.d'); ?></time>
                    <p class="author"><?php the_author(); ?></p>
                </div>
                <h3 class="news_title"><?php the_title(); ?></h3>
                
                <!-- 記事についたカテゴリー -->
                <!-- <ul class="news_category">
                    <?php $categories = get_the_category();
                    foreach($categories as $category){
                        echo '<li class="news_test">'. $category->cat_name .'</li>';
                    } 
                    ?>
                </ul> -->

                <!-- 記事のカテゴリ データがある場合だけ表示する-->
                <?php 
                // if ( ! empty( $categories ) ) {
                //     echo '<li>' . esc_html( $categories[0]->name ) . '</li>';
                // } else {
                //     echo '<li>カテゴリなし</li>';
                // } 
                ?>


                <ul class="news_category">
                <!-- カテゴリ２ -->
                 <?php $categories = get_the_category(); ?>
                 <?php foreach($categories as $category){
                    if($category->name !== 'Uncategorized'){
                        echo '<li class="news_test">'. $category->cat_name .'</li>';
                 }};
                 ?>
                </ul>




            </div>






        </a>

        <?php endwhile ?>



        <!-- ここまで記事 -->

        <!-- ページネーション -->
        <?php the_posts_pagination(); ?>
    </section>

</main>

<?php get_footer();?>