<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings      = array(
  'menu_title' => 'TIF OPTIONS',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'tif-framework',
  'ajax_save'  => false,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'Getting Started',
  'icon'   => 'fa fa-bookmark'
);
// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general',
  'title'       => 'General',
  'icon'        => 'fa fa-hand-o-right',
  'fields'      => array(

    // begin: a field
        array(
          'id'                 => 'tif_opt_theme_layout',
          'type'               => 'select',
          'title'              => 'Theme layout',
          'desc'               => 'Choose your theme layout compatiable with your website',
          'options'            => array(
            'fullwidth'        => 'Full Width',
            'blocked'         => 'Blocked',
            'framed'           => 'Framed',
          ),
          'class'              => 'chosen',
          'default'     => 'fullwidth',
        ),
    // end: a field

      array(
        'id'        => 'tif_opt_favicon',
        'type'      => 'image',
        'title'     => 'Favicon',
        'add_title' => 'Add Favicon',
      ),
    array(
      'id'      => 'tif_opt_container_size',
      'type'    => 'number',
      'title'   => 'Custom Theme Width',
      'default' => '960',
      'after'   => ' <i class="cs-text-muted">Default: 960px</i>',
    ),

    array(
      'id'      => 'tif_opt_page_comments',
      'type'    => 'switcher',
      'title'   => 'Page Comments',
      'label'   => 'Enable/Disable page comments',
      'default' => false,
    ),
    array(
        'type'    => 'heading',
        'content' => 'Theme Animations',
      ),
    array(
      'id'      => 'tif_opt_animation',
      'type'    => 'switcher',
      'title'   => 'Animations',
      'label'   => 'Enable/Disable Animations',
      'default' => true,
    ),

  ), // end: fields
);

// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[]   = array(
  'name'     => 'layouts',
  'title'    => 'Theme Layout',
  'icon'     => 'fa fa-credit-card',
  'sections' => array(

    // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'header',
      'title'     => 'Header',
      'icon'      => 'fa fa-check',

      // begin: fields
      'fields'    => array(

        // begin: a field
        array(
          'id'                 => 'tif_opt_logo_type',
          'type'               => 'select',
          'title'              => 'Logo Type',
          'desc'               => 'Choose logo type compatiable with your website',
          'options'            => array(
            'image'        => 'Image',
            'text'         => 'Text',
          ),
          'class'              => 'chosen',
          'default'     => 'image',
        ),
        // end: a field

        array(
          'id'    => 'tif_opt_logo_text',
          'type'  => 'text',
          'title' => 'Logo Text',
          'desc'  => 'Insert Logo Text.',
         'dependency' => array( 'tif_opt_logo_type', '==', 'text' ) // dependency rule
        ),

      array(
        'id'        => 'tif_opt_logo_image',
        'type'      => 'image',
        'title'     => 'Logo Image',
        'add_title' => 'Add Logo',
         'dependency' => array( 'tif_opt_logo_type', '==', 'image' ) // dependency rule
      ),
      array(
        'type'    => 'heading',
        'content' => 'Header Top Bar',
      ),
      array(
          'id'    => 'tif_opt_callout_phone',
          'type'  => 'text',
          'title' => 'Phone Number',
          'desc'  => 'Insert Company Phone Number.',
        ),
      array(
          'id'    => 'tif_opt_callout_email',
          'type'  => 'text',
          'title' => 'Email Address',
          'desc'  => 'Insert Company Email Adress.',
        ),
      array(
        'type'    => 'heading',
        'content' => 'Header Banner',
      ),
     array(
        'id'        => 'tif_opt_banner_image',
        'type'      => 'image',
        'title'     => 'Banner Image',
        'add_title' => 'Add Banner',
      ),
   
      ), // end: fields

    ), // end: text options

    // -----------------------------
    // begin: textarea options     -
    // -----------------------------
    array(
      'name'      => 'footer',
      'title'     => 'Footer',
      'icon'      => 'fa fa-check',
      'fields'    => array(
      array(
        'id'      => 'tif_opt_footer_menu',
        'type'    => 'switcher',
        'title'   => 'Footer Menus',
        'label'   => 'Enable/Disable footer Menus',
      ),
      array(
        'id'      => 'tif_opt_gototop',
        'type'    => 'switcher',
        'title'   => 'Go to Top',
        'label'   => 'Enable/Disable GotoTop',
        'default' => true,
      ),
        array(
          'id'    => 'tif_opt_footer_text',
          'type'  => 'text',
          'title' => 'Footer Copyright Text',
          'default' => 'Copyright &copy; - 2015 Techinflux.com',
        ),       

      ),

    ), // end: textarea options
    array(
      'name'      => 'single',
      'title'     => 'Single',
      'icon'      => 'fa fa-check',
      'fields'    => array(
    array(
        'id'      => 'tif_opt_breakingnews',
        'type'    => 'switcher',
        'title'   => 'Breaking News',
        'label'   => 'Enable/Disable Breaking News.',
        'default' => false,
      ),
      array(
        'id'      => 'tif_opt_meta',
        'type'    => 'switcher',
        'title'   => 'Post Meta',
        'label'   => 'Enable/Disable Post Meta.',
        'default' => true,
      ),
      array(
        'id'      => 'tif_opt_meta_categories',
        'type'    => 'switcher',
        'title'   => 'Categories Meta',
        'label'   => 'Enable/Disable Categories Meta.',
        'default' => true,
      ),
      array(
        'id'      => 'tif_opt_meta_tags',
        'type'    => 'switcher',
        'title'   => 'Tags Meta',
        'label'   => 'Enable/Disable Tags Meta.',
        'default' => true,
      ),   
      array(
        'id'      => 'tif_opt_single_share',
        'type'    => 'switcher',
        'title'   => 'Share Buttons',
        'label'   => 'Enable/Disable Share buttons.',
        'default' => true,
      ),
      array(
        'id'      => 'tif_opt_relatedposts',
        'type'    => 'switcher',
        'title'   => 'Related Posts',
        'label'   => 'Enable/Disable Related Posts',
        'default' => true,
      ),   

      ),  
  ),
),
);


// social medias 
$options[]   = array(
  'name'     => 'sociallinks',
  'title'    => 'Social Media',
  'icon'     => 'fa fa-twitter',
  'fields'   => array(
    
        array(
          'id'    => 'tif_opt_facebook_url',
          'type'  => 'text',
          'title' => 'Facebook Page Link',
          'default' => '#',
        ), 
        array(
          'id'    => 'tif_opt_twitter_url',
          'type'  => 'text',
          'title' => 'Twitter Profile Link',
          'default' => '#',
        ), 
        array(
          'id'    => 'tif_opt_linkedin_url',
          'type'  => 'text',
          'title' => 'LinkedIn Profile Link',
          'default' => '#',
        ), 
        array(
          'id'    => 'tif_opt_google_url',
          'type'  => 'text',
          'title' => 'Google+ Profile Link',
          'default' => '#',
        ), 
        array(
          'id'    => 'tif_opt_youtube_url',
          'type'  => 'text',
          'title' => 'Youtube channel Link',
          'default' => '#',
        ), 
        array(
          'id'    => 'tif_opt_instagram_url',
          'type'  => 'text',
          'title' => 'Instagram Profile Link',
          'default' => '#',
        ), 
        array(
          'id'    => 'tif_opt_skype_url',
          'type'  => 'text',
          'title' => 'SKype profile Link',
          'default' => '#',
        ), 
  )
);


// ------------------------------
// Colors                       -
// ------------------------------
$options[]   = array(
  'name'     => 'style',
  'title'    => 'Style',
  'icon'     => 'fa fa-leaf',
  'fields'   => array(
    array(
      'id'      => 'tif_opt_ed_style',
      'type'    => 'switcher',
      'title'   => 'Custom Style',
      'desc'    => 'Enable custom style if you want to customize website your way.',
      'label'   => 'Enable/Disable custom Styling.',
    ),

    array(
      'type'    => 'heading',
      'content' => 'Header Styling.',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'id'      => 'tif_opt_menu_bg',
      'type'    => 'color_picker',
      'title'   => 'Menu Wrapper Background Color',
      'desc'  => 'Choose Menu Background color.',
      'default' => '#212B34',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'id'      => 'tif_opt_menu_hover',
      'type'    => 'color_picker',
      'title'   => 'Menu hover Color',
      'desc'  => 'Choose Menu hovering color.',
      'default' => '#7f8c8d',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'id'      => 'tif_opt_header_bg',
      'type'    => 'color_picker',
      'title'   => 'Header Background Color',
      'desc'  => 'Choose Header Background color.',
      'default' => '#d3d9de',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'id'      => 'tif_opt_header_title_color',
      'type'    => 'color_picker',
      'title'   => 'Header Title Color',
      'desc'  => 'Choose Header title text color.',
      'default' => '#27ae60',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'type'    => 'heading',
      'content' => 'Footer Styling.',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'id'      => 'tif_opt_footer_bg',
      'type'    => 'color_picker',
      'title'   => 'Footer background Color',
      'desc'  => 'Choose footer background color',
      'default' => '#1A1A1A',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    array(
      'id'      => 'tif_opt_footer_text_color',
      'type'    => 'color_picker',
      'title'   => 'Footer Text Color',
      'desc'  => 'Choose footer text color',
      'default' => '#DAD9D9',
      'dependency' => array( 'tif_opt_ed_style', '==', '1' ), // dependency rule
    ),
    

  )
);

// social medias 
$options[]   = array(
  'name'     => 'typography',
  'title'    => 'typography',
  'icon'     => 'fa fa-text-width',
  'fields'   => array(
    array(
      'id'      => 'tif_opt_ed_typography',
      'type'    => 'switcher',
      'title'   => 'Custom Typography',
      'label'   => 'Enable/Disable custom Typography.',
    ),
// Typography without Chosen and Variant
array(
  'id'        => 'tif_opt_body_font_family',
  'type'      => 'typography',
  'title'     => 'Body Font',
  'dependency' => array( 'tif_opt_ed_typography', '==', '1' ), // dependency rule
  'default'   => array(
    'family'  => 'Titillium Web',
    'variant' => 'Regular',
    'font'    => 'google', // this is helper for output
  ),
),

  )
);

// Advance
$options[]   = array(
  'name'     => 'advance',
  'title'    => 'Advance',
  'icon'     => 'fa fa-love-o',
  'fields'   => array(

      array(
        'id'        => 'tif_opt_admin_login_logo',
        'type'      => 'image',
        'title'     => 'Login Page Logo',
        'add_title' => 'Add Logo',
      ),
      array(
        'id'        => 'tif_opt_gavatar',
        'type'      => 'image',
        'title'     => 'Custom Gavatar',
        'add_title' => 'Add Gavatar',
      ),

  )
);


// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-folder',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_3',
  'title'  => 'Others',
  'icon'   => 'fa fa-gift'
);

// ------------------------------
// About us                       -
// ------------------------------
$options[]   = array(
  'name'     => 'donate_section',
  'title'    => 'About Us',
  'icon'     => 'fa fa-heart',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'TechInflux!'
    ),

    array(
      'type'    => 'content',
      'content' => 'TechInflux is a web design and web development community which build wordpress themes and plugins.',
    ),


  )
);


CSFramework::instance( $settings, $options );
