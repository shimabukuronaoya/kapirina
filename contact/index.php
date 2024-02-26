<?php
$body_class = 'contact';
require_once($_SERVER['DOCUMENT_ROOT'] . "/header.php"); ?>

<div class="l-section c-pageTtlArea">
  <div class="l-content">
    <h1 class="c-pageTtl">
      <span class="c-pageTtl__en">Contact</span>
      <span class="c-pageTtl__ja">お問い合わせ</span>
    </h1>
  </div>
</div>

<div class="c-breadArea l-pd">
  <div class="l-content">
    <nav class="c-breadNav">
      <ul class="c-breadList">
        <li class="c-breadList__item"><a href="/" class="c-breadList__link">TOP</a></li>
        <li class="c-breadList__item"><a href="/contact/" class="c-breadList__link">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>
</div>

<!-- cotnact -->
<section class="l-section contactArea">
  <div class="l-content">
    <p class="contact__lead">下記フォームより必要事項をご記入の上お送りください。<br class="pc">ご予約の際は<a href="#" class="contact__lead--link">予約専用フォーム</a>　よりお申し込みください。<br class="pc">お問合せいただいたメールには必ず24時間以内に返信をお送りしております。</p>

    <form action="post" class="contactForm">
      <dl class="contactFormList">
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">
          お問い合せ内容<span>必須</span>
          </dt>
          <dd class="contactFormList__cont">
            <ul class="radioList">
              <li class="radioList__item">
                <input type="radio" id="fun" name="contact" value="fun" checked="checked">ファンダイビグについて
              </li>
              <li class="radioList__item">
                <input type="radio" id="experience" name="contact" value="experience">
                体験ダイビングについて
              </li>
              <li class="radioList__item">
                <input type="radio" id="license" name="contact" value="license">
                ライセンスについて
              </li>
              <li class="radioList__item">
                <input type="radio" id="recruit" name="contact" value="recruit">
                求人募集について
              </li>
              <li class="radioList__item">
                <input type="radio" id="tour" name="contact" value="tour">
                ショップツアー＆学生ツアーについて
              </li>
              <li class="radioList__item">
                <input type="radio" id="other" name="contact" value="other">
                その他
              </li>
            </ul>
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">
          お名前<span>必須</span>
          </dt>
          <dd class="contactFormList__cont">
            <input type="text">
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">
          メールアドレス<span>必須</span>
          </dt>
          <dd class="contactFormList__cont">
            <input type="email">
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">
          電話番号<span>必須</span>
          </dt>
          <dd class="contactFormList__cont">
            <input type="tel">
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">
          内容詳細<span>必須</span>
          </dt>
          <dd class="contactFormList__cont">
            <textarea name="detail" rows="8" cols="40"></textarea>
          </dd>
        </div>
      </dl>
      <button type="submit" class="c-btn shopRecruit__link">お問い合わせ</button>
    </form>
  </div>
</section>
<!-- /cotnact -->


<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>
