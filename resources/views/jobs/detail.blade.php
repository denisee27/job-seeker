 @extends('layouts.app')

 @section('content')
 <!-- Job Detail Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
      <div class="row gy-5 gx-4">
          <div class="col-lg-8">
              <div class="d-flex align-items-center mb-5">
                  <div class="text-start">
                      <h3 class="mb-3">{{ $job->job }}</h3>
                      <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }}</span>
                      <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                      
                  </div>
              </div>

              <div class="mb-5">
                  <h4 class="mb-3">Job description</h4>
                  <p>{{ $job->description }}</p>

                  <h4 class="mb-3">Requirements</h4>
                  <p>{{ $job->requirement }}</p>
              </div>

              <div class="">
                  <div class="col-12">
                    <a href="{{ $job->url }}">
                      <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                    </a>
                    </div>
              </div>
          </div>
  </div>
</div>
<!-- Job Detail End -->


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


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection