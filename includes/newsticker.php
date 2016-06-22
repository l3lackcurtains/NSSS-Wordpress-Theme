<div class="news-ticker">
	<div class="container">
		<div class="grid">
			<div class="row"></div>
				<div class="nt-container">
					<div class="nt-title">Breaking News</div>
					<div class="nt-title2"><i class="fa fa-bolt"></i></div>

					<div class="nt-news">
					<ul>
					<?php


					$args = array( 'posts_per_page' => 10 );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach; 
					wp_reset_postdata();?>

					</ul>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>