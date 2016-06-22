<?php 
/*******************************************************
*Register Functions
********************************************************
*/
class tif_register{
	// custom Post type registration
	public function reg_publicationlist() {
		$labels = array(
			'name'               => _x( 'Publications', 'post type general name', TIF_TD ),
			'singular_name'      => _x( 'Publication', 'post type singular name', TIF_TD ),
			'menu_name'          => _x( 'Publication', 'admin menu', TIF_TD ),
			'name_admin_bar'     => _x( 'Publication', 'add new on admin bar', TIF_TD ),
			'add_new'            => _x( 'Add New', 'Publication', TIF_TD ),
			'add_new_item'       => __( 'Add New Publication', TIF_TD ),
			'new_item'           => __( 'New Publication', TIF_TD ),
			'edit_item'          => __( 'Edit Publication', TIF_TD ),
			'view_item'          => __( 'View Publication', TIF_TD ),
			'all_items'          => __( 'All Publications', TIF_TD ),
			'search_items'       => __( 'Search Publications', TIF_TD ),
			'parent_item_colon'  => __( 'Parent Publications:', TIF_TD ),
			'not_found'          => __( 'No Publications found.', TIF_TD ),
			'not_found_in_trash' => __( 'No Publications found in Trash.', TIF_TD )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-book',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'publications' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 15,
			'supports'           => array( 'title', 'revisions', 'editor', 'thumbnail')
		);

		register_post_type( 'publications', $args );
	}

		public function reg_gallery() {
		$labels = array(
			'name'               => _x( 'gallery', 'post type general name', TIF_TD ),
			'singular_name'      => _x( 'gallery', 'post type singular name', TIF_TD ),
			'menu_name'          => _x( 'Gallery', 'admin menu', TIF_TD ),
			'name_admin_bar'     => _x( 'gallery', 'add new on admin bar', TIF_TD ),
			'add_new'            => _x( 'Add New', 'gallery', TIF_TD ),
			'add_new_item'       => __( 'Add New Gallery item', TIF_TD ),
			'new_item'           => __( 'New Item', TIF_TD ),
			'edit_item'          => __( 'Edit Gallery Item', TIF_TD ),
			'view_item'          => __( 'View Gallery Item', TIF_TD ),
			'all_items'          => __( 'All Galleries', TIF_TD ),
			'search_items'       => __( 'Search Galleries', TIF_TD ),
			'parent_item_colon'  => __( 'Parent Galleries:', TIF_TD ),
			'not_found'          => __( 'No Galleries found.', TIF_TD ),
			'not_found_in_trash' => __( 'No Galleries found in Trash.', TIF_TD )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-format-image',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'gallery' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array( 'title', 'revisions', 'thumbnail', 'editor' )
		);

		register_post_type( 'gallery', $args );
	}

		public function reg_members() {
		$labels = array(
			'name'               => _x( 'Members', 'post type general name', TIF_TD ),
			'singular_name'      => _x( 'Member', 'post type singular name', TIF_TD ),
			'menu_name'          => _x( 'Members', 'admin menu', TIF_TD ),
			'name_admin_bar'     => _x( 'Members', 'add new on admin bar', TIF_TD ),
			'add_new'            => _x( 'Add New', 'Members', TIF_TD ),
			'add_new_item'       => __( 'Add New Member', TIF_TD ),
			'new_item'           => __( 'New Member', TIF_TD ),
			'edit_item'          => __( 'Edit Member', TIF_TD ),
			'view_item'          => __( 'View Member', TIF_TD ),
			'all_items'          => __( 'All Members', TIF_TD ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-lightbulb',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'members' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array( 'title', 'thumbnail', 'editor' )
		);

		register_post_type( 'members', $args );
	}

		public function reg_testinominals() {
		$labels = array(
			'name'               => _x( 'Testinominals', 'post type general name', TIF_TD ),
			'singular_name'      => _x( 'Testinominal', 'post type singular name', TIF_TD ),
			'menu_name'          => _x( 'Testinominal', 'admin menu', TIF_TD ),
			'name_admin_bar'     => _x( 'Testinominals', 'add new on admin bar', TIF_TD ),
			'add_new'            => _x( 'Add New', 'Testinominal', TIF_TD ),
			'add_new_item'       => __( 'Add New Testinominal', TIF_TD ),
			'new_item'           => __( 'New Item', TIF_TD ),
			'edit_item'          => __( 'Edit Testinominal', TIF_TD ),
			'view_item'          => __( 'View Testinominal', TIF_TD ),
			'all_items'          => __( 'All Testinominals', TIF_TD ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-awards',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'testinominals' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array( 'title', 'editor' )
		);

		register_post_type( 'testinominals', $args );
	}
}
/*******************************************************
*Add Theme Supports
********************************************************
*/
// Adding theme supports
if( function_exists("add_theme_support")){
	add_theme_support("post-thumbnails");
	add_theme_support( "html5", array("comment-form", "search-form", "comment-list"),'title-tag' );
// add_theme_support( 'post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video') );
}
// adding all tinymce features
function all_tinymce( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}


/*******************************************************
*Theme Supports Registration
********************************************************
*/
if( function_exists("register_sidebar")){
	   /**
		* Creates a sidebar
		* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
		*/
		$rsidebar = array(
			'name'          => __( 'Right sidebar', 'Tif_text_domain' ),
			'id'            => 'rsidebar',
			'description'   => 'Place widgets for right sidebar',
			'class'         => '',
			'before_widget' => '<ul class="swidget">',
			'after_widget'  => '</ul>',
			'before_title'  => '<h2 class="swidgettitle">',
			'after_title'   => '</h2>'
		);
	
		register_sidebar( $rsidebar );
	
	
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$footer1 = array(
				'name'          => __( 'First Footer', 'Tif_text_domain' ),
				'id'            => 'first-footer',
				'description'   => 'Place your widgets for first footer',
				'class'         => '',
				'before_widget' => '<ul class="fwidget">',
				'after_widget'  => '</ul>',
				'before_title'  => '<h2 class="fwidgettitle">',
				'after_title'   => '</h2>'
			);
		
			register_sidebar( $footer1 );
		
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$footer2 = array(
				'name'          => __( 'Second footer', 'Tif_text_domain' ),
				'id'            => 'second-footer',
				'description'   => 'Place your widgets for Second footer',
				'class'         => '',
				'before_widget' => '<ul class="fwidget">',
				'after_widget'  => '</ul>',
				'before_title'  => '<h2 class="fwidgettitle">',
				'after_title'   => '</h2>'
			);
		
			register_sidebar( $footer2 );
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$footer3 = array(
				'name'          => __( 'Third footer', 'tif_text_domain' ),
				'id'            => 'third-footer',
				'description'   => 'Place your widgets for Third footer',
				'class'         => '',
				'before_widget' => '<ul class="fwidget">',
				'after_widget'  => '</ul>',
				'before_title'  => '<h2 class="fwidgettitle">',
				'after_title'   => '</h2>'
			);
		
			register_sidebar( $footer3 );
		
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$footer4 = array(
				'name'          => __( 'Fourth footer', 'Tif_text_domain' ),
				'id'            => 'fourth-footer',
				'description'   => 'Place your widgets for Fourth footer',
				'class'         => '',
				'before_widget' => '<ul class="fwidget">',
				'after_widget'  => '</ul>',
				'before_title'  => '<h2 class="fwidgettitle">',
				'after_title'   => '</h2>'
			);
		
			register_sidebar( $footer4 );
	}
	/*
	* End register sidebars
	*/
