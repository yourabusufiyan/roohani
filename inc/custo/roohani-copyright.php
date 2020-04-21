<?php

/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_copy_right_options_panel( $wp_customize ) {

  $wp_customize->add_section( 'roohani_footer_options', array(
    'title'       => __( 'Footer Options', 'roohani'),
    'description' => __( 'You can customize footer from here', 'roohani'),
    'panel'       => 'theme_options',
    'priority'    => 100,
    'capability'  => 'edit_theme_options',
    )
  );

        $wp_customize->add_setting( 'footer_copyright_text', array(
         'default'   => '',
         'transport' => 'postMessage',
         'sanitize_callback' => 'sanitize_text_field',
      ));
         $wp_customize->add_control( 'footer_copyright_text_control', array(
          'label'    => __( 'Copyright Text', 'roohani' ),
          'section'  => 'roohani_footer_options',
          //'description' => __(//'<span class="text-warning"> Warning : </span>'
           //                  'It mightn\'t  changing live. ', 'roohani'),
          'settings' => 'footer_copyright_text',
          'type'     => 'text',
           'priority'    => 2,
        ));

         /// font-size

      $wp_customize->add_setting( 'footer_font_size', array(
        'default'   => '18px',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
      ));
         $wp_customize->add_control( 'footer_font_size_control', array(
          'label'    => __( 'Font size', 'roohani' ),
          'section'  => 'roohani_footer_options',
          'settings' => 'footer_font_size',
          'type'     => 'text',
           'input'   => array ( 'placeholder' => '18px' ),
           'priority'    => 2,
        ));
              $wp_customize->add_setting( 'footer_bg_color',
                array('default' => '#0e0e0e',
                      'transport' => 'postMessage',
                      'sanitize_callback' => 'sanitize_hex_color',
                   ));
              $wp_customize->add_setting( 'footer_text_color',
                array('default' => '#fff',
                      'transport' => 'postMessage',
                      'sanitize_callback' => 'sanitize_hex_color',
                   ));
              $wp_customize->add_setting( 'footer_link_color',
                array('default' => '#0e0e0e',
                      'transport' => 'postMessage',
                      'sanitize_callback' => 'sanitize_hex_color',
                   ));
              $wp_customize->add_setting( 'footer_separator_color',
                array('default' => '',
                      'transport' => 'postMessage',
                      'sanitize_callback' => 'sanitize_hex_color',
                   ));

                      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
                      'footer_bg_color_control', array(
                        'label'    => __( 'Footer Background Color', 'roohani' ),
                        'section'  => 'roohani_footer_options',
                        'settings' => 'footer_bg_color',
                        'priority' => 8,
                        )
                      ));
                      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
                      'footer_text_color_control', array(
                        'label'    => __( 'Footer Text Color', 'roohani' ),
                        'section'  => 'roohani_footer_options',
                        'settings' => 'footer_text_color',
                        'priority' => 7,
                        )
                      ));
                      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
                      'footer_link_color_control', array(
                        'label'    => __( 'Footer Link Color', 'roohani' ),
                        'section'  => 'roohani_footer_options',
                        'settings' => 'footer_link_color',
                        'priority' => 6,
                        )
                      ));
                      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
                      'footer_separator_color_control', array(
                        'label'    => __( 'Footer Separator Color', 'roohani' ),
                        'description' => __( ' It mightn\'t changing live. ', 'roohani'),
                        'section'  => 'roohani_footer_options',
                        'settings' => 'footer_separator_color',
                        'priority' => 9,
                        )
                      ));

  $wp_customize->add_setting( 'footer_link_hover_color',
  array('default' => '#ff0000',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
     ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
      'footer_link_hover_color_control', array(
        'label'    => __( 'Footer Hover Color ', 'roohani' ),
        'description' => __( ' It mightn\'t changing on mouseout. ', 'roohani'),
        'section'  => 'roohani_footer_options',
        'settings' => 'footer_link_hover_color',
        'priority' => 10,

        )
      ));

}
add_action( 'customize_register' , 'roohani_copy_right_options_panel' );



/**
 * Used by hook: 'customize_preview_init'
 */
function roohani_footer_bottum_live_preview() {
	wp_enqueue_script( 'roohani-footer-bottumm-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-copyright-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional)
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'roohani_footer_bottum_live_preview' );

?>
