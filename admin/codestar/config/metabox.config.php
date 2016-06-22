<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'tif_page_area',
  'title'     => 'Drag and Drop Page Builder',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // begin: a section
    array(
      'name'  => 'section_1',
      'title' => 'Template Setting',
      'icon'  => 'fa fa-desktop',

      // begin: fields
      'fields' => array(
// Drag and Drop
        array(
          'id'    => 'tif_ed_slider',
          'type'  => 'switcher',
          'title' => 'Enable / Disable Slider',
          'label' => 'Enable Slider for Custom page builder',
          'default' => false,

        ),
        array(
          'id'    => 'tif_ed_breakingnews',
          'type'  => 'switcher',
          'title' => 'Enable / Disable Breaking news',
          'label' => 'Disable Breaking News for Custom page builder',
          'default' => false,

        ),
        array(
          'id'    => 'tif_ed_page_builder',
          'type'  => 'switcher',
          'title' => 'Enable / Disable Page Builder',
          'label' => 'If page builder is disabled, Modification in other Section will not create changes in theme.',

        ),      
           array(
          'id'              => 'area_dragndrop',
          'type'            => 'group',
          'title'           => 'Areas Drag And drop',
          'dependency'   => array( 'tif_ed_page_builder', '==', 'true'),
          'desc'            => 'Open tab and select the field you want to place for the particular place.  Use drag and drop function to place areas in right order. Click "Remove" to remove that area. ',
          'button_title'    => 'Add New Area',
          'accordion_title' => ' (*_*) ',
          'fields'          => array(
            array(
              'id'       => 'select_areas',
              'type'     => 'select',
              'desc'    => 'Choose the area to be displayed in this position.',
              'title'   => 'Area :',
              'options'  => array(
                'features'  => 'Features ',
                'activities'  => 'Latest Activities',
                'gallery'  => 'Gallery',
                'partners'  => 'Partners ',
                'members'   => 'Members',
                'testinominals' => 'Testinominals'
                ),
              'default'  => 'latestactivities',
            ),


          )
        ),

// END of drag and drop

      ), // end: fields
    ), // end: a section

  ),
);

$options[]    = array(
  'id'        => 'tif_page_builder',
  'title'     => 'Page Builder',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
// begin: a section
    array(
      'name'  => 'section_2',
      'title' => 'Features Area',
      'icon'  => 'fa fa-user-plus',
      'fields' => array(

        array(
            'id'      => 'features_area_title', 
            'type'    => 'text',
            'title'   => 'Title For Feature Area',
            'default' => 'Our Features',
          ),
          array(
          'id'              => 'features_single',
          'type'            => 'group',
          'title'           => 'Feature',
          'desc'            => ' ',
          'button_title'    => 'Add New',
          'accordion_title' => ' (*_*) ',
          'fields'          => array(
                array(
                'id'      => 'feature_title', 
                'type'    => 'text',
                'title'   => 'Feature Title',
                'default' => 'Database Management.',
              ),
                array(
                'id'      => 'feature_desc', 
                'type'    => 'text',
                'title'   => 'Feature Description',
              ),
                array(
                'id'      => 'feature_icon', 
                'type'    => 'icon',
                'title'   => 'Feature Icon',
              ),
            )
          ),
        
      ),
    ),
    // end: a section
// begin: a section
    array(
      'name'  => 'section_3',
      'title' => 'Activities Area',
      'icon'  => 'fa fa-server',
      'fields' => array(
        array(
                'id'      => 'activity_title', 
                'type'    => 'text',
                'title'   => 'Activity Area Title',
                'default' => 'Latest Activities',
              ),
          array(
            'id'      => 'activity_size', 
            'type'    => 'number',
            'title'   => 'Row Size',
            'after' => 'Default is 3',
            'default' => 3,
          ),
           array(
          'id'              => 'activity_dragndrop',
          'type'            => 'group',
          'title'           => 'Activity Drag And drop',
          'desc'            => 'Open tab and select the field you want to place for the particular place.  Use drag and drop function to place areas in right order. Click "Remove" to remove that area. ',
          'button_title'    => 'Add New Area',
          'accordion_title' => ' (*_*) ',
          'fields'          => array(
            array(
              'id'       => 'select_activity',
              'type'     => 'select',
              'desc'    => 'Choose the activity to be displayed in this position.',
              'title'   => 'Area :',
              'options'  => array(
                'latestposts'  => 'Latest Posts 1',
                'latestposts2'  => 'Latest Posts 2',
                'latestpublications'  => 'Publications',
                ),
              'default'  => 'latestposts',
            ),
            array(
                'id'      => 'posts_title', 
                'type'    => 'text',
                'title'   => 'Posts Title',
                'default' => 'Latest News from Apple',
                'dependency'   => array( 'select_activity', '==', 'latestposts'),
              ),
          array(
            'id'             => 'posts_category',
            'type'           => 'select',
            'title'          => 'Select Categories',
            'attributes'  => array(
                 'multiple' => 'multiple',
               ),
            'options'        => 'categories',
            'query_args'     => array(
              'orderby'      => 'name',
              'order'        => 'ASC',
            ),
            'dependency'   => array( 'select_activity', '==', 'latestposts'),
         ),
         array(
            'id'      => 'posts_count', 
            'type'    => 'number',
            'title'   => 'Posts Number',
            'after' => 'Default is 5',
            'default' => 5,
            'dependency'   => array( 'select_activity', '==', 'latestposts'),
          ),
          array(
            'id'      => 'posts_size', 
            'type'    => 'number',
            'title'   => 'Size In a row',
            'after' => 'Default is 2',
            'default' => 2,
            'dependency'   => array( 'select_activity', '==', 'latestposts'),
          ),
          array(
            'id'      => 'post_size', 
            'type'    => 'number',
            'title'   => 'posts columns',
            'after' => 'Default is 2',
            'default' => 2,
            'dependency'   => array( 'select_activity', '==', 'latestposts'),
          ),
          array(
                'id'      => 'posts_title2', 
                'type'    => 'text',
                'title'   => 'Posts Title',
                'default' => 'Latest News from Apple',
                'dependency'   => array( 'select_activity', '==', 'latestposts2'),
              ),
          array(
            'id'             => 'posts_category2',
            'type'           => 'select',
            'title'          => 'Select Categories',
            'options'        => 'categories',
            'attributes'  => array(
                 'multiple' => 'multiple',
               ),
            'query_args'     => array(
              'orderby'      => 'name',
              'order'        => 'ASC',
            ),
            'dependency'   => array( 'select_activity', '==', 'latestposts2'),
         ),
         array(
            'id'      => 'posts_count2', 
            'type'    => 'number',
            'title'   => 'Posts Number',
            'after' => 'Default is 5',
            'default' => 5,
            'dependency'   => array( 'select_activity', '==', 'latestposts2'),
          ),
        array(
            'id'      => 'posts_size2', 
            'type'    => 'number',
            'title'   => 'Size In a row',
            'after' => 'Default is 1',
            'default' => 1,
            'dependency'   => array( 'select_activity', '==', 'latestposts2'),
          ),
          array(
                'id'      => 'publications_title', 
                'type'    => 'text',
                'title'   => 'Publication Title',
                'default' => 'Latest Publications',
                'dependency'   => array( 'select_activity', '==', 'latestpublications'),
              ),
        array(
            'id'      => 'publications_count', 
            'type'    => 'number',
            'title'   => 'Posts Number',
            'default' => 'Number of Publications.',
            'after' => 'Default is 5',
            'default' => 5,
            'dependency'   => array( 'select_activity', '==', 'latestpublications'),
          ),
       array(
            'id'      => 'publications_size', 
            'type'    => 'number',
            'title'   => 'Size In a row',
            'after' => 'Default is 1',
            'default' => 1,
            'dependency'   => array( 'select_activity', '==', 'latestpublications'),
          ),

        ),
      ),


      ),
    ),
    // end: a section
// begin: a section
    array(
      'name'  => 'section_4',
      'title' => 'Gallery Area',
      'icon'  => 'fa fa-server',
      'fields' => array(
        array(
            'id'      => 'gallery_area_title', 
            'type'    => 'text',
            'title'   => 'Title For Gallery Area',
            'default' => 'Our Gallery',
          ),
         array(
            'id'      => 'gallery_image_in_row', 
            'type'    => 'number',
            'title'   => 'Gallery Image in row',
            'default' => 'Number of gallery Images in a row.',
            'after' => 'Default is 4',
            'default' => 4,
          ),
         array(
            'id'      => 'gallery_images_count', 
            'type'    => 'number',
            'title'   => 'Gallery Image number',
            'default' => 'Number of gallery Images.',
            'after' => 'Default is 8',
            'default' => 8,
          ),
        
      ),
    ),
    // end: a section

// begin: a section
    array(
      'name'  => 'section_6',
      'title' => 'Partners',
      'icon'  => 'fa fa-user-plus',
      'fields' => array(

        array(
            'id'      => 'partners_area_title', 
            'type'    => 'text',
            'title'   => 'Title For Partners Area',
            'default' => 'Our Partners',
          ),
          array(
          'id'              => 'partner_single',
          'type'            => 'group',
          'title'           => 'Partner',
          'desc'            => ' ',
          'button_title'    => 'Add New',
          'accordion_title' => ' (*_*) ',
          'fields'          => array(
                array(
                'id'      => 'partner_image', 
                'type'    => 'image',
                'title'   => 'Partner Image',
              ),
            )
          ),
        
      ),
    ),
    // end: a section
// begin: a section
    array(
      'name'  => 'section_7',
      'title' => 'Members Area',
      'icon'  => 'fa fa-user-plus',
      'fields' => array(
      array(
            'id'      => 'members_row', 
            'type'    => 'number',
            'title'   => 'Members in a row',
            'after' => 'Default is 4',
            'default' => 4,
          ),        
      ),
    ),
    // end: a section
  ),
);


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'custom_publication_options',
  'title'     => 'Custom Post Options',
  'post_type' => 'publications',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'publication_options',
      'fields' => array(
        array(
          'id'    => 'publication_author',
          'type'  => 'text',
          'title' => 'publication Author',
        ),
        array(
          'id'    => 'publication_attachment_link',
          'type'  => 'text',
          'title' => 'Attachment Link (pdf)',
        ),
      ),
    ),

  ),
);

$options[]    = array(
  'id'        => 'custom_members_options',
  'title'     => 'Social Links',
  'post_type' => 'members',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'publication_options',
      'fields' => array(
        array(
          'id'    => 'members_facebook_url',
          'type'  => 'text',
          'title' => 'Facebook Profile Link',
        ), 
        array(
          'id'    => 'members_twitter_url',
          'type'  => 'text',
          'title' => 'Twitter Profile Link',
        ), 
        array(
          'id'    => 'members_linkedin_url',
          'type'  => 'text',
          'title' => 'LinkedIn Profile Link',
        ), 
        array(
          'id'    => 'members_google_url',
          'type'  => 'text',
          'title' => 'Google+ Profile Link',
        ), 
        array(
          'id'    => 'members_skype_url',
          'type'  => 'text',
          'title' => 'Skype Link',
        ), 
        array(
          'id'    => 'members_instagram_url',
          'type'  => 'text',
          'title' => 'Instagram Profile Link',
        ), 
        array(
          'id'    => 'members_youtube_url',
          'type'  => 'text',
          'title' => 'Youtube Channel Link',
        ), 
      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
