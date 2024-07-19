<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emma's Birthday</title>
    <style>
        body {
            background-image: url({{asset('assets/Img/bday2.webp')}});
            font-family: 'Arial, sans-serif';
            background-color: #8B5C5C;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {

            width: 90%;
            max-width: 450px;

            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 0 auto;

            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 15px;
            background-color: #f8c5b6;
            background-image: url({{asset('assets/Img/bday2back.jpg')}});

        }

        .header h1 {
            color: #0d0807;
            font-size: 2em;
            margin: 0;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .content img {
            border-radius: 10px;
            width: 80%;
            max-width: 300px;
            animation: wave 5s infinite;
        }

        @keyframes wave {
            0%, 100% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(2deg);
            }
            50% {
                transform: rotate(-2deg);
            }
            75% {
                transform: rotate(2deg);
            }
        }

        .text {
            margin-top: 20px;
        }

        .date, .day, .year {
            color: #140a06;
            font-size: 1.6em;
        }

        .save-the-date {
            margin-top: 10px;
            font-weight: bold;
            font-size: 1.2em;
        }

        .details {
            font-size: 1.7em;
            color: #100d0d;
            margin-top: 10px;
        }

        @media (max-width: 300px) {
            .card {
                max-width: 70%;

            }
        }


        @media (min-width: 600px) {
            .card {
                width: 80%;
            }
        }

        @media (min-width: 768px) {
            .card {
                width: 60%;
            }
        }

        @media (min-width: 992px) {
            .card {
                width: 50%;
            }
        }

        @media (min-width: 1200px) {
            .card {
                width: 40%;
            }
        }
    </style>
</head>
<body>
<div class="card">
    <div class="header">
        <h1 style="text-align: center; margin-top: 10px;">Emma's Birthday</h1>
    </div>
    <div class="content">
        <img src="{{asset('assets/Img/baby2.jpg')}}" alt="Emma with a birthday cake">
        <div class="text">
            <p><span class="date">OCT</span> <span class="day">03</span> <span class="year">2023</span></p>
            <p class="save-the-date">Save the Date!</p>
            <p>123 Anywhere St., Any City, ST 12345</p>
            <p>RSVP to Lillian Pratt (Carey's Mom) <br> 123-456-7890</p>
        </div>
    </div>
</div>
</body>
</html>
