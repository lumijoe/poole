<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>guide/greetings/mv.jpg" alt="">
  <p class="bg-pink c-pagettl__ttl">
    学校紹介
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->




<section class="page__inner">
  <div class="content">

    <section>
      <h1 class="c-secttl is-red"><?php the_title();?></h1>
      <p class="u-center mt40">〒544-0033&emsp;大阪市生野区勝山北1-19-31</p>
      <p class="u-fontSize-l u-red u-bold u-center mt10">TEL.06-6741-7005</p>
      <iframe class="mt10" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13127.947879617142!2d135.5279949!3d34.655032!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000de06e5fa499b%3A0x6b1c5fe90507dbd0!2z44OX44O844Or5a2m6Zmi5Lit5a2m5qCh44O76auY562J5a2m5qCh!5e0!3m2!1sja!2sjp!4v1703647175962!5m2!1sja!2sjp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <p class="mt30">本校周辺での駐停車は、近隣の方々へのご迷惑となり、道路・歩道の通行の妨げや事故の原因となりますのでお控えください。</p>

      <h2 class="c-secttl-box mt80">電車でのアクセス</h2>
      <div class="u-center">
        <img class="mt30" src="<?php echo $imagePath ?>guide/access/access-map.jpg" alt="JR環状線桃谷駅南口より徒歩5分" width="1139" height="967">
      </div>
    </section>


    <div class="c-btnList mt100">
      <a href="<?php echo esc_url(home_url('/guide/greetings/')); ?>">校長挨拶</a>
      <a href="<?php echo esc_url(home_url('/guide/about/')); ?>">教育理念</a>
      <a href="<?php echo esc_url(home_url('/guide/history/')); ?>">歴史・沿革</a>
      <a href="<?php echo esc_url(home_url('/guide/international/')); ?>">特色教育</a>
    </div><!-- /.c-btnList -->


  </div><!-- /.content -->
</section><!-- /.page -->
