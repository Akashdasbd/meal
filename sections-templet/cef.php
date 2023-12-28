<?php
global $section_id;
$mael_section_mata = get_post_meta($section_id, 'meal_chef_section', true);

$mael_cef_section_data = get_post($section_id);
$mael_cef_titel = $mael_cef_section_data->post_title;
$mael_cef_contien = $mael_cef_section_data->post_content;



?>


<div class="section bg-white" data-aos="fade-up">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 section-heading text-center">
                <h2 class="heading mb-5"><?php echo esc_html($mael_cef_titel) ?></h2>
            </div>
            <div class="col-md-12 section-heading text-center">
                <p>
                    <?php echo apply_filters('the_content', $mael_cef_contien); ?>
                </p>
            </div>

        </div>
        <div class="row">


            <?php
            $maef_cefs = $mael_section_mata['meal_chef_section_select'];

            if ($maef_cefs) :

                foreach ($maef_cefs as $maef_cef) :


            ?>
                    <div class="col-md-6 pr-md-5 text-center mb-5">
                        <div class="ftco-38">
                            <div class="ftco-38-img">
                                <div class="ftco-38-header">
                                    <img src="<?php echo esc_url($maef_cef['image']['url']) ?>" alt="<?php echo esc_attr($maef_cef['name']) ?>">
                                    <h3 class="ftco-38-heading"><?php echo esc_html($maef_cef['name']) ?></h3>
                                    <p class="ftco-38-subheading"><?php echo esc_html($maef_cef['titel']) ?></p>
                                </div>
                                <div class="ftco-38-body">
                                    <p><?php echo esc_html($maef_cef['bio']); ?></p>

                                    <p>

                                        <?php
                                        $facebook = $maef_cef['socil_profile']['facebook'];
                                        if ($facebook) {
                                        ?>
                                            <a href="<?php echo esc_url($facebook); ?>" class="p-2"><i class="fa fa-facebook"></i></a>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        $x = $maef_cef['socil_profile']['x'];
                                        if ($x) {
                                        ?>
                                            <a href="<?php echo esc_url($x); ?>" class="p-2"><i class="fa fa-twitter"></i></a>
                                        <?php
                                        }
                                        ?>


                                        <?php
                                        $instagram = $maef_cef['socil_profile']['instagram'];
                                        if ($instagram) {
                                        ?>
                                            <a href="<?php echo esc_url($instagram); ?>" class="p-2"><i class="fa fa-instagram"></i></a>
                                        <?php
                                        }
                                        ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</div>