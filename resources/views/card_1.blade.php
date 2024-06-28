<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
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
        font-family: "Caveat", cursive;
    }

    .logo {
        font-family: 'Playfair Display', serif;
    }


    .nav-item {
        transition: background-color 0.3s, color 0.3s;
    }

    .nav-item:hover {
        background-color: rgba(255, 99, 71, 0.1);
        /* Tomato color background */
        color: #FF6347;
        /* Tomato color */
    }


    .glitter {
        position: absolute;
        width: 50px;
        height: 50px;
        background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(255, 215, 0, 0.6) 40%, rgba(255, 0, 0, 0.2) 70%, rgba(0, 0, 255, 0.1) 100%);
        border-radius: 50%;
        animation: sparkle 2s infinite;
        z-index: 0;
    }

    .glitter::before,
    .glitter::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: inherit;
        border-radius: inherit;
        animation: inherit;
        animation-duration: 1.5s;
    }

    .glitter::before {
        top: -50%;
        left: -50%;
    }

    .glitter::after {
        top: 50%;
        left: 50%;
    }

    @keyframes sparkle {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
            opacity: 1;
        }

        50% {
            transform: translate(25px, -25px) scale(1.5);
            opacity: 0.7;
        }
    }

    /*About Us Start*/

    .fade-in-top {
        animation: fadeInTop 1.5s ease-in-out;
    }

    @keyframes fadeInTop {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hover-zoom {
        transition: transform 0.3s ease-in-out;
    }

    .hover-zoom:hover {
        transform: scale(1.05);
    }

    .hover-shadow {
        transition: box-shadow 0.3s ease-in-out;
    }

    .hover-shadow:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .btn {
        display: inline-block;
        padding: 0.625rem 1.25rem;
        /* Equivalent to 10px 20px */
        border-radius: 0.3125rem;
        /* Equivalent to 5px */
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary,
    .btn-primary-outline {
        border: 0.125rem solid #FF5733;
        /* Equivalent to 2px */
    }

    .btn-primary {
        background-color: #FF5733;
        color: white;
    }

    .btn-primary:hover {
        background-color: white;
        color: #FF5733;
    }

    .btn-primary-outline {
        background-color: transparent;
        color: #FF5733;
    }

    .btn-primary-outline:hover {
        background-color: #FF5733;
        color: white;
    }

    .btn-sm-square {
        padding: 0.5rem;
        /* Equivalent to 8px */
        border-radius: 50%;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-sm-square:hover {
        background-color: #FF5733;
        color: white;
    }

    .contact-box {
        background-color: #FFD1B2;
        padding: 1.25rem;
        /* Equivalent to 20px */
        border-radius: 0.3125rem;
        /* Equivalent to 5px */
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        /* Equivalent to 0 4px 8px */
        transition: box-shadow 0.3s ease-in-out;
        display: flex;
        align-items: center;
    }

    .contact-box:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        /* Equivalent to 0 8px 16px */
    }

    .contact-info h4 {
        color: #FF5733;
    }

    .text-dark {
        color: #333;
    }

    .text-primary {
        color: #FF5733;
    }

    .bg-main {
        background-color: #BBBD98;
    }

    .text-main {
        color: #BBBD98;
    }

    .rounded-lg {
        border-radius: 0.75rem;
        /* Equivalent to 12px */
    }

    .shadow-md {
        box-shadow: 0 0.25rem 0.375rem rgba(0, 0, 0, 0.1);
        /* Equivalent to 0 4px 6px */
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .tab-class a {
        transition: background-color 0.3s ease-in-out;
    }

    .tab-class a:hover {
        background-color: #FFD1B2;
    }

    .tab-content {
        margin-top: 1.25rem;
        /* Equivalent to 20px */
    }

    /*Additional Styles for Improved Padding and Margin*/
    .space-y-4> :not(:last-child) {
        margin-bottom: 1rem;
        /* Equivalent to 16px */
    }

    .lg\\:space-x-4> :not(:last-child) {
        margin-right: 1rem;
        /* Equivalent to 16px */
    }

    /*About Us End*/


    /* Story Start */

    .story-main {
        background: #ffe6e6;
        overflow-x: hidden;
    }

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
        background: linear-gradient(180deg, #fd7e14, #f76707);
        transform: translateX(-50%);
        z-index: 1;
    }

    .timeline-content {
        position: relative;
        padding: 1.5rem;
        border-radius: 0.5rem;
        background: linear-gradient(135deg, #fff0ea, #ffd6c4);
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
        background: linear-gradient(135deg, #fd7e14, #f76707);
        border: 4px solid #fff;
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
        color: #fff;
    }

    .timeline-row {
        display: flex;
        align-items: center;
        position: relative;
        margin-bottom: 4rem;
    }

    .timeline-row img {
        width: 50%;
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
        width: 35%;
        position: relative;
        padding: 0 2rem;
    }

    .timeline-left img,
    .timeline-right img {
        width: 80%;
        height: auto;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .timeline-left img:hover,
    .timeline-right img:hover {
        transform: scale(1.05);
    }

    .icon:hover {
        transform: scale(1.2);
    }

    @keyframes heartSprinkles {
        0% {
            transform: translateY(-100px);
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: translateY(100vh);
            opacity: 0;
        }
    }

    .heart-sprinkle {
        position: absolute;
        top: -50px;
        font-size: 24px;
        color: pink;
        opacity: 0;
        animation: heartSprinkles 5s linear infinite;
    }

    .heart-sprinkle:nth-child(2n) {
        color: #ff6699;
        animation-duration: 4s;
    }

    .heart-sprinkle:nth-child(3n) {
        color: #ff99cc;
        animation-duration: 6s;
    }

    .heart-sprinkle:nth-child(4n) {
        color: #ff66b2;
        animation-duration: 3.5s;
    }

    .heart-sprinkle:nth-child(5n) {
        color: #ff3366;
        animation-duration: 5.5s;
    }

    .heart-sprinkle:nth-child(6n) {
        color: #ff5050;
        animation-duration: 4.5s;
    }

    .heart-sprinkle:nth-child(7n) {
        color: #ff66cc;
        animation-duration: 3s;
    }

    .heart-sprinkle:nth-child(8n) {
        color: #ff3399;
        animation-duration: 5s;
    }

    .heart-sprinkle:nth-child(9n) {
        color: #ff0066;
        animation-duration: 6s;
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

    /* Story End */



    /* Bridesmaids & Groomsmen Start */

    .img-container {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .img-container:hover {
        transform: scale(1.05);
    }

    .img-container img {
        width: 100%;
        height: auto;
        display: block;
    }

    .img-text {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 8px;
        text-align: center;
    }


    .card {
        position: relative;
        overflow: hidden;
        /* Ensures the hover effect doesn't overlap */
    }

    .icon-container {
        position: absolute;
        /* Ensure it is positioned relative to the card */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 10;
        /* Higher z-index to appear above the image */
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
        transform: translateX(-100%);
        opacity: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card:hover .icon-container {
        transform: translateX(0);
        opacity: 1;
    }

    .icon-container>a {
        margin: 5px 0;
        color: #fff;
        font-size: 24px;
    }

    .card img {
        transition: transform 0.5s ease-in-out;
    }

    .card:hover img {
        transform: scale(1.1);
        /* Zoom effect */
    }

    .bottom-overlay {
        position: absolute;
        bottom: 4px;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.75);
        z-index: 5;
        /* Lower than icon-container but higher than image */
        padding: 8px 0;
    }



    /* Bridesmaids & Groomsmen End */





    /* RSVP Start */


    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in-up {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    .delay-1 {
        animation-delay: 0.1s;
    }

    .delay-2 {
        animation-delay: 0.2s;
    }

    .delay-3 {
        animation-delay: 0.3s;
    }

    .delay-4 {
        animation-delay: 0.4s;
    }

    .delay-5 {
        animation-delay: 0.5s;
    }

    .delay-6 {
        animation-delay: 0.6s;
    }

    .delay-7 {
        animation-delay: 0.7s;
    }

    .delay-8 {
        animation-delay: 0.8s;
    }

    .delay-9 {
        animation-delay: 0.9s;
    }

    .delay-10 {
        animation-delay: 1s;
    }

    /* RSVP End */


    /* Footer Start */

    .footer-bg {
    background-image: url('{{ asset('assets/img/footerbg.jpg') }}');
    background-size: cover;
    background-position: center;
}

    .footer-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        /* Black background with 0.7 opacity */
        z-index: -1;
        /* Ensures the background is behind content */
    }

    /* Footer End */
</style>


<body class="bg-gray-100">

    <!--Header Start-->

    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <span class="logo text-red-500 text-3xl">Mr<span class="text-green-500">&</span>Mrs</span>
            </div>
            <button id="menu-toggle" class="block md:hidden text-red-500 focus:outline-none">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <nav id="nav-links" class="hidden md:flex space-x-4 items-center text-xl font-bold">
                <a href="#" class="nav-item text-gray-500 hover:text-red-500 block py-2 px-4 rounded">Home</a>
                <a href="#About-Us" class="nav-item text-gray-500 hover:text-red-500 block py-2 px-4 rounded">About</a>
                <a href="#Story" class="nav-item text-gray-500 hover:text-red-500 block py-2 px-4 rounded">Story</a>
                <a href="#weddingTimeline" class="nav-item text-gray-500 hover:text-red-500 block py-2 px-4 rounded">Timeline</a>
                <a href="#Wedding-gallery" class="nav-item text-gray-500 hover:text-red-500 block py-2 px-4 rounded">Gallery</a>
                <a href="#weddingRsvp" class="nav-item text-gray-500 hover:text-red-500 block py-2 px-4 rounded">RSVP</a>
            </nav>
            <a href="#"
                class="bg-red-500 text-white hover:bg-red-600 py-2 px-4 rounded-md font-bold text-xl hidden md:block">Book
                Attendance</a>
        </div>
        <div id="mobile-nav-links" class="hidden md:hidden flex-col items-center mt-4 bg-white shadow-md p-4">
            <a href="#"
                class="nav-item text-gray-500 hover:text-red-500 font-medium block py-2 px-4 rounded w-full text-center">Home</a>
            <a href="#About-Us"
                class="nav-item text-gray-500 hover:text-red-500 font-medium block py-2 px-4 rounded w-full text-center">About</a>
            <a href="#Story"
                class="nav-item text-gray-500 hover:text-red-500 font-medium block py-2 px-4 rounded w-full text-center">Story</a>
            <a href="#weddingTimeline"
                class="nav-item text-gray-500 hover:text-red-500 font-medium block py-2 px-4 rounded w-full text-center">Timeline</a>
            <a href="Wedding-gallery"
                class="nav-item text-gray-500 hover:text-red-500 font-medium block py-2 px-4 rounded w-full text-center">Gallery</a>
            <a href="#weddingRsvp"
                class="nav-item text-gray-500 hover:text-red-500 font-medium block py-2 px-4 rounded w-full text-center">RSVP</a>
            <a href="#"
                class="bg-red-500 text-white hover:bg-red-600 py-2 px-4 rounded-md font-medium block text-center w-full mt-2">Book
                Attendance</a>
        </div>
    </header>

    <!--Header End-->


    <!--Main Start-->

    <main class="pt-20">


        <!-- We invite you to celebrate our wedding Start -->

        <div class="relative bg-red-100 p-4 md:p-8 lg:p-12 xl:p-16 mx-auto rounded-lg shadow-lg overflow-hidden">
            <!-- Glitters -->
            <div class="glitter" style="top: 10%; left: 10%;"></div>
            <div class="glitter" style="bottom: 10%; right: 10%;"></div>


            <div class="container mx-auto text-center relative z-10">
                <h1 class="text-4xl md:text-5xl text-red-500 font-bold mb-4">Hello!</h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8">We invite you to celebrate our wedding</p>
                <div
                    class="flex flex-col lg:flex-row justify-center items-center max-w-4xl mx-auto mt-8 space-y-8 lg:space-y-0 lg:space-x-8">
                    <div class="text-center img-container hover:shadow-lg">
                        <img src="{{asset('assets/img/about-1.jpg')}}" alt="Evelyn"
                            class="rounded-lg shadow-md mb-4 w-full max-w-xs mx-auto transition duration-300 transform hover:scale-105">
                        <div class="img-text">
                            <h2 class="text-2xl text-red-500 font-semibold mb-2">Evelyn</h2>
                            <p class="text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                    <div
                        class="text-red-500 text-6xl md:text-8xl lg:mx-8 mb-8 lg:mb-0 hover:text-red-600 hover:scale-110 transition duration-300 transform cursor-pointer">
                        &hearts;</div>
                    <div class="text-center img-container hover:shadow-lg">
                        <img src="{{asset('assets/img/about-2.jpg')}}" alt="Anthony"
                            class="rounded-lg shadow-md mb-4 w-full max-w-xs mx-auto transition duration-300 transform hover:scale-105">
                        <div class="img-text">
                            <h2 class="text-2xl text-red-500 font-semibold mb-2">Anthony</h2>
                            <p class="text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- We invite you to celebrate our wedding End -->


        <!-- About Start -->
        <div class="container-fluid bg-main py-12 relative fade-in-top" id="About-Us">
            <div class="container px-4 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="border-double border-8 border-white rounded-lg overflow-hidden hover-zoom hover-shadow">
                        <img src="{{asset('assets/card2img/about-1.jpg')}}" class="w-full" alt="Evelyn">
                    </div>
                    <div class="text-center lg:text-left fade-in-top">
                        <h5 class="text-primary text-xl font-bold mb-4">About Us</h5>
                        <h1 class="text-white text-4xl lg:text-5xl font-bold mb-4">We Make Your Every Moment</h1>
                        <p class="text-gray-800 text-lg mb-6">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s.</p>
                        <div class="tab-class bg-primary p-4 rounded-lg shadow-md hover-shadow bg-red-400">
                            <ul class="flex mb-4">
                                <li>
                                    <a class="flex py-2 text-center bg-white text-gray-800 active hover:bg-gray-200"
                                        data-bs-toggle="pill" href="#tab-1" style="width: 150px;">Bride Info</a>
                                </li>
                                <li>
                                    <a class="flex py-2 mx-3 text-center bg-white text-gray-800 hover:bg-gray-200"
                                        data-bs-toggle="pill" href="#tab-2" style="width: 150px;">Groom Info</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show active">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                        <div class="hover-zoom hover-shadow">
                                            <img src="{{asset('assets/card2img/bride.jpg')}}" class="w-full rounded-lg shadow-md mb-4"
                                                alt="Evelyn">
                                        </div>
                                        <div class="text-left">
                                            <h5 class="text-white font-bold mb-2">Evelyn</h5>
                                            <p class="text-gray-800 mb-3">Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry.</p>
                                            <div class="flex justify-center lg:justify-start">
                                                <a href="#"
                                                    class="btn btn-primary btn-primary-outline btn-sm-square me-2"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a href="#"
                                                    class="btn btn-primary btn-primary-outline btn-sm-square me-2"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="#"
                                                    class="btn btn-primary btn-primary-outline btn-sm-square me-2"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-primary-outline btn-sm-square"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                        <div class="hover-zoom hover-shadow">
                                            <img src="{{asset('assets/card2img/Groom.jpg')}}" class="w-full rounded-lg shadow-md mb-4"
                                                alt="Anthony">
                                        </div>
                                        <div class="text-left">
                                            <h5 class="text-white font-bold mb-2">Anthony</h5>
                                            <p class="text-gray-800 mb-3">Lorem Ipsum is simply dummy text of the
                                                printing and typesetting industry.</p>
                                            <div class="flex justify-center lg:justify-start">
                                                <a href="#"
                                                    class="btn btn-primary btn-primary-outline btn-sm-square me-2"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a href="#"
                                                    class="btn btn-primary btn-primary-outline btn-sm-square me-2"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="#"
                                                    class="btn btn-primary btn-primary-outline btn-sm-square me-2"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-primary-outline btn-sm-square"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center lg:justify-start mt-6 space-y-4 lg:space-y-0 lg:space-x-4">
                            <a href="#" class="btn btn-primary py-3 px-6">Read More</a>
                            <div class="contact-box flex items-center">
                                <h5 class="text-dark font-bold mb-0 mr-4">Call Us Anytime</h5>
                                <h4 class="text-primary mb-0">+123 456 7890</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Story Start -->

        <div class="story-main bg-gray-100 relative" id="Story">

            <!-- Heart Sprinkles -->
            <div class="heart-sprinkle" style="left: 10%; animation-delay: 0s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 20%; animation-delay: 1s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 30%; animation-delay: 2s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 40%; animation-delay: 3s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 50%; animation-delay: 4s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 60%; animation-delay: 5s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 70%; animation-delay: 6s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 80%; animation-delay: 7s;"><i class="fas fa-heart"></i></div>
            <div class="heart-sprinkle" style="left: 90%; animation-delay: 8s;"><i class="fas fa-heart"></i></div>

            <!-- Story Start -->
            <section class="py-6">
                <section class="text-center py-12">
                    <h2 class="text-orange-500 uppercase tracking-widest mb-3">Story</h2>
                    <h1 class="custom-logo text-4xl md:text-5xl mb-4 font-extrabold text-gray-900">Our Love Story</h1>
                    <div class="flex justify-center items-center">
                        <div class="w-16 h-0.5 bg-orange-500"></div>
                        <div class="icon text-orange-500 mx-2 transition-transform duration-300 ease-in-out">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="w-16 h-0.5 bg-orange-500"></div>

                </section>
                <div class="container mx-auto timeline relative">
                    <!-- First row -->
                    <div class="timeline-row flex flex-col md:flex-row items-center">
                        <div class="timeline-left md:w-1/2 w-full flex justify-end">
                            <img src="{{asset('assets/card2img/story-1.jpg')}}" alt="First Meet" class="rounded-lg shadow-lg">
                        </div>
                        <div class="timeline-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="timeline-right md:w-1/2 w-full">
                            <div class="timeline-content">
                                <h2 class="text-3xl font-bold mb-4 text-orange-600">First Meet</h2>
                                <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                                <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est
                                    lorem lorem at amet sea...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Second row -->
                    <div class="timeline-row flex flex-col-reverse md:flex-row items-center">
                        <div class="timeline-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="timeline-right md:w-1/2 w-full order-md-1">
                            <div class="timeline-content">
                                <h2 class="text-3xl font-bold mb-4 text-orange-600">First Date</h2>
                                <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                                <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est
                                    lorem lorem at amet sea...</p>
                            </div>
                        </div>
                        <div class="timeline-left md:w-1/2 w-full flex justify-start">
                            <img src="{{asset('assets/card2img/story-2.jpg')}}" alt="First Date" class="rounded-lg shadow-lg">
                        </div>
                    </div>

                    <!-- Third row -->
                    <div class="timeline-row flex flex-col md:flex-row items-center">
                        <div class="timeline-left md:w-1/2 w-full flex justify-end">
                            <img src="{{asset('assets/card2img/story-3.jpg')}}" alt="Proposal" class="rounded-lg shadow-lg">
                        </div>
                        <div class="timeline-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="timeline-right md:w-1/2 w-full">
                            <div class="timeline-content">
                                <h2 class="text-3xl font-bold mb-4 text-orange-600">Proposal</h2>
                                <p class="text-sm text-gray-600 mb-4">01 JAN 2050</p>
                                <p class="text-gray-700">Lorem elitr magna stet rebum dolores sed. Est stet labore est
                                    lorem lorem at amet sea...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Story End -->

        <!-- Wedding Date -->
        <div class="container-fluid relative py-10 bg-cover bg-center"
        style="background-image: url('{{ asset('assets/card2img/bgcard.jpg') }}');">
            <!-- Main content -->
            <div class="container py-10 wow zoom-in" data-wow-delay="0.1s">
                <div class="wedding-date text-center bg-white p-10 border-8 border-double border-red-500 rounded-lg shadow-xl relative overflow-hidden">
                    <!-- Decorative elements -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-red-500 via-transparent to-red-500 opacity-25 pointer-events-none">
                    </div>
                    <div
                        class="absolute top-0 left-0 w-20 h-20 bg-red-500 rounded-full opacity-50 transform -translate-x-1/2 -translate-y-1/2 animate-pulse">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-red-500 rounded-full opacity-50 transform translate-x-1/2 translate-y-1/2 animate-pulse">
                    </div>
                    <!-- Heart icons -->
                    <div class="absolute top-1/4 left-1/4 transform -translate-x-1/2 -translate-y-1/2">
                        <i class="fas fa-heart text-red-500 text-4xl animate-pulse"></i>
                    </div>
                    <div class="absolute bottom-1/4 right-1/4 transform translate-x-1/2 translate-y-1/2">
                        <i class="fas fa-heart text-red-500 text-4xl animate-pulse"></i>
                    </div>
                    <div class="wedding-date-content relative z-10">
                        <div
                            class="inline-block border-0 border-secondary border-solid p-4 mb-6 bg-opacity-50 bg-white rounded-lg shadow-md">
                            <h4 class="text-2xl md:text-3xl lg:text-4xl text-gray-900 font-semibold tracking-wide">June
                                28, 2024</h4>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl text-red-600 font-bold mb-8">We Are Getting Married
                        </h1>
                        <p
                            class="text-lg md:text-xl lg:text-2xl text-gray-900 leading-relaxed mb-8 max-w-3xl mx-auto bg-opacity-75 bg-white p-6 rounded-lg shadow-md">
                            Join us for the celebration at the Niloy Hotel in New York, located at 123 West 23rd Street,
                            NY.
                        </p>
                        <div class="flex items-center justify-center mb-8 space-x-6">
                            <div class="text-xl md:text-2xl lg:text-3xl text-red-600 text-center">
                                <div class="bg-gray-100 p-4 rounded-lg shadow-md">00</div>
                                <span class="text-gray-800 block mt-2">Days</span>
                            </div>
                            <div class="text-xl md:text-2xl lg:text-3xl text-red-600 text-center">
                                <div class="bg-gray-100 p-4 rounded-lg shadow-md">00</div>
                                <span class="text-gray-800 block mt-2">Hours</span>
                            </div>
                            <div class="text-xl md:text-2xl lg:text-3xl text-red-600 text-center">
                                <div class="bg-gray-100 p-4 rounded-lg shadow-md">00</div>
                                <span class="text-gray-800 block mt-2">Mins</span>
                            </div>
                            <div class="text-xl md:text-2xl lg:text-3xl text-red-600 text-center">
                                <div class="bg-gray-100 p-4 rounded-lg shadow-md">00</div>
                                <span class="text-gray-800 block mt-2">Secs</span>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-6 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 hover:text-white transition duration-300 ease-in-out"
                            href="#">Book Your Attendance</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wedding Date -->




        <!-- Wedding Timeline start -->

        <div class="relative bg-gradient-to-r from-gray-200 via-gray-300 to-gray-200 overflow-hidden py-12"
            id="weddingTimeline">
            <!-- Background images -->
            <div class="absolute top-1/2 left-[-80px] transform -translate-y-1/2 opacity-30">
                <img src="{{asset('assets/card2img/wedding-bg.png')}}" class="w-64 h-auto rounded-lg shadow-lg" alt="Background Image">
            </div>
            <div class="absolute top-1/2 right-[-140px] transform -translate-y-1/2 opacity-30">
                <img src="{{asset('assets/card2img/wedding-bg.png')}}" class="w-64 h-auto rounded-lg shadow-lg" alt="Background Image">
            </div>
            <div class="container mx-auto px-6 lg:px-20 py-5 bg-white bg-opacity-80 rounded-lg shadow-lg">
                <div class="text-center mb-10">
                    <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-700">Wedding Planning Timeline</h1>
                </div>
                <div class="relative">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                        <!-- Timeline Item 1 -->
                        <div
                            class="border border-gray-300 p-6 bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105">
                            <div class="text-center mb-4">
                                <i class="fas fa-utensils text-pink-500 text-4xl mb-2"></i>
                                <p class="text-pink-500 text-xl">10:00 AM - 11:00 AM</p>
                                <h3 class="text-2xl font-semibold text-gray-700">Dinner</h3>
                            </div>
                            <p class="text-gray-600">Enjoy a delicious dinner with a variety of exquisite dishes served
                                to delight your palate.</p>
                        </div>
                        <!-- Timeline Item 2 -->
                        <div
                            class="border border-gray-300 p-6 bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105">
                            <div class="text-center mb-4">
                                <i class="fas fa-camera-retro text-pink-500 text-4xl mb-2"></i>
                                <p class="text-pink-500 text-xl">11:00 AM - 12:00 PM</p>
                                <h3 class="text-2xl font-semibold text-gray-700">Photoshoot</h3>
                            </div>
                            <p class="text-gray-600">Capture the beautiful moments with a professional photoshoot
                                session.</p>
                        </div>
                        <!-- Timeline Item 3 -->
                        <div
                            class="border border-gray-300 p-6 bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105">
                            <div class="text-center mb-4">
                                <i class="fas fa-glass-cheers text-pink-500 text-4xl mb-2"></i>
                                <p class="text-pink-500 text-xl">12:00 PM - 1:00 PM</p>
                                <h3 class="text-2xl font-semibold text-gray-700">Reception</h3>
                            </div>
                            <p class="text-gray-600">Join us for a joyous reception with music, dancing, and
                                celebration.</p>
                        </div>
                        <!-- Timeline Item 4 -->
                        <div
                            class="border border-gray-300 p-6 bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105">
                            <div class="text-center mb-4">
                                <i class="fas fa-ring text-pink-500 text-4xl mb-2"></i>
                                <p class="text-pink-500 text-xl">1:00 PM - 2:00 PM</p>
                                <h3 class="text-2xl font-semibold text-gray-700">Ceremony</h3>
                            </div>
                            <p class="text-gray-600">Witness the beautiful ceremony as we exchange our vows and rings.
                            </p>
                        </div>
                    </div>
                    <!-- Decorative Circles -->
                    <div class="absolute bottom-0 left-[-18px]">
                        <div class="border-2 border-pink-500 rounded-full p-1 bg-green-200"></div>
                    </div>
                    <div class="absolute top-4 right-[-17px]">
                        <div class="border-2 border-pink-500 rounded-full p-1 bg-green-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wedding Timeline End -->


        <!-- Wedding Gallery Start -->

        <div class="container mx-auto text-center my-12 px-4" id="Wedding-gallery">
            <h1 class="text-4xl font-bold mb-4">Wedding Gallery</h1>
            <p class="text-gray-600 mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum is
                simply dummy text of the printing and typesetting Ipsum is simply dummy text of the printing and
                typesetting</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-1.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Wedding on the beach</h2>
                        <p class="text-gray-700">June 28, 2024</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-2.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Another Wedding</h2>
                        <p class="text-gray-700">July 15, 2024</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-3.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Wedding Memories</h2>
                        <p class="text-gray-700">August 5, 2024</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-4.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Beach Wedding</h2>
                        <p class="text-gray-700">September 10, 2024</p>
                    </div>
                </div>
                <!-- Card 1 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-5.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Wedding on the beach</h2>
                        <p class="text-gray-700">June 28, 2024</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-6.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Another Wedding</h2>
                        <p class="text-gray-700">July 15, 2024</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-7.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Wedding Memories</h2>
                        <p class="text-gray-700">August 5, 2024</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="unique-gallery-card bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 relative">
                    <img src="{{asset('assets/card2img/gallery-8.jpg')}}" alt="Wedding"
                        class="w-full h-80 object-cover hover:scale-110 transition duration-300">
                    <div class="absolute bottom-0 left-0 right-0 bg-white py-2 px-4 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-800">Beach Wedding</h2>
                        <p class="text-gray-700">September 10, 2024</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wedding Gallery End -->

        <!-- Bridesmaids & Groomsmen Start -->
        <div class="container mx-auto text-center my-8">
            <h1 class="text-4xl font-bold mb-4">Bridesmaids & Groomsmen</h1>
            <p class="text-gray-600 mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum is
                simply dummy text of the printing and typesetting Ipsum is simply dummy text of the printing and
                typesetting</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/bridesmaid-1.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <!-- Repeat for other cards -->
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/bridesmaid-2.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/bridesmaid-3.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/bridesmaid-4.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/Groomsmen-1.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <!-- Repeat for other cards -->
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/Groomsmen-2.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/Groomsmen-3.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
                <div class="relative bg-white p-4 shadow-lg card">
                    <div
                        class="absolute inset-0 flex flex-col justify-center items-center bg-gray-800 bg-opacity-50 icon-container">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <img src="{{asset('assets/card2img/Groomsmen-4.png')}}" alt="Person" class="w-full h-auto">
                    <div class="absolute bottom-4 left-0 right-0 bg-white bg-opacity-75 py-2">
                        <h2 class="text-xl font-semibold">Amelia Alex</h2>
                        <p class="text-gray-500">Bridesmaid</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bridesmaids & Groomsmen End -->




        <!-- RSVP Form Start -->
        <div class="py-16" id="weddingRsvp">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12 fade-in-up delay-1">
                    <h1 class="text-6xl font-bold text-primary">RSVP Form</h1>
                </div>
                <div class="flex justify-center">
                    <div
                        class="w-full max-w-4xl bg-white p-10 shadow-xl rounded-lg relative border border-gray-200 fade-in-up delay-2">
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white px-6 py-3 border border-gray-300 text-primary font-semibold shadow-md">
                            Kindly respond by June 25, 2024. We look forward to celebrating with you!
                        </div>
                        <form class="space-y-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="fade-in-up delay-3">
                                    <label for="firstName" class="block text-lg font-medium text-gray-700">First
                                        Name</label>
                                    <input type="text" id="firstName"
                                        class="w-full mt-2 p-4 border border-gray-500 rounded-lg focus:ring-primary focus:border-primary"
                                        placeholder="First Name">
                                </div>
                                <div class="fade-in-up delay-4">
                                    <label for="lastName" class="block text-lg font-medium text-gray-700">Last
                                        Name</label>
                                    <input type="text" id="lastName"
                                        class="w-full mt-2 p-4 border border-gray-500 rounded-lg focus:ring-primary focus:border-primary"
                                        placeholder="Last Name">
                                </div>
                                <div class="fade-in-up delay-5">
                                    <label for="email" class="block text-lg font-medium text-gray-700">Enter Your
                                        Email</label>
                                    <input type="email" id="email"
                                        class="w-full mt-2 p-4 border border-gray-500 rounded-lg focus:ring-primary focus:border-primary"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="fade-in-up delay-6">
                                    <label for="phone" class="block text-lg font-medium text-gray-700">Enter Your
                                        Phone</label>
                                    <input type="text" id="phone"
                                        class="w-full mt-2 p-4 border border-gray-500 rounded-lg focus:ring-primary focus:border-primary"
                                        placeholder="Enter Your Phone">
                                </div>
                            </div>
                            <div class="fade-in-up delay-7">
                                <label for="guests" class="block text-lg font-medium text-gray-700">Number Of
                                    Guests</label>
                                <select id="guests"
                                    class="w-full mt-2 p-4 border border-gray-500 rounded-lg focus:ring-primary focus:border-primary">
                                    <option>Only Me</option>
                                    <option>02 Guests</option>
                                    <option>03 Guests</option>
                                    <option>04 Guests</option>
                                </select>
                            </div>
                            <div class="fade-in-up delay-8">
                                <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                                <textarea id="message" rows="4"
                                    class="w-full mt-2 p-4 border border-gray-500 rounded-lg focus:ring-primary focus:border-primary"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="text-center border border-gray-500 p-8 rounded-lg relative fade-in-up delay-9">
                                <div
                                    class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white px-6 py-3 border border-gray-300 text-primary font-semibold shadow-md">
                                    Will you be attending?
                                </div>
                                <div class="flex justify-around mt-8">
                                    <div class="flex items-center">
                                        <input type="radio" id="accept" name="attendance"
                                            class="focus:ring-primary text-primary border-gray-300" value="accept">
                                        <label for="accept" class="ml-3 text-lg font-medium text-gray-700">Accepts With
                                            Pleasure!</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="decline" name="attendance"
                                            class="focus:ring-primary text-primary border-gray-300" value="decline">
                                        <label for="decline" class="ml-3 text-lg font-medium text-gray-700">Declines
                                            With Regret</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center fade-in-up delay-10">
                                <button
                                    class="bg-primary text-black border-red-600 border-2 py-3 px-6 rounded-lg shadow-md hover:bg-primary-dark transition">Submit
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div class="p-8 bg-white border border-gray-300 shadow-lg rounded-lg fade-in-up delay-1">
                        <h4 class="text-xl font-semibold mb-4">Call Us Now</h4>
                        <a href="tel:+1234567890" class="text-gray-700 text-lg">+123 456 7890</a>
                    </div>
                    <div class="p-8 bg-white border border-gray-300 shadow-lg rounded-lg fade-in-up delay-2">
                        <h4 class="text-xl font-semibold mb-4">When</h4>
                        <p class="text-gray-700 text-lg">28. June 2024 at 7 o’clock in the evening</p>
                    </div>
                    <div class="p-8 bg-white border border-gray-300 shadow-lg rounded-lg fade-in-up delay-3">
                        <h4 class="text-xl font-semibold mb-4">Where</h4>
                        <p class="text-gray-700 text-lg">Niloy Hotel, 123 Ranking Street, New York</p>
                    </div>
                    <div class="col-span-1 md:col-span-3 fade-in-up delay-4">
                        <div class="border border-gray-300 rounded-lg overflow-hidden shadow-lg">
                            <iframe class="w-full h-96"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RSVP Form End -->




    </main>

    <!--Main End-->

    <!-- Footer -->
    <footer class="relative footer-bg text-white py-12">
        <div class="container mx-auto px-6 lg:px-20 flex flex-wrap justify-between">
            <!-- Links Section -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-2xl font-semibold mb-4">Links</h3>
                <ul class="text-xl space-y-2">
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">Gallery</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">Story</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">Timeline</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">RSVP</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">Contact Us</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white">Wedding Date</a></li>
                </ul>
            </div>
            <!-- Mr & Mrs Section -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0 text-center">
                <h3 class="text-4xl font-semibold mb-4">Mr & Mrs</h3>
                <p class="text-gray-300 mb-4 text-2xl">
                    Dolor amet sit justo amet elitr clita ipsum elit est. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nullam in tempor dui, non consectetur enim. Lorem
                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy.
                </p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-pink-500 hover:text-white"><i class="fab fa-facebook-f text-2xl"></i></a>
                    <a href="#" class="text-pink-500 hover:text-white"><i class="fab fa-twitter text-2xl"></i></a>
                    <a href="#" class="text-pink-500 hover:text-white"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-pink-500 hover:text-white"><i class="fab fa-linkedin-in text-2xl"></i></a>
                </div>
            </div>
            <!-- Follow Us & Contact Us Section -->
            <div class="w-full md:w-1/4 text-center md:text-right">
                <h3 class="text-2xl font-semibold mb-4">Follow Us</h3>
                <ul class="text-xl space-y-2">
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white"><i
                                class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white"><i
                                class="fab fa-instagram mr-2"></i>Instagram</a></li>
                    <li class="hover:underline"><a href="#" class="text-gray-300 hover:text-white"><i
                                class="fab fa-twitter mr-2"></i>Twitter</a></li>
                </ul>
                <h3 class="text-2xl font-semibold mt-8 mb-4">Contact Us</h3>
                <p class="text-gray-300 mb-2"><i class="fas fa-envelope mr-2 text-xl"></i>info@example.com</p>
                <p class="text-gray-300"><i class="fas fa-phone-alt mr-2 text-xl"></i>(+012) 3456 7890 123</p>
            </div>
        </div>
        <div class="bg-gray-900 text-gray-400 py-4 mt-6">
            <div class="container mx-auto px-6 lg:px-20 flex justify-between items-center">
                <p>&copy; <span class="text-pink-500">Your Site Name</span>, All rights reserved.</p>
                <p>Designed by <a href="#" class="text-pink-500 hover:underline">HTML Codex</a></p>
            </div>
        </div>
    </footer>

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
        const mobileNavLinks = document.getElementById('mobile-nav-links');

        menuToggle.addEventListener('click', () => {
            mobileNavLinks.classList.toggle('hidden');
        });
    </script>
</body>

</html>