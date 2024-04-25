<?php
$detail_one_title 	= get_theme_mod( 'detail_one_title', '' );
$detail_one_content   = get_theme_mod( 'detail_one_content', '' );

$detail_two_title 	= get_theme_mod( 'detail_two_title', '' );
$detail_two_content   = get_theme_mod( 'detail_two_content', '' );

$detail_three_title   = get_theme_mod( 'detail_three_title', '' );
$detail_three_content = get_theme_mod( 'detail_three_content', '' );

$detail_four_title    = get_theme_mod( 'detail_four_title', '' );
$detail_four_content  = get_theme_mod( 'detail_four_content', '' );


$detail_array = array();
$has_detail = false;
if( !empty( $detail_one_title) || !empty($detail_one_content ) ){
	$has_detail = true;
	$detail_array['detail_one'] = array(
		'title' => $detail_one_title,
		'content' => $detail_one_content,
	);
}
if( !empty($detail_two_title) || !empty($detail_two_content ) ){
	$has_detail = true;
	$detail_array['detail_two'] = array(
		'title' => $detail_two_title,
		'content' => $detail_two_content,
	);
}
if( !empty( $detail_three_title) || !empty($detail_three_content) ){
	$has_detail = true;
	$detail_array['detail_three'] = array(
		'title' => $detail_three_title,
		'content' => $detail_three_content,
	);
}
if( !empty( $detail_four_title) || !empty($detail_four_content) ){
	$has_detail = true;
	$detail_array['detail_four'] = array(
		'title' => $detail_four_title,
		'content' => $detail_four_content,
	);
}

if( get_theme_mod( 'details_section', false ) && $has_detail ){ ?>
	<section class="section-detail-area">
		<div class="content-wrap">
			<div class="row">
				<?php foreach( $detail_array as $each_detail ){ ?>
					<div class="col-sm-6 col-lg-3">
						<article class="detail-content-wrap text-center">	
							<div class="detail-icon">
								<i class="fas fa-file-alt text-center"></i>
							</div>					
							<div class="entry-content">
								<header class="entry-header">
									<h3 class="entry-title">
										<?php echo esc_html( $each_detail['title'] ); ?>
									</h3>
									<?php echo esc_html( $each_detail['content'] ); ?>
								</header>
							</div>
						</article>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>  