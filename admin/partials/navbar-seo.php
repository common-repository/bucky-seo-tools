<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin specify part of the sidemenu.
 *
 * @link       https://osdeibi.dev
 * @since      1.0.0
 *
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/admin/partials
 */
?>

<nav class="navbar sticky-top navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)) . 'img/brandlogo-a.png'); ?>" alt="Logo"
                 height="70" class="d-inline-block align-text-center">
            <?php esc_html_e('Bucky SEO Tools', 'bucky-seo'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form id="searchInput" class="d-flex" role="search">
                <input id="myInput" class="form-control me-2" type="search"
                       placeholder="<?php esc_html_e('Search...', 'bucky-seo'); ?>" aria-label="Search">
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"><i class="fa-solid fa-bars fa-beat fa-lg"></i></button>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-end mt-4" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
     id="offcanvasRight" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><?php esc_html_e('Filter panel', 'bucky-seo'); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionMenu">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOneOptions" aria-expanded="true"
                            aria-controls="collapseOneOptions">
                        <i class="fa-solid fa-list-check"></i> <span
                                class="px-2"><?php esc_html_e('Site validator', 'bucky-seo'); ?></span>
                    </button>
                </h2>
                <div id="collapseOneOptions" class="accordion-collapse collapse show" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <form id="options-wpseo" method="post" action="options.php">
                            <?php settings_fields('seo_tools_osdeibi_options_group'); ?>
                            <?php do_settings_sections('seo_tools_osdeibi_options_group'); ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="onalbseovs_google_option"
                                       name="onalbseovs_google_option" <?php checked(1, get_option('onalbseovs_google_option'), true); ?>>
                                <label class="form-check-label" for="onalbseovs_google_option">Google</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="onalbseovs_bing_option"
                                       name="onalbseovs_bing_option" <?php checked(1, get_option('onalbseovs_bing_option'), true); ?>>
                                <label class="form-check-label" for="onalbseovs_bing_option">Bing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="onalbseovs_yandex_option"
                                       name="onalbseovs_yandex_option" <?php checked(1, get_option('onalbseovs_yandex_option'), true); ?>>
                                <label class="form-check-label" for="onalbseovs_yandex_option">Yandex</label>
                            </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwoOptions" aria-expanded="false"
                            aria-controls="collapseTwoOptions">
                        <i class="fa-solid fa-tags"></i> <span class="px-2">Meta tags</span>
                    </button>
                </h2>
                <div id="collapseTwoOptions" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseomt_robots_option"
                                   name="onalbseomt_robots_option" <?php checked(1, get_option('onalbseomt_robots_option'), true); ?>>
                            <label class="form-check-label" for="onalbseomt_robots_option">Robots</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseomt_title_option"
                                   name="onalbseomt_title_option" <?php checked(1, get_option('onalbseomt_title_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseomt_title_option"><?php esc_html_e('SEO title', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseomt_metadesc_option"
                                   name="onalbseomt_metadesc_option" <?php checked(1, get_option('onalbseomt_metadesc_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseomt_metadesc_option"><?php esc_html_e('Meta description', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseomt_keywords_option"
                                   name="onalbseomt_keywords_option" <?php checked(1, get_option('onalbseomt_keywords_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseomt_keywords_option"><?php esc_html_e('Keywords', 'bucky-seo'); ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThreeOptions" aria-expanded="false"
                            aria-controls="collapseThreeOptions">
                        <i class="fa-solid fa-chart-pie"></i> <span
                                class="px-2"><?php esc_html_e('Analytics', 'bucky-seo'); ?></span>
                    </button>
                </h2>
                <div id="collapseThreeOptions" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseoga_analytics_option"
                                   name="onalbseoga_analytics_option" <?php checked(1, get_option('onalbseoga_analytics_option'), true); ?>>
                            <label class="form-check-label" for="onalbseoga_analytics_option">Google Analytics 4</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFourOptions" aria-expanded="false"
                            aria-controls="collapseFourOptions">
                        <i class="fa-solid fa-laptop-code"></i> <span
                                class="px-2"><?php esc_html_e('Technical SEO', 'bucky-seo'); ?></span>
                    </button>
                </h2>
                <div id="collapseFourOptions" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseost_minjs_option"
                                   name="onalbseost_minjs_option" <?php checked(1, get_option('onalbseost_minjs_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseost_minjs_option"><?php esc_html_e('JS Minify', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseost_mincss_option"
                                   name="onalbseost_mincss_option" <?php checked(1, get_option('onalbseost_mincss_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseost_mincss_option"><?php esc_html_e('CSS Minify', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseost_gzip_option"
                                   name="onalbseost_gzip_option" <?php checked(1, get_option('onalbseost_gzip_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseost_gzip_option"><?php esc_html_e('Gzip compression', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseost_iframe_option"
                                   name="onalbseost_iframe_option" <?php checked(1, get_option('onalbseost_iframe_option'), true); ?>>
                            <label class="form-check-label" for="onalbseost_iframe_option">Iframe</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseost_cloudflare_option"
                                   name="onalbseost_cloudflare_option" <?php checked(1, get_option('onalbseost_cloudflare_option'), true); ?>>
                            <label class="form-check-label" for="onalbseost_cloudflare_option">Cloudflare</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseost_webp_option"
                                   name="onalbseost_webp_option" <?php checked(1, get_option('onalbseost_webp_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseost_webp_option"><?php esc_html_e('WebP Images', 'bucky-seo'); ?></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFiveOptions" aria-expanded="false"
                            aria-controls="collapseFiveOptions">
                        <i class="fa-solid fa-newspaper"></i> <span
                                class="px-2"><?php esc_html_e('Content', 'bucky-seo'); ?></span>
                    </button>
                </h2>
                <div id="collapseFiveOptions" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseocontent_strucutred_option"
                                   name="onalbseocontent_strucutred_option" <?php checked(1, get_option('onalbseocontent_strucutred_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseocontent_strucutred_option"><?php esc_html_e('Structured data', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseocontent_hreflang_option"
                                   name="onalbseocontent_hreflang_option" <?php checked(1, get_option('onalbseocontent_hreflang_option'), true); ?>>
                            <label class="form-check-label" for="onalbseocontent_hreflang_option">Hreflang</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseocontent_h1_option"
                                   name="onalbseocontent_h1_option" <?php checked(1, get_option('onalbseocontent_h1_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseocontent_h1_option"><?php esc_html_e('H1 tags', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseocontent_canonical_option"
                                   name="onalbseocontent_canonical_option" <?php checked(1, get_option('onalbseocontent_canonical_option'), true); ?>>
                            <label class="form-check-label" for="onalbseocontent_canonical_option">Canonical</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSixOptions" aria-expanded="false"
                            aria-controls="collapseSixOptions">
                        <i class="fa-solid fa-mobile-screen"></i> <span class="px-2">Mobile</span>
                    </button>
                </h2>
                <div id="collapseSixOptions" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseomobile_viewport_option"
                                   name="onalbseomobile_viewport_option" <?php checked(1, get_option('onalbseomobile_viewport_option'), true); ?>>
                            <label class="form-check-label" for="onalbseomobile_viewport_option">Viewport</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseomobile_amp_option"
                                   name="onalbseomobile_amp_option" <?php checked(1, get_option('onalbseomobile_amp_option'), true); ?>>
                            <label class="form-check-label" for="onalbseomobile_amp_option">AMP Mobile</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSevenOptions" aria-expanded="false"
                            aria-controls="collapseSevenOptions">
                        <i class="fa-brands fa-wordpress"></i> <span
                                class="px-2"><?php esc_html_e('Wordpress Analysis', 'bucky-seo'); ?></span>
                    </button>
                </h2>
                <div id="collapseSevenOptions" class="accordion-collapse collapse" data-bs-parent="#accordionMenu">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseowpseo_http_option"
                                   name="onalbseowpseo_http_option" <?php checked(1, get_option('onalbseowpseo_http_option'), true); ?>>
                            <label class="form-check-label" for="onalbseowpseo_http_option">HTTPS</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseowpseo_version_option"
                                   name="onalbseowpseo_version_option" <?php checked(1, get_option('onalbseowpseo_version_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseowpseo_version_option"><?php esc_html_e('Wordpress version', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseowpseo_install_option"
                                   name="onalbseowpseo_install_option" <?php checked(1, get_option('onalbseowpseo_install_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseowpseo_install_option"><?php esc_html_e('Wordpress installation', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseowpseo_theme_option"
                                   name="onalbseowpseo_theme_option" <?php checked(1, get_option('onalbseowpseo_theme_option'), true); ?>>
                            <label class="form-check-label"
                                   for="onalbseowpseo_theme_option"><?php esc_html_e('Active theme', 'bucky-seo'); ?></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseowpseo_plugin_option"
                                   name="onalbseowpseo_plugin_option" <?php checked(1, get_option('onalbseowpseo_plugin_option'), true); ?>>
                            <label class="form-check-label" for="onalbseowpseo_plugin_option">Plugins</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="onalbseowpseo_perma_option"
                                   name="onalbseowpseo_perma_option" <?php checked(1, get_option('onalbseowpseo_perma_option'), true); ?>>
                            <label class="form-check-label" for="onalbseowpseo_perma_option">Permalinks</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="selectAllBtn" type="button" class="btn btn-outline-success mt-2"><i
                    class="fa-solid fa-list-check"></i> <?php esc_html_e('Select all', 'bucky-seo'); ?></button>
        <button id="deselectAllBtn" type="button" class="btn btn-outline-danger mt-2"><i
                    class="fa-solid fa-trash-can"></i> <?php esc_html_e('Deselect all', 'bucky-seo'); ?></button>
        <button type="submit" class="btn btn-primary mt-2"><i
                    class="fa-solid fa-floppy-disk"></i> <?php esc_html_e('Save filters', 'bucky-seo'); ?></button>
        </form>
    </div>
    <div class="offcanvas-footer">
        <a href="https://github.com/osdeibi/bucky-seo-plugin-wp/issues" class="btn btn-warning" target="_blank"><i
                    class="fa-solid fa-bug"></i> <?php esc_html_e('Report a bug', 'bucky-seo'); ?></a>
    </div>
</div>

