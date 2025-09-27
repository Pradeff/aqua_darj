<?php
require_once 'config.php';
$page = basename($_SERVER['PHP_SELF'], '.php');
$seo = get_page_seo($page);
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title><?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : 'Aquaguard Darjeeling - Water Purifiers'; ?></title>
    <meta name="description" content="<?php echo isset($seo['description']) ? htmlspecialchars($seo['description']) : 'Official Eureka Forbes franchise in Darjeeling for water purifiers'; ?>">
    <meta name="keywords" content="<?php echo isset($seo['keywords']) ? htmlspecialchars($seo['keywords']) : 'Aquaguard, water purifier, Darjeeling'; ?>">
    <meta name="author" content="<?php echo isset($seo['author']) ? htmlspecialchars($seo['author']) : 'Aquaguard Darjeeling'; ?>">
    <meta name="robots" content="<?php echo isset($seo['robots']) ? $seo['robots'] : 'index, follow'; ?>">
    <link rel="canonical" href="<?php echo SITE_URL . '/' . ($page === 'index' ? '' : $page . '.php'); ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : 'Aquaguard Darjeeling'; ?>">
    <meta property="og:description" content="<?php echo isset($seo['description']) ? htmlspecialchars($seo['description']) : 'Official Eureka Forbes franchise'; ?>">
    <meta property="og:type" content="<?php echo isset($seo['og_type']) ? $seo['og_type'] : 'website'; ?>">
    <meta property="og:url" content="<?php echo SITE_URL . '/' . ($page === 'index' ? '' : $page . '.php'); ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    <meta property="og:site_name" content="<?php echo BUSINESS_NAME; ?>">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="<?php echo isset($seo['twitter_card']) ? $seo['twitter_card'] : 'summary_large_image'; ?>">
    <meta name="twitter:title" content="<?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : 'Aquaguard Darjeeling'; ?>">
    <meta name="twitter:description" content="<?php echo isset($seo['description']) ? htmlspecialchars($seo['description']) : 'Official Eureka Forbes franchise'; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>/assets/images/twitter-card.jpg">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="assets/js/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Fancybox CSS -->
    <link href="assets/js/vendor/fancybox/fancybox.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="assets/fonts/font.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="assets/css/custom-styles.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/js/vendor/swiperjs/swiper-bundle.min.css" />
    <link href="assets/css/modules/mod_pdf.css" rel="stylesheet">
    <link href="assets/css/modules/mod_video.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/about.css" rel="stylesheet">
    <link href="assets/css/contact.css" rel="stylesheet">
    <link href="assets/css/section_hero.css" rel="stylesheet">


    <!-- Critical CSS (inlined for performance) -->
    <style>

        /* Fixed Loading Spinner */
        .loading-spinner {
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(5px);
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }

        .loading-spinner.hide {
            opacity: 0;
            visibility: hidden;
        }

        /* Hide content initially */
        .page-content {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .page-content.show {
            opacity: 1;
        }
        @media (max-width: 768px) {
            .page-content {
                padding: 1rem 0;
            }
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    <?php echo get_business_schema(); ?>
    </script>
</head>
<body>
<!-- Loading Spinner -->
<div class="loading-spinner d-flex justify-content-center align-items-center" id="loadingSpinner">
    <div class="text-center">
        <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h5 class="text-primary">Aquaguard Darjeeling</h5>
        <p class="text-muted">Loading Please wait...</p>
    </div>
</div>

<!-- Page Content Wrapper -->
<div class="page-content" id="pageContent">
