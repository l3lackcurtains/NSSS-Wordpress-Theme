
<?php
/**==================================================
 * All Shortcodes Lists
 * ==================================================
 */
if( ! function_exists( 'tif_sc_code' ) ) {
	function sc_code( $attr, $content = null ) {
		$output  = '<pre>';
		$output .= do_shortcode(htmlspecialchars($content));
		$output .= '</pre>'."\n";
	    return $output;
	}

}

/**==================================================
 * Shortcodes
 * ==================================================
 */

// Rows 
if( ! function_exists( 'tif_sc_row' ) ){
  function tif_sc_row( $atts, $content = null ) {

    $atts = shortcode_atts( array(
      "cells"  => false,
      "xclass" => false,
      "dattr" => false
    ), $atts );

    $class  = 'row';      
    $class .= ( $atts['cells'] )   ? ' cells' . $atts['cells'] : '';
    $class .= ( $atts['xclass'] )   ? $atts['xclass'] : '';
    $dattr = ( $atts['dattr'] )   ? $atts['dattr'] : '';
    
     
    return sprintf( 
      '<div class="%s" %s>%s</div>',
      esc_attr( $class ), $dattr,
      do_shortcode( $content )
    );
  }
}
// cell
if( ! function_exists( 'tif_sc_cell' ) ){
  function tif_sc_cell( $atts, $content = null ) {

    $atts = shortcode_atts( array(
      "colspan" => false,
      "xclass" => false,
      "dattr" => false
    ), $atts );

    $class  = 'cell';      
    $class .= ( $atts['colspan'] )   ? ' colspan' . $atts['colspan'] : '';
    $class .= ( $atts['xclass'] )   ? $atts['xclass'] : '';
    $dattr = ( $atts['dattr'] )   ? $atts['dattr'] : '';
    
     
    return sprintf( 
      '<div class="%s" %s>%s</div>',
      esc_attr( $class ), $dattr,
      do_shortcode( $content )
    );
  }
}

// buttons
if( ! function_exists( 'tif_sc_button' ) ){
  function tif_sc_button( $atts, $content = null ) {

    $atts = shortcode_atts( array(
      "type" => false,
      "size" => false,
      "style" => false,
      "color" => false,
      "xclass" => false,
      "dattr"  => false,
    ), $atts );

    $class  = 'button';      
    $class .= ( $atts['type'] )   ? ' '.$atts['type'] : '';
    $class .= ( $atts['style'] )   ? ' '.$atts['style'] : '';
    $class .= ( $atts['size'] )   ? ' '.$atts['size'].'-button' : '';
    $class .= ( $atts['color'] )   ? ' bg-'.$atts['color'].'' : '';
    $class .= ( $atts['xclass'] ) ? $atts['xclass'] : '';
    $dattr  = ( $atts['dattr'] ) ? $atts['dattr'] : '';
    
     
    return sprintf( 
      '<button class="%s" %s>%s</button>',
      esc_attr( $class ), $dattr,
      do_shortcode( $content )
    );
  }
}
//Icons
if( ! function_exists( 'tif_sc_icon' ) ){
  function tif_sc_icon( $atts, $content = null ) {

    $atts = shortcode_atts( array(
      "name" => false,
      "xclass" => false,
    ), $atts );

    $class .= ( $atts['name'] )   ? $atts['name'] : '';
    $dattr = ( $atts['xclass'] )   ? $atts['xclass'] : '';
 
     
    return sprintf( 
      '<span class="%s"%s>%s</span>',
      esc_attr( $class ), $dattr,
      do_shortcode( $content )
    );
  }
}

if( !function_exists('tif_sc_blog') ){
    function tif_sc_blog( $atts ){
      $atts = shortcode_atts( array(
        "npost" => 10,
        "cat"  => false,
        "header" => "Latest Posts"
        ), $atts);

?>
<div class="recent-activities">
  <header><?php echo $atts['header']; ?></header>
    <div class="viewall"><a href="#">View All</a></div>
      <div class="row cells2" id="ra-container">
        <?php
        $opt = array(
          'post_type' => 'post',
          "posts_per_page" => $atts['npost'],
          "category_name" => $atts['cat'],
          );           
          $blog_sc = new WP_Query( $opt );
          if( $blog_sc->have_posts() ):
            while( $blog_sc->have_posts() ): $blog_sc->the_post();
        ?>
        <div class="cell" id="ra-post">
          <?php if( has_post_thumbnail() ): ?>
        <div class="ra-img"><?php the_post_thumbnail(); ?></div>
          <?php endif; ?>
        <div class="ra-content">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><i class="fa fa-user"></i> <?php echo the_author_posts_link(); ?> <i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></p>
        </div>
      </div>
    <?php endwhile; wp_reset_query(); endif;?>
</div>
<?php
    }
}

/*
**Adding Shortcodes
*/

add_shortcode( 'code', 'tif_sc_code' );
add_shortcode( 'row', 'tif_sc_row' );
add_shortcode( 'cell', 'tif_sc_cell' );
add_shortcode( 'button', 'tif_sc_button' );
add_shortcode( 'icon', 'tif_sc_icon' );
add_shortcode('blog', 'tif_sc_blog');

?>