<?php 

// Requir functions

require_once get_theme_file_path("lib/csf/codestar-framework.php");
require_once get_theme_file_path("inc/matabox/section.php");
require_once get_theme_file_path("inc/matabox/page.php");
// Meal Theme Setup

function meal_theme_setup(){
    load_theme_textdomain( "meal", get_template_directory() . "/languages");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("automatic-feed-links");
    add_theme_support("html5", array(
        "search-form",
        "comment-form",
        "gallery",
        "caption",
        "comment-list"
    ));
}
add_action("after_setup_theme","meal_theme_setup");

// Meal Theme setup end ;

// Meal Theme enqueue Scripts

function meal_enqueue_scripts(){

    // Meal Theme enqueus CSS
    wp_enqueue_style("meal_bootstrap_css",get_theme_file_uri("/assets/css/bootstrap.css"),null,"3.5.2");
    wp_enqueue_style("meal_animate_css",get_theme_file_uri("/assets/css/animate.css"),null,"3.5.2");
    wp_enqueue_style("meal_owl_carousel_css",get_theme_file_uri("/assets/css/owl.carousel.min.css"),null,"3.5.2");
    wp_enqueue_style("meal_magnific_popup_css",get_theme_file_uri("/assets/css/magnific-popup.css"),null,"3.5.2");
    wp_enqueue_style("meal_aos_css",get_theme_file_uri("/assets/css/aos.css"),null,"3.5.2");
    wp_enqueue_style("meal_bootstrap-datepicker_css",get_theme_file_uri("/assets/css/bootstrap-datepicker.css"),null,"2.0");
    wp_enqueue_style("meal_jquery.timepicker_css",get_theme_file_uri("/assets/css/jquery.timepicker.css"),null,"2.0");
    wp_enqueue_style("meal_jquery_ionicons_css",get_theme_file_uri("/assets/fonts/ionicons/css/ionicons.min.css"),null,"2.0");
    wp_enqueue_style("meal_font_awesome_css",get_theme_file_uri("/assets/fonts/fontawesome/css/font-awesome.min.css"),null,"2.0");
    wp_enqueue_style("meal_flatiocon_css",get_theme_file_uri("/assets/fonts/flaticon/font/flaticon.css"),null,"2.0");
    wp_enqueue_style("meal_style_css",get_theme_file_uri("/assets/css/style.css"),null,"2.0");
    wp_enqueue_style("meal_style",get_stylesheet_uri());


    // Meal Theme enqueus Js

    wp_enqueue_script("meal_jquery-migrate",get_theme_file_uri("/assets/js/jquery-migrate-3.0.1.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_popper_js",get_theme_file_uri("/assets/js/popper.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_boootstrap_js",get_theme_file_uri("/assets/js/bootstrap.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_owlcarousel_js",get_theme_file_uri("/assets/js/owl.carousel.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_waypoints_js",get_theme_file_uri("/assets/js/jquery.waypoints.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_boots_datepicher_js",get_theme_file_uri("/assets/js/bootstrap-datepicker.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_timepicker_js",get_theme_file_uri("/assets/js/jquery.timepicker.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_stellar_js",get_theme_file_uri("/assets/js/jquery.stellar.min.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_easing_js",get_theme_file_uri("/assets/js/jquery.easing.1.3.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_aos_js",get_theme_file_uri("/assets/js/aos.js"),array('jquery'),"1.0",true);
    wp_enqueue_script("meal_main_js",get_theme_file_uri("/assets/js/main.js"),array('jquery'),"1.0",true);


}

add_action("wp_enqueue_scripts","meal_enqueue_scripts");

// Meal Theme enqueue scripts end;





