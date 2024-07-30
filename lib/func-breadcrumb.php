<?php
//ぱんくず
if ( !defined( 'ABSPATH' ) ) exit;

if (! function_exists('custom_breadcrumb')) {
  function custom_breadcrumb() {

    // トップページでは何も出力しない
    if (is_front_page()) {
      return false;
    }

    //そのページのWPオブジェクトを取得
    $wp_obj = get_queried_object();

    //JSON-LD用のデータを保持する変数
    $json_array = array();

    //ぱんくずのHTML
    echo '<nav id="breadcrumb" class="breadcrumb" aria-label="Breadcrumbs">'.
      '<ol>'.
      '<li>'.
      '<a href="'. esc_url(home_url()) .'"><span>ホーム</span></a>'.
      '</li>';

    //ホームのJSON-LDデータ
    $json_array[] = array(
        'id' => esc_url(home_url()),
        'name' => get_bloginfo('name')
    );

    /**
     * 添付ファイルページ ( $wp_obj : WP_Post )
     * ※ 添付ファイルページでは is_single() も true になるので先に分岐
     */
    if (is_attachment()) {
      $post_title = apply_filters('the_title', $wp_obj->post_title);
      echo '<li><span>'. esc_html($post_title) .'</span></li>';
    }

    /**
     * 投稿ページ ( $wp_obj : WP_Post )
     */
    elseif (is_single()) {
      $post_id    = $wp_obj->ID;
      $post_type  = $wp_obj->post_type;
      $post_title = apply_filters('the_title', $wp_obj->post_title);

      // カスタム投稿タイプかどうか
      if ($post_type !== 'post') {
        $the_tax = "";  //そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定してもよい

        // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
        $tax_array = get_object_taxonomies($post_type, 'names');
        foreach ($tax_array as $tax_name) {
          if ($tax_name !== 'post_format') {
            $the_tax = $tax_name;
            break;
          }
        }

        $post_type_link = esc_url(get_post_type_archive_link($post_type));
        $post_type_label = esc_html(get_post_type_object($post_type)->label);

        //カスタム投稿タイプ名の表示
        echo '<li>'.
        '<a href="'. $post_type_link .'">'.
        '<span>'. $post_type_label .'一覧</span>'.
        '</a>'.
        '</li>';

        //JSON-LDデータ
        $json_array[] = array(
          'id' => $post_type_link,
          'name' => $post_type_label
        );
        } else {
          $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示
        }

        // 投稿に紐づくタームを全て取得
        $terms = get_the_terms($post_id, $the_tax);

        // タクソノミーが紐づいていれば表示
        if ($terms !== false) {
          $child_terms  = array();  // 子を持たないタームだけを集める配列
          $parents_list = array();  // 子を持つタームだけを集める配列

          //全タームの親IDを取得
          foreach ($terms as $term) {
              if ($term->parent !== 0) {
                  $parents_list[] = $term->parent;
              }
          }

          //親リストに含まれないタームのみ取得
          foreach ($terms as $term) {
              if (! in_array($term->term_id, $parents_list)) {
                  $child_terms[] = $term;
              }
          }

          // 最下層のターム配列から一つだけ取得
          $term = $child_terms[0];

          if ($term->parent !== 0) {

            // 親タームのIDリストを取得
            $parent_array = array_reverse(get_ancestors($term->term_id, $the_tax));

            foreach ($parent_array as $parent_id) {
              $parent_term = get_term($parent_id, $the_tax);
              $parent_link = esc_url(get_term_link($parent_id, $the_tax));
              $parent_name = esc_html($parent_term->name);
              echo '<li>'.
              '<a href="'. $parent_link .'">'.
              '<span>'. $parent_name .'</span>'.
              '</a>'.
              '</li>';
              //JSON-LDデータ
              $json_array[] = array(
                'id' => $parent_link,
                'name' => $parent_name
              );
            }
          }

          $term_link = esc_url(get_term_link($term->term_id, $the_tax));
          $term_name = esc_html($term->name);
          // 最下層のタームを表示
          echo '<li>'.
            '<a href="'. $term_link .'">'.
            '<span>'. $term_name .'</span>'.
            '</a>'.
            '</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $term_link,
            'name' => $term_name
          );
        }

        // 投稿自身の表示
        echo '<li aria-current="page"><span>'. esc_html(strip_tags($post_title)) .'</span></li>';
        //JSON-LDデータ
        $json_array[] = array(
          'id' => esc_url(get_permalink()),
          'name' => get_the_title()
        );
      }

      /**
       * 固定ページ ( $wp_obj : WP_Post )
       */
      elseif (is_page() || is_home()) {
        $page_id    = $wp_obj->ID;
        $page_title = apply_filters('the_title', $wp_obj->post_title);

        // 親ページがあれば順番に表示
        if ($wp_obj->post_parent !== 0) {
          $parent_array = array_reverse(get_post_ancestors($page_id));
          foreach ($parent_array as $parent_id) {
            $parent_link = esc_url(get_permalink($parent_id));
            $parent_name = esc_html(get_the_title($parent_id));
            if($parent_name == '卒業生の方へ'|| $parent_name == '在校生・保護者の方へ'){
              echo '<li>'.
          '<a href="'. $parent_link .'">'.
            '<span>'. $parent_name .'</span>'.
          '</a>'.
          '</li>';
            }else{
               echo '<li>'.
            '<span>'. $parent_name .'</span>'.
          '</li>';
            }

            //JSON-LDデータ
            $json_array[] = array(
              'id' => $parent_link,
              'name' => $parent_name
            );
          }
        }
        // 投稿自身の表示
        echo '<li aria-current="page"><span>'. esc_html(strip_tags($page_title)) .'</span></li>';
        //JSON-LDデータ
        $json_array[] = array(
            'id' => esc_url(get_permalink()),
            'name' => get_the_title()
        );
      }

    /**
     * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
     */
    elseif(is_post_type_archive('club')){
        echo '<li><span>スクールライフ</span></li><li aria-current="page"><span>'. esc_html($wp_obj->label) .'一覧</span></li>';
            //JSON-LDデータ
            $json_array[] = array(
                'id' => esc_url(get_post_type_archive_link(get_post_type())),
                'name' =>  esc_html(get_post_type_object(get_post_type())->label)
            );
        }
    elseif (is_post_type_archive()) {
        echo '<li aria-current="page"><span>'. esc_html($wp_obj->label) .'一覧</span></li>';
        //JSON-LDデータ
        $json_array[] = array(
            'id' => esc_url(get_post_type_archive_link(get_post_type())),
            'name' =>  esc_html(get_post_type_object(get_post_type())->label)
        );
    } elseif (is_date()) {

    /**
     * 日付アーカイブ ( $wp_obj : null )
     */
      $year  = get_query_var('year');
      $month = get_query_var('monthnum');
      $day   = get_query_var('day');

      if ($day !== 0) {
        //日別アーカイブ
        echo '<li>'.
          '<a href="'. esc_url(get_year_link($year)) .'"><span>'. esc_html($year) .'年</span></a>'.
          '</li>'.
          '<li>'.
          '<a href="'. esc_url(get_month_link($year, $month)) . '"><span>'. esc_html($month) .'月</span></a>'.
          '</li>'.
          '<li>'.
          '<span>'. esc_html($day) .'日</span>'.
        '</li>';
      } elseif ($month !== 0) {
        //月別アーカイブ
        echo '<li>'.
          '<a href="'. esc_url(get_year_link($year)) .'"><span>'. esc_html($year) .'年</span></a>'.
          '</li>'.
          '<li>'.
          '<span>'. esc_html($month) .'月</span>'.
          '</li>';
      } else {
        //年別アーカイブ
        echo '<li><span>'. esc_html($year) .'年</span></li>';
      }
    } elseif (is_author()) {

      /**
       * 投稿者アーカイブ ( $wp_obj : WP_User )
       */
      echo '<li><span>'. esc_html($wp_obj->display_name) .' の執筆記事</span></li>';
    } elseif (is_archive()) {

      /**
       * タームアーカイブ ( $wp_obj : WP_Term )
       */
      $term_id   = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name  = $wp_obj->taxonomy;

      /* ここでタクソノミーに紐づくカスタム投稿タイプを出力 */
      // Note: ↑きれいじゃない方法で実装しているので直す
      echo '<li><a href="/'. esc_html(get_post_type_object(get_post_type())->name) .'/">'. esc_html(get_post_type_object(get_post_type())->label) .'</a></li>';

      // 親ページがあれば順番に表示
      if ($wp_obj->parent !== 0) {
        $parent_array = array_reverse(get_ancestors($term_id, $tax_name));
        foreach ($parent_array as $parent_id) {
          $parent_term = get_term($parent_id, $tax_name);
          $parent_link = esc_url(get_term_link($parent_id, $tax_name));
          $parent_name = esc_html($parent_term->name);
          echo '<li>'.
          '<a href="'. $parent_link .'">'.
          '<span>'. $parent_name .'</span>'.
          '</a>'.
          '</li>';
          //JSON-LDデータ
          $json_array[] = array(
            'id' => $parent_link,
            'name' => $parent_name
          );
        }
      }

      // ターム自身の表示
      echo '<li>'.
      '<span>'. esc_html($term_name) .'</span>'.
      '</li>';
    } elseif (is_search()) {

    /**
     * 検索結果ページ
     */
      echo '<li><span>「'. esc_html(get_search_query()) .'」で検索した結果</span></li>';
    } elseif (is_404()) {

  /**
   * 404ページ
   */
      echo '<li><span>ページが見つかりません</span></li>';
    } else {

    /**
     * その他のページ（無いと思うけど一応）
     */
      echo '<li><span>'. esc_html(get_the_title()) .'</span></li>';
    }

    echo '</ol>';

    //JSON-LDの出力（２階層以上であれば）
    if (!empty($json_array)) :
      $pos = 1;
      $json = '';
      foreach ($json_array as $data) :
      $json .= '{
        "@type": "ListItem",
        "position": '. $pos++ .',
        "item": {
          "@id": "'. $data['id'] .'",
          "name": "'. $data['name'] .'"
        }
      },';
    endforeach;

    echo '<script type="application/ld+json">{
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "name": "🍞パンくずリスト",
      "itemListElement": ['. rtrim($json, ',') .']
      }</script>';
    endif;

    echo '</nav>';  // 冒頭に合わせた閉じタグ
  }
}
