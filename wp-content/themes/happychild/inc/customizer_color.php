<?php

function color_selectors() {
	$selectors = array();

	$selectors['base_1'] = "\n" . <<<STYLE
	.navbar-default .navbar-nav > li > a,
	.container .ivan-vc-filters a,
	.navbar-form .btn,
	.breadcrumb > li + li:before, .breadcrumb > .active,
	.breadcrumb li a,
	.container .wpb_content_element.style_1 .wpb_accordion_wrapper .wpb_accordion_header a,
	.container .wpb_content_element.style_2 .wpb_accordion_wrapper .wpb_accordion_header a,
	.container .wpb_accordion.style_2 .wpb_accordion_wrapper .ui-state-default .ui-icon,
	.container .wpb_content_element.style_3 .wpb_accordion_wrapper .wpb_accordion_header a,
	.container .blue .owl-theme .owl-controls .owl-buttons div,
	.container .wpb_content_element .wpb_tabs_nav li.ui-tabs-active a,
	.container .owl-theme .owl-controls .owl-buttons div,
	.container .ivan-staff-wrapper.blue .infos .name, .container .ivan-staff-wrapper.blue .infos .job-title,
	.block_title,
	.widget_title,
	.widget_categories li, .widget_archive li, .widget_pages li, .widget_meta li, .widget_recent_entries li, .widget_nav_menu li, .widget_product_categories li,
	.widget_categories li a, .widget_archive li a, .widget_pages li a, .widget_meta li a, .widget_recent_entries li a, .widget_nav_menu li a, .widget_product_categories li a,
	.post_title h1,
	.select2-container .select2-choice .select2-arrow,
	.widget_categories li span, .widget_archive li span, .widget_pages li span, .widget_meta li span, .widget_recent_entries li span, .widget_nav_menu li span, .widget_product_categories li span,
	.woocommerce-page .widget_shopping_cart_content .button.wc-forward,
	.woocommerce table.shop_table td.product-quantity .quantity .minus, .woocommerce-page table.shop_table td.product-quantity .quantity .minus, .woocommerce table.shop_table td.product-quantity .quantity .plus, .woocommerce-page table.shop_table td.product-quantity .quantity .plus,
	.woocommerce #content table.cart a.remove, .woocommerce table.cart a.remove, .woocommerce-page #content table.cart a.remove, .woocommerce-page table.cart a.remove,
	.woocommerce #content table.cart a.remove:hover, .woocommerce table.cart a.remove:hover, .woocommerce-page #content table.cart a.remove:hover, .woocommerce-page table.cart a.remove:hover,
	.chosen-container-single .chosen-single div,
	.woocommerce #payment ul.payment_methods li label, .woocommerce-page #payment ul.payment_methods li label,
	.comment-reply-title,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active a,
	.container .vc_carousel .vc_carousel-control .icon-prev, .container .vc_carousel .vc_carousel-control .icon-next
	{
		color: %value;
	}
	#footer,
	.container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_content,
	.container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active,
	.container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active:hover,
	.container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header,
	.container .wpb_accordion.style_1 .wpb_accordion_wrapper .ui-state-default .ui-icon,
	.container .wpb_content_element .wpb_tabs_nav li,
	.container .wpb_content_element .wpb_tabs_nav li:hover,
	.select2-results .select2-highlighted,
	.pagination > li > a, .pagination > li > span,
	.woocommerce table.shop_table thead th, .woocommerce-page table.shop_table thead th,
	.woocommerce table.shop_table td.product-quantity .quantity input.qty, .woocommerce-page table.shop_table td.product-quantity .quantity input.qty,
	.woocommerce table.shop_table td.product-quantity .quantity .minus:hover, .woocommerce-page table.shop_table td.product-quantity .quantity .minus:hover, .woocommerce table.shop_table td.product-quantity .quantity .plus:hover, .woocommerce-page table.shop_table td.product-quantity .quantity .plus:hover,
	.title_block, #footer, .container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_content, .container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active, .container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active:hover, .container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header, .container .wpb_accordion.style_1 .wpb_accordion_wrapper .ui-state-default .ui-icon, .container .wpb_content_element .wpb_tabs_nav li, .container .wpb_content_element .wpb_tabs_nav li:hover, .select2-results .select2-highlighted, .pagination > li > a, .pagination > li > span, .woocommerce table.shop_table thead th, .woocommerce-page table.shop_table thead th, .woocommerce table.shop_table td.product-quantity .quantity input.qty, .woocommerce-page table.shop_table td.product-quantity .quantity input.qty, .woocommerce table.shop_table td.product-quantity .quantity .minus:hover, .woocommerce-page table.shop_table td.product-quantity .quantity .minus:hover, .woocommerce table.shop_table td.product-quantity .quantity .plus:hover, .woocommerce-page table.shop_table td.product-quantity .quantity .plus:hover,
	.woocommerce table.shop_table tfoot td, .woocommerce-page table.shop_table tfoot td,
	.accordion li,
	.accordion section,
	.about_author,
	.carousel header,
	.carousel .carousel-control,
	.woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover
	{
		background-color: %value;
	}

	.container .wpb_content_element .wpb_tabs_nav li:first-child a,
	.container .wpb_content_element.wpb_tabs .wpb_tour_tabs_wrapper .wpb_tab,
	.woocommerce table.shop_table td.product-quantity .quantity, .woocommerce-page table.shop_table td.product-quantity .quantity,
	.woocommerce div.product .woocommerce-tabs .panel, .woocommerce #content div.product .woocommerce-tabs .panel, .woocommerce-page div.product .woocommerce-tabs .panel, .woocommerce-page #content div.product .woocommerce-tabs .panel,
	#mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box #mega_main_menu_searchform .field:focus,
	.ts-box-icon.boxed-style:hover .ts-icon-box-boxed.top .ts-main-ico
	{
		border-color: %value;
	}

	.ts-box-icon.boxed-style:hover .ts-icon-box-boxed.top .ts-main-ico,
	{
		background-color: %value !important;
	}

	.ts-box-icon.boxed-style:hover .ts-icon-box-boxed.top .ts-main-ico,
	.ts-box-icon.boxed-style .ts-icon-box-boxed.top:hover
	{
		border-color: %value !important;
	}

	.tt_tabs_navigation li a
	{
		color: %value !important;
	}

STYLE;

	$selectors['base_2'] = "\n" . <<<STYLE
	.navbar-default .navbar-nav > li > a:hover,
	.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus,
	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus, .current-menu-item a,
	.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus,
	.navbar-form .btn:hover,
	a:hover,
	.comment-date a,
	ul.check li:before,
	ul.angle li:before,
	ul.asterisk li:before,
	p a,
	.bottom_menu li a:hover, .current-menu-item a,
	.social_button.mini:hover,
	.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus,
	.container .wpb_content_element.style_2 .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active a,
	.container .wpb_accordion.style_2 .wpb_accordion_wrapper .ui-state-active .ui-icon,
	.container .owl-theme .owl-controls .owl-buttons div:hover,
	.widget_categories li a:hover, .widget_archive li a:hover, .widget_pages li a:hover, .widget_meta li a:hover, .widget_recent_entries li a:hover, .widget_nav_menuli a:hover, .widget_product_categories li a:hover,
	.woocommerce .star-rating span, .woocommerce-page .star-rating span,
	.product_list_bottom .add_to_cart_button,
	.post_share .stButton:hover,
	.comment-list .reply a,
	.woocommerce .quantity .minus, .woocommerce #content .quantity .minus, .woocommerce-page .quantity .minus, .woocommerce-page #content .quantity .minus,
	.woocommerce .quantity .plus, .woocommerce #content .quantity .plus, .woocommerce-page .quantity .plus, .woocommerce-page #content .quantity .plus,
	.posted_in a,
	.container .vc_carousel .vc_carousel-control .icon-prev:hover, .container .vc_carousel .vc_carousel-control .icon-next:hover
	{
		color: %value;
	}

	.dropdown-menu,
	hr,
	blockquote,
	.container .wpb_content_element .wpb_tabs_nav li:hover,
	.container .wpb_content_element .wpb_tabs_nav li.ui-tabs-active,
	.widget,
	.woocommerce ul.products li.product a:hover img, .woocommerce-page ul.products li.product a:hover img,
	.product_list_bottom,
	.woocommerce.widget_shopping_cart .total, .woocommerce .widget_shopping_cart .total, .woocommerce-page.widget_shopping_cart .total, .woocommerce-page .widget_shopping_cart .total,
	.woocommerce-page .widget_shopping_cart_content .button.wc-forward,
	.woocommerce div.product form.cart div.quantity, .woocommerce #content div.product form.cart div.quantity, .woocommerce-page div.product form.cart div.quantity, .woocommerce-page #content div.product form.cart div.quantity,
	.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
	.woocommerce div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce #content div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li:hover,
	.mega_dropdown,
	.ts-box-icon.boxed-style .ts-icon-box-boxed.top:hover
	{
		border-color: %value;
	}

	ul.circle li:before,
	.container .wpb_content_element .wpb_accordion_wrapper .wpb_accordion_header:hover,
	.product_list_bottom .add_to_cart_button:hover,
	.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus, .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus,
	.woocommerce .quantity input.qty, .woocommerce #content .quantity input.qty, .woocommerce-page .quantity input.qty, .woocommerce-page #content .quantity input.qty,
	.woocommerce .quantity .plus:hover, .woocommerce .quantity .minus:hover, .woocommerce #content .quantity .plus:hover, .woocommerce #content .quantity .minus:hover, .woocommerce-page .quantity .plus:hover, .woocommerce-page .quantity .minus:hover, .woocommerce-page #content .quantity .plus:hover, .woocommerce-page #content .quantity .minus:hover,
	.woocommerce div.product form.cart .button, .woocommerce #content div.product form.cart .button, .woocommerce-page div.product form.cart .button, .woocommerce-page #content div.product form.cart .button,
	.colored_header #header,
	.colored_header #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.default_dropdown .mega_dropdown, .colored_header #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown, .colored_header #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .mega_dropdown > li .post_details,
	.tt_timetable thead th, .tt_timetable thead td,
	.tt_tabs_navigation li a:hover, .tt_tabs_navigation li a.selected, .tt_tabs_navigation li.ui-tabs-active a
	{
		background-color: %value;
	}

	.mega_dropdown
	{
		border-color: %value !important;
	}

STYLE;

	$selectors['base_3'] = "\n" . <<<STYLE
	#preloader,
	.container .ivan-vc-filters a:hover, .container .ivan-vc-filters a.current
	{
		background-color: %value;
	}

STYLE;


	return $selectors;
}

function stm_custom_styles() {
	$style_data = '';
	$selectors = color_selectors();
	$colors = get_option( 'colors' );
	if(empty($colors['base_1'])){
		$colors['base_1'] = '#398790';
	}
	if(empty($colors['base_2'])){
		$colors['base_2'] = '#ed265a';
	}
	if(empty($colors['base_3'])){
		$colors['base_3'] = '#ed265a';
	}
	foreach($colors as $color => $hex){
		if(!empty($selectors[$color])){
			$style_data .= str_replace( '%value', $hex, $selectors[$color] ) . "\n";
		}
	}
	echo '<style type="text/css" id="stm-custom-colors-css">' . "\n";
	echo trim( $style_data ) . "\n";
	echo '</style>' . "\n";
}

add_action( 'wp_head', 'stm_custom_styles', 100 );

function stm_print_color_selectors_js() {
	$colors = get_option( 'colors' );
	$theme_mods = get_option( 'theme_mods_happychild' );
	if(empty($theme_mods['background_color'])){
		$theme_mods['background_color'] = "ffffff";
	}
	if(empty($colors['base_1'])){
		$colors['base_1'] = '#398790';
	}
	if(empty($colors['base_2'])){
		$colors['base_2'] = '#ed265a';
	}
	if(empty($colors['base_3'])){
		$colors['base_3'] = '#ed265a';
	}
	$colors['background_color'] = '#'.$theme_mods['background_color'];
	print "<script type=\"text/javascript\">\n";
	print 'var _color_selectors = ' . json_encode( color_selectors() ) . ";\n";
	print 'var _color_values = ' . json_encode( $colors ) . ";\n";
	print "</script>\n";
}

add_action( 'wp_footer', 'stm_print_color_selectors_js' );