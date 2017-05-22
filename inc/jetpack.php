<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.me/
 *
 * @package No Filter
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function no_filter_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'type'		=> 'scroll',
		'container' => 'main',
		'render'	=> 'no_filter_infinite_scroll_render',
		'footer'	=> 'page',
		'footer_widgets' => 'sidebar-1',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );

	// Add theme support for Content Options
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'			=> 'content',
		'author-bio'			=> false,
		'author-bio-default'	=> false,
		'post-details'			=> array(
			'stylesheet'		=> 'no-filter-style',
			'date'				=> '.posted-on',
			'categories'		=> '.cat-links',
			'tags'				=> '.entry-tags',
			'author'			=> '.byline',
		),
		'featured-images'		=> array(
			'archive'			=> true,
			'archive-default'	=> true,
			'post'				=> true,
			'post-default'		=> true,
			'page'				=> true,
			'page-default'		=> true,
		),
	) );

}
add_action( 'after_setup_theme', 'no_filter_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function no_filter_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'components/post/content', 'search' );
		else :
			get_template_part( 'components/post/content', get_post_format() );
		endif;
	}
}

function no_filter_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Custom width for tiled galleries
 */
function no_filter_custom_tiled_gallery_width() {
	return '1000';
}
add_filter( 'tiled_gallery_content_width', 'no_filter_custom_tiled_gallery_width' );

/**
 * Filter the Jetpack Gallery width to fit the widget area
 */
function no_filter_widget_content_width() {
	return '300';
}
add_filter( 'gallery_widget_content_width', 'no_filter_widget_content_width' );
