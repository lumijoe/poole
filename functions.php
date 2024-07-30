<?php
// 直接アクセスを禁止
if ( !defined( 'ABSPATH' ) ) exit;

// コンテンツ幅
function mytheme_content_width()
{
  $GLOBALS['content_width'] = apply_filters('mytheme_content_width', 1200);
}
add_action('after_setup_theme', 'mytheme_content_width', 0);

/*-------------------------------
  インクルード
-------------------------------*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

/* データ */
require get_template_directory() . '/lib/const.php';
/* 初期設定 */
require get_template_directory() . '/lib/func-init.php';

/* ぱんくず */
require get_template_directory() . '/lib/func-breadcrumb.php';
/* カスタム投稿 */
require get_template_directory() . '/lib/func-posttype.php';




/*-------------------------------
  JSの読み込み
-------------------------------*/

if (!function_exists('st_enqueue_scripts')) {
    /* JSをキューへ追加 */
    function st_enqueue_scripts()
    {

    // 本体のjQueryを読み込ませない
        wp_deregister_script('jquery');

        wp_enqueue_script(
            'jquery',
            '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
            array(),
            '3.6.0',
            false
        );

        wp_enqueue_script(
            'base',
            get_template_directory_uri() . '/assets/js/common.js?05',
            array( 'jquery' ),
            false,
            true
        );
        // テーマフォルダまでのパスを common.js で使う用
        // 書き方は common.js ファイルアイコン参照
        $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
        wp_localize_script('base', 'object_name', $translation_array);
    }
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');


/*-------------------------------
  ダッシュボード
-------------------------------*/

/*---------- 不要なメニューの削除 ----------*/
// コメントアウトで表示
function my_remove_adminbar_menu($wp_admin_bar)
{
    $wp_admin_bar->remove_menu('themes');       // サイト名 -> テーマ (公開側)
    $wp_admin_bar->remove_menu('widgets');       // サイト名 -> ウィジェット
    $wp_admin_bar->remove_menu('menus');       // サイト名 -> カスタムナビゲーション
    $wp_admin_bar->remove_menu('new-content');  // 新規
}
add_action('admin_bar_menu', 'my_remove_adminbar_menu', 201);

// サイドメニューを非表示（不要記事、不要コメントを削除したらコメントアウトを外す）
function remove_menus() {
  remove_menu_page( 'edit.php' ); // 投稿
  remove_menu_page( 'edit-comments.php' ); // コメント
}
add_action( 'admin_menu', 'remove_menus', 999 );



function custom_editor_position_for_event() {
    global $post, $wp_meta_boxes;

    // 現在の画面が 'event' カスタム投稿タイプであることを確認
    if (get_post_type($post) == 'event') {
        do_meta_boxes(get_current_screen(), 'advanced', $post);
        unset($wp_meta_boxes['event']['advanced']);
    }
}
add_action('edit_form_after_title', 'custom_editor_position_for_event');


/*【出力カスタマイズ】年別アーカイブリストに年を表示する */
function my_get_archives_link($html){
  if(get_post_type($post) == 'news')
  return preg_replace ( '/<\/a>/', '年度</a>', $html );
if(get_post_type($post) != 'news')
  return preg_replace ( '/<\/a>/', '</a>', $html );
}
add_filter('get_archives_link','my_get_archives_link');


add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
    if ($post->post_type === 'page') {
        $enabled_slugs = ['recruit', 'training','transference_junior','transference_senior', '_template'];
        if (in_array($post->post_name, $enabled_slugs)) {
            return true;  // 指定したスラッグのページでグーテンベルクエディタを有効にする
        }
        remove_post_type_support('page','editor');
		return false; // それ以外の固定ページではグーテンベルクエディタを非表示にする
    }
    return $use_block_editor;
}, 10, 2);






// カスタム投稿タイプ 'club' の投稿一覧に新しいカラムを追加
function add_custom_club_columns($columns) {
    // 新しいカラム配列を作成
    $new_columns = array();

    foreach ($columns as $key => $title) {
        // タイトルカラムの直後に新しいカラムを追加
        if ($key == 'title') {
            $new_columns['title'] = $title;
            $new_columns['club_cat'] = '分類';
        } else {
            $new_columns[$key] = $title;
        }
    }

    return $new_columns;
}
add_filter('manage_club_posts_columns', 'add_custom_club_columns');

// 新しいカラムにカスタムフィールドの値を表示
function custom_club_columns_content($column, $post_id) {
    switch ($column) {
        case 'club_cat':
            $club_cat_value = get_post_meta($post_id, 'club_cat', true);
            echo esc_html($club_cat_value);
            break;
    }
}
add_action('manage_club_posts_custom_column', 'custom_club_columns_content', 10, 2);





//event 一覧
function add_event_columns($columns) {
    // 新しい配列を作成し、タイトル列の後にカスタム列を挿入
    $new_columns = [];
    foreach ($columns as $key => $title) {
        $new_columns[$key] = $title;
        // タイトル列の後に新しい列を挿入
        if ($key == 'title') {
            $new_columns['event_month'] = '開催日時';
            $new_columns['event_top'] = 'トップページ表示状態';
        }
    }
    return $new_columns;
}
add_filter('manage_edit-event_columns', 'add_event_columns');

// eventに新しいカラムにカスタムフィールドの値を表示
function show_event_custom_column($column, $post_id) {
    switch ($column) {
        case 'event_month':
            $event_month = get_post_meta($post_id, 'event_month', true);
            $event_day = get_post_meta($post_id, 'event_day', true);
            echo $event_month . '月'. $event_day . "日";
            break;
        case 'event_top':
            $event_top = get_post_meta($post_id, 'event_top', true);
            echo $event_top ? '表示中' : ''; // 真偽値に基づいてテキストを表示
            break;
    }
}
add_action('manage_event_posts_custom_column', 'show_event_custom_column', 10, 2);



//タクソノミー一覧 並び替え可能に
function tax_sort_order($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_tax('event-status') || $query->is_tax('event-category')) {
        $query->set('orderby', 'menu_order');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'tax_sort_order');


//Basic認証
function my_basic_auth() {
    $USER = 'poole';
    $PASS = '06022024';

    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Private Page"');
        header('HTTP/1.0 401 Unauthorized');
        die("このページを表示するには認証が必要です");
    } else {
        if ($_SERVER['PHP_AUTH_USER'] != $USER || $_SERVER['PHP_AUTH_PW'] != $PASS) {
            header('HTTP/1.0 401 Unauthorized');
            die("認証に失敗しました");
        }
    }
}


function my_page_template_redirect() {
    if (is_page('curriculum') || is_post_type_archive('statement')) {
        my_basic_auth();
    }
}
add_action('template_redirect', 'my_page_template_redirect');


add_filter( 'flamingo_csv_quotation', 'my_filter_convert_encoding_csv', 11 );
function my_filter_convert_encoding_csv( $input ) {
	return mb_convert_encoding( $input, "SJIS", "UTF-8" );
}


// Contact Form 7 スパムメール対策（本文に日本語が含まれていない場合はエラーを返す）
function wpcf7_validate_spam_message( $result, $tag ) {
    // スパム対策を適用するフィールド
    $fields_to_check = array('lastnamekana', 'firstnamekana');

    // 現在のタグ（フィールド）がチェック対象かどうか確認
    if (in_array($tag->name, $fields_to_check)) {
        $value = str_replace(array(PHP_EOL, ' '), '', esc_attr($_POST[$tag->name]));
        if (!empty($value)) {
            if (preg_match('/^[!-~]+$/', $value)) {
                $result->invalidate($tag, 'エラー：この内容は送信できません');
            }
        }
    }
    return $result;
}

add_filter( 'wpcf7_validate_text', 'wpcf7_validate_spam_message', 10, 2 );
add_filter( 'wpcf7_validate_text*', 'wpcf7_validate_spam_message', 10, 2 );