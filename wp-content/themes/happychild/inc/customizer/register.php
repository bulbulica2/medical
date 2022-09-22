<?php

function theme_register_customizer_options( $wp_customize ) {
	
	$wp_customize->add_section( 'typography', array(
			'title'    => __( 'Typography', 'happychild' ),
			'priority' => 32
		)
	);
	
	$fonts_array = file( get_template_directory() . '/inc/customizer/webfonts.json' );
	$fonts_array = json_decode( implode( '', $fonts_array ), true );
	$fonts       = array(
		'' => __( 'Default', 'happychild' )
	);
	foreach ( $fonts_array['items'] as $val ) {
		$fonts[ esc_attr( $val['family'] ) ] = esc_attr( $val['family'] );
	}

	$wp_customize->add_setting( 'base_font_family', array(
		'default'           => 'Dosis'
	) );

	$wp_customize->add_control( 'base_font_family', array(
		'label'    => __( 'Base Font Family', 'happychild' ),
		'section'  => 'typography',
		'settings' => 'base_font_family',
		'priority' => 10,
		'type'     => 'select',
		'choices'  => $fonts
	) );

	$wp_customize->add_setting( 'heading_font_family', array(
		'default'           => 'Leckerli One'
	) );

	$wp_customize->add_control( 'heading_font_family', array(
		'label'    => __( 'Heading Font Family', 'happychild' ),
		'section'  => 'typography',
		'settings' => 'heading_font_family',
		'priority' => 15,
		'type'     => 'select',
		'choices'  => $fonts
	) );

	$wp_customize->add_section(
		'header', array(
			'title'    => __( 'Header', 'happychild' ),
			'priority' => 32
		)
	);
	$wp_customize->add_setting(
		'logo', array(
			'default'    => '',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo',
			array(
				'label'    => __( 'Logo', 'happychild' ),
				'section'  => 'header',
				'settings' => 'logo',
				'context'  => ''
			)
		)
	);

	$wp_customize->add_setting(
		'header_options[position]', array(
			'default'    => '',
			'type'       => 'option',
			'transport'  => 'refresh',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'header_options[position]', array(
			'label'   => __( 'Header position:', 'happychild' ),
			'section' => 'header',
			'type'    => 'select',
			'choices' => array(
				''             => __( 'Static', 'happychild' ),
				'fixed_header' => __( 'Fixed', 'happychild' )
			)
		)
	);

    $wp_customize->add_section(
        'footer', array(
            'title'    => __( 'Footer', 'happychild' ),
            'priority' => 33
        )
    );

    $wp_customize->add_setting(
        'footer_type', array(
            'default'    => '',
            'type'       => 'option',
            'transport'  => 'refresh',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        'footer_type', array(
            'label'   => __( 'Footer Type:', 'happychild' ),
            'section' => 'footer',
            'type'    => 'select',
            'priority' => 2,
            'choices' => array(
                ''             => __( 'Type 1', 'happychild' ),
                'type_2' => __( 'Type 2', 'happychild' )
            )
        )
    );

    $wp_customize->add_setting( 'stm_widget_areas', array(
        'default'           => ''
    ) );

    $wp_customize->add_control( 'stm_widget_areas', array(
            'label'    => __( 'Widget Areas', 'happychild' ),
            'section'  => 'footer',
            'setting'  => 'stm_widget_areas',
            'priority' => 3,
            'type'     => 'radio',
            'choices'  => array(
                1          => __( 'One', 'happychild' ),
                2          => __( 'Two', 'happychild' ),
                ''          => __( 'Three', 'happychild' ),
                4          => __( 'Four', 'happychild' ),
                'disabled' => __( 'Disable Widgets', 'happychild' )
            )
        )
    );

    $wp_customize->add_setting(
        'footer_bg_image', array(
            'default'    => '',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_bg_image',
            array(
                'label'    => __( 'Footer Image', 'happychild' ),
                'section'  => 'footer',
                'settings' => 'footer_bg_image',
                'context'  => '',
                'priority' => 4
            )
        )
    );

    $wp_customize->add_setting(
        'footer[copyright]', array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control(
        new Stm_Customize_Textarea_Control( $wp_customize, 'footer[copyright]', array(
            'label'   => __( 'Copyright', 'happychild' ),
            'section' => 'footer',
            'priority' => 5
        ) )
    );

    $wp_customize->add_setting( 'socials_subtitle' );

    $wp_customize->add_control(
        new Stm_Customize_SubTitle_Control( $wp_customize, 'socials_subtitle', array(
            'label'    => __( 'Social Buttons', 'happychild' ),
            'section'  => 'footer',
            'settings' => 'socials_subtitle',
            'priority' => 10
        ) )
    );

    $socialLinks = array(
        'facebook'  => __( 'Facebook Pediclinique', 'happychild' ),
        'twitter'   => __( 'Instagram Pediclinique', 'happychild' ),
        'linkedin'  => __( 'Facebook Lapte', 'happychild' ),
        'instagram' => __( 'Instagram Lapte', 'happychild' ),
        'google'    => __( 'Subtitlu', 'happychild' ),
        'vimeo'     => __( 'Locatie', 'happychild' )
    );

    foreach ( $socialLinks as $setting => $label ) {
        $wp_customize->add_setting(
            'socials[' . $setting . ']', array(
                'default'    => '',
                'type'       => 'option',
                'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_control(
            'socials[' . $setting . ']', array(
                'label'   => $label,
                'section' => 'footer',
                'type'    => 'text',
                'priority' => 20
            )
        );
    }

	$wp_customize->add_setting(
		'background[wrapper]', array(
			'default'    => '',
			'type'       => 'option',
			'transport'  => 'refresh',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'background[wrapper]', array(
			'label'   => __( 'Wrapper style:', 'happychild' ),
			'section' => 'background_image',
			'type'    => 'select',
			'choices' => array(
				''        => __( 'Wide', 'happychild' ),
				'boxed'   => __( 'Boxed', 'happychild' )
			)
		)
	);

	$wp_customize->add_setting(
		'background[bg_image]', array(
			'default'    => '',
			'type'       => 'option',
			'transport'  => 'refresh',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'background[bg_image]', array(
			'label'   => __( 'Background Image:', 'happychild' ),
			'section' => 'background_image',
			'type'    => 'select',
			'choices' => array(
				''        => __( 'None', 'happychild' ),
				'pattern-01'   => __( 'pattern-01', 'happychild' ),
				'pattern-02'   => __( 'pattern-02', 'happychild' ),
				'pattern-03'   => __( 'pattern-03', 'happychild' ),
				'pattern-04'   => __( 'pattern-04', 'happychild' ),
				'pattern-05'   => __( 'pattern-05', 'happychild' ),
				'pattern-06'   => __( 'pattern-06', 'happychild' ),
				'background-01'   => __( 'background-01', 'happychild' ),
				'background-02'   => __( 'background-02', 'happychild' ),
				'background-03'   => __( 'background-03', 'happychild' ),
				'background-04'   => __( 'background-04', 'happychild' ),
				'background-05'   => __( 'background-05', 'happychild' ),
				'background-06'   => __( 'background-06', 'happychild' )
			)
		)
	);

	$wp_customize->add_section(
		'colors', array(
			'title'    => __( 'Colors', 'happychild' ),
			'priority' => 35,
		)
	);

	$wp_customize->add_setting(
		'colors[base_1]', array(
			'default'    => '#398790',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control( $wp_customize, 'colors[base_1]', array(
			'label'   => __( 'Base 1', 'happychild' ),
			'section' => 'colors'
		) )
	);

	$wp_customize->add_setting(
		'colors[base_2]', array(
			'default'    => '#ed265a',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control( $wp_customize, 'colors[base_2]', array(
			'label'   => __( 'Base 2', 'happychild' ),
			'section' => 'colors'
		) )
	);

	$wp_customize->add_setting(
		'colors[base_3]', array(
			'default'    => '#ed265a',
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control( $wp_customize, 'colors[base_3]', array(
			'label'   => __( 'Base 3', 'happychild' ),
			'section' => 'colors'
		) )
	);

    $wp_customize->add_section( 'other', array(
            'title'    => __( 'Other', 'happychild' ),
            'priority' => 160
        )
    );

    $wp_customize->add_setting(
        'favicon', array(
            'default'    => '',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'favicon',
            array(
                'label'    => __( 'Favicon', 'happychild' ),
                'section'  => 'other',
                'settings' => 'favicon',
                'context'  => '',
                'priority' => 5
            )
        )
    );
    
    $wp_customize->add_setting(
        'live_customizer', array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
        )
    );
    
    $wp_customize->add_control(
		'live_customizer', array(
			'label'   => __( 'Live Customizer', 'happychild' ),
			'section' => 'other',
			'type'    => 'checkbox',
			'priority' => 3,
			'choices' => array(
				1             => __( 'Yes', 'happychild' )
			)
		)
	);

	$wp_customize->add_setting( 'preloader_subtitle' );

	$wp_customize->add_control(
		new Stm_Customize_SubTitle_Control( $wp_customize, 'preloader_subtitle', array(
			'label'    => __( 'Site Preloader', 'happychild' ),
			'section'  => 'other',
			'settings' => 'preloader_subtitle',
			'priority' => 10
		) )
	);

	$wp_customize->add_setting(
		'preloader', array(
			'default'    => '',
			'type'       => 'option',
			'transport'  => 'refresh',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'preloader', array(
			'label'   => __( 'Hide Preloader', 'happychild' ),
			'section' => 'other',
			'type'    => 'checkbox',
			'priority' => 20,
			'choices' => array(
				1             => __( 'Yes', 'happychild' )
			)
		)
	);

	$wp_customize->add_setting(
		'preloader_image', array(
			'default'    => '',
			'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'preloader_image',
			array(
				'label'    => __( 'Preloader Image', 'happychild' ),
				'section'  => 'other',
				'settings' => 'preloader_image',
				'context'  => '',
				'priority' => 25
			)
		)
	);

	$wp_customize->add_setting(
		'rotate_preloader', array(
			'default'    => '',
			'transport'  => 'refresh',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'rotate_preloader', array(
			'label'   => __( 'Rotate Preloader', 'happychild' ),
			'section' => 'other',
			'type'    => 'select',
			'priority' => 30,
			'choices' => array(
				'' => __( 'Yes', 'happychild' ),
				1  => __( 'No', 'happychild' )
			)
		)
	);

    $wp_customize->add_setting( 'google_subtitle' );

    $wp_customize->add_control(
        new Stm_Customize_SubTitle_Control( $wp_customize, 'google_subtitle', array(
            'label'    => __( 'Google', 'happychild' ),
            'section'  => 'other',
            'settings' => 'google_subtitle',
            'priority' => 40
        ) )
    );

    $wp_customize->add_setting( 'google_analytics_script' );

    $wp_customize->add_control(
        new Stm_Customize_Textarea_Control( $wp_customize, 'google_analytics_script', array(
            'label'    => __( 'Google Analytics Script', 'happychild' ),
            'section'  => 'other',
            'settings' => 'google_analytics_script',
            'priority' => 50
        ) )
    );

    $wp_customize->add_setting( 'mailchimp_subtitle' );

    $wp_customize->add_control(
        new Stm_Customize_SubTitle_Control( $wp_customize, 'mailchimp_subtitle', array(
            'label'    => __( 'Mailchimp', 'happychild' ),
            'section'  => 'other',
            'settings' => 'mailchimp_subtitle',
            'priority' => 60
        ) )
    );

    $wp_customize->add_setting( 'mailchimp_api_key' );

    $wp_customize->add_control( 'mailchimp_api_key', array(
            'label'    => 'MailChimp ApiKey',
            'section'  => 'other',
            'settings' => 'mailchimp_api_key',
            'type'     => 'text',
            'priority' => 70
        )
    );

    $wp_customize->add_setting( 'mailchimp_list_id' );

    $wp_customize->add_control( 'mailchimp_list_id', array(
            'label'    => 'MailChimp ListID',
            'section'  => 'other',
            'settings' => 'mailchimp_list_id',
            'type'     => 'text',
            'priority' => 80
        )
    );


}

add_action( 'customize_register', 'theme_register_customizer_options' );