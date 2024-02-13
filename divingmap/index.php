<?php
$body_class = 'divingmap';
require_once($_SERVER['DOCUMENT_ROOT'] . "/header.php"); ?>

<div class="l-section c-pageTtlArea">
  <div class="l-content">
    <h1 class="c-pageTtl">
      <span class="c-pageTtl__en">Diving Map</span>
      <span class="c-pageTtl__ja">
        宮古島ダイビングマップ
      </span>
    </h1>
  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/include/breadcrumb.php"); ?>

<!-- divingmapFirst -->
<section class="l-section divingmapFirstArea">
  <div class="l-content">

    <p class="divingmapFirst__lead">宮古島のダイビングポイントは数多くあり、季節によって潜れるポイントはさまざまです。<br class="pc">宮古島に来る前にどんな所で潜ってみたいかチェックしてみてね。</p>

    <div class="divingmap__imgBox">
      <picture>
        <source srcset="/assets/img/divingmap/img_first-map-sp.png" media="(max-width: 768px)">
        <img src="/assets/img/divingmap/img_first-map.png" alt="">
      </picture>
    </div>

    <section class="miyakoSeasonalitySec">
      <h2 class="miyakoSeasonality__ttl">
        <span class="subTxt">Miyakojima Seasonality</span>
        <span class="mainTxt">宮古島シーズナリティ表</span>
      </h2>

      <div class="miyakoSeasonalityTableOuter">
        <table class="miyakoSeasonalityTable">
          <tr>
            <th class="fixed01"></th>
            <th class="month">1<span class="small">月</span></th>
            <th class="month">2<span class="small">月</span></th>
            <th class="month">3<span class="small">月</span></th>
            <th class="month">4<span class="small">月</span></th>
            <th class="month">5<span class="small">月</span></th>
            <th class="month">6<span class="small">月</span></th>
            <th class="month">7<span class="small">月</span></th>
            <th class="month">8<span class="small">月</span></th>
            <th class="month">9<span class="small">月</span></th>
            <th class="month">10<span class="small">月</span></th>
            <th class="month">11<span class="small">月</span></th>
            <th class="month">12<span class="small">月</span></th>
          </tr>
          <tr>
            <th class="ttl fixed01">
              <p class="txtBox"><img src="/assets/img/divingmap/ico_seasonality-temp.svg" alt="" class="icon">気温</p>
            </th>
            <td>19<span class="small">&#8451;</span></td>
            <td>18<span class="small">&#8451;</span></td>
            <td>23<span class="small">&#8451;</span></td>
            <td>24<span class="small">&#8451;</span></td>
            <td>26<span class="small">&#8451;</span></td>
            <td>28<span class="small">&#8451;</span></td>
            <td>30<span class="small">&#8451;</span></td>
            <td>32<span class="small">&#8451;</span></td>
            <td>32<span class="small">&#8451;</span></td>
            <td>29<span class="small">&#8451;</span></td>
            <td>24<span class="small">&#8451;</span></td>
            <td>21<span class="small">&#8451;</span></td>
          </tr>
          <tr>
            <th class="ttl fixed01">
              <p class="txtBox"><img src="/assets/img/divingmap/ico_seasonality-water-temp.svg" alt="" class="icon">水温</p>
            </th>
            <td>22<span class="small">&#8451;</span></td>
            <td>22<span class="small">&#8451;</span></td>
            <td>23<span class="small">&#8451;</span></td>
            <td>24<span class="small">&#8451;</span></td>
            <td>26<span class="small">&#8451;</span></td>
            <td>28<span class="small">&#8451;</span></td>
            <td>29<span class="small">&#8451;</span></td>
            <td>29<span class="small">&#8451;</span></td>
            <td>29<span class="small">&#8451;</span></td>
            <td>27<span class="small">&#8451;</span></td>
            <td>25<span class="small">&#8451;</span></td>
            <td>23<span class="small">&#8451;</span></td>
          </tr>
          <tr>
            <th class="ttl fixed01">
              <p class="txtBox"><img src="/assets/img/divingmap/ico_seasonality-wind-direction.svg" alt="" class="icon">風向</p>
            </th>
            <td>北</td>
            <td>北</td>
            <td>北</td>
            <td>北〜南</td>
            <td>南</td>
            <td>南</td>
            <td>南</td>
            <td>南</td>
            <td>南〜北</td>
            <td>北</td>
            <td>北</td>
            <td>北</td>
          </tr>
          <tr>
            <th class="ttl fixed01">
              <p class="txtBox"><img src="/assets/img/divingmap/ico_seasonality-area.svg" alt="" class="icon">エリア</p>
            </th>
            <td>下地</td>
            <td>下地</td>
            <td>下地</td>
            <td>両方</td>
            <td>伊良部</td>
            <td>伊良部</td>
            <td>伊良部</td>
            <td>伊良部</td>
            <td>両方</td>
            <td>下地</td>
            <td>下地</td>
            <td>下地</td>
          </tr>
        </table>
      </div>
      <p class="miyakoSeasonality__note">※表はあくまでも目安で行きやすい時期となっています。当日の海況等によってご案内するエリアが変わる事もあります。</p>

    </section>
  </div>
</section>
<!-- /divingmapFirst -->


<!-- mapPoint -->
<section class="l-section mapPointArea">
  <div class="l-content">

    <div class="mapPoint__contBox irabu">
      <div class="mapPoint__ttlBox">
        <h2 class="mapPoint__ttl">伊良部島ポイント</h2>
        <p class="mapPoint__season">
          <span class="ttl">ご案内シーズン</span>
          <span class="month">4月〜9月</span>
        </p>
      </div>
      <p class="mapPoint__lead">伊良部島のポイントは暖かい南風が吹く春～夏ぐらいに行きやすくなっています。<br class="pc">サンゴ礁・地形・いろんな生物が観察出来るエリア。例えば、ハート型の地形や青の洞窟や沈船などは伊良部エリアです。</p>

      <div class="mapPoint__map">
        <img src="/assets/img/divingmap/img_map-irabu.svg" alt="" class="svg">
      </div>

      <ul class="mapPointList">
        <li class="mapPointList__item" id="irabu-chinsen">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-chinsen.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">沈船</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">カーフェリーが沈んでいる。今は漁礁となっているので生物も豊富。透明度が良くないので冒険心がくすぐられるかも・・・</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-twinHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-twinhole.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">ツインホール</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">有名な青の洞窟。潮位や太陽の差込みのタイミングで、水中から水面を見上げると水面が青く輝いている。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-funausagi">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-funausagi.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">フナウサギパナタ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">サンゴが広がり、色んな種類の魚たちが・・・<br class="pc">深い所には真っ白な砂地があり、宇宙遊泳感覚も味わえる。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-snakeHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-snakehole.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">スネークホール＆ハナダイの根</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">ダイバー限定の青の洞窟、沖合の根には花吹雪が舞ったように<br class="pc">アカネハナゴイが群れ見応え抜群。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-dentarLock">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-dentarock.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">デンターロック(白鳥湾)</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">巨大な歯の岩があったり、満ちた時しか行けないホールが行けたり夏限定のレイザービームが見られる、見所てんこ盛り。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-hakuchoYouchien">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-shiratori.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">白鳥幼稚園</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">生物オンリー。大物からマクロまで。カメとの遭遇率も高い！生物好きダイバーにはベストポイント！</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-wArch">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-warch.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">Wアーチ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">2つのアーチがあり、そのアーチがハート型に見える。<br class="pc">じっくり探せばマクロ系も見つかる場所。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-lArch-warpHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-larch.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">L字アーチ＆ワープホール</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">ダイナミックな地形。運がいいと大物に出会える時も。<br class="pc">ワープホールは狭くて暗い洞窟。一体ドコにワープするかな？</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-zArch">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-zarch.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">Zアーチ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">アーチの真ん中の大きな柱を軸にZ型に進むアーチ。夏はアーチの中にスカシテンジクダイの群れが見られる。ゴロタや壁を探せば、マクロも楽しめる。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-crossHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-crosshole.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">クロスホール＆庭園</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級～中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">広いホール空間の中に柔らかい光が注ぎ込まれる。上を見上げると、クロス型に開いた出口が・・・。庭園にはたくさんの水路があり、まるで迷路に迷い込んだ気持ちになる</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-overHang">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-overhang.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">オーバーハング</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">リーゼントの形をした根の周りには、アカネハナゴイやカスミチョウチョウウオ、アカモンガラなど様々な生物が見られる。タイミングによっては、ホソカマスの群れや亀が見られるかも！？</p>
          </div>
        </li>
        <li class="mapPointList__item" id="irabu-surgeonreaf">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_irabu-surgeonleaf.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-irabu.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">サージョンリーフ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">大物や群れを狙いに行くポイントで、バラクーダ、カメ、ナポレオン、イソマグロ、マダラトビエイなどが見られる。</p>
          </div>
        </li>
      </ul>

    </div>

    <div class="mapPoint__contBox shimoji">
      <div class="mapPoint__ttlBox">
        <h2 class="mapPoint__ttl">下地島ポイント</h2>
        <p class="mapPoint__season">
          <span class="ttl">ご案内シーズン</span>
          <span class="month">9月〜4月</span>
        </p>
      </div>
      <p class="mapPoint__lead">北風が吹き始める秋～冬にかけて行きやすくなっています。有名な地形・大物・砂地なども見れるエリア。<br class="pc">例えば、雑誌に載る魔王の宮殿やロウニンアジなどは下地エリアです。</p>

      <div class="mapPoint__map">
        <img src="/assets/img/divingmap/img_map-shimoji.svg" alt="" class="svg">
      </div>

      <ul class="mapPointList shimoji">
        <li class="mapPointList__item" id="shimoji-cristalPark">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-cristalpark.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">クリスタルパーク</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">砂地＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">砂地にいくつかのサンゴの根があり、そこを転々としながら回っていくポイント。大きなハマサンゴの周りにスカシテンジクダイが群れておりその光景はまるで水中で粉雪が舞っているかのよう。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-lockBeauty">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-rockbeauty.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">ロックビューティー</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">砂地＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">砂地に待ち受けているのは、チンアナゴ(ガーデンイール)<br class="pc">警戒心が強く、すぐに穴に引っ込んでしまうので、そっと近づいてみて！至近距離でチンアナゴが見られるかも。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-twinCave">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-twincape.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">ツインケーブ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">長方形型の根にケーブが2本通っていて、亀裂からの柔らかな光が見られる。ケーブを回る途中、運がいいとネムリブカに会えるかも！？</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-joouRoom">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-queenroom.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">女王の部屋</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">ドーム状になっているホール。住人はホシゾラワラエビ。威嚇するとムチを振る姿から(SM)女王様と命名された。ムチを振る姿が見たい方は、女王様にちょっかいをかけて怒らせてみて～</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-naruhodo">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-naruhodo.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">なるほど・ザ・ケーブ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">潜ってみて誰しもがへえ～なるほど！ってつぶやきたくなるような地形ポイント。からくりはドーナツ状の地形になっていて、狭い洞窟なので冒険心くすぐられる。ゴロタや壁は、マクロ好きにはたまらない生物いっぱい</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-sangoHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-sangohole.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">サンゴホール</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">入口は狭いけど中はダイナミックな空間が広がっている。大きな出口は映画館のスクリーンのよう。ある角度から見るとハート型に見える所もあるので探してみて。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-ichinoseDrop">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-itinosedrop.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">一ノ瀬ドロップ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">ドロップ</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">中世浮力を保ちながらドロップオフを楽しむ。潮の流れも時々受ける為、大物に遭遇する事も。深場にはレアなフチドリハナダイがいるよ。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-ichinoseHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-itinosehole.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">一ノ瀬ホール</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">条件が揃わないと行けない所。隠れファンが多いポイントで、光のシャワー＆カーテン、レーザービームなど光づくし。行けば虜になること間違いなし！</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-marineLake">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-marinlake.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">マリンレイク</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">宮古島で一番長い洞窟で、その長さは大体50m。地形ダイビングが初めての方もベテランの方も楽しめる大満足のポイント。浮上が出来る所がある。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-nakanoshimaHole">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-nakanosimahole.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">中の島ホール</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">水深5ｍ程にある入口の縦穴は垂直に水底(水深25m)まで続くので水中フリーフォールが楽しめる。ホールの出口はたそがれムーミンに見える大きな穴がある。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-nakanoshimaChannel">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-nakanosimachannel.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">中の島チャネル</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">中の島湾の中にあるポイントで、チャネルとは水路を意味している。上に亀裂が入ったケーブやトンネルなどバラエティー豊かな地形がある。ゆっくりと生物探しもできる。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-honDrop">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-hondrop.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">本ドロップ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">名前の通り、本気のドロップ！ロウニンアジが高確率で見れるが、どこから出てくるか分からないので周りを見渡して見て。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-antonio">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-antonio.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">アントニオガウディ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">宮古島三大ダイブポイントの内の1つ。最大水深は35mとかなり深いので、DECOに注意！沢山穴が空いており、ハロウィンのパンプキンの顔に見える所がある。自然に出来た造形美を楽しめる。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-miniToriike">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-minitoriieke.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">ミニ通り池</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">初級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">有名な通り池のミニバージョン。初心者の方も行けるポイント。太陽が出ていると、光が降り注ぎ浮上できる。ブルーの出口が、まるで神殿の中のように感じる。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-toriike">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-toriieke.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">通り池</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級～</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">宮古島のポイント中で一番知名度が高いポイント。扇型のアーチの入口をくぐると見えてくるのは、サーモクラインとケモクライン。浮上スピードを守りながら、浮上しみんなで記念撮影必須！浮上した時にギャラリーにいたら挨拶しないとね。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-maou">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-maounokyuden.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">魔王の宮殿</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">宮古島3大ダイブポイントの内の1つ。宮殿のようにエントランス・メインの部屋・寝室があり。メインの部屋にはマントを広げた魔王様が待ち受けている。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-panata">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-panata.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">パナタ</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級～</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">パナタとは宮古島の方言で離れを意味する。<br class="pc">大きな瀬の周りはギンガメアジの群れやドでかいカメが見られる。</p>
          </div>
        </li>
        <li class="mapPointList__item" id="shimoji-triple3">
          <div class="mapPointList__imgBox">
            <div class="mapPointList__imgFrame"><img src="/assets/img/divingmap/img_shimoji-triplethree.jpg" alt=""></div>
            <div class="mapPointList__map"><img src="/assets/img/divingmap/img_photo-map-shimoji.svg" alt=""></div>
          </div>
          <div class="mapPointList__contBox">
            <h3 class="mapPointList__ttl">３３３(トリプルスリー)</h3>
            <dl class="mapPointInfoList">
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">レベル</dt>
                <dd class="mapPointInfoList__txt">中級～</dd>
              </div>
              <div class="mapPointInfoList__item">
                <dt class="mapPointInfoList__ttl">見所</dt>
                <dd class="mapPointInfoList__txt">地形＆生物</dd>
              </div>
            </dl>
            <p class="mapPointList__txt">下地島の一番北にあるポイント。出っ張った根の下に３つの穴が空いている。流れると、瀬の上にいるアカネハナゴイが生き生きと泳ぎ出す。意外と知られていないポイントだからこそ、行けたらラッキー♬</p>
          </div>
        </li>
      </ul>

    </div>
  </div>
</section>
<!-- /mapPoint -->


<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/footer.php"); ?>