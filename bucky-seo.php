<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
6 * that starts the plugin.
 *
 * @link              https://osdeibi.dev
 * @since             1.0.0
 * @package           ONALBSEO_Seo
 *
 * @wordpress-plugin
 * Plugin Name:       Bucky Seo Tools
 * Plugin URI:        https://osdeibi.dev/wp-plugin/bucky-seo
 * Description:       With just one click, you can download a comprehensive SEO report that identifies all of the common problems on your website.
 * Version:           1.0.0
 * Author:            Osdeibi Acurero
 * Author URI:        https://osdeibi.dev/
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bucky-seo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org.
 * Rename this for your plugin and update it as you release new versions.
 */
define('BUCKY_SEO_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bucky-seo-activator.php.
 */
function onalbseo_activate_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-bucky-seo-activator.php';
    ONALBSEO_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bucky-seo-deactivator.php.
 */
function onalbseo_deactivate_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-bucky-seo-deactivator.php';
    ONALBSEO_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'onalbseo_activate_plugin');
register_deactivation_hook(__FILE__, 'onalbseo_deactivate_plugin');

/**
 * The core plugin class that is used to define internationalization.
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-bucky-seo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks.
 * then kicking off the plugin from this point in the file does.
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function bseo_run_plugin()
{

    $plugin = new ONALBSEO_Seo();
    $plugin->run();

}

bseo_run_plugin();
