<?php get_header(); ?>
<div class="c-pagettl">
  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/img-pagettl-guardians.jpg" alt="在校生・保護者の方へ">
  <h1 class="bg-red c-pagettl__ttl">
    在校生・保護者の方へ
  </h1>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<div itemscope itemtype="https://schema.org/Blog">

  <div class="p-statement__ttl content">
    <h1>発文</h1>
    <p>
      以下の項目を選択することで絞り込みが可能です。すべての配布物を掲載するわけではありません。<br>
全校生徒に関わる重要なお知らせや保護者の方に参加していただく行事・集会のお知らせ、
授業料や奨学金に関するお知らせなどに限ります。
    </p>
  </div><!-- /.p-statement__title -->

  <div class="p-archive content">

    <div class="p-archive__left">
      <div class="p-statement__catlist">
        <a href="<?php echo esc_url(home_url('/statement/')); ?>">中学校・高等学校全体</a>
        <?php
          $terms = get_terms('statement-cat');
          foreach ( $terms as $term ) {
            echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->


      <div class="l-common__body">
        <?php if(is_post_type_archive()):?>
        <h2>中学校・高等学校全体</h2>
        <?php else:?>
        <h2><?php single_term_title(); ?></h2>
        <?php endif;?>
      </div><!-- /.l-common -->


      <?php if (have_posts()) : ?>
      <div class="p-archive__list p-statement__list">
        <?php while (have_posts()) : the_post(); ?>
        <time datetime="<?php echo esc_attr(get_the_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_date('Y.n.j')); ?></time>

        <a href="<?php the_field('statement_file');?>" target="_blank">
          <?php the_title();?>
        </a>
        <?php endwhile; ?>
      </div>
      <?php else: ?>
      <p>記事がありません</p>
      <?php endif; ?>
      <!-- ページネーション -->
      <?php
    if ( function_exists( 'pagination' ) ) :
    pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
endif;
    ?>

    </div><!-- /.p-archive__left -->


    <!-- ▼ sidebar ==================================== -->
    <?php get_sidebar('statement'); ?>
    <!-- ▲ sidebar ==================================== -->

  </div><!-- /.p-archive -->


</div>

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
