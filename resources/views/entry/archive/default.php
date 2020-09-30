<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<?php Hybrid\Carbon\Image::display( ['featured','attached'], ['size' =>'post-thumb', 'link' => true] ); ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title() ?>
	</header>

	<div class="entry__summary">
		<?php the_excerpt() ?>
	</div>

</article>
