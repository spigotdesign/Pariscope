<?php $sticky_args = array(
    'post__in' => get_option('sticky_posts'),
    'posts_per_page' => 1,
); ?>

<?php $sticky_query = new WP_Query( $sticky_args ); ?>

<?php if ( $sticky_query->have_posts() ) : ?>
    <?php while ( $sticky_query->have_posts() ) : ?>
        
        <?php $sticky_query->the_post(); ?>

        <?php get_template_part( 'resources/views/entry/single/hero' ); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>