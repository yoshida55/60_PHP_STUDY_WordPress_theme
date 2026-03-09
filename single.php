<!-- ブラウザで該当のファイル名を表示する -->
<?php echo '【テンプレート】' . basename(__FILE__)."<br>"; ?>

<?php get_header(); ?>

<!-- ループ内のグローバルを宣言 -->
<?php global $wp_query; ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <main>

    <div class="page_title">お知らせ</div>

    <section class="news_wrap">
      <ul class="news_category">
        <li><?php the_category(', '); ?></li>
      </ul>
      <h1 class="news_title">ブログのタイトル</h1>
      <div class="news_meta">
        <time class="news_date" datetime="2025-5-16">2025.05.16</time>
        <p class="author">田中太郎</p>
      </div>
  
      <div class="news_content">
        <?php the_title(); ?>
        <?php the_content(); ?>
      </div>


    </section>
  </main>


 



    <?php endwhile;?>
<?php endif;?>

<?php get_footer();?>