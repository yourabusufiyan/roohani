<?php
/**
 * This Template for Archive
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<?php get_header();?>

   <div class="page" id="main">

      <div class="container">
        <?php if ( have_posts() ) :

         /* This code is for showing Category, Date, tags etc icon*/
            if ( is_date() ) {
               $roohani_archive_icons_type = 'calendar-alt';
            } elseif ( is_tag() ) {
               $roohani_archive_icons_type = 'tags';
            } elseif ( is_time() ) {
               $roohani_archive_icons_type = 'clock';
            } elseif ( is_category() ) {
               $roohani_archive_icons_type = 'th';
            } elseif ( is_search() ) {
               $roohani_archive_icons_type = 'search';
            }
            echo '<i class="fa fa-' .  esc_attr( $roohani_archive_icons_type ) . ' fa-4x fa-border single-post-type-icon"></i>';
        ?>
        <div class="row">
          <div class="col-md-8">
            <div class="content-header">
              <?php
                the_archive_title('<h1 class="page-title">','</h1>');
                the_archive_description('<p class="archive-desc">','</p>');
              ?>
              <hr/>
            </div>

            <?php  while ( have_posts() ) : the_post() ?>

            <div class="shadow-sm  bg-light rounded">
              <article id="<?php the_ID(); ?>" <?php post_class(); ?> >
                <section class="index-excerpt">

                   <div class="post-thumbnail" id="box">
                   <?php $roohani_featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                      if ( has_post_thumbnail() ) {
                         echo '<img data-src="' .
                              esc_url($roohani_featured_img_url) .
                              '" src="' .
                              esc_url( get_theme_mod( 'roohani_loading_image', 0 ) ? get_theme_mod( 'roohani_loading_image' ) : get_template_directory_uri() .  '/assets/images/loading.gif' ) . '" />';
                      } else {
                         echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/default-thumbnail.jpg').'"/>';
                      }?>
                   </div>

                   <div class="post-header">

                        <?php if( ! get_the_title() == '' ) {
                              the_title( $roohani_titlePostIcon . '<h1><a href="' . esc_url( get_permalink() ) . '">' , '</a></h1>' );
                          } else {
                        ?> <h1>
                              <a href="<?php esc_attr( esc_url( get_permalink() ) ); ?>">
                                <span class="no-title">
                                  <?php esc_html_e( 'This Post has not Title', 'roohani'); ?>
                                </span>
                              </a>
                            </h1>
                        <?php } ?>

                         <p><i class="fas fa-clock padr-h"></i><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?>
                         | <i class="fas fa-folder padlr-h"></i><?php the_category(', '); ?>
                         | <i class="fas fa-user padlr-h"></i><a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
                         <?php the_author(); ?></a> - <?php edit_post_link( __('Edit', 'roohani') , '<i class="fas fa-edit"></i> ', ''); ?></p>
                   </div>

                   <div class="post-excerpt">
                     <?php the_excerpt('More'); ?>
                   </div>

                </section>
              </article>
            </div>

            <?php endwhile; else : ?>
              <h1><?php esc_html_e('Oppps!!! 404', 'roohani'); ?></h1>
              <p><?php esc_html_e('Sorry! Content doesn\'t exits', 'roohani'); ?></p>
            <?php endif;?>

            <div class="page-pagination">
              <?php $roohani_args = array(
              'prev_text'          => __('<i class="fas fa-less-than"></i>', 'roohani'),
              'next_text'          => __('<i class="fas fa-greater-than"></i>', 'roohani'),
              );
              echo the_posts_pagination( $roohani_args ); ?>
            </div>

          </div>

          <aside class="col-md-3">
             <section class="sidebar">
                <?php get_sidebar(); ?>
             </section>
          </aside>
        <div class="clearfix"></div>

       </div>
     </div>
    <!-- End Container -->
    </div>
    <!-- <h3>It is Archive.php</h3> -->

<?php get_footer(); ?>
