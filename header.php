<!DOCTYPE html>
<html>
    <head>
        <title>JURI OKAMURA's PORTFORIO</title>
        <meta charset="utf-8">
        <meta name="description" content="'理想をカタチに。'webデザイナー、岡村樹里のポートフォリオサイトです。">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="header-area">
                <h1>JURI<br>OKAMURA</h1>
                <!-- ハンバーガーメニュー -->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav>
                <!-- ヘッダーにメニューを表示 -->
                <?php $args =array(
                    'theme_location' => 'header_nav',
                );
                wp_nav_menu($args);
                ?>
                </nav>
            </div>
        </header>
