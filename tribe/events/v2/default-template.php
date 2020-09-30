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

<?php use Tribe\Events\Views\V2\Template_Bootstrap; ?>

<?php Hybrid\View\display( 'header', Hybrid\Template\hierarchy() ); ?>

<div class="app-content">

	<main id="main" class="app-main">

		<?php echo tribe( Template_Bootstrap::class )->get_view_html(); ?>

	</main>
		
	
</div>

<?php Hybrid\View\display( 'footer', Hybrid\Template\hierarchy() ); ?>
