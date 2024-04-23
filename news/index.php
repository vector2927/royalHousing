<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no">
  <title>SAMPLE</title>
  <meta name="description" content="SAMPLE" />
  <link rel="icon" href="/wp/wp-content/themes/harufula/assets/img/common/icon/favicon.ico">
  <meta property="og:title" content="SAMPLE">
  <meta property="og:type" content="website">
  <meta property="og:description" content="SAMPLE">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/">
  <meta property="og:site_name" content="SAMPLE">
  <meta property="og:locale" content="ja_jp">
  <link rel="stylesheet" type="text/css" href="/wp/wp-content/themes/harufula/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="/wp/wp-content/themes/harufula/assets/libs/swiper/swiper-bundle.min.css">
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/wp/wp-content/themes/harufula/assets/include/_header.php"); ?>
<main class="main main--top">
  <div class="main__inner">
    <div class="topLayout">
      
      <h1 class="modHeadingTitleTag">暮らす</h1>
      <div class="topLayout__inner">

      
      
        <div class="topLayout__block topLayout__block--articles02">
          
          <ul class="list list--alignStart">
            
            <?php
              $i = 0;

              $titleMain = [
                "TOKYO の新しい顔をデザインする、25の才能 ",
                "ゼロからの設計で実現する快適・安心・美しい導線 ",
                "タイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイ... ",
                "タイトルが入りますタイトルが入りますタイトルが入ります ",
                "タイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイ... ",
                "タイトルが入りますタイトルが入りますタイトルが入ります ",
                "タイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイトルが入りますタイ... "
              ];

              $titleSub = "テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入り…";
              
              for($i ; $i < 1; $i++){
            ?>
              <li class="list__item">
                <section class="modCardArticle02">
                  <a href="DUMMY">
                    <div class="modCardArticle02__inner">
                      <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/news/img_0<?php echo $i?>.png" alt="blog content" width="487" height="389" loading="lazy"></figure>
                      <div class="modCardArticle02__body">
                        <div class="modCardArticle02__body__inner">
                          <i class="icon icon--living"></i>
                          <date>2024.01.24</date>
                          
                          <hgroup class="title">
                            <h2 class="title__main"><?php echo $titleMain[$i]; ?> </h2>
                            <p class="title__sub"><?php echo $titleSub; ?></p>
                          </hgroup>
                        </div>
                      </div>
                    </div>
                  </a>
                </section>
              </li>
            <?php
              }
            ?>
            <li class="list__item">
              <section class="modCardArticle02">
                <a href="DUMMY">
                  <div class="modCardArticle02__inner">
                    <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_01.png" alt="blog content" width="400" height="320" loading="lazy"></figure>
                    <div class="modCardArticle02__body">
                      <div class="modCardArticle02__body__inner">
                        <i class="icon icon--living"></i>
                          <hgroup class="title">
                            <h2 class="title__main">不動産についての問い合わせ</h2>
                          </hgroup>
                      </div>
                    </div>
                  </div>
                </a>
              </section>
            </li>

            <?php
              for($i ; $i < 2; $i++){
                
            ?>
              <li class="list__item">
                <section class="modCardArticle02">
                  <a href="DUMMY">
                    <div class="modCardArticle02__inner">
                      <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/news/img_0<?php echo $i?>.png" alt="blog content" width="487" height="389" loading="lazy"></figure>
                      <div class="modCardArticle02__body">
                        <div class="modCardArticle02__body__inner">
                          <i class="icon icon--living"></i>
                          <date>2024.01.24</date>
                          <hgroup class="title">
                            <h2 class="title__main"><?php echo $titleMain[$i]; ?> </h2>
                            <p class="title__sub"><?php echo $titleSub; ?></p>
                          </hgroup>
                        </div>
                      </div>
                    </div>
                  </a>
                </section>
              </li>
            <?php
              }
            ?>
            <?php
              for($i ; $i < 7; $i++){
            ?>
              <li class="list__item">
                <section class="modCardArticle02">
                  <a href="DUMMY">
                    <div class="modCardArticle02__inner">
                      <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/news/img_0<?php echo $i?>.png" alt="blog content" width="487" height="389" loading="lazy"></figure>
                      <div class="modCardArticle02__body">
                        <div class="modCardArticle02__body__inner">
                          <i class="icon icon--living"></i>
                          <date>2024.01.24</date>
                          <hgroup class="title">
                            <h2 class="title__main"><?php echo $titleMain[$i]; ?> </h2>
                            <p class="title__sub"><?php echo $titleSub; ?></p>
                          </hgroup>
                        </div>
                      </div>
                    </div>
                  </a>
                </section>
              </li>
            <?php
              }
            ?>
            <li class="list__item">
              <section class="modCardArticle02">
                <a href="DUMMY">
                  <div class="modCardArticle02__inner">
                    <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_01.png" alt="blog content" width="400" height="320" loading="lazy"></figure>
                    <div class="modCardArticle02__body">
                      <div class="modCardArticle02__body__inner">
                        <i class="icon icon--living"></i>
                          <hgroup class="title">
                            <h2 class="title__main">不動産についての問い合わせ</h2>
                          </hgroup>
                      </div>
                    </div>
                  </div>
                </a>
              </section>
            </li>
            <?php
              for($i = 2 ; $i < 5; $i++){
            ?>
              <li class="list__item">
                <section class="modCardArticle02">
                  <a href="DUMMY">
                    <div class="modCardArticle02__inner">
                      <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/news/img_0<?php echo $i?>.png" alt="blog content" width="487" height="389" loading="eager"></figure>
                      <div class="modCardArticle02__body">
                        <div class="modCardArticle02__body__inner">
                          <i class="icon icon--living"></i>
                          <date>2024.06.06</date>
                          
                          <hgroup class="title">
                            <h2 class="title__main"><?php echo $titleMain[$i]; ?>  </h2>
                            <p class="title__sub"><?php echo $titleSub; ?></p>
                          </hgroup>
                        </div>
                      </div>
                    </div>
                  </a>
                </section>
              </li>
            <?php
              }
            ?>
          </ul>

          <div class="pagination">
            <ul class="pagination__inner">
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">...</a></li>
            </ul>
          </div>
          
        </div>
        <div class="topLayout__block topLayout__block--slide topLayout__block--news">
          <div class="list__wrapper swiper swiper--sp">
            <div class="list swiper-wrapper">
              <ul class="menu">
                <li class="menu__item menu__item--living"><a href="/living/">暮らす</a></li>
                <li class="menu__item menu__item--playing"><a href="/playing/">遊ぶ</a></li>
                <li class="menu__item menu__item--food"><a href="/food/">食べる<i>Coming Soon</i></a></li>
                <li class="menu__item menu__item--shopping"><a href="/shopping/">買う<i>Coming Soon</i></a></li>
                <li class="menu__item menu__item--refresh"><a href="/refresh/">リフレッシュ</a></li>
                <li class="menu__item menu__item--learning"><a href="/learning/">学ぶ</a></li>
              </ul>
              <div class="newsHeading newsHeading--pickup modPc"><a href="/news/"><img src="/wp/wp-content/themes/harufula/assets/img/top/pickup/img_pickup.png" alt="blog content" width="120" height="37" loading="lazy"></a></div>
              <?php
                for($i = 0; $i < 6; $i++){
              ?>
                <div class="list__item swiper-slide">
                  <a href="DUMMY">
                    <section class="list__item__inner">
                      
                      <h2 class="list__item__title">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</h2>
                      <figure class="list__item__img"><img src="/wp/wp-content/themes/harufula/assets/img/news/side/img_0<?php echo $i?>.png" alt="blog content" width="230" height="184" loading="lazy"></figure>
                    </section>
                  </a>
                </div>
              <?php
                }
              ?>
              
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="linkList">
      <div class="linkList__inner">
        <p class="modHeading03">カテゴリから記事を探す</p>
        <ul class="linkList__itemList">
          <li>
            <a href="#" class="linkList__itemList__item">
                <figure class="img">
                  <img src="/wp/wp-content/themes/harufula/assets/img/news/img_living.png" alt="暮らす" width="40" height="40" loading="lazy">
                </figure>
                <p>暮らす</p>
            </a>
          </li>
          <li>
            <a href="#" class="linkList__itemList__item">
                <figure class="img">
                  <img src="/wp/wp-content/themes/harufula/assets/img/news/img_playing.png" alt="" width="40" height="40" loading="lazy">
                </figure>
                <p>遊ぶ</p>
            </a>
          </li>
          <li>
            <a href="#" class="linkList__itemList__item disabled">
                <figure class="img">
                  <img src="/wp/wp-content/themes/harufula/assets/img/news/img_food.png" alt="食べる" width="40" height="40" loading="lazy">
                </figure>
                <p>食べる</p>
            </a>
            <p class="linkList__itemList__note">Coming Soon</p>
          </li>
          <li>
            <a href="#" class="linkList__itemList__item disabled">
                <figure class="img">
                  <img src="/wp/wp-content/themes/harufula/assets/img/news/img_shopping.png" alt="買う" width="40" height="40" loading="lazy">
                </figure>
                <p>買う</p>
            </a>
            <p class="linkList__itemList__note">Coming Soon</p>
          </li>
          <li>
            <a href="#" class="linkList__itemList__item">
                <figure class="img">
                  <img src="/wp/wp-content/themes/harufula/assets/img/news/img_refresh.png" alt="リフレッシュ" width="40" height="40" loading="lazy">
                </figure>
                <p>リフレッシュ</p>
            </a>
          </li>
          <li>
            <a href="#" class="linkList__itemList__item">
                <figure class="img">
                  <img src="/wp/wp-content/themes/harufula/assets/img/news/img_learning.png" alt="遊ぶ" width="40" height="40" loading="lazy">
                </figure>
                <p>遊ぶ</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php include($_SERVER['DOCUMENT_ROOT']."/wp/wp-content/themes/harufula/assets/include/_footer.php"); ?>
<script type="text/javascript" src="/wp/wp-content/themes/harufula/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp/wp-content/themes/harufula/assets/js/common.js"></script>
<script type="text/javascript" src="/wp/wp-content/themes/harufula/assets/libs/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function(){
  let swiperPc,
      swiperAll,
      swiperSp;
  // 常時有効
  function initializeSwiperAll(){
    swiperAll = new Swiper('.swiper--all',{
      spaceBetween: 20,
      loop: true,
      centeredSlides: true,
      slidesPerView: 1.25,
      navigation:{
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      breakpoints: {
        768: {
          loop: false,
          centeredSlides: false,
          slidesPerView: 3.05,
          spaceBetween: 30,
        },
      },
    });
  }
  // 有効化時のオプションを記述
  function initializeSwiperPc(){
    swiperPc = new Swiper('.swiper--pc',{
      spaceBetween: 30,
      slidesPerView: 3.25,
      // loop: true,
      navigation:{
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
    });
  }
  function initializeSwiperSp(){
    swiperSp = new Swiper('.swiper--sp',{
      spaceBetween: 20,
      slidesPerView: 2.3,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
    });
  }
  // 無効化する用の記述
  function destroySwiperPc(){
    if(swiperPc){
      swiperPc.destroy();
      swiperPc = undefined;
    }
  }
  function destroySwiperSp(){
    if(swiperSp){
      swiperSp.destroy();
      swiperSp = undefined;
    }
  }
  // if分を用いて横幅に応じて関数を実行
  function handleResize(){
    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if(w > 768){
      if(!swiperPc){
        initializeSwiperPc();
      }
      if(swiperSp){
        destroySwiperSp();
      }
    }else{
      if(swiperPc){
        destroySwiperPc();
      }
      if(!swiperSp){
        initializeSwiperSp();
      }
    }
  }
  // 初回実行
  initializeSwiperAll();
  handleResize();
  window.addEventListener('resize', handleResize, initializeSwiperAll);
});
</script>
</body>
</html>
