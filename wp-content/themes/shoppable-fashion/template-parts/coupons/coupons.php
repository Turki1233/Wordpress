<?php
$blogcoupononeID = get_theme_mod( 'blog_coupon_one','');
$blogcoupontwoID = get_theme_mod( 'blog_coupon_two','');       
$blogcouponthreeID = get_theme_mod( 'blog_coupon_three','');
$blogcouponfourID = get_theme_mod( 'blog_coupon_four','');

$coupons_array = array();
$has_coupons = false;
if( !empty( $blogcoupononeID ) ){
	$blog_coupon_one  = wp_get_attachment_image_src( $blogcoupononeID,'hello-shoppable-420-300');
 	if ( is_array(  $blog_coupon_one ) ){
 		$has_coupons = true;
   	 	$blog_coupons_one = $blog_coupon_one[0];
   	 	$coupons_array['image_one'] = array(
			'ID' => $blog_coupons_one,
		);	
  	}
}
if( !empty( $blogcoupontwoID ) ){
	$blog_coupon_two = wp_get_attachment_image_src( $blogcoupontwoID,'hello-shoppable-420-300');
	if ( is_array(  $blog_coupon_two ) ){
		$has_coupons = true;	
        $blog_coupons_two = $blog_coupon_two[0];
        $coupons_array['image_two'] = array(
			'ID' => $blog_coupons_two,
		);	
  	}
}
if( !empty( $blogcouponthreeID ) ){	
	$blog_coupon_three = wp_get_attachment_image_src( $blogcouponthreeID,'hello-shoppable-420-300');
	if ( is_array(  $blog_coupon_three ) ){
		$has_coupons = true;
      	$blog_coupons_three = $blog_coupon_three[0];
      	$coupons_array['image_three'] = array(
			'ID' => $blog_coupons_three,
		);	
  	}
}
if( !empty( $blogcouponfourID ) ){	
	$blog_coupon_four = wp_get_attachment_image_src( $blogcouponfourID,'hello-shoppable-420-300');
	if ( is_array(  $blog_coupon_four ) ){
		$has_coupons = true;
      	$blog_coupons_four = $blog_coupon_four[0];
      	$coupons_array['image_four'] = array(
			'ID' => $blog_coupons_four,
		);	
  	}
}

if( get_theme_mod( 'coupons_section', false ) && $has_coupons ){ ?>
	<section class="section-coupons-area">
		<div class="content-wrap">
			<div class="row">
				<?php foreach( $coupons_array as $each_coupons ){ ?>
					<div class="col-md-3">
						<article class="coupons-content-wrap">
							<figure class= "featured-image">
								<img src="<?php echo esc_url( $each_coupons['ID'] ); ?>">
							</figure>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
	</section>
<?php } ?>

