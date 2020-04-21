<?php /**
 * The template for displaying all single posts and attachments and so
 *
 * @package Roohani
 * @since roohani 1.0
 */
?>
<?php get_header();?>

   <?php get_template_part( 'templates/scroll-indicator' ); ?>

   <main class="page" id="main" role="main">
    <?php if( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="container">
      <div class="single-post-type-icon">
        <?php
         /*
          * This code is for showing Post Type icon
          * Don't Modify it. If, You haven't create new Post Type.
          */
          $roohani_post_type_icon = get_post_format();

          switch ($roohani_post_type_icon) {
              case "status":
                  $roohani_post_type_icon = get_template_directory_uri() . '/assets/images/status-icon.png';
                  $roohani_post_type_title = __('Status', 'roohani');
                  break;
              case "quote":
                  $roohani_post_type_icon = "quote-left";
                  $roohani_post_type_title = __('Quote', 'roohani');
                  break;
              case "gallery":
                  $roohani_post_type_icon = "images";
                  $roohani_post_type_title = __('Gallery', 'roohani');
                  break;
              case "image":
                  $roohani_post_type_icon = "file-image";
                  $roohani_post_type_title = __('Image', 'roohani');
                  break;
              case "video":
                  $roohani_post_type_icon = "video";
                  $roohani_post_type_title = __('Video', 'roohani');
                  break;
              case "audio":
                  $roohani_post_type_icon = "volume-up";
                  $roohani_post_type_title = __('Audio', 'roohani');
                  break;
              case "link":
                  $roohani_post_type_icon = "link";
                  $roohani_post_type_title = __('Link', 'roohani');
                  break;
              case "aside":
                  $roohani_post_type_icon = "sticky-note";
                  $roohani_post_type_title = __('Aside', 'roohani');
                  break;
              case "chat":
                  $roohani_post_type_icon = "chat";
                  $roohani_post_type_title = __('Chat', 'roohani');
                  break;
              default :
                $roohani_post_type_icon = "thumbtack";
                $roohani_post_type_title = __('Standard', 'roohani');
          }

          if ( $roohani_post_type_icon !== get_template_directory_uri() . '/assets/images/status-icon.png') {
             $roohani_echoPostIcon = '<i title="'. esc_attr__('Post Type is : ', 'roohani') . esc_attr( $roohani_post_type_title )  . '" class="fa fa-'
               . esc_attr( $roohani_post_type_icon ) .  ' fa-4x fa-border"></i>';

             $roohani_mobilePostIcon = '<i title="'. esc_attr__('Post Type is : ', 'roohani') . esc_attr( $roohani_post_type_title )  . '" class="mobilePostIcon fa fa-'
               . esc_attr( $roohani_post_type_icon ) .  '   fa-border single-post-type-icon"></i>';

             $roohani_titlePostIcon = '<i title="'. esc_attr__('Post Type is : ', 'roohani') . esc_attr( $roohani_post_type_title )  . '" class="titlePostIcon fa fa-'
               . esc_attr( $roohani_post_type_icon ) .  '   fa-border single-post-type-icon"></i>';
          } else {
             $roohani_echoPostIcon =   '<img src=" ' . esc_url( $roohani_post_type_icon ) . ' " class="fa fa-5x fa-border">' ;
             $roohani_mobilePostIcon = '<img src=" ' . esc_url( $roohani_post_type_icon ) . ' " class="fa   fa-border single-post-type-icon mobilePostIcon">' ;
             $roohani_titlePostIcon =  '<img src=" ' . esc_url( $roohani_post_type_icon ) . ' " class="fa   fa-border single-post-type-icon"> ' ;
          }
          echo $roohani_echoPostIcon;
        ?>

        <?php edit_post_link( __(' Edit This', 'roohani') , '<p><i class="fas fa-edit"></i>', '</p>'); ?>
      </div>

      <div class="row">

         <div class="content col-md-8">
             <main id="content" class="site-main">
               <?php

               get_template_part( 'templates/content' );
               get_template_part( 'inc/related_posts' );

              // If comments are open or have at least 1 comment. then load up the comment template.
               if( comments_open() || get_comments_number() ) :
                 comments_template();
                endif;
               ?>

              <div class="nexpre">
              <?php  // Previous/next post navigation.
                the_post_navigation( array(
                    'prev_text' => '<span class="screen-reader-text col-sm-6">' . __( 'Previous post : ', 'roohani' ) . '</span> ' .
                        '<span class="post-title">%title</span>',

                    'next_text' => '<span class="screen-reader-text col-sm-6">' . __( 'Next post : ', 'roohani' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );
              ?></div> <?php
              // End the loop.
               endwhile; else :
                get_template_part( 'templates/content', '404' );
               endif;
              ?>

             </main>
            </div>
            <aside class="col-md-3">
               <section class="side">
                  <?php get_sidebar(); ?>
               </section>
            </aside>
          <div class="clearfix"></div>
        </div>

        </div>
    <!-- <h3>It is single.php</h3> -->
      </main>

    <!-- Call to action start -->
      <?php get_template_part( '/templates/call-action');?>
    <!-- Call to action End-->

  <!-- Call to action End-->
<?php get_footer(); ?>
