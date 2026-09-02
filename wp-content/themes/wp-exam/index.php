<?php get_header(); ?>
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
      <?php if (have_posts()): ?>
        <h2>最新の投稿（3件）</h2>
        <div class="posts-grid">

          <?php while (have_posts()): the_post(); ?>
            <article class="post-card">

              <div class="post-card-img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  No Image (Placeholder)
                <?php endif; ?>
              </div>
              <div class="post-card-content">
                <div class="post-meta">
                  <time class="post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>

                  <?php
                  $categories = get_the_category();
                  if ($categories):
                  ?>
                    <?php foreach ($categories as $category): ?>
                      <span class="post-category"><?= $category->name; ?></span>
                    <?php endforeach; ?>

                  <?php endif; ?>
                </div>

                <h3 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="post-card-excerpt"><?= get_the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more">詳しく見る &rarr;</a>
              </div>
            </article>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>
    </section>

  </div>

  </div>
</main>

<?php get_footer(); ?>