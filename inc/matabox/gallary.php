<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {


    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
      $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
  
    }

    if ('section' !=get_post_type($section_id)) {
      return $prefix ;
    }
  
   $section_mata = get_post_meta($section_id,'meal_section',true);

   if(isset($section_mata['meal_type'])){
    $section_type = $section_mata['meal_type'];
   }
   
  

  
  
   if ('gallary' != $section_type) {
      return $prefix;
   }
    //
    // Set a unique slug-like ID
    $prefix = 'meal_gallary_section';
  
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => __( 'Meal gallary Section', 'meal'),
      'post_type' => 'section',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => __('Meal gallary sectin','meal'),
      'fields' => array(
  
        //
        // A Checkbooxes field

        array(
            'id'        => 'meal_gallary_section_select',
            'type'      => 'group',
            'title'     => __( 'Meal gallary section', 'meal'),
            'fields'    => array(

              array(
                'id'      => 'meal_gallary_cat',
                'type'    => 'text',
                'title'   => __( 'Category Name', 'meal'),
                
              ),

              array(
                'id'    => 'meal_gallary_media',
                'type'  => 'media',
                'title'   => __( 'gallary Image', 'meal'),
              ),


            ),
          ),
          
  
      )
    ) );

  
  }
  