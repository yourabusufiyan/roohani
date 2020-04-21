<?php
/**
 * The template for displaying Comments.
 *
 * @package Roohani
 * @since Roohani 1.0
 *
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>

        <h5 class="comments-title">
            <?php
    				$roohani_comments_number = get_comments_number();
    				if ( 1 === $roohani_comments_number ) {
    					// translators: %s: post title
    					_x( 'One Comment', 'comments title', 'roohani' );
    				} else {
    					printf(
    						// translators: 1: number of comments, 2: post title
    						_x('%1 Comments', 'plural comments title' ,'roohani'), number_format_i18n( $roohani_comments_number )
              );
    				}
			      ?>
        </h5>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- End comment-list -->

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>

        <!-- comment-navigation -->
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'roohani' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'roohani' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'roohani' ) ); ?></div>
        </nav>
        <!-- End comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'roohani' ); ?></p>
        <?php endif; ?>

    <?php endif; // End have_comments() ?>

    <?php comment_form(); ?>

</div><!-- End comments -->
