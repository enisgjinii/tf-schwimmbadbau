// Instagram Feed Handler
class InstagramFeed {
    constructor(containerId) {
        this.container = document.getElementById(containerId);
        this.apiUrl = 'api/get_instagram_feed.php';
        this.init();
    }

    async init() {
        try {
            await this.loadInstagramFeed();
        } catch (error) {
            console.error('Error loading Instagram feed:', error);
            this.showError();
        }
    }

    async loadInstagramFeed() {
        const response = await fetch(this.apiUrl);
        const data = await response.json();

        if (data.success && data.items) {
            this.renderFeed(data.items, data);
        } else {
            console.error('Instagram API error:', data.error);
            this.showError();
        }
    }

    renderFeed(items, data) {
        if (!this.container) return;

        const feedHTML = `
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <div class="instagram-header">
                                <div class="instagram-badge">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram Feed</span>
                                </div>
                                <h1 class="display-5 mb-3">
                                    Entdecken Sie unsere <br>
                                    <span class="text-primary">Pool-Projekte</span>
                                </h1>
                                <p class="lead text-muted mb-4">
                                    Folgen Sie uns auf Instagram und sehen Sie unsere neuesten Schwimmbad-Projekte, 
                                    Tipps und Inspirationen für Ihren eigenen Pool.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="instagram-grid-container">
                        <div class="row g-4" id="instagram-grid">
                            ${items.map((item, index) => this.renderInstagramItem(item, index)).join('')}
                        </div>
                    </div>
                    
                    <div class="text-center mt-5">
                        <div class="instagram-cta">
                            <h4 class="mb-3">Folgen Sie uns für mehr Inspiration</h4>
                            <p class="text-muted mb-4">Entdecken Sie täglich neue Pool-Projekte und Tipps</p>
                            <a href="https://www.instagram.com/tf_schwimmbadbau/" target="_blank" class="btn btn-primary btn-lg">
                                <i class="fab fa-instagram me-2"></i>@tf_schwimmbadbau folgen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        this.container.innerHTML = feedHTML;
        this.initializeLightbox();
        this.initializeAnimations();
        
        // Log cache status to console
        if (data.cached) {
            console.log('📦 Instagram feed loaded from cache');
        } else {
            console.log('🔄 Instagram feed loaded fresh from API');
        }
        
        if (data.warning) {
            console.warn('⚠️ Instagram API warning:', data.warning);
        }
    }

    renderInstagramItem(item, index) {
        const mediaType = this.getMediaType(item);
        const imageUrl = this.getImageUrl(item);
        const caption = this.truncateCaption(item.caption, 120);
        const date = this.formatDate(item.taken_at);
        const stats = this.getStats(item);
        const delay = (index * 0.1) + 0.1;

        return `
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="${delay}s">
                <div class="instagram-item-enhanced">
                    <div class="instagram-item-header">
                        <div class="instagram-item-avatar">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="instagram-item-info">
                            <h6 class="mb-0">tf_schwimmbadbau</h6>
                            <small class="text-muted">${date}</small>
                        </div>
                        <div class="instagram-item-menu">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>
                    
                    <div class="instagram-item-media">
                        ${this.renderEnhancedMedia(item, imageUrl)}
                    </div>
                    
                    <div class="instagram-item-actions">
                        <div class="action-buttons">
                            <button class="action-btn like-btn" data-likes="${item.like_count}">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="action-btn comment-btn">
                                <i class="far fa-comment"></i>
                            </button>
                            <button class="action-btn share-btn">
                                <i class="far fa-paper-plane"></i>
                            </button>
                            <button class="action-btn save-btn">
                                <i class="far fa-bookmark"></i>
                            </button>
                        </div>
                        <div class="likes-count">
                            <strong>${item.like_count}</strong> Likes
                        </div>
                    </div>
                    
                    <div class="instagram-item-caption">
                        <p class="caption-text">
                            <strong>tf_schwimmbadbau</strong> ${caption}
                        </p>
                        ${item.location ? `
                            <div class="location-info">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>${item.location}</span>
                            </div>
                        ` : ''}
                    </div>
                    
                    <div class="instagram-item-footer">
                        <a href="${item.permalink}" target="_blank" class="view-post-btn">
                            <i class="fab fa-instagram me-2"></i>Post ansehen
                        </a>
                    </div>
                </div>
            </div>
        `;
    }

    renderEnhancedMedia(item, imageUrl) {
        if (item.media_type === 2 && item.video_url) {
            // Video post
            return `
                <div class="media-container video-container">
                    <video class="media-element" muted>
                        <source src="${item.video_url}" type="video/mp4">
                    </video>
                    <div class="video-overlay">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="video-duration">
                            <i class="fas fa-clock"></i>
                            <span>${this.formatDuration(item.video_duration || 0)}</span>
                        </div>
                    </div>
                </div>
            `;
        } else if (item.media_type === 8 && item.carousel_images) {
            // Carousel post
            return `
                <div class="media-container carousel-container">
                    <img src="${item.carousel_images[0]}" class="media-element" alt="Instagram Post">
                    <div class="carousel-indicator">
                        <i class="fas fa-images"></i>
                        <span>${item.carousel_images.length}</span>
                    </div>
                </div>
            `;
        } else {
            // Single image post
            return `
                <div class="media-container">
                    <img src="${imageUrl}" class="media-element" alt="Instagram Post">
                </div>
            `;
        }
    }

    getTotalLikes(items) {
        return items.reduce((total, item) => total + (item.like_count || 0), 0);
    }

    getTotalViews(items) {
        return items.reduce((total, item) => total + (item.play_count || 0), 0);
    }

    formatDuration(seconds) {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = Math.floor(seconds % 60);
        return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
    }

    getMediaType(item) {
        switch (item.media_type) {
            case 1: return 'image';
            case 2: return 'video';
            case 8: return 'carousel';
            default: return 'image';
        }
    }

    getImageUrl(item) {
        if (item.image_url) return item.image_url;
        if (item.carousel_images && item.carousel_images.length > 0) {
            return item.carousel_images[0];
        }
        return 'img/placeholder.jpg'; // Fallback image
    }

    truncateCaption(text, maxLength) {
        if (!text) return '';
        if (text.length <= maxLength) return text;
        return text.substring(0, maxLength) + '...';
    }

    formatDate(timestamp) {
        if (!timestamp) return '';
        const date = new Date(timestamp * 1000);
        return date.toLocaleDateString('de-DE', {
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        });
    }

    getStats(item) {
        const stats = [];
        if (item.like_count > 0) {
            stats.push(`${item.like_count} Likes`);
        }
        if (item.play_count > 0) {
            stats.push(`${item.play_count} Views`);
        }
        return stats.join(' • ');
    }

    initializeLightbox() {
        // Initialize lightbox for Instagram images if lightbox is available
        if (typeof lightbox !== 'undefined') {
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            });
        }
    }

    initializeAnimations() {
        // Add hover effects and interactions
        const likeButtons = document.querySelectorAll('.like-btn');
        likeButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                const likes = parseInt(this.getAttribute('data-likes'));
                
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    icon.style.color = '#e91e63';
                    this.setAttribute('data-likes', likes + 1);
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    icon.style.color = '';
                    this.setAttribute('data-likes', likes - 1);
                }
            });
        });

        // Add video play functionality
        const videoContainers = document.querySelectorAll('.video-container');
        videoContainers.forEach(container => {
            const video = container.querySelector('video');
            const playButton = container.querySelector('.play-button');
            
            if (video && playButton) {
                playButton.addEventListener('click', function() {
                    if (video.paused) {
                        video.play();
                        this.style.opacity = '0';
                    } else {
                        video.pause();
                        this.style.opacity = '1';
                    }
                });
            }
        });
    }

    showError() {
        if (!this.container) return;

        this.container.innerHTML = `
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Instagram Feed</p>
                            <h1 class="display-5 mb-0">
                                Folgen Sie uns auf <br>
                                <span class="text-primary">Instagram</span>
                            </h1>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5" style="border-radius: 15px;">
                                <i class="fab fa-instagram fa-3x text-white"></i>
                                <div class="ms-4">
                                    <p class="text-white mb-0">Entdecken Sie unsere neuesten Projekte</p>
                                    <h2 class="text-white mb-0">@tf_schwimmbadbau</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-muted">Instagram Feed konnte nicht geladen werden.</p>
                        <a href="https://www.instagram.com/tf_schwimmbadbau/" target="_blank" class="btn btn-primary py-3 px-5">
                            <i class="fab fa-instagram me-2"></i>Folgen Sie uns auf Instagram
                        </a>
                    </div>
                </div>
            </div>
        `;
    }
}

// Initialize Instagram feed when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('instagram-feed')) {
        new InstagramFeed('instagram-feed');
    }
}); 