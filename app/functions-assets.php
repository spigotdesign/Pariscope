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

  wp_enqueue_style( 'pariscope-style', get_stylesheet_directory_uri() . '/dist/css/screen.css', '');
  wp_style_add_data( 'pariscope-style', 'rtl', 'replace' );

  wp_enqueue_style( 'wp-block-library' ); 

  wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), _P_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  // wp_deregister_style('classic-theme-styles');
  // wp_dequeue_style('classic-theme-styles');

});

