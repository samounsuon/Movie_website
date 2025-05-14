document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('nav');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
        });
    }
    
    // Movie Slider Controls
    const trendingSlider = document.getElementById('trending-slider');
    const trendingPrev = document.getElementById('trending-prev');
    const trendingNext = document.getElementById('trending-next');
    
    if (trendingSlider && trendingPrev && trendingNext) {
        trendingPrev.addEventListener('click', function() {
            trendingSlider.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });
        
        trendingNext.addEventListener('click', function() {
            trendingSlider.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });
    }
    
    // Add hover effect for movie cards
    const movieCards = document.querySelectorAll('.movie-card');
    
    movieCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.movie-overlay').style.opacity = '1';
        });
        
        card.addEventListener('mouseleave', function() {
            this.querySelector('.movie-overlay').style.opacity = '0';
        });
    });
    
    // Play button functionality (demo)
    const playButtons = document.querySelectorAll('.movie-actions button:first-child');
    
    playButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const movieTitle = this.closest('.movie-card').querySelector('h3').textContent;
            alert(`Playing ${movieTitle}`);
        });
    });
    
    // Add to list functionality (demo)
    const addButtons = document.querySelectorAll('.movie-actions button:last-child');
    
    addButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const movieTitle = this.closest('.movie-card').querySelector('h3').textContent;
            alert(`${movieTitle} added to your list`);
        });
    });
    
    // Watch Now button functionality (demo)
    const watchNowBtn = document.querySelector('.btn-watch');
    
    if (watchNowBtn) {
        watchNowBtn.addEventListener('click', function() {
            alert('Playing Interstellar');
        });
    }
    
    // Watch Trailer button functionality (demo)
    const trailerBtn = document.querySelector('.btn-trailer');
    
    if (trailerBtn) {
        trailerBtn.addEventListener('click', function() {
            alert('Playing Interstellar Trailer');
        });
    }
    
    // Add to List button functionality (demo)
    const addToListBtn = document.querySelector('.btn-add');
    
    if (addToListBtn) {
        addToListBtn.addEventListener('click', function() {
            alert('Interstellar added to your list');
        });
    }
    
    // Newsletter form submission (demo)
    const newsletterForm = document.querySelector('.newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            
            if (emailInput.value.trim() === '') {
                alert('Please enter your email address');
            } else {
                alert(`Thank you for subscribing with ${emailInput.value}`);
                emailInput.value = '';
            }
        });
    }
    
    // Header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        
        if (window.scrollY > 50) {
            header.style.background = 'rgba(0, 0, 0, 0.95)';
            header.style.padding = '10px 0';
        } else {
            header.style.background = 'rgba(0, 0, 0, 0.9)';
            header.style.padding = '15px 0';
        }
    });
    
    // Search functionality (demo)
    const searchForm = document.querySelector('.search-box');
    
    if (searchForm) {
        const searchInput = searchForm.querySelector('input');
        const searchButton = searchForm.querySelector('button');
        
        searchButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (searchInput.value.trim() !== '') {
                alert(`Searching for: ${searchInput.value}`);
            }
        });
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                if (this.value.trim() !== '') {
                    alert(`Searching for: ${this.value}`);
                }
            }
        });
    }
    
    // Simulate loading of featured movie data
    setTimeout(() => {
        document.querySelector('.hero').style.backgroundImage = "url('https://via.placeholder.com/1920x1080')";
    }, 500);
});