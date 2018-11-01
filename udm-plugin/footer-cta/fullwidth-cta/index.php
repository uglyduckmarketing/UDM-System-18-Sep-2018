<?php
	$layout=get_option('udm_footer_cta_default');
	$data=unserialize(get_option("footer_cta_layout_".$layout));
?>
<!--get_in_touch_fullwidth-->
<section class="get_in_touch_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col <?php if($data['text_align']=="left"){ echo "text-left"; }else if($data['text_align']=="right"){ echo "text-right"; }else{ ?>text-center <?php } ?>">
                <div class="fullwidth_content">
                    <h2><?php if($data['title_text']!=""){ echo $data['title_text']; }else{ ?>An intelligent design platform build for<br>every type of industry.<?php } ?></h2>
                    <p><?php if($data['desc_text']!=""){ echo $data['desc_text']; }else{ ?>We design and build the tools necessary to compete and win<br>in the digital marketplace.<?php } ?></p>
                </div>
				<?php
				
				if($data['show_button']=="yes")
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
				
                <span class="right_side_bt"><a class="btn" href="<?php if($url!=""){ echo $url;}else{ ?>#<?php } ?>"><h6><?php if($data['button_text']!=""){ echo $data['button_text'];}else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
				<?php 
				}
				?>
            </div>
        </div>
    </div>
</section>