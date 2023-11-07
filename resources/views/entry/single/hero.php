		
<?php $image = get_the_post_thumbnail_url( get_the_ID(), 'full'); ?>

<article class="featured-post" style="background-image: url(<?php echo $image; ?>)">
	
	<div class="featured-post__content">
		
		<span class="featured-post__content--meta">Featured Post</span>
		
		<h2 class="featured-post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<a class="featured-post__content--link" href="<?php the_permalink(); ?>"><?php echo do_shortcode( "[read_meter]" ); ?></a>
		
	</div>

</article>
