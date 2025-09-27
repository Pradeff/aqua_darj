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


<!-- Important Notice CTA -->
<section class="important-notice-section">
    <div class="container">
        <div class="notice-wrapper">
            <!-- Attention Badge -->
            <div class="attention-badge">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <span>IMPORTANT NOTICE</span>
            </div>

            <!-- Main Notice Card -->
            <div class="notice-card">
                <div class="notice-header">
                    <div class="warning-icon">
                        <i class="bi bi-shield-exclamation"></i>
                    </div>
                    <h3 class="notice-title">REQUEST TO NOTE</h3>
                </div>

                <div class="notice-content">
                    <div class="notice-text">
                        <p class="main-message">
                            It is requested to all our customers to book service at our customer care number
                            <strong class="highlight-number">18602661177</strong> only to avoid duplicate filters &
                            safety of customer's family too.
                        </p>
                        <p class="sub-message">
                            Please do check Technician's Id card in their <strong>Online Eureka Forbes app</strong> only
                            and do not consider screen shot or any other type of ID Card.
                        </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="notice-actions">

                    <a href="tel:18602661177" class="cta-btn primary-btn">
                        <i class="bi bi-telephone-fill"></i>
                        <span>Customer care no. Call Now: <strong>18602661177</strong></span>
                        <div class="btn-glow"></div>
                    </a>
                    <!--<button class="cta-btn secondary-btn" onclick="showTechnicianVerification()">
                        <i class="bi bi-patch-check-fill"></i>
                        <span>Verify Technician</span>
                    </button>-->
                </div>
            </div>

            <!-- Animated Warning Icons -->
            <div class="floating-icons">
                <i class="bi bi-exclamation-triangle warning-float warning-1"></i>
                <i class="bi bi-shield-check warning-float warning-2"></i>
                <i class="bi bi-telephone warning-float warning-3"></i>
            </div>
        </div>
    </div>
</section>


<!-- Services Section -->
<section class="services-section bg-light py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="badge bg-primary mb-2">Our Services</span>
            <h2 class="display-6 fw-bold mb-3">We Meet Your Water Needs<br>Regardless Of Your Requirements</h2>
            <p class="lead text-muted">Comprehensive water purification solutions with professional service support</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-droplet-fill text-primary fs-1"></i>
                            </div>
                            <h5 class="card-title mb-3">Water Purifier Sales</h5>
                            <p class="card-text text-muted">
                                Complete range of Aquaguard water purifiers with RO, UV, and UF technology for every
                                budget and requirement.
                            </p>
                            <div class="service-features mb-3">
                                <small class="badge bg-light text-dark me-1">RO + UV + UF</small>
                                <small class="badge bg-light text-dark me-1">Copper Technology</small>
                                <small class="badge bg-light text-dark">Smart IoT</small>
                            </div>
                            <a href="products.php" class="btn btn-outline-primary">
                                <i class="bi bi-eye"></i> View Products
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-tools text-warning fs-1"></i>
                            </div>
                            <h5 class="card-title mb-3">Installation & Repair</h5>
                            <p class="card-text text-muted">
                                Professional installation, maintenance, and repair services by certified technicians
                                with genuine spare parts.
                            </p>
                            <div class="service-features mb-3">
                                <small class="badge bg-light text-dark me-1">Free Installation</small>
                                <small class="badge bg-light text-dark me-1">Same Day Service</small>
                                <small class="badge bg-light text-dark">Genuine Parts</small>
                            </div>
                            <a href="services.php" class="btn btn-outline-warning">
                                <i class="bi bi-wrench"></i> Book Service
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-3">
                                <i class="bi bi-shield-check text-success fs-1"></i>
                            </div>
                            <h5 class="card-title mb-3">AMC Plans</h5>
                            <p class="card-text text-muted">
                                Comprehensive Annual Maintenance Contracts with regular service visits, filter changes,
                                and priority support.
                            </p>
                            <div class="service-features mb-3">
                                <small class="badge bg-light text-dark me-1">Regular Service</small>
                                <small class="badge bg-light text-dark me-1">Filter Changes</small>
                                <small class="badge bg-light text-dark">Priority Support</small>
                            </div>
                            <button class="btn btn-outline-success" onclick="checkAMC()">
                                <i class="bi bi-calendar-check"></i> Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- Products Showcase -->
<!--<section class="products-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="badge bg-primary mb-2">Best Sellers</span>
            <h2 class="display-6 fw-bold mb-3">Learn To Drink, Converse<br>With Confidence</h2>
            <p class="lead text-muted">Popular Aquaguard models trusted by thousands of families</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="product-card">
                    <div class="card border-0 shadow">
                        <div class="product-image">
                            <img src="assets/images/default.jpg" class="card-img-top" alt="Aquaguard Aura 2X Life"
                                 data-fancybox="products">
                            <div class="product-badge">
                                <span class="badge bg-success">Best Seller</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aquaguard Aura 2X Life</h5>
                            <p class="card-text text-muted">RO + UV with Copper Technology</p>
                            <div class="product-features mb-3">
                                <small class="badge bg-light text-dark me-1">8L Storage</small>
                                <small class="badge bg-light text-dark me-1">Copper Guard</small>
                                <small class="badge bg-light text-dark">2X Life</small>
                            </div>
                            <div class="product-price mb-3">
                                <span class="price-current fw-bold text-primary fs-5">₹15,999</span>
                                <span class="price-old text-muted text-decoration-line-through ms-2">₹18,999</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary me-2" onclick="bookFreeDemo('Aura 2X Life')">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                                <button class="btn btn-outline-primary" onclick="getQuote('Aura 2X Life')">
                                    <i class="bi bi-telephone"></i> Call
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="product-card">
                    <div class="card border-0 shadow">
                        <div class="product-image">
                            <img src="assets/images/default.jpg" class="card-img-top" alt="Aquaguard Blaze Insta"
                                 data-fancybox="products">
                            <div class="product-badge">
                                <span class="badge bg-warning">Hot Water</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aquaguard Blaze Insta</h5>
                            <p class="card-text text-muted">RO + UV with Hot & Ambient Water</p>
                            <div class="product-features mb-3">
                                <small class="badge bg-light text-dark me-1">Instant Hot</small>
                                <small class="badge bg-light text-dark me-1">6L Storage</small>
                                <small class="badge bg-light text-dark">Energy Saving</small>
                            </div>
                            <div class="product-price mb-3">
                                <span class="price-current fw-bold text-primary fs-5">₹22,999</span>
                                <span class="price-old text-muted text-decoration-line-through ms-2">₹25,999</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary me-2" onclick="bookFreeDemo('Blaze Insta')">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                                <button class="btn btn-outline-primary" onclick="getQuote('Blaze Insta')">
                                    <i class="bi bi-telephone"></i> Call
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="product-card">
                    <div class="card border-0 shadow">
                        <div class="product-image">
                            <img src="assets/images/default.jpg" class="card-img-top" alt="Aquaguard Marvel NXT"
                                 data-fancybox="products">
                            <div class="product-badge">
                                <span class="badge bg-info">Smart IoT</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aquaguard Marvel NXT</h5>
                            <p class="card-text text-muted">Smart IoT Water Purifier</p>
                            <div class="product-features mb-3">
                                <small class="badge bg-light text-dark me-1">IoT Enabled</small>
                                <small class="badge bg-light text-dark me-1">App Control</small>
                                <small class="badge bg-light text-dark">Auto Service</small>
                            </div>
                            <div class="product-price mb-3">
                                <span class="price-current fw-bold text-primary fs-5">₹18,999</span>
                                <span class="price-old text-muted text-decoration-line-through ms-2">₹21,999</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary me-2" onclick="bookFreeDemo('Marvel NXT')">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                                <button class="btn btn-outline-primary" onclick="getQuote('Marvel NXT')">
                                    <i class="bi bi-telephone"></i> Call
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="products.php" class="btn btn-primary btn-lg">
                <i class="bi bi-eye"></i> View All Products
            </a>
        </div>
    </div>
</section>-->


<!-- Testimonials Section -->
<section class="testimonials-section bg-light py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="badge bg-orange mb-2">Testimonials</span>
            <h2 class=" fw-bold mb-3">What Our Customers Say</h2>
            <p class="lead text-muted">Real experiences from satisfied customers across Darjeeling</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="testimonial-rating mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="testimonial-text mb-4">
                                "Excellent service from Aquaguard Darjeeling! The installation was professional and the
                                water quality has improved significantly. Highly recommended!"
                            </p>
                            <div class="testimonial-author d-flex align-items-center">
                                <i class="bi bi-person-circle rounded-circle me-3 text-muted"
                                   style="font-size: 2.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Rajesh Kumar</h6>
                                    <small class="text-muted">Happy Valley, Darjeeling</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="testimonial-rating mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="testimonial-text mb-4">
                                "Fast service and genuine products. The AMC plan is very convenient and the technicians
                                are knowledgeable. Great experience overall!"
                            </p>
                            <div class="testimonial-author d-flex align-items-center">
                                <img src="assets/images/default.jpg" alt="Priya Sharma" class="rounded-circle me-3"
                                     width="50" height="50">
                                <div>
                                    <h6 class="mb-0">Priya Sharma</h6>
                                    <small class="text-muted">Mall Road, Darjeeling</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="testimonial-card">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="testimonial-rating mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="testimonial-text mb-4">
                                "Best water purifier dealer in Darjeeling. Prompt service, fair pricing, and excellent
                                customer support. Very satisfied with my purchase!"
                            </p>
                            <div class="testimonial-author d-flex align-items-center">
                                <img src="assets/images/default.jpg" alt="Amit Thapa" class="rounded-circle me-3"
                                     width="50" height="50">
                                <div>
                                    <h6 class="mb-0">Amit Thapa</h6>
                                    <small class="text-muted">Ghoom, Darjeeling</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
