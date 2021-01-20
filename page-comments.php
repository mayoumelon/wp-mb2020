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

    <?php
      if ( have_posts() ) :
      while ( have_posts() ) :
      the_post();
    ?>
    
    <!-- タイトル-->
    <h2 class="el_lv2Heading"><?php echo $post->post_name; //一覧ページ名を表示 ?></h2>
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
        <figure class="comments_imgWrapper"><img src="img/toppage/pic6.jpg" alt=""></figure>
        <div class="comments__body">
          <p class="comments__msg-psn">京都佛立ミュージアム館長 <strong>長松清潤</strong></p>
          <p class="comments__msg-txt">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
          <div class="comments__btn"><a class="el_btn" href="#">もっと詳しく</a></div>
        </div>
      </div>
      <!-- メッセージメインここまで-->
      <!-- コメント一覧ここから-->
      <div class="bl_commentUnit hp_smTopSpace">
        <?php
        $cf_group = SCF::get('comments');
        foreach ($cf_group as $field_name => $field_value ) :
        ?>
        <div class="bl_comment">
          <p class="bl_comment_nm"><?php echo $field_value['commenter_name']; ?></p>
          <p class="bl_comment_pos"><?php echo $field_value['commenter_post']; ?></p>
          <p class="bl_comment_msg"><?php echo nl2br( $field_value['commenter_comment'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- コメント一覧ここまで-->
    </div>
    <!-- コンテンツここまで-->
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