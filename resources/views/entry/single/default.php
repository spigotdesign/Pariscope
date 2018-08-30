<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<?php if ( class_exists( 'FLBuilderModel' ) && !FLBuilderModel::is_builder_enabled() ) : ?>

		<header class="entry__header">
			<?php Hybrid\Post\display_title() ?>
		</header>
	
	<?php endif; ?>

	<div class="entry__content">
		<?php the_content() ?>
		<?php Hybrid\View\display( 'nav/pagination', 'post' ) ?>
	</div>

</article>
