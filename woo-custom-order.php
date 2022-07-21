<?php
/*
* Plugin Name: Woo Custom Order
* Plugin URI: https://the360sol.com
* Author: Zohaib Khan
* Author URI: https://the360sol.com
* Description: creating custom order
* Version: 1.0.0
* License: GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: woo-custom-order
*/

if (!defined('WPINC')) {
    die;
}

if (!defined('WPCO_PLUGIN_VERSION')) {
    define('WPCO_PLUGIN_VERSION', '1.0.0');
}

if (!defined('CO_PLUGIN_DIR')) {
    define('CO_PLUGIN_DIR', plugin_dir_url(__FILE__));
}

if (!function_exists('co_plugin_scripts')) {
    function co_plugin_scripts()
    {
        wp_enqueue_style('co-bootstrap-grid', 'https://cdn.jsdelivr.net/npm/bootstrap-3-grid@0.0.1/bootstrap-3-grid.css');
        wp_enqueue_style('co-style', CO_PLUGIN_DIR . 'assets/css/style.css');
        wp_enqueue_script('co-main-js', CO_PLUGIN_DIR . 'assets/js/main.js', 'jQuery', '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'co_plugin_scripts');
}

require plugin_dir_path( __FILE__ ). 'inc/core.php';
