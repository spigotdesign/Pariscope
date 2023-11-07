<?php
/**
 * Site footer template
 *
 *
 * @package Pariscope
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-footer__branding">
		<a class="site-header__branding-link" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<img src="<?php echo get_stylesheet_directory_uri() . '/dist/svg/spigot-footer.svg'; ?>" />
		</a>
	</div>

	<div class="site-footer__nav-copyright">
		<?php get_template_part( 'resources/views/nav/menu', 'footer' ); ?>
		<p>&copy; <?php date('Y'); ?> Spigot. <a href="https://creativecommons.org/licenses/by/4.0/">Some rights reserved</a>.</p>
	</div>

</footer>


<?php wp_footer(); ?>

</body>
</html>
