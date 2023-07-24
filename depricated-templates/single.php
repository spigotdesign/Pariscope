<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pariscope
 */

get_header(); ?>

	<main>

		<?php if (have_posts()): ?>
	
			<?php while (have_posts()):the_post(); ?>

				<?php get_template_part( 'resources/views/content/content', get_post_type() ); ?>

				<?php get_template_part( 'resources/views/nav/post', 'nav' ); ?>

				<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer();