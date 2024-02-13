<?php
$body_class = 'shop faq';
require_once($_SERVER['DOCUMENT_ROOT'] . "/header.php"); ?>

<div class="l-section c-pageTtlArea">
  <div class="l-content">
    <h1 class="c-pageTtl">
      <span class="c-pageTtl__en">FAQ</span>
      <span class="c-pageTtl__ja">よくある質問</span>
    </h1>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/include/breadcrumb.php"); ?>

<!-- faq -->
<section class="l-section faqArea">
  <div class="l-content">

    <dl class="faqList">
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ショップへの器材発送は可能ですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            可能です！<br>
            下記住所宛にご発送ください。<br>
            <br>
            〒906-0008　宮古島市平良字荷川取104-1-D<br>
            TEL：080-9243-3505 FAX：0980-79-0750
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">送迎はしてますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            平良市内の宿泊先のみ対応しております。<br>
            (わからない場合はお問い合わせください)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">宿泊先のお迎えは何時ぐらいですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            目安としまして8時～8時10分のお迎え時間になります。<br>
            (スケジュールによってはお迎え時間の変更がありますのでご了承ください)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ダイビングスケジュールは？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">

            <ul class="faqScheduleList">
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">8:00</p>
                <p class="faqScheduleList__txt">宿泊先にお迎え</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">8:30</p>
                <p class="faqScheduleList__txt">出港</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">9:00</p>
                <p class="faqScheduleList__txt">1ダイブ目エントリー</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">9:50</p>
                <p class="faqScheduleList__txt">水面休息</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">10:40</p>
                <p class="faqScheduleList__txt">2ダイブ目エントリー</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">11:30</p>
                <p class="faqScheduleList__txt">船上ランチ</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">12:30</p>
                <p class="faqScheduleList__txt">3ダイブ目エントリー</p>
              </li>
              <li class="faqScheduleList__item">
                <p class="faqScheduleList__time">14:00</p>
                <p class="faqScheduleList__txt">帰港</p>
              </li>
            </ul>
            ※ダイビングスケジュールは海況・予約状況でことなりますのでご了承ください。<br>
            ※ログ付けは自由参加になります。
          </div>
        </dd>
      </div>
      <div class="faqList__item" id="faq-belongings">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ダイビング時の服装や持ち物は？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            事前の水着着用・タオル・着替えの持参をおすすめします。

            <dl class="faqList02">
              <div class="faqList02__item">
                <dt class="faqList02__ttl">夏場
                </dt>
                <dd class="faqList02__txt">
                  服装：Ｔシャツ・海パン・サンダル<br>
                  持ち物：日焼け止め・サングラス・帽子・薄手の羽織る物をおすすめします。
                </dd>
              </div>
              <div class="faqList02__item">
                <dt class="faqList02__ttl">冬場
                </dt>
                <dd class="faqList02__txt">
                  服装：保温性のある服装(ボートコート・フリース・長ズボン等)<br>
                  持ち物：ニット帽・ネックウォーマー・ホッカイロなどをおすすめします。
                </dd>
              </div>
            </dl>

          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ポイントまでの移動時間はどのくらいですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            伊良部・下地島周辺で30～40分ぐらいの目安になります。<br>
            <a href="/divingmap/" class="c-linkTxt arrow">宮古島ポイントマップはこちら</a>
          </div>
        </dd>
      </div>

      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ダイビングスタイル・ポイントのリクエストは可能ですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            出来る限り幅広く対応させて頂きますのでお気軽にお伝えください。但し、海況・風向・スキルによって対応ができない場合がありますのでご理解よろしくお願い致します。
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">初心者・ブランクダイバーですけど大丈夫ですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            もちろん大丈夫です！しっかりとサポートさせて頂きます！
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">一人でも参加可能ですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            全メニューお一人様からご予約可能です。
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">体験ダイビングとファンダイビングは一緒に潜れますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            もちろん潜れますよ！(但し、体験ダイビングの方のレベルに合わせてのご案内となります)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">生理中でもダイビングは参加できますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            参加できます！(ダイビング後は体を冷やさないようにしていただき体調にあわせてのダイビングをおすすめします)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">お昼ご飯はついてますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            当店では各自でご用意して頂いております。(お湯はご用意していますので、カップ麺や汁物類は食べれます)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">キャンセル料について</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            前日までのキャンセルに関しては料金は発生しません。<br>
            (但し、当日のキャンセルはお一人様につき11,000円のキャンセル料金が発生しますのでご了承ください)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">精算について</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            最終日に精算になります。<br>
            (お支払いは現金・クレジットカード・PayPayで対応しております)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">託児所はありますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            当店では、<a href="https://miyakojima-lupinus.com/" target="_blank" class="c-linkTxt arrow">キッズステーション ルピナス</a> を紹介しています。
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">自社ボートでの案内ですか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            自社ボートでのご案内をしております(<a href="/shop/#boat" class="c-linkTxt arrow">自社ボート紹介はこちら</a>)<br>
            サークルやショップツアーも対応してますのでお問合せ下さい。<br>
            但し、相乗りになる場合もありますのでご了承ください。
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ショップで器材を洗って発送をお願いできますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            最終日の器材の取り扱いはお客様ご自身で洗って発送をお願いしております。<br>
            (但し滞在期間中はこちらで洗って保管しております)
          </div>
        </dd>
      </div>
      <div class="faqList__item">
        <dt class="faqList__q">
          <p class="faqList__qTxt">ダイビング後、港に戻ってからショップでシャワー等が利用できますか？</p>
        </dt>
        <dd class="faqList__a">
          <div class="faqList__aCont">
            ダイビング後はお客様が宿泊しているホテルに送迎いたします。そちらでシャワー、器材の洗浄をお願いしております。
          </div>
        </dd>
      </div>
    </dl>
  </div>
</section>
<!-- /faq -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>