// 3D Carousel functionality
document.addEventListener('DOMContentLoaded', function() {
    const carouselItems = document.querySelectorAll('.carousel-item-3d');
    const carouselDots = document.querySelectorAll('.carousel-dot-3d');
    let currentSlide = 1;
    let isAnimating = false;
    let carouselInterval;

    // Function to show a specific slide
    function showSlide(slideNumber) {
        if (isAnimating) return;
        isAnimating = true;
    
        // Reset semua slide
        carouselItems.forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'rotateY(90deg)';
            item.style.zIndex = '0';
        });
    
        // Animasi untuk slide aktif
        const activeSlide = document.querySelector(`.carousel-item-3d[data-slide="${slideNumber}"]`);
        if(activeSlide) {
            activeSlide.style.opacity = '1';
            activeSlide.style.transform = 'rotateY(0deg)';
            activeSlide.style.zIndex = '10';
        }
    
        // Update dots
        carouselDots.forEach(dot => {
            dot.classList.remove('active', 'bg-yellow', 'opacity-100');
            if(parseInt(dot.dataset.dot) === slideNumber) {
                dot.classList.add('active', 'bg-yellow', 'opacity-100');
            }
        });
    
        setTimeout(() => {
            isAnimating = false;
        }, 1000);
    }
    
    // Di dalam startAutoPlay()
    function startAutoPlay() {
        carouselInterval = setInterval(() => {
            const nextSlide = currentSlide >= carouselItems.length ? 1 : currentSlide + 1;
            showSlide(nextSlide);
        }, 5000);
    }
    // Set up click events for dots
    carouselDots.forEach(dot => {
        dot.addEventListener('click', function() {
            const slideNumber = parseInt(this.getAttribute('data-dot'));
            showSlide(slideNumber);
            resetAutoPlay();
        });
    });

    // Auto rotation
    function startAutoPlay() {
        carouselInterval = setInterval(() => {
            const nextSlide = currentSlide >= carouselItems.length ? 1 : currentSlide + 1;
            showSlide(nextSlide);
        }, 5000);
    }

    function resetAutoPlay() {
        clearInterval(carouselInterval);
        startAutoPlay();
    }

    // Initialize the carousel
    startAutoPlay();
    
    // Add hover pause functionality
    const carousel = document.querySelector('.carousel-3d');
    carousel.addEventListener('mouseenter', () => clearInterval(carouselInterval));
    carousel.addEventListener('mouseleave', startAutoPlay);
});

// Counter animation (for the stats counters)
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    
    const animateCounter = (counter, target) => {
        let count = 0;
        const speed = 2000 / target; // Adjust animation speed based on target value
        
        const updateCount = () => {
            const increment = target / (2000 / 16); // For smoother animation
            
            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target;
                if (target >= 100) {
                    counter.innerText = '100+';
                }
            }
        };
        
        updateCount();
    };
    
    // Intersection Observer to start counter when visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target'));
                animateCounter(counter, target);
                observer.unobserve(counter);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});