<?php
// Load PDF data from JSON
$pdfDataPath = 'assets/data/pdfs.json';
$pdfs = [];

if (file_exists($pdfDataPath)) {
    $jsonData = file_get_contents($pdfDataPath);
    $data = json_decode($jsonData, true);
    $pdfs = $data['pdfs'] ?? [];
}
?>



<!-- PDF Section with Swiper Slider -->
<section class="__pdf-section">
    <div class="__pdf-bg-pattern"></div>
    <div class="container">
        <!-- Section Header -->
        <div class="__pdf-header text-center">
            <div class="__pdf-badge">
                <i class="bi bi-file-earmark-pdf-fill"></i>
                <span>PDF Library</span>
            </div>
            <h2 class="__pdf-title">Download Product Brochures</h2>
            <p class="__pdf-subtitle">
                Access detailed product information, specifications, and guides through our comprehensive PDF collection
            </p>
        </div>

        <!-- Swiper PDF Slider -->
        <div class="swiper __pdf-swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($pdfs)): ?>
                    <?php foreach ($pdfs as $index => $pdf): ?>
                        <div class="swiper-slide">
                            <div class="__pdf-card"
                                 data-pdf-id="<?php echo $pdf['id']; ?>"
                                 data-pdf-path="<?php echo htmlspecialchars($pdf['path']); ?>">

                                <!-- PDF Thumbnail -->
                                <div class="__pdf-thumbnail">
                                    <div class="__pdf-preview">
                                        <div class="__pdf-icon">
                                            <i class="bi bi-file-earmark-pdf-fill"></i>
                                        </div>
                                        <div class="__pdf-file-info">
                                            <span class="__file-type">PDF</span>
                                            <span class="__file-size" id="size-<?php echo $index; ?>">Loading...</span>
                                        </div>
                                    </div>

                                    <!-- PDF Overlay -->
                                    <div class="__pdf-overlay">
                                        <div class="__view-button">
                                            <i class="bi bi-eye-fill"></i>
                                        </div>
                                        <div class="__pdf-gradient"></div>
                                    </div>

                                    <!-- Category Badge (if exists) -->
                                    <?php if (!empty($pdf['category'])): ?>
                                        <div class="__pdf-category">
                                            <?php echo htmlspecialchars($pdf['category']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- PDF Info -->
                                <div class="__pdf-info">
                                    <h3 class="__pdf-card-title">
                                        <?php echo !empty($pdf['title']) ? htmlspecialchars($pdf['title']) : 'Product Brochure ' . $pdf['id']; ?>
                                    </h3>

                                    <!-- Action Buttons -->
                                    <div class="__pdf-actions">
                                        <button class="__pdf-view-btn" data-pdf-path="<?php echo htmlspecialchars($pdf['path']); ?>">
                                            <i class="bi bi-eye"></i>
                                            <span>View</span>
                                        </button>
                                        <a href="<?php echo htmlspecialchars($pdf['path']); ?>"
                                           class="__pdf-download-btn"
                                           download
                                           target="_blank">
                                            <i class="bi bi-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="swiper-slide">
                        <div class="__pdf-empty-state">
                            <div class="__empty-icon">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </div>
                            <h3>No PDFs Available</h3>
                            <p>We're working on adding more PDF content. Please check back soon!</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Swiper Navigation -->
            <div class="swiper-button-next __pdf-nav-next"></div>
            <div class="swiper-button-prev __pdf-nav-prev"></div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination __pdf-pagination"></div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="__pdf-floating-elements">
        <div class="__floating-shape __shape-1"></div>
        <div class="__floating-shape __shape-2"></div>
        <div class="__floating-shape __shape-3"></div>
    </div>
</section>

<!-- PDF Modal -->
<div class="__pdf-modal" id="pdfModal">
    <div class="__modal-backdrop"></div>
    <div class="__modal-content">
        <div class="__modal-header">
            <h3 class="__modal-title">PDF Viewer</h3>
            <div class="__modal-controls">
                <button class="__modal-btn __fullscreen-btn" title="Fullscreen">
                    <i class="bi bi-fullscreen"></i>
                </button>
                <a href="#" class="__modal-btn __download-btn" title="Download" download target="_blank">
                    <i class="bi bi-download"></i>
                </a>
                <button class="__modal-close" id="closePdfModal">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
        <div class="__modal-body">
            <iframe class="__modal-pdf" src="" frameborder="0"></iframe>
            <!--<div class="__pdf-loader">
                <div class="__loader-spinner"></div>
                <p>Loading PDF...</p>
            </div>-->
        </div>
    </div>
</div>
