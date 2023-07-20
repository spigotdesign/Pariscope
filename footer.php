<?php
/**
 * Site footer template
 *
 *
 * @package Pariscope
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pariscope' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'pariscope' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'pariscope' ), 'pariscope', '<a href="https://spigotdesign.com/">Spigot</a>' );
			?>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
