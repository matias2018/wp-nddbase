<?php

function ndd_post_types() {
  // OBRA Post Type
  register_post_type('obra', array(
    'supports'=>array(
      'title', 
      'editor', 
      'excerpt', 
      'image', 
      'thumbnail'
    ),
    'has_archive'=>true,
    'rewrite'=>array('slug' => 'obras'),
    'public' => true,
    'labels' => array(
      'name' => 'Obras',
      'add_new_item' => 'Add New Obra',
      'edit_item' => 'Edit Obra',
      'all_items' => 'All Obras',
      'singular_name' => 'Obra'
    ),
    'menu_icon' => 'dashicons-hammer',
    'show_in_rest' => true,
    'rest_base' => '_obras_',
    'show_ui' => true
  ));

  // FAQ Post Type
  register_post_type('faq', array(
    'supports'=>array(
      'title', 
      'excerpt', 
      'image', 
      'thumbnail'
    ),
    'has_archive'=>true,
    'rewrite'=>array('slug' => 'faq'),
    'public' => true,
    'labels' => array(
      'name' => 'FAQ',
      'add_new_item' => 'Add New FAQ',
      'edit_item' => 'Edit FAQ',
      'all_items' => 'All FAQ\'S',
      'singular_name' => 'FAQ'
    ),
    'menu_icon' => 'dashicons-list-view',
    'show_in_rest' => true,
    'rest_base' => '_faqs_',
    'show_ui' => true
  ));
}

add_action('init', 'ndd_post_types');