<?php
if( !defined( 'ABSPATH' ) ) exit;
/**
 *
 * @package           Simple_Popup_Plugin
 *
 * @wordpress-plugin
 * Plugin Name: Simple Popup
 * Plugin URI: https://www.supadu.com/
 * Description: Plugin to manage Simple Popup Dependancy.
 * Version:           1.0.0
 * Author:            Supadu
 * Author URI:        https://www.supadu.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       supadu-simple-popup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if( !defined( 'WPINC' ) ) die;

define('SIMPLE_POPUP_PLUGIN_NAME', 'Simple Popup');

define( 'SIMPLE_POPUP_VERSION', '1.0.0' );

define( 'SIMPLE_POPUP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

define( 'SIMPLE_POPUP_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );

require __DIR__ . '/components/components.php';
require __DIR__ . '/functions/functions.php';
