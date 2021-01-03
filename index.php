<!--ヘッダ -->
<?php get_header(); ?>

  <main>
    <!-- イントロここから-->
    <section class="intro">
      <div class="intro__inner container">
        <!-- イントロボックスここから-->
        <div class="bl_intro_box wow fadeIn">
          <h2 class="el_lv2Heading">introduction</h2>
          <h3 class="el_lv3Heading">なぜ今「マハーバーラタ」なのか？</h3>
          <!-- イントロテキストここから-->
          <div class="intro__txt">
            <p>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？ それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。 平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
            <p>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。 神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。 非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
          </div>
          <!-- イントロテキストここまで-->
        </div>
        <!-- イントロボックスここまで-->
      </div>
    </section>
    <!-- イントロここまで-->
    <!-- ニュースここから-->
    <section class="news">
      <div class="news__inner container wow fadeIn">
        <div class="el_lv2Heading">news</div>
        <div class="news__btn"><a class="el_btn" href="#">ニュース一覧へ</a></div>

        <?php 
        // 記事がある場合に表示
        if ( have_posts() ) : ?>

         <?php 
          // 記事数分ループ
          while ( have_posts() ):
            the_post();
            // 何番目の記事かをカウントする
            $count = $wp_query->current_post + 1;
            // error_log('記事番号：' . $count);
         ?>

        <?php 
        //  ３記事目までを囲うブロック
        if ( $count === 1 ) : ?>
          <!-- ３つ並びブロック -->
          <div class="bl_cardUnit bl_cardUnit__col3">
         <?php endif; ?>

         <?php if ($count <= 3 ) : ?>
        <!-- 記事ここから -->
          <div class="bl_card"><a class="bl_card_link" href="">
            <figure class="bl_card_imgWrapper">
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
            <div class="bl_card_body">
              <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
              <p><?php the_title(); //タイトルを表示 ?></p>
            </div>
          </a></div>
        <!-- 記事ここまで -->
         <?php endif; ?>

         <?php 
        //  ４記事目以降の記事を囲むdivタグ
         if ( $count === 4 ) : ?>
         </div>
         <!-- ２つ並びブロック -->
          <div class="bl_cardUnit bl_cardUnit__col2">
         <?php endif; ?>

          <?php if ($count >= 4 ) : ?>
            <!-- 記事ここから -->
            <div class="bl_card"><a class="bl_card_link bl_card__row" href="">
              <figure class="bl_card_imgWrapper">
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
              <div class="bl_card_body">
                <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                <p><?php echo the_title(); //タイトルを表示 ?></p>
              </div>
            </a></div>
             <!-- 記事ここまで -->
          <?php endif; ?>

         <?php 
          endwhile;
         ?>
                
        <?php endif; ?>

      </div>
    </section>
    <!-- ニュースここまで-->
    <!-- ストーリーここから-->
    <section class="story">
      <div class="story__inner container wow fadeIn">
        <h2 class="el_lv2Heading">story</h2>
        <!-- ストーリーテキストここから-->
        <div class="story__txt">
          <p> マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。 世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。</p>
        </div>
        <!-- ストーリーテキストここまで-->
        <div class="story__btn"><a class="el_btn" href="#">もっと詳しく</a></div>
      </div>
    </section>
    <!-- ストーリーここまで-->
    <!-- コメントここから-->
    <section class="comments">
      <div class="comments__inner container wow fadeIn"></div>
      <!-- タイトル-->
      <h2 class="el_lv2Heading">comments</h2>
      <!-- コンテンツここから-->
      <div class="container">
        <!-- サブタイトル-->
        <p class="comments__lead">舞台関係者のみならず各界著名人からコメントが届いています！</p>
        <!-- メッセージメインここから-->
        <div class="comments__msg hp_pc">
          <p class="comments__msg-psn">京都佛立ミュージアム館長 <strong>長松清潤</strong></p>
          <p class="comments__msg-txt">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
          <div class="comments__btn"><a class="el_btn" href="#">もっと詳しく</a></div>
        </div>
        <div class="comments__box hp_sp">
          <figure class="comments_imgWrapper"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/pic6.jpg" alt=""></figure>
          <div class="comments__body">
            <p class="comments__msg-psn">京都佛立ミュージアム館長 <strong>長松清潤</strong></p>
            <p class="comments__msg-txt">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
            <div class="comments__btn"><a class="el_btn" href="#">もっと詳しく</a></div>
          </div>
        </div>
        <!-- メッセージメインここまで-->
      </div>
      <!-- コンテンツここまで-->
    </section>
    <!-- コメントここまで-->
    <!-- キャストここから-->
    <section class="cast">
      <div class="cast__inner container wow fadeIn">
        <!-- タイトル-->
        <h2 class="el_lv2Heading">cast</h2>
        <!-- コンテンツここから-->
        <!-- キャストメインここから-->
        <div class="bl_castMainUnit hp_smTopSpace">
          <div class="bl_castMain">
            <div class="bl_castMain_imgWrapper"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/pic7.jpg" alt=""></div>
            <div class="bl_castMain_name">
              <p>作・演出・振付・構成<br><strong>小池博史</strong></p><small class="bl_castMain_op">　</small>
            </div>
            <div class="bl_castMain_txt">
              <p> 茨城県日立市出身。一橋大学卒業。 演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。 1982年「パパ・タラフマラ」設立。 演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。 3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。 著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
            </div>
          </div>
          <div class="bl_castMain">
            <div class="bl_castMain_imgWrapper"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/pic8.jpg" alt=""></div>
            <div class="bl_castMain_name">
              <p>出演<br><strong>白井さち子</strong></p><small class="bl_castMain_op">(バレエ、コンテンポラリーダンス)</small>
            </div>
            <div class="bl_castMain_txt">
              <p> 7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。 89年よりパパ・タラフマラに参加。 以降国内外の公演に出演。 後身のパフォーマーのダンス指導にもあっている。 パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。 これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。</p>
            </div>
          </div>
          <div class="bl_castMain">
            <div class="bl_castMain_imgWrapper"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/pic9.jpg" alt=""></div>
            <div class="bl_castMain_name">
              <p>出演<br><strong>小谷野哲郎</strong></p><small class="bl_castMain_op">(バリ舞踏)</small>
            </div>
            <div class="bl_castMain_txt">
              <p> 東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。 1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。 学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。 2006年、Asian Cultural Councilの助成によりアメリカに滞在。 パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。</p>
            </div>
          </div>
        </div>
        <!-- キャストメインここまで-->
        <div class="cast__btn"><a class="el_btn el_btn__border" href="#">もっと見る</a></div>
      </div>
    </section>
    <!-- キャストここまで-->

    <!-- スケジュール -->
    <?php get_template_part('template-parts/schedule'); ?>
  </main>

<!--フッタ -->
<?php get_footer(); ?>