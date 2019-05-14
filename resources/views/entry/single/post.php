<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<?php if ( !class_exists( 'FLBuilderModel' ) || class_exists( 'FLBuilderModel' ) && !FLBuilderModel::is_builder_enabled() ) : ?>

	<div class="entry__content">
		<?php the_content() ?>
		<?php Hybrid\View\display( 'nav/pagination', 'post' ) ?>
	</div>

	<footer class="entry__footer">
		
		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'category', 'before' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 44 32"><title>category</title><path d="M28.5 19.5l1-1h-15l1 1v-3.333c0-0.552-0.448-1-1-1h-11.667c-0.552 0-1 0.448-1 1v13.333c0 0.552 0.448 1 1 1h38.333c0.552 0 1-0.448 1-1v-13.333c0-0.552-0.448-1-1-1h-11.667c-0.552 0-1 0.448-1 1v3.333zM29.5 17.167h11.667l-1-1v13.333l1-1h-38.333l1 1v-13.333l-1 1h11.667l-1-1v3.333c0 0.552 0.448 1 1 1h15c0.552 0 1-0.448 1-1v-3.333l-1 1z"></path><path d="M26.167 17.167c0.552 0 1-0.448 1-1s-0.448-1-1-1h-8.333c-0.552 0-1 0.448-1 1s0.448 1 1 1h8.333z"></path><path d="M37.833 13.833c0.552 0 1-0.448 1-1s-0.448-1-1-1h-31.667c-0.552 0-1 0.448-1 1s0.448 1 1 1h31.667z"></path><path d="M37.833 10.5c0.552 0 1-0.448 1-1s-0.448-1-1-1h-31.667c-0.552 0-1 0.448-1 1s0.448 1 1 1h31.667z"></path><path d="M37.833 7.167c0.552 0 1-0.448 1-1s-0.448-1-1-1h-31.667c-0.552 0-1 0.448-1 1s0.448 1 1 1h31.667z"></path><path d="M37.833 3.833c0.552 0 1-0.448 1-1s-0.448-1-1-1h-31.667c-0.552 0-1 0.448-1 1s0.448 1 1 1h31.667z"></path></svg>' ] ) ?>
		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'post_tag', 'before' => '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32"><title>tags</title><path d="M18.516 29.425h1.029l-16.97-16.97 0.213 0.514v-8.485l-0.727 0.727h8.485l-0.514-0.213 16.97 16.97v-1.029l-8.485 8.485zM28.029 20.94l-16.97-16.97c-0.136-0.136-0.321-0.213-0.514-0.213h-8.485c-0.402 0-0.727 0.326-0.727 0.727v8.485c0 0.193 0.077 0.378 0.213 0.514l16.97 16.97c0.284 0.284 0.744 0.284 1.029 0l8.485-8.485c0.284-0.284 0.284-0.744 0-1.029z"></path><path d="M14.182 2.788l-0.514-0.213 15.758 15.758v-1.029l-1.212 1.212c-0.284 0.284-0.284 0.744 0 1.029s0.744 0.284 1.029 0l1.212-1.212c0.284-0.284 0.284-0.744 0-1.029l-15.758-15.758c-0.136-0.136-0.321-0.213-0.514-0.213h-8.485c-0.402 0-0.727 0.326-0.727 0.727s0.326 0.727 0.727 0.727h8.485z"></path><path d="M7.515 11.030c-0.602 0-1.091-0.489-1.091-1.091s0.489-1.091 1.091-1.091c0.602 0 1.091 0.489 1.091 1.091s-0.489 1.091-1.091 1.091zM7.515 7.394c-1.405 0-2.545 1.14-2.545 2.545s1.14 2.545 2.545 2.545c1.405 0 2.545-1.14 2.545-2.545s-1.14-2.545-2.545-2.545z"></path></svg>' ] ) ?>
	</footer>

	<?php else : ?>

	<div class="entry__content">
		<?php the_content() ?>
		<?php Hybrid\View\display( 'nav/pagination', 'post' ) ?>
	</div>


	<?php endif; ?>

</article>

<?php Hybrid\View\display( 'nav', 'postnav' ) ?>
