<div class="app-content">
	
	<main id="main" class="app-main">

	<?php if ( is_shop() || is_product_category() || is_product_tag() ) { ?>

		<?php Hybrid\View\display('header', 'shop-header'); ?>
		
		<div class="shop-main">
			
			<div class="shop-content">

				<?php woocommerce_content(); ?>
				
			</div>
			
			<?php Hybrid\View\display( 'sidebar', 'shop', [ 'name' => 'shop' ] ) ?>
			
		</div>

	<?php } else { // Cart & Checkout ?>

	<main id="main" class="app-main">
		
		<?php woocommerce_output_all_notices(); ?>
		
		<div class="product-content">
		<?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>
	
		   <?php woocommerce_breadcrumb(); ?>
	
    	<?php endif; ?>

		<?php woocommerce_content() ?>
		</div>

	<?php } ?>
	
	</main>
	
	

</div>