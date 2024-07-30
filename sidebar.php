<aside class="l-sidebar">
  <h2 class="l-sidebar__ttl mincho">年度別</h2>
  <ul class="l-sidebar__list">
    <?php wp_get_archives(
          array(
          'post_type' => "news",
          'limit' => '5',
          'type' => 'yearly',
          'show_post_count' => '0')
      ); ?>
  </ul>
</aside>
