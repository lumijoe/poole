jQuery(function(){

//humenu
  $('#js-hum').click(function () {
    $(this).toggleClass("is-active");
      $("#js-nav").toggleClass('is-active');
      $("body").toggleClass("is-scroll-off");
  });

  $('.l-header__nav__btn').click(function() {
    $(this).parent().siblings().slideToggle();
    $(this).toggleClass('is-active');
  });

  // リンクにカレントクラス付与
  $('a').not('.zoomImg').each(function(){
    if(this.href == location.href) $(this).addClass("is-current");
  });

});
