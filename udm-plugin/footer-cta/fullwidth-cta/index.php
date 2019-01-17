<?php
global $post,$wpdb;
$datas = array();
 $layout1=get_post_meta( $post->ID, 'udm_service_option', true );
	$layout=get_option('udm_footer_cta_default');
	$data = unserialize(get_option("footer_cta_layout_".$layout));
 /*if($layout1 == ''){
	 $layout=get_option('udm_service_default');
	 $datas=unserialize(get_option('service_layout_'.$layout));
 }else{
	 $datas=unserialize(get_option('service_layout_'.$layout1));
 }*/
?>
<!--get_in_touch_fullwidth-->
<section class="get_in_touch_fullwidth">
    <div class="container">
        <div class="row">
			<?php
				if(isset($datas['cta_choose_button_form']) && $datas['cta_choose_button_form'] == 'form'){ 
					?>
					<div class="col text-center">
						<div class="fullwidth_content">
							<?php
								echo do_shortcode('[ninja_form id='.$datas['cta_choose_ninja_form'].']');
							?>
						</div>
					</div>
					<?php
				}
				else{
			
			?>
            <div class="col <?php if($data['text_align']=="left"){ echo "text-left"; }else if($data['text_align']=="right"){ echo "text-right"; }else{ ?>text-center <?php } ?>">
                <div class="fullwidth_content">
                    <h2><?php if(isset($datas) && $datas['cta_heading'] != ''){ echo esc_attr($datas['cta_heading']); }else if($data['title_text']!=""){ echo esc_attr($data['title_text']); }else{ ?>An intelligent design platform build for<br>every type of industry.<?php } ?></h2>
                    <p><?php if(isset($datas) && $datas['cta_description'] != ''){ echo esc_attr($datas['cta_description']); } else if($data['desc_text']!=""){ echo esc_attr($data['desc_text']); }else{ ?>We design and build the tools necessary to compete and win<br>in the digital marketplace.<?php } ?></p>
                </div>
				<?php
				if($datas['cta_button_text'] != '' && $datas['cta_button_link'] != ''){
					if($datas['cta_button_link'] != ''){
							$scheme = parse_url( $datas['cta_button_link'], PHP_URL_SCHEME);
							if( !in_array( $scheme, array( 'http', 'https'))){
								$url="http://".$datas['cta_button_link'];
							}
							else
							{
								$url=$datas['cta_button_link'];
							}
						}
						if($datas['cta_button_text'] != ''){ $button = $datas['cta_button_text']; }else if($data['button_text']!=""){ $button = $data['button_text']; }else{ $button = 'Get Started'; }
						?>
						<span class="right_side_bt"><a class="btn custbtn" href="<?php if($url!=""){ echo isset($url) ? $url : '';}else{ ?>#<?php } ?>"><h6><?php if($data['button_text']!=""){ echo esc_attr($data['button_text']);}else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
						<?php
				}
				else if(isset($data['show_button']) && $data['show_button']=="yes")
				{
					if($data['button_url']!=""){ 
							$scheme = parse_url( $data['button_url'], PHP_URL_SCHEME);
								if( !in_array( $scheme, array( 'http', 'https'))){
									$url="http://".$data['button_url'];
								}
								else
								{
									$url=$data['button_url'];
								}
					}
				
				?>
				<span class="right_side_bt"><a class="btn custbtn" href="<?php if($url!=""){ echo isset($url) ? $url : '';}else{ ?>#<?php } ?>"><?php if($data['button_text']!=""){ echo esc_attr($data['button_text']);}else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
				<?php 
				}
				?>
            </div>
			<?php } ?>
        </div>
    </div>
</section>