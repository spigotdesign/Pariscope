<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<?php Hybrid\Carbon\Image::display( ['featured','attached'], ['size' =>'post-thumb', 'link' => true] ); ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title() ?>
	</header>

	<div class="entry__summary">
		<?php $content = get_the_content(); ?>
		<?php echo wp_trim_words( $content , '17' ); ?>
		
		<a class="readmore" href="<?php the_permalink(); ?>">Read More</a>
	</div>

</article>
