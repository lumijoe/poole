<?php require('lib/const.php'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php if ( is_home() || is_front_page() ) : ?>
<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/website#" itemscope itemtype="https://schema.org/Organization">
  <?php else : ?>
  <head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# article:http://ogp.me/ns/article#" itemscope itemtype="https://schema.org/Organization">
    <?php endif; ?>

    <!-- ▼ view port =================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js" defer></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var ua = navigator.userAgent
      var isSmartPhone = ua.indexOf('iPhone') > -1 ||
        (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
      var isTablet = !isSmartPhone && (
        ua.indexOf('iPad') > -1 ||
        (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
        ua.indexOf('Android') > -1
      )
      ViewportExtra.setContent({
        minWidth: 414
      })
    })
    </script>
    <!-- ▲ view port =================================================== -->

    <!-- ▼ meta =================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- <?php if (is_home() && !is_paged()): ?>
    <meta name="robots" content="index,follow">
    <?php elseif (is_search() or is_404() or is_attachment()): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif (!is_category() && is_archive()): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif (is_paged()): ?>
    <meta name="robots" content="noindex,follow">
    <?php elseif (is_singular('topic') || is_singular('statement') || is_tax('statement-cat')): ?>
    <meta name="robots" content="noindex,nofollow">

    <?php endif; ?> -->

    <?php get_template_part('tmp/include/ogp');?>
    <!-- ▲ meta =================================================== -->

    <!-- ▼ dns prefetch =========================================== -->
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="preconnect dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//unpkg.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <!-- ▲ dns prefetch =========================================== -->

    <!-- ▼ favicon =================================================== -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- ▲ favicon =================================================== -->


    <?php wp_head(); ?>

    <!-- ▼ google fonts =================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- ▲ google fonts =================================================== -->

    <!-- ▼ include =================================================== -->
    <?php get_template_part('tmp/include/header-css');?>
    <!-- ▲ include =================================================== -->

    <!-- ▼ gtm head =================================================== -->
    <?php if (!is_user_logged_in()) : ?>
    <!-- ここにGAまたはGTMのタグを貼り付け -->
    <?php endif; ?>
    <!-- ▲ gtm head =================================================== -->
  </head>

<body <?php body_class(); ?>>

  <!-- ▼ gtm body =================================================== -->
  <?php if (!is_user_logged_in()) : ?>
  <!-- GTMの場合、body直下分のタグを貼り付け -->
  <?php endif; ?>
  <!-- ▲ gtm body =================================================== -->

  <!-- wrapper -->
  <div id="wrapper" class="wrap">

    <!-- ▼ header =================================================== -->
    <header id="header" class="l-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

      <div class="l-header__inner">
        <?php if ( is_home() && is_front_page() ) :?>
        <h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__logo">
          <img src="<?php echo $imagePath?>/common/logo.png" alt="" width="276" height="33">
        </a><!-- /.header__logo -->
      </h1>
        <?php else:?>
        <p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="l-header__logo">
          <img src="<?php echo $imagePath?>/common/logo.png" alt="" width="276" height="33">
        </a><!-- /.header__logo -->
      </p>
        <?php endif;?>

        <nav class="l-header__nav" id="js-nav">
          <ul class="l-header__nav__other">
            <li><a href="<?php echo esc_url(home_url('/for_guardians/')); ?>">在校生・保護者の方へ</a></li>
            <li><a href="<?php echo esc_url(home_url('/for_graduate/')); ?>">卒業生の方へ</a></li>
          </ul><!-- /.l-header__nav__other -->
          <ul class="l-header__nav__main">

            <li>
              <em>学校紹介<span class="l-header__nav__btn"></span></em>
              <ul class="l-header__nav__sub">
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

              </ul>
            </li>
            <li>
              <em>スクールライフ<span class="l-header__nav__btn"></span></em>
              <ul class="l-header__nav__sub">
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
            </li>
            <li>
              <em>中学校<span class="l-header__nav__btn"></span></em>
              <ul class="l-header__nav__sub">
                <li>
                  <dl>
                    <dt>コース</dt>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/junior/ikkan/')); ?>">一貫特進コース</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/junior/christianity/')); ?>">キリスト教大学推薦コース</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/junior/tokushin/')); ?>">総合特進コース</a>
                    </dd>
                  </dl>
                </li>

              </ul>
            </li>
            <li>
              <em>高等学校<span class="l-header__nav__btn"></span></em>
              <ul class="l-header__nav__sub">
                <li>
                  <dl>
                    <dt>コース</dt>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/senior/bunri/')); ?>">スーパー特進コース</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/senior/tokushin/')); ?>">特進コース</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/senior/kokusai/')); ?>">国際コース</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/senior/sogogeijutsu/')); ?>">総合芸術コース</a>
                    </dd>
                    <!-- <dd>
                      <a href="<?php echo esc_url(home_url('/senior/sogogeijutsu/')); ?>">語学研修・探究（アカデミア・グローカル）</a>
                    </dd> -->
                  </dl>
                </li>

              </ul>
            </li>
            <li>
              <em>入試情報<span class="l-header__nav__btn"></span></em>
              <ul class="l-header__nav__sub">
                <li>
                  <dl>
                    <dt>中学校</dt>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/event-category/junior/')); ?>">説明会・公開行事</a>
                    </dd>

                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/application_junior/')); ?>">募集要項</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/honor_junior/')); ?>">特待生制度</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/listening_junior/')); ?>">英語リスニング問題</a>
                    </dd>

                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/transference_junior/')); ?>">転入・編入</a>
                    </dd>
                  </dl>
                  <dl>
                    <dt>高等学校</dt>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/event-category/senior/')); ?>">説明会・公開行事</a>
                    </dd>

                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/application_senior/')); ?>">募集要項</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/honor_senior/')); ?>">特待生制度</a>
                    </dd>
                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/listening_senior/')); ?>">英語リスニング問題</a>
                    </dd>

                    <dd>
                      <a href="<?php echo esc_url(home_url('/exam/transference_senior/')); ?>">転入・編入</a>
                    </dd>
                  </dl>
                </li>
              </ul>
            </li>
            <li>
              <em>進路・進学<span class="l-header__nav__btn"></span></em>
              <ul class="l-header__nav__sub">
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
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/guide/access/')); ?>">交通アクセス</a>
            </li>
            <li class="is-spOnly"><a href="<?php echo esc_url(home_url('/for_guardians/')); ?>">在校生・保護者の方へ</a></li>
            <li class="is-spOnly"><a href="<?php echo esc_url(home_url('/for_graduate/')); ?>">卒業生の方へ</a></li>
          </ul><!-- /.l-header__nav__other -->

          </ul>

          <div class="l-header__nav__conv">
            <a href="<?php echo esc_url(home_url('/request/')); ?>">
              <img src="<?php echo $imagePath?>common/icon/note.svg" alt="資料請求" width="26" height="29">
              <em>資料請求</em>
            </a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              <img src="<?php echo $imagePath?>common/icon/mail.svg" alt="お問い合わせ" width="35" height="26">
              <em>お問い合わせ</em>
            </a>
          </div><!-- /.l-header__nav__conv -->
        </nav><!-- /.l-header__nav -->


      </div><!-- /.header__inner -->

    </header>
    <!-- ▲ header =================================================== -->


    <button class="l-header__hum sp" id="js-hum">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <?php if ( !is_home() && !is_front_page() ) : //下層ページのみ出力 ?>
    <!-- ▼ container =================================================== -->
    <?php if (get_post_type() === 'news' && is_single()): ?>
    <div id="container" class="container" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
      <?php else: ?>
      <div id="container" class="container" itemscope itemprop="mainContentOfPage">
        <?php endif; ?>


        <?php endif; ?>
