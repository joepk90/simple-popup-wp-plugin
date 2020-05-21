<?php

if (!defined('ABSPATH')) exit;

// TODO this logic needs to relate to the Wordpress
// A new class will probably be required here.
// This is where we can translate post data to popups...

Simple_Popup::enqueue_scripts();

function render_simple_popups() {
    ?>

    <div class="simple-popups">

    <?php

    // allows for new popups to be added externally before popups from the WP DB
    do_action('simple_popups_before_rendered_popups');


    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'simple-popup'
    );

    $popups = new WP_Query($args);

    if($popups->have_posts()):?>

        <?php while( $popups->have_posts() ) : $popups->the_post();

            $data = array(
                'title' => get_the_title(),
                'button-text' => 'Click Me',
//    'modifier-class' => '',
//    'js-event-class' => '',
            );

            $cookie_popup = new Simple_Popup($data);
            echo $cookie_popup->render_popup(get_the_content());

        endwhile; ?>

   <?php endif;

   wp_reset_query();

    // allows for new popups to be added externally after popups from the WP DB
    do_action('simple_popups_after_rendered_popups');

    ?>

    </div>

    <?php

}


add_action('wp_footer', 'render_simple_popups');
