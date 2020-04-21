<?php
/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */
function roohani_body_panel( $wp_customize ) {

 $wp_customize->add_section( 'roohani_body_options', array(
        'title'       => __( 'Body', 'roohani'),
        'panel'       => 'theme_options',
        'capibility'  => 'edit_theme_options',
        'priority'    => 1,
      )

 );
      $wp_customize->add_setting( 'roohani_body_fullwidth_padding',
          array('default' =>  'show',
                'transport' => 'postMessage',
                'sanitize_callback' => 'roohani_sanitize_radio'
             ));
                $wp_customize->add_control(
                'roohani_body_fullwidth_padding_control', array(
                'label'    => __( 'Full Width Website', 'roohani' ),
                'section'  => 'roohani_body_options',
                'settings' => 'roohani_body_fullwidth_padding',
                'priority' => 1,
                'type'     => 'checkbox',
                 ));

        ////
      $wp_customize->add_setting( 'roohani_body_bg_color',
        array('default' => '#dee2e6',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
              'roohani_body_bg_color_control', array(
              'label'    => __( 'Background Color', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_body_options',
              'settings' => 'roohani_body_bg_color',
              'priority' => 2,
              )
            ));

        $wp_customize->add_setting( 'roohani_body_color',
        array('default' => '#fff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
              'roohani_body_color_control', array(
              'label'    => __( 'Body Color', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_body_options',
              'settings' => 'roohani_body_color',
              'priority' => 2,
              )
            ));


      ////
      $wp_customize->add_setting( 'roohani_anchor_link_color',
        array('default' => '#007bff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
              'roohani_anchor_link_color_control', array(
              'label'    => __( 'Anchor Link Color', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_body_options',
              'settings' => 'roohani_anchor_link_color',
              'priority' => 5,
              )
            ));


        $wp_customize->add_setting( 'roohani_anchor_link_hover_color',
        array('default' => '#ff0000',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
              'roohani_anchor_link_hover_color_control', array(
              'label'    => __( 'Anchor Link Hover Color', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_body_options',
              'settings' => 'roohani_anchor_link_hover_color',
              'priority' => 5,
              )
            ));


    ////
      $wp_customize->add_setting( 'roohani_body_font_color',
        array('default' => '#212529',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
              'roohani_body_font_color_control', array(
              'label'    => __( 'Menu Paragraph Color', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_body_options',
              'settings' => 'roohani_body_font_color',
              'priority' => 10,
              )
            ));

        $wp_customize->add_setting( 'roohani_loading_image',
          array('default' => '',
                'sanitize_callback' => 'esc_url',
             ));

            $wp_customize->add_control(
             new WP_Customize_Image_Control( $wp_customize,'roohani_loading_image_control',
                 array(
                     'label'      => __( 'Upload a Loading Image', 'roohani' ),
                     'section'    => 'roohani_body_options',
                     'settings'   => 'roohani_loading_image',
                 )) );


}
add_action( 'customize_register' , 'roohani_body_panel' );



/**
 * Used by hook: 'customize_preview_init'
 */
function roohani_body_live_preview() {
	wp_enqueue_script( 'roohani-body-live-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-body-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional)
		  true						//Put script in footer?
	);
 wp_enqueue_style('roohani-live-pre-style',  get_template_directory_uri() . '/assets/css/animations.css', array( ), time(), 'all');
}
add_action( 'customize_preview_init', 'roohani_body_live_preview' );



?>
