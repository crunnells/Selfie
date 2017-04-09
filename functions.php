<?php
/**
 * Selfie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Selfie
 */

if ( ! function_exists( 'selfie_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function selfie_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'selfie' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'selfie', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'selfie-featured-image', 1000, 9999 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top', 'selfie' ),
		) );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'selfie_custom_background_args', array(
		'default-color' => 'ffffff',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'editor-style.css', selfie_fonts_url() ) );

}
endif;
add_action( 'after_setup_theme', 'selfie_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function selfie_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'selfie_content_width', 1000 );
}
add_action( 'after_setup_theme', 'selfie_content_width', 0 );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function selfie_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function selfie_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'selfie' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'selfie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function selfie_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'selfie-fonts', selfie_fonts_url() );

	wp_enqueue_style( 'selfie-style', get_stylesheet_uri() );

	wp_enqueue_script( 'selfie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'selfie-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'selfie_scripts' );

/**
 * Register Google fonts for Memos.
 */
function selfie_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Catamaran, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Catamaran font: on or off', 'memos' ) ) {
		$fonts[] = 'Catamaran:400,600,700';
	}
	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Nunito Sans, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	if ( 'off' !== esc_html_x( 'on', 'Nunito Sans font: on or off', 'memos' ) ) {
		$fonts[] = 'Nunito Sans:400,400i,700,700i';
	}

	if ( $fonts ) {
		$query_args = array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom header image support.
 */
require get_template_directory() . '/inc/custom-header.php';
