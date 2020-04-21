<?php
/**
 * This Template for Author page
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<?php get_header();?>

<div class="container user-profile">
  <div class="user-info">
		<div class="row">

			<div class="col-md-2 col-sm-4">
				<div id="user_picture">
				  <?php
          $roohani_user = wp_get_current_user();
          if ( $roohani_user ) :
           ?>
           <img src="<?php echo esc_url( get_avatar_url( $roohani_user->ID ) ); ?>" />
          <?php endif; ?>
				</div>
			</div>

			<div class="col-md-8 user-info col-sm-8">

    			<div class="user-data-top">
            <h1 class="user-title"><?php
                if( get_the_author_meta( 'display_name' ) !== '' ) {
                   the_author_meta( 'display_name' );
                } else {
                  echo esc_html__('User Name Doesn\'t exit', 'roohani');
                }?>
            </h1>
            <h1 class="user-icon"></h1>
    			</div>

          <p><i class="fas fa-user"></i><?php
             if( get_the_author_meta( 'description' ) !== '' ) {
                the_author_meta( 'description' );
             } else {
                echo esc_html__('User Bio Doesn\'t exit', 'roohani');
             }?>
          </p>
        <hr>

        <div class="row">

          <div class="col-md-5"><p><i class="fas fa-envelope"></i><?php
            if( get_the_author_meta( 'user_email' ) !== '' ) {
               the_author_meta( 'user_email' );
            } else {
               esc_html_e('User E-mail Doesn\'t exit', 'roohani');
            }?></p>
          </div>

          <div class="col-md-7"><p><i class="fas fa-globe"></i>
            <a href="<?php the_author_meta( 'user_url' ); ?>" target="_blank"><?php
              if( get_the_author_meta( 'user_url' ) !== '' ) {
                 the_author_meta( 'user_url' );
              } else {
                 esc_html_e('User Website Doesn\'t exit', 'roohani');
              }
            ?></a></p>
          </div>

          <!-- <div class="col-md-4"><p></p></div> -->
        </div>
			</div>
			<div class="col-md-2"></div>

    </div>
  </div>
  <!-- End User Info -->
</div>
<!-- End container user-profile -->

<div class="page" id="main">

  <div class="container">
    <div class="row">
      <div class="col-md-7 col-md-offset-left-1 col-sm-offset-left-1">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

        <div class="shadow-sm  bg-light rounded">
          <article id="<?php the_ID(); ?>" <?php post_class(); ?> >

            <section class="index-excerpt">

               <div class="post-thumbnail" id="box">
               <?php $roohani_featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                  if ( has_post_thumbnail() ) {
                     echo '<img data-src="' . esc_url($roohani_featured_img_url) .  '" src="' . esc_url(get_template_directory_uri() .  '/assets/js/jquery/lazyload/loading.svg').'"/>';
                  } else {
                     echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/default-thumbnail.jpg').'"/>';
                  }?>
               </div>

               <div class="post-header">
                    <?php if( ! get_the_title() == '' ) {
                          the_title( $roohani_titlePostIcon . '<h1><a href="' . esc_url( get_permalink() ) . '">' , '</a></h1>' );
                      } else { ?>
                        <h1>
                          <a href="<?php esc_url( get_permalink() )?>">
                            <span class="no-title">
                              <?php esc_html_e( 'This Post has not Title', 'roohani'); ?>
                            </span>
                          </a>
                        </h1>
                      <?php }; ?>

                     <p><i class="fas fa-clock padr-h"></i><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?>
                     | <i class="fas fa-folder padlr-h"></i> <?php the_category(', '); ?>
                     |  <i class="fas fa-user padlr-h"> </i>  <a href="<?php echo esc_url(get_author_posts_url( $roohani_post->post_author )); ?>">
                   <?php the_author(); ?></a> - <?php edit_post_link( __('Edit', 'roohani') , '<i class="fas fa-edit"></i> ', ''); ?></p>
               </div>

               <div class="post-excerpt">
                 <?php the_excerpt('More'); ?>
              </div>

            </section>

          </article>
        </div>


          <?php endwhile; else : ?>
            <h1><?php __('Oppps!!! 404', 'roohani'); ?></h1>
            <p><?php __('Sorry! Content doesn\'t exits', 'roohani'); ?></p>
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


</div>
    <!-- <h3>It is Autho.php</h3> -->

<?php get_footer(); ?>
