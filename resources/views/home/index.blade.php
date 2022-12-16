@extends('layouts.app')

@section('title')
<title>Home</title>
@endsection
@section('content')
    <div class="container-xxl bg-white p-0">

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That
                                        You Deserved</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Search Start -->
        <form method="GET" action="{{ url('/jobs') }}">
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-12">
                                <input type="text" class="form-control border-0" name="job" placeholder="Find Job" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Search End -->

        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    @foreach($jobs as $job)
                    <a href="{{ url('/jobs/detail/'.$job->id) }}">            
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        {{-- <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg"
                                            alt="" style="width: 80px; height: 80px;"> --}}
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{ $job->job }}</h5>
                                            <span class="text-truncate me-3"><i
                                                    class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }}</span>
                                            <span class="text-truncate me-3"><i
                                                    class="far fa-clock text-primary me-2"></i>{{ $job->type }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach                                
                            <a class="btn btn-primary py-3 px-5" href="{{ url('/jobs') }}">See All Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jobs End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Team</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Diponegoro No.77, Cikini, Jakarta Pusat</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@JobMD.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
