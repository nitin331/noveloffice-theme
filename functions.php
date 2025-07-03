<?php
function custom_theme_scripts() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

function custom_theme_setup() {
  register_nav_menus(array(
    'main-menu' => 'Main Navigation Menu',
  ));
}
add_action('after_setup_theme', 'custom_theme_setup');


function create_testimonial_cpt() {
  $labels = array(
    'name' => 'Testimonials',
    'singular_name' => 'Testimonial',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Testimonial',
    'edit_item' => 'Edit Testimonial',
    'new_item' => 'New Testimonial',
    'view_item' => 'View Testimonial',
    'all_items' => 'All Testimonials',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-format-quote',
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true,
    'has_archive' => false,
  );

  register_post_type('testimonial', $args);
}
add_action('init', 'create_testimonial_cpt');


// Enable lazy loading on all images inserted by WordPress
add_filter('wp_get_attachment_image_attributes', function($attr) {
  $attr['loading'] = 'lazy';
  return $attr;
});

// Enqueue Swiper
function noveloffice_enqueue_swiper() {
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'noveloffice_enqueue_swiper');

// Register Testimonial Post Type
function register_testimonial_post_type() {
  register_post_type('testimonial', array(
    'labels' => array(
      'name' => 'Testimonials',
      'singular_name' => 'Testimonial',
      'add_new' => 'Add New',
      'add_new_item' => 'Add New Testimonial',
      'edit_item' => 'Edit Testimonial',
      'new_item' => 'New Testimonial',
      'view_item' => 'View Testimonial',
      'search_items' => 'Search Testimonials',
    ),
    'public' => true,
    'menu_icon' => 'dashicons-format-quote',
    'supports' => array('title', 'editor', 'thumbnail'),
    'has_archive' => false,
    'show_in_rest' => true,
  ));
}
add_action('init', 'register_testimonial_post_type');

