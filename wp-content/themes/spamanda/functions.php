<?php

function spamanda_scripts() {
  wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', false );
  wp_enqueue_style( 'style-bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', array(), '1.0.0', false );
	wp_enqueue_style( 'style-spamanda', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', false );
  wp_enqueue_style( 'style-media', get_template_directory_uri() . '/css/media.css', array(), '1.0.0', false );
  wp_enqueue_style( 'style-camera', get_template_directory_uri() . '/css/camera.css', array(), '1.0.0', false );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'jquery-camera', get_template_directory_uri() . '/js/camera.js', array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'spamanda_scripts' );

add_filter('show_admin_bar', '__return_false');

?>
