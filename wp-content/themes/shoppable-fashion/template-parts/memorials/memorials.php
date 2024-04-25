<?php
$blogmemorialoneID = get_theme_mod( 'blog_memorials_one','');
$blogmemorialcaptionone = get_theme_mod('memorials_caption_one','');
$blogmemorialtwoID = get_theme_mod( 'blog_memorials_two',''); 
$blogmemorialcaptiontwo = get_theme_mod('memorials_caption_two','');      
$blogmemorialthreeID = get_theme_mod( 'blog_memorials_three','');
$blogmemorialcaptionthree = get_theme_mod('memorials_caption_three','');

$memorial_array = array();
$has_memorial = false;
if( !empty( $blogmemorialoneID ) ){
	$blog_memorial_one  = wp_get_attachment_image_src( $blogmemorialoneID,'hello-shoppable-420-300');
 	if ( is_array(  $blog_memorial_one ) ){
 		$has_memorial = true;
   	 	$blog_memorial_one = $blog_memorial_one[0];
   	 	$memorial_array['image_one'] = array(
			'ID' => $blog_memorial_one,
			'caption' => $blogmemorialcaptionone,
		);	
  	}
}
if( !empty( $blogmemorialtwoID ) ){
	$blog_memorial_two = wp_get_attachment_image_src( $blogmemorialtwoID,'hello-shoppable-420-300');
	if ( is_array(  $blog_memorial_two ) ){
		$has_memorial = true;	
        $blog_memorial_two = $blog_memorial_two[0];
        $memorial_array['image_two'] = array(
			'ID' => $blog_memorial_two,
			'caption' => $blogmemorialcaptiontwo,
		);	
  	}
}
if( !empty( $blogmemorialthreeID ) ){	
	$blog_memorial_three = wp_get_attachment_image_src( $blogmemorialthreeID,'hello-shoppable-420-300');
	if ( is_array(  $blog_memorial_three ) ){
		$has_memorial = true;
      	$blog_memorial_three = $blog_memorial_three[0];
      	$memorial_array['image_three'] = array(
			'ID' => $blog_memorial_three,
			'caption' => $blogmemorialcaptionthree,
		);	
  	}
}

if( get_theme_mod( 'memorials_section', false ) && $has_memorial ){ ?>
	<section class="section-memorial-area">
		<div class="content-wrap">
			<div class="row">
				<?php foreach( $memorial_array as $each_memorial ){ ?>
					<div class="col-md-4">
						<article class="memorial-content-wrap">
							<figure class= "featured-image">
								<img src="<?php echo esc_url( $each_memorial['ID'] ); ?>">
							</figure>
							<h3 class="entry-title">
								<?php echo esc_html( $each_memorial['caption']  ); ?>
							</h3>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
	</section>
<?php } ?>
