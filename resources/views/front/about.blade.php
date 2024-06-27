
@extends('frontLayouts.main')
@section('title', 'About - DentCare')
@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('about')}}">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @foreach($about as $aboutUs)


                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h1 class="display-6 mb-5">{{$aboutUs->heading}}</h1>
                            <div class="row g-4 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 me-3" src="{{asset('asset/img/icon/icon-07-primary.png')}}" alt="">
                                        <h5 class="mb-0">Expert Technician</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 me-3" src="{{asset('asset/img/icon/icon-09-primary.png')}}" alt="">
                                        <h5 class="mb-0">Best Quality Services</h5>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-4">{!! $aboutUs->description !!}</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-primary rounded-circle me-3">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <h5 class="mb-0">+012 345 6789</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center">
                                            <div class="btn-lg-square bg-primary rounded-circle me-3">
                                                <i class="fa fa-envelope text-white"></i>
                                            </div>
                                            <h5 class="mb-0">info@example.com</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-12 text-end">
                                <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="{{asset('storage/'.$aboutUs->image)}}" style="margin-top: 25%;">
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->



    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                @foreach($counters as $index => $counter)


                    <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="{{ 0.1 + ($index % 3) * 0.2 }}s">
                        <h1 class="display-4 text-white" data-toggle="counter-up">{{$counter->number}}</h1>
                        <span class="text-primary">{{$counter->title}}</span>
                    </div>

                @endforeach
                {{--                    <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">--}}
                {{--                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>--}}
                {{--                        <span class="text-primary">Projects Succeed</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">--}}
                {{--                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>--}}
                {{--                        <span class="text-primary">Awards Achieved</span>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">--}}
                {{--                        <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>--}}
                {{--                        <span class="text-primary">Team Members</span>--}}
                {{--                    </div>--}}
            </div>
        </div>
    </div>
    <!-- Facts End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
            </div>
            <div class="row g-4">
                @foreach($teams as $index => $team)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index % 3) * 0.2 }}s">
                        <div class="team-item">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/'.$team->image)}}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square btn-primary rounded-circle m-1" href="{{$team->fb_url}}"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle m-1" href="{{$team->wat_url}}"><i class="fab fa-whatsapp"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle m-1" href="{{$team->in_url}}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5>{{$team->name}}</h5>
                                <span class="text-primary">{{$team->title}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->



@endsection
