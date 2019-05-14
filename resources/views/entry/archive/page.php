<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<?php Hybrid\Carbon\Image::display( ['featured','attached'], ['size' =>'post-thumb', 'link' => true] ); ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title() ?>
	</header>

	<div class="entry__summary">
		<?php $content = get_the_content(); ?>
		<?php echo wp_trim_words( $content , '17' ); ?>
	</div>

	<footer class="entry__footer">
		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'category' ] ) ?>
		<?php Hybrid\Post\display_date() ?>
	</footer>

</article>