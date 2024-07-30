<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>career/mv.jpg?04" alt="">
  <p class="bg-green c-pagettl__ttl">
    進路・進学
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->




<section class="page__inner">
  <div class="content">

    <section>
      <h1 class="c-secttl is-red"><?php the_title();?></h1>
      <div class="c-flex-col2 mt50">
        <div>
          <h2 class="c-secttl-box">進路結果</h2>
          <img class="mt30" src="<?php echo $imagePath ?>career/graduation/result01.jpg" alt="大学進学率94.9%" width="555" height="352">
        </div>
        <div>
          <h2 class="c-secttl-box">4年制大学進学者内訳</h2>
          <img class="mt10" src="<?php echo $imagePath ?>career/graduation/result02.jpg" alt="国公立を含む難関大学に71.6%が進学" width="518" height="469">
        </div>
      </div><!-- /.c-flex-col2 -->
    </section>

    <section class="mt70">
      <h2 class="c-secttl-box">合格大学一覧</h2>
      <img class="mt30" src="<?php echo $imagePath ?>career/graduation/list01.jpg" alt="国公立10名、関関同立31名、産近甲龍38名、主要女子大77名、首都圏25名、海外1名、医歯薬看護系73名、食物栄養系15名、芸術系14名" width="1200" height="620">
    </section>

    <section class="mt70">
      <h2 class="c-secttl-box">指定校推薦一覧</h2>
      <img class="mt30" src="<?php echo $imagePath ?>career/graduation/list02.jpg" alt="指定校推薦の対象となるコース在籍者190名に対し、147大学、800名以上の指定校枠が付与されています" width="1200" height="649">
    </section>

    <div class="c-btnList mt100">
      <a href="<?php echo esc_url(home_url('/career/graduation/')); ?>">進路実績</a>
      <a href="<?php echo esc_url(home_url('/career/guidance/')); ?>">進路指導</a>
    </div><!-- /.c-btnList -->


  </div><!-- /.content -->
</section><!-- /.page -->
