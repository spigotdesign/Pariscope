<?php if ( has_post_thumbnail() ) { ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="page-head page-head--bgimg" style="background-image: url(<?php echo $url; ?>);">

	<div class="page-head__content">

		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'category' ] ) ?>

		<h1 class="page-head__title"><span><?php the_title(); ?></span></h1>

		 <span class="event__date"><?php echo tribe_get_start_date( $post->ID, false, 'F j, Y' ); ?></span>

	</div>

</div>

<?php } else { ?>

<div class="page-head no-bg">

	<div class="page-head__content">

		<?php Hybrid\Post\display_terms( [ 'taxonomy' => 'category' ] ) ?>

		<h1 class="page-head__title"><span><?php the_title(); ?></span></h1>

		<span class="event__date"><?php echo tribe_get_start_date( $post->ID, false, 'F j, Y' ); ?></span>

	</div>

</div>

<?php } ?>