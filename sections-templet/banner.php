<?php 
global $section_id ;
$mael_section_mata = get_post_meta($section_id,'meal_page_banner_section',true);
$mael_bannar_img = get_template_directory_uri().'/assets/images/slider-1.jpg';
if (isset($mael_section_mata['meal_banner_bg'])) {

    $mael_bannar_img_id = $mael_section_mata['meal_banner_bg']["id"];
    $mael_bannar_img = wp_get_attachment_image_url($mael_bannar_img_id , 'full');
    
}

$mael_banner_section_data = get_post($section_id);
$mael_bannar_titel = $mael_banner_section_data->post_title ;
$mael_bannar_contien = $mael_banner_section_data ->post_content ;



?>


<div class="cover_1 overlay bg-light">
    <div class="img_bg" style="background-image: url(<?php echo esc_url($mael_bannar_img);?>" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up">
                    <h2 class="heading mb-5"><?php echo esc_html($mael_bannar_titel);?></h2>
                    <p><a href="<?php echo esc_url($mael_section_mata['meal_banner_button_link'])?>" class="smoothscroll btn btn-outline-white px-5 py-3"><?php echo esc_html($mael_section_mata['meal_banner_button_text'])?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

