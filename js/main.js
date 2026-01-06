// ===========================================
// AHWAAL - Premium UI JavaScript
// Enhanced Animations & Interactions
// ===========================================

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initNavbar();
    initScrollAnimations();
    initSmoothScroll();
    initParallaxEffects();
    initButtonEffects();
});

// ===========================================
// NAVBAR FUNCTIONALITY
// ===========================================
function initNavbar() {
    const header = document.getElementById('header');
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    // Check if we're on homepage
    const isHomepage = window.location.pathname.endsWith('index.php') ||
                       window.location.pathname.endsWith('/') ||
                       window.location.pathname === '';

    // Scroll effect for navbar (only toggle on homepage)
    let lastScrollY = 0;

    window.addEventListener('scroll', function() {
        const currentScrollY = window.scrollY;

        if (currentScrollY > 50) {
            header.classList.add('scrolled');
        } else if (isHomepage) {
            header.classList.remove('scrolled');
        }

        lastScrollY = currentScrollY;
    }, { passive: true });

    // Mobile menu toggle
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when clicking on a link
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (navMenu && menuToggle) {
            if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                menuToggle.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });
}

// ===========================================
// SCROLL ANIMATIONS
// ===========================================
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');

                // Add stagger effect for grid children
                if (entry.target.parentElement) {
                    const siblings = entry.target.parentElement.querySelectorAll('.fade-in');
                    const index = Array.from(siblings).indexOf(entry.target);
                    entry.target.style.transitionDelay = `${index * 100}ms`;
                }
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => observer.observe(el));

    // Animate section titles
    const sectionTitles = document.querySelectorAll('.section-title, .hero-title, .security-title, .contact-title');
    sectionTitles.forEach(title => {
        const titleObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards';
                }
            });
        }, { threshold: 0.3 });

        titleObserver.observe(title);
    });
}

// ===========================================
// SMOOTH SCROLLING
// ===========================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');

            if (targetId === '#') {
                e.preventDefault();
                scrollToTop(e);
                return;
            }

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();
                const headerOffset = 100;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ===========================================
// PARALLAX EFFECTS
// ===========================================
function initParallaxEffects() {
    const hero = document.querySelector('.hero');

    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroContent = hero.querySelector('.hero-content');

            if (heroContent && scrolled < window.innerHeight) {
                heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
                heroContent.style.opacity = 1 - (scrolled / window.innerHeight);
            }
        }, { passive: true });
    }

    // Floating geometric elements
    const overlay = document.querySelector('.hero-overlay');
    if (overlay) {
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth - 0.5;
            const y = e.clientY / window.innerHeight - 0.5;

            overlay.style.setProperty('--mouse-x', `${x * 20}px`);
            overlay.style.setProperty('--mouse-y', `${y * 20}px`);
        });
    }
}

// ===========================================
// BUTTON EFFECTS
// ===========================================
function initButtonEffects() {
    const buttons = document.querySelectorAll('.primary-btn, .secondary-btn, .submit-btn');

    buttons.forEach(btn => {
        btn.addEventListener('mouseenter', function(e) {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            btn.style.setProperty('--ripple-x', `${x}px`);
            btn.style.setProperty('--ripple-y', `${y}px`);
        });
    });

    // Card hover effects
    const cards = document.querySelectorAll('.service-card, .feature-card, .blog-card');

    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            card.style.setProperty('--glow-x', `${x}px`);
            card.style.setProperty('--glow-y', `${y}px`);
        });
    });
}

// ===========================================
// UTILITY FUNCTIONS
// ===========================================

function scrollToTop(e) {
    if (e) e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });

    const navMenu = document.getElementById('navMenu');
    const menuToggle = document.getElementById('menuToggle');
    if (navMenu && menuToggle) {
        navMenu.classList.remove('active');
        menuToggle.classList.remove('active');
        document.body.style.overflow = '';
    }
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Intersection Observer for lazy loading (if needed)
function lazyLoad() {
    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', lazyLoad);
} else {
    lazyLoad();
}
