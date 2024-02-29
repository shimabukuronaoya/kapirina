<?php
$body_class = 'menu';
require_once($_SERVER['DOCUMENT_ROOT'] . "/header.php"); ?>

<div class="l-section c-pageTtlArea">
  <div class="l-content">
    <h1 class="c-pageTtl">
      <span class="c-pageTtl__en">Menu</span>
      <span class="c-pageTtl__ja">メニュー</span>
    </h1>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/include/breadcrumb.php"); ?>

<!-- menu -->
<section class="menuArea l-pd">
  <div class="l-content">
    <div class="menuSection">
      <ul class="menuList">
        <li class="menuList__item menuFun">
          <div class="menuList__imgBox">
            <img src="/assets/img/menu/img_fun-main.jpg" alt="">
          </div>
          <h2 class="c-ttl01">
            <span class="c-ttl01__ja">Fun Diving</span>
            <span class="c-ttl01__en">ファンダイビング</span>
          </h2>
          <div class="menuList__contBox">
            <div class="menuList__txtBox">
              <p class="menuList__lead">宮古島ダイビングの楽しみ方のバラエティーは数知れず…<br class="pc">皆様のダイビングスタイルやリクエストに<br class="pc">合わせてご案内させて頂きます。</p>
              <a href="/menu/fundiving" class="c-btn menuList__link">詳しくはこちら</a>
            </div>
            <div class="menuList__courseBox">
              <p class="courseBox__ttl">ボートファンダイビング</p>
              <ul class="courseList">
                <li class="courseList__item">
                  <p class="courseName">1ダイブ</p>
                  <p class="coursePrice"><span class="yen">¥</span>13,200<span class="tax">/名(税込)</span></p>
                </li>
                <li class="courseList__item">
                  <p class="courseName">2ダイブ</p>
                  <p class="coursePrice"><span class="yen">¥</span>17,600<span class="tax">/名(税込)</span></p>
                </li>
                <li class="courseList__item">
                  <p class="courseName">3ダイブ</p>
                  <p class="coursePrice"><span class="yen">¥</span>22,000<span class="tax">/名(税込)</span></p>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="menuList__item menuTrial">
          <div class="menuList__imgBox">
            <img src="/assets/img/menu/img_trial-main.jpg" alt="">
          </div>
          <h2 class="c-ttl01">
            <span class="c-ttl01__ja">Trial Diving</span>
            <span class="c-ttl01__en">体験ダイビング</span>
          </h2>
          <div class="menuList__contBox">
            <div class="menuList__txtBox">
              <p class="menuList__lead">お気軽に水中の世界を楽しみたい方にピッタリ!!!! 初めての方でも安心で楽しんでいただけるように サポートします。</p>
              <a href="/menu/trialdiving/" class="c-btn menuList__link">詳しくはこちら</a>
            </div>
            <div class="menuList__courseBox">
              <p class="courseBox__ttl">ボート体験ダイビング</p>
              <ul class="courseList">
                <li class="courseList__item">
                  <p class="courseName">1ダイブ</p>
                  <p class="coursePrice"><span class="yen">¥</span>16,500<span class="tax">/名(税込)</span></p>
                </li>
                </ul>
            </div>
          </div>
        </li>
        <li class="menuList__item menuLicense">
          <div class="menuList__imgBox">
            <img src="/assets/img/menu/img_license-main.jpg" alt="">
          </div>
          <h2 class="c-ttl01">
            <span class="c-ttl01__ja">NAUI License Course</span>
            <span class="c-ttl01__en">NAUIライセンス講習</span>
          </h2>
          <div class="menuList__contBox">
            <div class="menuList__txtBox">
              <p class="menuList__lead">ダイビングの必要な知識とスキルを身につけて<br class="pc">水中世界を楽しんでみませんか？</p>
              <a href="/menu/owd/" class="c-btn menuList__link">オープンウォーター講習</a>
              <a href="/menu/aowd/" class="c-btn menuList__link">アドバンス講習</a>
            </div>
            <div class="menuList__courseBox">
              <p class="courseBox__ttl">NAUIライセンス講習</p>
              <ul class="courseList">
                <li class="courseList__item">
                  <p class="courseName">オープンウォーターコース</p>
                  <p class="coursePrice"><span class="yen">¥</span>74,800<span class="tax">/名(税込)</span></p>
                </li>
                <li class="courseList__item">
                  <p class="courseName">アドバンスコース</p>
                  <p class="coursePrice"><span class="yen">¥</span>44,000<span class="tax">/名(税込)</span></p>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="menuList__item menuRental">
          <h2 class="c-ttl01">
            <span class="c-ttl01__ja">Rental Equipment</span>
            <span class="c-ttl01__en">レンタル器材</span>
          </h2>
          <div class="menuRentalBox">
              <ul class="menuRentalList">
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">フルレンタル</p>
                  <p class="menuRentalList__price"><span class="yen">¥</span>4,400<span class="tax">/名(税込)</span></p>
                </li>
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">BC</p>
                  <p class="menuRentalList__price"><span class="yen">¥</span>1,100<span class="tax">/名(税込)</span></p>
                </li>
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">レギュレータ</p>
                  <p class="menuRentalList__price"><span class="yen">¥</span>1,100<span class="tax">/名(税込)</span></p>
                </li>
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">軽器材<br><span class="detail">(マスク/シュノーケル/ブーツ/フィン)</span></p>
                  <p class="menuRentalList__price"><span class="yen">¥</span>1,650<span class="tax">/名(税込)</span></p>
                </li>
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">ウェットスーツ</p>
                  <p class="menuRentalList__price"><span class="yen">¥</span>1,100<span class="tax">/名(税込)</span></p>
                </li>
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">防水デジタルカメラ</p>
                  <p class="menuRentalList__price">無料</p>
                </li>
                <li class="menuRentalList__item">
                  <p class="menuRentalList__name">水中ライト</p>
                  <p class="menuRentalList__price">無料</p>
                </li>
              </ul>
            </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- /menu -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>