<?php echo '【テンプレート】' . basename(__FILE__) . " <br>"; ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>



<body>
  <header class="header">
    <nav class="header_nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container'      => false,
        'menu_class'     => 'header_nav_list',
      ));
      ?>
    </nav>
  </header>