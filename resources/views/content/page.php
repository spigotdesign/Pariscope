<div class="app-content">

	<main id="main" class="app-main">
		
		<?php if (is_cart() || is_checkout() || is_account_page() ) { ?>
		
			<?php the_content() ?>
		
		<?php } else { ?>

			<?php if ( !class_exists( 'FLBuilderModel' ) || class_exists( 'FLBuilderModel' ) && !FLBuilderModel::is_builder_enabled() ) : ?>
			
				<?php  Hybrid\View\display( 'header', 'page-header' ) ?>
	
			<?php endif; ?>
	
			<?php if ( have_posts() ) : ?>
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php Hybrid\View\display( 'entry/single', Hybrid\Post\hierarchy() ) ?>
	
				<?php endwhile; ?>
	
			<?php endif; ?>
			
		<?php } ?>

	</main>

	<?php // Hybrid\View\display( 'sidebar', 'primary', [ 'name' => 'primary' ] ) ?>

</div>
