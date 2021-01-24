<!--ヘッダ -->
<?php get_header(); ?>

  <!-- メインここから-->
  <main>
    <?php
      if ( have_posts() ) :
      while ( have_posts() ) :
      the_post();
    ?>
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


    <?php 
      $news_ttl = 'news';
      set_query_var( 'custom_news_ttl', $news_ttl ); //custom_varというグローバル変数に登録 
      get_template_part('template-parts/news-top'); // ニュース 
    ?>

    <!-- ストーリーここから-->
    <section class="story">
      <div class="story__inner container wow fadeIn">
        <h2 class="el_lv2Heading">story</h2>
        <!-- ストーリーテキストここから-->
        <div class="story__txt">
          <p> マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。 世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。</p>
        </div>
        <!-- ストーリーテキストここまで-->
         <?php 
         $get_page_id = get_page_by_path('story');
         $get_page_id = $get_page_id->ID;
         ?>
        <div class="story__btn"><a class="el_btn" href="<?php echo esc_url( get_permalink( $get_page_id ) );?>">もっと詳しく</a></div>
      </div>
    </section>
    <!-- ストーリーここまで-->
    <!-- コメントここから-->
    <section class="comments">
      <div class="comments__inner container wow fadeIn">
        <!-- タイトル-->
        <h2 class="el_lv2Heading">comments</h2>
        <?php 
        $get_page_id = get_page_by_path('comments');
        $get_page_id = $get_page_id->ID;
        ?>
        <!-- コンテンツここから-->
        <div class="container">
          <!-- サブタイトル-->
          <p class="comments__lead">舞台関係者のみならず各界著名人からコメントが届いています！</p>
          <!-- メッセージメインここから-->
          <div class="comments__msg hp_pc">
            <p class="comments__msg-psn">京都佛立ミュージアム館長 <strong>長松清潤</strong></p>
            <p class="comments__msg-txt">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
            <div class="comments__btn"><a class="el_btn" href="<?php echo esc_url( get_permalink( $get_page_id ) );?>">もっと詳しく</a></div>
          </div>
          <div class="comments__box hp_sp">
            <figure class="comments_imgWrapper"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/pic6.jpg" alt=""></figure>
            <div class="comments__body">
              <p class="comments__msg-psn">京都佛立ミュージアム館長 <strong>長松清潤</strong></p>
              <p class="comments__msg-txt">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
              <div class="comments__btn"><a class="el_btn" href="<?php echo esc_url( get_permalink( $get_page_id ) );?>">もっと詳しく</a></div>
            </div>
          </div>
          <!-- メッセージメインここまで-->
        </div>
        <!-- コンテンツここまで-->
      </div>
    </section>
    <!-- コメントここまで-->
    <!-- キャストここから-->
    <section class="cast">
      <div class="cast__inner container wow fadeIn">
        <!-- タイトル-->
        <h2 class="el_lv2Heading">cast</h2>
        <!-- コンテンツここから-->
        <!-- キャストメインここから-->
        <div class="cast__wrapper hp_smPadTopBtm">
          <div class="bl_castMainUnit">
          <?php
            $i = 0;
            $get_page_id = get_page_by_path('cast');
            $get_page_id = $get_page_id->ID;
            $cf_group = SCF::get('casts', $get_page_id);
            foreach ($cf_group as $field_name => $field_value ) :
              if ($i >= 3) break;
          ?>
            <div class="bl_castMain">
              <div class="bl_castMain_imgWrapper"><?php echo wp_get_attachment_image( $field_value['cast-image'], 'large' ); ?></div>
              <div class="bl_castMain_name">
                <p><?php echo $field_value['cast-country']; ?><br><strong><?php echo $field_value['cast-name']; ?></strong></p><small class="bl_castMain_op"><?php echo $field_value['cast-title']; ?></small>
              </div>
              <div class="bl_castMain_txt">
                <p><?php echo $field_value['cast-text']; ?></p>
              </div>
            </div>
            <?php 
            $i++;
            endforeach; 
          ?>
          </div>
          <!-- キャストメインここまで-->
          <div class="cast__btn"><a class="el_btn el_btn__border" href="<?php echo esc_url( get_permalink( $get_page_id ) );?>">もっと見る</a></div>
        </div><!-- /.cast__wrapper -->
      </div>
    </section>
    <!-- キャストここまで-->

    <!-- スケジュール -->
    <?php get_template_part('template-parts/schedule'); ?>

    <?php
      endwhile;
      endif;
    ?>
  </main>
  <!-- メインここまで  -->

<!--フッタ -->
<?php get_footer(); ?>