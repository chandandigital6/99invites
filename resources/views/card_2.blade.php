<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        scroll-behavior: smooth;
        /* Add smooth scrolling behavior */
    }

    .custom-logo {
        font-family: 'Great Vibes', cursive;
    }

    @media (min-width: 768px) {
        .custom-logo {
            order: 2;
        }
    }

    .hidden {
        display: none;
    }

    .nav-item {
        transition: background-color 0.3s, color 0.3s;
    }

    .nav-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #FFA500;
        /* Orange */
    }


    .carousel-item {
        display: none;
    }

    .carousel-item.active {
        display: block;
    }


    .bg-gallery {
        background-image: url('{{asset('assets/card2img/bgcard.jpg')}}');
        background-size: cover;
        background-position: center;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        animation: fadeIn 0.5s ease forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }

        20% {
            opacity: 0;
            transform: translateY(-20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .gallery-item:nth-child(2) {
        animation-delay: 2s;
        /* Delay for the second image */
    }

    .gallery-item:nth-child(3) {
        animation-delay: 4s;
        /* Delay for the third image */
    }

    .gallery-item:nth-child(4) {
        animation-delay: 6s;
        /* Delay for the fourth image */
    }

    .gallery-item:nth-child(5) {
        animation-delay: 8s;
        /* Delay for the fifth image */
    }

    .gallery-item:nth-child(6) {
        animation-delay: 10s;
        /* Delay for the sixth image */
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .gallery-item img {
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-icon {
        color: #fff;
        font-size: 2rem;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-icon {
        opacity: 1;
    }

    /* Custom styles can be added here */
    .timeline {
        position: relative;
        padding: 2rem 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        width: 4px;
        height: 100%;
        background: #fd7e14;
        transform: translateX(-50%);
        z-index: 1;
    }

    .timeline-content {
        position: relative;
        padding: 2rem;
        border-radius: 0.5rem;
        background: #ffffff;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        z-index: 2;
    }

    .timeline-content:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }

    .timeline-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 3.5rem;
        height: 3.5rem;
        background: #fff;
        border: 4px solid #fd7e14;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    .timeline-icon i {
        font-size: 1.5rem;
    }

    .timeline-row {
        display: flex;
        align-items: center;
        position: relative;
        margin-bottom: 6rem;
    }

    .timeline-row img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .timeline-row img:hover {
        transform: scale(1.05);
    }

    .timeline-left,
    .timeline-right {
        width: 50%;
        position: relative;
        padding: 0 2rem;
    }

    .timeline-left img,
    .timeline-right img {
        width: 100%;
        height: auto;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .timeline-left img:hover,
    .timeline-right img:hover {
        transform: scale(1.05);
    }


    @media (max-width: 767px) {
        .timeline::before {
            display: none;
            /* Hide the orange line on small screens */
        }

        .timeline-row {
            flex-direction: column;
        }

        .timeline-left,
        .timeline-right {
            width: 100%;
        }

        .timeline-left img,
        .timeline-right img {
            max-width: 100%;
            height: auto;
        }

        .timeline-icon {
            display: none;
            /* Hide the orange line icon */
        }
    }

    .smooth-scroll {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: background-color 0.3s ease;
    }

    .smooth-scroll:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .smooth-scroll i {
        font-size: 1.5rem;
    }
</style>
</head>

<body class="bg-gray-100">


    <header class="bg-blue-950 text-white">
        <div class="container mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
            <div class="flex items-center justify-between w-full md:w-auto">
                <span class="text-white custom-logo text-3xl">Jack <span class="text-orange-500">&</span> Rose</span>
                <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <nav id="nav-links"
                class="hidden md:flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4 w-full md:w-auto mt-4 md:mt-0 transition duration-300 ease-in-out bg-blue-950 md:bg-transparent">
                <a href="#" class="nav-item text-white block py-2 px-4 md:inline-block rounded">HOME</a>
                <a href="#About-Us" class="nav-item text-white block py-2 px-4 md:inline-block rounded">ABOUT</a>
                <a href="#Story" class="nav-item text-white block py-2 px-4 md:inline-block rounded">STORY</a>
                <a href="#Gallery" class="nav-item text-white block py-2 px-4 md:inline-block rounded">GALLERY</a>
                <a href="#Family" class="nav-item text-white block py-2 px-4 md:inline-block rounded">FAMILY</a>
                <a href="#Events" class="nav-item text-white block py-2 px-4 md:inline-block rounded">EVENT</a>
                <a href="#RSVP" class="nav-item text-white block py-2 px-4 md:inline-block rounded">RSVP</a>
                <a href="#Contact" class="nav-item text-white block py-2 px-4 md:inline-block rounded">CONTACT</a>
            </nav>
        </div>
    </header>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="relative">
            <div class="carousel-inner relative w-full overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-item active position-relative h-screen min-h-[400px]">
                    <img class="position-absolute w-full h-full object-cover" src="{{asset('assets/card2img/carousel-1.jpg')}}"
                        alt="Slide 1">
                    <div
                        class="carousel-caption absolute flex flex-col items-center justify-center inset-0 bg-black bg-opacity-50">
                        <div class="p-3 max-w-[900px] text-center">
                            <h1 class="text-4xl md:text-6xl font-secondary text-white mt-n3 mb-md-4">Jack & Rose</h1>
                            <div class="border-t border-b border-white py-3 px-4">
                                <h3 class="text-xl md:text-3xl uppercase font-normal text-white m-0 tracking-wider">
                                    We're getting married</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item position-relative h-screen min-h-[400px]">
                    <img class="position-absolute w-full h-full object-cover" src="{{asset('assets/card2img/carousel-2.jpg')}}"
                        alt="Slide 2">
                    <div
                        class="carousel-caption absolute flex flex-col items-center justify-center inset-0 bg-black bg-opacity-50">
                        <div class="p-3 max-w-[900px] text-center">
                            <h1 class="text-4xl md:text-6xl font-secondary text-white mt-n3 mb-md-4">Jack & Rose</h1>
                            <div class="border-t border-b border-white py-3 px-4">
                                <h3 class="text-xl md:text-3xl uppercase font-normal text-white m-0 tracking-wider">
                                    We're getting married</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <button
                class="carousel-control-prev absolute top-1/2 transform -translate-y-1/2 left-4 bg-primary text-white w-16 h-16 flex items-center justify-center rounded-full"
                data-slide="prev">
                <span class="carousel-control-prev-icon">&#10094;</span>
            </button>
            <button
                class="carousel-control-next absolute top-1/2 transform -translate-y-1/2 right-4 bg-primary text-white w-16 h-16 flex items-center justify-center rounded-full"
                data-slide="next">
                <span class="carousel-control-next-icon">&#10095;</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <section class="about-main" id="About-Us">

        <section class="text-center py-12">
            <h2 class="text-orange-500 uppercase tracking-widest mb-3 hover:text-orange-600 transition-colors">About
            </h2>
            <h1 class="custom-logo text-4xl md:text-5xl mb-4 hover:text-orange-600 transition-colors">Groom & Bride</h1>
            <div class="flex justify-center items-center">
                <div class="w-16 h-0.5 bg-orange-500 hover:bg-orange-600 transition-colors"></div>
                <div class="icon text-orange-500 mx-2 hover:text-orange-600 transition-colors">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="w-16 h-0.5 bg-orange-500 hover:bg-orange-600 transition-colors"></div>
            </div>
        </section>

        <!-- Groom Section -->
        <section class="container mx-auto px-4 py-12 bg-slate-200">
            <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h3 class="text-2xl font-semibold mb-4 hover:text-orange-600 transition-colors">The Groom</h3>
                    <p class="mb-4 hover:text-gray-700 transition-colors">Lorem elitr magna stet rebum dolores sed. Est
                        stet
                        labore est lorem lorem at amet sea, eos tempor rebum, labore amet ipsum sea lorem, stet rebum
                        eirmod
                        amet. Kasd clita kasd stet amet est dolor elitr.</p>
                    <div class="flex items-center mb-4">
                        <span class="text-orange-500 text-3xl hover:text-orange-600 transition-colors">Jack</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-outlined/24/000000/facebook-new.png"
                                alt="Facebook Icon" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-rounded/24/000000/twitter.png" alt="Twitter Icon"
                                class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-rounded/24/000000/instagram-new.png"
                                alt="Instagram Icon" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-outlined/24/000000/linkedin.png"
                                alt="LinkedIn Icon" class="w-5 h-5">
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{asset('assets/card2img/Groom.jpg')}}" alt="Groom"
                        class="rounded-lg shadow-lg w-full hover:shadow-2xl transition-shadow">
                </div>
            </div>
        </section>

        <!-- Bride Section -->
        <section class="container mx-auto px-4 py-12 bg-slate-200">
            <div class="flex flex-col lg:flex-row items-center lg:space-x-8">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:order-2 ml-8">
                    <h3 class="text-2xl font-semibold mb-4 hover:text-orange-600 transition-colors">The Bride</h3>
                    <p class="mb-4 hover:text-gray-700 transition-colors">Lorem elitr magna stet rebum dolores sed. Est
                        stet
                        labore est lorem lorem at amet sea, eos tempor rebum, labore amet ipsum sea lorem, stet rebum
                        eirmod
                        amet. Kasd clita kasd stet amet est dolor elitr.</p>
                    <div class="flex items-center mb-4">
                        <span class="text-orange-500 text-3xl hover:text-orange-600 transition-colors">Rose</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-outlined/24/000000/facebook-new.png"
                                alt="Facebook Icon" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-rounded/24/000000/twitter.png" alt="Twitter Icon"
                                class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-rounded/24/000000/instagram-new.png"
                                alt="Instagram Icon" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="border border-orange-500 text-orange-500 rounded-full p-2 hover:bg-orange-500 hover:text-white transition-colors">
                            <img src="https://img.icons8.com/material-outlined/24/000000/linkedin.png"
                                alt="LinkedIn Icon" class="w-5 h-5">
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:order-1">
                    <img src="{{asset('assets/card2img/bride.jpg')}}" alt="Bride"
                        class="rounded-lg shadow-lg w-full hover:shadow-2xl transition-shadow">
                </div>
            </div>
        </section>

    </section>
    <!-- About End -->


    <!-- Story Start -->
    <section class="py-6" id="Story">
        <section class="text-center py-12">
            <h2 class="text-orange-500 uppercase tracking-widest mb-3">Story</h2>
            <h1 class="custom-logo text-4xl md:text-5xl mb-4">Our Love Story</h1>
            <div class="flex justify-center items-center">
                <div class="w-16 h-0.5 bg-orange-500"></div>
                <div class="icon text-orange-500 mx-2">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="w-16 h-0.5 bg-orange-500"></div>
            </div>
        </section>
        <div class="container mx-auto timeline">
            <!-- First row -->
            <div class="timeline-row row align-items-center">
                <div class="timeline-left col-md-5 d-flex justify-content-end">
                    <img src="{{asset('assets/card2img/story-1.jpg')}}" alt="First Meet">
                </div>
                <div class="timeline-icon text-orange-500">
                    <i class="fas fa-heart text-orange-500"></i>
                </div>
                <div class="timeline-right col-md-5">
                    <div class="timeline-content">
                        <h2 class="text-3xl font-bold mb-4 text-orange-600">First Meet</h2>
                        <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                        <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem
                            lorem at amet sea...</p>
                    </div>
                </div>
            </div>

            <!-- Second row -->
            <div class="timeline-row row align-items-center">
                <div class="timeline-icon text-orange-500">
                    <i class="fas fa-heart text-orange-500"></i>
                </div>
                <div class="timeline-right col-md-5 order-md-1">
                    <div class="timeline-content">
                        <h2 class="text-3xl font-bold mb-4 text-orange-600">First Date</h2>
                        <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                        <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem
                            lorem at amet sea...</p>
                    </div>
                </div>
                <div class="timeline-left col-md-5 order-md-2 d-flex justify-content-start">
                    <img src="{{asset('assets/card2img/story-2.jpg')}}" alt="First Date">
                </div>
            </div>

            <!-- Third row -->
            <div class="timeline-row row align-items-center">
                <div class="timeline-left col-md-5 d-flex justify-content-end">
                    <img src="{{asset('assets/card2img/story-3.jpg')}}" alt="First Meet">
                </div>
                <div class="timeline-icon text-orange-500">
                    <i class="fas fa-heart text-orange-500"></i>
                </div>
                <div class="timeline-right col-md-5">
                    <div class="timeline-content">
                        <h2 class="text-3xl font-bold mb-4 text-orange-600">Proposal</h2>
                        <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                        <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem
                            lorem at amet sea...</p>
                    </div>
                </div>
            </div>


            <!-- Fourth row -->
            <div class="timeline-row row align-items-center">

                <div class="timeline-icon text-orange-500">
                    <i class="fas fa-heart text-orange-500"></i>
                </div>
                <div class="timeline-right col-md-5 order-md-1">
                    <div class="timeline-content">
                        <h2 class="text-3xl font-bold mb-4 text-orange-600">Enagagement</h2>
                        <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                        <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est lorem
                            lorem at amet sea...</p>
                    </div>
                </div>
                <div class="timeline-left col-md-5 order-md-2 d-flex justify-content-start">
                    <img src="{{asset('assets/card2img/story-4.jpg')}}" alt="First Date">
                </div>
            </div>


        </div>
    </section>
    <!-- Story End -->



    <!-- Event Start -->
    <div class="container mx-auto py-16 px-4" id="Events">
        <div class="text-center py-5">
            <h6 class="text-orange-500 uppercase mb-3 tracking-widest hover:text-orange-600 transition-colors">Event
            </h6>
            <h1 class="font-serif text-5xl font-semibold mb-2 hover:text-orange-600 transition-colors">Our Wedding Event
            </h1>
            <div class="flex justify-center items-center mb-6">
                <span class="inline-block w-12 h-0.5 bg-orange-500 hover:bg-orange-600 transition-colors"></span>
                <i class="material-icons mx-2 text-orange-500 hover:text-orange-600 transition-colors">favorite</i>
                <span class="inline-block w-12 h-0.5 bg-orange-500 hover:bg-orange-600 transition-colors"></span>
            </div>
            <div class="flex justify-center">
                <p class="text-gray-600 max-w-2xl text-center hover:text-gray-700 transition-colors">
                    Clita ipsum aliquyam dolor diam dolores elitr nonumy. Rebum sea vero ipsum eirmod tempor kasd. Diam
                    amet
                    lorem erat eos sit lorem elitr justo
                </p>
            </div>
        </div>
        <div class="relative flex flex-wrap -mx-4 justify-center">
            <!-- Vertical Line -->
            <div class="absolute inset-y-0 left-1/2 transform -translate-x-1/2 w-px bg-orange-500 hidden md:block">
            </div>

            <div class="w-full md:w-1/3 px-4 mb-8 flex justify-center md:justify-end">
                <div class="text-center md:text-right max-w-sm">
                    <div class="overflow-hidden rounded mb-4">
                        <img class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300"
                            src="{{asset('assets/card2img/event-1.jpg')}}" alt="Event Image 1">
                    </div>
                    <h4 class="text-xl font-semibold mb-1 hover:text-orange-600 transition-colors">The Reception</h4>
                    <p class="text-gray-500 mb-1 hover:text-gray-700 transition-colors">123 Street, New York, USA</p>
                    <p class="text-gray-500 hover:text-gray-700 transition-colors">12:00AM - 13:00PM</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8 flex justify-center md:justify-start">
                <div class="text-center md:text-left max-w-sm">
                    <div class="overflow-hidden rounded mb-4">
                        <img class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300"
                            src="{{asset('assets/card2img/event-2.jpg')}}" alt="Event Image 2">
                    </div>
                    <h4 class="text-xl font-semibold mb-1 hover:text-orange-600 transition-colors">Wedding Party</h4>
                    <p class="text-gray-500 mb-1 hover:text-gray-700 transition-colors">123 Street, New York, USA</p>
                    <p class="text-gray-500 hover:text-gray-700 transition-colors">12:00AM - 13:00PM</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery py-24" id="Gallery">
        <div class="text-center mb-12">
            <h6 class="text-uppercase text-primary mb-3 tracking-widest">Gallery</h6>
            <h1 class="font-secondary text-white text-4xl md:text-6xl mb-4">Our Photo Gallery</h1>
            <i class="far fa-heart text-white text-2xl"></i>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-6">
            <!-- Gallery Item 1 -->
            <div class="gallery-item relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{asset('assets/card2img/gallery-1.jpg')}}" alt="Gallery Image 1">
                <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                    <i class="fa fa-2x fa-plus gallery-icon"></i>
                </div>
            </div>
            <!-- Gallery Item 2 -->
            <div class="gallery-item relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{asset('assets/card2img/gallery-2.jpg')}}" alt="Gallery Image 2">
                <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                    <i class="fa fa-2x fa-plus gallery-icon"></i>
                </div>
            </div>
            <!-- Gallery Item 3 -->
            <div class="gallery-item relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{asset('assets/card2img/gallery-3.jpg')}}" alt="Gallery Image 3">
                <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                    <i class="fa fa-2x fa-plus gallery-icon"></i>
                </div>
            </div>
            <!-- Gallery Item 4 -->
            <div class="gallery-item relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{asset('assets/card2img/gallery-4.jpg')}}" alt="Gallery Image 4">
                <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                    <i class="fa fa-2x fa-plus gallery-icon"></i>
                </div>
            </div>
            <!-- Gallery Item 5 -->
            <div class="gallery-item relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{asset('assets/card2img/gallery-5.jpg')}}" alt="Gallery Image 5">
                <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                    <i class="fa fa-2x fa-plus gallery-icon"></i>
                </div>
            </div>
            <!-- Gallery Item 6 -->
            <div class="gallery-item relative overflow-hidden">
                <img class="w-full h-full object-cover" src="{{asset('assets/card2img/gallery-6.jpg')}}" alt="Gallery Image 6">
                <div class="gallery-overlay absolute inset-0 flex items-center justify-center">
                    <i class="fa fa-2x fa-plus gallery-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->




    <!-- Friends & Family Start -->
    <div class="container-fluid py-5 bg-gray-100 ml-8 mr-8" id="Family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3 text-orange-600" style="letter-spacing: 3px;">Friends &
                    Family</h6>
                <h1 class="font-secondary text-4xl font-bold">Groomsmen & Bridesmaid</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="flex justify-center mt-6">
                <button
                    class="btn btn-primary m-2 py-2 border-2 border-orange-500 px-4 hover:text-white hover:bg-orange-500 hover:border-transparent transition duration-300 ease-in-out"
                    data-filter=".first">Groomsmen</button>
                <button
                    class="btn btn-primary m-2 py-2 border-2 border-orange-500 px-4 hover:text-white hover:bg-orange-500 hover:border-transparent transition duration-300 ease-in-out"
                    data-filter=".second">Bridesmaid</button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                <!-- Groomsmen -->
                <div class="portfolio-item first">
                    <div
                        class="bg-gray-200 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <img class="w-full" src="{{asset('assets/card2img/bridesmaid-1.png')}}" alt="">
                        <div class="p-4">
                            <h4 class="font-semibold text-2xl text-center">Full Name</h4>
                            <p class="text-gray-600 text-center">Best Friend</p>
                            <div class="flex justify-center mt-4">
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Groomsmen -->
                <div class="portfolio-item first">
                    <div
                        class="bg-gray-200 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <img class="w-full" src="{{asset('assets/card2img/bridesmaid-2.png')}}" alt="">
                        <div class="p-4">
                            <h4 class="font-semibold text-2xl text-center">Full Name</h4>
                            <p class="text-gray-600 text-center">Best Friend</p>
                            <div class="flex justify-center mt-4">
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Groomsmen -->
                <div class="portfolio-item first">
                    <div
                        class="bg-gray-200 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <img class="w-full" src="{{asset('assets/card2img/bridesmaid-3.png')}}" alt="">
                        <div class="p-4">
                            <h4 class="font-semibold text-2xl text-center">Full Name</h4>
                            <p class="text-gray-600 text-center">Best Friend</p>
                            <div class="flex justify-center mt-4">
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Groomsmen -->
                <div class="portfolio-item first">
                    <div
                        class="bg-gray-200 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <img class="w-full" src="{{asset('assets/card2img/groomsmen-1.png')}}" alt="">
                        <div class="p-4">
                            <h4 class="font-semibold text-2xl text-center">Full Name</h4>
                            <p class="text-gray-600 text-center">Best Friend</p>
                            <div class="flex justify-center mt-4">
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Groomsmen -->
                <div class="portfolio-item first">
                    <div
                        class="bg-gray-200 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <img class="w-full" src="{{asset('assets/card2img/groomsmen-2.png')}}" alt="">
                        <div class="p-4">
                            <h4 class="font-semibold text-2xl text-center">Full Name</h4>
                            <p class="text-gray-600 text-center">Best Friend</p>
                            <div class="flex justify-center mt-4">
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Groomsmen -->
                <div class="portfolio-item first">
                    <div
                        class="bg-gray-200 rounded-lg overflow-hidden shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <img class="w-full" src="{{asset('assets/card2img/groomsmen-3.png')}}" alt="">
                        <div class="p-4">
                            <h4 class="font-semibold text-2xl text-center">Full Name</h4>
                            <p class="text-gray-600 text-center">Best Friend</p>
                            <div class="flex justify-center mt-4">
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="mx-2 text-orange-500" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other groomsmen and bridesmaids -->
            </div>
        </div>
    </div>
    <!-- Friends & Family End -->

    <!-- RSVP Start -->
    <div class="container mx-auto py-16 px-4" id="RSVP">
        <div class="text-center py-5">
            <h6 class="text-orange-500 uppercase mb-3 tracking-widest">RSVP</h6>
            <h1 class="font-serif text-5xl font-semibold mb-2">Join Our Party</h1>
            <div class="flex justify-center items-center mb-6">
                <span class="inline-block w-12 h-0.5 bg-orange-500"></span>
                <div class="icon text-orange-500 mx-2 hover:text-orange-600 transition-colors">
                    <i class="fas fa-heart"></i>
                </div>
                <span class="inline-block w-12 h-0.5 bg-orange-500"></span>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="w-full max-w-3xl">
                <form class="bg-white p-10 rounded-lg shadow-xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Your Name"
                            class="p-4 bg-gray-100 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" />
                        <input type="email" placeholder="Your Email"
                            class="p-4 bg-gray-100 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent" />
                        <select
                            class="p-4 bg-gray-100 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option>Number of Guest</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <select
                            class="p-4 bg-gray-100 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option>I'm Attending</option>
                            <option>All Events</option>
                            <option>Wedding Party</option>
                        </select>
                        <textarea rows="5" placeholder="Message"
                            class="p-4 bg-gray-100 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent col-span-2"></textarea>
                    </div>
                    <div class="text-center mt-8">
                        <button type="submit"
                            class="bg-orange-500 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transform transition-transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- RSVP End -->


    <!--Footer Start-->
    <footer class="bg-gray-900 text-white" id="Contact">
        <div class="py-12">
            <div class="text-center">
                <h1 class="text-6xl font-semibold mb-2 font-serif">Thank You</h1>
                <div class="flex justify-center items-center mb-4">
                    <span class="inline-block w-8 h-0.5 bg-orange-500"></span>
                    <svg class="mx-2 w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3.172 5a4 4 0 015.656 0l.172.172.172-.172a4 4 0 115.656 5.656L10 15.314l-6.828-6.828a4 4 0 010-5.656z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="inline-block w-8 h-0.5 bg-orange-500"></span>
                </div>
                <div class="flex justify-center space-x-4 mb-4">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="mb-2">
                    <a href="mailto:info@example.com" class="text-gray-400 hover:text-white">info@example.com</a> |
                    <a href="tel:+0123456789" class="text-gray-400 hover:text-white">+012 345 6789</a>
                </div>
                <div>
                    <p class="text-gray-400">&copy; Domain Name. Designed by <a href="#"
                            class="text-orange-500 hover:text-white">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!--Home Button Start-->

<a href="{{route('home')}}">
    <button class="fixed bottom-4 right-4 w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600" aria-label="Home">
        <i class="fas fa-home text-2xl"></i>
    </button>
    </a>
    
    <!--Home Button End-->



    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('hidden');
            navLinks.classList.toggle('flex');
        });


        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.carousel-item');
            let currentIndex = 0;
            const intervalTime = 5000; // Change slide every 5 seconds
            let slideInterval;

            function showSlide(index) {
                items.forEach((item, i) => {
                    item.classList.toggle('hidden', i !== index);
                    item.classList.toggle('active', i === index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
                showSlide(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
                showSlide(currentIndex);
            }

            function startSlideShow() {
                slideInterval = setInterval(nextSlide, intervalTime);
            }

            function stopSlideShow() {
                clearInterval(slideInterval);
            }

            document.querySelector('.carousel-control-prev').addEventListener('click', () => {
                stopSlideShow();
                prevSlide();
                startSlideShow();
            });

            document.querySelector('.carousel-control-next').addEventListener('click', () => {
                stopSlideShow();
                nextSlide();
                startSlideShow();
            });

            // Initialize the first slide and start the slideshow
            showSlide(currentIndex);
            startSlideShow();
        });
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>