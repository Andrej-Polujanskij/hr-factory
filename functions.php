<?php
// enquee scripts and styles
include('includes/scripts.php');
include('includes/disable_comments.php');

// create post types and taxonomies if needed
include('includes/post_types.php');

// add post thumbnails with sizes
add_theme_support('post-thumbnails');
if (function_exists('add_image_size')) {
  add_image_size('thumbas', 500, 500, false);
  add_image_size('company_logo', 220, 100, false);
  add_image_size('main_bg_size', 2000, 1000, false);
}

// custom function for returning excerpt from post
function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  return $excerpt;
}

// get image url from attachment id
function get_correct_image_link_thumb($thumb_id = '', $size = 'large')
{

  if ($thumb_id != '') {
    $imagepermalink = wp_get_attachment_image_src($thumb_id, $size, true);
  } else {
    $imagepermalink[0] = get_stylesheet_directory_uri() . '/images/cover.jpg';
  }
  return $imagepermalink[0];
}

// disable admin bar if needed
show_admin_bar(false);

// Create ACF options page
if (function_exists('acf_add_options_sub_page')) {
  acf_add_options_sub_page('Options');
}

// Create wordpress menu locations
function register_theme_menus()
{
  register_nav_menus(array(
    'header-menu' => __('Header menu')
  ));
}

add_action('init', 'register_theme_menus');

// AJAX function
add_action('wp_ajax_send_contact_form_message',        'send_contact_form_message');
add_action('wp_ajax_nopriv_send_contact_form_message', 'send_contact_form_message');
function send_contact_form_message(){
    $to = get_option('admin_email');
    // print_r($_POST);

    $message ='
        El. paštas: '.$_POST['mail'].' <br />
        Tel. numeris: '.$_POST['number'].' <br />
    ';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From:  '.$_POST['mail'].'',
        'Reply-To: <'.$_POST['mail'].'>'
    );

    $subject = 'Nemokama konsultacija';

   wp_mail($to, $subject, $message, $headers);

    die();
}

