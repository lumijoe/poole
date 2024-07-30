<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>senior/mv.jpg" alt="">
  <p class="bg-purple c-pagettl__ttl">
    高等学校の入試情報
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
      <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">説明会・公開行事</a>
      <a href="<?php echo esc_url(home_url('/exam/listening_senior/')); ?>">英語リスニング問題</a>
      <a href="<?php echo esc_url(home_url('/exam/application_senior/')); ?>">募集要項</a>
      <a href="<?php echo esc_url(home_url('/exam/honor_senior/')); ?>">特待生制度</a>
      <a href="<?php echo esc_url(home_url('/exam/transference_senior/')); ?>">転入・編入</a>
    </div><!-- /.c-btnList -->


  </div><!-- /.content -->
</section><!-- /.page -->
