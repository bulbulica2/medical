<?php


function customizer_print_style() {
	$footer_bg_image = ( get_theme_mod( 'footer_bg_image' ) == '' ) ? get_template_directory_uri() . '/assets/images/patterns/pattern_horses.png' : get_theme_mod( 'footer_bg_image' );
	$preloader_image = ( get_theme_mod( 'preloader_image' ) == '' ) ? get_template_directory_uri() . '/assets/images/loader.png' : get_theme_mod( 'preloader_image' );
	$rotate_preloader = ( get_theme_mod( 'rotate_preloader' ) == '' ) ? true : false;	
	$base_font_family = ( get_theme_mod( 'base_font_family' ) == '' ) ? 'Dosis, sans-serif' : get_theme_mod( 'base_font_family' );
	$heading_font_family = ( get_theme_mod( 'heading_font_family' ) == '' ) ? 'Leckerli One, sans-serif' : get_theme_mod( 'heading_font_family' );

	?>
	<style type="text/css">
		
		body,
		body .btn,
		.container .vc_btn,
		.woocommerce #content input.button,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.woocommerce-page #content input.button,
		.woocommerce-page #respond input#submit,
		.woocommerce-page a.button,
		.woocommerce-page button.button,
		.woocommerce-page input.button,
		.post-password-form input[type="submit"],
		.post_title h2,
		.container .vc_carousel-slideline-inner .post-title,
		.vc_call_to_action hgroup h2,
		.vc_call_to_action hgroup h4,
		.ts-circliful-counter .circle-text,
		#customer_login h2,
		.woocommerce #reviews #comments h2,
		.woocommerce-page #reviews #comments h2,
		.calculated_shipping h2,
		.woocommerce .cart-collaterals .shipping_calculator h2,
		.woocommerce-page .cart-collaterals .shipping_calculator h2,
		.woocommerce h2{
			font-family: <?php echo esc_attr( $base_font_family ); ?>;
		}
		
		h2, .h2,
		.logo_centered_header .title_block,
		.title_block{
			font-family: <?php echo esc_attr( $heading_font_family ); ?>;
		}

        #footer{
            <?php if(!empty($footer_bg_image)){ ?>
                background-image: url("<?php echo esc_url( $footer_bg_image ); ?>");
            <?php } ?>
		}

        #preloader .preloader{
	        <?php if(!empty($preloader_image)){ ?>
		        background-image: url("<?php echo esc_url( $preloader_image ); ?>");
	        <?php } ?>
			<?php if(!empty($rotate_preloader)){ ?>
		        animation: spin 4s infinite linear;
		        -webkit-animation: spin 4s infinite linear;
			<?php } ?>
        }

	</style>

<?php
}


add_action( 'wp_head', 'customizer_print_style', 1000, 0 );