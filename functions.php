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

// function init_func()
// {
//   add_theme_support("title-tag");
//   //　アイキャッチ設定追加
//   add_theme_support('post-thumbnails');

//   register_post_type('news', [
//     'labels' => [
//       'name' => 'お知らせ',
//       'singular_name' => 'お知らせ',
//       'add_new' => 'お知らせを追加',
//       'add_new_item' => 'お知らせを追加',
//       'edit_item' => 'お知らせを編集',
//       'new_item' => 'お知らせを追加',
//       'all_items' => 'すべてのお知らせ',
//       'view_item' => 'お知らせを見る',
//       'search_items' => 'お知らせを探す',
//       'not_found' => 'お知らせは見つかりませんでした',
//       'not_found_in_trash' => 'ゴミ箱は空です',
//       'parent_item_color' => '',
//       'menu_name' => 'お知らせ'
//     ],
//     'public' => true,
//     'has_archive' => true,
//     'hierarchical' => true,
//     'supports' => [
//       'title',
//       'editor',
//       'page-attributes',
//       'thumbnail'
//     ],
//     'menu_position' => 5,
//     'menu_icon' => 'dashicons-align-left'
//   ]);
// }
// add_action("init", 'init_func');
