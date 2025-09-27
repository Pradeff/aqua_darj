<!-- Navigation -->

<nav class="navbar navbar-expand-lg modern-nav">
    <div class="container">
        <!-- Logo Section -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <div class="nav-logo-container">
                <img src="assets/images/lg-68380094baef7-Eureka-Forbes.webp" alt="Eureka Forbes" class="nav-logo">
            </div>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler mobile-menu-toggle d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNavOffcanvas">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- Desktop Navigation -->
        <div class="navbar-nav-desktop d-none d-lg-flex mx-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" href="index.php">
                        <i class="bi bi-house nav-icon"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'products') ? 'active' : ''; ?>" href="products.php">
                        <i class="bi bi-droplet nav-icon"></i>
                        <span>Products</span>
                    </a>
                </li>

                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($page == 'services' || $page == 'gallery') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-tools nav-icon"></i>
                        <span>Services</span>
                        <i class="bi bi-chevron-down dropdown-arrow"></i>
                    </a>
                    <ul class="dropdown-menu modern-dropdown">
                        <li>
                            <a class="dropdown-item" href="services.php">
                                <i class="bi bi-wrench-adjustable"></i>
                                <div class="dropdown-content">
                                    <span class="dropdown-title">All Services</span>
                                    <small class="dropdown-desc">Complete service overview</small>
                                </div>
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="services.php#installation">
                                <i class="bi bi-tools"></i>
                                <div class="dropdown-content">
                                    <span class="dropdown-title">Installation</span>
                                    <small class="dropdown-desc">Professional setup service</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="services.php#amc">
                                <i class="bi bi-shield-check"></i>
                                <div class="dropdown-content">
                                    <span class="dropdown-title">AMC Plans</span>
                                    <small class="dropdown-desc">Annual maintenance contracts</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="gallery.php">
                                <i class="bi bi-images"></i>
                                <div class="dropdown-content">
                                    <span class="dropdown-title">Gallery</span>
                                    <small class="dropdown-desc">Our work showcase</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" href="about.php">
                        <i class="bi bi-info-circle nav-icon"></i>
                        <span>About</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php">
                        <i class="bi bi-telephone nav-icon"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Desktop Right Section -->
        <div class="navbar-actions d-none d-lg-flex align-items-center">
            <!-- Contact Actions -->
            <div class="contact-actions d-flex align-items-center">
                <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>" class="action-btn whatsapp-btn" target="_blank" title="WhatsApp Us">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="action-btn call-btn" title="Call Us">
                    <i class="bi bi-telephone-fill"></i>
                </a>
            </div>

            <!-- Phone Display -->
            <div class="phone-display d-flex align-items-center ms-3">
                <div class="status-badge">
                    <i class="bi bi-telephone-fill status-icon"></i>
                    <span class="status-text"><?php echo BUSINESS_PHONE; ?></span>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-end mobile-nav-offcanvas" tabindex="-1" id="mobileNavOffcanvas">
    <div class="offcanvas-header">
        <div class="d-flex align-items-center">
            <img src="assets/images/logo.svg" alt="Eureka Forbes" class="mobile-nav-logo">
            <div class="ms-2">
                <h6 class="mb-0"><?php echo BUSINESS_NAME; ?></h6>
                <small class="text-muted">Official Franchise</small>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <!-- Mobile Contact Info -->
        <div class="mobile-contact-info mb-4">
            <div class="contact-item mb-2">
                <i class="bi bi-telephone-fill text-primary"></i>
                <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="ms-2 text-decoration-none">
                    <?php echo BUSINESS_PHONE; ?>
                </a>
            </div>
            <div class="contact-item">
                <i class="bi bi-geo-alt-fill text-success"></i>
                <span class="ms-2 small text-muted">Darjeeling, West Bengal</span>
            </div>
        </div>

        <hr>

        <!-- Mobile Navigation Menu -->
        <ul class="mobile-nav-menu list-unstyled">
            <li class="mobile-nav-item">
                <a class="mobile-nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" href="index.php">
                    <i class="bi bi-house"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-nav-item">
                <a class="mobile-nav-link <?php echo ($page == 'products') ? 'active' : ''; ?>" href="products.php">
                    <i class="bi bi-droplet"></i>
                    <span>Products</span>
                </a>
            </li>

            <!-- Mobile Services Section -->
            <li class="mobile-nav-item">
                <div class="mobile-nav-section">
                    <div class="mobile-section-header">
                        <i class="bi bi-tools"></i>
                        <span>Services</span>
                    </div>
                    <ul class="mobile-submenu">
                        <li><a href="services.php" class="mobile-submenu-link">All Services</a></li>
                        <li><a href="services.php#installation" class="mobile-submenu-link">Installation</a></li>
                        <li><a href="services.php#amc" class="mobile-submenu-link">AMC Plans</a></li>
                        <li><a href="gallery.php" class="mobile-submenu-link">Gallery</a></li>
                    </ul>
                </div>
            </li>

            <li class="mobile-nav-item">
                <a class="mobile-nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" href="about.php">
                    <i class="bi bi-info-circle"></i>
                    <span>About</span>
                </a>
            </li>

            <li class="mobile-nav-item">
                <a class="mobile-nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php">
                    <i class="bi bi-telephone"></i>
                    <span>Contact</span>
                </a>
            </li>
        </ul>

        <hr>

        <!-- Mobile Action Buttons -->
        <div class="mobile-actions">
            <button class="btn btn-primary w-100 mb-2" onclick="bookFreeDemo()">
                <i class="bi bi-calendar-check"></i> Book Free Demo
            </button>

            <div class="row">
                <div class="col-6">
                    <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>" class="btn btn-success w-100" target="_blank">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                </div>
                <div class="col-6">
                    <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="btn btn-outline-primary w-100">
                        <i class="bi bi-telephone"></i> Call
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
