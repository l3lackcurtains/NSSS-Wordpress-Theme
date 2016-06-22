<?php
// Includeing all functions into one
require_once(FUNC_DIR."/tif-scripts.php");
require_once(FUNC_DIR."/tif-main.php");
require_once(FUNC_DIR."/tif-theme-functions.php");
require_once(FUNC_DIR."/tif-shortcodes.php");
require_once(LIB_DIR."/class-tgm-plugin-activation.php");
require_once(LIB_DIR."/tif-plugins.php");
//require_once(LIB_DIR."/visual-composer.php");
require_once(ADMIN_DIR."/tif-admin.php");
require_once(FUNC_DIR."/tif-widgets.php");
require_once(FUNC_DIR."/tif-menus.php");
require_once(FUNC_DIR."/tif-breadcrumb.php");


/*******************************************************
*Add actions
********************************************************
*/
// javascripts and stylesheets
add_action('wp_enqueue_scripts', array('tif_scripts','tif_js') );
add_action('wp_enqueue_scripts', array('tif_scripts','tif_css') );
// Custom Post type (Publication)
add_action( 'init', array('tif_register','reg_publicationlist') );
add_action( 'init', array('tif_register','reg_gallery') );
add_action( 'init', array('tif_register','reg_members') );
add_action( 'init', array('tif_register','reg_testinominals') );
/*******************************************************
*Add Filters
********************************************************
*/
// TinyMce features
add_filter( 'tiny_mce_before_init', 'all_tinymce' );



?>