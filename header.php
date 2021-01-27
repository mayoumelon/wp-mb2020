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

         <?php 
          wp_nav_menu(
            array(
              'depth' => 1,
              'theme_location' => 'global', //グローバルメニューをここに表示すると指定
              'container' => 'false',
              'menu_class' => 'nav__lists',
            )
          );
         
         ?>
        <!-- <ul class="nav__lists">
          <li class="nav__list -top"><a href="/">トップ</a></li>
          <li class="nav__list -news"><a href="/news-archive">ニュース</a></li>
          <li class="nav__list -story"><a href="/story">ストーリー</a></li>
          <li class="nav__list -comments"><a href="/comments">著名人コメント</a></li>
          <li class="nav__list -cast"><a href="/cast">キャスト</a></li>
          <li class="nav__list -inquiry"><a href="/inquiry">問い合わせ</a></li>
        </ul> -->

      </nav>
      <!-- レスポンシブmenuボタン-->
      <div class="menu-btn"><span class="menu-btn__parts -top"></span><span class="menu-btn__parts -middle"></span><span class="menu-btn__parts -bottom"></span>
      </div>
      <!-- レスポンシブmenu-->
      <nav class="menu">
        <?php 
          wp_nav_menu(
            array(
              'depth' => 1,
              'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
              'container' => 'false',
              'menu_class' => 'menu__lists',
            )
          );
         ?>
        <!-- <ul class="menu__lists">
          <li class="menu__list"><a class="menu__link -top" href="/">トップ</a></li>
          <li class="menu__list"><a class="menu__link -news" href="/news-archive">ニュース</a></li>
          <li class="menu__list"><a class="menu__link -story" href="/story">ストーリー</a></li>
          <li class="menu__list"><a class="menu__link -comments" href="/comments">著名人コメント</a></li>
          <li class="menu__list"><a class="menu__link -cast" href="/cast">キャスト</a></li>
          <li class="menu__list"><a class="menu__link -inquiry" href="/inquiry">問い合わせ</a></li>
        </ul> -->
      </nav>
    </div>
    <!-- ここまでナビゲーション-->
    <?php 
    if ( is_front_page() || is_home()) {
      // トップのファーストビュー
      get_template_part('template-parts/fv');
    } elseif ( is_page('story')) {
      // ストーリー用
      get_template_part('template-parts/fv-story');
    } else {
      // その他共通ファーストビュー
      get_template_part('template-parts/fv-sm');
    }
    ?>
  </header>
  <!-- ここまでヘッダー-->