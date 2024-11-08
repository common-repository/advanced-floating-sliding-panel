<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://codetides.com
 * @since             1.1.0
 * @package           Advanced_Floating_Sliding_Panel
 *
 * @wordpress-plugin
 * Plugin Name:       Advanced Floating Sliding Panel
 * Plugin URI:        http://www.codetides.com/advanced-floating-sliding-panel/
 * Description:       Advanced Floating Sliding Panel (Lite) is the Best Plugin to create sliding panel with unlimited controllable tabs within a minute.
 * Version:           1.1.0
 * Author:            CodeTides
 * Author URI:        http://codecanyon.net/user/codetides/portfolio
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       advanced-floating-sliding-panel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AFSP_VERSION', '1.1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-advanced-floating-sliding-panel-activator.php
 */
function activate_advanced_floating_sliding_panel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advanced-floating-sliding-panel-activator.php';
	Advanced_Floating_Sliding_Panel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-advanced-floating-sliding-panel-deactivator.php
 */
function deactivate_advanced_floating_sliding_panel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advanced-floating-sliding-panel-deactivator.php';
	Advanced_Floating_Sliding_Panel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_advanced_floating_sliding_panel' );
register_deactivation_hook( __FILE__, 'deactivate_advanced_floating_sliding_panel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-advanced-floating-sliding-panel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_advanced_floating_sliding_panel() {

	$plugin = new Advanced_Floating_Sliding_Panel();
	$plugin->run();

}
run_advanced_floating_sliding_panel();
