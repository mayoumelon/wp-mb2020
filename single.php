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
    <div class="container hp_smTopSpace">

      <?php 
        // 記事がある場合に表示
        if ( have_posts() ) :
          // 記事数分ループ
          while ( have_posts() ):
          the_post();

          // コンテンツ
          get_template_part( 'template-parts/content', get_post_type() );

          endwhile;

          // ナビゲーション
          the_post_navigation( array(
          'prev_text'           => '<i class="fas fa-chevron-circle-left"></i><div class="navigation_body"><time class="navigation_date" datetime="2019-09-28">2019.09.28</time>%title</div>',
          'next_text'           => '<div class="navigation_body"><time class="navigation_date" datetime="2019-09-28">2019.09.28</time>%title</div><i class="fas fa-chevron-circle-right"></i>',
        ) ); 
        endif;
      ?>
    </div>
    
    <?php 
      $news_ttl = 'latest news';
      set_query_var( 'custom_news_ttl', $news_ttl ); //custom_varというグローバル変数に登録 
      get_template_part('template-parts/news-top'); // ニュース 
    ?>

    <!-- スケジュール -->
    <?php get_template_part('template-parts/schedule'); ?>
  </main>
  <!-- メインここまで  -->
<!--フッタ -->
<?php get_footer(); ?>