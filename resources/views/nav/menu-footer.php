<?php if ( has_nav_menu( 'footer' ) ) { ?>

	<nav class="menu menu--footer">

		<h3 class="menu__title screen-reader-text">Work with Us</h3>
	
		<?php wp_nav_menu( [
			'theme_location' => 'footer',
			'container'      => '',
			'menu_id'        => '',
			'menu_class'     => 'menu__items',
			'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			'item_spacing'   => 'discard',
			'walker'		 => new Pariscope_Walker()
			
		] ) ?>

	</nav>

<?php } ?>