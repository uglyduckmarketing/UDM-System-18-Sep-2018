<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
include '../../../../../../wp-load.php'; 
$layout = '';
if(isset($_POST['layout']))
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('service_layout_'.$layout));

?>

<form method="post" action="" enctype="multipart/form-data">
	
	<ul class="layout_top_data">
		<li><h4>Enter Layout Name: </h4><input type="text" name="service_layout_name" value="" required></li>
	</ul>
	
	<div id="selected_layout">
		
		<h2 class="header_layout_heading">
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#descsettings">Services Description</a>
		</h2>

		<ul id="descsettings" class="hero_type_style collapse show basic_service">
			<li class="colorchange"><h3>Description Eyebrow Color: </h3>
				<select name="desc_eyebrow_color" id="desc_eyebrow_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Description Eyebrow Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="desc_eyebrow_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Description Heading Color: </h3>
				<select name="desc_heading_color" id="desc_heading_color">
					
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark" selected="">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Description Heading Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="desc_heading_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Services Description Color: </h3>
				<select name="services_description_color" id="services_description_color">
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="global_light" selected="">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Services Description Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="services_description_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Background Color: </h3>
				<select name="desc_background_color" id="desc_background_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="desc_background_custom_color" value="" />
					</li>
				</ul>
			</li>			
		</ul>
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#benefitssettings">Benefits Section</a>
	</h2>

	<ul id="benefitssettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Benefit Title Color: </h3>
			<select name="benefit_title_color" id="benefit_title_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>	
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Benefit Title Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="benefit_title_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Benefit Text Color: </h3>
			<select name="benefit_text_color" id="benefit_text_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Benefit Text Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="benefit_text_custom_color" value="" />
				</li>
			</ul>
		</li>
	</ul>
	
	<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#breakdownsettings">Service Breakdown Section</a>
	</h2>

	<ul id="breakdownsettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Description Eyebrow Color: </h3>
			<select name="breakdown_eyebrow_color" id="breakdown_eyebrow_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>	
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Description Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_eyebrow_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Description Heading Color: </h3>
			<select name="breakdown_heading_color" id="breakdown_heading_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_heading_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Description Text Color: </h3>
			<select name="breakdown_text_color" id="breakdown_text_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Description Text Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_text_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Breakdown background color: </h3>
			<select name="breakdown_back_color" id="breakdown_back_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Breakdown background Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_back_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Overlay Color: </h3>
			<select name="breakdown_overlay_color" id="breakdown_overlay_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Overlay Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="breakdown_overlay_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange" id="overlayrange"><h3>Overlay Opacity: </h3>
			<div id="opacityslider"></div>
			<input type="hidden" name="breakdown_overlay_opacity" value="85%" class="percent" readonly />
			<div class="show_per">85%</div>
		</li>
	</ul>
	
		<h2 class="header_layout_heading">
		<a href="javascript:void(0);" data-toggle="collapse" data-target="#videosettings">Video Section</a>
	</h2>

	<ul id="videosettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>Description Eyebrow Color: </h3>
			<select name="video_eyebrow_color" id="video_eyebrow_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>	
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Description Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_eyebrow_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Description Heading Color: </h3>
			<select name="video_heading_color" id="video_heading_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_heading_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Service Description Color: </h3>
			<select name="video_serv_desc_color" id="video_serv_desc_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light" selected="">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Service Description Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="video_serv_desc_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Choose background color: </h3>
				<select name="video_background_color" id="video_background_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="video_background_custom_color" value="" />
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
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>	
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Gallery Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="gallery_eyebrow_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Gallery Heading Color: </h3>
			<select name="gallery_heading_color" id="gallery_heading_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>Description Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="gallery_heading_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Choose background color: </h3>
				<select name="gallery_background_color" id="gallery_background_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="gallery_background_custom_color" value="" />
					</li>
				</ul>
			</li>
		</ul>
		
		<h2 class="header_layout_heading">
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#servicectasettings">Services CTA</a>
		</h2>

	<ul id="servicectasettings" class="hero_type_style collapse show basic_hero">
		<li class="colorchange"><h3>CTA Eyebrow: </h3>
			<select name="cta_eyebrow_color" id="cta_eyebrow_color">
				<option value="primary">Primary</option>
				<option value="secondary" selected="">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark">Global Dark</option>
				<option value="custom">Custom</option>	
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>CTA Eyebrow Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="cta_eyebrow_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>CTA Heading Color: </h3>
			<select name="cta_heading_color" id="cta_heading_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>CTA Heading Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="cta_heading_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>CTA Description Color: </h3>
			<select name="cta_description_color" id="cta_description_color">
				<option value="primary">Primary</option>
				<option value="secondary">Secondary</option>
				<option value="global_light">Global Light</option>
				<option value="global_dark" selected="">Global Dark</option>
				<option value="custom">Custom</option>
			</select>
			<ul class="customcolor" style="display:none;">
				<li>
					<h3>CTA Description Custom Color: </h3>
					<input class="udm_color_picker" type="text" name="cta_description_custom_color" value="" />
				</li>
			</ul>
		</li>
		<li class="colorchange"><h3>Choose background color: </h3>
				<select name="cta_background_color" id="cta_background_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="cta_background_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li>
				<h3>Choose Button/Form</h3>
				<select id="cta_choose_button_form" name="cta_choose_button_form">
					<option value="button">Button</option>
					<option value="form">Form</option>
				</select>
			</li>
			<li class="show_button_f">
				<div class="own_fields own_input_field_text"><h3>Button Text</h3><div class="own_label"><input type="text" class="" name="cta_button_text" value=""></div></div>
				<div class="own_fields own_input_field_text"><h3>Button Link</h3><div class="own_label"><input type="text" class="" name="cta_button_link" value=""></div></div>
				<div class="own_fields own_input_field_text">
					<h3>Button Color</h3>
					<div class="own_label colorchange">
						<select name="cta_button_color" id="cta_button_text">
							<option value="primary">Primary</option>
							<option value="secondary" >Secondary</option>
							<option value="global_light" >Global Light</option>
							<option value="global_dark" >Global Dark</option>
							<option value="custom" >Custom</option>
						</select>
						<ul class="customcolor" style="display:none;">
							<li><h3>Button Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="cta_button_custom_color" value="" /></li>
						</ul>
					</div>
				</div>
				<div class="own_fields own_input_field_text">
					<h3>Button Text Color</h3>
					<div class="own_label colorchange">
						<select name="cta_button_text_color" id="cta_button_text_color">
							<option value="primary" >Primary</option>
							<option value="secondary" >Secondary</option>
							<option value="global_light" >Global Light</option>
							<option value="global_dark">Global Dark</option>
							<option value="custom" >Custom</option>
						</select>
						<ul class="customcolor" style="display:none;">
							<li><h3>Button Text Custom Color: </h3>
							<input class="udm_color_picker" type="text" name="cta_button_text_custom_color" value="" /></li>
						</ul> 
					</div>
				</div>
			</li>
			<li class="showform" style="display:none;">
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
							<option value="<?php echo $list->id; ?>"><?php echo $list->title; ?></option>
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
				<h3>Show Related: </h3>
				<span class="switch">
					<input type="checkbox" name="show_related" class="switch" id="show_related" value="yes" checked>
					<label for="show_related">Hide/Show</label>
				</span>
			</li>
			<li class="colorchange"><h3>Related Eyebrow: </h3>
				<select name="related_eyebrow_color" id="related_eyebrow_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>	
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Related Eyebrow Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_eyebrow_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Related Heading: </h3>
				<select name="related_heading_color" id="related_heading_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>	
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Related Heading Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_heading_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Related Description: </h3>
				<select name="related_description_color" id="related_description_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>	
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Related Description Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_description_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Choose background color: </h3>
				<select name="related_background_color" id="related_background_color">
					<option value="primary">Primary</option>
					<option value="secondary" selected="">Secondary</option>
					<option value="global_light">Global Light</option>
					<option value="global_dark">Global Dark</option>
					<option value="custom">Custom</option>	
				</select>
				<ul class="customcolor" style="display:none;">
					<li>
						<h3>Related Background Custom Color: </h3>
						<input class="udm_color_picker" type="text" name="related_background_custom_color" value="" />
					</li>
				</ul>
			</li>
			<li class="colorchange"><h3>Number of Post To Show: </h3>
				<input type="number" id="related_show_post" name="related_show_post" value="3">
			</li>
		</ul>
	</div>
	<div class="uploaded_button"><p class="submit"><input type="submit" name="service_createlayout_submit" class="button button-primary" value="Save Layout"></p> </div>
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
      value: 85,
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