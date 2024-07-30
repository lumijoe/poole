<!-- //aタグいれこ -->
<script>
$('.js-link').on('click', function(e) {
  e.stopPropagation();
  e.preventDefault();
  location.href = $(this).attr('data-url');
})

document.addEventListener('DOMContentLoaded', function() {
  var ua = navigator.userAgent
  var isSmartPhone = ua.indexOf('iPhone') > -1 ||
    (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
  var isTablet = !isSmartPhone && (
    ua.indexOf('iPad') > -1 ||
    (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
    ua.indexOf('Android') > -1
  )
  if (isTablet) {
    // 'l-header__nav__main em'セレクタにマッチする要素を全て選択
    var elements = document.querySelectorAll('.l-header__nav__main em');

    // 各要素に対してイベントリスナーを追加
    elements.forEach(function(element) {
      element.addEventListener('click', function() {
        // 'is-hover'クラスをトグル
        this.classList.toggle('is-hover');
      });
    });
  }
});
</script>

<?php if (is_home() || is_front_page()) :?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const mvSwiper = new Swiper(".swiper-mv", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 1000,
  centeredSlides: false,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  }
});

const eventSwiper = new Swiper(".swiper-events", {
  loop: true,
  slidesPerView: 1.5,
  spaceBetween: 25,
  speed: 500,
  centeredSlides: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // スライドの表示枚数：500px以上の場合
    1024: {
      slidesPerView: 3,
    }
  }
});

const newsSwiper = new Swiper(".swiper-news", {
  loop: true,
  slidesPerView: 1.5,
  spaceBetween: 25,
  speed: 500,
  centeredSlides: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // スライドの表示枚数：500px以上の場合
    1024: {
      slidesPerView: 4,
    }
  }
});
</script>
<?php endif;?>


<?php if(is_singular('club' )):?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
//サムネイル
var sliderThumbnail = new Swiper('.slider-thumbnail', {
  slidesPerView: 4,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

//スライダー
var slider = new Swiper('.swiper-club', {
  slidesPerView: 1,
  spaceBetween: 0,
  thumbs: {
    swiper: sliderThumbnail
  }
});
</script>

<?php endif;?>

<?php if(is_page('listening_junior') || is_page('listening_senior')):?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/audio.min.js"></script>
<script>
audiojs.events.ready(function() {
  var as = audiojs.createAll();
});
</script>

<?php elseif ( is_page('contact') ) :?>

<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script>
$('#zip').on('input', function() {
  AjaxZip3.zip2addr('zip', '', 'addr', 'addr');
});
</script>


<?php elseif ( is_page('request') ) :?>

<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script>
$('#zip').on('input', function() {
  AjaxZip3.zip2addr('zip', '', 'addr', 'addr');
});


document.addEventListener('DOMContentLoaded', function() {
  const jsNoElement = document.querySelector('#js-no');
  const radios = document.querySelectorAll('input[name="student"]');
  const otherCheckboxes = document.querySelectorAll('input[name="other[]"]');
  const whoTextbox = document.querySelector('input[name="who"]');

  // #js-noを非表示に設定
  // jsNoElement.style.display = 'none';

  function handleRadioChange() {
    const selectedRadio = document.querySelector('input[name="student"]:checked');

    // #js-noの表示を更新
    // if (selectedRadio && selectedRadio.value === 'いいえ') {
    //   jsNoElement.style.display = 'block';
    // } else {
    //   jsNoElement.style.display = 'none';
    // }

    // "はい"が選択された場合にotherのチェックボックスをクリアし、whoのテキストボックスを空にする
    if (selectedRadio && (selectedRadio.value === '受験生' || selectedRadio.value === '保護者')) {
      document.getElementById('js-com').innerText = 'お名前の欄には受験生の名前を入力してください';
      otherCheckboxes.forEach(checkbox => {
        checkbox.checked = false;
      });
      if (whoTextbox) {
        whoTextbox.value = '';
      }
    } else {
      document.getElementById('js-com').innerText = '学校名欄に学校名・塾名等を入力してください';
    }
  }

  // ラジオボタンの変更イベントにリスナーを設定
  radios.forEach(radio => {
    radio.addEventListener('change', handleRadioChange);
  });

  // ページロード時に現在の選択状態に基づいて表示を更新
  handleRadioChange();
});
</script>

<?php elseif ( is_page('tutor_form') || is_page('training_form') ) :?>

<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script>
$('#zip').on('input', function() {
  AjaxZip3.zip2addr('zip', '', 'addr', 'addr');
});

$('#zip03').on('input', function() {
  AjaxZip3.zip2addr('zip03', '', 'addr02', 'addr02');
});
</script>

<?php endif;?>
