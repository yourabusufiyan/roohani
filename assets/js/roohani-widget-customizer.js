/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */
( function( $ ) {
  
   wp.customize( 'roohani_footer_wdgt_title_color', function( value ) {
		value.bind( function( newval ) {
      $( '.foo-widget .foo-widget-title' ).css({'color': newval,});
		} );
	} );
  
	wp.customize( 'roohani_footer_wdgt_title_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.foo-widget .foo-widget-title' ).css({"background-color": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_footer_wdgt_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'footer .footer-widget' ).css({"font-size": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_footer_wdgt_font_color', function( value ) {
		value.bind( function( newval ) {
			$( '.textwidget ' ).css({"color": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_footer_wdgt_padding', function( value ) {
		value.bind( function( newval ) {
			$( 'footer .footer-widget ' ).css({"padding": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_footer_wdgt_title_font_size', function( value ) {
		value.bind( function( newval ) {
			$( '.foo-widget .foo-widget-title ' ).css({"font-size": newval,});
      
		} );
	} );
  
  
	
	
  wp.customize( 'YOUR_SETTING_ID', function( value ) {
	value.bind( function( newval ) {
		//Do stuff (newval variable contains your "new" setting data)
	} );
 } );
	
} )( jQuery );