<a href="<?php the_permalink(); ?>" <?php if(is_home() || is_front_page()) echo 'class="swiper-slide"'?>>
  <figure class="top__news__thumbnail">
    <?php if (has_post_thumbnail()) : ?>
    <?php
                $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                $image_url = $image_data[0];
                ?>
    <?php the_post_thumbnail(); ?>
    <?php else:?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/dummy.jpg" alt="<?php the_title(); ?>" width="277" height="193">
    <?php endif; ?>
  </figure>
  <div class="top__news__tag-date">
    <ul class="top__news__tag">
      <?php
          $termsNewsCat = get_the_terms($post->ID,'news-cat');
          if ( ! is_wp_error( $termsNewsCat ) && ! empty( $termsNewsCat ) ) {
            foreach ($termsNewsCat as $term) {
              echo '<li class="js-link '.$term->slug.'" data-url="'.get_term_link($term->slug, 'news-cat').'">'.$term->name.'</li>';
            }
          }
        ?>
    </ul>
    <span><time datetime="<?php echo esc_attr(get_the_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_date('Y.n.j')); ?></time></span>
  </div><!-- /.top__news__tag-date -->

  <?php if(is_home() || is_front_page() || is_singular('club')):?>
  <h3 class="top__news__title"><?php the_title(); ?></h3>
  <?php else:?>
  <h2 class="top__news__title"><?php the_title(); ?></h2>
  <?php endif;?>
</a>
