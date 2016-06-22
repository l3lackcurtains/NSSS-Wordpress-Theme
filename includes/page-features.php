<?php global $page_builder; ?>
<!-- Features -->
<div class="page-features wrapper">
	<div class="container">
		<div class="grid">
		<?php echo tif_title( __($page_builder['features_area_title'], TIF_TD)); ?>
			<div class="row cells4">
				<?php foreach($page_builder['features_single'] as $key => $feature): ?>
				<div class="cell feature">
					<div class="feature-img"><i class="<?php echo $feature['feature_icon']; ?>"></i></div>
					<h1><a href="#"><?php echo $feature['feature_title']; ?></a></h1>
					<small><?php echo $feature['feature_desc']; ?></small>
				</div>
			<?php endforeach; ?>

			</div>
		</div>
	</div>
</div>
<!-- /features -->