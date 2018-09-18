<?php

class UDM_Company_Info_Card extends WP_Widget{

  function UDM_Company_Info_Card(){
  	$widget_ops = array('description' => 'Company Logo Card.');
  	$this->WP_Widget('UDM_Company_Info_Card_widget', 'UDM Company Info Card', $widget_ops);
  }

  function form($instance){
		// outputs the options form on admin
		$title = esc_attr($instance['title']);
		$company_info_content = esc_attr($instance['company_info_content']);
    if(empty($company_info_content)){
      $company_info_content = "<img class=\"widget_logo\" src=\"[udm_company_logo]\" /><br />\n";
      $company_info_content .= "<p>[udm_company_address]<br/>\n";
      $company_info_content .= "[udm_company_city], [udm_company_state] [udm_company_zipcode]<br/>\n";
      $company_info_content .= "<br><a class=\"widget_phone\" href=\"#\">[udm_company_phone]</a></p>";
    }
	?>

  <p>
  	<label for="<?php echo $this->get_field_id('title'); ?>">Title:
  		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  	</label>
  	<label for="<?php echo $this->get_field_id('company_info_content'); ?>">Content:
      <textarea class="widefat" id="<?php echo $this->get_field_id('company_info_content'); ?>" name="<?php echo $this->get_field_name('company_info_content'); ?>" ><?php echo attribute_escape($company_info_content); ?></textarea>
  	</label>
  </p>

	<?php

	}

  function update($new_instance, $old_instance) {
	  // processes widget options to be saved
	  $instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['company_info_content'] = strip_tags($new_instance['company_info_content']);
	  return $new_instance;
	}

	function widget($args, $instance) {
    // outputs the content of the widget
		extract($args, EXTR_SKIP);
		echo $args['before_widget'];
    // Header Title
		if (!empty($instance['title'])) {
      echo $args['before_title'] . $instance['title']. $args['after_title'];
    };
    // Widget Content
		if(!empty($instance['company_info_content'])){
      echo do_shortcode($instance['company_info_content']);
    }
		echo $args['after_widget'];
  }

}

class UDM_Company_Info extends WP_Widget{

  function UDM_Company_Info(){
  	$widget_ops = array('description' => 'Default company info.');
  	$this->WP_Widget('UDM_Company_Info_widget', 'UDM Company Info', $widget_ops);
  }

	function form($instance){
		// outputs the options form on admin
		$title = esc_attr($instance['title']);
		$company_info_content = esc_attr($instance['company_info_content']);
    if(empty($company_info_content)){
      $company_info_content = "<strong>Business Address</strong><br />\n";
      $company_info_content .= "[udm_company_name]<br/>\n";
      $company_info_content .= "[udm_company_address]<br/>\n";
      $company_info_content .= "[udm_company_city], [udm_company_state] [udm_company_zipcode]<br/>\n";
      $company_info_content .= "<strong>Phone Number</strong><br/>\n";
      $company_info_content .= "[udm_company_phone]<br/>";
    }
	?>

  <p>
  	<label for="<?php echo $this->get_field_id('title'); ?>">Title:
  		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  	</label>
  	<label for="<?php echo $this->get_field_id('company_info_content'); ?>">Content:
      <textarea class="widefat" id="<?php echo $this->get_field_id('company_info_content'); ?>" name="<?php echo $this->get_field_name('company_info_content'); ?>" ><?php echo attribute_escape($company_info_content); ?></textarea>
  	</label>
  </p>

	<?php

	}

	function update($new_instance, $old_instance) {
	  // processes widget options to be saved
	  $instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['company_info_content'] = strip_tags($new_instance['company_info_content']);
	  return $new_instance;
	}

	function widget($args, $instance) {
    // outputs the content of the widget
		extract($args, EXTR_SKIP);
		echo $args['before_widget'];
    // Header Title
		if (!empty($instance['title'])) {
      echo $args['before_title'] . $instance['title']. $args['after_title'];
    };
    // Widget Content
		if(!empty($instance['company_info_content'])){
      echo do_shortcode($instance['company_info_content']);
    }
		echo $args['after_widget'];
  }
}

// Add the new widget to WordPress
register_widget('UDM_Company_Info');
register_widget('UDM_Company_Info_Card');
?>
