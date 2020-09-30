<?php $start_date = get_field('start_date'); ?>
<?php $end_date = get_field('end_date'); ?>

<?php if( $end_date < date('Ymd')) {
					
		$exhibit_section_title = 'Past';
		$exhibit_class = 'past-exhibit';
		
	} elseif ($start_date < date('Ymd') && $end_date > date('Ymd') ) {
		
		$exhibit_section_title ='Current '; 
		$exhibit_class = 'current-exhibit';

	} else {

		$exhibit_section_title ='Upcoming';
		$exhibit_class = 'upcoming-exhibit';

}; ?>



<article <?php Hybrid\Attr\display( 'entry', $exhibit_class ) ?>>

	<?php Hybrid\Carbon\Image::display( ['featured','attached'], ['size' =>'post-thumb', 'link' => true] ); ?>

	<header class="entry__header">
		<?php Hybrid\Post\display_title() ?>
	</header>

	<div class="entry__summary">
		<?php the_excerpt() ?>
	</div>

	<div class="entry__footer">

		On Display: <?php echo DateTime::createFromFormat('Ymd', get_field('start_date'))->format('F j, Y');  ?>  - <?php echo DateTime::createFromFormat('Ymd', get_field('end_date'))->format('F j, Y');  ?>
	</div>

	<div class="corner-ribbon"><?php echo $exhibit_section_title; ?></div>

</article>
