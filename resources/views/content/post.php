<div class="app-content">

	<main id="main" class="app-main">

		<?php if ( !class_exists( 'FLBuilderModel' ) || class_exists( 'FLBuilderModel' ) && !FLBuilderModel::is_builder_enabled() ) : ?>

			<?php Hybrid\View\display( 'header', 'post-header' ) ?>

		<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php Hybrid\View\display( 'entry/single', Hybrid\Post\hierarchy() ) ?>

				<?php comments_template() ?>

			<?php endwhile ?>

		<?php endif ?>

	</main>

</div>