<?php
/**
 * Filter functions.
 *
 * This file holds WordPress filter functions
 *
 * @package    Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2019, Bryan Hoffman
 * @link       https://spigotdesign.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */




/**
 * Locate search form
 *
 */

add_filter( 'get_search_form', function( $form ) {
	$template = Hybrid\Template\locate( 'searchform.php' );
	if ( $template ) {
		ob_start();
		include $template;
		$form = ob_get_clean();
	}
	return $form;
}, 0 );


/**
 * Filter 'body' class
 * 
 */

add_filter('body_class', function( $classes ) {

    $classes[] = 'no-js';

    if ( has_post_thumbnail() ) {
		$classes[] = 'featured-image';
	}

    return $classes;

}, 0 );

/**
 * Filter post entry class
 *
 */

add_filter('post_class', function( $attr ) {

	if ( is_archive() || is_home() || is_search() ) {
    	$attr[] = 'post-list__card';
    }
    
    return $attr;

}, 0 );

/**
 * Change Excerpt length
 *
 */

add_filter('excerpt_length', function( $length ) {

	$length = 24; 
	
	return $length;

}, 0 );


/**
 * Change Excerpt endings
 *
 */

add_filter('excerpt_more', function( $more ) {

	$more = '...'; 
	
	return $more;

}, 0 );


/**
 * Show all posts
 *
 */

add_filter('pre_get_posts', function( $query ) {

	if ( is_admin() ) { return; }

	if ( $query->is_main_query() ) {
	    
        $query->set( 'posts_per_page', 40 );
        
    }
    return $query;


}, 0 );

// Gravity Forms Confirmation anchor
add_filter( 'gform_confirmation_anchor', '__return_true' );


/**
 * Update cart icon count
 *
 */

add_filter( 'woocommerce_add_to_cart_fragments', 'cinch_cart_count_fragments', 10, 1 );

function cinch_cart_count_fragments( $fragments ) {
    
    $fragments['.cart-count'] = '<span class="cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
    
};

add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'cinchws_filter_dropdown_args', 10 );

function cinchws_filter_dropdown_args( $args ) {
    $var_tax = get_taxonomy( $args['attribute'] );
    $args['show_option_none'] = apply_filters( 'the_title', $var_tax->labels->name );
    return $args;
}

// Add new stock status to select
add_filter( 'woocommerce_stock_status_options', function( $stock_statuses ) {

    $stock_statuses['discontinued'] = 'Discontinued';
    return $stock_statuses;

} );


add_filter( 'woocommerce_register_post_type_product', 'cinch_add_revision_support' );

function cinch_add_revision_support( $supports ) {
     $supports['supports'][] = 'revisions';

     return $supports;
}







