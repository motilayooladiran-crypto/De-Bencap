<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De Bencap - Luxury Hotel & Lounge</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body class="bg-light text-dark" style="font-family: 'Playfair Display', Georgia, serif; overflow-x: hidden;">

    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 z-3 py-3" style="background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0));">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 tracking-widest" href="#" style="color: #c29d59; letter-spacing: 2px;">DE BENCAP</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-uppercase fs-7" style="font-size: 0.85rem; letter-spacing: 1px;">
                    <li class="nav-item"><a class="nav-link <?= $pageUrl == "/home" ?? "/" ? "text-white" : "text-white-50"?> px-3" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= $pageUrl == "/rooms" ? "text-white" : "text-white-50"?> px-3" href="/rooms">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link <?= $pageUrl == "/amenties" ? "text-white" : "text-white-50"?> px-3" href="#amenities">Amenities</a></li>
                    <li class="nav-item"><a class="nav-link text-white-50 px-3" href="#dining">Dining</a></li>
                    <li class="nav-item"><a class="nav-link text-white-50 px-3" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link text-white-50 px-3" href="/contact">Contact</a></li>
                </ul>
                <a href="#" class="btn rounded-0 px-4 py-2 text-uppercase fw-semibold" style="background-color: #c29d59; color: #fff; font-size: 0.85rem; border: 1px solid #c29d59;">Book Now</a>
            </div>
        </div>
    </nav>