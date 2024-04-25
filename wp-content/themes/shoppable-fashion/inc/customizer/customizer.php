<?php
/**
 * Enqueue customizer css.
 */

function shoppable_fashion_customize_enqueue_style() {

	wp_enqueue_style( 'shoppable-fashion-customize-controls', get_stylesheet_directory_uri() . '/inc/customizer/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'shoppable_fashion_customize_enqueue_style', 99 );

/**
 * Kirki Customizer
 *
 * @return void
 */
add_action( 'init' , 'shoppable_fashion_kirki_fields', 999, 1 );

function shoppable_fashion_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	//Coupons
	Kirki::add_section( 'blog_coupons', array(
	    'title'          => esc_html__( 'Coupons', 'shoppable-fashion' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 26,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Coupons Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'coupons_section',
		'section'      => 'blog_coupons',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Coupon One', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_coupon_one',
		'section'      => 'blog_coupons',
		'default'      => '',
		'priority'	   => 20,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Coupon two', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_coupon_two',
		'section'      => 'blog_coupons',
		'default'      => '',
		'priority'	   => 30,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Coupon Three', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_coupon_three',
		'section'      => 'blog_coupons',
		'default'      => '',
		'priority'	   => 40,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Coupon Four', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_coupon_four',
		'section'      => 'blog_coupons',
		'default'      => '',
		'priority'	   => 50,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'coupons_responsive_separator',
	    'section'     => 'blog_coupons',
	    'default'     => esc_html__( 'Responsive', 'shoppable-fashion' ),
	    'priority'	  => 60,
	    'active_callback' => array(
			array(
				'setting'  => 'coupons_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Coupons Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_coupons',
		'section'      => 'blog_coupons',
		'default'      => true,
		'priority'	   => 70,
		'active_callback' => array(
			array(
				'setting'  => 'coupons_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Comments 
	Kirki::add_section( 'blog_comments', array(
	    'title'          => esc_html__( 'Comments', 'shoppable-fashion' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 27,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Comments Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'comments_section',
		'section'      => 'blog_comments',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 1', 'shoppable-fashion' ),
		'type'        => 'select',
		'settings'    => 'comments_page_one',
		'section'     => 'blog_comments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 1', 'shoppable-fashion' ),
		'choices'     => shoppable_fashion_get_pages(),
		'priority'	  => 20,
	));
		

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 2', 'shoppable-fashion' ),
		'type'        => 'select',
		'settings'    => 'comments_page_two',
		'section'     => 'blog_comments',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 2', 'shoppable-fashion' ),
		'choices'     => shoppable_fashion_get_pages(),
		'priority'	  => 30,
		
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 3', 'shoppable-fashion' ),
		'type'        => 'select',
		'settings'    => 'comments_page_three',
		'section'     => 'blog_comments',
		'default'     => '',
		'choices'     => shoppable_fashion_get_pages(),
		'placeholder' => esc_html__( 'Select Page 3', 'shoppable-fashion' ),
		'priority'	  => 40,
	
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'comments_responsive_separator',
	    'section'     => 'blog_comments',
	    'default'     => esc_html__( 'Responsive', 'shoppable-fashion' ),
	    'priority'	  => 50,
	    'active_callback' => array(
			array(
				'setting'  => 'comments_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Comments Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_comments',
		'section'      => 'blog_comments',
		'default'      => true,
		'priority'	   => 60,
		'active_callback' => array(
			array(
				'setting'  => 'comments_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Details
	Kirki::add_section( 'blog_details', array(
	    'title'          => esc_html__( 'Details', 'shoppable-fashion' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 28,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Details Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'details_section',
		'section'      => 'blog_details',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail one', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_one_title',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail One Content', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_one_content',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 20,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail Two', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_two_title',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 30,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail Two Content', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_two_content',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 40,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail Three', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_three_title',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 50,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail Three Content', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_three_content',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 60,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail Four', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_four_title',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 70,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Detail Four Content', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'detail_four_content',
		'section'     => 'blog_details',
		'default'     => '',
		'priority'	   => 80,
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'details_responsive_separator',
	    'section'     => 'blog_details',
	    'default'     => esc_html__( 'Responsive', 'shoppable-fashion' ),
	    'priority'	  => 90,
	    'active_callback' => array(
			array(
				'setting'  => 'details_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	kirki::add_field('hello-shoppable',array(
		'label'        => esc_html__( 'Details Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_details',
		'section'      => 'blog_details',
		'default'      => true,
		'priority'	   => 100,
		'active_callback' => array(
			array(
				'setting'  => 'details_section',
				'operator' => '==',
				'value'    => true,
			),
		),

	) );

	//Memorials
	Kirki::add_section( 'blog_memorials', array(
	    'title'          => esc_html__( 'Memorials', 'shoppable-fashion' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 29,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Memorials Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'memorials_section',
		'section'      => 'blog_memorials',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image One', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_memorials_one',
		'section'      => 'blog_memorials',
		'default'      => '',
		'priority'	   => 20,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Caption One', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'memorials_caption_one',
		'section'     => 'blog_memorials',
		'default'     => '',
		'priority'	   => 30,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Two', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_memorials_two',
		'section'      => 'blog_memorials',
		'default'      => '',
		'priority'	   => 40,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Caption Two', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'memorials_caption_two',
		'section'     => 'blog_memorials',
		'default'     => '',
		'priority'	   => 50,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Image Three', 'shoppable-fashion' ),
		'type'         => 'image',
		'settings'     => 'blog_memorials_three',
		'section'      => 'blog_memorials',
		'default'      => '',
		'priority'	   => 60,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Caption Three', 'shoppable-fashion' ),
		'type'        => 'text',
		'settings'    => 'memorials_caption_three',
		'section'     => 'blog_memorials',
		'default'     => '',
		'priority'	   => 70,
	) );

	// Responsive
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'memorials_responsive_separator',
	    'section'     => 'blog_memorials',
	    'default'     => esc_html__( 'Responsive', 'shoppable-fashion' ),
	    'priority'	  => 80,
	    'active_callback' => array(
			array(
				'setting'  => 'memorials_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Memorials Section', 'shoppable-fashion' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_memorials',
		'section'      => 'blog_memorials',
		'default'      => true,
		'priority'	   => 90,
		'active_callback' => array(
			array(
				'setting'  => 'memorials_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

}