<!-- Footer Widgets -->
<div class="footer-bg1">
    <div class="container">
        <div class="grid">
				<div class="row cells4">
					<div class="cell">
						<?php dynamic_sidebar("first-footer");?>
					</div>
					<div class="cell">
						<?php dynamic_sidebar("second-footer");?>
					</div>
					<div class="cell">
						<?php dynamic_sidebar("third-footer");?>		
					</div>
					<div class="cell">
						<?php dynamic_sidebar("fourth-footer");?>							
					</div>
				</div>
		</div>
	</div>
</div>
<!-- Footer Widgets -->

<!-- Footer Menu / copyright text -->
<div class="footer-bg2">
    <div class="container">
        <div class="grid">
        		<div class="row cells2">
	        			<div class="cell">
		        			<div class="copyright">
		        			copyright &copy; Incentive wordpress theme | 2015
		        			</div>
	        			</div>
	        			<?php if( tif_option('tif_opt_footer_menu') == true ):?>
        			<div class="cell">
        				<div class="app-bar drop-up bg-transparent" data-role="appbar">
                        <?php if( has_nav_menu('secondary') ): ?>
	                            <ul class="app-bar-menu">
									<?php wp_nav_menu( array(
												'theme_location'=>'secondary',
												'menu_class' => 'app-bar-menu',
												 'walker' => new samplesite_walker
												 ));
												 ?>
	                            </ul>
                            <?php else: ?>
                            <a class="app-bar-element branding">Add Secondary navigation menu from tif theme setting!</a>
                            <?php endif ?>
                        </div>

        			</div>
        		<?php endif; ?>

        		</div>    		
          
	        </div>
	    </div>   
	</div>

<!-- Scroll up -->
<?php if( tif_option('tif_opt_gototop') == true ):?>
<div id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"></div>
<?php endif; ?>
</body>
<?php wp_footer(); ?>
</html>





