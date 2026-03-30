<?php echo '【テンプレート】' . basename(__FILE__); ?>
<?php get_header(); ?>

<main>
  <h1 class="page_title">お知らせ</h1>
  <section class="news_section">

    <ul class="post-categories">
      <li><a href="カテゴリーアーカイブページのURL" rel="category tag">カテゴリー名○○</a></li>
      <li><a href="カテゴリーアーカイブページのURL" rel="category tag">カテゴリー名△△</a></li>
    </ul>

    <ul class="post-categories">
      <li><a href="カテゴリーアーカイブページのURL" rel="category tag">カテゴリー名○○</a></li>


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
              <img src="<?php echo get_theme_file_uri('img/chrome_P6loBCP3hY.png'); ?>" alt="" class="news_img">
            <?php endif; ?>


            <!-- ニュースエリアを設定する 取得した記事のタイトル・カテゴリなどを表示(Uncategorized)以外-->
            <div class="news_info">
              <div class="news_meta">
                <time class="news_date"><?php the_date('Y.n.j'); ?></time>
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





          </a>

          <?php
          // 表示されているカテゴリを取得
          $theCategoriesId = get_queried_object_id();

          $allCategories = get_categories();
          foreach ($allCategories as $category):

            if ($theCategoriesId == $category->term_id):
              echo "<a href='" . esc_url(get_category_link($category)) . "' class='current_category'>" . esc_html($category->name)  . "</a>";
            else:
              echo "<a href='" . esc_url(get_category_link($category)) . "' class='other_category'>" . esc_html($category->name)  . "</a>";
            endif;

          endforeach;

          ?>


          <ul class="category">

            <?php $cateS = get_categories();
            foreach ($cateS as $cate) {
              echo '<li><a href="' . esc_url(get_category_link($cate)) . '">' . esc_html($cate->name) . '</a></li>';



              echo '<li><a href="' . esc_url(get_category_link($cate)) . '">' . esc_html($cate->name) . '</a></li>';
            }
            ?>

          </ul>


          <!-- 要するに、以下を表示したい -->
          <ul>
            <li class="news_category"><a href="カテゴリURL" target="blank"></a></li>

            <li><a href="カテゴリのURL">カテゴリ名</a>
            <li>
          </ul>




        <?php endwhile; ?>




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
          foreach ($categories as $categoryOne):
            // クラス取得変数
            // もしもカテゴリ（全部の中の一つ）と管理画面で選ばれえたIDが一緒なら、クラス名をセット
            $class = ($categoryOne->term_id == $current_cat_id) ? "c_link" : "";

            // URLを取得
            $url = esc_url(get_category_link($categoryOne));
            // 名前を取得
            $name = esc_html($categoryOne->name);


            // HTMLを表示
            echo '<li class="' . $class . '">';
            echo '<a class="test_link" href="' . $url . '">' . $name . '</a>';

            echo "</li>";

          endforeach;
          ?>

        </ul>


        <ul>
          <?php
          // // 画面から入力されたカテゴリID（名）を取得、
          // // get_categoriesで、カテゴリ全てを取得
          // $current_cat_id = get_queried_object_id();
          // $categories = get_categories();

          $getCategory =  get_queried_object_id()

          ?>
        </ul>


        <ul>
          <?php
          // // 画面から入力されたカテゴリID（名）を取得、
          // // get_categoriesで、カテゴリ全てを取得

          // $current_cat_id = get_queried_object_id();
          // $categories = get_categories();


          // // ---------------------------------------------------
          // // ようするにカテゴリのオブジェクトから、ID,名前を取得
          // // さらに、get_categori_url(オブジェクト)URLを取得するだけ
          // // ---------------------------------------------------

          // // 全カテゴリから一つずつIDを取得($categoryOne・・・全カテゴリのなかの一つ「画面のカテゴリ」ではない)
          // foreach ($categories as $categoryOne):
          //   // クラス取得変数
          //   // もしもカテゴリ（全部の中の一つ）と管理画面で選ばれえたIDが一緒なら、クラス名をセット
          //   $class = ($categoryOne->term_id == $current_cat_id) ? "c_link" : "";

          //   // URLを取得
          //   $url = esc_url(get_category_link($categoryOne));
          //   // 名前を取得
          //   $name = esc_html($categoryOne->name);


          //   // HTMLを表示
          //   echo '<li class="' . $class . '">';
          //   echo '<a class="test_link" href="' . $url . '">' . $name . '</a>';

          //   echo "</li>";

          // endforeach;

          ?>
        </ul>

        <!-- 
      // // ① まず必要なデータを変数に入れる
      // $current_cat_id = get_queried_object_id();
      // $categories = get_categories();

      // foreach ( $categories as $category ) {

      // // ② クラス名を決める（三項演算子）
      // $class = ( $category->term_id == $current_cat_id ) ? 'current-category' : '';

      // // ③ URLと名前も変数に入れる ← ここがポイント！
      // $url = esc_url( get_category_link( $category ) );
      // $name = esc_html( $category->name );

      // // ④ echoはシンプルに
      // echo '<li class="' . $class . '">';
        // echo '<a class="category_linpk" href="' . $url . '">' . $name . '</a>';
        // echo '</li>';
      // } -->



    </ul>



  <?php endif; ?>

  <?php $args = array(
    'mid_size' => 1,
    'prev_text' => "<<",
    'next_text' => '>>',
    'screen_reader_text' => ' ',
  );
  the_posts_pagination($args); ?>


  </section>
</main>

<?php get_footer(); ?>