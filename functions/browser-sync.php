<?php

if( !defined( 'ABSPATH' ) ) exit;

add_action( 'wp_footer', 'render_supapress_cart_html' );

function theme_render_browser_sync_script() {

    // BROWSERS_SYNC constant can be defined in supapress-cart-config.php
    if( defined( 'SUPAPRESS_CART_BROWSER_SYNC' ) ) :
        ?>

        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.5'><\/script>".replace("HOST", location.hostname));
            //]]></script>

    <?php
    endif;

}
