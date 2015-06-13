<?php

function spamanda_scripts() {
  wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', false );
  wp_enqueue_style( 'style-bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css', array(), '1.0.0', false );
	wp_enqueue_style( 'style-spamanda', get_template_directory_uri() . '/css/style.css', array(), '1.0.1', false );
  wp_enqueue_style( 'style-media', get_template_directory_uri() . '/css/media.css', array(), '1.0.0', false );
  wp_enqueue_style( 'style-camera', get_template_directory_uri() . '/css/camera.css', array(), '1.0.0', false );
  wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'jquery-camera', get_template_directory_uri() . '/js/camera.js', array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true );
  wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'spamanda_scripts' );

add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'massage-thumb', 220, 220, true );

register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'main-nav' ),
	'secondary' => __( 'Footer Navigation', 'footer nav' )
) );

// Register Custom Post Type
function massage() {

	$labels = array(
		'name'                => _x( 'Massages', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Massage', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Massages', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Massage:', 'text_domain' ),
		'all_items'           => __( 'All Massages', 'text_domain' ),
		'view_item'           => __( 'View Massage', 'text_domain' ),
		'add_new_item'        => __( 'Add New Massage', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Massage', 'text_domain' ),
		'update_item'         => __( 'Update Massage', 'text_domain' ),
		'search_items'        => __( 'Search Massages', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'massage',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'massage', 'text_domain' ),
		'description'         => __( 'Post een massage', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-universal-access',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'massage', $args );

}

// Hook into the 'init' action
add_action( 'init', 'massage', 0 );


// Register Custom Post Type
function beautycare() {

	$labels = array(
		'name'                => _x( 'Beautycares', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Beautycare', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Beautycares', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Beautycare:', 'text_domain' ),
		'all_items'           => __( 'All Beautycares', 'text_domain' ),
		'view_item'           => __( 'View Beautycare', 'text_domain' ),
		'add_new_item'        => __( 'Add New Beautycare', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Beautycare', 'text_domain' ),
		'update_item'         => __( 'Update Beautycare', 'text_domain' ),
		'search_items'        => __( 'Search Beautycares', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'beautycare',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'beautycare', 'text_domain' ),
		'description'         => __( 'Post een beautycare', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-smiley',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'beautycare', $args );

}

// Hook into the 'init' action
add_action( 'init', 'beautycare', 0 );



?>
