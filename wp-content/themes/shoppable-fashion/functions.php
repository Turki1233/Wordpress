<?php
/**
 * Theme functions and definitions
 *
 * @package Shoppable Fashion 1.0.0
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'shoppable_fashion_enqueue_styles' ) ) :
	/**
	 * @since Shoppable Fashion 1.0.0
	 */
	function shoppable_fashion_enqueue_styles() {
        require_once get_theme_file_path ( 'inc/wptt-webfont-loader.php');

		wp_enqueue_style( 'shoppable-fashion-style-parent', get_template_directory_uri() . '/style.css',
			array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'fontawesome',
				'hello-shoppable-blocks',
				'hello-shoppable-google-font'
				)
		);
//review check
	    wp_enqueue_style(
            'shoppable-fashion-google-fonts',
            wptt_get_webfont_url( "https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" ),
            false
        );


	}

endif;
add_action( 'wp_enqueue_scripts', 'shoppable_fashion_enqueue_styles', 10 );


//Stop WooCommerce redirect on activation
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

/**
* Get pages by post id.
* 
* @since Shoppable Fashion 1.0.0
* @return array.
*/
function shoppable_fashion_get_pages(){
    $page_array = get_pages();
    $pages_list = array();
    foreach ( $page_array as $key => $value ){
        $page_id = absint( $value->ID );
        $pages_list[ $page_id ] = $value->post_title;
    }
    return $pages_list;
}



add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );