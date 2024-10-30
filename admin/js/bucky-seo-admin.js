(function ($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */


    $(document).ready(function ($) {

        function updateVisibility() {
            // Obtain values from options
            const googleChecked = $('#onalbseovs_google_option').is(':checked');
            const bingChecked = $('#onalbseovs_bing_option').is(':checked');
            const yandexChecked = $('#onalbseovs_yandex_option').is(':checked');

            const robotsChecked = $('#onalbseomt_robots_option').is(':checked');
            const titleChecked = $('#onalbseomt_title_option').is(':checked');
            const metadescChecked = $('#onalbseomt_metadesc_option').is(':checked');
            const keywordsChecked = $('#onalbseomt_keywords_option').is(':checked');

            const analyticsChecked = $('#onalbseoga_analytics_option').is(':checked');

            const minjsChecked = $('#onalbseost_minjs_option').is(':checked');
            const mincssChecked = $('#onalbseost_mincss_option').is(':checked');
            const gzipChecked = $('#onalbseost_gzip_option').is(':checked');
            const iframeChecked = $('#onalbseost_iframe_option').is(':checked');
            const cloudflareChecked = $('#onalbseost_cloudflare_option').is(':checked');
            const webpChecked = $('#onalbseost_webp_option').is(':checked');

            const strucutredChecked = $('#onalbseocontent_strucutred_option').is(':checked');
            const hreflangChecked = $('#onalbseocontent_hreflang_option').is(':checked');
            const h1Checked = $('#onalbseocontent_h1_option').is(':checked');
            const canonicalChecked = $('#onalbseocontent_canonical_option').is(':checked');

            const viewportChecked = $('#onalbseomobile_viewport_option').is(':checked');
            const ampChecked = $('#onalbseomobile_amp_option').is(':checked');

            const httpChecked = $('#onalbseowpseo_http_option').is(':checked');
            const versionChecked = $('#onalbseowpseo_version_option').is(':checked');
            const installChecked = $('#onalbseowpseo_install_option').is(':checked');
            const themeChecked = $('#onalbseowpseo_theme_option').is(':checked');
            const pluginChecked = $('#onalbseowpseo_plugin_option').is(':checked');
            const permaChecked = $('#onalbseowpseo_perma_option').is(':checked');

            // check if options are selected
            function toggleAccordion(conditions, accordionId) {
                if (conditions.every(Boolean)) {
                    $(accordionId).addClass("visually-hidden");
                } else {
                    $(accordionId).removeClass("visually-hidden");
                }
            }

            toggleAccordion([googleChecked, bingChecked, yandexChecked], "#vs-accordion");
            toggleAccordion([robotsChecked, titleChecked, metadescChecked, keywordsChecked], "#mt-accordion");
            toggleAccordion([analyticsChecked], "#ga-accordion");
            toggleAccordion([minjsChecked, mincssChecked, gzipChecked, iframeChecked, cloudflareChecked, webpChecked], "#st-accordion");
            toggleAccordion([strucutredChecked, hreflangChecked, h1Checked, canonicalChecked], "#content-accordion");
            toggleAccordion([viewportChecked, ampChecked], "#mobile-accordion");
            toggleAccordion([httpChecked, versionChecked, installChecked, themeChecked, pluginChecked, permaChecked], "#wpseo-accordion");

            // check if each of one of the options are selected
            function toggleOption(optionChecked, optionId) {
                if (optionChecked) {
                    $(optionId).addClass("visually-hidden");
                } else {
                    $(optionId).removeClass("visually-hidden");
                }
            }

            toggleOption(googleChecked, "#vs-google-option");
            toggleOption(bingChecked, "#vs-bing-option");
            toggleOption(yandexChecked, "#vs-yandex-option");
            toggleOption(robotsChecked, "#mt-robots-option");
            toggleOption(titleChecked, "#mt-title-option");
            toggleOption(metadescChecked, "#mt-metadesc-option");
            toggleOption(keywordsChecked, "#mt-keywords-option");
            toggleOption(analyticsChecked, "#ga-analytics-option");
            toggleOption(minjsChecked, "#st-minjs-option");
            toggleOption(mincssChecked, "#st-mincss-option");
            toggleOption(gzipChecked, "#st-gzip-option");
            toggleOption(iframeChecked, "#st-iframe-option");
            toggleOption(cloudflareChecked, "#st-cloudflare-option");
            toggleOption(webpChecked, "#st-webp-option");
            toggleOption(strucutredChecked, "#content-strucutred-option");
            toggleOption(hreflangChecked, "#content-hreflang-option");
            toggleOption(h1Checked, "#content-h1-option");
            toggleOption(canonicalChecked, "#content-canonical-option");
            toggleOption(viewportChecked, "#mobile-viewport-option");
            toggleOption(ampChecked, "#mobile-amp-option");
            toggleOption(httpChecked, "#wpseo-http-option");
            toggleOption(versionChecked, "#wpseo-version-option");
            toggleOption(installChecked, "#wpseo-install-option");
            toggleOption(themeChecked, "#wpseo-theme-option");
            toggleOption(pluginChecked, "#wpseo-plugin-option");
            toggleOption(permaChecked, "#wpseo-perma-option");
        }

        updateVisibility();

        // check for changes on checkboxes
        $('input[type="checkbox"]').on('change', function () {
            updateVisibility();
        });

        // // search bar
        jQuery("#myInput").on("keyup", function () {
            var value = jQuery(this).val().toLowerCase();
            jQuery("#results-accordion .accordion-item").each(function () {
                var titleText = jQuery(this).find('.card-title').text().toLowerCase();
                jQuery(this).toggle(titleText.indexOf(value) > -1);
            });
        });

        // Btn for uncheck all
        $('#deselectAllBtn').on('click', function () {
            $('input[type="checkbox"]').prop('checked', false);
            updateVisibility();
        });

        // function to uncheckall
        $('#selectAllBtn').on('click', function () {
            $('input[type="checkbox"]').prop('checked', true);
            updateVisibility();
        });

        $("#searchInput").submit(function (e) {
            return false;
        });

    });

    window.addEventListener('load', function() {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    })


})(jQuery);

