<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://osdeibi.dev
 * @since      1.0.0
 *
 * @package    ONALBSEO_Seo
 * @subpackage ONALBSEO_Seo/admin/partials
 */
?>

<?php include plugin_dir_path(__FILE__) . 'navbar-seo.php'; ?>

<div class="wrap">
    <h1>SEO Tools - Osdeibi Acurero</h1>
    <div class="accordion" id="results-accordion">
        <div id="vs-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                    <?php esc_html_e("Site validator", "bucky-seo"); ?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
                        <div id="vs-google-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="container text-center">
                                    <i class="fa-brands fa-google fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <button type="button" class="btn btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="<?php esc_html_e("Google Search Console can provide insights into search results and more.", "bucky-seo"); ?>">
                                            Google <i class="fa-solid fa-circle-exclamation"
                                                      style="color: #51555c;"></i>
                                        </button>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (isset($results['meta_tags']['google-site-verification'])): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Congratulations! Your site is verified with Google Search Console.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("Your site doesn't have Google Search Console verification.", "bucky-seo"); ?>
                                        </div>
                                        <div class="text-center"><p><a class="link-offset-1"
                                                                       href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/site-validator/#google", "bucky-seo"); ?>"
                                                                       target="_blank"><?php esc_html_e("Learn more about Google site verification with GSC.", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p></div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary"><?php esc_html_e("Google Search Console verification", "bucky-seo"); ?></small>
                                </div>
                            </div>
                        </div>
                        <div id="vs-bing-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="container text-center">
                                    <i class="fa-brands fa-windows fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <button type="button" class="btn btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="<?php esc_html_e("Bing allows crawling and indexing for site discovery and instant indexing for content.", "bucky-seo"); ?>">
                                            Bing <i class="fa-solid fa-circle-exclamation" style="color: #51555c;"></i>
                                        </button>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (isset($results['meta_tags']['msvalidate.01'])): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Congratulations! Your site is verified with Bing Webmaster Tools.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("Your site doesn't have Bing Webmaster Tools.", "bucky-seo"); ?>
                                        </div>
                                        <div class="text-center"><p><a class="link-offset-1"
                                                                       href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/site-validator/#bing", "bucky-seo"); ?>"
                                                                       target="_blank"><?php esc_html_e("Learn more about Bing webmaster tools for SEO", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p></div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary"><?php esc_html_e("Bing Webmaster Tools verification", "bucky-seo"); ?></small>
                                </div>
                            </div>
                        </div>
                        <div id="vs-yandex-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="container text-center">
                                    <i class="fa-brands fa-yandex fa-5x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <button type="button" class="btn btn-light"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="<?php esc_html_e("Yandex offers tools to crawl and analyze your site, track search behavior, and provide a site health report.", "bucky-seo"); ?>">
                                            Yandex <i class="fa-solid fa-circle-exclamation"
                                                      style="color: #51555c;"></i>
                                        </button>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (isset($results['meta_tags']['yandex-verification'])): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Congratulations! Your site is verified with Yandex Webmaster.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("Your site doesn't have Yandex verification.", "bucky-seo"); ?>
                                        </div>
                                        <div class="text-center"><p><a class="link-offset-1"
                                                                       href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/site-validator/#yandex", "bucky-seo"); ?>"
                                                                       target="_blank"><?php esc_html_e("Learn more about Yandex Webmaster site verification", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p></div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary"><?php esc_html_e("Yandex Webmaster verification", "bucky-seo"); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mt-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseTwo">
                    Meta tags
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="container">
                        <div class="row justify-content-center row-cols-1 row-cols-md-2">
                            <div id="mt-robots-option" class="col">
                                <div class="card border-dark shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><i class="fa-solid fa-robot fa-2xl"></i>
                                            <?php esc_html_e("Robot specifications.", "bucky-seo"); ?></h5>
                                        <p class="card-text">
                                            <?php if (isset($results['meta_tags']['robots'])): ?>
                                            <?php if ($results['meta_tags']['robots'] === "noindex, nofollow"): ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php echo esc_html($results['meta_tags']['robots']); ?>
                                        </div>
                                        <div class="text-center"><p><a class="link-offset-1"
                                                                       href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-meta-tags/#robots", "bucky-seo"); ?>"
                                                                       target="_blank"><?php esc_html_e("Your site is not visible to search engines.", "bucky-seo"); ?>
                                                    <i
                                                            class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p></div>
                                        <?php else: ?>
                                            <div class="text-center alert alert-warning" role="alert">
                                                <?php echo esc_html($results['meta_tags']['robots']); ?>
                                            </div>
                                            <div class="text-center"><p><a class="link-offset-1"
                                                                           href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-meta-tags/#robots", "bucky-seo"); ?>"
                                                                           target="_blank"><?php esc_html_e("Learn more about robots and indexing.", "bucky-seo"); ?>
                                                        <i
                                                                class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                                </p></div>
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div class="text-center alert alert-danger" role="alert">
                                                <?php esc_html_e("Configuration not found.", "bucky-seo"); ?>
                                            </div>
                                            <p><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-meta-tags/#robots", "bucky-seo"); ?>"
                                                  target="_blank"><?php esc_html_e("Learn more about robots.", "bucky-seo"); ?>
                                                    <i
                                                            class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <small><?php esc_html_e("You can change the option ", "bucky-seo"); ?>
                                            <b><?php esc_html_e("Search engine visibility", "bucky-seo"); ?></b>
                                            <?php esc_html_e("in", "bucky-seo"); ?> <a target="_blank"
                                                                                       href="<?php echo esc_url(admin_url('options-reading.php')); ?>"><?php esc_html_e("Reading Settings", "bucky-seo"); ?></a> <?php esc_html_e("to allow robots to index your site", "bucky-seo"); ?>
                                            .</small>
                                    </div>
                                </div>
                            </div>
                            <div id="mt-title-option" class="col">
                                <div class="card border-dark shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><i
                                                    class="fa-solid fa-text-height fa-2xl"></i> <?php esc_html_e("SEO Title", "bucky-seo"); ?>
                                        </h5>
                                        <p class="card-text">
                                            <?php if (isset($results['meta_tags']['title'])): ?>
                                            <?php if (strlen($results['meta_tags']['title']) > 60): ?>
                                            <textarea class="form-control" placeholder=""
                                                      id="metatitlevalue" style="height: 100px"
                                                      disabled><?php echo esc_html($results['meta_tags']['title']); ?></textarea>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("Your title length is beyond 60 characters, and maybe not all the content will be visible in search results.", "bucky-seo"); ?>
                                        </div>
                                        <?php else: ?>
                                            <textarea class="form-control" placeholder=""
                                                      id="metatitlevalue" style="height: 100px"
                                                      disabled><?php echo esc_html($results['meta_tags']['title']); ?></textarea>
                                            <div class="text-center alert alert-success" role="alert">
                                                <?php esc_html_e("Great job! You have a nice title for your page.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div class="text-center alert alert-danger" role="alert">
                                                <?php esc_html_e("There is no title on your website.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <small><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-meta-tags/#title", "bucky-seo"); ?>"
                                                  target="_blank"><?php esc_html_e("Learn more about SEO title", "bucky-seo"); ?>
                                                <i
                                                        class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="mt-metadesc-option" class="col">
                                <div class="card border-dark shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><i class="fa-solid fa-book-open fa-2xl"></i>
                                            <?php esc_html_e("Meta Description", "bucky-seo"); ?></h5>
                                        <p class="card-text">
                                            <?php if (isset($results['meta_tags']['description'])): ?>
                                            <?php if (strlen($results['meta_tags']['description']) > 170): ?>
                                            <textarea class="form-control" placeholder=""
                                                      id="metadescvalue" style="height: 100px"
                                                      disabled><?php echo esc_html($results['meta_tags']['description']); ?></textarea>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("Your description length is beyond 170 characters, and maybe not all the content will be visible in search results.", "bucky-seo"); ?>
                                        </div>
                                        <?php else: ?>
                                            <textarea class="form-control" placeholder=""
                                                      id="metadescvalue" style="height: 100px"
                                                      disabled><?php echo esc_html($results['meta_tags']['description']); ?></textarea>
                                            <div class="text-center alert alert-success" role="alert">
                                                <?php esc_html_e("Great job! You have a meta description for your homepage.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div class="text-center alert alert-danger" role="alert">
                                                <?php esc_html_e("There is no meta description for the homepage.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <small><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-meta-tags/#description", "bucky-seo"); ?>"
                                                  target="_blank"><?php esc_html_e("Learn more about meta description for SEO", "bucky-seo"); ?>
                                                <i
                                                        class="fa-regular fa-circle-question fa-shake fa-xl "></i></a></small>
                                    </div>
                                </div>
                            </div>
                            <div id="mt-keywords-option" class="col">
                                <div class="card border-dark shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><i class="fa-solid fa-key fa-2xl"></i>
                                            Keywords</h5>
                                        <p class="card-text">
                                            <?php if (isset($results['meta_tags']['keywords'])): ?>
                                            <?php $keywords = $results['meta_tags']['keywords'];
                                            $word_count = str_word_count($keywords, 0, ','); ?>
                                        <div class="text-center alert alert-success" role="alert">
                                            <?php echo esc_html($keywords); ?>
                                        </div>
                                        <div class="text-center">
                                            <p><?php esc_html_e("Total Keywords", "bucky-seo"); ?>
                                                : <?php echo esc_html($word_count); ?></p>
                                        </div>
                                        <?php else: ?>
                                            <div class="text-center alert alert-warning" role="alert">
                                                <?php esc_html_e("You don't have keywords on your homepage.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <small><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-meta-tags/#keywords", "bucky-seo"); ?>"
                                                  target="_blank"><?php esc_html_e("Learn more about keywords for SEO", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ga-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseThree">
                    <?php esc_html_e("Analytics", "bucky-seo"); ?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
                        <div id="ga-analytics-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <i class="fa-solid fa-chart-simple fa-2xl"></i> Google Analytics 4
                                    </h5>
                                    <p class="card-text">
                                        <?php $found_script = false;
                                        $count_repeats = 0;
                                        foreach ($results['script_tags'] as $src):
                                            if (strpos($src, 'googletagmanager.com/gtag/js?id=') !== false):
                                                $found_script = true;
                                                $count_repeats++;
                                            endif;
                                        endforeach;
                                        if ($found_script): if ($count_repeats >= 2): ?>
                                    <div class="text-center alert alert-warning" role="alert">
                                        <?php esc_html_e("There is more than one script for Analytics. You should merge them or only have one, as Google documentation says.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-success" role="alert">
                                            <?php esc_html_e("Great job! Your site has GA4 installed.", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("Your site doesnt have Google Analytics installed.", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary"><a class="link-offset-1"
                                                                          href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/es/seo-analytics/#ga4", "bucky-seo"); ?>"
                                                                          target="_blank"><?php esc_html_e("Learn more about Google Analytics and its importance for your website.", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="st-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseFour">
                    <?php esc_html_e("Technical SEO", "bucky-seo"); ?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="row mb-5 row-cols-1 row-cols-md-3 g-4">
                        <div id="st-minjs-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-file-code fa-2xl"></i>
                                        <?php esc_html_e("Minified JavaScript", "bucky-seo"); ?> </h5>
                                    <p class="card-text">
                                        <?php
                                        $count_js = 0;
                                        $count_minified_js = 0;
                                        $unminified_js = array();
                                        foreach ($results['script_tags'] as $src):
                                            if (strpos($src, '.js') !== false && strpos($src, '.min.js') === false) {
                                                $count_js++;
                                                $unminified_js[] = $src;
                                            } elseif (strpos($src, '.min.js') !== false) {
                                                $count_minified_js++;
                                            }
                                        endforeach;
                                        ?>
                                        <?php if ($count_js > 0 || $count_minified_js > 0): ?>
                                        <?php if ($count_js == 0 && $count_minified_js > 0): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Great job! Your site has all your JavaScript files minified.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("JavaScript minified", "bucky-seo"); ?>
                                            : <?php echo esc_html($count_minified_js); ?>
                                            <br>
                                            <?php esc_html_e("JavaScript without minification", "bucky-seo"); ?>:
                                            <span class="badge text-bg-danger rounded-pill"><?php echo esc_html($count_js); ?></span>
                                            <br>
                                        </div>
                                        <div class="text-center">
                                            <p><?php esc_html_e("You should consider minifying all your JavaScript files.", "bucky-seo"); ?></p>
                                        </div>
                                        <?php if ($count_js > 0): ?>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary mb-3"
                                                        data-bs-toggle="modal" data-bs-target="#modalJS">
                                                    <?php esc_html_e("View JavaScript files without minification.", "bucky-seo"); ?>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                        <div class="text-center"><p><a class="link-offset-1"
                                                                       href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#js", "bucky-seo"); ?>"
                                                                       target="_blank">
                                                    <?php esc_html_e("Learn more about minification and JavaScript.", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("There are no minified JavaScript files.", "bucky-seo"); ?>
                                        </div>
                                        <p><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#js", "bucky-seo"); ?>"
                                              target="_blank">
                                                <?php esc_html_e("Learn more about the benefits of minified JavaScript.", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                        </p>
                                    <?php endif; ?>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalJS" tabindex="-1" aria-labelledby="modalJSLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5"
                                                        id="modalJSLabel"><?php esc_html_e("JavaScript files without minification.", "bucky-seo"); ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($count_js > 0): ?>
                                                        <div class="list-group">
                                                            <?php foreach ($unminified_js as $js): ?>
                                                                <a class="list-group-item list-group-item-warning list-group-item-action"><?php echo esc_html($js); ?></a>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("There are no JavaScript files.", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary"><?php esc_html_e("WordPress by default minifies the core JavaScript files. However, some themes and plugins do not do it by default.", "bucky-seo"); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="st-mincss-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-file-lines fa-2xl"></i>
                                        <?php esc_html_e("Minified CSS", "bucky-seo"); ?></h5>
                                    <p class="card-text">
                                        <?php $count_css = 0;
                                        $count_minified = 0;
                                        $unminified_css = array();
                                        foreach ($results['stylesheets'] as $href):
                                            if (strpos($href, '.css') !== false && strpos($href, '.min.css') === false) {
                                                $count_css++;
                                                $unminified_css[] = $href;
                                            } elseif (strpos($href, '.min.css') !== false) {
                                                $count_minified++;
                                            }
                                        endforeach;
                                        ?>
                                        <?php if ($count_css > 0 || $count_minified > 0): ?>
                                        <?php if ($count_css == 0 && $count_minified > 0): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Great job! Your site has all your CSS files minified.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("Minified CSS", "bucky-seo"); ?>
                                            : <?php echo esc_html($count_minified); ?>
                                            <br>
                                            <?php esc_html_e("CSS without minification", "bucky-seo"); ?>:
                                            <span class="badge text-bg-danger rounded-pill"><?php echo esc_html($count_css); ?></span>
                                            <br>
                                        </div>
                                        <div class="text-center">
                                            <p><?php esc_html_e("You should consider minifying all your CSS files.", "bucky-seo"); ?></p>
                                        </div>

                                        <?php if ($count_css > 0): ?>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary mb-3"
                                                        data-bs-toggle="modal" data-bs-target="#modalCSS">
                                                    <?php esc_html_e("View CSS files without minification.", "bucky-seo"); ?>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                        <div class="text-center"><p><a class="link-offset-1"
                                                                       href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#css", "bucky-seo"); ?>"
                                                                       target="_blank">
                                                    <?php esc_html_e("Learn more about minification and CSS.", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                            </p></div>
                                    <?php endif; ?>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("There are no minified CSS files.", "bucky-seo"); ?>
                                        </div>
                                        <p><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#css", "bucky-seo"); ?>"
                                              target="_blank">
                                                <?php esc_html_e("Learn more about the benefits of minified CSS.", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl "></i></a>
                                        </p>
                                    <?php endif; ?>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalCSS" tabindex="-1" aria-labelledby="modalCSSlLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalCSSlLabel">
                                                        <?php esc_html_e("CSS files without minification.", "bucky-seo"); ?>
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($count_css > 0): ?>
                                                        <div class="list-group">
                                                            <?php foreach ($unminified_css as $css): ?>
                                                                <a class="list-group-item list-group-item-warning list-group-item-action"><?php echo esc_html($css); ?></a>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("There are no CSS files.", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <?php esc_html_e("WordPress by default minifies the core CSS files. However, some themes and plugins don't do it by default.", "bucky-seo"); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="st-gzip-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-file-zipper fa-2xl"></i>
                                        <?php esc_html_e("Gzip compression", "bucky-seo"); ?></h5>
                                    <p class="card-text">
                                        <?php if ($results['gzip_enabled']): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Great job! Your site has enabled Gzip compression.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("It seems that your site doesn't have Gzip compression enabled.", "bucky-seo"); ?>
                                        </div>
                                        <p><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#gzip", "bucky-seo"); ?>"
                                              target="_blank">
                                                <?php esc_html_e("Learn how Gzip can make your site faster.", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl"></i></a>
                                        </p>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <?php esc_html_e("Gzip compression is the most popular because it has greater compatibility with the most commonly used browsers.", "bucky-seo"); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="st-iframe-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-code fa-2xl"></i>
                                        <?php esc_html_e("Iframe", "bucky-seo"); ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                        $count_iframes = !empty($results['iframe_tags']) ? count($results['iframe_tags']) : 0;
                                        ?>
                                        <?php if ($count_iframes > 0): ?>
                                    <div class="text-center alert alert-warning" role="alert">
                                        <?php esc_html_e("Total Iframes", "bucky-seo"); ?>
                                        : <?php echo esc_html($count_iframes); ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                                data-bs-target="#modalIframes">
                                            <?php esc_html_e("Show Iframes", "bucky-seo"); ?>
                                        </button>
                                        <p><a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#iframes", "bucky-seo"); ?>"
                                              target="_blank">
                                                <?php esc_html_e("Learn more about how iframes can affect your site.", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl"></i></a>
                                        </p>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("There are no iframes on your homepage.", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalIframes" tabindex="-1"
                                         aria-labelledby="modalIframesLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalIframesLabel">
                                                        <?php esc_html_e("Iframes list", "bucky-seo"); ?>
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($count_iframes > 0): ?>
                                                        <div class="list-group">
                                                            <?php foreach ($results['iframe_tags'] as $iframe): ?>
                                                                <a class="list-group-item list-group-item-warning list-group-item-action"><?php echo esc_html($iframe); ?></a>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("No Iframes to show", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <?php esc_html_e("iFrames don't affect SEO as much as you might think. Google still advises that you only use them when absolutely necessary.", "bucky-seo"); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="st-cloudflare-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-brands fa-cloudflare fa-2xl"></i>
                                        Cloudflare</h5>
                                    <p class="card-text">
                                        <?php if ($results['is_cloudflare']): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Great job! Your site has Cloudflare.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("It seems that your website doesn't have Cloudflare.", "bucky-seo"); ?>
                                        </div>
                                        <div class="text-center">
                                            <p>
                                                <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#cloudflare", "bucky-seo"); ?>"
                                                   target="_blank">
                                                    <?php esc_html_e("Learn more about Cloudflare and how it can improve your website.", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                                </a>
                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <?php esc_html_e("Cloudflare has its own plugin for WordPress.", "bucky-seo"); ?>
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#cloudflare", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("Learn about the benefits of combining Cloudflare with WordPress.", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl "></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="st-webp-option" class="col">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-images fa-2xl"></i>
                                        <?php esc_html_e("Next-gen image formats", "bucky-seo"); ?>: WebP</h5>
                                    <p class="card-text">
                                        <?php
                                        $webp_count = 0;
                                        $jpg_count = 0;
                                        $jpeg_count = 0;
                                        $png_count = 0;

                                        // Verifica si $results['img_tags'] no es nulo y es un array
                                        if (!is_null($results['img_tags']) && is_array($results['img_tags'])) {
                                            foreach ($results['img_tags'] as $src) {
                                                if (strpos($src, '.webp') !== false) {
                                                    $webp_count++;
                                                } elseif (strpos($src, '.jpg') !== false) {
                                                    $jpg_count++;
                                                } elseif (strpos($src, '.jpeg') !== false) {
                                                    $jpeg_count++;
                                                } elseif (strpos($src, '.png') !== false) {
                                                    $png_count++;
                                                }
                                            }
                                        }

                                        ?>
                                        <?php if ($webp_count > 0): ?>
                                        <?php if ($jpg_count > 0 || $png_count > 0 || $jpeg_count > 0): ?>
                                    <div class="text-center alert alert-warning" role="alert">
                                        <?php esc_html_e("You have WebP images, but also have some images in other formats, like jpg, jpeg, or png.", "bucky-seo"); ?>
                                    </div>
                                    <p>
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#nextgen", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("You should consider converting your images to WebP.", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </p>
                                    <?php else: ?>
                                        <div class="text-center alert alert-success" role="alert">
                                            <?php esc_html_e("Great job! You have WebP images", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("Your website doesn't seem to be using WebP images. Consider using them for faster loading times.", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="accordion" id="accordionImgs">
                                        <?php if ($jpg_count > 0): ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOnejpg"
                                                            aria-expanded="false" aria-controls="collapseOnejpg">
                                                        <?php esc_html_e("JPG images", "bucky-seo"); ?>: <?php echo esc_html($jpg_count); ?>
                                                    </button>
                                                </h2>
                                                <div id="collapseOnejpg" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionImgs">
                                                    <div class="accordion-body text-center">
                                                        <button type="button" class="btn btn-primary mb-3"
                                                                data-bs-toggle="modal" data-bs-target="#modalImgjpg">
                                                            <?php esc_html_e("View JPG images", "bucky-seo"); ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($jpeg_count > 0): ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOnejpeg"
                                                            aria-expanded="false" aria-controls="collapseOnejpeg">
                                                        <?php esc_html_e("JPEG images", "bucky-seo"); ?>
                                                        : <?php echo esc_html($jpeg_count); ?>
                                                    </button>
                                                </h2>
                                                <div id="collapseOnejpeg" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionImgs">
                                                    <div class="accordion-body text-center">
                                                        <button type="button" class="btn btn-primary mb-3"
                                                                data-bs-toggle="modal" data-bs-target="#modalImgjpeg">
                                                            <?php esc_html_e("View JPEG images", "bucky-seo"); ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($png_count > 0): ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOnepng"
                                                            aria-expanded="false" aria-controls="collapseOnepng">
                                                        <?php esc_html_e("PNG images", "bucky-seo"); ?>
                                                        : <?php echo esc_html($png_count); ?>
                                                    </button>
                                                </h2>
                                                <div id="collapseOnepng" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionImgs">
                                                    <div class="accordion-body text-center">
                                                        <button type="button" class="btn btn-primary mb-3"
                                                                data-bs-toggle="modal" data-bs-target="#modalImgpng">
                                                            <?php esc_html_e("View PNG images", "bucky-seo"); ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Modal JPG -->
                                    <div class="modal fade" id="modalImgjpg" tabindex="-1"
                                         aria-labelledby="modalImgjpgLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalImgjpgLabel">
                                                        <?php esc_html_e("JPG images found", "bucky-seo"); ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($jpg_count > 0): ?>
                                                        <?php
                                                        // Filtrar solo las imágenes en formato png
                                                        $jpg_images = array_filter($results['img_tags'], function ($img) {
                                                            return strpos($img, '.jpg') !== false;
                                                        });

                                                        // Iterar sobre las imágenes png
                                                        foreach ($jpg_images as $jpg): ?>
                                                            <p class="d-inline-flex gap-1">
                                                                <a class="btn btn-light" data-bs-toggle="collapse"
                                                                   href="#<?php echo esc_url($jpg); ?>" role="button"
                                                                   aria-expanded="false"
                                                                   aria-controls="<?php echo esc_html($jpg); ?>">
                                                                    <?php echo esc_html($jpg); ?>
                                                                </a>
                                                            </p>
                                                            <div class="collapse" id="<?php echo esc_html($jpg); ?>">
                                                                <div class="card card-body">
                                                                    <img src="<?php echo esc_url($jpg); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("JPG images not found", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal JPEG -->
                                    <div class="modal fade" id="modalImgjpeg" tabindex="-1"
                                         aria-labelledby="modalImgjpegLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalImgjpegLabel">
                                                        <?php esc_html_e("JPEG images found", "bucky-seo"); ?>
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($jpeg_count > 0): ?>
                                                        <?php
                                                        // Filtrar solo las imágenes en formato png
                                                        $jpeg_images = array_filter($results['img_tags'], function ($img) {
                                                            return strpos($img, '.jpeg') !== false;
                                                        });

                                                        // Iterar sobre las imágenes png
                                                        foreach ($jpeg_images as $jpeg): ?>
                                                            <p class="d-inline-flex gap-1">
                                                                <a class="btn btn-light" data-bs-toggle="collapse"
                                                                   href="#<?php echo esc_url($jpeg); ?>" role="button"
                                                                   aria-expanded="false"
                                                                   aria-controls="<?php echo esc_html($jpeg); ?>">
                                                                    <?php echo esc_html($jpeg); ?>
                                                                </a>
                                                            </p>
                                                            <div class="collapse" id="<?php echo esc_html($jpeg); ?>">
                                                                <div class="card card-body">
                                                                    <img src="<?php echo esc_url($jpeg); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("JPEG images not found", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal PNG -->
                                    <div class="modal fade" id="modalImgpng" tabindex="-1"
                                         aria-labelledby="modalImgpngLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalImgpngLabel">
                                                        <?php esc_html_e("PNG images found", "bucky-seo"); ?>
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($png_count > 0): ?>
                                                        <?php
                                                        // Filtrar solo las imágenes en formato png
                                                        $png_images = array_filter($results['img_tags'], function ($img) {
                                                            return strpos($img, '.png') !== false;
                                                        });

                                                        // Iterar sobre las imágenes png
                                                        foreach ($png_images as $png): ?>
                                                            <p class="d-inline-flex gap-1">
                                                                <a class="btn btn-light" data-bs-toggle="collapse"
                                                                   href="#<?php echo esc_url($png); ?>" role="button"
                                                                   aria-expanded="false"
                                                                   aria-controls="<?php echo esc_html($png); ?>">
                                                                    <?php echo esc_html($png); ?>
                                                                </a>
                                                            </p>
                                                            <div class="collapse" id="<?php echo esc_html($png); ?>">
                                                                <div class="card card-body">
                                                                    <img src="<?php echo esc_url($png); ?>">
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("PNG images not found", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <?php esc_html_e("Each format has its own use and purpose.", "bucky-seo"); ?>
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/technical-seo/#nextgen", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("Learn more about images and their purpose.", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseFive">
                    <?php esc_html_e("Content", "bucky-seo"); ?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show">
                <div class="accordion-body ">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div id="content-strucutred-option" class="col">
                                <div class="card mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark"
                                     style="max-width: 540px;">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-3 text-center">
                                            <i class="fa-solid fa-square-poll-horizontal fa-5x"></i>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php esc_html_e("Structured data", "bucky-seo"); ?></h5>
                                                <p class="card-text">
                                                    <?php
                                                    $count_strucutred = !empty($results['structured_data']) ? count($results['structured_data']) : 0;
                                                    ?>
                                                    <?php if ($count_strucutred > 0): ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php esc_html_e("Great job! you have", "bucky-seo"); ?><?php echo esc_html($count_strucutred); ?>
                                                    <?php esc_html_e("Types of structured data.", "bucky-seo"); ?>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary mb-3"
                                                            data-bs-toggle="modal" data-bs-target="#modalStructured">
                                                        <?php esc_html_e("Check structured data", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                                <?php else: ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php esc_html_e("Your website doesn't have structured data.", "bucky-seo"); ?>
                                                    </div>
                                                    <p>
                                                        <a class="link-offset-1"
                                                           href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-content/#structured", "bucky-seo"); ?>"
                                                           target="_blank">
                                                            <?php esc_html_e("Don't know what type of structured data to choose?", "bucky-seo"); ?>
                                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                                        </a>
                                                    </p>
                                                <?php endif; ?>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalStructured" tabindex="-1"
                                                     aria-labelledby="modalStructuredLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="modalStructuredLabel">
                                                                    <?php esc_html_e("Structured data found", "bucky-seo"); ?>
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if ($count_strucutred > 0): ?>
                                                                    <ul class="list-group">
                                                                        <?php foreach ($results['structured_data'] as $typeofstructured): ?>
                                                                            <li class="list-group-item"><?php echo esc_html($typeofstructured); ?></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                <?php else: ?>
                                                                    <p><?php esc_html_e("Structured data not found", "bucky-seo"); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">
                                                <?php esc_html_e("JSON-LD is the recommended format for structured data", "bucky-seo"); ?>
                                                <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-content/#structured", "bucky-seo"); ?>"
                                                   target="_blank">
                                                    <?php esc_html_e("Learn more about the importance of structured data.", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="content-hreflang-option" class="col">
                                <div class="card mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark"
                                     style="max-width: 540px;">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-3 text-center">
                                            <i class="fa-solid fa-earth-americas fa-5x"></i>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title">Hreflang</h5>
                                                <p class="card-text">
                                                    <?php
                                                    // Contar la cantidad de enlaces hreflang
                                                    $count_hreflang_links = !empty($results['alternate_links']) ? count($results['alternate_links']) : 0;
                                                    ?>
                                                    <?php if ($count_hreflang_links > 0): ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php esc_html_e("Hreflang found.", "bucky-seo"); ?>
                                                    : <?php echo esc_html($count_hreflang_links); ?>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary mb-3"
                                                            data-bs-toggle="modal" data-bs-target="#modalHreflang">
                                                        <?php esc_html_e("Check Hreflang", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                                <?php else: ?>
                                                    <div class="alert alert-warning" role="alert">
                                                        <?php esc_html_e("Hreflang not found.", "bucky-seo"); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalHreflang" tabindex="-1"
                                                     aria-labelledby="modalHreflangLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="modalHreflangLabel">
                                                                    <?php esc_html_e("Hreflang found", "bucky-seo"); ?>
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if ($count_hreflang_links > 0): ?>
                                                                    <table class="table table table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col"><?php esc_html_e("Language", "bucky-seo"); ?></th>
                                                                            <th scope="col">URL</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php foreach ($results['alternate_links'] as $hreflang_link): ?>
                                                                            <tr>
                                                                                <th scope="row"><?php echo esc_html($hreflang_link['hreflang']); ?></th>
                                                                                <td>
                                                                                    <a href="<?php echo esc_url($hreflang_link['href']); ?>"
                                                                                       target="_blank"><?php echo esc_html($hreflang_link['href']); ?></a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                                <?php else: ?>
                                                                    <p><?php esc_html_e("Hreflang not available", "bucky-seo"); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">
                                                <?php esc_html_e("Hreflang tags should be used on websites that have different languages and regions to indicate the appropriate version for users.", "bucky-seo"); ?>
                                                <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-content/#int", "bucky-seo"); ?>"
                                                   target="_blank">
                                                    <?php esc_html_e("Learn more about internationalization.", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="content-h1-option" class="col">
                                <div class="card mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark"
                                     style="max-width: 540px;">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-3 text-center">
                                            <i class="fa-solid fa-heading fa-5x"></i>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php esc_html_e("H1 tags", "bucky-seo"); ?></h5>
                                                <p class="card-text">
                                                    <?php
                                                    $count_h1 = !empty($results['h1_tags']) ? count($results['h1_tags']) : 0;
                                                    ?>
                                                    <?php if ($count_h1 > 0): ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <?php esc_html_e("Total of H1 tags", "bucky-seo"); ?>
                                                    : <?php echo esc_html($count_h1); ?>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary mb-3"
                                                            data-bs-toggle="modal" data-bs-target="#modalH1">
                                                        <?php esc_html_e("View H1 tags", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                                <?php else : ?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php esc_html_e("H1 tags not found", "bucky-seo"); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalH1" tabindex="-1"
                                                     aria-labelledby="modalH1Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5"
                                                                    id="modalH1Label"><?php esc_html_e("H1 tags found", "bucky-seo"); ?></h1>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if ($count_h1 > 0): ?>
                                                                    <div class="list-group">
                                                                        <?php foreach ($results['h1_tags'] as $h1): ?>
                                                                            <a class="list-group-item list-group-item-warning list-group-item-action"><?php echo esc_html($h1); ?></a>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                <?php else: ?>
                                                                    <p><?php esc_html_e("Not tags found", "bucky-seo"); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">
                                                <?php esc_html_e("There are a lot of myths around H1 tags, like using more than one can negatively impact SEO.", "bucky-seo"); ?>
                                                <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-content/#h1", "bucky-seo"); ?>"
                                                   target="_blank">
                                                    <?php esc_html_e("Learn about H1 tags for SEO and accessibility", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="content-canonical-option" class="col">
                                <div class="card mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark"
                                     style="max-width: 540px;">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-3 text-center">
                                            <i class="fa-solid fa-copy fa-5x"></i>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php esc_html_e("Canonical tag", "bucky-seo"); ?></h5>
                                                <p class="card-text">
                                                    <?php
                                                    // Contar la cantidad de enlaces canonical
                                                    $count_canonical_links = !empty($results['canonical_links']) ? count($results['canonical_links']) : 0;
                                                    ?>
                                                    <?php if ($count_canonical_links > 0): ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php esc_html_e("Total of canonical tags", "bucky-seo"); ?>
                                                    : <?php echo esc_html($count_canonical_links); ?>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary mb-3"
                                                            data-bs-toggle="modal" data-bs-target="#modalCanonical">
                                                        <?php esc_html_e("Check canonical tags", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                                <?php else: ?>
                                                    <div class="alert alert-warning" role="alert">
                                                        <?php esc_html_e("Canonical tags not found", "bucky-seo"); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalCanonical" tabindex="-1"
                                                     aria-labelledby="modalCanonicalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="modalCanonicalLabel">
                                                                    <?php esc_html_e("Canonical tags found", "bucky-seo"); ?>
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if ($count_canonical_links > 0): ?>
                                                                    <table class="table table-striped">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col">URL</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php foreach ($results['canonical_links'] as $canonical_link): ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="<?php echo esc_html($canonical_link); ?>"
                                                                                       target="_blank"><?php echo esc_html($canonical_link); ?></a>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                                <?php else: ?>
                                                                    <p><?php esc_html_e("Canonical tags not found", "bucky-seo"); ?></p>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-body-secondary">
                                                <?php esc_html_e("Google just indexes one version of the duplicated content in search results", "bucky-seo"); ?>
                                                <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-content/#canonical", "bucky-seo"); ?>"
                                                   target="_blank">
                                                    <?php esc_html_e("Learn more about canonical tags", "bucky-seo"); ?>
                                                    <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseSix">
                    Mobile
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show">
                <div class="accordion-body ">
                    <div class="container text-center">
                        <div class="row justify-content-center">
                            <div id="mobile-viewport-option" class="col-6">
                                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                    <div class="card-header">
                                        <i class="fa-solid fa-mobile-screen-button fa-2xl"></i> Viewport
                                    </div>
                                    <div class="card-body">
                                        <?php if (isset($results['meta_tags']['viewport'])): ?>
                                            <div class="text-center alert alert-success" role="alert">
                                                <?php esc_html_e("Great job! Your site have a right viewport configuration.", "bucky-seo"); ?>
                                            </div>
                                            <div class="mb-4 row">
                                                <label for="inputPassword" value="asd"
                                                       class="col-sm-12 col-form-label text-start">
                                                    <?php esc_html_e("Viewport content", "bucky-seo"); ?>:
                                                </label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" id="inputPassword" type="text"
                                                           value="<?php echo esc_html(($results['meta_tags']['viewport'])); ?>"
                                                           aria-label="Disabled input example" disabled readonly>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="text-center alert alert-warning" role="alert">
                                                <?php esc_html_e("Viewport not found.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        <p>
                                            <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-mobile/#viewport", "bucky-seo"); ?>"
                                               target="_blank">
                                                <?php esc_html_e("Learn more about viewport and responsive behavior", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <small>
                                            <?php esc_html_e("Viewport uses HTML5 tags to indicate the size of the visible area", "bucky-seo"); ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="mobile-amp-option" class="col-6">
                                <div class="card shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                    <div class="card-header">
                                        <i class="fa-solid fa-mobile-screen-button fa-2xl"></i> AMP mobile
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $count_amphtml_links = !empty($results['amphtml_links']) ? count($results['amphtml_links']) : 0;
                                        ?>
                                        <?php if ($count_amphtml_links > 0): ?>
                                            <div class="text-center alert alert-success" role="alert">
                                                <?php esc_html_e("AMP version founds", "bucky-seo"); ?>
                                                : <?php echo esc_html($count_amphtml_links); ?>
                                            </div>
                                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                                                    data-bs-target="#modalAMP">
                                                <?php esc_html_e("View AMP versions", "bucky-seo"); ?>
                                            </button>
                                        <?php else: ?>
                                            <div class="text-center alert alert-warning" role="alert">
                                                <?php esc_html_e("AMP pages not found.", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalAMP" tabindex="-1"
                                             aria-labelledby="modalAMPLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="modalAMPLabel">
                                                            <?php esc_html_e("AMP links", "bucky-seo"); ?>
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php if ($count_amphtml_links > 0): ?>
                                                            <table class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">URL</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach ($results['amphtml_links'] as $amphtml_links): ?>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="<?php echo esc_url($amphtml_links); ?>"
                                                                               target="_blank"><?php echo esc_html($amphtml_links); ?></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        <?php else: ?>
                                                            <p><?php esc_html_e("Not AMP to show", "bucky-seo"); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <small><?php esc_html_e("AMP means Accelerated Mobile Pages", "bucky-seo"); ?>
                                            <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/seo-mobile/#amp", "bucky-seo"); ?>"
                                               target="_blank">
                                                <br><?php esc_html_e("Learn more about AMP pages", "bucky-seo"); ?>
                                                <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wpseo-accordion" class="accordion-item border border-dark-subtle border-opacity-10">
            <h2 class="accordion-header">
                <button class="accordion-button border border-dark-subtle border-opacity-10" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseSeven">
                    <?php esc_html_e("Wordpress Analysis", "bucky-seo"); ?>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                        <div id="wpseo-http-option" class="col individual-options">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-brands fa-expeditedssl fa-2xl"></i>
                                        HTTPS</h5>
                                    <p class="card-text">
                                        <?php if (isset($results['is_https']) && $results['is_https'] === true): ?>
                                    <div class="text-center alert alert-success" role="alert">
                                        <?php esc_html_e("Your website has an active SSL certificate.", "bucky-seo"); ?>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("Your website does not have an active SSL certificate, so HTTPS is not available.", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/wordpress-seo-analysis/#https", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("An SSL certificate can help improve your website's SEO", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="wpseo-version-option" class="col individual-options">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        <i class="fa-brands fa-wordpress fa-2xl"></i>
                                        <?php esc_html_e("Wordpress version", "bucky-seo"); ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (isset($results['current_version'])): ?>
                                    <div>
                                        <div class="text-center alert alert-success" role="alert">
                                            <p>
                                                <?php esc_html_e("Actual version of Wordpress", "bucky-seo"); ?>
                                                : <?php echo esc_html($results['current_version']); ?>
                                            </p>
                                            <p>
                                                <?php esc_html_e("Most recent version", "bucky-seo"); ?>
                                                : <?php echo esc_html($results['latest_version']); ?>
                                            </p>
                                        </div>
                                        <?php if ($results['is_up_to_date']): ?>
                                            <div class="text-center alert alert-success" role="alert">
                                                <?php esc_html_e("Your Wordpress version is up to date.", "bucky-seo"); ?>
                                            </div>
                                        <?php else: ?>
                                            <div class="text-center alert alert-danger" role="alert">
                                                <?php esc_html_e("Your Wordpress version is not up to date", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/wordpress-seo-analysis/#version", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("Learn about how your Wordpress version can affect your performance on SEO", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="wpseo-install-option" class="col individual-options">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-file-arrow-up fa-2xl"></i>
                                        <?php esc_html_e("Total size of the installation", "bucky-seo"); ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (isset($results['directory_size'])): ?>
                                    <div>
                                        <div class="text-center alert alert-warning" role="alert">
                                            <?php esc_html_e("Size on MB", "bucky-seo"); ?>:
                                            <br><?php echo esc_html($results['directory_size']); ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/wordpress-seo-analysis/#installation", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("Discover how the size of your WordPress installation can negatively affect your website's SEO", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="wpseo-theme-option" class="col individual-options">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-folder-tree fa-2xl"></i>
                                        <?php esc_html_e("Active theme", "bucky-seo"); ?></h5>
                                    <p class="card-text">
                                        <?php if (isset($results['active_theme'])): ?>
                                        <?php $active_theme = wp_get_theme(); ?>
                                        <?php if ($active_theme instanceof WP_Theme): ?>
                                    <div>
                                        <div class="text-center alert alert-success" role="alert">
                                            <?php esc_html_e("Your active theme", "bucky-seo"); ?>
                                            : <?php echo esc_html($active_theme->get('Name')); ?>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                        <div class="text-center alert alert-danger" role="alert">
                                            <?php esc_html_e("No active theme", "bucky-seo"); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/wordpress-seo-analysis/#themes", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("How can your website theme choice affect your SEO?", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="wpseo-plugin-option" class="col individual-options">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i
                                                class="fa-solid fa-plug-circle-exclamation fa-2xl"></i> Plugins</h5>
                                    <p class="card-text">
                                        <?php $count_inactive_plugins = count($results['inactive_plugins']);
                                        $count_active_plugins = count($results['active_plugins']); ?>
                                    <div>
                                        <?php if ($count_active_plugins > 0): ?>
                                            <div class="text-center alert alert-warning" role="alert">
                                                <?php esc_html_e("Active plugins", "bucky-seo"); ?>
                                                : <?php echo esc_html($count_active_plugins); ?>
                                            </div>
                                        <?php else: ?>
                                            <div class="text-center alert alert-danger" role="alert">
                                                <?php esc_html_e("No active plugins", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($count_inactive_plugins > 0): ?>
                                            <div class="text-center alert alert-danger" role="alert">
                                                <?php esc_html_e("Inactive plugins", "bucky-seo"); ?>
                                                : <?php echo esc_html($count_inactive_plugins); ?>
                                            </div>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary mb-3"
                                                        data-bs-toggle="modal" data-bs-target="#modalInactiveplugins">
                                                    <?php esc_html_e("View inactive plugins", "bucky-seo"); ?>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalInactiveplugins" tabindex="-1"
                                         aria-labelledby="modalInactivepluginsLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="modalInactivepluginsLabel">
                                                        <?php esc_html_e("Inactive plugins found", "bucky-seo"); ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php if ($count_inactive_plugins > 0): ?>
                                                        <div class="list-group">
                                                            <?php foreach ($results['inactive_plugins'] as $plugin_info): ?>
                                                                <a class="list-group-item list-group-item-danger list-group-item-action"><?php echo esc_html($plugin_info['Name']); ?></a>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <p><?php esc_html_e("No inactive plugins to show", "bucky-seo"); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal"><?php esc_html_e("Close", "bucky-seo"); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/wordpress-seo-analysis/#plugins", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("While inactive plugins generally don't slow down your site, they can still affect your site security and SEO.", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div id="wpseo-perma-option" class="col individual-options">
                            <div class="card h-100 shadow-lg p-3 mb-5 bg-body-tertiary rounded border-dark">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><i class="fa-solid fa-link fa-2xl"></i>
                                        <?php esc_html_e("Permalinks", "bucky-seo"); ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php if (isset($results['permalink_structure_active'])): ?>
                                    <div class="permalink-structure-info">
                                        <?php if ($results['permalink_structure_active']): ?>
                                            <div class="text-center alert alert-success" role="alert">
                                            <?php if (isset($results['permalink_structure_value'])): $permalink_structure = $results['permalink_structure_value'];
                                                switch ($permalink_structure) {
                                                    case '/%year%/%monthnum%/%day%/%postname%/':
                                                        echo esc_html_e("Day and name", "bucky-seo");
                                                        break;
                                                    case '/%postname%/':
                                                        echo esc_html_e("Post name", "bucky-seo");
                                                        break;
                                                    case '/archivo/%post_id%':
                                                        echo esc_html_e("Numeric", "bucky-seo");
                                                        break;
                                                    case '/%year%/%monthnum%/%postname%/':
                                                        echo esc_html_e("Month and name", "bucky-seo");
                                                        break;
                                                    default:
                                                        echo esc_html__("Custom structure", "bucky-seo");
                                                } ?>
                                                </div>
                                            <?php else: ?>
                                                <div class="text-center alert alert-success" role="alert">
                                                    <?php esc_html_e("Not defined and not found", "bucky-seo"); ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div class="text-center alert alert-success" role="alert">
                                                <?php esc_html_e("Permalinks not active", "bucky-seo"); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        <a class="link-offset-1" href="<?php esc_html_e("https://osdeibi.dev/wp-plugin/en/wordpress-seo-analysis/#permalinks", "bucky-seo"); ?>"
                                           target="_blank">
                                            <?php esc_html_e("Learn how a good permalink strucutre can improve your SEO", "bucky-seo"); ?>
                                            <i class="fa-regular fa-circle-question fa-shake fa-xl"></i>
                                        </a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>