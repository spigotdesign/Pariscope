<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="page-head page-head--bgimg exhibit-head" style="background-image: url(<?php echo $url; ?>);">

	<div class="page-head__content">
		
		<?php $start_date = get_field('start_date'); ?>
		<?php $end_date = get_field('end_date'); ?>
			
		
		<?php if( $end_date < date('Ymd')) {
					
					$exhibit_section_title = 'Past Exhibit';
				
			} elseif ($start_date < date('Ymd') && $end_date > date('Ymd') ) {
				
				$exhibit_section_title ='Current Exhibit'; 

			} else {

				$exhibit_section_title ='Upcoming Exhibit'; 

		}; ?>

		<span style="color: white;" class="page-head__section-title"><?php echo $exhibit_section_title; ?></span>

		<h1 class="page-head__title"><span><?php the_title(); ?></span></h1>

		<div class="exhibit-date">

			<?php if( get_field('start_date') && get_field('end_date')) { ?> 

				<?php echo DateTime::createFromFormat('Ymd', get_field('start_date'))->format('F j, Y');  ?>  - <?php echo DateTime::createFromFormat('Ymd', get_field('end_date'))->format('F j, Y');  ?>

			<?php } ?>

		</div>

	</div>

</div>

