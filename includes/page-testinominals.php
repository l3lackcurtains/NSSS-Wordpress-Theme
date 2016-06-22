<div class="page-testinominals wrapper">
<div class="container">
	<div class="grid">
	<?php echo tif_title( __('Testinominals', TIF_TD)); ?>
	</div>
</div>
		<div class="testinominals">
			<div class="row">
			<?php $query = new WP_Query('post_type=testinominals&posts_per_page=4');
				  if($query->have_posts()): ?>
			<ul class="bxslider">
				 <?php while($query->have_posts()): $query->the_post();	?>
			  <li><div class="container">
			  	<p><?php the_content(); ?></p>
			  	<h3><?php the_title(); ?></h3>
			  	</div>
			  </li>
		<?php endwhile; wp_reset_query(); ?>
			</ul>
		<?php else: echo 'No testinominals added.'; endif;?>
			</div>
		</div>
</div>