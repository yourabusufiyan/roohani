<?php
  /**
 * This file for Releted Post display
 * Don't touch this file ( highly recommended ).
 *
 * @package Roohani
 * @since Roohani 1.0
 */
?>

<!--Start Related Posts-->
<?php
global $post;
$roohani_tags = wp_get_post_tags($post->ID);
// If the post has tags, run the related post tag query

if ($roohani_tags) {
	$roohani_tag_ids = array();
	foreach($roohani_tags as $roohani_individual_tag) $roohani_tag_ids[] = $roohani_individual_tag->term_id;
  // Build our tag related custom query arguments
  $roohani_custom_query_args = array(
    'tag__in' => $roohani_tag_ids, // Select posts with related tags
    'posts_per_page' => 6, // Number of related posts to display
    'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
    'orderby' => 'rand', // Randomize the results
  );
} else {
  // If the post does not have tags, run the standard related posts query
  $roohani_custom_query_args = array(
    'posts_per_page' => 1, // Number of related posts to display
    'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
    'orderby' => 'rand', // Randomize the results
  );
}
// Initiate the custom query
$roohani_custom_query = new WP_Query( $roohani_custom_query_args );

// Run the loop and output data for the results
if ( $roohani_custom_query->have_posts() ) : ?>
	 <hr/>
   <div class="row releted-posts">
      <?php while ( $roohani_custom_query->have_posts() ) : $roohani_custom_query->the_post(); ?>

          <div class="col-md-4 releted-post">
            <div class="related-thumbnail">
							<a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) { ?>
                 <?php the_post_thumbnail('thumbnail'); ?>
              <?php } else { ?>
								 <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/default-thumbnail.jpg')"/>
							<?php }?>
							</a>
            </div>
            <div class="related-title">
							<a href="<?php the_permalink(); ?>"
							    title="<?php the_title_attribute( array(
							        'before' => __('Permalink to: ', 'roohani'),
							        'after'  => ''
							    ) ); ?>">
							    <b><?php the_title_attribute(); ?></b>
							</a>
            </div>
          </div>
      <?php endwhile; ?>
    </div>
		<hr/>
<?php else : ?>
		<p><?php echo '<strong>'.esc_attr__( "Sorry! ", 'roohani' ).'</strong>'.esc_html__('No related Post.' , 'roohani'); ?></p>
<?php endif;
// Reset postdata
wp_reset_postdata();
?>
<!--End Related Posts-->
