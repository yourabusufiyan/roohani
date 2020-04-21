<?php
/**
 * Template Name: Right Sidebar
 *
 * The template for displaying right sidebat page tamplate
 *
 * @package Roohani
 * @since roohani 1.0
 */
?>
<?php get_header();?>

  <div class="jumbotron text-center">
    <h2><?php the_title_attribute();?></h2>
  </div>
    <div class="container">
      <main id="main" class="site-main padlr-2">
         <div class="row">
             <div class="content col-md-7 col-md-offset-left-1">

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

              <div class="col-md-3">
                <?php get_sidebar(); ?>
              </div>

           </div>
        </main>
   </div>

    <!-- <h3 class="text-center">It is Page with right sider</h3> -->
    <!-- Call to action start -->
      <?php get_template_part( '/templates/call-action');?>
    <!-- Call to action End-->

<?php get_footer(); ?>
