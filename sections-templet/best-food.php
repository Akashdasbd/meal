<?php 
global $section_id ;
$mael_section_mata = get_post_meta($section_id,'meal_best_food_section',true);




$mael_banner_section_data = get_post($section_id);
$mael_bannar_titel = $mael_banner_section_data->post_title ;
$mael_bannar_contien = $mael_banner_section_data ->post_content ;



?>




<div class="section" data-aos="fade-up">
                    <div class="container">
                        <div class="row section-heading justify-content-center mb-5">
                            <div class="col-md-8 text-center">
                                <h2 class="heading mb-3"><?php echo esc_html($mael_bannar_titel) ;?></h2>
                                <p class="sub-heading mb-5"><?php echo wp_kses_post($mael_bannar_contien)?></p>
                            </div>
                        </div>
                        <div class="row">
                            
                            <?php 
                         
                            $meal_sectinon_food = $mael_section_mata['meal_best_food_section_select'];
                            $meal_section_food_one = get_post($meal_sectinon_food[0] ['meal_best_food_select']);
                            $meal_section_food_two = get_post($meal_sectinon_food [1]['meal_best_food_select']);
                            $meal_section_food_there = get_post($meal_sectinon_food [2]['meal_best_food_select']);
                            ?>
                            <div class="ftco-46">
                                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                                    <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_section_food_one,"medium"));?>"></div>
                                    <div class="ftco-46-text ftco-46-arrow-left">
                                        <h4 class="ftco-46-subheading"><?php echo food_cat_id($meal_section_food_there->ID)  ?></h4>
                                        <h3 class="ftco-46-heading"><?php echo esc_html($meal_section_food_there->post_title);?></h3>
                                        <p class="mb-5"><?php echo esc_html(wp_trim_words( $meal_section_food_there->post_content , 55));?>.</p>
                                        <p><a href="<?php echo get_the_permalink($meal_section_food_there)?>" class="btn-link"><?php _e( 'Learn More ', 'meal')?><span class="ion-android-arrow-forward"></span></a></p>
                                    </div>
                                    <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_section_food_two,"medium"));?>"></div>
                                </div>
                                <div class="ftco-46-row d-flex flex-column flex-lg-row">
                                    <div class="ftco-46-text ftco-46-arrow-right">
                                        <h4 class="ftco-46-subheading"><?php echo food_cat_id($meal_section_food_one->ID)  ?></h4>
                                        <h3 class="ftco-46-heading"><?php echo esc_html($meal_section_food_one->post_title);?></h3>
                                        <p class="mb-5"><?php echo esc_html(wp_trim_words( $meal_section_food_one->post_content , 55));?></p>
                                        <p><a href="<?php echo get_the_permalink($meal_section_food_one)?>" class="btn-link"><?php _e( 'Learn More ', 'meal')?><span class="ion-android-arrow-forward"></span></a></p>
                                    </div>
                                    <div class="ftco-46-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($meal_section_food_there,"medium"));?>"></div>
                                    <div class="ftco-46-text ftco-46-arrow-up">
                                        <h4 class="ftco-46-subheading"><?php echo food_cat_id($meal_section_food_two->ID)  ?></h4>
                                        <h3 class="ftco-46-heading"><?php echo esc_html($meal_section_food_two->post_title);?></h3>
                                        <p class="mb-5"><?php echo esc_html(wp_trim_words( $meal_section_food_two->post_content , 55));?></p>
                                        <p><a href="<?php echo get_the_permalink($meal_section_food_two)?>" class="btn-link"><?php _e( 'Learn More ', 'meal')?><span class="ion-android-arrow-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>