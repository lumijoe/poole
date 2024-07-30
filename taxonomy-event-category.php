<?php get_header(); ?>
<div class="c-pagettl">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/img-pagettl-archive.jpg?03" alt="説明会・公開行事">
  <p class="bg-orange c-pagettl__ttl">
    説明会・公開行事
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->


<div itemscope itemtype="https://schema.org/Blog">


  <section class="p-event__archive">
    <div class="content">

      <?php if(is_tax('event-category','junior')): ?>
      <h1><span>中学校</span>説明会・公開行事</h1>
      <p class="p-event__archive__txt">オープンスクール＆<br class="sp">イベントカレンダー</p>
      <p class="p-event__archive__pdf"><a href="/pdf/event/event_junior.pdf" target="_blank">年間イベントスケジュールはこちら</a></p>

      <?php elseif(is_tax('event-category','senior')):?>
      <h1><span>高等学校</span>説明会・公開行事</h1>
      <p class="p-event__archive__txt">オープンスクール＆<br class="sp">イベントカレンダー</p>
      <p class="p-event__archive__pdf"><a href="/pdf/event/event_senior.pdf" target="_blank">年間イベントスケジュールはこちら</a></p>

      <?php else:?>
      <h1>説明会・公開行事</h1>
      <p class="p-event__archive__txt">オープンスクール＆イベントカレンダー</p>

      <?php endif; ?>



      <?php if(is_tax('event-category','junior')): ?>
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">すべてのカテゴリ</a>
        <?php
          $terms = get_terms('event-status');
          foreach ( $terms as $term ) {
            echo '<a href="'.esc_url(home_url('/event-category/junior/')).'?status='.$term->slug.'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->

      <?php elseif(is_tax('event-category','senior')): ?>

      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">すべてのカテゴリ</a>
        <?php
          $terms = get_terms('event-status');
          foreach ( $terms as $term ) {
            echo '<a href="'.esc_url(home_url('/event-category/senior/')).'?status='.$term->slug.'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->


      <?php endif; ?>


      <?php
// 現在のタクソノミータームを取得
$current_term = get_queried_object();

// URLパラメータからステータスを取得
$status = isset($_GET['status']) ? $_GET['status'] : '';

// WP_Queryの引数を設定
$args = array(
    'post_type' => 'event', // カスタム投稿タイプ
    'posts_per_page' => -1, // 全ての投稿を取得
    'tax_query' => array( // タクソノミーによる絞り込み条件
        'relation' => 'AND',
        array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'event-category',
                'field'    => 'slug',
                'terms'    => $current_term->slug, // 現在のターム
            ),
            array(
                'taxonomy' => 'event-category',
                'field'    => 'slug',
                'terms'    => 'joint', // 'joint' タームを追加
            ),
        ),
    ),
);

// ステータスが指定されている場合は、その条件をクエリに追加
if ( !empty($status) ) {
    $args['tax_query'][] = array(
        'taxonomy' => 'event-status',
        'field'    => 'slug',
        'terms'    => $status,
    );
}

// カスタムクエリの実行
$the_query = new WP_Query($args);?>


      <?php if ($the_query->have_posts()) : ?>
      <div class="p-event__list">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php get_template_part('tmp/include/event-list'); ?>
        <?php endwhile; wp_reset_postdata();?>
      </div>
      <?php else: ?>
      <p>イベントがありません</p>
      <?php endif; ?>





      <?php if(is_tax('event-category','junior')): ?>
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">説明会・公開行事</a>
        <a href="<?php echo esc_url(home_url('/exam/listening_junior/')); ?>">英語リスニング問題</a>
        <a href="<?php echo esc_url(home_url('/exam/application_junior/')); ?>">募集要項</a>
        <a href="<?php echo esc_url(home_url('/exam/honor_junior/')); ?>">特待生制度</a>
        <a href="<?php echo esc_url(home_url('/exam/transference_junior/')); ?>">転入・編入</a>
      </div><!-- /.c-catlist -->
      <?php elseif(is_tax('event-category','senior')):?>
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">説明会・公開行事</a>
        <a href="<?php echo esc_url(home_url('/exam/listening_senior/')); ?>">英語リスニング問題</a>
        <a href="<?php echo esc_url(home_url('/exam/application_senior/')); ?>">募集要項</a>
        <a href="<?php echo esc_url(home_url('/exam/honor_senior/')); ?>">特待生制度</a>
        <a href="<?php echo esc_url(home_url('/exam/transference_senior/')); ?>">転入・編入</a>
      </div><!-- /.c-catlist -->
      <?php endif; ?>

    </div><!-- /.content -->
  </section>



</div>

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
