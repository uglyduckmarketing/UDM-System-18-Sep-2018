<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
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

<ul id="editcards" class="blog_type_style collapse show">
	<li>
		<h3>Show Date</h3>
		<span class="switch">
			<input type="checkbox" name="show_date" class="switch" id="show_date" value="yes" <?php checked('yes',$data['show_date']); ?>>
			<label for="show_date">Disable/Enable</label>
		</span>
	</li>
	<li class="colorchange"><h3>Overlay Color: </h3>
		<select name="overlay_color" id="overlay_color">
			<option value="primary" <?php selected('primary',$data['overlay_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['overlay_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['overlay_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['overlay_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['overlay_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['overlay_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Overlay Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="overlay_custom_color" value="<?php echo $data['overlay_custom_color']; ?>" />
			</li>
		</ul>		
	</li>
	
	<li class="colorchange"><h3>Post Heading Color: </h3>
		<select name="post_heading_color" id="post_heading_color">
			<option value="primary" <?php selected('primary',$data['post_heading_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['post_heading_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['post_heading_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['post_heading_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['post_heading_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['post_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Post Heading Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="post_heading_custom_color" value="<?php echo $data['post_heading_custom_color']; ?>" />
			</li>
		</ul>		
	</li>
	<li><h3>Read More Color: </h3>
		<select name="readmore_color" id="readmore_color">
			<option value="primary" <?php selected('primary',$data['readmore_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['readmore_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['readmore_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['readmore_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['readmore_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['readmore_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Read More Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="readmore_custom_color" value="<?php echo $data['readmore_custom_color']; ?>" />
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