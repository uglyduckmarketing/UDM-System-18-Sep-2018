<?php
	$data=unserialize(get_option('mobile_header_layout_'.$mobilelayout));
?>

<header class="d-md-none mobileheader <?php if($data['webapp']=="yes"){ ?>webappshow<?php } ?>">
	<div class="basic">
		<div class="container">
			<div class="row">
				<?php
					if($data['hamber_position']=="left"){
				?>
				<div class="col">
					<button class="menu-button close-menu"><span>Menu</span></button>
				</div>
				<div class="col text-center">
					<?php
					if($data['logo_position']=="center")
					{
					?>
						<a class="" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('udm_company_logo'); ?>"/></a>
					<?php
						}
					?>
				</div>
				<div class="col text-right">
				<?php
					if($data['logo_position']!="center")
					{
				?>
					<a class="" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('udm_company_logo'); ?>"/></a>
				<?php
					}
				?>
				</div>
				<?php 
					}
					else
					{
				?>
				<div class="col">
					<?php
						if($data['logo_position']!="center")
						{
					?>
						<a class="" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('udm_company_logo'); ?>"/></a>
					<?php
						}
					?>
				</div>
				<div class="col text-center">
					<?php
					if($data['logo_position']=="center")
					{
					?>
						<a class="" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_option('udm_company_logo'); ?>"/></a>
					<?php
					}
					?>
				</div>
				<div class="col text-right">
					<button class="menu-button close-menu"><span>Menu</span></button>
				</div>
				<?php
					}
				?>
				
			</div>
		</div>
	</div>
	<div class="webapp" <?php if($data['webapp']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
		<div class="header_top">
			<div class="left">
			<?php if($data['profile_image']!=""){ ?>
				<div class="logo <?php if($data['profile_image_type']=="circle"){ echo "logo_circle"; }else{ echo "logo_square"; }  ?>">
					<img src="<?php echo $data['profile_image']; ?>">
				</div>
			<?php } ?>
				<div class="companyinfo">
					<h3><?php echo $data['company_name']; ?></h3>
					<h4><?php echo $data['text_under_company_name']; ?></h4>
					<?php 
						if($data['star_rating']=="yes")
						{
					?>
						<h5><?php echo $data['review_score']; ?>: <div id="rateyo"></div>(<?php echo $data['number_of_reviews']; ?>)</h5>
						<script>
							$(document).ready(function(){
									$("#rateyo").rateYo({
										rating: <?php echo $data['review_score']; ?>,
										readOnly: true,
										ratedFill :	'<?php if($data['review_star_color']=="custom"){ echo $data['review_star_custom_color'];  }else if($data['review_star_color']!=""){ if($data['review_star_color']=='primary' ||  $data['review_star_color']=='secondary'){ $color="_color";  }else{ $color=""; } echo get_option('udm_'.$color);  }else{ echo "#fff"; } ?>'
										});
								});

						</script>
					<?php
						}
					?>
				</div>
				<div class="right">
					<button class="menu-button close-menu"><span>Menu</span></button>
				</div>
			</div>
		</div>
		<div class="header_bottom <?php if($data['reviews_button']!="yes"){ echo "two_button"; } ?>">
			<div class="buttons">
				<div class="row">
				<?php
					if($data['call_button']=="yes")
					{
				?>
					<div class="col"><a href="tel: <?php echo get_option('udm_phone_number'); ?>" class="btn">Call Now</a></div>
				<?php 
					}
					if($data['reviews_button']=="yes")
					{
				?>
				<div class="col"><a href="#" class="btn">Reviews</a></div>
				<?php 
					}
					if($data['email_button']=="yes")
					{
				?>
				<div class="col"><a href="mailto: <?php echo get_option('udm_email_address'); ?>" class="btn">Email</a></div>
				<?php 
					}
				?>
				</div>
			</div>
		</div>
	
	</div>		
</header>
	
	<?php	
		if(get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true )!="")
			{
				$mobilenavlayout=get_post_meta( get_the_ID(), 'udm_specific_mobile_nav', true );
			}
			else if(get_option('udm_mobile_nav_default')!="")
			{
				$mobilenavlayout=get_option('udm_mobile_nav_default');
			}
			else
			{
				$mobilenavlayout="";
			}	
			if(strpos($mobilenavlayout, 'Basic_Overlay') !== false){
				$mobilenavilayout=$mobilenavlayout;
				include get_template_directory() . '/udm-plugin/mobile-headers/nav/basic_overlay/index.php';
			}
			else if(strpos($mobilenavlayout, 'Basic_Slidedown') !== false){
				$mobilenavilayout=$mobilenavlayout;
				include get_template_directory() . '/udm-plugin/mobile-headers/nav/basic_slide_down/index.php';
			}
			else
			{
				$mobilenavilayout=$mobilenavlayout;
				include get_template_directory() . '/udm-plugin/mobile-headers/nav/slide_in/index.php';
			}
		?>
<div class="clearfix"></div>