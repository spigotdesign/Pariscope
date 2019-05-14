<?php
/**
 * Theme setup functions.
 *
 * This file holds basic theme setup functions executed on appropriate hooks
 * with some opinionated priorities based on theme dev, particularly working
 * with child theme devs/users, over the years. I've also decided to use
 * anonymous functions to keep these from being easily unhooked. WordPress has
 * an appropriate API for unregistering, removing, or modifying all of the
 * things in this file. Those APIs should be used instead of attempting to use
 * `remove_action()`.
 *
 * @package    Pariscope
 * @subpackage Includes
 * @author     Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright  Copyright (c) 2019, Bryan Hoffman
 * @link       https://spigotdesign.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Pariscope;

/**
 * Set up theme support.  This is where calls to `add_theme_support()` happen.
 *
 * @link   https://developer.wordpress.org/reference/functions/add_theme_support/
 * @link   https://developer.wordpress.org/themes/basics/theme-functions/
 * @link   https://developer.wordpress.org/reference/functions/load_theme_textdomain/
 * @link   https://github.com/WordPress/gutenberg/blob/master/docs/extensibility/theme-support.md
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'after_setup_theme', function() {

	// Set content width.
	$GLOBALS['content_width'] = 750;

	// Load theme translations.
	load_theme_textdomain( 'pariscope', get_parent_theme_file_path( 'resources/lang' ) );

	// Automatically add the `<title>` tag.
	add_theme_support( 'title-tag' );

	// Automatically add feed links to `<head>`.
	add_theme_support( 'automatic-feed-links' );

	// Adds featured image support.
	add_theme_support( 'post-thumbnails' );

	// Add selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Wide and full alignment.
	add_theme_support( 'align-wide' );

	// Outputs HTML5 markup for core features.
	add_theme_support( 'html5', [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form'
	] );

	// Editor color palette.
	add_theme_support( 'editor-color-palette', [
		[
			'name'  => __( 'Charcoal' ),
			'slug'  => 'charcoal',
			'color' => '#282c34'
		],
		[
			'name'  => __( 'Regent' ),
			'slug'  => 'regent',
			'color' => '#8c97a7',
		],
		[
			'name'  => __( 'Husk' ),
			'slug'  => 'husk',
			'color' => '#B9A364',
		],
		[
			'name'  => __( 'Red Stage' ),
			'slug'  => 'red-stage',
			'color' => '#b15330',
		]
	] );

	// Editor block font sizes.
	add_theme_support( 'editor-font-sizes', [
		[
			'name'      => __( 'Small' ),
			'shortName' => __( 'S' ),
			'size'      => 12,
			'slug'      => 'small'
		],
		[
			'name'      => __( 'Regular' ),
			'shortName' => __( 'M' ),
			'size'      => 16,
			'slug'      => 'regular'
		],
		[
			'name'      => __( 'Large' ),
			'shortName' => __( 'L' ),
			'size'      => 36,
			'slug'      => 'large'
		],
		[
			'name'      => __( 'Larger' ),
			'shortName' => __( 'XL' ),
			'size'      => 48,
			'slug'      => 'larger'
		]
	] );

}, 5 );



/**
 * Register menus.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'init', function() {

	register_nav_menus( [
		'primary' => esc_html_x( 'Primary', 'nav menu location' )
	] );

	register_nav_menus( [
		'supernav' => esc_html_x( 'Supernav', 'nav menu location' )
	] );

	register_nav_menus( [
		'footer' => esc_html_x( 'Footer', 'nav menu location' )
	] );

}, 5 );


/**
 * Register image sizes. Even if adding no custom image sizes or not adding
 * "thumbnails," it's still important to call `set_post_thumbnail_size()` so
 * that plugins that utilize the `post-thumbnail` size will have a properly-sized
 * thumbnail that matches the theme design.
 *
 * @link   https://developer.wordpress.org/reference/functions/set_post_thumbnail_size/
 * @link   https://developer.wordpress.org/reference/functions/add_image_size/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'init', function() {

	// Set the `post-thumbnail` size.
	set_post_thumbnail_size( 480, 300, true );

	// Post Thumbnails
	add_image_size( 'post-thumb', 480, 300, array( 'center', 'center' ));

}, 5 );

/**
 * Register sidebars.
 *
 * @link   https://developer.wordpress.org/reference/functions/register_sidebar/
 * @link   https://developer.wordpress.org/reference/functions/register_sidebars/
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'widgets_init', function() {

	$args = [
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget__title">',
		'after_title'   => '</h3>'
	];

	register_sidebar( [
		'id'   => 'primary',
		'name' => esc_html_x( 'Primary', 'sidebar' )
	] + $args );

}, 5 );



