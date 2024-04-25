<?php

function shoppable_fashion_default_styles(){

	// Begin Style
	$css = '<style>';

	# Responsive Cupons
	if( !get_theme_mod( 'mobile_coupons', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-coupons-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Comments
	if(!get_theme_mod('mobile_comments', true ) ){
		$css .='
			@media screen and (max-width: 767px){
				.section-comment-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Details
	if( !get_theme_mod( 'mobile_details', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-detail-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Memorials
	if( !get_theme_mod( 'mobile_memorials', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-memorial-area {
	    			display: none;
				}
			}
		';
	}
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'shoppable_fashion_default_styles', 99 );