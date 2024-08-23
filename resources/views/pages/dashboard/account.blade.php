@extends('layouts.dashboard') 
@section('content')

<link rel="shortcut icon" type="image/ico" href="https://cdn.mypanel.link/hmz1fi/21ogy6qcanfxi539.ico" />


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
        <!-- Account Page Content  -->
<div id="accountpage">
    <div class="container-fluid">
                <div class="row">
            <div class="col-md-6">
               
                <div class="card card_v2 mb-3">
                    <div class="card-body">
                            <div id="def_side_title">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="name">
                                User Infos
                                </div>
                            </div>
                         <div class="mb-3">
                             <label for="">Username</label>
                             <input type="text" class="form-control" id="username" value="sabozag" readonly>
                         </div>
                         <div class="mb-3">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" id="username" value="zawyvidi@mailinator.com" readonly>
                        </div>
                    </div>
                </div>

                <div class="card card_v2 mb-3">
                    <div class="card-body">

                            <div id="def_side_title">
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="name">
                                Account Password Manager
                                </div>
                            </div>
                            <form action="" method="post">
                                            
                                <div class="mb-3">
                                    <label for="current">Current password</label>
                                    <input type="password" class="form-control" id="current" name="SettingsFrom[current_password]">
                                </div>

                                <div class="mb-3">
                                    <label for="new">New password</label>
                                    <input type="password" class="form-control" id="new" name="SettingsFrom[password]">
                                </div>

                                <div class="mb-3">
                                    <label for="confirm">Confirm new password</label>
                                    <input type="password" class="form-control" id="confirm" name="SettingsFrom[confirm_password]">
                                </div>
                                <input type="hidden" name="_csrf" value="y0qBEF4jxrJCx5uecysNCETzX8fb4a7z-gSxS03HBgOSC-xxbmao4grz3MgqYGtCFrQe9O7Q9ImYKcgDCLNKSA==">
                                <button type="submit" class="btn btn-primary d-block w-100">Change password</button>
                            </form>
                            
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card_v2 mb-3">
                    <div class="card-body">
                            <div id="def_side_title">
                                <div class="icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <div class="name">
                                 API Key Generator
                                </div>
                            </div>
                            <form  action="/account/newkey" method="post">
                                <div class="form-group">
                                  <label for="key" class="control-label">API key</label>
                                                                  </div>
                      
                                <input type="hidden" name="_csrf" value="y0qBEF4jxrJCx5uecysNCETzX8fb4a7z-gSxS03HBgOSC-xxbmao4grz3MgqYGtCFrQe9O7Q9ImYKcgDCLNKSA==">
                                <button type="submit" class="btn btn-primary d-block w-100">Generate new</button>
                              </form>
                        <br>
                        <div class="alert alert-danger">
                            When you click on "Generate new" it will Generate new key. This key is very sensitive informations of your account please avoid share this key. Thank you.
                        </div>
                    </div>
                  </div>
                                  <div class="card card_v2 mb-3">
                    <div class="card-body">
                            <div id="def_side_title">
                                <div class="icon">
                                    <i class="fas fa-language"></i>
                                </div>
                                <div class="name">
                                 Language
                                </div>
                            </div>
                            <form  method="post" action="">
                                <div class="form-group">
                                  <label for="language" class="control-label">Language</label>
                                  <select class="form-control" id="language" name="SettingsFrom[lang]">
                                                                          <option value="en" selected>English</option>
                                                                          <option value="ru" >Russian</option>
                                                                          <option value="tr" >Turkish</option>
                                                                          <option value="bp" >Portuguese (Brazil)</option>
                                                                          <option value="ko" >Korean</option>
                                                                          <option value="ar" >Arabic</option>
                                                                          <option value="bn" >Bengali</option>
                                                                      </select>
                                </div>
                                <input type="hidden" name="_csrf" value="y0qBEF4jxrJCx5uecysNCETzX8fb4a7z-gSxS03HBgOSC-xxbmao4grz3MgqYGtCFrQe9O7Q9ImYKcgDCLNKSA==">
                                <button type="submit" class="btn btn-primary d-block w-100">Save</button>
                              </form>
                    </div>
                  </div>
                
                <div class="card card_v2 mb-3">
                    <div class="card-body">
                            <div id="def_side_title">
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="name">
                                    Timezone
                                </div>
                            </div>
                            <form  action="" method="post">
                                <div class="form-group">
                                  <label for="timezone" class="control-label">Timezone</label>
                                  <select name="SettingsFrom[timezone]" id="timezone" class="form-control">
                                                                          <option value="-43200" >(UTC -12:00) Baker/Howland Island</option>
                                                                          <option value="-39600" >(UTC -11:00) Niue</option>
                                                                          <option value="-36000" >(UTC -10:00) Hawaii-Aleutian Standard Time, Cook Islands, Tahiti</option>
                                                                          <option value="-34200" >(UTC -9:30) Marquesas Islands</option>
                                                                          <option value="-32400" >(UTC -9:00) Alaska Standard Time, Gambier Islands</option>
                                                                          <option value="-28800" >(UTC -8:00) Pacific Standard Time, Clipperton Island</option>
                                                                          <option value="-25200" >(UTC -7:00) Mountain Standard Time</option>
                                                                          <option value="-21600" >(UTC -6:00) Central Standard Time</option>
                                                                          <option value="-18000" >(UTC -5:00) Eastern Standard Time, Western Caribbean Standard Time</option>
                                                                          <option value="-16200" >(UTC -4:30) Venezuelan Standard Time</option>
                                                                          <option value="-14400" >(UTC -4:00) Atlantic Standard Time, Eastern Caribbean Standard Time</option>
                                                                          <option value="-12600" >(UTC -3:30) Newfoundland Standard Time</option>
                                                                          <option value="-10800" >(UTC -3:00) Argentina, Brazil, French Guiana, Uruguay</option>
                                                                          <option value="-7200" >(UTC -2:00) South Georgia/South Sandwich Islands</option>
                                                                          <option value="-3600" >(UTC -1:00) Azores, Cape Verde Islands</option>
                                                                          <option value="0" >(UTC) Greenwich Mean Time, Western European Time</option>
                                                                          <option value="3600" >(UTC +1:00) Central European Time, West Africa Time</option>
                                                                          <option value="7200" >(UTC +2:00) Central Africa Time, Eastern European Time, Kaliningrad Time</option>
                                                                          <option value="10800" >(UTC +3:00) Moscow Time, East Africa Time, Arabia Standard Time</option>
                                                                          <option value="12600" >(UTC +3:30) Iran Standard Time</option>
                                                                          <option value="14400" >(UTC +4:00) Azerbaijan Standard Time, Samara Time</option>
                                                                          <option value="16200" >(UTC +4:30) Afghanistan</option>
                                                                          <option value="18000" >(UTC +5:00) Pakistan Standard Time, Yekaterinburg Time</option>
                                                                          <option value="19800" >(UTC +5:30) Indian Standard Time, Sri Lanka Time</option>
                                                                          <option value="20700" >(UTC +5:45) Nepal Time</option>
                                                                          <option value="21600" selected>(UTC +6:00) Bangladesh Standard Time, Bhutan Time, Omsk Time</option>
                                                                          <option value="23400" >(UTC +6:30) Cocos Islands, Myanmar</option>
                                                                          <option value="25200" >(UTC +7:00) Krasnoyarsk Time, Cambodia, Laos, Thailand, Vietnam</option>
                                                                          <option value="28800" >(UTC +8:00) Australian Western Standard Time, Beijing Time, Irkutsk Time</option>
                                                                          <option value="31500" >(UTC +8:45) Australian Central Western Standard Time</option>
                                                                          <option value="32400" >(UTC +9:00) Japan Standard Time, Korea Standard Time, Yakutsk Time</option>
                                                                          <option value="34200" >(UTC +9:30) Australian Central Standard Time</option>
                                                                          <option value="36000" >(UTC +10:00) Australian Eastern Standard Time, Vladivostok Time</option>
                                                                          <option value="37800" >(UTC +10:30) Lord Howe Island</option>
                                                                          <option value="39600" >(UTC +11:00) Srednekolymsk Time, Solomon Islands, Vanuatu</option>
                                                                          <option value="41400" >(UTC +11:30) Norfolk Island</option>
                                                                          <option value="43200" >(UTC +12:00) Fiji, Gilbert Islands, Kamchatka Time, New Zealand Standard Time</option>
                                                                          <option value="45900" >(UTC +12:45) Chatham Islands Standard Time</option>
                                                                          <option value="46800" >(UTC +13:00) Samoa Time Zone, Phoenix Islands Time, Tonga</option>
                                                                          <option value="50400" >(UTC +14:00) Line Islands</option>
                                                                      </select>
                                </div>
                      
                                <input type="hidden" name="_csrf" value="y0qBEF4jxrJCx5uecysNCETzX8fb4a7z-gSxS03HBgOSC-xxbmao4grz3MgqYGtCFrQe9O7Q9ImYKcgDCLNKSA==">
                                <button type="submit" class="btn btn-primary d-block w-100">Save</button>
                              </form>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</div>

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
            <i class="fas fa-times"></i>
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

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
@stop