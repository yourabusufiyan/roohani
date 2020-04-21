<?php
/**
 * This Template for 404 Page
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<?php get_header();?>

<div id="contan-404 main-content" class="page-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center page-404 padb-10 padt-1">
        <h1 id="title" title="error 404"><?php esc_html_e('404', 'roohani') ?></h1>
        <h3><?php esc_html_e('Oops, the page you\'re looking for does not exist.', 'roohani'); ?></h3>
        <div class="col-md-8 col-md-offset-left-2 form-shadow-404">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End container -->
</div>

<!-- Call to action start -->
  <?php get_template_part( '/templates/call-action');?>
<!-- Call to action End-->

<?php get_footer();?>
