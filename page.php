<?php get_header(); ?>


<main>
  <!--ループ開始 -->
  <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>

  <?php
$slug_name = $post->post_name;
$parent_id = $post->post_parent; // 親ページのIDを取得
$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得
$template_path = '';

if( is_child_page() ) {
  $template_path = locate_template('tmp/page/' .$parent_slug. '-' .$slug_name. '.php');
} elseif ( is_page() ) {
  $template_path = locate_template('tmp/page/' .$slug_name. '.php');
}

if ( '' != $template_path && file_exists($template_path) ) {
  include $template_path;
} else {
  // テンプレートが見つからない場合は404ページにリダイレクト
  global $wp_query;
  $wp_query->set_404();
  status_header(404);
  get_template_part( '404' ); // 404.phpテンプレートを読み込む、または別の適切なテンプレートを指定
  exit;
}
?>


  <!-- ▲ tmp =================================================== -->

  <?php endwhile; else: //ページがないとき ?>
  <?php if (is_404()): ?>
  <?php get_template_part('tmp/page/404'); ?>
  <?php else : ?>
  <p>準備中です。</p>
  <?php endif; ?>
  <?php endif; ?>
  <!--ループ終了 -->

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
