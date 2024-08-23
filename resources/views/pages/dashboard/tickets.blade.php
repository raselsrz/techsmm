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
        <section id="tickets_page">
  <div class="container-fluid">
     <div class="row">
        <div class="col-md-12">
           <div class="card card_v2 mb-4">
              <div class="card-body">
                 <form action="/tickets" method="get" id="history-search">
                    <div class="input-group">
                       <input type="text" name="search" class="form-control" value=""
                          placeholder="Search">
                       <span class="input-group-btn">
                       <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                       </span>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-6">
           <div class="card card_v2">
              <div class="card-body">
                 <div  id="newOrderTabsWrap">
                    <ul class="nav nav-pills tab_btn_wrap mb-3" id="pills-tab" role="tablist">
                       <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order" aria-selected="true"> <i class="fas fa-ticket-alt"></i> New Ticket</button>
                       </li>
                       <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-favorite-tab" data-bs-toggle="pill" data-bs-target="#pills-favorite" type="button" role="tab" aria-controls="pills-favorite" aria-selected="false"> <i class="fas fa-history"></i>
                          Ticket History </button>
                       </li>
                    </ul>
                 </div>
                 
                 <div class="tab-content tab_wrap" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                       <form method="post" action="" id="ticketsend">   
                          <div class="alert alert-dismissible alert-danger ticket-danger " style="display: none">
                            <button type="button" class="close">&times;</button>
                            <div></div>
                          </div>
                          <div class="siginInRow form-group">
                            <label class="control-label">Subject</label>
                            <select class="form-control" id="subject" name="TicketForm[subject]" onchange="handleOrderType(this)">
                                                            <option value="New-Order" >Order</option>
                              <option value="New-Payment">Payment</option>
                              <option value="New-Points">Points</option>
                              <option value="New-Child-Panel">Child Panel</option>
                              <option value="New-Discount">Discount</option>
                              <option value="New-Bug">Bug</option>
                              <option value="New-Request">Request</option>
                              <option value="New-Other">Other</option>
                                                        </select>
                          </div>
                          <span class="ticket-frm-body">
                            <div class="siginInRow form-group" id="order-group">
                              <label class="control-label">Order ID: [For multiple orders, please separate them using comma. (example: 10867110,10867210,10867500)] </label>
                              <input type="text" class="form-control" id="orderid">
            
                              <label class="control-label" style="margin-top: 15px;">Request</label>
                              <select class="form-control extraoption" id="want">

                                <option value="Refill">Refill</option>
                                 <option value="Cancel">Cancel</option>
                                 <option value="Speed-up">Speed Up</option>
                                 <option value="Restart">Restart</option>
                                 <option value="Not-Started">Not Started</option>
                                 <option value="Mark-as-completed-without-done">Mark as completed without done</option>
                                 <option value="Other">Other</option>
                                 
                              </select>
                              
                              <span class="reason-box" style="display:none;">
                                <label class="control-label" style="margin-top: 15px;">Reason*</label>
                                <textarea type="text" class="form-control" id="reason" placeholder="Enter Cancel Reason"></textarea>
                              </span>
                            </div>
                            <div id="payment-group" style="display:none;">
                              <div class="siginInRow form-group">
                                <label class="control-label">Payment</label>
                                <select class="form-control extraoption" id="payment">

                                   <option value="Bkash/Rocket">Bkash/Rocket</option>
                                   <option value="Nagad/Upay/Tap">Nagad/Upay/Tap</option>
                                   <option value="AamarPay">AamarPay</option>
                                   <option value="Paytm">Paytm (Order ID and QR Name)</option>
                                   <option value="Skrill">Skrill</option>
                                   <option value="Payoneer">Payoneer</option>
                                   <option value="Perfect-Money">Perfect Money</option>
                                   <option value="BTC">Bitcoin</option>
                                   <option value="Crypto-currency">Crypto Currency</option>
                                   <option value="Other">Other</option>
                                   
                                </select>
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">Payment ID</label>
                                <input type="text" class="form-control" id="paymentid">
                              </div>
                              <div class="siginInRow form-group"> 
                                <label class="control-label">Payment Email</label>
                                <input type="email" class="form-control" id="paymentemail">
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">Payment Amount</label>
                                <input type="text" class="form-control" id="paymentamount">
                              </div> 
                            </div>
                            <div id="points-group" style="display: none;">
                              <div class="siginInRow form-group">
                                <label class="control-label">Options</label>
                               <select name="" id="point-options" class="form-control extraoption">
                                <option value="Redeem Points">Redeem Points</option>
                                <option value="Bug in Points">Bug in Points</option>
                                <option value="Other Issues">Other Issues</option>
                               </select>
                              </div>

                              <div class="siginInRow form-group" id="howmanyPoints">
                                <label class="control-label">Amount of Points Redeem?</label>
                               <input type="text" class="form-control" value=" " id="howManyPoints">
                              </div>

                            </div>
                            <div id="api-group" style="display:none;">
                              <div class="siginInRow form-group">
                                <label class="control-label">Website Url</label>
                                <input type="text" class="form-control" id="apiurl">
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">Whatsapp/Skype/Calling Details</label>
                                <input type="text" class="form-control" id="calldetail">
                              </div>
                              <div class="siginInRow form-group"> 
                                <label class="control-label">Monthly sell</label>
                                <input type="text" class="form-control" id="monthlysell">
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">On which service Id do you need discount' [(example 123,453,999,998,1023,564)]</label>
                                <input type="text" class="form-control" id="apidiscount">
                              </div> 
                            </div>
                            <div id="bug-group" style="display:none;">
                              <div class="siginInRow form-group">
                                <label class="control-label">Bug In Website</label>
                                <input type="text" class="form-control" id="websitebug">
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">Bug In Services</label>
                                <input type="text" class="form-control" id="servicebug">
                              </div>
                            </div>
                            <div id="request-group" style="display:none;">
                              <div class="siginInRow form-group">
                                <label class="control-label">ADD THIS SERVICE</label>
                                <input type="text" class="form-control" id="addservice">
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">ADD THIS FEATURE</label>
                                <input type="text" class="form-control" id="addfeature">
                              </div>
                              <div class="siginInRow form-group">
                                <label class="control-label">ADD THIS PAYMENT METHOD</label>
                                <input type="text" class="form-control" id="addpaymentmethod">
                              </div>
                            </div>
                            
                             <div class="siginInRow form-group ticket-textarea" >
                              <label class="control-label">Message<span id="optional"> (optional) </span></label>    
                              <textarea class="form-control" rows="4" cols="50" id="message" style="min-height: 100px;"></textarea>
                            </div>    
                            <div class="form-group">
                              <label class="control-label">Attachment</label>  
                              <div
                                class="tickets-uploader"
                                data-rtl="false"
                                data-lang-button-attach="Attach files"
                                data-lang-file-format-incorrect="Invalid file format"
                                data-lang-file-size-incorrect="File is too large (limit 5 MB)"
                              ></div>
                            </div>
                            <input type="hidden" name="_csrf" value="6H2eQd6eiH5L1NC9vrPAArYQ0dysO_ZI99r1m7lsvmuxPPMg7tvmLgPgl-vn-KZI5FeQ75kKrDKV94zT_BjyIA==">
                            <input type="hidden" id="hmessage" name="TicketForm[message]" >
                            <button type="submit" class="btn btn-primary d-blc w-100" id="sendTicket">Submit ticket</button>
                          </span>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-favorite" role="tabpanel" aria-labelledby="pills-favorite-tab">
                      
                      <div class="btn-group w-100 gap-2" role="group" id="ticket_filter_wrap">
                         <button type="button" class="btn btn-secondary ticket_btn_active" id="ticket_all" onclick="showAll()">All</button>
                         <button type="button" class="btn btn-secondary" id="ticket_pending" onclick="showPending()">Pending</button>
                         <button type="button" class="btn btn-secondary" id="ticket_answered" onclick="showAns()">Answered</button>
                       </div>
                    
                                            

                                              

                   
                    </div>

                 </div>
              </div>
           </div>
        </div>
        <div class="col-md-6">
           <div class="card card_v2">
              <div class="card-body">
                 <div id="def_side_title">
                    <div class="icon">
                       <i class="fas fa-question"></i>
                    </div>
                    <div class="name">
                       Read Before Create Tickets.
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>


<!-- Codes For Ticket Filter and others works -->




<script>
  const filterBtnWraper = document.getElementById('ticket_filter_wrap');
  filterBtnWraper.addEventListener('click', function(e){
     const ifActive = document.getElementsByClassName('ticket_btn_active');
     if(ifActive.length > 0){
        for(const item of ifActive){
           item.classList.remove('ticket_btn_active');
        }
     }
     const clickedItem = document.getElementById(e.target.id);
     clickedItem.classList.add('ticket_btn_active');
  });

  function hideAll(){
     const allhide = document.getElementsByClassName('ticket_link');
           if(allhide.length > 0){
              for(const item of allhide){
                 item.classList.add('hidden');
              }
           }
  }

  
  function showAll(){
     hideAll();
     const allhide = document.getElementsByClassName('ticket_link');
           if(allhide.length > 0){
              for(const item of allhide){
                 item.classList.remove('hidden');
              }
           }
  }


  function showPending(){
     hideAll();
     const allPending = document.getElementsByClassName('ticket_status_Pending');
       if(allPending.length > 0){
          for(const item of allPending){
             item.classList.remove('hidden');
          }
       }
  }

  function showAns(){
     hideAll();
     const allans = document.getElementsByClassName('ticket_status_Answered');
       if(allans.length > 0){
          for(const item of allans){
             item.classList.remove('hidden');
          }
       }
  }

</script>



<script>
    
  function handleOrderType(selectObject) {
   
    var element = document.getElementById("order-group");
    var element2 = document.getElementById("payment-group");
    var element3 = document.getElementById("api-group");
    var element4 = document.getElementById("bug-group");
    var element5 = document.getElementById("request-group");
    var element6 = document.getElementById("points-group");
   var optional = document.getElementById("optional");

    if (selectObject.value == "New-Order" || selectObject.value == "Junior-Order" || selectObject.value == "Regular-Order" || selectObject.value == "Frequent-Order" || selectObject.value == "Elite-Order" || selectObject.value == "VIP-Order" || selectObject.value == "Master-Order") {
      element.style.display = "block";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "none";
      element6.style.display = "none";
                  optional.style.display = "inline";
      $("#want option:selected").prop("selected", true);
      $("#payment option:selected").prop("selected", false);
    } else if (selectObject.value == "New-Payment" ||  selectObject.value == "Junior-Payment" || selectObject.value == "Regular-Payment" || selectObject.value == "Frequent-Payment" || selectObject.value == "Elite-Payment" || selectObject.value == "VIP-Payment" || selectObject.value == "Master-Payment") {
      element.style.display = "none";
      element2.style.display = "block";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "none";
      element6.style.display = "none";
                  optional.style.display = "none";
      $("#want option:selected").prop("selected", false);
      $("#payment option:selected").prop("selected", true);
      // $('#paymentbox').css('display','block');
      // $('#paymentbox').style.display = "block";

    } else if (selectObject.value == "New-Child-Panel" ||  selectObject.value == "Junior-Child-Panel" || selectObject.value == "Regular-Child-Panel" || selectObject.value == "Frequent-Child-Panel" || selectObject.value == "Elite-Child-Panel" || selectObject.value == "VIP-Child-Panel" || selectObject.value == "Master-Child-Panel") {
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "none";
      element6.style.display = "none";
                  optional.style.display = "none";
    } else if (selectObject.value == "New-Discount"  ||  selectObject.value == "Junior-Discount" || selectObject.value == "Regular-Discount" || selectObject.value == "Frequent-Discount" || selectObject.value == "Elite-Discount" || selectObject.value == "VIP-Discount" || selectObject.value == "Master-Discount") {
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "block";
      element4.style.display = "none";
      element5.style.display = "none";
      optional.style.display = "none";
      element6.style.display = "none";
                }  else if (selectObject.value == "New-Bug" ||  selectObject.value == "Junior-Bug" || selectObject.value == "Regular-Bug" || selectObject.value == "Frequent-Bug" || selectObject.value == "Elite-Bug" || selectObject.value == "VIP-Bug" || selectObject.value == "Master-Bug") {
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "block";
      element5.style.display = "none";
      element6.style.display = "none";
                  optional.style.display = "none";
    } else if (selectObject.value == "New-Request" ||  selectObject.value == "Junior-Request" || selectObject.value == "Regular-Request" || selectObject.value == "Frequent-Request" || selectObject.value == "Elite-Request" || selectObject.value == "VIP-Request" || selectObject.value == "Master-Request" ) {
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "block";
      element6.style.display = "block";
                  optional.style.display = "none";
    } else if (selectObject.value == "New-Point" ||  selectObject.value == "Junior-Point" || selectObject.value == "Regular-Point" || selectObject.value == "Frequent-Point" || selectObject.value == "Elite-Point" || selectObject.value == "VIP-Point" || selectObject.value == "Master-Point" ) {
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "none";
      element6.style.display = "none";
      optional.style.display = "none";
      $("#want option:selected").prop("selected", false);
      $("#payment option:selected").prop("selected", false);
      $("#want1 option:selected").prop("selected", true);
    } else if (selectObject.value == "New-Other"  ||  selectObject.value == "Junior-Other" || selectObject.value == "Regular-Other" || selectObject.value == "Frequent-Other" || selectObject.value == "Elite-Other" || selectObject.value == "VIP-Other" || selectObject.value == "Master-Other"  ) {
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "none";
      element6.style.display = "none";
      optional.style.display = "none";
    }else if (selectObject.value == "New-Points"  ||  selectObject.value == "Junior-Points" || selectObject.value == "Regular-Points" || selectObject.value == "Frequent-Points" || selectObject.value == "Elite-Points" || selectObject.value == "VIP-Points" || selectObject.value == "Master-Points" ){
      element.style.display = "none";
      element2.style.display = "none";
      element3.style.display = "none";
      element4.style.display = "none";
      element5.style.display = "none";
      element6.style.display = "block";
      optional.style.display = "none";
    }
  }

  function createTicket(e) {
    if (e.preventDefault) e.preventDefault();

    //  var paysub = $('#payment option:checked').val();
    var want = $('#want :selected').val();
    var paym = $('#payment :selected').val();
    var want1 = $('#want1 :selected').val();
    var pointIssue = $('#points-group :selected').val();
    var howManyPoints = $('#howManyPoints').val();
    //	var want = $('#want').find(":selected").val();
    //  var sub = document.getElementById("subject").value;
    //  var subject = sub + "-" + want;
    //   alert(subject);

    var subject = document.getElementById("subject").value;
    $finalsubject = subject;
    var message = "";
    if (subject == "New-Order" || subject == "Junior-Order" || subject == "Regular-Order" || subject == "Frequent-Order" || subject == "Elite-Order" || subject == "VIP-Order" || subject == "Master-Order") {
              if ( want == 'Cancel' ) {
              message = "Order ID: " + document.getElementById("orderid").value + "\n" + "Request: " + document.getElementById("want").value  + "\n" + "Reason: " + document.getElementById("reason").value + "\n" + document.getElementById("message").value;
              $finalsubject += ' - ' + want;
              } else {
                  message = "Order ID: " + document.getElementById("orderid").value + "\n" + "Request: " + document.getElementById("want").value  + "\n" + document.getElementById("message").value;
              $finalsubject += ' - ' + want;
              }
    } else if (subject == "New-Payment" ||  subject == "Junior-Payment" || subject == "Regular-Payment" || subject == "Frequent-Payment" || subject == "Elite-Payment" || subject == "VIP-Payment" || subject == "Master-Payment") {
      message = "Payment: " + document.getElementById("payment").value  + "\n" + "Payment Id: " + document.getElementById("paymentid").value + "\n" + "Payment Email: " + document.getElementById("paymentemail").value + "\n" + "Payment Amount: " + document.getElementById("paymentamount").value + "\n"  +  document.getElementById("message").value;
      $finalsubject += ' - ' + paym;
    }else if (subject == "New-Points" ||  subject == "Junior-Points" || subject == "Regular-Points" || subject == "Frequent-Points" || subject == "Elite-Points" || subject == "VIP-Points" || subject == "Master-Points") {
      message = "Point Options: " + pointIssue + "\n" + "Amount Of Point: "+ howManyPoints + "\n"  +  document.getElementById("message").value;
      $finalsubject  += ' - ' + pointIssue;
    } else if (subject == "New-Discount"  ||  subject == "Junior-Discount" || subject == "Regular-Discount" || subject == "Frequent-Discount" || subject == "Elite-Discount" || subject == "VIP-Discount" || subject == "Master-Discount") {
      message = "Website Url: " + document.getElementById("apiurl").value  + "\n" + "Calling Details: " + document.getElementById("calldetail").value + "\n" + "Monthly Sell: " + document.getElementById("monthlysell").value + "\n" + "Discount: " + document.getElementById("apidiscount").value  + "\n"  +  document.getElementById("message").value;
    } else if (subject == "New-Bug" ||  subject == "Junior-Bug" || subject == "Regular-Bug" || subject == "Frequent-Bug" || subject == "Elite-Bug" || subject == "VIP-Bug" || subject == "Master-Bug") {
      message = "Bug In Website: " + document.getElementById("websitebug").value  + "\n" + "Bug In Service: " + document.getElementById("servicebug").value + "\n"  + document.getElementById("message").value;
    } else if (subject == "New-Request" ||  subject == "Junior-Request" || subject == "Regular-Request" || subject == "Frequent-Request" || subject == "Elite-Request" || subject == "VIP-Request" || subject == "Master-Request" ) {
      message = "ADD THIS SERVICE: " + document.getElementById("addservice").value  + "\n" + "ADD THIS FEATURE: " + document.getElementById("addfeature").value + "\n" + "ADD THIS PAYMENT METHOD: " + document.getElementById("addpaymentmethod").value +  "\n"  + document.getElementById("message").value;
    } else if (subject == "New-Point" ||  subject == "Junior-Point" || subject == "Regular-Point" || subject == "Frequent-Point" || subject == "Elite-Point" || subject == "VIP-Point" || subject == "Master-Point" ) {
      message = document.getElementById("want1").value + "\n"  + document.getElementById("message").value;
      $finalsubject += ' - ' + want1;
    }  else {
      message =  document.getElementById("message").value;
    }

    $('#subject :selected').val($finalsubject);
    document.getElementById("hmessage").value = message;

    return true;
  }


  var form = document.getElementById("ticketsend");
  if (form.attachEvent) {
    form.attachEvent("submit", createTicket);
  } else {
    form.addEventListener("submit", createTicket);
  }
 
    
     
</script>


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

@stop