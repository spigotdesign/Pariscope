<?php
/**
 * Filter functions.
 *
 * This file holds WordPress filter functions
 *
 * @package    Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2018, Bryan Hoffman
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

    return $classes;

}, 0 );




