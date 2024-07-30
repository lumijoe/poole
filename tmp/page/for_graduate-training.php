<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>for_graduate/mv.jpg" alt="">
  <p class="bg-red c-pagettl__ttl">
    卒業生の方へ
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->


<section class="page__inner">
  <div class="content">

    <section>
      <h1 class="c-secttl-red mb30"><?php the_title();?></h1>
      <section class="l-common__body">
        <?php if(!empty($post->post_content)):?>
        <?php the_content();?>
        <?php endif; ?>
      </section>
    </section>
  </div><!-- /.content -->
</section><!-- /.page -->
