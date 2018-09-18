

<?php
	$layout=get_option('udm_footer_cta_default');
	$data=unserialize(get_option("footer_cta_layout_".$layout));
?>


<!--get_in_splitscreen--->
<section class="get_in_splitscreen back">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-6 p1-left align-self-stretch <?php if($data['element_type']=="form"){ echo "form_text"; }else if($data['element_type']=="image"){ echo "mobbackimage"; } ?>">
                <div class="main_content_box">
                    <div class="fullwidth_content">
                        <h2><?php if($data['title_text']!=""){ echo $data['title_text']; }else{ ?>An intelligent design platform build for<br>every type of industry.<?php } ?></h2>
                        <p><?php if($data['description_text']!=""){ echo $data['description_text']; }else{ ?>We design and build the tools necessary to compete and win<br>in the digital marketplace.<?php } ?></p>
                    </div>
                    <?php
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
							<iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="<?php echo $embedurl; ?>?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0"></iframe>
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
								var myLatLng = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};

								var map = new google.maps.Map(document.getElementById('map'), {
								  zoom: 4,
								  center: myLatLng
								});

								var marker = new google.maps.Marker({
								  position: myLatLng,
								  map: map,
								  title: 'Hello World!'
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

 

