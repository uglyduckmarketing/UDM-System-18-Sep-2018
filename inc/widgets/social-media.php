<?php
class UDM_Social extends WP_Widget {
    function UDM_Social() {
    	$widget_ops = array('description' => 'Social media links for footer.');
    	$this->WP_Widget('udm_social_widget', 'UDM Social Medial Links', $widget_ops);
    }
	function form($instance) {
		// outputs the options form on admin
		$title = esc_attr($instance['title']);
		$facebook = esc_attr($instance['facebook']);
		$twitter = esc_attr($instance['twitter']);
		$youtube = esc_attr($instance['youtube']);
		$linkedin = esc_attr($instance['linkedin']);
		$yelp = esc_attr($instance['yelp']);
		$rss = esc_attr($instance['rss']);
		$google = esc_attr($instance['google']);
		$pinterest = esc_attr($instance['pinterest']);
	?>

<p>
	<label for="<?php echo $this->get_field_id('title'); ?>">Title:
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook:
		<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo attribute_escape($facebook); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('google'); ?>">Google+:
		<input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo attribute_escape($google); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter:
		<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo attribute_escape($twitter); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('pinterest'); ?>">Pinterest:
		<input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo attribute_escape($pinterest); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('youtube'); ?>">You Tube:
		<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo attribute_escape($youtube); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('linkedin'); ?>">Linked In:
		<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo attribute_escape($linkedin); ?>" />
	</label>
	<label for="<?php echo $this->get_field_id('yelp'); ?>">Yelp:
		<input class="widefat" id="<?php echo $this->get_field_id('yelp'); ?>" name="<?php echo $this->get_field_name('yelp'); ?>" type="text" value="<?php echo attribute_escape($yelp); ?>" />
	</label>
	</label>
	<label for="<?php echo $this->get_field_id('rss'); ?>">RSS:
		<input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo attribute_escape($rss); ?>" />
	</label>
</p>

	<?php

	}
	function update($new_instance, $old_instance) {
	        // processes widget options to be saved
	        $instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['facebook'] = strip_tags($new_instance['facebook']);
	        return $new_instance;
	}
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
		echo $args['before_widget'];
		if (!empty($instance['title'])) { echo $args['before_title'] . $instance['title']. $args['after_title']; };
		//var_dump($args);
		echo '<ul class="social_media">';
		if (!empty($instance['facebook'])) { echo '<li><a href="'.$instance['facebook'].'" class="facebook" target="_blank"><span>Facebook</span></a></li>'; }
		if (!empty($instance['google'])) { echo '<li><a href="'.$instance['google'].'" class="googleplus" target="_blank"><span>Google+</span></a></li>'; }
		if (!empty($instance['twitter'])) { echo '<li><a href="'.$instance['twitter'].'" class="twitter" target="_blank"><span>Twitter</span></a></li>'; }
		if (!empty($instance['pinterest'])) { echo '<li><a href="'.$instance['pinterest'].'" class="pinterest" target="_blank"><span>Pinterest</span></a></li>'; }
		if (!empty($instance['youtube'])) { echo '<li><a href="'.$instance['youtube'].'" class="youtube" target="_blank"><span>You Tube</span></a></li>'; }
		if (!empty($instance['linkedin'])) { echo '<li><a href="'.$instance['linkedin'].'" class="linkedin" target="_blank"><span>Linked In</span></a></li>'; }
		if (!empty($instance['yelp'])) { echo '<li><a href="'.$instance['yelp'].'" class="facebook" target="_blank"><span>Yelp</span></a></li>'; }
		if (!empty($instance['rss'])) { echo '<li><a href="'.$instance['rss'].'" class="facebook" target="_blank"><span>RSS</span></a></li>'; }
		echo '</ul>';
		echo $args['after_widget'];
        // outputs the content of the widget
    }
}
register_widget('UDM_Social');
?>
