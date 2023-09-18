<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	
	<div class="entry__content">
		<?php the_content(); ?>
	</div>

	<footer class="entry__footer">
		<?php pariscope_entry_footer(); ?>
	</footer>

</article>

<nav class="post-nav">

	<?php get_template_part( 'resources/views/nav/post', 'nav' ); ?>

</nav>

<?php if ( comments_open() ) : ?>
				
	<?php comments_template('/resources/views/comments/comments.php'); ?>

<?php endif; ?>