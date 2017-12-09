/**
 * This file adds some LIVE to the Theme Customizer live preview.
 */
( function( $ ) {

	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#logo h1 a' ).html( newval );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	wp.customize( 'columnist_headings_weight', function( value ) {
		value.bind( function( newval ) {
			$('h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1, h2, h3, h4, h5, h6, .site-description').css('font-weight', newval );
		} );
	} );

	wp.customize( 'columnist_headings_font', function( value ) {
		value.bind( function( newval ) {
			$('h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1, h2, h3, h4, h5, h6, .site-description').css('font-family', newval );
		} );
	} );

	wp.customize( 'columnist_body_font', function( value ) {
		value.bind( function( newval ) {
			$('body, input, button, textarea, .site-description,  #mainheader .archive-tit').css('font-family', newval );
		} );
	} );

	wp.customize( 'columnist_news_heading', function( value ) {
		value.bind( function( newval ) {
			$( '' ).html( newval );
		} );
	} );

} )( jQuery );