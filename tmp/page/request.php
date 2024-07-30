<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>request/mv.jpg" alt="">
  <h1 class="bg-red c-pagettl__ttl">
    <?php the_title();?>
  </h1>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="c-btn p-contact__btn">お問い合わせはこちら</a><!-- /.c-btn -->


<div class="content p-contact">
  <div class="p-contact__inner">
    <?php the_field('contact');?>
  </div><!-- /.p-contact__inner -->
</div><!-- /.content -->
