<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


function pbd_desktop_video_header() { ?>
  
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

<?php
}
add_action( 'pbd_video_header', 'pbd_desktop_video_header' );


function pbd_mobile_header() { 
    $header_image = get_field('header_image');
    $header_logo  = get_field( 'header_logo' );

  ?>
  <section class="mobile-header">
    <div class="mobile-wrapper">
      <div class="pbd-background">
        <img class="pbd-mobile-logo" src="<?=  $header_image; ?>">
      </div>
    </div>
  </section>
  

<?php 
}

add_action( 'pbd_mobile_header', 'pbd_mobile_header' );
