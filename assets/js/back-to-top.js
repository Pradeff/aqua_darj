// Back to Top Button with Progress Bar
class BackToTopButton {
    constructor() {
        this.button = document.getElementById('backToTop');
        this.progressRing = document.querySelector('.progress-ring-progress');
        this.circumference = 2 * Math.PI * 26; // 2πr where r=26

        if (!this.button || !this.progressRing) return;

        this.init();
    }

    init() {
        // Set initial progress ring state
        this.progressRing.style.strokeDasharray = `${this.circumference} ${this.circumference}`;
        this.progressRing.style.strokeDashoffset = this.circumference;

        // Event listeners
        window.addEventListener('scroll', () => this.handleScroll());
        this.button.addEventListener('click', () => this.scrollToTop());

        // Initial check
        this.handleScroll();
    }

    handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercent = scrollTop / documentHeight;

        // Show/hide button
        if (scrollTop > 100) {
            this.button.classList.add('visible');
        } else {
            this.button.classList.remove('visible');
        }

        // Update progress ring
        const offset = this.circumference - (scrollPercent * this.circumference);
        this.progressRing.style.strokeDashoffset = offset;

        // Add dynamic color based on progress
        if (scrollPercent > 0.8) {
            this.progressRing.style.stroke = '#22c55e'; // Green when near bottom
        } else if (scrollPercent > 0.5) {
            this.progressRing.style.stroke = '#f59e0b'; // Yellow in middle
        } else {
            this.progressRing.style.stroke = '#3b82f6'; // Blue at top
        }
    }

    scrollToTop() {
        // Add click animation
        this.button.style.transform = 'translateY(-2px) scale(1.05)';

        // Smooth scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        // Reset animation after a delay
        setTimeout(() => {
            this.button.style.transform = '';
        }, 150);

        // Optional: Add haptic feedback on supported devices
        if (navigator.vibrate) {
            navigator.vibrate(50);
        }
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    new BackToTopButton();
});

// Alternative: Simple initialization without class
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTop');
    const progressRing = document.querySelector('.progress-ring-progress');
    const circumference = 2 * Math.PI * 26;

    if (!backToTopBtn || !progressRing) return;

    // Set initial progress ring
    progressRing.style.strokeDasharray = `${circumference} ${circumference}`;
    progressRing.style.strokeDashoffset = circumference;

    // Handle scroll
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset;
        const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = scrollTop / documentHeight;

        // Show/hide button
        if (scrollTop > 100) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }

        // Update progress
        const offset = circumference - (scrollPercent * circumference);
        progressRing.style.strokeDashoffset = offset;
    });

    // Handle click
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
