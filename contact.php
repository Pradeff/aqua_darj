<?php include '_header.php';
 include '_nav.php';

// Initialize variables to prevent undefined variable warnings
$success_message = '';
$error_message = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } elseif (!preg_match('/^[0-9]{10,15}$/', preg_replace('/[^0-9]/', '', $phone))) {
        $error_message = 'Please enter a valid phone number.';
    } else {
        // Process form (send email, save to database, etc.)
        // You can add your form processing logic here

        try {
            // Example: Send email or save to database
            // mail($to, $subject, $message, $headers);
            // Or save to database

            $success_message = 'Thank you for contacting us! We\'ll get back to you within 24 hours.';

            // Clear form data on success
            $name = $email = $phone = $subject = $message = '';

        } catch (Exception $e) {
            $error_message = 'Sorry, there was an error sending your message. Please try again.';
        }
    }
}

// Function to safely get POST data
function getPostValue($key, $default = '') {
    return htmlspecialchars($_POST[$key] ?? $default, ENT_QUOTES, 'UTF-8');
}
?>

<!-- Contact Page Hero Section -->
<section class="__cont-hero">
    <div class="__cont-hero-bg-pattern"></div>
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-6">
                <div class="__cont-hero-content">
                    <div class="__cont-hero-badge">
                        <i class="bi bi-headset"></i>
                        <span>We're Here to Help</span>
                    </div>
                    <h1 class="__cont-hero-title">Get in Touch</h1>
                    <p class="__cont-hero-description">
                        Ready for pure water? Contact us for free demo, service support, or any queries.
                        Our expert team is here to help you 24/7.
                    </p>
                    <div class="__cont-hero-stats">
                        <div class="__cont-stat-item">
                            <div class="__cont-stat-number">24/7</div>
                            <div class="__cont-stat-label">Support Available</div>
                        </div>
                        <div class="__cont-stat-item">
                            <div class="__cont-stat-number">1000+</div>
                            <div class="__cont-stat-label">Happy Customers</div>
                        </div>
                        <div class="__cont-stat-item">
                            <div class="__cont-stat-number">< 2hrs</div>
                            <div class="__cont-stat-label">Response Time</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="__cont-hero-illustration">
                    <div class="__cont-floating-card __cont-card-1">
                        <i class="bi bi-telephone-fill"></i>
                        <span>Quick Response</span>
                    </div>
                    <div class="__cont-floating-card __cont-card-2">
                        <i class="bi bi-shield-check"></i>
                        <span>Trusted Service</span>
                    </div>
                    <div class="__cont-floating-card __cont-card-3">
                        <i class="bi bi-tools"></i>
                        <span>Expert Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact Bar -->
<section class="__cont-quick-contact-bar">
    <div class="container">
        <div class="__cont-contact-methods">
            <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="__cont-contact-method __cont-phone-method">
                <div class="__cont-method-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="__cont-method-content">
                    <span class="__cont-method-label">Call Now</span>
                    <span class="__cont-method-value"><?php echo BUSINESS_PHONE; ?></span>
                </div>
            </a>

            <a href="https://wa.me/<?php echo BUSINESS_WHATSAPP; ?>" class="__cont-contact-method __cont-whatsapp-method" target="_blank">
                <div class="__cont-method-icon">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="__cont-method-content">
                    <span class="__cont-method-label">WhatsApp</span>
                    <span class="__cont-method-value">Chat with us</span>
                </div>
            </a>

            <a href="mailto:<?php echo BUSINESS_EMAIL; ?>" class="__cont-contact-method __cont-email-method">
                <div class="__cont-method-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="__cont-method-content">
                    <span class="__cont-method-label">Email Us</span>
                    <span class="__cont-method-value"><?php echo BUSINESS_EMAIL; ?></span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="__cont-main-contact-section">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="__cont-contact-form-wrapper">
                    <div class="__cont-form-header">
                        <h2 class="__cont-form-title">
                            <i class="bi bi-chat-dots me-2"></i>
                            Send us a Message
                        </h2>
                        <p class="__cont-form-description">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>

                    <?php if ($success_message): ?>
                        <div class="alert alert-success __cont-alert-modern">
                            <i class="bi bi-check-circle-fill"></i>
                            <?php echo $success_message; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($error_message): ?>
                        <div class="alert alert-danger __cont-alert-modern">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            <?php echo $error_message; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" class="__cont-contact-form">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="__cont-form-floating-modern">
                                    <input type="text"
                                           class="form-control"
                                           id="name"
                                           name="name"
                                           required
                                           value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                                    <label for="name">
                                        <i class="bi bi-person"></i>
                                        Full Name *
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="__cont-form-floating-modern">
                                    <input type="email"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           required
                                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                                    <label for="email">
                                        <i class="bi bi-envelope"></i>
                                        Email Address *
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="__cont-form-floating-modern">
                                    <input type="tel"
                                           class="form-control"
                                           id="phone"
                                           name="phone"
                                           required
                                           value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                                    <label for="phone">
                                        <i class="bi bi-telephone"></i>
                                        Phone Number *
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="__cont-form-floating-modern">
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">Choose a service</option>
                                        <option value="Free Demo" <?php echo ($_POST['subject'] ?? '') === 'Free Demo' ? 'selected' : ''; ?>>Free Demo Request</option>
                                        <option value="Service Support" <?php echo ($_POST['subject'] ?? '') === 'Service Support' ? 'selected' : ''; ?>>Service Support</option>
                                        <option value="AMC Plan" <?php echo ($_POST['subject'] ?? '') === 'AMC Plan' ? 'selected' : ''; ?>>AMC Plan Inquiry</option>
                                        <option value="Product Purchase" <?php echo ($_POST['subject'] ?? '') === 'Product Purchase' ? 'selected' : ''; ?>>Product Purchase</option>
                                        <option value="Complaint" <?php echo ($_POST['subject'] ?? '') === 'Complaint' ? 'selected' : ''; ?>>Complaint/Issue</option>
                                        <option value="Other" <?php echo ($_POST['subject'] ?? '') === 'Other' ? 'selected' : ''; ?>>Other Inquiry</option>
                                    </select>
                                    <label for="subject">
                                        <i class="bi bi-tag"></i>
                                        Service Type *
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="__cont-form-floating-modern">
                                    <textarea class="form-control"
                                              id="message"
                                              name="message"
                                              required
                                              rows="5"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                                    <label for="message">
                                        <i class="bi bi-chat-text"></i>
                                        Your Message *
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="__cont-btn-submit">
                                    <span class="__cont-btn-content">
                                        <i class="bi bi-send"></i>
                                        Send Message
                                    </span>
                                    <div class="__cont-btn-ripple"></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="__cont-contact-info-section">
                    <!-- Office Information -->
                    <div class="__cont-info-card __cont-office-card">
                        <div class="__cont-info-header">
                            <div class="__cont-info-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3 class="__cont-info-title">Visit Our Office</h3>
                        </div>
                        <div class="__cont-info-content">
                            <p class="__cont-office-description">
                                Visit our office in the heart of Darjeeling for personalized consultation and product demonstrations.
                            </p>
                            <div class="__cont-office-details">
                                <div class="__cont-detail-item">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <span><?php echo BUSINESS_ADDRESS; ?></span>
                                </div>
                                <div class="__cont-detail-item">
                                    <i class="bi bi-clock-fill"></i>
                                    <div>
                                        <div>Monday - Saturday: 9:00 AM - 6:00 PM</div>
                                        <div class="__cont-emergency-note">Sunday: Emergency Service Only</div>
                                    </div>
                                </div>
                            </div>
                            <button class="__cont-btn-direction" onclick="openGoogleMaps()">
                                <i class="bi bi-map"></i>
                                Get Directions
                            </button>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="__cont-info-card __cont-quick-actions-card">
                        <div class="__cont-info-header">
                            <div class="__cont-info-icon">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <h3 class="__cont-info-title">Quick Actions</h3>
                        </div>
                        <div class="__cont-quick-actions">
                            <a href="tel:<?php echo BUSINESS_PHONE; ?>" class="__cont-quick-action __cont-emergency-call">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Emergency Call</span>
                            </a>
                            <button class="__cont-quick-action __cont-book-demo" onclick="bookFreeDemo()">
                                <i class="bi bi-calendar-check"></i>
                                <span>Book Free Demo</span>
                            </button>
                            <a href="#" class="__cont-quick-action __cont-track-service">
                                <i class="bi bi-search"></i>
                                <span>Track Service</span>
                            </a>
                        </div>
                    </div>

                    <!-- FAQ Preview -->
                    <div class="__cont-info-card __cont-faq-card">
                        <div class="__cont-info-header">
                            <div class="__cont-info-icon">
                                <i class="bi bi-question-circle"></i>
                            </div>
                            <h3 class="__cont-info-title">Common Questions</h3>
                        </div>
                        <div class="__cont-faq-preview">
                            <div class="__cont-faq-item">
                                <div class="__cont-faq-question">
                                    <i class="bi bi-chevron-right"></i>
                                    How long does installation take?
                                </div>
                                <div class="__cont-faq-answer">
                                    Typically 30-45 minutes for standard installation.
                                </div>
                            </div>
                            <div class="__cont-faq-item">
                                <div class="__cont-faq-question">
                                    <i class="bi bi-chevron-right"></i>
                                    Is the demo really free?
                                </div>
                                <div class="__cont-faq-answer">
                                    Yes, absolutely free with no hidden charges.
                                </div>
                            </div>
                            <div class="__cont-faq-item">
                                <div class="__cont-faq-question">
                                    <i class="bi bi-chevron-right"></i>
                                    Do you provide AMC services?
                                </div>
                                <div class="__cont-faq-answer">
                                    Yes, we offer comprehensive AMC plans.
                                </div>
                            </div>
                        </div>
                        <a href="#" class="__cont-view-all-faq">
                            View All FAQs
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="__cont-map-section">
    <div class="container">
        <div class="__cont-map-wrapper">
            <div class="__cont-map-header">
                <h2 class="__cont-map-title">Find Us on Map</h2>
                <p class="__cont-map-description">Located in the heart of Darjeeling for your convenience</p>
            </div>
            <div class="__cont-map-container">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7659!2d88.2636!3d27.0360!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDAyJzA5LjYiTiA4OMKwMTUnNDkuMCJF!5e0!3m2!1sen!2sin!4v1635000000000!5m2!1sen!2sin"
                        width="100%"
                        height="400"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="__cont-map-overlay">
                    <div class="__cont-map-info">
                        <h4><?php echo BUSINESS_NAME; ?></h4>
                        <p><?php echo BUSINESS_ADDRESS; ?></p>
                        <div class="__cont-map-actions">
                            <button class="__cont-map-btn" onclick="openGoogleMaps()">
                                <i class="bi bi-map"></i>
                                Open in Maps
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function openGoogleMaps() {
        const address = "<?php echo urlencode(BUSINESS_ADDRESS); ?>";
        window.open(`https://www.google.com/maps/search/?api=1&query=${address}`, '_blank');
    }

    function bookFreeDemo() {
        // Implement booking functionality
        window.location.href = 'tel:<?php echo BUSINESS_PHONE; ?>';
    }

    // Form enhancements
    document.addEventListener('DOMContentLoaded', function() {
        // Add ripple effect to submit button
        const submitBtn = document.querySelector('.__cont-btn-submit');
        if (submitBtn) {
            submitBtn.addEventListener('click', function(e) {
                const ripple = document.createElement('div');
                ripple.className = '__cont-btn-ripple';
                ripple.style.left = e.offsetX + 'px';
                ripple.style.top = e.offsetY + 'px';
                this.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            });
        }

        // FAQ toggle functionality
        const faqQuestions = document.querySelectorAll('.__cont-faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('i');

                if (answer.style.display === 'none' || !answer.style.display) {
                    answer.style.display = 'block';
                    icon.classList.replace('bi-chevron-right', 'bi-chevron-down');
                } else {
                    answer.style.display = 'none';
                    icon.classList.replace('bi-chevron-down', 'bi-chevron-right');
                }
            });
        });
    });
</script>
<?php include '_footer.php'; ?>
