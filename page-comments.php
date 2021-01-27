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
      
      <!-- コメントトップ -->
      <?php get_template_part('template-parts/comments-top'); ?>

      <!-- メッセージメインここまで-->
      <!-- コメント一覧ここから-->
      <div class="bl_commentUnit hp_smTopSpace wow fadeIn">
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