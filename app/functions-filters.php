<?php
/**
 * Filter functions.
 *
 * This file holds WordPress filter functions
 *
 * @package   Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2020, Bryan Hoffman
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

	if ( is_archive() && !is_post_type_archive('product') || is_home() || is_search() ) {
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
 * Pre Get Posts
 *
 */

add_filter('pre_get_posts', function( $query ) {

	if ( is_admin() ) { return; }

	if ( $query->is_main_query() ) {
	    
        $query->set( 'posts_per_page', 32 );
        
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

// Font Awesome Kit support

add_action( 'wp_enqueue_scripts', function() {
	wp_dequeue_style( 'font-awesome' );
	wp_dequeue_style( 'font-awesome-5' );
	wp_deregister_style( 'font-awesome' );
	wp_deregister_style( 'font-awesome-5' );
	wp_enqueue_script( 'fa5-kit', 'https://kit.fontawesome.com/6a7cb3278e.js' ); // replace with actual kit url
}, 99999 );
add_filter( 'fl_enable_fa5_pro', '__return_true' );


// SEO Framework Titles

add_filter( 'the_seo_framework_title_from_generation', function( $title, $args ) {
	
	if ( is_post_type_archive( 'exhibit' ) ) {
		$title = 'Past Exhibits | Park City Museum ';
	}

	return $title;
}, 10, 2 );

add_filter( 'redirect_canonical', 'exibits_disable_redirect_canonical' );
function exibits_disable_redirect_canonical( $redirect_url ) {
    if ( is_post_type_archive( 'exhibit' ) ) {
        $redirect_url = false;
    }
    return $redirect_url;
}


add_filter( 'woocommerce_register_post_type_product', 'cinch_add_revision_support' );

function cinch_add_revision_support( $supports ) {
     $supports['supports'][] = 'revisions';

     return $supports;
}

