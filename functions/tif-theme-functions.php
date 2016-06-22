<?php
// Function to output social icons
function get_social_icons(){
?>
<ul class="social-icons">
<?php if(  tif_option('tif_opt_facebook_url') != NULL ):  ?>
	       <li><a href="<?php echo tif_option('tif_opt_facebook_url'); ?>"><i class="fa fa-facebook fa-lg"></i></a></li>
<?php endif; ?>
<?php if(  tif_option('tif_opt_twitter_url') != NULL ):  ?>
         <li><a href="<?php echo tif_option('tif_opt_twitter_url'); ?>"><i class="fa fa-twitter fa-lg"></i></a></li>
<?php endif; ?>
<?php if(  tif_option('tif_opt_linkedin_url') != NULL ):  ?>
         <li><a href="<?php echo tif_option('tif_opt_linkedin_url'); ?>"><i class="fa fa-linkedin fa-lg"></i></a></li>
<?php endif; ?>
<?php if(  tif_option('tif_opt_youtube_url') != NULL ):  ?>
         <li><a href="<?php echo tif_option('tif_opt_youtube_url'); ?>"><i class="fa fa-youtube fa-lg"></i></a></li>
<?php endif; ?>
<?php if(  tif_option('tif_opt_google_url') != NULL ):  ?>
         <li><a href="<?php echo tif_option('tif_opt_google_url'); ?>"><i class="fa fa-google-plus fa-lg"></i></a></li>
<?php endif; ?>
<?php if(  tif_option('tif_opt_skype_url') != NULL ):  ?>
         <li><a href="<?php echo tif_option('tif_opt_skype_url'); ?>"><i class="fa fa-skype fa-lg"></i></a></li>
<?php endif; ?>
<?php if(  tif_option('tif_opt_instagram_url') != NULL ):  ?>
         <li><a href="<?php echo tif_option('tif_opt_instagram_url'); ?>"><i class="fa fa-instagram fa-lg"></i></a></li>
<?php endif; ?>
</ul>
<?php
}
// Function to output Page Navigation
function wp_page_navi() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}
// Function for header with seperator
function tif_title($title, $htype = 1, $stype = 1){
  $output = '<header class="tif-title'.$htype.'"><h1>'.$title.'</h1><div class="seperator'.$stype.'"></div></header>';
  return $output;
}
// Iframe video box
function tif_video($url, $width=420, $height = 315){
  $output = '<iframe width="'.$width.'" height="'.$height.'" src="http://www.youtube.com/embed/'.$url.'"></iframe>';
  return $output;
}