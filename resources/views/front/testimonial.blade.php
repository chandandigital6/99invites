@extends('frontLayouts.main')
@section('title', 'Testimonial')
@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('testimonial')}}">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
