<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https://osdeibi.dev
 * @since      1.0.0
 *
 * @package    ONALBSEO_Seo
 */

// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
$onalbseovs_google_option = 'onalbseovs_google_option';
$onalbseovs_bing_option = 'onalbseovs_bing_option';
$onalbseovs_yandex_option = 'onalbseovs_yandex_option';
$onalbseomt_robots_option = 'onalbseomt_robots_option';
$onalbseomt_title_option = 'onalbseomt_title_option';
$onalbseomt_metadesc_option = 'onalbseomt_metadesc_option';
$onalbseomt_keywords_option = 'onalbseomt_keywords_option';
$onalbseoga_analytics_option = 'onalbseoga_analytics_option';
$onalbseost_minjs_option = 'onalbseost_minjs_option';
$onalbseost_mincss_option = 'onalbseost_mincss_option';
$onalbseost_gzip_option = 'onalbseost_gzip_option';
$onalbseost_iframe_option = 'onalbseost_iframe_option';
$onalbseost_cloudflare_option = 'onalbseost_cloudflare_option';
$onalbseost_webp_option = 'onalbseost_webp_option';
$onalbseocontent_strucutred_option = 'onalbseocontent_strucutred_option';
$onalbseocontent_hreflang_option = 'onalbseocontent_hreflang_option';
$onalbseocontent_h1_option = 'onalbseocontent_h1_option';
$onalbseocontent_canonical_option = 'onalbseocontent_canonical_option';
$onalbseomobile_viewport_option = 'onalbseomobile_viewport_option';
$onalbseomobile_amp_option = 'onalbseomobile_amp_option';
$onalbseowpseo_http_option = 'onalbseowpseo_http_option';
$onalbseowpseo_version_option = 'onalbseowpseo_version_option';
$onalbseowpseo_install_option = 'onalbseowpseo_install_option';
$onalbseowpseo_theme_option = 'onalbseowpseo_theme_option';
$onalbseowpseo_plugin_option = 'onalbseowpseo_plugin_option';
$onalbseowpseo_perma_option = 'onalbseowpseo_perma_option';

delete_option($onalbseovs_google_option);
delete_option($onalbseovs_bing_option);
delete_option($onalbseovs_yandex_option);
delete_option($onalbseomt_robots_option);
delete_option($onalbseomt_title_option);
delete_option($onalbseomt_metadesc_option);
delete_option($onalbseomt_keywords_option);
delete_option($onalbseoga_analytics_option);
delete_option($onalbseost_minjs_option);
delete_option($onalbseost_mincss_option);
delete_option($onalbseost_gzip_option);
delete_option($onalbseost_iframe_option);
delete_option($onalbseost_cloudflare_option);
delete_option($onalbseost_webp_option);
delete_option($onalbseocontent_strucutred_option);
delete_option($onalbseocontent_hreflang_option);
delete_option($onalbseocontent_h1_option);
delete_option($onalbseocontent_canonical_option);
delete_option($onalbseomobile_viewport_option);
delete_option($onalbseomobile_amp_option);
delete_option($onalbseowpseo_http_option);
delete_option($onalbseowpseo_version_option);
delete_option($onalbseowpseo_install_option);
delete_option($onalbseowpseo_theme_option);
delete_option($onalbseowpseo_plugin_option);
delete_option($onalbseowpseo_perma_option);