<?php
include __DIR__."/header.php";
?>

<section id="gallery" class="py-5 bg-white">
    <div class="container py-4">
        <div class="reveal-up text-center mb-5">
            <span class="d-block text-uppercase tracking-wider fw-semibold mb-2" style="color: #c29d59; font-size: 0.85rem; letter-spacing: 2px;">Visual Journey</span>
            <h2 class="display-5 fw-bold" style="color: #121c2c;">Gallery Portfolio</h2>
            <p class="text-secondary mx-auto" style="max-width: 600px;">
                Take a visual tour of De Bencap’s meticulously crafted architecture, serene landscapes, and luxurious interiors.
            </p>
        </div>

        <div class="row g-3">
            <div class="col-md-6 col-lg-8 reveal-left">
                <div class="position-relative overflow-hidden shadow-sm" style="height: 410px; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=80" 
                         class="w-100 h-100 object-fit-cover transition-all" 
                         alt="De Bencap Exterior"
                         style="transition: transform 0.5s ease;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end text-white" 
                         style="background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)); height: 50%;">
                        <span class="text-uppercase small tracking-widest" style="color: #c29d59;">Architecture</span>
                        <h5 class="fw-bold mb-0">Grand Resort Facade</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 reveal-right">
                <div class="position-relative overflow-hidden shadow-sm" style="height: 410px; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4db85b?auto=format&fit=crop&w=600&q=80" 
                         class="w-100 h-100 object-fit-cover transition-all" 
                         alt="Lobby Area"
                         style="transition: transform 0.5s ease;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end text-white" 
                         style="background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)); height: 50%;">
                        <span class="text-uppercase small tracking-widest" style="color: #c29d59;">Interiors</span>
                        <h5 class="fw-bold mb-0">The Main Lounge Lobby</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal-up">
                <div class="position-relative overflow-hidden shadow-sm" style="height: 280px; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&q=80" 
                         class="w-100 h-100 object-fit-cover transition-all" 
                         alt="Rooftop Drinks"
                         style="transition: transform 0.5s ease;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end text-white" 
                         style="background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)); height: 50%;">
                        <span class="text-uppercase small tracking-widest" style="color: #c29d59;">Lifestyle</span>
                        <h5 class="fw-bold mb-0">Evening Socials</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal-up">
                <div class="position-relative overflow-hidden shadow-sm" style="height: 280px; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=600&q=80" 
                         class="w-100 h-100 object-fit-cover transition-all" 
                         alt="Luxury Suite Bed"
                         style="transition: transform 0.5s ease;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end text-white" 
                         style="background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)); height: 50%;">
                        <span class="text-uppercase small tracking-widest" style="color: #c29d59;">Suites</span>
                        <h5 class="fw-bold mb-0">Presidential Bedroom</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal-up">
                <div class="position-relative overflow-hidden shadow-sm" style="height: 280px; cursor: pointer;">
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80" 
                         class="w-100 h-100 object-fit-cover transition-all" 
                         alt="Infinity Pool Night"
                         style="transition: transform 0.5s ease;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 d-flex flex-column justify-content-end text-white" 
                         style="background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)); height: 50%;">
                        <span class="text-uppercase small tracking-widest" style="color: #c29d59;">Relaxation</span>
                        <h5 class="fw-bold mb-0">Illuminated Poolside</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__."/footer.php";
?>