<!--Style picker-->
<script type='text/javascript'>
    //COLORPICKER
	jQuery( function( $ ) {
		"use strict";
		//Current layout style
		if ( $( 'body' ).hasClass( 'boxed' ) ) {
			$( '#layout-boxed' ).attr( 'checked', true ).closest( 'li' ).addClass( 'active' );
		} else {
			$( '#layout-wide' ).attr( 'checked', true ).closest( 'li' ).addClass( 'active' );
		}

		var old_logo = $('.logo_link img').attr('src');

		//Style Picker toggle
		$( '#style-picker .handler' ).live( 'click', function() {
			$( '#style-picker' ).toggleClass( 'closed' );
		} );

		//Style Picker options toggle
		$( '#style-picker .options-title span' ).live( 'click', function() {
			$( this ).parent().next( '.options-content' ).slideToggle();
		} );

		//Choose site layout style
		var layoutStyle = $.cookie( 'layoutStyle' );
		if ( layoutStyle === 'boxed' ) {
			$( 'body' ).addClass( 'boxed' );
			$( '#layout-wide' ).removeAttr( 'checked' ).closest( 'li' ).removeClass( 'active' );
			$( '#layout-boxed' ).attr( 'checked', true ).closest( 'li' ).addClass( 'active' );
		}
		$( '#layout-wide,#layout-boxed' ).live( 'change', function() {
			if ( $( this ).attr( 'id' ) == 'layout-wide' ) {
				$( 'body' ).removeClass( 'boxed' );
				$.cookie( 'layoutStyle', 'wide' );
				$( window ).trigger( 'resize' );
			} else {
				$( 'body' ).addClass( 'boxed' );
				$.cookie( 'layoutStyle', 'boxed' );
				$( window ).trigger( 'resize' );
			}
			$( this ).closest( 'li' ).addClass( 'active' ).siblings().removeClass( 'active' );
		} );

		//Default color selection
		var color1 = $.cookie( 'defaultColor' );
		if ( color1 ) {
			_color_values.base_1 = color1;
			print_color_styles();
		} else {
			color1 = _color_values.base_1;
		}
		$( '#default-color' ).ColorPicker( {
			color : color1.replace( '#', '' ),
			onShow : function( defaultColor ) {
				$( defaultColor ).fadeIn( 500 );
				return false;
			},
			onHide : function( defaultColor ) {
				$( defaultColor ).fadeOut( 500 );
				return false;
			},
			onChange : function( hsb, hex, rgb ) {
				_color_values.base_1 = '#' + hex;
				print_color_styles();
				$( '#default-color' ).css( 'backgroundColor', '#' + hex );
				$.cookie( 'defaultColor', _color_values.base_1 );
			}
		} ).css( 'backgroundColor', color1 );

		//Primary color selection
		var color2 = $.cookie( 'primaryColor' );
		if ( color2 ) {
			_color_values.base_2 = color2;
			print_color_styles();
		} else {
			color2 = _color_values.base_2;
		}
		$( '#primary-color' ).ColorPicker( {
			color : color2.replace( '#', '' ),
			onShow : function( primaryColor ) {
				$( primaryColor ).fadeIn( 500 );
				return false;
			},
			onHide : function( primaryColor ) {
				$( primaryColor ).fadeOut( 500 );
				return false;
			},
			onChange : function( hsb, hex, rgb ) {
				_color_values.base_2 = '#' + hex;
				print_color_styles();
				$( '#primary-color' ).css( 'backgroundColor', '#' + hex );
				$.cookie( 'primaryColor', _color_values.base_2 );
			}
		} ).css( 'backgroundColor', color2 );

		//Background color selection
		var bgColor = $.cookie( 'bgColor' );
		if ( bgColor ) {
			$( 'html' ).css( 'backgroundColor', '#' + bgColor );
			$( '#bg-color' ).css( 'backgroundColor', '#' + bgColor );
			$( '#style-picker #theme-patterns li a' ).css( 'backgroundColor', '#' + bgColor );
		} else {
			bgColor = _color_values.background_color;
			$( '#bg-color' ).css( 'backgroundColor', bgColor );
		}
		$( '#bg-color' ).ColorPicker( {
			color : bgColor.replace( '#', '' ),
			onShow : function( bgColor ) {
				$( bgColor ).fadeIn( 500 );
				return false;
			},
			onHide : function( bgColor ) {
				$( bgColor ).fadeOut( 500 );
				return false;
			},
			onChange : function( hsb, hex, rgb ) {
				$( 'body' ).css( 'backgroundColor', '#' + hex );
				$( '#bg-color' ).css( 'backgroundColor', '#' + hex );
				$( '#style-picker #theme-patterns li a' ).css( 'backgroundColor', '#' + hex );
				$.cookie( 'bgColor', hex );
			}
		} );

		//Style Picker append background pattern
		var bgPattern = $.cookie( 'bgPattern' );
		if ( bgPattern ) {
			$( 'body' ).addClass( bgPattern );
			$( '#theme-patterns ul a[class=' + bgPattern + ']' ).parent().addClass( 'active' ).siblings().removeClass( 'active' );
		}
		$( '#theme-patterns ul a' ).live( 'click', function() {
			if ( ! $( this ).parent().hasClass( 'active' ) ) {
				$( 'body' ).removeClass( $( '#theme-patterns li.active a' ).attr( 'class' ) ).addClass( $( this ).attr( 'class' ) );
				$( this ).parent().addClass( 'active' ).siblings().removeClass( 'active' );
				$.cookie( 'bgPattern', $( this ).attr( 'class' ) );
			}
			return false;
		} );

		$( '#theme-font' ).live( 'change', function() {
			var index = $( this ).find( 'option' ).index( $( this ).find( 'option:selected' ) );
			var url = $( this ).find( 'option:selected' ).val();
			var fontFamily = $( this ).find( 'option:selected' ).text();
			$( '#remote-font' ).attr( 'href', url );
			$( '#dynamic-font-styles' ).empty().append( '<style type="text/css">body {font-family: "' + fontFamily + '";font-weight:normal;}</style>' );
		} );
		
		$( '#theme-menu' ).live( 'change', function() {
			location.href = $(this).val();
		} );
		

		//Reset settings
		$( '#reset-settings' ).click( function() {
			$.removeCookie( 'layoutStyle' );
			$.removeCookie( 'defaultColor' );
			$.removeCookie( 'primaryColor' );
			$.removeCookie( 'bgColor' );
			$.removeCookie( 'bgPattern' );
			location.reload();
			return false;
		} );
	} );

	function print_color_styles() {
		"use strict";
		var $ = jQuery;
		if ( typeof _color_selectors != 'object' || typeof _color_values != 'object' ) return;
		var style = '';
		var gen = function( values, key, rules ) {
			var value = values[key];
			if ( typeof( rules ) == 'string' && typeof(  value ) == 'string' ) {
				rules = rules.replace( /%value/g, value );
				style += '\n' + rules;
			}
			if ( typeof( rules ) == 'object' && typeof( value ) == 'object' ) {
				$.each( rules, gen.bind( this, value ) );
			}
		};
		$.each( _color_selectors, gen.bind( $(this), _color_values ) );
		$( '#stm-custom-colors-css').text( style );
	}
</script>
<div id="style-picker" class="closed">
    <div class="handler">
        <div class="closed-icon">
            <span class="fa fa-angle-right"></span>
        </div>
        <div class="opened-icon">
            <span class="fa fa-angle-left"></span>
        </div>
    </div>
    <div class="title">
        Styling <small><a href="#" id="reset-settings">Reset settings</a></small>
    </div>
	
	<div class="options-title">
        Demo Site
    </div>
    <div class="options-content clearfix">
		<?php $header_type = get_option('header_options'); ?>
        <select name="font" id="theme-menu" class="form-control">
			<?php
				$sites['http://happychild.stylemixthemes.com'] = 'Kindergarten';
				$sites['http://happychild.stylemixthemes.com/school'] = 'School';
				$sites['http://happychild.stylemixthemes.com/course'] = 'Courses';
			?>
			<?php foreach($sites as $url => $name){ ?>
            	<option <?php if(esc_url( home_url() ) == $url){ echo 'selected="selected"'; } ?> value="<?php echo $url; ?>/"><?php echo $name; ?></option>
			<?php } ?>
        </select>
    </div>

    <div class="options-title">
        Layout Style
    </div>
    <div class="options-content clearfix">
        <div id="layout-style">
            <ul>
                <li>
                    <label><input type="radio" name="layout-style" id="layout-wide" />Wide</label>
                </li>
                <li>
                    <label><input type="radio" name="layout-style" id="layout-boxed" />Boxed</label>
                </li>
            </ul>
        </div>
    </div>

    <div class="options-title">
        Colors
    </div>
    <div class="options-content clearfix">
        <div id="theme-colors">
            <ul>
                <li>
                    <div class="color-label">Base 1</div>
                    <a id="default-color" class="background-color-default" href="#"></a>
                </li>
                <li>
                    <div class="color-label">Base 2</div>
                    <a id="primary-color" class="background-color-primary" href="#"></a>
                </li>
                <li>
                    <div class="color-label">BG color</div>
                    <a id="bg-color" class="background-color-white" href="#"></a>
                </li>
            </ul>
            <div id="dynamic-default-color"></div>
            <div id="dynamic-primary-color"></div>
        </div><!--theme_colors-->
    </div>

    <div class="options-title">
        Background
    </div>
    <div class="options-content clearfix">
        <div id="theme-patterns">
            <ul>
                <li>
                    <a class="pattern-01" href="#"></a>
                </li>
                <li>
                    <a class="pattern-02" href="#"></a>
                </li>
                <li>
                    <a class="pattern-03" href="#"></a>
                </li>
                <li>
                    <a class="pattern-04" href="#"></a>
                </li>
                <li>
                    <a class="pattern-05" href="#"></a>
                </li>
                <li>
                    <a class="pattern-06" href="#"></a>
                </li>
                <li>
                    <a class="background-01" href="#"></a>
                </li>
                <li>
                    <a class="background-02" href="#"></a>
                </li>
                <li>
                    <a class="background-03" href="#"></a>
                </li>
                <li>
                    <a class="background-04" href="#"></a>
                </li>
                <li>
                    <a class="background-05" href="#"></a>
                </li>
                <li>
                    <a class="background-06" href="#"></a>
                </li>
            </ul>
        </div><!--theme-patterns-->
    </div>

    <div class="options-title">
        Fonts <small>(630+ fonts available in admin panel)</small>
    </div>
    <div class="options-content clearfix">
        <select name="font" id="theme-font" class="form-control">
            <option value="http://fonts.googleapis.com/css?family=Dosis:400,700,900,400italic' rel='stylesheet' type='text/css' ">Dosis</option>
            <option value="http://fonts.googleapis.com/css?family=Leckerli+One:400,700,900,400italic' rel='stylesheet' type='text/css' ">Leckerli One</option>
            <option value="http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css' ">Lato</option>
            <option value="http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,300italic,400italic,500italic' rel='stylesheet">Alegreya Sans</option>
            <option value="http://fonts.googleapis.com/css?family=Tienne:400,700">Tienne</option>
            <option value="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">Droid Serif</option>
            <option value="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic">Playfair Display</option>
            <option value="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic">PT Serif</option>
            <option value="http://fonts.googleapis.com/css?family=Ruda:400,700">Ruda</option>
            <option value="http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700">Maven Pro</option>
            <option value="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500itali">Roboto</option>
        </select>
		<link href="http://fonts.googleapis.com/css?family=Dosis:400,700,900,400italic" id="remote-font" type="text/css" rel="stylesheet" />
        <div id="dynamic-font-styles"></div>
    </div>

</div><!--style picker-->