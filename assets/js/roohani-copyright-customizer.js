/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

( function( $ ) {

	wp.customize( 'footer_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( 'footer .copyright-bar' ).css({"background-color": newval,});
      
		} );
	} );
  wp.customize( 'footer_text_color', function( value ) {
		value.bind( function( newval ) {
			$( 'footer .copyright-bar' ).css({'color': newval,});
      $( 'footer .copyright-bar .footer-buttom #bar-right a' ).css({'color': newval,});
		} );
	} );
  wp.customize( 'footer_link_color', function( value ) {
		value.bind( function( newval ) {
      $( 'footer .copyright-bar .footer-buttom #bar-left a' ).css({'color': newval,});
		} );
	} );
  wp.customize( 'footer_separator_color', function( value ) {
		value.bind( function( newval ) {
      $( '.footer-buttom .foo-nav-bar ul li+li:before' ).css({'color': newval,});
     } );
	} );
    wp.customize( 'footer_link_hover_color', function( value ) {
		value.bind( function( newval ) {
      $( 'footer .copyright-bar .footer-buttom a' ).hover(function(){
        $(this).css({'color': newval,});
       });
      $( 'footer .copyright-bar .footer-buttom a' ).mouseout(stop());
//       $( 'footer .copyright-bar .footer-buttom a' ).mouseout(function(){
//           $(this).css({'color': 'intial'});
//       });
		});
	} );
  
  wp.customize( 'footer_font_size', function( value ) {
		value.bind( function( newval ) {
      $( 'footer .copyright-bar .footer-buttom' ).css({"font-size": newval,});
		} );
	} );
  
  

 wp.customize( 'roohani_cta_btn_color', function( value ) {
		value.bind( function( newval ) {
			$( '.call-action .action-button ' ).css({"color": newval,});
		} );
	} );
  
  wp.customize( 'footer_copyright_text', function( value ) {
		value.bind( function( newval ) {
			$( '.foo-left .foo-copy' ).text(newval);
		} );
	} );
  
	
	
  wp.customize( 'YOUR_SETTING_ID', function( value ) {
	value.bind( function( newval ) {
		//Do stuff (newval variable contains your "new" setting data)
	} );
 } );
	
} )( jQuery );