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
