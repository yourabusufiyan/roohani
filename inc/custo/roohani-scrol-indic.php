<?php

/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_scroll_indic_options_section( $wp_customize ) {

  $wp_customize->add_section( 'roohani_scroll_indic_options', array(
    'title'       => __( 'Scroll Indicator', 'roohani'),
    'description' => __( 'Customize Scroll Indicator. e.g Background Color, Color etc', 'roohani'),
    'panel'       => 'theme_options',
    'priority'    => 100,
    'capability'  => 'edit_theme_options',
    )
  );


    $wp_customize->add_setting( 'scroll_indic_display',
      array('default' =>  'show',
            'transport' => 'postMessage',
            'sanitize_callback' => 'roohani_sanitize_radio'
     ));
        $wp_customize->add_control(
        'scroll_indic_display_control', array(
        'label'    => __( 'Indicator Display', 'roohani' ),
        'section'  => 'roohani_scroll_indic_options',
        'settings' => 'scroll_indic_display',
        'priority' => 1,
        'type'     => 'checkbox',
         ));

    $wp_customize->add_setting( 'scroll_indic_height', array(
       'default'   => '8px',
       'transport' => 'postMessage',
       'sanitize_callback' => 'sanitize_text_field',
    ));
       $wp_customize->add_control( 'scroll_indic_height_control', array(
        'label'    => __( 'Indicator Height', 'roohani' ),
        'section'  => 'roohani_scroll_indic_options',
        'settings' => 'scroll_indic_height',
        'type'     => 'text',
         'priority'    => 2,
      ));

    $wp_customize->add_setting( 'scroll_indic_color',
      array('default' => '#28a745',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
         ));
    $wp_customize->add_setting( 'scroll_indic_bg_color',
        array('default' => '#e9ecef',
              'transport' => 'postMessage',
              'sanitize_callback' => 'sanitize_hex_color',
     ));
       $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
       'scroll_indic_color_control', array(
         'label'    => __( 'Indicator Color', 'roohani' ),
         'section'  => 'roohani_scroll_indic_options',
         'settings' => 'scroll_indic_color',
         'priority' => 4,
         )
       ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
        'scroll_indic_bg_color_control', array(
          'label'    => __( 'Indicator Background Color', 'roohani' ),
          'section'  => 'roohani_scroll_indic_options',
          'settings' => 'scroll_indic_bg_color',
          'priority' => 4,
          )
        ));



}
add_action( 'customize_register' , 'roohani_scroll_indic_options_section' );


?>
