<?php
/**
 * The template for displaying archive pages
 *
 * @package Pariscope
 * 
 */

get_header(); ?>

	<main>

		<?php if ( have_posts() ) : ?>

			<?php get_template_part( 'resources/views/header', 'archive-header' ); ?>


			<?php while (have_posts()):the_post(); ?>
				
				<?php get_template_part( 'resources/views/content/content', get_post_type() ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'resources/views/content/content', 'none' ) ?>

		<?php endif; ?>

	</main>

<?php get_footer();