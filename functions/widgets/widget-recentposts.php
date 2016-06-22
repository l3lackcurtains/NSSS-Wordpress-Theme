<?php
class tif_recent_news_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		// widget actual processes
		$widget_options = array(
			'classname' =>'tif_recentposts',
			'description' => 'TIF Recent Posts'
			);
		$this->WP_Widget('tif_recent_posts','Tif Recent Posts', $widget_options);
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
		$post_number = $instance['post_number'];
		echo $before_widget.$before_title.$title.$after_title; ?>
		<div class="widget-latestnews">
 				<ul class="widget-ln">
 			<?php if(have_posts()) :
	          $widget_ln = new WP_Query('post_type=post& posts_per_page='.$post_number. '');
	          while ($widget_ln->have_posts()) : $widget_ln->the_post();
            ?>
 					<li>
 						<?php if( has_post_thumbnail() ):?><aside><?php the_post_thumbnail('small');?></aside><section class="has_pt"><?php else:?>
 						<section class="no_pt"><?php endif; ?>
 						<a href="">
 							<h3><a href="<?php the_permalink();?>"><span class="title"><?php the_title(); ?></span></a></h3>
 						</a>
						<p><span class="fa fa-clock-o"> <?php the_date(); ?></span> <span class="fa fa-user"> <?php the_author_posts_link(); ?> </span></p>
 						</section>
 					</li>
 			<?php endwhile; wp_reset_query(); endif; ?>
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
		$defaults = array('title' => 'Recent News', 'post_number' => 5);
		$instance = wp_parse_args( (array)$instance, $defaults );
		$title = esc_attr( $instance['title'] );
		$post_number = esc_attr( $instance['post_number'] );
		echo '<p><label for="'.$this->get_field_id('title').'">Title: </label>';
		echo "<input type='text' class ='widefat' name='".$this->get_field_name('title')."' id='".$this->get_field_id('title')." 'value='".$title."'></p>";
		echo '<p><label for="'.$this->get_field_id('post_number').'">Posts Number: </label>';
		echo '<input type="number" class ="widefat" name="'.$this->get_field_name('post_number').'" id="'.$this->get_field_id('post_number').'" value="'.$post_number.'"></p>';


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
		$instance['post_number'] = $new_instance['post_number'];
		return $instance;
	}
}


add_action( 'widgets_init', function(){
     register_widget( 'tif_recent_news_widget' );
});