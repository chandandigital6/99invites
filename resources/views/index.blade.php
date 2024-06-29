<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99invites</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>s

<body>




    <!--Header Start-->

    <header class="bg-purple-800 text-white py-4 fixed top-0 w-full z-50">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{route('home')}}">
                    <img src="https://99invites.com/wp-content/uploads/2019/09/Group-2-1-1024x219.png" alt="99invites"
                        class="h-12">
                </a>
            </div>

            <!-- Navigation Menu -->
            <nav class="hidden md:flex md:items-center md:w-auto w-full justify-between">
                <ul class="md:flex md:flex-row md:gap-6 items-center mr-8">
                    <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li><a href="#designs" class="nav-link">Invitations Designs</a></li>
                    <li><a href="#features" class="nav-link">Features</a></li>
                    <li><a href="#pricing1" class="nav-link">Pricing</a></li>
                    <li><a href="#faqs" class="nav-link">FAQ</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
                <a href="#"
                    class="bg-purple-600 hover:bg-white hover:text-purple-600 text-white font-bold py-2 px-4 rounded-3xl border-2 border-white transition duration-300 ease-in-out transform hover:scale-105">Create
                    Invitation</a>
            </nav>



            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-toggle"
                    class="flex items-center px-3 py-2 rounded text-purple-200 hover:text-white hover:border-white">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu md:hidden fixed top-20 left-0 w-full bg-white text-black z-50 hidden">
        <div class="container mx-auto flex flex-col justify-center items-center h-full">
            <ul class="flex flex-col items-center gap-4">
                <li><a href="{{route('home')}}" class="hover:text-purple-300">Home</a></li>
                <li><a href="#designs" class="hover:text-purple-300">Invitations Designs</a></li>
                <li><a href="#features" class="hover:text-purple-300">Features</a></li>
                <li><a href="#pricing1" class="hover:text-purple-300">Pricing</a></li>
                <li><a href="#faqs" class="hover:text-purple-300">FAQ</a></li>
                <li><a href="#contact" class="hover:text-purple-300">Contact</a></li>
            </ul>
            <!-- Create Invitation Button -->
            <a href="#"
                class="bg-purple-600 hover:bg-purple-700 text-white rounded-3xl font-bold py-2 px-4 mt-8 mb-5 rounded">Create
                Invitation</a>
        </div>
    </div>


    <!--Header End-->

    <main class="fade-in">
        <!--Online Wedding Invitations Start-->


        <section class="bg-purple-800 text-white p-8 pt-16 mt-12">
            @foreach($banners as $banner)


            <div class="container mx-auto flex flex-col md:flex-row items-center">
                <!-- Left Column: Text -->
                <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 fade-in-bottom">
                    <h1 class="text-6xl font-bold mb-4 ">{{$banner->title}}</h1>
                    <p class="text-2xl mb-6">
                     {{$banner->sub_title}}
                    </p>
                    <a href="#"
                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded flex items-center justify-center w-48 mx-auto md:mx-0">
                        <i class="fab fa-whatsapp mr-2"></i>Create Invite
                    </a>
                </div>

                <!-- Right Column: Video -->
                <div class="w-full md:w-1/2 md:ml-8 lg:ml-32">
                    <div class="rounded-lg border border-white overflow-hidden">
                        <video class="w-full h-96 object-cover rounded-lg"
                            src="{{asset('storage/'.$banner->image)}}" autoplay
                            loop muted playsinline></video>
                    </div>
                </div>

            </div>
            @endforeach
        </section>



        <!--Online Wedding Invitations End-->


        <div class="main-content">
            <!--Select invitation theme Start-->
            <div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-4">
                <h1 class="text-2xl md:text-4xl text-amber-900 font-bold text-center mb-4 fade-in-bottom">Select
                    Invitation Theme</h1>
                <p class="text-gray-600 text-center mb-6 fade-in-bottom" style="animation-delay: 0.5s;">All designs are
                    available in English, Hindi, or any other Indian language</p>

                <h2 class="text-xl md:text-2xl font-semibold text-center mb-6 text-amber-900">Trending Designs</h2>


                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    @foreach($cards as $card)


                    <a href="{{route('card.show',$card->id)}}">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                            <img src="{{asset('storage/'.$card->image)}}" alt="Vintage" class="w-full">
                            <p class="text-center font-bold py-2">{{$card->card_title}}</p>
                        </div>
                    </a>
                    @endforeach

                </div>

                <div class=" mt-8">
                    <h1 class="text-2xl md:text-4xl font-bold text-center text-amber-900">Dark Theme & Love Story
                    </h1>
                    <div class="flex ml-4 mt-4 gap-4">
                        <a href="card-6.html">
                            <div
                                class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                                <img src="{{asset('assets/img/Dark-theme.jpg')}}" alt="Dark Theme" class="w-full">
                                <p class="text-center font-bold py-2">Dark Theme</p>
                            </div>
                        </a>
                        <a href="card-7.html">
                            <div
                                class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                                <img src="{{asset('assets/img/Modern-Wedding-Copy.jpg')}}" alt="Love Story" class="w-full">
                                <p class="text-center font-bold py-2">Love Story</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!--Select invitation theme End-->

            <!-- Engagement Invitations Section -->
            <div class="bg-gray-100 flex items-center justify-center fade-in-bottom ">
                <div class="p-4">
                    <h1 class="text-2xl md:text-4xl font-bold text-center mb-10 text-amber-900">Engagement Invitations
                    </h1>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 justify-items-center">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                            <img src="{{asset('assets/img/Tradiational-Wedding.jpg')}}" alt="Traditional Wedding" class="w-full">
                            <p class="text-center font-bold py-2">Engagement<br>+<br>Wedding</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                            <img src="{{asset('assets/img/royal-version-2.jpg')}}" alt="Royal" class="w-full">
                            <p class="text-center font-bold py-2">Engagement<br>+<br>Dark-Theme</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                            <img src="{{asset('assets/img/Muslim-Wedding.jpg')}}" alt="Muslim Wedding" class="w-full">
                            <p class="text-center font-bold py-2">Engagement<br>+<br>Light-Theme</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Simple Save The Date Section -->
            <div class="bg-gray-100 flex items-center justify-center fade-in-bottom">
                <div class="p-4 text-center">
                    <h1 class="text-2xl md:text-4xl font-bold mb-10 text-amber-900">Simple Save The
                        Date<br>(Budget-Friendly)</h1>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 justify-center">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                            <img src="{{asset('assets/img/Tradiational-Wedding.jpg')}}" alt="Traditional Wedding" class="w-full">
                            <p class="text-center font-bold py-2">Engagement<br>+<br>Wedding</p>
                        </div>
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 hover-fade-in">
                            <img src="{{asset('assets/img/Muslim-Wedding.jpg')}}" alt="Muslim Wedding" class="w-full">
                            <p class="text-center font-bold py-2">Engagement<br>+<br>Light-Theme</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Create your unique wedding invitation Start-->

        <div class="bg-pink-100 flex items-center justify-center">

            <div class="text-center p-6">
                <div class="flex justify-center mb-4">
                    <span class="text-4xl animate-wave">👋</span>
                </div>
                <h1 class="text-2xl md:text-5xl font-bold text-blue-600 mb-2 fade-in-bottom">Create your unique
                    wedding
                    invitation</h1>
                <p class="text-xl text-red-500 mb-6 fade-in-bottom">We are just one click away</p>
                <a href="https://api.whatsapp.com/send?phone=919987300994&amp;text=👋%20%20Hello,%20I%20want%20to%20get%20a%20digital%20Invitation%20for%20my%20event.."
                    class="mt-4 inline-block px-10 py-3 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600">
                    <i class="fab fa-whatsapp mr-2"></i> Create Invite
                </a>
            </div>
        </div>



        <!--Create your unique wedding invitation End-->


        <!--Why it's cool? Start-->

        <div class="max-w-4xl mx-auto px-4 py-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">Why it's cool?</h2>
                <div class="h-96 rounded-lg overflow-hidden">
                    <iframe class="w-full h-full"
                        src="https://www.youtube.com/embed/f9WszzykghQ?autoplay=1&rel=0&controls=1&mute=0"
                        allowfullscreen></iframe>
                </div>
                <a href="https://api.whatsapp.com/send?phone=919987300994&amp;text=👋%20%20Hello,%20I%20want%20to%20get%20a%20digital%20Invitation%20for%20my%20event.."
                    class="mt-8 inline-block px-10 py-3 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600">
                    <i class="fab fa-whatsapp mr-2"></i> Create Invite
                </a>
            </div>
        </div>


        <!--Why it's cool? End-->


        <!--How it looks when you share your invitation Start-->

        <div class="bg-gray-50 p-6" id="features">
            <div class="max-w-6xl mx-auto flex flex-col-reverse items-center md:flex-row md:items-start md:space-x-12">
                <div class="w-full md:w-1/2 flex flex-col items-center md:items-start space-y-6">
                    <div class="relative">
                        <div class="bg-green-100 border border-green-300 p-4 rounded-lg shadow-lg w-80">
                            <div class="flex items-center space-x-2 mb-2">
                                <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                                <span class="font-semibold text-gray-900">Rahul & Simran</span>
                            </div>
                            <div class="font-semibold mb-2 text-gray-900">Wedding Invitation</div>
                            <div class="mb-2 text-gray-700">
                                Rahul & Simran warmly invite you to their marriage ceremony on
                                <span class="font-bold">7th December 2021</span>. Your presence will make it more
                                special!
                            </div>
                            <div>
                                To see their Invitation Click here 👉
                                <a href="https://bit.ly/Simran-weds-Rahul"
                                    class="text-blue-600 underline">https://bit.ly/Simran-weds-Rahul</a>
                            </div>
                        </div>
                        <img src="https://via.placeholder.com/40" alt="Profile"
                            class="absolute -bottom-4 -left-4 w-10 h-10 rounded-full border-2 border-white shadow-lg">
                    </div>
                    <div class="relative">
                        <div class="bg-gray-100 border border-gray-300 p-2 rounded-lg shadow-lg w-64">
                            <div class="flex items-start">
                                <img src="https://via.placeholder.com/40" alt="Profile"
                                    class="w-8 h-8 rounded-full mr-2">
                                <div class="flex-1">
                                    <div class="text-gray-900 mb-1">Wow, Congratulations 🎉🎉🎉</div>
                                    <div class="text-gray-700 text-sm">Happy for you...</div>
                                </div>
                            </div>
                            <div class="text-xs text-gray-700 text-right mt-2">11:23 AM</div>
                        </div>
                        <img src="https://via.placeholder.com/40" alt="Profile"
                            class="absolute -bottom-4 -left-4 w-10 h-10 rounded-full border-2 border-white shadow-lg">
                    </div>
                    <div>
                        <button
                            class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-lg shadow-lg text-lg">Get
                            Details</button>
                    </div>
                </div>
                <div class="w-full md:w-1/2 flex justify-center items-center">
                    <h1 class="text-6xl font-bold md:mt-0 text-red-500 fade-in-bottom">How it looks when you share your
                        invitation</h1>
                </div>
            </div>
        </div>

        <!--How it looks when you share your invitation End-->

        <!--Unlimited Share Anywhere Start-->

        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <div
                class="flex flex-col md:flex-row items-center justify-center md:justify-between max-w-6xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="md:w-1/2 text-center md:text-left mb-6 md:mb-0 fade-in-bottom">
                    <h1 class="text-4xl font-bold text-black fade-in-bottom">
                        <span class="text-red-500">Unlimited</span> Share Anywhere
                    </h1>
                    <p class="mt-4 text-gray-600 fade-in-bottom">
                        Share your invitation with unlimited guests via WhatsApp, Facebook, Instagram, and more.
                    </p>
                    <div class="mt-6 flex justify-center md:justify-start space-x-4">
                        <a href="#" class="icon-container"><i class="fab fa-whatsapp text-green-500 text-2xl"></i></a>
                        <a href="#" class="icon-container"><i class="fab fa-facebook text-blue-700 text-2xl"></i></a>
                        <a href="#" class="icon-container"><i class="fab fa-instagram text-pink-500 text-2xl"></i></a>
                        <a href="#" class="icon-container"><i class="fab fa-twitter text-blue-400 text-2xl"></i></a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{asset('assets/img/how-it-looks.webp')}}" alt="Sharing illustration"
                        class="w-full md:w-2/3 rounded-lg shadow-md">
                </div>
            </div>
        </div>

        <!--Unlimited Share Anywhere End-->


        <!--Google Map Directions to the Wedding Venue Start-->

        <section class="bg-gray-100 py-12">
            <div class="container mx-auto flex justify-center items-center">
                <div class="flex flex-col lg:flex-row w-full">
                    <div class="lg:w-1/2 lg:mr-6">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <!-- Embed Google Maps iframe here -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.13878083308!2d-122.41941593064395!3d37.77492947693287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858098d683b3fd%3A0xd2a01a223a6db6fb!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2suk!4v1622991631572!5m2!1sen!2suk"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:ml-6 px-4 lg:px-0 flex flex-col justify-center">
                        <h3 class="text-3xl lg:text-4xl font-semibold mb-4 text-gray-800 fade-in-bottom">Google Map
                            Directions to the
                            Wedding Venue</h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 fade-in-bottom">Use Google Maps to guide
                            your guests to
                            the
                            wedding venue efficiently.
                            Share our location to help them find the fastest route, saving you from providing
                            directions.
                        </p>
                        <a href="#"
                            class="bg-red-500 text-white font-semibold py-2 px-6 rounded hover:bg-red-600 transition-colors duration-300 inline-block max-w-max fade-in-bottom">Get
                            Directions</a>
                    </div>
                </div>
            </div>
        </section>

        <!--Google Map Directions to the Wedding Venue End-->






        <!--Pre-wedding & Engagemen Start-->

        <div class="container mx-auto my-8 relative">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 relative z-10">

                <div class="flex justify-center items-center">

                    <h2 class="text-5xl font-bold ml-7 fade-in-bottom"><span class="text-red-500 ">Pre-wedding &
                            Engagement</span> photos and
                        videos in your invitation</h2>
                </div>
                <div class="flex justify-center relative">
                    <!-- Add heart sprinkles here -->

                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
                        <!-- Add multiple heart elements for the animation -->
                        <div class="absolute animate-heart" style="left: 10%; animation-duration: 5s;"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" width="48px"
                                height="48px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg></div>
                        <div class="absolute animate-heart" style="left: 20%; animation-duration: 4s;"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" width="48px"
                                height="48px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg></div>
                        <div class="absolute animate-heart" style="left: 30%; animation-duration: 3.5s;"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" width="48px"
                                height="48px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg></div>
                        <div class="absolute animate-heart" style="left: 40%; animation-duration: 3s;"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" width="48px"
                                height="48px">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg></div>
                        <!-- Add more heart elements as needed -->
                    </div>
                    <img src="{{asset('assets/img/photos.webp')}}" alt="Image 2" class="max-w-3/4 h-96 object-cover">
                </div>
            </div>
        </div>


        <!--Pre-wedding & Engagemen End-->


        <!--Countdown for Your Special Day Start-->

        <div
            class="max-w-4xl mx-auto flex flex-col justify-center items-center bg-gradient-to-r from-purple-400 to-pink-500 rounded-lg shadow-xl p-8">
            <div class="w-full md:w-2/3 mb-8">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 text-center">Countdown for Your Special Day
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-8 text-center">A live countdown to build up the
                    excitement.
                    Make each second memorable.</p>
            </div>
            <div class="w-full md:w-2/3 rounded-lg bg-white bg-opacity-75 p-8">
                <div id="countdown" class="flex flex-wrap justify-center mb-8">
                    <div class="mx-4 mb-4 text-center">
                        <span id="days" class="text-6xl md:text-7xl font-bold text-red-500">16</span>
                        <p class="text-gray-600 font-semibold">Days</p>
                    </div>
                    <div class="mx-4 mb-4 text-center">
                        <span id="hours" class="text-6xl md:text-7xl font-bold text-red-500">10</span>
                        <p class="text-gray-600 font-semibold">Hours</p>
                    </div>
                    <div class="mx-4 mb-4 text-center">
                        <span id="minutes" class="text-6xl md:text-7xl font-bold text-red-500">45</span>
                        <p class="text-gray-600 font-semibold">Minutes</p>
                    </div>
                    <div class="mx-4 mb-4 text-center">
                        <span id="seconds" class="text-6xl md:text-7xl font-bold text-red-500">22</span>
                        <p class="text-gray-600 font-semibold">Seconds</p>
                    </div>
                </div>
                <p class="text-lg md:text-xl text-gray-700 text-center">Time left to event</p>
            </div>
        </div>


        <!--Countdown for Your Special Day End-->

        <!--Background Music Start-->

        <div class="py-12">
            <div class="bg-white shadow-md rounded-lg p-8">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 pr-4">
                        <iframe src="https://giphy.com/embed/5nkA5xP6V9JMwpHQnJ" width="100%" height="auto"
                            style="aspect-ratio: 480 / 401; max-width: 240px;" frameborder="0" class="giphy-embed"
                            allowfullscreen></iframe>
                    </div>
                    <div class="md:w-2/3 pl-4 mt-8 md:mt-16">
                        <h1 class="text-2xl md:text-6xl font-bold text-gray-600 fade-in-bottom"><span
                                class="text-red-500">Background
                                Music</span> of Your Choice</h1>
                        <p class="text-base md:text-xl text-gray-600 mb-4 fade-in-bottom">Your favorite background music
                            in your
                            invitation
                            to lift up the emotions.</p>
                    </div>
                </div>
            </div>
        </div>


        <!--Background Music End-->


        <!--Testimonial Start-->

        <div class="bg-gray-100">
            <section class="flex flex-col items-center py-16">
                <h2 class="text-4xl font-extrabold mb-8 ml-7 text-gray-800">Couples Love Our Unique Invitations</h2>
                <div class="relative w-full max-w-3xl">
                    <div id="testimonial-slider" class="overflow-hidden relative rounded-lg shadow-xl">
                        <div class="flex transition-transform duration-500 ease-in-out" id="slider">
                            <!-- Testimonial Slide 1 -->
                            <div
                                class="min-w-full p-8 bg-white shadow-lg rounded-lg testimonial-slide hover:shadow-2xl transition-shadow">
                                <div class="flex flex-col items-center text-center">
                                    <img src="{{asset('assets/img/avatar1.jpg')}}" alt="Nitika Bhatia"
                                        class="w-20 h-20 rounded-full mb-4 border-4 border-blue-500">
                                    <p class="font-semibold text-xl text-gray-900">Nitika Bhatia</p>
                                    <div class="text-yellow-500 flex">
                                        <span>★★★★★</span>
                                    </div>
                                    <p class="mt-4 text-gray-700">I used their services for my brother's digital wedding
                                        card. I just had one conversation over the phone, explained them all the needs
                                        and that's it. Rest all conversations over WhatsApp. Their response time is
                                        really great. They are super patient and humble about the work and did all the
                                        edits and changes quickly. Would really recommend their services.</p>
                                </div>
                            </div>
                            <!-- Testimonial Slide 2 -->
                            <div
                                class="min-w-full p-8 bg-white shadow-lg rounded-lg testimonial-slide hover:shadow-2xl transition-shadow">
                                <div class="flex flex-col items-center text-center">
                                    <img src="{{asset('assets/img/avatar2.jpg')}}" alt="John Doe"
                                        class="w-20 h-20 rounded-full mb-4 border-4 border-blue-500">
                                    <p class="font-semibold text-xl text-gray-900">John Doe</p>
                                    <div class="text-yellow-500 flex">
                                        <span>★★★★★</span>
                                    </div>
                                    <p class="mt-4 text-gray-700">Their service was fantastic! The digital wedding card
                                        was beautiful and exactly what we wanted. They were very responsive and made all
                                        the changes we requested promptly. Highly recommend!</p>
                                </div>
                            </div>
                            <!-- Testimonial Slide 3 -->
                            <div
                                class="min-w-full p-8 bg-white shadow-lg rounded-lg testimonial-slide hover:shadow-2xl transition-shadow">
                                <div class="flex flex-col items-center text-center">
                                    <img src="{{asset('assets/img/avatar3.jpg')}}" alt="Jane Smith"
                                        class="w-20 h-20 rounded-full mb-4 border-4 border-blue-500">
                                    <p class="font-semibold text-xl text-gray-900">Jane Smith</p>
                                    <div class="text-yellow-500 flex">
                                        <span>★★★★★</span>
                                    </div>
                                    <p class="mt-4 text-gray-700">Amazing experience! The team was so helpful and
                                        created a stunning wedding invitation for us. Very professional and quick to
                                        respond to our requests.</p>
                                </div>
                            </div>
                            <!-- Additional slides can be added here in a similar structure -->
                        </div>
                    </div>
                    <div class="flex justify-center mt-6 space-x-4">
                        <button onclick="prevSlide()"
                            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 py-2 rounded-full shadow-md transform hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button onclick="nextSlide()"
                            class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-4 py-2 rounded-full shadow-md transform hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>
        </div>


        <!--Testimonial End-->


        <!--Pricing Start-->


        <div class="bg-blue-950 text-white" id="pricing1">
            <div class="flex flex-col items-center justify-center min-h-screen p-6">
                <h1 class="text-6xl font-bold mb-12">Pricing</h1>
                <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">
                    <!-- Basic Invite -->
                    <div
                        class="bg-white text-black rounded-lg p-8 w-full md:w-80 shadow-lg transform hover:scale-105 transition-transform duration-300 flex flex-col items-center">
                        <h2 class="text-5xl font-bold mb-4 text-center">Basic Invite</h2>
                        <div class="text-3xl font-semibold mb-4 text-center">
                            <span class="line-through text-gray-500">₹3,000</span>
                            <span class="text-green-500">₹2,500</span>
                        </div>
                        <ul class="space-y-4 mb-8 text-center">
                            <li class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Basic Themes
                            </li>
                            <li class="flex items-center justify-center text-gray-500">
                                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Add Pre Wedding Photo Gallery
                            </li>
                            <li class="flex items-center justify-center text-gray-500">
                                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Background Music
                            </li>
                            <li class="flex items-center justify-center text-gray-500">
                                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                Family Photos
                            </li>
                        </ul>
                        <button
                            class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold flex items-center justify-center hover:bg-green-600 transition-colors duration-300">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                                class="w-6 h-6 mr-2">
                            BUY ON WHATSAPP
                        </button>
                    </div>

                    <!-- Premium Invite -->
                    <div
                        class="bg-white text-black rounded-lg p-8 w-full md:w-80 shadow-lg transform hover:scale-105 transition-transform duration-300 flex flex-col items-center">
                        <h2 class="text-5xl font-bold mb-4 text-center">Premium Invite</h2>
                        <div class="text-3xl font-semibold mb-4 text-center">
                            <span class="line-through text-gray-500">₹5,000</span>
                            <span class="text-green-500">₹3,500</span>
                        </div>
                        <ul class="space-y-4 mb-8 text-center">
                            <li class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Premium Themes
                            </li>
                            <li class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Add Pre Wedding Photo Gallery
                            </li>
                            <li class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Background Music
                            </li>
                            <li class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-11.293a1 1 0 00-1.414 0L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Family Photos
                            </li>
                        </ul>
                        <button
                            class="w-full bg-green-500 text-white py-3 rounded-lg font-semibold flex items-center justify-center hover:bg-green-600 transition-colors duration-300">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                                class="w-6 h-6 mr-2">
                            BUY ON WHATSAPP
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!--Pricing End-->

        <!--Create your unique wedding invitation Start-->

        <div class="bg-pink-100 flex items-center justify-center">

            <div class="text-center p-6">
                <div class="flex justify-center mb-4">
                    <span class="text-4xl animate-wave">👋</span>
                </div>
                <h1 class="text-2xl md:text-5xl font-bold text-blue-600 mb-2 fade-in-bottom">Create your unique wedding
                    invitation</h1>
                <p class="text-xl text-red-500 mb-6 fade-in-bottom">We are just one click away</p>
                <a href="https://api.whatsapp.com/send?phone=919987300994&amp;text=👋%20%20Hello,%20I%20want%20to%20get%20a%20digital%20Invitation%20for%20my%20event.."
                    class="mt-4 inline-block px-10 py-3 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600">
                    <i class="fab fa-whatsapp mr-2"></i> Create Invite
                </a>
            </div>
        </div>

        <!--Create your unique wedding invitation End-->

        <!--Create your unique wedding invitation Start-->

        <div class="bg-gray-100" id="faqs">
            <div class="container mx-auto p-6">
                <h1 class="text-4xl font-bold text-center mb-6">FAQ</h1>
                <p class="text-center text-gray-500 mb-12">Most frequent questions and answers</p>

                <div class="max-w-4xl mx-auto">
                    <!-- Accordion Item 1 -->
                    <div class="border-b border-gray-300">
                        <button class="w-full text-left p-4 focus:outline-none flex justify-between items-center"
                            onclick="toggleAccordion(0)">
                            <span class="text-lg font-bold">What is the Process of Digital Invitation?</span>
                            <svg id="icon-0" class="w-6 h-6 text-purple-600 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div id="content-0" class="hidden p-4 text-gray-600">
                            The process of digital invitation involves creating a digital card that can be shared via
                            email,
                            social media, or messaging apps.
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="border-b border-gray-300">
                        <button class="w-full text-left p-4 focus:outline-none flex justify-between items-center"
                            onclick="toggleAccordion(1)">
                            <span class="text-lg font-bold">With how many people I can share this?</span>
                            <svg id="icon-1" class="w-6 h-6 text-purple-600 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div id="content-1" class="hidden p-4 text-gray-600">
                            You can share the digital invitation with as many people as you like.
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="border-b border-gray-300">
                        <button class="w-full text-left p-4 focus:outline-none flex justify-between items-center"
                            onclick="toggleAccordion(2)">
                            <span class="text-lg font-bold">How much time it- takes to make my invitation?</span>
                            <svg id="icon-2" class="w-6 h-6 text-purple-600 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div id="content-2" class="hidden p-4 text-gray-600">
                            The time to create a digital invitation varies, but typically it can be done within a few
                            hours
                            to a day.
                        </div>
                    </div>

                    <!-- Accordion Item 4 -->
                    <div class="border-b border-gray-300">
                        <button class="w-full text-left p-4 focus:outline-none flex justify-between items-center"
                            onclick="toggleAccordion(3)">
                            <span class="text-lg font-bold">Life of Invitation?</span>
                            <svg id="icon-3" class="w-6 h-6 text-purple-600 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div id="content-3" class="hidden p-4 text-gray-600">
                            The digital invitation remains accessible as long as the link is active and the hosting
                            service
                            is available.
                        </div>
                    </div>

                    <!-- Accordion Item 5 -->
                    <div class="border-b border-gray-300">
                        <button class="w-full text-left p-4 focus:outline-none flex justify-between items-center"
                            onclick="toggleAccordion(4)">
                            <span class="text-lg font-bold">Can I open this Invitation on Desktop/ Laptop and Tab</span>
                            <svg id="icon-4" class="w-6 h-6 text-purple-600 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div id="content-4" class="hidden p-4 text-gray-600">
                            Yes, the digital invitation can be opened on any device with internet access, including
                            desktop,
                            laptop, and tablets.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!--Footer Start-->

    <footer class="py-8 bg-blue-950 text-white" id="contact">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center mb-4">
                <div class="bg-red-500 rounded-full p-2 mr-2">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12h3m-4 4h4m-6 0a9 9 0 11-4-7.5m1 6.5h.01" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold">99invites</h1>
            </div>
            <p class="text-sm mb-4">Time is changing & now it's our turn to change and use online wedding invitations...
            </p>
            <p class="text-sm mb-4">Contact us today to create an awesome digital invitation for your wedding</p>
            <div class="flex space-x-4 mb-4">
                <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-gray-700">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.522-4.478-10-10-10S2 6.478 2 12c0 4.992 3.656 9.12 8.437 9.878V14.89h-2.54v-2.89h2.54v-2.204c0-2.507 1.493-3.89 3.777-3.89 1.094 0 2.239.195 2.239.195v2.459h-1.26c-1.242 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v7.012C18.344 21.12 22 16.992 22 12z" />
                    </svg>
                </a>
                <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-gray-700">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 5.815 2.611 5.815 5.814 0 4.565-4.589 10.048-5.13 10.564-.263.256-.684.256-.948 0-.54-.516-5.13-5.999-5.13-10.564 0-3.203 2.611-5.814 5.815-5.814M12 0C7.589 0 4 3.589 4 8.163c0 5.053 4.888 10.666 5.697 11.512.405.428 1.198.428 1.603 0C15.112 18.83 20 13.217 20 8.163 20 3.589 16.411 0 12 0z" />
                    </svg>
                </a>
                <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-gray-700">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M20 2H4c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-4.999 11.667h-2.484v6.668h-2.48v-6.668H8.999v-2.33h1.037c-.012-.35-.034-.67-.034-.99 0-1.554.352-2.34 1.103-2.975.664-.554 1.507-.832 2.602-.832.993 0 1.664.08 2.059.116v2.422h-1.417c-.914 0-1.105.453-1.105 1.136 0 .227.008.454.024.68h2.513l-.225 2.33z" />
                    </svg>
                </a>
                <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-gray-700">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M20.994 8.902c-.184-.004-.367-.014-.55-.014-4.109 0-7.447 3.338-7.447 7.447 0 .183.01.366.014.549-.234.02-.472.032-.713.032-4.634 0-8.39-3.756-8.39-8.39S7.664.011 12.298.011c1.688 0 3.275.493 4.635 1.41.136.092.282.13.426.125.363-.012.729.002 1.091.002.553 0 1.098-.11 1.622-.309.153-.059.284-.174.36-.32.074-.141.075-.306.028-.46C20.775.203 20.878 0 21.092 0H22c.553 0 1 .447 1 1v6c0 .553-.447 1-1 1h-.908c-.193 0-.38-.07-.521-.195-.327-.287-.751-.39-1.146-.276-.475.131-.918.371-1.307.701zM16 16v-1c0-.552-.447-1-1-1h-1c-.552 0-1 .448-1 1v1h-1v-4h4v4h-1z" />
                    </svg>
                </a>
            </div>
            <div class="text-sm text-gray-400">Made with <span class="text-red-500">♥</span> in India</div>
        </div>
    </footer>


    <!--Footer End-->






    <script>

    </script>


    <script src="{{asset('assets/scripts.js')}}"></script>

</body>

</html>
