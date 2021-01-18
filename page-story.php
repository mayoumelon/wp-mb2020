<!--ヘッダ -->
<?php get_header(); ?>

  <!-- メインここから-->
  <main>
  </main>
      <?php
        $cf_group = SCF::get('story');
        foreach ($cf_group as $field_name => $field_value ) :
          // 画像
          $cf_sample = wp_get_attachment_image_src($field_value['story-image'],'large');
          $imgUrl = esc_url($cf_sample[0]);
      ?>
      <!-- ストーリーサブ-->
      <!--  style="background-image:url(); -->
      <div class="story-sub hp_clrWhite" style="background: #000 url('<?php echo $imgUrl; ?>') no-repeat center center / cover;">
      <div class="story-sub_inner container wow fadeIn">
        <div class="story-sub_msg">
          <div class="story-sub_ttl"><?php echo $field_value['story-title']; ?></div>
          <p class="story-sub_txt"><?php echo $field_value['story-text']; ?></p>
        </div>
      </div>
    </div>
    <!-- ストーリーサブここまで-->
    <?php endforeach; ?>
  <!-- メインここまで  -->

<!--フッタ -->
<?php get_footer(); ?>