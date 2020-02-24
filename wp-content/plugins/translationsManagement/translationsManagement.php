<?php
/**
 * Plugin Name: Translations Management
 * Plugin URI: https://github.com/ivantxo/yallichiy
 * Description: This plugin allows to manage translation requests
 * Version: 1.0
 * Author: Sonia Gerena, Ivan Ramirez
 **/

require_once(plugin_dir_path(__FILE__ ) . 'TranslationsManagement.php');

$TranslationsManagement = new TranslationsManagement();

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

register_activation_hook(__FILE__, ['TranslationsManagement', 'plugin_activated']);
