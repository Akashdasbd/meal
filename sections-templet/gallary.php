<?php
global $section_id;
$mael_section_mata = get_post_meta($section_id, 'meal_gallary_section', true);

$mael_gallary_section_data = get_post($section_id);
$mael_gallary_titel = $mael_gallary_section_data->post_title;
$mael_gallary_contien = $mael_gallary_section_data->post_content;



?>


<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5"><?php echo esc_html($mael_gallary_titel); ?></h2>
                <?php echo (apply_filters('the_content', $mael_gallary_contien)) ?>
            </div>
        </div>
    </div>
</div>

<?php
$mael_gallarys = $mael_section_mata['meal_gallary_section_select'];


$meal_gallary_catg_arr = [];
foreach ($mael_gallarys as $mael_gallary) {

    $mael_gallary_cts = explode(',', $mael_gallary['meal_gallary_cat']);
    foreach ($mael_gallary_cts as $mael_gallary_cat_all) {

        $mael_gallary_cat_all_trim = trim($mael_gallary_cat_all);

        if (!in_array($mael_gallary_cat_all_trim, $meal_gallary_catg_arr)) {
            array_push($meal_gallary_catg_arr, $mael_gallary_cat_all_trim);
        }
    }
}


?>

<div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
    <ul class="simplefilter">

        <li class="filtr-controls active" data-filter="all"><?php _e("All", "meal") ?></li>
        <?php
        foreach ($meal_gallary_catg_arr as $meal_gallary_catg_s) {

          

        ?>
            <li class="filtr-controls" data-filter="<?php echo esc_html($meal_gallary_catg_s); ?>"><?php echo esc_html($meal_gallary_catg_s); ?></li>
        <?php
        }
        ?>

    </ul>
</div>


<div class="section bg-white pt-2 pb-2 text-center" data-aos="fade">
    <div class="container">
        <div class="filter-container">
            <?php
            foreach ($mael_gallarys as $mael_gallarys_item) {
                $meal_gallary_img = $mael_gallarys_item['meal_gallary_media']['id'];
                $meal_gallary_img_s = wp_get_attachment_image_src($meal_gallary_img, 'medium');

                $mael_gallary_cts_r = str_replace(",",", ",$mael_gallarys_item['meal_gallary_cat']) ;

   

                

               
            ?>
                <div class="filtr-item" data-category="<?php echo $mael_gallary_cts_r ?>" data-sort="value">
                    <img src="<?php echo esc_url($meal_gallary_img_s[0]) ?>" alt="sample" />
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>



