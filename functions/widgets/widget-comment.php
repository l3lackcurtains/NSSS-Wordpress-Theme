<?php
class tif_recent_comments_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		$widget_options = array(
			'classname' =>'tif_recent_comments',
			'description' => 'Recent Comments with Avatar'
			);
		$this->WP_Widget('tif_recent_comments','Tif Recent Comments', $widget_options);
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
		$comment_number = $instance['comment_number'];
		echo $before_widget.$before_title.$title.$after_title; ?>
			<div class="widget-recentcomments">
 				<ul class="widget-rc">
 				<?php $comments = get_comments('status=approve&number='.$comment_number.'');
					foreach ($comments as $comment) :?>
 					<li>
 					<?php $comment_permalink = get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID .'" title="'.$comment->comment_author .' | '.get_the_title($comment->comment_post_ID);
 						$comment_date = new DateTime($comment->comment_date);
 					 ?>
						<aside>
							<a href="<?php echo $comment_permalink; ?>"><?php echo get_avatar( $comment->user_id, 55 ); ?></a>
						</aside>
						<section>
							<span><?php echo __('<b>On</b> ',TIF_TD).$comment_date->format( get_option('date_format') ); ?></span>
							<p><?php echo strip_tags($comment->comment_author); ?> commented on <a href="<?php echo $comment_permalink; ?>"><?php echo get_the_title($comment->comment_post_ID);?></a></p>
						</section>
 					</li>
 					<?php endforeach; ?>
 				</ul>
 			</div>
		<?php
		echo $after_widgets;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$defaults = array('title' => 'Recent News', 'comment_number' => 5);
		$instance = wp_parse_args( (array)$instance, $defaults );
		$title = esc_attr( $instance['title'] );
		$comment_number = esc_attr( $instance['comment_number'] );
		echo '<p><label for="'.$this->get_field_id('title').'">Title: </label>';
		echo "<input type='text' class ='widefat' name='".$this->get_field_name('title')."' value='".$title."'></p>";
		echo '<p><label for="'.$this->get_field_id('title').'">No of Comments to show: </label>';
		echo '<input type="number" class ="widefat" name="'.$this->get_field_name('comment_number').'" value="'.$comment_number.'"></p>';
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
		$instance['comment_number'] = $new_instance['comment_number'];
		return $instance;
	}
}
add_action( 'widgets_init', function(){
     register_widget( 'tif_recent_comments_widget' );
});