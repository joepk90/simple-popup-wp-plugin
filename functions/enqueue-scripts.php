<?php

if( !defined( 'ABSPATH' ) ) exit;

function simple_popups_enqueue_scripts() {

    wp_enqueue_style('simple-popups', simple_popup_plugin_url('includes/css/style.css'), array(), SIMPLE_POPUP_VERSION, 'all');

//    wp_enqueue_script('simple-popups', simple_popup_plugin_url('includes/js/all.min.js'), array('jquery'), SIMPLE_POPUP_VERSION, true);


}

add_action( 'wp_enqueue_scripts', 'simple_popups_enqueue_scripts' );