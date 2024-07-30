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
  <p class="mt20">本校中学校、高等学校を卒業し、来年度本校での教育実習を希望される方は、下記フォームに従って必要事項を登録してください。<br>
ドメイン名：@poole.ed.jpを受信できるようにメール受信の設定をお願いします。自動返信メールが迷惑メールに分類されている場合がありますのでご確認ください。<br>
オリエンテーションの日程等の詳細は締め切り後（例年は6月中旬）にメールにてご連絡いたします。<br>
なお、申し込み者多数の場合や担当教科の都合上、お引受できない場合がありますので、ご了承ください。</p>

</div><!-- /.content -->

<div class="content p-contact">

  <div class="p-contact__inner">
    <?php the_field('contact');?>

  </div><!-- /.p-contact__inner -->
</div><!-- /.content -->