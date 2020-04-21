<?php
/**
 * The file for Customizer setting output
 *
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<style>


<?php if ( is_user_logged_in() ) : ?>
  .single-post-type-icon {
      top: 45px;
  }
<?php endif; ?>

body {
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_body_bg_color' ) ); ?>;
}

.website-content {
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_body_color' ) ); ?>;
}
body a {
 color: <?php echo esc_attr( get_theme_mod( 'roohani_anchor_link_color' ) ); ?>;
}

body a:hover {
 color: <?php echo esc_attr( get_theme_mod( 'roohani_anchor_link_hover_color' ) ); ?>;
}

p {
 color: <?php echo esc_attr( get_theme_mod( 'roohani_body_font_color' ) ); ?>;
}
  /* Top bar start  */

.top-container {
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_bg_color', '#e5e5e5' ) ); ?>;
  display: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_visibility' ) ); ?>;
}

@media only screen and (min-width: 600px) {
     #top-bar {
      padding: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_padding' ) ); ?>;
      margin: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_margin' ) ); ?>;
    }
}
#top-bar #bar-right p {
  color: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_color' ) ); ?>;
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_font_size' ) ); ?>;
}
#social-icon a i  {
  color: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_icon_color' ) ); ?>;
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_topbar_icon_size' ) ); ?>;
}

  /* Top bar End  */

.nav-bar {
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_menu_container_bg_color' ) ); ?>;
  padding: <?php echo esc_attr( get_theme_mod( 'roohani_menu_container_padding' ) ); ?>;
}

.navigations a {
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_menu_font_size' ) ); ?>;
  padding: <?php echo esc_attr( get_theme_mod( 'roohani_menu_padding' ) ); ?>;
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_menu_bg_color' ) ); ?>;
  color: <?php echo esc_attr( get_theme_mod( 'roohani_menu_color' ) ); ?>;
}
.navigations a:hover {
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_menu_hover_bg_color' ) ); ?>;
  color: <?php echo esc_attr( get_theme_mod( 'roohani_menu_hover_color' ) ); ?>;
}

  /* CTA start */

.call-action .action-wrapper {
  padding: <?php echo esc_attr( get_theme_mod( 'roohani_cta_padding' ) );?>;
  /* background-color: <?php echo esc_attr( get_theme_mod( 'roohani_cta_bg_color' ) );?>; */
}
.call-action {
  /* background-color: <?php echo esc_attr( get_theme_mod( 'roohani_cta_bg_color' ) );?>; */
}
.details-wrapper h2  {
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_cta_title_size' ) );?>;
  color: <?php echo esc_attr( get_theme_mod( 'roohani_cta_title_color' ) );?> !important;
}
.details-wrapper p {
  color: <?php echo esc_attr( get_theme_mod( 'roohani_cta_desc_color' ) );?>;
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_cta_desc_size' ) );?>;
}
.action-wrapper a {
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_cta_btn_font_size' ) );?>;
  color: <?php echo esc_attr( get_theme_mod( 'roohani_cta_button_color' ) );?>;
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_cta_btn_bg_color' ) );?>;
}

  /* CTA End */

  /* Widgets start */

.foo-widget .foo-widget-title {
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_footer_wdgt_font_size' ) );?>;
  color: <?php echo esc_attr( get_theme_mod( 'roohani_footer_wdgt_title_font_size' ) );?>;
  background-color: <?php echo esc_attr( get_theme_mod( 'roohani_footer_wdgt_title_bg_color' ) );?>;
}

.textwidget {
  font-size: <?php echo esc_attr( get_theme_mod( 'roohani_footer_wdgt_font_size' ) );?>;
  color: <?php echo esc_attr( get_theme_mod( 'roohani_footer_wdgt_font_size' ) );?>;
}
footer .footer-widget {
  padding: <?php echo esc_attr( get_theme_mod( 'roohani_footer_wdgt_padding' ) );?>;
}

  /* Widgets End */

  /* Copyright bar Start */

footer .copyright-bar {
  background-color: <?php echo esc_attr( get_theme_mod( 'footer_bg_color' ) );?>;
  color: <?php echo esc_attr( get_theme_mod( 'footer_text_color' ) );?>;
}

footer .copyright-bar .footer-buttom #bar-right a {
  color: <?php echo esc_attr( get_theme_mod( 'footer_text_color' ) );?>;
}
footer .copyright-bar .footer-buttom #bar-left a {
  color: <?php echo esc_attr( get_theme_mod( 'footer_link_color' ) );?>;
}
.footer-buttom .foo-nav-bar ul li+li:before {
  color: <?php echo esc_attr( get_theme_mod( 'footer_separator_color' ) );?>;
}
footer .copyright-bar .footer-buttom a {
 color: <?php echo esc_attr( get_theme_mod( 'footer_link_hover_color' ) );?>;
}
  /* Copyright bar End */

/* scroll-indicator */
.scroll-indicator {
  height: <?php echo esc_attr( get_theme_mod('scroll_indic_height') );?> !important;
  background: <?php echo esc_attr(  get_theme_mod('scroll_indic_bg_color') );?> !important;
}
.scroll-indicator .progress-bar {
  background: <?php echo esc_attr( get_theme_mod('scroll_indic_color') );?> !important;
}
/* end scroll-indicator */

/* Author.php */

.user-profile {
  background: url('<?php echo esc_url( get_template_directory_uri().'/assets/images/author-background.png' );?>');
}

</style>
