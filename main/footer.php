
    <footer id="contact" class="text-white py-5" style="background-color: #0b111b; border-top: 2px solid #c29d59;">
        <div class="container py-4">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-md-4 text-center text-md-start">
                    <h3 class="fw-bold tracking-widest mb-3" style="color: #c29d59; letter-spacing: 2px;">DE BENCAP</h3>
                    <p class="text-white-50 small mb-0">Experience classic luxury in a modern world.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex justify-content-center gap-3 mb-3">
                        <a href="#" class="text-white-50 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white-50 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white-50 fs-5"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white-50 fs-5"><i class="bi bi-tiktok"></i></a>
                    </div>
                    <div class="small text-white-50">
                        <a href="#" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white-50 text-decoration-none">Terms</a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-white-50 small">
                    <p class="mb-1"><i class="bi bi-geo-alt-fill me-2" style="color: #c29d59;"></i> Address Suite 2024, De Bencap Hotel, Lagos</p>
                    <p class="mb-0">&copy; 2026 De Bencap Hotel & Lounge. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper Carousel
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });

        // Initialize ScrollReveal Animations
        ScrollReveal().reveal('.reveal-up', {
            delay: 150,
            distance: '60px',
            origin: 'bottom',
            duration: 1000,
            easing: 'ease-out',
            reset: false
        });

        ScrollReveal().reveal('.reveal-left', {
            delay: 150,
            distance: '60px',
            origin: 'left',
            duration: 1000,
            easing: 'ease-out',
            reset: false
        });

        ScrollReveal().reveal('.reveal-right', {
            delay: 150,
            distance: '60px',
            origin: 'right',
            duration: 1000,
            easing: 'ease-out',
            reset: false
        });
    </script>
</body>
</html>