<?php
function enqueue_theme_styles() {
  // Enqueue main stylesheet
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function enqueue_theme_scripts() {
  // Enqueue scripts here
  wp_enqueue_script('Bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
  if (is_single()) {
    wp_enqueue_script('zoom', get_template_directory_uri() . '/zoom-img.js', array(), '1.0', true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

function ThemeSupport() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ThemeSupport');