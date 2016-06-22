<?php
// Defining Constants
define("TIF_VERSION", "1.0");
define("ADMIN_TD", "tif-admin");
define("TIF_TD", "tif-theme");
define("TIF_DIR", get_template_directory() );
define("TIF_URI", get_template_directory_uri() );
define("FUNC_DIR", get_template_directory().'/functions' );
define("LIB_DIR", get_template_directory().'/lib' );
define("LIB_URI", get_template_directory_uri().'/lib' );
define("ADMIN_DIR", get_template_directory().'/admin' );
define("ADMIN_URI", get_template_directory_uri().'/admin' );
define("IMG_URI", get_template_directory_uri()."/images");
// Including all Functions
require_once( TIF_DIR."/functions/tif-functions.php" );
?>