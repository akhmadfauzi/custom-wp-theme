<?php

if (!function_exists('my_first_theme_setup')) {

  function my_first_theme_setup()
  {
    wp_enqueue_style('style', get_stylesheet_uri(), './style.css');

    function register_my_menus()
    {
      register_nav_menus(
        array(
          'header-menu' => __('Header Menu'),
          'extra-menu' => __('Extra Menu')
        )
      );
    }
    add_action('init', 'register_my_menus');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('post-formats',  array('aside', 'gallery', 'quote', 'image', 'video'));

    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );

    add_theme_support(
      'custom-logo',
      array(
        'height'      => 190,
        'width'       => 190,
        'flex-width'  => false,
        'flex-height' => false,
      )
    );
  }
}

add_action('after_setup_theme', 'my_first_theme_setup');
