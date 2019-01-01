<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
	include '../../../../../../../wp-load.php'; 
	
?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#cards">Layout Settings</a>
</h2>
<div class="cus_grid_style">
	<ul id="cards" class="blog_type_style collapse show common_setting">
		<li><h4>Show Date</h4>
			<span class="switch">
				<input type="checkbox" name="show_date" class="switch" id="show_date" value="yes" checked="">
				<label for="show_date">Disable/Enable</label>
			</span>
		</li>
		<li class="colorchange custom_color_chng"><h4>Overlay Color: </h4>
			<select name="overlay_color" id="overlay_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom" selected="">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor">
				<li><h4>Post Heading Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="overlay_custom_color" value="rgb(37,37,37)" />
					<div class="clearfix"></div>
				</li>
			</ul>		
		</li>  
		<li class="colorchange custom_color_chng"><h4>Post Heading Color: </h4>
			<select name="post_heading_color" id="post_heading_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom" selected="">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor">
				<li><h4>Post Heading Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="post_heading_custom_color" value="#fff" />
					<div class="clearfix"></div>
				</li>				
			</ul>		
		</li> 		
		<li class="colorchange custom_color_chng"><h4>Read More Color: </h4>
			<select name="readmore_color" id="readmore_color">
				<option value="primary" selected="">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" style="display:none;">
				<li><h4>Read More Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="readmore_custom_color" value="" />
					<div class="clearfix"></div>
				</li>
			</ul> 
		</li>    
		<div class="clearfix"></div>
	</ul>
</div>	
<script>
	jQuery(document).ready(function($) {
			$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
		$('.colorchange select').change(function(){
			if($(this).val() == "custom")
			{
				$(this).parent().find('.customcolor').show();
			}
			else
			{
				$(this).parent().find('.customcolor').hide();
			}
		});	
	  });																		
</script>