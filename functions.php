<?php
/**
 * Theme functions file.
 *
 * This file is used to bootstrap the theme.
 *
 * @package   Pariscope
 * @author    Bryan Hoffman <bryan@spigotdesign.com>
 * @copyright Copyright (c) 2019, Bryan Hoffman
 * @link      https://spigotdesign.com/
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Load the bootstrap files. Note that autoloading should happen first so that
# any classes/functions are available that we might need.

require_once( get_parent_theme_file_path( 'app/bootstrap-autoload.php' ) );
require_once( get_parent_theme_file_path( 'app/bootstrap-app.php'      ) );
