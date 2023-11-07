<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Pariscope
 */

?>

<?php if( is_singular() && !is_front_page() ) { ?>

	<?php get_template_part( 'resources/views/header/post'); ?>

	<?php get_template_part( 'resources/views/entry/single/post' ); ?>

<?php } else { ?>

	<?php get_template_part( 'resources/views/entry/archive/post' ); ?>

<?php } ?>