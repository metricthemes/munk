/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
		   
	wp.customize( 'munk_layout_container_default_ed', function( value ) {
	
		// When the value changes.
		value.bind( function( newval ) {
	
			// Add CSS to elements.
			jQuery( '.site' ).addClass( newval );
		} );
	} );	
	

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
	
	wp.customize( 'author_title', function( value ) {
		value.bind( function( to ) {
			$( '.author-section .author-header' ).text( to );
		} );
	} );	
	
	wp.customize( 'read_more_text', function( value ) {
		value.bind( function( to ) {
			$( '.read-more a' ).text( to );
		} );
	} );								

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',	
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );