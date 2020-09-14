<?php
function scripts_styles()
{
  $ver = defined('WP_DEBUG') && WP_DEBUG === true ? time() : '1.04';

  wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/bundle.css', array(), $ver);
  wp_enqueue_style( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), $static_version );
  wp_enqueue_style( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css', array(), $static_version );


  wp_enqueue_script( 'jQuery_validate', get_template_directory_uri() . '/src/js/jquery.validate.js', array( 'jquery' ), $ver, true );
  wp_enqueue_script( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js', array( 'jquery' ), $ver, true );
  wp_enqueue_script( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), $ver, true );
  wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), $ver, true);

  wp_localize_script('main-js', 'variables', array('ajaxUrl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'scripts_styles');
