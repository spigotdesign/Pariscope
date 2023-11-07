<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Pariscope
 * 
 */

?>

<?php if( is_singular() ) { ?>

	<?php get_template_part( 'resources/views/entry/single/project' ); ?>

<?php } else { ?>

	<?php get_template_part( 'resources/views/entry/archive/project' ); ?>

<?php } ?>