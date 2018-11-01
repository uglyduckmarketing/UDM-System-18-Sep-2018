<?php

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */

include '../../../../../../../wp-load.php'; 
 
if($_POST['layout'])
{
	$layout=$_POST['layout'];
}
$data=unserialize(get_option('header_layout_'.$layout));
?>
	<input type="hidden" name="menuintopbar" id="menuintopbar" value="">
    <li>
        <h3>Left Top Bar Widget</h3>
        <div id="lefttopbar" class="headwidget">
          <div class="empty">
                <p>Click the "Add widget" button below to start creating your layout.</p>
            </div>
        </div>
        <div class="create_leftbar_widget_button">
            <div class="dropup custom_design_dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle addwidget" data-toggle="dropdown">Add widget</button>
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
	<li>
        <h3>Right Top Bar Widget</h3>
        <div id="righttopbar" class="headwidget">
            <div class="empty">
                <p>Click the "Add widget" button below to start creating your layout.</p>
            </div>
        </div>
        <div class="create_rightbar_widget_button">
            <div class="dropup custom_design_dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Add widget</button>
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
				if($data['lefttopbartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
					}
					});
					
			<?php 
				}
				else if($data['lefttopbarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
					}
					});

				
			<?php 
				}
				else if($data['lefttopbarsocial'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
					}
					});
					
				
			<?php		
				}
				else if($data['lefttopbarbutton'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=lefttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#lefttopbar').html(result);
					}
					});
					
				
			<?php		
				}
				
			if($data['righttopbartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
					}
					});
					
			<?php 
				}
				else if($data['righttopbarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
					}
					});

			<?php 
				}
				else if($data['righttopbarsocial'] == 'yes')
				{
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
						$('#menuintopbar').val("yes");
					}
					});
			<?php		
				}
				else if($data['righttopbarbutton'] == 'yes')
				{
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=righttopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#righttopbar').html(result);
						$('#menuintopbar').val("yes");
					}
					});
			<?php	
				}
			?>	
			
	  		$('#newleftbarwidget a').click(function(){
				var widget = $(this).attr('data-widget');
				
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
							$('#menuintopbar').val("yes");
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
							$('#menuintopbar').val("yes");
						}
						});
				}
			});
			
			$('#newrightbarwidget a').click(function(){
				var widget = $(this).attr('data-widget');
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
							$('#menuintopbar').val("yes");
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
							$('#menuintopbar').val("yes");
						}
						});

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
			
	  });																		
</script>