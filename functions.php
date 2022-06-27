<?php
/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blogs'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function init_func()
{
  // wp_head で title 出力
  add_theme_support('title-tag');
  //　アイキャッチ設定追加
  add_theme_support('post-thumbnails');
}
add_action("init", 'init_func');
