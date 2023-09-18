<?php
/**
 * Theme setup functions
 * 
 *  @package    Pariscope
 * 
 */

 /**
 * Adds custom classes to the array of body classes.
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
 * Pre Get Posts
 *
 */

add_filter('pre_get_posts', function( $query ) {

	if ( is_admin() ) { return; }

	if ( $query->is_main_query() ) {
        // $query->set( 'posts_per_page', 32 );
    }

    return $query;

}, 0 );