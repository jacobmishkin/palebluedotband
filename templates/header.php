<header class="navigation banner">
  <div class="navigation-wrapper">
    <a href="<?php echo site_url(); ?>" class="logo">
      <img src="http://palebluedotband.dev/wp-content/uploads/2016/09/header-logo.png" alt="Pale Blue Dot Band">
    </a>
    <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
    <nav class="nav-primary" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation-menu show', 'menu_id' => 'js-navigation-menu']);
      endif;
      ?>
    </nav>
  </div>
</header>