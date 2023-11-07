<?php
/**
 * The main template file
 *
 * @package Pariscope
 * 
 */

get_header(); ?>

<main id="main">

    <?php get_template_part( 'resources/views/header/blog', 'header' ); ?>

    <?php if (have_posts()): ?>

		<div class="constrain-that-sheet">

			<div class="article-list">

				<?php while (have_posts()):the_post(); ?>

					<?php get_template_part( 'resources/views/content/' . get_post_type() ); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

		<?php get_template_part( 'resources/views/sidebar/primary', 'sidebar' ); ?>

		</div>

		<?php get_template_part( 'resources/views/nav/posts', 'nav'); ?>

</main>

<?php get_footer();