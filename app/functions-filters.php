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
    

   if(get_field('dark_hero_image')) {
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

    if ( $query->is_home() && $query->is_main_query() && $query->is_paged() == 0 ) {
        // Exclude sticky posts
        $sticky_posts = get_option('sticky_posts');
        if (!empty($sticky_posts)) {
            $query->set( 'post__not_in', $sticky_posts );
        }

        // Offset by one post if sticky is empty
        if (empty($sticky_posts)) {
            $query->set( 'offset', 1 ); // Offset by one post
        }
    }

    return $query;

}, 0 );