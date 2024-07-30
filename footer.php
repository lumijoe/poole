<?php require('lib/const.php'); ?>

<section class="l-conversion">
  <div class="l-conversion__request">
    <h2>
      資料請求
      <em>DOCUMENT REQUEST</em>
      </h2><!-- /.micho -->
    <a href="<?php echo esc_url(home_url('/request/')); ?>" class="l-conversion__link">
      資料請求はこちら
    </a>
    <div class="l-conversion__img">
      <img src="<?php echo $imagePath?>common/pamphlet-junior.jpg" alt="プール学院中学校 資料" width="155" height="219">
      <img src="<?php echo $imagePath?>common/pamphlet-senior.jpg" alt="プール学院高等学院 資料" width="155" height="219">
    </div><!-- /.l-conversion__img -->
  </div><!-- /.l-conversion__request -->

  <div class="l-conversion__contect">
    <h2>
      お問い合わせ<em>CONTACT</em>
      </h2><!-- /.micho -->
    <a class="l-conversion__tel" href="tel:06-6741-7005">06-6741-7005</a>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="l-conversion__link">
      メールでのお問い合わせ
    </a>
  </div><!-- /.l-conversion__contect -->
</section><!-- /.l-conversion -->

<footer class="l-footer">
  <div class="l-footer__inner">
    <nav class="l-footer__nav">
      <dl>
        <dt>学校紹介</dt>
        <dd>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/guide/greetings/')); ?>">校長挨拶</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/guide/about/')); ?>">教育理念</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/guide/history/')); ?>">歴史・沿革</a>
            </li>

            <li>
              <a href="<?php echo esc_url(home_url('/guide/international/')); ?>">特色教育</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/guide/access/')); ?>">交通アクセス</a>
            </li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt>スクールライフ</dt>
        <dd>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/life/event/')); ?>">年間イベント</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/life/club/')); ?>">クラブ活動</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/life/oneday/')); ?>">一日の生活</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/life/lifestyle/')); ?>">制服紹介・生活指導</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/life/facility/')); ?>">校舎・施設</a>
            </li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt>中学校</dt>
        <dd>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/junior/ikkan/')); ?>">一貫特進コース</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/junior/christianity/')); ?>">キリ教大学推薦コース</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/junior/tokushin/')); ?>">総合特進コース</a>
            </li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt>高等学校</dt>
        <dd>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/senior/bunri/')); ?>">スーパー特進コース</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/senior/tokushin/')); ?>">特進コース</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/senior/kokusai/')); ?>">国際コース</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/senior/sogogeijutsu/')); ?>">総合芸術コース</a>
            </li>
            <!-- <li>
              <a href="<?php echo esc_url(home_url('/senior/sogogeijutsu/')); ?>">語学研修・探究（アカデミア・グローカル）</a>
            </li> -->
          </ul>
        </dd>
      </dl>
      <dl class="wide">
        <dt>入試情報</dt>
        <dd>
          <em>中学校</em>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">説明会・公開行事</a>
            </li>

            <li>
              <a href="<?php echo esc_url(home_url('/exam/application_junior/')); ?>">募集要項</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/exam/honor_junior/')); ?>">特待生制度</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/exam/listening_junior/')); ?>">英語リスニング問題</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/exam/transference_junior/')); ?>">転入・編入</a>
            </li>
          </ul>
        </dd>
        <dd>
          <em>高等学校</em>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">説明会・公開行事</a>
            </li>

            <li>
              <a href="<?php echo esc_url(home_url('/exam/application_senior/')); ?>">募集要項</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/exam/honor_senior/')); ?>">特待生制度</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/exam/listening_senior/')); ?>">英語リスニング問題</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/exam/transference_senior/')); ?>">転入・編入</a>
            </li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt>進路・進学</dt>
        <dd>
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('/career/graduation/')); ?>">進路実績</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/career/guidance/')); ?>">進路指導</a>
            </li>
            <!-- <li>
              <a href="<?php echo esc_url(home_url('/career/relation/')); ?>">海外大学進学推薦制度・協定大学一覧</a>
            </li> -->
          </ul>
        </dd>
      </dl>
    </nav><!-- /.l-footer__nav -->

    <div class="l-footer__othernav">

      <ul class="l-footer__othernav__main">
        <li><a href="<?php echo esc_url(home_url('/for_guardians/')); ?>">在校生・保護者の方へ</a></li>
        <li><a href="<?php echo esc_url(home_url('/counselor/')); ?>">スクールカウンセラー</a></li>
        <li><a href="<?php echo esc_url(home_url('/for_graduate/')); ?>">卒業生の方へ</a></li>
        <li><a href="<?php echo esc_url(home_url('/disclosure/')); ?>">情報公開</a></li>
        <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
      </ul><!-- /.l-footer__othernav__main -->


      <div class="l-footer__othernav__snsCv">
        <ul class="l-footer__othernav__sns">
          <li>
            <a href="https://www.instagram.com/poolegakuin.js.1879/" target="_blank">
              <img src="<?php echo $imagePath?>common/icon/insta.png" alt="Instagram" width="40" height="40">
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/PooleGakuin.JS.1879/" target="_blank">
              <img src="<?php echo $imagePath?>common/icon/facebook.png" alt="facebook" width="42" height="42">
            </a>
          </li>
        </ul><!-- /.l-footer__othernav__sns -->

        <ul class="l-footer__othernav__cv">
          <li>
            <a href="<?php echo esc_url(home_url('/request/')); ?>">
              資料請求
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              お問い合わせ
            </a>
          </li>
        </ul><!-- /.l-footer__othernav__cv -->
      </div><!-- /.l-footer__othernav__snsCv -->

      <ul class="l-footer__othernav__sub">
        <!-- <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">サイトマップ</a></li> -->
        <li><a href="<?php echo esc_url(home_url('/sitepolicy/')); ?>">サイトポリシー</a></li>
        <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a></li>
      </ul><!-- /.l-footer__othernav__sub -->

      <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__othernav__logo">
        <img src="<?php echo $imagePath?>common/logo.png" alt="プール学院中学校・高等学校" width="333" height="40">
      </a><!-- /.l-footer__othernav__logo -->

      <address>
        〒544-0033 大阪市生野区勝山北1-19-31<br>
        TEL/<a href="tel:06-6741-7005">06-6741-7005</a>　FAX/06-6731-2431
      </address>

      <ul class="l-footer__othernav__link">
        <li><a href="<?php echo esc_url(home_url('/corporation/')); ?>">学校法人プール学院</a></li>
        <li><a href="/college/" target="_blank">プール学院短期大学<br>卒業生の方へ</a></li>
        <li><a href="https://www.poole-obog.com/" target="_blank">一般社団法人POOLE</a></li>
        <li><a href="https://poole-kdg.com/" target="_blank">学校法人トリストラム学園<br>プール幼稚園</a></li>
      </ul><!-- /.l-footer__othernav__sub -->

    </div><!-- /.l-footer__othernav -->
  </div><!-- /.l-footer__inner -->
  <p class="l-footer__othernav__copy">
        Copyright &copy; <?php echo date('Y'); ?> POOLE GAKUIN Junior & Senior High Schools. All rights reserved.
      </p><!-- /.l-footer__othernav__copy -->
</footer><!-- /.l-footer -->



</div>
<!-- /#wrapper -->
</div>



<?php wp_footer(); ?>
<?php get_template_part('tmp/include/footer-js');?>
</body>
</html>
