<?php if ( has_post_thumbnail() ) { ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>

<div class="page-head page-head--bgimg" style="background-image: url(<?php echo $url; ?>);">

	<div class="page-head__content">

		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'category' ] ) ?>

		<h1 class="page-head__title"><span><?php the_title(); ?></span></h1>

		<?php $post_author_id = get_post_field( 'post_author', get_the_ID() ); ?>

		<span class="entry__author">
			<?php if ( function_exists( 'coauthors_posts_links' ) ) {
    				coauthors_posts_links();
			} else {
    				the_author_posts_link();
			} ?>
		</span> 

		<?php Hybrid\Post\display_date() ?>

	</div>

</div>

<?php } else { ?>

<div class="page-head page-head--no-bg">

	<div class="page-head__content">

		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'category' ] ) ?>

		<h1 class="page-head__title"><span><?php the_title(); ?></span></h1>

		<?php $post_author_id = get_post_field( 'post_author', get_the_ID() ); ?>

		<span class="entry__author">
			<?php if ( function_exists( 'coauthors_posts_links' ) ) {
    				coauthors_posts_links();
			} else {
    				the_author_posts_link();
			} ?>
		</span> 

		<?php Hybrid\Post\display_date() ?>

	</div>

</div>

<?php } ?>