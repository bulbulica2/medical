<?php

if ( ! isset( $content_width ) ) {
	$content_width = 950;
}

add_action( 'after_setup_theme', 'stm_theme_setup' );

if( ! function_exists( 'stm_theme_setup' ) ){
	function stm_theme_setup() {

		add_theme_support( 'post-thumbnails' );
		add_post_type_support( 'ivan_vc_projects', 'post-formats' );

		add_image_size( 'blog_list', 404, 225, true );
		add_image_size( 'gallery_grid', 480, 280, true );
		add_image_size( 'gallery_grid_square', 229, 229, true );
		add_image_size( 'project_gallery', 750, 508, true );

		register_nav_menus(
			array(
				'primary'   => __( 'Top primary menu', 'happychild' ),
				'secondary' => __( 'Secondary menu in the footer', 'happychild' ),
			)
		);

		add_theme_support( 'post-formats', array( 'video', 'gallery', 'image', 'audio' ) );
		add_theme_support( 'custom-background' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'woocommerce' );

		load_theme_textdomain( 'happychild', get_template_directory() . '/languages' );

		register_sidebar(
			array(
				'name'          => __( 'Primary Sidebar', 'happychild' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Main sidebar that appears on the right.', 'happychild' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<div class="widget_title">',
				'after_title'   => '</div>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Shop Sidebar', 'happychild' ),
				'id'            => 'shop-sidebar',
				'description'   => __( 'Shop sidebar that appears on the right.', 'happychild' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<div class="widget_title">',
				'after_title'   => '</div>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Footer area', 'happychild' ),
				'id'            => 'footer',
				'description'   => __( 'Footer widget area that appears at the bottom.', 'happychild' ),
				'before_widget' => '<aside id="%1$s" class="widget footer_widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<div class="widget_title">',
				'after_title'   => '</div>',
			)
		);

	}
}

if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function stm_slug_render_title() {		
		return '<title>' . wp_title( '|', false, 'right' ) . '</title>';
	}
	add_action( 'wp_head', 'stm_slug_render_title' );
}

add_action( 'vc_before_init', 'stm_vcSetAsTheme' );

function stm_vcSetAsTheme() {
    vc_set_as_theme( true );
}

add_action('layerslider_ready', 'my_layerslider_overrides');

function my_layerslider_overrides() {
    $GLOBALS['lsAutoUpdateBox'] = false;
}

if( ! get_option( 'layerslider-authorized-site', null ) ) {
    update_option( 'layerslider-authorized-site', true );
}