<?php
	$data=unserialize(get_option('featured_layout_'.$layout));
	$meta = get_post_meta( $post->ID, 'hero_fields', true ); 
?>

<?php if($data['image_type']=="contained"){ ?>
<!--splitscreen-hero-->
<section class="splitscreen-hero contained <?php echo $transparent_header_class; ?>">
    <div class="container-fluid">
        <div class="row <?php if($data['content_side']=="left"){ echo "content-left"; }else{ } ?>">
            <div class="col col-lg-6 p1-both">
                <?php if(has_post_thumbnail()){ ?><img class="image_repsonsive" src="<?php echo the_post_thumbnail_url('full'); ?>" alt="image"><?php } ?>
            </div>
            <div class="col col-lg-6 p1-left">
				<div class="innercontet">
					<div class="fullwidth_content">
					   <?php if (is_array($meta) && isset($meta['udm_splitscreen_eyebrow_text_show']) && $meta['udm_splitscreen_eyebrow_text_show']=="no") {}else{ ?> <span><?php if (is_array($meta) && $meta['udm_splitscreen_eyebrow_text']!="") {	echo $meta['udm_splitscreen_eyebrow_text']; } ?></span><?php } ?>
						  <h2><?php if (is_array($meta) && $meta['udm_splitscreen_header_text']!=="") {	echo $meta['udm_splitscreen_header_text']; }else{ the_title(); } ?></h2>
						<p><?php if (is_array($meta) && $meta['udm_splitscreen_description']!="") {	echo $meta['udm_splitscreen_description']; } ?></p>
					</div>
					 <?php if($data['show_button']=="yes"){ ?><span class="right_side_bt"><a class="btn btn-info" href="<?php if($data['button_link']!=""){ echo $data['button_link']; } ?>"><h6><?php if($data['button_text']!=""){ echo $data['button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span><?php } ?>
				</div>
            </div>
        </div>
    </div>
</section>
<?php }else{ ?>   
<!--splitscreen-hero-2-->
<section class="splitscreen-hero back <?php echo $transparent_header_class; ?>">
    <div class="container-fluid">
        <div class="row  <?php if($data['content_side']=="right"){ echo ""; }else{ echo "content-left"; } ?>">
			<div class="col col-lg-6 p1-both">
            </div>
            <div class="col col-md-6 p1-left">
                <div class="innercontet">
					<div class="fullwidth_content">
						<?php if (is_array($meta) && isset($meta['udm_splitscreen_eyebrow_text_show']) && $meta['udm_splitscreen_eyebrow_text_show']=="no") {}else{ ?> <span><?php if (is_array($meta) && $meta['udm_splitscreen_eyebrow_text']!="") {	echo $meta['udm_splitscreen_eyebrow_text']; } ?></span><?php } ?>
						<h2><?php if (is_array($meta) && $meta['udm_splitscreen_header_text']!="") {	echo $meta['udm_splitscreen_header_text']; }else{ the_title(); } ?></h2>
						<p><?php if (is_array($meta) && $meta['udm_splitscreen_description']!="") {	echo $meta['udm_splitscreen_description']; }else{ ?>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<?php } ?></p>
					</div>
               
					<?php if($data['show_button']=="yes"){ ?><span class="right_side_bt"><a class="btn btn-info" href="<?php if($data['button_link']!=""){ echo $data['button_link']; } ?>"><h6><?php if($data['button_text']!=""){ echo $data['button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span><?php } ?>
				</div>
			</div>
        </div>
    </div>
</section>

<?php } ?>