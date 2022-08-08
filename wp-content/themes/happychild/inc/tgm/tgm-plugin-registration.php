<?php

require_once dirname( __FILE__ ) . '/tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'stm_require_plugins' );

function stm_require_plugins() {
	$plugins_path = get_template_directory() . '/inc/tgm/plugins';
	$plugins = array(
		array(
			'name'               => 'Mega Main Menu',
			'slug'               => 'mega_main_menu',
			'source'             => $plugins_path . '/mega_main_menu.zip',
			'required'           => true,
			'external_url'       => 'http://menu.megamain.com/',
			'version'			 => '2.1.2'
		),
		array(
			'name'               => 'LayerSlider WP',
			'slug'               => 'LayerSlider',
			'source'             => $plugins_path . '/LayerSlider.zip',
			'required'           => true,
			'external_url'       => 'http://codecanyon.net/user/kreatura/',
			'version'			 => '5.6.5'
		),
		array(
			'name'               => 'WPBakery Visual Composer',
			'slug'               => 'js_composer',
			'source'             => $plugins_path . '/js_composer.zip',
			'required'           => true,
			'external_url'       => 'http://vc.wpbakery.com',
			'version'			 => '4.11.2.1'
		),
		array(
			'name'               => 'Revolution Slider',
			'slug'               => 'revslider',
			'source'             => $plugins_path . '/revslider.zip',
			'required'           => false,
			'external_url'       => 'http://www.themepunch.com/revolution/',
			'version'			 => '5.2.4.1'
		),
		array(
			'name'               => 'Ultimate Addons for Visual Composer',
			'slug'               => 'Ultimate_VC_Addons',
			'source'             => $plugins_path . '/Ultimate_VC_Addons.zip',
			'required'           => false,
			'external_url'       => 'https://brainstormforce.com/demos/ultimate/',
			'version'			 => '3.16.0.1'
		),
		array(
			'name'               => 'Visual Composer Customizer Add-on',
			'slug'               => 'ivan-visual-composer',
			'source'             => $plugins_path . '/ivan-visual-composer.zip',
			'required'           => false,
			'external_url'       => 'http://code9rs.com/',
		),
		array(
			'name'               => 'Composium - Visual Composer Extensions',
			'slug'               => 'ts-visual-composer-extend',
			'source'             => $plugins_path . '/ts-visual-composer-extend.zip',
			'required'           => false,
			'external_url'       => 'http://codecanyon.net/item/visual-composer-extensions/7190695',
			'version'			 => '4.3.4'
		),
		array(
			'name'               => 'Timetable Responsive Schedule For WordPress',
			'slug'               => 'timetable',
			'source'             => $plugins_path . '/timetable.zip',
			'required'           => false,
			'external_url'       => 'http://codecanyon.net/item/timetable-responsive-schedule-for-wordpress/7010836?ref=QuanticaLabs',
			'version'			 => '3.7'
		),
        array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false
		)
	);

	tgmpa( $plugins, array( 'is_automatic' => true ) );

}