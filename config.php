<?php
// Website Configuration
define('SITE_NAME', 'Aquaguard Darjeeling - Official Eureka Forbes Authorized Representative');
define('SITE_URL', 'https://aquaguard-darjeeling.com');
define('GST_NO', '19CKUPG7097K1Z3');
define('BUSINESS_NAME', 'Aquaguard Darjeeling');
define('BUSINESS_ADDRESS', 'Gumbaline, above Nebula,Sukhia Pokhri, Darjeeling - 734221');
define('BUSINESS_PHONE', '+91 7550919479');
define('BUSINESS_WHATSAPP', '917550919479');
define('CUSTOMER_CARE_NO', '18602661177');
define('BUSINESS_EMAIL', 'aquaguardsolution2025@gmail.com');
define('EMAIL_1', 'aquaguardsolution_9403@eurosmile.in');

// Performance Configuration
ini_set('zlib.output_compression', 'On');
ini_set('zlib.output_compression_level', '6');

// Security Headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');

// SEO Function
function get_page_seo($page = 'index') {
    $seo_config = [
        'author' => 'Aquaguard Darjeeling',
        'robots' => 'index, follow',
        'canonical' => SITE_URL,
        'og_type' => 'website',
        'twitter_card' => 'summary_large_image'
    ];

    $pages = [
        'index' => [
            'title' => 'Aquaguard Water Purifiers Darjeeling | Official Eureka Forbes Dealer',
            'description' => 'Buy Aquaguard water purifiers in Darjeeling. Official Eureka Forbes Authorized Representative offering RO UV filters, installation, AMC services & repair. Free home demo available.',
            'keywords' => 'Aquaguard Darjeeling, water purifier Darjeeling, RO filter, UV filter, Eureka Forbes dealer'
        ],
        'products' => [
            'title' => 'Aquaguard Water Purifiers | RO UV Filters | Darjeeling',
            'description' => 'Explore Aquaguard water purifiers - Aura 2X Life, Blaze Insta, Marvel NXT. Advanced RO+UV technology with copper protection. Best prices in Darjeeling.',
            'keywords' => 'Aquaguard models, RO UV purifier, water filter price, Darjeeling'
        ],
        'services' => [
            'title' => 'Aquaguard Service & AMC | Installation Repair | Darjeeling',
            'description' => 'Professional Aquaguard service in Darjeeling. AMC plans, installation, repair, filter replacement. Authorized service center with genuine parts.',
            'keywords' => 'Aquaguard service, AMC, installation, repair, filter replacement, Darjeeling'
        ],
        'about' => [
            'title' => 'About Aquaguard Darjeeling | Official Eureka Forbes Authorized Representative',
            'description' => 'Learn about Aquaguard Darjeeling - your trusted Eureka Forbes Authorized Representative. Years of experience in water purification solutions and customer service.',
            'keywords' => 'Aquaguard Darjeeling about, Eureka Forbes Authorized Representative, water purifier dealer'
        ],
        'contact' => [
            'title' => 'Contact Aquaguard Darjeeling | Service Support',
            'description' => 'Contact official Aquaguard dealer in Darjeeling. Schedule service, AMC support. Call +91 7550919479 or WhatsApp.',
            'keywords' => 'contact Aquaguard, free demo, service booking, Darjeeling dealer'
        ]
    ];

    if (isset($pages[$page])) {
        return array_merge($seo_config, $pages[$page]);
    } else {
        // Default fallback
        return array_merge($seo_config, $pages['index']);
    }
}

// JSON-LD Structured Data
function get_business_schema() {
    return json_encode([
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => BUSINESS_NAME,
        "description" => "Official Eureka Forbes providing Aquaguard water purifiers, RO UV filters, installation, AMC services and repair in Darjeeling.",
        "url" => SITE_URL,
        "telephone" => BUSINESS_PHONE,
        "email" => BUSINESS_EMAIL,
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "123 Mall Road",
            "addressLocality" => "Darjeeling",
            "addressRegion" => "West Bengal",
            "postalCode" => "734101",
            "addressCountry" => "IN"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => "27.0360",
            "longitude" => "88.2627"
        ],
        "openingHours" => "Mo-Sa 09:00-18:00",
        "priceRange" => "₹₹",
        "paymentAccepted" => "Cash, Credit Card, UPI, Net Banking",
        "currenciesAccepted" => "INR",
        "areaServed" => "Darjeeling, Sikkim",
        "serviceType" => "Water Purifier Sales, Service, AMC, Installation, Repair",
        "brand" => "Eureka Forbes Aquaguard",
        "sameAs" => [
            "https://www.facebook.com/aquaguarddarjeeling",
            "https://www.instagram.com/aquaguarddarjeeling"
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
?>
