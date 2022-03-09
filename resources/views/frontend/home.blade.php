@extends('layouts.frontend.layout')
@section('content')
    <!--hero section start-->

<section class="fullscreen-banner p-0 overflow-hidden">
    <div class="banner-slider owl-carousel no-pb">
      <div class="item" data-bg-img="{{asset('assets/images/01.jpeg')}}">
        <div class="align-center pt-0">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12 me-auto">
                <h5 class="text-white letter-space-1 mb-3 animated6">Medical Center</h5>
                <h1 class="text-black mb-3 animated8">Ewin healthcare pvt. ltd</h1> 
                <p class="lead text-black mb-3 animated5">A Promise for healthy life</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item white-overlay" data-bg-img="{{asset('assets/images/02.jpeg')}}" data-overlay="8">
        <div class="align-center pt-0">
          <div class="container">
            <div class="row text-center justify-content-center">
              <div class="col-lg-10 col-md-12">
                <h5 class="text-white letter-space-1 mb-3 animated6" data-wow-delay="4s">Medical Center</h5> 
                <h1 class="text-black mb-3 animated11">Honesty, Integrity & Hard Work is credo of our company
                </h1> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item" data-bg-img="{{asset('assets/images/03.jpeg')}}">
        <div class="align-center pt-0">
          <div class="container">
            <div class="row text-end">
              <div class="col-lg-8 col-md-12 ms-auto">
                <h5 class="text-white letter-space-1 mb-3 animated6">Medical Center</h5> 
                <h1 class="text-black mb-3 animated9">Ewin healthcare pvt. ltd. is a ISO 9001:2015 certified company</h1> 
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
              <h5 class="mb-3">Growing Pharmaceutical Company</h5>
              <div class="featured-desc">
                <p>Ewin Healthcare Pvt Ltd is one of the most Emerging & Fastest Growing Pharmaceutical Company.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-3 mt-lg-0">
            <div class="featured-step"> <span>02</span>
              <h5 class="mb-3">Complete range of healthcare products</h5>
              <div class="featured-desc">
                <p>Ewin Healthcare Pvt Ltd Offering a complete range of healthcare products across India</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mt-3 mt-lg-0">
            <div class="featured-step"> <span>03</span>
              <h5 class="mb-3">Safe and Trusted products</h5>
              <div class="featured-desc">
                <p>Our aim is to be a global leader, in healthcare industry, by providing excellent, safe and trusted products of the highest quality to our customers.</p>
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
            <img class="img-fluid" src="{{asset('assets/images/about-01.jpeg')}}" alt="">
          </div>
          <div class="col-lg-7 col-md-12 mt-5 mt-lg-0">
            <div class="section-title mb-2">
              <h6>About Us</h6>
              <h2 class="title">Welcome To <span>Ewin Healthcare</span></h2>
            </div>
            <p class="text-black mb-3 lead font-w-5"> Incorporated on 18 July 2020, Ewin Healthcare Pvt Ltd is a firm that consistently cares for life and sticking to its commitment towards the fellow employees and the connected patients and customers.</p>
            <p class="line-h-3 mb-4">Ewin Healthcare Pvt Ltd symbolizes reliability. We believe in making a difference and not just medicines.</p>
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
          <div class="col-lg-12 col-md-12 p-lg-5 p-3 dark-bg">
            <h4 class="text-white text-capitalize text-center">INNOVATIVE</h4>
            <h4 class="text-white text-capitalize text-center">PHARMACEUTICAL OUT</h4>
            <h4 class="text-white text-capitalize text-center">THERE</h4>
            
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
    
    
    <!--counter start-->
    
    <section class="pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12">
            <div class="accordion" id="accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            OUR FOCUS
          </button>
        </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                  <div class="accordion-body">Our key focus areas lie in the Pharmaceuticals prescription drugs that have wide-ranging applications across fields like Gynaecology, Paediatrician, Physician, Surgeon, Gastroenterology, Antibiotics, Pain Management, among others.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            OUR STRENGTH
          </button>
        </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                  <div class="accordion-body">We have established world-class manufacturing facilities by leveraging state-of-the-art technology, incorporating best practices and adhering to stringent regulatory compliances with ISO certification.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            We possess end-to-end capabilities
          </button>
        </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                  <div class="accordion-body">We possess end-to-end capabilities – from Lab scale development to Pilot scale up and from commercializing the product for large scale manufacturing to marketing globally.

                    The company has achieved global recognition within a very short span of time and has major global expansion plans for the near future.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 mt-5 mt-lg-0">
            <div class="row">
              <div class="col-sm-6">
                <div class="counter"> <span class="count-number" data-to="4" data-speed="10000">4</span>
                  <label>States</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter"> <span class="count-number" data-to="25" data-speed="10000">25</span>
                  <label>Employees</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter mt-5"> <span class="count-number" data-to="3000" data-speed="10000">3000</span>
                  <label>Doctors</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter mt-5"> <span class="count-number" data-to="2000" data-speed="10000">2000</span>
                  <label>Chemists</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="counter mt-5"> <span class="count-number" data-to="50" data-speed="10000">50</span>
                  <label>Stockists</label>
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
          {{-- <div class="col-lg-6 col-md-12 text-lg-end">
            <div class="portfolio-filter">
              <button data-filter="" class="is-checked">All</button>
              <button data-filter=".cat1">Surgery</button>
              <button data-filter=".cat2">Laboratory</button>
              <button data-filter=".cat3">Dental</button>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="grid row columns-4 g-0 popup-gallery text-center">
              @for($i = 1; $i <= 56; $i++)
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-'.$i.'.jpeg')}}" alt="">
                  {{-- <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-"'.$i.'".jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div> --}}
                </div>
              </div>
              @endfor
              {{-- <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-02.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-02.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-03.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-03.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-04.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-04.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-05.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-05.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-06.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-06.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-07.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-07.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item">
                <div class="gallery-item">
                  <img class="img-fluid" src="{{asset('assets/images/gallery-08.jpeg')}}" alt="">
                  <div class="gallery-hover">
                    <div class="gallery-icon">
                      <a class="popup popup-img" href="{{asset('assets/images/gallery-08.jpeg')}}"> <i class="flaticon-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div> --}}
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
    
    <section class="text-center theme-bg py-5">
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
    
    </div>
@endsection