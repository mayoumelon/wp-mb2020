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

    <!-- キャストここから-->
    <section class="wow fadeIn">

      <!-- タイトル-->
      <h2 class="el_lv2Heading">casts</h2>

      <!-- キャストメインここから-->
      <div class="bl_castMainUnit hp_bgGradWhite hp_smPadTopBtm">
        <div class="container">
          <ul class="bl_castMainUnit">
          <!-- キャストトップ３ -->
          <?php
            $i = 0;
            $cf_group = SCF::get('casts');
            foreach ($cf_group as $field_name => $field_value ) :
              if ($i >= 3) break;
          ?>
          <li class="bl_castMain">
            <div class="bl_castMain_imgWrapper"><?php echo wp_get_attachment_image( $field_value['cast-image'], 'large' ); ?></div>
            <div class="bl_castMain_name">
              <p><?php echo $field_value['cast-country']; ?><br><strong><?php echo $field_value['cast-name']; ?></strong></p><small class="bl_castMain_op"><?php echo $field_value['cast-title']; ?></small>
            </div>
            <div class="bl_castMain_txt">
              <p><?php echo $field_value['cast-text']; ?></p>
            </div>
          </li>
          <?php 
            $i++;
            endforeach; 
          ?>
          </ul><!-- /.bl_castMainUnit -->
        </div><!-- /.container -->
      </div>
      <!-- キャストメインここまで-->
      <!-- キャストその他ここから-->
      <div class="bl_castUnit">

        <?php
          $i = 0;
          foreach ($cf_group as $field_name => $field_value ) :
            if ($i >= 3) :
          // 画像
          $cf_sample = wp_get_attachment_image_src($field_value['cast-image'],'full');
          $imgUrl = esc_url($cf_sample[0]);
        ?>
        <div class="bl_cast">
          <div class="bl_cast_imgWrapper"><img src="<?php echo $imgUrl; ?>" alt=""></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos"><?php echo $field_value['cast-country']; ?></p>
            <p class="bl_cast_nm"><?php echo $field_value['cast-name']; ?></p>
            <p class="bl_cast_op"><?php echo $field_value['cast-title']; ?></p>
            <p class="bl_cast_msg"><?php echo $field_value['cast-text']; ?></p>
          </div>
        </div>
        <?php 
          endif;
          $i++;
          endforeach; 
        ?>
      </div>
      <div class="bl_castUnit">
        <?php
          $i = 0;
          foreach ($cf_group as $field_name => $field_value ) :
            // error_log('カウント２:'. $i);
            if ($i >= 3) :
          // 画像
          $cf_sample = wp_get_attachment_image_src($field_value['cast-image'],'full');
          $imgUrl = esc_url($cf_sample[0]);
        ?>
        <div class="bl_cast">
          <!-- <div class="bl_cast_imgWrapper"><?php //echo wp_get_attachment_image( $field_value['cast-image'], 'large' ); ?></div> -->
          <div class="bl_cast_imgWrapper"><img src="<?php echo $imgUrl; ?>" alt=""></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos"><?php echo $field_value['cast-country']; ?></p>
            <p class="bl_cast_nm"><?php echo $field_value['cast-name']; ?></p>
            <p class="bl_cast_op"><?php echo $field_value['cast-title']; ?></p>
            <p class="bl_cast_msg"><?php echo $field_value['cast-text']; ?></p>
          </div>
        </div>
        <?php 
          endif;
          $i++;
          endforeach; 
        ?>
      </div>
      <!-- キャストその他ここまで-->
    </section>

    <!-- ミュージシャンここから-->
    <section class="container">
      <div class="hp_bgWhite hp_smPadTopBtm">
        <!-- タイトル-->
        <h2 class="el_lv2Heading">musician</h2>
  
        <div class="bl_castUnit">
          <?php
            $i = 0;
            $cf_group = SCF::get('musician');
            foreach ($cf_group as $field_name => $field_value ) :
              // 画像
              $cf_sample = wp_get_attachment_image_src($field_value['musician-image'],'large');
              $imgUrl = esc_url($cf_sample[0]);
          ?>
  
          <div class="bl_cast">
            <!-- <div class="bl_cast_imgWrapper"><?php //echo wp_get_attachment_image( $field_value['musician-image'], 'full' ); ?></div> -->
            <div class="bl_cast_imgWrapper"><img src="<?php echo $imgUrl; ?>" alt=""></div>
            <div class="bl_cast_body">
              <p class="bl_cast_pos"><?php echo $field_value['musician-country']; ?></p>
              <p class="bl_cast_nm"><?php echo $field_value['musician-name']; ?></p>
              <p class="bl_cast_op"><?php echo $field_value['musician-title']; ?></p>
              <p class="bl_cast_msg"><?php echo $field_value['musician-text']; ?></p>
            </div>
          </div>
  
          <?php endforeach; ?>
        </div>
      </div><!-- /.hp_bgWhite -->
    </section>
    <!-- ミュージシャンここまで-->

    <!-- スタッフここから-->
    <section class="container hp_smPadTopBtm">
      <!-- タイトル-->
      <h2 class="el_lv2Heading">staff</h2>

      <div class="bl_castUnit">
        <?php
          $i = 0;
          $cf_group = SCF::get('staff');
          foreach ($cf_group as $field_name => $field_value ) :
        ?>

        <div class="bl_cast">
          <div class="bl_cast_imgWrapper"><?php echo wp_get_attachment_image( $field_value['staff-image'], 'full' ); ?></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos"><?php echo $field_value['staff-country']; ?></p>
            <p class="bl_cast_nm"><?php echo $field_value['staff-name']; ?></p>
            <p class="bl_cast_op"><?php echo $field_value['staff-title']; ?></p>
            <p class="bl_cast_msg"><?php echo $field_value['staff-text']; ?></p>
          </div>
        </div>

        <?php endforeach; ?>
      </div>
    </section>
    <!-- スタッフここまで-->

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