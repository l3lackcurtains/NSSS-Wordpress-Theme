<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>
<div class="header4-con">
       <div class="container">
            <div class="condensed grid" id="afterheader">
			<div class="row">
			    <?php get_template_part('includes/newsticker' );?>
			</div>
			<!-- slide -->
			<div class="row">
			    <?php get_template_part('includes/slide','jms' );?>
			</div>
			<!-- End of slide -->
		</div>
	</div>
</div>
<!-- End of Header section -->
<!-- Main website container -->
<div class="main-content">
	<div class="container">
		<div class="grid">
				<div class="row cells4">
					<section id="post-inner" class="cell colspan3">
					<!-- Article templates ( masonry, default)  -->
					<?php get_template_part('includes/post','masonry' ); ?>
					<!-- End of Article template -->
					</section>
					<section class="cell">
					publications						
					</section>
			</div>
		</div>
	</div>
</div>
<!-- End of Main website container -->
<?php get_footer(); ?>