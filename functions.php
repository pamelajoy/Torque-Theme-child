<?php

if (! function_exists('tq_theme_prefix_vendor_script_init') ){
  function tq_theme_prefix_vendor_script_init() {
    // Boostrap requires latest version of jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js');
    wp_enqueue_script('jquery');

    // Popper is a Boostrap dependency
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( 'jquery'
     ), '', true);
    wp_enqueue_script('popper');

    // Boostrap minified javascript
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array( 'jquery' ), '', true);
    wp_enqueue_script('bootstrap');

    // Boostrap uses the Font Awesome icon library
    wp_register_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'font-awesome' );
    
    // Boostrap minified css
    wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap' );
  }
}
add_action( 'wp_enqueue_scripts', 'tq_theme_prefix_vendor_script_init' );

// Bootstrapify the WordPress Menu
require_once( 'inc/bs4navwalker.php' );

/**
 * Enqueue scripts and styles.
 */
if (! function_exists('tq_theme_prefix_custom_script_init') ){  
  function tq_theme_prefix_custom_script_init(){

  	// Compiled and minified javascript
  	wp_register_script( 'scripts', get_stylesheet_directory_uri().'/dist/scripts.min.js', array( 'jquery' ), '', true );
  	wp_enqueue_script( 'scripts' );

  	// Compiled and minified style sheet
  	wp_register_style( 'style', get_stylesheet_directory_uri().'/dist/style.min.css' );
  	wp_enqueue_style( 'style' );

  }
}
add_action( 'wp_enqueue_scripts', 'tq_theme_prefix_custom_script_init' );

/**
 * Register Custom Post Types
 */
require_once( 'inc/custom-post-types.php' );

/**
 * Register ACF Pro Fields with PHP
 */
require_once( 'inc/acf-init.php');

/**
 * Add ACF Pro Options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}
