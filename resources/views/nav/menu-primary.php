<?php if ( has_nav_menu( 'primary' ) ) { ?>

	<nav class="menu menu--primary">

		<h3 class="menu__title screen-reader-text">Primary Menu</h3>
	
		<?php wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => '',
			'menu_id'        => '',
			'menu_class'     => 'menu__items',
			'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			'item_spacing'   => 'discard',
			'walker'		 => new Pariscope_Walker()
		] ) ?>

	</nav>

	<?php // get_search_form(); ?>

<?php } ?>