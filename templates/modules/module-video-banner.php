<section class="video-banner">
    <?php
    $source = get_field('video_header');
    $image = get_field('header_sub_title');
    $poster = get_field('poster');
    ?>
    <video preload="metadata" muted="true" autoplay="false" loop class="video">
      <source src="<?php echo $source; ?>" type="video/mp4">
    </video>
    <div class="sub-header">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
  </section> 



