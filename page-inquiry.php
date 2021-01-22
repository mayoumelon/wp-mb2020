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
    <h2 class="el_lv2Heading"><?php echo $post->post_name; //スラッグを表示 ?></h2>

    <!-- コンテンツここから-->
    <div class="container">

      <!-- Contact -->
      <div class="bl_inquiry hp_smTopSpace">
        <?php the_content(); ?>
      </div>
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