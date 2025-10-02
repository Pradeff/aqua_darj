<?php
// Include config file safely
if (file_exists('config.php')) {
    require_once 'config.php';
} else {
    // Fallback constants
    /*define('BUSINESS_NAME', 'Aquaguard Darjeeling');
    define('BUSINESS_BRAND', 'Eureka Forbes');
    define('BUSINESS_CITY', 'Darjeeling');
    define('BUSINESS_PHONE', '18602661177');
    define('BUSINESS_EMAIL', 'info@aquaguarddarjeeling.com');
    define('BUSINESS_WHATSAPP_URL', 'https://wa.me/918602661177');
    $BUSINESS_SERVICE_AREAS = ['Darjeeling', 'Kalimpong', 'Siliguri'];*/
}

$service_areas = isset($BUSINESS_SERVICE_AREAS) ? $BUSINESS_SERVICE_AREAS : ['Darjeeling', 'Sikkim'];
?>

<section class="__hero_aq">
    <div class="__hero_aq_bg"></div>
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5 py-sm-5">
            <!-- Content Column -->
            <div class="col-lg-6">
                <div class="__hero_aq_content">
                    <!-- Brand Badge -->
                    <div class="__hero_aq_badge">
                        <div class="__hero_aq_badge_icon">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                        <div class="__hero_aq_badge_content">
                            <span class="__hero_aq_brand_name"><?php echo defined('BUSINESS_NAME') ? BUSINESS_NAME : 'Aquaguard'; ?></span>
                            <!--                            <span class="__hero_aq_brand_location">-->
                            <?php //echo defined('BUSINESS_CITY') ? BUSINESS_CITY : 'Darjeeling'; ?><!--</span>-->
                        </div>
                        <div class="__hero_aq_badge_glow"></div>
                    </div>

                    <!-- Main Heading -->
                    <div class="__hero_aq_heading">
                        <h1 class="__hero_aq_title">
                            Pure Water
                            <span class="__hero_aq_highlight">On First Drop</span>
                        </h1>

                        <p class="__hero_aq_lead">
                            Ensuring pure water quality through advanced purification technology and dedicated customer
                            service in <?php echo defined('BUSINESS_CITY') ? BUSINESS_CITY : 'Darjeeling'; ?>.
                        </p>

                        <p class="__hero_aq_text">
                            Official <?php echo defined('BUSINESS_BRAND') ? BUSINESS_BRAND : 'Eureka Forbes'; ?>
                            Authorized Representative delivering trusted Aquaguard products with reliable services including
                            installation, repairs, and AMC support.
                        </p>
                    </div>

                    <!-- Features Grid -->
                    <div class="__hero_aq_features_grid">
                        <div class="__hero_aq_feature_card">
                            <div class="__hero_aq_feature_icon bg-success">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="__hero_aq_feature_info">
                                <h4>Authorized Representative</h4>
                                <p>Official <?php echo defined('BUSINESS_BRAND') ? BUSINESS_BRAND : 'Eureka Forbes'; ?>
                                    dealer</p>
                            </div>
                        </div>

                        <div class="__hero_aq_feature_card">
                            <div class="__hero_aq_feature_icon bg-primary">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="__hero_aq_feature_info">
                                <h4>24/7 Support</h4>
                                <p>Round-the-clock service</p>
                            </div>
                        </div>

                        <div class="__hero_aq_feature_card">
                            <div class="__hero_aq_feature_icon bg-info">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="__hero_aq_feature_info">
                                <h4>Local Presence</h4>
                                <p>Serving <?php echo implode(' & ', $service_areas); ?> areas</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Visual Column -->
            <div class="col-lg-6">
                <div class="__hero_aq_visual">
                    <div class="__hero_aq_main_image">
                        <img src="assets/images/home.avif" alt="Pure Water Solutions" class="__hero_aq_img">
                        <div class="__hero_aq_image_overlay"></div>

                        <!-- Floating Elements -->
                        <div class="__hero_aq_float_card __hero_aq_float_1">
                            <i class="bi bi-shield-check text-success"></i>
                            <span>100% Safe</span>
                        </div>
                        <div class="__hero_aq_float_card __hero_aq_float_2">
                            <i class="bi bi-award text-primary_light"></i>
                            <span>Certified</span>
                        </div>
                        <div class="__hero_aq_float_card __hero_aq_float_3">
                            <i class="bi bi-people text-primary"></i>
                            <span>2000+ Users</span>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="__hero_aq_stats_section">
                        <div class="__hero_aq_stats_grid">
                            <div class="__hero_aq_stat_card">
                                <div class="__hero_aq_stat_number">2000+</div>
                                <div class="__hero_aq_stat_label">Happy Customers</div>
                                <div class="__hero_aq_stat_bar">
                                    <div class="__hero_aq_stat_fill" style="width: 85%"></div>
                                </div>
                            </div>

                            <div class="__hero_aq_stat_card">
                                <div class="__hero_aq_stat_number">15+</div>
                                <div class="__hero_aq_stat_label">Years Experience</div>
                                <div class="__hero_aq_stat_bar">
                                    <div class="__hero_aq_stat_fill" style="width: 95%"></div>
                                </div>
                            </div>

                            <div class="__hero_aq_stat_card">
                                <div class="__hero_aq_stat_number">24/7</div>
                                <div class="__hero_aq_stat_label">Service Support</div>
                                <div class="__hero_aq_stat_bar">
                                    <div class="__hero_aq_stat_fill" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="__hero_aq_buttons my-5">
                        <a href="about.php" class="__hero_aq_btn_primary">
                            Learn More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="tel:<?php echo defined('BUSINESS_PHONE') ? BUSINESS_PHONE : '18602661177'; ?>"
                           class="__hero_aq_btn_secondary">
                            <i class="bi bi-telephone-fill"></i>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
