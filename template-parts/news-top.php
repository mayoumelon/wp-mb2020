<?php 
      $cat = 'news';
      $cat_id = get_category_by_slug($cat)->cat_ID;
      $news_ttl = get_query_var('custom_news_ttl');
      $myposts = get_posts( array(
        'post_type' => 'post',
        'posts_per_page' => '5',
        'category_name' => $cat,
      ));
      
    // 記事がある場合に表示
    if( $myposts ):
    ?>
    <!-- ニュースここから-->
    <section class="news">
      <div class="news__inner container wow fadeIn">
        <div class="el_lv2Heading"> <?php echo $news_ttl; ?></div>
        <div class="news__btn"><a class="el_btn" href="<?php echo esc_url( get_category_link($cat_id) ); ?>"">ニュース一覧へ</a></div>
        <div class="bl_cardUnit_top">
        <?php
          // 記事数分ループ
          foreach($myposts as $post):
            setup_postdata($post);
        ?>
        <!-- 記事ここから -->
          <div class="bl_card"><a class="bl_card_link" href="<?php the_permalink(); ?>">
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
          </a></div>
        <!-- 記事ここまで -->
         <?php 
          endforeach;
          endif; 
        ?>

      </div>
    </section>
    <!-- ニュースここまで-->