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

    <section>
      <h1 class="c-secttl is-red"><?php the_title();?></h1>
      <h2 class="c-secSubttl-m is-red u-fontSize-m mt40">1.成績優秀特待生制度（一貫特進コース対象）</h2>
      <p class="mt10">一貫特進コースの成績優秀者（プレテストと入試成績）には、中学3年間の授業料が免除（全額または半額）となる特待生制度があります。<br>
        （その他成績基準があります）</p>
      <h2 class="c-secSubttl-m is-red u-fontSize-m mt40">2.英検特待生制度（全コース対象）</h2>
      <p class="mt10">実用英語技能検定（英検）の取得級によって、入学金免除の特待生制度があります。<br>
        3級以上取得&emsp;入学金全額免除<br>
        4級取得&emsp;入学金半額免除<br>
        ※出願時に英検の合格証（Certification Card）を提出された方に限ります。<br>
        ※入学手続きとして一旦入学金を入金していただき、入学後に返金いたします。<br>
        詳細はお問い合わせください。</p>
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
