<nav class="post-nav">

	<?php if(get_next_post_link() ) { ?>

		<?php next_post_link( '%link', '&laquo; Previous Post' ); ?>
				
	<?php } ?>

	<?php if(get_previous_post_link() ) { ?>
			
			<?php previous_post_link( '%link', 'Next Post &raquo;' ); ?>

	<?php } ?>

</nav>