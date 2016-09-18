<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

//acf options page
if(function_exists('acf_add_options_page') ) {

  acf_add_options_page();
  acf_add_options_sub_page('Header');
  acf_add_options_sub_page('Footer');

  acf_add_options_page(array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' =>  'theme-options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => false,
    'icon_url' => false,
    'redirect' => false
    ));

    acf_add_options_sub_page(array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' =>  'theme-options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => false,
    'icon_url' => false
    ));

     acf_add_options_sub_page(array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' =>  'theme-options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => false,
    'icon_url' => false
    ));

      acf_add_options_sub_page(array(
    'page_title' => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug' =>  'theme-options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => false,
    'icon_url' => false
    ));


}



/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');
