<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<a href="<?php the_permalink() ?>">

		<?php the_post_thumbnail( 'single-post-thumbnail', [ 'class' => 'entry__image' ] ) ?>

		<header class="entry__header">
			<?php Hybrid\Post\display_title() ?>

			<div class="entry__byline">
				<?php Hybrid\Post\display_author() ?>
				<?php Hybrid\Post\display_date( [ 'before' => Pariscope\sep() ] ) ?>
				<?php Hybrid\Post\display_comments_link( [ 'before' => Pariscope\sep() ] ) ?>
			</div>
		</header>

		<div class="entry__summary">
			<?php the_excerpt() ?>
		</div>

	</a>

</article>
