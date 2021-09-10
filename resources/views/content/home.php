<div class="app-content">

	<main id="main" class="app-main">

		<?php Hybrid\View\display( 'header', 'archive-header' ) ?>
		
		<div class="blog-main">
			
			<div class="blog-content">

				<?php if ( have_posts() ) : ?>
	
				<div class="post-list">
	
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php Hybrid\View\display( 'entry/archive', Hybrid\Post\hierarchy() ) ?>
	
					<?php endwhile ?>
	
				</div>
	
				<?php Hybrid\View\display( 'nav/pagination', 'posts' ) ?>
	
			<?php endif ?>
				
			</div>
			
			<?php Hybrid\View\display( 'sidebar', 'primary', [ 'name' => 'primary' ] ) ?>
			
		</div>

	</main>
	
</div>
 