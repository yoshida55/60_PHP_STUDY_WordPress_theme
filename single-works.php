<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

    <main>
      <div class="page_title">制作事例</div>

      <section class="news_wrap">

        <h1 class="news_title">制作事例のタイトル</h1>
        
    
        <div class="news_content">

          <!-- 見出しパーツ -->
          <h2 class="sec_title">小見出しが入ります。</h2>
          <!-- 見出しパーツここまで -->
        
          <!-- 画像パーツ -->
          <img src="<?php echo get_theme_file_uri('/img/news.jpg'); ?>" alt="" class="news_img">
          <!-- 画像パーツここまで -->

          <!-- 段落パーツ -->
          <p>
            説明文が入ります。制作事例の詳細な内容や特徴、使用した技術、プロジェクトの目的などを詳しく記載します。クライアントの要望に応じて、どのような解決策を提供したか、どのような成果を上げたかについても触れると良いでしょう。
            例えば、ウェブサイトのデザインや開発、アプリケーションの構築、マーケティング戦略の実施など、具体的なプロジェクト内容を詳しく説明します。また、プロジェクトの成果やクライアントからのフィードバックも含めると、より説得力が増します。
          </p>
          <!-- 段落パーツここまで -->

          

          
        </div>
      </section>

    </main>

  <?php endwhile;?>
<?php endif;?>
<?php get_footer();?>