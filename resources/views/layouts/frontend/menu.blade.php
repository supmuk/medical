<header id="site-header" class="header">
    <div class="top-bar d-md-block d-none">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 col-md-12">
            <div class="topbar-link">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="mailto:ewinhealthcare@gmail.com"><i class="flaticon-email"></i>ewinhealthcare@gmail.com</a>
                </li>
                <li class="list-inline-item">
                  <a href="tel:+912345678900"> <i class="flaticon-phone-call"></i>+91-234-567-8900</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 text-end d-lg-block d-none">
            <div class="social-icons social-hover top-social-list">
              <ul class="list-inline">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li><a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="header-wrap">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand logo" href="{{route('index')}}">
                <img id="logo-img" class="img-fluid" src="{{asset('assets/images/logo.jpeg')}}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Left nav -->
                <ul class="nav navbar-nav mx-auto">
                  <li class="nav-item dropdown"> <a class="nav-link {{ Request::routeIs('index') ? 'active' : '' }}" href="{{route('index')}}">Home</a></li>
                  <li class="nav-item dropdown"> <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{route('about')}}">About</a></li>
                  <li class="nav-item dropdown"> <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact</a></li>
                  <li class="nav-item dropdown"> <a class="nav-link {{ Request::routeIs('products') ? 'active' : '' }}" href="{{route('products')}}">Products</a></li>
                  @if (!Auth::check())
                  <li class="nav-item dropdown"> <a class="nav-link {{ Request::routeIs('login') ? 'active' : '' }}" href="{{route('login')}}">Employee Login</a></li>
                  <li class="nav-item dropdown"> <a class="nav-link {{ Request::routeIs('register') ? 'active' : '' }}" href="{{route('register')}}">Employee Register</a></li>
                  @else
                  <li class="nav-item dropdown"> <a class="nav-link" href="{{route('doctor.index')}}">Dashboard</a></li>
                  @endif
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>