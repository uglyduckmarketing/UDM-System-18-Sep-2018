<?php
$layout=get_option('udm_footer_cta_default');
$data=unserialize(get_option("footer_cta_layout_".$layout));
global $post,$wpdb;
$cta = get_post_meta($post->ID, 'service_cta', true);
 $layout=get_post_meta( $post->ID, 'udm_service_option', true );
$datas=unserialize(get_option('service_layout_'.$layout));
?>
<!--get_in_splitscreen--->
<section class="get_in_splitscreen back">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-6 p1-left align-self-stretch <?php if($cta['choose_btn_form'] == 'form'){ echo "form_text"; } else if($data['element_type']=="form"){ echo "form_text"; }else if($data['element_type']=="image"){ echo "mobbackimage"; } ?>">
                <div class="main_content_box">
				<?php if(isset($cta['choose_btn_form']) && $cta['choose_btn_form'] == 'form'){ 
					echo do_shortcode('[ninja_form id='.$cta['choose_ninja_form'].']');
				}else {?>
                    <div class="fullwidth_content">
					
						<?php if(isset($cta) && isset($cta['cta_eyebrow']) && $cta['cta_eyebrow'] != ''){ echo '<span class="eyebrow" style="">'.$cta['cta_eyebrow'].'</span>'; } ?>
                        <h2><?php if(isset($cta) && isset($cta['cta_heading']) && $cta['cta_heading'] != ''){ echo esc_attr($cta['cta_heading']); }else if($data['title_text']!=""){ echo esc_attr($data['title_text']); }else{ ?>An intelligent design platform build for<br>every type of industry.<?php } ?></h2>
                        <p><?php if(isset($cta) && isset($cta['cta_description']) &&  $cta['cta_description'] != ''){ echo esc_attr($cta['cta_description']); } else if($data['description_text']!=""){ echo esc_attr($data['description_text']); }else{ ?>We design and build the tools necessary to compete and win<br>in the digital marketplace.<?php } ?></p>
                    </div>
                    <?php
					if(get_post_meta($post->ID, 'service_cta', true) != '' && $cta['cta_button_text'] != '' && $cta['cta_button_link'] != ''){
						$cta = get_post_meta($post->ID, 'service_cta', true);
						if($cta['cta_button_link'] != ''){
							$scheme = parse_url( $cta['cta_button_link'], PHP_URL_SCHEME);
							if( !in_array( $scheme, array( 'http', 'https'))){
								$url="http://".$cta['cta_button_link'];
							}
							else
							{
								$url=$cta['cta_button_link'];
							}
						}
						if($cta['cta_button_text'] != ''){ $button = $cta['cta_button_text']; }else if($data['button_text']!=""){ $button = $data['button_text']; }else{ $button = 'Get Started'; }
					}
					else if(get_post_meta($post->ID, 'udm_service_option', true )!="" && $datas['cta_button_link'] != '' && $datas['cta_button_text'] != '')
					{
						
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
						if($datas['cta_button_text'] != ''){ $button = $datas['cta_button_text']; }else if($datas['button_text']!=""){ $button = $datas['button_text']; }else{ $button = 'Get Started'; }
					}else{
						 if(isset($data['button_url']) && $data['button_url']!=""){ 
								$scheme = parse_url( isset($data['button_url']) ? $data['button_url'] : '', PHP_URL_SCHEME);
									if( !in_array( $scheme, array( 'http', 'https'))){
										$url="http://".isset($data['button_url']) ? $data['button_url'] : '';
									}
									else
									{
										$url=isset($data['button_url']) ? $data['button_url'] : '';
									}
						}
						if($data['button_text']!=""){ $button = $data['button_text']; }else{ $button = 'Get Started'; }
					}
				?>
                <span class="right_side_bt"><a <?php if(isset($url) && $url!=""){ ?> target="_blank" <?php } ?> class="btn" href="<?php if($url!=""){ echo isset($url) ? $url : '';}else{ ?>#<?php } ?>"><h6><?php echo esc_attr($button); ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span>
				<?php } ?>
                </div>
            </div>
            <div class="col col-lg-6 p1-both align-self-stretch element <?php if($data['element_type']=="form" ){ echo "formdata"; }else if($data['element_type']=="map" ){ }else{ echo "shadow"; } ?>">
                <?php
					if($data['element_type']=="image")
					{
						echo "<div class='image'><img src=".$data['element_image_url']." alt='' class='image_repsonsive'></div>";
					}
					else if($data['element_type']=="video")
					{
						if(strpos($data['element_video_link'], 'youtube') !== false)
						{
							if(strpos($data['element_video_link'], 'https://www.youtube.com/embed/') !== false)
							{
								$embedurl = $data['element_video_link'];
							}
							else
							{
								$step1=explode('v=', $data['element_video_link']);
								$step2 =explode('&',$step1[1]);
								$vedio_id = $step2[0];
								$embedurl="https://www.youtube.com/embed/". $vedio_id;
							}
							
						}
						else
						{
							if(strpos($data['element_video_link'], 'https://player.vimeo.com/video/') !== false)
							{
								$embedurl = $data['element_video_link'];
							}
							else
							{
								$vedio_id = str_replace('https://vimeo.com/','',$data['element_video_link']);
								$embedurl = "https://player.vimeo.com/video/".$vedio_id;
							}
							
						
							
						}
					?>	
						<div class="video_wrapper video_wrapper_full js-videoWrapper">
							<iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="<?php echo esc_attr($embedurl); ?>?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0"></iframe>
							<div class="videoPoster js-videoPoster"><button></button></div>
						</div>
					<?php
					}
					else if($data['element_type']=="form")
					{
						echo do_shortcode($data['element_form_shortcode']);
					}
					else if($data['element_type']=="map")
					{
						if($data['element_map_lat']!="")
						{
							$latitude=$data['element_map_lat'];
						}
						else
						{
							$latitude="-25.363882";
						}
						
						if($data['element_map_long']!="")
						{
							$longitude=$data['element_map_long'];
						}
						else
						{
							$longitude="131.044922";
						}
						?>
						 <div id="map"></div>
							<script>

							  function initMap() {
								var myLatLng = {lat: <?php echo esc_attr($latitude); ?>, lng: <?php echo esc_attr($longitude); ?>};

								var map = new google.maps.Map(document.getElementById('map'), {
								  zoom: 8,
								  center: myLatLng
								});

								var marker = new google.maps.Marker({
								  position: myLatLng,
								  map: map
								});
							  }
							</script>
							<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=<?php $data['element_map_api_key']; ?>&callback=initMap">
							</script>
						<?php
					} 
					else
					{
						 
					}
				?>
            </div>
        </div>
    </div>
</section>