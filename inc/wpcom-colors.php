<?php
/* Color Annotations */

add_color_rule( 'bg', '#ffffff', array(
	// Background - no contrast
	array( '.comment-navigation .nav-links a,
			.content-area,
			.main-navigation ul ul,
			body,
			ins,
			mark', 'background-color' ),

	// Color
	array( '#main #infinite-handle span,
			.comment-navigation .nav-links a:hover,
			.nav-links a:active,
			.nav-links a:focus,
			.nav-links a:hover,
			button,
			button:active,
			button:focus,
			button:hover,
			input[type="button"],
			input[type="button"]:active,
			input[type="button"]:focus,
			input[type="button"]:hover,
			input[type="reset"],
			input[type="reset"]:active,
			input[type="reset"]:focus,
			input[type="reset"]:hover,
			input[type="submit"],
			input[type="submit"]:active,
			input[type="submit"]:focus,
			input[type="submit"]:hover', 'color' )

), __( 'Background' ) );


add_color_rule( 'txt', '#222222', array(
	// Color - Contrast against bg
	array( 'body,
			input,
			select,
			textarea,
			label', 'color', 'bg', 6 ),

	// Color - Contrast against fg1
	array( '.entry-title a', 'color', 'fg1', 8 ),
	array( '.entry-title a:hover', 'color', 'fg1', 6 ),

	// Color - Less contrasting site title
	array( '.site-title a,
			.site-description', 'color', 'bg' ),

	array( '.widget-area', 'color', 'bg' ),

	// Lighter color footer links
	array( '.site-info a:link,
			.site-info a:visited', 'color', 'bg', 2 ),


), __( 'Text' ) );


add_color_rule( 'link', '#2b75c9', array(
	// Background - no contrast
	array( 'button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			.comment-form input[type="submit"]:hover,
			#main #infinite-handle span', 'background-color' ),

	// Color - Contrast against fg1
	array( '.nav-links a,
			.site-main a', 'color', 'fg1', 8 ),

	// Color - Contrast against bg
	array( '.main-navigation a,
			.widget-area a', 'color', 'bg' ),

	// Slightly lighter color for button hover
	array( '.nav-links a:hover,', 'border-color', 0.5 ),

	// Lighter color for hover
	array( '.nav-links a:hover,
			button:hover,', 'background-color', '0.5' ),

	// Border - 2 contrast against fg1
	array( 'input[type="search"].search-field:focus,
			.nav-links a', 'border-color', 'fg1', 2 ),

), __( 'Links' ) );


add_color_rule( 'fg1', '#ffffff', array(
	// Background - no contrast
	array( '.content-area', 'background-color' ),

), __( 'Content Background' ) );



// Additional CSS
function no_filter_extra_css() { ?>
	.main-navigation a:hover,
	.site-main a:hover {
		opacity: 0.8;
		transition: opacity, 0.3s;
	}

	.post-thumbnail a:hover {
		opacity: 1;
	}

<?php
}
add_theme_support( 'custom_colors_extra_css', 'no_filter_extra_css' );


// Color palettes
add_color_palette( array(
        '#ffffff',
        '#222222',
        '#2b75c9',
        '#ffffff',
), /* translators: This is the name for a color scheme */ __( 'Default Blue' ) );

add_color_palette( array(
        '#ffffff',
        '#222222',
        '#c92c2b',
        '#ffffff',
), /* translators: This is the name for a color scheme */ __( 'Red' ) );

add_color_palette( array(
        '#222222',
        '#ffffff',
        '#f8e81c',
        '#333333',
), /* translators: This is the name for a color scheme */ __( 'Dark Colors' ) );
