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
      <div class="topLayout__inner">
        <div class="topLayout__block topLayout__block--articles01">
          <ul class="menu">
            <li class="menu__item menu__item--living"><a href="/living/">暮らす</a></li>
            <li class="menu__item menu__item--playing"><a href="/playing/">遊ぶ</a></li>
            <li class="menu__item menu__item--food"><a href="/food/">食べる<i>Coming Soon</i></a></li>
            <li class="menu__item menu__item--shopping"><a href="/shopping/">買う<i>Coming Soon</i></a></li>
            <li class="menu__item menu__item--refresh"><a href="/refresh/">リフレッシュ</a></li>
            <li class="menu__item menu__item--learning"><a href="/learning/">学ぶ</a></li>
          </ul>
          <ul class="list list--hasIllust">
            <?php
              for($i = 0; $i < 4; $i++){
            ?>
              <li class="list__item">
                <section class="modCardArticle01">
                  <a href="DUMMY">
                    <div class="modCardArticle01__inner">
                      <figure class="modCardArticle01__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/main/thum_0<?php echo $i?>.png" alt="" width="487" height="389" loading="eager"></figure>
                      <div class="modCardArticle01__body">
                        <div class="modCardArticle01__body__inner">
                          <i class="icon icon--living"></i>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトル</h2>
                            <p class="title__sub">サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行</p>
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
            <li class="list__item list__item--news">
              <section class="list__item__inner">
                <h2 class="newsHeading"><a href="/news/"><img src="/wp/wp-content/themes/harufula/assets/img/top/news/heading.svg" alt="NEWS" width="120" height="37" loading="lazy"><span></span></a></h2>
                <ul class="newsList">
                  <?php
                    for($i = 0; $i < 3; $i++){
                  ?>
                    <li class="newsList__item">
                      <a href="DUMMY">
                        <section class="newsList__item__inner">
                          <figure class="newsList__item__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/news/thum_00.png" alt="" width="91" height="73" loading="lazy"></figure>
                          <div class="newsList__item__body">
                            <date>2024.01.24</date>
                            <h3 class="title">これまでに延べ1,500回を超えて築地を訪れてきた経験をもとに</h3>
                          </div>
                        </section>
                      </a>
                    </li>
                  <?php
                    }
                  ?>
                </ul>
              </section>
            </li>
          </ul>
        </div>
        <div class="topLayout__block topLayout__block--slide">
          <div class="list__wrapper swiper swiper--sp">
            <div class="list swiper-wrapper">
              <?php
                for($i = 0; $i < 6; $i++){
              ?>
                <div class="list__item swiper-slide">
                  <a href="DUMMY">
                    <section class="list__item__inner">
                      <h2 class="list__item__title">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</h2>
                      <figure class="list__item__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/side/thum_0<?php echo $i?>.png" alt="" width="230" height="184" loading="eager"></figure>
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
        <div class="topLayout__block topLayout__block--articles01">
          <ul class="list">
            <?php
              for($i = 4; $i < 5; $i++){
            ?>
              <li class="list__item">
                <section class="modCardArticle01">
                  <a href="DUMMY">
                    <div class="modCardArticle01__inner">
                      <figure class="modCardArticle01__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/main/thum_0<?php echo $i?>.png" alt="" width="487" height="389" loading="eager"></figure>
                      <div class="modCardArticle01__body">
                        <div class="modCardArticle01__body__inner">
                          <i class="icon icon--living"></i>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトル</h2>
                            <p class="title__sub">サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行</p>
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
              <section class="modCardArticle01">
                <a href="DUMMY">
                  <div class="modCardArticle01__inner">
                    <figure class="modCardArticle01__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/main/thum_0<?php echo $i?>.png" alt="" width="487" height="389" loading="eager"></figure>
                    <div class="modCardArticle01__body">
                      <div class="modCardArticle01__body__inner">
                        <i class="icon icon--refresh"></i>
                        <hgroup class="title">
                          <h2 class="title__main">メインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトル</h2>
                          <p class="title__sub">サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行サブタイトルMAX1行</p>
                        </hgroup>
                      </div>
                    </div>
                  </div>
                </a>
              </section>
            </li>
            <li class="list__item list__item--circle">
              <section class="list__item__inner">
                <a href="/overview/"><img src="/wp/wp-content/themes/harufula/assets/img/top/main/thum_ciecle.png" alt="" width="462" height="462" loading="lazy"></a>
              </section>
            </li>
            <li class="list__item">
              <section class="modCardArticle01">
                <a href="DUMMY">
                  <div class="modCardArticle01__inner">
                    <figure class="modCardArticle01__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/main/thum_06.png" alt="" width="487" height="389" loading="lazy"></figure>
                    <div class="modCardArticle01__body">
                      <div class="modCardArticle01__body__inner">
                        <i class="icon icon--playing"></i>
                        <hgroup class="title">
                          <h2 class="title__main">メインタイトルメインタイトル</h2>
                          <p class="title__sub">サブタイトルMAX2行</p>
                        </hgroup>
                      </div>
                    </div>
                  </div>
                </a>
              </section>
            </li>
          </ul>
        </div>
        <div class="topLayout__block topLayout__block--mapGuide">
          MAP (No work required)
        </div>
        <div class="topLayout__block topLayout__block--articles02">
          <section class="swiperContainerFull">
            <h2 class="modHeadingDecoSq modHeadingDecoSq--pl-240">おすすめ記事</h2>
            <div class="list__wrapper swiper swiper--all">
              <div class="list list--top swiper-wrapper">
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_00.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <div class="data">
                            <i class="data__tag">暮らす</i>
                            <date>2024.06.06</date>
                          </div>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトルメインタイトル</h2>
                          </hgroup>
                          <ul class="tags">
                            <?php
                              for($i = 0; $i < 6; $i++){
                            ?>
                            <li>#タグ</li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_01.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_02.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <div class="data">
                            <i class="data__tag">暮らす</i>
                            <date>2024.06.06</date>
                          </div>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                          <ul class="tags">
                            <?php
                              for($i = 0; $i < 6; $i++){
                            ?>
                            <li>#タグ</li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_00.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <div class="data">
                            <i class="data__tag">暮らす</i>
                            <date>2024.06.06</date>
                          </div>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                          <ul class="tags">
                            <?php
                              for($i = 0; $i < 6; $i++){
                            ?>
                            <li>#タグ</li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination is-sp"></div>
            </div>
          </section>
          <section class="swiperContainerFull">
            <h2 class="modHeadingDecoSq modHeadingDecoSq--pl-240">ハルフラ掲示板</h2>
            <div class="list__wrapper swiper swiper--all">
              <div class="list list--top swiper-wrapper">
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_00.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <div class="data">
                            <i class="data__tag">暮らす</i>
                            <date>2024.06.06</date>
                          </div>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                          <ul class="tags">
                            <?php
                              for($i = 0; $i < 6; $i++){
                            ?>
                            <li>#タグ</li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_01.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_02.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <div class="data">
                            <i class="data__tag">暮らす</i>
                            <date>2024.06.06</date>
                          </div>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                          <ul class="tags">
                            <?php
                              for($i = 0; $i < 6; $i++){
                            ?>
                            <li>#タグ</li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
                <div class="list__item swiper-slide">
                  <section class="modCardArticle02">
                    <a href="DUMMY">
                      <div class="modCardArticle02__inner">
                        <figure class="modCardArticle02__img"><img src="/wp/wp-content/themes/harufula/assets/img/top/slide/thum_00.png" alt="" width="400" height="320" loading="lazy"></figure>
                        <div class="modCardArticle02__body">
                          <div class="data">
                            <i class="data__tag">暮らす</i>
                            <date>2024.06.06</date>
                          </div>
                          <hgroup class="title">
                            <h2 class="title__main">メインタイトルメインタイトル</h2>
                          </hgroup>
                          <ul class="tags">
                            <?php
                              for($i = 0; $i < 6; $i++){
                            ?>
                            <li>#タグ</li>
                            <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                    </a>
                  </section>
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination is-sp"></div>
            </div>
          </section>
        </div>
        <section class="modListTags">
          <h2 class="modHeadingDecoTag">タグから記事を探す</h2>
          <ul class="list">
            <?php
              for($i = 0; $i < 36; $i++){
            ?>
              <li class="list__item">
                <a href="DUMMY">＃タグ<?php echo $i;?></a>
              </li>
            <?php
              }
            ?>
          </ul>
        </section>
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
          loop: true,
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
