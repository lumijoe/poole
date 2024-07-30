<?php get_header(); ?>
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<!-- ▼ content =========================================== -->


<div class="content">

  <div class="p-event">
    <article>
      <!--ループ開始 -->
      <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
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
      $eventForm = get_field('event_form');
      $eventInfo = get_field('event_info');
      ?>


      <section class="p-event__day">
        <strong>
          <?php echo $eventMonth;?>.<?php echo $eventDay;?>
        </strong>
        <em <?php
                 if($eventHoliday):
                    echo 'class="pink"';
                    elseif($eventWeek === '土' && !$eventHoliday):
                    echo 'class="blue"';
                    else :
                    endif;
                  ?>>
          （<?php echo $eventWeek;?><?php if($eventHoliday) echo '・祝';?>）</em>
        <p>
                <?php echo $eventStart;?><?php if($eventEnd) echo '〜' . $eventEnd;?>
              </p>
      </section><!-- /.p-event__day -->

      <section class="p-event__title">
        <h1><?php the_title(); ?></h1>
        <ul>
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
      </section><!-- /.p-event__title -->

      <p class="p-event__subttl">
        <?php echo $eventTxt;?>
      </p><!-- /.p-event__subttl -->

	  <div class=" l-common__body p-event__body">
        <?php the_content();?>
      </div><!-- /.l-common__body -->

      <section class="l-common__body">

        <div class="event-table">
          <table>
            <tbody>
              <tr>
                <th>日時</th>
                <td>
                  <?php echo $eventYear;?>.<?php echo $eventMonth;?>.<?php echo $eventDay;?>
                  <span <?php
                 if($eventHoliday):
                    echo 'class="pink"';
                    elseif($eventWeek === '土' && !$eventHoliday):
                    echo 'class="blue"';
                    else :
                    endif;
                  ?>>
                    （<?php echo $eventWeek;?><?php if($eventHoliday) echo '・祝';?>）</span>
                  <?php echo $eventStart;?><?php if($eventEnd) echo '〜' . $eventEnd;?><br>
                  <?php if($eventCom) echo $eventCom;?>
                </td>
              </tr>
              <tr>
                <th>対象</th>
                <td>
                  <?php echo $eventTarget;?>
                </td>
              </tr>
              <tr>
                <th>会場</th>
                <td>
                  <?php echo $eventPlace;?>
                </td>
              </tr>
              <tr>
                <th>お知らせ</th>
                <td>
                  <?php echo $eventInfo;?>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- /.event-table -->
      </section>


      <?php
        $post_id = get_the_ID();
        $terms = get_the_terms($post_id, 'event-status');
        $display_html = false;
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                if ($term->slug == 'open') {
                    $display_html = true;
                    break;
                }
            }
        }
        ?>      
      <?php if ($display_html): ?>
      <div class="l-common">
        <a href="<?php echo $eventForm ; ?>" class="c-btn" target="_blank">申込フォームはこちら</a><!-- /.c-btn -->
      </div><!-- /.l-common -->
      <?php endif;?>      

      <?php endwhile; endif; ?>
      <!--ループ終了-->


    </article>

  </div>



</div>
<!-- ▲ content =========================================== -->

</main>
<!-- ▲ container =================================================== -->

<?php get_footer(); ?>
