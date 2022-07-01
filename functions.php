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

// MW WP form 不要なpタグを出力しないようにする
function mvwpform_autop_filter()
{
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

// MW WP form バリデーションメッセージの変更
function my_error_message($error, $key, $rule)
{
  if ($key === 'company' && $rule === 'noempty') {
    return '会社名を入力してください。';
  }
  if ($key === 'name' && $rule === 'noempty') {
    return '氏名を入力してください。';
  }
  if ($key === 'email' && $rule === 'noempty') {
    return 'メールアドレスを入力してください';
  }
  if ($key === 'tel' && $rule === 'noempty') {
    return '電話番号を入力してください';
  }
  if ($key === 'contact' && $rule === 'noempty') {
    return 'お問い合わせ内容を入力してください';
  }
  return $error;
}
// form-2215 の「2215」はMW WP form で自動生成されたキー番号
add_filter('mwform_error_message_mw-wp-form-2215', 'my_error_message', 10, 3);
