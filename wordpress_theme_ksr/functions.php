<?php
function ksr_theme_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(array('primary'=>'Primary Menu'));
}
add_action('after_setup_theme','ksr_theme_setup');

/**
 * Enqueue theme stylesheet
 */
function ksr_enqueue_assets(){
  $theme = wp_get_theme();
  wp_enqueue_style('ksr-style', get_stylesheet_uri(), array(), $theme->get('Version'));
}
add_action('wp_enqueue_scripts','ksr_enqueue_assets');
