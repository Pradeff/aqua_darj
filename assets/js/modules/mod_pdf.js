/**
 * PDF Module with Swiper Integration and Full Width Modal
 * Dependencies: SwiperJS, Bootstrap Icons
 */

class PDFSwiperModule {
    constructor() {
        this.swiper = null;
        this.pdfs = [];
        this.modal = document.getElementById('pdfModal');
        this.modalPdf = document.querySelector('.__modal-pdf');
        this.modalTitle = document.querySelector('.__modal-title');
        this.downloadBtn = document.querySelector('.__download-btn');
        this.isFullscreen = false;
        this.currentPdfIndex = 0;

        this.init();
    }

    init() {
        this.initSwiper();
        this.loadPdfSizes();
        this.bindEvents();
        this.addFullscreenListeners();
        this.loadPdfData();
    }

    initSwiper() {
        this.swiper = new Swiper('.__pdf-swiper', {
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
                nextEl: '.__pdf-nav-next',
                prevEl: '.__pdf-nav-prev',
            },
            pagination: {
                el: '.__pdf-pagination',
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
            grabCursor: true,
            keyboard: {
                enabled: true,
                onlyInViewport: true,
            },
            a11y: {
                prevSlideMessage: 'Previous PDF',
                nextSlideMessage: 'Next PDF',
            },
        });

        console.log('PDF Swiper initialized');
    }

    loadPdfData() {
        const pdfCards = document.querySelectorAll('.__pdf-card');
        this.pdfs = Array.from(pdfCards).map((card, index) => ({
            id: card.dataset.pdfId,
            path: card.dataset.pdfPath,
            title: card.querySelector('.__pdf-card-title')?.textContent || `PDF ${index + 1}`,
            element: card
        }));
    }

    async loadPdfSizes() {
        const pdfCards = document.querySelectorAll('.__pdf-card');

        pdfCards.forEach(async (card, index) => {
            const pdfPath = card.dataset.pdfPath;
            try {
                const size = await this.getPdfSize(pdfPath);
                this.updateSizeDisplay(index, size);
            } catch (error) {
                console.error(`Failed to get size for PDF ${index}:`, error);
                this.updateSizeDisplay(index, null);
            }
        });
    }

    async getPdfSize(pdfPath) {
        try {
            // Try HEAD request first
            const response = await fetch(pdfPath, { method: 'HEAD' });
            if (!response.ok) throw new Error('Failed to fetch PDF');

            const contentLength = response.headers.get('content-length');
            if (contentLength) {
                return parseInt(contentLength, 10);
            }

            // Fallback: Range request
            const rangeResponse = await fetch(pdfPath, {
                headers: { 'Range': 'bytes=0-0' }
            });

            const contentRange = rangeResponse.headers.get('content-range');
            if (contentRange) {
                const match = contentRange.match(/\/(\d+)$/);
                if (match) {
                    return parseInt(match[1], 10);
                }
            }

            throw new Error('Could not determine file size');
        } catch (error) {
            console.error('Error getting PDF size:', error);
            return null;
        }
    }

    updateSizeDisplay(index, sizeInBytes) {
        const sizeElement = document.querySelector(`#size-${index}`);
        if (!sizeElement) return;

        if (sizeInBytes && sizeInBytes > 0) {
            const formattedSize = this.formatFileSize(sizeInBytes);
            sizeElement.textContent = formattedSize;
        } else {
            sizeElement.textContent = 'Unknown size';
        }
    }

    formatFileSize(bytes) {
        if (!bytes || bytes === 0) return '0 Bytes';

        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));

        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    }

    bindEvents() {
        // View button clicks
        document.addEventListener('click', (e) => {
            if (e.target.closest('.__pdf-view-btn') || e.target.closest('.__view-button')) {
                const card = e.target.closest('.__pdf-card');
                if (card) {
                    const pdfPath = card.dataset.pdfPath;
                    const title = card.querySelector('.__pdf-card-title')?.textContent || 'PDF Document';
                    const index = this.pdfs.findIndex(pdf => pdf.path === pdfPath);
                    this.currentPdfIndex = index >= 0 ? index : 0;
                    this.viewPdf(pdfPath, title);
                }
                e.preventDefault();
                e.stopPropagation();
            }

            // Card click to view
            if (e.target.closest('.__pdf-card') && !e.target.closest('.__pdf-download-btn')) {
                const card = e.target.closest('.__pdf-card');
                const pdfPath = card.dataset.pdfPath;
                const title = card.querySelector('.__pdf-card-title')?.textContent || 'PDF Document';
                const index = this.pdfs.findIndex(pdf => pdf.path === pdfPath);
                this.currentPdfIndex = index >= 0 ? index : 0;
                this.viewPdf(pdfPath, title);
                e.preventDefault();
            }

            // Modal controls
            if (e.target.closest('.__modal-close') || e.target.closest('.__modal-backdrop')) {
                this.closeModal();
            }

            if (e.target.closest('.__fullscreen-btn')) {
                this.toggleFullscreen();
            }
        });

        // Enhanced keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (this.modal.style.display === 'flex') {
                switch(e.key) {
                    case 'Escape':
                        this.closeModal();
                        break;
                    case 'F11':
                        e.preventDefault();
                        this.toggleFullscreen();
                        break;
                    case 'ArrowLeft':
                        if (e.ctrlKey) {
                            this.previousPdf();
                        }
                        break;
                    case 'ArrowRight':
                        if (e.ctrlKey) {
                            this.nextPdf();
                        }
                        break;
                    case 'd':
                    case 'D':
                        if (e.ctrlKey) {
                            e.preventDefault();
                            this.downloadCurrentPdf();
                        }
                        break;
                }
            }
        });

        // Download tracking with enhanced feedback
        document.addEventListener('click', (e) => {
            if (e.target.closest('.__pdf-download-btn')) {
                const downloadBtn = e.target.closest('.__pdf-download-btn');
                this.handleDownload(downloadBtn);
                e.stopPropagation();
            }
        });

        // Accessibility: Focus management
        this.modal.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                this.trapFocus(e);
            }
        });

        // Prevent context menu on modal
        this.modal.addEventListener('contextmenu', (e) => {
            e.preventDefault();
        });

        // Handle swiper events
        if (this.swiper) {
            this.swiper.on('slideChange', () => {
                this.pauseAutoplay();
            });

            this.swiper.on('reachEnd', () => {
                console.log('Reached end of PDF slides');
            });
        }
    }

    viewPdf(pdfPath, title) {
        this.modalTitle.textContent = title;
        this.downloadBtn.href = pdfPath;

        // Add opening animation class
        this.modal.classList.add('opening');
        this.modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';

        // Focus management
        this.setModalFocus();

        // Create and show loading overlay
        this.showLoadingOverlay();

        // Load PDF with viewer - optimized settings for full width
        const pdfUrl = `${pdfPath}#toolbar=1&navpanes=1&scrollbar=1&page=1&view=FitH&zoom=page-width`;

        this.modalPdf.onload = () => {
            this.hideLoadingOverlay();
            this.showKeyboardHint();
            // Remove opening class after animation
            setTimeout(() => {
                this.modal.classList.remove('opening');
            }, 400);
        };

        this.modalPdf.onerror = () => {
            this.showError(pdfPath);
        };

        // Add timeout for loading
        setTimeout(() => {
            if (this.modal.style.display === 'flex' && document.querySelector('.__pdf-loading-overlay:not(.hidden)')) {
                this.showError(pdfPath);
            }
        }, 15000); // 15 second timeout

        this.modalPdf.src = pdfUrl;

        // Analytics tracking
        this.trackPdfView(pdfPath, title);
    }

    closeModal() {
        // Add closing animation
        this.modal.classList.add('closing');

        setTimeout(() => {
            this.modal.style.display = 'none';
            this.modal.classList.remove('closing');
            this.modalPdf.src = '';
            document.body.style.overflow = '';
            this.hideLoadingOverlay();
            this.hideKeyboardHint();

            // Exit fullscreen if active
            if (document.fullscreenElement) {
                document.exitFullscreen();
            }

            // Reset focus to the card that opened the modal
            this.resetFocus();
        }, 300);
    }

    previousPdf() {
        if (this.pdfs.length === 0) return;

        this.currentPdfIndex = (this.currentPdfIndex - 1 + this.pdfs.length) % this.pdfs.length;
        const prevPdf = this.pdfs[this.currentPdfIndex];
        this.viewPdf(prevPdf.path, prevPdf.title);
    }

    nextPdf() {
        if (this.pdfs.length === 0) return;

        this.currentPdfIndex = (this.currentPdfIndex + 1) % this.pdfs.length;
        const nextPdf = this.pdfs[this.currentPdfIndex];
        this.viewPdf(nextPdf.path, nextPdf.title);
    }

    downloadCurrentPdf() {
        const currentPdf = this.pdfs[this.currentPdfIndex];
        if (currentPdf) {
            const link = document.createElement('a');
            link.href = currentPdf.path;
            link.download = this.getFileName(currentPdf.path);
            link.click();

            this.trackPdfDownload(currentPdf.path, currentPdf.title);
        }
    }

    showLoadingOverlay() {
        let overlay = document.querySelector('.__pdf-loading-overlay');
        if (!overlay) {
            overlay = document.createElement('div');
            overlay.className = '__pdf-loading-overlay';
            overlay.innerHTML = `
                <div class="__pdf-loader">
                    <div class="__loader-spinner"></div>
                    <p>Loading PDF in full screen...</p>
                </div>
            `;
            document.querySelector('.__modal-body').appendChild(overlay);
        }
        overlay.classList.remove('hidden');
    }

    hideLoadingOverlay() {
        const overlay = document.querySelector('.__pdf-loading-overlay');
        if (overlay) {
            overlay.classList.add('hidden');
        }
    }

    showError(pdfPath) {
        const modalBody = document.querySelector('.__modal-body');
        modalBody.innerHTML = `
            <div class="__pdf-error">
                <i class="bi bi-exclamation-triangle"></i>
                <h3>Failed to Load PDF</h3>
                <p>The PDF file could not be loaded in the viewer. You can try opening it in a new tab or downloading it directly.</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="${pdfPath}" target="_blank">Open in New Tab</a>
                    <a href="${pdfPath}" download style="background: linear-gradient(135deg, #22c55e, #16a34a);">Download PDF</a>
                </div>
            </div>
        `;
    }

    showKeyboardHint() {
        const hint = document.createElement('div');
        hint.className = '__keyboard-hint';
        hint.innerHTML = 'Press <kbd>ESC</kbd> to close • <kbd>F11</kbd> for fullscreen • <kbd>Ctrl+D</kbd> to download';
        document.querySelector('.__modal-content').appendChild(hint);

        // Auto hide after 5 seconds
        setTimeout(() => {
            this.hideKeyboardHint();
        }, 8000);
    }

    hideKeyboardHint() {
        const hint = document.querySelector('.__keyboard-hint');
        if (hint) {
            hint.remove();
        }
    }

    toggleFullscreen() {
        const modal = this.modal;

        if (!document.fullscreenElement) {
            modal.requestFullscreen().catch(err => {
                console.error('Error attempting to enable fullscreen:', err);
                // Fallback: just maximize the modal
                this.maximizeModal();
            });
        } else {
            document.exitFullscreen();
        }
    }

    maximizeModal() {
        // Alternative to fullscreen API
        const content = document.querySelector('.__modal-content');
        content.style.width = '100vw';
        content.style.height = '100vh';
        content.style.borderRadius = '0';
    }

    addFullscreenListeners() {
        // Listen for fullscreen changes
        document.addEventListener('fullscreenchange', () => {
            this.isFullscreen = !!document.fullscreenElement;
            const fullscreenBtn = document.querySelector('.__fullscreen-btn i');

            if (fullscreenBtn) {
                if (this.isFullscreen) {
                    fullscreenBtn.className = 'bi bi-fullscreen-exit';
                } else {
                    fullscreenBtn.className = 'bi bi-fullscreen';
                }
            }
        });

        // Handle fullscreen errors
        document.addEventListener('fullscreenerror', (e) => {
            console.error('Fullscreen error:', e);
        });
    }

    handleDownload(downloadBtn) {
        const fileName = downloadBtn.href.split('/').pop();
        console.log('PDF downloaded:', fileName);

        // Enhanced download animation
        const icon = downloadBtn.querySelector('i');
        const text = downloadBtn.querySelector('span');
        if (icon && text) {
            const originalIcon = icon.className;
            const originalText = text.textContent;

            icon.className = 'bi bi-check-circle';
            text.textContent = 'Downloaded';
            downloadBtn.style.background = 'linear-gradient(135deg, #22c55e, #16a34a)';

            setTimeout(() => {
                icon.className = originalIcon;
                text.textContent = originalText;
                downloadBtn.style.background = '';
            }, 3000);
        }

        // Track download
        this.trackPdfDownload(downloadBtn.href, fileName);
    }

    setModalFocus() {
        // Set focus to close button for accessibility
        setTimeout(() => {
            const closeBtn = document.querySelector('.__modal-close');
            if (closeBtn) {
                closeBtn.focus();
            }
        }, 100);
    }

    resetFocus() {
        // Return focus to the element that opened the modal
        const currentPdf = this.pdfs[this.currentPdfIndex];
        if (currentPdf && currentPdf.element) {
            const viewBtn = currentPdf.element.querySelector('.__pdf-view-btn');
            if (viewBtn) {
                viewBtn.focus();
            }
        }
    }

    trapFocus(e) {
        const focusableElements = this.modal.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];

        if (e.shiftKey) {
            if (document.activeElement === firstElement) {
                lastElement.focus();
                e.preventDefault();
            }
        } else {
            if (document.activeElement === lastElement) {
                firstElement.focus();
                e.preventDefault();
            }
        }
    }

    pauseAutoplay() {
        if (this.swiper && this.swiper.autoplay) {
            this.swiper.autoplay.stop();
        }
    }

    resumeAutoplay() {
        if (this.swiper && this.swiper.autoplay) {
            this.swiper.autoplay.start();
        }
    }

    getFileName(path) {
        return path.split('/').pop() || 'document.pdf';
    }

    trackPdfView(pdfPath, title) {
        // Analytics tracking for PDF views
        console.log('PDF viewed:', { path: pdfPath, title, timestamp: new Date().toISOString() });

        // Example: Google Analytics event
        if (typeof gtag !== 'undefined') {
            gtag('event', 'pdf_view', {
                event_category: 'PDF',
                event_label: title,
                value: 1
            });
        }
    }

    trackPdfDownload(pdfPath, title) {
        // Analytics tracking for PDF downloads
        console.log('PDF downloaded:', { path: pdfPath, title, timestamp: new Date().toISOString() });

        // Example: Google Analytics event
        if (typeof gtag !== 'undefined') {
            gtag('event', 'pdf_download', {
                event_category: 'PDF',
                event_label: title,
                value: 1
            });
        }
    }

    addHoverEffect(card) {
        // Add subtle animation on hover
        const icon = card.querySelector('.__pdf-icon');
        if (icon) {
            icon.style.transform = 'scale(1.1) rotateY(15deg)';
            setTimeout(() => {
                icon.style.transform = '';
            }, 300);
        }
    }

    // Public API methods
    getPdfById(id) {
        return this.pdfs.find(pdf => pdf.id === id);
    }

    getCurrentPdf() {
        return this.pdfs[this.currentPdfIndex];
    }

    getTotalPdfs() {
        return this.pdfs.length;
    }

    goToPdf(index) {
        if (index >= 0 && index < this.pdfs.length) {
            this.currentPdfIndex = index;
            const pdf = this.pdfs[index];
            this.viewPdf(pdf.path, pdf.title);
        }
    }

    refresh() {
        if (this.swiper) {
            this.swiper.destroy();
        }
        this.init();
    }

    destroy() {
        if (this.swiper) {
            this.swiper.destroy();
        }

        // Remove event listeners
        document.removeEventListener('click', this.handleClick);
        document.removeEventListener('keydown', this.handleKeydown);

        console.log('PDF Module destroyed');
    }
}

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    // Check if required dependencies are available
    if (typeof Swiper !== 'undefined') {
        // Initialize PDF module
        window.pdfModule = new PDFSwiperModule();
        console.log('PDF Swiper Module initialized successfully');
    } else {
        console.error('Swiper library not found. Please include Swiper CSS and JS files.');

        // Fallback: basic functionality without Swiper
        document.addEventListener('click', (e) => {
            if (e.target.closest('.__pdf-view-btn')) {
                const card = e.target.closest('.__pdf-card');
                if (card) {
                    const pdfPath = card.dataset.pdfPath;
                    window.open(pdfPath, '_blank');
                }
            }
        });
    }
});

// Export for module use
if (typeof module !== 'undefined' && module.exports) {
    module.exports = PDFSwiperModule;
}

// Global utility functions
window.PDFUtils = {
    formatFileSize: function(bytes) {
        if (!bytes || bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    },

    isPdfSupported: function() {
        return navigator.mimeTypes && navigator.mimeTypes['application/pdf'];
    },

    openPdfExternal: function(pdfPath) {
        window.open(pdfPath, '_blank', 'noopener,noreferrer');
    }
};
