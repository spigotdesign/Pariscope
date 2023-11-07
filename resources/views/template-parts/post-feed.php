<?php // Post Feed Template Part ?>



<?php $post_feed = new WP_Query(['cache_results' => true, 'posts_per_page' => 3 ]); ?>

	<?php if ( $post_feed->have_posts()): ?>

		<div class="feed">

  		<?php while ($post_feed->have_posts()):$post_feed->the_post(); ?>

    		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

				<?php pariscope_post_thumbnail('post-vignette'); ?>

				<span class="entry__meta">
					<?php pariscope_entry_meta(); ?>
				</span>

				<h2 class="entry__title">
					<a class="entry__permlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				
				<div class="entry__summary">
					<?php $content = get_the_content(); ?>
					<p><?php echo wp_trim_words( $content , '13' ); ?></p>
				</div>

			</article>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>
  
 <?php  wp_reset_postdata(); ?>


