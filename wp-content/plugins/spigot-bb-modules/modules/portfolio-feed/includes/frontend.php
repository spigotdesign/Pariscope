<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

?>
<?php $cpt_feed = new WP_Query( 

		array( 
			'post_type' => 'portfolio', 
			'posts_per_page' => $settings->portfolio_items, 
			'orderby' => 'rand') 
		); ?>
				
	<?php if ( $cpt_feed->have_posts() ) :?>

		<div class='portfolio-list'>
				
		<?php while ( $cpt_feed->have_posts() ) : $cpt_feed->the_post(); ?>

			<?php $bgImage 	= esc_html(get_field('project_thumbnail')); ?>
			<?php $bgURL 	= wp_get_attachment_image_src($bgImage, 'full'); ?>

			<figure class="portfolio__item " style="background-image: url(<?php echo $bgURL[0]; ?>);" onclick="">

				<a class="hover-link" href="<?php the_permalink(); ?>">

				<figcaption>

					<h2 class="portfolio__item--title"><a href="<?php the_permalink(); ?>"><?php the_field('logo'); ?> <span><?php the_title(); ?></span></a></h2>

					<ul class="icon-list">

					<?php if( get_field('project_link') ) { ?> 
						<li class="icon-list__item">
							<a href="<?php the_field('project_link') ?>">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
								<title>external</title>
								<path d="M17.188 15.796l13.913-13.913c0.272-0.272 0.272-0.712 0-0.984s-0.712-0.272-0.984 0l-13.913 13.913c-0.272 0.272-0.272 0.712 0 0.984s0.712 0.272 0.984 0v0z"></path>
								<path d="M22.261 2.087h8.348l-0.696-0.696v8.348c0 0.384 0.311 0.696 0.696 0.696s0.696-0.311 0.696-0.696v-8.348c0-0.384-0.311-0.696-0.696-0.696h-8.348c-0.384 0-0.696 0.311-0.696 0.696s0.311 0.696 0.696 0.696v0z"></path>
								<path d="M16 0.696c-8.452 0-15.304 6.852-15.304 15.304s6.852 15.304 15.304 15.304c8.452 0 15.304-6.852 15.304-15.304 0-0.384-0.311-0.696-0.696-0.696s-0.696 0.311-0.696 0.696c0 7.684-6.229 13.913-13.913 13.913s-13.913-6.229-13.913-13.913c0-7.684 6.229-13.913 13.913-13.913 0.384 0 0.696-0.311 0.696-0.696s-0.311-0.696-0.696-0.696v0z"></path>
								</svg>

							</a>
						</li>
					<?php } ?>

					<li class="icon-list__item">
						<a href="<?php the_permalink();?>">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
							<title>search</title>
							<path d="M20.804 21.833l9.193 9.19c0.284 0.284 0.745 0.284 1.029-0s0.284-0.745-0-1.029l-9.193-9.19c-0.284-0.284-0.745-0.284-1.029 0s-0.284 0.745 0 1.029v0z"></path>
							<path d="M21.833 4.348c-4.828-4.828-12.657-4.828-17.483 0-4.831 4.828-4.831 12.654 0 17.485 4.825 4.825 12.654 4.825 17.482 0 4.828-4.831 4.828-12.657 0-17.485v0zM20.804 5.377c4.26 4.26 4.26 11.165-0 15.428-4.26 4.257-11.168 4.257-15.425-0-4.263-4.263-4.263-11.168-0-15.428 4.257-4.26 11.165-4.26 15.425-0v0z"></path>
							</svg>
						</a>
					</li>
					
					<?php if ( !is_post_type_archive('portfolio') ) { ?>
						<li class="icon-list__item">
							<a href="<?php bloginfo('url') ?>/work">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
									<title>all</title>
									<path d="M14 13.333h-13.333l0.667 0.667v-13.333l-0.667 0.667h13.333l-0.667-0.667v13.333l0.667-0.667zM14 14.667c0.368 0 0.667-0.298 0.667-0.667v-13.333c0-0.368-0.298-0.667-0.667-0.667h-13.333c-0.368 0-0.667 0.298-0.667 0.667v13.333c0 0.368 0.298 0.667 0.667 0.667h13.333z"></path>
									<path d="M31.333 13.333h-13.333l0.667 0.667v-13.333l-0.667 0.667h13.333l-0.667-0.667v13.333l0.667-0.667zM31.333 14.667c0.368 0 0.667-0.298 0.667-0.667v-13.333c0-0.368-0.298-0.667-0.667-0.667h-13.333c-0.368 0-0.667 0.298-0.667 0.667v13.333c0 0.368 0.298 0.667 0.667 0.667h13.333z"></path>
									<path d="M14 30.667h-13.333l0.667 0.667v-13.333l-0.667 0.667h13.333l-0.667-0.667v13.333l0.667-0.667zM14 32c0.368 0 0.667-0.298 0.667-0.667v-13.333c0-0.368-0.298-0.667-0.667-0.667h-13.333c-0.368 0-0.667 0.298-0.667 0.667v13.333c0 0.368 0.298 0.667 0.667 0.667h13.333z"></path>
									<path d="M31.333 30.667h-13.333l0.667 0.667v-13.333l-0.667 0.667h13.333l-0.667-0.667v13.333l0.667-0.667zM31.333 32c0.368 0 0.667-0.298 0.667-0.667v-13.333c0-0.368-0.298-0.667-0.667-0.667h-13.333c-0.368 0-0.667 0.298-0.667 0.667v13.333c0 0.368 0.298 0.667 0.667 0.667h13.333z"></path>
								</svg>
							</a>
						</li>
					<?php } ?>
				</ul>
				
				</figcaption>

				</a>
						
			</figure>

		<?php endwhile; ?>

		</div>

	<?php endif; wp_reset_query(); ?>