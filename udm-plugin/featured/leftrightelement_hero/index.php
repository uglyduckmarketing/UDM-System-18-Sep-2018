<?php
	$data=unserialize(get_option('featured_layout_'.$layout));
	$meta = get_post_meta( $post->ID, 'hero_fields', true ); 
?>

<section class="fullwidth-hero-3 leadgen-hero left-right_hero <?php echo $transparent_header_class; ?>">
    <div class="container">
        <div class="row <?php if($data['content_side']=="right"){ echo "content-right"; } ?>">
            <div class="col col-md-6">
                <div class="fullwidth_content">
                    <?php if (is_array($meta) && isset($meta['udm_leftrightelement_eyebrow_text_show']) && $meta['udm_leftrightelement_eyebrow_text_show']=="yes") { ?> <span><?php if (is_array($meta) && $meta['udm_leftrightelement_eyebrow_text']!="") {	echo $meta['udm_leftrightelement_eyebrow_text']; } ?></span><?php } ?>
                    <h2><?php if (is_array($meta) && $meta['udm_leftrightelement_header_text']!="") {	echo $meta['udm_leftrightelement_header_text']; }else{ the_title(); } ?></h2>
                    <p><?php if (is_array($meta) && $meta['udm_leftrightelement_description']!="") {	echo $meta['udm_leftrightelement_description']; }else{ ?>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<?php } ?></p>
                </div>
                <?php if(isset($data['show_button']) && $data['show_button']=="yes"){ ?><span class="right_side_bt"><a class="btn btn-info" href="<?php if(isset($data['button_link']) && $data['button_link']!=""){ echo $data['button_link']; } ?>"><h6><?php if($data['button_text']!=""){ echo $data['button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span><?php } ?>
            </div>
            <div class="col col-md-6">
                <div class="form_part_top">
					<?php if(is_array($meta) && isset($meta['udm_leftrightelement_element']) && $meta['udm_leftrightelement_element']=="video"){
						if(strpos($meta['udm_leftrightelement_video'], 'youtube') !== false)
						{
							if(strpos($meta['udm_leftrightelement_video'], 'https://www.youtube.com/embed/') !== false)
							{
								$embedurl = $meta['udm_leftrightelement_video'];
							}
							else
							{
								$step1=explode('v=', $meta['udm_leftrightelement_video']);
								$step2 =explode('&',$step1[1]);
								$vedio_id = $step2[0];
								$embedurl="https://www.youtube.com/embed/". $vedio_id;
							}
							
						}
						else
						{
							if(strpos($meta['udm_leftrightelement_video'], 'https://player.vimeo.com/video/') !== false)
							{
								$embedurl = $meta['udm_leftrightelement_video'];
							}
							else
							{
								$vedio_id = str_replace('https://vimeo.com/','',$meta['udm_leftrightelement_video']);
								$embedurl = "https://player.vimeo.com/video/".$vedio_id;
							}
							
						}
					?>
						<iframe width="450" height="315" src="<?php echo $embedurl; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

					<?php } ?>
				 <?php if(is_array($meta) && $meta['udm_leftrightelement_element']=="image"){ ?><img width="450" height="315" src="<?php if (is_array($meta) && $meta['udm_leftrightelement_image']!="") {	echo $meta['udm_leftrightelement_image']; } ?>" ><?php } ?>
                </div>
            </div>
            
        </div>
    </div>
</section>