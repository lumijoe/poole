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
      <?php elseif(is_tax('event-category','senior')):?>
      <h1><span>高等学校</span>説明会・公開行事</h1>
      <?php else:?>
      <h1>説明会・公開行事</h1>
      <?php endif; ?>

      <p class="p-event__archive__txt">オープンスクール＆イベントカレンダー</p>


      <?php if(is_tax('event-category','junior')): ?>
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">すべてのカテゴリ</a>
        <?php
          $terms = get_terms('event-status');
          foreach ( $terms as $term ) {
            echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->

      <?php elseif(is_tax('event-category','senior')):?>
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">すべてのカテゴリ</a>
        <?php
          $terms = get_terms('event-status');
          foreach ( $terms as $term ) {
            echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->


      <?php else:?>
      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event/')); ?>">すべてのカテゴリ</a>
        <?php
          $terms = get_terms('event-status');
          foreach ( $terms as $term ) {
            echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
          }
        ?>
      </div><!-- /.c-catlist -->
      <?php endif; ?>


      <?php if (have_posts()) : ?>
      <div class="p-event__list">
        <?php while (have_posts()) : the_post(); ?>
        <?php
      $eventTxt = get_field('event_txt');
      $eventYear = get_field('event_year');
      $eventMonth = get_field('event_month');
      $eventDay = get_field('event_day');
      $eventWeek = get_field('event_week');
      $eventHoliday = get_field('event_holiday');
      $eventStart = get_field('event_start');
      $eventEnd = get_field('event_end');
      $eventCom = get_field('event_com');
      $eventTarget = get_field('event_target');
      $eventPlace = get_field('event_place');
      ?>
        <a href="<?php the_permalink();?>">

          <div class="top__events__ttl">
            <strong class="top__events__date">
              <?php echo $eventMonth;?>.<?php echo $eventDay;?>
              <span <?php
                 if($eventHoliday):
                    echo 'class="pink"';
                    elseif($eventWeek === '土' && !$eventHoliday):
                    echo 'class="blue"';
                    else :
                    endif;
                  ?>>
                （<?php echo $eventWeek;?><?php if($eventHoliday) echo '・祝';?>） </span>
            </strong><!-- /.top__events__date -->

            <p class="top__events__time">
                <?php echo $eventStart;?><?php if($eventEnd) echo '〜' . $eventEnd;?>
              </p><!-- /.top__events__time -->
            <h3 class="top__events__title"><?php the_title();?></h3>
          </div><!-- /.top__events__title -->
          <ul class="top__events__tag">
            <?php
                 $termsStatus = get_the_terms($post->ID,'event-status');
                if ( ! is_wp_error( $termsStatus ) && ! empty( $termsStatus ) ) {
                  foreach ($termsStatus as $term) {
                    echo '<li class="js-link '.$term->slug.'" data-url="'.get_term_link($term->slug, 'event-status').'">'.$term->name.'</li>';
                  }
                }
               ?>
            <?php
                 $termsCats = get_the_terms($post->ID,'event-category');
                if ( ! is_wp_error( $termsCats ) && ! empty( $termsCats ) ) {
                  foreach ($termsCats as $termsCat) {
                    echo '<li class="js-link '.$termsCat->slug.'" data-url="'.get_term_link($termsCat->slug, 'event-category').'">'.$termsCat->name.'</li>';
                  }
                }
               ?>
          </ul>
          <p class="top__events__text">
              <?php echo $eventTxt;?>
            </p><!-- /.top__events__text -->
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


      <div class="c-catlist">
        <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">説明会・公開行事</a>
        <a href="<?php echo esc_url(home_url('/exam/listening_junior/')); ?>">英語リスニング問題</a>
        <a href="<?php echo esc_url(home_url('/exam/application_junior/')); ?>">募集要項</a>
        <a href="<?php echo esc_url(home_url('/exam/honor_junior/')); ?>">特待生制度</a>
        <a href="<?php echo esc_url(home_url('/exam/transference_junior/')); ?>">転入・編入</a>
      </div><!-- /.c-catlist -->

    </div><!-- /.content -->
  </section>



</div>

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
