<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WordPressテーマ化練習用サイト | TOP</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- ヘッダーエリア -->
  <header class="site-header">
    <div class="container">
      <div class="site-logo">
        <a href="index.html">WP Practice</a>
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

  <!-- ヒーローエリア -->
  <section class="hero">
    <div class="container">
      <h1>WordPressテーマ化の練習サイト</h1>
      <p>この静的HTML/CSSをWordPressのテーマに変換する練習を行いましょう。</p>
    </div>
  </section>

  <!-- 私たちについてセクション -->
  <section class="about-section">
    <div class="container">
      <h2>私たちについて</h2>
      <p>このサイトは、静的HTML/CSSからWordPressテーマを作成するプロセスを体系的に学ぶためのデモ練習用サイトです。コーディング初心者の方に向けて、WordPress固有の記述方法や仕組みを優しく解説します。</p>
      <div class="about-btn-wrapper">
        <a href="page.html" class="btn-primary">詳しく見る</a>
      </div>
    </div>
  </section>

  <!-- メインコンテンツ -->
  <main class="content-wrapper">
    <div class="container">

      <section class="posts">
        <h2>最新の投稿（3件）</h2>
        <div class="posts-grid">
          <!-- 投稿1 -->
          <article class="post-card">
            <div class="post-card-img">No Image (Placeholder)</div>
            <div class="post-card-content">
              <div class="post-meta">
                <time class="post-date" datetime="2026-08-21">2026.08.21</time>
                <span class="post-category">ブログ</span>
              </div>
              <h3 class="post-card-title"><a href="single.html">WordPressテーマ制作の基本ルール</a></h3>
              <p class="post-card-excerpt">テーマ作成に必要な最小限のファイル構成や、style.cssに必要なヘッダーコメントの書き方について学びます。</p>
              <a href="single.html" class="read-more">詳しく見る &rarr;</a>
            </div>
          </article>
          <!-- 投稿2 -->
          <article class="post-card">
            <div class="post-card-img">No Image (Placeholder)</div>
            <div class="post-card-content">
              <div class="post-meta">
                <time class="post-date" datetime="2026-08-20">2026.08.20</time>
                <span class="post-category">ブログ</span>
              </div>
              <h3 class="post-card-title"><a href="single.html">テンプレートパーツの分割手法</a></h3>
              <p class="post-card-excerpt">header.phpやfooter.phpなど、共通部分を別ファイルに分割してget_header()などで呼び出す方法を解説します。</p>
              <a href="single.html" class="read-more">詳しく見る &rarr;</a>
            </div>
          </article>
          <!-- 投稿3 -->
          <article class="post-card">
            <div class="post-card-img">No Image (Placeholder)</div>
            <div class="post-card-content">
              <div class="post-meta">
                <time class="post-date" datetime="2026-08-19">2026.08.19</time>
                <span class="post-category">ブログ</span>
              </div>
              <h3 class="post-card-title"><a href="single.html">メインループとサブクエリの使い分け</a></h3>
              <p class="post-card-excerpt">WordPressで投稿一覧を表示する際に重要となる「ループ処理」の仕組みと、表示件数を制御する方法について学びます。</p>
              <a href="single.html" class="read-more">詳しく見る &rarr;</a>
            </div>
          </article>
      </section>

    </div>

    </div>
  </main>

  <!-- フッターエリア -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-info">
          <h3>WP Practice</h3>
          <p>WordPressテーマ化の学習用デモサイトです。</p>
        </div>
        <nav class="footer-links">
          <ul>
            <li><a href="index.html">ホーム</a></li>
            <li><a href="page.html">私たちについて</a></li>
            <li><a href="archive.html">ブログ</a></li>
          </ul>
        </nav>
      </div>
      <div class="copyright">
        <p>&copy; 2026 WP Practice. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

</body>

</html>