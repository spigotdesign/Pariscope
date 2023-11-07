<?php if ( !class_exists('FLBuilderModel') || (class_exists('FLBuilderModel') && !FLBuilderModel::is_builder_enabled()) ): ?>
	
	<?php $image = get_the_post_thumbnail_url( get_the_ID(), 'full'); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

		<header class="entry__header"  style="background-image: url(<?php echo $image; ?>)">		
		
			<div class="entry__header__content">

				<?php $categories_list = get_the_category_list( esc_html__( ', ', 'pariscope' ) ); ?>
			
				<?php if ( $categories_list ) { ?>
				
					<span class="entry__header__content--meta"><?php printf( esc_html__( '%1$s', 'pariscope' ), $categories_list ); ?></span>

				<?php } ?>
				
				<h2 class="entry__header--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<?php $post_author_id = get_the_author_meta('ID'); ?>
  				<?php $author_avatar = get_avatar($post_author_id, 40);?>
  				<?php $author_name = get_the_author_meta('display_name'); ?>

				<div class="entry__header--byline">
					<?php echo $author_avatar; ?>
					<span class="author-name"><?php echo $author_name; ?></span> on <span class="post-date"><?php echo get_the_date(); ?></span>
				
			</div>
			
		</header>

<?php endif; ?>