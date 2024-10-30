<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://osdeibi.dev
 * @since      1.0.0
 *
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/admin
 * @author     Osdeibi Acurero <contacto@osdeibi.dev>
 */
class ONALBSEO_Seo_Admin
{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $plugin_name The name of this plugin.
     * @param string $version The version of this plugin.
     * @since    1.0.0
     */
    public function __construct($plugin_name, $version)
    {

        add_action('admin_menu', array($this, 'onalbseo_seo_add_plugin_options_page'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts_and_styles'));

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets and Javascript.
     *
     * for the admin area ONLY for the plugin, and prevent the custom CSS to edit other admin areas.
     *
     * @since    1.0.0
     */
    public function enqueue_admin_scripts_and_styles($hook_suffix)
    {
        if ($hook_suffix === 'toplevel_page_bucky-seo-options') {
            wp_enqueue_style('bootstrap-style', plugin_dir_url(__FILE__) . 'css/bootstrap/bootstrap.css', array(), $this->version, 'all');
            wp_enqueue_style('fontawesome-style', plugin_dir_url(__FILE__) . 'css/fontawesome/all.css', array(), $this->version, 'all');
            wp_enqueue_style('custom-plugin-style', plugin_dir_url(__FILE__) . 'css/bucky-seo-admin.css', array(), $this->version, 'all');

            wp_enqueue_script('popper-script', plugin_dir_url(__FILE__) . 'js/popper.js', array('jquery'), $this->version, false);
            wp_enqueue_script('bootstrap-script', plugin_dir_url(__FILE__) . 'js/bootstrap/bootstrap.js', array('jquery'), $this->version, false);

            wp_enqueue_script('buckyseo-adminjs', plugin_dir_url(__FILE__) . 'js/bucky-seo-admin.js', array('jquery'), $this->version, false);


        } else if ($hook_suffix == 'bucky-seo-tools_page_bucky-report-seo') {
            wp_enqueue_style('bootstrap-style', plugin_dir_url(__FILE__) . 'css/bootstrap/bootstrap.css', array(), $this->version, 'all');
            wp_enqueue_style('fontawesome-style', plugin_dir_url(__FILE__) . 'css/fontawesome/all.css', array(), $this->version, 'all');
            wp_enqueue_style('custom-plugin-style', plugin_dir_url(__FILE__) . 'css/bucky-seo-admin.css', array(), $this->version, 'all');

            wp_enqueue_script('popper-script', plugin_dir_url(__FILE__) . 'js/popper.js', array('jquery'), $this->version, false);
            wp_enqueue_script('bootstrap-script', plugin_dir_url(__FILE__) . 'js/bootstrap/bootstrap.js', array('jquery'), $this->version, false);

            wp_enqueue_script('jspdf-js', plugin_dir_url(__FILE__) . 'js/pdf/jspdf.js', array('jquery'), $this->version, false);
            wp_enqueue_script('html2canvas-js', plugin_dir_url(__FILE__) . 'js/pdf/html2canvas.js', array('jquery'), $this->version, false);
            wp_enqueue_script('html2pdf-js', plugin_dir_url(__FILE__) . 'js/pdf/html2pdf.js', array('jquery'), $this->version, false);
            wp_enqueue_script('es6promiseauto-js', plugin_dir_url(__FILE__) . 'js/pdf/es6-promise.auto.js', array('jquery'), $this->version, false);
            wp_enqueue_script('chart-js', plugin_dir_url(__FILE__) . 'js/chart.umd.js', array('jquery'), $this->version, false);
            wp_enqueue_script('chart-fill-js', plugin_dir_url(__FILE__) . 'js/bucky-seo-chart-fill.js', array('jquery'), $this->version, false);

        }

    }

    /**
     * Register the options.
     *
     * for the admin display page to filter each section.
     *
     * @since    1.0.0
     */
    public function register_settings()
    {
        register_setting('seo_tools_osdeibi_options_group', 'onalbseovs_google_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseovs_bing_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseovs_yandex_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseomt_robots_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseomt_title_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseomt_metadesc_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseomt_keywords_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseoga_analytics_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseost_minjs_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseost_mincss_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseost_gzip_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseost_iframe_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseost_cloudflare_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseost_webp_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseocontent_strucutred_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseocontent_hreflang_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseocontent_h1_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseocontent_canonical_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseomobile_viewport_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseomobile_amp_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseowpseo_http_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseowpseo_version_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseowpseo_install_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseowpseo_theme_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseowpseo_plugin_option');
        register_setting('seo_tools_osdeibi_options_group', 'onalbseowpseo_perma_option');
    }

    /**
     * Register the menus.
     *
     * for the plugin adding a top level menu with.
     * a submenu for display and report functionality of the plugin.
     *
     * @since    1.0.0
     */
    public function onalbseo_seo_add_plugin_options_page()
    {
        add_menu_page(
            'Bucky SEO Tools Options',
            'Bucky SEO Tools',
            'manage_options',
            'bucky-seo-options',
            array($this, 'onalbseo_seo_display_options_page_content'),
            'dashicons-pets',
            75
        );

        // Agregar el submenú
        add_submenu_page(
            'bucky-seo-options',
            'Bucky report',
            'Bucky report',
            'manage_options',
            'bucky-report-seo',
            array($this, 'onalbseo_seo_display_page_options'),
        );

    }


    /**
     * Call for the necessary data to retrieve information on the plugin pages.
     *
     * @since    1.0.0
     */
    public function onalbseo_seo_display_options_page_content()
    {
        // Llamada a la función para obtener los meta tags y los scripts combinados!
        $results = $this->onalbseo_seo_scan_site_meta_tags(array('google-site-verification', 'msvalidate.01', 'robots', 'yandex-verification', 'title', 'description', 'keywords', 'viewport'));
        // Incluye el archivo con el HTML de la página de opciones y pasa los resultados!
        include plugin_dir_path(__FILE__) . 'partials/bucky-seo-admin-display.php';
    }


    /**
     * Use the necessary data to make the report on plugin page.
     *
     * @since    1.0.0
     */
    public function onalbseo_seo_display_page_options()
    {

        // Llamada a la función para obtener los meta tags y los scripts combinados!
        $results = $this->onalbseo_seo_scan_site_meta_tags(array('google-site-verification', 'msvalidate.01', 'robots', 'yandex-verification', 'title', 'description', 'keywords', 'viewport'));

        // Incluye el archivo con el HTML de la página de opciones y pasa los resultados!
        include plugin_dir_path(__FILE__) . 'partials/bucky-seo-admin-display-report.php';
    }

    /**
     * All the logic of the backend to satisfy the data to show on admin area.
     *
     * @since    1.0.0
     */
    public function onalbseo_seo_scan_site_meta_tags($meta_names)
    {

        function  onalbseo_seo_get_directory_size_info($directory_path)
        {
            if (!function_exists('get_dirsize')) {
                require_once ABSPATH . 'wp-admin/includes/file.php';
            }

            // check if the directory exist!
            if (is_dir($directory_path)) {
                $directory_size = get_dirsize($directory_path);
                $formatted_size = onalbseo_seo_format_size_units($directory_size);
                return $formatted_size;
            }

            return false;
        }

        // convert the result of installation size in a readable way for user !
        function onalbseo_seo_format_size_units($size)
        {
            if ($size >= 1073741824) {
                $size = number_format($size / 1073741824, 2) . ' GB';
            } elseif ($size >= 1048576) {
                $size = number_format($size / 1048576, 2) . ' MB';
            } elseif ($size >= 1024) {
                $size = number_format($size / 1024, 2) . ' KB';
            } elseif ($size > 1) {
                $size = $size . ' bytes';
            } elseif ($size == 1) {
                $size = $size . ' byte';
            } else {
                $size = '0 bytes';
            }

            return $size;
        }

        // Get the base url from the site!
        $site_url = home_url();

        // add options to the request!
        $request_args = array(
            'headers' => array(
                'Accept-Encoding' => 'gzip',
            ),
        );

        // get the url with the headers!
        $site_content = wp_remote_get($site_url, $request_args);

        // Cloudflare check!
        $cloudflare_check_url = $site_url . '/cdn-cgi/trace/';

        if (!is_wp_error($site_content) && isset($site_content['body'])) {
            // Verificar si la compresión GZIP está habilitada!
            $gzip_enabled = false;

            // Verificar si los encabezados contienen la información de compresión GZIP!
            if (isset($site_content['headers']['content-encoding'])) {
                // Obtener los encabezados de la respuesta HTTP!
                $headers = $site_content['headers'];

                // Verificar si la compresión GZIP está habilitada en los encabezados!
                if (stripos($headers['content-encoding'], 'gzip') !== false) {
                    $gzip_enabled = true;
                }
            }

            $is_cloudflare = false;

            if (isset($site_content['headers']['server'])) {
                $server_header = $site_content['headers']['server'];

                if (stripos($server_header, 'cloudflare') !== false) {
                    $is_cloudflare = true;
                }
            } else {
                $cloudflare_check_response = wp_remote_get($cloudflare_check_url);

                if (!is_wp_error($cloudflare_check_response) && isset($cloudflare_check_response['body'])) {
                    $cloudflare_check_body = $cloudflare_check_response['body'];
                    if (stripos($cloudflare_check_body, 'cloudflare') !== false) {
                        $is_cloudflare = true;
                    }
                }
            }

            // Scan the result to get the metadata!
            $dom = new DOMDocument();
            @$dom->loadHTML($site_content['body']);

            $meta_tags = array();
            $script_tags = array();
            $stylesheets = array();
            $structured_data = array();
            $img_tags = array();
            $iframe_tags = array();
            $alternate_links = array();
            $h1_tags = array();
            $canonical_links = array();
            $amphtml_links = array();

            $meta_elements = $dom->getElementsByTagName('meta');
            foreach ($meta_elements as $meta) {
                $name = $meta->getAttribute('name');
                $content = $meta->getAttribute('content');

                if (in_array($name, $meta_names)) {
                    $meta_tags[$name] = $content;
                }
            }

            // get all the <link> with rel="stylesheet"!
            $link_elements = $dom->getElementsByTagName('link');
            foreach ($link_elements as $link) {
                // Verificar si el elemento <link> tiene rel="stylesheet"!
                if ($link->getAttribute('rel') === 'stylesheet') {
                    // Obtener el valor del atributo href
                    $href = $link->getAttribute('href');

                    // Verificar si el href no está vacío!
                    if (!empty($href)) {
                        // Agregar el href a la lista de hojas de estilo!
                        $stylesheets[] = $href;
                    }
                }
            }

            // Get all the <link> with rel="alternate" and get the href y hreflang!
            foreach ($link_elements as $link) {
                if ($link->getAttribute('rel') === 'alternate') {
                    $href = $link->getAttribute('href');
                    $hreflang = $link->getAttribute('hreflang');

                    if (!empty($href) && !empty($hreflang)) {
                        // Agregar href y hreflang a la lista de enlaces alternativos!
                        $alternate_links[] = array(
                            'href' => $href,
                            'hreflang' => $hreflang,
                        );
                    }
                }
            }

            // Get all the <scripts>!
            $script_elements = $dom->getElementsByTagName('script');
            foreach ($script_elements as $script) {
                $type = $script->getAttribute('type');
                $src = $script->getAttribute('src');

                if ($type === 'application/ld+json') {
                    $json_content = $script->nodeValue;
                    $json_data = json_decode($json_content, true);

                    if (json_last_error() === JSON_ERROR_NONE && isset($json_data['@type'])) {
                        $structured_data[] = $json_data['@type'];
                    }
                }

                if (!empty($src)) {
                    // Agregar el src a la lista de scripts!
                    $script_tags[] = $src;
                }
            }

            // get all the images!
            $img_elements = $dom->getElementsByTagName('img');
            foreach ($img_elements as $img) {
                $src = $img->getAttribute('src');

                if (!empty($src)) {
                    $img_tags[] = $src;
                }
            }

            // get all the iframes !
            $iframe_elements = $dom->getElementsByTagName('iframe');

            if ($iframe_elements instanceof DOMNodeList) {
                foreach ($iframe_elements as $iframe) {
                    $src = $iframe->getAttribute('src');

                    if (!empty($src)) {
                        $iframe_tags[] = $src;
                    }
                }
            }

            // get all the H1 !
            $h1_elements = $dom->getElementsByTagName('h1');
            foreach ($h1_elements as $h1) {
                $h1_tags[] = $h1->nodeValue;
            }

            // Get all the <link> with rel="canonical"!
            $link_elements = $dom->getElementsByTagName('link');
            foreach ($link_elements as $link) {
                // Verificar si el elemento <link> tiene rel="canonical"!
                if ($link->getAttribute('rel') === 'canonical') {
                    // Obtener el valor del atributo href
                    $href = $link->getAttribute('href');

                    // Verificar si el href no está vacío!
                    if (!empty($href)) {
                        // Agregar el href a la lista de enlaces canonicales!
                        $canonical_links[] = $href;
                    }
                }
            }

            // get all the <link> with rel="amphtml"!
            $amp_elements = $dom->getElementsByTagName('link');
            foreach ($amp_elements as $amp) {
                if ($amp->getAttribute('rel') === 'amphtml') {
                    $href = $amp->getAttribute('href');

                    if (!empty($href)) {
                        $amphtml_links[] = $href;
                    }
                }
            }

            // check for HTTPS!
            $is_https = wp_is_using_https();

            // get version WP!
            global $wp_version;
            $current_version = $wp_version;

            // obtain the WordPress info update!
            include_once ABSPATH . WPINC . '/version.php';
            wp_version_check();
            $update_core = get_site_transient('update_core');

            $latest_version = null;
            if (isset($update_core->updates[0]->current)) {
                $latest_version = $update_core->updates[0]->current;
            }

            // Compare wp versions!
            $is_up_to_date = version_compare($current_version, $latest_version, '>=');

            // get installation size !
            $directory_size = onalbseo_seo_get_directory_size_info(ABSPATH);

            $active_theme = wp_get_active_and_valid_themes();

            // get list of active plugins!
            $active_plugins = get_option('active_plugins');

            // get all the list of installed plugins!
            $all_plugins = get_plugins();

            // array for active-inactive!
            $active_plugin_info = array();
            $inactive_plugin_info = array();

            // foreach on inactive or active plugins!
            foreach ($all_plugins as $plugin_path => $plugin_info) {
                if (in_array($plugin_path, $active_plugins)) {
                    $active_plugin_info[] = $plugin_info;
                } else {
                    $inactive_plugin_info[] = $plugin_info;
                }
            }

            // get permalinks!
            $permalink_structure = get_option('permalink_structure');

            // check for active permalink structure!
            $permalink_structure_active = !empty($permalink_structure);

            // Merge all the result in one array!
            $result = array(
                'meta_tags' => $meta_tags,
                'script_tags' => $script_tags,
                'img_tags' => $img_tags,
                'stylesheets' => $stylesheets,
                'gzip_enabled' => $gzip_enabled,
                'iframe_tags' => $iframe_tags,
                'is_cloudflare' => $is_cloudflare,
                'structured_data' => $structured_data,
                'alternate_links' => $alternate_links,
                'h1_tags' => $h1_tags,
                'canonical_links' => $canonical_links,
                'amphtml_links' => $amphtml_links,
                'is_https' => $is_https,
                'current_version' => $current_version,
                'latest_version' => $latest_version,
                'is_up_to_date' => $is_up_to_date,
                'directory_size' => $directory_size,
                'active_theme' => $active_theme,
                'active_plugins' => $active_plugin_info,
                'inactive_plugins' => $inactive_plugin_info,
                'permalink_structure_active' => $permalink_structure_active,
                'permalink_structure_value' => $permalink_structure,

            );

            return $result;
        }

        return false;
    }
}
