<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {



    
    // Set a unique slug-like ID
    $prefix = 'meal_page_banner_section';


    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
      $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
  
    }
  
   $section_mata = get_post_meta($section_id,'meal_section',true);

   if(isset($section_mata['meal_type'])){
    $section_type = $section_mata['meal_type'];
   }
   
  

  
  
   if ('banner' != $section_type) {
      return $prefix;
   }

  
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => __( 'Meal Banner page ', 'meal'),
      'post_type' => 'section',
      
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => __('Meal Banner page sectin','meal'),
      'fields' => array(
  
        //
        // A Checkbooxes field

        array(
            'id'    => 'meal_banner_bg',
            'type'  => 'media',
            'title' =>  __( 'Banner image', 'meal'),
          ),

        array(
            'id'      => 'meal_banner_button_text',
            'type'    => 'text',
            'title'   => __( 'Banner button text', 'meal'),
            'default' => 'Hello world'

          ),
          

          array(
            'id'      => 'meal_banner_button_link',
            'type'    => 'text',
            'title'   => __( 'Banner button link', 'meal'),
          ),
  
      )
    ) );

  
  }
  