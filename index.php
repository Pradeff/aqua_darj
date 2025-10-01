<?php
// Error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '_header.php'; ?>

<?php include '_nav.php'; ?>

<?php require_once 'config.php'; ?>

<?php include 'templates/modules/mod_hero.php'; ?>



<div class="position-relative d-none d-xl-block">
    <div class="position-absolute bottom-0 w-100 z-n1">
        <img src="assets/images/gradient_arc.svg" alt="" class="w-100"/>
    </div>
    <div class="d-flex position-absolute bottom-0 start-0 w-100 overflow-hidden mb-n1" style="color: var(--bs-body-bg)">
        <div class="position-relative start-50 translate-middle-x flex-shrink-0" style="width: 3774px">
            <svg width="3774" height="55" viewBox="0 0 3774 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 200.003C0 200.003 1137.52 0.188224 1873.5 0.000134392C2614.84 -0.189325 3774 200.003 3774 200.003H0Z"
                      fill="#F8F9FA"></path>
            </svg>
        </div>
    </div>
</div>
<!--Hero end-->


<!-- Quick Services Bar -->
<section class="quick-services-modern">
    <div class="container">
        <div class="services-grid">
            <!-- Sales Service -->
            <div class="service-card sales-card">
                <div class="service-card-inner">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-cart-check"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="service-title">Sales</h6>
                        <p class="service-subtitle">Premium Products</p>
                    </div>
                </div>
            </div>

            <!-- Service Card -->
            <div class="service-card service-card-type">
                <div class="service-card-inner">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="service-title">Service</h6>
                        <p class="service-subtitle">Expert Support</p>
                    </div>
                </div>
            </div>

            <!-- AMC Card -->
            <div class="service-card amc-card">
                <div class="service-card-inner">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="service-title">AMC</h6>
                        <p class="service-subtitle">Peace of Mind</p>
                    </div>
                </div>
            </div>

            <!-- Free Demo Card -->
            <div class="service-card demo-card">
                <div class="service-card-inner">
                    <div class="service-icon-wrapper">
                        <div class="service-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <h6 class="service-title">Free Demo</h6>
                        <p class="service-subtitle">Try Before Buy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'templates/modules/section_imp_notice.php' ?>




<?php include 'templates/modules/section_service.php'; ?>
<?php include 'templates/modules/mod_pdf.php'; ?>

<?php include 'templates/modules/mod_video.php' ?>


<!-- Why Choose Our Products Section -->
<section class="py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="fw-bold mb-3">Why Choose Our Products?</h2>
            <p class="lead text-muted">Quality assurance and genuine Eureka Forbes products</p>
        </div>

        <div class="container py-2">
            <div class="row g-4">
                <!-- Genuine Products -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card tool-card item__1">
                        <div class="tool-content">
                            <div class="tool-icon">
                                <i class="bi bi-award text-white fs-2"></i>
                            </div>
                            <h3 class="tool-title">
                                Genuine Products
                            </h3>
                            <p class="tool-description">
                                100% authentic Eureka Forbes products with official warranty
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Free Installation -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card tool-card item__2">
                        <div class="tool-content">
                            <div class="tool-icon">
                                <i class="bi bi-tools text-white fs-2"></i>
                            </div>
                            <h3 class="tool-title">
                                Free Installation
                            </h3>
                            <p class="tool-description">
                                Professional installation by certified technicians at no extra cost
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 24/7 Support -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card tool-card item__3">
                        <div class="tool-content">
                            <div class="tool-icon">
                                <i class="bi bi-headset text-white fs-2"></i>
                            </div>
                            <h3 class="tool-title">
                                24/7 Support
                            </h3>
                            <p class="tool-description">
                                Round-the-clock customer support for all your needs
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fast Delivery -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card tool-card item__4">
                        <div class="tool-content">
                            <div class="tool-icon">
                                <i class="bi bi-lightning text-white fs-2"></i>
                            </div>
                            <h3 class="tool-title">
                                Fast Delivery
                            </h3>
                            <p class="tool-description">
                                Quick delivery and installation across Darjeeling region
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'templates/modules/section_review.php'; ?>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card cta-card">
                    <div class="cta-content d-flex align-items-center">
                        <!-- Icon on Left -->
                        <div class="cta-icon-wrapper">
                            <div class="cta-icon">
                                <i class="bi bi-droplet-fill text-white fs-1"></i>
                            </div>
                        </div>

                        <!-- Title and Description in Center -->
                        <div class="cta-text-content flex-grow-1">
                            <h2 class="cta-title">
                                Ready to Experience Pure Water?
                            </h2>
                            <p class="cta-description">
                                Book your free home demonstration today and discover the perfect water purification
                                solution for your family.
                            </p>
                        </div>

                        <!-- Buttons on Right -->
                        <div class="cta-actions-wrapper">
                            <div class="cta-actions">
                                <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>"
                                   class="btn btn-success btn-lg mb-2"
                                   target="_blank">
                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                </a>
                                <a href="tel:<?php echo BUSINESS_PHONE; ?>"
                                   class="btn btn-outline-primary btn-lg">
                                    <i class="bi bi-telephone"></i> Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include '_footer.php'; ?>
<!-- PDF Module JS -->
<script src="assets/js/modules/mod_pdf.js"></script>
<script src="assets/js/modules/mod_video.js"></script>
