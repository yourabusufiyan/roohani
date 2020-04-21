<?php
/**
 * This is footer Template for every page
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<footer>
    <div class="topicon">
      <a href="#top"><i class="fas fa-arrow-up"></i></a>
    </div>

    <div class="footer-widget">
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        <div class="col-md-3 col-sm-6">
          <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>

      </div>
    </div>



    <div class="copyright-bar" id="copyrights">
        <div class="row footer-buttom">
            <div class="col-md-6 foo-left" id="bar-left">
              <span class="foo-copy">
                <?php
                 $roohani_cptext = __('Copyright', 'roohani').' '.esc_html( get_bloginfo( 'title' ) );
                 echo wp_kses_data(
                   get_theme_mod( 'footer_copyright_text', $roohani_cptext )
                  );
                ?>
              </span>
            </div>
            <div class="col-md-6" id="bar-right">
                    <!-- Footer Navbar Start -->
                     <?php $roohani_footer_menu = array(
                        'theme_location'  => 'footer-menu',
                        'container'       => 'div',
                        'container_class' => 'foo-nav-bar',
                        'container_id'    => '',
                        'menu_class'      => 'foo-nav',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '<span class="foo-item">',
                        'after'           => '</span>',
                        'link_before'     => ' <span class="foo-title"> ',
                        'link_after'      => '</span>',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s"> %3$s </ul>',
                        'depth'           => 1,
                    );
                    ?>

                    <?php wp_nav_menu( $roohani_footer_menu ); ?>

                  <!-- Footer Navbar End -->
            </div>
        </div>
    </div>

    </footer>
    <?php wp_footer(); ?>
    </div>
  </body>
</html>
