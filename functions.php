<?php


wp_enqueue_style('style', get_theme_file_uri('/css/style.min.css'));



add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function sandbox_post_types()
{
  register_post_type('car', array(
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'cars'),
    'public' => true,
    'labels' => array(
      'name' => 'Cars',
      'add_new_item' => 'Add New Car',
      'add_new' => 'Add New Car',
      'edit_item' => 'Edit Car',
      'all_items' => 'All Cars',
      'singular_name' => 'Car',
      'search_items' => 'Search Cars',
    ),
    'menu_icon' => 'dashicons-car',
  ));
}

add_action('init', 'sandbox_post_types');
