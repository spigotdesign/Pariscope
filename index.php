<?php
/**
 * The main template file
 *
 * @package Pariscope
 * 
 */

get_header(); ?>

	<main id="main">

		<?php if (have_posts()): ?>
	
			<?php while (have_posts()):the_post(); ?>

				<?php get_template_part( 'resources/views/content/' . get_post_type() ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer();