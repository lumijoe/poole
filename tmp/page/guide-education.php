<div class="c-pagettl">
  <img src="<?php echo $imagePath ?>guide/greetings/mv.jpg" alt="">
  <p class="bg-pink c-pagettl__ttl">
    学校紹介
  </p>
</div><!-- /.c-pagettl -->
<!-- ▼ breadcrumb =============================== -->
<?php custom_breadcrumb(); ?>
<!-- ▲ breadcrumb =============================== -->


<style>
  .tokusyoku-fv_nav--3 {
    width: calc((100% / 3) - 10px) !important;
    font-size: clamp(14px, 4vw, 14px) !important;
    margin-inline: inherit !important;
  }

  .tokusyoku-fv_nav--2 {
    width: calc(100% / 3) !important;
    font-size: clamp(14px, 4vw, 14px) !important;
    margin-inline: inherit !important;
    padding-left: 5%;
    padding-right: 1%;

  }

  .tokusyoku-fv_nav--3::before {
    transform: rotate(90deg);
  }

  .tokusyoku-fv_nav--2::before {
    transform: rotate(90deg);
  }

  .tokusyoku-fv_nav--1 {
    width: 100% !important;
    font-size: clamp(10px, 4vw, 14px) !important;
    margin-inline: inherit !important;
  }

  .tokusyoku-fv_nav--1::before {
    transform: rotate(90deg);
  }

  .mt15 {
    margin-top: 15px;
  }

  .tokusyoku-fv_text-wrapper {
    padding-top: 35px;
  }

  .c-secSubttl--pink {
    color: #f17192 !important;
    font-weight: 300;
    position: relative;
    padding-left: 16px;
    margin-bottom: 28px;
    font-family: 'Noto Serif JP', serif;
    line-height: 28px !important;
    font-size: clamp(26px, 2vw, 16px) !important;
  }

  /* 細Light300、標準Regular400、中Medium500、太字Bold700 */
  .semiBold {
    font-weight: 600 !important;
  }

  .c-secSubttl--pink::before {
    content: "";
    background-color: #f17192;
    display: inline-block;
    width: 5px;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
  }

  .tokusyoku-fv_text {
    font-size: 18px !important;
    line-height: 32px !important;
  }

  .u-fontWeight300 {
    font-weight: 300 !important;
  }

  .u-noto {
    font-family: 'Noto Serif JP', serif;
  }

  .weight400 {
    font-weight: 400;
  }

  .u-fontSize2840 {
    font-size: 28px !important;
    line-height: 40px !important;
  }

  .u-fontSize1632 {
    font-size: 16px !important;
    line-height: 32px !important;
  }

  .u-fontSize2628 {
    font-size: 26px !important;
    line-height: 36px !important;
  }

  .u-fontSize1828bold {
    font-size: 18px !important;
    line-height: 28px !important;
    font-weight: bold !important;
  }

  .u-fontSize1628bold {
    font-size: 16px !important;
    line-height: 28px !important;
    font-weight: bold !important;
  }

  .u-detailtext {
    font-size: 14px !important;
    line-height: 1.5em !important;
    font-weight: bold !important;
  }

  .u-detailtext--sgh {
    font-size: clamp(8px, 2vw, 14px) !important;
    line-height: 1.3rem !important;
    font-weight: bold;
  }

  .u-fontSize1828pink {
    font-size: 18px !important;
    line-height: 28px !important;
    font-weight: bold !important;
    color: #f17192 !important;
  }

  .u-fontSize1828red {
    font-size: 18px !important;
    line-height: 28px !important;
    font-weight: bold !important;
    color: #C74954 !important;
  }

  .u-fontSize1834 {
    font-size: 18px !important;
    line-height: 34px !important;
  }

  .u-fontSize1628 {
    font-size: 16px !important;
    line-height: 28px !important;
  }

  .u-fontSize1624 {
    font-size: 16px !important;
    line-height: 24px !important;
  }

  .u-fontSize14 {
    font-size: 14px !important;
    font-weight: bold !important;
  }

  .u-fontSize16 {
    font-size: 18px !important;
  }

  .is-pink {
    background-color: #f17192 !important;
    color: #fff !important;
    margin-bottom: 10px !important;
    padding-top: 6px !important;
    padding-bottom: 6px !important;
  }

  .mt59 {
    margin-top: 59px !important;
  }

  .mt47 {
    margin-top: 47px !important;
  }

  .pb15 {
    padding-bottom: 15px !important;
  }

  .h50 {
    height: 50px !important;
  }

  .mb77 {
    margin-bottom: 77px !important;
  }

  .p-text-nowrap {
    text-wrap: nowrap !important;
  }

  .u-fontSize1730bold {
    font-size: 17px !important;
    line-height: 30px !important;
    font-weight: bold !important;
  }

  .pt19 {
    padding-top: 19px !important;
  }

  .bold {
    font-weight: bold !important;
  }

  .j-space-between {
    justify-content: space-between !important;
  }

  .pl20 {
    padding-left: 20px !important;
  }

  .ml20 {
    margin-left: 18px !important;
  }

  .label-ml20 {
    margin-left: 18px !important;
  }

  .ml10 {
    margin-left: 7px !important;
  }

  .p-ed__archive__ttl--orange {
    background-color: #dc6530 !important;
    color: #fff !important;
    font-size: clamp(18px, 2vw, 14px);
    padding-top: 0.15em !important;
    padding-bottom: 0.3em !important;
    padding-left: 0.5em !important;
    padding-right: 0.5em !important;
    vertical-align: text-top !important;
  }

  .p-ed__archive__ttl--pink {
    background-color: #c55c98 !important;
    color: #fff !important;
    font-size: clamp(18px, 2vw, 14px);
    padding-top: 0.15em !important;
    padding-bottom: 0.3em !important;
    padding-left: 0.5em !important;
    padding-right: 0.5em !important;
    vertical-align: text-top !important;
  }

  .c-btnList--sp {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 10px;
    line-height: 1.3;
    padding-top: 2px;
  }

  .c-btnList--sp a {
    width: 100%;
    max-width: 100%;
    height: auto;
    display: grid;
    place-items: center;
    font-size: 1.5rem;
    border: 1px solid #ccc;
    font-weight: 700;
    position: relative;
    margin-inline: auto;
    padding-bottom: 8px;
  }

  .c-btnList--sp.is-current {
    background-color: #c74954;
    color: #fff;
    border: 1px solid #c74954;
  }

  .c-btn--more {
    background-color: #c74954 !important;
    color: #fff !important;
    display: grid !important;
    place-content: center !important;
    font-size: 1.6rem !important;
    font-weight: 700 !important;
    position: relative !important;
    height: 63px !important;
    margin-inline: 0px;
  }

  .m0auto {
    margin: 0 auto !important;

  }

  .label-sp {
    text-wrap: nowrap;
  }

  .pc-none {
    display: none;
  }

  .sp-mt32 {
    margin-top: 32px !important;
  }

  .sectionRelativeScroll {
    position: relative;
  }

  .spanAbsoluteScroll {
    position: absolute;
    top: -50px;
    width: 100px;
    height: 50px;
  }

  .p-ed__archive__textlogo-wrapper {
    display: grid;
    grid-template-columns: 0.57fr 0.43fr;
    gap: 50px;
    justify-content: space-between;
    align-items: center;
  }

  @media screen and (min-width: 1024px) {
    .c-btnList a {
      font-size: 1.2rem;
    }

    .c-btnList {
      gap: 10px 1.25%;
    }
  }

  @media screen and (max-width: 767px) {
    .c-btn--more {
      margin-inline: auto !important;
    }

    .p-ed__archive__textlogo-wrapper {
      grid-template-columns: 1fr;
      gap: 0px;
    }

    .p-logo-sgh {
      width: 320px;
    }


    .tokusyoku-fv_nav--1 {
      font-size: clamp(12px, 3vw, 14px) !important;
    }

    .tokusyoku-fv_nav--2 {
      font-size: clamp(12px, 3vw, 14px) !important;
    }

    .tokusyoku-fv_nav--3 {
      font-size: clamp(12px, 3vw, 14px) !important;
    }

    .label-sp {
      text-wrap: nowrap !important;
    }

    .pc-none {
      display: block !important;
    }

    .label-ml20 {
      margin-left: 0px !important;
    }

    .sp-mblockend0start40 {
      margin-block-end: 0px !important;
      margin-block-start: 40px !important;
    }
  }

  @media screen and (max-width: 840px) {
    .label-ml20 {
      margin-left: 0px !important;
    }

    .label-sp {
      text-wrap: nowrap !important;
    }

    .pc-none {
      display: block !important;
    }

    .img85060 {
      max-width: 60%;
    }

  }

  @media screen and (max-width: 958px) {
    .fv-flex {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 0px !important;
    }

    .page__inner {
      padding-bottom: 0px;
    }

    .sp-mt40 {
      margin-top: 40px !important;
    }

    .tokusyoku-fv_nav--2 {
      padding-left: 3% !important;
    }
  }

  @media screen and (max-width: 634px) {
    .tokusyoku-fv_nav--3 {
      padding-left: 3% !important;
    }
  }

  @media screen and (max-width: 520px) {
    .from521none {
      display: none;
    }

    .sp-mb0 {
      margin-bottom: 0px !important;
    }

    .tokusyoku-fv_nav--2 {
      padding-top: 12px;
      padding-left: 1% !important;
      padding-right: 1% !important;
      background-color: #C74954;
      border: solid 1px #C74954 !important;
      color: #fff;
      letter-spacing: 0.25em !important;
    }

    .tokusyoku-fv_nav--3 {
      padding-top: 12px;
      padding-left: 1% !important;
      padding-right: 1% !important;
      background-color: #C74954;
      border: solid 1px #C74954 !important;
      color: #fff;
      letter-spacing: 0.3em !important;
    }

    .tokusyoku-fv_nav--1 {
      padding-top: 12px;
      padding-left: 1% !important;
      padding-right: 1% !important;
      background-color: #C74954;
      border: solid 1px #C74954 !important;
      color: #fff;
      letter-spacing: 0.3em !important;
    }

    .sp-arrow {
      margin-block: 0px !important;
      width: 7px !important;
      transform: rotate(90deg);
      /* padding-bottom:6px; */
      margin-top: 5px !important;
      padding-left: 0px !important;
    }

    .tokusyoku-fv_nav--1 a::before {
      display: none !important;
    }

    .tokusyoku-fv_nav--2 a::before {
      display: none !important;
    }

    .tokusyoku-fv_nav--3 a::before {
      display: none !important;
    }

    .tokusyoku-fv_nav--1 a {
      height: auto;
    }

    .tokusyoku-fv_nav--2 a {
      height: auto;
    }

    .tokusyoku-fv_nav--3 a {
      height: auto;
    }
  }

  @media screen and (min-width: 521px) {
    .till520none {
      display: none;
    }
  }
</style>
<section class="page__inner">
  <div class="content">
    <!-- KL タイトル左のicon -->
    <h1 class="c-secttl is-red">特色教育</h1>
    <div class="l-imgTxt mt40 fv-flex">
      <div class="sp-mt32">
        <p>プール学院では、豊かな人格の形成を目指す「キリスト教教育」、総合力を育む「探究学習」、グローバルマインドを醸成する「英語教育」の３つを柱として、様々な学習の場を設けています。<br> 世界的な視野をもち、社会に目を向け、私たちをとりまく大きな課題を身近なものとし、社会や人のために何ができるのかを考え、実践することのできる人が、プール学院の目指す人間像です。</p>
        <nav class="from521none">
          <div class="content m0auto">
            <div class="c-btnList mt70 j-space-between sp-mt40">
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#education01" class="tokusyoku-fv_nav--2">キリスト教教育</a>
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#education02" class="tokusyoku-fv_nav--3">探究学習</a>
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#education03" class="tokusyoku-fv_nav--3">英語学習</a>
            </div>
            <div class="c-btnList mt15">
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#challengeprogram" class=" tokusyoku-fv_nav--1">3つの特色教育を支えるチャレンジプログラム</a>
            </div>
          </div>
        </nav>
        <nav class="till520none">
          <div class="content m0auto">
            <div class="c-btnList--sp mt70 j-space-between sp-mt40">
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#education01" class="tokusyoku-fv_nav--2">キリスト教教育 <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/common/icon/arrow.png" alt="" class="sp-arrow"></a>
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#education02" class="tokusyoku-fv_nav--3">探究学習<img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/common/icon/arrow.png" alt="" class="sp-arrow"></a>
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#education03" class="tokusyoku-fv_nav--3">英語学習<img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/common/icon/arrow.png" alt="" class="sp-arrow"></a>
            </div>
            <div class="c-btnList--sp mt15">
              <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/education#challengeprogram" class=" tokusyoku-fv_nav--1">3つの特色教育を支えるチャレンジプログラム<img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/common/icon/arrow.png" alt="" class="sp-arrow"></a>
            </div>
          </div>
        </nav>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_fv.png" alt="" width="420" height="263" class="sp-mblockend0start40">
    </div><!-- /.content -->
  </div>
</section>

<!-- プール学院の教育01 -->
<section class="mt70 u-bgYellow pt70 pb70 sectionRelativeScroll">
  <!-- <section class="mt70 u-bgYellow pt70 pb70" id="education01"> -->
  <!-- scrollspan -->
  <span id="education01" class="spanAbsoluteScroll"></span>
  <div class="content">
    <h2 class="u-copy u-center sp-mb0">プール学院の教育01</h2>
    <img src="https://lkcodetest.sakura.ne.jp/testsite/assets/img/tokusyoku/cross.png" alt="">
    <h3 class="c-secttl-box">キリスト教教育</h3>
    <div class="l-imgTxt mt30">
      <div>
        <h2 class="c-secSubttl-m is-red u-fontSize-m mt30 u-fontSize2840 u-fontWeight300 u-noto">感謝と奉仕の実践ともに祈り、<br class="pc">ともに生きる</h2>
        <p class="mt10 u-fontSize1632">キリスト教の最も重要な教えは「愛」を学び分かち合うことです。<br> 他者も自分も同じように神さまに愛されている存在として、互いの尊厳を大切にする隣人愛を学び、社会や他の人のために何ができるのかを考え、<br class="pc">実践することのできる人を目指します。</p>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_01_2c.png" alt="" width="552" height="263" class="img85060">
    </div>
    <!-- content -->
    <div>
      <h4 class="c-secSubttl-m is-red u-fontSize-m mt30 c-secSubttl--pink u-fontSize2628 u-noto">愛と奉仕の精神</h4>
      <h5 class="u-fontSize1628bold u-noto">〜あらゆる出来事を“自分事”として向き合い主体的に行動を起こす人へ〜</h5>
      <p class="mt10 u-fontSize1628">毎朝の礼拝や聖書の授業、宗教行事を通して、生きること、愛すること、社会に貢献することのよろこびを学びます。<br> 「愛と奉仕の精神」を基に、他者と共に生きること、自分たちが支えられていることへの感謝を実感し、<br class="pc"> 自分たちも他者のために奉仕することの大切さを身につけます。</p>
      <div class="c-flex-col4 mt30">
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_02_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main01.jpg" alt=""> -->
          <p class="mt10 u-detailtext">毎朝の礼拝</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_03_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main02.jpg" alt=""> -->
          <p class="mt10 u-detailtext">聖書の授業</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_04_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main03.jpg" alt=""> -->
          <p class="mt10 u-detailtext">教会礼拝</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_05_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main04.jpg" alt=""> -->
          <p class="mt10 u-detailtext">クリスマス礼拝</p>
        </div>
      </div>
    </div>
    <!-- content -->
    <div>
      <h4 class="c-secSubttl-m is-red u-fontSize-m mt59 c-secSubttl--pink u-fontSize2628 u-noto">人びとの心によりそう「隣り人」となる</h4>
      <p class="u-fontSize1628">さまざまな社会的課題のある世界で、ひとつひとつの課題と丁寧に向き合い、困難を抱えている人や地域の「隣り人」となる人間性を育みます。</p>
      <div class="c-flex-col4 mt30">
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_06_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main01.jpg" alt=""> -->
          <p class="mt10 u-detailtext">思春期講座</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_07_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main02.jpg" alt=""> -->
          <p class="mt10 u-detailtext">ピース大阪にて平和学習</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_08_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main03.jpg" alt=""> -->
          <p class="mt10 u-detailtext">生野区コリアタウン<br>フィールドワーク</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_09_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main04.jpg" alt=""> -->
          <p class="mt10 u-detailtext">つながる街頭募金</p>
        </div>
      </div>
    </div>
    <!-- content -->
    <div>
      <h4 class="c-secSubttl-m is-red u-fontSize-m mt59 c-secSubttl--pink u-fontSize2628 u-noto">ボランティア・平和教育</h4>
      <h5 class="u-fontSize1828bold u-noto">〜“Servant Leader” 「愛と奉仕」の担い手として〜</h5>
      <p class="mt10 u-fontSize1628">かけがえのない唯一の存在であり、さまざまな違いを持つ「他者」を大切にし、「他者」に仕え、<br class="pc">「他者」とともに生きるために自らを成長させることを目指します。</p>
      <div class="c-flex-col4 mt30">
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_10_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main01.jpg" alt=""> -->
          <p class="mt10 u-detailtext">釜ヶ崎フィールドワーク<br>（炊き出しボランティア）</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_11_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main02.jpg" alt=""> -->
          <p class="mt10 u-detailtext">タイSWK（スラウィヤカーン）校<br class="pc">
            歓迎プログラム</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_12_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main03.jpg" alt=""> -->
          <p class="mt10 u-detailtext">朝の礼拝オルガニストギルド研修会</p>
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education01_13_2c.png" alt="">
          <!-- <img src="<?php echo $imagePath ?>life/facility/main04.jpg" alt=""> -->
          <p class="mt10 u-detailtext">クリスマス礼拝奉仕</p>
        </div>
      </div>
    </div>
</section><!-- /.u-bgYellow -->


<!-- プール学院の教育02 -->
<section class=" pt70 sectionRelativeScroll">
  <span id="education02" class="spanAbsoluteScroll"></span>
  <div class="content">
    <h2 class="u-copy u-center mb30">プール学院の教育02</h2>
    <h3 class="c-secttl-box ">探究学習</h3>
    <div class="l-imgTxt mt30">
      <div>
        <h2 class="c-secSubttl-m is-red u-fontSize-m mt30 u-fontSize2840 u-fontWeight300 u-noto">総合力をはぐくむ</h2>
        <p class="mt10 u-fontSize1632">プール学院では社会に出てからも必要とされる総合力の基礎をはぐくむことを目標に、探究学習に積極的に取り組んでいます。 中学では、3年間で自らの興味・関心を基にテーマを掲げ、それについての「論文」を作成します。 高校では社会にある諸問題について調べ、その解決に向け「考え」、「実践する」ことを学びます。 こうした学びを通し、「社会に貢献できる人間」を目指します。</p>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_01_2c.png" alt="" width="552" height="263" class="img85060">
    </div>
    <!-- content -->
    <div>
      <!-- cssの追加 -->
      <h4 class="c-secSubttl-m is-red u-fontSize-m mt30 c-secSubttl--pink u-fontSize2628 u-noto">総合的な学習（論文指導）<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap ">中学</span></span></h4>
      <!-- <h4 class="c-secSubttl-m is-red u-fontSize-m mt30">before:: 総合的な学習（論文指導）<span class="orange">中学</span></h4> -->
      <h5 class="mt10 u-fontSize1628">「問い」を見つけ「探究」し「発信」する総合力をはぐくむアクティブラーニングの実践</h5>

      <section class="c-flex-col3 mt20 mb77">
        <div>
          <em class="u-label is-pink mt10 u-fontSize18"><span class="u-fontSize14">［中学1年］</span><span class="u-noto">知識を獲得する</span></em><!-- /.c-label -->
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_02_2c.png" alt="" width="370" height="180" class="pb15">
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">図書館（LRC）の使い方</h4>
          <p class="u-fontSize1624 pb15">図書の分類法など図書館を使いこなす力を育みます。</p>
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">レポート・まとめ文の書き方</h4>
          <p class="u-fontSize1624 pb15">本のポップ作りに始まって、レポートやまとめ文の書き方を学びます。</p>
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">論文テーマを決める</h4>
          <p class="u-fontSize1624">探究領域の決定を楽しみながら行います。</p>
        </div>
        <div>
          <em class="u-label is-pink mt10 u-fontSize18"><span class="u-fontSize14">［中学2年］</span><span class="u-noto">問いをもつ</span></em><!-- /.c-label -->
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_03_2c.png" alt="" width="370" height="180" class="pb15">
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">論文作成ガイダンス</h4>
          <p class="u-fontSize1624 pb15">論文の書き方やテーマ設定の仕方、情報の集め方などを学びます。</p>
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">論文テーマの検討</h4>
          <p class="u-fontSize1624 pb15">アドバイスを受けながら、論文テーマのリサーチを行います。</p>
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">テーマ決定と概要の提出</h4>
          <p class="u-fontSize1624">論文のテーマを決定し、概要を組み立てていきます。</p>
        </div>
        <div>
          <em class="u-label is-pink mt10 u-fontSize18"><span class="u-fontSize14">［中学3年］</span><span class="u-noto">探究する</span></em><!-- /.c-label -->
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_04_2c.png" alt="" width="370" height="180" class="pb15">
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">論文作成</h4>
          <p class="u-fontSize1624 pb15">本格的な論文の書き方を学び、作成スタートします。</p>
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">審査・修正指導</h4>
          <p class="u-fontSize1624">下書きとして提出された卒業論文を審査。きめの細かい修正指導を行います。</p>
        </div>
        <div>
          <em class="u-label is-pink mt10 u-fontSize18"><span class="u-noto">発表する</span></em><!-- /.c-label -->
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_05.png" alt="" width="370" height="180" class="pb15">
          <h4 class="c-secSubttl-m u-orange u-fontSize1828pink">発表</h4>
          <p class="u-fontSize1624">論文内容について「口頭試問」を受け、「ポスタープレゼン」を実施。コンクール入賞者は中学校全生徒に向けて発表します。</p>
        </div>
      </section><!-- /.u-flex-col2 -->
    </div>
    <!-- content -->
    <div>
      <!-- cssの追加 -->
      <h4 class="c-secSubttl-m is-red u-fontSize-m mt30 c-secSubttl--pink u-fontSize2628 u-noto">グローカルスタディ<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--pink label-ml20 p-text-nowrap">高校</span><span class="u-noto">（高 l ～高 lll希望者）</span></span></h4>
      <div class="p-ed__archive__textlogo-wrapper">
        <h5 class="mt10 u-fontSize1628">高校では全員が学ぶ総合的な探究の授業「アカデミア」を礎として、さらに、希望する人は実際にある社会の問題の解決に向け、実践的に取り組む授業「グローカル」で学びを深めます。</h5>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/logotext_sgh@2x.png" alt="" width="500" height="auto" class="p-logo-sgh">
          <!-- <p class="u-detailtext--sgh">「SGH（スーパーグローバルハイスクール）ネットワーク」参加校</p> -->
        </div>
      </div>


      <section class="c-flex-col3 mt20 mb50">
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_06_2c.png" alt="" width="370" height="180">
          <h4 class="c-secSubttl-m u-orange mt20 u-fontSize1828red">高校1年 Glocal StudyⅠ</h4>
          <p class="u-fontSize1624">フィールドワークやゲストスピーカーの講演を通じて地域の課題を知る。</p>
          <ul class="c-list pt19">
            <li class="u-detailtext">多文化共生社会の実態を知る</li>
            <li class="u-detailtext">生野区在住の外国籍の方との交流</li>
            <li class="u-detailtext">「やさしい日本語」でつながるプロジェクト</li>
            <li class="u-detailtext">プレゼンテーションの実践</li>
          </ul>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_sdgs01.svg" alt="" width="370" height="auto" class="pt19">
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_07_2c.png" alt="" width="370" height="180">
          <h4 class="c-secSubttl-m u-orange mt20 u-fontSize1828red">高校2年 Glocal StudyⅡ</h4>
          <p class="u-fontSize1624">女性、子ども、外国籍の方を取り巻く課題について学び、地域から世界へと視野を広げる。</p>
          <ul class="c-list pt19">
            <li class="u-detailtext">生野区の商店街訪問や施設入居者の方との交流</li>
            <li class="u-detailtext">世界が抱える課題（飢餓・難民など）の学び</li>
            <li class="u-detailtext">諸課題について英語でのプレゼンを実践</li>
          </ul>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_sdgs02.svg" alt="" width="370" height="auto" class="pt19">
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_08_2c.png" alt="" width="370" height="180">
          <h4 class="c-secSubttl-m u-orange mt20 u-fontSize1828red">高校3年 Glocal StudyⅢ</h4>
          <p class="u-fontSize1624">地域や世界の課題を個々の視点で捉え、テーマ別アクションプランを検討し実行を目指す。</p>
          <ul class="c-list pt19">
            <li class="u-detailtext">フードロス解消のための取り組み</li>
            <li class="u-detailtext">「ジェンダー」についての考察</li>
            <li class="u-detailtext">生徒による独自の課題設定</li>
          </ul>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_sdgs03.svg" alt="" width="370" height="auto" class="pt19">
        </div>
        <div>
          <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education02_09_2c.png" alt="" width="370" height="180">
          <h4 class="c-secSubttl-m u-orange mt20 u-fontSize1828red">全国高校生フォーラム、甲南大学リサーチフェスタなどへの参加</h4>
          <p class="u-fontSize1624 pt19">全国の高校で「地域協働プログラム」に取り組んでいる生徒のみなさんとの探究成果発表会に、本校も参加し発表しています。</p>
        </div>
      </section><!-- /.u-flex-col2 -->
    </div>
  </div>
</section>

<!-- プール学院の教育03 -->
<section class="mt70 u-bgYellow pt70 pb70 sectionRelativeScroll">
  <span id="education03" class="spanAbsoluteScroll"></span>
  <div class="content">
    <h2 class="u-copy u-center mb30">プール学院の教育03</h2>
    <h3 class="c-secttl-box">英語学習</h3>
    <div class="l-imgTxt mt30 j-space-between">
      <div>
        <h2 class="c-secSubttl-m is-red u-fontSize-m mt30 u-fontSize2840 u-fontWeight300 u-noto">英語教育はもちろんのこと、<br class="pc"> 国際的な視野で社会に貢献する人を育てる<br class="pc">真の「国際教育」を実践します。</h2>
        <p class="mt10 u-fontSize1632">「グローバル教育」という言葉がなかった時代から、先進的な「グローバル教育」を実践してきたプール学院。英語教育はもちろんのこと、愛と奉仕の精神をもって、グローバルな舞台で活躍できるサーバントリーダーの育成を目指します。</p>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_01_2c.png" alt="" width="552" height="263" class="img85060">
    </div>
    <!-- content -->
    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628 u-noto">TT（ネイティブ教員×日本人教員による授業）<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span></span></h4>
          <p class="u-fontSize1632">熟練したネイティブ教員と日本人英語教員による授業。ペアワーク、グループワークなど様々な形式でゲームや歌などを楽しみながら英語に親しんでいきます。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_02_2c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628 u-noto">英語合宿<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span></span></h4>
          <p class="u-fontSize1632">パスポートのいらない英国といわれる福島県のBritish Hillsで3日間、英語だけの生活をします。海外研修に行くための日常英会話などとともにあいさつやテーブルマナーなども学びます。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_03_2c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628">朝テスト<br class="pc-none"><span class="label-sp"><span class=" p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span><span class="p-ed__archive__ttl--pink ml10 p-text-nowrap">高校</span></span></h4>

          <p class="u-fontSize1632">全コースで週に２回、英語の朝テストを実施しています。高１と高２ではリスニングと速読のテストを、高３では受験につながる長文読解や単語のテストを実施しています。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_04_2c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628">E-Act<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span><span class="p-ed__archive__ttl--pink ml10 p-text-nowrap">高校</span></span></h4>
          <p class=" u-fontSize1632">年2回、英語のみで行う学習プログラム。最初はクイズやゲームなど、英語コミュニケーションを楽しむことから始まります。回数を重ねるごとに少しずつ内容もレベルアップしていく中で、活きた英語力が身につきます。高校ではディベートやディスカッション、プレゼンテーションへと進みます。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_05_2c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628 u-noto">英検対策講座「PREP」<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span><span class="p-ed__archive__ttl--pink ml10 p-text-nowrap">高校</span></span></h4>
          <p class="u-fontSize1632">大学入試でも必要性の高まる英検の資格。希望者は放課後に実施される校内予備校「ＰＲＥＰ」に参加し、英検取得を確実なものにします。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_06_2c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628 u-noto">ICTを活用した英語学習<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span><span class="p-ed__archive__ttl--pink ml10 p-text-nowrap">高校</span></span></h4>
          <p class="u-fontSize1632">PC室を開放し、スタサプENGLISHやオンライン交流などで英語の力を伸ばします。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_072c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628 u-noto">シンガポール修学旅⾏<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--pink label-ml20 p-text-nowrap">高校</span></span></h4>
          <p class="u-fontSize1632">高２の夏に全員でシンガポールを訪問します。シンガポールは多言語・多民族が共生する国際国家で、多彩な文化のコラージュが美しい都市です。<br>現地では、観光のみならず、シンガポール聖公会との連携のもとで教会礼拝や高校生との交流を行います。<br>また国境を越えてマレーシアやインドネシアも訪れ、ムスリムの文化にふれるアクティビティも行います。<br>グローバル化の時代を生きるみなさんにふさわしい刺激的なプログラムです。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_08_2c.png" alt="" width="300" height="225">
      </div>
    </div>

    <div>
      <div class="l-imgTxt j-space-between mt47">
        <div>
          <h4 class="c-secSubttl-m is-red u-fontSize-m c-secSubttl--pink u-fontSize2628 u-noto">グローバルチャレンジ<br class="pc-none"><span class="label-sp"><span class="p-ed__archive__ttl--orange label-ml20 p-text-nowrap">中学</span><span class="p-ed__archive__ttl--pink ml10 p-text-nowrap">高校</span></span></h4>
          <p class="u-fontSize1632">プール学院では、教育目標のひとつである「グローバル教育」の取り組みの一環として、海外研修プログラムを実施。<br>それぞれのプログラム内容もさらに充実していきます。</p>
        </div>
        <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_education03_09_2c.png" alt="" width="300" height="225">
      </div>
    </div>
    <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/international/" class="c-btn mt40 c-btn--more" target="_blank" rel="noopener noreferrer" style="max-width: 250px;">詳しくはこちら</a>
  </div>
</section><!-- /.u-bgYellow -->

<!-- contetnt -->
<section class="pt70 sectionRelativeScroll">
  <span id="challengeprogram" class="spanAbsoluteScroll"></span>
  <div class="content">
    <h1 class="c-secttl is-red">3つの特色教育を支えるチャレンジプログラム</h1>
    <div class="l-imgTxt mt30">
      <p>チャレンジプログラムは「キリスト教教育」「探究学習」「英語学習」の3つの特色教育のほか、希望の進路を実現するための学習プログラムです<br>プール学院は、一人ひとりが夢を見つけ、それを育てていける学校でありたい。その思いから、正規のカリキュラム以外に、様々なチャレンジプログラムを用意しています。<br>授業での知識や技能習得はもちろん、大学入試や社会で必要となる、自らが興味を持った事柄について、考え、極め、発信できる力を育てていくことを目標にしています。夢を見つけて、自分がもっと自分らしく成長していく。本校で、そんなチャレンジをしてみませんか。</p>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_challenge01_2c.png" alt="" width="552" height="auto" style="max-width:50%;">
    </div>
    <!-- content -->
    <h3 class="c-secttl-box mt30">放課後学習チャレンジ</h3>
    <div class="l-imgTxt mt30">
      <div>
        <p class="u-fontSize1632">多種多様な体験プログラムを実施しています。多くの生徒たちが、<br class="pc">これらの体験を通して夢をみつけ、大きく成長しています。</p>
        <div style="display: flex; flex-direction: row;">
          <ul class="c-list mt30">
            <li class="u-detailtext">部活動への参加</li>
            <li class="u-detailtext">グローカルスタディへの参加</li>
            <li class="u-detailtext">ＰＣ室での創作活動、動画授業の受講</li>
            <li class="u-detailtext">進路アドバイザーとの面談</li>
          </ul>
          <ul class="c-list mt30 pl20">
            <li class="u-detailtext">放課後自習への参加</li>
            <li class="u-detailtext">英検対策講座ＰＲＥＰ受講（有料）</li>
            <li class="u-detailtext">大学入試対策講座受講</li>
            <li class="u-detailtext">放課後学習センター（ＴＯＭＡＳ）<br>への参加（有料）など</li>
          </ul>
        </div>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_challenge02_2c.png" alt="" width="552" height="auto" style="max-width:50%;">
    </div>
    <!-- content -->
    <h3 class="c-secttl-box mt30">課外活動体験チャレンジ</h3>
    <div class="l-imgTxt mt30">
      <div>
        <p class="u-fontSize1632">多種多様な体験プログラムを実施しています。多くの生徒たちが、<br class="pc">これらの体験を通して夢をみつけ、大きく成長しています。</p>
        <div style="display: flex; flex-direction: row;">
          <ul class="c-list mt30">
            <li class="u-detailtext">夢ナビライブ参加</li>
            <li class="u-detailtext">卒業生に聴く</li>
            <li class="u-detailtext">大学模擬授業体験</li>
            <li class="u-detailtext">首都圏大学キャンパスツアーへの参加</li>
          </ul>
          <ul class="c-list mt30 pl20">
            <li class="u-detailtext">釜ヶ崎炊き出しボランティア参加</li>
            <li class="u-detailtext">看護師体験</li>
            <li class="u-detailtext">保育士体験</li>
            <li class="u-detailtext">医療系学部体験 など</li>
          </ul>
        </div>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_challenge03.png" alt="" width="552" height="auto" style="max-width:50%;">
    </div>
    <!-- content -->
    <h3 class="c-secttl-box mt30">グローバルチャレンジ</h3>
    <div class="l-imgTxt mt30">
      <div>
        <p class="u-fontSize1632">教育目標の一つである「グローバル教育」。みんなが参加できるよう、<br class="pc">様々な形のプログラムを用意して実施しています。</p>
        <div style="display: flex; flex-direction: row;">
          <ul class="c-list mt30">
            <li class="u-detailtext">海外への修学旅行 （シンガポール・マレーシア）</li>
            <li class="u-detailtext">Ｅ-Ａｃｔ校内英語体験プログラム</li>
            <li class="u-detailtext">韓国、タイ姉妹校交流（訪問・来校）</li>
          </ul>
          <ul class="c-list mt30 pl20">
            <li class="u-detailtext">オーストラリア語学研修</li>
            <li class="u-detailtext">イギリス語学研修</li>
            <li class="u-detailtext">ニュージーランド短期語学留学</li>
            <li class="u-detailtext">カナダ1年留学 など</li>
          </ul>
        </div>
        <a href="https://lkcodetest.sakura.ne.jp/testsite/guide/international/" class="c-btn c-btn--more" target="_blank" rel="noopener noreferrer" style="max-width: 250px;">詳しくはこちら</a>
      </div>
      <img src="https://poole.ed.jp/wp/wp-content/themes/poole/assets/img/tokusyoku/tokusyoku_challenge04.png" alt="" width="552" height="auto" class="sp-mblockend0start40" style="max-width:50%;">
    </div>
</section>

<div class="content">
  <div class="c-btnList mt100 mb100">
    <a href="<?php echo esc_url(home_url('/guide/greetings/')); ?>">校長挨拶</a>
    <a href="<?php echo esc_url(home_url('/guide/about/')); ?>">教育理念</a>
    <a href="<?php echo esc_url(home_url('/guide/history/')); ?>">歴史・沿革</a>
    <a href="<?php echo esc_url(home_url('/guide/education/')); ?>">特色教育</a>
    <a href="<?php echo esc_url(home_url('/guide/international/')); ?>">グローバルチャレンジプログラム</a>
  </div><!-- /.c-btnList -->
</div><!-- /.content -->


</section><!-- /.page -->