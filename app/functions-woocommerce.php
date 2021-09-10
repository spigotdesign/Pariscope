<?php
/**
 * WooCommerce related functions and filters.
 *
 * This file holds some setup actions for scripts and styles as well as a helper
 * functions for work with WooCommerce.
 *
 * @package   Pariscope
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
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
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

/**
 * Change number or products per row to 3
 */



/**
 * WooCommerce Reorder Product Archive Content
 *********************/
 
// Add short description
add_action( 'woocommerce_before_shop_loop_item_title', function() {
	echo '<p class="m_desc"> ' . get_field('product_mini_description') . '</p>';
}, 6 );

// Move title above image
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title');
add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_title', 0);

// Move Price above image
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price');
add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_price', 7);

// Move Rating above image
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating');
add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_rating', 8);

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description');


// Moving Single Product notices above orignial location
remove_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices');


/**
 * WooCommerce Checkout field changes
 * @since  1.0.0
 * @access public
 * @return aray
 */

 add_filter( 'woocommerce_checkout_fields' , function( $fields ) {

	  // Remove billing fields
	  unset($fields['billing']['billing_company']);
	  unset($fields['shipping']['shipping_company']);
	  unset($fields['billing']['billing_city']);
	  unset($fields['billing']['billing_state']);
	  unset($fields['billing']['billing_phone']);

	  //unset($fields['order']['order_comments']);

	  // Class names
	  $fields['billing']['billing_address_1']['class'] 			= array('form-row-quarter');
	  $fields['billing']['billing_address_2']['class'] 			= array('form-row-quarter');
	  $fields['billing']['billing_state']['class']				= array('form-row-quarter');
	  $fields['billing']['billing_city']['class']					= array('form-row-quarter');
	  $fields['billing']['billing_address_2']['label_class'] 		= '';
	  $fields['billing']['billing_postcode']['class'] 			= array('form-row-quarter');
	  $fields['billing']['billing_country']['class'] 				= array('form-row-quarter');
	  $fields['billing']['billing_email']['class'] 				= array('form-row-quarter');
	  $fields['billing']['billing_phone']['class'] 				= array('form-row-quarter');
	  $fields['account']['account_password']['class'] 			= array('form-row-last');

	  $fields['shipping']['shipping_address_1']['class'] 			= array('form-row-quarter');
	  $fields['shipping']['shipping_address_2']['class'] 			= array('form-row-quarter');
	  $fields['shipping']['shipping_state']['class']				= array('form-row-quarter');
	  $fields['shipping']['shipping_city']['class']					= array('form-row-quarter');
	  $fields['shipping']['shipping_address_2']['label_class'] 		= '';
	  $fields['shipping']['shipping_postcode']['class'] 			= array('form-row-quarter');
	  $fields['shipping']['shipping_country']['class'] 				= array('form-row-quarter');
	  $fields['shipping']['shipping_email']['class'] 				= array('form-row-quarter');
	  $fields['shipping']['shipping_phone']['class'] 				= array('form-row-quarter');
	  $fields['account']['account_password']['class'] 			= array('form-row-last');


	  // Labels
	  $fields['billing']['billing_address_2']['label'] 			= 'Address Line 2';
	  $fields['billing']['billing_state']['label'] 				= 'State';
	  $fields['billing']['billing_city']['label'] 				= 'Town / City';
	  $fields['billing']['billing_phone']['label'] 				= 'Phone';
	  $fields['shipping']['shipping_address_2']['label'] 			= 'Address Line 2';
	  $fields['shipping']['shipping_email']['label'] 				= 'Email Address';
	  $fields['shipping']['shipping_phone']['label'] 				= 'Phone';

	  // Priority
	  $fields['billing']['billing_country']['priority'] 			= 100;
	  $fields['shipping']['shipping_country']['priority'] 		= 100;

	  return $fields;

  } );


/**
 * Change number or products per row to 3
 */

remove_filter( 'loop_shop_columns', 'filter_loop_shop_columns', 10, 1 );

// Remove sale badge
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

// Remove WooCommerce Page Titles
add_filter('woocommerce_show_page_title', '__return_false' );

// Remove Order Notes
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

// Move Results Count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'spigot_show_results_count', 'woocommerce_result_count', 20 );

// Remove Sort Ordering
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Move Payment
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
if ( is_user_logged_in() ) {

	add_action( 'woocommerce_after_checkout_billing_form', 'woocommerce_checkout_payment', 20 );

} else {

	add_action( 'woocommerce_after_checkout_registration_form', 'woocommerce_checkout_payment', 20 );
}


// Remove Related Products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Move Cart notices
//remove_action( 'woocommerce_before_cart', 'woocommerce_output_all_notices', 10 );
//add_action( 'woocommerce_before_cart_table', 'wc_print_notices', 10 );


// enable gutenberg for woocommerce
function activate_gutenberg_product( $can_edit, $post_type ) {
 if ( $post_type == 'product' ) {
		$can_edit = true;
	}
	return $can_edit;
}

add_filter( 'use_block_editor_for_post_type', 'Pariscope'. '\activate_gutenberg_product', 10, 2 );

// enable taxonomy fields for woocommerce with gutenberg on
function enable_taxonomy_rest( $args ) {
	$args['show_in_rest'] = true;
	return $args;
}

add_filter( 'woocommerce_taxonomy_args_product_cat', 'Pariscope'. '\enable_taxonomy_rest' );
add_filter( 'woocommerce_taxonomy_args_product_tag', 'Pariscope' . '\enable_taxonomy_rest' );





/**
 * WooCommerce_Quantity_Increment main class.
 */
class WooCommerce_Quantity_Increment {
	const VERSION = '1.1.0';
	protected static $instance = null;
	private function __construct() {
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );
		if ( self::is_wc_version_gte_2_3() ) {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		} else {
			add_action( 'admin_notices', array( $this, 'woocommerce_missing_notice' ) );
		}
	}

	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function load_plugin_textdomain() {
		$locale = apply_filters( 'plugin_locale', get_locale(), 'woocommerce-quantity-increment' );
		load_textdomain( 'woocommerce-quantity-increment', trailingslashit( WP_LANG_DIR ) . 'woocommerce-quantity-increment/woocommerce-quantity-increment-' . $locale . '.mo' );
		load_plugin_textdomain( 'woocommerce-quantity-increment', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	private static function get_wc_version() {
		return defined( 'WC_VERSION' ) && WC_VERSION ? WC_VERSION : null;
	}

	public static function is_wc_version_gte_2_3() {
		return self::get_wc_version() && version_compare( self::get_wc_version(), '2.3', '>=' );
	}

	public function enqueue_scripts() {
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'wcqi-js', plugins_url( 'assets/js/wc-quantity-increment' . $min . '.js', __FILE__ ), array( 'jquery' ) );
		wp_enqueue_style( 'wcqi-css', plugins_url( 'assets/css/wc-quantity-increment.css', __FILE__ ) );
		wp_register_script( 'wcqi-number-polyfill', plugins_url( 'assets/js/lib/number-polyfill.min.js', __FILE__ ) );
	}

}

add_action( 'plugins_loaded', array( 'WooCommerce_Quantity_Increment', 'get_instance' ), 0 );
add_filter( 'woocommerce_add_to_cart_fragments', 'Pariscope' . '\cinch_cart_count_fragments', 10, 1 );

function cinch_cart_count_fragments( $fragments ) {

	$fragments['.cart-count'] = '<span class="cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';

	return $fragments;

};

// Wrap around Stripe CC icons
add_filter( 'woocommerce_gateway_icon', function( $icon ) {

	return sprintf(
		'<div class="cc-icons">%s</div>',
		$icon
	);

}, PHP_INT_MAX );


/**
 * Change several of the breadcrumb defaults
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'Pariscope' . '\change_woocommerce_breadcrumbs' );
function change_woocommerce_breadcrumbs() {
	return array(
			'delimiter'   => ' &rsaquo; ',
			'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
			'wrap_after'  => '</nav>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Shop', 'breadcrumb', 'woocommerce' ),
		);
}

/**
 * Replace the breadcrumb home link URL
 */
add_filter( 'woocommerce_breadcrumb_home_url', 'Pariscope' . '\woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
	return get_bloginfo('url'). '/shop';
}

// Pagination 

add_filter( 'woocommerce_pagination_args', 	'Pariscope' . '\custom_pagination' );
function custom_pagination( $args ) {
	$args['prev_text'] = '← Previous';
	$args['next_text'] = 'Next →';
	
	//$args['type'] = 'array';
	
	return $args;
}



