<?php

function happy_body_class( $classes ) {
    global $wp_customize;

	$header_options = get_option( 'header_options' );
	$background = get_option( 'background' );
	$classes[]      = $header_options['position'];
	$classes[]      = $background['wrapper'];
	if( !empty( $background['bg_image'] ) ){
		$classes[]      = $background['bg_image'];
	}

    if ( isset( $wp_customize ) ) {
        $classes[] = 'customizer_page';
    }

	return $classes;
}

add_filter( 'body_class', 'happy_body_class' );

function happy_html_class( $classes ) {
	$classes[] = 'loading';

	return $classes;
}

add_filter( 'html_class', 'happy_html_class' );

add_action( 'wp_head', 'stm_ajaxurl' );

function stm_ajaxurl() {
    ?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo esc_url( admin_url('admin-ajax.php') ); ?>';
    </script>
<?php
}


function stm_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	extract( $args, EXTR_SKIP );
	$add_below = 'div-comment';

	?>
<li id="li-comment-<?php echo $comment->comment_ID; ?>" class="comment">
	<div id="comment-<?php echo $comment->comment_ID; ?>">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="comment-author">
					<?php printf( __( '<cite class="fn highlight">%s</cite>' ), get_comment_author_link() ); ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
				<!-- .reply -->
				<div class="comment-date"><?php printf( __( '%1$s at %2$s', 'happychild' ), get_comment_date(), get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'happychild' ), '  ', '' ); ?></div>
			</div>
		</div>
		<div class="comment-body">
			<?php comment_text(); ?>
		</div>
	</div>
	<!-- #comment-##  -->

<?php
}


function get_relative_permalink( $url ) {
	$url = get_permalink();

	return str_replace( home_url(), "", $url );
}

function stm_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'stm_excerpt_more');


function my_theme_add_editor_styles() {

	add_editor_style( get_stylesheet_directory_uri() . '/assets/css/editor.css' );
}

ST_PostType::addMetaBox( 'page_options', 'Page Options', 'page', '', '', '', array(
	'fields' => array(
		'title_box'        => array( 'label' => __( 'Title Box Style:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'style_1' => __( 'Style 1', 'happychild' ), 'style_2' => __( 'Style 2', 'happychild' ), 'shop' => __( 'Shop', 'happychild' ), 'custom_image' => __( 'Custom Image', 'happychild' ), 'hidden' => __( 'Hide', 'happychild' ) ) ),
		'title_block_image' => array( 'label' => __( 'Custom Image', 'happychild' ), 'type' => 'single_image_select'),
		'title_block_image_repeat' => array( 'label' => __( 'Repeat:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'repeat' => __( 'repeat', 'happychild' ), 'repeat-x' => __( 'repeat-x', 'happychild' ), 'repeat-y' => __( 'repeat-y', 'happychild' ), 'no-repeat' => __( 'no-repeat', 'happychild' ))),
		'show_breadcrumbs' => array( 'label' => __( 'Show Breadcrumbs:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'yes' => __( 'Yes', 'happychild' ), 'no' => __( 'No', 'happychild' ) ) )
	)
));

ST_PostType::addMetaBox( 'page_options', 'Page Options', 'post', '', '', '', array(
	'fields' => array(
		'title_box'        => array( 'label' => __( 'Title Box Style:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'style_1' => __( 'Style 1', 'happychild' ), 'style_2' => __( 'Style 2', 'happychild' ), 'shop' => __( 'Shop', 'happychild' ), 'custom_image' => __( 'Custom Image', 'happychild' ), 'hidden' => __( 'Hide', 'happychild' ) ) ),
		'title_block_image' => array( 'label' => __( 'Custom Image', 'happychild' ), 'type' => 'single_image_select'),
		'title_block_image_repeat' => array( 'label' => __( 'Repeat:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'repeat' => __( 'repeat', 'happychild' ), 'repeat-x' => __( 'repeat-x', 'happychild' ), 'repeat-y' => __( 'repeat-y', 'happychild' ), 'no-repeat' => __( 'no-repeat', 'happychild' ))),
		'show_breadcrumbs' => array( 'label' => __( 'Show Breadcrumbs:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'yes' => __( 'Yes', 'happychild' ), 'no' => __( 'No', 'happychild' ) ) )
	)
));

ST_PostType::addMetaBox( 'page_options', 'Page Options', 'product', '', '', '', array(
	'fields' => array(
		'title_box'        => array( 'label' => __( 'Title Box Style:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'style_1' => __( 'Style 1', 'happychild' ), 'style_2' => __( 'Style 2', 'happychild' ), 'shop' => __( 'Shop', 'happychild' ), 'custom_image' => __( 'Custom Image', 'happychild' ), 'hidden' => __( 'Hide', 'happychild' ) ) ),
		'title_block_image' => array( 'label' => __( 'Custom Image', 'happychild' ), 'type' => 'single_image_select'),
		'title_block_image_repeat' => array( 'label' => __( 'Repeat:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'repeat' => __( 'repeat', 'happychild' ), 'repeat-x' => __( 'repeat-x', 'happychild' ), 'repeat-y' => __( 'repeat-y', 'happychild' ), 'no-repeat' => __( 'no-repeat', 'happychild' ))),
		'show_breadcrumbs' => array( 'label' => __( 'Show Breadcrumbs:', 'happychild' ), 'type' => 'selectbox', 'options' => array( 'yes' => __( 'Yes', 'happychild' ), 'no' => __( 'No', 'happychild' ) ) )
	)
));

ST_PostType::addMetaBox( 'page_options', 'Project Options', 'ivan_vc_projects', '', '', '', array(
	'fields' => array(
		'view_work'        => array( 'label' => __( 'View Work URL:', 'happychild' ), 'type' => 'textarea' ),
		'embed_code'    => array( 'label' => __( 'embed:', 'happychild' ), 'type' => 'textarea' )
	)
));

if ( ! function_exists( 'stm_the_attached_image' ) ) {
	/**
	 * Print the attached image with a link to the next attached image.
	 *
	 * @since Twenty Fourteen 1.0
	 */
	function stm_the_attached_image() {
		$post                = get_post();
		/**
		 * Filter the default Twenty Fourteen attachment size.
		 *
		 * @since Twenty Fourteen 1.0
		 *
		 * @param array $dimensions {
		 *     An array of height and width dimensions.
		 *
		 *     @type int $height Height of the image in pixels. Default 810.
		 *     @type int $width  Width of the image in pixels. Default 810.
		 * }
		 */
		$attachment_size     = apply_filters( 'twentyfourteen_attachment_size', array( 810, 810 ) );
		$next_attachment_url = wp_get_attachment_url();

		/*
		 * Grab the IDs of all the image attachments in a gallery so we can get the URL
		 * of the next adjacent image in a gallery, or the first image (if we're
		 * looking at the last image in a gallery), or, in a gallery of one, just the
		 * link to that image file.
		 */
		$attachment_ids = get_posts( array(
			'post_parent'    => $post->post_parent,
			'fields'         => 'ids',
			'numberposts'    => -1,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => 'ASC',
			'orderby'        => 'menu_order ID',
		) );

		// If there is more than 1 attachment in a gallery...
		if ( count( $attachment_ids ) > 1 ) {
			foreach ( $attachment_ids as $attachment_id ) {
				if ( $attachment_id == $post->ID ) {
					$next_id = current( $attachment_ids );
					break;
				}
			}

			// get the URL of the next image attachment...
			if ( $next_id ) {
				$next_attachment_url = get_attachment_link( $next_id );
			}

			// or get the URL of the first image attachment.
			else {
				$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
			}
		}

		printf( '<a href="%1$s" rel="attachment">%2$s</a>',
			esc_url( $next_attachment_url ),
			wp_get_attachment_image( $post->ID, $attachment_size )
		);
	}
}

function plugin_status($plugin){
	if(!function_exists('is_plugin_active')){
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
	return is_plugin_active($plugin);
}

update_option('revslider-valid-notice', 'false');

if( function_exists( 'vc_map_update' ) ){
    vc_map_update( 'vc_carousel', array (
        'content_element' => true
    ) );
}