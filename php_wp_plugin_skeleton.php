<?php
/*
Plugin Name: Plugin Skeleton for Wordpress
Plugin URI: 
Description: A skeleton plugin for Wordpress Plugin Developers
Version: 1.0
Author:
Author URI:
*/

//*********** for install/uninstall actions (optional) ********************//
/*register_activation_hook(__FILE__,'php_wp_plugin_skeleton_install');
register_deactivation_hook(__FILE__, 'php_wp_plugin_skeleton_uninstall');
function php_wp_plugin_skeleton_install(){
     php_wp_plugin_skeleton_uninstall();//force to uninstall option
     add_option("php_wp_plugin_skeleton_secret", generateRandom(10));
}

function php_wp_plugin_skeleton_uninstall(){
    if(get_option('php_wp_plugin_skeleton_secret')){
     delete_option("php_wp_plugin_skeleton_secret");
     }
}*/
//*********** end of install/uninstall actions (optional) ********************//


add_action('admin_menu', 'php_wp_plugin_skeleton_menu');

function php_wp_plugin_skeleton_menu() {
    $pending = '<span class="update-plugins"><span class="pending-count">7</span></span>';
	add_menu_page('Plugin', 'Plugin'.$pending, 'manage_options', 'php_wp_plugin_skeleton', 'php_wp_plugin_skeleton_options');    
    add_submenu_page( 'php_wp_plugin_skeleton', 'Plugin', 'Sub Menu', 'manage_options', 'php_wp_plugin_skeleton_unique_url', 'php_wp_plugin_skeleton_unique_url');
    add_submenu_page( 'php_wp_plugin_skeleton', 'Plugin', 'Another Menu', 'manage_options', 'php_wp_plugin_skeleton_unique_url2', 'php_wp_plugin_skeleton_unique_url2');
    
}

function php_wp_plugin_skeleton_unique_url(){
  	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
    echo '<h2>This is the Sub Menu</h2>';
	echo '<p>Include PHP file for better readability of your code.</p>';
	echo '</div>';

}

function php_wp_plugin_skeleton_unique_url2(){
  	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
    echo '<h2>This is the Second Sub Menu</h2>';
	echo '<p>Include PHP file for better readability of your code.</p>';
	echo '</div>';

}

function php_wp_plugin_skeleton_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
    echo '<h2>This is Header 2</h2>';
    include('table.php');
	echo '</div>';
}