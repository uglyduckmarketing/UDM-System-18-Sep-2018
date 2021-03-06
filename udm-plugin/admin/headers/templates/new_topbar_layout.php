<?php
/** Loads the WordPress Environment and Template */
include '../../../../../../../wp-load.php'; 
$layout = '';
if($_POST['layout'])
{
	$layout=$_POST['layout'];
}
if($_POST['layoutnew'])
{
	$layoutnew=$_POST['layoutnew'];
}
$topdata=unserialize(get_option('header_layout_'.$layout));

?>
   <li class="cus_bar_widget">
        <h3>Left Top Bar Widget</h3>
		<span class="switch cus_bar_switch" id="left_top_bar_show" style="display:none">
			<input type="checkbox" value="yes" <?php checked('yes', isset($topdata['left_top_bar_show']) ? $topdata['left_top_bar_show'] : ''); ?> id="left_top_bar_show_label" name="left_top_bar_show" >
			<label for="left_top_bar_show_label">Yes / No</label>
		</span>
		<div class="clearfix"></div>
        <div id="lefttopbar" class="headwidget">
			<div class="empty">
                <p>Click the "Add widget" button below to start creating your layout.</p>
            </div>
        </div>
        <div class="create_leftbar_widget_button">
            <div class="dropup custom_design_dropdown">
                <button type="button" class="button button-primary dropdown-toggle addwidget" data-toggle="dropdown">Add widget</button>
                <div class="dropdown-menu" id="newleftbarwidget">
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="1">Text Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="2">Phone Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="3">Social Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="4">Button Widget</a>
                    <div class="arrow-down"></div>
                </div>
            </div>
        </div>
    </li> 
	<?php 
		if($layoutnew=="1_3"){
	?>
	<li class="cus_bar_widget">
        <h3>Middle Top Bar Widget</h3>
		<span class="switch cus_bar_switch" id="middle_top_bar_show" style="display:none">
			<input type="checkbox" value="yes" <?php checked('yes', isset($topdata['middle_top_bar_show']) ? $topdata['middle_top_bar_show'] : ''); ?>  id="middle_top_bar_show_label" name="middle_top_bar_show" >
			<label for="middle_top_bar_show_label">Yes / No</label>
		</span>
		<div class="clearfix"></div>
        <div id="middletopbar" class="headwidget">
          <div class="empty">
                <p>Click the "Add widget" button below to start creating your layout.</p>
            </div>
        </div>
        <div class="create_middlebar_widget_button">
            <div class="dropup custom_design_dropdown">
                <button type="button" class="button button-primary dropdown-toggle addwidget" data-toggle="dropdown">Add widget</button>
                <div class="dropdown-menu" id="newmiddlebarwidget">
                   <a class="dropdown-item" href="javascript:void(0);" data-widget="1">Text Widget</a>
                  <a class="dropdown-item" href="javascript:void(0);" data-widget="2">Phone Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="3">Social Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="4">Button Widget</a>
                    <div class="arrow-down"></div>
                </div>
            </div>
        </div>
    </li> 
	<?php 
		}
	?>
	<li class="cus_bar_widget">
        <h3>Right Top Bar Widget</h3>
		<span class="switch cus_bar_switch" id="right_top_bar_show" style="display:none">
			<input type="checkbox" value="yes" <?php checked('yes', isset($topdata['right_top_bar_show']) ? $topdata['right_top_bar_show'] : ''); ?>  id="right_top_bar_show_label" name="right_top_bar_show" >
			<label for="right_top_bar_show_label">Yes / No</label>
		</span>
		<div class="clearfix"></div>
        <div id="righttopbar" class="headwidget">
            <div class="empty">
                <p>Click the "Add widget" button below to start creating your layout.</p>
            </div>
        </div>
        <div class="create_rightbar_widget_button">
            <div class="dropup custom_design_dropdown">
                <button type="button" class="button button-primary dropdown-toggle" data-toggle="dropdown">Add widget</button>
                <div class="dropdown-menu" id="newrightbarwidget">
					<a class="dropdown-item" href="javascript:void(0);" data-widget="1">Text Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="2">Phone Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="3">Social Widget</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-widget="4">Button Widget</a>
                    <div class="arrow-down"></div>
                </div>
            </div>
        </div>
    </li>
	<script>
	jQuery(document).ready(function($) {
		
			<?php 
				if($topdata['lefttopbartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo isset($layout) ? $layout: ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
						$('#left_top_bar_show').show();
					}
					});
					
			<?php 
				}
				else if($topdata['lefttopbarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
						$('#left_top_bar_show').show();
					}
					});

				
			<?php 
				}
				else if($topdata['lefttopbarsocial'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
						$('#left_top_bar_show').show();
					}
					});
					
				
			<?php		
				}
				else if($topdata['lefttopbarbutton'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
						$('#left_top_bar_show').show();
					}
					});
					
				
			<?php		
				}
			 
				if(isset($topdata['middletopbartext']) && $topdata['middletopbartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
						$('#middle_top_bar_show').show();
					}
					});
					
			<?php 
				}
				else if(isset($topdata['middletopbarphone']) && $topdata['middletopbarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
						$('#middle_top_bar_show').show();
					}
					});

				
			<?php 
				}
				else if(isset($topdata['middletopbarsocial']) && $topdata['middletopbarsocial'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
						$('#middle_top_bar_show').show();
					}
					});
					
				
			<?php		
				}
				else if(isset($topdata['middletopbarbutton']) && $topdata['middletopbarbutton'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
						$('#middle_top_bar_show').show();
					}
					});
					
				
			<?php		
				}
			if(isset($topdata['righttopbartext']) && $topdata['righttopbartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
						$('#right_top_bar_show').show();
					}
					});
					
			<?php 
				}
				else if(isset($topdata['righttopbarphone']) && $topdata['righttopbarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
						$('#right_top_bar_show').show();
					}
					});
 
			<?php 
				}
				else if(isset($topdata['righttopbarsocial']) && $topdata['righttopbarsocial'] == 'yes')
				{
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
						$('#right_top_bar_show').show();
					}
					});
			<?php		
				}
				else if(isset($topdata['righttopbarbutton']) && $topdata['righttopbarbutton'] == 'yes')
				{
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo isset($layout) ? $layout : ''; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
						$('#right_top_bar_show').show();
					}
					});
			<?php	
				}
			?>	
			
	  		$('#newleftbarwidget a').click(function(){
				var widget = $(this).attr('data-widget');
			<?php if(!empty($topdata)){ ?>	if (confirm("You are changing it to a new widget. 'Would you like to do that ' ?")) { <?php } ?>
				if(widget == '1')
				{
						jQuery.ajax({
						type: 'post',
						data:'location=lefttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#lefttopbar').html(result);
							$('#left_top_bar_show').show();
							$('#left_top_bar_show_label').prop('checked',true);
						}
						});
					
				}
				else if(widget == '2')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=lefttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#lefttopbar').html(result);
							$('#left_top_bar_show').show();
							$('#left_top_bar_show_label').prop('checked',true);
						}
						});
					
				}
				else if(widget == '3')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=lefttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#lefttopbar').html(result);
							$('#left_top_bar_show').show();
							$('#left_top_bar_show_label').prop('checked',true);
						}
						});
				}
				else if(widget == '4')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=lefttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#lefttopbar').html(result);
							$('#left_top_bar_show').show();
							$('#left_top_bar_show_label').prop('checked',true);
						}
						});
				}
			<?php if(!empty($topdata) ){ ?> } <?php }?>
			});
			
			$('#newmiddlebarwidget a').click(function(){
				var widget = $(this).attr('data-widget');
				<?php if(!empty($topdata) ){ ?>  if (confirm("You are changing it to a new widget. 'Would you like to do that ' ?")) { <?php } ?>
				if(widget == '1')
				{
					
						jQuery.ajax({
						type: 'post',
						data:'location=middletopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#middletopbar').html(result);
							$('#middle_top_bar_show').show();
							$('#middle_top_bar_show_label').prop('checked',true);
						}
						});
					
					
				}
				else if(widget == '2')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=middletopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#middletopbar').html(result);
							$('#middle_top_bar_show').show();
							$('#middle_top_bar_show_label').prop('checked',true);
						}
						});
					
				}
				else if(widget == '3')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=middletopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#middletopbar').html(result);
							$('#middle_top_bar_show').show();
							$('#middle_top_bar_show_label').prop('checked',true);
						}
						});
				}
				else if(widget == '4')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=middletopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#middletopbar').html(result);
							$('#middle_top_bar_show').show();
							$('#middle_top_bar_show_label').prop('checked',true);
						}
						});
				}
				<?php if(!empty($topdata)){ ?> } <?php } ?>
			});
			
			
			
			$('#newrightbarwidget a').click(function(){
				var widget = $(this).attr('data-widget');
				<?php if(!empty($topdata)){ ?> if (confirm("You are changing it to a new widget. 'Would you like to do that ' ?")) { <?php } ?>
				if(widget == '1')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=righttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#righttopbar').html(result);
							$('#right_top_bar_show').show();
							$('#right_top_bar_show_label').prop('checked',true);
						}
						});
					
				}
				else if(widget == '2')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=righttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#righttopbar').html(result);
							$('#right_top_bar_show').show();
							$('#right_top_bar_show_label').prop('checked',true);
						}
						});
					
				}
				else if(widget == '3')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=righttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#righttopbar').html(result);
							$('#right_top_bar_show').show();
							$('#right_top_bar_show_label').prop('checked',true);
						}
						});

				}
				else if(widget == '4')
				{
					jQuery.ajax({
						type: 'post',
						data:'location=righttopbar',
						url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
						beforeSend: function(){
							 $(".preloader").show();
						   },
						   complete: function(){
							 $(".preloader").hide();
						   },
						success: function(result) {
							$('#righttopbar').html(result);
							$('#right_top_bar_show').show();
							$('#right_top_bar_show_label').prop('checked',true);
						}
						});

				}
				<?php if(!empty($topdata) ){ ?>  } <?php } ?>
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
			
	  });																		
</script>