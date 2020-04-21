/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */
( function( $ ) {
  
  wp.customize( 'roohani_body_fullwidth_padding', function( value ) {
		value.bind( function( newval ) {
      if ( newval !== true) {
        $( '.website-content' ).addClass( 'container' );
      } else {
        $( '.website-content' ).removeClass( 'container' );
      }
      
		} );
	} );
  
   wp.customize( 'roohani_cta_padding', function( value ) {
		value.bind( function( newval ) {
      $( '.call-action .action-wrapper' ).css({'padding': newval,});
		} );
	} );
  
  wp.customize( 'roohani_body_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).css({"background-color": newval,});
      
		} );
	} );
  
    wp.customize( 'roohani_body_color', function( value ) {
		value.bind( function( newval ) {
			$( '.website-content' ).css({"background-color": newval,});
      
		} );
	} );
  
//////////

  wp.customize( 'roohani_anchor_link_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body a' ).css({"color": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_anchor_link_hover_color', function( value ) {
		value.bind( function( newval ) {
			$( 'body a' ).hover({"color": newval,});
      
		} );
	} );
  
    wp.customize( 'roohani_anchor_link_size', function( value ) {
		value.bind( function( newval ) {
			$( 'body a' ).css({"font-size": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_body_font_color', function( value ) {
		value.bind( function( newval ) {
			$( 'p' ).css({"color": newval,});
		} );
	} );
  
  wp.customize( 'roohani_cta_btn_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.action-wrapper a' ).css({"background-color": newval,});
		} );
	} );
  
  
  
	
	
  wp.customize( 'YOUR_SETTING_ID', function( value ) {
	value.bind( function( newval ) {
		//Do stuff (newval variable contains your "new" setting data)
	} );
 } );
	
} )( jQuery );