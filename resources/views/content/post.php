<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Pariscope
 */

?>
This is the main 'post' template
<?php if( is_singular() ) { ?>

	<?php get_template_part( 'resources/views/entry/single/post' ); ?>

<?php } else { ?>

	<?php get_template_part( 'resources/views/entry/archive/post' ); ?>

<?php } ?>