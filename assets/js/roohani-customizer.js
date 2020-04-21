/**
 * This file for customizer
 * if, You wanna add customizer, You can code here
 *
 * @package Roohani
 * @since Roohani 1.0
 */

( function( $ ) {
 
  
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '.site-title a' ).text( newval );
		} );
	} );
	
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );

	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('#site-title a').css('color', newval );
		} );
	} );

	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	wp.customize( 'link_textcolor', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );
  

	
} )( jQuery );
