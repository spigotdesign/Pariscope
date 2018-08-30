<article <?php Hybrid\Attr\display( 'entry' )?>>

	<?php if ( class_exists( 'FLBuilderModel' ) && !FLBuilderModel::is_builder_enabled() ) : ?>
		<header class="entry__header">
			<h1 class="entry__title"><?php single_post_title() ?></h1>
		</header>
	<?php endif; ?>

	<div class="entry__content">
		<?php the_content() ?>
	</div>

</article>
