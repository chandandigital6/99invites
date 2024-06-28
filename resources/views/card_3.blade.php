<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Invitation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC:wght@100..400&display=swap" rel="stylesheet">

</head>

<style>
  body {
    font-family: "Playwrite AU VIC", cursive;
  }


  /*Swetha & Dhanush Start*/

  @keyframes slideInFromLeft {
    from {
      transform: translateX(-100%);
      opacity: 0;
    }

    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  .slideInFromLeft {
    animation: slideInFromLeft 2s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  .fadeIn {
    animation: fadeIn 2s ease-in-out;
  }

  .delay-500 {
    animation-delay: 0.5s;
  }

  /*Swetha & Dhanush End*/


  /* Main Section Shri Gajanan Namah Start*/

  #main-section {
    background-image: url('{{asset('assets/card2img/bg-main.jpg')}}');
    background-size: cover;
    background-position: center;
  }

  /* Custom CSS for golden circular frames */
  .profile-frame {
    width: 200px;
    /* Adjust the width as needed */
    height: 200px;
    /* Adjust the height as needed */
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    background: radial-gradient(circle at center, transparent 50%, gold 90%);
    border: 6px solid gold;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    /* Center the frame horizontally */
  }

  .profile-frame img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
  }

  .profile-details {
    text-align: center;
    /* Center align text inside the profile details */
    margin-top: 15px;
    /* Add space between image and text */
  }

  /* Main Section Shri Gajanan Namah End*/


  /* Warm Regards Start */

  @keyframes fade-in-left {
    from {
      opacity: 0;
      transform: translateX(-50px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes fade-in-right {
    from {
      opacity: 0;
      transform: translateX(50px);
    }

    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  .fade-in-left {
    animation: fade-in-left 1s ease-out forwards;
  }

  .fade-in-right {
    animation: fade-in-right 1s ease-out forwards;
  }

  .hover-grow:hover {
    transform: scale(1.01);
    transition: transform 0.3s ease-in-out;
  }

  .background-shadow {
    position: relative;
    background: url('{{asset('assets/card2img/bg-regards.jpg')}}') no-repeat center center;
    background-size: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 4rem;
    /* Adjust the padding as needed */
  }

  .background-shadow::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
    border-radius: inherit;
    /* To match the border radius if any */
  }

  /* Warm Regards End */

  /* Time Left For Wedding Start */

  .daytime {
    background-image: url('{{asset('assets/card2img/footer-bg.jpg')}}');
    background-size: cover;
    background-position: center;
    font-family: 'Arial', sans-serif;
    overflow: hidden;
  }

  .countdown-container {
    backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.8);
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 90%;
    margin: auto;
  }

  .circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    border: 2px solid red;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 0.5rem;
  }

  /* Time Left For Wedding End */

  /* 3D Cube Slider Start */

  .swiper-button-next,
  .swiper-button-prev {
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    width: 30px;
    /* Adjusted width */
    height: 30px;
    /* Adjusted height */
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .swiper-container {
    width: 50%;
    /* Max width of 80% */
    height: 80vh;
    /* Height adjusted to 80% of the viewport height */
    max-height: 80vh;
    /* Ensures it doesn't exceed 80% of viewport height */
    margin: 0 auto;
    /* Center the container */
  }

  .swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    width: 80%;
    /* Adjusted width */
    height: 80%;
    /* Adjusted height */
    object-fit: cover;
    transition: transform 0.3s;
  }

  .swiper-slide img:hover {
    transform: scale(1.05);
  }

  @media screen and (max-width: 768px) {
    .swiper-container {
      width: 80%;
      /* Full width on mobile */
      height: 50vh;
      /* Reduced height for better visibility */
      max-height: none;
      /* Remove max height */
    }

    .swiper-slide img {
      width: 100%;
      /* Full width on mobile */
      height: auto;
      /* Auto height to maintain aspect ratio */
    }
  }

  /* 3D Cube Slider End */
</style>

<body>

  <!--Header Start-->

  <section class="relative bg-cover bg-center bg-no-repeat z-10"
    style="background-image: url('https://99invites.com/wp-content/uploads/2019/12/6-1.jpg');">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black"></div>
    <div class="container mx-auto px-4 py-16">
      <div class="grid grid-cols-3 gap-4">
        <!-- Column 1 -->
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1102f6e">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-f1eb2a9 elementor-widget elementor-widget-image">
              <div class="elementor-widget-container">
                <img decoding="async" fetchpriority="high" width="307" height="815"
                  src="https://99invites.com/wp-content/uploads/2019/12/WhatsApp_Image_2019-12-25_at_12-removebg-preview.png"
                  class="attachment-large size-large wp-image-3808" alt=""
                  srcset="https://99invites.com/wp-content/uploads/2019/12/WhatsApp_Image_2019-12-25_at_12-removebg-preview.png 307w, https://99invites.com/wp-content/uploads/2019/12/WhatsApp_Image_2019-12-25_at_12-removebg-preview-113x300.png 113w"
                  sizes="(max-width: 307px) 100vw, 307px">
              </div>
            </div>
          </div>
        </div>
        <!-- Column 2 -->
        <div
          class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f51cee7 ">
        </div>
        <!-- Column 3 -->
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7643519">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-844d34f elementor-widget elementor-widget-image">
              <div class="elementor-widget-container">
                <img decoding="async" width="307" height="815"
                  src="https://99invites.com/wp-content/uploads/2019/12/WhatsApp_Image_2019-12-25_at_12-removebg-preview-1.png"
                  class="attachment-large size-large wp-image-3809" alt=""
                  srcset="https://99invites.com/wp-content/uploads/2019/12/WhatsApp_Image_2019-12-25_at_12-removebg-preview-1.png 307w, https://99invites.com/wp-content/uploads/2019/12/WhatsApp_Image_2019-12-25_at_12-removebg-preview-1-113x300.png 113w"
                  sizes="(max-width: 307px) 100vw, 307px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Header End-->


  <!--Swetha & Dhanush Start-->

  <div class="flex flex-col bg-gradient-to-r py-5"
     style="background-image: url('{{ asset('assets/card2img/bg-start.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="slideInFromLeft">
          <div>
            <img decoding="async" loading="lazy" width="228" height="111" src="{{asset('assets/card2img/boat.png')}}" alt="">
          </div>
        </div>
        <div class="fadeIn delay-500 mt-4 md:mt-0">
          <div>
            <h2 class="text-3xl font-bold text-center text-white">Swetha & Dhanush</h2>
            <p class="text-lg text-center text-yellow-300 mt-2">Your wedding date here</p>
            <div class="flex justify-center mt-4">
              <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">RSVP</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Additional design elements -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Venue</h3>
          <p class="text-sm text-gray-600">1234 Wedding Avenue<br>City, State ZIP</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Date & Time</h3>
          <p class="text-sm text-gray-600">Saturday, 25th June 2024<br>10:00 AM - 4:00 PM</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Dress Code</h3>
          <p class="text-sm text-gray-600">Formal Attire</p>
        </div>
      </div>
    </div>
  </div>


  <!--Swetha & Dhanush End-->




  <!-- Main Section Shri Gajanan Namah Start -->

  <div id="main-section" class="flex flex-col items-center space-y-8 py-8">
    <!-- Header Image and Title -->
    <div class="w-full animate-fadeIn flex flex-col items-center space-y-4">
      <img decoding="async" loading="lazy" src="https://99invites.com/wp-content/uploads/2019/12/Untitled-2-1.png"
        alt="" class="w-64 h-auto rounded-lg shadow-md">
    </div>

    <!-- Ganesh Image -->
    <div class="w-full animate-fadeIn flex flex-col items-center space-y-4">
      <h2 class="text-center text-2xl text-red-700 font-bold">|| Shri Gajanan Namah ||</h2>
      <img src="{{asset('assets/card2img/ganesh ji.png')}}" alt=""
        class="w-32 h-32 rounded-full border-4 border-yellow-200 flex items-center justify-center overflow-hidden">
    </div>

    <!-- Section for Shri Balaji and Shri Shiv -->
    <div class="flex flex-col space-y-8 w-full">
      <div class="flex justify-around items-center space-x-4 animate-fadeIn">
        <!-- Shri Balaji -->
        <div class="flex flex-col items-center space-y-2">
          <div
            class="w-24 h-24 rounded-full border-4 border-yellow-200 flex items-center justify-center overflow-hidden">
            <img decoding="async" loading="lazy"
              src="https://99invites.com/wp-content/uploads/2019/12/30440-5-venkateswara-file-thumb.png" alt=""
              class="w-full h-full object-cover">
          </div>
          <h2 class="text-center text-xl font-bold text-red-700 ">|| Shri Balaji ||</h2>
        </div>
        <!-- Shri Shiv -->
        <div class="flex flex-col items-center space-y-2">
          <div
            class="w-24 h-24 rounded-full border-4 border-yellow-200 flex items-center justify-center overflow-hidden">
            <img decoding="async" loading="lazy"
              src="https://99invites.com/wp-content/uploads/2019/12/8e8e8463ab3d8d4a6a761c0d182d4de8.png" alt=""
              class="w-full h-full object-cover">
          </div>
          <h2 class="text-center text-xl font-bold text-red-700 ">|| Shri Shiv ||</h2>
        </div>
      </div>
    </div>

    <!-- Section for Wedding Details -->
    <div class="flex flex-col space-y-8 items-center animate-fadeIn">
      <!-- Bride -->
      <div class="flex flex-col items-center space-y-4">
        <div class="profile-frame">
          <!-- Frame image -->
          <img decoding="async" loading="lazy" src="{{asset('assets/card2img/bride.jpg')}}" alt="">
        </div>
        <div class="profile-details">
          <!-- Insert the bride's details -->
          <h2 class="text-2xl font-bold text-red-700">Chi. Sau. Swetha</h2>
          <h2 class="text-lg text-white mt-5">(BE Civil)</h2>
          <p class="text-base text-white">Granddaughter of Shri Zumbarlalji Iyer,<br>and Daughter of Mr. Shantaram &
            Mrs. Shubhangi
            Iyer</p>
        </div>
      </div>
      <!-- Getting Married With -->
      <div class="text-center">
        <h2 class="text-4xl font-bold text-red-700 ">Getting Married <br>With</h2>
      </div>
      <!-- Groom -->
      <div class="flex flex-col items-center space-y-4">
        <div class="profile-frame">
          <!-- Frame image -->
          <img decoding="async" loading="lazy" src="{{asset('assets/card2img/Groom.jpg')}}" alt="">
        </div>
        <div class="profile-details">
          <!-- Insert the groom's details -->
          <h2 class="text-2xl font-bold text-red-700">Chi. Dhanush</h2>
          <h2 class="text-lg text-white mt-5">(<span class="font-bold">Doctor</span>)</h2>
          <p class="text-base text-white">Grandson of Late Shri Shantilalji Sandur,<br>and Son of Mr. Kantilal & Mrs.
            Manisha
            Sandur</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Section Shri Gajanan Namah End -->

  <!-- Wedding Ceremony Start -->

  <div class="text-center px-8 py-6 mx-auto bg-purple-700 shadow-lg"
    style="background-image: url('./card2img/purple-bg.jpg'); background-size: cover; background-position: center;">
    <img src="{{asset('assets/card2img/output-onlinepngtools-1.png')}}" class="w-600 h-83 md:w-auto md:h-auto mx-auto"
      alt="Wedding Banner">
    <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-10 mt-6">
      <img src="{{asset('assets/card2img/kalash.png')}}" class="w-16 h-16 md:w-20 md:h-20 opacity-80" alt="Kalash">
      <h1 class="text-4xl text-amber-600 font-bold mt-4 md:mt-0">Wedding Ceremony</h1>
      <img src="{{asset('assets/card2img/kalash.png')}}" class="w-16 h-16 md:w-20 md:h-20 opacity-80 transform" alt="Kalash">
    </div>
    <p class="mt-6 text-lg leading-relaxed text-white">Swetha & Dhanush are getting married on <time
        datetime="2020-06-30T10:00">30th June 2020 at 10am</time>. Your presence is the best gift we hope to receive!
    </p>
  </div>

  <!-- Wedding Ceremony End -->


  <!-- Warm Regards Start -->

  <div class="p-4 lg:p-8 background-shadow">
    <div class="relative">
      <img src="{{asset('assets/card2img/tamp-bg.png')}}" class="w-full h-auto rounded-lg">
      <img src="{{asset('assets/card2img/tamp-bg.png')}}" class="absolute top-0 left-0 w-full h-auto rounded-lg">
    </div>

    <!-- Centering the grid of images -->
    <div class="flex justify-center lg:justify-end mt-12 lg:mt-28 lg:ml-96 pr-8">
      <div class="grid grid-cols-2 lg:grid-cols-4 ml-10">
        <img src="{{asset('assets/card2img/output-onlinepngtools-2.png')}}" class="w-full h-auto rounded-lg fade-in-left">
        <img src="{{asset('assets/card2img/output-onlinepngtools.png')}}" class="w-full h-auto rounded-lg fade-in-right">
        <!-- Add more images here if needed -->
      </div>
    </div>

    <p class="text-center text-amber-600 text-5xl mt-4 lg:mt-8">Warm Regards</p>

    <div class="flex flex-wrap justify-center mt-10 sm:mt-20 lg:mt-20 gap-5 px-4 lg:px-8">
      <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
        <div class="w-full mb-4 lg:mb-0">
          <div class="border-2 border-blue-500 rounded-full overflow-hidden">
            <img
              src="https://99invites.com/wp-content/uploads/2019/09/WhatsApp-Image-2019-09-18-at-5.49.14-PM-150x150.jpeg"
              class="w-full h-auto rounded-full" alt="Digital wedding invitation shows groom father">
          </div>
        </div>
        <div>
          <p class="text-center mt-5">Shri Shantaram Gopal Iyer<br>(Bride’s Father)</p>
        </div>
      </div>
      <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
        <div class="w-full mb-4 lg:mb-0">
          <div class="border-2 border-blue-500 rounded-full overflow-hidden">
            <img
              src="https://99invites.com/wp-content/uploads/2019/09/WhatsApp-Image-2019-09-18-at-5.49.13-PM-1-150x150.jpeg"
              class="w-full h-auto rounded-full" alt="Digital wedding invitation shows groom mom">
          </div>
        </div>
        <div>
          <p class="text-center mt-5">Smt. Shubhangi Shantaram Iyer<br>(Bride’s Mother)</p>
        </div>
      </div>
    </div>

    <div class="flex flex-wrap justify-center mt-10 sm:mt-20 lg:mt-10 gap-5 px-4 lg:px-8">
      <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
        <div class="w-full mb-4 lg:mb-0">
          <div class="border-2 border-blue-500 rounded-full overflow-hidden">
            <img
              src="https://99invites.com/wp-content/uploads/2019/09/WhatsApp-Image-2019-09-18-at-5.49.15-PM-150x150.jpeg"
              class="w-full h-auto rounded-full" alt="Digital wedding invitation shows bride father">
          </div>
        </div>
        <div>
          <p class="text-center mt-5">Shri Pravin Shantaram Iyer<br>(Bride’s Brother)</p>
        </div>
      </div>
      <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4">
        <div class="w-full mb-4 lg:mb-0">
          <div class="border-2 border-blue-500 rounded-full overflow-hidden">
            <img
              src="https://99invites.com/wp-content/uploads/2019/09/WhatsApp-Image-2019-09-18-at-5.49.14-PM-1-150x150.jpeg"
              class="w-full h-auto rounded-full" alt="Digital wedding invitation shows groom sister">
          </div>
        </div>
        <div>
          <p class="text-center mt-5">Smt Pradnya Pravin Iyer<br>(Bride’s Sister In Law)</p>
        </div>
      </div>
    </div>

  </div>


  <!-- Warm Regards End -->


  <!-- From Iyer Family Start -->

  <div class="bg-gradient-to-b from-amber-400 via-yellow-300 to-yellow-400 py-4">
    <div class="relative p-4 rounded-lg shadow-lg" style="
    background: url('{{ asset('assets/card2img/bg-fromlyer.jpg') }}') no-repeat center center;
    background-size: cover;
">
      <h2
        class="relative z-10 text-center font-bold text-3xl lg:text-4xl text-amber-900 py-2 bg-yellow-200 bg-opacity-75 tracking-wide rounded-md shadow-md">
        From Iyer Family
      </h2>
    </div>
  </div>

  <!-- From Iyer Family End -->

  <!-- Image Start -->

  <section class="py-8 relative" style="
    background: url('{{ asset('assets/card2img/bg-white.jpg') }}') no-repeat center center;
    background-size: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
">
    <div class="container mx-auto">
      <div class="flex flex-no-wrap justify-center items-center overflow-x-auto">
        <img src="{{asset('assets/card2img/elephant.png')}}" class="w-24 sm:w-48 md:w-64 lg:w-80 h-auto rounded-lg mx-2" alt="">
        <img src="{{asset('assets/card2img/music.png')}}" class="w-24 sm:w-48 md:w-64 lg:w-80 h-auto rounded-lg mx-2" alt="">
        <img src="{{asset('assets/card2img/music2.png')}}" class="w-24 sm:w-48 md:w-64 lg:w-80 h-auto rounded-lg mx-2" alt="">
      </div>
    </div>
  </section>

  <!-- Image End -->



  <!-- Wedding Events Start -->

  <section class="py-8" style="
    background: url('{{ asset('assets/card2img/bg-event.jpg') }}') no-repeat center center;
    background-size: cover;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
">
    <h1 class="text-center text-red-600 font-bold text-4xl">Wedding Events</h1>
    <div class="container mx-auto px-4 py-8 gap-x-4">
      <div class="col-span-full relative w-full">
        <div class="bg-white bg-opacity-75 relative rounded-lg shadow-lg overflow-hidden hover-grow"
        style="background-image: url('{{ asset('assets/card2img/leaf.jpg') }}'); background-size: cover; background-position: center;">
          <div class="bg-gradient-to-t from-black via-transparent to-black bg-opacity-70 p-8 md:p-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-amber-500 text-center pb-2 border-b-4 border-amber-500">
              Muhurat</h2>
            <ul>
              <li class="flex items-center mb-4">
                <i class="fas fa-calendar-check text-amber-500 mr-3"></i>
                <span class="text-white font-bold">Wednesday, 11th Feb 2020</span>
              </li>
              <li class="flex items-center mb-4">
                <i class="fas fa-clock text-amber-500 mr-3"></i>
                <span class="text-white font-bold">Morning 10:45 AM</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-map-marker-alt text-amber-500 mr-3"></i>
                <span class="text-white font-bold">Suryavanshi Kshatriya Auditorium and Banquet Hall, College Sameer,
                  Dadar (W), Mumbai - 000028.</span>
              </li>
            </ul>
          </div>
          <!-- Decorative elements -->
          <div class="absolute top-0 left-0 w-12 h-12 bg-amber-500 rounded-br-lg"></div>
          <div class="absolute bottom-0 right-0 w-12 h-12 bg-amber-500 rounded-tl-lg"></div>
          <div class="absolute bottom-0 left-0 w-12 h-12 bg-amber-500 rounded-tr-lg"></div>
          <div class="absolute top-0 right-0 w-12 h-12 bg-amber-500 rounded-bl-lg"></div>
        </div>
      </div>
    </div>

    <div class="container mx-auto px-4 py-8 gap-x-4">
      <div class="col-span-full relative w-full">
        <div class="bg-white bg-opacity-75 relative rounded-lg shadow-lg overflow-hidden hover-grow"
        style="background-image: url('{{ asset('assets/card2img/leaf.jpg') }}'); background-size: cover; background-position: center;">
          <div class="bg-gradient-to-t from-black via-transparent to-black bg-opacity-70 p-8 md:p-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-amber-500 text-center pb-2 border-b-4 border-amber-500">
              Affection Meal And Reception</h2>
            <ul>
              <li class="flex items-center mb-4">
                <i class="fas fa-calendar-check text-amber-500 mr-3"></i>
                <span class="text-white font-bold">Wednesday, 11th Feb 2020</span>
              </li>
              <li class="flex items-center mb-4">
                <i class="fas fa-clock text-amber-500 mr-3"></i>
                <span class="text-white font-bold">Morning 10:45 AM</span>
              </li>
              <li class="flex items-center">
                <i class="fas fa-map-marker-alt text-amber-500 mr-3"></i>
                <span class="text-white font-bold">Suryavanshi Kshatriya Auditorium and Banquet Hall, College Sameer,
                  Dadar (W), Mumbai - 000028.</span>
              </li>
            </ul>
          </div>
          <!-- Decorative elements -->
          <div class="absolute top-0 left-0 w-12 h-12 bg-amber-500 rounded-br-lg"></div>
          <div class="absolute bottom-0 right-0 w-12 h-12 bg-amber-500 rounded-tl-lg"></div>
          <div class="absolute bottom-0 left-0 w-12 h-12 bg-amber-500 rounded-tr-lg"></div>
          <div class="absolute top-0 right-0 w-12 h-12 bg-amber-500 rounded-bl-lg"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Wedding Events End -->


  <!-- Time Left For Wedding Start -->

  <div class="daytime flex items-center justify-center min-h-screen relative">
    <div class="countdown-container text-center relative z-10">
      <h1 class="text-3xl md:text-4xl font-bold mb-6 text-red-600">Time Left For Wedding</h1>
      <div class="flex flex-wrap justify-center">
        <div class="circle flex flex-col items-center">
          <div id="days" class="font-bold text-red-600 text-2xl md:text-4xl">00</div>
          <div class="text-red-600 text-sm md:text-base">Days</div>
        </div>
        <div class="circle flex flex-col items-center">
          <div id="hours" class="font-bold text-red-600 text-2xl md:text-4xl">00</div>
          <div class="text-red-600 text-sm md:text-base">Hrs</div>
        </div>
        <div class="circle flex flex-col items-center">
          <div id="minutes" class="font-bold text-red-600 text-2xl md:text-4xl">00</div>
          <div class="text-red-600 text-sm md:text-base">Mins</div>
        </div>
        <div class="circle flex flex-col items-center">
          <div id="seconds" class="font-bold text-red-600 text-2xl md:text-4xl">00</div>
          <div class="text-red-600 text-sm md:text-base">Secs</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Time Left For Wedding End -->


  <!-- Wedding Venue Start -->

  <div class="mx-auto bg-white shadow-lg rounded-lg overflow-hidden my-6">
    <div class="bg-red-600 p-4 text-center">
      <img src="{{asset('assets/card2img/658711_indian-marriage-mandap-clipart-png-min-1024x293.png')}}" alt="Wedding Banner"
        class="w-full object-cover">
    </div>
    <div class="p-6">
      <h2 class="text-3xl text-red-600 font-bold mb-4">Wedding Venue</h2>
      <p class="text-lg mb-4">
        Suryavanshi Kshatriya Auditorium and Banquet Hall, College Sameer, Dadar (W), Mumbai – 000028.
      </p>
      <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div class="w-full md:w-3/4 h-64 md:h-auto mb-4 md:mb-0">
          <iframe class="w-full h-full rounded-lg border border-gray-300"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15136.710459413025!2d72.83611930951397!3d19.016344723700055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8ad5b3198910e97!2sSuryavanshi%20Kshatriya%20Auditorium%20and%20Banquet%20Hall!5e0!3m2!1sen!2sin!4v1625006851369!5m2!1sen!2sin"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="flex justify-center md:justify-start">
          <a href="https://www.google.com/maps?q=2RFM+8J" target="_blank"
            class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-md transition duration-200">
            Get Directions
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Wedding Venue End -->



  <!-- Pre Wedding Shoot Start -->

  <div class="mx-auto bg-white shadow-lg rounded-lg overflow-hidden my-6">
    <!-- Image Section -->
    <div>
      <img class="w-full h-auto" src="https://99invites.com/wp-content/uploads/2019/12/unnamed-2.png"
        alt="Banner Image">
    </div>

    <!-- Heading Section -->
    <div class="p-6 text-center">
      <h2 class="text-3xl font-bold mb-4 animate__animated animate__fadeInDown">Pre Wedding Shoot</h2>
    </div>

    <div class="flex justify-center items-center">

      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{asset('assets/card2img/gallery-1.jpg')}}" alt="Image 1">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('assets/card2img/gallery-2.jpg')}}" alt="Image 2">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('assets/card2img/gallery-3.jpg')}}" alt="Image 3">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('assets/card2img/gallery-4.jpg')}}" alt="Image 4">
          </div>
          <!-- Add more slides as needed -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

    </div>


    <!-- Footer Image Section -->
    <div class="p-6">
      <img class="w-full h-auto" src="https://99invites.com/wp-content/uploads/2019/12/output-onlinepngtools-4-1.png"
        alt="Footer Image">
    </div>
  </div>

  <!-- Pre Wedding Shoot End -->



  <!-- Warm Welcome Start -->

  <div class="bg-red-100 p-6 rounded-lg shadow-md">
    <div class="text-center">
      <h1 class="text-5xl font-bold text-red-600 mb-4">Warm Welcome</h1>
      <div
        class="bg-yellow-200 py-6 px-8 rounded-lg w-full md:w-3/5 mx-auto flex flex-col items-center justify-center space-y-6">
        <div class="w-32 h-32 mb-2 rounded-full overflow-hidden border-4 border-white flex items-center justify-center">
          <img src="{{asset('assets/card2img/Groom.jpg')}}" alt="Profile Picture" class="w-full h-full object-cover rounded-full">
        </div>
        <p class="text-lg font-semibold">Pravin Shantaram Iyer</p>
        <div class="flex justify-center">
          <button class="bg-green-500 text-white px-6 py-2 text-lg rounded-md flex items-center">
            <span class="material-icons mr-2">call</span>
            Call
          </button>
        </div>
      </div>
    </div>
    <div class="mt-8">
      <h2 class="text-4xl font-semibold mb-2 text-center text-red-600">Special Request</h2>
      <div class="flex justify-center">
        <p class="text-xl">Shreya Naitik Vedant</p>
      </div>
    </div>
  </div>

  <!-- Warm Welcome End -->

  <!-- Footer Start -->
  <footer class="bg-cover bg-center h-64" style="background-image: url('{{ asset('assets/card2img/leaf.jpg') }}');"> 
    <div class="bg-black bg-opacity-60 hover:bg-opacity-80 transition duration-300 h-full flex items-center">
      <div class="container mx-auto text-center text-white">
        <a href="#"
          class="text-white underline text-lg inline-flex items-center hover:text-green-400 transition duration-300">
          <i class="fab fa-whatsapp mr-2 transform hover:scale-125 transition duration-300"></i>
          Click here
        </a>
        <span class="text-lg">to create your Digital Invitation.</span>
        <p class="mt-4">Available 24/7 | Easy to Use | Share Instantly</p>
        <div class="mt-4 space-x-3">
          <i class="fas fa-phone-alt"></i>
          <i class="fas fa-envelope"></i>
          <i class="fas fa-map-marker-alt"></i>
        </div>
      </div>
    </div>
  </footer>

  <!-- Footer End -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!--Home Button Start-->

<a href="{{route('home')}}">
<button class="fixed bottom-4 right-4 w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600" aria-label="Home">
    <i class="fas fa-home text-2xl"></i>
</button>
</a>

<!--Home Button End-->





  <!-- Include Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    const countdown = () => {
      const countDate = new Date("July 30, 2024 00:00:00").getTime();
      const now = new Date().getTime();
      const gap = countDate - now;

      const second = 1000;
      const minute = second * 60;
      const hour = minute * 60;
      const day = hour * 24;

      const textDay = Math.floor(gap / day);
      const textHour = Math.floor((gap % day) / hour);
      const textMinute = Math.floor((gap % hour) / minute);
      const textSecond = Math.floor((gap % minute) / second);

      document.getElementById("days").innerText = textDay;
      document.getElementById("hours").innerText = textHour;
      document.getElementById("minutes").innerText = textMinute;
      document.getElementById("seconds").innerText = textSecond;
    };

    setInterval(countdown, 1000);

    var swiper = new Swiper('.swiper-container', {
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      autoplay: {
        delay: 3000,  // Auto-slide delay in milliseconds
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true,  // Enable infinite looping
    });

  </script>

</body>

</html>