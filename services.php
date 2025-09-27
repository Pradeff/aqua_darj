<?php include '_header.php'; ?>
<?php include '_nav.php'; ?>

<!-- Page Header -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-white-50">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-3">Our Services</h1>
                <p class="lead mb-0">Comprehensive water purification solutions and professional service support</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <button class="btn btn-warning btn-lg" onclick="scheduleService()">
                    <i class="bi bi-calendar-check"></i> Schedule Service
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-primary text-white p-4">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-cart-check fs-2 me-3"></i>
                                <div>
                                    <h4 class="mb-0">Water Purifier Sales</h4>
                                    <small>Complete range of Aquaguard products</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Complete range of Aquaguard water purifiers</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>RO, UV, UF technologies available</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Smart IoT enabled models</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Hot & cold water dispensers</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Copper technology purifiers</li>
                            </ul>

                            <div class="bg-light p-3 rounded mb-3">
                                <h6 class="text-primary mb-2">Price Range:</h6>
                                <p class="mb-0">₹8,999 - ₹35,999 (All budgets covered)</p>
                            </div>

                            <div class="service-actions">
                                <button class="btn btn-primary me-2" onclick="bookFreeDemo()">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                                <a href="products.php" class="btn btn-outline-primary">
                                    <i class="bi bi-eye"></i> View Products
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-warning text-dark p-4">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-tools fs-2 me-3"></i>
                                <div>
                                    <h4 class="mb-0">Installation & Repair</h4>
                                    <small>Professional technical services</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Free installation by certified technicians</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Same-day repair services</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Genuine spare parts only</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Filter replacement services</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Water quality testing</li>
                            </ul>

                            <div class="bg-light p-3 rounded mb-3">
                                <h6 class="text-warning mb-2">Service Charges:</h6>
                                <p class="mb-1">Installation: <strong>FREE</strong></p>
                                <p class="mb-0">Repair: ₹299 - ₹999 (depending on issue)</p>
                            </div>

                            <div class="service-actions">
                                <button class="btn btn-warning me-2" onclick="scheduleService()">
                                    <i class="bi bi-wrench"></i> Book Service
                                </button>
                                <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="btn btn-outline-warning">
                                    <i class="bi bi-telephone"></i> Emergency Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-success text-white p-4">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-shield-check fs-2 me-3"></i>
                                <div>
                                    <h4 class="mb-0">AMC Plans</h4>
                                    <small>Annual Maintenance Contracts</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Regular preventive maintenance</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Filter cleaning & replacement</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Priority service support</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Water quality monitoring</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Performance optimization</li>
                            </ul>

                            <div class="bg-light p-3 rounded mb-3">
                                <h6 class="text-success mb-2">AMC Plans:</h6>
                                <p class="mb-1">Basic: <strong>₹2,999/year</strong></p>
                                <p class="mb-0">Premium: <strong>₹4,999/year</strong></p>
                            </div>

                            <div class="service-actions">
                                <button class="btn btn-success me-2" onclick="checkAMC()">
                                    <i class="bi bi-calendar-check"></i> Choose Plan
                                </button>
                                <button class="btn btn-outline-success" onclick="scheduleService()">
                                    <i class="bi bi-headset"></i> Support
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5">
                <div class="service-card h-100">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header bg-info text-white p-4">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-house-check fs-2 me-3"></i>
                                <div>
                                    <h4 class="mb-0">Free Home Demo</h4>
                                    <small>Try before you buy</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <h5>What We Offer:</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Water quality testing at your home</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Product demonstration</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Personalized recommendations</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>No obligation consultation</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Same-day installation (if purchased)</li>
                            </ul>

                            <div class="bg-light p-3 rounded mb-3">
                                <h6 class="text-info mb-2">Demo Benefits:</h6>
                                <p class="mb-1">✓ Completely <strong>FREE</strong></p>
                                <p class="mb-0">✓ Expert guidance included</p>
                            </div>

                            <div class="service-actions">
                                <button class="btn btn-info me-2" onclick="bookFreeDemo()">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                                <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>" class="btn btn-outline-info" target="_blank">
                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="bg-light py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="display-6 fw-bold">Service Areas</h2>
            <p class="lead text-muted">We serve across Darjeeling and surrounding regions</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="service-area-icon mb-3">
                        <i class="bi bi-geo-alt-fill text-primary fs-1"></i>
                    </div>
                    <h5>Darjeeling Town</h5>
                    <p class="text-muted">Mall Road, Chowrasta, Happy Valley, Observatory Hill</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="service-area-icon mb-3">
                        <i class="bi bi-geo-alt-fill text-success fs-1"></i>
                    </div>
                    <h5>Kalimpong</h5>
                    <p class="text-muted">Kalimpong town and nearby areas</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="service-area-icon mb-3">
                        <i class="bi bi-geo-alt-fill text-warning fs-1"></i>
                    </div>
                    <h5>Kurseong</h5>
                    <p class="text-muted">Kurseong and surrounding hill areas</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="service-area-icon mb-3">
                        <i class="bi bi-geo-alt-fill text-info fs-1"></i>
                    </div>
                    <h5>Siliguri</h5>
                    <p class="text-muted">Selected areas in Siliguri region</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-muted">Don't see your area? <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="text-primary">Call us</a> to check service availability</p>
        </div>
    </div>
</section>

<!-- Process Steps -->
<section class="py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="display-6 fw-bold">How We Work</h2>
            <p class="lead text-muted">Simple 4-step process for all our services</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="badge bg-primary fs-4 rounded-circle p-3">1</span>
                    </div>
                    <h5 class="mt-3">Contact Us</h5>
                    <p class="text-muted">Call, WhatsApp, or book online for any service requirement</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="badge bg-warning fs-4 rounded-circle p-3">2</span>
                    </div>
                    <h5 class="mt-3">Schedule Visit</h5>
                    <p class="text-muted">We schedule a convenient time for demo or service visit</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="badge bg-success fs-4 rounded-circle p-3">3</span>
                    </div>
                    <h5 class="mt-3">Expert Service</h5>
                    <p class="text-muted">Certified technician provides professional service</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">
                        <span class="badge bg-info fs-4 rounded-circle p-3">4</span>
                    </div>
                    <h5 class="mt-3">Follow-up</h5>
                    <p class="text-muted">We ensure your satisfaction and provide ongoing support</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '_footer.php'; ?>
