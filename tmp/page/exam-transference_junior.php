<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>/junior/mv.jpg" alt="">
  <p class="bg-orange c-pagettl__ttl">
    中学校入試情報
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->




<section class="page__inner">
  <div class="content">

    <h1 class="c-secttl is-red mb30"><?php the_title();?></h1>

    <section class="l-common__body">
      <?php if(!empty($post->post_content)):?>
      <?php the_content();?>
      <?php endif; ?>
    </section>




    <div class="c-btnList mt100">
      <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">説明会・公開行事</a>
      <a href="<?php echo esc_url(home_url('/exam/listening_junior/')); ?>">英語リスニング問題</a>
      <a href="<?php echo esc_url(home_url('/exam/application_junior/')); ?>">募集要項</a>
      <a href="<?php echo esc_url(home_url('/exam/honor_junior/')); ?>">特待生制度</a>
      <a href="<?php echo esc_url(home_url('/exam/transference_junior/')); ?>">転入・編入</a>
    </div><!-- /.c-btnList -->


  </div><!-- /.content -->
</section><!-- /.page -->
