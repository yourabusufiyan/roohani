<?php
/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_chkbox_sanitization( $input ) {
   if ( true === $input ) {
      return 1;
   } else {
      return 0;
   }
}
function roohani_cta_panel( $wp_customize ) {

 $wp_customize->add_section( 'roohani_cta_options', array(
        'title'       => __( 'Call to Action ', 'roohani'),
        'panel'       => 'theme_options',
        'capibility'  => 'edit_theme_options',
        'priority'    => 90,
      )

 );
      $wp_customize->add_setting( 'roohani_cta_visibility',
          array('default' =>  'show',
                'transport' => 'postMessage',
                'sanitize_callback' => 'roohani_sanitize_checkbox'
             ));
                $wp_customize->add_control(
                'roohani_cta_visibility_control', array(
                'label'    => __( 'Show CTA', 'roohani' ),
                'description' => __( 'Uncheched it. If, You don\'t show CTA.', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_visibility',
                'priority' => 1,
                'type'     => 'checkbox',
                 ));





      $wp_customize->add_setting( 'roohani_cta_url',
          array('default' =>  home_url() . '/contact',
                'transport' => 'postMessage',
                'sanitize_callback' => 'esc_url_raw',
             ));
                $wp_customize->add_control(
                'roohani_cta_url_control', array(
                'label'    => __( 'Call to Action Url/Link', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_url',
                'type'  => 'url',
                'priority' => 2,
              ));

      $wp_customize->add_setting( 'roohani_cta_padding',
          array('default' => '28px 28px 28px 28px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_padding_control', array(
                'label'    => __( 'Text Padding', 'roohani' ),
                'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_padding',
                'type'  => 'text',
                'priority' => 3,
              ));

    $wp_customize->add_setting('roohani_cta_bsdfdsfsdg_colors',
            array( 'default'  =>  '#ccc',
                   'transport' => 'postMessage',
                  'sanitize_callback' => 'sanitize_hex_color',
              ));
                $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
                 'roohani_cta_bsdfdsfsdg_colors_control', array(
                  'label'  => __('Background Color', 'roohani'),
                  'section' => 'roohani_cta_options',
                  'setting' => 'roohani_cta_bsdfdsfsdg_colors',
                  'priority' => 8,
                 )
                ));


  /////

        $wp_customize->add_setting( 'roohani_cta_title',
          array('default' => '',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_title_control', array(
                'label'    => __( 'CTA Title', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_title',
                'type'  => 'text',
                'priority' => 10,
              ));

          $wp_customize->add_setting( 'roohani_cta_title_size',
          array('default' => '27px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_title_size_control', array(
                'label'    => __( 'CTA Title Font Size', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_title_size',
                'type'  => 'text',
                'priority' => 11,
              ));


       $wp_customize->add_setting( 'roohani_cta_title_color',
        array('default' => '#fff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_cta_title_color_control', array(
              'label'    => __( 'CTA Title Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_cta_options',
              'settings' => 'roohani_cta_title_color',
              'priority' => 13,
              )
            ));

/////

        $wp_customize->add_setting( 'roohani_cta_desc',
          array('default' => '',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_desc_control', array(
                'label'    => __( 'CTA Desciption', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_desc',
                'type'  => 'text',
                'priority' => 20,
              ));

          $wp_customize->add_setting( 'roohani_cta_desc_size',
          array('default' => '16px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_desc_size_control', array(
                'label'    => __( 'CTA Desciption Font Size', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_desc_size',
                'type'  => 'text',
                'priority' => 21,
              ));


       $wp_customize->add_setting( 'roohani_cta_desc_color',
        array('default' => '#fff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_cta_desc_color_control', array(
              'label'    => __( 'CTA Description Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_cta_options',
              'settings' => 'roohani_cta_desc_color',
              'priority' => 22,
              )
            ));


///////////

        $wp_customize->add_setting( 'roohani_cta_btn_text',
          array('default' => '',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_btn_text_control', array(
                'label'    => __( 'CTA Button Text', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_btn_text',
                'type'  => 'text',
                'priority' => 30,
              ));

          $wp_customize->add_setting( 'roohani_cta_btn_font_size',
          array('default' => '16px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_cta_btn_font_size_control', array(
                'label'    => __( 'CTA Font Button Size', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_cta_options',
                'settings' => 'roohani_cta_btn_font_size',
                'type'  => 'text',
                'priority' => 31,
              ));

       $wp_customize->add_setting( 'roohani_cta_button_color',
        array('default' => '#2d2d2d',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_cta_button_color_control', array(
              'label'    => __( 'CTA Bottun Font Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_cta_options',
              'settings' => 'roohani_cta_button_color',
              'priority' => 32,
              )
            ));

         $wp_customize->add_setting( 'roohani_cta_btn_bg_color',
        array('default' => '#ffffff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_cta_bg_color_control', array(
              'label'    => __( 'CTA Bottun Font Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_cta_options',
              'settings' => 'roohani_cta_btn_bg_color',
              'priority' => 33,
              )
            ));











}
add_action( 'customize_register' , 'roohani_cta_panel' );



/**
 * Used by hook: 'customize_preview_init'
 */
function roohani_cta_live_preview() {
	wp_enqueue_script( 'roohani-call-to-action-live-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-call-action-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional)
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'roohani_cta_live_preview' );



?>
