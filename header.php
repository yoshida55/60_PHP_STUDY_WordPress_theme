<?php echo '【テンプレート】' . basename(__FILE__) . " <br>"; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>初めてのテーマづくり</title>
  <?php wp_head(); ?>
  <?php if (is_front_page()): ?>
    <?php echo esc_html('aaaa'); ?>
  <?php endif; ?>
</head>



<body>

  <header class="header">
    <nav class="h``eader_nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container'      => false,
        'menu_class'     => 'header_nav_list',
      ));
      ?>
    </nav>
  </header>