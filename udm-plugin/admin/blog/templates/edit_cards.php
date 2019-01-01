<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('blog_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="blog_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#editcards">Layout Settings</a>
</h2>
<div class="cus_grid_style">
	<ul id="editcards" class="blog_type_style collapse show common_setting">
		<li><h4>Show Date</h4>
			<span class="switch">
				<input type="checkbox" name="show_date" class="switch" id="show_date" value="yes" <?php checked('yes',$data['show_date']); ?>>
				<label for="show_date">Disable/Enable</label>
			</span>
		</li>
		<li class="colorchange custom_color_chng"><h4>Overlay Color: </h4>
			<select name="overlay_color" id="overlay_color">
				<option value="primary" <?php selected('primary',$data['overlay_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['overlay_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['overlay_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['overlay_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['overlay_color']); ?>>Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" <?php if($data['overlay_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li><h4>Overlay Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo esc_attr($data['overlay_custom_color']); ?>" />
					<div class="clearfix"></div>
				</li>
			</ul>		
		</li>
		
		<li class="colorchange custom_color_chng"><h4>Post Heading Color: </h4>
			<select name="post_heading_color" id="post_heading_color">
				<option value="primary" <?php selected('primary',$data['post_heading_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['post_heading_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['post_heading_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['post_heading_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['post_heading_color']); ?>>Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" <?php if($data['post_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li><h4>Post Heading Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="post_heading_custom_color" value="<?php echo esc_attr($data['post_heading_custom_color']); ?>" />
					<div class="clearfix"></div>
				</li>
			</ul>		
		</li>
		<li class="colorchange custom_color_chng"><h4>Read More Color: </h4>
			<select name="readmore_color" id="readmore_color">
				<option value="primary" <?php selected('primary',$data['readmore_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['readmore_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['readmore_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['readmore_color']); ?>>Global Dark</option> 
				<option value="custom" <?php selected('custom',$data['readmore_color']); ?>>Custom</option>
			</select>
			<div class="clearfix"></div>
			<ul class="customcolor" <?php if($data['readmore_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li><h4>Read More Custom Color: </h4>
					<input class="udm_color_picker" type="text" name="readmore_custom_color" value="<?php echo esc_attr($data['readmore_custom_color']); ?>" />
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