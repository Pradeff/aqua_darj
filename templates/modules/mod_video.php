<?php
// Load video data from JSON
$videoDataPath = 'assets/data/videos.json';
$videos = [];

if (file_exists($videoDataPath)) {
    $jsonData = file_get_contents($videoDataPath);
    $data = json_decode($jsonData, true);
    $videos = $data['videos'] ?? [];
}
?>

<!-- Video Section with Swiper Slider -->
<section class="__video-section">
    <div class="__video-bg-pattern"></div>
    <div class="container">
        <!-- Section Header -->
        <div class="__video-header text-center">
            <div class="__video-badge">
                <i class="bi bi-play-circle-fill"></i>
                <span>Video Gallery</span>
            </div>
            <h2 class="__video-title">Watch Our Product Demonstrations</h2>
            <p class="__video-subtitle">
                See our water purifiers in action and learn about their features through our comprehensive video guides
            </p>
        </div>

        <!-- Swiper Video Slider -->
        <div class="swiper __video-swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($videos)): ?>
                    <?php foreach ($videos as $index => $video): ?>
                        <div class="swiper-slide">
                            <div class="__video-card"
                                 data-video-id="<?php echo $video['id']; ?>"
                                 data-video-path="<?php echo htmlspecialchars($video['path']); ?>">

                                <!-- Video Thumbnail -->
                                <div class="__video-thumbnail">
                                    <video class="__video-preview"
                                           muted
                                           preload="metadata"
                                           id="video-<?php echo $index; ?>">
                                        <source src="<?php echo htmlspecialchars($video['path']); ?>#t=1" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>

                                    <!-- Video Overlay -->
                                    <div class="__video-overlay">
                                        <div class="__play-button">
                                            <i class="bi bi-play-fill"></i>
                                        </div>
                                        <div class="__video-gradient"></div>
                                    </div>

                                    <!-- Only Duration Badge -->
                                    <div class="__video-duration" id="duration-<?php echo $index; ?>">
                                        <i class="bi bi-clock-fill"></i>
                                        <span class="duration-text">Loading...</span>
                                    </div>

                                    <!-- Category Badge (if exists) -->
                                    <?php if (!empty($video['category'])): ?>
                                        <div class="__video-category">
                                            <?php echo htmlspecialchars($video['category']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Simplified Video Info (No title, views, date) -->
                                <div class="__video-info">
                                    <!-- Action Button -->
                                    <button class="__video-play-btn" data-video-path="<?php echo htmlspecialchars($video['path']); ?>">
                                        <i class="bi bi-play-circle"></i>
                                        <span>Watch Video</span>
                                        <div class="__btn-glow"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="swiper-slide">
                        <div class="__video-empty-state">
                            <div class="__empty-icon">
                                <i class="bi bi-film"></i>
                            </div>
                            <h3>No Videos Available</h3>
                            <p>We're working on adding more video content. Please check back soon!</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Swiper Navigation -->
            <div class="swiper-button-next __video-nav-next"></div>
            <div class="swiper-button-prev __video-nav-prev"></div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination __video-pagination"></div>
        </div>
    </div>

    <!-- Floating Elements -->
    <div class="__video-floating-elements">
        <div class="__floating-shape __shape-1"></div>
        <div class="__floating-shape __shape-2"></div>
        <div class="__floating-shape __shape-3"></div>
    </div>
</section>

<!-- Video Modal -->
<div class="__video-modal" id="videoModal">
    <div class="__modal-backdrop"></div>
    <div class="__modal-content">
        <div class="__modal-header">
            <h3 class="__modal-title">Video</h3>
            <button class="__modal-close" id="closeModal">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
        <div class="__modal-body">
            <video class="__modal-video" controls preload="metadata">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
