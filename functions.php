<?php
/**
 *
 */

function material_simple_setup(){

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-background' );

	add_image_size( 'material-simple-featured-image', 2000, 1200, true );

	add_image_size( 'material-simple-thumbnail', 250, 250, false );

	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'material_simple' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

}
add_action( 'after_setup_theme', 'material_simple_setup' );

function material_simple_scripts(){
	wp_enqueue_style( 'material_simple', get_stylesheet_uri() );
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700' );
}
add_action( 'wp_enqueue_scripts', 'material_simple_scripts' );

function material_simple_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'material_simple_custom_excerpt_length', 999 );