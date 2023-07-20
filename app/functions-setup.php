<?php
/**
 * Theme setup functions
 * 
 *  @package    Pariscope
 * 
 */

add_action( 'after_setup_theme', function() {
    
    // Set content width.
	$GLOBALS['content_width'] = 1200;

    // Maybe do translations one day?
	// load_theme_textdomain( 'pariscope', get_parent_theme_file_path( 'resources/lang' ) );

    // Automatically add the `<title>` tag.
	add_theme_support( 'title-tag' );

	// Automatically add feed links to `<head>`.
	add_theme_support( 'automatic-feed-links' );

	// Adds featured image support.
	add_theme_support( 'post-thumbnails' );

	// Add selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    // Responsive embeds
	add_theme_support( 'responsive-embeds' );

    // Outputs HTML5 markup for core features.
	add_theme_support( 'html5', [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
        'style', 
        'script'
	] );


});


/**
 * Register menus.
 *
 * 
*/

add_action( 'init', function() {

	register_nav_menus( [
		'primary' => esc_html_x( 'Primary', 'nav menu location' )
	] );

	register_nav_menus( [
		'footer_1' => esc_html_x( 'Footer Menu 1', 'nav menu location' )
	] );

	register_nav_menus( [
		'footer_2' => esc_html_x( 'Footer Menu 2', 'nav menu location' )
	] );

	register_nav_menus( [
		'footer_3' => esc_html_x( 'Footer Menu 3', 'nav menu location' )
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
 *
 */

add_action( 'init', function() {

	// Set the `post-thumbnail` size.
	set_post_thumbnail_size( 480, 300, true );

	// Post Thumbnails
	add_image_size( 'post-thumb', 600, 300, array( 'center', 'center' ));

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

