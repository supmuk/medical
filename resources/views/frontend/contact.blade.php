@extends('layouts.frontend.layout')
@section('content')

<section class="page-title overflow-hidden grey-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <h1 class="title mb-0">Contact <span>Us</span></h1>
        </div>
      </div>
    </div>
</section>

<div class="page-content">

    <!--contact start-->
    
    <section>
      <div class="container">
        <div class="row g-0 box-shadow">
          <div class="col-lg-4 col-md-12 dark-bg image-column-h" data-bg-img="{{asset('assets/frontend/images/testimonial/03.jpg')}}"></div>
          <div class="col-lg-8 col-md-12">
            <div class="white-bg p-5">
              <h2 class="title mb-4">Contact Us For <span>Help</span></h2> 
              <form id="contact-form" class="row" method="post" action="">
                <div class="messages"></div>
                <div class="form-group col-sm-6">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="User Name" required="required" data-error="Username is required.">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-6">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-6">
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-6">
                  <input id="form_subject" type="text" name="Subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-12">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="col-sm-12">
                  <button class="btn btn-border btn-radius"><span>Submit Now</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--contact end-->
    
    
    <!--contact details start-->
    
    <section class="p-0 overflow-hidden position-relative contact-1">
      <div class="contact-box">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 mx-auto theme-bg text-white p-5 form-info box-shadow">
              <div>
                <h2 class="title text-white">Get In <span>Touch!</span></h2>
                <p>Contact for any help dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.</p>
                <ul class="contact-info list-unstyled mt-4">
                  <li class="mb-4"><i class="flaticon-paper-plane"></i><span>Address:</span>
                    <p>423B, Road Wordwide Country, USA</p>
                  </li>
                  <li class="mb-4"><i class="flaticon-phone-call"></i><span>Phone:</span><a href="tel:+912345678900">+91-234-567-8900</a>
                  </li>
                  <li><i class="flaticon-email"></i><span>Email</span><a href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid p-0 mt-5 mt-lg-0">
        <div class="row">
          <div class="col-12">
            <div class="map iframe-h-2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--contact details end-->
    
</div>
@endsection