<?php
/**
 * Template Functions
 * 
 */



/**
 * Custom Navigation Walker
 */

class Pariscope_Walker extends Walker_Nav_Menu {
  
  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $permalink = $item->url;
    $classes = $item->classes;

    $output .= "<li id='menu-item-". $item->ID ."' class='menu__item " .  implode(" ", $classes) . "'>";
    
    if( $permalink && $permalink != '#' ) {
      $output .= '<a class="menu__link" href="' . $permalink . '">';
      
    } else {
        $output .= '';
      }
    
    if($args->walker->has_children) {
        $output .= '<button type="button" class="dropdown__title" aria-expanded="false" aria-controls="nav-dropdown-'. $item->ID .'">' ;
    }
     
    $output .= $item->title;
    
    if($args->walker->has_children) {
        $output .= '</button>' ;
    }

    if( $permalink && $permalink != '#' ) {
      $output .= '</a>';
    } else {
      $output .= '';
    }
  }
}

// 

if ( ! function_exists( 'pariscope_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function pariscope_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'pariscope' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'pariscope_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function pariscope_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'pariscope' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'pariscope_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function pariscope_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'pariscope' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'pariscope' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'pariscope' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'pariscope' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'pariscope' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'pariscope' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;


function pariscope_entry_meta() {

  $categories = get_the_category();
  $cat_name = $categories[0]->cat_name;
  $cat_link = get_category_link($categories[0]->term_id);
  
  $date = get_the_date( 'F j, Y' ); ?>

	<div class="entry__meta">

		<span class="entry__meta-cat"><a href="' <?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></span>
		<sep><?php echo htmlentities('•'); ?></sep>
		<span class="entry__meta-published"><?php echo $date; ?></span>

	</div>


<?php }



function pariscope_post_thumbnail($image_size) { ?>

	<a class="entry__image-link" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		<?php
			the_post_thumbnail(
				$image_size,
				array(
					'alt' => the_title_attribute(
						array(
							'echo' => false,
						)
					),
				)
			);
		?>
	</a>
	
<?php };