<?php get_header(); ?>

<?php
$page_builder = get_post_meta( $post->ID, 'tif_page_builder', true );
$page_area = get_post_meta( $post->ID, 'tif_page_area', true );

if($page_area['tif_ed_breakingnews'] == true ): 
	get_template_part('includes/newsticker' ); 
endif; 

if($page_area['tif_ed_slider'] == true): ?>
<div class="header4-con">
	<div class="container">
		<div class="grid" id="afterheader">
			<!-- slide -->
			<div class="row">
				<?php get_template_part('includes/slider' );?>
			</div>
			<!-- End of slide -->
		</div>
	</div>
</div>
<?php endif; ?>
<!-- End of Header section -->
<?php 
if($page_area['tif_ed_page_builder'] == true):
foreach ($page_area['area_dragndrop'] as $key => $areas) {
	get_template_part('includes/page', $areas['select_areas']);
}
else:
get_template_part('includes/page','main' );
endif;
?>

<?php get_footer(); ?>