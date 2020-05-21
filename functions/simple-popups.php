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

    $data = array(
        'title' => 'Popup Title',
        'button-text' => 'Click Me',
//    'modifier-class' => '',
//    'js-event-class' => '',
    );

    $cookie_popup = new Simple_Popup($data);
    echo $cookie_popup->render_popup('<span>Popup content</span>');

    
    // allows for new popups to be added externally after popups from the WP DB
    do_action('simple_popups_after_rendered_popups');

    ?>

    </div>

    <?php

}


add_action('wp_footer', 'render_simple_popups');
