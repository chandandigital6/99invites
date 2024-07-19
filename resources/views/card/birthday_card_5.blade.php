<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday 5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>

    <style>


        body {
            background: radial-gradient(#968550, #f8a90c);
            background-image: url({{asset('assets/Img/bday5back.jpg')}});
            background-size: cover;
            background-attachment: fixed;
            overflow: hidden;
            justify-content: center;
            align-items: center;
            display: flex;
        }



        .invitation-card {

            width: 90%;
            max-width: 450px;
            background-color: rgba(154, 233, 247, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            background-image: url({{asset('assets/Img/bday5card.jpg')}});
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 20px;

        }

        .invitation-card img {
            border-radius: 50%;
            width: 60%;
            height: auto;
            box-shadow: 0 4px 8px rgba(130, 108, 108, 0.2);
            margin-bottom: 20px;
        }

        .invitation-card h1 {
            font-size: 2.5em;
            margin: 20px 0;
            color: #050505;
        }

        .invitation-card h2 {
            font-size: 1.9em;
            margin: 10px 0;
            color: #000000;
        }

        .invitation-card p {
            font-size: 1.2em;
            margin: 5px 0;
            color: #000000;
        }

        @media (max-width: 767px) {
            .invitation-card {
                max-width: 300px;
                padding: 9px;

            }

            .invitation-card img {
                width: 50%;
            }

            .invitation-card h1 {
                font-size: 2em;
            }

            .invitation-card h2 {
                font-size: 1.5em;
            }

            .invitation-card p {
                font-size: 1em;
            }
        }

        @media (max-width: 500px) {
            .invitation-card {
                max-width: 90%;
                padding: 8px;
                margin-top: 60px;

            }

            .invitation-card img {
                width: 80%;
            }

            .invitation-card h1 {
                font-size: 1.5em;
            }

            .invitation-card h2 {
                font-size: 1.2em;
            }

            .invitation-card p {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
<div class="invitation-card">
    <h1>You're invited to my<br>BIRTHDAY PARTY</h1>
    <div class="details">
        <div class="date">
            <p>JUN</p>
            <p class="day">17</p>
        </div>
        <div class="message">
            <p>WELCOME TO MY PARTY!</p>
            <p class="small-text">123 Anywhere St., Any City, ST 12345 RSVP to Lillian Pratt (Carey's Mom) 123-456-7890 </p>
        </div>
        <div class="time">
            <p>FRIDAY</p>
            <p class="hour">6:00</p>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script>

</script>
</body>
</html>















