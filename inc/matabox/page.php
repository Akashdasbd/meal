<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'meal_page_section';
  
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => __( 'Meal page section', 'meal'),
      'post_type' => 'page',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => __('Meal page sectin','meal'),
      'fields' => array(
  
        //
        // A Checkbooxes field

        array(
            'id'        => 'meal_page_section_select',
            'type'      => 'group',
            'title'     => __( 'Meal page section', 'meal'),
            'fields'    => array(

              array(
                'id'          => 'meal_section_select',
                'type'        => 'select',
                'title'       => __( 'Select page section', 'meal'),
                'options'     => 'post',
                'query_args'  => array(
                  'posts_per_page' => -1 ,
                  'post_type' => 'section',
                )
                
              ),
            ),
          ),
          
  
      )
    ) );

  
  }
  