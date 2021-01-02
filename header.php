<!DOCTYPE html>
<html lang="ja" prefix="og: サイトURL#">
<head></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>タイトル</title>
<meta name="description" content="">
<!-- ここからOGP-->
<meta propaty="og:url" content=" ページの URL">
<meta propaty="og:type" content=" ページの 種類">
<!-- website /blog 下層→article-->
<meta propaty="og:title" content=" ページの タイトル">
<meta propaty="og:description" content=" ページの デスクリプション">
<meta propaty="og:site_name" content=" サイト名">
<meta propaty="og:image" content=" サムネイル画像の URL">
<!-- OGPここまで-->

<!-- CSS/JS読み込み -->
<?php wp_head();	?>

<body>
  <!-- ここからヘッダー-->
  <header class="header">
    <!-- ナビゲーションここから-->
    <div class="header__inner">
      <h1 class="header__ttl"></h1>
      <nav class="nav">
        <ul class="nav__lists">
          <li class="nav__list -top"><a href="/">トップ</a></li>
          <li class="nav__list -news"><a href="/news-archive">ニュース</a></li>
          <li class="nav__list -story"><a href="/story">ストーリー</a></li>
          <li class="nav__list -comments"><a href="/comments">著名人コメント</a></li>
          <li class="nav__list -cast"><a href="/cast">キャスト</a></li>
          <li class="nav__list -inquiry"><a href="/inquiry">問い合わせ</a></li>
        </ul>
      </nav>
      <!-- レスポンシブmenuボタン-->
      <div class="menu-btn"><span class="menu-btn__parts -top"></span><span class="menu-btn__parts -middle"></span><span class="menu-btn__parts -bottom"></span>
      </div>
      <!-- レスポンシブmenu-->
      <nav class="menu">
        <ul class="menu__lists">
          <li class="menu__list"><a class="menu__link -top" href="/">トップ</a></li>
          <li class="menu__list"><a class="menu__link -news" href="/news-archive">ニュース</a></li>
          <li class="menu__list"><a class="menu__link -story" href="/story">ストーリー</a></li>
          <li class="menu__list"><a class="menu__link -comments" href="/comments">著名人コメント</a></li>
          <li class="menu__list"><a class="menu__link -cast" href="/cast">キャスト</a></li>
          <li class="menu__list"><a class="menu__link -inquiry" href="/inquiry">問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <!-- ここまでナビゲーション-->
    <!-- ファーストビューここから-->
    <div class="fv">
      <div class="fv__inner container">
        <!-- タイトル-->
        <h1 class="fv__ttl"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/text1.png" alt=""></h1>
        <!-- サブタイトル-->
        <div class="fv__sub">
          <div class="fv__date"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/text2.png" alt=""></div>
          <!-- リードここから-->
          <div class="fv__lead">
            <p>小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<strong>完全版マハーバーラタ</strong>の公演が決定！！ アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
          </div>
          <!-- リードここまで-->
        </div>
        <!-- ボタン-->
        <div class="fv__btn"><a class="el_btn el_btn__large" href="#">チケット予約へ</a></div>
      </div>
    </div>
    <!-- ファーストビューここまで-->
  </header>
  <!-- ここまでヘッダー-->