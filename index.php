<?php get_header(); ?>

<?php get_template_part('includes/newsticker' );?>

<?php get_template_part('includes/slider' );?>
<!-- End of Header section -->
<!-- Main website container -->
<div class="main-content">
	<div class="container">
		<div class="grid">
		<?php tif_title( __('Latest News', TIF_TD)); ?>
			<div class="row">
				<section id="post-inner" class="cell">
					<!-- Article templates ( masonry, default)  -->
					<?php get_template_part('includes/post','masonry' ); ?>
					<!-- End of Article template -->
				</section>
			</div>
		</div>
	</div>
</div>
<!-- End of Main website container -->
<?php get_footer(); ?>