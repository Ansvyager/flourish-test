<?php

/**
 * Plugin Name: My Plugin
 * Description: A simple plugin with MVC structure for CRUD operations.
 * Version: 1.0
 * Author: Your Name
 */

// Don't allow direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin path
define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Include controller
require_once MY_PLUGIN_PATH . 'controllers/class-my-plugin-controller.php';

// Register activation hook
register_activation_hook(__FILE__, 'my_plugin_activate');
function my_plugin_activate()
{
    // Create database table or other setup tasks
    My_Plugin_Controller::create_table();
}

// Register admin menu
add_action('admin_menu', 'my_plugin_menu');
function my_plugin_menu()
{
    add_menu_page('My Plugin', 'My Plugin', 'manage_options', 'my-plugin', 'my_plugin_page');
}

function my_plugin_page()
{
    $controller = new My_Plugin_Controller();
    $controller->handle_request();
}

// Register shortcodes
add_action('init', 'register_my_plugin_shortcodes');
function register_my_plugin_shortcodes()
{
    add_shortcode('my_plugin_published_items', 'my_plugin_published_items_shortcode');
}

function my_plugin_published_items_shortcode()
{
    ob_start();
    $controller = new My_Plugin_Controller();
    $controller->show_published_items();
    return ob_get_clean();
}
