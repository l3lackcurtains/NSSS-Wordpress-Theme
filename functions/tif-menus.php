<?php
	// Register Nav menus
	if(function_exists("register_nav_menus") ){
		register_nav_menus(array("secondary" => "Footer menu") );
		register_nav_menus(array("primary" => "main menu") );
	}

class samplesite_walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
        if ($depth == 0)
            $output .= "\n$indent<ul class='d-menu' data-role='dropdown'>\n";
        else
            $output .= "\n$indent<ul class='d-menu' data-role='dropdown'>\n";
	}
  
    function end_lvl(&$output, $depth) {
		$indent = str_repeat("\t", $depth);
        if ($depth == 0) 
            $output .= "$indent</ul>\n";
        else
            $output .= "$indent</ul>\n";
	}
    function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$item_output = $args->before;
		 if($args->walker->has_children) {
		$item_output .= '<a'. $attributes .' class="'.strtolower(str_replace(' ','-',preg_replace('/[^a-zA-Z0-9\s] /', '', $item->title)).' dropdown-toggle').'">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
     	}else{

		$item_output .= '<a'. $attributes .' class="'.strtolower(str_replace(' ','-',preg_replace('/[^a-zA-Z0-9\s] /', '', $item->title))).'">';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
	}
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}




function tif_wp_page_menu() 
{
	$args = array(
		'title_li' 		=> '0',
		'sort_column' 	=> 'menu_order',
		'depth' 		=> 5,
	);

	echo '<nav id="menu">'."\n";
		echo '<ul class="nav navbar-nav navbar-right">'."\n";
			wp_list_pages($args); 
		echo '</ul>'."\n";
	echo '</nav>'."\n";
}
?>
