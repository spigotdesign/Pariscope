<?php
/**
 * Template Functions
 * 
 */



/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

 add_filter('body_class', function( $classes ) {

    $classes[] = 'no-js';

    if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

    if ( has_post_thumbnail() ) {
		$classes[] = 'featured-image';
	}

    return $classes;

}, 0 );
