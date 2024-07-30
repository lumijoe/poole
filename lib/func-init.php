<?php
if ( !defined( 'ABSPATH' ) ) exit;

/*-------------------------------
  Setting
-------------------------------*/

if (!function_exists('st_after_setup_theme')) {
  /* テーマの初期設定 */
  function st_after_setup_theme()
  {
    add_theme_support('title-tag');
    add_theme_support('responsive-embeds');
    add_theme_support('dark-editor-style');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption',
    ) );
  }
}
add_action('after_setup_theme', 'st_after_setup_theme');

// ヘッダーを綺麗に
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');  //マニフェストファイルへのリンク
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');//短縮URL削除
remove_action('wp_head', 'wp_generator');  //WordPressバージョン情報削除
//以下絵文字系削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');



// REST API
function my_filter_rest_endpoints( $endpoints ) {
  if ( isset( $endpoints['/wp/v2/users'] ) ) {
    unset( $endpoints['/wp/v2/users'] );
  }
  if ( isset( $endpoints['/wp/v2/users/(?P[\d]+)'] ) ) {
    unset( $endpoints['/wp/v2/users/(?P[\d]+)'] );
  }
  return $endpoints;
}
add_filter( 'rest_endpoints', 'my_filter_rest_endpoints', 10, 1 );


// oEmbed無効
remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result');
add_filter('embed_oembed_discover', '__return_false');
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);


// body_class()にスラッグのクラスを追加
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = 'page-' . $page->post_name;
    $parent_id = $page->post_parent;
    if ( $parent_id ) {
      $classes[] = 'page-' . get_post($parent_id)->post_name . '-child';
    }
  }
  return $classes;
}


/*-------------------------------
  Security
-------------------------------*/
// セルフピンバック禁止
function disable_self_pingback( &$links ) {
  $home = home_url();
  foreach ( $links as $l => $link )
  if ( 0 === strpos( $link, $home ) )
  unset( $links[$l] );
}
add_action( 'pre_ping', 'disable_self_pingback' );

// 投稿者アーカイブ無効
add_filter( 'author_rewrite_rules', '__return_empty_array' );
  function disable_author_archive() {
    if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
      wp_redirect( home_url( '/404.php' ) );
      exit;
  }
}
add_action('init', 'disable_author_archive');

// /wp/v2/users をリダイレクト
function disable_users_query() {
  if( preg_match('/wp\/v2\/users/i', $_SERVER['REQUEST_URI'])  || preg_match('/wp\/v2\/users/i', $_SERVER['QUERY_STRING']) ){
    wp_safe_redirect( home_url() );
    exit;
  }
}
add_action('init', 'disable_users_query');

// xmlrpc.php無効
add_filter('wp_xmlrpc_server_class', 'my_xmlrpc_server_class');
function my_xmlrpc_server_class(){
  return 'my_wp_xmlrpc_server';
}
class my_wp_xmlrpc_server{
  public function serve_request(){
    header('HTTP/1.1 403 Forbidden');
  }
}


/*-------------------------------
  Template
-------------------------------*/

// 特定の親ページとその子ページにのみ条件分岐
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

// 子ページかどうかの判定
function is_child_page() {
  global $post;
  return is_page() && $post->post_parent;
}

// テンプレートファイル名「page-親スラッグ-子スラッグ.php」で認識させる
// tmp の中よりmain直下の page-～が優先
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;
  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];
  if ($pagename && ! $template) {
    $pagename = str_replace('/', '-', $pagename);
    $decoded = urldecode($pagename);
    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }
  return $templates;
}



/*---------- URL ----------*/

// スラッグ名が日本語だったら自動的にpost＋id付与へ変更（スラッグを設定した場合は適用しない）
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = 'post-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);



/*---------- ページネーション ----------*/
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 1, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "<<";
    $text_before  = "<";
    $text_next    = ">";
    $text_last    = ">>";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="c-pagination">';
        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<span class="current pager">', $i ,'</span>';
                } else {
                    echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
                }
            }

        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
        }
        if ( $paged + $range < $pages ) {
            // 「最後へ」 の表示
            echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
        }
        echo '</div>';
    }
}