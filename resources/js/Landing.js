document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('lab-carousel');
    const slides = carousel.querySelectorAll('.carousel-slide');
    const prevButton = carousel.querySelector('.carousel-prev');
    const nextButton = carousel.querySelector('.carousel-next');
    const indicators = carousel.querySelectorAll('.carousel-indicator');
    const slidesContainer = carousel.querySelector('.carousel-slides');
    
    let currentIndex = 0;
    const totalSlides = slides.length;
    
    // Function to update carousel position
    function updateCarousel() {
        slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('bg-yellow');
                indicator.classList.remove('bg-silver/50');
            } else {
                indicator.classList.remove('bg-yellow');
                indicator.classList.add('bg-silver/50');
            }
        });
    }
    
    // Next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    }
    
    // Previous slide
    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }
    
    // Set up event listeners
    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);
    
    // Set up indicator clicks
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel();
        });
    });
    
    // Auto-advance slides every 5 seconds
    let autoplayInterval = setInterval(nextSlide, 5000);
    
    // Pause autoplay on hover
    carousel.addEventListener('mouseenter', () => {
        clearInterval(autoplayInterval);
    });
    
    // Resume autoplay when mouse leaves
    carousel.addEventListener('mouseleave', () => {
        autoplayInterval = setInterval(nextSlide, 5000);
    });
    
    // Initialize carousel
    updateCarousel();
});