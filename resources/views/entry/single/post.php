<article class=""> 
	
	<div class="entry__content">
		<?php the_content() ?>
	</div>

</article>

<?php if ( comments_open() ) : ?>
				
	<?php comments_template('/resources/views/comments/comments.php'); ?>

<?php endif; ?>