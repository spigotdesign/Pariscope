<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

	<?php pariscope_post_thumbnail('post-thumbnail'); ?>

	<div class="entry__summary">
		<h2 class="entry__summary--title">
			<a class="entry__permlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<?php pariscope_entry_meta(); ?>
		
		<div class="entry__summary--excerpt">
			<?php $content = get_the_content(); ?>
			<p><?php echo wp_trim_words( $content , '21' ); ?></p>
		</div>

		<a class="entry__summary--link" href="<?php the_permalink(); ?>"><?php echo do_shortcode( "[read_meter]" ); ?></a>
	</div>

</article>