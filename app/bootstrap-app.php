<?php 
/**
 * Autoload bootstrap file
 * 
 * Used to autoload classes and functions necessary for the theme to run
 *
 * @package    Pariscope
 * 
*/


array_map(
    function ($file) {
        require_once get_theme_file_path("app/{$file}.php");
    },
    [
        'functions-assets',
        // 'functions-filters',
        // 'functions-page-builder',
        'functions-setup',
        'functions-template',
        'functions-template-tags',
        //'functions-customizer',
    ]
);

// Load Jetpack Functions 
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/app/functions-jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/app/functions-woocommerce.php';
}