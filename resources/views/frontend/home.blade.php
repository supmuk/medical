@extends('layouts.frontend.layout')
@section('content')
    <!--hero section start-->

<section class="fullscreen-banner p-0 overflow-hidden">
    <div class="banner-slider owl-carousel no-pb">
      <div class="item" data-bg-img="{{asset('assets/frontend/images/bg/01.jpg')}}">
        <div class="align-center pt-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12 me-auto">
                <h5 class="text-white letter-space-1 mb-3 animated6">Medical Center</h5>
                <h1 class="text-black mb-3 animated8">Hectolab <span>Provide Best</span> Solution</h1> 
                <p class="lead text-black mb-3 animated5">We try to make maximum use of all our experience, accumulated potential,
                  <br>knowledge of modern medicine.</p> <a class="btn btn-theme btn-radius animated7" href="about-us.html">Learn More</a>
                <a class="btn btn-theme btn-circle animated6" href="about-us.html">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item white-overlay" data-bg-img="{{asset('assets/frontend/images/bg/02.jpg')}}" data-overlay="8">
        <div class="align-center pt-0">
          <div class="container">
            <div class="row text-center justify-content-center">
              <div class="col-lg-10 col-md-12">
                <h5 class="text-white letter-space-1 mb-3 animated6" data-wow-delay="4s">Medical Center</h5> 
                <h1 class="text-black mb-3 animated11">What Makes Us Different Hectolab</h1> 
                <p class="lead text-black mb-3 animated5">We try to make maximum use of all our experience, accumulated potential,
                  <br>knowledge of modern medicine.</p> <a class="btn btn-theme btn-radius animated7" href="about-us.html">Learn More</a>
                <a class="btn btn-theme btn-circle animated6" href="about-us.html">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item" data-bg-img="{{asset('assets/frontend/images/bg/03.jpg')}}">
        <div class="align-center pt-0">
          <div class="container">
            <div class="row text-end">
              <div class="col-lg-8 col-md-12 ms-auto">
                <h5 class="text-white letter-space-1 mb-3 animated6">Medical Center</h5> 
                <h1 class="text-black mb-3 animated9">We Will <span>Provide Best</span> Hectolab</h1> 
                <p class="lead text-black mb-3 animated5">We try to make maximum use of all our experience, accumulated potential,
                  <br>knowledge of modern medicine.</p> <a class="btn btn-theme btn-radius animated7" href="about-us.html">Learn More</a>
                <a class="btn btn-theme btn-circle animated6" href="about-us.html">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  
  <!--hero section end-->
  <div class="page-content">

    <!--3 step start-->
    
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="featured-step"> <span>01</span>
              <h5 class="mb-3">Best Checkup</h5>
              <div class="featured-desc">
                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-3 mt-lg-0">
            <div class="featured-step"> <span>02</span>
              <h5 class="mb-3">Online Appointment</h5>
              <div class="featured-desc">
                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-3 mt-lg-0">
            <div class="featured-step"> <span>03</span>
              <h5 class="mb-3">24 x 7 Available</h5>
              <div class="featured-desc">
                <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--3 step end-->
    
    
    <!--about us start-->
    
    <section class="pt-0 pb-lg-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12">
            <img class="img-fluid" src="{{asset('assets/frontend/images/about/01.png')}}" alt="">
          </div>
          <div class="col-lg-7 col-md-12 mt-5 mt-lg-0">
            <div class="section-title mb-2">
              <h6>About Us</h6>
              <h2 class="title">Welcome To Our <span>Medical</span></h2>
            </div>
            <p class="text-black mb-3 lead font-w-5">Hectolab have facility to produce adipisicing elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, <span class="text-theme"><u>consectetur adipisicing elit.</u></span> Excepturi vero minima, facility to produce adipisicing</p>
            <p class="line-h-3 mb-4">Hectolab have facility to produce adipisicing elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vero minima impedit aliquam tempor incididunt ut labore et dolore.</p>
            <div class="row text-center">
              <div class="col-sm-4">
                <div class="ht-rounded-skill">
                  <div class="rounded-skill" data-circle-startTime=0 data-circle-maxValue="60" data-circle-dialWidth=12 data-circle-type="progress">
                    <div class="skill-bg">
                      <div class="skill-num">00:00:00</div>
                    </div>
                  </div> <span class="skill-title">Medical Center</span>
                </div>
              </div>
              <div class="col-sm-4 mt-5 mt-sm-0">
                <div class="ht-rounded-skill">
                  <div class="rounded-skill" data-circle-startTime=0 data-circle-maxValue="80" data-circle-dialWidth=12 data-circle-type="progress">
                    <div class="skill-bg">
                      <div class="skill-num">00:00:00</div>
                    </div>
                  </div> <span class="skill-title">Success Case</span>
                </div>
              </div>
              <div class="col-sm-4 mt-5 mt-sm-0">
                <div class="ht-rounded-skill">
                  <div class="rounded-skill" data-circle-startTime=0 data-circle-maxValue="90" data-circle-dialWidth=12 data-circle-type="progress">
                    <div class="skill-bg">
                      <div class="skill-num">00:00:00</div>
                    </div>
                  </div> <span class="skill-title">Happy Patients</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--about us end-->
    
    
    <!--timetable start-->
    
    <section class="p-0 overflow-hidden text-white">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12 p-lg-5 p-3 theme-bg">
            <h4 class="text-white text-capitalize">Top Doctor</h4>
            <p class="lead">Hectolab have facility to produce adipisicing elit. Excepturi vero <u class="font-w-8">consectetur adipisicing elit.</u> Lorem ipsum dolor sit amet, vero minima</p> <a class="btn-simple btn-lg" href="#"><span>Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></span></a>
          </div>
          <div class="col-lg-4 col-md-12 p-lg-5 p-3 dark-bg">
            <h4 class="text-white text-capitalize">Working Hours</h4>
            <ul class="list-unstyled working-hours">
              <li><span>Monday - Friday</span> 8:00 to 17:00</li>
              <li><span>Saturday</span> 9:00 to 18:00</li>
              <li><span>Sunday</span> 9:00 to 13:00</li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-12 p-lg-5 p-3 theme-bg">
            <h4 class="text-white text-capitalize">Emargency Case</h4>
            <p class="lead">Hectolab have facility to produce adipisicing elit. Excepturi vero aliquam Lorem ipsum sit amet, consectetur elit vero minima</p>
            <h5 class="mb-0"><a class="btn-simple btn-lg" href="tel:18002223333"><span><i class="me-2 flaticon-phone-call"></i> 1800 222 3333</span></a></h5> 
          </div>
        </div>
      </div>
    </section>
    
    <!--timetable end-->
    
    
    <!--featured start-->
    
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="flaticon-stethoscope"></i>
              </div>
              <div class="featured-title text-uppercase">
                <h5>Outdoor Checkup</h5>
              </div>
              <div class="featured-desc">
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment is appropriate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="flaticon-doctor-1"></i>
              </div>
              <div class="featured-title text-uppercase">
                <h5>Operation Theatre</h5>
              </div>
              <div class="featured-desc">
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment is appropriate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="flaticon-drug"></i>
              </div>
              <div class="featured-title text-uppercase">
                <h5>Pharmacy</h5>
              </div>
              <div class="featured-desc">
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment is appropriate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="flaticon-blood-donation"></i>
              </div>
              <div class="featured-title text-uppercase">
                <h5>Blood Test</h5>
              </div>
              <div class="featured-desc">
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment is appropriate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="flaticon-doctor"></i>
              </div>
              <div class="featured-title text-uppercase">
                <h5>Qualified Doctors</h5>
              </div>
              <div class="featured-desc">
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment is appropriate.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="featured-item text-center">
              <div class="featured-icon"> <i class="flaticon-ambulance"></i>
              </div>
              <div class="featured-title text-uppercase">
                <h5>Emergency Care</h5>
              </div>
              <div class="featured-desc">
                <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment is appropriate.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--featured end-->
    
    
    <!--service start-->
    
    <section class="text-center pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel dark-service" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30" data-autoplay="true">
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('assets/frontend/images/service/01.jpg')}}" alt="">
                    <div class="service-icon"> <i class="flaticon-doctor"></i>
                    </div>
                  </div>
                  <h4>Outpatient Depertment</h4>
                  <div class="service-description">
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('assets/frontend/images/service/02.jpg')}}" alt="">
                    <div class="service-icon"> <i class="flaticon-health"></i>
                    </div>
                  </div>
                  <h4>Pediatrics Depertment</h4>
                  <div class="service-description">
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('assets/frontend/images/service/03.jpg')}}" alt="">
                    <div class="service-icon"> <i class="flaticon-brain"></i>
                    </div>
                  </div>
                  <h4>Neurology Depertment</h4>
                  <div class="service-description">
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('assets/frontend/images/service/04.jpg')}}" alt="">
                    <div class="service-icon"> <i class="flaticon-tooth"></i>
                    </div>
                  </div>
                  <h4>Dental Depertment</h4>
                  <div class="service-description">
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('assets/frontend/images/service/05.jpg')}}" alt="">
                    <div class="service-icon"> <i class="flaticon-heart"></i>
                    </div>
                  </div>
                  <h4>Cardiology Depertment</h4>
                  <div class="service-description">
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{asset('assets/frontend/images/service/06.jpg')}}" alt="">
                    <div class="service-icon"> <i class="flaticon-orthopedics"></i>
                    </div>
                  </div>
                  <h4>Diagnostic Depertment</h4>
                  <div class="service-description">
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--service end-->
    
    
    <!--counter start-->
    
    <section class="pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12">
            <div class="accordion" id="accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            consectetur adipisicing elit, sed ?
          </button>
        </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                  <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Duis aute dolor in reprehenderit.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            temporo incididunt ut labore et dolore ?
          </button>
        </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                  <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Duis aute dolor in reprehenderit.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            quis nostrd exercitation ullamco laboris ?
          </button>
        </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                  <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodas temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Duis aute dolor in reprehenderit.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 mt-5 mt-lg-0">
            <div class="row">
              <div class="col-sm-6">
                <div class="counter"> <span class="count-number" data-to="150" data-speed="10000">150</span>
                  <label>Hospital rooms</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter"> <span class="count-number" data-to="175" data-speed="10000">175</span>
                  <label>Success Cases</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter mt-5"> <span class="count-number" data-to="344" data-speed="10000">344</span>
                  <label>Our Doctors</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter mt-5"> <span class="count-number" data-to="125" data-speed="10000">125</span>
                  <label>Happy Patients</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--counter end-->
    
    
    <!--testimonial start-->
    
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
                          <img class="img-fluid w-100 radius" src="{{asset('assets/frontend/images/testimonial/01.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ Totam mollitia incidunt Consectetur adipisicing elit, vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi, adipisci quam laudantium nulla modi vero cupiditate. ”</p>
                        <div class="testimonial-caption">
                          <h6>Samantha Lion</h6>
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
                          <img class="img-fluid w-100 radius" src="{{asset('assets/frontend/images/testimonial/02.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi, adipisci quam laudantium nulla modi. ”</p>
                        <div class="testimonial-caption">
                          <h6>Thomas James</h6>
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
                          <img class="img-fluid w-100 radius" src="{{asset('assets/frontend/images/testimonial/03.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        <p>“ Quae adipisci quam laudantium nulla modi, Consectetur adipisicing elit, Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, adipisci quam laudantium nulla modi. ”</p>
                        <div class="testimonial-caption">
                          <h6>Kendra Velly</h6>
                          <label>- Manager</label>
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
    
    <!--testimonial end-->
    
    
    <!--gallery start-->
    
    <section class="overflow-hidden">
      <div class="container-fluid">
        <div class="row align-items-end">
          <div class="col-lg-6 col-md-12">
            <div class="section-title">
              <h6>Creative</h6>
              <h2 class="title">Latest <span>Gallery</span></h2>
              <p class="mb-0">Hectolab Provide Greate Services Exerci tation ullamcorper suscipitorens lobortis nisl ut aliquip ex ea commodo, Exerci tation ullamcorper suscipitorens Ut elit tellus.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 text-lg-end">
            <div class="portfolio-filter">
              <button data-filter="" class="is-checked">All</button>
              <button data-filter=".cat1">Surgery</button>
              <button data-filter=".cat2">Laboratory</button>
              <button data-filter=".cat3">Dental</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="grid row columns-4 g-0 popup-gallery text-center">
              <div class="grid-item cat1">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/01.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/01.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat1 cat3">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/02.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/02.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat4 cat2">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/03.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/03.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat2 cat3">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/04.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/04.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat3 cat1">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/05.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/05.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat2 cat4">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/06.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/06.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat2 cat4">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/07.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/06.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item cat2 cat4">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/frontend/images/gallery/08.jpg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/frontend/images/gallery/large/06.jpg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--gallery end-->
    
    
    <!--team start-->
    
    <section class="grey-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
              <h6>Team</h6>
              <h2 class="title">Meet Our <span>Doctors</span></h2>
              <p class="mb-0">Hectolab Provide Greate Services Exerci tation ullamcorper suscipitorens lobortis nisl ut aliquip ex ea commodo, Exerci tation ullamcorper suscipitorens Ut elit tellus.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="team-member text-center">
              <div class="team-images">
                <img class="img-fluid" src="{{asset('assets/frontend/images/team/01.jpg')}}" alt="">
                <div class="team-about">
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
                </div>
              </div>
              <div class="team-description"> <span>Doctor</span>
                <h5><a href="doctor-single.html">Dr. John Maxwell</a></h5> 
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
            <div class="team-member text-center">
              <div class="team-images">
                <img class="img-fluid" src="{{asset('assets/frontend/images/team/02.jpg')}}" alt="">
                <div class="team-about">
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
                </div>
              </div>
              <div class="team-description"> <span>Doctor</span>
                <h5><a href="doctor-single.html">Dr. Matthew Doe</a></h5> 
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
            <div class="team-member text-center">
              <div class="team-images">
                <img class="img-fluid" src="{{asset('assets/frontend/images/team/03.jpg')}}" alt="">
                <div class="team-about">
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
                </div>
              </div>
              <div class="team-description"> <span>Doctor</span>
                <h5><a href="doctor-single.html">Dr. Romi Keely</a></h5> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--team end-->
    
    <!--blog start-->
    
    <section>
      <div class="container">
        <div class="row text-center">
          <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
              <h6>News</h6>
              <h2 class="title">Our Latest <span>Blog</span></h2>
              <p class="mb-0">Hectolab Provide Greate Services Exerci tation ullamcorper suscipitorens lobortis nisl ut aliquip ex ea commodo, Exerci tation ullamcorper suscipitorens Ut elit tellus.</p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="post">
              <div class="row g-0">
                <div class="col-md-6">
                  <div class="post-image h-100">
                    <img class="img-fluid h-100 w-100" src="{{asset('assets/frontend/images/blog/01.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-item-middle white-bg">
                  <div>
                    <div class="post-desc">
                      <div class="post-meta">
                        <ul class="list-inline">
                          <li>23 April, 2019</li>
                          <li>Comment</li>
                        </ul>
                      </div>
                      <div class="post-title">
                        <h5><a href="blog-details-right-sidebar.html">Our Patients’ Healthy Researches is Our Priority</a></h5>
                      </div>
                      <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p> <a class="post-btn" href="blog-details-right-sidebar.html">Read More<i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="post mt-4">
              <div class="row g-0">
                <div class="col-md-6">
                  <div class="post-image h-100">
                    <img class="img-fluid h-100 w-100" src="{{asset('assets/frontend/images/blog/02.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-item-middle white-bg">
                  <div>
                    <div class="post-desc">
                      <div class="post-meta">
                        <ul class="list-inline">
                          <li>23 April, 2019</li>
                          <li>Comment</li>
                        </ul>
                      </div>
                      <div class="post-title">
                        <h5><a href="blog-details-right-sidebar.html">Our Patients’ Healthy Researches is Our Priority</a></h5>
                      </div>
                      <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mt-3 mt-lg-0">
            <div class="owl-carousel no-pb dark-post" data-dots="false" data-items="1" data-autoplay="true">
              <div class="item">
                <div class="post">
                  <div class="post-image">
                    <img class="img-fluid w-100 h-100" src="{{asset('assets/frontend/images/blog/03.jpg')}}" alt="">
                  </div>
                  <div class="post-desc">
                    <div class="post-meta">
                      <ul class="list-inline">
                        <li>23 April, 2019</li>
                        <li>Comment</li>
                      </ul>
                    </div>
                    <div class="post-title">
                      <h5><a href="blog-details-right-sidebar.html">Our Patients’ Healthy Researches is Our Priority</a></h5>
                    </div>
                    <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="post">
                  <div class="post-image">
                    <img class="img-fluid w-100 h-100" src="{{asset('assets/frontend/images/blog/02.jpg')}}" alt="">
                  </div>
                  <div class="post-desc">
                    <div class="post-meta">
                      <ul class="list-inline">
                        <li>23 April, 2019</li>
                        <li>Comment</li>
                      </ul>
                    </div>
                    <div class="post-title">
                      <h5><a href="blog-details-right-sidebar.html">Our Patients’ Healthy Researches is Our Priority</a></h5>
                    </div>
                    <p>Cras ultricies ligula sed magna dictum porta, Sed ut perspiciatis unde omnis iste natus error sit voluptat</p> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--blog end-->
    
    
    <!--client start-->
    
    <section class="text-center theme-bg py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <div class="owl-carousel no-pb" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="1" data-margin="30" data-dots="false" data-autoplay="true">
              <div class="item">
                <img class="img-fluid d-inline" src="{{asset('assets/frontend/images/client/01.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid d-inline" src="{{asset('assets/frontend/images/client/02.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid d-inline" src="{{asset('assets/frontend/images/client/03.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid d-inline" src="{{asset('assets/frontend/images/client/04.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid d-inline" src="{{asset('assets/frontend/images/client/05.png')}}" alt="">
              </div>       
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--client end-->
    
    </div>
@endsection