<div class="app-content">

	<main id="main" class="app-main">

		<div class="archive-header">

			<h1 class="archive-header__title">Tozer Gallery Exhibits</h1>

			<?php if ( ! is_paged() && get_the_archive_description() ) : ?>

				<div class="archive-header__description">
					<?php the_archive_description() ?>
				</div>

			<?php endif ?>

		</div>

		<?php if ( have_posts() ) : ?>

			<div class="post-list">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php Hybrid\View\display( 'entry/archive', Hybrid\Post\hierarchy() ) ?>

				<?php endwhile ?>

			</div>

			<?php Hybrid\View\display( 'nav/pagination', 'posts' ) ?>

		<?php endif ?>

	</main>

</div>
 