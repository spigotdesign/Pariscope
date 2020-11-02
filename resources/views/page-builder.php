<?php 

$ids = FLThemeBuilderLayoutData::get_current_page_content_ids();

if ( empty( $ids ) ) {
	return;
}

if ( 'fl-theme-layout' == get_post_type() && count( $ids ) > 1 ) {
	$post_id = FLBuilderModel::get_post_id();
} else {
	$post_id = $ids[0];
} ?>

<?php \Hybrid\View\display( 'header', \Hybrid\Template\hierarchy() ); ?>

<div class="app-content">

	<main id="main" class="app-main">

	<?php FLBuilder::render_content_by_id( $post_id, 'div', apply_filters( 'fl_theme_builder_content_attrs', array() ) ); ?>

	</main>

</div>

<?php \Hybrid\View\display( 'footer', \Hybrid\Template\hierarchy() ); ?>
