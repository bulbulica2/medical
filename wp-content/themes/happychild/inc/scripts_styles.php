<?php

/*
	Scripts and Styles (SS)
*/

if ( ! is_admin() ) {
	add_action( 'wp_enqueue_scripts', 'stm_load_theme_ss' );
}

$theme_info = wp_get_theme();

function stm_load_theme_ss() {
	
	global $theme_info;

	/* Styles */
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), null, ( WP_DEBUG ) ? time() : null, 'all' );

	/* Register own jquery */
	wp_deregister_script( 'jquery' );

	/* Scripts */
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.0.min.js', '', ( WP_DEBUG ) ? time() : null, false );
	wp_enqueue_script( 'jquerymigrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', 'jquery', ( WP_DEBUG ) ? time() : null, false );
	wp_enqueue_script( 'select2', get_template_directory_uri() . '/assets/js/select2.min.js', 'jquery', ( WP_DEBUG ) ? time() : null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery', ( WP_DEBUG ) ? time() : null, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', 'jquery', ( WP_DEBUG ) ? time() : null, true );
	wp_enqueue_script( 'uniform', get_template_directory_uri() . '/assets/js/jquery.uniform.min.js', 'jquery', ( WP_DEBUG ) ? time() : null, true );
	wp_enqueue_script( 'stm_colorpicker', get_template_directory_uri() . '/assets/js/colorpicker.js', 'jquery', ( WP_DEBUG ) ? time() : null, true );
	wp_enqueue_script( 'stm_cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', 'jquery', ( WP_DEBUG ) ? time() : null, true );

	if ( is_singular() ) {
		wp_enqueue_script( "comment-reply" );
	}
	
	
	$base_font_family = get_theme_mod( 'base_font_family' );
	if ( empty( $base_font_family ) ) {
		$base_font_family = 'Dosis';
	}
	$base_font_family_src = 'http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $base_font_family ) . ':100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese';
	wp_enqueue_style( 'base_font_family', esc_url( $base_font_family_src ), null, ( WP_DEBUG ) ? time() : $theme_info->get( 'Version' ), 'all' );

	$heading_font_family = get_theme_mod( 'heading_font_family' );
	if ( empty( $heading_font_family ) ) {
		$heading_font_family = 'Leckerli One';
	}
	$heading_font_family_src = 'http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $heading_font_family ) . ':100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext,greek-ext,greek,vietnamese';
	wp_enqueue_style( 'heading_font_family', esc_url( $heading_font_family_src ), null, ( WP_DEBUG ) ? time() : $theme_info->get( 'Version' ), 'all' );

}