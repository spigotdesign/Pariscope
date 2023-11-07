<?php if ( is_active_sidebar( 'single-post' ) ) : ?>

	<aside class="sidebar sidebar--single-post">
	
		<h3 class="sidebar__title screen-reader-text">
			Primary Sidebar
		</h3>

		<?php dynamic_sidebar( 'single-post' ) ?>

	</aside>

<?php endif ?>
