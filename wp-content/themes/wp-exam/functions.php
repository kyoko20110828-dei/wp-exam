<?php

/**
 * titleタグを出力する
 */
add_theme_support('title-tag');

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * メインクエリを変更する
 * 
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts(mixed $query)
{
    // 管理画面、メインクエリ以外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // トップページの場合
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        return;
    }

    // カテゴリーページの場合
    // カスタム投稿ページの場合
}