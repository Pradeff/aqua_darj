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
                        <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold mb-3">Aquaguard Water Purifiers</h1>
                <p class="lead mb-0">Complete range of advanced water purification solutions for every home and budget</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <button class="btn btn-warning btn-lg" onclick="bookFreeDemo()">
                    <i class="bi bi-calendar-check"></i> Book Free Demo
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <button class="btn btn-outline-primary active" onclick="filterProducts('all')">All Products</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('ro-uv')">RO + UV</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('hot-cold')">Hot & Cold</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('smart-iot')">Smart IoT</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('copper')">Copper Technology</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6 mb-4" data-category="ro-uv copper">
                <div class="product-card">
                    <div class="card border-0 shadow h-100">
                        <div class="product-image position-relative">
                            <img src="assets/images/products/default.jpg" class="card-img-top" alt="Aquaguard Aura 2X Life" data-fancybox="products">
                            <div class="product-badge">
                                <span class="badge bg-success">Best Seller</span>
                            </div>
                            <div class="product-overlay">
                                <button class="btn btn-primary btn-sm" onclick="bookFreeDemo('Aura 2X Life')">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aquaguard Aura 2X Life</h5>
                            <p class="card-text text-muted">Advanced RO + UV purification with Copper Guard Technology for enhanced health benefits.</p>

                            <div class="product-features mb-3">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i class="bi bi-droplet-fill text-primary"></i>
                                        <small class="d-block">8L Storage</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="bi bi-shield-check text-success"></i>
                                        <small class="d-block">Copper Guard</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="bi bi-arrow-repeat text-info"></i>
                                        <small class="d-block">2X Filter Life</small>
                                    </div>
                                </div>
                            </div>

                            <div class="product-specs mb-3">
                                <h6>Key Features:</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle text-success"></i> RO + UV + UF Technology</li>
                                    <li><i class="bi bi-check-circle text-success"></i> Copper Guard Protection</li>
                                    <li><i class="bi bi-check-circle text-success"></i> 2X Filter Life Technology</li>
                                    <li><i class="bi bi-check-circle text-success"></i> 8 Litres Storage Capacity</li>
                                </ul>
                            </div>

                            <div class="product-price mb-3">
                                <span class="price-current fw-bold text-primary fs-4">₹15,999</span>
                                <span class="price-old text-muted text-decoration-line-through ms-2">₹18,999</span>
                                <span class="badge bg-warning ms-2">Save ₹3,000</span>
                            </div>

                            <div class="product-actions">
                                <button class="btn btn-primary w-100 mb-2" onclick="bookFreeDemo('Aura 2X Life')">
                                    <i class="bi bi-calendar-check"></i> Book Free Demo
                                </button>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-outline-primary w-100" onclick="getQuote('Aura 2X Life')">
                                            <i class="bi bi-telephone"></i> Call
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>?text=I'm interested in Aquaguard Aura 2X Life" class="btn btn-success w-100" target="_blank">
                                            <i class="bi bi-whatsapp"></i> WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6 mb-4" data-category="ro-uv hot-cold">
                <div class="product-card">
                    <div class="card border-0 shadow h-100">
                        <div class="product-image position-relative">
                            <img src="assets/images/products/default.jpg" class="card-img-top" alt="Aquaguard Blaze Insta" data-fancybox="products">
                            <div class="product-badge">
                                <span class="badge bg-warning">Hot Water</span>
                            </div>
                            <div class="product-overlay">
                                <button class="btn btn-primary btn-sm" onclick="bookFreeDemo('Blaze Insta')">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aquaguard Blaze Insta</h5>
                            <p class="card-text text-muted">Instant hot and ambient water with advanced RO + UV purification technology.</p>

                            <div class="product-features mb-3">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i class="bi bi-thermometer-high text-danger"></i>
                                        <small class="d-block">Instant Hot</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="bi bi-droplet-fill text-primary"></i>
                                        <small class="d-block">6L Storage</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="bi bi-lightning text-warning"></i>
                                        <small class="d-block">Energy Saving</small>
                                    </div>
                                </div>
                            </div>

                            <div class="product-specs mb-3">
                                <h6>Key Features:</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle text-success"></i> Instant Hot & Ambient Water</li>
                                    <li><i class="bi bi-check-circle text-success"></i> RO + UV Technology</li>
                                    <li><i class="bi bi-check-circle text-success"></i> Energy Efficient Design</li>
                                    <li><i class="bi bi-check-circle text-success"></i> 6 Litres Storage Capacity</li>
                                </ul>
                            </div>

                            <div class="product-price mb-3">
                                <span class="price-current fw-bold text-primary fs-4">₹22,999</span>
                                <span class="price-old text-muted text-decoration-line-through ms-2">₹25,999</span>
                                <span class="badge bg-warning ms-2">Save ₹3,000</span>
                            </div>

                            <div class="product-actions">
                                <button class="btn btn-primary w-100 mb-2" onclick="bookFreeDemo('Blaze Insta')">
                                    <i class="bi bi-calendar-check"></i> Book Free Demo
                                </button>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-outline-primary w-100" onclick="getQuote('Blaze Insta')">
                                            <i class="bi bi-telephone"></i> Call
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>?text=I'm interested in Aquaguard Blaze Insta" class="btn btn-success w-100" target="_blank">
                                            <i class="bi bi-whatsapp"></i> WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6 mb-4" data-category="ro-uv smart-iot">
                <div class="product-card">
                    <div class="card border-0 shadow h-100">
                        <div class="product-image position-relative">
                            <img src="assets/images/products/default.jpg" class="card-img-top" alt="Aquaguard Marvel NXT" data-fancybox="products">
                            <div class="product-badge">
                                <span class="badge bg-info">Smart IoT</span>
                            </div>
                            <div class="product-overlay">
                                <button class="btn btn-primary btn-sm" onclick="bookFreeDemo('Marvel NXT')">
                                    <i class="bi bi-calendar-check"></i> Book Demo
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aquaguard Marvel NXT</h5>
                            <p class="card-text text-muted">Smart IoT-enabled water purifier with app control and auto-service alerts.</p>

                            <div class="product-features mb-3">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <i class="bi bi-wifi text-info"></i>
                                        <small class="d-block">IoT Enabled</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="bi bi-phone text-primary"></i>
                                        <small class="d-block">App Control</small>
                                    </div>
                                    <div class="col-4">
                                        <i class="bi bi-gear text-success"></i>
                                        <small class="d-block">Auto Service</small>
                                    </div>
                                </div>
                            </div>

                            <div class="product-specs mb-3">
                                <h6>Key Features:</h6>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle text-success"></i> Smart IoT Technology</li>
                                    <li><i class="bi bi-check-circle text-success"></i> Mobile App Control</li>
                                    <li><i class="bi bi-check-circle text-success"></i> Auto Service Alerts</li>
                                    <li><i class="bi bi-check-circle text-success"></i> RO + UV + UF Technology</li>
                                </ul>
                            </div>

                            <div class="product-price mb-3">
                                <span class="price-current fw-bold text-primary fs-4">₹18,999</span>
                                <span class="price-old text-muted text-decoration-line-through ms-2">₹21,999</span>
                                <span class="badge bg-warning ms-2">Save ₹3,000</span>
                            </div>

                            <div class="product-actions">
                                <button class="btn btn-primary w-100 mb-2" onclick="bookFreeDemo('Marvel NXT')">
                                    <i class="bi bi-calendar-check"></i> Book Free Demo
                                </button>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-outline-primary w-100" onclick="getQuote('Marvel NXT')">
                                            <i class="bi bi-telephone"></i> Call
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>?text=I'm interested in Aquaguard Marvel NXT" class="btn btn-success w-100" target="_blank">
                                            <i class="bi bi-whatsapp"></i> WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more products following the same pattern -->
        </div>
    </div>
</section>

<!-- Why Choose Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="display-6 fw-bold">Why Choose Our Products?</h2>
            <p class="lead text-muted">Quality assurance and genuine Eureka Forbes products</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-award-fill text-primary fs-1"></i>
                    </div>
                    <h5>Genuine Products</h5>
                    <p class="text-muted">100% authentic Eureka Forbes products with official warranty</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-tools text-warning fs-1"></i>
                    </div>
                    <h5>Free Installation</h5>
                    <p class="text-muted">Professional installation by certified technicians at no extra cost</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-headset text-success fs-1"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p class="text-muted">Round-the-clock customer support for all your needs</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-truck text-info fs-1"></i>
                    </div>
                    <h5>Fast Delivery</h5>
                    <p class="text-muted">Quick delivery and installation across Darjeeling region</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Product filtering function
    function filterProducts(category) {
        const products = document.querySelectorAll('[data-category]');
        const buttons = document.querySelectorAll('.btn-outline-primary');

        // Remove active class from all buttons
        buttons.forEach(btn => btn.classList.remove('active'));

        // Add active class to clicked button
        event.target.classList.add('active');

        products.forEach(product => {
            if (category === 'all' || product.dataset.category.includes(category)) {
                product.style.display = 'block';
                product.style.opacity = '1';
            } else {
                product.style.opacity = '0';
                setTimeout(() => {
                    product.style.display = 'none';
                }, 300);
            }
        });
    }
</script>

<?php include '_footer.php'; ?>
