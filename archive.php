<?php get_header(); ?>
<div class="c-pagettl">
  <img src="<?php echo $imagePath?>common/img-pagettl-archive.jpg" alt="お知らせ一覧">
  <h1 class="bg-pink c-pagettl__ttl">
    お知らせ一覧
  </h1>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<div itemscope itemtype="https://schema.org/Blog">


  <div class="p-archive content">

    <div class="p-archive__left">
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/news/')); ?>">すべてのカテゴリ</a>
        <?php
          $terms = get_terms('news-cat');
          foreach ( $terms as $term ) {
            echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->


      <?php if (have_posts()) : ?>
      <div class="p-archive__list">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('tmp/include/news-list'); ?>
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
    <?php get_sidebar(); ?>
    <!-- ▲ sidebar ==================================== -->

  </div><!-- /.p-archive -->


</div>

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
