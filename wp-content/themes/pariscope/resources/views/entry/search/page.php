<article <?php Hybrid\Attr\display( 'entry' )?>>

	<header class="entry__header">
		<h2 class="entry__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

		<div class="entry__byline">
			<?php Hybrid\Post\display_author() ?>
			<?php Hybrid\Post\display_date( [ 'before' => Pariscope\sep() ] ) ?>
			<?php Hybrid\Post\display_comments_link( [ 'before' => Pariscope\sep() ] ) ?>
		</div>
	</header>

	<div class="entry__summary">
		<?php the_excerpt() ?>This is /search/page.php
	</div>

</article>
