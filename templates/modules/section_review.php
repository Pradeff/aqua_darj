<!-- Testimonials Section - Responsive Swiper -->
<section class="__sec_review">
    <div class="container">
        <div class="__sec_review_header">
            <span class="__sec_review_badge">Testimonials</span>
            <h2 class="__sec_review_title">What Our Customers Say</h2>
            <p class="__sec_review_subtitle">Real experiences from satisfied customers across Darjeeling</p>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper __sec_review_swiper">
            <div class="swiper-wrapper">
                <!-- Review Slide 1 -->
                <div class="swiper-slide">
                    <div class="__sec_review_card">
                        <div class="__sec_review_rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="__sec_review_text">
                            "Excellent service from Aquaguard Darjeeling! The installation was professional and the
                            water quality has improved significantly. Highly recommended!"
                        </p>
                        <div class="__sec_review_author">
                            <div class="__sec_review_avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="__sec_review_info">
                                <h6 class="__sec_review_name">Rajesh Kumar</h6>
                                <small class="__sec_review_location">Happy Valley, Darjeeling</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Slide 2 -->
                <div class="swiper-slide">
                    <div class="__sec_review_card">
                        <div class="__sec_review_rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="__sec_review_text">
                            "Fast service and genuine products. The AMC plan is very convenient and the technicians
                            are knowledgeable. Great experience overall!"
                        </p>
                        <div class="__sec_review_author">
                            <div class="__sec_review_avatar">
                                <img src="assets/images/default.jpg" alt="Priya Sharma">
                            </div>
                            <div class="__sec_review_info">
                                <h6 class="__sec_review_name">Priya Sharma</h6>
                                <small class="__sec_review_location">Mall Road, Darjeeling</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Slide 3 -->
                <div class="swiper-slide">
                    <div class="__sec_review_card">
                        <div class="__sec_review_rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="__sec_review_text">
                            "Best water purifier dealer in Darjeeling. Prompt service, fair pricing, and excellent
                            customer support. Very satisfied with my purchase!"
                        </p>
                        <div class="__sec_review_author">
                            <div class="__sec_review_avatar">
                                <img src="assets/images/default.jpg" alt="Amit Thapa">
                            </div>
                            <div class="__sec_review_info">
                                <h6 class="__sec_review_name">Amit Thapa</h6>
                                <small class="__sec_review_location">Ghoom, Darjeeling</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Slide 4 -->
                <div class="swiper-slide">
                    <div class="__sec_review_card">
                        <div class="__sec_review_rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="__sec_review_text">
                            "Outstanding customer service! They responded quickly to our service request and fixed the issue promptly. Truly professional team."
                        </p>
                        <div class="__sec_review_author">
                            <div class="__sec_review_avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="__sec_review_info">
                                <h6 class="__sec_review_name">Sunita Rai</h6>
                                <small class="__sec_review_location">Kurseong, Darjeeling</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Slide 5 -->
                <div class="swiper-slide">
                    <div class="__sec_review_card">
                        <div class="__sec_review_rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="__sec_review_text">
                            "Reliable and trustworthy service. The water purifier works perfectly and the maintenance team is very professional. Highly satisfied!"
                        </p>
                        <div class="__sec_review_author">
                            <div class="__sec_review_avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="__sec_review_info">
                                <h6 class="__sec_review_name">Deepak Sharma</h6>
                                <small class="__sec_review_location">Siliguri, West Bengal</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-prev __sec_review_prev"></div>
            <div class="swiper-button-next __sec_review_next"></div>

            <!-- Pagination Dots -->
            <div class="swiper-pagination __sec_review_pagination"></div>
        </div>
    </div>
</section>

<script>
    // Simple Review Swiper
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            const reviewSwiper = new Swiper('.__sec_review_swiper', {
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
                    nextEl: '.__sec_review_next',
                    prevEl: '.__sec_review_prev',
                },

                // Pagination dots
                pagination: {
                    el: '.__sec_review_pagination',
                    clickable: true,
                    dynamicBullets: true,
                },

                // Auto play
                autoplay: {
                    delay: 5000,
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
                    prevSlideMessage: 'Previous review',
                    nextSlideMessage: 'Next review',
                },

                // Events
                on: {
                    init: function() {
                        console.log('Review Swiper initialized');
                    }
                }
            });
        } else {
            console.warn('Swiper library not loaded');
        }
    });
</script>
