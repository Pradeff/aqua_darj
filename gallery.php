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
                        <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-3">Our Gallery</h1>
                <p class="lead mb-0">See our work in action - installations, demos, happy customers, and quality service</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <button class="btn btn-warning btn-lg" onclick="bookFreeDemo()">
                    <i class="bi bi-calendar-check"></i> Book Demo
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Categories -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <button class="btn btn-outline-primary active gallery-filter" data-filter="all">All Photos</button>
                    <button class="btn btn-outline-primary gallery-filter" data-filter="installation">Installations</button>
                    <button class="btn btn-outline-primary gallery-filter" data-filter="products">Products</button>
                    <button class="btn btn-outline-primary gallery-filter" data-filter="customers">Happy Customers</button>
                    <button class="btn btn-outline-primary gallery-filter" data-filter="service">Service Work</button>
                    <button class="btn btn-outline-primary gallery-filter" data-filter="demo">Demonstrations</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-5">
    <div class="container">
        <div class="row" id="galleryGrid" data-masonry='{"percentPosition": true }'>

            <!-- Gallery Item 1 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Professional Installation - Kitchen Setup"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Professional installation of Aquaguard Aura 2X Life in modern kitchen. Our certified technicians ensure perfect setup and customer training."
                                 style="height: 280px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Professional Installation</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Kitchen Installation</h6>
                            <p class="card-text small text-muted mb-0">Professional setup of Aquaguard water purifier in modern kitchen</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Installation</span>
                                <small class="text-muted">Mall Road, Darjeeling</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="products">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Aquaguard Product Range Display"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Complete range of Aquaguard water purifiers available at our Darjeeling showroom. From basic RO to advanced IoT models."
                                 style="height: 320px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Product Showcase</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Product Range</h6>
                            <p class="card-text small text-muted mb-0">Complete display of latest Aquaguard models</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-primary">Products</span>
                                <small class="text-muted">Showroom Display</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="customers">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Happy Customer Family"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Another satisfied family enjoying pure, safe drinking water with their new Aquaguard purifier. Health and happiness guaranteed!"
                                 style="height: 260px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Happy Family</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Satisfied Customer</h6>
                            <p class="card-text small text-muted mb-0">Family enjoying pure water with their Aquaguard</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-warning">Customers</span>
                                <small class="text-muted">Happy Valley</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="service">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="AMC Service Visit"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Regular AMC service visit ensuring optimal performance. Our technician performing filter replacement and system maintenance."
                                 style="height: 300px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">AMC Service</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Service Maintenance</h6>
                            <p class="card-text small text-muted mb-0">Regular AMC service ensuring peak performance</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-info">Service</span>
                                <small class="text-muted">Ghoom Area</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="demo">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Home Demonstration"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Free home demonstration showing water quality testing and product features to help customers make informed decisions."
                                 style="height: 270px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Home Demo</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Product Demo</h6>
                            <p class="card-text small text-muted mb-0">Free home demonstration and water testing</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Demo</span>
                                <small class="text-muted">Lebong Cart Road</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Wall Mount Installation"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Perfect wall-mounted installation of Aquaguard Blaze Insta with hot and cold water facility. Clean and professional setup."
                                 style="height: 290px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Wall Mount Setup</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Wall Installation</h6>
                            <p class="card-text small text-muted mb-0">Clean wall-mounted setup with hot water facility</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Installation</span>
                                <small class="text-muted">Birch Hill</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="products">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Smart IoT Water Purifier"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Latest Aquaguard Marvel NXT with IoT technology. App-controlled water purifier with smart monitoring features."
                                 style="height: 310px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Smart IoT Model</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">IoT Technology</h6>
                            <p class="card-text small text-muted mb-0">Smart water purifier with app control</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-primary">Products</span>
                                <small class="text-muted">Latest Model</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="customers">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Customer Testimonial Photo"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Mrs. Sharma and family from Mall Road sharing their positive experience with Aquaguard water purifier and our service."
                                 style="height: 250px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Customer Review</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Customer Testimonial</h6>
                            <p class="card-text small text-muted mb-0">Positive feedback from satisfied customer</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-warning">Customers</span>
                                <small class="text-muted">Mall Road</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="service">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Filter Replacement Service"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Expert technician replacing filters during scheduled maintenance visit. Using only genuine Eureka Forbes parts."
                                 style="height: 340px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Filter Replacement</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Filter Service</h6>
                            <p class="card-text small text-muted mb-0">Professional filter replacement with genuine parts</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-info">Service</span>
                                <small class="text-muted">Jalapahar</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 10 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="demo">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Water Quality Testing Demo"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Water quality testing demonstration showing before and after purification results to help customers understand the need."
                                 style="height: 280px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Water Testing</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Quality Testing</h6>
                            <p class="card-text small text-muted mb-0">Before and after water quality demonstration</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Demo</span>
                                <small class="text-muted">Rockville Road</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 11 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Under Sink Installation"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Space-saving under sink installation of Aquaguard purifier with clean piping and professional finish."
                                 style="height: 260px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Under Sink Setup</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Space Saving Install</h6>
                            <p class="card-text small text-muted mb-0">Neat under-sink installation with clean piping</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Installation</span>
                                <small class="text-muted">Observatory Hill</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 12 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="products">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Hot Water Dispenser Model"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Aquaguard Blaze Insta with instant hot and ambient water facility. Perfect for tea, coffee, and cooking needs."
                                 style="height: 300px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Hot Water Model</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Instant Hot Water</h6>
                            <p class="card-text small text-muted mb-0">Hot and ambient water facility in one unit</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-primary">Products</span>
                                <small class="text-muted">Blaze Series</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 13 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="customers">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Office Installation Customer"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Office installation for a local business. Providing pure drinking water for all employees with high-capacity purifier."
                                 style="height: 270px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Office Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Business Client</h6>
                            <p class="card-text small text-muted mb-0">Office installation for employee wellness</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-warning">Customers</span>
                                <small class="text-muted">Commercial Area</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 14 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="service">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Emergency Repair Service"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Emergency repair service on weekend. Our commitment to 24/7 support ensures customers never compromise on pure water."
                                 style="height: 320px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Emergency Repair</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">24/7 Service</h6>
                            <p class="card-text small text-muted mb-0">Emergency repair support any time</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-info">Service</span>
                                <small class="text-muted">Weekend Call</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 15 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="demo">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Product Comparison Demo"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Product comparison demonstration helping customers choose between different Aquaguard models based on their needs and budget."
                                 style="height: 290px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Product Comparison</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Model Comparison</h6>
                            <p class="card-text small text-muted mb-0">Helping customers choose the right model</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Demo</span>
                                <small class="text-muted">Showroom Visit</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 16 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Complete Installation Setup"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Complete installation setup including water purifier, storage tank, and proper drainage system with customer training session."
                                 style="height: 310px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Complete Setup</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">Full Installation</h6>
                            <p class="card-text small text-muted mb-0">Complete setup with training and documentation</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-success">Installation</span>
                                <small class="text-muted">Chaurasta Area</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 17 -->
            <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="customers">
                <div class="gallery-card">
                    <div class="card border-0 shadow-sm">
                        <div class="gallery-image-wrapper position-relative">
                            <img src="assets/images/gallery/default.jpg"
                                 alt="Long-term Customer Relationship"
                                 class="card-img-top gallery-image"
                                 data-fancybox="gallery"
                                 data-caption="Long-term customer celebrating 5 years of pure water with Aquaguard. Regular service maintenance ensures continued satisfaction."
                                 style="height: 280px; object-fit: cover;">
                            <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-zoom-in fs-2 mb-2"></i>
                                    <p class="mb-0 fw-bold">Loyal Customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2">5+ Years Customer</h6>
                            <p class="card-text small text-muted mb-0">Long-term relationship with regular service</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="badge bg-warning">Customers</span>
                                <small class="text-muted">Loyal Client</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5" id="loadMoreSection">
            <button class="btn btn-outline-primary btn-lg" id="loadMoreBtn">
                <i class="bi bi-images"></i> Load More Photos
            </button>
        </div>
    </div>
</section>

<!-- Gallery Stats -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-3">
                <div class="stat-item">
                    <h3 class="text-primary fw-bold mb-2">500+</h3>
                    <p class="mb-0">Installations</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stat-item">
                    <h3 class="text-success fw-bold mb-2">2000+</h3>
                    <p class="mb-0">Happy Customers</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stat-item">
                    <h3 class="text-warning fw-bold mb-2">1500+</h3>
                    <p class="mb-0">Service Visits</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="stat-item">
                    <h3 class="text-info fw-bold mb-2">300+</h3>
                    <p class="mb-0">Free Demos</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">Want to Be Our Next Success Story?</h2>
                <p class="lead mb-0">Book a free demo today and see why thousands of families trust Aquaguard Darjeeling for their water purification needs.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <button class="btn btn-light btn-lg me-3" onclick="bookFreeDemo()">
                    <i class="bi bi-calendar-check"></i> Book Demo
                </button>
                <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>" class="btn btn-success btn-lg" target="_blank">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Gallery JavaScript -->
<script>
    // Initialize Masonry after images load
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize masonry layout
        const grid = document.querySelector('#galleryGrid');

        // Wait for images to load
        const images = grid.querySelectorAll('img');
        let loadedImages = 0;

        images.forEach(img => {
            if (img.complete) {
                loadedImages++;
            } else {
                img.addEventListener('load', () => {
                    loadedImages++;
                    if (loadedImages === images.length) {
                        initializeMasonry();
                    }
                });
            }
        });

        if (loadedImages === images.length) {
            initializeMasonry();
        }
    });

    function initializeMasonry() {
        const grid = document.querySelector('#galleryGrid');
        if (typeof Masonry !== 'undefined') {
            new Masonry(grid, {
                itemSelector: '.gallery-item',
                columnWidth: '.gallery-item',
                percentPosition: true,
                gutter: 30
            });
        }
    }

    // Gallery filtering
    document.querySelectorAll('.gallery-filter').forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;

            // Update active button
            document.querySelectorAll('.gallery-filter').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filter gallery items
            const galleryItems = document.querySelectorAll('.gallery-item');
            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });

            // Reinitialize masonry after filtering
            setTimeout(initializeMasonry, 400);
        });
    });

    // Load more functionality (placeholder)
    document.getElementById('loadMoreBtn').addEventListener('click', function() {
        this.innerHTML = '<i class="bi bi-hourglass-split"></i> Loading...';

        setTimeout(() => {
            this.innerHTML = '<i class="bi bi-check-circle"></i> All Photos Loaded';
            this.disabled = true;
            this.classList.replace('btn-outline-primary', 'btn-success');
        }, 1500);
    });

    // View gallery function for external calls
    function viewGallery() {
        window.location.href = 'gallery.php';
    }
</script>



<?php include '_footer.php'; ?>
<script src="assets/js/masonry.pkgd.min.js"></script>