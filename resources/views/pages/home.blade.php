@extends('layouts.default')
@section('content')



<main id="notLogin">
<!-- Banner -->
<section id="v2-banner">
   <div class="container">
       <div class="row">
           <div class="col-lg-6 col-md-12 col-12">
               <div class="v2_banner_content">
                   <h1>
                       Boost Your Social <br> Media Presence
                   </h1>
                   <h4>with Our Advanced SMM Panel <span>#1</span></h4>
                   <p>
                       Our SMM panel is a powerful tool designed to help you increase your social media presence
                       and reach. With features such as automatic post scheduling, real-time analytics, and
                       targeted audience engagement, you can easily manage and grow your social media accounts.
                   </p>
                   <a href="/signup" class="btn btn-primary btn-gradient">
                       Sign Up Today
                   </a>
               </div>
           </div>
           <div class="col-lg-6 col-md-12 col-12">
               <div class="banner_image">
                   <div class="banner_animations">
                       <img src="{{ asset('img/hbkhxnhnztiycqge.png') }}" class="img-fluid tw_bnn" alt="">
                       <img src="{{ asset('img/3yn7mnj1oy7ilbhn.png') }}" class="img-fluid ig_bnn" alt="">
                       <img src="{{ asset('img/clbusy52y0mlrwb3.png') }}" class="img-fluid fb_bnn" alt="">
                       <img src="{{ asset('img/xazr4z4mhqtxrnyb.png') }}" class="img-fluid yt_bnn" alt="">
                       <img src="{{ asset('img/mr4rirebm7j6208h.png') }}" class="img-fluid tik_bnn" alt="">
                       <img src="{{ asset('img/ypy7wnlqj1zbcj3x.png') }}" class="img-fluid sp_bnn" alt="">
                   </div>
                   <img src="{{ asset('img/byejh8pniachgxox.webp') }}" class="img-fluid main-image" alt="">
               </div>
           </div>
       </div>
   </div>
</section>
<!-- ~~~~~~~~~~ Banner -->


<!-- Sign in part -->
<section id="signinSection">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-12">
               <div class="signin__container">
                   <div class="signin__inner">
                       <form class="signinForm" method="post" action="/">

                           <h3>Sign in to Your Account</h3>
                           
                                                       <div class="signin__access__wrap">
                               <div class="signin__username">
                                   <input type="text" name="LoginForm[username]" class="form-control"
                                       placeholder="Username" id="">
                               </div>
                               <div class="signin__password">
                                   <input type="password" name="LoginForm[password]"
                                       placeholder="Password" class="form-control" id="">
                               </div>
                               <input type="checkbox" name="LoginForm[remember]" value="1" id="remember" class="d-none"
                                   checked>
                               <div class="singin__button">
                                   <button type="submit" class="btn btn-primary btn-gradient btn__signin">
                                       Sign in
                                   </button>
                                                                   </div>
                           </div>
                           <input type="hidden" name="_csrf" value="A0Xmx9LZyp3_EQZ5_FphWn1lSkIqYwRT7ndW1Z8kQyxmaLevoqGJ0I9zRzyTFiwZOToBcmAaQQOKJzyC1WUKTg==">

                           <div class="singin__essent">
                                                               <div class="signup__wrap">
                                   <p>Do not have an account? <a href="/signup">Sign up</a></p>
                               </div>
                                                                                               <div class="forgotPassword">
                                   <a href="/resetpassword">Forgot password?</a>
                               </div>
                                                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- ~~~~~ Sign in part  -->
<!-- Counter Section -->
<section id="CounterSections">
   <div class="container">
       <div class="row">
           <div class="col-12">
               <div class="counter_wraper_bg">
                   <div class="row">
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="counter_item__wrap">
                               <div class="count__icon">
                                   <img src="{{ asset('img/ij0jsmr0r6cfd0lg.png') }}" class="img-fluid" alt="">
                               </div>
                               <div class="count__content">
                                   <h4>3832058</h4>
                                   <p>Total Orders</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="counter_item__wrap">
                               <div class="count__icon">
                                   <img src="{{ asset('img/f8qp667lnyotwltx.png') }}" class="img-fluid" alt="">
                               </div>
                               <div class="count__content">
                                   <h4>$0.001/1K</h4>
                                   <p>Starting Price</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="counter_item__wrap">
                               <div class="count__icon">
                                   <img src="{{ asset('img/7iutnxj50kalhxth.png') }}" class="img-fluid" alt="">
                               </div>
                               <div class="count__content">
                                   <h4>24/7</h4>
                                   <p>Fastest Support</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="counter_item__wrap">
                               <div class="count__icon">
                                   <img src="{{ asset('img/gq7dshxbmyi1bz4d.png') }}" class="img-fluid" alt="">
                               </div>
                               <div class="count__content">
                                   <h4>5253+</h4>
                                   <p>Happy Clients</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<!-- Top SMM Services -->
<section id="top__smm">
   <div class="container">
       <div class="row d-flex align-items-center">
           <div class="col-lg-6 col-md-6 col-12">
               <h2 class="section__title">Top Smm Services <br> We Provide</h2>
               <p class="mb-3">
                   At TechSMM, we pride ourselves on delivering top-tier Social Media Marketing (SMM) services designed
                   to elevate your online presence and drive unparalleled engagement. With our comprehensive suite of
                   solutions, we empower businesses of all sizes to harness the full potential of social media
                   platforms.
               </p>
               <a href="/services" class="btn btn-primary btn-gradient mb-md-0 mb-4">See All Our Services</a>
           </div>
           <div class="col-lg-6 col-md-6 col-12">
               <div class="top__smm__img text-end">
                   <img src=" {{ asset('img/mirfysp3pqms7f4w.png') }}" class="img-fluid img-icon-favs" alt="">
                   <img src=" {{ asset('img/i4p565racyepdmkj.png') }}" class="img-fluid roateds" alt="">
               </div>
           </div>
       </div>
   </div>
</section>

<!-- Cheapest Fastest -->
<section id="cheapest">
   <img src="{{ asset('img/faqljdb79hhjkbta.png') }}" class="img-fluid gradient-1" alt="">
   <img src="{{ asset('img/22pxj7otedd2hlmy.png') }}" class="img-fluid gradient-2" alt="">
   <div class="container">
       <div class="row d-flex align-items-center cheap_content_wrapers">
           <div class="col-lg-6 col-md-6 col-12">
               <div class="cheapest_img text-start">
                   <img src="{{ asset('img/1ool5is2ww7qd78k.webp') }}" class="img-fluid" alt="">
               </div>
           </div>
           <div class="col-lg-6 col-md-6 col-12">
               <div class="cheapest__content__wrap">
                   <h2 class="section__title mb-2">
                       Cheapest & Fastest Smm Services For All Social Media Accounts.
                   </h2>
                   <p>
                       At TechSMM, we specialize in providing the most cost-effective and expeditious Social Media
                       Marketing (SMM) services for all your social accounts. Our tailored solutions are designed to
                       skyrocket your online presence without burning a hole in your pocket.
                   </p>
                   <p>
                       Experience unparalleled speed and efficiency as we boost your visibility across various social
                       media platforms. Trust TechSMM to amplify your online reach promptly and affordably. Take the
                       fast track to social media success with our budget-friendly and expedited services.
                   </p>
                   <a href="/services" class="btn btn-primary btn-gradient mb-4">Learn More</a>
               </div>
           </div>
       </div>
   </div>
</section>


<!--  Best SMM Panel  -->
<section id="bestsmmpanel">
   <div class="best_bg_ring">
       <img src="{{ asset('img/creb106gshxb02ql.png') }}" class="img-fluid" alt="">
   </div>
   <div class="bestsmm__bg__animations">
       <img src="{{ asset('img/gu3884er6wkbn75m.png') }}" class="img-fluid" alt="">
   </div>
   <div class="container">
       <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
               <h2 class="section__title text-white">Best SMM Panel <br>For Resellers</h2>
               <p class="text-white">
                   Discover unparalleled convenience and excellence in social media marketing with TechSMM, the
                   industry's foremost SMM panel for resellers. Our platform offers resellers a seamless experience,
                   providing access to premium services and tools tailored to elevate your SMM ventures.
               </p>
               <div class="best__btn__wrap">
                   <a href="/signup" class="btn btn-primary btn-gradient btn__best bg__blck">Create Account</a>
                   <a href="https://api.whatsapp.com/send?phone=8801728744283" target="_blank" class="btn btn-primary btn-gradient btn__best bg__white">Get Discounts</a>
               </div>
           </div>
           <div class="col-lg-6 col-md-6 col-12">
               <div class="best_smm_panel">
                   <div class="best_smm_animations">
                       <img src="{{ asset('img/hbkhxnhnztiycqge.png') }}" class="img-fluid tw_bnn" alt="">
                       <img src="{{ asset('img/3yn7mnj1oy7ilbhn.png') }}" class="img-fluid ig_bnn" alt="">
                       <img src="{{ asset('img/clbusy52y0mlrwb3.png') }}" class="img-fluid fb_bnn" alt="">
                       <img src="{{ asset('img/xazr4z4mhqtxrnyb.png') }}" class="img-fluid yt_bnn" alt="">
                       <img src="{{ asset('img/mr4rirebm7j6208h.png') }}" class="img-fluid tik_bnn" alt="">
                       <img src="{{ asset('img/ypy7wnlqj1zbcj3x.png') }}" class="img-fluid sp_bnn" alt="">
                   </div>
                   <img src="{{ asset('img/pr4akiso37645w4p.webp') }}" class="img-fluid smmpanel_best_main__image" alt="">
               </div>
           </div>
       </div>
   </div>
</section>


<!-- How It Works Section -->
<section id="howItWorksSection">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
               <h2 class="section__title text-center mb-5">How It Works</h2>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
               <div class="how-its-items">
                   <div class="how_icon_up">
                       <img src="{{ asset('img/366oxz0z7m7g1xxc.png') }}" alt="">
                   </div>
                   <div class="how-icons">
                       <iconify-icon icon="iconamoon:profile-fill"></iconify-icon>
                   </div>
                   <div class="how-its-content">
                       <h4>Create An Account <br> & Add Balance</h4>
                       <p>
                           Begin your journey with us by signing up and creating your account. Once registered, access
                           your account by logging in. To get started, deposit funds.
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <div class="how-its-items">
                   <div class="how_icon_up">
                       <img src="{{ asset('img/i8ektby0f9pf9n63.png') }}" alt="">
                   </div>
                   <div class="how-icons">
                       <iconify-icon icon="ic:round-home-repair-service"></iconify-icon>
                   </div>
                   <div class="how-its-content">
                       <h4>
                           Select Your <br> Targeted Service
                       </h4>
                       <p>
                           Select the services you need from either the Services page or the New Order section. Easily
                           find and choose the desired services to fulfill your requirements.
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <div class="how-its-items">
                   <div class="how-icons">
                       <iconify-icon icon="fa-solid:link"></iconify-icon>
                   </div>
                   <div class="how-its-content">
                       <h4>
                           Provide Link, Quantity <br> & Watch Results!
                       </h4>
                       <p>
                           Providing the correct links and quantities. Instantly view
                           the total cost of your order before finalizing. After placing an order, just wait a few hours
                           to see the magic of TechSMM.
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<!-- faq -->
<section id="faqSection">
   <div class="container">
       <div class="row d-flex align-items-center">
           <div class="col-lg-6 col-md-6 col-12">
               <div class="faq__conetent__wrap">
                   <h2 class="section__title">
                       Frequently Asked Questions
                   </h2>
                   <p>
                       The SMM panel is basically a social media marketing panel where you can buy targeted actions
                       like (followers, likes, subscribers, views, tweets, shares, etc.) but we also understand that
                       our clients may have many questions, and we have prepared some of the most important and
                       frequently asked questions in order to clear up any confusion regarding the Purpose and Process
                       of the TechSMM Panel. After viewing the FAQ, it will be easy for you to place an order
                       with us.
                   </p>
                   <a href="/faq" class="btn btn-primary btn-gradient">View All FAQ</a>
               </div>
           </div>
           <div class="col-lg-6 col-md-6 col-12">
               <div class="accordion__wraper">
                   <div class="accordion accordion-flush" id="accordionFlushExample">
                       <div class="accordion-item">
                           <h2 class="accordion-header">
                               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                   data-bs-target="#flush-collapseOne" aria-expanded="false"
                                   aria-controls="flush-collapseOne">
                                   What is SMM PANEL?
                               </button>
                           </h2>
                           <div id="flush-collapseOne" class="accordion-collapse collapse"
                               data-bs-parent="#accordionFlushExample">
                               <div class="accordion-body">
                                   <a href="https://techsmm.com/" tabindex="0"> Smm panel</a> is a panel where you can
                                   buy social media ( Facebook, Twitter, Instagram, YouTube, Spotify, Tiktok, and other
                                   social media ) likes, followers, views, Comments, Subscribers, and as well as
                                   Website
                                   traffic. Customers choose the <a href="https://techsmm.com/" tabindex="0">cheapest
                                       smm
                                       panel</a> because of its cheap price, faster delivery, and all social media
                                   services
                                   available on 1 website.
                               </div>
                           </div>
                       </div>
                       <div class="accordion-item">
                           <h2 class="accordion-header">
                               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                   data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                   aria-controls="flush-collapseTwo">
                                   Is SMM Panel Safe?
                               </button>
                           </h2>
                           <div id="flush-collapseTwo" class="accordion-collapse collapse"
                               data-bs-parent="#accordionFlushExample">
                               <div class="accordion-body">
                                   The SMM panels on our platform are extremely safe, protected against DDoS assaults,
                                   and
                                   updated frequently. Additionally, each and every one of them possesses a
                                   certificate,
                                   which is crucial for protecting the privacy of your clients' and your own personal
                                   information.
                               </div>
                           </div>
                       </div>
                       <div class="accordion-item">
                           <h2 class="accordion-header">
                               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                   data-bs-target="#flush-collapseThree" aria-expanded="false"
                                   aria-controls="flush-collapseThree">
                                   How does TechSMM Work?
                               </button>
                           </h2>
                           <div id="flush-collapseThree" class="accordion-collapse collapse"
                               data-bs-parent="#accordionFlushExample">
                               <div class="accordion-body">
                                   TechSMM assist you in connecting and interacting with a bigger base of current and
                                   potential customers. SMM panels assist you in spreading fresh updates about your
                                   company
                                   to a larger audience when you post about a product. We work with you as a Facebook
                                   or
                                   Instagram business to enhance your engagement and conversion.
                               </div>
                           </div>
                       </div>
                       <div class="accordion-item">
                           <h2 class="accordion-header">
                               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                   data-bs-target="#flush-collapseFour" aria-expanded="false"
                                   aria-controls="flush-collapseFour">
                                   Which is the best SMM Panel?
                               </button>
                           </h2>
                           <div id="flush-collapseFour" class="accordion-collapse collapse"
                               data-bs-parent="#accordionFlushExample">
                               <div class="accordion-body">
                                   TechSMM is the best SMM panel as they provide smm services in cheap and is the best
                                   <a href="https://techsmm.com/blog/">SMM reseller
                                       panel</a> in the market as well.
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

<!-- Why Choose Us Section -->
<section id="whyChooseUs">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
               <h2 class="text-white section__title text-center mb-5">
                   Why Choose Us
               </h2>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
               <div class="why__item__wrap">
                   <div class="why__item__top">
                       <div class="why__icon">
                           <img src="{{ asset('img/lf1o9wn7mttabpd3.png') }}" alt="High Quality Service" class="img-fluid">
                       </div>
                       <h3>
                           High Quality <br>
                           Service
                       </h3>
                   </div>
                   <p>
                       Experience excellence with our high-quality SMM services. At TechSMM, we're committed to
                       delivering top-tier solutions that elevate your online presence and engagement, ensuring
                       exceptional results for your brand.
                   </p>
               </div>
           </div>

           <div class="col-lg-6 col-md-6 col-12">
               <div class="why__item__wrap">
                   <div class="why__item__top">
                       <div class="why__icon">
                           <img src="{{ asset('img/022qgl198xqcwbbs.png') }}" alt="Affordable Services" class="img-fluid">
                       </div>
                       <h3>
                           Starting From <br> $0.001
                       </h3>
                   </div>
                   <p>
                       Unlock powerful SMM solutions at unbeatable prices, starting from just $0.001. Access a range of
                       services designed to fit your budget and amplify your online presence affordably.
                   </p>
               </div>
           </div>

           <div class="col-lg-6 col-md-6 col-12">
               <div class="why__item__wrap">
                   <div class="why__item__top">
                       <div class="why__icon">
                           <img src="{{ asset('img/gczdcew55k6wtwkn.png') }}" alt="Super Fast Delivery" class="img-fluid">
                       </div>
                       <h3>
                           We Provide Super <br> Fast Delivery
                       </h3>
                   </div>
                   <p>
                       Experience lightning-fast results with our super-fast delivery. At TechSMM, we prioritize prompt
                       service, ensuring your social media needs are met swiftly and efficiently.
                   </p>
               </div>
           </div>

           <div class="col-lg-6 col-md-6 col-12">
               <div class="why__item__wrap">
                   <div class="why__item__top">
                       <div class="why__icon">
                           <img src="{{ asset('img/3cf5gzlbpcknh49u.png') }}" alt="User Friendly Dashboard" class="img-fluid">
                       </div>
                       <h3>
                           User Friendly <br> Dashboard
                       </h3>
                   </div>
                   <p>
                       Navigate effortlessly through our user-friendly dashboard. Our intuitive interface is designed
                       to offer ease of use, enabling you to manage your SMM activities seamlessly and efficiently.
                   </p>
               </div>
           </div>
       </div>
   </div>
</section>


<!-- Testimonials Section -->
<section id="testimonialSection">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
               <h2 class="section__title text-center mb-5">
                   Testimonials
               </h2>

               <div class="testimonials__wraper">
                   <!-- Slider main container -->
                   <div class="swiper">
                       <!-- Additional required wrapper -->
                       <div class="swiper-wrapper">
                           <!-- Slides -->
                           <div class="swiper-slide">
                               <div class="testimonial__item__wrap">
                                   <div class="top__icon text-center">
                                       <img src="{{ asset('img/aey68dtgirxgdepw.png') }}"
                                            class="img-fluid" alt="Testimonial Icon">
                                   </div>
                                   <p>
                                       "TechSMM has been a game-changer for our social media presence. Their services helped us skyrocket our engagement and reach. Highly recommended!"
                                   </p>
                                   <div class="testi__user text-center">
                                       <div class="stars text-center">
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </div>
                                       <h4>Sarah Johnson</h4>
                                       <p>CEO of Digital Boosters</p>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="testimonial__item__wrap">
                                   <div class="top__icon text-center">
                                       <img src="{{ asset('img/aey68dtgirxgdepw.png') }}"
                                            class="img-fluid" alt="Testimonial Icon">
                                   </div>
                                   <p>
                                       "Impressed with TechSMM's professionalism and quality service. Their prompt delivery and strategic approach significantly boosted our online visibility."
                                   </p>
                                   <div class="testi__user text-center">
                                       <div class="stars text-center">
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </div>
                                       <h4>Mark Stevens</h4>
                                       <p>Marketing Manager at Insightful Minds</p>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="testimonial__item__wrap">
                                   <div class="top__icon text-center">
                                       <img src="{{ asset('img/aey68dtgirxgdepw.png') }}"
                                            class="img-fluid" alt="Testimonial Icon">
                                   </div>
                                   <p>
                                       "I've tried several SMM services, but TechSMM stands out. Their user-friendly platform and exceptional results have been instrumental in our growth."
                                   </p>
                                   <div class="testi__user text-center">
                                       <div class="stars text-center">
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </div>
                                       <h4>Emily Carter</h4>
                                       <p>Founder of Sparkling Trends</p>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="testimonial__item__wrap">
                                   <div class="top__icon text-center">
                                       <img src="{{ asset('img/aey68dtgirxgdepw.png') }}"
                                            class="img-fluid" alt="Testimonial Icon">
                                   </div>
                                   <p>
                                       "TechSMM's expertise and commitment to quality are commendable. Their fast delivery and comprehensive solutions have been invaluable to our campaigns."
                                   </p>
                                   <div class="testi__user text-center">
                                       <div class="stars text-center">
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </div>
                                       <h4>Alex Ramirez</h4>
                                       <p>Social Media Strategist at Buzz Hive</p>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="testimonial__item__wrap">
                                   <div class="top__icon text-center">
                                       <img src="{{ asset('img/aey68dtgirxgdepw.png') }}"
                                            class="img-fluid" alt="Testimonial Icon">
                                   </div>
                                   <p>
                                       "TechSMM exceeded our expectations. The high-quality services and competitive pricing have made them our go-to choice for all our SMM needs."
                                   </p>
                                   <div class="testi__user text-center">
                                       <div class="stars text-center">
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </div>
                                       <h4>Rachel Thompson</h4>
                                       <p>Marketing Director at Bright Horizons</p>
                                   </div>
                               </div>
                           </div>
                           <div class="swiper-slide">
                               <div class="testimonial__item__wrap">
                                   <div class="top__icon text-center">
                                       <img src="{{ asset('img/aey68dtgirxgdepw.png') }}"
                                            class="img-fluid" alt="Testimonial Icon">
                                   </div>
                                   <p>
                                       "TechSMM has been instrumental in our social media strategy. Their affordable pricing combined with exceptional service quality helped us reach new audiences and boost sales. Grateful for their impactful contributions to our success!"
                                   </p>
                                   <div class="testi__user text-center">
                                       <div class="stars text-center">
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                           <i class="fa fa-star"></i>
                                       </div>
                                       <h4>Michael Chen</h4>
                                       <p>E-commerce Entrepreneur at ZenCommerce</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- If we need pagination -->
                       <div class="swiper-pagination"></div>

                       <!-- If we need navigation buttons -->
                       <button class="sliderBtn slide-prev" type="button">
                           <iconify-icon icon="lets-icons:arrow-drop-left"></iconify-icon>
                       </button>
                       <button class="sliderBtn slide-next" type="button">
                           <iconify-icon icon="lets-icons:arrow-drop-right"></iconify-icon>
                       </button>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<!-- Blog Section -->
<section id="blogSection">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-md-12 col-12">
               <h2 class="section__title text-center mb-5">
                   Read Our Blog
               </h2>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
               <div class="blog__card">
                   <div class="blog__image">
                       <img src="{{ asset('img/j3eam8nltm5riejw.png') }}" alt="Blog Image 1" class="img-fluid">
                   </div>
                   <div class="blog__content">
                       <h6 class="blog__date">Nov 1, 2023</h6>
                       <h3>
                           Techsmm - # 1 SMM panel | Cheapest SMM panel | Main Provider worldwide.
                       </h3>
                       <p>
                           Social media has become an integral part of our personal and professional lives. With the rise of social media platforms, businesses have started to...
                       </p>
                       <a href="https://techsmm.com/blog/techsmm00" class="btn btn-primary btn-sm btn-gradient">Learn More</a>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <div class="blog__card">
                   <div class="blog__image">
                       <img src="{{ asset('img/r4o1ftjb3ywbbg1z.png') }}" alt="Blog Image 2" class="img-fluid">
                   </div>
                   <div class="blog__content">
                       <h6 class="blog__date">Nov 1, 2023</h6>
                       <h3>
                           Reliable SMM Panel Provider: Strategies for Business Success
                       </h3>
                       <p>
                           The Power of Cross-Platform Promotion: Reaching a Wider Audience for Your Brand. This article explores the benefits and strategies of cross-platform...
                       </p>
                       <a href="https://techsmm.com/blog/theultimateguidetosocialmediapromotionstrategiesforbusinesssuccess" class="btn btn-primary btn-sm btn-gradient">Learn More</a>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
               <div class="blog__card">
                   <div class="blog__image">
                       <img src="{{ asset('img/b6lmetmyt5bz7ss6.png') }}" alt="Blog Image 3" class="img-fluid">
                   </div>
                   <div class="blog__content">
                       <h6 class="blog__date">Nov 1, 2023</h6>
                       <h3>
                           Cheapest SMM Panel - Best SMM Panel In The Whole Market
                       </h3>
                       <p>
                           Are you looking for ways to earn some extra cash during your study and work hours? Have you ever thought about using your smartphone to earn money online?...
                       </p>
                       <a href="https://techsmm.com/blog/cheapestsmmpanel-bestsmmpanelintheholemarket" class="btn btn-primary btn-sm btn-gradient">Learn More</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<section id="paymentSection">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 col-12">
               <h2 class="section__title text-center">
                   We Accept Multiple Payment Methods
               </h2>
               <div class="payment__images">
                   <img src=" {{ asset('img/srtwbbr2kkl8qjg8.png') }}" class="img-fluid for_desktop" alt="">
                   <img src=" {{ asset('img/187e2gr6e4bsaxz1.png') }} " class="img-fluid for_phone" alt="">
               </div>
           </div>
       </div>
   </div>
</section>
 </main>




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