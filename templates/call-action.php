
<?php
/**
 * This Template for CTA
 *
 * @package Roohani
 * @since Roohani 1.0
 */

  $roohani_conctadisplay = '';
  if ( get_theme_mod('roohani_cta_visibility', true) === false ) {
   $roohani_conctadisplay = 'hidden';
  } else {
    $roohani_conctadisplay = '';
  }

?>
<div class="call-action clearfix" <?php echo $roohani_conctadisplay; ?> >
   <div class="action-width">
      <div class="action-wrapper">
        <div class="details-wrapper">
          <h2><?php echo esc_html( get_theme_mod('roohani_cta_title', __('A nice attention grabbing header!', 'roohani')) ); ?></h2>
          <p><?php echo esc_html( get_theme_mod('roohani_cta_desc', __('A descriptive sentence for the Call To Action (CTA).', 'roohani')) ); ?></p>
        </div>
        <a class="action-button " href="<?php echo esc_url( get_theme_mod( 'roohani_cta_url', home_url() . '/contact' ) ); ?>"><?php echo esc_html( get_theme_mod('roohani_cta_btn_text', __('Contact Us', 'roohani')) ); ?></a>
        <div class="clearfix"></div>
      </div>
  </div>
</div>
