<?php
/**
 * Implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package Selfie
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses selfie_header_style()
 */
function selfie_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'selfie_custom_header_args', array(
		'default-text-color'     => '222222',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'selfie_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'selfie_custom_header_setup' );

if ( ! function_exists( 'selfie_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see selfie_custom_header_setup().
 */
function selfie_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value.
	if ( HEADER_TEXTCOLOR === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // selfie_header_style
