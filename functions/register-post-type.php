<?php

if( !defined( 'ABSPATH' ) ) exit;

function simple_popup_register_post_type() {

    register_post_type(
        'simple-popup', array(
            'labels'            => array( 'name' => __( 'Simple Popups' ), 'singular_name' => __( 'Simple Popup' ) ),
            'public'            => false,
            'hierarchical'      => false,
            'has_archive'       => false,
            'show_in_rest'      => false,
            'show_ui'           => true,
            'menu_icon'         => 'dashicons-format-status',
            'show_in_nav_menus' => false,
            'supports'          => array( 'title', 'editor' )
        )
    );
}

add_action( 'init', 'simple_popup_register_post_type' );
