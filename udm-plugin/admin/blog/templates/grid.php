<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
?>
<!-- Theme Options JS -->
<h2 class="blog_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#gridlay">Grid View Layout</a>
</h2>

<ul id="gridlay" class="blog_type_style collapse show">	
	
	<li>
		<h3>Show Date</h3>
		<span class="switch">
			<input type="checkbox" name="show_date" class="switch" id="show_date" value="yes" checked="">
			<label for="show_date">Disable/Enable </label>
		</span>
	</li>
	<li class="colorchange"><h3>Overlay Color: </h3>
		<select name="overlay_color" id="overlay_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected="">Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Overlay Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="rgb(37,37,37)" />
			</li>
		</ul>		
	</li>
	<li class="colorchange"><h3>Post Heading Color: </h3>
		<select name="post_heading_color" id="post_heading_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Post Heading Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="post_heading_custom_color" value="<?php echo esc_attr($data['post_heading_custom_color']); ?>" />
			</li>
		</ul>		
	</li>

	<li><h3>Post Text Color: </h3>
		<select name="post_text_color" id="post_text_color">
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark" selected="">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Post Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="post_text_custom_color" value="" />
			</li>
		</ul>
	</li>

	<li><h3>Post Date Color: </h3>
		<select name="post_date_color" id="post_date_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Post Date Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="post_date_custom_color" value="" />
			</li>
		</ul>
	</li>
	<li><h3>Read More Color: </h3>
		<select name="readmore_color" id="readmore_color">
			<option value="primary" selected="">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Read More Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="readmore_custom_color" value="" />
			</li>
		</ul>
	</li>
</ul>
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