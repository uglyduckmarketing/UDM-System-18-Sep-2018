<section class="desc_section">
	<div class="container">
		<div class="row row-eq-height">
		<?php $bmeta = get_post_meta(get_the_ID(),'benifit', true); 
			//if(isset($bmeta)){
				$columnclass = "col-md-9"; 
		?><div class="col-md-3 border-right padded-top benefit" >
			<?php if(count($bmeta) > 0){ for($i = 0 ; $i<count($bmeta); $i++){ ?>
				<div class="left-benefit">
					<h3><?php if(isset($bmeta[$i]['benefit_'.$i.'_title'])) { echo esc_attr($bmeta[$i]['benefit_'.$i.'_title']); } ?></h3>
					<?php if(isset($bmeta[$i]['benefit_'.$i.'_text'])) { echo esc_attr($bmeta[$i]['benefit_'.$i.'_text']); } ?><br>
				</div>
			<?php } } ?>
    		</div> 
			<?php //}else{ $columnclass = "col-md-12"; } ?>
			<?php $sdmeta = get_post_meta(get_the_ID(),'service_desc', true); ?>
			<div class="col-md-9 padded service_desc">
				<?php 
					echo isset($sdmeta['description_eyebrow']) ? '<span class="eyebrow">'.$sdmeta['description_eyebrow'].'</span>' : '';
					echo isset($sdmeta['description_heading']) ? '<h2 class="heading">'.$sdmeta['description_heading'].'</h2>' : ''; 	
					echo isset($sdmeta['service_description']) ? '<div class="intro">'.nl2br($sdmeta['service_description']).'</div>' : ''; 	
				?>
			</div>
		</div>
	</div>
</section>
<?php $bkmeta = get_post_meta(get_the_ID(),'breakdown', true);
if(is_array($bkmeta) && count(array_filter($bkmeta)) != 0){
 ?>
<section class="service_breakdown">
	<div class="container-fluid">
		<?php  for($i = 0 ; $i<count($bkmeta); $i++){ 
				 if (0 == $i % 2) {
					 $class="alignleftrow";
				 }else{
					   $class="alignrightrow";
				 }
			?>
			<div class="row align-items-center <?php echo esc_attr($class); ?>" style="">
			<?php if (0 == $i % 2) {
				?>
				<div class="col col-lg-6  p1-left">
					<span class="eyebrow" style="">
						<?php echo esc_attr($bkmeta[$i]['service_break_'.$i.'_eyebrow']); ?>
					</span>
					<h2 class="heading" style="">
						<?php echo esc_attr($bkmeta[$i]['service_break_'.$i.'_heading']); ?>
					</h2>
					<div class="desc">
						<?php echo nl2br($bkmeta[$i]['service_break_'.$i.'_text']); ?>
					</div>
					<?php if($bkmeta[$i]['button_'.$i.'_title'] != ''){ ?>
					<div class="brakdowbutton">
							<a target="_blank" class="btn btn-info" href="<?php echo esc_attr($bkmeta[$i]['button_'.$i.'_link']); ?>"><?php echo esc_attr($bkmeta[$i]['button_'.$i.'_title']); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>	
					<?php } ?>					
				</div> 
				<?php $url = wp_get_attachment_image_url( $bkmeta[$i]['service_break_'.$i.'_image'],'full'); ?>
				<div class="col col-lg-6 p1-both element" style="background-image:url(<?php echo esc_attr($url); ?>)">
				</div>
				<?php
			}else{
				?>  
				<?php $url1 = wp_get_attachment_image_url( $bkmeta[$i]['service_break_'.$i.'_image'],'full'); ?>
				<div class="col col-lg-6 p1-both element" style="background-image:url(<?php echo esc_attr($url1); ?>)">
				</div>
				<div class="col col-lg-6 p1-left">
					<span class="eyebrow" style="">
						<?php echo esc_attr($bkmeta[$i]['service_break_'.$i.'_eyebrow']); ?>
					</span>
					<h2 class="heading" style="">
						<?php echo esc_attr($bkmeta[$i]['service_break_'.$i.'_heading']); ?>
					</h2>
					<div class="desc">
						<?php echo nl2br($bkmeta[$i]['service_break_'.$i.'_text']); ?>
					</div>
					<?php if($bkmeta[$i]['button_'.$i.'_title'] != ''){ ?>
					<div class="brakdowbutton">
							<a target="_blank" class="btn btn-info" href="<?php echo esc_attr($bkmeta[$i]['button_'.$i.'_link']); ?>"><?php echo esc_attr($bkmeta[$i]['button_'.$i.'_title']); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>	
					<?php } ?>					
				</div>
				<?php
			}
			?>
			</div>
			<?php } ?>
	</div>
</section>
<?php } $vmeta = get_post_meta(get_the_ID(),'service_video', true); 
if($vmeta['vimeo_id'] != '' || $vmeta['youtube_link'] != ''){
?>
<section class="service_video">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-10 offset-md-1 text-center">
			<?php 
				echo isset($vmeta['video_desc_eyebrow']) ? '<span class="eyebrow">'.$vmeta['video_desc_eyebrow'].'</span>' : '';
				echo isset($vmeta['video_desc_heading']) ? '<h2 class="heading" >'.$vmeta['video_desc_heading'].'</h2>' : ''; 	
			?> 
			<div class="col-md-10 offset-md-1 text-center">
				<div class="embed-responsive embed-responsive-16by9 mrtop_60">
					<?php if(isset($vmeta['youtube_link']) && $vmeta['youtube_link'] != ''){ ?>
						<iframe class="embed-responsive-item" src="<?php echo esc_attr($vmeta['youtube_link']); ?>" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
					<?php }else if(isset($vmeta['vimeo_id']) && $vmeta['vimeo_id'] != ''){ ?>
						<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo esc_attr($vmeta['vimeo_id']); ?>" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0"></iframe>
					<?php }						
					?>
				</div> 
				<?php 
					echo isset($vmeta['video_desc_services']) ? '<div class="video_desc"><p>'.nl2br($vmeta['video_desc_services']).'</p></div>' : ''; 
					?>
			</div>
		</div>
	</div>
</section>
<?php }  
$gmeta = get_post_meta(get_the_ID(),'service_gallery', true); 
if(count(array_filter($gmeta)) != 0){
	$gallery = isset($gmeta['gallery_name']) ? $gmeta['gallery_name'] : '';
?>
<section class="service_gallery">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<?php 
					echo isset($gmeta['gallery_eyebrow']) ? '<span class="eyebrow" style="">'.$gmeta['gallery_eyebrow'].'</span>' : '';
					echo isset($gmeta['gallery_heading']) ? '<h2 class="heading" style="">'.$gmeta['gallery_heading'].'</h2>' : ''; 
				?>
			</div>
		</div>
	</div>
	<div class="container">	
		<div class="row masonry mrtop_60">
			<?php
				$gallerylist = unserialize(get_post_meta($gallery,'my_gallery_data', true)); 
				foreach( $gallerylist as $image ):
				 $attachment = get_post($image);
				$src = $attachment->guid;
				$title = $attachment->post_title;
				$description = $attachment->post_content;
				$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
			?>
			<figure class="masonry-brick" href="<?php echo esc_attr($src); ?>" data-desc="<?php echo esc_attr($description); ?>">
				<img class="masonry-img" src="<?php echo esc_attr($src); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo esc_attr($title); ?>">
			</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php } 
$rmeta = get_post_meta(get_the_ID(),'related', true); 

if(get_post_meta( get_the_ID(), 'udm_service_option', true )!="")
{
	$layout=get_post_meta( get_the_ID(), 'udm_service_option', true );
}
else
{
	$layout='';
}
$data=unserialize(get_option('service_layout_'.$layout));
$show_related = isset($data['show_related']) ? $data['show_related'] : 'yes';
if($data['show_related'] == 'yes'){ 
	$related_number = isset($data['related_show_post']) ? $data['related_show_post'] : 3;
?>
<section class="service_related" >
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<?php 
					echo isset($rmeta['related_eyebrow']) ? '<span class="eyebrow" style="">'.$rmeta['related_eyebrow'].'</span>' : '';
					echo isset($rmeta['related_heading']) ? '<h2 class="heading" style="">'.$rmeta['related_heading'].'</h2>' : ''; 
				?>
				<div class="row mrtop_60"> 
				<?php 
				global $post;

				$categories = get_the_terms( $post->ID, 'services' ); 
				$cats_ids = array();  
				
				if(!empty($categories)){
				foreach( $categories as $wpex_related_cat ) {
					$cats_ids[] = $wpex_related_cat->term_id; 
				}
				$args =  array(
                    array(
                        'taxonomy' => 'services',
                        'field' => 'id',
                        'terms' => $cats_ids,
                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                     ));
		
				$loop = new WP_Query( array( 'post_type' => 'service','tax_query' => $args, 'posts_per_page' => $related_number, 'post__not_in' => array(get_the_ID()) ) ); ?>
				<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID), array( 5600,1000 ), false, '' ); ?>
					<div class="col-md-4 padded_col">
						<a href="<?php the_permalink(); ?>" class="service_box" style="background-image: url(<?php echo esc_attr($img[0]); ?>)">
							<div class="padded_col-overlay"></div>
							<div class="service_box-content">
								<h3><?php the_title(); ?></h3>
								<span>View Service</span>
							</div>
						</a>
					</div> 
<?php endwhile; endif; wp_reset_postdata(); } ?>
			</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>