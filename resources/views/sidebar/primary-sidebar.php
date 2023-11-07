<?php if ( is_active_sidebar( 'primary' ) ) : ?>

	<aside class="sidebar sidebar--primary">
	
		<h3 class="sidebar__title screen-reader-text">
			Primary Sidebar
		</h3>

		<?php dynamic_sidebar( 'primary' ) ?>

	</aside>

<?php endif ?>
