<?php
/**
 * Beaver Builder related functions and filters.
 *
 * This file holds some setup actions for scripts and styles as well as a helper
 * functions for work with Beaver Builder.
 *
 * @package   HealthLine
 * @author    Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright Copyright (c) 2020, Bryan Hoffman
 * @link      https://spigotdesign.com/
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Pariscope;

use function Hybrid\Template\path;


/**
 * Load BB files
 *
 */


add_filter( 'fl_theme_builder_template_include', function( $template ) {

	$template = \Hybrid\Template\locate( [ 'page-builder.php' ] );

	return $template;

} );