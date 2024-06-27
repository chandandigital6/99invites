
@extends('frontLayouts.main')
@section('title', 'Home - Repair')


    @section('content')

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($banner as $index => $banners)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img class="w-100" src="{{ asset('storage/'.$banners->image) }}" alt="Image">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7 pt-5">
                                            <h1 class="display-4 text-white mb-4 animated slideInDown">{{ $banners->title }}</h1>
                                            <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">{{ $banners->sub_title }}</p>
                                            <a href="{{route('contact')}}" class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->



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


        <!-- Features Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
                        <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="d-flex mb-5">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{asset('asset/img/icon/icon-08-light.png')}}" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Trusted Service Center</h5>
                                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</span>
                            </div>
                        </div>
                        <div class="d-flex mb-5">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{asset('asset/img/icon/icon-10-light.png')}}" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Reasonable Price</h5>
                                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</span>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                                <img class="img-fluid" src="{{asset('asset/img/icon/icon-06-light.png')}}" alt="">
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">24/7 Supports</h5>
                                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{asset('asset/img/feature.jpg')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-5">We Provide Professional Heating & Cooling Services</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach($services as $index => $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index % 3) * 0.2 }}s">
                            <div class="service-item">
                                <img class="img-fluid" src="{{ asset('storage/'.$service->image) }}" alt="">
                                <div class="d-flex align-items-center bg-light">
                                    <div class="service-icon flex-shrink-0 bg-primary">
                                        <img class="img-fluid" src="{{ asset('asset/img/icon/icon-01-light.png') }}" alt="">
                                    </div>
                                    <a class="h4 mx-4 mb-0" href="">{{ $service->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Service End -->


        <!-- Quote Start -->
        <div class="container-fluid overflow-hidden my-5 px-lg-0">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 quote-text" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
                        <div class="h-100 px-4 px-sm-5 ps-lg-0 wow fadeIn" data-wow-delay="0.1s">
                            <h1 class="text-white mb-4">For Individuals And Organisations</h1>
                            <p class="text-light mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a href="" class="align-self-start btn btn-primary py-3 px-5">More Details</a>
                        </div>
                    </div>
                    <div class="col-lg-6 quote-form" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
                        <div class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                            <div class="bg-white p-4 p-sm-5">
                                @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <form action="{{route('appointment.store')}}" method="post" >
                                    @csrf
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" placeholder="Gurdian Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" placeholder="Gurdian Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="number" placeholder="Contact number">
                                            <label for="number">Your Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="service" placeholder="Service ">
                                            <label for="service">Service Type</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" name="msg" style="height: 80px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary py-3 px-5 w-100" type="submit">Get A Free Quote</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote End -->


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


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 mb-5">What They Say About Our Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-left h-100">
                            <img class="img-fluid animated pulse infinite mb-3" src="{{ asset('asset/img/testimonial-1.jpg') }}" alt="">
                            <img class="img-fluid animated pulse infinite mb-3" src="{{ asset('asset/img/testimonial-2.jpg') }}" alt="">
                            <img class="img-fluid animated pulse infinite mb-3" src="{{ asset('asset/img/testimonial-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel">
                            @foreach($testimonials as $testimonial)
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid mx-auto mb-4" src="{{ asset('storage/'.$testimonial->image) }}" alt="">
                                    <p class="fs-5">{{ $testimonial->msg }}</p>
                                    <h5>{{ $testimonial->name }}</h5>
                                    {{-- <span>Profession</span> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="testimonial-right h-100">
                            <img class="img-fluid animated pulse infinite mb-3" src="{{ asset('asset/img/testimonial-1.jpg') }}" alt="">
                            <img class="img-fluid animated pulse infinite mb-3" src="{{ asset('asset/img/testimonial-2.jpg') }}" alt="">
                            <img class="img-fluid animated pulse infinite mb-3" src="{{ asset('asset/img/testimonial-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



    @endsection
