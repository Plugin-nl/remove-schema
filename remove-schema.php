<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://timvaniersel.com/
 * @since             1.0.0
 * @package           Remove_Schema
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Schema
 * Plugin URI:        https://remove-schema.com/
 * Description:       Removes all Microdata, RDFa and/or JSON-ld that you don’t want on your page.
 * Version:           1.2.0
 * Author:            Websitescanner, TweakTheWeb
 * Author URI:        https://remove-schema.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       remove-schema
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
define( 'REMOVE_SCHEMA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-remove-schema-activator.php
 */
function activate_remove_schema() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-remove-schema-activator.php';
	Remove_Schema_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-remove-schema-deactivator.php
 */
function deactivate_remove_schema() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-remove-schema-deactivator.php';
	Remove_Schema_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_remove_schema' );
register_deactivation_hook( __FILE__, 'deactivate_remove_schema' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-remove-schema.php';

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
function run_remove_schema() {

	$plugin = new Remove_Schema();
	$plugin->run();

}
run_remove_schema();
