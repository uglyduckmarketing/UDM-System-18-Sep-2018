<?php
global $post,$wpdb;
	$layout=get_option('udm_service_cta_default');
	$data = unserialize(get_option("service_cta_layout_".$layout));
?>
<!--get_in_touch_fullwidth-->
<section class="get_in_touch_service_cta_fullwidth">
    <div class="container">
        <div class="row">
			
            <div class="col <?php if($data['text_align']=="left"){ echo "text-left"; }else if($data['text_align']=="right"){ echo "text-right"; }else{ ?>text-center <?php } ?>">
                <div class="fullwidth_content">
                    <h2><?php if($data['title_text']!=""){ echo esc_attr($data['title_text']); }else{ ?>An intelligent design platform build for<br>every type of industry.<?php } ?></h2>
                    <p><?php if($data['desc_text']!=""){ echo esc_attr($data['desc_text']); }else{ ?>We design and build the tools necessary to compete and win<br>in the digital marketplace.<?php } ?></p>
                </div>
				<?php
				 if(isset($data['show_button']) && $data['show_button']=="yes")
				{
					if($data['button_link']!=""){ 
							$scheme = parse_url( $data['button_link'], PHP_URL_SCHEME);
								if( !in_array( $scheme, array( 'http', 'https'))){
									$url="http://".$data['button_link'];
								}
								else
								{
									$url=$data['button_link'];
								}
					}
				
				?>
				<span class="right_side_bt"><a class="btn" href="<?php if($url!=""){ echo isset($url) ? $url : '';}else{ ?>#<?php } ?>"><?php if($data['button_text']!=""){ echo esc_attr($data['button_text']);}else{ ?>Get Started<?php } ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
				<?php 
				}
				?>
            </div>
        </div>
    </div>
</section>