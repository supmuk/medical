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
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
        <div class="row g-0 box-shadow">
          <div class="col-lg-4 col-md-12 dark-bg image-column-h" data-bg-img="{{asset('assets/images/about-01.jpeg')}}"></div>
          <div class="col-lg-8 col-md-12">
            <div class="white-bg p-5">
              <h2 class="title mb-4">Contact Us For <span>Help</span></h2> 
              <form  class="row" method="post" action="{{route('contactPost')}}">
                {{-- id="contact-form" --}}
                @csrf
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
                  <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-12">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="col-sm-12">
                  {{-- <input type="submit" value="Submit Now" class="btn btn-border btn-radius"> --}}
                  <button class="btn btn-border btn-radius" type="submit"><span>Submit Now</span>
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
                <ul class="contact-info list-unstyled mt-4">
                  <li class="mb-4"><i class="flaticon-paper-plane"></i><span>Address:</span>
                    <p>Flat No.1/3D, Kanak Vrindavan Apple AN, Gandhi Path
                      Gram Sirsi, Jaipur, RAJASTHAN - 302021, INDIA</p>
                  </li>
                  <li class="mb-4"><i class="flaticon-phone-call"></i><span>Phone:</span><a href="tel:+912345678900">+91-234-567-8900</a>
                  </li>
                  <li><i class="flaticon-email"></i><span>Email</span><a href="mailto:ewinhealthcare@gmail.com">ewinhealthcare@gmail.com</a>
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.955433374789!2d75.72121761547909!3d26.904909466901998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db49910d000dd%3A0x35ad6d1d89101c80!2sGandhi%20Path%20W%2C%20Jaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1646462542475!5m2!1sen!2sin" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--contact details end-->
    
</div>
@endsection