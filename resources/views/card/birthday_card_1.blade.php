<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bday 1</title>

</head>
<body>
<style>
    body {

        margin: 0;
        font-family: 'Arial', sans-serif;
        position: relative;
        background-image: url({{asset('assets/Img/baloon3.jpg')}}); /* Use high-resolution image */
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        overflow: hidden;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
    }

    .invitation-card {
        background-color: rgba(154, 233, 247, 0.8);
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        text-align: center;
        background-image: url({{asset('assets/Img/background.jpg')}}); /* Use high-resolution image */
        background-size: cover;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .invitation-card img {
        border-radius: 50%;
        max-width: 150px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
    }

    .invitation-card h1 {
        color: rgb(14, 14, 15);
        font-size: 28px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
    }

    .invitation-card h2 {
        color: rgb(2, 3, 4);
        font-size: 22px;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
    }

    .invitation-card p {
        margin: 5px 0;
        font-size: 18px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);
    }

    #canvas1 {
        background: rgba(0, 0, 0, 0);
        height: 100vh;
        width: 100vw;
        margin: 0;
        top: 0;
        left: 0;
        z-index: 100;
        position: absolute;
    }

    @media (max-width: 768px) {
        .invitation-card {
            max-width: 90%;
            padding: 15px;
            margin: 10px auto;
        }

        .invitation-card h1 {
            font-size: 24px;
        }

        .invitation-card h2 {
            font-size: 20px;
        }

        .invitation-card p {
            font-size: 16px;
        }

        .invitation-card img {
            max-width: 120px;
        }
    }

    @media (max-width: 480px) {
        .invitation-card {
            max-width: 90%;
            padding: 10px;
            margin: 10px auto;
            margin-top: 30px;
        }

        .invitation-card h1 {
            font-size: 20px;
        }

        .invitation-card h2 {
            font-size: 18px;
        }

        .invitation-card p {
            font-size: 14px;
            text-rendering: geometricPrecision;
        }

        .invitation-card img {
            max-width: 100px;
        }
    }
</style>

<div class="invitation-card">
    <canvas id="canvas1"></canvas>
    <img src="{{asset('assets/Img/baby.jpg')}}" alt="Baby Photo"> <!-- Use high-resolution image -->
    <h1>It's time to party!</h1>
    <h2>Join us to celebrate Olivia's 3rd birthday!</h2>
    <p>Saturday, October 17th at 2 p.m.</p>
    <p>123 Anywhere St., Any City, ST 12345</p>
    <p>RSVP to Lillian Pratt (Carey's Mom)</p>
    <p>123-456-7890</p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>
    const canvas1 = document.getElementById('canvas1');
    const ctx = canvas1.getContext('2d');
    canvas1.width = window.innerWidth;
    canvas1.height = window.innerHeight;

    const particlesArray = [];
    window.addEventListener('resize', function () {
        canvas1.width = window.innerWidth;
        canvas1.height = window.innerHeight;
    });

    const mouse = {
        x: null,
        y: null
    };

    canvas1.addEventListener('mousemove', function (event) {
        mouse.x = event.x;
        mouse.y = event.y;
        for (let i = 0; i < 5; i++) {
            particlesArray.push(new Particle());
        }
    });

    class Particle {
        constructor() {
            this.x = mouse.x;
            this.y = mouse.y;
            this.size = Math.random() * 5 + 1;
            this.speedX = Math.random() * 3 - 1.5;
            this.speedY = Math.random() * 3 - 1.5;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;
            if (this.size > 0.1) {
                this.size -= 0.1;
            }
        }

        draw() {
            ctx.fillStyle = 'white';
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function handleParticles() {
        for (let i = 0; i < particlesArray.length; i++) {
            particlesArray[i].update();
            particlesArray[i].draw();
            if (particlesArray[i].size <= 0.1) {
                particlesArray.splice(i, 1);
                i--;
            }
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas1.width, canvas1.height);
        handleParticles();
        requestAnimationFrame(animate);
    }

    animate();
</script>
</body>
</html>
