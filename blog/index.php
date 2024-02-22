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
      <li class="blogNavList__item">すべて</li>
      <li class="blogNavList__item">お知らせ</li>
      <li class="blogNavList__item">ファンダイビング</li>
      <li class="blogNavList__item">体験ダイビング</li>
      <li class="blogNavList__item">ライセンス講習</li>
      <li class="blogNavList__item">宮古島豆知識</li>
    </ul>
    <div class="blogBox">
      <ul class="blogList">
        <li class="blogList__item">
          <div class="blogList__img">
            <img src="" alt="">
          </div>
          <div class="blogList__category">
            <p class="blogList__tag"></p>
            <p class="blogList__date"></p>
          </div>
          <p class="blogList__ttl"></p>
          <p class="blogList__text"></p>
        </li>
      </ul>
    </div>
  </div>
</section>


<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>
