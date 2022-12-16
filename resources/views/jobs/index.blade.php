@extends('layouts.app')

@section('title')
<title>Jobs</title>
@endsection

@section('content')
<div class="container-xxl bg-white p-0">


  <!-- Jobs Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
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
                              <div
                              class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                              {{-- <div class="d-flex mb-3">
                                  <a class="btn btn-primary" href="">Apply Now</a>
                                </div>  --}}
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                @if(!empty(app('request')->input('job')))
                <a class="btn btn-primary py-3 px-5" href="{{ url('/jobs') }}">See All Jobs</a>
                @endif
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
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@endsection