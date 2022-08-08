jQuery(function ($) {
	"use strict";
	$(".navbar-form .btn").on('click', function () {
		if (!$(".navbar-form .form-group").hasClass('active')) {
			var w = $(".navbar-form .form-control").innerWidth() + 2;
			$(".navbar-form .form-group").animate({"width": w}, 500);
			$(".navbar-form .form-control").trigger('focus');
			$(".navbar-form .form-group").addClass('active');
			return false;
		}
	});

    $(".customizer_page .ivan-tabs-wrap, .customizer_page .tt_tabs").remove();

	$("body").click(function (c) {
		if (!$(c.target).is(".navbar-form, .navbar-form *")) {
			$(".navbar-form .form-group").removeClass('active');
			$(".navbar-form .form-group").animate({"width": 0}, 500);
		}
		;
	});

	$(".navbar-default .navbar-toggle").click(function () {
		if ($("#header").hasClass('active')) {
			setTimeout(function () {
				$("#header").removeClass('active');
			}, 200);
		} else {
			$("#header").addClass('active');
		}
	});

	$(".wrapper select").select2({
		minimumResultsForSearch: -1
	});

	$(".woocommerce input[type='checkbox'], .woocommerce input[type='radio']").uniform();

	$(".accordion > ul > li > h3").live('click', function () {
		$(this).closest('li').toggleClass('active');
		$(this).closest('li').find('section').slideToggle(300);
		;
	});

	$('body.fixed_header #header').affix({
		offset: {
			top: 0,
			bottom: function () {
				return (this.bottom = $('#header').outerHeight(true))
			}
		}
	});

	$(window).load(function () {
		$("#preloader").fadeOut(300);
		$("html").removeClass('loading');
	});

	var filterWrap = $('.ivan-vc-filters');

	if (!filterWrap.hasClass('current')) {
		filterWrap.find('a[data-filter="all"]').addClass('current');
	}

    $('#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.menu-item-has-children.submenu_full_width').live({
        mouseenter: function () {
            $(this).closest('.menu_inner').find('.nav_logo').addClass('hover');
        },
        mouseleave: function () {
            $(this).closest('.menu_inner').find('.nav_logo.hover').removeClass('hover');
        }
    });

});