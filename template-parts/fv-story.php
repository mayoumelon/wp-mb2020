<!-- ストーリートップ-->
<div class="story-top hp_clrWhite">
      <div class="story-top_inner container wow fadeIn">
        <div class="story-top_ttl">
          <h1 class="story-top_main"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/text1.png" alt=""></h1>
          <div class="story-top_sub"><img src="<?php echo get_template_directory_uri() ?>/img/toppage/text2.png" alt=""></div>
        </div>
        <div class="story-top_btn"><a class="el_btn" href="#">チケット予約サイトへ</a></div>

        <?php if( function_exists('bcn_display') ) : ?>
          <!-- breadcrumb -->
          <div class="bl_breadcrumb  hp_smSpace container">
            <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
          </div><!-- /breadcrumb -->
        <?php endif; ?>

        <h2 class="el_lv2Heading hp_lgSpace">story</h2>
        <div class="story-top_msg">
          <div class="story-top_ttl"><?php echo post_custom('story-top-title');?></div>
          <p class="story-top_txt"><?php echo post_custom('story-top-text');?></p>
        </div>
      </div>
    </div>
    <!-- ストーリートップここまで-->