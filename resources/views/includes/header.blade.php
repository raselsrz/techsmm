<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src=" {{ asset('img/hjzk7i0ydcb6cf5i.png') }} " alt="Tech SMM" title="">
      </a>
      <button class="navbar-toggler nav__icons" type="button" onclick="navToggleMob()">
        <img src=" {{ asset('img/gfaiw2lpy4sb6xan.png') }}  " class="img-fluid" alt="">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item d-flex align-items-center">
              <a class="nav-link {{ Request::routeIs('signins') ? 'active' : '' }}" aria-current="page"
                 href="{{ route('signins') }}">
                  <i class="navbar-icon fas fa-address-book"></i>
                  Sign in
              </a>
          </li>
          <li class="nav-item d-flex align-items-center">
              <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" aria-current="page" href="/services">
                  <i class="navbar-icon fas fa-server"></i>
                  Services
              </a>
          </li>
          <li class="nav-item d-flex align-items-center">
              <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" aria-current="page" href="/blog">
                  <i class="navbar-icon fas fa-address-card"></i>
                  Blog
              </a>
          </li>
          <li class="nav-item d-flex align-items-center">
              <a class="nav-link {{ Request::is('api') ? 'active' : '' }}" aria-current="page" href="/api">
                  <i class="navbar-icon fas fa-wifi"></i>
                  API
              </a>
          </li>
          <li class="nav-item d-flex align-items-center">
              <a class="nav-link {{ Request::is('faq') ? 'active' : '' }}" aria-current="page" href="/faq">
                  <i class="navbar-icon fas fa-bible"></i>
                  FAQ
              </a>
          </li>
          <li class="nav-item btn__sp__nav">
              <a href="/signup" class="btn btn-primary btn-gradient">
                  <span class="sp__icon">
                      <i class="fas fa-user"></i>
                  </span>
                  <span class="btn__txt">
                      Sign Up
                  </span>
              </a>
          </li>
      </ul>
      
      </div>
    </div>
  </nav>
  <div id="navMob">
    <button id="cls" onclick="navToggleMob()"><i class="fas fa-times"></i></button>
    <div class="nav_content">
      <div class="menu">
        <ul class="menu_mobs">
          <li>
              <a href="{{ route('signins') }}" class="{{ Request::routeIs('signins') ? 'active' : '' }}">
                  <i class="navbar-icon fas fa-address-book"></i>
                  Sign in
              </a>
          </li>
          <li>
              <a href="{{ route('signups') }}" class="{{ Request::routeIs('signups') ? 'active' : '' }}">
                  <i class="navbar-icon far fa-address-book"></i>
                  Sign up
              </a>
          </li>
          <li>
              <a href="{{ route('servicesHome') }}" class="{{ Request::routeIs('servicesHome') ? 'active' : '' }}">
                  <i class="navbar-icon fas fa-server"></i>
                  Services
              </a>
          </li>
          <li>
              <a href="{{ route('blogHome') }}" class="{{ Request::routeIs('blogHome') ? 'active' : '' }}">
                  <i class="navbar-icon fas fa-address-card"></i>
                  Blog
              </a>
          </li>
          <li>
              <a href="{{ route('apiHome') }}" class="{{ Request::routeIs('apiHome') ? 'active' : '' }}">
                  <i class="navbar-icon fas fa-wifi"></i>
                  API
              </a>
          </li>
          <li>
              <a href="{{ route('faqHome') }}" class="{{ Request::routeIs('faqHome') ? 'active' : '' }}">
                  <i class="navbar-icon fas fa-bible"></i>
                  FAQ
              </a>
          </li>
      </ul>
      
      </div>
      <div class="btn">
        <a href=" {{ route('signins') }}   ">Sign in</a>
        <a href="{{ route('signups') }}">Sign up <span class="btn_icon"><i class="fas fa-arrow-right"></i></span></a>
      </div>
    </div>
  </div>