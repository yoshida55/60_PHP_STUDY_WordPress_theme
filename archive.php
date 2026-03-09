<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>

<main>
    <h1 class="page_title">お知らせ</h1>
    <section class="news_section">

        <!-- カテゴリーによる絞り込み -->
        <ul class="category_list">
            <?php 
            $categories = get_categories();
            foreach($categories as $category){
                echo '<li><a class="category_link" href="' . esc_url(get_category_link($category)) . '">' .
                esc_html($category->name) . '</a></li>';
            }
            ?>
        </ul>
        
            <li><a class="category_link">イベント</a></li>
            <li><a class="category_link">グルメ</a></li>
        </ul>

        <!-- ここから記事 -->
        <?php while( have_posts()): the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="news_item">

  
            
            <?php if (has_post_thumbnail()){ ?>              
                <?php the_post_thumbnail('thumbnail', ['class' => 'news_img']) ?>
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/news.jpg" alt="" class="news_img">
            <?php } ?>   
  

            <div class="news_info">
                <div class="news_meta">
                    <time class="news_date"><?php the_time('Y.m.d'); ?></time>
                    <p class="author"><?php the_author(); ?></p>
                </div>
                <h3 class="news_title"><?php the_title(); ?></h3>
                
                <!-- 記事についたカテゴリー -->
                <ul class="news_category">
                    <?php $categories = get_the_category();
                    foreach($categories as $category){
                        echo '<li>'. $category->cat_name .'</li>';
                    } 
                    ?>
                </ul>
            </div>
            </ul class="post_category">
                <li><?php echo get_the_category_list(', '); ?></li>
        </a>

        <?php endwhile; ?>



        <!-- ここまで記事 -->

        <!-- ページネーション -->
        <?php the_posts_pagination(); ?>
    </section>

</main>

<?php get_footer();?>