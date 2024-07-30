<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>recruit/mv.jpg" alt="">
  <h1 class="bg-red c-pagettl__ttl">
    テンプレート
  </h1>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->


<section class="page__inner">
  <div class="content">
    <section class="l-common__body">
      <?php if(!empty($post->post_content)):?>
      <?php the_content();?>
      <?php endif; ?>
    </section>
  </div><!-- /.content -->
</section><!-- /.page -->
