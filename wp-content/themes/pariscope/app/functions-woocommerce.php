<?php
/**
 * WooCommerce related functions and filters.
 *
 * This file holds some setup actions for scripts and styles as well as a helper
 * functions for work with WooCommerce.
 *
 * @package    Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2018, Bryan Hoffman
 * @link       https://spigotdesign.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Pariscope;

use function Hybrid\Template\path;

/**
 * Adds theme support for the WooCommerce plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'after_setup_theme', function() {

	add_theme_support( 'woocommerce' );
} );

/**
 * This overrides the top-level WooCommerce templates that would normally go in
 * the theme root. By default, we're looking for a `resources/views/woocommerce.php`
 * template, which falls back to `resources/views/index.php`.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $files
 * @return array
 */
add_filter( 'woocommerce_template_loader_files', function( $files ) {

	return [
		path( 'woocommerce.php' ),
		path( 'index.php' )
	];

}, ~PHP_INT_MAX );

// Disable WooCommerce Styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



/**
 * Filters the path to the `woocommerce` template parts folder.  This filter
 * moves that folder to `resources/views/woocommerce`.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $path
 * @return string
 */
add_filter( 'woocommerce_template_path', function( $path ) {

	return path( $path );

} );


/**
 * Disable WooCommerce stylesheets
 * moves that folder to `resources/views/woocommerce`.
 *
 * @since  1.0.0
 * @access public
 * @return aray
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );



// Cart Page, Checkout page
// woocmmmerce-select2
// woocommerce-layout-css
// woocommerce-smallscreen
// woocommerce.css

// Product, Category
// woocommerce-layout-css
// woocommerce-smallscreen
// woocommerce.css
