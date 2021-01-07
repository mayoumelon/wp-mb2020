<!--ヘッダ -->
<?php get_header(); ?>

  <!-- メインここから-->
  <main>
    <?php if( function_exists('bcn_display') ) : ?>
      <!-- breadcrumb -->
      <div class="bl_breadcrumb  hp_smSpace container">
        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
      </div><!-- /breadcrumb -->
    <?php endif; ?>

    <!-- タイトル-->
    <h2 class="el_lv2Heading">news</h2>
    <!-- コンテンツここから-->
    <div class="container">

    <?php 
      // 記事がある場合に表示
      if ( have_posts() ) :
        // 記事数分ループ
        while ( have_posts() ):
        the_post();
    ?>

      <div class="bl_longCard hp_smSpace">
        <figure class="bl_longCard_imgWrapper">
          <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } else {
            // なければnoimage画像をデフォルトで表示
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/toppage/pic2.png" alt="">';
            }
          ?>
        </figure>
        <div class="bl_longCard_heading">
          <time class="bl_longCard_time" datetime="2019-09-30">2019.09.30</time>
          <h3 class="bl_longCard_ttl">完全版マハーバーラタ 2020年7月・東京公演！！</h3>
        </div>
        <div class="bl_longCard_body">
          <h4 class="bl_longCard_subttl">世界最長の叙事詩をピーター・ブルック以来の全編舞台化<br>2020年 7月4日〜7日 なかのZERO　大ホールにて！ <br><br></h4>
          <p class="bl_longCard_txt"><strong>ストーリー</strong><br><br>マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。 <br><br>世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。 <br><br>インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。<br>日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。<br><br><strong>なぜ今「マハーバーラタ」なのか？</strong><br><br>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br><br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br><br>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。「多様性の共生」というアジア的思想アジアでは、多様な歴史、文化、気候や地形がそれぞれの社会に影響を及ぼし、多様な言語や宗教、伝統が共存する。<br><br>また、芸術面に関して言えば、アジアにおける伝統舞台芸術の多くは演劇・舞踊・音楽などのジャンルを分けることなく融合的に用いる。この多様性がアジアの特徴であり、「共生」がアジア的思想の鍵と言える。 <br>人種や宗教、歴史などの多様性を持つアジア的思想や哲学の源流である古典叙事詩「マハーバーラタ」の全編舞台化を通して、多様化する現代社会に生きる観客へ向けて、今後の世界に求められる「共生」社会のあり方を提示する。</p>
        </div>
      </div>
      <nav class="bl_pageNavi">
        <ul class="bl_pageNavi_inner">
          <li><a class="bl_pageNavi_link" href=""><i class="fas fa-chevron-circle-left"></i>
              <div class="bl_pageNavi_body">
                <time class="bl_pageNavi_date" datetime="2019-09-28">2019.09.28</time>
                <p class="bl_pageNavi_ttl">前のニュース投稿のタイトル前のニュース投稿のタイトル前のニュース投稿のタイトル</p>
              </div>
            </a></li>
          <li><a class="bl_pageNavi_link" href="">
              <div class="bl_pageNavi_body">
                <time class="bl_pageNavi_date" datetime="2019-10-01">2019.10.01</time>
                <p class="bl_pageNavi_ttl">次のニュース投稿のタイトル次のニュース投稿のタイトル</p>
              </div><i class="fas fa-chevron-circle-right"></i>
            </a></li>
        </ul>
      </nav>

      <?php
        endwhile;
        endif;
      ?>
    </div>

    <!-- スケジュール -->
    <?php get_template_part('template-parts/schedule'); ?>
  </main>
  <!-- メインここまで  -->
<!--フッタ -->
<?php get_footer(); ?>