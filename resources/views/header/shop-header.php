<?php $image = get_the_post_thumbnail_url( $ID, 'full'); ?>

<?php if( $image ) { ?>

<div class="page-head page-head--bgimg" style="background-image: url(<?php echo $image; ?>)">

<?php } else { ?>

<div class="page-head page-head--no-bg">

<?php } ?>

	<div class="page-head__content">

		<h1 class="page-head__title"><span><?php single_post_title() ?></span></h1>

	</div>

</div>