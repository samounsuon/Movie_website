<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineStream - Watch Movies Online</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="./js/mian.js"></script>
</head>
<body>
  

    <section class="hero">
        <div class="hero-content">
            <h2 class="featured-badge">Featured Movie</h2>
            <h1>Interstellar</h1>
            <div class="movie-info">
                <span class="rating"><i class="fas fa-star"></i> 8.6</span>
                <span class="year">2014</span>
                <span class="duration">169 min</span>
                <span class="category">Sci-Fi</span>
            </div>
            <p class="description">
                When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.
            </p>
            <div class="buttons">
                <button class="btn-watch"><i class="fas fa-play"></i> Watch Now</button>
                <button class="btn-trailer"><i class="fas fa-film"></i> Watch Trailer</button>
                <button class="btn-add"><i class="fas fa-plus"></i> Add to List</button>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="section-header">
                <h2>Trending Now</h2>
                <div class="slider-controls">
                    <button id="trending-prev"><i class="fas fa-chevron-left"></i></button>
                    <button id="trending-next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="movie-slider" id="trending-slider">
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 1">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Dune</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.0</span>
                            <span class="year">2021</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 2">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>The Batman</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 7.8</span>
                            <span class="year">2022</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 3">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>No Time to Die</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 7.3</span>
                            <span class="year">2021</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 4">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Top Gun: Maverick</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.3</span>
                            <span class="year">2022</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 5">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Spider-Man: No Way Home</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.2</span>
                            <span class="year">2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular">
        <div class="container">
            <div class="section-header">
                <h2>Popular Movies</h2>
                <a href="#" class="view-all">View All <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="movie-grid">
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 6">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>The Shawshank Redemption</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 9.3</span>
                            <span class="year">1994</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 7">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>The Godfather</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 9.2</span>
                            <span class="year">1972</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 8">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>The Dark Knight</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 9.0</span>
                            <span class="year">2008</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 9">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Pulp Fiction</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.9</span>
                            <span class="year">1994</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 10">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Forrest Gump</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.8</span>
                            <span class="year">1994</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 11">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Inception</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.8</span>
                            <span class="year">2010</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 12">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>The Matrix</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.7</span>
                            <span class="year">1999</span>
                        </div>
                    </div>
                </div>
                <div class="movie-card">
                    <div class="movie-poster">
                        <img src="https://via.placeholder.com/220x330" alt="Movie 13">
                        <div class="movie-overlay">
                            <div class="movie-actions">
                                <button><i class="fas fa-play"></i></button>
                                <button><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="movie-details">
                        <h3>Goodfellas</h3>
                        <div class="movie-meta">
                            <span class="rating"><i class="fas fa-star"></i> 8.7</span>
                            <span class="year">1990</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="genres">
        <div class="container">
            <div class="section-header">
                <h2>Browse by Genre</h2>
            </div>
            <div class="genre-grid">
                <a href="#" class="genre-card" style="background-image: url('https://via.placeholder.com/300x150')">
                    <div class="genre-overlay"></div>
                    <h3>Action</h3>
                </a>
                <a href="#" class="genre-card" style="background-image: url('https://via.placeholder.com/300x150')">
                    <div class="genre-overlay"></div>
                    <h3>Comedy</h3>
                </a>
                <a href="#" class="genre-card" style="background-image: url('https://via.placeholder.com/300x150')">
                    <div class="genre-overlay"></div>
                    <h3>Drama</h3>
                </a>
                <a href="#" class="genre-card" style="background-image: url('https://via.placeholder.com/300x150')">
                    <div class="genre-overlay"></div>
                    <h3>Sci-Fi</h3>
                </a>
                <a href="#" class="genre-card" style="background-image: url('https://via.placeholder.com/300x150')">
                    <div class="genre-overlay"></div>
                    <h3>Horror</h3>
                </a>
                <a href="#" class="genre-card" style="background-image: url('https://via.placeholder.com/300x150')">
                    <div class="genre-overlay"></div>
                    <h3>Romance</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Updated!</h2>
                <p>Subscribe to our newsletter to get updates on the latest movies and exclusive offers.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email address">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h2>CineStream</h2>
                    <p>Your ultimate movie destination</p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV Shows</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">My List</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Legal</h3>
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">DMCA</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-social">
                    <h3>Connect with us</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 CineStream. All rights reserved.</p>
            </div>
        </div>
    </footer>

