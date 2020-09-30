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
 * WooCommerce Checkout field changes
 *
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

add_filter( 'loop_shop_columns' , function() {

	return 3;

}, 999 );

// Remove sale badge
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

// Remove WooCommerce Page Titles
add_filter('woocommerce_show_page_title', create_function('$result', 'return false;'), 20);

// Remove Order Notes
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

// Move Results Count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'spigot_show_results_count', 'woocommerce_result_count', 20 );

// Remove Sort Ordering
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Move Payment
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_before_order_notes', 'woocommerce_checkout_payment', 20 );

// Remove Related Products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Move Cart notices

//remove_action( 'woocommerce_before_cart', 'woocommerce_output_all_notices', 10 );
//add_action( 'woocommerce_before_cart_table', 'wc_print_notices', 10 );




/**
 * WooCommerce_Quantity_Increment main class.
 */
class WooCommerce_Quantity_Increment {

	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	const VERSION = '1.1.0';

	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin.
	 */
	private function __construct() {
		// Load plugin text domain
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		// Checks with WooCommerce is installed.
		if ( self::is_wc_version_gte_2_3() ) {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		} else {
			add_action( 'admin_notices', array( $this, 'woocommerce_missing_notice' ) );
		}
	}

	/**
	 * Return an instance of this class.
	 *
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @return void
	 */
	public function load_plugin_textdomain() {
		$locale = apply_filters( 'plugin_locale', get_locale(), 'woocommerce-quantity-increment' );
		load_textdomain( 'woocommerce-quantity-increment', trailingslashit( WP_LANG_DIR ) . 'woocommerce-quantity-increment/woocommerce-quantity-increment-' . $locale . '.mo' );
		load_plugin_textdomain( 'woocommerce-quantity-increment', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Helper method to get the version of the currently installed WooCommerce
	 *
	 * @since 1.0.0
	 * @return string woocommerce version number or null
	 */
	private static function get_wc_version() {
		return defined( 'WC_VERSION' ) && WC_VERSION ? WC_VERSION : null;
	}

	/**
	 * Returns true if the installed version of WooCommerce is 2.3 or greater
	 *
	 * @since 1.0.0
	 * @return boolean true if the installed version of WooCommerce is 2.3 or greater
	 */
	public static function is_wc_version_gte_2_3() {
		return self::get_wc_version() && version_compare( self::get_wc_version(), '2.3', '>=' );
	}

	/**
	 * Enqueue scripts
	 */
	public function enqueue_scripts() {
		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		wp_enqueue_script( 'wcqi-js', plugins_url( 'assets/js/wc-quantity-increment' . $min . '.js', __FILE__ ), array( 'jquery' ) );
		wp_enqueue_style( 'wcqi-css', plugins_url( 'assets/css/wc-quantity-increment.css', __FILE__ ) );
		wp_register_script( 'wcqi-number-polyfill', plugins_url( 'assets/js/lib/number-polyfill.min.js', __FILE__ ) );
	}

}

add_action( 'plugins_loaded', array( 'WooCommerce_Quantity_Increment', 'get_instance' ), 0 );



