<?php

function woo_commerce_customize($query){
	if(is_post_type_archive( 'product' )){
		//remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
		//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
	}
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5, 0 );
}

add_action( 'pre_get_posts', 'woo_commerce_customize' );

add_filter ( 'woocommerce_product_thumbnails_columns', 'xx_thumb_cols' );
function xx_thumb_cols() {
	return 4;
}

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3;
	}
}

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
	return array(
		'delimiter' => '',
		'wrap_before' => '<ol class="breadcrumb">',
		'wrap_after' => '</ol>',
		'before' => '<li>',
		'after' => '</li>',
		'home' => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	);
}

add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );

function wc_loop_shop_columns( $number_columns ) {
	return 4;
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
	function woocommerce_output_upsells() {
		woocommerce_upsell_display( 4,4 ); // Display 3 products in rows of 3
	}
}

add_filter( 'woocommerce_output_related_products_args', 'stm_related_products_args' );
function stm_related_products_args( $args ) {

    $args['posts_per_page'] = 4; // 4 related products
    $args['columns'] = 4; // arranged in 2 columns
    return $args;
}