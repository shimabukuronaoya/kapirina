<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1.0">
  <title><?php if ($page_title) {
            echo $page_title . ' | ';
          } ?>カピリナ</title>
  <meta name="description" content="">
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <link rel="icon" href="/assets/img/common/favicon.ico" sizes="16x16" type="image/png">

  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

  <script src="/assets/js/jquery-3.6.1.min.js"></script>
  <script src="/assets/js/slick.min.js"></script>
  <script src="/assets/js/desvg.js"></script>
  <!-- <script src="/assets/js/bodyScrollLock.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="/assets/js/main.js"></script>
</head>

<body class="<?= $body_class; ?>">

<span class="headerMenu__overlay"></span>

  <div class="l-bodyContainer">
    <div class="headerSp l-pd">
      <h1 class="headerLogoSp">
        <a href="/" class="headerLogoSp__link">
          <img src="/assets/img/dummy/img_headerlogo-sp.png" alt="" class="headerLogoSp__img">
        </a>
      </h1>

      <a role="button" class="headerMenuSp open js-headerMenuOpen is-open">
        <img src="/assets/img/dummy/ico_btn-open.svg" alt="" class="headerMenuSp__img">
      </a>

    </div>

    



    <span class="headerMenu__overlay"></span>

    <!-- <div class="headerTopSp l-pd">
      <h1 class="headerTopSp__logo"><a href="/" class="headerTopSp__logoLink"><img src="/assets/img/common/logo_no-txt.png" alt="Kapilina" class="headerTopSp__logoImg"></a></h1>

      <a role="button" class="headerMenuBtn open js-headerMenuOpen">
        <img src="/assets/img/common/ico_menu-open.svg" alt="">
      </a> -->
      
    </div>
    

    <header class="header">
      <!-- <a role="button" class="headerMenuBtn close js-headerMenuClose">
        <img src="/assets/img/common/ico_menu-close.svg" alt="">
      </a> -->

      <a role="button" class="headerMenuSp close js-headerMenuClose">
        <img src="/assets/img/dummy/ico_btn-close.svg" alt="" class="headerMenuSp__img">
      </a>

      <div class="headerInner">
        <h1 class="headerLogo">
          <a href="/" class="headerLogo__link">
            <img src="/assets/img/common/logo.png" alt="宮古島ダイビングショップ カピリナ" class="headerLogo__img">
          </a>
        </h1>
        
        <script>
      jQuery(function($){
        $('.headerMenuSp').on('click',function(){
          $('.header').toggleClass('is-open');
          $('.js-headerMenuOpen').toggleClass('is-open');
          $('.js-headerMenuClose').toggleClass('is-open');
          $('.headerMenu__overlay').toggleClass('is-active');
        })
      })
    </script>

    <script>
      jQuery(function($){
        $('.headerMenu__overlay').on('click',function(){
          $(this).removeClass('is-active');
          $('.header').removeClass('is-open');
          $('.js-headerMenuOpen').removeClass('is-open');
          
        })
      })
    </script>

        <script>
          jQuery(function($) {
            $('.headerNavList__item.has-subList .headerNavList__link').on('click',function() {
              $(this).toggleClass('is-active');
              $(this).next().stop().slideToggle();
            })
          })
        </script>

        <nav class="headerNav">
          <ul class="headerNavList">
            <li class="headerNavList__item menu has-subList"><a class="headerNavList__link">メニュー</a>
            <ul class="headerNavSubList">
              <li class="headerNavSubList__item"><a href="/menu/" class="headerNavSubList__link">メニュー一覧</a></li>
              <li class="headerNavSubList__item"><a href="/menu/fundiving/" class="headerNavSubList__link">ボートファンダイビング</a></li>
              <li class="headerNavSubList__item"><a href="/menu/trialdiving/" class="headerNavSubList__link">ボート体験ダイビング</a></li>
              <li class="headerNavSubList__item"><a href="/menu/owd/" class="headerNavSubList__link">オープンウォーターコース</a></li>
              <li class="headerNavSubList__item"><a href="/menu/aowd/" class="headerNavSubList__link">アドバンスコース</a></li>
            </ul>
            </li>
            <li class="headerNavList__item shop">
            <a href="/shop
            " class="headerNavList__link">ショップ紹介</a>
            </li>
            <li class="headerNavList__item faq">
            <a href="/faq
            " class="headerNavList__link">FAQ</a>
            </li>
            <li class="headerNavList__item map">
            <a href="/divingmap
            " class="headerNavList__link">ダイビングマップ</a>
            </li>
            <li class="headerNavList__item blog">
            <a href="/blog
            " class="headerNavList__link">海ブログ</a>
            </li>
            <li class="headerNavList__item recruit">
            <a href="/shop/recruit
            " class="headerNavList__link">求人情報</a>
            </li>
          </ul>
        </nav>
        

        <!-- <div class="headerSns">
          <p class="headerSns__ttl"><img src="/assets/img/common/txt_sns-followus.svg" alt="Follow us!!"></p>
          <ul class="headerSnsList">
            <li class="headerSnsList__item"><a href="https://www.instagram.com/kapilina_miyakojima_diving/" target="_blank" class="headerSnsList__link"><img src="/assets/img/common/ico_sns-instagram.svg" alt="" class="headerSnsList__img"></a></li>
            <li class="headerSnsList__item"><a href="https://ja-jp.facebook.com/miyakojima.kapilina/" target="_blank" class="headerSnsList__link"><img src="/assets/img/common/ico_sns-facebook.svg" alt="" class="headerSnsList__img"></a></li>
            <li class="headerSnsList__item"><a href="https://page.line.me/953lutzq?openQrModal=true" target="_blank" class="headerSnsList__link"><img src="/assets/img/common/ico_sns-line.svg" alt="" class="headerSnsList__img"></a></li>
          </ul>
        </div> -->

        <div class="headerSns">
          <p class="headerSns__followUs">
            <img src="/assets/img/common/txt_sns-followus.svg" alt="follow us!!" class="headerSns__img"> 
          </p>
          <ul class="headerSns__list">
            <li class="headerSns__item instagram">
              <a href="/" class="headerSns__link">
                <img src="/assets/img/common/ico_sns-instagram.svg" alt="" class="headerSns__img">
              </a>
            </li>
            <li class="headerSns__item facebook">
              <a href="/" class="headerSns__link">
                <img src="/assets/img/common/ico_sns-facebook.svg" alt="" class="headerSns__img">
              </a>
            </li>
            <li class="headerSns__item line">
              <a href="/" class="headerSns__link">
                <img src="/assets/img/common/ico_sns-line.svg" alt="" class="headerSns__img">
              </a>
            </li>
          </ul>
        </div>

        <a href="https://app.okaban.work/form/?shop_id=kapilina" target="_blank" class="c-btn header__reserve">ご予約</a>
      </div>
    </header>

    <div class="l-mainContainer">
</body>
</html>