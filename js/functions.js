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
	} );

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
				new_img = new Image(),
				og_img_width = img.attr('width');

			new_img.onload = function(){
				var img_width = new_img.width;


				if ( img_width >= 1000 || img_width >= window.screen.width ) {
					img.addClass( 'size-big' );
					img.parents( 'p' ).addClass( 'size-big-wrapper' );
					if ( $.trim( img.parents( 'p' ).text() ) != '' ) {
						img.parents( 'p' ).contents().filter( 'a, img' ).wrap( '<span class="size-big-wrapper" />' );
						img.parents( 'p' ).removeClass( 'size-big-wrapper' );
					}
				} else if ( img_width <= window.screen.width && img.hasClass( 'size-big' ) ) {
					img.removeClass( 'size-big' );
					img.parents( 'p' ).removeClass( 'size-big-wrapper' );
				}

				// On sites with Photon activated, Jetpack is switching the image sizes based on the content width.
				// This leads to instances where the original image is large (eg: > 1000px) but Jetpack is displaying
				// a smaller one to fit the content area (660px). The original image size triggers the .size-big class
				// and up-scales the smaller image to 1000px. I'm not really sure how to fix this particular issue right now.
				// I think some of this "smaller" logic needs to be applied to the above checks.

				// get the hard-coded width
				var smallest_size = img.attr( 'width' );
				// if it's undefined, get the *actual* image width
				if ( ! smallest_size || smallest_size > img.width() ) {
					smallest_size = img.width();
				}

				// on non-Photon sites, this prevents large images with small hard-coded widths from getting .caption-big
				if ( caption.hasClass( 'wp-caption' ) ){
					if ( smallest_size < 1000 ) {
						img.removeClass( 'size-big' );
					} else if ( smallest_size >= 1000 ) {
						img.removeClass( 'size-big' );
						caption.addClass( 'caption-big' );
					}
				}
			}

			// attach the src after the onload is set
			new_img.src = img.attr('src');

		} );
	}

} )( jQuery );
