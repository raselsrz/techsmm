
@extends('layouts.dashboard') 
@section('content')



    <script>
    if (localStorage.getItem('techSMMCurrentMode')) {
      const bodyFire2 = document.getElementById('body');
      bodyFire2.classList.add('nightmode');
    }
  </script>
  <main id="main_container">
    <div class="d-none mob_bg_closer_sidebar" onclick="toggleSidebar()"></div>
    @include('pages.dashboard.includes.sidebar')

    <div class="content_area">
        

      @include('pages.dashboard.includes.topHeader')
      <div class="content">
        <!-- page and other top info -->
        <div id="page_info">

        </div>
        <!-- // page and other top info -->
        <section id="faq">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card card_v2">
                    <div class="card-body">
                        <div id="def_side_title">
                            <div class="icon">
                              <i class="fas fa-question"></i>
                            </div>
                            <div class="name">
                                Frequently Asked Question
                            </div>
                          </div>
                          <div id="def_side_content">
                            <div class="accordion paymentpage site_accordion" id="accordionExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="far fa-question-circle"></i> What is Partial status?
 
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>Partial Status is when we partially refund the remains of an order. Sometimes for some reasons we are unable to deliver a full order, so we refund you the remaining undelivered amount. Example: You bought an order with quantity 10 000 and charges 10$, let's say we delivered 9 000 and the remaining 1 000 we couldn't deliver, then we will "Partial" the order and refund you the remaining 1 000 (1$ in this example)
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="far fa-question-circle"></i> What is Drip Feed?
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        <span>Drip Feed is a service that we are offering so you would be able to put the same order multiple times automatically. Example: let's say you want to get 1000 likes on your Instagram Post but you want to get 100 likes each 30 minutes, you will put Link: Your Post Link Quantity: 100 Runs: 10 (as you want to run this order 10 times, if you want to get 2000 likes, you will run it 20 times, etc&amp;hellip;) Interval:30 (because you want to get 100 likes on your post each 30 minutes, if you want each hour, you will put 60 because the time is in minutes) P.S: Never order more quantity than the maximum which is written on the service name (Quantity x Runs),Example if the service's max is 4000, you don&amp;rsquo;t put Quantity: 500 and Run: 10,because total quantity will be 500x10 = 5000 which is bigger than the service max (4000). Also never put the Interval below the actual start time (some services need 60 minutes to start, don&amp;rsquo;t put Interval less than the service start time or it will cause a fail in your order).</span>
                                     </p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="far fa-question-circle"></i> How do I use mass order?
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        You put the service ID followed by | followed by the link followed by | followed by quantity on each line To get the service ID of a service please check here: https://techsmm.com/services Let&amp;rsquo;s say you want to use the Mass Order to add Instagram Followers to your 3 accounts: abcd, asdf, qwer From the Services List @ https://techsmm.com/services, the service ID for this service Instagram Followers [5K]; is 187 Lets say you want to add 1000 followers for each account, the output will be like this: ID|Link|Quantity or in this example: 187|abcd|1000 187|asdf|1000 187|qwer|1000
                                     </p>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <i class="far fa-question-circle"></i> I want a panel like yours / I want to resell your services how?
                                  </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        To get a panel like ours, please check https://bit.ly/2EejTNn to rent a panel, and then you can connect to us via API easily!
                                     </p>
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    <i class="far fa-question-circle"></i> Cancel button / Refill button is not working for me?
                                  </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        The cancel or refill button sends a trigger to cancel or refill an order, it doesn't work instantly, it's just a trigger, sometimes it's too late to stop an order, and sometimes an order might not need refill.
                                     </p>
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingsix">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    <i class="far fa-question-circle"></i> Can i get a discount?
                                  </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        Yes we can offer it if you are a big buyer
                                     </p>
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="headingseven">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    <i class="far fa-question-circle"></i> When can you activate my paypal?
                                  </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        You can use Paypal whenever you want by following the instructions in the Add Funds page (manual use) To have it automatically enabled, you have to have added at least 30$ in your account, and then you can send us a ticket with your username to enable it for you!
                                     </p>
                                  </div>
                                </div>
                              </div>
          
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <i class="far fa-question-circle"></i> Does drip feed work with mass order / or with API?
                                  </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        Drip Feed doesn't work with neither "Mass Order" nor API.
                                     </p>
                                  </div>
                                </div>
                              </div>


                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading9">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    <i class="far fa-question-circle"></i> How to get youtube comment link?
                                  </button>
                                </h2>
                                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        Find the timestamp that is located next to your username above your comment (for example: "3 days ago") and hover over it then right click and "Copy Link Address". The link will be something like this: https://www.youtube.com/watch?v=12345&amp;amp;lc=a1b21etc instead of just https://www.youtube.com/watch?v=12345 To be sure that you got the correct link, paste it in your browser's address bar and you will see that the comment is now the first one below the video and it says "Highlighted comment".
                                     </p>
                                  </div>
                                </div>
                              </div>

                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading10">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    <i class="far fa-question-circle"></i> What is "Instagram mentions", how do you use it?
                                  </button>
                                </h2>
                                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        Instagram Mention is when you mention someone on Instagram (example @abcde this means you have mentioned abcde under this post and abcde will receive a notification to check the post). Basically the Instagram Mentions [User Followers], you put the link of your post, and the username of the person that you want us to mention HIS FOLLOWERS!
                                     </p>
                                  </div>
                                </div>
                              </div>

                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading11">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    <i class="far fa-question-circle"></i> The link must be added before the user goes live or after?
                                  </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        After he goes live, or just 5 second before he goes!
                                     </p>
                                  </div>
                                </div>
                              </div>

                              <div class="accordion-item">
                                <h2 class="accordion-header" id="heading12">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    <i class="far fa-question-circle"></i> What is "Instagram Saves", and what does it do?
                                  </button>
                                </h2>
                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <p>
                                        Instagram Saves is when a user saves a post to his history on Instagram (by pressing the save button near the like button). A lot of saves for a post increase its impression.
                                     </p>
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


      </div>
    </div>
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

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GBZ2DN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  <!-- Modal -->
  <div class="modal fade" id="GGstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
  </div>

    
  
<a href="https://t.me/techsmmannouncement" target="_blank">
  <div id="myAliceWebChat"><div style="background: rgb(42, 171, 238); box-sizing: border-box; display: inline-flex; padding: 10px 14px; justify-content: center; align-items: center; color: rgb(255, 255, 255); cursor: pointer; border-radius: 20px; position: fixed; box-shadow: none; left: 20px; right: auto; bottom: 26px; z-index: 99999;"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"></path></svg><span style="margin-left: 8px; font-style: normal; font-size: 14px; font-weight: 600; line-height: 20px;">Join</span></div></div>
</a>

    <script type="text/javascript"  src="https://cdn.mypanel.link/libs/jquery/1.12.4/jquery.min.js" >
      </script>
    <script type="text/javascript"  src="https://cdn.mypanel.link/global/edzzxisio49akyza.js" >
      </script>
    <script type="text/javascript"  src="https://cdn.mypanel.link/global/s27n4hab0gaatrhm.js" >
      </script>
    <script type="text/javascript"  src="https://cdn.mypanel.link/global/yleebc6f5ow479ct.js" >
      </script>
    <script type="text/javascript"  src="https://cdn.mypanel.link/global/0e7qiaj8kmea5mhk.js" >
      </script>
    <script type="text/javascript"  src="https://cdn.mypanel.link/hmz1fi/farxtjet462wr6bi.js" >
      </script>
    <script type="text/javascript"  src="https://cdn.mypanel.link/hmz1fi/5rlpuzscp8ism29e.js" >
      </script>
    <script type="text/javascript" >
        window.modules.layouts = {"theme_id":2,"auth":1,"live":true,"csrftoken":"kvj5WkfGJPj_VhUYgRA7eM9MHCZTtZQHvp3jsU25LpLLuZQ7d4NKqLdiUk7YW10ynQtdFWaEzn3csJr5CM1i2Q=="};
      </script>
    <script type="text/javascript" >
        window.modules.alerts = {"alerts":[]};
      </script>
    <script type="text/javascript" >
      </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>


  <script>
    $('#want').change(function () {
      if ($(this).val() == 'Cancel') {
        $('.reason-box').css('display', 'block');
        $('#reason').prop('required', true);
      } else {
        $('.reason-box').css('display', 'none');
        $('#reason').prop('required', false);
      }
    });
    $('#point-options').change(function () {
      if ($(this).val() == 'Redeem Points') {
        $('#howmanyPoints').css('display', 'block');
      } else {
        $('#howmanyPoints').css('display', 'none');
      }
    });
  </script>

  <script>
    var _0x272c = ['<span\x20class=\x27fas\x20fa-check\x20text-success\x20mr-1\x27></span>\x20', '<span\x20class=\x27fas\x20fa-times\x20text-danger\x27></span>', 'replace', 'ready', '.serviceDetailsCard\x20.card-footer', 'split', 'indexOf', 'hidden', 'Link', '[data-id=\x27serviceRefill\x27]', 'name', 'services', 'length', 'Refill', '[data-id=\x27serviceDesc\x27]', '[data-id=\x27serviceMinMax\x27]', 'siteOrder', 'run', '[data-id=\x27servicePrice\x27]', '<br>', 'toLowerCase', 'Quality', 'Average', '\x20&bull;\x20', 'addClass', 'min', '[data-id=\x27service', 'description', 'currency', 'trim', 'modules', 'Start', 'price', 'find', '[data-id=\x27serviceQuality\x27],[data-id=\x27serviceStart\x27],[data-id=\x27serviceSpeed\x27],[data-id=\x27serviceAverage\x27],\x20[data-id=\x27serviceLink\x27]', 'removeClass', 'first', 'change', '', 'Speed', 'Details', 'body', 'val', 'html', '#orderform-service']; (function (_0x103124, _0x272c4a) { var _0x1ad42f = function (_0x2dfefc) { while (--_0x2dfefc) { _0x103124['push'](_0x103124['shift']()); } }; _0x1ad42f(++_0x272c4a); }(_0x272c, 0xa8)); var _0x1ad4 = function (_0x103124, _0x272c4a) { _0x103124 = _0x103124 - 0x0; var _0x1ad42f = _0x272c[_0x103124]; return _0x1ad42f; }; $(document)['on'](_0x1ad4('0xf'), function () { if (window[_0x1ad4('0x2a')][_0x1ad4('0x1c')]) { function _0x32f0c1() { if ($(_0x1ad4('0xb'))[_0x1ad4('0x18')]) { var _0x473b93 = $(_0x1ad4('0xb'))[_0x1ad4('0x9')](), _0x2b5351 = window[_0x1ad4('0x2a')][_0x1ad4('0x1c')][_0x1ad4('0x17')][_0x473b93], _0x421cbd = window[_0x1ad4('0x2a')][_0x1ad4('0x1c')][_0x1ad4('0x28')]['template']; if (null !== _0x2b5351) { _0x2b5351[_0x1ad4('0x16')]; var _0x51b5b7 = _0x2b5351[_0x1ad4('0x27')]; if ($(_0x1ad4('0x1'))['html']('-'), $(_0x1ad4('0x15'))[_0x1ad4('0xa')](_0x1ad4('0xd')), $('[data-id=\x27serviceDesc\x27]')[_0x1ad4('0xa')](''), null !== _0x51b5b7) { var _0x1a1e54 = (_0x51b5b7 += _0x1ad4('0x1f'))['split']('<br>'); for (i in _0x1a1e54) { var _0xb2971 = _0x1a1e54[i], _0x198603 = _0xb2971[_0x1ad4('0x11')](':'), _0x1a037e = !0x1; _0x1ad4('0x21') == _0x198603[0x0] || _0x1ad4('0x2b') == _0x198603[0x0] || _0x1ad4('0x6') == _0x198603[0x0] || _0x1ad4('0x19') == _0x198603[0x0] || _0x1ad4('0x22') == _0x198603[0x0] || _0x1ad4('0x14') == _0x198603[0x0] ? (_0x1a037e = !0x0, '' == $['trim'](_0x198603[0x1]) && (_0x198603[0x1] = '-'), _0x1ad4('0x19') == _0x198603[0x0] ? '-' != _0x198603[0x1] && -0x1 == _0x198603[0x1][_0x1ad4('0x20')]()[_0x1ad4('0x12')]('no') ? $('[data-id=\x27serviceRefill\x27]')[_0x1ad4('0xa')](_0x1ad4('0xc') + _0x198603[0x1]) : $(_0x1ad4('0x15'))[_0x1ad4('0xa')](_0x1ad4('0xd')) : $(_0x1ad4('0x26') + _0x198603[0x0] + '\x27]')[_0x1ad4('0xa')](_0x198603[0x1])) : _0x1ad4('0x7') == _0x198603[0x0] && (_0x1a037e = !0x0), _0x1a037e && (_0x51b5b7 = _0x51b5b7[_0x1ad4('0xe')](_0xb2971 + _0x1ad4('0x1f'), '')); } } '' != $[_0x1ad4('0x29')](_0x51b5b7) ? ($(_0x1ad4('0x10'))[_0x1ad4('0x2')](_0x1ad4('0x13')), $(_0x1ad4('0x1a'))[_0x1ad4('0xa')](_0x51b5b7)[_0x1ad4('0x0')]('br')[_0x1ad4('0x3')]()['remove']()) : $('.serviceDetailsCard\x20.card-footer')[_0x1ad4('0x24')]('hidden'), $(_0x1ad4('0x1b'))[_0x1ad4('0xa')](_0x2b5351[_0x1ad4('0x25')] + _0x1ad4('0x23') + _0x2b5351['max']), $(_0x1ad4('0x1e'))[_0x1ad4('0xa')](_0x421cbd['replace'](_0x1ad4('0x5'), _0x2b5351[_0x1ad4('0x2c')])); } } } $(_0x1ad4('0x8'))['on'](_0x1ad4('0x4'), '#orderform-service', _0x32f0c1), _0x32f0c1(), customModule['siteOrder'][_0x1ad4('0x1d')](window[_0x1ad4('0x2a')][_0x1ad4('0x1c')]); } });
  </script>

  <script>
    var _0x1f1b = ['https://techsmm.com/services', '.average-time.ser-id-', 'find', 'body', 'textContent', 'get', 'getElementById', 'text']; (function (_0x47f601, _0x1f1b94) { var _0x458c4e = function (_0x4d3624) { while (--_0x4d3624) { _0x47f601['push'](_0x47f601['shift']()); } }; _0x458c4e(++_0x1f1b94); }(_0x1f1b, 0xeb)); var _0x458c = function (_0x47f601, _0x1f1b94) { _0x47f601 = _0x47f601 - 0x0; var _0x458c4e = _0x1f1b[_0x47f601]; return _0x458c4e; }; function chk() { var _0x4d3624 = document['getElementById']('orderform-service')['value']; $(function () { var _0x486f4a = _0x458c; $[_0x486f4a('0x2')](_0x486f4a('0x5'), function (_0x597646) { var _0x4ef2b1 = _0x486f4a, _0x3a5b29 = $(_0x597646)[_0x4ef2b1('0x7')](_0x4ef2b1('0x0')), _0x8ff8f8 = $(_0x597646)['find'](_0x4ef2b1('0x6') + _0x4d3624)[_0x4ef2b1('0x4')](); document[_0x4ef2b1('0x3')]('span_ser_id')[_0x4ef2b1('0x1')] = _0x8ff8f8; }); }); }

  </script>

  <script type="text/javascript">

    $(document).ready(function () {
      $(".search-wrap").keyup(function () {
        var searchTerm = $("#searchService").val();
        var listItem = $('#service-table tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
        $.extend($.expr[':'], {
          'containsi': function (elem, i, match, array) {
            return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
          }
        });

        $("#service-table tbody tr:containsi('" + searchSplit + "')").each(function (e) {
          $(this).attr('visible', 'true');
        });
        $("#service-table thead tr:containsi('" + searchSplit + "')").each(function (e) {
          $(this).attr('visible', 'true');
        });



        $("#service-table tbody tr").not(":containsi('" + searchSplit + "')").each(function (e) {
          $(this).attr('visible', 'false');
        });
        $("#service-table thead tr").not(":containsi('" + searchSplit + "')").each(function (e) {
          $(this).attr('visible', 'false');
        });

        $("tr.separator:first-child, tr.separator:last-child").each(function (e) {
          $(this).attr('visible', 'false');
        });
      });


      $("#searchService").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#service-table tbody tr").filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) != -1)
        });
      });
    });


    /*   function filterService(category) {
    alert(category);
    $('.service-well, .service-well tbody tr').attr('visible','false');
    $('.service-well[data-category="' + category + '"], .service-well tbody tr[data-category="' + category + '"]').attr('visible','true');
    }*/

    function filterService(category) {
      $('#service-table tbody tr').attr('visible', 'false');
      $('#service-table tbody').attr('visible', 'false');
      $('#service-table thead').attr('visible', 'false');

      $('#service-table tbody tr[data-category="' + category + '"]').attr('visible', 'true');
      $('#service-table tbody[data-category="' + category + '"]').attr('visible', 'true');
      $('#service-table thead[data-category="' + category + '"]').attr('visible', 'true');

      $('#service-table thead tr').attr('visible', 'false');
      $('#service-table tbody').attr('visible', 'false');
      $('#service-table thead').attr('visible', 'false');

      $('#service-table thead tr[data-category="' + category + '"]').attr('visible', 'true');
      $('#service-table thead[data-category="' + category + '"]').attr('visible', 'true');
      $('#service-table tbody[data-category="' + category + '"]').attr('visible', 'true');
    }

    function allser() {
      $("#service-table tbody tr").attr('visible', 'true');
      $("#service-table thead tr").attr('visible', 'true');
      $("#service-table tbody").attr('visible', 'true');
      $("#service-table thead").attr('visible', 'true');
    }

  </script>


  <!--  Some Script Content From Old Themes  -->

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"
    integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  
  <script>
    function navToggleMob() {
      let menuBox = document.getElementById('navMob');
      menuBox.classList.toggle('active');
    }


    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#navbar").addClass("shrink");
      } else {
        $("#navbar").removeClass("shrink");
      }

      if (scroll >= 300) {
        $("#navbar").addClass("fixed-top");
      } else {
        $("#navbar").removeClass("fixed-top");
      }
    });

  </script>
  
  <script type="text/javascript">
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    if ($(window).width() < 991) {
      $('#wrapper').removeClass('toggled');
    } else {
      $('#wrapper').addClass('toggled');
    }
  </script>

  <!-- /// Some Script Content From Old Themes  -->

  <script>
    $(function () {
      $("#search").keyup(function () {
        searchServices();
      });
    });
  </script>
  
  <script>
    var _0x272c = ['<span\x20class=\x27fas\x20fa-check\x20text-success\x20mr-1\x27></span>\x20', '<span\x20class=\x27fas\x20fa-times\x20text-danger\x27></span>', 'replace', 'ready', '.serviceDetailsCard\x20.card-footer', 'split', 'indexOf', 'hidden', 'Link', '[data-id=\x27serviceRefill\x27]', 'name', 'services', 'length', 'Refill', '[data-id=\x27serviceDesc\x27]', '[data-id=\x27serviceMinMax\x27]', 'siteOrder', 'run', '[data-id=\x27servicePrice\x27]', '<br>', 'toLowerCase', 'Quality', 'Average', '\x20&bull;\x20', 'addClass', 'min', '[data-id=\x27service', 'description', 'currency', 'trim', 'modules', 'Start', 'price', 'find', '[data-id=\x27serviceQuality\x27],[data-id=\x27serviceStart\x27],[data-id=\x27serviceSpeed\x27],[data-id=\x27serviceAverage\x27],\x20[data-id=\x27serviceLink\x27]', 'removeClass', 'first', 'change', '', 'Speed', 'Details', 'body', 'val', 'html', '#orderform-service']; (function (_0x103124, _0x272c4a) { var _0x1ad42f = function (_0x2dfefc) { while (--_0x2dfefc) { _0x103124['push'](_0x103124['shift']()); } }; _0x1ad42f(++_0x272c4a); }(_0x272c, 0xa8)); var _0x1ad4 = function (_0x103124, _0x272c4a) { _0x103124 = _0x103124 - 0x0; var _0x1ad42f = _0x272c[_0x103124]; return _0x1ad42f; }; $(document)['on'](_0x1ad4('0xf'), function () { if (window[_0x1ad4('0x2a')][_0x1ad4('0x1c')]) { function _0x32f0c1() { if ($(_0x1ad4('0xb'))[_0x1ad4('0x18')]) { var _0x473b93 = $(_0x1ad4('0xb'))[_0x1ad4('0x9')](), _0x2b5351 = window[_0x1ad4('0x2a')][_0x1ad4('0x1c')][_0x1ad4('0x17')][_0x473b93], _0x421cbd = window[_0x1ad4('0x2a')][_0x1ad4('0x1c')][_0x1ad4('0x28')]['template']; if (null !== _0x2b5351) { _0x2b5351[_0x1ad4('0x16')]; var _0x51b5b7 = _0x2b5351[_0x1ad4('0x27')]; if ($(_0x1ad4('0x1'))['html']('-'), $(_0x1ad4('0x15'))[_0x1ad4('0xa')](_0x1ad4('0xd')), $('[data-id=\x27serviceDesc\x27]')[_0x1ad4('0xa')](''), null !== _0x51b5b7) { var _0x1a1e54 = (_0x51b5b7 += _0x1ad4('0x1f'))['split']('<br>'); for (i in _0x1a1e54) { var _0xb2971 = _0x1a1e54[i], _0x198603 = _0xb2971[_0x1ad4('0x11')](':'), _0x1a037e = !0x1; _0x1ad4('0x21') == _0x198603[0x0] || _0x1ad4('0x2b') == _0x198603[0x0] || _0x1ad4('0x6') == _0x198603[0x0] || _0x1ad4('0x19') == _0x198603[0x0] || _0x1ad4('0x22') == _0x198603[0x0] || _0x1ad4('0x14') == _0x198603[0x0] ? (_0x1a037e = !0x0, '' == $['trim'](_0x198603[0x1]) && (_0x198603[0x1] = '-'), _0x1ad4('0x19') == _0x198603[0x0] ? '-' != _0x198603[0x1] && -0x1 == _0x198603[0x1][_0x1ad4('0x20')]()[_0x1ad4('0x12')]('no') ? $('[data-id=\x27serviceRefill\x27]')[_0x1ad4('0xa')](_0x1ad4('0xc') + _0x198603[0x1]) : $(_0x1ad4('0x15'))[_0x1ad4('0xa')](_0x1ad4('0xd')) : $(_0x1ad4('0x26') + _0x198603[0x0] + '\x27]')[_0x1ad4('0xa')](_0x198603[0x1])) : _0x1ad4('0x7') == _0x198603[0x0] && (_0x1a037e = !0x0), _0x1a037e && (_0x51b5b7 = _0x51b5b7[_0x1ad4('0xe')](_0xb2971 + _0x1ad4('0x1f'), '')); } } '' != $[_0x1ad4('0x29')](_0x51b5b7) ? ($(_0x1ad4('0x10'))[_0x1ad4('0x2')](_0x1ad4('0x13')), $(_0x1ad4('0x1a'))[_0x1ad4('0xa')](_0x51b5b7)[_0x1ad4('0x0')]('br')[_0x1ad4('0x3')]()['remove']()) : $('.serviceDetailsCard\x20.card-footer')[_0x1ad4('0x24')]('hidden'), $(_0x1ad4('0x1b'))[_0x1ad4('0xa')](_0x2b5351[_0x1ad4('0x25')] + _0x1ad4('0x23') + _0x2b5351['max']), $(_0x1ad4('0x1e'))[_0x1ad4('0xa')](_0x421cbd['replace'](_0x1ad4('0x5'), _0x2b5351[_0x1ad4('0x2c')])); } } } $(_0x1ad4('0x8'))['on'](_0x1ad4('0x4'), '#orderform-service', _0x32f0c1), _0x32f0c1(), customModule['siteOrder'][_0x1ad4('0x1d')](window[_0x1ad4('0x2a')][_0x1ad4('0x1c')]); } });
  </script>
  
  

  <!-- script for show more btn -->
  <script>
    const showMorebtn = document.getElementById('showMore');
    showMorebtn.addEventListener('click', function (e) {
      const targetThat = document.getElementById('more_menu');
      targetThat.classList.toggle('active_more_menu');
    });
  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  

        
</body>

</html>