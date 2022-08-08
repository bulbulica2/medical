<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package    WordPress
 * @subpackage Twenty_Fourteen
 * @since      Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php comment_form( array( 'comment_notes_after' => '', 'label_submit' => '' ) ); ?>

	<?php if ( have_comments() ) : ?>

		<h3 class="comment-reply-title">
			<?php
			printf(
				_n( 'One comment', '%1$s comments', get_comments_number(), 'twentyfourteen' ),
				number_format_i18n( get_comments_number() ), get_the_title()
			);
			?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>

				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 60,
					'callback'    => 'stm_comment'
				)
			);
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfourteen' ); ?></h1>

				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyfourteen' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyfourteen' ) ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

</div><!-- #comments -->
