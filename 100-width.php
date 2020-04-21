<?php
/**
 * Template Name: 100% width
 *
 * The template for displaying 100% width page tamplate
 *
 * @package Roohani
 * @since roohani 1.0
 */
?>
<?php get_header();?>

  <div class="jumbotron text-center">
    <h2><?php the_title_attribute();?></h2>
  </div>

      <main id="main" class="site-main padlr-2">
         <div class="row">
             <div class="content col-md-12">

                <?php if( have_posts() ) : while ( have_posts() ) : the_post();?>
                 <article id="<?php the_ID(); ?>" <?php post_class(); ?> >
                       <?php the_content(); ?>
                 </article>
                <?php // End  while.
                 endwhile; else :
                  get_template_part( 'templates/content', '404' );
                 endif;
                ?>

             </div>
          </div>
      </main>

    <!--<h3 class="text-center">It is 100-width.php</h3> -->
    <!-- Call to action start -->
      <?php get_template_part( '/templates/call-action');?>
    <!-- Call to action End-->

<?php get_footer(); ?>
