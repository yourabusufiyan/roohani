<?php /**
 * The template for scroll indicator.
 *
 * @package Roohani
 * @since roohani 1.0.7
 */
?>
<?php if( get_theme_mod('scroll_indic_display', '1') == '1' ) : ?>
  <!-- scroll-indicator -->
  <div class="progress scroll-indicator">
    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0"
    aria-valuemin="0" aria-valuemax="100" style="width:40%"></div>
  </div>
  <!-- end scroll-indicator -->
<?php endif; ?>
