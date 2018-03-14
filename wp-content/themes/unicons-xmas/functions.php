<?php




add_action( 'after_setup_theme', 'unicons_xmas_default_header' );
/**
 * Add Default Custom Header Image To unicins Theme
 *
 * @return void
 */
function unicons_xmas_default_header() {

    add_theme_support(
        'custom-header',
        apply_filters(
            'unicons_xmas_default_header_args',
            array(
                'default-text-color' => 'fff',
                'default-image' => get_stylesheet_directory_uri() . '/images/header.jpeg',
            )
        )
    );
}


/**
 * Enqueue styles and scripts
 */
function unicons_xmas_child_frontscripts() {
	$parent_style = 'unicons-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'uniconsxmas-child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style ),
			wp_get_theme()->get('Version')
	);

}
add_action( 'wp_enqueue_scripts', 'unicons_xmas_child_frontscripts' );


function unicons_xmas_child_theme_setup() {

	/* static image settings */

	Kirki::add_field( 'unicons', array(
	        'type'     => 'image',
	        'settings'  => 'unicons_staticslider_image',
	        'label'    => esc_attr__( 'Upload static image  ', 'unicons-xmas' ),
	        'section'  => 'slider_setup',
					'default'     => get_stylesheet_directory_uri() . '/images/slider.jpg',
	        'priority' => 1,

			'active_callback'    => array(
		array(
				'setting'  => 'slider_select',
				'operator' => '==',
				'value'    => 'textanimation',
				),
	),
		));
		Kirki::add_field( 'unicons', array(
			'type'        => 'typography',
			'settings'    => 'slider_title_typography',
			'label'       => esc_attr__( 'Slider/Static title typography', 'unicons-xmas' ),
			'section'     => 'slider_setup',
			'default'     => array(
			'font-family'    => 'Mountains of Christmas',
			'variant'        => '700',
			'font-size'      => '80px',
			'line-height'    => '1.5',
			'letter-spacing' => '1px',
			'subsets'        => array( 'latin-ext' ),
			'text-transform' => 'uppercase',

		),
			'transport' => 'auto',
			'output' => array(
					array(
							'element'  => '.slider-text h3,.stat-content .brand-heading,.stat-content .brand-heading strong',
					),
			),


		) );
		Kirki::add_field( 'unicons', array(
			'type'        => 'typography',
			'settings'    => 'unicons_typography_sechead',
			'label'       => esc_attr__( 'Section Title typography', 'unicons-xmas' ),
			'section'     => 'unicons_typography_setting',
			'transport' => 'auto',
			'default'     => array(
				'font-family'    => 'Mountains of Christmas',
				'variant'        => '700',
				'font-size'      => '50px',
				'line-height'    => '1',
				'letter-spacing' => '3px',
				'subsets'        => array( 'latin-ext' ),
				'text-transform' => 'none',
			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '.section-header h1',
				),
			),
		) );
		Kirki::add_field( 'unicons', array(
			'type'        => 'typography',
			'settings'    => 'title_typography',
			'label'       => esc_attr__( 'Site title Typography', 'unicons-xmas' ),
			'section'     => 'unicons_headtitle_settings',
			'transport' => 'auto',
			'default'     => array(
				'font-family'    => 'Mountains of Christmas',
				'variant'        => '700',
				'font-size'      => '48px',
				'line-height'    => '1.5',
				'letter-spacing' => '0',
				'subsets'        => array( 'latin-ext' ),
				'color'          => '#fff',
				'text-transform' => 'none',

			),
			'priority'    => 10,
			'output'      => array(
				array(
					'element' => '#site-title .site-title,#site-title a',
				),
			),
		) );

}
add_action( 'after_setup_theme', 'unicons_xmas_child_theme_setup' );
