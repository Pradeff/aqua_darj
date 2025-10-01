</div> <!-- End page-content wrapper -->

<!-- Footer -->
<footer class="modern-footer">
    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="container py-5">
            <div class="row g-4">
                <!-- Company Info Section -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section company-info">
                        <!-- Logo and Brand -->
                        <div class="brand-section mb-4">
                            <div class="brand-logo">
                                <div class="logo-circle">
                                    <i class="bi bi-droplet-fill"></i>
                                </div>
                                <div class="brand-text">
                                    <h4 class="brand-name"><?php echo BUSINESS_NAME; ?></h4>
                                    <span class="brand-tagline">Official Eureka Forbes Franchise</span>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="company-description">
                            Your trusted partner for safe drinking water solutions in Darjeeling and surrounding areas. We provide genuine Aquaguard products with professional installation and service support.
                        </p>

                        <!-- Social Links -->
                        <div class="social-section">
                            <h6 class="social-title">Follow Us</h6>
                            <div class="social-links">
                                <a href="#" class="social-link facebook" title="Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="social-link instagram" title="Instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#" class="social-link twitter" title="Twitter">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="social-link youtube" title="YouTube">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links Section -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h5 class="section-title">
                            <i class="bi bi-link-45deg me-2"></i>
                            Quick Links
                        </h5>
                        <ul class="footer-links">
                            <li><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
                            <li><a href="products.php"><i class="bi bi-droplet"></i> Products</a></li>
                            <li><a href="services.php"><i class="bi bi-gear"></i> Services</a></li>
                            <li><a href="about.php"><i class="bi bi-info-circle"></i> About Us</a></li>
                            <li><a href="contact.php"><i class="bi bi-envelope"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h5 class="section-title">
                            <i class="bi bi-tools me-2"></i>
                            Our Services
                        </h5>
                        <ul class="footer-services">
                            <li><i class="bi bi-check-circle"></i> Water Purifier Sales</li>
                            <li><i class="bi bi-check-circle"></i> Installation Service</li>
                            <li><i class="bi bi-check-circle"></i> AMC Plans</li>
                            <li><i class="bi bi-check-circle"></i> Repair & Maintenance</li>
                            <li><i class="bi bi-check-circle"></i> Filter Replacement</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-section">
                        <h5 class="section-title">
                            <i class="bi bi-telephone me-2"></i>
                            Get in Touch
                        </h5>

                        <div class="contact-info">
                            <!-- Location -->
                            <div class="contact-item">
                                <div class="contact-icon location">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="contact-text">
                                    <span class="contact-label">Location</span>
                                    <span class="contact-value"><?php echo BUSINESS_ADDRESS; ?></span>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="contact-item">
                                <div class="contact-icon phone">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="contact-text">
                                    <span class="contact-label">Phone</span>
                                    <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="contact-value">
                                        <?php echo BUSINESS_PHONE; ?>
                                    </a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-item">
                                <div class="contact-icon email">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div class="contact-text">
                                    <span class="contact-label">Email</span>
                                    <a href="mailto:<?php echo BUSINESS_EMAIL; ?>" class="contact-value">
                                        <?php echo BUSINESS_EMAIL; ?>
                                    </a>
                                </div>
                            </div>

                            <!-- Hours -->
                            <!--<div class="contact-item">
                                <div class="contact-icon hours">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div class="contact-text">
                                    <span class="contact-label">Hours</span>
                                    <span class="contact-value">Mon - Sat: 9:00 AM - 6:00 PM</span>
                                </div>
                            </div>-->
                        </div>

                        <!-- Action Buttons -->
                        <!--<div class="footer-actions">
                            <a href="https://wa.me/<?php /*echo BUSINESS_WHATSAPP; */?>"
                               class="footer-btn whatsapp-btn"
                               target="_blank">
                                <i class="bi bi-whatsapp"></i>
                                WhatsApp
                            </a>
                            <button class="footer-btn demo-btn" onclick="bookFreeDemo()">
                                <i class="bi bi-calendar-check"></i>
                                Book Demo
                            </button>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center py-3">
                <div class="col-md-6">
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> <?php echo BUSINESS_NAME; ?>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="footer-links-bottom">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/sweetalert2.js"></script>
<script src="assets/js/vendor/fancybox/fancybox.umd.js"></script>
<script src="assets/js/custom-scripts.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>


<script src="assets/js/back-to-top.js"></script>


<!-- Hide loading spinner and show content -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hide spinner immediately when DOM is ready
        const spinner = document.getElementById('loadingSpinner');
        const content = document.getElementById('pageContent');

        setTimeout(function() {
            if (spinner) {
                spinner.classList.add('hide');
            }
            if (content) {
                content.classList.add('show');
            }
        }, 500); // Small delay for smooth transition
    });

    // Fallback: Force hide spinner after 2 seconds
    setTimeout(function() {
        const spinner = document.getElementById('loadingSpinner');
        const content = document.getElementById('pageContent');

        if (spinner) {
            spinner.style.display = 'none';
        }
        if (content) {
            content.style.opacity = '1';
        }
    }, 2000);
</script>

<script src="assets/js/vendor/swiperjs/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.pdf-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // Video Swiper Configuration
    const videoSwiper = new Swiper('.video-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.video-swiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.video-swiper .swiper-button-next',
            prevEl: '.video-swiper .swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // Initialize Fancybox for videos when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {

        // Fancybox Configuration for Videos
        Fancybox.bind('[data-fancybox="videos"]', {
            groupAll: false,

            // Video specific settings
            Html: {
                video: {
                    autoplay: true,
                    controls: true,
                    muted: false,
                }
            },

            // UI settings
            UI: {
                closeButton: "top",
            },

            // Animation settings
            showClass: "fancybox-fadeIn",
            hideClass: "fancybox-fadeOut",

            // Toolbar configuration
            Toolbar: {
                display: {
                    left: [],
                    middle: [],
                    right: ["close"],
                },
            },

            // Click behavior
            contentClick: false,
            backdropClick: "close",

            on: {
                ready: (fancybox, slide) => {
                    console.log("Video player ready");
                },

                error: (fancybox, slide) => {
                    console.error("Error loading video:", slide.src);
                }
            }
        });

        // Add click event to play buttons
        const playButtons = document.querySelectorAll('.play-button');
        playButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const videoCard = this.closest('.video-card');
                const videoLink = videoCard.querySelector('[data-fancybox="videos"]');

                if (videoLink) {
                    // Trigger fancybox programmatically
                    Fancybox.show([{
                        src: videoLink.href,
                        type: "html5video",
                        opts: {
                            width: 1920,
                            height: 1080,
                            video: {
                                autoplay: true,
                                controls: true
                            }
                        }
                    }]);
                }
            });
        });

        // Add click event to video thumbnails
        const videoThumbnails = document.querySelectorAll('.video-thumbnail');
        videoThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function(e) {
                e.preventDefault();

                const videoCard = this.closest('.video-card');
                const videoLink = videoCard.querySelector('[data-fancybox="videos"]');

                if (videoLink) {
                    videoLink.click();
                }
            });
        });
    });

</script>

<!-- Back to Top Button with Progress -->
<div class="back-to-top-wrapper">
    <button id="backToTop" class="back-to-top-btn" title="Back to Top">
        <svg class="progress-ring" width="60" height="60">
            <circle class="progress-ring-track" cx="30" cy="30" r="26"></circle>
            <circle class="progress-ring-progress" cx="30" cy="30" r="26"></circle>
        </svg>
        <div class="back-to-top-icon">
            <i class="bi bi-arrow-up"></i>
        </div>
    </button>
</div>
</body>
</html>
