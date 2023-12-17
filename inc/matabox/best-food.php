<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {


    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
      $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
  
    }
  
   $section_mata = get_post_meta($section_id,'meal_section',true);

   if(isset($section_mata['meal_type'])){
    $section_type = $section_mata['meal_type'];
   }
   
  

  
  
   if ('best-food' != $section_type) {
      return $prefix;
   }
    //
    // Set a unique slug-like ID
    $prefix = 'meal_best_food_section';
  
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => __( 'Meal Best food Section', 'meal'),
      'post_type' => 'section',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => __('Meal Best food sectin','meal'),
      'fields' => array(
  
        //
        // A Checkbooxes field

        array(
            'id'        => 'meal_best_food_section_select',
            'type'      => 'group',
            'title'     => __( 'Meal Best food section', 'meal'),
            'fields'    => array(


              array(
                'id'      => 'meal_best_food_name',
                'type'    => 'text',
                'title'   => __( 'Best food mane', 'meal'),
                'default' => 'Hello world.'
              ),

              array(
                'id'          => 'meal_best_food_select',
                'type'        => 'select',
                'title'       => __( 'Select Best Food', 'meal'),
                'options'     => 'post',
                'query_args'  => array(
                  'posts_per_page' => -1 ,
                  'post_type' => 'recipe',
                )
                
              ),
            ),
          ),
          
  
      )
    ) );

  
  }
  