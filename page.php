<?php /**
 * The template for displaying default page tamplate
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
      <main id="main" class="site-main">
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
      </div>


    <!--<h3 class="text-center">It is page.php</h3> -->
    
    <!-- Call to action start -->
      <?php get_template_part( '/templates/call-action');?>
    <!-- Call to action End-->

<?php get_footer(); ?>
