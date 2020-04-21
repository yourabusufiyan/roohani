<?php


function roohani_after_setup() {
  function roohani_logo_setup() {
      $defaults = array(
          'height'      => 150,
          'width'       => 200,
          'flex-height' => true,
          'flex-width'  => true,
          'header-text' => array( 'site-title', 'site-description' ),
      );
      add_theme_support( 'custom-logo', $defaults );
  }
  add_action( 'after_setup_theme', 'roohani_logo_setup' );
   // Roohani supports

  add_theme_support( 'title-tag' ); // Enable support for title tags.
  add_theme_support( 'post-thumbnails' ); // Enable support for post thumbnails and featured images.
  add_theme_support( 'post-formats', array(
                    'status', 'quote', 'gallery',   // Enable support for the following post formats:
                    'image' , 'video', 'audio',    // aside, gallery, quote, image, and video
                    'link'  , 'aside', 'chat'
                    ) );
  add_theme_support( 'html5', array(
                      'comment-list',
                      'comment-form',
                      'search-form',
                      'gallery', 'caption'));
  add_theme_support( 'automatic-feed-links' );


  $defaults = array(
  	'default-color'          => '',
  	'default-image'          => '',
  	'default-repeat'         => 'no-repeat',
    'default-size'           => 'auto',
  	'default-attachment'     => 'fixed',
  	'wp-head-callback'       => '_custom_background_cb',
  );
  add_theme_support( 'custom-background', $defaults );
  add_theme_support( 'customize-selective-refresh-widgets' );
  if( !isset($content_width) ) {
    $content_width = 800;
  }

  // Load Roohani TextDomain
  load_theme_textdomain( 'roohani', get_template_directory() . '/languages' );

}
add_action('after_setup_theme', 'roohani_after_setup');

function roohani_shorten_text($string, $max_length, $append = '') {
    if (strlen($string) > $max_length) {
        $string = substr($string, 0, $max_length);
        $pos = strrpos($string, ' ');
        if ($pos === false) {
            return substr($string, 0, $max_length) . $append;
        }
        return substr($string, 0, $pos) . $append;
    } else {
        return $string;
    }
}



 function roohani_enqueue_sripts() {
   wp_enqueue_script('jquery');
   wp_enqueue_script('roohani-js', get_template_directory_uri() . '/assets/js/roohani-js.js', array( 'jquery' ), '1.1.4', true );
   wp_enqueue_script('lazy-load', get_template_directory_uri() . '/assets/js/lazyload.js', null, '1.0.9', false );
 }
 add_action('wp_enqueue_scripts', 'roohani_enqueue_sripts');


 function roohani_enqueue_style() {
   wp_enqueue_style('bootstrap4', get_template_directory_uri() . '/assets/thirdparty/bootstrap.min.css', array( 'roohani-style','customize-preview' ), '4.1.1', 'all');
   wp_enqueue_style('roohani-style',  get_template_directory_uri() . '/style.css', array( ), '1.1.4', 'all');
   wp_enqueue_style('transtion-style', get_template_directory_uri() . '/assets/css/roohani-transtion.css', array( ),  '1.1.4', 'all');
   wp_enqueue_style( 'font-awesome-free', get_template_directory_uri() . '/assets/thirdparty/fontawesome-free-5.6.1-web/css/all.min.css', '5.6.1' );
 }
 add_action('wp_enqueue_scripts', 'roohani_enqueue_style');


//Enqueue the Dashicons script

function roohani_load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'roohani_load_dashicons_front_end' );
/**
 * Roohani All menus
*/

function roohani_register_menus () {
   register_nav_menus( array(
    'main-menu'   => __( 'Main Menu', 'roohani'),
    'footer-menu' => __( 'Footer Menu', 'roohani')
   ));
};
add_action('init', 'roohani_register_menus');

/**
 * Roohani All Widgets
*/
 function roohani_widget() {
   register_sidebar( array (
      'name'          => __( 'Main Sidebar', 'roohani' ),
      'id'            => 'main-sidebar',
      'description'   => __( 'Add widgets for main sidebar here', 'roohani' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s shadow-sm mb-3 bg-light rounded">',
      'after_widget'  => '</aside>',
      'before_title'  => '<span class="widget-title bgani-red">',
      'after_title'   => '</span>',
   ));
   register_sidebar( array (
      'id'            => 'footer-1',
      'name'          => __( 'Footer Widget 1', 'roohani' ),
      'description'   => __( 'Add widget for Widget Footer 1', 'roohani' ),
      'before_widget' => '<aside id="%1$s" class="foo-widget %2$s mb-3">',
      'after_widget'  => '</aside>',
      'before_title'  => '<span class="widget foo-widget-title bgani">',
      'after_title'   => '</span>',

   ));
   register_sidebar( array (
      'id'            => 'footer-2',
      'name'          => __( 'Footer Widget 2', 'roohani' ),
      'description'   => __( 'Add widget for Widget Footer 2', 'roohani' ),
      'before_widget' => '<aside id="%1$s" class="foo-widget %2$s mb-3">',
      'after_widget'  => '</aside>',
      'before_title'  => '<span class="widget foo-widget-title bgani">',
      'after_title'   => '</span>',

   ));
   register_sidebar( array (
      'id'            => 'footer-3',
      'name'          => __( 'Footer Widget 3', 'roohani' ),
      'description'   => __( 'Add widget for Widget Footer 3', 'roohani' ),
      'before_widget' => '<aside id="%1$s" class="widget foo-widget %2$s mb-3">',
      'after_widget'  => '</aside>',
      'before_title'  => '<span class="foo-widget-title bgani">',
      'after_title'   => '</span>',

   ));
   register_sidebar( array (
      'id'            => 'footer-4',
      'name'          => __( 'Footer Widget 4', 'roohani' ),
      'description'   => __( 'Add widget for Widget Footer 4', 'roohani' ),
      'before_widget' => '<aside id="%1$s" class="widget foo-widget %2$s mb-3">',
      'after_widget'  => '</aside>',
      'before_title'  => '<span class="foo-widget-title bgani">',
      'after_title'   => '</span>',

   ));
 }
 add_action('widgets_init', 'roohani_widget');


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Roohani 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function roohani_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="post-more">
       Continue reading...
      <a href="%1$s" class="link-more">
        %2$s <i class="fas fa-arrow-right"></i>
      </a>
    </p>',

		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( ' <span class="screen-reader-text"> "%1$s" </span>', 'roohani' )
            , get_the_title( get_the_ID() ) )
	);

	return  str_replace('&lt;b&gt;',' ', $link);
}
add_filter( 'excerpt_more', 'roohani_excerpt_more' );

require_once( get_template_directory() . '/inc/post-conditions.php' );
// require_once( get_template_directory() . '/inc/related_posts.php' );
// Customizer start
require_once( get_template_directory() . '/inc/custo/theme_options.php' );
require_once( get_template_directory() . '/inc/custo/roohani-copyright.php' );
require_once( get_template_directory() . '/inc/custo/roohani-widget-options.php' );
require_once( get_template_directory() . '/inc/custo/roohani-call-action.php' );
require_once( get_template_directory() . '/inc/custo/roohani-top-bar.php' );
require_once( get_template_directory() . '/inc/custo/roohani-main-menu.php' );
require_once( get_template_directory() . '/inc/custo/roohani-body.php' );
// added in Roohani v1.0.7
require_once( get_template_directory() . '/inc/custo/roohani-scrol-indic.php' );



function roohani_theme_customize_css_output() {
   include( get_template_directory() . '/assets/css/style-customizer.php' );
}
add_action( 'wp_head' , 'roohani_theme_customize_css_output' );



?>
