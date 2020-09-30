<nav class="post-nav">

	<?php if(get_next_post_link() ) { ?>

		<?php next_post_link( '%link', '&laquo; Next Exhibit' ); ?>
				
	<?php } ?>

	<a href="<?php bloginfo('url'); ?>/exhibits">All Exhibits</a>

	<?php if(get_previous_post_link() ) { ?>
			
			<?php previous_post_link( '%link', 'Previous Exhibit &raquo;' ); ?>

	<?php } ?>

</nav>