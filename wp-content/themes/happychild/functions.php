<?php
$inc_path = get_template_directory() . '/inc';

/* Initials*/
require_once( $inc_path . '/post_types.class.php' );

/* Admin only */
require_once( $inc_path . '/sforms.class.php' );

if ( is_admin() ) {
	require_once( $inc_path . '/tgm/tgm-plugin-registration.php' );
    require_once( $inc_path . '/announcement/main.php');
	add_action( 'init', 'my_theme_add_editor_styles' );
}

require_once( $inc_path . '/demo/demo_import.php' );

require_once( $inc_path . '/customizer/setup.php' );

/* Customize theme */
require_once( $inc_path . '/setup.php' );
require_once( $inc_path . '/shortcodes.php' );
require_once( $inc_path . '/scripts_styles.php' );


/* Functions && template tags */
require_once( $inc_path . '/pagination.php' );
require_once( $inc_path . '/breadcrumbs.class.php' );
require_once( $inc_path . '/wp_bootstrap_navwalker.php' );


/* Custom functions */
require_once( $inc_path . '/custom.php' );
require_once( $inc_path . '/customizer_color.php' );
require_once( $inc_path . '/comment_form.php' );
require_once( $inc_path . '/mailchimp.php' );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active('woocommerce/woocommerce.php') ) {
	require_once( $inc_path . '/woocommerce.php' );
}

/* Widgets Init */
require_once( $inc_path . '/widgets/instagram.php' );
require_once( $inc_path . '/widgets/mailchimp.php' );
