<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday 3</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />

    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />


    <!--Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <style>
        body {
            background-image: url({{asset('assets/Img/3background.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Helvetica', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .flip-container {
            perspective: 1000px;
            width: 80%;
            max-width: 400px;
            height: 60vh;
            margin: 5em auto;
        }

        .flip-container.hover .flipper {
            transform: rotateY(180deg);
        }

        .flipper {
            transition: 0.4s;
            transform-style: preserve-3d;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .front, .back {
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #1F1F1F;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .front {
            z-index: 2;
            transform: rotateY(0deg);
            background-image: url({{asset('assets/Img/bday3card.jpg')}});
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: lighter;
            text-align: center;
        }

        .back {
            transform: rotateY(180deg);
            background-color: #323232;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url({{asset('assets/Img/back1.webp')}});
        }

        h1, h3, p {
            color: #0f0f0d;
            text-align: center;
            font-weight: lighter;
            margin: 0.5em 0;
        }

        h1 {
            font-size: 1.5em;
        }

        .letter {
            font-size: 2em;
            color:black;
            font-weight: lighter;
            animation-duration: 2s;
            animation-name: verGroot;
            animation-iteration-count: 1;
            animation-delay: 0.5s;
            transition-timing-function: ease-in-out;
            text-shadow: 2px 2px 4px #000000;
        }

        .kader {
            background: rgba(227, 174, 174, 0.8);
            padding: 2em;
            width: 80%;
            margin: 2em auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            height: 100% auto;
        }

        .baloons {
            width: 30%;
            display: block;
            margin: 1em 0;
            animation-duration: 2s;
            animation-name: spin;
            animation-iteration-count: infinite;
            transition-timing-function: ease-in-out;
        }

        h3 {
            font-size: 1.5em;
            text-transform: uppercase;
        }

        h3:hover {
            color: rgb(9, 9, 8);
            transform: scale(1.15);
        }

        p.wens {
            font-family: 'Homemade Apple', cursive;
            font-size: 1.2em;
            color: #1F1F1F;
            line-height: 1.5em;
            margin: 1em 0;
        }

        @keyframes verGroot {
            0% { transform: scale(0.1); }
            25% { transform: scale(2); }
            50% { transform: scale(0.5); }
            75% { transform: scale(2); }
            100% { transform: scale(1); }
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(720deg); }
        }

        @media (max-width: 600px) {
            .flip-container {
                width: 90%;
                height: 50vh;
            }

            h1 {
                font-size: 1.2em;
            }

            .letter {
                font-size: 1.5em;
            }

            .kader {
                padding: 1em;

            }
            .card-content p {
                font-size: 1.2rem;
            }

            h3 {
                font-size: 1.2em;
            }

            p.wens {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
<div class="flip-container" id="flip-container">
    <div class="flipper">
        <div class="front">
            <p class="letter">You are invited to Olivia's birthday celebration</p>
        </div>
        <div class="back">
            <img class="baloons" src="https://s-media-cache-ak0.pinimg.com/originals/d9/c1/f5/d9c1f506f588badeb353889ae4f36329.png" alt="Balloons">
            <div class="kader">
                <h1>It's time to party!</h1>
                <h3>Join us to celebrate Olivia's 3rd birthday!</h3>
                <p>Saturday, October 17th at 2 p.m.</p>
                <p>123 Anywhere St., Any City, ST 12345</p>
                <p>RSVP to Lillian Pratt (Carey's Mom)</p>
                <p>123-456-7890</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let flipContainer = document.getElementById("flip-container");
        let isFlipped = false;

        setInterval(function() {
            flipContainer.classList.toggle("hover");
            isFlipped = !isFlipped;
            setTimeout(function() {
                flipContainer.classList.toggle("hover");
            }, isFlipped ? 3000 : 2000);
        }, 6000);
    });
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
