<?php

function demo_import_styles() {
	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/inc/demo/assets/css/demo_import.css', null, ( WP_DEBUG ) ? time() : null, 'all' );
}

add_action( 'admin_enqueue_scripts', 'demo_import_styles' );

add_action('admin_menu', 'stm_add_demo_import_page');

if ( ! function_exists('stm_add_demo_import_page'))
{
    function stm_add_demo_import_page()
    {
        add_submenu_page( 'themes.php' , 'Demo Import' , 'Demo Import' , 'manage_options' , 'stm_demo_import' , 'stm_demo_import' );
    }
}

if ( !function_exists('stm_demo_import'))
{
    function stm_demo_import()
    {
        ?>
		<div class="stm_message content" style="display:none;">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/demo/assets/images/spinner.gif" alt="spinner">
			<h1 class="stm_message_title"><?php _e('Importing Demo Content...', 'happychild'); ?></h1>
			<p class="stm_message_text"><?php _e('Duration of demo content importing depends on your server speed.', 'happychild'); ?></p>
		</div>

        <div class="stm_message success" style="display:none;">
			<p class="stm_message_text"><?php echo sprintf(__('Congratulations and enjoy <a href="%s" target="_blank">your website</a> now!', 'happychild'), home_url()); ?></p>
		</div>

		<form class="stm_importer" id="import_demo_data_form" action="?page=stm_demo_import" method="post">
			
			<div class="stm_importer_options">

				<div class="stm_importer_note">
					<strong><?php _e('Before installing the demo content, please NOTE:', 'happychild'); ?></strong>
					<p><?php echo sprintf(__('Install the demo content only on a clean WordPress. Use <a href="%s" target="_blank">Wordpress Database Reset</a> plugin to clean the current Theme.', 'happychild'), 'http://wordpress.org/plugins/wordpress-database-reset/'); ?></p>
					<p><?php _e('Remember that you will NOT get the images from live demo due to copyright / license reason.', 'happychild'); ?></p>
				</div>
                <div class="form_group">
                    <label for="demo_version"><?php _e( 'Choose the Demo version:', 'happychild' ); ?></label>
                    <select id="demo_version" name="demo">
                        <option value="kindergarten"><?php _e( 'Kindergarten', 'happychild' ); ?></option>
                        <option value="course"><?php _e( 'Course', 'happychild' ); ?></option>
                        <option value="school"><?php _e( 'School', 'happychild' ); ?></option>
                    </select>
                </div>
				<input class="button-primary size_big" type="submit" value="Import" id="import_demo_data">
			
			</div>
			
        </form>
        <script>
            jQuery(document).ready(function() {
                jQuery('#import_demo_data_form').on('submit', function() {
                    var demo = jQuery('#demo_version').val();
                    jQuery("html, body").animate({
                        scrollTop: 0
                    }, {
                        duration: 300
                    });
                    jQuery('.stm_importer').slideUp(null, function(){
                        jQuery('.stm_message.content').slideDown();
                    });

                    jQuery.ajax({
                        type: 'POST',
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        data: {
                            action: 'stm_demo_import_content',
                            demo: demo
                        },
                        statusCode: {
                            503: function () {
                                jQuery('.stm_message.content').slideUp();
                                jQuery('.stm_message.success').slideDown();
                            },
                            302: function () {
                                jQuery('.stm_message.content').slideUp();
                                jQuery('.stm_message.success').slideDown();
                            },
                            200: function () {
                                jQuery('.stm_message.content').slideUp();
                                jQuery('.stm_message.success').slideDown();
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
        <?php
    }

    // Content Import
    function stm_demo_import_content(){
        set_time_limit(0);

        $demo = 'kindergarten';

        if( $_POST['demo'] ){
            $demo = $_POST['demo'];
        }

        if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);

        require_once(get_template_directory().'/inc/demo/wordpress-importer/wordpress-importer.php');

        $file = $kindergarten = get_template_directory() . '/inc/demo/data/kindergarten/demo_content.xml';
        $course = get_template_directory() . '/inc/demo/data/course/demo_content.xml';
        $school = get_template_directory() . '/inc/demo/data/school/demo_content.xml';

        if( $demo == 'school' ){
            $file = $school;
        }elseif( $demo == 'course' ){
            $file = $course;
        }

        $wp_import = new WP_Import();
        $wp_import->fetch_attachments = true;

        ob_start();
            $wp_import->import( $file );
        ob_end_clean();

        $locations = get_theme_mod('nav_menu_locations');

        $menus  = wp_get_nav_menus();

        if(!empty($menus))
        {
            foreach($menus as $menu)
            {
                if(is_object($menu) && $menu->name == 'Main menu')
                {
                    $locations['primary'] = $menu->term_id;
                }
                if(is_object($menu) && $menu->name == 'Footer menu')
                {
                    $locations['secondary'] = $menu->term_id;
                }
            }
        }

        set_theme_mod('nav_menu_locations', $locations);

        update_option( 'show_on_front', 'page' );
        update_option( 'ultimate_js', 'enable' );

        $front_page = get_page_by_title( 'Home' );
        if ( isset( $front_page->ID ) ) {
            update_option( 'page_on_front', $front_page->ID );
        }

        $blog_page = get_page_by_title( 'Blog' );
        if ( isset( $blog_page->ID ) ) {
            update_option( 'page_for_posts', $blog_page->ID );
        }

        $menu_skin = get_template_directory() . '/inc/demo/data/kindergarten/megamainmenu.txt';

        if( $demo == 'school' ){
            $menu_skin = get_template_directory() . '/inc/demo/data/school/megamainmenu.txt';
        }elseif( $demo == 'course' ){
            $menu_skin = get_template_directory() . '/inc/demo/data/course/megamainmenu.txt';
        }

        $backup_file_content = file_get_contents( $menu_skin );
        if ( $backup_file_content !== false && ( $options_backup = json_decode( $backup_file_content, true ) ) ) {
            if ( isset( $options_backup['last_modified'] ) ) {
                $options_backup['last_modified'] = time() + 30;
                update_option( 'mega_main_menu_options', $options_backup );
            }
        }

        $slider = get_template_directory() . '/inc/demo/data/kindergarten/sliderpreview.zip';

        if( $demo == 'school' ){
            $slider = get_template_directory() . '/inc/demo/data/school/sliderpreview.zip';
            update_option( 'background_color', '#2b7db2' );
            update_option( 'header_options', array( 'position' => 'fixed_header' ) );
            update_option( 'colors', array( 'base_1' => '#2b7db2', 'base_2' => '#aeea59', 'base_3' => '#43b94b' ) );
        }elseif( $demo == 'course' ){
            $slider = get_template_directory() . '/inc/demo/data/course/sliderpreview.zip';
            update_option( 'colors', array( 'base_1' => '#d49b49', 'base_2' => '#d49b49', 'base_3' => '#d49b49' ) );
            update_option( 'background', array( 'wrapper' => 'boxed', 'bg_image' => 'background-01' ) );
        }

        if ( class_exists('RevSlider') ){

            ob_start();
            $_FILES["import_file"]["tmp_name"] = $slider;

            $slider = new RevSlider();
            $response = $slider->importSliderFromPost();

            ob_end_clean();
        }

        echo 'done';
        die();

    }

    add_action('wp_ajax_stm_demo_import_content', 'stm_demo_import_content');

}
