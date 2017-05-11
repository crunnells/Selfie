/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'color': to,
					'clip': 'auto',
					'position': 'relative'
				} );
			}
		} );
	} );

	wp.customize( 'jetpack_content_post_details_date', function( value ) {
		value.bind( function( to ) {
			entry_meta_last_class( 'posted-on', to );
		} ) ;
	} );

	wp.customize( 'jetpack_content_post_details_categories', function( value ) {
		value.bind( function( to ) {
			entry_meta_last_class( 'cat-links', to );
		} ) ;
	} );

	wp.customize( 'jetpack_content_post_details_author', function( value ) {
		value.bind( function( to ) {
			entry_meta_last_class( 'byline', to );
		} ) ;
	} );

	// Apply classnames to visible content options
	function entry_meta_last_class( span, to ) {
		$( '.entry-meta .visible' ).removeClass( 'last' );

		if ( to == true ){
			$( '.' + span ).addClass( 'visible' );
		} else {
			$( '.' + span ).removeClass( 'visible' );
		}

		$( '.entry-meta .visible' ).last().addClass( 'last' );
	}

} )( jQuery );
