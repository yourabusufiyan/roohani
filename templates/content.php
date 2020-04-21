<?php
/**
 * This Template for Content
 *
 * @package Roohani
 * @since Roohani 1.0
 */
 global $roohani_echoPostIcon, $roohani_post_type_icon;
?>
<article id="<?php the_ID(); ?>" <?php post_class(); ?> >
    <section class="index-excerpt">
       <div class="single-post-thumb">
          <?php the_post_thumbnail(); ?>
       </div>

       <div class="single-post-info">
         <?php if( ! get_the_title() == '' ) {
              echo '<h1>' . esc_html( get_the_title() ) . '</h1>';
          } else {
          ?> <h1><span class="no-title"><?php esc_html_e( 'This Post has not Title', 'roohani') ?></span></h1>
        <?php }; ?>
         <p>
           <span class="post-header-meta"><?php the_date(get_option('date_format')); ?><?php _e('at', 'roohani');?> <?php the_time(get_option('time_format')); ?></span>
           | <span class="post-header-meta"><?php _e('Author', 'roohani');?> : <a href="<?php echo esc_url(get_author_posts_url( $post->post_author )); ?>"><?php esc_html( the_author() ); ?></a></span>
           | <span class="post-header-meta"><?php _e('Category', 'roohani'); ?> : <?php the_category(', '); ?></span>
           | <span class="post-header-meta"><?php echo $roohani_echoPostIcon . ' : ' . ucwords( $roohani_post_type_icon ) ; ?></span>
         </p>
         <hr/>
       </div>
       <div class="clearfix"></div>

       <div class="single-post-content col-md-12">
           <div class="post-cols">
              <?php the_content(); ?>
             <?php wp_link_pages(); ?>
           </div>
       </div>

       <?php
       $roohani_postlink = get_permalink( $post );
       $roohani_posturl =  esc_attr( urlencode_deep( $roohani_postlink ) );
       ?>
      <hr>
      <div class="social-share">
         <?php // <i class="fas fa-share-alt"></i>?><span class="share-it"><?php esc_html_e('Share it', 'roohani'); ?></span> :
         <div class="shareicons">
           <a href="http://www.facebook.com/sharer.php?u=<?php echo $roohani_posturl ;?>" rel="nofollow" target="_blank"><i class="fab fa-facebook-f shareicon"></i></a>
           <a href="http://twitter.com/share?text=<?php the_title_attribute(); ?>&url=<?php echo $roohani_postlink; ?>" rel="nofollow" target="_blank"><i class="fab fa-twitter shareicon"></i></a>
           <a href="https://plus.google.com/share?url=<?php echo $roohani_posturl;?>" rel="nofollow" target="_blank"><i class="fab fa-google-plus-g shareicon"></i></a>
           <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $roohani_posturl;?>" rel="nofollow" target="_blank"><i class="fab fa-linkedin-in shareicon"></i></a>
           <a href="http://www.reddit.com/submit?url=<?php echo $roohani_posturl;?>" rel="nofollow" target="_blank"><i class="fab fa-reddit-alien shareicon"></i></a>
           <a href="mailto:?subject=<?php the_title_attribute(); ?>&body=Check out this post : <?php echo $roohani_posturl;?>" rel="nofollow" target="_blank"><i class="far fa-envelope shareicon"></i></a>
         </div>
        <hr>
      </div>

       <div class="single-post-tags-area">
         <h4><?php esc_html_e('Tags : ', 'roohani'); ?></h4>
         <?php if ( get_the_tags($post->ID) > 0 ):  ?>
             <ul class="single-post-tags">
               <?php $roohani_tags = get_the_tags($post->ID); foreach($roohani_tags as $roohani_tag) :  ?>
                   <li>
                     <a class="single-tag" href="<?php echo esc_url( home_url() );?>/tag/<?php echo esc_attr( $roohani_tag->slug ) ;?>">
                        <?php echo esc_html($roohani_tag->name); ?>
                     </a>
                   </li>
               <?php endforeach;  ?>
             </ul>
         <?php else: ?>
             <h4><?php esc_html_e('Oppps! Empty ', 'roohani'); ?><i class="fas fa-frown"></i></h4>
         <?php endif; ?>
         <hr/>
       </div>
       <!-- <h1> Content.php</h1> -->
    </section>
</article>
