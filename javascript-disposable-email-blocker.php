<?php

/**
 * @link              https://tomba.io/
 * @since             1.0.0
 * @package           Javascript_Disposable_Email_Blocker
 *
 * @wordpress-plugin
 * Plugin Name:       Javascript Disposable Email Blocker
 * Plugin URI:        https://wordpress.org/plugins/javascript-disposable-email-blocker
 * Description:       Identify and block disposable Email, temporary email addresses with our Free Email Address Online Verification API
 * Version:           1.0.0
 * Author:            Tomba Email Finder
 * Author URI:        https://tomba.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       javascript-disposable-email-blocker
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('JDEB_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-javascript-disposable-email-blocker-activator.php
 */
function activate_javascript_disposable()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-javascript-disposable-email-blocker-activator.php';
	JDEB_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-javascript-disposable-email-blocker-deactivator.php
 */
function deactivate_javascript_disposable()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-javascript-disposable-email-blocker-deactivator.php';
	JDEB_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_javascript_disposable');
register_deactivation_hook(__FILE__, 'deactivate_javascript_disposable');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-javascript-disposable-email-blocker.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_javascript_disposable()
{

	$plugin = new Javascript_Disposable_Email_Blocker();
	$plugin->run();
}
run_javascript_disposable();
