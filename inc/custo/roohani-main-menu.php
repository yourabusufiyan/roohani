<?php
/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_menu_panel( $wp_customize ) {
  
 $wp_customize->add_section( 'roohani_menu_options', array(
        'title'       => __( 'Main Menu ', 'roohani'),
        'description' => __( 'Main Menu Customization Area', 'roohani'),
        'panel'       => 'theme_options',
        'capibility'  => 'edit_theme_options',
        'priority'    => 20,
      )
 );
  
      $wp_customize->add_setting( 'roohani_menu_align', array(
          'default' => 'center',
          'transport' => 'postMessage',
          'sanitize_callback' => 'roohani_sanitize_radio',
        ) );
  
        function roohani_sanitize_radio( $input ) {
        return ( isset( $input ) ? $input : $setting->default );
        }

        $wp_customize->add_control( 'roohani_menu_align_control', array(
          
          'section' => 'roohani_menu_options', 
          'setting' => 'roohani_menu_align',
          'label' => __( 'Menu Align', 'roohani' ),
          'priority'    => 1,
          'type' => 'radio',
          'choices' => array(
            'left' => __( 'Left', 'roohani'  ),
            'center' => __( 'Center', 'roohani' ),
            'right' => __( 'Right', 'roohani' ),
          ),
        ) );
  
  
  
        $wp_customize->add_setting( 'roohani_menu_container_padding',
          array('default' => '0',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control( 
                'roohani_menu_container_padding_control', array(
                'label'    => __( 'Container Padding', 'roohani' ),
                'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_menu_options',
                'settings' => 'roohani_menu_container_padding',
                'type'  => 'text',
                'priority' => 5, 
              ));
  
      ////
      $wp_customize->add_setting( 'roohani_menu_container_bg_color',
        array('default' => '#333',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
            'roohani_menu_container_bg_color_control', array(
              'label'    => __( 'Container background Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_menu_options',
              'settings' => 'roohani_menu_container_bg_color',
              'priority' => 6,
              ) 
            ));
  
  
        $wp_customize->add_setting( 'roohani_menu_font_size',
          array('default' => '16px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
             ));
                $wp_customize->add_control( 
                'roohani_menu_font_size_control', array(
                'label'    => __( 'Menu Text Size', 'roohani' ),
                //'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_menu_options',
                'settings' => 'roohani_menu_font_size',
                'type'  => 'text',
                'priority' => 10, 
              ));
 
  
      $wp_customize->add_setting( 'roohani_menu_padding',
          array('default' => '14px 16px',
                'transport' => 'postMessage',
                'sanitize_callback' => 'sanitize_text_field'
                
             ));
                $wp_customize->add_control( 
                'roohani_menu_padding_control', array(
                'label'    => __( 'Menu Padding', 'roohani' ),
                'description' => __( 'Clock wise : Top right Bottum Left', 'roohani'),
                'section'  => 'roohani_menu_options',
                'settings' => 'roohani_menu_padding',
                'type'  => 'text',
                'priority' => 11, 
              ));
  
  
    ////
      $wp_customize->add_setting( 'roohani_menu_color',
        array('default' => '#fff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
            'roohani_menu_color_control', array(
              'label'    => __( 'Menu Text Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_menu_options',
              'settings' => 'roohani_menu_color',
              'priority' => 12,
              ) 
            ));
  
  
        ////
       $wp_customize->add_setting( 'roohani_menu_bg_color',
        array('default' => '#333',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
            'roohani_menu_bg_color_control', array(
              'label'    => __( 'Menu Background Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_menu_options',
              'settings' => 'roohani_menu_bg_color',
              'priority' => 13,
              ) 
            ));
  
/////////
  
 
      ////
      $wp_customize->add_setting( 'roohani_menu_hover_color',
        array('default' => '#fff',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
            'roohani_menu_hover_color_control', array(
              'label'    => __( 'Hover Text Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_menu_options',
              'settings' => 'roohani_menu_hover_color',
              'priority' => 16,
              ) 
            ));
  
        ////
      $wp_customize->add_setting( 'roohani_menu_hover_bg_color',
        array('default' => '#ff0000',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
           ));
              $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
            'roohani_menu_hover_bg_color_control', array(
              'label'    => __( 'Hover Text Color ', 'roohani' ),
              //'description' => __( ' It mightn\'t changing on live. ', 'roohani'),
              'section'  => 'roohani_menu_options',
              'settings' => 'roohani_menu_hover_bg_color',
              'priority' => 17,
              ) 
            ));
  
  
    
}
add_action( 'customize_register' , 'roohani_menu_panel' );
 


/**
 * Used by hook: 'customize_preview_init'
 */
function roohani_menu_live_preview() {
	wp_enqueue_script( 'roohani-menu-live-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-menu-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'roohani_menu_live_preview' );



?>