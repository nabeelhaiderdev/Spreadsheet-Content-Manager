<?php 
/**
 * Plugin Name
 *
 * @package           Spreadsheet Content Manager
 * @author            Nabeel Haider
 * @copyright         2022 Yodo Designs
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Spreadsheet Content Manager
 * Plugin URI:        https://example.com/spreadsheet-content-manager
 * Description:       Spreadsheet Content Manager is a WordPress plugin that allows you to manage content for your website directly from Google Sheets.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nabeel Haider
 * Author URI:        https://example.com
 * Text Domain:       scm_td
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-spreadsheet-content-manager-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spreadsheet-content-manager-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-spreadsheet-content-manager-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-spreadsheet-content-manager-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-spreadsheet-content-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name();
