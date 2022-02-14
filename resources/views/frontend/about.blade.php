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
            <img class="img-fluid rounded box-shadow w-100" src="{{asset('assets/frontend/images/about/02.jpg')}}" alt="">
          </div>
          <div class="col-lg-7 col-md-12 mt-5 mt-lg-0">
            <div class="section-title mb-4">
              <h6>About Us</h6>
              <h2 class="title">Welcome To Our <span>Medical</span></h2>
              <p class="mb-0">Hectolab Provide Greate Services Exerci tation ullamcorper suscipitorens lobortis nisl ut aliquip ex ea commodo, Exerci tation ullamcorper suscipitorens Ut elit tellus.</p>
            </div>        
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="featured-item text-start">
                  <div class="featured-icon"> <i class="flaticon-stethoscope"></i>
                  </div>
                  <div class="featured-title text-uppercase">
                    <h5>Outdoor Checkup</h5>
                  </div>
                  <div class="featured-desc">
                    <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-3 mt-md-0">
                <div class="featured-item text-start">
                  <div class="featured-icon"> <i class="flaticon-doctor-1"></i>
                  </div>
                  <div class="featured-title text-uppercase">
                    <h5>Operation Theatre</h5>
                  </div>
                  <div class="featured-desc">
                    <p>We have experience in different areas of Health Center, We offer our Better solutions your treatment.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--about us end-->
    
    
    <!--counter start-->
    
    <section class="theme-bg">
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
    </section>
    
    <!--counter end-->
    
    
    <!--service start-->
    
    <section class="text-center">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
            <div class="section-title">
              <h6>What We Do</h6>
              <h2 class="title">Our Awesome <span>Services</span></h2>
              <p class="mb-0">Hectolab Provide Greate Services Exerci tation ullamcorper suscipitorens lobortis nisl ut aliquip ex ea commodo, Exerci tation ullamcorper suscipitorens Ut elit tellus.</p>
            </div>
          </div>
        </div>
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
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> <a href="outpatient-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
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
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> <a href="pediatrics-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
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
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> <a href="neurology-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
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
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> <a href="dental-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
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
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> <a href="cardiology-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
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
                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat, sed diam voluptua, maiores possimus fugiat repellat totam.</p> <a href="diagnostic-depertment.html">Read More <i class="ms-2 fas fa-long-arrow-alt-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--service end-->
    
    
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
    
    
    <!--client start-->
    
    <section class="text-center dark-bg">
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
    
    
    <!--testimonials start-->
    
    <section>
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
    
    <!--testimonials start-->
    
</div>
@endsection