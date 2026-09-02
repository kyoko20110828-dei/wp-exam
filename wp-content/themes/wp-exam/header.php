<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css'); ?>
    <?php wp_head(); ?>
</head>

<body>

    <!-- ヘッダーエリア -->
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <a href="<?= home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <nav class="global-nav">
                <ul>
                    <li><a href="index.html">ホーム</a></li>
                    <li><a href="page.html">私たちについて</a></li>
                    <li><a href="archive.html">ブログ</a></li>
                </ul>
            </nav>
        </div>
    </header>