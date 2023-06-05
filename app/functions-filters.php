<?php
/**
 * Filter functions.
 *
 * This file holds WordPress filter functions
 *
 * @package    Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2021, Bryan Hoffman
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

// BB Custom Fonts

function my_bb_custom_fonts ( $system_fonts ) {

      $system_fonts[ 'IBM Plex Serif' ] = array(
        'fallback' => ' serif',
        'weights' => array(
          '400', '600',
        ),
      );

      $system_fonts[ 'Rubik' ] = array(
          'fallback' => 'Helvetica, sans-serif',
          'weights' => array(
            '400', '500',
          ),
        );

    return $system_fonts;

    }
//Add to Beaver Builder Theme Customizer
add_filter( 'fl_theme_system_fonts', 'my_bb_custom_fonts' );

//Add to Beaver Builder modules
add_filter( 'fl_builder_font_families_system', 'my_bb_custom_fonts' );


// Disable Full Screen Editor
if (is_admin()) { 
    function sd_disable_full_screen() {
    $script = "jQuery( window ).load(function() { 
        const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); 
            if ( isFullscreenMode ) { 
                wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); 
            } 
        });";
    wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'sd_disable_full_screen' );
}



