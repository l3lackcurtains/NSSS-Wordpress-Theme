<?php
class tif_video_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		$widget_options = array(
			'classname' =>'tif_video_widget',
			'description' => 'Supports video url from vimeo, youtube, dailymotions etc. '
			);
		$this->WP_Widget('tif_video_widget','Tif Video Widget', $widget_options);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		extract($args);
		$title = apply_filters('widget_title', $instance['title'] );
		$video_url = $instance['video_url'];
		$video_width = $instance['video_width'];
		$video_height = $instance['video_height'];
		echo $before_widget.$before_title.$title.$after_title;
		echo tif_video($video_url, $video_width, $video_height);		
		echo $after_widgets;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$defaults = array('title' => 'My video', 'video_url' => 'D_uDrq8GI9U', 'video_width' => 200, 'video_height' => 150);
		$instance = wp_parse_args( (array)$instance, $defaults );
		$title = esc_attr( $instance['title'] );
		$video_url = esc_attr( $instance['video_url'] );
		$video_width = esc_attr( $instance['video_width'] );
		$video_height = esc_attr( $instance['video_height'] );
		echo '<p><label for="'.$this->get_field_id('title').'">Title: </label>';
		echo "<input type='text' class ='widefat' name='".$this->get_field_name('title')."' value='".$title."'></p>";
		echo '<p><label for="'.$this->get_field_id('video_url').'">Video short URL : </label>';
		echo "<input type='text' class ='widefat' name='".$this->get_field_name('video_url')."' value='".$video_url."'></p>";
		echo '<p><label for="'.$this->get_field_id('video_width').'">Width: </label>';
		echo '<input type="number" class ="widefat" name="'.$this->get_field_name('video_width').'" value="'.$video_width.'"></p>';
		echo '<p><label for="'.$this->get_field_id('video_height').'">Height: </label>';
		echo '<input type="number" class ="widefat" name="'.$this->get_field_name('video_height').'" value="'.$video_height.'"></p>';
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['video_url'] = $new_instance['video_url'];
		$instance['video_width'] = $new_instance['video_width'];
		$instance['video_height'] = $new_instance['video_height'];
		return $instance;
	}
}
add_action( 'widgets_init', function(){
     register_widget( 'tif_video_widget' );
});