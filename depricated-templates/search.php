<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Pariscope
 */

get_header(); ?>

	<main>

		<?php if ( have_posts() ) : ?>

			<?php get_template_part( 'resources/views/header', 'search-header' ); ?>

			<?php if (have_posts()): ?>
	
				<?php while (have_posts()):the_post(); ?>

					<?php get_template_part( 'resources/views/entry/archive/' . get_post_type() ); ?>

				<?php endwhile; ?>

			<?php endif; ?>


			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'resources/views/content/content', 'none' ); ?>

		<?php endif; ?>

	</main>

<?php get_footer();
