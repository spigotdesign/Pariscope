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

/**
 * Custom Navigation Walker
 */

class Pariscope_Walker extends Walker_Nav_Menu {
  
  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $permalink = $item->url;
    $classes = $item->classes;

    $output .= "<li id='menu-item-". $item->ID ."' class='menu__item " .  implode(" ", $classes) . "'>";
    
    if( $permalink && $permalink != '#' ) {
      $output .= '<a class="menu__link" href="' . $permalink . '">';
      
    } else {
        $output .= '';
      }
    
    if($args->walker->has_children) {
        $output .= '<button type="button" class="dropdown__title" aria-expanded="false" aria-controls="nav-dropdown-'. $item->ID .'">' ;
    }
     
    $output .= $item->title;
    
    if($args->walker->has_children) {
        $output .= '</button>' ;
    }

    if( $permalink && $permalink != '#' ) {
      $output .= '</a>';
    } else {
      $output .= '';
    }
  }
}