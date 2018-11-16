<?php
	define('WP_USE_THEMES', true);
	
	/** Loads the WordPress Environment and Template */
	//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php'); 
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

<ul id="editlayoutsettings" class="header_type_style collapse show basic_header">

	<li><h3>Navigation: </h3><select name="navigation" id="navigation">
				<?php 
					$menus=wp_get_nav_menus();
					foreach( $menus as $item ) 
					{
				?>
					<option value="<?php echo $item->slug;  ?>" <?php selected($item->slug, $data['navigation'] ); ?>> <?php echo $item->name;  ?></option>
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
				<input class="udm_color_picker" type="text" name="button_custom_color" value="<?php echo $data['button_custom_color']; ?>" />
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
				<h3>Button Text Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="button_text_custom_color" value="<?php echo $data['button_text_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="background_color" id="background_color">
			
			<option value="primary" <?php selected('primary',$data['background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="background_custom_color" value="<?php echo $data['background_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Link Color: </h3>
		<select name="link_color" id="link_color">
			
			<option value="primary" <?php selected('primary',$data['link_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['link_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['link_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['link_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['link_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['link_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Link Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="link_custom_color" value="<?php echo $data['link_custom_color']; ?>" />
			</li>
		</ul>
	</li>
	
	<li><h3>Top Bar: </h3>
		<span class="switch">
			<input type="checkbox" name="top_bar" class="switch" id="top_bar" value="yes" <?php checked('yes',$data['top_bar']); ?> >
			<label for="top_bar">Hide/Show</label>
		</span>
		<ul id="topbardata" <?php if($data['top_bar']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
			<li class="colorchange"><h3>Background Color: </h3>
				<select name="topbar_background_color" id="topbar_background_color">
					
					<option value="primary" <?php selected('primary',$data['topbar_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['topbar_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['topbar_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['topbar_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['topbar_background_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if($data['topbar_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="topbar_background_custom_color" value="<?php echo $data['topbar_background_custom_color']; ?>" />
					</li>
				</ul>
			</li>
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
						<input class="udm_color_picker" type="text" name="topbar_link_custom_color" value="<?php echo $data['topbar_link_custom_color']; ?>" />
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
				<ul class="customcolor"  <?php if(isset($data['topbar_text_color']) && $data['topbar_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Text Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="topbar_text_custom_color" value="<?php echo isset($data['topbar_text_custom_color']) ? $data['topbar_text_custom_color'] : ''; ?>" />
					</li>
				</ul>
			</li>
			
			<li>
				<ul id="topbar_layouts">
					<?php
						
						include get_template_directory() . "/udm-plugin/admin/headers/templates/basic_topbar_layout.php";
					?>
				</ul>
			</li>
		</ul>
	</li>
	<li>
				<h3>Header Button: </h3>
				<span class="switch">
					<input  type="checkbox" name="header_button" class="switch" id="header_button" value="yes" <?php checked('yes',$data['header_button']); ?>>
					<label for="header_button">Hide/Show</label>
				</span>
				<ul id="show_button_text" <?php if($data['header_button']=="yes"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
					<h3>Header Button Text: </h3>
						<input class="" type="text" name="header_button_text" value="<?php echo $data['header_button_text']; ?>" />
					</li>
					<li>
					<h3>Header Button Link: </h3>
						<input class="" type="text" name="header_button_link" value="<?php echo $data['header_button_link']; ?>" />
					</li>
				</ul>
			</li>
	<li id="bottombutton_data" <?php if($data['top_bar']!="yes"){}else{  ?> style="display:none;" <?php } ?>><h3>Bottom Button Hide: </h3>
		<span class="switch">
			<input type="checkbox" name="bottom_button_hide" class="switch" id="bottom_button_hide" value="yes" <?php checked('yes',$data['bottom_button_hide']); ?> >
			<label for="bottom_button_hide">Hide/Show</label> 
		</span>
		<ul>
			<li><h5>Bottom Button Text </h5><input type="text" name="bottombar_button_text" value="<?php echo $data['bottombar_button_text']; ?>" ></li>	 
			<li><h5>Bottom Button Link </h5><input type="text" name="bottombar_button_link" value="<?php echo $data['bottombar_button_link']; ?>" ></li>
		</ul>
	</li>
</ul>

<script>
	jQuery(document).ready(function($) {

		$('.udm_color_picker').wpColorPicker();  //Add color picker 
	
	
		$('#editright_side_widget').change(function(){
			if($(this).val() == "1")
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').show();
			}
			else if($(this).val() == "2")
			{
				$('#editcallactionwidget').show();
				$('#editphonewidget').hide();
			}
			else
			{
				$('#editcallactionwidget').hide();
				$('#editphonewidget').hide();
			}
		});
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