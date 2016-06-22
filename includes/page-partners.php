<?php global $page_builder; ?>
<div class="page-partners wrapper">
	<div class="container">
		<div class="grid">
		<?php echo tif_title( __($page_builder['partners_area_title'], TIF_TD)); ?>
				<div class="row">
					<div id="owl-demo">
					<?php foreach($page_builder['partner_single'] as $key => $partner): $attachment = wp_get_attachment_image_src( $partner['partner_image'], 'full' ); ?>
  					  <div class="item"><img src="<?php echo $attachment[0]; ?>" alt="Owl Image"></div>
					<?php endforeach; ?>					 
					</div>
				</div>
		</div>
	</div>
</div>
