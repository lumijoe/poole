<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>for_graduate/mv.jpg" alt="">
  <p class="bg-red c-pagettl__ttl">
    卒業生の方へ
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->

<div class="content">
  <h1 class="c-secttl-red mt50"><?php the_title();?></h1>
  <p class="mt20">内容をご確認後「送信」ボタンをクリックしてください。</p>

</div><!-- /.content -->

<div class="content p-contact">

  <div class="p-contact__inner">
    <?php the_field('contact');?>

  </div><!-- /.p-contact__inner -->
</div><!-- /.content -->
