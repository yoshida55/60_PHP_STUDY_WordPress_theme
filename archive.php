<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>

<main>
  <h1 class="page_title">お知らせ</h1>
  <section class="news_section">

    <?php if (have_posts()): ?>

      <!-- 投稿がある場合、最後までループする -->
      <?php while (have_posts()) : the_post(); ?>

        <!-- クリックを押した時に記事に飛ばせる機能・不明 -->
        <?php
        $related_id = get_post_meta(get_the_ID(), 'related_test_id', true);
        $url = $related_id ? get_permalink($related_id) : get_permalink();
        ?>

        <!-- 上記で取得した、URLをリンクに設定すしaタグを生成 　-->
        <a href="<?php echo $url; ?>" class="news_item">

          <!-- サムネイルへのリンクを表示する -->
          <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('large', array('class' => 'news_img')); ?>
          <?php else: ?>
            <img src="<?php echo get_theme_file_uri('img/news.jpg'); ?>" alt="" class="news_img">
          <?php endif; ?>


          <!-- ニュースエリアを設定する -->
          <div class="news_info">
            <div class="news_meta">
              <time class="news_date"><?php the_time('Y.m.d'); ?></time>
              <p class="author"><?php the_author(); ?></p>
            </div>
            <h3 class="news_title"><?php the_title(); ?></h3>

            <!-- Uncategorized以外のカテゴリを表示すうｒ -->
            <ul class="news_category">
              <?php $categories = get_the_category(); ?>
              <?php
              foreach ($categories as $category) {
                // Uncategorizedと一致した場合、表示
                if ($category->name != 'Uncategorized'):
                  echo "<li>" . esc_html($category->name)  . "</li>";
                endif;
              }
              ?>
            </ul>
          </div>

          <!-- カテゴリを取得・全カテゴリをいっきに取得（なおget_the_categoryはひとつづつ取得） -->



        </a>



      <?php endwhile; ?>

      <ul>

        <?php
        $allCategorys = get_categories();
        foreach ($allCategorys as $category):
          echo '<li class= "allCategory">' . esc_html($category->name)  . '</li>';
        endforeach;
        ?>

      </ul>

      <!-- 画面？から取得したcategoryから全カテゴリの値を抽出して表示する -->
      <ul>
      <?php  
        // 画面から入力されたカテゴリID（名）を取得、
        // get_categoriesで、カテゴリ全てを取得
        $current_cat_id = get_queried_object_id();
        $categories = get_categories();


        // ---------------------------------------------------
        // ようするにカテゴリのオブジェクトから、ID,名前を取得
        // さらに、get_categori_url(オブジェクト)URLを取得するだけ
        // ---------------------------------------------------

        // 全カテゴリから一つずつIDを取得($categoryOne・・・全カテゴリのなかの一つ「画面のカテゴリ」ではない)
        foreach($categories as $categoryOne):
          // クラス取得変数
          // もしもカテゴリ（全部の中の一つ）と管理画面で選ばれえたIDが一緒なら、クラス名をセット
        $class = ($categoryOne->term_id == $current_cat_id) ? "c_link": "";
        
        // URLを取得
        $url = esc_url(get_category_link($categoryOne));
        // 名前を取得
        $name = esc_html($categoryOne->name)


        // HTMLを表示
        echo "<li class=" . $class .'"' .">";
        echo "<a class=" 


        

// // ① まず必要なデータを変数に入れる
// $current_cat_id = get_queried_object_id();
// $categories     = get_categories();

// foreach ( $categories as $category ) {

//     // ② クラス名を決める（三項演算子）
//     $class = ( $category->term_id == $current_cat_id ) ? 'current-category' : '';

//     // ③ URLと名前も変数に入れる ← ここがポイント！
//     $url  = esc_url( get_category_link( $category ) );
//     $name = esc_html( $category->name );

//     // ④ echoはシンプルに
//     echo '<li class="' . $class . '">';
//     echo '<a class="category_link" href="' . $url . '">' . $name . '</a>';
//     echo '</li>';
// }

        
      </ul>

    <?php endif; ?>

    <?php the_posts_pagination(); ?>

  </section>
</main>

<?php get_footer(); ?>