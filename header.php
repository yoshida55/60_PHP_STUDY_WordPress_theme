<?php echo '【テンプレート】' . basename(__FILE__)." <br>"; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>初めてのテーマづくり</title>
    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <nav class="header_nav">
        <ul class="header_nav_list">
            <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
            <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/about/')); ?>">会社概要</a></li>
            <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/works/')); ?>">制作実績</a></li>
            <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></li>
            <li class="header_nav_item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul>
    </nav>
</header>


