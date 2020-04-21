/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

( function( $ ) {
  
	wp.customize( 'roohani_menu_container_padding', function( value ) {
		value.bind( function( newval ) {
			$( '.nav-bar' ).css({"padding": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_container_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.nav-bar' ).css({"background-color": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_font_size', function( value ) {
		value.bind( function( newval ) {
			$( '.navigations a' ).css({"font-size": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_padding', function( value ) {
		value.bind( function( newval ) {
			$( '.navigations a' ).css({"padding": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_color', function( value ) {
		value.bind( function( newval ) {
			$( '.navigations a' ).css({"color": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.navigations a' ).css({"background-color": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_hover_color', function( value ) {
		value.bind( function( newval ) {
			$( '.navigations a' ).hover({"color": newval,});
		} );
	} );
  
  wp.customize( 'roohani_menu_hover_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.navigations a' ).hover({"background-color": newval,});
		} );
	} );
  
  
})( jQuery );

