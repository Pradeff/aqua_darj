<?php
$pageTitle = "Gallery - Aquaguard Darjeeling";
$pageDescription = "View our gallery of installations, happy customers, and quality service demonstrations across Darjeeling.";
include '_header.php';
include '_nav.php';
?>

<style>
    .gallery-container {
        padding: 60px 0;
        background: #f8f9fa;
    }

    /* Masonry Grid Container */
    .masonry-grid {
        display: block;
        column-count: 3;
        column-gap: 20px;
        padding: 0 10px;
    }

    /* Gallery Items */
    .gallery-item {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
        break-inside: avoid;
        page-break-inside: avoid;
        -webkit-column-break-inside: avoid;
    }

    .gallery-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        background: #fff;
        cursor: pointer;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .gallery-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-card:hover .gallery-image {
        transform: scale(1.05);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(0,123,255,0.8), rgba(40,167,69,0.8));
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-icon {
        color: white;
        font-size: 2rem;
        transform: scale(0.8);
        transition: transform 0.3s ease;
    }

    .gallery-card:hover .gallery-icon {
        transform: scale(1);
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
        color: #333;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(45deg, #007bff, #28a745);
        border-radius: 2px;
    }

    .section-title p {
        color: #666;
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Force 3 columns on ALL screen sizes */
    @media (max-width: 1200px) {
        .masonry-grid {
            column-count: 3;
            column-gap: 15px;
            padding: 0 8px;
        }

        .gallery-item {
            margin-bottom: 15px;
        }
    }

    @media (max-width: 768px) {
        .masonry-grid {
            column-count: 3;
            column-gap: 10px;
            padding: 0 5px;
        }

        .gallery-item {
            margin-bottom: 10px;
        }

        .section-title h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .masonry-grid {
            column-count: 3;
            column-gap: 8px;
            padding: 0 3px;
        }

        .gallery-item {
            margin-bottom: 8px;
        }

        .gallery-container {
            padding: 40px 0;
        }

        .section-title h2 {
            font-size: 1.8rem;
        }

        .gallery-icon {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 320px) {
        .masonry-grid {
            column-count: 3;
            column-gap: 5px;
            padding: 0 2px;
        }

        .gallery-item {
            margin-bottom: 5px;
        }
    }

    /* Loading Animation */
    .masonry-grid {
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .masonry-grid.loaded {
        opacity: 1;
    }

    .loading-spinner {
        text-align: center;
        padding: 50px 0;
    }

    .spinner {
        display: inline-block;
        width: 50px;
        height: 50px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #007bff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<section class="gallery-container">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">
            <h2>Our Gallery</h2>
            <p>Explore our collection of premium water purification installations and satisfied customers across Darjeeling</p>
        </div>

        <!-- Loading Spinner -->
        <div class="loading-spinner" id="loading">
            <div class="spinner"></div>
            <p class="mt-3">Loading images...</p>
        </div>

        <!-- Masonry Gallery Grid -->
        <div class="masonry-grid" id="gallery">
            <?php
            $captions = [
                1 => "",
                2 => "",
                3 => "Ceo eureka forbes Mr. Pratik Porta",
                4 => "",
                5 => "",
                6 => "",
                7 => "",
                8 => "",
                9 => "",
                10 => "",
                11 => " ",
            ];

            for ($i = 1; $i <= 11; $i++): ?>
                <div class="gallery-item">
                    <div class="gallery-card"
                         data-fancybox="gallery"
                         data-src="assets/images/gallery/<?php echo $i; ?>.jpg"
                         data-caption="<?php echo htmlspecialchars($captions[$i]); ?>">

                        <img src="assets/images/gallery/<?php echo $i; ?>.jpg"
                             alt="Gallery Image <?php echo $i; ?>"
                             class="gallery-image"
                             loading="lazy">

                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus gallery-icon"></i>
                        </div>
                    </div>

                    <!-- Caption below image -->
                    <?php if (!empty(trim($captions[$i]))): ?>
                        <div class="gallery-caption">
                            <?php echo $captions[$i]; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>

    </div>
</section>




<?php include '_footer.php'; ?>
<script>
    $(document).ready(function() {
        // Initialize Fancybox
        Fancybox.bind("[data-fancybox]", {
            Toolbar: {
                display: {
                    left: ["infobar"],
                    middle: [
                        "zoomIn",
                        "zoomOut",
                        "toggle1to1",
                        "rotateCCW",
                        "rotateCW",
                        "flipX",
                        "flipY",
                    ],
                    right: ["slideshow", "thumbs", "close"],
                },
            },
            Images: {
                zoom: true,
                Panzoom: {
                    maxScale: 3,
                },
            },
            Carousel: {
                infinite: true,
            },
            hideScrollbar: false,
        });

        // Handle image loading and show gallery
        var images = document.querySelectorAll('.gallery-image');
        var loadedImages = 0;
        var totalImages = images.length;

        function imageLoaded() {
            loadedImages++;
            if (loadedImages === totalImages) {
                // Hide loading spinner
                $('#loading').hide();

                // Show gallery with fade effect
                $('#gallery').addClass('loaded');

                // Animate gallery items on load
                $('.gallery-item').each(function(index) {
                    $(this).delay(index * 50).animate({
                        opacity: 1
                    }, 400);
                });
            }
        }

        // Check if images are loaded
        images.forEach(function(img) {
            if (img.complete) {
                imageLoaded();
            } else {
                img.addEventListener('load', imageLoaded);
                img.addEventListener('error', imageLoaded); // Handle broken images
            }
        });

        // Fallback if all images are already cached
        setTimeout(function() {
            if (!$('#gallery').hasClass('loaded')) {
                $('#loading').hide();
                $('#gallery').addClass('loaded');
            }
        }, 2000);

        // Handle window resize - maintain 3 columns
        $(window).resize(function() {
            // Force reflow for masonry layout
            var gallery = $('#gallery')[0];
            gallery.style.columnCount = 'auto';
            setTimeout(function() {
                gallery.style.columnCount = '3';
            }, 10);
        });
    });

    // Vanilla JS fallback for older browsers
    document.addEventListener('DOMContentLoaded', function() {
        // Add initial opacity for smooth loading
        const galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach(function(item) {
            item.style.opacity = '0';
        });
    });
</script>