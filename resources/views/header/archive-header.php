<?php if ( ! is_front_page() ) : ?>

<?php $blogID = get_page_by_path('blog', 'page'); ?>

<?php global $wp_query; ?>
<?php $cat = $wp_query->get_queried_object(); ?>
<?php $thumbnail_url = get_term_meta( $cat->term_id, 'tax_image_url_universal', true ); ?>

<?php if (is_home() ) { ?>

	<?php $image = get_the_post_thumbnail_url( $blogID->ID, 'full'); ?>
	
<?php } else { ?>

	<?php $image = $thumbnail_url; ?>
	
<?php } ?>

	<?php if ($image) { ?>
	
	<div class="page-head page-head--bgimg" style="background-image: url(<?php echo $image; ?>)">
		
	<?php } else { ?>
	
	<div class="page-head page-head--no-bg">
	
	<?php } ?>
		
		<div class="page-head__content">
	
			<h1 class="page-head__title archive-header__title"><?php if (is_author()) {?>Posts by <?php } ?><?php the_archive_title() ?></h1>
	
			<?php if ( ! is_paged() && get_the_archive_description() ) : ?>
	
				<div class="page-head__description">
					<?php the_archive_description() ?>
				</div>
	
			<?php endif ?>
		
		</div>

	</div>

<?php endif ?>
