/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */
( function( $ ) {
  
  wp.customize( 'roohani_cta_visibility', function( value ) {
		value.bind( function( newval ) {
      if ( newval !== true) {
        $( '.call-action' ).css({'display': 'none',});
      } else {
        $( '.call-action' ).css({'display': 'block',});
      }
      
		} );
	} );
  
   wp.customize( 'roohani_cta_padding', function( value ) {
		value.bind( function( newval ) {
      $( '.call-action .action-wrapper' ).css({'padding': newval,});
		} );
	} );
  
	wp.customize( 'roohani_cta_bg_color', function( value ) {
		value.bind( function( newval ) {
			$( '.call-action ' ).css({"background-color": newval,});
      $( '.call-action .action-wrapper' ).css({"background-color": newval,});
      
		} );
	} );
  
  //////////////
  
  wp.customize( 'roohani_cta_title', function( value ) {
		value.bind( function( newval ) {
			$( '.details-wrapper h2' ).text(newval);
      
		} );
	} );
  
  wp.customize( 'roohani_cta_title_color', function( value ) {
		value.bind( function( newval ) {
			$( '.details-wrapper h2 ' ).css({"color": newval,});
      
		} );
	} );
  
    wp.customize( 'roohani_cta_title_size', function( value ) {
		value.bind( function( newval ) {
			$( '.details-wrapper h2 ' ).css({"font-size": newval,});
      
		} );
	} );
  
//////////

  wp.customize( 'roohani_cta_desc', function( value ) {
		value.bind( function( newval ) {
			$( '.details-wrapper p' ).text(newval);
      
		} );
	} );
  
  wp.customize( 'roohani_cta_desc_color', function( value ) {
		value.bind( function( newval ) {
			$( '.details-wrapper p ' ).css({"color": newval,});
      
		} );
	} );
  
    wp.customize( 'roohani_cta_desc_size', function( value ) {
		value.bind( function( newval ) {
			$( '.details-wrapper p ' ).css({"font-size": newval,});
      
		} );
	} );
  
  /////////
  
  wp.customize( 'roohani_cta_btn_text', function( value ) {
		value.bind( function( newval ) {
      $( '.action-wrapper a' ).text(newval);  
		} );
	} );
  
  wp.customize( 'roohani_cta_btn_font_size', function( value ) {
		value.bind( function( newval ) {
      $( '.action-wrapper a' ).css({"font-size": newval});
		} );
	} );
  
  wp.customize( 'roohani_cta_button_color', function( value ) {
		value.bind( function( newval ) {
			$( '.action-wrapper a' ).css({"color": newval,});
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