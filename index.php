<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pariscope
 */

get_header(); ?>

	<main>

		<?php get_template_part( 'resources/views/header', 'default-header' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php while (have_posts()):the_post(); ?>
				
				<?php get_template_part( 'resources/views/content/content', get_post_type() ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'resources/views/content/content', 'none' ) ?>

		<?php endif; ?>

	</main>

<?php get_footer();
