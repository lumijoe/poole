<?php get_header(); ?>
<div class="c-pagettl">
  <img src="<?php echo $imagePath?>common/img-pagettl-archive.jpg" alt="お知らせ一覧">
  <p class="bg-pink c-pagettl__ttl">
    お知らせ
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<!-- ▼ content =========================================== -->


<div class="content">

  <div class="l-common">

    <article>
      <!--ループ開始 -->
      <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
      <div class="l-common__meta">
        <!-- 日付 -->
        <time datetime="<?php echo esc_attr(get_the_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_date('Y.n.j')); ?></time>
        <!-- カテゴリ名 -->
        <?php if ($terms = get_the_terms($post->ID, 'news-cat')) {
              foreach ($terms as $term) {
                echo '<span class="'. $term->slug .'">' . $term->name .'</span>';
              }
            } ?>
      </div>
      <h1 class="l-common__ttl"><?php the_title(); ?></h1>

      <?php if (has_post_thumbnail()) : ?>
      <figure class="l-common__thumbnail">

        <?php
                $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                $image_url = $image_data[0];
                ?>
        <?php the_post_thumbnail(); ?>

      </figure>
      <?php endif; ?>


      <section class="l-common__body">
        <?php if(!empty($post->post_content)):?>
        <?php the_content();?>
        <?php endif; ?>
      </section>


      <a href="<?php echo esc_url( home_url( 'news/' ) ); ?>" class="c-btn">お知らせ一覧へ</a><!-- /.c-btn -->



      <?php endwhile; else: ?>
      <p>記事がありません</p>
      <?php endif; ?>
      <!--ループ終了-->
    </article>


    <!-- ▼ sidebar ==================================== -->
    <?php get_sidebar(); ?>
    <!-- ▲ sidebar ==================================== -->



  </div>



</div>
<!-- ▲ content =========================================== -->

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
