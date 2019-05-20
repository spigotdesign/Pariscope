<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<li <?php Hybrid\Attr\display( 'comment' ) ?>>

	<header class="comment__meta">
        
        <div class="comment__meta-author">
            <?php echo get_avatar( $data->comment, $data->args['avatar_size'], '', '', [ 'class' => 'comment__avatar' ] ) ?>
            <?php Hybrid\Comment\display_author() ?>
        </div>

        <div class="comment__meta-permalink">
            <?php Hybrid\Comment\display_permalink( [
                'text' => sprintf(
                    // Translators: 1 is the comment date and 2 is the time.
                    esc_html__( '%1$s at %2$s' ),
                    Hybrid\Comment\render_date()
                    
                )
            ] ) ?>

            <?php global $comment;
				$rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );

				if ( $rating && wc_review_ratings_enabled() ) {
					echo wc_get_rating_html( $rating ); // WPCS: XSS ok.
				} 
			?>
        </div>
        
    </header>
	

	<div class="comment__content">

        <?php if ( ! Hybrid\Comment\is_approved() ) : ?>

            <p class="comment__moderation">
                <?php esc_html_e( 'Your comment is awaiting moderation.' ) ?>
            </p>

        <?php endif ?>

        <?php comment_text() ?>
    </div>

    <footer class="comment__footer">
        
        <?php Hybrid\Comment\display_edit_link() ?>

    </footer>
	
