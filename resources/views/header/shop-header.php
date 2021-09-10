<?php $shopID = get_page_by_path('shop', 'page'); ?>

<?php global $wp_query; ?>
<?php $cat = $wp_query->get_queried_object(); ?>
<?php $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true ); ?>

<?php if ( is_shop() ) { ?>
		
	<?php $image = get_the_post_thumbnail_url( $shopID->ID, 'full'); ?>
		
<?php } elseif ( is_product_category() || is_product_tag() ){ ?>

	<?php $image = wp_get_attachment_url( $thumbnail_id ); ?>
	
<?php } ?>

<?php if( $image ) { ?>

	<div class="shop-head shop-head--bgimg" style="background-image: url(<?php echo $image; ?>)">
		
<?php } else { ?>

<div class="shop-head shop-head--no-bg">

<?php } ?>

	<div class="shop-head__content">
		
		<?php $term_vals = get_term_meta($cat->term_id); ?>
		
		<?php print_r($term_vals); ?>
		
		<?php if ( is_shop() ) { ?>
			
			<h1 class="shop-head__title"><span><?php echo get_the_title($shopID->ID) ?></span></h1>
			
			<?php echo apply_filters( 'the_content', $shopID->post_content );?>
			
		<?php } elseif ( is_product_category() || is_product_tag() ) { ?>
		
			<h1 class="shop-head__title"><span><?php the_archive_title() ?></span></h1>
			
			<?php the_archive_description( '<div class="shoip-head__desc">', '</div>' ); ?>
			
		<?php } ?>
		
	</div>

</div>