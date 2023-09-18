<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pariscope
 */

?>
This is the  search template which doesn't appear to do anthing ATM.
<?php if( is_singular() ) { ?>

	<?php get_template_part( 'resources/views/entry/single/' . get_post_type() ); ?>

<?php } else { ?>

	<?php get_template_part( 'resources/views/entry/archive/' . get_post_type() ); ?>

<?php } ?>
