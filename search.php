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

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'pariscope' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<?php if (have_posts()): ?>
	
				<?php while (have_posts()):the_post(); ?>

					<?php get_template_part( 'resources/views/content/content', 'search' ); ?>

				<?php endwhile; ?>

			<?php endif; ?>


			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'resources/views/content/content', 'none' ); ?>

		<?php endif; ?>

	</main>

<?php get_footer();
