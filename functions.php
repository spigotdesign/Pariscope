<?php
/**
 * Theme Functions file.
 *
 * This file is used to bootstrap the theme.
 *
 * @package Pariscope
 */

if ( ! defined( '_P_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_P_VERSION', '2.0.0' );
}


# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------

require_once( get_parent_theme_file_path( 'app/bootstrap-app.php' ) );
