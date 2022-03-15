<!--footer start-->

<footer class="footer grey-bg">
    <div class="primary-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 mt-5 mt-lg-0 ps-lg-5">
            <div class="row">
              <div class="col-sm-5 footer-list">
                <h5>Quick <span class="text-theme">Link</span></h5>
                <ul class="list-unstyled">
                  <li><a href="{{route('index')}}">Home</a>
                  </li>
                  <li><a href="{{route('about')}}">About</a>
                  </li>
                  <li><a href="{{route('contact')}}">Contact</a>
                  </li>
                  <li><a href="{{route('products')}}">Products</a>
                  </li>
                  @if (!Auth::check())
                  <li><a href="{{route('login')}}">Employee Login</a>
                  </li>
                  <li><a href="{{route('register')}}">Employee Register</a>
                  </li>
                  @else
                  <li><a href="{{route('doctor.index')}}">Dashboard</a>
                  </li>
                  @endif
                  <li><a href="{{route('privacy-policy')}}">Privacy Policy</a>
                  </li>
                  <li><a href="{{route('term-condition')}}">Terms & Condition</a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-7 mt-5 mt-sm-0">
                <h5>Get In <span class="text-theme">Touch</span></h5>
                <ul class="media-icon list-unstyled">
                  <li class="mb-4"> <i class="flaticon-paper-plane"></i>
                    <p class="mb-0">Flat No.1/3D, Kanak Vrindavan Apple AN, Gandhi Path
                      Gram Sirsi, Jaipur, RAJASTHAN - 302021, INDIA</p>
                  </li>
                  <li class="mb-4"> <i class="flaticon-email"></i>
                    <a href="mailto:ewinhealthcare@gmail.com">ewinhealthcare@gmail.com</a>
                  </li>
                  <li> <i class="flaticon-phone-call"></i>
                    <a href="tel:+91-6376769003">+91-6376769003</a>
                  </li>
                  <li class="mt-4">
                    <i class="fa fa-copyright"></i>
                    <p class="mb-0">Copyright {{date('Y')}} - Ewin Healthcare Pvt. Ltd</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col">
            <div class="social-icons social-colored social-fullwidth">
              <ul class="list-inline mb-0">
                <li class="social-facebook"><a href="https://www.facebook.com/profile.php?id=100079199446025"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social-twitter"><a href="https://twitter.com/EwinHealthcare?t=CDLrnEpwnPKzkaBkzXfWDg&s=08"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="social-gplus"><a href="https://www.instagram.com/ewinhealthcare.pvt.ltd/"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </footer>
  
  <!--footer end-->
  