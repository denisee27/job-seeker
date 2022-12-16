@extends('layouts.app')

@section('content')
<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
      <div class="row gy-5 gx-4">
          <div class="col-lg-8">
              </div>

              <!-- <div class="mb-5">
                  <h4 class="mb-3">Job description</h4>
                  <p>Dolor justo tempor duo ipsum accusam rebum gubergren erat. Elitr stet dolor vero clita labore gubergren. Kasd sed ipsum elitr clita rebum ut sea diam tempor. Sadipscing nonumy vero labore invidunt dolor sed, eirmod dolore amet aliquyam consetetur lorem, amet elitr clita et sed consetetur dolore accusam. Vero kasd nonumy justo rebum stet. Ipsum amet sed lorem sea magna. Rebum vero dolores dolores elitr vero dolores magna, stet sea sadipscing stet et. Est voluptua et sanctus at sanctus erat vero sed sed, amet duo no diam clita rebum duo, accusam tempor takimata clita stet nonumy rebum est invidunt stet, dolor.</p>
              </div> -->

              <div class="">
                  <!-- <h3 class="mb-4">Let's get started!</h3> -->
                  <h4 class="mb-4">Let's get started!</h4>
                  <form method="POST" action="{{ url('/company/store') }}">
                    @csrf @method('POST')
                      <div class="row g-3">
                          <div class="col-12 col-sm-6">
                              <input type="text" name="job" class="form-control" placeholder="Job Title">
                          </div>
                          <div class="col-12 col-sm-6">
                              <input type="text" name="company" class="form-control" placeholder="Company Name">
                          </div>
                          <div class="col-12 col-sm-4">
                              <input type="text" name="location" class="form-control" placeholder="Location">
                          </div>
                          <div class="col-12 col-sm-4">
                              <input type="email" name="email" class="form-control" placeholder="Email">
                          </div>
                          <div class="col-12 col-sm-4">
                              <select class="form-control custom-select" name="type" style="background-color: white">
                                <option value="">Choose Type Job</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                              </select>
                          </div>
                          <div class="col-12">
                              <textarea class="form-control" name="description"  rows="5" placeholder="Description"></textarea>
                          </div>
                          <div class="col-12">
                              <textarea class="form-control" name="requirement"  rows="5" placeholder="Requirements"></textarea>
                          </div>
                          <div class="col-12">
                              <input type="text" name="url" class="form-control" placeholder="Apply URL">
                          </div>
                          <div class="col-12">
                              <button class="btn btn-primary w-100" type="submit">Submit</button>
                          </div>
                      </div>
                  </form>
              </div>
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
<!-- Footer End -->
</div>
@endsection