<?php
/**
 * This file for customizer
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */

function roohani_theme_options_panel( $wp_customize ) {
    $wp_customize->add_panel( 'theme_options', array(
    'title' => __( 'Theme Setting', 'roohani' ),
    'description' => __('This Panel is for coloring', 'roohani'), // Include html tags such as <p>.
    'priority' => 10, // Mixed with top-level-section hierarchy.
     )
  );

$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
$wp_customize->get_setting( 'blogname' )->sanitize_callback = 'sanitize_text_field';

$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
$wp_customize->get_setting( 'blogdescription' )->sanitize_callback = 'sanitize_text_field';


}
add_action( 'customize_register' , 'roohani_theme_options_panel' );





function roohani_custo_live_preview() {
	wp_enqueue_script( 'roohani-live-customizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/roohani-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',			 		//Define a version (optional)
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'roohani_custo_live_preview' );











?>
