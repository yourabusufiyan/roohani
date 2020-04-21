<?php
/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_topbar_panel( $wp_customize ) {

 $wp_customize->add_section( 'roohani_topbar_options', array(
        'title'       => __( 'Top bar ', 'roohani'),
        'description' => __( 'Top bar Customization Area', 'roohani'),
        'panel'       => 'theme_options',
        'capibility'  => 'edit_theme_options',
        'priority'    => 10,
      )

 );


      $wp_customize->add_setting( 'roohani_topbar_visibility',
          array('default' =>  'show',
                'transport' => 'postMessage',
                'sanitize_callback' => 'roohani_sanitize_checkbox'
             ));
                $wp_customize->add_control(
                'roohani_topbar_visibility_control', array(
                'label'    => __( 'Show Top Bar', 'roohani' ),
              //'description' => __( 'It might not work live!', 'roohani' ),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_topbar_visibility',
                'priority' => 1,
                'type'     => 'checkbox',
                 ));
  //checkbox sanitization function
        function roohani_sanitize_checkbox( $option ){

            //returns true if checkbox is checked
            return ( isset( $option ) ? true : false );
        }



      $wp_customize->add_setting( 'roohani_topbar_right_text',
          array('default' => '',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_topbar_right_text_control', array(
                'label'    => __( 'Right Text', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_topbar_right_text',
                'type'  => 'text',
                'priority' => 10,
              ));


  ///////

      $wp_customize->add_setting( 'roohani_topbar_padding',
          array('default' => '5px 0px 5px 0px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'

             ));
                $wp_customize->add_control(
                'roohani_topbar_padding_control', array(
                'label'    => __( 'Top bar Padding', 'roohani' ),
                'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_topbar_padding',
                'type'  => 'text',
                'priority' => 5,
              ));

        $wp_customize->add_setting( 'roohani_topbar_margin',
          array('default' => '0px 80px 0px 80px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_topbar_margin_control', array(
                'label'    => __( 'Top bar Margin', 'roohani' ),
                'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_topbar_margin',
                'type'  => 'text',
                'priority' => 6,
              ));

        $wp_customize->add_setting( 'roohani_topbar_font_size',
          array('default' => '18px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_topbar_font_size_control', array(
                'label'    => __( 'Text Size', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_topbar_font_size',
                'type'  => 'text',
                'priority' => 11,
              ));

    ////
      $wp_customize->add_setting( 'roohani_topbar_color',
        array('default' => '#000',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_topbar_color_control', array(
              'label'    => __( 'Text Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_topbar_options',
              'settings' => 'roohani_topbar_color',
              'priority' => 12,
              )
            ));

        ////
       $wp_customize->add_setting( 'roohani_topbar_bg_color',
        array('default' => '#e5e5e5',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_topbar_bg_color_control', array(
              'label'    => __( 'Background Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_topbar_options',
              'settings' => 'roohani_topbar_bg_color',
              'priority' => 7,
              )
            ));

/////////


          $wp_customize->add_setting( 'roohani_topbar_icon_size',
          array('default' => '20px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_topbar_icon_size_control', array(
                'label'    => __( 'Social Icon Size', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_topbar_icon_size',
                'type'  => 'text',
                'priority' => 15,
              ));

      ////
      $wp_customize->add_setting( 'roohani_topbar_icon_color',
        array('default' => '#000',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_topbar_icon_color_control', array(
              'label'    => __( 'Social Icon Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_topbar_options',
              'settings' => 'roohani_topbar_icon_color',
              'priority' => 16,
              )
            ));




      $wp_customize->add_setting( 'roohani_facebook_url',
          array('default' => '' , // 'https://facebook.com/',
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
             ));
                $wp_customize->add_control(
                'roohani_facebook_url_control', array(
                'label'    => __( 'Facebook Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_facebook_url',
                'type'  => 'url',
                'priority' => 55,
              ));


      $wp_customize->add_setting( 'roohani_twitter_url',
          array('default' =>  '' , // 'https://twitter.com/',
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
             ));
                $wp_customize->add_control(
                'roohani_twitter_url_control', array(
                'label'    => __( 'Twitter Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_twitter_url',
                'type'  => 'url',
                'priority' => 56,
              ));


      $wp_customize->add_setting( 'roohani_youtube_url',
          array('default' => '' , // 'https://www.youtube.com/',
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
             ));
                $wp_customize->add_control(
                'roohani_youtube_url_control', array(
                'label'    => __( 'YouTube Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_youtube_url',
                'type'  => 'url',
                'priority' => 57,
              ));


      $wp_customize->add_setting( 'roohani_instagram_url',
          array('default' =>  '#' , //'https://www.instagram.com/',
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
             ));
                $wp_customize->add_control(
                'roohani_instagram_url_control', array(
                'label'    => __( 'Instagram Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_instagram_url',
                'type'  => 'url',
                'priority' => 58,
              ));


      $wp_customize->add_setting( 'roohani_google_plus_url',
          array('default' =>  '' , //'https://plus.google.com/',
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
             ));
                $wp_customize->add_control(
                'roohani_google_plus_url_control', array(
                'label'    => __( 'Google+ Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_google_plus_url',
                'type'  => 'url',
                'priority' => 59,
              ));


      $wp_customize->add_setting( 'roohani_pinterest_url',
          array('default' =>  '' , // 'https://www.pinterest.com//'
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
             ));
                $wp_customize->add_control(
                'roohani_pinterest_url_control', array(
                'label'    => __( 'Pinterest Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_topbar_options',
                'settings' => 'roohani_pinterest_url',
                'type'  => 'url',
                'priority' => 60,
              ));


  //////////////






}
add_action( 'customize_register' , 'roohani_topbar_panel' );



/**
 * Used by hook: 'customize_preview_init'
 */
function roohani_topbar_live_preview() {
	wp_enqueue_script( 'roohani-topbar-live-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-top-bar-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional)
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'roohani_topbar_live_preview' );



?>
