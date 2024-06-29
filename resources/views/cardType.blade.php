<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99invites</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
</head>s

<body>




<!--Header Start-->

<header class="bg-purple-800 text-white py-4 fixed top-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('home') }}">
                <img src="https://99invites.com/wp-content/uploads/2019/09/Group-2-1-1024x219.png" alt="99invites"
                     class="h-12">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex md:items-center md:w-auto w-full justify-between">
            <ul class="md:flex md:flex-row md:gap-6 items-center mr-8">
                <li><a href="#" class="nav-link">Home</a></li>
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
            <li><a href="#" class="hover:text-purple-300">Home</a></li>
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

<main class="fade-in p-6 bg-gradient-to-br from-purple-500 via-pink-500 to-red-500 min-h-screen mt-14">

    <div class="main-content max-w-6xl mx-auto bg-white bg-opacity-90 p-10 rounded-3xl shadow-2xl">

        <h1 class="text-4xl font-extrabold mb-10 text-center text-pink-500">Multiple Card Types</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($cardTypes as $cardType)
                <div class="card bg-gradient-to-r from-white via-gray-100 to-gray-200 border border-gray-300 shadow-lg rounded-3xl overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl">
                    <div class="card-body p-6 text-center flex flex-col items-center">
                        <a href="{{ route('cardType.show', ['cardType' => $cardType->id]) }}" class="block mb-4">
                            <h5 class="card-title text-2xl font-semibold text-purple-700 hover:text-purple-500">{{ $cardType->title }}</h5>
                        </a>
                        <p class="card-text mb-2 text-gray-800"><strong>Message:</strong> {!! $cardType->msg !!}</p>

                        @if ($cardType->image)
                            <a href="{{ route('cardType.show', ['cardType' => $cardType->id]) }}" class="block mb-4 mt-4">
                                <img src="{{ asset('storage/' . $cardType->image) }}" class="img-fluid w-full h-48 object-cover rounded-lg transition-transform transform hover:scale-110"
                                     alt="Card Type Image">
                            </a>
                        @endif

                        <p class="card-text text-gray-800"><strong>Card ID:</strong> {{ $cardType->card->card_title }}</p>

                        <a href="{{ route('cardType.show', ['cardType' => $cardType->id]) }}" class="mt-4 inline-block bg-purple-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</main>







<!--Footer Start-->

<footer class="py-8 bg-blue-950 text-white" id="contact">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center mb-4">
            <div class="bg-red-500 rounded-full p-2 mr-2">
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
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






<script></script>


<script src="{{ asset('assets/scripts.js') }}"></script>

</body>

</html>
