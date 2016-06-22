<?php
class tif_scripts{
	// Adding Javascripts into theme
	public function tif_js(){
		wp_enqueue_script( 'jquery_min_js',	TIF_URI. '/assests/js/jquery.min.js', false, TIF_VERSION, true );
		wp_enqueue_script( 'metro_js', TIF_URI. '/assests/js/metro.min.js', false, TIF_VERSION, true );
		wp_enqueue_script( 'isotope_min_js', TIF_URI. '/assests/js/isotope.min.js', false, TIF_VERSION, true );
		wp_enqueue_script( 'nicescroll_min_js', TIF_URI. '/assests/js/jquery.nicescroll.min.js', false, TIF_VERSION, true );
		wp_enqueue_script( 'jquery_newsTicker_min', TIF_URI. '/assests/js/jquery.ticker.min.js', false, TIF_VERSION, true );		
		wp_enqueue_script( 'jquery_scrollUp_min', TIF_URI. '/assests/js/jquery.scrollUp.min.js', false, TIF_VERSION, true );		
		wp_enqueue_script( 'slider_js', TIF_URI. '/assests/js/slider.min.js', false, TIF_VERSION, true );		
		wp_enqueue_script( 'waypoints', TIF_URI. '/assests/js/waypoints.min.js', false, TIF_VERSION, true );		
		wp_enqueue_script( 'owl_carousel_min', TIF_URI. '/assests/js/owl.carousel.min.js', false, TIF_VERSION, true );
		wp_enqueue_script( 'fresco', TIF_URI. '/assests/js/fresco.js', false, TIF_VERSION, true );	
		wp_enqueue_script( 'viewport', TIF_URI. '/assests/js/viewportchecker.js', false, TIF_VERSION, true );	
		wp_enqueue_script( 'bxslider_js', TIF_URI. '/assests/js/jquery.bxslider.min.js', false, TIF_VERSION, true );	
		wp_enqueue_script( 'scripts_js', TIF_URI. '/assests/js/scripts.js', false, TIF_VERSION, true );
	}
// Adding stylesheets into theme
	public function tif_css(){
		wp_enqueue_style('metro_css', TIF_URI.'/assests/css/metro.min.css' );
		wp_enqueue_style('fa_icons_css', TIF_URI.'/assests/fa/css/font-awesome.min.css' );
		wp_enqueue_style('animate_css', TIF_URI.'/assests/css/animate.min.css');
		wp_enqueue_style('slider_css', TIF_URI.'/assests/css/slider.min.css');
		wp_enqueue_style('fresco_css', TIF_URI.'/assests/css/fresco.css');
		wp_enqueue_style('bxslider_css', TIF_URI.'/assests/css/jquery.bxslider.min.css');
		wp_enqueue_style('style_css', TIF_URI.'/style.css' );
	}
}
?>