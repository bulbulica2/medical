<?php

require_once( 'print_styles.php' );
require_once( 'controls.php' );
require_once( 'register.php' );

function customizer_styles_admin() {
	wp_enqueue_style( 'customizer_style_admin', get_template_directory_uri() . '/inc/customizer/customizer-admin.css', null, ( WP_DEBUG ) ? time() : null, 'all' );
}
add_action( 'customize_controls_print_styles', 'customizer_styles_admin' );


function favicon_link() {
	if ( $favicon = get_theme_mod( 'favicon' ) ) {
		echo '<link rel="shortcut icon" type="image/x-icon" href="' . esc_url( $favicon ) . '" />' . "\n";
	} else {
		echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.png" />' . "\n";
	}
}

add_action( 'wp_head', 'favicon_link' );