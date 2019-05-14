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







