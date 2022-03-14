@extends('layouts.frontend.layout')
@section('content')

<section class="page-title overflow-hidden grey-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <h1 class="title mb-0">About <span>Us</span></h1>
        </div>
      </div>
    </div>
</section>


<div class="page-content">

    <!--about us start-->
    
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12">
            <img class="img-fluid rounded box-shadow w-100" src="{{asset('assets/images/about-01.jpeg')}}" alt="">
          </div>
          <div class="col-lg-7 col-md-12 mt-5 mt-lg-0 content-fix">
            {!! $content->description !!}
          </div>
        </div>
      </div>
    </section>
    
    <!--about us end-->
    
    
    <!--counter start-->
    
    {{-- <section class="theme-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="counter"> <span class="count-number" data-to="150" data-speed="10000">150</span>
              <label>Our Services</label>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="counter"> <span class="count-number" data-to="175" data-speed="10000">175</span>
              <label>Success Cases</label>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="counter"> <span class="count-number" data-to="344" data-speed="10000">344</span>
              <label>Our Doctors</label>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="counter"> <span class="count-number" data-to="125" data-speed="10000">125</span>
              <label>Happy Patients</label>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    
    <!--counter end-->
    
    
    <!--service start-->
    
    @if(!empty($products))
    <section class="text-center pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel dark-service" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30" data-autoplay="true">
              @foreach ($products as $item)
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('storage/product/'.$item->file_path)}}" alt="">
                    <div class="service-icon"> <i class="flaticon-doctor"></i>
                    </div>
                  </div>
                  <h4>{{$item->name}}</h4>
                  <div class="service-description">
                    <p>{{Str::substr($item->description, 0, 50).'...'}}</p> 
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    
    <!--service end-->
    
    
    <!--team start-->
  
    <section class="grey-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
              <h6>Team</h6>
              <h2 class="title">Meet Our <span>Directors</span></h2>
              <p class="mb-0">Ewin Healthcare Pvt. Ltd. Highly educated and experienced members</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="team-member text-center">
              <div class="team-images">
                <img class="img-fluid" src="{{asset('assets/images/seema-sharma.jpeg')}}" alt="">
              </div>
              <div class="team-description"> <span>Director</span>
                <h5><a href="javascript:void(0);">Mrs. Seema Sharma</a></h5> 
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
            <div class="team-member text-center">
              <div class="team-images">
                <img class="img-fluid" src="{{asset('assets/images/lc-joshi.jpeg')}}" alt="">
              </div>
              <div class="team-description"> <span>Director</span>
                <h5><a href="javascript:void(0);">Dr. L.C Joshi</a></h5> 
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
            <div class="team-member text-center">
              <div class="team-images">
                <img class="img-fluid" src="{{asset('assets/images/vijay-sharma.jpeg')}}" alt="">
                {{-- <div class="team-about">
                  <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p>
                  <div class="team-social-icon">
                    <ul>
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                      </li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                    </ul>
                  </div>
                </div> --}}
              </div>
              <div class="team-description"> <span>Founder Member</span>
                <h5><a href="javascript:void(0);">Mr. Vijay Sharma</a></h5> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--team end-->
    
    
    <!--client start-->
    
    <section class="text-center theme-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel no-pb" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="1" data-margin="30" data-dots="false" data-autoplay="true">
              <div class="item">
                <span class="bottom-slider">APPIWIN-L</span>
              </div>
              <div class="item">
                <span class="bottom-slider">CINNADOM</span>
              </div>
              <div class="item">
                <span class="bottom-slider">DIC-SP</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E LIV-DS</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E2-TONE</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-GUT</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-MOX625</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-POD 100 DT</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-POD 200</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWIFER-XT</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWIN-COLD</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWIN-COF</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWINDROT-M</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWIT-CZ</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWIN-P</span>
              </div>
              <div class="item">
                <span class="bottom-slider">EWIN-SP</span>
              </div>
              <div class="item">
                <span class="bottom-slider">LIVOMONT</span>
              </div>
              <div class="item">
                <span class="bottom-slider">LIVOMONT-KID</span>
              </div>
              <div class="item">
                <span class="bottom-slider">LYCOWIN</span>
              </div>
              <div class="item">
                <span class="bottom-slider">MEF-P</span>
              </div>
              <div class="item">
                <span class="bottom-slider">NANO-P</span>
              </div>
              <div class="item">
                <span class="bottom-slider">OF-OZ</span>
              </div>
              <div class="item">
                <span class="bottom-slider">PENTAWIN-DSR</span>
              </div>
              <div class="item">
                <span class="bottom-slider">REBIWIN-DSR</span>
              </div>
              <div class="item">
                <span class="bottom-slider">WINOLACT</span>
              </div>
              <div class="item">
                <span class="bottom-slider">MERCY</span>
              </div>
              <div class="item">
                <span class="bottom-slider">AZEEWIN-500</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-POD-50</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-POD-50 CV</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-POD 200 CV</span>
              </div>
              <div class="item">
                <span class="bottom-slider">E-MOX-CV</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--client end-->
    
    
    <!--testimonials start-->
    
    <section class="grey-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-12 mx-auto">
            <div class="owl-carousel no-pb slide-arrow-2" data-items="1" data-dots="false" data-nav="true" data-autoplay="true">
              <div class="item">
                <div class="testimonial">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="testimonial-avatar box-shadow">
                        <div class="testimonial-img">
                          <img class="img-fluid w-100 radius" src="{{asset('assets/images/lc-joshi.jpeg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ The essence of our culture is built on meeting global standards in every aspect of our business. These envisioned words of Mr. L. C. Joshi, our Chairman and Managing Director, reflect the extreme passion and enthusiasm that drives the organization.”</p>
                        <div class="testimonial-caption">
                          <h6>Mr. L. C. Joshi</h6>
                          <label>- Chairperson</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="testimonial-avatar box-shadow">
                        <div class="testimonial-img">
                          <img class="img-fluid w-100 radius" src="{{asset('assets/images/review-img.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ We have been provided with the best possible resources to communicate between company and our team. Being the bridge between company and the team it is very important to provide with good working environment to the team which we our company is providing without fail. ”</p>
                        <div class="testimonial-caption">
                          {{-- <h6>Thomas James</h6> --}}
                          <label>- Manager</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="testimonial-avatar box-shadow">
                        <div class="testimonial-img">
                          <img class="img-fluid w-100 radius" src="{{asset('assets/images/review-img.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ Ewin Healthcare Pvt Ltd has provided me with many opportunities to grow and learn through its culture and working enviornment. Company has a good team of working staff. Increment provided by the company is good depending on the performance of an individual, but for me it was a pretty good increment. Higher officials also interact with us , encouraging us to do better for ourselves and the company. ”</p>
                        <div class="testimonial-caption">
                          {{-- <h6>Kendra Velly</h6> --}}
                          <label>- Staff Review</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="testimonial-avatar box-shadow">
                        <div class="testimonial-img">
                          <img class="img-fluid w-100 radius" src="{{asset('assets/images/review-img.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ Ewin HealthCare is a very good company. The working atmosphere is very good and everyone around here is very kind and helpful. For fresher’s, the senior’s are very cooperative and they provide with various insights so as to enhance the working capability of an individual. ”</p>
                        <div class="testimonial-caption">
                          {{-- <h6>Kendra Velly</h6> --}}
                          <label>- Staff Review</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--testimonials start-->
    
</div>
@endsection