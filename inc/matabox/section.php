<?php 

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'meal_section';
  
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => 'Section mata box',
      'post_type' => 'section',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Section Info',
      'fields' => array(
  
        //
        // A Checkbooxes field

        array(
            'id'         => 'select_section',
            'type'       => 'Select',
            'title'      => __( 'Select Section ', "meal" ),
            'options'    => array(
              'banner' => __( 'banner', 'meal'),
              'best-food' => __( 'Best food', 'meal' ),
              'gallary' => __( 'Gallary', 'meal'),
              'chef'    =>__( "Chef", 'meal'),
              'menu'    =>__( 'Menu', 'meal' ),
              'services' =>__( 'Services', 'meal' ),
              'reservation'  =>__( 'Reservation', 'meal'),
              'testimonia'   =>__( 'Testimonia', 'meal'),
              'contact'   =>__( 'Contact','meal')
            ),
            
          ),
  
      )
    ) );

  
  }
  