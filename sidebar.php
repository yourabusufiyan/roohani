<?php
 /**
 * Roohani's main side bar
 *
 * @package Roohani
 * @since ro 1.0
 */
?>
 <?php if ( ! is_active_sidebar( 'main-sidebar' ) ) :?>
      <p><?php _e('This is widget area', 'roohani'); ?></p>
      <?php wp_meta() ?>
  <?php endif;?>

 <div class="sidebar-contents">
  <?php dynamic_sidebar('main-sidebar'); ?>
 </div>
