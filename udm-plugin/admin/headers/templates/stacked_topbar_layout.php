<?php
/** Loads the WordPress Environment and Template */
//require($_SERVER['DOCUMENT_ROOT'].'/udwebsol/wp-load.php');
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
	<?php 
		if($layoutnew=="1_3"){
	?>
	 <li>
        <h3>Middle Top Bar Widget</h3>
        <div id="middletopbar" class="headwidget">
          <div class="empty">
                <p>Click the "Add widget" button below to start creating your layout.</p>
            </div>
        </div>
        <div class="create_middlebar_widget_button">
            <div class="dropup custom_design_dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle addwidget" data-toggle="dropdown">Add widget</button>
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
				if($topdata['lefttopbartext'] == 'yes')
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
				else if($topdata['lefttopbarphone'] == 'yes')
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
				else if($topdata['lefttopbarsocial'] == 'yes')
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
				else if($topdata['lefttopbarbutton'] == 'yes')
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
			 
				if($topdata['middletopbartext'] == 'yes')
				{ 
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/text.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
					}
					});
					
			<?php 
				}
				else if($topdata['middletopbarphone'] == 'yes')
				{				
			?>
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/phone.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
					}
					});

				
			<?php 
				}
				else if($topdata['middletopbarsocial'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/social.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
					}
					});
					
				
			<?php		
				}
				else if($topdata['middletopbarbutton'] == 'yes')
				{
			?>	
					jQuery.ajax({
					type: 'post',
					data:'location=middletopbar&header=<?php echo $layout; ?>',
					url: "<?php echo get_template_directory_uri(); ?>/udm-plugin/admin/headers/templates/widgets/button.php",
					beforeSend: function(){
						 $(".preloader").show();
					   },
					   complete: function(){
						 $(".preloader").hide();
					   },
					success: function(result) {
						$('#middletopbar').html(result);
					}
					});
					
				
			<?php		
				}
			if($topdata['righttopbartext'] == 'yes')
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
				else if($topdata['righttopbarphone'] == 'yes')
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
				else if($topdata['righttopbarsocial'] == 'yes')
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
					
					}
					});
			<?php		
				}
				else if($topdata['righttopbarbutton'] == 'yes')
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