<aside class="l-sidebar">
  <h2 class="l-sidebar__ttl mincho">最新の記事</h2>
  <ul class="l-sidebar__list l-sidebar__statement">
    <?php
      $posttype = 'statement';
        $args = array(
        'post_type' => $posttype,
        'posts_per_page' => 3, //記事数
      );

      $st_query = new WP_Query($args);
      ?>
    <?php if ($st_query->have_posts()): ?>
    <?php while ($st_query->have_posts()) : $st_query->the_post(); ?>
    <li>
      <time datetime="<?php echo esc_attr(get_the_date(DATE_ISO8601)); ?>"><?php echo esc_html(get_the_date('Y.n.j')); ?></time>
      <a href="<?php the_field('statement_file');?>" target="_blank">
        <?php the_title();?>
      </a>
    </li>
    <?php endwhile; ?>
    <?php else: ?>
    <p>新しい記事はありません</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </ul>
  <h2 class="l-sidebar__ttl mincho">月別記事一覧</h2>
  <ul class="l-sidebar__list">
    <?php wp_get_archives(
          array(
          'post_type' => "statement",
          'limit' => '5',
          'type' => 'monthly',
          'show_post_count' => '1')
      ); ?>
  </ul>
</aside>
