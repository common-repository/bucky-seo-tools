<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://osdeibi.dev
 * @since      1.0.0
 *
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/includes
 * @author     Osdeibi Acurero <contacto@osdeibi.dev>
 */
class ONALBSEO_Seo_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'bucky-seo',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );

    }


}
