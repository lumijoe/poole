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

    <section>
      <h1 class="c-secttl is-red"><?php the_title();?></h1>
      <p class="mt40">プール学院では、入学金や授業料等の納付金額相当分を奨学金として給付する「特待生制度」を設けております。<br>
        成績基準など、詳細についてはお問い合わせください。</p>
      <h2 class="c-secSubttl-m is-red u-fontSize-m mt30">1.成績優秀特待生制度（全コース／専願・併願&emsp;対象）</h2>
      <p class="mt10">中学校における成績が極めて優秀な方には入学金全額免除の特待生制度があります。<br>
        ※コースによって成績基準が異なります。</p>
      <h2 class="c-secSubttl-m is-red u-fontSize-m mt30">2.クラブ特待生制度（特進コース・総合芸術コース／専願のみ&emsp;対象）</h2>
      <p class="mt10">中学校において、以下のクラブに所属し、人物・技術ともに優秀な方には入学金全額免除の特待生制度があります。<br>
        対象クラブ：吹奏楽部、陸上競技部、ソフトボール部<br>
        ※クラブごとに、公式大会での成績など基準があります。<br>
        ※クラブ・生徒会の優遇制度とは異なる制度です。<br>
        ※1、2の特待生制度は、出願よりも前に、中学校を通しての申請が必要です。<br>
        詳細はお問い合わせください。</p>
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
