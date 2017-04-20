<?php
/**
 * WordPress.com-specific functions and definitions
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package No Filter
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function nofilter_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'cccccc',
			'text'   => '222222',
			'link'   => '2b75c9',
			'url'    => '2b75c9',
		);
	}

	/* Add WP.com print styles */
	add_theme_support( 'print-styles' );
}
add_action( 'after_setup_theme', 'nofilter_wpcom_setup' );

/*
 * WordPress.com-specific styles
 */
function nofilter_wpcom_styles() {
	wp_enqueue_style( 'nofilter-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160411' );
}
add_action( 'wp_enqueue_scripts', 'nofilter_wpcom_styles' );
