<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>guide/greetings/mv.jpg" alt="">
  <p class="bg-blue c-pagettl__ttl">
    スクールライフ
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->




<section class="page__inner">
  <div class="content">
    <section>
      <h1 class="c-secttl is-red"><?php the_title();?></h1>
      <div class="c-flex-col4 mt40">
        <div>
          <img src="<?php echo $imagePath ?>life/lifestyle/uniform01.jpg" alt="">
          <h3 class="u-center u-red u-fontSize-m mt20 u-bold">冬 服</h3>
          <p class="mt10">白い衿のセーラー服にネクタイをコーディネート。濃紺のプリーツスカートで清楚な印象に。</p>
        </div>
        <div>
          <img src="<?php echo $imagePath ?>life/lifestyle/uniform02.jpg" alt="">
          <h3 class="u-center u-red u-fontSize-m mt20 u-bold">夏 服</h3>
          <p class="mt10">清楚なセーラーカラーのオーバーブラウスと濃紺の車ひだスカートで爽やかな印象を。</p>
        </div>
        <div>
          <img src="<?php echo $imagePath ?>life/lifestyle/uniform03.jpg" alt="">
          <h3 class="u-center u-red u-fontSize-m mt20 u-bold">カーディガン</h3>
          <p class="mt10">制服にコーディネートできるカーディガン。</p>
        </div>
        <div>
          <img src="<?php echo $imagePath ?>life/lifestyle/uniform04.jpg" alt="">
          <h3 class="u-center u-red u-fontSize-m mt20 u-bold">コート</h3>
          <p class="mt10">冬のコートは、刺繍の入った大きな衿とボタンがポイント。</p>
        </div>
      </div><!-- /.c-flex-col4 -->
    </section>

    <section class="mt90">
      <h2 class="c-secttl is-red">生活指導</h2>
      <p class="u-copy mt60">日々の学校生活を通して、<br>TPOをわきまえることのできる誇り高い女性に育てます。</p>
      <h3 class="c-secttl-box mt50">生徒部長より</h3>
      <div class="l-imgTxt mt30">
        <img src="<?php echo $imagePath ?>life/lifestyle/message.jpg" alt="" width="380" height="260">
        <div>
          <p>私たちの学校における生活指導の目標は、「集団生活におけるルールやマナーを身に付け、必要に応じて自分自身をコントロールする能力を備え、かつ自主的に行動できる女性を育てること」です。</p>
          <p class="mt20">本校では、様々な個性を持った生徒たちが、その個性を発揮しながら生活しています。現代は昔と違って、多様な生き方が認められる時代です。生徒たちも、自分と周りの人々の個性をお互いに大切にしながら、未来へ向かって日々切磋琢磨しています。<br>
            一方、最近では「個性を大切にする」ことと「自分勝手にふるまう」ということが、しばし混同して理解されていることがあります。時代によって価値観はさまざまに変わります。しかし、社会で生活するために必要なことは、今も昔も大きく変わりません。<br>
            プール学院では、生徒たちに日々の学校生活を通して、社会に出てTPO（時と場所と場合）をわきまえることのできる、誇り高い女性に成長して欲しいと願っています。</p>
        </div>
      </div><!-- /.l-imgTxt -->
      <ul class="c-listLink mt70 c-flex-col2 u-center is-bold">
        <li>
          <a class="u-fontSize-m" href="/pdf/life/lifestyle/SeitokokoroeJH.pdf" target="_blank" rel="noopener noreferrer">中学 生徒心得</a>
        </li>
        <li>
          <a class="u-fontSize-m" href="/pdf/life/lifestyle/SeitokokoroeHS.pdf" target="_blank" rel="noopener noreferrer">高校 生徒心得</a>
        </li>
      </ul><!-- /.c-listLink -->
    </section>


    <div class="c-btnList mt100">
      <a href="<?php echo esc_url(home_url('/life/event/')); ?>">年間イベント</a>
      <a href="<?php echo esc_url(home_url('/life/club/')); ?>">クラブ活動</a>
      <a href="<?php echo esc_url(home_url('/life/oneday/')); ?>">一日の生活</a>
      <a href="<?php echo esc_url(home_url('/life/lifestyle/')); ?>">制服紹介 ・生活指導</a>
      <a href="<?php echo esc_url(home_url('/life/facility/')); ?>">校舎・施設</a>
    </div><!-- /.c-btnList -->


  </div><!-- /.content -->
</section><!-- /.page -->
