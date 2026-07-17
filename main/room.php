<?php
include __DIR__."/header.php";
?>

<section id="rooms" class="py-5 bg-white">
    <div class="container py-4 text-center">
        <div class="reveal-up mb-5">
            <h2 class="display-5 fw-bold" style="color: #121c2c;">Explore Our Rooms</h2>
            <p class="text-secondary mx-auto" style="max-width: 600px;">
                Explore our rooms and suites built to evoke unparalleled comfort and absolute peace of mind.
            </p>
        </div>

        <div class="swiper mySwiper pb-5 reveal-up">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide h-auto">
                    <div class="card h-100 border-0 shadow-sm rounded-0 text-start">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top rounded-0" 
                             alt="Luxury Suite" 
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold" style="color: #121c2c;">Luxury Suite</h4>
                            <h5 class="fw-bold mb-3" style="color: #c29d59;">$280.00 <span class="small text-secondary fw-normal">/ Night</span></h5>
                            <p class="card-text text-secondary small">
                                Spacious luxury suite with panoramic city views, custom King size bedding, and high-speed fiber internet.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide h-auto">
                    <div class="card h-100 border-0 shadow-sm rounded-0 text-start">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top rounded-0" 
                             alt="Executive Room" 
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold" style="color: #121c2c;">Executive Room</h4>
                            <h5 class="fw-bold mb-3" style="color: #c29d59;">$285.00 <span class="small text-secondary fw-normal">/ Night</span></h5>
                            <p class="card-text text-secondary small">
                                Designed for optimal productivity and relaxation, featuring a private workspace and premium lounge access.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide h-auto">
                    <div class="card h-100 border-0 shadow-sm rounded-0 text-start">
                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=600&q=80" 
                             class="card-img-top rounded-0" 
                             alt="Standard Room" 
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold" style="color: #121c2c;">Standard Room</h4>
                            <h5 class="fw-bold mb-3" style="color: #c29d59;">$360.00 <span class="small text-secondary fw-normal">/ Night</span></h5>
                            <p class="card-text text-secondary small">
                                A refined space offering absolute serenity, modern amenities, and beautifully curated warm lighting arrangements.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
        
        <button class="btn btn-dark rounded-0 px-5 py-2 mt-3 text-uppercase fw-semibold" style="background-color: #121c2c; letter-spacing: 1px;">
            Explore More
        </button>
    </div>
</section>
<div class="swiper-slide h-auto">
    <div class="card h-100 border-0 shadow-sm rounded-0 text-start">
        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=600&q=80" 
             class="card-img-top rounded-0" 
             alt="Presidential Suite" 
             style="height: 250px; object-fit: cover;">
        <div class="card-body p-4">
            <h4 class="card-title fw-bold" style="color: #121c2c;">Presidential Suite</h4>
            <h5 class="fw-bold mb-3" style="color: #c29d59;">$550.00 <span class="small text-secondary fw-normal">/ Night</span></h5>
            <p class="card-text text-secondary small">
                The ultimate luxury experience. Features separate living and dining areas, a private bar, and dedicated 24/7 butler service.
            </p>
        </div>
    </div>
</div>

<div class="swiper-slide h-auto">
    <div class="card h-100 border-0 shadow-sm rounded-0 text-start">
        <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?auto=format&fit=crop&w=600&q=80" 
             class="card-img-top rounded-0" 
             alt="Penthouse Suite" 
             style="height: 250px; object-fit: cover;">
        <div class="card-body p-4">
            <h4 class="card-title fw-bold" style="color: #121c2c;">Penthouse Suite</h4>
            <h5 class="fw-bold mb-3" style="color: #c29d59;">$480.00 <span class="small text-secondary fw-normal">/ Night</span></h5>
            <p class="card-text text-secondary small">
                Perched on our highest floor, this suite offers floor-to-ceiling glass windows, a private terrace, and an open-concept lounge.
            </p>
        </div>
    </div>
</div>

<div class="swiper-slide h-auto">
    <div class="card h-100 border-0 shadow-sm rounded-0 text-start">
        <img src="https://images.unsplash.com/photo-1611891404934-1110204737d2?auto=format&fit=crop&w=600&q=80" 
             class="card-img-top rounded-0" 
             alt="Deluxe Room" 
             style="height: 250px; object-fit: cover;">
        <div class="card-body p-4">
            <h4 class="card-title fw-bold" style="color: #121c2c;">Deluxe Room</h4>
            <h5 class="fw-bold mb-3" style="color: #c29d59;">$310.00 <span class="small text-secondary fw-normal">/ Night</span></h5>
            <p class="card-text text-secondary small">
                An elegant combination of style and comfort, featuring marble bathrooms, premium amenities, and a walk-in wardrobe.
            </p>
        </div>
    </div>
</div>

<?php
include __DIR__."/footer.php";
?>