<?php
$body_class = 'blog';
require_once($_SERVER['DOCUMENT_ROOT'] . "/header.php"); ?>

<div class="l-section c-pageTtlArea">
  <div class="l-content">
    <h1 class="c-pageTtl">
      <span class="c-pageTtl__en">Blog</span>
      <span class="c-pageTtl__ja">海ブログ</span>
    </h1>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/include/breadcrumb.php"); ?>

<section class="l-section blogArea">
        <div class="l-content">
          <ul class="blogNavList">
            <li class="blogNavList__item"><a href="" class="blogNavList__link">すべて</a></li>
            <li class="blogNavList__item"><a href="" class="blogNavList__link">お知らせ</a></li>
            <li class="blogNavList__item"><a href="" class="blogNavList__link">ファンダイビング</a></li>
            <li class="blogNavList__item"><a href="" class="blogNavList__link">体験ダイビング</a></li>
            <li class="blogNavList__item"><a href="" class="blogNavList__link">ライセンス講習</a></li>
            <li class="blogNavList__item"><a href="" class="blogNavList__link">宮古島豆知識</a></li>
          </ul>
          <div class="blogBox">
            <ul class="blogList">
              <li class="blogList__item">
                <div class="blogList__imgBox">
                  <img src="/assets/img/dummy/blog-arc01.jpg" alt="">
                </div>
                <div class="blogList__category">
                  <p class="blogList__tag">ファンダイビング</p>
                  <p class="blogList__date">2023/12/30</p>
                </div>
                <p class="blogList__ttl">2023年潜り納め</p>
                <p class="blogList__text">ついにこの日がやって参りましたぁ～２０２３年潜り納めです。しかも天気がいい☀☀☀そして三銃士は今回３大ポイント制覇!!!…</p>
              </li>
              <li class="blogList__item">
                <div class="blogList__imgBox">
                  <img src="/assets/img/dummy/blog-arc02.jpg" alt="">
                </div>
                <div class="blogList__category">
                  <p class="blogList__tag">ファンダイビング</p>
                  <p class="blogList__date">2023/12/29</p>
                </div>
                <p class="blogList__ttl">三銃士の頑張りを見て下さい！</p>
                <p class="blogList__text">昨日に引き続き、今日も三銃士の皆さんをご案内～今日の三銃士の頑張りを見て欲しいです(≧▽≦)どんな体勢で撮ってるの！…</p>
              </li>
              <li class="blogList__item">
                <div class="blogList__imgBox">
                  <img src="/assets/img/dummy/blog-arc03.jpg" alt="">
                </div>
                <div class="blogList__category">
                  <p class="blogList__tag">ファンダイビング</p>
                  <p class="blogList__date">2023/12/28</p>
                </div>
                <p class="blogList__ttl">三銃士がやってきたぁ～</p>
                <p class="blogList__text">去年もこの日に三銃士がやってきたぁ～戻って来てくれるのって嬉しいですね(≧▽≦)ありがとうございます。寸止めだったアント…</p>
              </li>
              <li class="blogList__item">
                <div class="blogList__imgBox">
                  <img src="/assets/img/dummy/blog-arc03.jpg" alt="">
                </div>
                <div class="blogList__category">
                  <p class="blogList__tag">ファンダイビング</p>
                  <p class="blogList__date">2023/12/26</p>
                </div>
                <p class="blogList__ttl">念願の太陽がきたー！！！！</p>
                <p class="blogList__text">待ちに待った太陽が出てくれて、今日は暖かく過ごしやすい気温でした(*´ω｀*)これからクリスマスモードから一気に年末モードに…</p>
              </li>
            </ul>
          </div>
        </div>
      </section>


<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>
