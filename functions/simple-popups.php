<?php

if (!defined('ABSPATH')) exit;

// TODO this logic needs to relate to the Wordpress
// A new class will probably be required here.
// This is where we can translate post data to popups...

function render_simple_popups() {

    $data = array(
        'title' => 'Popup Title',
        'button-text' => 'Click Me',
//    'modifier-class' => '',
//    'js-event-class' => '',
    );

    $cookie_popup = new Simple_Popup($data);
    echo $cookie_popup->render_popup('<span>Popup content</span>');

}


add_action('wp_footer', 'render_simple_popups');
