/**
 * File functions.js
 *
 * This code liberally borrowed from the Interglactic theme: https://wordpress.org/themes/intergalactic/
 */

( function( $ ) {
	var $window = $( window );

	// After page loads
	$window.load( function() {
		outdentImages();
	} );

	// On window resize
	$window.on( 'resize', function() {
		outdentImages();
	});

	// After infinite scroll loads
	$window.on( 'post-load', function() {
		outdentImages();
	} );

	/*
	 * Add extra class to large images
	 */
	function outdentImages() {
		$( '.entry-content img' ).each( function() {
			var img = $( this ),
				caption = $( this ).closest( 'figure' ),
				new_img = new Image();

			new_img.src = img.attr('src');
			var img_width = new_img.width;

			if ( img_width >= 1000 ) {
				$( this ).addClass( 'size-big' );
				$( this ).parents( 'p' ).addClass( 'size-big-wrapper' );
				if ( $.trim( $( this ).parents( 'p' ).text() ) != '' ) {
					$( this ).parents( 'p' ).contents().filter( 'a, img' ).wrap( '<span class="size-big-wrapper" />' );
					$( this ).parents( 'p' ).removeClass( 'size-big-wrapper' );
				}
			}
			if ( caption.hasClass( 'wp-caption' ) && img_width >= 1000 ) {
				$( this ).removeClass( 'size-big' );
				caption.addClass( 'caption-big' );
			}
		} );
	}

} )( jQuery );

