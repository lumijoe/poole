<?php get_header(); ?>
<div class="c-pagettl">
  <img src="<?php echo $imagePath?>common/img-pagettl-guide.jpg?03" alt="スクールライフ">
  <p class="bg-blue c-pagettl__ttl">
    スクールライフ
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->


<div itemscope itemtype="https://schema.org/Blog">


  <section class="p-club__title">
    <div class="content">
      <h1>クラブ活動</h1>
      <strong>共に喜び、共に泣き、共に汗を流す。</strong>
      <p>
      クラブ活動は充実した「学びの場」、<br>「友情を育む場」です。
    </p>
      <picture>
        <source media="(max-width:767px )" srcset="<?php echo $imagePath?>club/title-sp.png">
        <img src="<?php echo $imagePath?>club/title-pc.png" alt="">
      </picture>
    </div><!-- /.content -->
  </section><!-- /.p-club__title -->

  <ul class="p-club__pagebtn">
    <li>
      <a href="#link1">
        文化部
      </a>
    </li>
    <li>
      <a href="#link2">
        運動部
      </a>
    </li>
    <li>
      <a href="#link3">
        宗教部
      </a>
    </li>
    <li>
      <a href="#link4">
        同好会
      </a>
    </li>
  </ul><!-- /.p-club__pagebtn -->


  <section class="l-common__body p-club__archive" id="link1">
    <div class="content">
      <h2>文化部</h2>
      <div class="p-club__archive__wrap">
        <?php
          $clubTitle = get_the_title();
          $news_query = new WP_Query(
        array(
          'post_type' => 'club',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation' => 'OR',
              array(
                'key' => 'club_cat',
                'value' => '文化部',
              )
        ),
        )
      ); ?>
        <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : ?>
        <?php $news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <figure>
            <img src="<?php $clubImages = get_field('club_images'); echo $clubImages['img1']?>" alt="<?php the_title(); ?>" width="277" height="193">
          </figure>
          <div class="p-club__archive__ttl">
            <h3><?php the_title(); ?></h3>
            <?php $clubTarget = get_field('club_target');
            if($clubTarget && $clubTarget != "中高"):?>
            <span <?php if($clubTarget == '中学のみ') echo 'class="orange"'; echo 'class="pink"'?>><?php echo $clubTarget;?></span>
            <?php endif;?>
          </div><!-- /.p-club__archive__ttl -->
        </a>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div><!-- /.content -->
  </section>


  <section class="l-common__body p-club__archive" id="link2">
    <div class="content">
      <h2>運動部</h2>
      <div class="p-club__archive__wrap">
        <?php
          $clubTitle = get_the_title();
          $news_query = new WP_Query(
        array(
          'post_type' => 'club',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation' => 'OR',
              array(
                'key' => 'club_cat',
                'value' => '運動部',
              )
        ),
        )
      ); ?>
        <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : ?>
        <?php $news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <figure>
            <img src="<?php $clubImages = get_field('club_images'); echo $clubImages['img1']?>" alt="<?php the_title(); ?>" width="277" height="193">
          </figure>
          <div class="p-club__archive__ttl">
            <h3><?php the_title(); ?></h3>
            <?php $clubTarget = get_field('club_target');
            if($clubTarget && $clubTarget != "中高"):?>
            <span <?php if($clubTarget == '中学のみ') echo 'class="orange"'; echo 'class="pink"'?>><?php echo $clubTarget;?></span>
            <?php endif;?>
          </div><!-- /.p-club__archive__ttl -->
        </a>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div><!-- /.content -->
  </section>


  <section class="l-common__body p-club__archive" id="link3">
    <div class="content">
      <h2>宗教部</h2>
      <div class="p-club__archive__wrap">
        <?php
          $clubTitle = get_the_title();
          $news_query = new WP_Query(
        array(
          'post_type' => 'club',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation' => 'OR',
              array(
                'key' => 'club_cat',
                'value' => '宗教部',
              )
        ),
        )
      ); ?>
        <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : ?>
        <?php $news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <figure>
            <img src="<?php $clubImages = get_field('club_images'); echo $clubImages['img1']?>" alt="<?php the_title(); ?>" width="277" height="193">
          </figure>
          <div class="p-club__archive__ttl">
            <h3><?php the_title(); ?></h3>
            <?php $clubTarget = get_field('club_target');
            if($clubTarget && $clubTarget != "中高"):?>
            <span <?php if($clubTarget == '中学のみ') echo 'class="orange"'; echo 'class="pink"'?>><?php echo $clubTarget;?></span>
            <?php endif;?>
          </div><!-- /.p-club__archive__ttl -->
        </a>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div><!-- /.content -->
  </section>

  <section class="l-common__body p-club__archive" id="link4">
    <div class="content">
      <h2>同好会</h2>
      <div class="p-club__archive__wrap">
        <?php
          $clubTitle = get_the_title();
          $news_query = new WP_Query(
        array(
          'post_type' => 'club',
          'posts_per_page' => -1,
          'meta_query' => array(
            'relation' => 'OR',
              array(
                'key' => 'club_cat',
                'value' => '同好会',
              )
        ),
        )
      ); ?>
        <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : ?>
        <?php $news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <figure>
            <img src="<?php $clubImages = get_field('club_images'); echo $clubImages['img1']?>" alt="<?php the_title(); ?>" width="277" height="193">
          </figure>
          <div class="p-club__archive__ttl">
            <h3><?php the_title(); ?></h3>
            <?php $clubTarget = get_field('club_target');
            if($clubTarget && $clubTarget != "中高"):?>
            <span <?php if($clubTarget == '中学のみ') echo 'class="orange"'; echo 'class="pink"'?>><?php echo $clubTarget;?></span>
            <?php endif;?>
          </div><!-- /.p-club__archive__ttl -->
        </a>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>

    </div><!-- /.content -->
  </section>


  <div class="content pb70">
    <div class="c-btnList mt100">
      <a href="<?php echo esc_url(home_url('/life/event/')); ?>">年間イベント</a>
      <a href="<?php echo esc_url(home_url('/life/club/')); ?>">クラブ活動</a>
      <a href="<?php echo esc_url(home_url('/life/oneday/')); ?>">一日の生活</a>
      <a href="<?php echo esc_url(home_url('/life/lifestyle/')); ?>">制服紹介 ・生活指導</a>
      <a href="<?php echo esc_url(home_url('/life/facility/')); ?>">校舎・施設</a>
    </div><!-- /.c-btnList -->
  </div><!-- /.content -->




</div>

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
