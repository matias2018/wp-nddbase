<?php

function ndd_files() {
  wp_enqueue_style( 'montserrat-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap' );
  wp_enqueue_style( 'titillium-fonts', '//fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,700;1,200;1,300;1,400&display=swap' );
  wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
  wp_enqueue_style( 'ndd_utilities_styles', get_theme_file_uri('/css/utilities.css') );
  wp_enqueue_style( 'ndd_main_styles', get_theme_file_uri('/css/style.css') );
  wp_enqueue_style( 'ndd_nav_styles', get_theme_file_uri('/css/nav.css') );
  wp_enqueue_style( 'ndd_obra_styles', get_theme_file_uri('/css/obras.css') );
  wp_enqueue_style( 'font-awesome', get_theme_file_uri('//use.fontawesome.com/releases/v5.0.1/css/all.css') );
  wp_enqueue_script( 'ndd_navbar_scroll', get_theme_file_uri('/js/navbarScroll.js'), NULL, '1.0', true );
  wp_enqueue_script( 'ndd_navbar', get_theme_file_uri('/js/nav.js'), NULL, '1.0', true );
  wp_enqueue_script( 'ndd_accordion', get_theme_file_uri('/js/accordion.js'), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'ndd_files');

/* Dynamic feeding to ACF */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

} 
/* endof Dynamic feeding to ACF */

function ndd_features() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'ndd_features');



function load_scripts() {
  global $post;

  if( is_page('home') || is_single('home') )
  {
    wp_enqueue_script( 'ndd_counter', get_theme_file_uri('/js/counter.js'), NULL, '1.0', true );
  } 
}

add_action('wp_enqueue_scripts', 'load_scripts');



flush_rewrite_rules( false );