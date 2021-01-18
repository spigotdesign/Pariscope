<?php if (class_exists('WooCommerce')) { ?>

<?php if (is_cart() || is_checkout() || is_account_page()) { ?>

	<?php the_content(); ?>
	
<?php } ?>

<?php } else { ?>

<article <?php Hybrid\Attr\display('entry'); ?>>

	<div class="entry__content">
		<?php the_content(); ?>
	</div>

</article>

<?php } ?>
