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