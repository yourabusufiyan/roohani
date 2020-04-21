<?php
/**
 * This is footer Template for every page
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
     <?php
        $roohani_contopbat = '';
        if (  get_theme_mod('roohani_body_fullwidth_padding', true) == 1 ) {
         $roohani_contopbat = 'container';
        };
      ?>
    <div class="<?php echo esc_attr( $roohani_contopbat ) ?> website-content">

    <header>
      <!-- Top Bar Start -->
      <?php
        $roohani_contopbat = '';
        if (  get_theme_mod('roohani_topbar_visibility', true) == false ) {
         $roohani_contopbat ='hidden';
        };
      ?>
       <div class="top-container" <?php echo esc_attr( $roohani_contopbat ); ?> id="social-icon" >
            <div class="row top padl-p" id="top-bar">
                <?php // Top left bar Icon   ?>
                <div class="bar col-md-4" id="bar-left top-left-icon">

                   <?php $roohani_url = esc_url_raw( get_theme_mod( 'roohani_facebook_url') );
                      if ( !empty( $roohani_url ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'roohani_facebook_url', '#') ); ?>"><i class="fab fa-facebook"></i></a>
                   <?php endif;?>

                   <?php $roohani_url = esc_url_raw( get_theme_mod( 'roohani_twitter_url', '') );
                      if ( !empty( $roohani_url ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'roohani_twitter_url' ) ); ?>">    <i class="fab fa-twitter-square"></i></a>
                   <?php endif;?>

                   <?php $roohani_url = esc_url_raw( get_theme_mod( 'roohani_youtube_url', '') );
                      if ( !empty( $roohani_url ) ) : ?>
                         <a href="<?php echo esc_url( get_theme_mod( 'roohani_youtube_url' ) ); ?>">    <i class="fab fa-youtube">       </i></a>
                   <?php endif;?>

                   <?php $roohani_url = esc_url_raw( get_theme_mod( 'roohani_instagram_url', '') );
                      if ( !empty( $roohani_url ) ) : ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'roohani_instagram_url' ) ); ?>">  <i class="fab fa-instagram">     </i></a>
                   <?php endif;?>

                   <?php $roohani_url = esc_url_raw( get_theme_mod( 'roohani_google_plus_url', '') );
                      if ( !empty( $roohani_url ) ) : ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'roohani_google_plus_url' ) ); ?>">  <i class="fab fa-google-plus">     </i></a>
                   <?php endif;?>

                   <?php $roohani_url = esc_url_raw( get_theme_mod( 'roohani_pinterest_url', '') );
                      if ( !empty( $roohani_url ) ) : ?>
                       <a href="<?php echo esc_url( get_theme_mod( 'roohani_pinterest_url' ) ); ?>">  <i class="fab fa-pinterest">     </i></a>
                   <?php endif;?>

                </div>
                <div class="bar  col-md-8" id="bar-right">
                  <p><?php echo esc_html(get_theme_mod( 'roohani_topbar_right_text', __('Welcome to our blog!', 'roohani') ))?></p>
                </div>

            </div><?php // Top Bar container end ?>
       </div>
      <!-- Top Bar End -->

	  <!-- Header Title Start -->
      <div class="container">
        <div class="header-info">
          <?php $roohani_custom_logo_id = get_theme_mod( 'custom_logo' );
              $roohani_logo = wp_get_attachment_image_src( $roohani_custom_logo_id , 'medium' );
              if ( has_custom_logo() ) {
                    echo  '<img src="' . esc_url( $roohani_logo[0] ) . '" width="300px" height="100px" >';
              } else {
                $roohani_header_site_title = '<h1 class="site-title"><a href="' . esc_url( home_url('/') ) . '">' . get_bloginfo( 'name' ) . '</a></h1>';
                echo $roohani_header_site_title;
                $roohani_header_site_desc =  '<p class="site-description">' . get_bloginfo( 'description' ) . '</p>' ;
                echo roohani_shorten_text($roohani_header_site_desc, 190, '...');
              }?>
        </div>
      </div>
      <!-- Header Title End -->

      <!-- Nav bar Start -->
         <?php $roohani_Top_menu = array(
            'theme_location'  => 'main-menu',
            'container'       => 'nav',
            'container_class' => 'nav-bar menu-container ',
            'container_id'    => 'desk',
            'menu_class'      => 'navigations',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '<span class="menu-item">',
            'after'           => '</span>',
            'link_before'     => ' <span class="menu-title"> ',
            'link_after'      => '</span>',
            'items_wrap'      => '<ul id="%1$s" class="%2$s"> %3$s </ul>',
            'depth'           => 0,
        );
        function roohani_main_menu() {
           echo '<nav id="desk" class="nav-bar menu-container" style="color: white; padding: 10px;"><h3><a href="/wp-admin/nav-menus.php" target="_blank">Create Menu to appear here</a></h3></nav>';
        }
        ?>
          <?php wp_nav_menu( $roohani_Top_menu ); ?>
         <div class="icons-container">
           <div id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div> <span class="icon-text"><?php _e('Menu', 'roohani');?>
          </span>
         </div>



<!--        Mobile Menu -->
               <?php $roohani_bottom_menu = array(
            'theme_location'  => 'main-menu',
            'container'       => 'mob-nav',
            'container_class' => 'mob-nav-bar mob-menu-container ',
            'container_id'    => 'mobile-nav',
            'menu_class'      => 'mob-navigations mobShow',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '<span class="mob-menu-item">',
            'after'           => '</span>',
            'link_before'     => ' <span class="mob-menu-title"> ',
            'link_after'      => '</span>',
            'items_wrap'      => '<ul id="%1$s" class="%2$s"> %3$s </ul>',
            'depth'           => 0,
        );
        ?>
        <?php wp_nav_menu( $roohani_bottom_menu ); ?>
      <!-- Nav bar End -->
    </header>
