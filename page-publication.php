<?php get_header(); ?>
<div class="header4-con">
       <div class="container">
            <div class="condensed grid" id="afterheader">
			<div class="row">
			    <?php get_template_part('includes/newsticker' );?>
			</div>
  <!-- Breadcrumb -->
  <div class="row">
          <?php the_breadcrumb(); ?>
  </div>
  <!-- End of Breadcrumb -->
		</div>
	</div>
</div>
<!-- End of Header section -->
<!-- Main website container -->
<div class="main-content">
	<div class="container">
		<div class="grid">
				<div class="row">
					<!-- Article templates ( masonry, default)  -->
					<?php get_template_part('includes/post','publication' ); ?>
					<!-- End of Article template -->
			</div>
		</div>
	</div>
</div>
<!-- End of Main website container -->
<?php get_footer(); ?>