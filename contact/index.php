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

    <p class="contact__lead">
      下記フォームより必要事項をご記入の上お送りください。<br class="pc">ご予約の際は<a href="https://app.okaban.work/form/?shop_id=kapilina" target="_blank" class="c-linkTxt arrow">予約専用フォーム</a>よりお申し込みください。<br class="pc">お問合せいただいたメールには必ず24時間以内に返信をお送りしております。
    </p>

    <form action="#" class="wpcf7-form init contactForm">
      <dl class="contactFormList">
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">お問い合わせ内容<span class="required">必須</span></dt>
          <dd class="contactFormList__cont">
            <span class="wpcf7-form-control-wrap" data-name="about">
              <span class="wpcf7-form-control wpcf7-radio">

                <span class="wpcf7-list-item first"><label><input type="radio" name="about" value="ファンダイビングについて" checked="checked"><span class="wpcf7-list-item-label">ファンダイビングについて</span></label></span>
                <span class="wpcf7-list-item"><label><input type="radio" name="about" value="体験ダイビングについて"><span class="wpcf7-list-item-label">体験ダイビングについて</span></label></span>
                <span class="wpcf7-list-item"><label><input type="radio" name="about" value="ライセンスについて"><span class="wpcf7-list-item-label">ライセンスについて</span></label></span>
                <span class="wpcf7-list-item"><label><input type="radio" name="about" value="求人募集について"><span class="wpcf7-list-item-label">求人募集について</span></label></span>
                <span class="wpcf7-list-item"><label><input type="radio" name="about" value="ショップツアー＆学生ツアーについて"><span class="wpcf7-list-item-label">ショップツアー＆学生ツアーについて</span></label></span>
                <span class="wpcf7-list-item last"><label><input type="radio" name="about" value="その他"><span class="wpcf7-list-item-label">その他</span></label>
                </span>

              </span>
            </span>
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">お名前<span class="required">必須</span></dt>
          <dd class="contactFormList__cont">
            <span class="wpcf7-form-control-wrap" data-name="your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span>
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">メールアドレス<span class="required">必須</span></dt>
          <dd class="contactFormList__cont">
            <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span>
          </dd>
        </div>
        <div class="contactFormList__item">
          <dt class="contactFormList__ttl">電話番号<span class="required">必須</span></dt>
          <dd class="contactFormList__cont">
            <span class="wpcf7-form-control-wrap" data-name="your-tel"><input type="tel" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"></span>
          </dd>
        </div>
        <div class="contactFormList__item textarea">
          <dt class="contactFormList__ttl">内容詳細<span class="required">必須</span></dt>
          <dd class="contactFormList__cont">
            <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span>
          </dd>
        </div>
      </dl>
      <div class="formSubmitBtnBox">
        <button type="submit" name="send" class="c-btn center formSubmitBtn">送信する</button>
      </div>
    </form>
  </div>
</section>
<!-- /cotnact -->


<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>
