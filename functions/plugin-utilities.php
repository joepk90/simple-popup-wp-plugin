<?php

if( !defined( 'ABSPATH' ) ) exit;

function simple_popup_plugin_url( $path = '' ) {
    $url = untrailingslashit( SIMPLE_POPUP_PLUGIN_URL );

    if ( ! empty( $path ) && is_string( $path ) && false === strpos( $path, '..' ) ) {
        $url .= '/' . ltrim( $path, '/' );
    }

    return $url;
}
