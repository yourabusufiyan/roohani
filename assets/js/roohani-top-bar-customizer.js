/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */
( function( $ ) {
  wp.customize( 'roohani_topbar_visibility', function( value ) {
		value.bind( function( newval ) {
      if ( newval !== true) {
        $( '.top-container' ).css({'display': 'none'});
      } else {
        $( '.top-container' ).css({'display': 'block'});
      }
      
		} );
	} );
  
  wp.customize( 'roohani_topbar_right_text', function( value ) {
		value.bind( function( newval ) {
			$( '#top-bar #bar-right p' ).text(newval);  
		} );
	} );
  
  wp.customize( 'roohani_topbar_padding', function( value ) {
		value.bind( function( newval ) {
      $( '#top-bar' ).css({'padding': newval,});
		} );
	} );
  
  wp.customize( 'roohani_topbar_margin', function( value ) {
		value.bind( function( newval ) {
      $( '#top-bar' ).css({'margin': newval,});
		} );
	} );
  
  wp.customize( 'roohani_topbar_font_size', function( value ) {
		value.bind( function( newval ) {
			$( '#top-bar #bar-right p' ).css({"font-size": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_topbar_color', function( value ) {
		value.bind( function( newval ) {
			$( '#top-bar #bar-right p' ).css({"color": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_topbar_icon_color', function( value ) {
		value.bind( function( newval ) {
			$( '#social-icon a i ' ).css({"color": newval,});
      
		} );
	} );
  
  wp.customize( 'roohani_topbar_icon_size', function( value ) {
		value.bind( function( newval ) {
			$( '#social-icon a i' ).css({"font-size": newval,});
      
		} );
	} );
  
	wp.customize( 'roohani_topbar_bg_color', function( value ){
		value.bind( function( newval ){
        $( '.top-container' ).css({"background-color": newval,});
    });
	});
  
  
	
	
  wp.customize( 'YOUR_SETTING_ID', function( value ) {
	value.bind( function( newval ) {
		//Do stuff (newval variable contains your "new" setting data)
	} );
 } );
	
} )( jQuery );