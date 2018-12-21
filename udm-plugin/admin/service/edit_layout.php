<?php
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
include '../../../../../../wp-load.php'; 
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('service_layout_'.$layout));
?>
<form method="post" action="" enctype="multipart/form-data">
	<?php 
		echo '<input type="hidden" name="service_layout_name" value="'.$data['service_layout_name'].'" readonly>';
	?>
	<div id="editselected_layout">
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#descsettings">Services Description</a>
	</h2>

<ul id="editdescsettings" class="hero_type_style collapse show basic_hero">
	<li class="colorchange"><h3>Description Eyebrow Color: </h3>
		<select name="desc_eyebrow_color" id="editdesc_eyebrow_color">
			<option value="primary" <?php selected('primary',$data['desc_eyebrow_color']); ?>>Primary</option>
			<option value="secondary"  <?php selected('secondary',$data['desc_eyebrow_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['desc_eyebrow_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['desc_eyebrow_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['desc_eyebrow_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['desc_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Description Eyebrow Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="desc_eyebrow_custom_color" value="<?php echo esc_attr($data['desc_eyebrow_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	<li class="colorchange"><h3>Description Heading Color: </h3>
				<select name="desc_heading_color" id="editdesc_heading_color">
					<option value="primary" <?php selected('primary',$data['desc_heading_color']); ?>>Primary</option>
					<option value="secondary"  <?php selected('secondary',$data['desc_heading_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['desc_heading_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['desc_heading_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['desc_heading_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor"  <?php if($data['desc_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Description Heading Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="desc_heading_custom_color" value="<?php echo esc_attr($data['desc_heading_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Services Description Color: </h3>
				<select name="services_description_color" id="editservices_description_color">
					<option value="primary" <?php selected('primary',$data['services_description_color']); ?>>Primary</option>
					<option value="secondary"  <?php selected('secondary',$data['services_description_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['services_description_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['services_description_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['services_description_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if($data['services_description_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Services Description Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="services_description_custom_color" value="<?php echo esc_attr($data['services_description_custom_color']); ?>" />
					</li>
				</ul>
			</li>
	<li class="colorchange"><h3>Background Color: </h3>
		<select name="desc_background_color" id="editdesc_background_color">
			<option value="primary" <?php selected('primary',$data['desc_background_color']); ?>>Primary</option>
			<option value="secondary" <?php selected('secondary',$data['desc_background_color']); ?>>Secondary</option>
			<option value="global_light" <?php selected('global_light',$data['desc_background_color']); ?>>Global Light</option>
			<option value="global_dark" <?php selected('global_dark',$data['desc_background_color']); ?>>Global Dark</option>
			<option value="custom" <?php selected('custom',$data['desc_background_color']); ?>>Custom</option>
		</select>
		<ul class="customcolor" <?php if($data['desc_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
			<li>
				<h3>Background Custom Color: </h3>
				<input class="udm_color_picker" type="text" name="desc_background_custom_color" value="<?php echo esc_attr($data['desc_background_custom_color']); ?>" />
			</li>
		</ul>
	</li>
	</ul>
	
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#editbenefitssettings">Benefits Section</a>
	</h2>

	<ul id="editbenefitssettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Benefit Title Color: </h3>
			<select name="benefit_title_color" id="editbenefit_title_color">
				<option value="primary" <?php selected('primary',$data['benefit_title_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['benefit_title_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['benefit_title_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['benefit_title_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['benefit_title_color']); ?>>Custom</option>	
			</select>
			<ul class="customcolor" <?php if($data['benefit_title_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Benefit Title Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="benefit_title_custom_color" value="<?php echo esc_attr($data['benefit_title_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Benefit Text Color: </h3>
			<select name="benefit_text_color" id="edit_benefit_text_color">
				<option value="primary" <?php selected('primary',$data['benefit_text_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['benefit_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['benefit_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['benefit_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['benefit_text_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor"  <?php if($data['benefit_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Benefit Text Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="benefit_text_custom_color" value="<?php echo esc_attr($data['benefit_text_custom_color']); ?>" />
				</li>
			</ul>
		</li>
	</ul>
		<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#editbreakdownsettings">Service Breakdown Section</a>
	</h2>

	<ul id="editbreakdownsettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Description Eyebrow Color: </h3>
			<select name="breakdown_eyebrow_color" id="edit_breakdown_eyebrow_color">
				<option value="primary" <?php selected('primary',$data['breakdown_eyebrow_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['breakdown_eyebrow_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['breakdown_eyebrow_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['breakdown_eyebrow_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['breakdown_eyebrow_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['breakdown_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Description Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_eyebrow_custom_color" value="<?php echo esc_attr($data['breakdown_eyebrow_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Description Heading Color: </h3>
			<select name="breakdown_heading_color" id="edit_breakdown_heading_color">
				<option value="primary" <?php selected('primary',$data['breakdown_heading_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['breakdown_heading_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['breakdown_heading_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['breakdown_heading_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['breakdown_heading_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['breakdown_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_heading_custom_color" value="<?php echo esc_attr($data['breakdown_heading_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Description Text Color: </h3>
			<select name="breakdown_text_color" id="edit_breakdown_text_color">
				<option value="primary" <?php selected('primary',$data['breakdown_text_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['breakdown_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['breakdown_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['breakdown_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['breakdown_text_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['breakdown_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_text_custom_color" value="<?php echo esc_attr($data['breakdown_text_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Breakdown background color: </h3>
			<select name="breakdown_back_color" id="breakdown_back_color">
				<option value="primary" <?php selected('primary',$data['breakdown_back_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['breakdown_back_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['breakdown_back_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['breakdown_back_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['breakdown_back_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor"  <?php if($data['breakdown_back_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Breakdown background Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_back_custom_color" value="<?php echo esc_attr($data['breakdown_back_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Overlay Color: </h3>
			<select name="breakdown_overlay_color" id="breakdown_overlay_color">
				<option value="primary" <?php selected('primary',$data['breakdown_text_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['breakdown_text_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['breakdown_text_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['breakdown_text_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['breakdown_text_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['breakdown_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Overlay Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_overlay_custom_color" value="<?php echo esc_attr($data['breakdown_overlay_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange" id="overlayrange"><h3>Overlay Opacity: </h3>
			<div id="opacityslider"></div>
			<input type="hidden" name="breakdown_overlay_opacity" value="<?php echo esc_attr($data['breakdown_overlay_opacity']); ?>" class="percent" readonly />
			<div class="show_per"><?php echo esc_attr($data['breakdown_overlay_opacity']); ?></div>
		</li>
	</ul>
	
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#videosettings">Video Section</a>
	</h2>

	<ul id="videosettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Description Eyebrow Color: </h3>
			<select name="video_eyebrow_color" id="edit_video_eyebrow_color">
				<option value="primary" <?php selected('primary',$data['video_eyebrow_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['video_eyebrow_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['video_eyebrow_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['video_eyebrow_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['video_eyebrow_color']); ?>>Custom</option>	
			</select>
			<ul class="customcolor" <?php if($data['video_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Description Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_eyebrow_custom_color" value="<?php echo esc_attr($data['video_eyebrow_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Description Heading Color: </h3>
			<select name="video_heading_color" id="edit_video_heading_color">
				<option value="primary" <?php selected('primary',$data['video_heading_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['video_heading_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['video_heading_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['video_heading_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['video_heading_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['video_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_heading_custom_color" value="<?php echo esc_attr($data['video_heading_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Service Description Color: </h3>
			<select name="video_serv_desc_color" id="edit_video_serv_desc_color">
				<option value="primary" <?php selected('primary',$data['video_serv_desc_color']); ?>>Primary</option>
				<option value="secondary"  <?php selected('secondary',$data['video_serv_desc_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['video_serv_desc_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['video_serv_desc_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['video_serv_desc_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['video_serv_desc_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Service Description Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_serv_desc_custom_color" value="<?php echo esc_attr($data['video_serv_desc_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Choose background color: </h3>
				<select name="video_background_color" id="video_background_color">
					<option value="primary" <?php selected('primary',$data['video_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['video_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['video_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['video_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['video_background_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if($data['video_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="video_background_custom_color" value="<?php echo esc_attr($data['video_background_custom_color']); ?>" />
					</li>
				</ul>
			</li>
		</ul>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#gallerysettings">Gallery</a>
	</h2>

	<ul id="gallerysettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Gallery Eyebrow: </h3>
			<select name="gallery_eyebrow_color" id="gallery_eyebrow_color">
				<option value="primary" <?php selected('primary',$data['gallery_eyebrow_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['gallery_eyebrow_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['gallery_eyebrow_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['gallery_eyebrow_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['gallery_eyebrow_color']); ?>>Custom</option>	
			</select>
			<ul class="customcolor" <?php if($data['gallery_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Gallery Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="gallery_eyebrow_custom_color" value="<?php echo esc_attr($data['gallery_eyebrow_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Gallery Heading Color: </h3>
			<select name="gallery_heading_color" id="gallery_heading_color">
				<option value="primary" <?php selected('primary',$data['gallery_heading_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['gallery_heading_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['gallery_heading_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['gallery_heading_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['gallery_heading_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['gallery_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="gallery_heading_custom_color" value="<?php echo esc_attr($data['gallery_heading_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Choose background color: </h3>
				<select name="gallery_background_color" id="gallery_background_color">
					<option value="primary" <?php selected('primary',$data['gallery_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['gallery_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['gallery_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['gallery_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['gallery_background_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if($data['gallery_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="gallery_background_custom_color" value="<?php echo esc_attr($data['gallery_background_custom_color']); ?>" />
					</li>
				</ul>
			</li>
		</ul>
		<h2 class="header_layout_heading">
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#servicectasettings">Services CTA</a>
		</h2>

	<ul id="servicectasettings" class="hero_type_style collapse show basic_hero">
		<li>
			<h3>Eyebrow Text: </h3>
			<input type="text" name="cta_eyebrow" value="<?php echo isset($data['cta_eyebrow']) ? $data['cta_eyebrow'] : ''; ?>">
		</li>
		<li>
			<h3>Heading Text: </h3>
			<input type="text" name="cta_heading" value="<?php echo isset($data['cta_heading']) ? $data['cta_heading'] : ''; ?>">
		</li>
		<?php $ctaheading = isset($data['cta_description']) ? $data['cta_description'] : ''; ?>
		<li>
			<h3>Description: </h3>
			<textarea rows="5" style="width: 74%;" name="cta_description"><?php echo $ctaheading; ?></textarea>
		</li>
		<li class="colorchange"><h3>CTA Eyebrow: </h3>
			<select name="cta_eyebrow_color" id="cta_eyebrow_color">
				<option value="primary" <?php selected('primary',$data['cta_eyebrow_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['cta_eyebrow_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['cta_eyebrow_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['cta_eyebrow_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['cta_eyebrow_color']); ?>>Custom</option>	
			</select>
			<ul class="customcolor" <?php if($data['cta_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>CTA Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="cta_eyebrow_custom_color" value="<?php echo esc_attr($data['cta_eyebrow_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>CTA Heading Color: </h3>
			<select name="cta_heading_color" id="cta_heading_color">
				<option value="primary" <?php selected('primary',$data['cta_heading_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['cta_heading_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['cta_heading_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['cta_heading_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['cta_heading_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor" <?php if($data['cta_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>CTA Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="cta_heading_custom_color" value="<?php echo esc_attr($data['cta_heading_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>CTA Description Color: </h3>
			<select name="cta_description_color" id="cta_description_color">
				<option value="primary" <?php selected('primary',$data['cta_description_color']); ?>>Primary</option>
				<option value="secondary" <?php selected('secondary',$data['cta_description_color']); ?>>Secondary</option>
				<option value="global_light" <?php selected('global_light',$data['cta_description_color']); ?>>Global Light</option>
				<option value="global_dark" <?php selected('global_dark',$data['cta_description_color']); ?>>Global Dark</option>
				<option value="custom" <?php selected('custom',$data['cta_description_color']); ?>>Custom</option>
			</select>
			<ul class="customcolor"  <?php if($data['cta_description_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
				<li>
					<h3>CTA Description Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="cta_description_custom_color" value="<?php echo esc_attr($data['cta_description_custom_color']); ?>" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Choose background color: </h3>
				<select name="cta_background_color" id="cta_background_color">
					<option value="primary" <?php selected('primary',$data['cta_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['cta_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['cta_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['cta_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['cta_background_color']); ?>>Custom</option>
				</select>
				<ul class="customcolor" <?php if($data['cta_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="cta_background_custom_color" value="<?php echo esc_attr($data['cta_background_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li>
				<h3>Choose Button/Form</h3>
				<select id="cta_choose_button_form" name="cta_choose_button_form">
					<option value="button" <?php selected('button',$data['cta_choose_button_form']); ?>>Button</option>
					<option value="form" <?php selected('form',$data['cta_choose_button_form']); ?>>Form</option>
				</select>
			</li>
			<?php $choose_btn_form = isset($data['cta_choose_button_form']) ? $data['cta_choose_button_form'] : ''; ?>
			<li class="show_button_f" <?php if($choose_btn_form == 'form'){ echo 'style="display:none;"'; } ?>>
				<div class="own_fields own_input_field_text"><h3>Button Text</h3><div class="own_label"><input type="text" class="" name="cta_button_text" value="<?php echo esc_attr($data['cta_button_text']); ?>"></div></div>
				<div class="own_fields own_input_field_text"><h3>Button Link</h3><div class="own_label"><input type="text" class="" name="cta_button_link" value="<?php echo esc_attr($data['cta_button_link']); ?>"></div></div>
				<div class="own_fields own_input_field_text">
					<h3>Button Color</h3>
					<div class="own_label colorchange">
						<select name="cta_button_color" id="cta_button_color">
							<option value="primary" <?php selected('primary',$data['cta_button_color']); ?>>Primary</option>
							<option value="secondary" <?php selected('secondary',$data['cta_button_color']); ?> >Secondary</option>
							<option value="global_light" <?php selected('global_light',$data['cta_button_color']); ?> >Global Light</option>
							<option value="global_dark" <?php selected('global_dark',$data['cta_button_color']); ?> >Global Dark</option>
							<option value="custom" <?php selected('custom',$data['cta_button_color']); ?> >Custom</option>
						</select>
						<ul class="customcolor" <?php if($data['cta_button_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
							<li>
								<h3>Button Custom Color: </h3>
								<input class="udm_color_picker" type="text" name="cta_button_custom_color" value="<?php echo esc_attr($data['cta_button_custom_color']); ?>" />
							</li>
						</ul>
					</div>
				</div>
				<div class="own_fields own_input_field_text">
					<h3>Button Text Color</h3>
					<div class="own_label colorchange">
						<select name="cta_button_text_color" id="cta_button_text_color">
							<option value="primary" <?php selected('primary',$data['cta_button_text_color']); ?>>Primary</option>
							<option value="secondary" <?php selected('secondary',$data['cta_button_text_color']); ?>>Secondary</option>
							<option value="global_light" <?php selected('global_light',$data['cta_button_text_color']); ?>>Global Light</option>
							<option value="global_dark" <?php selected('global_dark',$data['cta_button_text_color']); ?>>Global Dark</option>
							<option value="custom" <?php selected('custom',$data['cta_button_text_color']); ?>>Custom</option>
						</select>
						<ul class="customcolor" <?php if($data['cta_button_text_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
							<li>
								<h3>Button Text Custom Color: </h3>
								<input class="udm_color_picker" type="text" name="cta_button_text_custom_color" value="<?php echo esc_attr($data['cta_button_text_custom_color']); ?>" />
							</li>
						</ul>
					</div>
				</div>
			</li>
			<?php $choose_ninja_form = isset($data['cta_choose_ninja_form']) ? $data['cta_choose_ninja_form'] : ''; ?>
			<li class="showform"  <?php if($choose_btn_form == ''){ ?> style="display:none;" <?php }else if($choose_btn_form == 'button'){ ?> style="display:none;" <?php }  ?>>
				<h3>Ninja Form</h3>
				<?php global $wpdb; 
					$tblname = $wpdb->prefix.'nf3_forms';
					$ninjaform = $wpdb->get_results("select * from $tblname order by created_at DESC");
				?>
				<select id="" name="cta_choose_ninja_form">
					<option value="">Select</option>
					<?php
						foreach($ninjaform as $list){
							?>
							<option value="<?php echo esc_attr($list->id); ?>"  <?php selected($list->id,$choose_ninja_form); ?>><?php echo esc_attr($list->title); ?></option>
							<?php
						}
					?>
				</select>
			</li>
		</ul>
		<h2 class="header_layout_heading">
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#relatedsettings">Related Services</a>
		</h2>
		<ul id="relatedsettings" class="hero_type_style collapse show basic_hero">
			<li>
				<h3>Eybrow Text:</h3>
				<div class="own_fields own_input_field_text">
					<input type="text" id="" name="related_eybrow_text" value="<?php  echo isset($data['related_eybrow_text']) ? $data['related_eybrow_text'] : '';  ?>" />
				</div>
			</li>
			<li>
				<h3>Header Text:</h3>
				<div class="own_fields own_input_field_text">
					<input type="text" id="" name="related_header_text" value="<?php  echo isset($data['related_header_text']) ? $data['related_header_text'] : '';  ?>" />
				</div>
			</li>
			<li>
				<h3>Description:</h3>
				<div class="own_fields own_input_field_text">
					<textarea rows="5" style="width: 74%;" name="related_description"><?php  echo isset($data['related_description']) ? $data['related_description'] : '';  ?></textarea>
				</div>
			</li>
			<li>
			<?php  $show_related = isset($data['show_related']) ? $data['show_related'] : '';  ?>
				<h3>Show Related: </h3>
				<div class="own_fields own_input_field_text">
				<label>Show Related</label>
				<div class="own_label switch-field">
				<input type="radio" id="switch_left" name="show_related" value="yes" <?php if(isset($data['show_related'])){ if($show_related == 'yes'){ echo 'checked'; } }else{ echo 'checked'; } ?>  />
					<label for="switch_left">Yes</label>
				<input type="radio" id="switch_right" name="show_related" value="no" <?php if($show_related == 'no'){ echo 'checked'; } ?> />
					<label for="switch_right">No</label>
				</div>
				</div>
			</li>
			<li class="colorchange"><h3>Related Eyebrow: </h3>
				<select name="related_eyebrow_color" id="related_eyebrow_color">
					<option value="primary" <?php selected('primary',$data['related_eyebrow_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['related_eyebrow_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['related_eyebrow_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['related_eyebrow_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['related_eyebrow_color']); ?>>Custom</option>	
				</select>
				<ul class="customcolor" <?php if($data['related_eyebrow_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Related Eyebrow Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_eyebrow_custom_color" value="<?php echo esc_attr($data['related_eyebrow_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Related Heading: </h3>
				<select name="related_heading_color" id="related_heading_color">
					<option value="primary" <?php selected('primary',$data['related_heading_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['related_heading_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['related_heading_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['related_heading_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['related_heading_color']); ?>>Custom</option>	
				</select>
				<ul class="customcolor" <?php if($data['related_heading_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Related Heading Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_heading_custom_color" value="<?php echo esc_attr($data['related_heading_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Related Description: </h3>
				<select name="related_description_color" id="related_description_color">
					<option value="primary" <?php selected('primary',$data['related_description_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['related_description_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['related_description_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['related_description_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['related_description_color']); ?>>Custom</option>	
				</select>
				<ul class="customcolor" <?php if($data['related_description_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Related Description Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_description_custom_color" value="<?php echo esc_attr($data['related_description_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Choose background color: </h3>
				<select name="related_background_color" id="related_background_color">
					<option value="primary" <?php selected('primary',$data['related_background_color']); ?>>Primary</option>
					<option value="secondary" <?php selected('secondary',$data['related_background_color']); ?>>Secondary</option>
					<option value="global_light" <?php selected('global_light',$data['related_background_color']); ?>>Global Light</option>
					<option value="global_dark" <?php selected('global_dark',$data['related_background_color']); ?>>Global Dark</option>
					<option value="custom" <?php selected('custom',$data['related_background_color']); ?>>Custom</option>	
				</select>
				<ul class="customcolor" <?php if($data['related_background_color']=="custom"){}else{ ?> style="display:none;" <?php } ?>>
					<li>
						<h3>Related Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_background_custom_color" value="<?php echo esc_attr($data['related_background_custom_color']); ?>" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Number of Post To Show: </h3>
				<input type="number" id="related_show_post" name="related_show_post" value="<?php echo esc_attr($data['related_show_post']); ?>">
			</li>
		</ul>
</div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="service_editlayout_submit" class="button button-primary" value="Save Layout"><input type="submit" name="service_deletelayout_submit" class="button button-primary" value="Delete Layout"></p> </div>

</form>
<!-- Theme Options JS -->
<script>
	jQuery(document).ready(function($) {
		$('#cta_choose_button_form').on('change', function(){
			var val = $(this).val();
			if(val == 'button'){
				$('.showform select').val('');
				$('.show_button_f').show();
				$('.showform').hide();
			}else{
				$('.show_button_f input').val('');
				$('.show_button_f select').val('');
				$('.show_button_f').hide();
				$('.showform').show();
			}
		});
	  	 var projectBar = $('#opacityslider');
    var projectPercent = $('.percent');
    var projectRange = $('.ui-slider-range');
    projectBar.slider({
      range: "min",
      animate: true,
      value: '<?php echo rtrim($data['breakdown_overlay_opacity'],'%'); ?>',
      min: 0,
      max: 100,
      step: 1,
      slide: function(event, ui) {
        projectPercent.val(ui.value + "%");
        $('.show_per').html(ui.value + "%");
      },
      change: function(event, ui) {
        var projectRange = $(this).find('.ui-slider-range');
        var percent = ui.value;
        if (percent < 30) {
          projectPercent.css({
            'color': '#4C8CDE'
          });
          projectRange.css({
            'background': '#4C8CDE'
          });
        } else if (percent > 31 && percent < 70) {
          projectPercent.css({
            'color': '#4C8CDE'
          });
          projectRange.css({
            'background': '#4C8CDE'
          });
        } else if (percent > 70) {
          projectPercent.css({
            'color': '#4C8CDE'
          });
          projectRange.css({
            'background': '#4C8CDE'
          });
        }
      }
    });
	  	$('.udm_color_picker').wpColorPicker(); //Add color picker on fields  
		
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