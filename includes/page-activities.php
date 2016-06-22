<?php global $page_builder; $page_activity = $page_builder['activity_dragndrop'];?>

<div class="page-activities wrapper">
	<div class="container">
		<div class="grid">
		<?php echo tif_title( __($page_builder['activity_title'], TIF_TD)); ?>
	<div class="row cells<?php echo $page_builder['activity_size'];?>">

		<?php foreach( $page_activity as $key => $activity ):?>
			<!-- Latest Posts 1 -->
			<?php if($activity['select_activity'] == 'latestposts'):?>
				<div class="cell colspan<?php echo $activity['posts_size'];?>">
					<div class="recent-activities">
					<header><?php echo $activity['posts_title'];?></header>
						<div class="viewall"><a href="#">View All</a></div>
						<div class="row cells<?php echo $activity['post_size'];?>" id="ra-container">
						<?php
						$cat = @implode(',',$activity['posts_category']);
						$blog_sc = new WP_Query( 'post_type=post&posts_per_page='.$activity['posts_count'].'&cat='.$cat.'' );
						if( $blog_sc->have_posts() ):
							while( $blog_sc->have_posts() ): $blog_sc->the_post();
						?>
						<div class="cell" id="ra-post">
							<?php if( has_post_thumbnail() ): ?>
							<div class="ra-img"><?php the_post_thumbnail(); ?></div>
						<?php endif; ?>
							<div class="ra-content">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><i class="fa fa-user"></i> <?php echo the_author_posts_link(); ?> <i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></p>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); endif;?>
				</div>				
			</div>
		</div>
		<!-- / latest Posts 1 -->
		<!-- Publication -->
			<?php elseif($activity['select_activity'] == 'latestpublications'):?>
				<div class="cell colspan<?php echo $activity['publications_size'];?>">
						<div class="recent-publication">
							<header><?php echo $activity['publications_title'];?></header>
						<ul class="rp-list">
						<?php 
						$query = new WP_Query('post_type=publications&posts_per_page='.$activity['publications_count'].'');
						  if($query->have_posts()):
						  	while($query->have_posts()): $query->the_post();

							 $publications_opt = get_post_meta( $post->ID, 'custom_publication_options', true);
						  ?>
							<li>
								<div class="rp-content">
									<h3><?php the_title(); ?></h3>
									<p><i class="fa fa-user"></i> <?php _e('Author: ',TIF_TD); if(!empty($publications_opt['publication_author'])): echo $publications_opt['publication_author']; endif; ?> <i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></p>
								</div>
								<div class="rp-down"><a href="<?php if(!empty($publications_opt['publication_attachment_link'])): echo $publications_opt['publication_attachment_link']; endif; ?>">Download</a></div>
							</li>
						<?php endwhile; wp_reset_query(); else: echo "No publications found."; endif;?>
						</ul>
							<div class="viewall"><a href="#">View All</a></div>		
					</div>
				</div>
				<!-- / Publication -->
				<?php elseif($activity['select_activity'] == 'latestposts2'):?>
				<div class="cell colspan<?php echo $activity['posts_size2']; ?>">
						<div class="recent-activities2">
							<header><?php echo $activity['posts_title2'];?></header>
						<ul class="rp-list">
						<?php 
						$cat2 = @implode(',',$activity['posts_category2']);
						$blog_sc2 = new WP_Query( 'post_type=post&posts_per_page='.$activity['posts_count2'].'&cat='.$cat2.'' );
						if( $blog_sc2->have_posts() ):
							while( $blog_sc2->have_posts() ): $blog_sc2->the_post();
						  ?>
							<li>
								<?php if( has_post_thumbnail() ): ?>
									<div class="ra-img"><?php the_post_thumbnail(); ?></div>
								<?php endif; ?>
									<div class="ra-content">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><i class="fa fa-user"></i> <?php echo the_author_posts_link(); ?> <i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></p>
							</div>
							</li>
						<?php endwhile; wp_reset_query(); else: echo "No publications found."; endif;?>
						</ul>
							<div class="viewall"><a href="#">View All</a></div>		
					</div>
				</div>
				<?php endif; ?>


<?php endforeach; ?>

			</div>


		</div>
	</div>
</div>
<!-- /Activities -->