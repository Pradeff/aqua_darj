// Custom JavaScript for Aquaguard Darjeeling Website
document.addEventListener('DOMContentLoaded', function() {
    // Hide loading spinner when page is loaded
    hideLoadingSpinner();

    // Initialize all components
    initializeComponents();

    // Initialize scroll animations
    initializeScrollAnimations();

    // Initialize Fancybox
    if (typeof Fancybox !== 'undefined') {
        Fancybox.bind("[data-fancybox]", {
            // Fancybox options
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: [],
                    right: ["slideshow", "thumbs", "close"]
                }
            },
            Images: {
                zoom: true
            },
            Thumbs: {
                autoStart: true
            }
        });
    }
});

// Show/Hide Loading Spinner
function showLoadingSpinner() {
    const spinner = document.querySelector('.loading-spinner');
    if (spinner) {
        spinner.classList.add('show');
        spinner.style.display = 'flex';
    }
}

function hideLoadingSpinner() {
    const spinner = document.querySelector('.loading-spinner');
    if (spinner) {
        spinner.classList.remove('show');
        spinner.style.display = 'none';
    }
}

// Initialize all components
function initializeComponents() {
    // Navbar scroll effect
    initializeNavbar();

    // Smooth scrolling for anchor links
    initializeSmoothScroll();

    // Form submissions with spinner
    initializeForms();

    // Lazy loading for images
    initializeLazyLoading();
}

// Navbar scroll effect
function initializeNavbar() {
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// Smooth scrolling
function initializeSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Initialize forms with loading states
function initializeForms() {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Processing...';
                showLoadingSpinner();
            }
        });
    });
}

// Lazy loading for images
function initializeLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy-load');
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
}

// Scroll animations
function initializeScrollAnimations() {
    const animatedElements = document.querySelectorAll('.fade-in-up');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0.2s';
                    entry.target.style.animationFillMode = 'both';
                }
            });
        });

        animatedElements.forEach(el => observer.observe(el));
    }
}

// Business Functions
function bookFreeDemo(product = '') {
    hideLoadingSpinner(); // Ensure spinner is hidden

    const message = product ?
        `Hi! I would like to book a free demo for ${product}. Please contact me.` :
        `Hi! I would like to book a free demo of Aquaguard water purifier. Please contact me.`;

    Swal.fire({
        title: 'Book Free Demo',
        html: `
            <div class="text-start">
                <div class="mb-3">
                    <label class="form-label">Your Name *</label>
                    <input type="text" id="demo-name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number *</label>
                    <input type="tel" id="demo-phone" class="form-control" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea id="demo-address" class="form-control" rows="2" placeholder="Enter your address"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Preferred Time</label>
                    <select id="demo-time" class="form-select">
                        <option value="">Select preferred time</option>
                        <option value="Morning (9 AM - 12 PM)">Morning (9 AM - 12 PM)</option>
                        <option value="Afternoon (12 PM - 4 PM)">Afternoon (12 PM - 4 PM)</option>
                        <option value="Evening (4 PM - 7 PM)">Evening (4 PM - 7 PM)</option>
                    </select>
                </div>
                ${product ? `<div class="alert alert-info"><small><i class="bi bi-info-circle"></i> Demo for: <strong>${product}</strong></small></div>` : ''}
            </div>
        `,
        confirmButtonText: '<i class="bi bi-whatsapp"></i> Send WhatsApp',
        showCancelButton: true,
        cancelButtonText: 'Cancel',
        confirmButtonColor: '#25D366',
        cancelButtonColor: '#6c757d',
        preConfirm: () => {
            const name = document.getElementById('demo-name').value;
            const phone = document.getElementById('demo-phone').value;

            if (!name || !phone) {
                Swal.showValidationMessage('Please fill in required fields');
                return false;
            }

            return {
                name: name,
                phone: phone,
                address: document.getElementById('demo-address').value,
                time: document.getElementById('demo-time').value
            };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            const data = result.value;
            const productText = product ? ` for ${product}` : '';
            const whatsappMessage = `Hi! I would like to book a free demo${productText}.%0A%0A` +
                `Name: ${data.name}%0A` +
                `Phone: ${data.phone}%0A` +
                `Address: ${data.address}%0A` +
                `Preferred Time: ${data.time}%0A%0A` +
                `Please contact me to schedule the demo. Thank you!`;

            const whatsappURL = `https://wa.me/919876543210?text=${whatsappMessage}`;
            window.open(whatsappURL, '_blank');

            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Demo Requested!',
                text: 'Your demo request has been sent. We will contact you shortly.',
                confirmButtonColor: '#0066CC'
            });
        }
    });
}

function scheduleService() {
    hideLoadingSpinner();

    Swal.fire({
        title: 'Schedule Service',
        html: `
            <div class="text-start">
                <div class="mb-3">
                    <label class="form-label">Service Type *</label>
                    <select id="service-type" class="form-select" required>
                        <option value="">Select service type</option>
                        <option value="Installation">New Installation</option>
                        <option value="Repair">Repair Service</option>
                        <option value="AMC">AMC Service</option>
                        <option value="Filter Change">Filter Replacement</option>
                        <option value="Maintenance">General Maintenance</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Name *</label>
                    <input type="text" id="service-name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number *</label>
                    <input type="tel" id="service-phone" class="form-control" placeholder="Enter phone number" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address *</label>
                    <textarea id="service-address" class="form-control" rows="2" placeholder="Enter complete address" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Issue Description</label>
                    <textarea id="service-issue" class="form-control" rows="2" placeholder="Describe the issue or requirements"></textarea>
                </div>
            </div>
        `,
        confirmButtonText: '<i class="bi bi-whatsapp"></i> Request Service',
        showCancelButton: true,
        cancelButtonText: 'Cancel',
        confirmButtonColor: '#25D366',
        preConfirm: () => {
            const serviceType = document.getElementById('service-type').value;
            const name = document.getElementById('service-name').value;
            const phone = document.getElementById('service-phone').value;
            const address = document.getElementById('service-address').value;

            if (!serviceType || !name || !phone || !address) {
                Swal.showValidationMessage('Please fill in all required fields');
                return false;
            }

            return {
                serviceType: serviceType,
                name: name,
                phone: phone,
                address: address,
                issue: document.getElementById('service-issue').value
            };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            const data = result.value;
            const whatsappMessage = `Hi! I need ${data.serviceType} service.%0A%0A` +
                `Name: ${data.name}%0A` +
                `Phone: ${data.phone}%0A` +
                `Address: ${data.address}%0A` +
                `Issue: ${data.issue}%0A%0A` +
                `Please schedule a service visit. Thank you!`;

            const whatsappURL = `https://wa.me/919876543210?text=${whatsappMessage}`;
            window.open(whatsappURL, '_blank');

            Swal.fire({
                icon: 'success',
                title: 'Service Requested!',
                text: 'Your service request has been sent. We will contact you shortly.',
                confirmButtonColor: '#0066CC'
            });
        }
    });
}

function checkAMC() {
    hideLoadingSpinner();

    Swal.fire({
        title: 'AMC Plans',
        html: `
            <div class="text-start">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="text-primary">Basic AMC</h5>
                                <h3 class="text-success">₹2,999</h3>
                                <small class="text-muted">Per Year</small>
                                <ul class="list-unstyled mt-3">
                                    <li>✓ 4 Service Visits</li>
                                    <li>✓ Filter Cleaning</li>
                                    <li>✓ Basic Maintenance</li>
                                    <li>✓ Phone Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <h5 class="text-primary">Premium AMC</h5>
                                <h3 class="text-success">₹4,999</h3>
                                <small class="text-muted">Per Year</small>
                                <ul class="list-unstyled mt-3">
                                    <li>✓ 6 Service Visits</li>
                                    <li>✓ Filter Replacement</li>
                                    <li>✓ Complete Maintenance</li>
                                    <li>✓ Priority Support</li>
                                    <li>✓ Emergency Service</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `,
        confirmButtonText: '<i class="bi bi-whatsapp"></i> Choose Plan',
        showCancelButton: true,
        cancelButtonText: 'Cancel',
        confirmButtonColor: '#25D366'
    }).then((result) => {
        if (result.isConfirmed) {
            const whatsappMessage = `Hi! I'm interested in AMC plans for my Aquaguard water purifier. Please provide more details and help me choose the right plan.`;
            const whatsappURL = `https://wa.me/919876543210?text=${whatsappMessage}`;
            window.open(whatsappURL, '_blank');
        }
    });
}

function getQuote(product) {
    hideLoadingSpinner();

    const whatsappMessage = `Hi! I'm interested in ${product}. Please share the price details and availability.`;
    const whatsappURL = `https://wa.me/919876543210?text=${whatsappMessage}`;
    window.open(whatsappURL, '_blank');
}

function viewAllProducts() {
    hideLoadingSpinner();
    window.location.href = 'products.php';
}

// Page load optimization
window.addEventListener('load', function() {
    // Ensure spinner is hidden after everything loads
    setTimeout(hideLoadingSpinner, 100);
});

// Handle page visibility changes
document.addEventListener('visibilitychange', function() {
    if (document.visibilityState === 'visible') {
        hideLoadingSpinner();
    }
});

// Error handling for failed resource loads
window.addEventListener('error', function(e) {
    console.warn('Resource loading error:', e.target.src || e.target.href);
    hideLoadingSpinner();
});

// Fallback: Hide spinner after 3 seconds regardless
setTimeout(function() {
    hideLoadingSpinner();
}, 3000);



/*
VVVVVVVVVVVVVVVVVVVVVV*/
