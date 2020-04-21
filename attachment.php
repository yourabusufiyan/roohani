<?php /**
 * The template for displaying all single posts and attachments and so
 *
 * @package Roohani
 * @since roohani 1.0
 */
?>
<?php get_header();?>

   <div class="page" id="main" role="main">

    <div class="container">
      <div class="row">
        <div class="content col-md-8">
         <main id="main" class="site-main">
          <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <div class="prev-wrapper">
             <?php if( stripos( $post->post_mime_type, 'mage' ) ) : ?>
                <img src="<?php echo esc_url( $post->guid ) ?>" class="img-thumbnail" />
             <?php elseif( stripos( $post->post_mime_type, 'ideo' ) ) : ?>
                <video width="400" controls>
                  <source src="<?php echo esc_url( $post->guid ) ?>" type="video/mp4">
                  <?php _e('Your browser does not support HTML5 video.', 'roohani'); ?>
                </video>
             <?php endif; ?>
           </div>
           <div class="row table-dark">
               <span class="col-md-2 attach-col"><?php esc_html_e('Media Title', 'roohani'); ?></span>
               <span class="col-md-10"><?php echo esc_html($post->post_title); ?></span>

               <span class="col-md-2 attach-col"><?php esc_html_e('Description', 'roohani'); ?></span>
               <span class="col-md-10"><?php if(!empty($post->post_excerpt)){ echo  esc_html($post->post_excerpt);}else{ esc_html_e('Empty', 'roohani'); }  ?></span>

               <span class="col-md-2 attach-col"><?php esc_html_e('ID', 'roohani'); ?></span>
               <span class="col-md-10"><a href="<?php echo esc_url(get_author_posts_url( $post->post_author )); ?>"><?php the_author(); ?></a></span>

               <span class="col-md-2 attach-col"><?php esc_html_e('Upload by', 'roohani'); ?></span>
               <span class="col-md-10"><?php echo esc_html($post->post_author); ?></span>

               <span class="col-md-2 attach-col"><?php esc_html_e('Type', 'roohani'); ?></span>
               <span class="col-md-10"><?php echo esc_html($post->post_mime_type); ?></span>

               <span class="col-md-2 attach-col"><?php esc_html_e('Comments', 'roohani'); ?></span>
               <span class="col-md-10"><?php echo esc_html($post->comment_status); ?></span>
               <span class="col-md-2 attach-col"><?php esc_html_e('URL', 'roohani'); ?></span>
               <span class="col-md-10"><?php echo esc_html($post->guid); ?></span>
           </div>
           <pre> <?php
           // remove comment to see all information about attachment
           // var_export( $post );
           ?> </pre>

          <?php // If comments are open or have at least 1 comment. then load up the comment template.
           if( comments_open() || get_comments_number() ) :
             comments_template();
            endif;

          // End the loop.
           endwhile; else :
            get_template_part( 'templates/content', '404' );
           endif;
          ?>
          </main>
        </div>
        <aside class="col-md-4">
           <section class="side">
              <?php get_sidebar(); ?>
           </section>
        </aside>
       <div class="clearfix"></div>
      </div>

    </div>

    </div>
    <!-- <h3>It is attachement.php</h3> -->

<?php get_footer(); ?>
