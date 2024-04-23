//文字コードはutf-8

//ハンバーガーメニュー
//メディアクエリ指定
const mediaQuery = window.matchMedia('(max-width: 768px)');
// ページが読み込まれた時に実行
handle(mediaQuery);

function handle(mm){
  $(function(){
    const menu = document.querySelectorAll('.header__nav__inner');
    const nav = document.querySelectorAll('.header');
    const openBtn = document.querySelectorAll('.openbtn');

    $(openBtn).click(function(e){
      // console.log('click');
      if($(openBtn).hasClass("active")){
        $(nav).removeClass('bgChange');
        $(openBtn).removeClass('active');
        $(menu).slideUp();
        }else{
        $(nav).toggleClass('bgChange');
        $(openBtn).toggleClass('active');
        // $(menu).slideDown();
        $(menu).slideDown({
          start: function () {
            $(this).css({
              display: "flex"
            })
          }
        });
      }
    });
    // if(mm.matches){
    //   $(menu).hide();
    // }
    // mm.addListener(function(m){
    //   if(m.matches){
    //     $(menu).hide();
    //   }else{
    //     $(menu).show();
    //     $(openBtn).removeClass('active');
    //   }
    // });
  });
}

const $window = $(window);
$window.scroll(function(){
  if($window.scrollTop() > 80){
    $('.js-header').addClass('scrolled');
  } else {
    $('.js-header').removeClass('scrolled');
  }
});