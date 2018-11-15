<?php
	$data=unserialize(get_option('header_layout_'.$layout));
?>
<header>
 <!--top-header_basic-->
        <div class="stacked_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 p-no logo_stacked">
                     <a class="navbar-brand" href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('udm_company_logo'); ?>"></a>
                     
                    </div>
                    <div class="col-md-10 p-no">
						<?php 
							//if($data['header_topbar']=="yes")
						//	{
						?>
					   <section class="top_stacked_header top_basic_show <?php if(isset($data['top_bar_style']) && $data['top_bar_style']=="1_3"){ echo "one_third"; }else{ echo "fifty_fifty"; } ?>" >
                            <div class="container-fluid">
                                <div class="row">
								
							
									<?php 
										if(isset($data['lefttopbartext']) && $data['lefttopbartext'] == 'yes')
										{
									?>
                                    <div class="col">
                                    <ul class="top_header_get_bt top_header_get_bt_show lefttoptext">
										<li><p><?php echo isset($data['lefttopbar_text']) ? $data['lefttopbar_text'] : ''; ?></p></li>
										</ul>
                                    </div>
									<?php 
										}
										else if(isset($data['lefttopbarphone']) && $data['lefttopbarphone'] == 'yes')
										{
									?>
                                    <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-12">
									 <ul class="top_heade_left top_header_left_show lefttopphone">
										<?php 
											if(isset($data['lefttopbar_phone_left_text']) && $data['lefttopbar_phone_left_text']!="")
											{
										?>
										<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['lefttopbar_phone_left_text']) ? $data['lefttopbar_phone_left_text'] : ''; ?></a></li>
										<?php
											}										
											if(isset($data['lefttopbar_phone_overright']) && $data['lefttopbar_phone_overright']=="yes")
											{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo isset($data['lefttopbar_phone_number']) ? $data['lefttopbar_phone_number'] : ''; ?>"><?php echo isset($data['lefttopbar_phone_number']) ? $data['lefttopbar_phone_number'] : ''; ?></a></li>
										<?php
											}else{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
										<?php
										}
										?>
										</ul>
                                    </div>
									<?php 
										}
										else if(isset($data['lefttopbarsocial']) && $data['lefttopbarsocial'] == 'yes')
										{ 
									?>
									<div class="col social_icon_box">	 
                                    <ul class="top_heade_right lefttopsocial">
                                   	
										<?php
										if(isset($data['lefttopbar_social_icon_style']) && $data['lefttopbar_social_icon_style']=='square')
										{
											 $type="-square"; 
										}
										else
										{
											$type="";
										}
											if(get_option('udm_facebook_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo $type; ?>"></i></a></li>
										<?php
											}	
											if(get_option('udm_googleplus_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_linkedin_link')!="")
											{
										?>
											<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_instagram_link')!="")
											{
										?>
											<li><a href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
										<?php
											}
											if(get_option('udm_twitter_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_pinterest_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo $type; } ; ?>"></i></a></li>
										<?php
											}
										?>
										</ul>
                                        </div>
										<?php										
										}
										else if(isset($data['lefttopbarbutton']) && $data['lefttopbarbutton'] == 'yes')
										{
											$scheme = parse_url( isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '', PHP_URL_SCHEME);
											if( !in_array( $scheme, array( 'http', 'https'))){
												$url="http://".isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '';
											}
											else
											{
												$url=isset($data['lefttopbar_button_link']) ? $data['lefttopbar_button_link'] : '';
											}
										?>
                                    <div class="col-6 col-sm-6 col-md-5 col-lg-5 col-xl-7">
                                    <ul class="top_header_get_bt top_header_get_bt_show lefttopbutton">
											<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo $url; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['lefttopbar_button_text']) && $data['lefttopbar_button_text']!=""){ echo $data['lefttopbar_button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
											</ul>
                                    </div>
									<?php 
										}
									
									if(isset($data['top_bar_style']) && $data['top_bar_style']=="1_3"){
								?>
                               <?php 
										if(isset($data['middletopbartext']) && $data['middletopbartext'] == 'yes')
										{
									?>
                                       <div class="col">
										<ul class="top_header_get_bt top_header_get_bt_show middletoptext">
										<li><p><?php echo isset($data['middletopbar_text']) ? $data['middletopbar_text'] : ''; ?></p></li>
										</ul>
                                    </div>
									<?php 
										}
										else if(isset($data['middletopbarphone']) && $data['middletopbarphone'] == 'yes')
										{
									?> 
                                    <div class="col-6 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <ul class="top_heade_left top_header_left_show middletopphone">
                                     <?php 
											if(isset($data['middletopbar_phone_left_text']) && $data['middletopbar_phone_left_text']!="")
											{
										?>
										<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['middletopbar_phone_left_text']) ? $data['middletopbar_phone_left_text'] : ''; ?></a></li>
										<?php 
											}
											if(isset($data['middletopbar_phone_overright']) && $data['middletopbar_phone_overright']=="yes")
											{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo isset($data['middletopbar_phone_number']) ? $data['middletopbar_phone_number'] : ''; ?>"><?php echo isset($data['middletopbar_phone_number']) ? $data['middletopbar_phone_number'] : ''; ?></a></li>
										<?php
											}else{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
										<?php
										}
										?>
									</ul>
                                    </div>
									<?php 
										}
										else if(isset($data['middletopbarsocial']) && $data['middletopbarsocial'] == 'yes')
										{ 
									?> 
                                    <div class="col">
                                    <ul class="top_heade_right middletopsocial">
                                   	
										<?php
										if(isset($data['middletopbar_social_icon_style']) && $data['middletopbar_social_icon_style']=='square')
										{
											 $type="-square"; 
										}
										else
										{
											$type="";
										}
											if(get_option('udm_facebook_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo $type; ?>"></i></a></li>
										<?php
											}	
											if(get_option('udm_googleplus_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_linkedin_link')!="")
											{
										?>
											<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_instagram_link')!="")
											{
										?>
											<li><a href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
										<?php
											}
											if(get_option('udm_twitter_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_pinterest_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo $type; } ; ?>"></i></a></li>
										<?php
											}
											?>
											</ul>
                                    </div>
											<?php
										}
										else if(isset($data['middletopbarbutton']) && $data['middletopbarbutton'] == 'yes')
										{
											$scheme = parse_url( isset($data['middletopbar_button_link']) ? $data['middletopbar_button_link'] : '', PHP_URL_SCHEME);
											if( !in_array( $scheme, array( 'http', 'https'))){
												$url="http://".isset($data['middletopbar_button_link']) ? $data['middletopbar_button_link'] : '';
											}
											else
											{
												$url=isset($data['middletopbar_button_link']) ? $data['middletopbar_button_link'] : '';
											}
										?>
                                    <div class="col">
										<ul class="top_header_get_bt top_header_get_bt_show middletopbutton">
											<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo $url; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['middletopbar_button_text']) && $data['middletopbar_button_text']!=""){ echo $data['middletopbar_button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
											</ul>
                                    </div>
									<?php 
										}
									} ?>
                                
                                    <?php 
										if(isset($data['righttopbartext']) && $data['righttopbartext'] == 'yes')
										{
									?>
                                    <div class="col">
									<ul class="top_header_get_bt top_header_get_bt_show righttoptext">
										<li><p><?php echo isset($data['righttopbar_text']) ? $data['righttopbar_text'] : ''; ?></p></li>
									</ul>
                                    </div>
									<?php 
										}
										else if(isset($data['righttopbarphone']) && $data['righttopbarphone'] == 'yes')
										{
									?> 
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-3">
                                    <ul class="top_heade_left top_header_left_show righttopphone">
                                     <?php 
											if(isset($data['righttopbar_phone_left_text']) && $data['righttopbar_phone_left_text']!="")
											{
										?>
										<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo $data['righttopbar_phone_left_text']; ?></a></li>
										<?php 
											}
											if(isset($data['righttopbar_phone_overright']) && $data['righttopbar_phone_overright']=="yes")
											{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo isset($data['righttopbar_phone_number']) ? $data['righttopbar_phone_number'] : ''; ?>"><?php echo isset($data['righttopbar_phone_number']) ? $data['righttopbar_phone_number'] : ''; ?></a></li>
										<?php
											}else{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
										<?php
										}
										?>
										</ul>
                                    </div>
									<?php 
										}
										else if(isset($data['righttopbarsocial']) && $data['righttopbarsocial'] == 'yes')
										{ 
									?>
                                    <div class="col">
                                    <ul class="top_heade_right righttopsocial">
										<?php
										if(isset($data['righttopbar_social_icon_style']) && $data['righttopbar_social_icon_style']=='square')
										{
											 $type="-square"; 
										}
										else
										{
											$type="";
										}
											if(get_option('udm_facebook_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo $type; ?>"></i></a></li>
										<?php
											}	
											if(get_option('udm_googleplus_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_linkedin_link')!="")
											{
										?>
											<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_instagram_link')!="")
											{
										?>
											<li><a href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
										<?php
											}
											if(get_option('udm_twitter_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo $type; ?>"></i></a></li>
										<?php
											}
											if(get_option('udm_pinterest_link')!=""){
										?>
											<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo $type; } ; ?>"></i></a></li>
										<?php
											}
											?>
											</ul>
                                        </div>
											<?php
										}
										else if(isset($data['righttopbarbutton']) && $data['righttopbarbutton'] == 'yes')
										{
											$scheme = parse_url( isset($data['righttopbar_button_link']) ? $data['righttopbar_button_link'] : '', PHP_URL_SCHEME);
											if( !in_array( $scheme, array( 'http', 'https'))){
												$url="http://".isset($data['righttopbar_button_link']) ? $data['righttopbar_button_link'] : '';
											}
											else
											{
												$url=isset($data['righttopbar_button_link']) ? $data['righttopbar_button_link'] : '';
											}
										?>
                                    <div class="col col-sm-2">
                                    <ul class="top_header_get_bt top_header_get_bt_show righttopbutton">
											<li><span class="right_side_bt"><a href="<?php if($url!=""){ echo $url; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['righttopbar_button_text']) && $data['righttopbar_button_text']!=""){ echo $data['righttopbar_button_text']; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
											</ul>
                                    </div>
									<?php 
										}
									?>
                              
                                </div>
                            </div>
                        </section>
						<?php
							//}
						?>
                        <!--stacked_header-->    
                        <section class="bottom_stacked_header">
                            <nav class="navbar navbar-expand-md navbar-light">
                                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                     <?php
										$menu=isset($data['navigation']) ? $data['navigation'] : '';
										if($menu!="")
										{
											wp_nav_menu(array('menu' => $menu, 'menu_class' => 'navbar-nav'));
										}
										else
										{
											wp_nav_menu(array('menu_class' => 'navbar-nav'));
										}
									?>
									  <ul class="navbar-nav">
                                       <li class="nav-item get_started_show">
                                         <?php 
												if(isset($data['bottombartext']) && $data['bottombartext'] == 'yes')
												{
											?>
												 <ul class="bottomtext"><li><p><?php echo isset($data['bottombar_text']) ? $data['bottombar_text'] : ''; ?></p></li> </ul>
											<?php 
												}
												else if(isset($data['bottombarphone']) &&  $data['bottombarphone'] == 'yes')
												{
											?>	<ul class="bottomphone">
											<?php 
											if(isset($data['bottombar_phone_left_text']) && $data['bottombar_phone_left_text']!="")
											{
										?>
											<li><a href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo isset($data['bottombar_phone_left_text']) ?  $data['bottombar_phone_left_text'] : ''; ?></a></li>
										<?php
											}												
											if(isset($data['bottomtopbar_phone_overright']) && $data['bottomtopbar_phone_overright']=="yes")
											{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo isset($data['bottomtopbar_phone_number']) ? $data['bottomtopbar_phone_number'] : ''; ?>"><?php echo isset($data['bottomtopbar_phone_number']) ? $data['bottomtopbar_phone_number'] : ''; ?></a></li>
										<?php
											}else{
										?>
										<li><a class="contact_stacked" href="tel:<?php echo get_option('udm_phone_number'); ?>"><?php echo get_option('udm_phone_number'); ?></a></li>
										<?php
										}
										?>
										</ul>
											<?php 
												}
												else if(isset($data['bottombarsocial']) && $data['bottombarsocial'] == 'yes')
												{ 
											?> <ul class="bottomsocial">
												<?php
												if(isset($data['bottombar_social_icon_style']) && $data['bottombar_social_icon_style']=='square')
												{
													 $type="-square"; 
												}
												else
												{
													$type="";
												}
													if(get_option('udm_facebook_link')!=""){
												?>
													<li><a href="<?php echo get_option('udm_facebook_link'); ?>"><i class="fa fa-facebook<?php echo $type; ?>"></i></a></li>
												<?php
													}	
													if(get_option('udm_googleplus_link')!=""){
												?>
													<li><a href="<?php echo get_option('udm_googleplus_link'); ?>"><i class="fa fa-google-plus<?php echo $type; ?>"></i></a></li>
												<?php
													}
													if(get_option('udm_linkedin_link')!="")
													{
												?>
													<li><a href="<?php echo get_option('udm_linkedin_link'); ?>"><i class="fa fa-linkedin<?php echo $type; ?>"></i></a></li>
												<?php
													}
													if(get_option('udm_instagram_link')!="")
													{
												?>
													<li><a href="<?php echo get_option('udm_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
												<?php
													}
													if(get_option('udm_twitter_link')!=""){
												?>
													<li><a href="<?php echo get_option('udm_twitter_link'); ?>"><i class="fa fa-twitter<?php echo $type; ?>"></i></a></li>
												<?php
													}
													if(get_option('udm_pinterest_link')!=""){
												?>
													<li><a href="<?php echo get_option('udm_pinterest_link'); ?>"><i class="fa fa-pinterest<?php if($type==""){ echo "-p"; }else{ echo $type; } ; ?>"></i></a></li>
												<?php
													}
												?>
												 </ul>
												<?php
												
												}
												else if(isset($data['bottombarbutton']) && $data['bottombarbutton'] == 'yes')
												{
												?>
													<ul class="bottomphone">
														<li><span class="right_side_bt"><a href="<?php if(isset($data['bottom_button_link']) && $data['bottom_button_link']!=""){ echo isset($data['bottombar_button_link']) ? $data['bottombar_button_link'] : ''; }else{ echo "#"; } ?>"><button type="button" class="btn"><h6><?php if(isset($data['bottombar_button_text']) && $data['bottombar_button_text']!=""){ echo isset($data['bottombar_button_text']) ? $data['bottombar_button_text'] : ''; }else{ ?>Get Started<?php } ?></h6><i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></span></li>
													</ul>
											<?php  
												}
											?>

                                        </li>
                                    </ul>

                                  </div>  
                            </nav>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->
		</header>