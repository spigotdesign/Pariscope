<?php if ( is_active_sidebar( $data->name ) ) : ?>

	<aside <?php Hybrid\Attr\display( 'sidebar', $data->name ) ?>>

		<h3 class="sidebar__title screen-reader-text">
			<?php Hybrid\Sidebar\display_name( $data->name ) ?>
		</h3>

		<?php dynamic_sidebar( $data->name ) ?>

	</aside>

<?php endif ?>
