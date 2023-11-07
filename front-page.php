<?php
/* Template Name: Front Page
 * Template Post Type: page
*/
?>

<?php get_header(); ?>

	

	<main id="main">

		<?php if (have_posts()): ?>
	
			<?php while (have_posts()):the_post(); ?>

			<div class="content-sections">

				<section class="section section-marquee marquee bg_1">
					<div class="container c-wide c-start">
						<div class="container-content">
							<?php the_field('marquee_content'); ?>
							<?php the_field('dark-hero-image'); ?>
						</div>
					</div>
				</section>

				<section class="section section-about about bg_2">
					<div class="container c-medium c-start">
						<div class="container-content">
							<?php the_field('about_content'); ?>
						</div>
					</div>
				</section>

				<section class="section section-projects projects bg_3">
					<div class="container c-narrow c-center">
						<div class="container-content">
							<?php get_template_part( 'resources/views/template-parts/project', 'list' ); ?>
						</div>
					</div>
				</section>

				<section class="section section-capabilities capabilites bg_4">
					<div class="container c-wide c-start">
						<div class="container-content">
							<?php get_template_part( 'resources/views/template-parts/capabilities' ); ?>
						</div>
					</div>
				</section>

				<section class="section section-clients feed bg_5">
					<div class="container c-wide c-start">
						<div class="container-content">
							<?php get_template_part( 'resources/views/template-parts/client', 'list' ); ?>
							
						</div>
					</div>
				</section>

				<section class="section section-feed feed bg_6">
					<div class="container c-medium c-start">
						<div class="container-content">
							<?php the_field('feed_content'); ?>
							<?php get_template_part( 'resources/views/template-parts/post', 'feed' ); ?>
						</div>
					</div>
				</section>

				<section class="section section-cta cta bg_7">
					<div class="container c-medium c-start">
						<div class="container-content">
							<?php the_field('cta_content'); ?>
						</div>
					</div>
				</section>


			</div>

				
				<div class="lunar-base">
					<?php the_field('marquee_bg'); ?>
					<?php the_field('about_bg'); ?>
					<?php the_field('projects_bg'); ?>
					<?php the_field('services_bg'); ?>
					<?php the_field('client_content_clients_bg'); ?>
					<?php the_field('feed_bg'); ?>
					<?php the_field('cta_bg'); ?>
				</div>
				
			<?php endwhile; ?>

		<?php endif; ?>

	</main>

<?php get_footer();