<article class="bl_newsPost hp_smSpace">
  <figure class="bl_newsPost_imgWrapper">
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
  <div class="bl_newsPost_heading">
    <time class="bl_newsPost_time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
    <h1 class="bl_newsPost_ttl"><?php the_title(); //タイトルを表示 ?></h1>
  </div>
  <div class="bl_newsPost_body">
  <?php the_content(); //本文の表示 ?>
  </div>
</article>