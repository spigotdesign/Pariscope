<div class="app-content">

	<main id="main" class="app-main">

		<?php Hybrid\View\display( 'header', 'archive-header' ) ?>

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