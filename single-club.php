<?php get_header(); ?>
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<!-- ▼ content =========================================== -->


<div class="content">

  <div class="p-club">
    <article>
      <!--ループ開始 -->
      <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
      <?php
      $clubMes = get_field('club_mes');
      $clubAbout = get_field('club_about');
      $clubMember = get_field('club_member');
      $clubHistory = get_field('club_record');
      $clubInsta = get_field('club_insta');
      $clubTarget = get_field('club_target');
      $newsClub = get_field('news_club');
      ?>


      <h1 class="p-club__ttl"><?php the_title(); ?></h1><!-- /.p-club__ttl -->


      <section class="l-common__body">
        <h2>クラブからのメッセージ</h2>

        <div class="p-club__mes">
          <div class="p-club__slider">
            <div class="swiper-container swiper-club">
              <div class="swiper-wrapper">

                <?php if( have_rows('club_images') ): ?>
                <?php while( have_rows('club_images') ): the_row(); ?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img1');?>" alt="">
                </div>

                <?php if(get_sub_field('img2')):?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img2');?>" alt="">
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('img3')):?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img3');?>" alt="">
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('img4')):?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img4');?>" alt="">
                </div>
                <?php endif; ?>

                <?php endwhile; ?>
                <?php endif; ?>

              </div>
            </div>

            <div class="swiper-container slider-thumbnail">
              <div class="swiper-wrapper">
                <?php if( have_rows('club_images') ): ?>
                <?php while( have_rows('club_images') ): the_row(); ?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img1');?>" alt="">
                </div>

                <?php if(get_sub_field('img2')):?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img2');?>" alt="">
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('img3')):?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img3');?>" alt="">
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('img4')):?>
                <div class="swiper-slide">
                  <img src="<?php the_sub_field('img4');?>" alt="">
                </div>
                <?php endif; ?>

                <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div><!-- /.p-club__slider-->

          <div class="p-club__text">
            <p><?php echo $clubMes;?></p>
            <?php if($clubInsta):?>
            <a class="insta" href="<?php echo $clubInsta;?>" target="_blank">インスタグラムはこちら</a>
            <?php endif;?>
          </div>
        </div><!-- /.p-club__mes -->

        <h2>主な活動内容</h2>
        <p><?php echo $clubAbout;?></p>

        <h2>部員数</h2>
        <p><?php echo $clubMember;?></p>

        <h2>主な戦績や実績</h2>
        <p><?php echo $clubHistory;?></p>


      </section>

      <?php endwhile; else: ?>
      <p>記事がありません</p>
      <?php endif; ?>
      <!--ループ終了-->
    </article>

    <section>

      <div class="l-common__body">
        <h2>お知らせ</h2>
      </div><!-- /.l-common__body -->

      <div class="p-archive__list p-club__news">
        <?php
          $club_id = get_the_ID();

          $news_query = new WP_Query(array(
    'post_type' => 'news',
    'posts_per_page' => 12,
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key' => 'news_clubpage',
        'value' => $club_id,
        'compare' => 'LIKE',
      ),
      array(
        'key' => 'news_clubcheck',
        'value' => '1',
      ),
    ),
  )); ?>
        <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : ?>
        <?php $news_query->the_post(); ?>

        <?php get_template_part('tmp/include/news-list'); ?>
        <?php endwhile; ?>

        <?php else: ?>
        <p>記事がありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>



      </div>
    </section>


    <div class="l-common">
      <a href="<?php echo esc_url( home_url( '/life/club/' ) ); ?>" class="c-btn">クラブ活動一覧へ</a><!-- /.c-btn -->
    </div><!-- /.l-common -->



  </div>



</div>
<!-- ▲ content =========================================== -->

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
