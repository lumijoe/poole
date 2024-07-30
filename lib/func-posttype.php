<?php
if ( !defined( 'ABSPATH' ) ) exit;

/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {


//重要なお知らせ
$label = '重要なお知らせ';
register_post_type(
  "topic",
  array(
   "label" => "{$label}",
  "labels" =>  array(  //管理画面に表示されるラベルを指定
   "add_new_item" => "{$label}を追加",
   "edit_item" =>"{$label}の編集",
   "view_item" =>  "{$label}を表示",
   "search_items" => "{$label}を検索",
   "not_found" => "{$label}は見つかりませんでした。",
   "not_found_in_trash" => "ゴミ箱に{$label}はありませんでした。",
   ),
  "hierarchical" => false,
  "public" => true,
  "query_var" => false,
  "menu_icon" => "dashicons-welcome-write-blog",
  "has_archive" => true,
  'menu_position' =>2,
  'show_in_rest' => true,
  "supports" => array(
    "title"
    )
  )
  );

  //お知らせ
$label = 'お知らせ';
register_post_type(
  "news",
  array(
   "label" => "{$label}",
  "labels" =>  array(  //管理画面に表示されるラベルを指定
   "add_new_item" => "{$label}を追加",
   "edit_item" =>"{$label}の編集",
   "view_item" =>  "{$label}を表示",
   "search_items" => "{$label}を検索",
   "not_found" => "{$label}は見つかりませんでした。",
   "not_found_in_trash" => "ゴミ箱に{$label}はありませんでした。",
   ),
  "hierarchical" => false,
  "public" => true,
  "query_var" => false,
  "menu_icon" => "dashicons-welcome-write-blog",
  "has_archive" => true,
  'menu_position' =>3,
  'show_in_rest' => true,
  "supports" => array(
    "title","editor","thumbnail"
    )
  )
  );

  register_taxonomy(
    'news-cat',
    'news',
    array(
    'public'            => true,
    'hierarchical'      => true,
    'label'             => 'カテゴリ',
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'singular_label'    => 'カテゴリ',
    'show_in_rest'      => true,
    'show_admin_column' => true
    )
  );








  //説明会・公開行事
$label = '説明会・公開行事';
register_post_type(
  "event",
  array(
   "label" => "{$label}",
  "labels" =>  array(  //管理画面に表示されるラベルを指定
   "add_new_item" => "{$label}を追加",
   "edit_item" =>"{$label}の編集",
   "view_item" =>  "{$label}を表示",
   "search_items" => "{$label}を検索",
   "not_found" => "{$label}は見つかりませんでした。",
   "not_found_in_trash" => "ゴミ箱に{$label}はありませんでした。",
   ),
  "hierarchical" => false,
  "public" => true,
  "query_var" => false,
  "menu_icon" => "dashicons-welcome-write-blog",
  "has_archive" => true,
  'menu_position' =>4,
  'show_in_rest' => true,
  "supports" => array(
    "title","editor"
    )
  )
  );

  register_taxonomy(
    'event-status',
    'event',
    array(
    'public'            => true,
    'hierarchical'      => true,
    'label'             => '状況',
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'singular_label'    => '状況',
    'show_in_rest'      => true,
    'show_admin_column' => true
    )
  );

  register_taxonomy(
    'event-category',
    'event',
    array(
    'public'            => true,
    'hierarchical'      => true,
    'label'             => 'カテゴリ',
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'singular_label'    => 'カテゴリ',
    'show_in_rest'      => true,
    'show_admin_column' => true
    )
  );


   //クラブ活動
$label = 'クラブ活動';
register_post_type(
  "club",
  array(
   "label" => "{$label}",
  "labels" =>  array(  //管理画面に表示されるラベルを指定
   "add_new_item" => "{$label}を追加",
   "edit_item" =>"{$label}の編集",
   "view_item" =>  "{$label}を表示",
   "search_items" => "{$label}を検索",
   "not_found" => "{$label}は見つかりませんでした。",
   "not_found_in_trash" => "ゴミ箱に{$label}はありませんでした。",
   ),
  "hierarchical" => false,
  "public" => true,
  "query_var" => false,
  "menu_icon" => "dashicons-welcome-write-blog",
  "has_archive" => true,
  'menu_position' =>5,
  'show_in_rest' => true,
  "rewrite" => [ "slug" => "life/club", "with_front" => true],
  "supports" => array(
    "title"
    )
  )
  );

    //発文
$label = '発文';
register_post_type(
  "statement",
  array(
   "label" => "{$label}",
  "labels" =>  array(  //管理画面に表示されるラベルを指定
   "add_new_item" => "{$label}を追加",
   "edit_item" =>"{$label}の編集",
   "view_item" =>  "{$label}を表示",
   "search_items" => "{$label}を検索",
   "not_found" => "{$label}は見つかりませんでした。",
   "not_found_in_trash" => "ゴミ箱に{$label}はありませんでした。",
   ),
  "hierarchical" => false,
  "public" => true,
  "query_var" => false,
  "menu_icon" => "dashicons-welcome-write-blog",
  "has_archive" => true,
  'menu_position' =>6,
  'show_in_rest' => true,
  "supports" => array(
    "title"
    )
  )
  );

  register_taxonomy(
    'statement-cat',
    'statement',
    array(
    'public'            => true,
    'hierarchical'      => true,
    'label'             => 'カテゴリ',
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'singular_label'    => 'カテゴリ',
    'show_in_rest'      => true,
    'show_admin_column' => true
    )
  );


}
