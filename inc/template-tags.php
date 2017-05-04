<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package No Filter
 */


if ( ! function_exists( 'no_filter_entry_tags' ) ) :
/**
 * Prints HTML with entry tags.
 */
function no_filter_entry_tags() {
	// Hide tag text for pages.
	if ( 'post' === get_post_type() ) {
		$tags_list = get_the_tag_list( '', ' ' );
		if ( $tags_list ) {
			echo '<span class="screen-reader-text">' . esc_html_x( 'Tagged', 'post tags', 'no-filter' ) . ':</span> ' . $tags_list;
		}
	}
}
endif;

if ( ! function_exists( 'no_filter_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the post-date/time, categories, and comments.
 */
function no_filter_entry_footer() {
	if ( ! is_sticky() ) {
		// Posted on
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		echo '<span class="posted-on"><span class="screen-reader-text">' . esc_html_x( 'Posted on', 'post date', 'no-filter' ) . '</span> <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></span>';
	}

	// Hide category text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'no-filter' ) );
		if ( $categories_list && no_filter_categorized_blog() ) {
			echo '<span class="cat-links"><span class="screen-reader-text">' . esc_html_x( 'Posted in', 'post categories', 'no-filter' ) . ':</span> ' . $categories_list . '</span>';
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Comment', 'no-filter' ), esc_html__( '1 Comment', 'no-filter' ), esc_html__( '% Comments', 'no-filter' ) );
		echo '</span>';
	}

	echo '<span class="byline"><span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span></span>';

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'no-filter' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function no_filter_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'no_filter_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'no_filter_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so no_filter_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so no_filter_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in no_filter_categorized_blog.
 */
function no_filter_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'no_filter_categories' );
}
add_action( 'edit_category', 'no_filter_category_transient_flusher' );
add_action( 'save_post',     'no_filter_category_transient_flusher' );
