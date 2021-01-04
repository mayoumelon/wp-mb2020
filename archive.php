<!--ヘッダ -->
<?php get_header(); ?>

  <!-- メインここから-->
  <main>
    <!-- タイトル-->
    <h2 class="el_lv2Heading">news</h2>
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
      <nav class="bl_pager">
        <ul class="bl_pager_inner">
          <li><span class="bl_pager_link is_active">1</span></li>
          <li><a class="bl_pager_link" href="#">2</a></li>
          <li><a class="bl_pager_link" href="#"><i class="fas fa-angle-right"></i></a></li>
        </ul>
      </nav>
      <!-- ページネーションここまで-->
    </div>
    <!-- コンテンツここまで-->

    <!-- スケジュール -->
    <?php get_template_part('template-parts/schedule'); ?>
  </main>
  <!-- メインここまで  -->

<!--フッタ -->
<?php get_footer(); ?>