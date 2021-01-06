<!--ヘッダ -->
<?php get_header(); ?>

  <!-- メインここから-->
  <main>
    <!-- breadcrumb -->
    <div class="bl_breadcrumb  hp_smSpace container">
      <?php if( function_exists('bcn_display') ) {
        bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      } ?>
    </div><!-- /breadcrumb -->

    <!-- タイトル-->
    <h2 class="el_lv2Heading"><?php the_archive_title(); //一覧ページ名を表示 ?></h2>
    <!-- コンテンツここから-->
    <div class="container wow fadeIn">

    <?php 
      // 記事がある場合に表示
      if ( have_posts() ) :
    ?>
      <!-- ニュースここから-->
      <div class="bl_cardUnit bl_cardUnit__col3">

      <?php
        // 記事数分ループ
        while ( have_posts() ):
          the_post();
      ?>

        <div class="bl_card">
          <a class="bl_card_link" href="">
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
          </a>
        </div>

      <?php endwhile; ?>

      </div>
    <?php endif; ?>
      <!-- ニュースここまで-->

      <!-- ページネーションここから-->
      <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
      <div class="bl_pager">
      <?php
        echo
        paginate_links(
        array(
        'end_size' => 1,
        'mid_size' => 1,
        'prev_next' => true,
        'prev_text' => '<i class="fas fa-angle-left"></i>',
        'next_text' => '<i class="fas fa-angle-right"></i>',
        )
        );
      ?>
      </div>
      <?php endif; ?>
      <!-- ページネーションここまで-->
    </div>
    <!-- コンテンツここまで-->

    <!-- スケジュール -->
    <?php get_template_part('template-parts/schedule'); ?>
  </main>
  <!-- メインここまで  -->

<!--フッタ -->
<?php get_footer(); ?>