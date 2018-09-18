<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
		include '../../../../../../../wp-load.php'; 
	
?>
<!-- Theme Options JS -->

<h2 class="header_layout_heading">
	<a href="javascript:void(0);" data-toggle="collapse" data-target="#layoutsettings">Layout Settings</a>
</h2>

<ul id="layoutsettings" class="header_type_style collapse show transparent_header">
	
	<li><h3>Navigation: </h3>
		<select name="navigation" id="navigation">
			<option value="">Select Menu</option>
			<?php $menus=wp_get_nav_menus();
					foreach( $menus as $item ) {
				?>
					<option value="<?php echo $item->slug;  ?>"> <?php echo $item->name;  ?></option>
				<?php
					}
				?>
		</select>
	</li>
	<li><h3>Drop Down Style: </h3>
		<select name="dropdownstyle" id="dropdownstyle">
			<option value="">Select Style</option>
			<?php  
				global $wpdb;
				$layouts=$wpdb->get_col( "SELECT option_name FROM ".$wpdb->prefix."options WHERE option_name LIKE 'submenu_layout_%'");
				foreach($layouts as $layout){
			?>
				<option value="<?php echo str_replace("submenu_layout_","",$layout); ?>"><?php echo str_replace("_"," ", str_replace("submenu_layout_","",$layout)); ?></option>
			<?php	
				}
			?>
		</select>
	</li>
	
	<li class="colorchange"><h3>Button Color: </h3>
		<select name="button_color" id="button_color">
			
			<option value="primary" selected>Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Button Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="button_custom_color" value="" />
			</li>
		</ul>
	</li>
	
	<li><h3>Opacity(in %): </h3><input type="number" name="opacity" value="" /></li>
	
	<li class="colorchange"><h3>Opacity Color: </h3>
		<select name="opacity_color" id="opacity_color">
			
			<option value="primary" selected>Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Button Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="opacity_custom_color" value="" />
			</li>
		</ul>
	</li>

	
	<li class="colorchange"><h3>Button Text Color: </h3>
		<select name="button_text_color" id="button_text_color">
			
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light">Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom" selected>Custom</option>
		</select>
		<ul class="customcolor">
			<li>
				<h3>Button Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="button_text_custom_color" value="$fff" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Links Color: </h3>
		<select name="link_color" id="link_color">
			
			<option value="primary">Primary</option>
			<option value="secondary">Secondary</option>
			<option value="global_light" selected>Global Light</option>
			<option value="global_dark">Global Dark</option>
			<option value="custom">Custom</option>
		</select>
		<ul class="customcolor" style="display:none;">
			<li>
				<h3>Links Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="" />
			</li>
		</ul>
	</li>
	<li><h3>Top Bar: </h3>
		<span class="switch">
			<input type="checkbox" name="top_bar" class="switch" id="top_bar" value="yes">
			<label for="top_bar">Hide/Show</label>
		</span>
		<ul id="topbardata" style="display:none;">
			
			<li class="colorchange"><h3>Links Color: </h3>
			
				<select name="topbar_link_color" id="topbar_link_color">
					
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="global_light" selected>Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Links Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="topbar_link_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Text Color: </h3>
				<select name="topbar_link_color" id="topbar_text_color">
					
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="global_light" selected>Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Text Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="topbar_text_custom_color" value="" />
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
	<li id="bottombutton_data" style="display:none;"><h3>Bottom Button Hide: </h3>
		<ul>
			<li>
				<span class="switch">
					<input type="checkbox" name="bottom_button_hide" class="switch" id="bottom_button_hide" value="yes" >
					<label for="bottom_button_hide">No/Yes</label>
				</span>
			</li>
			<li><h5>Bottom Button Text </h5><input type="text" name="bottombar_button_text" value="" ></li>	 
			<li><h5>Bottom Button Link </h5><input type="text" name="bottombar_button_link" value="" ></li>
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
	  });																		
</script>