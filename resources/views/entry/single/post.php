<div class="container c-medium">
	<div class="entry__content">
		<div class="entry__content--main">
			<?php the_content(); ?>
		</div>
		
		<footer class="entry__content--footer">
		<nav class="entry__content--footer-tax">
			<?php pariscope_entry_footer(); ?>
		</nav>
		
		<nav class="post-nav">
			<?php get_template_part( 'resources/views/nav/post', 'nav' ); ?>
		</nav>

		</footer>

	</div>

	<?php get_template_part( 'resources/views/sidebar/post', 'sidebar' ); ?>

</div>

</article>





<?php if ( comments_open() ) : ?>
				
	<?php comments_template('/resources/views/comments/comments.php'); ?>

<?php endif; ?>