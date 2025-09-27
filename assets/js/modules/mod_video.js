// Video Module with Swiper Integration
class VideoSwiperModule {
    constructor() {
        this.swiper = null;
        this.videos = [];
        this.modal = document.getElementById('videoModal');
        this.modalVideo = document.querySelector('.__modal-video');

        this.init();
    }

    init() {
        this.initSwiper();
        this.loadVideoDurations();
        this.bindEvents();
    }

    initSwiper() {
        this.swiper = new Swiper('.__video-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            },
            navigation: {
                nextEl: '.__video-nav-next',
                prevEl: '.__video-nav-prev',
            },
            pagination: {
                el: '.__video-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            loop: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            speed: 600,
            effect: 'slide',
        });

        console.log('Video Swiper initialized');
    }

    async loadVideoDurations() {
        const videoElements = document.querySelectorAll('.__video-preview');

        videoElements.forEach(async (video, index) => {
            try {
                const duration = await this.getVideoDuration(video);
                this.updateDurationDisplay(index, duration);
            } catch (error) {
                console.error(`Failed to get duration for video ${index}:`, error);
                this.updateDurationDisplay(index, null);
            }
        });
    }

    getVideoDuration(videoElement) {
        return new Promise((resolve, reject) => {
            const handleLoadedMetadata = () => {
                const duration = videoElement.duration;
                if (duration && !isNaN(duration) && isFinite(duration)) {
                    resolve(duration);
                } else {
                    reject(new Error('Invalid duration'));
                }
                cleanup();
            };

            const handleError = () => {
                reject(new Error('Video load error'));
                cleanup();
            };

            const handleTimeout = () => {
                reject(new Error('Timeout loading video'));
                cleanup();
            };

            const cleanup = () => {
                videoElement.removeEventListener('loadedmetadata', handleLoadedMetadata);
                videoElement.removeEventListener('error', handleError);
                clearTimeout(timeoutId);
            };

            videoElement.addEventListener('loadedmetadata', handleLoadedMetadata);
            videoElement.addEventListener('error', handleError);

            const timeoutId = setTimeout(handleTimeout, 8000);

            if (videoElement.readyState >= 1) {
                handleLoadedMetadata();
            } else {
                videoElement.load();
            }
        });
    }

    updateDurationDisplay(index, duration) {
        const durationElement = document.querySelector(`#duration-${index} .duration-text`);
        if (!durationElement) return;

        if (duration && !isNaN(duration) && isFinite(duration)) {
            const formattedDuration = this.formatDuration(duration);
            durationElement.textContent = formattedDuration;
        } else {
            durationElement.textContent = '--:--';
        }
    }

    formatDuration(seconds) {
        if (!seconds || isNaN(seconds) || !isFinite(seconds)) {
            return '--:--';
        }

        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = Math.floor(seconds % 60);

        return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
    }

    bindEvents() {
        // Play button clicks
        document.addEventListener('click', (e) => {
            if (e.target.closest('.__video-play-btn') || e.target.closest('.__video-card')) {
                const card = e.target.closest('.__video-card');
                if (card) {
                    const videoPath = card.dataset.videoPath;
                    this.playVideo(videoPath);
                }
            }

            if (e.target.closest('.__modal-close') || e.target.closest('.__modal-backdrop')) {
                this.closeModal();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (this.modal.style.display === 'flex') {
                if (e.key === 'Escape') {
                    this.closeModal();
                } else if (e.key === ' ') {
                    e.preventDefault();
                    this.togglePlay();
                }
            }
        });
    }

    playVideo(videoPath) {
        this.modalVideo.src = videoPath;
        this.modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';

        this.modalVideo.addEventListener('loadeddata', () => {
            this.modalVideo.play().catch(console.error);
        }, { once: true });
    }

    closeModal() {
        this.modal.style.display = 'none';
        this.modalVideo.pause();
        this.modalVideo.src = '';
        document.body.style.overflow = '';
    }

    togglePlay() {
        if (this.modalVideo.paused) {
            this.modalVideo.play();
        } else {
            this.modalVideo.pause();
        }
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    // Make sure Swiper is loaded
    if (typeof Swiper !== 'undefined') {
        new VideoSwiperModule();
    } else {
        console.error('Swiper library not found. Please include Swiper CSS and JS files.');
    }
});
