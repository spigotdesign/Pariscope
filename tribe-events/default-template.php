<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package Syopajatyo
 */
?>

<?php Hybrid\View\display( 'header', Hybrid\Template\hierarchy() ); ?>

<div class="app-content">

	<main id="main" class="app-main">

		<?php if(is_singular()) { ?> 

			<?php Hybrid\View\display( 'header', 'event-header' ) ?>

		<?php } ?>

			<?php //tribe_events_before_html(); ?>
			<?php tribe_get_view(); ?>
			<?php tribe_events_after_html(); ?>
	</main>
		
	
</div>

<?php Hybrid\View\display( 'footer', Hybrid\Template\hierarchy() ); ?>
