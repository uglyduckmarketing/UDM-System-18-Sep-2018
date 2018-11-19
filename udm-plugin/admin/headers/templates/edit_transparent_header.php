<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('header_layout_'.$layout));
?>
<!-- Theme Options JS -->
<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="editlayoutsettings" class="header_type_style collapse show transparent_header">

	<li><h3>Navigation: </h3><select name="navigation" id="navigation">
			<?php $menus=wp_get_nav_menus();
					foreach( $menus as $item ) {
				?>
					<option value="<?php echo esc_attr($item->slug);  ?>" <?php selected($item->slug, $data['navigation'] ); ?>> <?php echo esc_attr($item->name);  ?></option>
				<?php
					}
				?>
		</select></li>
	<li><h3>Drop Down Style: </h3>
		<select name="dropdownstyle" id="editdropdownstyle">
			<option value="">Select Style</option>
			<?php  
				global $wpdb;
				$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'submenu_layout_%'");
				foreach($layouts as $layout){
			?>
				<option value="<?php echo str_replace("submenu_layout_","",$layout); ?>" <?php selected(str_replace("submenu_layout_","",$layout),$data['dropdownstyle']); ?>><?php echo str_replace("_"," ", str_replace("submenu_layout_","",$layout)); ?></option>
			<?php	
				}
			?>
		</select>
	</li>
	
	<li><h3>Opacity(in %): </h3><input type="number" name="opacity" value="<?php echo esc_attr($data['opacity']); ?>" /></li>
	
	<li class="colorchange"><h3>Opacity Color: </h3>
		<select name="opacity_color" id="opacity_color">
			
			<option value="primary" <?php selected('primary',$data['opacity_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['opacity_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['opacity_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['opacity_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['opacity_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['opacity_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Opacity Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="opacity_custom_color" value="<?php echo esc_attr($data['opacity_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Button Color: </h3>
		<select name="button_color" id="button_color">
			
			<option value="primary" <?php selected('primary',$data['button_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['button_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['button_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['button_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['button_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Button Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo esc_attr($data['button_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Button Text Color: </h3>
		<select name="button_text_color" id="button_text_color">
			
			<option value="primary" <?php selected('primary',$data['button_text_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['button_text_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['button_text_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['button_text_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['button_text_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Button Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo esc_attr($data['button_text_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Links Color: </h3>
		<select name="link_color" id="link_color">
			
			<option value="primary" <?php selected('primary',$data['link_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['link_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['link_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['link_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['link_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['link_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Links Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="<?php echo esc_attr($data['link_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	
	<li><h3>Top Bar: </h3>
		<span class="switch">
			<input type="checkbox" name="top_bar" class="switch" id="top_bar" value="yes" <?php checked('yes',$data['top_bar']); ?>> 
			<label for="top_bar">Hide/Show</label>
		</span>
		<ul id="topbardata" <?php if($data['top_bar']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li class="colorchange"><h3>Links Color: </h3>
				<select name="topbar_link_color" id="topbar_link_color">
					
					<option value="primary" <?php selected('primary',$data['topbar_link_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['topbar_link_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['topbar_link_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['topbar_link_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['topbar_link_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if($data['topbar_link_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Links Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="topbar_link_custom_color" value="<?php echo esc_attr($data['topbar_link_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Text Color: </h3>
				<select name="topbar_text_color" id="topbar_text_color">
					
					<option value="primary" <?php selected('primary',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',isset($data['topbar_text_color']) ? $data['topbar_text_color'] : ''); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if(isset($data['topbar_text_color']) && $data['topbar_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Text Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="topbar_text_custom_color" value="<?php echo esc_attr($data['topbar_text_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li>
				<ul id="topbar_layouts">
					<?php
						include get_template_directory() . "/udm-plugin/admin/headers/templates/transparent_topbar_layout.php";
					?>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<h3>Header Button: </h3>
		<span class="switch">
			<input checked type="checkbox" name="header_button" class="switch" id="header_button" value="yes" <?php checked('yes',$data['header_button']); ?>>
			<label for="header_button">Hide/Show</label>
		</span>
		<ul id="show_button_text">
			<li>
			<h3>Header Button Text: </h3>
				<input class="" type="text" name="header_button_text" value="<?php echo esc_attr($data['header_button_text']); ?>" />
			</li>
			<li>
				<h3>Header Button Link: </h3>
				<input class="" type="text" name="header_button_link" value="<?php echo esc_attr($data['header_button_link']); ?>" />
			</li>
		</ul>
	</li>
	<li id="bottombutton_data" <?php if($data['top_bar']!="yes"){}else{  ?> style="display:none;" <?php } ?>><h3>Bottom Button Hide: </h3>
		<ul>
			<li>
				<span class="switch">
					<input type="checkbox" name="bottom_button_hide" class="switch" id="bottom_button_hide" value="yes" <?php checked('yes',$data['bottom_button_hide']); ?> >
					<label for="bottom_button_hide">No/Yes</label> 
				</span>
			</li>
			<li><h5>Bottom Button Text </h5><input type="text" name="bottombar_button_text" value="<?php echo esc_attr($data['bottombar_button_text']); ?>" ></li>	 
			<li><h5>Bottom Button Link </h5><input type="text" name="bottombar_button_link" value="<?php echo esc_attr($data['bottombar_button_link']); ?>" ></li>
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
		
		$('#top_bar').change(function(){
			if($(this).prop('checked')==true)
			{
				$('#bottombutton_data').hide();
				$('#topbardata').show();
			}
			else
			{
				$('#bottombutton_data').show();

				$('#topbardata').hide();
			}
		});
		$('#header_button').change(function(){
			if($(this).prop('checked')==true)
			{
				$('#show_button_text').show();
			}
			else
			{
				$('#show_button_text').hide();
			}
		});
	  });																		
</script>