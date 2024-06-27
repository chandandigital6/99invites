@extends('frontLayouts.main')
@section('title', 'Services - repair')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('services')}}">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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

@endsection
