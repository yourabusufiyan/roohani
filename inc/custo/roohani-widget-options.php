<?php
/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_widget_options_panel( $wp_customize ) {

 $wp_customize->add_section( 'roohani_wdgt_area_options', array(
        'title'       => __(' Widget Oprions', 'roohani'),
        'description' => __(' Widget Customization Area', 'roohani'),
        'panel'       => 'theme_options',
        'capibility'  => 'edit_theme_options',
        'priority'    => 95,
      )

 );


      $wp_customize->add_setting( 'roohani_footer_wdgt_padding',
          array('default' => '25px 40px 25px 40px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control(
                'roohani_footer_wdgt_padding_control', array(
                'label'    => __( 'Widget Padding ', 'roohani' ),
                'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_wdgt_area_options',
                'settings' => 'roohani_footer_wdgt_padding',
                'type'  => 'text',
                'priority' => 1,
              ));


        ////
       $wp_customize->add_setting( 'roohani_footer_wdgt_title_color',
        array('default' => '#ff0000',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_footer_wdgt_title_color_control', array(
              'label'    => __( 'Widget Title Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_wdgt_area_options',
              'settings' => 'roohani_footer_wdgt_title_color',
              'priority' => 10,
              )
            ));

        ////
       $wp_customize->add_setting( 'roohani_footer_wdgt_title_bg_color',
        array('default' => '#9a9a9a',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
            'roohani_footer_wdgt_title_bg_color_control', array(
              'label'    => __( 'Widget Title Background Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_wdgt_area_options',
              'settings' => 'roohani_footer_wdgt_title_bg_color',
              'priority' => 11,
              )
            ));


        $wp_customize->add_setting( 'roohani_footer_wdgt_title_font_size',
            array('default' => '24px',
                  'transport' => 'postMessage',
                  'sanitize_callback' => 'sanitize_text_field'
               ));
                  $wp_customize->add_control(
                  'roohani_footer_wdgt_title_font_size_control', array(
                  'label'    => __( 'Widget Title Font Size ', 'roohani' ),
                  //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                  'section'  => 'roohani_wdgt_area_options',
                  'settings' => 'roohani_footer_wdgt_title_font_size',
                  'type'  => 'text',
                  'priority' => 12,
                ));



      /////
      $wp_customize->add_setting( 'roohani_footer_wdgt_font_color',
            array('default' => '#212529',
                  'transport' => 'postMessage',
                  'sanitize_callback' => 'sanitize_hex_color',

               ));
                  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
                'roohani_footer_wdgt_font_color_control', array(
                  'label'    => __( 'Font Color ', 'roohani' ),
                  //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
                  'section'  => 'roohani_wdgt_area_options',
                  'settings' => 'roohani_footer_wdgt_font_color',
                  'priority' => 15,
                  )
                ));

        $wp_customize->add_setting( 'roohani_footer_wdgt_font_size',
            array('default' => '17px',
                  'transport' => 'postMessage',
                  'sanitize_callback' => 'roohani_sanitize_css',
               ));
                  $wp_customize->add_control( 'roohani_footer_wdgt_font_size_control', array(
                  'label'    => __( 'Font Size ', 'roohani' ),
                  //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
                  'section'  => 'roohani_wdgt_area_options',
                  'settings' => 'roohani_footer_wdgt_font_size',
                   'type'  => 'text',
                  'priority' => 16,
                ));








}
add_action( 'customize_register' , 'roohani_widget_options_panel' );



/**
 * Used by hook: 'customize_preview_init'
 */
function roohani_widget_live_preview() {
	wp_enqueue_script( 'roohani-widget-live-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-widget-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional)
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'roohani_widget_live_preview' );




?>
