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

// breadcrumb navXT デフォルト投稿タイプのアーカイブページに「ブログ」表示
function bcn_add($bcnObj)
{
  // デフォルト投稿のアーカイブかどうか
  if (is_post_type_archive('post')) {
    // 新規のtrailオブジェクトを末尾に追加する
    $bcnObj->add(new bcn_breadcrumb('ブログ', null, array('archive', 'post-clumn-archive', 'current-item')));
    // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
    $trail_tmp = clone $bcnObj->trail[1];
    $bcnObj->trail[1] = clone $bcnObj->trail[0];
    $bcnObj->trail[0] = $trail_tmp;
    return $bcnObj;
  }
  // 投稿の詳細ページのとき、２番目にブログアーカイブへのリンク追加
  if (is_singular('post')) {
    $item = new bcn_breadcrumb('ブログ', null, array('post'), home_url('/blogs/'), null, true);
    $stuck = array_pop($bcnObj->breadcrumbs); // HOME 一時退避
    $bcnObj->breadcrumbs[] = $item; //ブログ 追加
    $bcnObj->breadcrumbs[] = $stuck; //HOME 戻す
  }
}
add_action('bcn_after_fill', 'bcn_add');
