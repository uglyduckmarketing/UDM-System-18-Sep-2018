<?php 
header( "Content-type: text/css; charset: UTF-8" );		
?>
	:root {
   	--primary-color: <?php echo (get_option('udm_primary_color')!="" ? get_option('udm_primary_color') : "#4781FF"); ?>; 
    --secondary-color: <?php echo (get_option('udm_secondary_color')!="" ? get_option('udm_secondary_color') : "#3967CC"); ?>; 
    --global_light-color: <?php echo (get_option('udm_global_light')!="" ? get_option('udm_global_light') : "#F9F9F9"); ?>; 
    --global_dark-color: <?php echo (get_option('udm_global_dark')!="" ? get_option('udm_global_dark') : "#252525"); ?>; 
	}
	<?php
		if(get_option('udm_button_background')=="custom")
		{
			$button=get_option('udm_button_custom_background');
		}
		else
		{
			$button="var(--".get_option('udm_button_background')."-color)";
		}
		
		if(get_option('udm_button_text_color')=="custom")
		{
			$buttontextcolor=get_option('udm_button_text_custom_color');
		}
		else
		{
			$buttontextcolor="var(--".get_option('udm_button_text_color')."-color)";
		}
	?>
	
	.btn {
		background: <?php echo "var(--".get_option('udm_button_background')."-color)"; ?>;
		border-color: <?php echo "var(--".get_option('udm_button_background')."-color)"; ?>;
		color:  <?php echo "var(--".get_option('udm_button_text_color')."-color)"; ?>;
	}
	
	header a{
		color:<?php echo get_option('udm_global_dark'); ?>;
	}
	
	header p{
		color:<?php echo get_option('udm_global_dark'); ?>;
	}
	
	header .btn {
		background: <?php echo isset($button) ? $button : ''; ?>;
		border-color: <?php echo isset($button) ? $button : ''; ?>;
		color: <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;
	}
	header .btn .fa{
		border-left:1px solid <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;	
	}
	

	.basic_hero .btn {
		background: <?php echo isset($button) ? $button : ''; ?>;
		border-color: <?php echo isset($button) ? $button : ''; ?>;
		color: <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;
	}
	
	.basic-hero .btn .fa{
		border-left:1px solid <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;	
	}
	
	.fullwidth-hero-3 .btn {
		background: <?php echo isset($button) ? $button : ''; ?>;
		border-color: <?php echo isset($button) ? $button : ''; ?>;
		color: <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;
	}
	
	.fullwidth-hero-3 .btn .fa{
		border-left:1px solid <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;	
	}
	.splitscreen-hero .btn {
		background: <?php echo isset($button) ? $button : ''; ?>;
		border-color: <?php echo isset($button) ? $button : ''; ?>;
		color: <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;
	}
	
	.splitscreen-hero .btn .fa{
		border-left:1px solid <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;	
	}

	
	.wrapper .btn {
		background: <?php echo isset($button) ? $button : ''; ?>;
		border-color: <?php echo isset($button) ? $button : ''; ?>;
		color: <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;
	}
	
	.wrapper .btn .fa{
		border-left:1px solid <?php echo isset($buttontextcolor) ? $buttontextcolor : ''; ?>;	
	}
	
	 .navbar-brand img{
        width:170px;
    } 