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

      <!-- Contact -->
      <div class="bl_inquiry hp_smTopSpace">
        <p class="bl_inquiry_msg"> <?php the_content(); ?></p>
      </div>

      <!-- お問い合わせフォームここから-->
      <div class="bl_inquiry hp_smTopSpace">
        <p class="bl_inquiry_msg">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>公演に関するお問い合わせ、公演・ワークショップのご依頼など、 <br class="hp_pc">お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
        <div class="el_form hp_smTopSpace">
          <form action="" method="post">
            <dl class="el_form_controls">
              <div class="el_form_control">
                <dt>
                  <label for="name">お名前</label>
                </dt>
                <dd>
                  <input class="el_form_input" id="name" type="text" name="text" placeholder="">
                </dd>
              </div>
              <div class="el_form_control">
                <dt>
                  <label for="tel">電話番号</label>
                </dt>
                <dd>
                  <input class="el_form_input" id="tel" type="tel" name="tel" placeholder="">
                </dd>
              </div>
              <div class="el_form_control">
                <dt>
                  <label for="email">メールアドレス</label>
                </dt>
                <dd>
                  <input class="el_form_input" id="email" type="email" name="email" placeholder="">
                </dd>
              </div>
              <div class="el_form_control">
                <dt>
                  <label for="inquiry_msg">内容</label>
                </dt>
                <dd>
                  <textarea class="el_form_textarea" id="inquiry_msg" ame="text" placeholder=""></textarea>
                </dd>
              </div>
            </dl>
          </form>
        </div>
      </div>
      <!-- お問い合わせフォームここまで-->

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