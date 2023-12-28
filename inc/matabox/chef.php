<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {


  $section_id = 0;
  if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
    $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
  }


  if ('section' != get_post_type($section_id)) {
    return $prefix ;
  }

  $section_mata = get_post_meta($section_id, 'meal_section', true);

  if (isset($section_mata['meal_type'])) {
    $section_type = $section_mata['meal_type'];
  }





  if ('chef' != $section_type) {
    return $prefix;
  }
  //
  // Set a unique slug-like ID
  $prefix = 'meal_chef_section';

  //
  // Create a metabox
  CSF::createMetabox($prefix, array(
    'title'     => __('Meal Chef Section', 'meal'),
    'post_type' => 'section',
  ));

  //
  // Create a section
  CSF::createSection($prefix, array(
    'title'  => __('Meal Chef sectin', 'meal'),
    'fields' => array(

      //
      // A Checkbooxes field

      array(
        'id'        => 'meal_chef_section_select',
        'type'      => 'group',
        'title'     => __('Meal Chef section', 'meal'),
        'fields'    => array(

          array(
            'id'      => 'name',
            'type'    => 'text',
            'title'   => __('Name', 'meal'),

          ),

          array(
            'id'      => 'titel',
            'type'    => 'text',
            'title'   => __('Title', 'meal'),

          ),

          array(
            'id'    => 'image',
            'type'  => 'media',
            'title'   => __('Image', 'meal'),
          ),

          array(
            'id'      => 'bio',
            'type'    => 'textarea',
            'title'   =>  __('Bio', 'meal'),
            
          ),


          array(
            'id'     => 'socil_profile',
            'type'   => 'fieldset',
            'title'  =>  __('Socil Profile link', 'meal'),
            'fields' => array(
              array(
                'id'    => 'facebook',
                'type'  => 'text',
                'title' => __('Facebook', 'meal'),
              ),
              array(
                'id'    => 'x',
                'type'  => 'text',
                'title' => __('X', 'meal'),
              ),
              array(
                'id'    => 'instagram',
                'type'  => 'text',
                'title' => __('Instagram', 'meal'),
              ),
            ),
          ),


        ),
      ),


    )
  ));
}
