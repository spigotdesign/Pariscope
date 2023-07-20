<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pariscope
 */

get_header(); ?>

	<main>

		<?php if (have_posts()): ?>
	
			<?php while (have_posts()):the_post(); ?>

				<?php get_template_part( 'resources/views/content/content', 'page' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer();
