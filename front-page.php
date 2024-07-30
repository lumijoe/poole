<?php
/*
トップページ用テンプレート
*/
get_header(); ?>

<!-- ▼ content =========================================== -->
<main id="container">

  <div class="top__mv">
    <div class="top__mv__slider">
      <div class="swiper swiper-mv">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo $imagePath?>top/mv01-sp.png?0314">
              <img src="<?php echo $imagePath?>top/mv01-pc.png?0314" alt="">
            </picture>
          </div>
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo $imagePath?>top/mv02-sp.png?0314">
                <img src="<?php echo $imagePath?>top/mv02-pc.png?0314" alt="">
              </picture>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo $imagePath?>top/mv03-sp.png?0314">
                <img src="<?php echo $imagePath?>top/mv03-pc.png?0314" alt="">
              </picture>
            </a>
          </div>
          <!-- <div class="swiper-slide">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo $imagePath?>top/mv04-sp.png?0314">
              <img src="<?php echo $imagePath?>top/mv04-pc.png?0314" alt="">
            </picture>
          </div> -->
        </div>
        <div class="swiper-pagination"></div>
      </div><!-- /.swiper -->
    </div><!-- /.top__mv__slider -->
  </div><!-- /.top__mv -->




  <?php
$arg = array(
    'post_type' => 'topic',
    'posts_per_page' => 3
);
$topic_query = new WP_Query($arg); if ($topic_query->have_posts()) :?>
  <section class="top__topic">
    <div class="content">
      <h2>重要なお知らせ</h2>
      <div class="top__topic__inner">
        <?php while ($topic_query->have_posts()) : $topic_query->the_post();?>
        <?php if(get_field('topic_url')):?>
        <a href="<?php the_field('topic_url');?>" <?php if(get_field('topic_blank')) echo 'target="_blank"';?>>
          <time datetime="<?php echo esc_attr(get_the_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_date('Y.n.j')); ?></time>
          <h3><?php the_title(); ?></h3>
        </a>
        <?php else:?>
        <div>
          <time datetime="<?php echo esc_attr(get_the_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_date('Y.n.j')); ?></time>
          <h3><?php the_title(); ?></h3>
        </div>
        <?php endif;?>
        <?php endwhile; wp_reset_postdata();?>
      </div><!-- /.top__topic__inner -->

    </div><!-- /.content -->
  </section><!-- /.top__topic -->
  <?php endif;?>


  <div class="top__eventbnr">
    <div class="content">
      <?php
      $topEventbnr1 = get_field('top_eventbnr1');
      $topEventbnr2 = get_field('top_eventbnr2');
      $topEventbnr3 = get_field('top_eventbnr3');
      $topEventbnr4 = get_field('top_eventbnr4');
      ?>

      <?php if($topEventbnr1['bnr']):?>
      <a href="<?php echo $topEventbnr1['link'];?>" <?php if($topEventbnr1['target']) echo 'target="_blank"';?>>
        <img src="<?php echo $topEventbnr1['bnr'];?>" alt="" width="275" height="100">
      </a>
      <?php endif;?>

      <?php if($topEventbnr2['bnr']):?>
      <a href="<?php echo $topEventbnr2['link'];?>" <?php if($topEventbnr2['target']) echo 'target="_blank"';?>>
        <img src="<?php echo $topEventbnr2['bnr'];?>" alt="" width="275" height="100">
      </a>
      <?php endif;?>

      <?php if($topEventbnr3['bnr']):?>
      <a href="<?php echo $topEventbnr3['link'];?>" <?php if($topEventbnr3['target']) echo 'target="_blank"';?>>
        <img src="<?php echo $topEventbnr3['bnr'];?>" alt="" width="275" height="100">
      </a>
      <?php endif;?>

      <?php if($topEventbnr4['bnr']):?>
      <a href="<?php echo $topEventbnr4['link'];?>" <?php if($topEventbnr4['target']) echo 'target="_blank"';?>>
        <img src="<?php echo $topEventbnr4['bnr'];?>" alt="" width="275" height="100">
      </a>
      <?php endif;?>


    </div><!-- /.content -->
  </div><!-- /.top__eventbnr -->


  <section class="top__events">
    <h2 class="mincho top-secttl">
      説明会・公開行事
      <em>EVENTS</em>
    </h2><!-- /.micho -->

    <?php
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => -1,
            'meta_query' => array(        // メタクエリーを追加
        array(
            'key' => 'event_top',
            'value' => '1',
            'compare' => '='
        )
    )
        );
        $event_query = new WP_Query($args); ?>

    <div class="top__events__inner">
      <?php if($event_query->found_posts > 3):?>
      <div class="swiper swiper-events">
        <?php else:?>
        <div class="swiper is-noslide">
          <?php endif;?>
          <div class="swiper-wrapper">
            <?php if ($event_query->have_posts()) :
              while ($event_query->have_posts()) : $event_query->the_post();?>
            <?php
            $eventTxt = get_field('event_txt');
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


            <a href="<?php the_permalink();?>" class="swiper-slide">

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
            <?php
    endwhile; else :
    echo '<p style="text-align:center;width:100%;">現在受付中の行事はありません。<br>準備中や過去のイベントは下記ボタンよりご確認ください。</p>'; endif; ?>


          </div>
          <?php if($event_query->found_posts > 3):?>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <?php endif;wp_reset_postdata();?>
        </div>
      </div><!-- /.top__events__inner -->

    <ul class="top__events__links">
      <li>
        <a class="c-btn" href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">中学のイベント一覧はこちら</a>
      </li>
      <li>
        <a class="c-btn" href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">高校のイベント一覧はこちら</a>
      </li>
    </ul><!-- /.top__events__links -->
  </section><!-- /.top__events -->


  <section class="top__course">
    <div class="top__course__junior">
      <div class="content">
        <h2 class="mincho top-secttl">
      中学校
      <em>JUNIOR HIGH SCHOOL</em>
      </h2><!-- /.micho -->
        <dl>
          <dt>中学校コース紹介</dt>
          <dd>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/junior/ikkan/')); ?>">一貫特進コース</a></li>
              <li><a href="<?php echo esc_url(home_url('/junior/christianity/')); ?>">キリスト教大学推薦コース</a></li>
              <li><a href="<?php echo esc_url(home_url('/junior/tokushin/')); ?>">総合特進コース</a></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>中学校入試情報</dt>
          <dd>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/exam/application_junior/')); ?>">募集要項</a></li>
              <li><a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">説明会・公開行事</a></li>
              <li><a href="<?php echo esc_url(home_url('/exam/transference_junior/')); ?>">転入・編入</a></li>
              <li><a href="<?php echo esc_url(home_url('/exam/listening_junior/')); ?>">英語リスニング問題</a></li>
            </ul>
          </dd>
        </dl>
      </div><!-- /.content -->
    </div><!-- /.top__course__junior -->

    <div class="top__course__senior">
      <div class="content">
        <h2 class="mincho top-secttl">
      高等学校
      <em>SENIOR HIGH SCHOOL</em>
      </h2><!-- /.micho -->
        <dl>
          <dt>高校コース紹介</dt>
          <dd>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/senior/bunri/')); ?>">スーパー特進コース</a></li>
              <li><a href="<?php echo esc_url(home_url('/senior/tokushin/')); ?>">特進コース</a></li>
              <li><a href="<?php echo esc_url(home_url('/senior/kokusai/')); ?>">国際コース</a></li>
              <li><a href="<?php echo esc_url(home_url('/senior/sogogeijutsu/')); ?>">総合芸術コース</a></li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>高校入試情報</dt>
          <dd>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/exam/application_senior/')); ?>">募集要項</a></li>
              <li><a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">説明会・公開行事</a></li>
              <li> <a href="<?php echo esc_url(home_url('/exam/transference_senior/')); ?>">転入・編入</a></li>
              <li><a href="<?php echo esc_url(home_url('/exam/listening_senior/')); ?>">英語リスニング問題</a></li>
            </ul>
          </dd>
        </dl>
      </div><!-- /.content -->
    </div><!-- /.top__course__senior -->
  </section><!-- /.top__course -->


  <section class="top__news">
    <h2 class="mincho top-secttl">
      お知らせ
      <em>NEWS</em>
      </h2><!-- /.micho -->


    <div class="top__news__inner">
      <div class="top__news__list">
        <div class="swiper swiper-news">
          <div class="swiper-wrapper">
            <?php $news_query = new WP_Query(
        array(
          'post_type' => 'news',
          'posts_per_page' => 12,
        )
      ); ?>
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

        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div><!-- /.top__news__list -->
    </div><!-- /.top__news__inner -->
    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="top__news__link">
      お知らせ一覧はこちら
    </a><!-- /.top__news__link -->
  </section><!-- /.top__news -->


  <section class="top__aboutSchool">
    <div class="content">
      <h2 class="mincho top-secttl">
      学校について
      <em>ABOUT SCHOOL</em>
      </h2><!-- /.micho -->

      <div class="top__aboutSchool__inner">
        <a href="<?php echo esc_url(home_url('/guide/greetings/')); ?>">
          <img src="<?php echo $imagePath?>top/img-about01.jpg" alt="校長からのメッセージ" width="370" height="330">
          <div class="mincho">
            <h3>校長からのメッセージ</h3>
            <span>MESSAGE</span>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/guide/history/')); ?>">
          <img src="<?php echo $imagePath?>top/img-about02.jpg" alt="プール学院の歴史" width="370" height="330">
          <div class="mincho">
            <h3>プール学院の歴史</h3>
            <span>HISTORY</span>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/guide/facility/')); ?>">
          <img src="<?php echo $imagePath?>top/img-about03.jpg" alt="施設案内" width="370" height="330">
          <div class="mincho">
            <h3>施設案内</h3>
            <span>FACILITY</span>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/guide/about/')); ?>">
          <img src="<?php echo $imagePath?>top/img-about04.jpg" alt="プール学院の教育" width="370" height="330">
          <div class="mincho">
            <h3>プール学院の教育</h3>
            <span>EDUCATION</span>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/guide/access/')); ?>">
          <img src="<?php echo $imagePath?>top/img-about05.jpg" alt="交通アクセス" width="370" height="330">
          <div class="mincho">
            <h3>交通アクセス</h3>
            <span>ACCESS</span>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/life/lifestyle/')); ?>">
          <img src="<?php echo $imagePath?>top/img-about06.jpg" alt="制服紹介・生活指導" width="370" height="330">
          <div class="mincho">
            <h3>制服紹介・生活指導</h3>
            <span>UNIFORM</span>
          </div>
        </a>
      </div><!-- /.top__aboutSchool__inner -->
    </div><!-- /.content -->
  </section><!-- /.aboutSchool -->

  <section class="top__life">
    <h2 class="mincho top-secttl">
      学校生活
      <em>SCHOOL LIFE</em>
      </h2><!-- /.micho -->

    <div class="top__life__inner">
      <a href="<?php echo esc_url(home_url('/life/oneday/')); ?>">
        <h3>プール学院の1日</h3>
        <span>SCHOOL DAY</span>
        <img src="<?php echo $imagePath?>top/img-life01.jpg" alt="" width="510" height="410">
      </a>
      <a href="<?php echo esc_url(home_url('/life/event/')); ?>">
        <h3>年間イベント</h3>
        <span>EVENT</span>
        <img src="<?php echo $imagePath?>top/img-life02.jpg" alt="" width="510" height="410">
      </a>
      <a href="<?php echo esc_url(home_url('/life/club/')); ?>">
        <h3>クラブ活動</h3>
        <span>CLUB</span>
        <img src="<?php echo $imagePath?>top/img-life03.jpg" alt="" width="510" height="410">
      </a>
    </div><!-- /.top__life__inner -->
  </section><!-- /.top__life -->

  <section class="top__career">
    <div class="content">
      <h2 class="mincho top-secttl">
      進路・進学
      <em>CAREER/AVANCEMENT</em>
      </h2><!-- /.micho -->

      <div class="top__career__inner">
        <a href="<?php echo esc_url(home_url('/career/graduation/')); ?>">
          <figure>
            <img src="<?php echo $imagePath?>top/img-career01.jpg" alt="" width="345" height="242">
          </figure>
          <h3>進路実績</h3>
        </a>

        <a href="<?php echo esc_url(home_url('/career/guidance/')); ?>">
          <figure>
            <img src="<?php echo $imagePath?>top/img-career03.jpg" alt="" width="345" height="242">
          </figure>
          <h3>進路指導</h3>
        </a>
      </div><!-- /.top__career__inner -->
    </div><!-- /.content -->
  </section><!-- /.top__career -->








</main>
<!--/#content -->
<!-- ▲ content =========================================== -->

<?php get_footer(); ?>
