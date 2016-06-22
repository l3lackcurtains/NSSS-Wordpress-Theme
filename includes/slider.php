<div class="page-slider">
	<div class="container">
		<div class="grid">
			<div class="row">
				<div class="full-width">
						<?php 
				            $args2 = array(
				                'post_type' => array('post'),
				                'posts_per_page' => 10,
				            );         
				            $loops = new WP_Query( $args2 );
				               if ( $loops->have_posts() ) : ?>
				               	<div class="inner">
				                 <?php
				                while ( $loops->have_posts() ) : $loops->the_post();
								if( has_post_thumbnail() ): 
									$thumb_id = get_post_thumbnail_id($post->ID);
								?>
									<div class="slide">
										<div><h3><?php the_title(); ?></h3> <br> 
										<p><?php $content = get_the_content();
					            		echo substr(strip_tags($content), 0,40) . '..';?></p>
					            		</div>
										<img src="<?php echo wp_get_attachment_url( $thumb_id );?>" width="1020" height="400">
									</div>
							<?php endif; endwhile;  wp_reset_postdata(); ?>
								 </div>
							<?php else : _e( 'Sorry, no posts matched your criteria.' ); endif; ?>
							<div class="controls">
								<a href="#" class="left">&larr;</a>
								<a href="#" class="right">&rarr;</a>
							</div>
					<div class="slide-nav"></div>
				</div>
			</div>
		</div>
	</div>
</div>
