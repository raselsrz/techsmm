@extends('layouts.default')
@section('content')



          <main id="notLogin">
    <section id="signUp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sigup_title">
          <h1>Sign In Now</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3 mb-5">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card card_v2 mb-5">
          <div class="card-body">
  
            <form  action="#">
               
            <div class="form-group mb-3">
                <label for="email" class="control-label mb-1">
                  <span class="icon">
                    <i class="fas fa-envelope"></i>
                  </span> 
                  <span class="name">
                    Email
                  </span>
                  </label>
                <input type="email" class="form-control" id="email" value="" name="RegistrationForm[email]">
              </div>


            <div class="form-group mb-3">
                <label for="password" class="control-label mb-1">
                  <span class="icon">
                    <i class="fas fa-lock"></i>
                  </span> 
                  <span class="name">
                    Password
                  </span>
                 </label>
                <input type="password" class="form-control" id="password" name="RegistrationForm[password]">
              </div>
            <div class="mb-3">
                <div class="g-recaptcha form-group" data-sitekey="6Ld95rUaAAAAAJIw6Refgo4uPXdJuON37h6A2xwz"></div>
              </div>
                                
              <button type="submit" class="btn btn-primary btn-gradient w-100">Sign up</button>
            </form>
            <p class="text-center">
              Already have an account? <a href="{{ route('signups') }}">Sign Up</a>
            </p>
  
  
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>
  </main>
  
  

<style>
    .whatsapp-container{padding:24px}.whatsapp-button{width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF!important;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;display:flex;align-items:center;justify-content:center;text-decoration:none!important;-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;transform:scale(0.9)}.whatsapp-button:hover{transform:scale(1);background-color:#1fcc5f}
</style>
<div class="integration-fixed integration-fixed__bottom-right">
    <div class="whatsapp-container">
        <a href="https://api.whatsapp.com/send?phone=+8801708924551" target="_blank" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</div>


  <!-- Modal -->
  {{-- <div class="modal fade" id="GGstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="GGstaticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body status_modal">
          <!-- <div class="d-flex align-items-start"> -->
          <button type="button" class="modal_status_close btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="far fa-times"></i>
          </button>
          <div class="row">
            <div class="col-md-2">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link text-start  active" id="v-pills-NEW-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-NEW" type="button" role="tab" aria-controls="v-pills-NEW"
                  aria-selected="true"><i class="fas fa-star"></i> NEW</button>
                <button class="nav-link text-start" id="v-pills-JUNIOR-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-JUNIOR" type="button" role="tab" aria-controls="v-pills-JUNIOR"
                  aria-selected="false"><i class="fas fa-child"></i> JUNIOR </button>
                <button class="nav-link text-start" id="v-pills-Regular-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-Regular" type="button" role="tab" aria-controls="v-pills-Regular"
                  aria-selected="false"><i class="fad fa-user-astronaut"></i> REGULAR</button>
                <button class="nav-link text-start" id="v-pills-FREQUENT-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-FREQUENT" type="button" role="tab" aria-controls="v-pills-FREQUENT"
                  aria-selected="false"><i class="fas fa-gem"></i> FREQUENT </button>

                <button class="nav-link text-start" id="v-pills-ELITE-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-ELITE" type="button" role="tab" aria-controls="v-pills-ELITE"
                  aria-selected="false"><i class="fas fa-badge-sheriff"></i> ELITE</button>
                <button class="nav-link text-start" id="v-pills-VIP-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-VIP" type="button" role="tab" aria-controls="v-pills-VIP"
                  aria-selected="false"><i class="fas fa-chess-king"></i> VIP </button>

                <button class="nav-link text-start" id="v-pills-MASTER-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-MASTER" type="button" role="tab" aria-controls="v-pills-MASTER"
                  aria-selected="false"><i class="fas fa-crown"></i> MASTER</button>

              </div>
            </div>
            <div class="col-md-10">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-NEW" role="tabpanel"
                  aria-labelledby="v-pills-NEW-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-star"></i> NEW</h3>
                    <ul>
                      <p>👍24/7 ticket support</p>
                    
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-JUNIOR" role="tabpanel" aria-labelledby="v-pills-JUNIOR-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-child"></i> JUNIOR</h3>
                    <ul>
                      <p>👍24/7 ticket support</p>
                      
                      <p>👍Child Panel - Discount ( 50% Discount for 1st month bill )</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-Regular" role="tabpanel" aria-labelledby="v-pills-Regular-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fad fa-user-astronaut"></i> REGULAR</h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                    
                      <p>👍 Up to 5% Payments Bonus</p>
                      <p>👍Free Child Panel ( 1st Month Free )</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-FREQUENT" role="tabpanel" aria-labelledby="v-pills-FREQUENT-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-gem"></i> FREQUENT</h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                   
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-ELITE" role="tabpanel" aria-labelledby="v-pills-ELITE-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-badge-sheriff"></i> ELITE</h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                      
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                      <p>👍 5-10% Discount Available</p>
                    </ul>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-VIP" role="tabpanel" aria-labelledby="v-pills-VIP-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-chess-king"></i> VIP </h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                      
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                      <p>👍 5-10% Discount Available</p>
                      <p>👍 Early Notification On new services</p>
                      <p>👍 Whatsapp Support by Team</p>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-MASTER" role="tabpanel" aria-labelledby="v-pills-MASTER-tab">
                  <div class="account_benifits">
                    <h4>Account Benefits</h4>
                    <h3><i class="fas fa-crown"></i> MASTER </h3>
                    <ul>
                      <p>👍 24/7 Tickets Support</p>
                      <p>👍 Up to 5% Payments Bonus</p>
                    
                      <p>👍 Free Child Panel - Lifetime (Min 500$ spend per month)</p>
                      <p>👍 Priority Tickets Support by Team</p>
                      <p>👍 5-10% Discount Available</p>
                      <p>👍 Early Notification On new services</p>
                      <p>👍 Whatsapp Support by Team</p>
                      <p>👍 Special Discount by the admin</p>
                      <p>👍 Support handle by the admin</p>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div> --}}

  


  <footer class="footer__v2">
    <div class="container">
 
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="logo__white">
            <img src=" {{ asset('img/hjzk7i0ydcb6cf5i.png') }}" class="img-fluid" alt="">
          </div>
          <div class="infos__wrap">
            <div class="infos__icon">
              <iconify-icon icon="simple-line-icons:location-pin"></iconify-icon>
            </div>
            <div class="infos__txt">
              <h6>Call Us: </h6>
              <a href="tel:+8801728744283" class="inof__link">+8801728744283</a>
            </div>
          </div>
 
          <div class="infos__wrap">
            <div class="infos__icon">
              <iconify-icon icon="clarity:email-solid"></iconify-icon>
            </div>
            <div class="infos__txt">
              <h6>Email Us: </h6>
              <a href="mailto:+techsmmoo1@gmail.com" class="inof__link">techsmmoo1@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="foo__link__wraper">
            <h4>Quick Links</h4>
            <div class="foo__menu">
              <a href="/">Home</a>
              <a href="/services">Services</a>
              <a href="/api">API</a>
              <a href="/blog">Blog</a>
              <a href="/signup">Sign Up</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="foo__link__wraper">
            <h4>Company</h4>
            <div class="foo__menu">
              <a href="/">Terms & Conditions</a>
              <a href="/">Privacy Policy</a>
              <a href="/faq">FAQ</a>
              <a href="/">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12"></div>
      </div>
      <div class="hr-line mt-5"></div>
      <h6 class="text-center text-white mb-0 mt-3">© copyright 2023 Tech SMM | All Rights Reserved</h6>
    </div>
  </footer>
 
 
 
 @stop
 @push('js')
 @endpush