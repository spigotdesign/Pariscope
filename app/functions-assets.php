<?php
/**
 * Asset-related functions and filters.
 *
 * This file holds some setup actions for scripts and styles as well as a helper
 * functions for work with assets.
 *
 * @package   Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2021, Bryan Hoffman
 * @link       https://spigotdesign.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Pariscope;

use Hybrid\App;

/**
 * Enqueue scripts/styles for the front end.
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {

	// Disable core block styles.
	wp_dequeue_style( 'wp-block-library' );

	// Load WordPress' comment-reply script where appropriate.
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'pariscope-app', asset( 'js/app.js' ), array( 'jquery' ), null, true );
	wp_enqueue_style( 'pariscope-screen', asset( 'css/screen.css' ), null, null );

    // Quantity increment - WooCommerce only
	// wp_enqueue_script( 'woo-quantity', asset( 'js/wc-quantity-increment.js' ), array( 'jquery' ), null, true );

    /* Google fonts
     *  Add fonts to WP Editor here: resources/scss/editor.scss
     */

	//wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,400;0,600;1,400;1,600&family=Rubik:wght@400;500&display=swap', [], null, false );






} );

/**
 * Enqueue scripts/styles for the editor.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'enqueue_block_editor_assets', function() {

	wp_enqueue_style( 'pariscope-editor', asset( 'css/editor.css' ), null, null );

	// Unregister core block and theme styles.
	wp_deregister_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library-theme' );

	// Re-register core block and theme styles with an empty string. This is
	// necessary to get styles set up correctly.
	wp_register_style( 'wp-block-library', '' );
	wp_register_style( 'wp-block-library-theme', '' );

} );

/**
 * Helper function for outputting an asset URL in the theme. This integrates
 * with Laravel Mix for handling cache busting. If used when you enqueue a script
 * or style, it'll append an ID to the filename.
 *
 * @link   https://laravel.com/docs/5.6/mix#versioning-and-cache-busting
 * @since  1.0.0
 * @access public
 * @param  string  $path
 * @return string
 */
function asset( $path ) {

	// Get the Laravel Mix manifest.
	$manifest = App::resolve( 'pariscope/mix' );

	// Make sure to trim any slashes from the front of the path.
	$path = '/' . ltrim( $path, '/' );

	if ( $manifest && isset( $manifest[ $path ] ) ) {
		$path = $manifest[ $path ];
	}

	return get_theme_file_uri( 'dist' . $path );
}

// Register Custom Templates

add_action( 'hybrid/templates/register', function( $templates ) {
    /*
    $templates->add(
        'page-templates/page-template-past-exhibits.php',
        [
            'label'      => __( 'Past Exhibits' ),
            'post_types' => [ 'page', 'another_type' ]
        ]
    );
    */
} );

