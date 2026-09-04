<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="content-wrapper">
  <div class="container">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article>
          <h1 class="page-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>">投稿日: <?php the_time('Y年m月d日') ?></time>
            <span class="entry-category">カテゴリー:

              <?php
              $categories = get_the_category();
              if ($categories):
              ?>
                <?php foreach ($categories as $category): ?>
                  <a href="<?= get_category_link($category); ?>"><?= $category->name; ?></a>

                <?php endforeach; ?>
              <?php endif; ?>
            </span>

          </div>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <!-- 前後の投稿へのリンク -->

          <nav class="post-navigation">

            <?php $previous_post = get_previous_post();
            if ($previous_post):
            ?>
              <div class="nav-link nav-previous">
                <span class="nav-label">&larr; 前の投稿</span>
                <a href="<?php the_permalink($previous_post); ?>" class="nav-title">
                  <?= get_the_title($previous_post); ?>
                </a>
              </div>
            <?php endif; ?>

            <?php $next_post = get_next_post();
            if ($next_post): ?>
              <div class="nav-link nav-next">
                <span class="nav-label">次の投稿 &rarr;</span>
                <a href="<?php the_permalink($next_post); ?>" class="nav-title">
                  <?= get_the_title($next_post); ?>
                </a>
              </div>
          </nav>
        <?php endif; ?>
        
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>