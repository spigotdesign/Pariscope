<?php if (is_cart() || is_checkout() || is_account_page() ) { ?>

	<?php the_content() ?>

<?php } else { ?>

	<article <?php Hybrid\Attr\display( 'entry' )?>>

		<?php if ( class_exists( 'FLBuilderModel' ) && !FLBuilderModel::is_builder_enabled() ) : ?>

			<?php if(!has_post_thumbnail()) { ?>
				<header class="entry__header">
					<h1 class="entry__title"><?php single_post_title() ?></h1>
				</header>
			<?php } ?>

		<?php endif; ?>

		<div class="entry__content">
			<?php the_content() ?>
		</div>

	</article>

<?php } ?>
