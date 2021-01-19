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
    <h2 class="el_lv2Heading"><?php echo $post->post_name; //一覧ページ名を表示 ?></h2>

    <!-- コンテンツここから-->
    <div class="container">
      <!-- キャストメインここから-->
      <div class="bl_castMainUnit hp_smTopSpace">
      <?php
        $cf_group = SCF::get('cast');
        foreach ($cf_group as $field_name => $field_value ) :
        ?>
        <div class="bl_castMain">
          <div class="bl_castMain_imgWrapper"><?php echo wp_get_attachment_image( $field_value['cast-image'], 'large' ); ?></div>
          <div class="bl_castMain_name">
            <p><?php echo $field_value['cast-country']; ?><br><strong><?php echo $field_value['cast-name']; ?></strong></p><small class="bl_castMain_op"><?php echo $field_value['cast-title']; ?></small>
          </div>
          <div class="bl_castMain_txt">
            <p> <?php echo $field_value['cast-text']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- キャストメインここまで-->


      <!-- キャスト（写真あり）一覧ここから-->
      <div class="bl_castUnit">
        <div class="bl_cast">
          <div class="bl_cast_imgWrapper"><img src="img/toppage/pic8.jpg" alt=""></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos">出演</p>
            <p class="bl_cast_nm">白井さち子</p>
            <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
            <p class="bl_cast_msg">7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 <br>日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。</p>
          </div>
        </div>
        <div class="bl_cast">
          <div class="bl_cast_imgWrapper"><img src="img/toppage/pic8.jpg" alt=""></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos">出演</p>
            <p class="bl_cast_nm">白井さち子</p>
            <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
            <p class="bl_cast_msg">7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 <br>日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。</p>
          </div>
        </div>
        <div class="bl_cast">
          <div class="bl_cast_imgWrapper"><img src="img/toppage/pic8.jpg" alt=""></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos">出演</p>
            <p class="bl_cast_nm">白井さち子</p>
            <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
            <p class="bl_cast_msg">7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 <br>日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。</p>
          </div>
        </div>
        <div class="bl_cast">
          <div class="bl_cast_imgWrapper"><img src="img/toppage/pic8.jpg" alt=""></div>
          <div class="bl_cast_body">
            <p class="bl_cast_pos">出演</p>
            <p class="bl_cast_nm">白井さち子</p>
            <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
            <p class="bl_cast_msg">7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 <br>日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。</p>
          </div>
        </div>
      </div>
      <!-- キャスト（写真あり）一覧ここまで-->
      <!-- キャスト（写真なし）一覧ここから-->
      <div class="bl_castUnit hp_bgWhite">
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">作・演出・振付・構成</p>
          <p class="bl_cast_nm">小池博史</p>
          <p class="bl_cast_op">　</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">出演</p>
          <p class="bl_cast_nm">白井さち子</p>
          <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">出演</p>
          <p class="bl_cast_nm">出演 小谷野哲郎</p>
          <p class="bl_cast_op">(バリ舞踏)</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">作・演出・振付・構成</p>
          <p class="bl_cast_nm">小池博史</p>
          <p class="bl_cast_op">　</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">出演</p>
          <p class="bl_cast_nm">白井さち子</p>
          <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">出演</p>
          <p class="bl_cast_nm">出演 小谷野哲郎</p>
          <p class="bl_cast_op">(バリ舞踏)</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">作・演出・振付・構成</p>
          <p class="bl_cast_nm">小池博史</p>
          <p class="bl_cast_op">　</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">出演</p>
          <p class="bl_cast_nm">白井さち子</p>
          <p class="bl_cast_op">(バレエ、コンテンポラリーダンス)</p>
        </div>
        <div class="bl_castNoImg">
          <p class="bl_cast_pos">出演</p>
          <p class="bl_cast_nm">出演 小谷野哲郎</p>
          <p class="bl_cast_op">(バリ舞踏)</p>
        </div>
      </div>
      <!-- キャスト（写真なし）一覧ここまで-->
    </div>
    <!-- コンテンツここまで-->
    <!-- ここからスケジュール-->
    <section class="schedule">
      <div class="bl_schedule container">
        <!-- スケジュール一覧ここから-->
        <div class="bl_schedule_box">
          <h2 class="el_lv2Heading wow fadeIn">schedule</h2>
          <ul class="bl_schedule_items wow fadeIn">
            <li class="bl_schedule_item">
              <div class="bl_schedule_detail">
                <p>
                  <time datetime="2020-07-04">2020.07.04</time>
                </p>
                <P>
                  <time datetime="17:00">17:00</time>開演
                </P>
              </div>
              <div class="bl_schedule_detail">
                <p>中野ZERO大ホール</p>
              </div>
              <div class="bl_schedule_detail">
                <p><a rel="noopener noreferer" target="_blank" href="#">チケット予約受付中</a></p>
              </div>
            </li>
            <li class="bl_schedule_item">
              <div class="bl_schedule_detail">
                <p>
                  <time datetime="2020-07-05">2020.07.05</time>
                </p>
                <P>
                  <time datetime="17:00">17:00</time>開演
                </P>
              </div>
              <div class="bl_schedule_detail">
                <p>中野ZERO大ホール</p>
              </div>
              <div class="bl_schedule_detail">
                <p><a rel="noopener noreferer" target="_blank" href="#">チケット予約受付中</a></p>
              </div>
            </li>
            <li class="bl_schedule_item">
              <div class="bl_schedule_detail">
                <p>
                  <time datetime="2020-07-06">2020.07.06</time>
                </p>
                <P>
                  <time datetime="17:00">17:00</time>開演
                </P>
              </div>
              <div class="bl_schedule_detail">
                <p>中野ZERO大ホール</p>
              </div>
              <div class="bl_schedule_detail">
                <p><a rel="noopener noreferer" target="_blank" href="#">チケット予約受付中</a></p>
              </div>
            </li>
            <li class="bl_schedule_item">
              <div class="bl_schedule_detail">
                <p>
                  <time datetime="2020-07-07">2020.07.07</time>
                </p>
                <P>
                  <time datetime="17:00">17:00</time>開演
                </P>
              </div>
              <div class="bl_schedule_detail">
                <p>中野ZERO大ホール</p>
              </div>
              <div class="bl_schedule_detail">
                <p><a rel="noopener noreferer" target="_blank" href="#">チケット予約受付中</a></p>
              </div>
            </li>
          </ul>
        </div>
        <!-- スケジュール一覧ここまで-->
        <!-- スケジュールボタンここから-->
        <div class="bl_schedule__btn wow fadeIn">
          <div class="bl_schedule__btn_inner"><a class="el_btn el_btn__large el_btn__brown">お問い合わせはこちら</a></div>
          <div class="bl_schedule__btn_inner"><a class="el_btn el_btn__large">チケット予約サイトへ</a></div>
        </div>
        <!-- スケジュールボタンここまで-->
      </div>
    </section>
    <!-- ここまでスケジュール-->
  </main>
  <!-- メインここまで  -->

<!--フッタ -->
<?php get_footer(); ?>