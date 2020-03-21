<?php
/**
 * Plugin Name: Translations Management
 * Plugin URI: https://github.com/ivantxo/yallichiy
 * Description: This plugin allows to manage translation requests
 * Version: 1.0
 * Author: Sonia Gerena, Ivan Ramirez
 **/

require_once(plugin_dir_path(__FILE__ ) . 'TranslationsManagement.php');

register_activation_hook(__FILE__, ['TranslationsManagement', 'plugin_activated']);

// How to run a function once
//if ($TranslationsManagement->runCustomFunction('createRoles')) {
//    error_log('running script');
//    add_action('init', 'createRoles');
//}
//
//function createRoles()
//{
//    error_log('CreateRoles Function');
//    add_role('client', __( 'Client' ), array('read' => true, 'edit_posts' => true));
//}
//$TranslationsManagement->clearRunCustomFunction('createRoles');


add_action('wp_enqueue_scripts', 'add_js');
function add_js() {
    wp_register_script(
        'admin_management_script',
        plugin_dir_url( __FILE__ ) . 'assets/translationsManagement.js',
        ['jquery']
    );

    wp_localize_script(
        'admin_management_script',
        'adminAjax',
        ['url' => admin_url('admin-ajax.php')]
    );
    wp_enqueue_script('admin_management_script');
}

$TranslationsManagement = new TranslationsManagement();
