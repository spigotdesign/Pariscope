<?php
/**
 * Asset-related functions and filters.
 * 
 *  @package    Pariscope
 * 
 */


 /**
  * Enqueue frontend scripts and styles
  *
  */

add_action( 'wp_enqueue_scripts', function() { 

  wp_enqueue_style( 'pariscope-style', get_stylesheet_directory_uri() . '/dist/css/screen.css', array(), _P_VERSION );
  wp_style_add_data( 'pariscope-style', 'rtl', 'replace' );

  // wp_enqueue_script( 'pariscope-navigation', get_template_directory_uri() . '/dist/js/navigation.js', array(), _P_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

});

