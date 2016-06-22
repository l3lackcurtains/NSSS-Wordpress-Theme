<?php global $page_builder; ?>
<div class="page-gallery wrapper">
<div class="container">
	<div class="grid">
	<?php echo tif_title( __($page_builder['gallery_area_title'], TIF_TD)); ?>
		<div class="image-gallery">
			<div class="row cells<?php echo $page_builder['gallery_image_in_row'];?>">
			<!-- Single Image -->
			<?php $query = new WP_Query('post_type=gallery&posts_per_page='.$page_builder['gallery_images_count'].'');
				  if($query->have_posts()):
				  	while($query->have_posts()): $query->the_post();
			?>
				<div class="cell image">
					<img src="<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() ); echo $img[0]; ?>" alt="">
						<div class="img-desc">
			                <h2><?php the_title(); ?></h2>
			                <p><?php the_excerpt(); ?></p>
			                <ul class="popup">
			                        <li><a href="<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() ); echo $img[0]; ?>" class="fresco" data-fresco-group="gallery"><i class="fa fa-search-plus"></i></a></li>
			                        <li><a href=""><i class="fa fa-link"></i></a></li>
			                    </ul>
			            </div>
				</div>
			<?php endwhile; wp_reset_query(); else: echo 'Add Images to gallery'; endif; ?>
			<!-- /single Image -->
			</div>
		</div>
	</div>
</div>
</div>
