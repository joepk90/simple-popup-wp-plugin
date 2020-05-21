<?php

if( !defined( 'ABSPATH' ) ) exit;

if( !function_exists( 'is_plugin_active' ) ) {

    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

}

/*
 * ACF Pro Activated Check
 * */
if( !is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
    function simple_popup_error_notice_acf_pro() {
        ?>
        <div class="error notice">
            <p><?php echo esc_html( SIMPLE_POPUP_PLUGIN_NAME . ': Please install, activate and enter the licence key for Advanced Custom Fields PRO' ); ?></p>
        </div>
        <?php
    }

//    add_action( 'admin_notices', 'simple_popup_error_notice_acf_pro' );
}

/*
 * Supapress it Activated Check
 * */
if( !is_plugin_active( 'supapress/supapress.php' ) ) {
    function simple_popup_error_notice_supapress() {
        ?>
        <div class="error notice">
            <p><?php echo esc_html( SIMPLE_POPUP_PLUGIN_NAME . ': Please install & activate Supapress' ); ?></p>
        </div>
        <?php
    }

//    add_action( 'admin_notices', 'simple_popup_error_notice_supapress' );
}
