<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Arial, sans-serif';
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            background: url({{asset('assets/img/gatepic.jpg')}}) no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .invitation {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            padding: 20px;
            margin: 20px 0;
        }
        h1, h2 {
            color: #ffcc00;
            margin: 10px 0;
            font-size: 2.5em;
        }
        p {
            color: #f1f1f1;
            margin: 10px 0;
            font-size: 1.2em;
        }
        .details {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
        }
        .details div {
            text-align: center;
            margin: 10px 0;
        }
        @media (min-width: 600px) {
            .details {
                flex-direction: row;
                justify-content: space-around;
            }
            .details div {
                text-align: center;
                margin: 0 10px;
            }
        }
        @media (max-width: 300px) {
            h1, h2 {
                font-size: 1.5em;
            }
            p {
                font-size: 1em;
            }
            .invitation {
                padding: 15px;
            }
            #map, #contact-details {
                width: 100%;
                text-align: center;
            }
        }
        @media (max-width: 480px) {
            h1, h2 {
                font-size: 1.8em;
            }
            p {
                font-size: 1em;
            }
            .invitation {
                padding: 15px;
            }
        }
        @media (min-width: 768px) {
            h1, h2 {
                font-size: 3em;
            }
            p {
                font-size: 1.3em;
            }
        }
        .card {
            background: rgba(94, 92, 92, 0.8);
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            margin: 15px 0; /* Add margin between cards */
        }
        .card-body {
            padding: 5px;
            color: #8c7d7d20;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Ensure spacing is consistent */
        }
        .card-title {
            text-align: center;
            font-size: 1.8em;
            color: #f1f1f1;
        }
        .card-text {
            text-align: center;
            font-size: 1.3em;
            color: rgb(251, 251, 251);
        }
        .container {
            padding: 0 10px; /* Add padding to the container */
        }
        .row {
            margin: 0 -10px; /* Adjust the row margin */
        }
        .col-sm-6.col-lg-4 {
            padding: 0 10px; /* Adjust the column padding */
        }
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Family Name Start */
        .name-box {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically in the center */
            flex-wrap: wrap; /* Allow items to wrap to the next line on smaller screens */
            padding: 20px; /* Add padding for spacing */
        }
        .Baalgeet  .text{
            background-color: rgb(119, 5, 5);
            font-size: 1.5em;
        }
        #map {
            display: flex;
            width: 100%;
            height: 300px;
            border-radius: 8px;
            overflow: hidden;
        }
        #contact-details {
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: #456687;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>


@foreach($sadiCard  as $sadi)


<div class="invitation">
    <img src="{{asset('storage/'.$sadi->image)}}" width="20%" height="20%" alt="Ganesh Image">
    <p>
        {!! $sadi->mantra !!}

    </p>
    <h1>{{$sadi->m_name}}</h1>
    <h2>and</h2>
    <h1>{{$sadi->f_name}}</h1>
    <p>{!! $sadi->in_request !!}</p>
    @php

$sadi->day_of_week = \Illuminate\Support\Carbon::parse($sadi->data_and_time)->format('l'); // 'l' formats the day as a full name (e.g., 'Saturday')
$sadi->formatted_date_time = \Illuminate\Support\Carbon::parse($sadi->data_and_time)->format('l, F j, Y \a\t h:i A');

    @endphp
    <div class="details">
        <div>
            <p><strong>{{ $sadi->day_of_week }}</strong></p>
            <p>{{ $sadi->formatted_date_time }}</p>
        </div>
        <div>
            <p><strong>LICERIA HOTEL</strong></p>
            <p>{!! $sadi->venue_address !!}</p>
        </div>
        <div>
            <p><strong>Marriage</strong></p>
            <p>at {{ $sadi->formatted_date_time }}</p>
        </div>
    </div>

    <p>Thank you all for celebrating with us</p>
    <p><em>Marriage to follow</em></p>
</div>
@endforeach

<!-- Cards Start for all functions -->
@foreach($sadiCard as $sadi)
    @foreach($sadi->sadiCardDetails as $card)

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <img src="{{asset('storage/'.$card->haldi_image)}}" alt="Haldi" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{$card->haldi_title}}</h3>
                    <p class="card-text">{!! $card->haldi_msg !!}</p>
                    <p class="card-text">{{$card->haldi_date_time}}<br>
                    {{$card->haldi_venue}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <img src="{{asset('storage/'.$card->mehndi_image)}}" alt="Haldi" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{$card->mehndi_title}}</h3>
                    <p class="card-text">{!! $card->mehndi_msg !!}</p>
                    <p class="card-text">{{$card->mehndi_date_time}}<br>
                        {{$card->mehndi_venue}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <img src="{{asset('storage/'.$card->sangeet_image)}}" alt="Haldi" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{$card->sangeet_title}}</h3>
                    <p class="card-text">{!! $card->sangeet_msg !!}</p>
                    <p class="card-text">{{$card->sangeet_date_time}}<br>
                        {{$card->sangeet_venue}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <img src="{{asset('storage/'.$card->barat_image)}}" alt="Haldi" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{$card->barat_title}}</h3>
                    <p class="card-text">{!! $card->barat_msg !!}</p>
                    <p class="card-text">{{$card->barat_date_time}}<br>
                        {{$card->barat_venue}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <img src="{{asset('storage/'.$card->vidai_image)}}" alt="Haldi" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{$card->vidai_title}}</h3>
                    <p class="card-text">{!! $card->vidai_msg !!}</p>
                    <p class="card-text">{{$card->vidai_date_time}}<br>
                        {{$card->vidai_venue}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <img src="{{asset('storage/'.$card->reception_image)}}" alt="Haldi" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">{{$card->reception_title}}</h3>
                    <p class="card-text">{!! $card->reception_msg !!}</p>
                    <p class="card-text">{{$card->reception_date_time}}<br>
                        {{$card->reception_venue}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cards end -->

<div class="Baalgeet">

    <div class="text">{!! $card->child_msg !!}</div>

</div>

<!-- Family Name Start -->
<div class="name-box">
    <div class="cardtext">
        <div class="card-body">
            <h3 class="card-title">{{$card->f_family_title_name}}</h3>
            <p class="card-text">{{$card->f_family_membar_name}}</p>
            <p class="card-text">Mrs. Sakshi Puri</p>
        </div>
    </div>
    <div class="cardtext">
        <div class="card-body">
            <h3 class="card-title">{{$card->m_family_title_name}}</h3>
            <p class="card-text">{{$card->m_family_membar_name}}</p>
            <p class="card-text">Mrs. Janhavi Roy</p>
        </div>
    </div>
</div>

<!-- Family Name End -->

<!-- Map and Contact Details Section -->
<div class="row">
    <div class="col-sm-6">
        <div id="map-container">
            <div id="map">
                <!-- Embedded map or link to Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1522371346077!2d<longitude_here>!3d<latitude_here>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z<latitude_here>%2C<longitude_here>!5e0!3m2!1sen!2sus!4v1627501256272!5m2!1sen!2sus" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div id="contact-details">
            <h3>Contact Details:</h3>
            <p><strong>Prism Banquets Hall</strong></p>
            <p>South Goria, Kolkata</p>
            <p>Phone: +91 1234567890</p>
            <p>Email: example@example.com</p>
        </div>
    </div>
</div>

@endforeach
@endforeach
<!-- Map and Contact Details Section End -->
</body>
</html>
