<?php

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? " aria-required='true'" : '' );
	$html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
	$fields    = array(
		'author' => '<div class="row"><div class="col-md-6 col-xs-12 col-sm-6"><div class="form-group comment-form-author">' .
			'<input class="form-control" placeholder="' . __( 'Your Name', 'happychild' ) . ( $req ? ' *' : '' ) . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div></div>',
		'email'  => '<div class="col-md-6 col-xs-12 col-sm-6"><div class="form-group comment-form-email">' .
			'<input class="form-control" placeholder="' . __( 'Your Email', 'happychild' ) . ( $req ? ' *' : '' ) . '" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div></div>'
	);

	return $fields;
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
	$args['comment_field'] = '<div class="form-group comment-form-comment">
    <textarea placeholder="' . _x( 'Comment', 'noun', 'happychild' ) . ' *" class="form-control" id="comment" name="comment" aria-required="true"></textarea>
    </div>';

	return $args;
}

add_action( 'comment_form', 'bootstrap3_comment_button' );
function bootstrap3_comment_button() {
	echo '<button class="btn btn-danger" type="submit">' . __( 'Post Comment', 'happychild' ) . '</button>';
}