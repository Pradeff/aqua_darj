<!-- Services Section - Simple Responsive Swiper -->
<section class="__sec_service">
    <div class="container">
        <div class="__sec_service_header">
            <span class="__sec_service_badge">Our Services</span>
            <h2 class="__sec_service_title">We Meet Your Water Needs<br>Regardless Of Your Requirements</h2>
            <p class="__sec_service_subtitle">Comprehensive water purification solutions with professional service support</p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper __sec_service_swiper">
            <div class="swiper-wrapper">
                <!-- Service Slide 1 -->
                <div class="swiper-slide">
                    <div class="__sec_service_card">
                        <div class="__sec_service_icon">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                        <h5 class="__sec_service_card_title">Water Purifier Sales</h5>
                        <p class="__sec_service_card_text">
                            Complete range of Aquaguard water purifiers with RO, UV, and UF technology for every
                            budget and requirement.
                        </p>
                        <div class="__sec_service_features">
                            <span class="__sec_service_tag">RO + UV + UF</span>
                            <span class="__sec_service_tag">Copper Technology</span>
                            <span class="__sec_service_tag">Smart IoT</span>
                        </div>
                    </div>
                </div>

                <!-- Service Slide 2 -->
                <div class="swiper-slide">
                    <div class="__sec_service_card">
                        <div class="__sec_service_icon __sec_service_icon_warning">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5 class="__sec_service_card_title">Installation & Repair</h5>
                        <p class="__sec_service_card_text">
                            Professional installation, maintenance, and repair services by certified technicians
                            with genuine spare parts.
                        </p>
                        <div class="__sec_service_features">
                            <span class="__sec_service_tag">Free Installation</span>
                            <span class="__sec_service_tag">Same Day Service</span>
                            <span class="__sec_service_tag">Genuine Parts</span>
                        </div>
                    </div>
                </div>

                <!-- Service Slide 3 -->
                <div class="swiper-slide">
                    <div class="__sec_service_card">
                        <div class="__sec_service_icon __sec_service_icon_success">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5 class="__sec_service_card_title">AMC Plans</h5>
                        <p class="__sec_service_card_text">
                            Comprehensive Annual Maintenance Contracts with regular service visits, filter changes,
                            and priority support.
                        </p>
                        <div class="__sec_service_features">
                            <span class="__sec_service_tag">Regular Service</span>
                            <span class="__sec_service_tag">Filter Changes</span>
                            <span class="__sec_service_tag">Priority Support</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-prev __sec_service_prev"></div>
            <div class="swiper-button-next __sec_service_next"></div>

            <!-- Pagination Dots -->
            <div class="swiper-pagination __sec_service_pagination"></div>
        </div>
    </div>
</section>
<script>
    // Simple Services Swiper
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            const servicesSwiper = new Swiper('.__sec_service_swiper', {
                // Responsive breakpoints
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    // Mobile: 1 slide
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },
                    // Tablet: 2 slides
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    // Desktop: 3 slides
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.__sec_service_next',
                    prevEl: '.__sec_service_prev',
                },

                // Pagination dots
                pagination: {
                    el: '.__sec_service_pagination',
                    clickable: true,
                    dynamicBullets: true,
                },

                // Auto play
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },

                // Loop
                loop: true,

                // Speed
                speed: 600,

                // Touch settings
                grabCursor: true,

                // Keyboard navigation
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },

                // Accessibility
                a11y: {
                    prevSlideMessage: 'Previous service',
                    nextSlideMessage: 'Next service',
                },

                // Events
                on: {
                    init: function() {
                        console.log('Services Swiper initialized');
                    }
                }
            });
        } else {
            console.warn('Swiper library not loaded');
        }
    });

</script>