<?php
$body_class = 'index';
require_once("header.php"); ?>

<div class="kvBg"></div>

<!-- kv -->
<section class="l-section kvArea">
  <div class="l-content">
    <div class="kv__txtBox">
      <p class="kv__mainTxt"><span class="bgTxt">海と人々がつながる<br>くつろぎの場</span></p>
      <p class="kv__subTxt">
        <span class="bgTxt">
          自社ボートで完全少人数制のご案内により<br>宮古島での憩いの海時間を提供いたします。
        </span>
      </p>
    </div>
  </div>
</section>
<!-- /kv -->

<!-- memorial -->
<section class="l-section memorialArea">
  <div class="l-content">
    <div class="memorial__contBox l-pd">

      <div class="canvasBox">
        <canvas class="js-kamiFubuki"></canvas>
      </div>

      <h2 class="memorial__ttl"><img src="/assets/img/top/img_memorial-ttl.png" alt="MIYAKOJIMA KAPILINA DIVINGSHOP 10th ANNIVERSARY Since 2014" width="307" height="243"></h2>
      <p class="memorial__subTtl">おかげさまで<span class="strong">10周年</span></p>

      <p class="memorial__txt">
        2024年2月14日を以って、宮古島ダイビングショップカピリナは<br class="pc">
        10周年を迎える事ができました。<br class="pc">
        ひとえにカピリナをご利用頂いたお客様のおかげです。心より感謝を申し上げます。<br>
        まだまだ至らぬ点はございますがスタッフ一同努力していきます。<br class="pc">
        これからも今まで通りお客様に寄り添うショップであり続けたいと思います。<br>
        皆様に宮古島の海をご案内できる日を心待ちにしております。
      </p>


      <script>
        jQuery(function($) {
          $('.slidePhotoList.left').slick({
            autoplay: false, // 自動でスクロール
            autoplaySpeed: 0, // 自動再生のスライドが切り替わってから次に動き出すまでの時間
            speed: 800, // スライド切り替えの時間
            cssEase: "linear", // スライドの流れ方を等速に設定
            swipe: true, // 操作による切り替えはさせない
            arrows: true, // 矢印非表示
            pauseOnFocus: false, // スライダーをフォーカスした時にスライドを停止させるか
            pauseOnHover: false, // スライダーにマウスホバーした時にスライドを停止させるか
            slidesToShow: 3, // 表示するスライドの枚数
            centerMode: true, // スライドを中心に表示して、前後のスライドが部分的に見れる
            variableWidth: true, // スライドの要素の幅をcssで設定できる
          });

          $('.slidePhotoList.right').slick({
            autoplay: true,
            autoplaySpeed: 0,
            speed: 8000,
            cssEase: 'linear',
            arrows: false,
            swipe: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            centerMode: true,
            variableWidth: true,
            rtl: true, // 逆方向 HTMLにも記述必要
          });
        });
      </script>

      <!-- <div class="memorial__photoBox">
        <div class="l-pd0 memorial__photoInner">
          <ul class="memorialPhotoList left">
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo01-01.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo01-02.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo01-03.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo01-04.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo01-05.jpg" alt="" class="memorialPhotoList__img"></li>
          </ul>
          <ul class="memorialPhotoList right" dir="rtl">
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo02-01.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo02-02.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo02-03.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo02-04.jpg" alt="" class="memorialPhotoList__img"></li>
            <li class="memorialPhotoList__item"><img src="/assets/img/top/img_memorial-photo02-05.jpg" alt="" class="memorialPhotoList__img"></li>
          </ul>
        </div>
      </div> -->

      <div class="slidePhotoBox">
        <div class="l-pd0 slidePhotoInner">
          <ul class="slidePhotoList left">
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo01-01.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo01-02.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo01-03.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo01-04.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo01-05.jpg" alt="" class="slidePhotoList__img">
            </li>
          </ul>
          <ul class="slidePhotoList right" dir="rtl">
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo02-01.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo02-02.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo02-03.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo02-04.jpg" alt="" class="slidePhotoList__img">
            </li>
            <li class="slidePhotoList__item">
              <img src="/assets/img/top/img_memorial-photo02-05.jpg" alt="" class="slidePhotoList__img">
            </li>
          </ul>
        </div>
      </div>

      <section class="memorialCampaignArea">
        <h3 class="memorialCampaign__ttl">10周年記念<br class="sp">キャンペーン</h3>
        <p class="memorialCampaign__lead">10年の感謝を込めて、カピリナをお得にご利用頂ける記念キャンペーンを開催いたします。<br class="pc">ぜひキャンペーンを利用してカピリナへ遊びに来てくださいね！</p>

        <div class="memorialCampaignCont">
          <div class="memorialCampaignCont__item">
            <p class="memorialCampaignCont__number"><img src="/assets/img/top/txt_memorial-camp01-number.svg" alt="第1弾 CAMPAIGN"></p>
            <p class="memorialCampaignCont__ttl"><img src="/assets/img/top/txt_memorial-camp01-ttl.png" alt="期間内は合計金額から10%オフ!!"></p>
            <div class="memorialCampaignCont__period">
              <p class="ttl">期間</p>
              <div class="contBox">
                <p class="txt"><span class="u-fw600 numbering">第1回</span>：2024<span class="small">年</span>2<span class="small">月</span>14<span class="small">日〜</span>4<span class="small">月</span>27<span class="small">日</span></p>
                <p class="txt"><span class="u-fw600 numbering">第2回</span>：2024<span class="small">年</span>12<span class="small">月</span>1<span class="small">日〜</span>2025<span class="small">年</span>2<span class="small">月</span>28<span class="small">日</span></p>
              </div>
            </div>
            <p class="memorialCampaignCont__note">※ホームページからご予約のみの対応です。</p>
          </div>
          <div class="memorialCampaignCont__item">
            <p class="memorialCampaignCont__number"><img src="/assets/img/top/txt_memorial-camp02-number.svg" alt="第2弾 CAMPAIGN"></p>
            <p class="memorialCampaignCont__comingSoon">
              <span class="large">Coming soon…</span>
              お楽しみにお待ちください
            </p>
          </div>
        </div>
      </section>

    </div>
  </div>
</section>
<!-- /memorial -->

<!-- style -->
<section class="l-section styleArea">
  <div class="l-content">
    <h2 class="c-ttl01">
      <span class="c-ttl01__ja">カピリナのスタイル</span>
      <span class="c-ttl01__en">Kapilina’s Style</span>
    </h2>

    <ul class="styleList">
      <li class="styleList__item">
        <div class="styleList__imgBox">
          <p class="styleList__ttl"><img src="/assets/img/top/txt_style-list01-ttl.svg" alt="完全少人数制の安心・安全なガイド"></p>
          <div class="styleList__imgFrame js-parallax">
            <img src="/assets/img/top/img_style-list01-photo.jpg" alt="" class="styleList__img">
          </div>
        </div>
        <div class="styleList__contBox">
          <p class="styleList__txt">
            少人数制(1～4名)の1チームを目安に先着予約の方を最優先しスキルやリクエストしだいでは最大人数を待たずにご予約を締め切ります。 しっかりとコミュニケーションを取り宮古島の海を安心安全で楽しんで頂けるように心掛けていきます。
          </p>
        </div>
      </li>
      <li class="styleList__item">
        <div class="styleList__imgBox">
          <p class="styleList__ttl"><img src="/assets/img/top/txt_style-list02-ttl.svg" alt="色々なリクエストに お応えします"></p>
          <div class="styleList__imgFrame js-parallax">
            <img src="/assets/img/top/img_style-list02-photo.jpg" alt="" class="styleList__img">
          </div>
        </div>
        <div class="styleList__contBox">
          <p class="styleList__txt">
            皆様のダイビングスタイルは色々…。宮古島ダイビングも色々…。「地形・大物・マクロ・写真・初心者・ブランク」など幅広く対応する事ができます。<br>お好みのスタイルやご希望のポイントがありましたらリクエストをお伝え下さい。

            <span class="note">※海況やシーズンによってお応えできない事もあります。</span>
          </p>
          <a href="/divingmap/" class="c-btn styleList__link">宮古島ダイビングマップ</a>
        </div>
      </li>
      <li class="styleList__item">
        <div class="styleList__imgBox">
          <p class="styleList__ttl"><img src="/assets/img/top/txt_style-list03-ttl.svg" alt="快適なダイビングボート"></p>
          <div class="styleList__imgFrame js-parallax">
            <img src="/assets/img/top/img_style-list03-photo.jpg" alt="" class="styleList__img">
          </div>
        </div>
        <div class="styleList__contBox">
          <p class="styleList__txt">
            2022年7月着艇の新艇でご案内いたします。<br>広々とした船内には、日よけのテント・広めのお手洗い・スムーズに荷物を取り出しが可能な収納ボックス・シャワー完備。広々としたボートでポイントまでの移動時間も快適に過ごす事ができます。
          </p>
          <a href="/shop/#boat" class="c-btn styleList__link">ボート紹介</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<!-- /style -->

<!-- topBenefits -->
<section class="l-section topBenefitsArea">
  <div class="l-content">
    <div class="topBenefits__contBox l-pd">
      <h2 class="c-ttl01">
        <span class="c-ttl01__ja">カピリナ5つの特典</span>
        <span class="c-ttl01__en">5benefits</span>
      </h2>

      <ul class="topBenefitsList">
        <li class="topBenefitsList__item large">
          <div class="topBenefitsList__imgBox">
            <p class="topBenefitsList__number">特典<span class="num">1</span></p>
            <div class="topBenefitsList__imgFrame">
              <img src="/assets/img/top/img_benefits01-photo.jpg" alt="" class="topBenefitsList__img">
            </div>
          </div>
          <h3 class="topBenefitsList__ttl">オリンパスTG5無料貸出！</h3>
          <p class="topBenefitsList__txt">各グループ様ごとに1台ずつオリンパスTG5をお貸出し致します。SDカードをご持参ください。</p>
          <p class="topBenefitsList__note">SDカードご持参の際には、大切なデータが失われても保障はできませんのでデータ保存をされてからのご持参をおすすめします。</p>
        </li>
        <li class="topBenefitsList__item large">
          <div class="topBenefitsList__imgBox">
            <p class="topBenefitsList__number">特典<span class="num">2</span></p>
            <div class="topBenefitsList__imgFrame">
              <img src="/assets/img/top/img_benefits02-photo.jpg" alt="" class="topBenefitsList__img">
            </div>
          </div>
          <h3 class="topBenefitsList__ttl">滞在期間中の<br>器材洗いおまかせ下さい</h3>
          <p class="topBenefitsList__txt">宮古島滞在中の器材洗いをカピリナにてご対応します。<br>※最終日は各自でよろしくお願い致します。</p>
        </li>
        <li class="topBenefitsList__item">
          <div class="topBenefitsList__imgBox">
            <p class="topBenefitsList__number">特典<span class="num">3</span></p>
            <div class="topBenefitsList__imgFrame">
              <img src="/assets/img/top/img_benefits03-photo.jpg" alt="" class="topBenefitsList__img">
            </div>
          </div>
          <h3 class="topBenefitsList__ttl">水中ライト無料貸出</h3>
        </li>
        <li class="topBenefitsList__item">
          <div class="topBenefitsList__imgBox">
            <p class="topBenefitsList__number">特典<span class="num">4</span></p>
            <div class="topBenefitsList__imgFrame">
              <img src="/assets/img/top/img_benefits04-photo.jpg" alt="" class="topBenefitsList__img">
            </div>
          </div>
          <h3 class="topBenefitsList__ttl">ボートコート無料貸出</h3>
        </li>
        <li class="topBenefitsList__item">
          <div class="topBenefitsList__imgBox">
            <p class="topBenefitsList__number">特典<span class="num">5</span></p>
            <div class="topBenefitsList__imgFrame">
              <img src="/assets/img/top/img_benefits05-photo.jpg" alt="" class="topBenefitsList__img">
            </div>
          </div>
          <h3 class="topBenefitsList__ttl">フードベスト無料貸出</h3>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- /topBenefits -->

<div class="slideTxt">
  <p class="slideTxt__txt font-futura"><img src="/assets/img/top/txt_slide-txt.svg" alt=""></p>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {

    const slideTxt__w = document.querySelectorAll('.slideTxt__txt img')[0].clientWidth;

    gsap.set('.slideTxt__txt', {
      x: (((slideTxt__w) * 0.5)),
    });

    gsap.to('.slideTxt__txt', { //アニメーションさせたい要素
      x: -((window.innerWidth + slideTxt__w) * 0.3),
      ease: 'none',
      scrollTrigger: {
        trigger: ".slideTxt__txt",
        start: 'top bottom', //アニメーションが開始する位置を指定
        end: 'bottom top',
        scrub: 0,
        invalidateOnRefresh: true,
      }
    });

  });
</script>

<!-- topMenu -->
<section class="l-section topMenuArea">
  <div class="l-content">
    <h2 class="c-ttl01">
      <span class="c-ttl01__ja">メニュー</span>
      <span class="c-ttl01__en">Menu</span>
    </h2>

    <ul class="topMenuList">
      <li class="topMenuList__item large">
        <div class="topMenuList__imgBox">
          <p class="topMenuList__ttl"><img src="/assets/img/top/img_menu01-ttl.svg" alt="ファンダイビング"></p>
          <div class="topMenuList__imgFrame js-parallax">
            <picture>
              <source srcset="/assets/img/top/img_menu01-photo-sp.jpg" media="(max-width: 768px)">
              <img src="/assets/img/top/img_menu01-photo.jpg" alt="" class="topMenuList__img">
            </picture>
          </div>
        </div>
        <p class="topMenuList__txt">宮古島ダイビングの楽しみ方のバラエティーは数知れず…皆様のダイビングスタイルやリクエストに合わせてご案内させて頂きます。</p>
        <a href="/menu/fundiving/" class="c-btn topMenuList__link">詳しくはこちら</a>
      </li>
      <li class="topMenuList__item">
        <div class="topMenuList__imgBox">
          <p class="topMenuList__ttl"><img src="/assets/img/top/img_menu02-ttl.svg" alt="体験ダイビング"></p>
          <div class="topMenuList__imgFrame js-parallax"><img src="/assets/img/top/img_menu02-photo.jpg" alt="" class="topMenuList__img"></div>
        </div>
        <p class="topMenuList__txt">お気軽に水中の世界を楽しみたい方にピッタリ!!!!初めての方でも安心で楽しんでいただけるようにサポートします</p>
        <a href="/menu/trialdiving/" class="c-btn topMenuList__link">詳しくはこちら</a>
      </li>
      <li class="topMenuList__item">
        <div class="topMenuList__imgBox">
          <p class="topMenuList__ttl"><img src="/assets/img/top/img_menu03-ttl.svg" alt="NAUIライセンス講習"></p>
          <div class="topMenuList__imgFrame js-parallax"> <img src="/assets/img/top/img_menu03-photo.jpg" alt="" class="topMenuList__img"></div>
        </div>
        <p class="topMenuList__txt">ダイビングの必要な知識とスキルを身につけて水中世界を楽しんでみませんか？</p>
        <a href="/menu/owd/" class="c-btn topMenuList__link">オープンウォーター講習</a>
        <a href="/menu/aowd/" class="c-btn topMenuList__link">アドバンス講習</a>
      </li>
    </ul>
  </div>
</section>
<!-- /topMenu -->

<!-- access -->
<section class="l-section accessArea">
  <div class="l-content">
    <div class="access__contBox">
      <div class="access__txtBox">
        <h2 class="c-ttl01">
          <span class="c-ttl01__ja">集合場所のご案内</span>
          <span class="c-ttl01__en">Access</span>
        </h2>
        <p class="access__txt">
          レンタカーでお越しの際『<span class="u-fwb">平良港下里舟だまり</span>』が集合場所となります。地図を参考にお越しください。<br>船の特徴としまして、美ら海『87』の看板となります。
        </p>
        <a href="https://www.google.com/maps/place/%E5%AE%AE%E5%8F%A4%E5%B3%B6%E5%B8%82%E5%B9%B3%E8%89%AF%E6%B8%AF%E4%B8%8B%E9%87%8C%E8%88%9F%E3%81%A0%E3%81%BE%E3%82%8A/@24.8039839,125.2682939,15.79z/data=!4m6!3m5!1s0x34f45388549af9bf:0x70f7acc558161c63!8m2!3d24.8043442!4d125.2724069!16s%2Fg%2F11cjw7ss9b?hl=ja&entry=ttu" target="_blank" class="c-btn window access__link">Google Map</a>
      </div>
      <div class="access__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8407.560602721069!2d125.26829391284424!3d24.803983914973863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34f45388549af9bf%3A0x70f7acc558161c63!2z5a6u5Y-k5bO25biC5bmz6Imv5riv5LiL6YeM6Iif44Gg44G-44KK!5e0!3m2!1sja!2sus!4v1705632793010!5m2!1sja!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>
<!-- /access -->

<!-- topBlog -->
<section class="l-section topBlogArea">
  <div class="l-content">
    <div class="topBlog__head">
      <h2 class="c-ttl01">
        <span class="c-ttl01__ja">ブログ</span>
        <span class="c-ttl01__en">Blog</span>
      </h2>

      <a href="/blog/" class="c-btn topBlog__link">記事一覧へ</a>
    </div>

    <ul class="topBlogList">
      <li class="topBlogList__item">
        <a href="/blog/123/" class="topBlogList__link">
          <div class="topBlogList__imgBox"><img src="/assets/img/top/img_blog01-photo.jpg" alt=""></div>
          <div class="topBlogList__contBox">
            <div class="topBlogList__infoBox">
              <p class="c-postCat">ファンダイビング</p>
              <p class="c-postDate">2023/12/25</p>
            </div>
            <p class="topBlogList__ttl">🌲メリークリスマス🌲</p>
            <p class="topBlogList__txt">皆さん。🌲メリークリスマス🌲クリスマスだし、プレゼントがてらマンタでも出ないか期待したのですがマンタのマの字も感じられず、ワォ～！ビックリΣ(･ω･ﾉ)ﾉ！しかし水中にサンタ🎅現る・・・何かいい物ないか洞窟を…</p>
          </div>
        </a>
      </li>
      <li class="topBlogList__item">
        <a href="/blog/123/" class="topBlogList__link">
          <div class="topBlogList__imgBox"><img src="/assets/img/top/img_blog02-photo.jpg" alt=""></div>
          <div class="topBlogList__contBox">
            <div class="topBlogList__infoBox">
              <p class="c-postCat">ファンダイビング</p>
              <p class="c-postDate">2023/12/25</p>
            </div>
            <p class="topBlogList__ttl">クリスマスイブ🎄</p>
            <p class="topBlogList__txt">今朝から雨が降っていました午後から風が強く吹き、時化る予報だったので、本日は午前２本で終了！気温が低いので、水中の方が温かく感じました！と言っても２３℃ですが(￣▽￣;)この時期にピッタリのウミウシ！ミゾレウミウ…</p>
          </div>
        </a>
      </li>
      <li class="topBlogList__item">
        <a href="/blog/123/" class="topBlogList__link">
          <div class="topBlogList__imgBox"><img src="/assets/img/top/img_blog03-photo.jpg" alt=""></div>
          <div class="topBlogList__contBox">
            <div class="topBlogList__infoBox">
              <p class="c-postCat">ファンダイビング</p>
              <p class="c-postDate">2023/12/25</p>
            </div>
            <p class="topBlogList__ttl">((((；ﾟДﾟ))))ｶﾞｸｶﾞｸﾌﾞﾙﾌﾞﾙダイビング</p>
            <p class="topBlogList__txt">約１週間ぶりのダイビングです！ここ数日の間に宮古島にも寒波がやってきまして、気温が一週間前と比べて、一気に１０℃近く落ちたので気持ちの準備も、暖房の準備も何もできてない状態で冬を迎えました(T_T)水温も…</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
<!-- /topBlog -->

<!-- topInfo -->
<section class="l-section topInfoArea">
  <div class="l-content">
    <div class="topInfo__contBox l-pd">
      <div class="topInfo__head">
        <h2 class="c-ttl01">
          <span class="c-ttl01__ja">お知らせ</span>
          <span class="c-ttl01__en">Information</span>
        </h2>

        <a href="/news/" class="c-btn topInfo__link pc">お知らせ一覧へ</a>
      </div>

      <ul class="topInfoList">
        <li class="topInfoList__item">
          <a href="/news/single.php" class="topInfoList__link">
            <p class="c-postDate topInfoList__date">2023/11/27</p>
            <p class="topInfoList__ttl">2024年･料金改定のお知らせ</p>
            <p class="topInfoList__txt">燃料費高騰のため検討を重ねた結果、今後の事業展開を考慮しまして、料金の見直しをすることになりました。理解ご了承よろしくお願い致します。</p>
          </a>
        </li>
        <li class="topInfoList__item">
          <a href="/news/single.php" class="topInfoList__link">
            <p class="c-postDate topInfoList__date">2023/11/27</p>
            <p class="topInfoList__ttl">台風接近中!!!!!!!!!!!</p>
            <p class="topInfoList__txt">台風２号が宮古島に接近中!!!!!!!!!!!久々の台風なのでドキドキ船の台風対策はバッチリなんですが、心配で見に行ってきました(;^_^A</p>
          </a>
        </li>
        <li class="topInfoList__item">
          <a href="/news/single.php" class="topInfoList__link">
            <p class="c-postDate topInfoList__date">2023/11/27</p>
            <p class="topInfoList__ttl">2023年度　料金改定のお知らせ</p>
            <p class="topInfoList__txt">燃料費高騰のため検討を重ねた結果、今後の事業展開を考慮しまして、料金の見直しをすることになりました。理解ご了承よろしくお願い致します。</p>
          </a>
        </li>
      </ul>

      <a href="/news/" class="c-btn topInfo__link sp">お知らせ一覧へ</a>
    </div>
  </div>
</section>
<!-- /topInfo -->

<!-- topBtmMenu -->
<section class="l-section topBtmMenuArea">
  <div class="l-content">
    <ul class="topBtmMenuList">
      <li class="topBtmMenuList__item">
        <a href="/shop/" class="topBtmMenuList__link js-parallax">
          <img src="/assets/img/top/img_btm-menu-shop.jpg" alt="" class="topBtmMenuList__img">
          <div class="c-ttl01 topBtmMenuList__ttl">
            <p class="c-ttl01__ja">ショップ紹介</p>
            <p class="c-ttl01__en">Shop</p>
          </div>
        </a>
      </li>
      <li class="topBtmMenuList__item">
        <a href="/shop/staff/" class="topBtmMenuList__link js-parallax">
          <img src="/assets/img/top/img_btm-menu-staff.jpg" alt="" class="topBtmMenuList__img">
          <div class="c-ttl01 topBtmMenuList__ttl">
            <p class="c-ttl01__ja">スタッフ紹介</p>
            <p class="c-ttl01__en">Staff</p>
          </div>
        </a>
      </li>
      <li class="topBtmMenuList__item">
        <a href="/shop/faq/" class="topBtmMenuList__link js-parallax">
          <img src="/assets/img/top/img_btm-menu-faq.jpg" alt="" class="topBtmMenuList__img">
          <div class="c-ttl01 topBtmMenuList__ttl">
            <p class="c-ttl01__ja">よくある質問</p>
            <p class="c-ttl01__en">FAQ</p>
          </div>
        </a>
      </li>
      <li class="topBtmMenuList__item">
        <a href="/shop/recruit/" class="topBtmMenuList__link js-parallax">
          <img src="/assets/img/top/img_btm-menu-recruit.jpg" alt="" class="topBtmMenuList__img">
          <div class="c-ttl01 topBtmMenuList__ttl">
            <p class="c-ttl01__ja">採用応募</p>
            <p class="c-ttl01__en">Recruit</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>
<!-- /topBtmMenu -->

<?php require_once("footer.php"); ?>
