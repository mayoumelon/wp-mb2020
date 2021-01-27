    <!-- ここからスケジュール-->
    <section class="schedule">
      <div class="bl_schedule container">
        <!-- スケジュール一覧ここから-->
        <div class="bl_schedule_box">
          <h2 class="el_lv2Heading wow fadeIn">schedule</h2>
          <ul class="bl_schedule_items wow fadeIn">
            <?php 
              $get_page_id = get_page_by_path('home');
              $get_page_id = $get_page_id->ID;
              $cf_group = SCF::get('schedule', $get_page_id);
                  foreach ($cf_group as $field_name => $field_value ) :
            ?>
            <li class="bl_schedule_item">
              <span class="bl_schedule_detail"><?php echo $field_value['schedule_event']; ?></span>
              <span class="bl_schedule_detail">
                  <a rel="noopener noreferer" target="_blank" href="<?php echo esc_url( $field_value['schedule_link'] ); ?>">
                    <?php echo $field_value['schedule_linktext']; ?>
                  </a>  
              </span>
              <!-- <div class="bl_schedule_detail">
                <p>
                  <time datetime="2020-07-04">2020.07.04</time>
                </p>
                <P>
                  <time datetime="17:00">17:00</time>開演
                </P>
              </div>
              <div class="bl_schedule_detail">
                <p>中野ZERO大ホール</p>
              </div> -->
              <!-- <div class="bl_schedule_detail">
                <p><a rel="noopener noreferer" target="_blank" href="#">チケット予約受付中</a></p>
              </div>
            </li> -->
                  <?php endforeach; ?>
          </ul>
        </div>
        <!-- スケジュール一覧ここまで-->
        <!-- スケジュールボタンここから-->
        <div class="bl_schedule__btn wow fadeIn">
           <?php 
            $get_inquiry_id = get_page_by_path('inquiry');
            $get_inquiry_id = $get_inquiry_id->ID;
            $get_home_id = get_page_by_path('home');
            $get_home_id = $get_home_id->ID;
            // error_log( SCF::get( 'reserve', $get_home_id ) );
           ?>
          <div class="bl_schedule__btn_inner"><a href="<?php echo esc_url( get_permalink( $get_inquiry_id ) );?>" class="el_btn el_btn__large el_btn__brown">お問い合わせはこちら</a></div>
          <div class="bl_schedule__btn_inner"><a href="<?php echo esc_url( SCF::get( 'reserve', $get_home_id) ); ?>" class="el_btn el_btn__large">チケット予約サイトへ</a></div>
        </div>
        <!-- スケジュールボタンここまで-->
      </div>
    </section>
    <!-- ここまでスケジュール-->