<?php echo '【テンプレート】' . basename(__FILE__) . " <br>"; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>初めてのテーマづくり</title>
  <?php wp_head(); ?>
  <?php if (is_front_page()): ?>
    <?php echo 'aaaa' ?>
  <?php endif; ?>
</head>


<body>

  <header class="header">
    <nav class="header_nav">
      <ul class="header_nav_list">
        <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
        <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/about/')); ?>">会社概要</a></li>
        <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a></li>
        <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
        <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせa</a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>" class="global_menu_link">リンクワークスとは</a></li>
      </ul>
    </nav>
  </header>

  <header>
    <a href="">
      <h1 class="head_logo"><img src="<?php echo get_theme_file_uri('/img/logo.png') ?>" alt=""></h1>
    </a>




    <div class="menu_wrapper">
      <input type="checkbox" id="menu_toggle" hidden>

      <label class="menu_icon" for="menu_toggle">
        <span class="navi_menu">MENU</span>
        <span></span>
        <span></span>
        <span></span>
      </label>

      <div class="overlay"></div>
      <nav class="header_nav">
        <ul class="header_nav_list">
          <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/about/')); ?>">会社概要</a></li>
          <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a></li>
          <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
          <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>" class="global_menu_link">リンクワークスとは</a></li>
        </ul>
      </nav>

      <nav class="menu">
        <ul class="head_container">
          <a href="">
            <li>リンクワークスとは</li>
          </a>
          <a href="">
            <li>事業所の紹介</li>
          </a>
          <a href="">
            <li>お仕事内容</li>
          </a>
          <a href="">
            <li>ご利用案内
            </li>
          </a>
          <a href="">
            <li>募集要項</li>
          </a>
          <a href="">
            <li>お知らせ</li>
          </a>
          <a href="">
            <li>アクセス</li>
          </a>
          <a href="">
            <li>お問い合わせ</li>
          </a>
        </ul>
      </nav>
  </header>