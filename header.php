<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/dist/svg/spigot-fav.svg' ; ?>" type="image/svg+xml">
	
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content' ) ?></a>

	<div class="preload">Loading...</div>

	<header id="site-header" class="site-header">
		
		<div class="site-header__branding">
			<a class="site-header__branding-link" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">

				<img src="<?php echo get_stylesheet_directory_uri() . '/dist/svg/spigot-current.svg'; ?>" />

			</a>
		</div>
		
		<div class="site-header__nav">

			<?php get_template_part( 'resources/views/nav/menu', 'primary' ); ?>

			<?php // get_template_part( 'resources/views/nav/menu', 'cta' ); ?>

			<?php get_template_part( 'resources/views/nav/menu', 'toggle' ); ?>

		</div>

	</header>
