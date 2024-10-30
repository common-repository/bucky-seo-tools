<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://osdeibi.dev
 * @since      1.0.0
 *
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/includes
 * @author     Osdeibi Acurero <contacto@osdeibi.dev>
 */
class ONALBSEO_Deactivator
{

    /**
     * Clean options.
     *
     * If plugins is deactivated remove all options from database.
     *
     * @since    1.0.0
     */
    public static function deactivate()
    {
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
    }

}
