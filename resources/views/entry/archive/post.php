<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

	<?php pariscope_post_thumbnail(); ?>

	<h2 class="entry__title">
		<a class="entry__permlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	
	<div class="entry__summary">
		<?php $content = get_the_content(); ?>
		<p><?php echo wp_trim_words( $content , '13' ); ?></p>
	</div>

</article>