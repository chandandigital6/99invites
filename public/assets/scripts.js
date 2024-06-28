//Toggle Button

document.addEventListener('DOMContentLoaded', function () {
    var mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    var mobileMenu = document.querySelector('.mobile-menu');

    mobileMenuToggle.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
});



//Testimonial

let currentIndex = 0;

function showSlide(index) {
    const slider = document.getElementById('slider');
    const totalSlides = slider.children.length;
    if (index >= totalSlides) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
    } else {
        currentIndex = index;
    }
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function prevSlide() {
    showSlide(currentIndex - 1);
}


//toggleAccordion

function toggleAccordion(index) {
    const content = document.getElementById(`content-${index}`);
    const icon = document.getElementById(`icon-${index}`);

    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        content.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

// Set the date you're counting down to
const countDownDate = new Date("Jun 30, 2024 00:00:00").getTime();

// Update the countdown every second
const x = setInterval(function () {
    // Get the current date and time
    const now = new Date().getTime();

    // Calculate the distance between now and the countdown date
    const distance = countDownDate - now;

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown numbers
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // If the countdown is over, display a message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "<p class='text-3xl font-semibold text-red-500'>EXPIRED</p>";
    }
}, 1000); // Update every second



