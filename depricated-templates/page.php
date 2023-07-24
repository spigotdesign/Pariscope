<?php
/**
 * The template for displaying pages
 *
 * @package Pariscope
 */

get_header(); ?>

	<main>

		<?php if (have_posts()): ?>
	
			<?php while (have_posts()):the_post(); ?>

				<?php get_template_part( 'resources/views/content/page' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer();
