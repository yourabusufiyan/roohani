<?php
/**
 * This is search page Template
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<?php get_header();?>

   <div class="page" id="main">
    <div class="container">

      <i class="fa fa-search fa-4x fa-border single-post-type-icon"></i>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <?php if ( have_posts() ) : ?>
          <div class="content-header">
            <h2 class="archive-title"><span style="color: red;"><?php esc_html_e( 'Search Results for :', 'roohani' ); ?>
              </span> <span style="text-decoration: underline;"><?php echo esc_attr(get_search_query()); ?></span></h2>
            <hr/>
          </div>

          <?php  while ( have_posts() ) : the_post() ?>

          <div class="shadow-sm  bg-light rounded">
            <article id="<?php the_ID(); ?>" <?php post_class(); ?> >

              <section class="index-excerpt">

                 <div class="post-thumbnail" id="box">
                 <?php $roohani_featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
                    if ( has_post_thumbnail() ) {
                       echo '<img data-src="' . esc_url($roohani_featured_img_url) .  '" src="' . esc_url( get_theme_mod( 'roohani_loading_image', 0 ) ? get_theme_mod( 'roohani_loading_image' ) : get_template_directory_uri() .  '/assets/images/loading.gif' ).'"/>';
                    } else {
                       echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/default-thumbnail.jpg').'"/>';
                    }?>
                 </div>

                 <div class="post-header">
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

                        if( ! get_the_title() == '' ) {
                            the_title( $roohani_titlePostIcon.'<h1><a href="'.esc_url( get_permalink() ).'">' , '</a></h1>' );
                        } else {
                   ?> <h1><a href="<?php esc_url( get_permalink() )?>"><span class="no-title"> <?php esc_html_e( 'This Post has not Title', 'roohani') ?></span></a></h1> <?php
                        }
                       ?>

                       <p><span class="post-header-meta"><i class="fas fa-clock padr-h"></i><?php echo esc_html( the_date(get_option('date_format')) ); ?><?php esc_html_e(' at ', 'roohani')?><?php esc_html( the_time(get_option('time_format')) ); ?></span>
                       | <span class="post-header-meta"><i class="fas fa-folder padlr-h"></i> <?php the_category(', '); ?></span>
                       | <span class="post-header-meta"><i class="fas fa-user padlr-h"></i><a href="<?php echo esc_url(get_author_posts_url( $post->post_author )); ?>">
                       <?php the_author(); ?></a> <?php edit_post_link( __('Edit', 'roohani') , '- <i class="fas fa-edit"></i> ', ''); ?></span>
                       | <span class="post-header-meta"><?php echo $roohani_echoPostIcon . ' : ' . esc_html( ucwords( $roohani_post_type_title ) ) ; ?></span>
                       </p>
                 </div>

                 <div class="post-excerpt">
                   <?php the_excerpt(__('More', 'roohani')); ?>
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


    </div>
    <!-- <h3>It is search.php</h3> -->

<?php get_footer(); ?>
