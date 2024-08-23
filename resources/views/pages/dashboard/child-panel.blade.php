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
        <section id="child_panel">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card card_v2">
                          <div class="card-body">
                              <div class="row">   
                                  <div class="col-md-3">
                                      <div class="card card_v2 child_step">
                                          <div class="card-body">
                                              <div class="child_panel_step">
                                                  <div class="left_item">
                                                      <h6>Step 1</h6>
                                                      <p>Enter Your Domain</p>
                                                  </div>
                                                  <div class="right_item">
                                                      <div class="child_item_icons">
                                                          <!-- Corrected to use the globe icon -->
                                                          <i class="fas fa-globe"></i>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="card card_v2 child_step">
                                          <div class="card-body">
                                              <div class="child_panel_step">
                                                  <div class="left_item">
                                                      <h6>Step 2</h6>
                                                      <p>Select Your Website Currency</p>
                                                  </div>
                                                  <div class="right_item">
                                                      <div class="child_item_icons">
                                                          <!-- Corrected to use the coins icon -->
                                                          <i class="fas fa-coins"></i>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="card card_v2 child_step">
                                          <div class="card-body">
                                              <div class="child_panel_step">
                                                  <div class="left_item">
                                                      <h6>Step 3</h6>
                                                      <p>Enter your username</p>
                                                  </div>
                                                  <div class="right_item">
                                                      <div class="child_item_icons">
                                                          <!-- Corrected to use the user icon -->
                                                          <i class="fas fa-user"></i>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="card card_v2 child_step">
                                          <div class="card-body">
                                              <div class="child_panel_step">
                                                  <div class="left_item">
                                                      <h6>Step 4</h6>
                                                      <p>Enter Your Password</p>
                                                  </div>
                                                  <div class="right_item">
                                                      <div class="child_item_icons">
                                                          <!-- Corrected to use the user-lock icon -->
                                                          <i class="fas fa-user-lock"></i>
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
              </div>
          </div>
      </section>
      

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card_v2">
                <div class="card-body">
                                    <form action="/child-panel" method="post">
                    <div class="row">
                        <div class="col-md-12">
                                                    </div>
                        <div class="col-md-6">
                            <div class="first">
                                <div class="form-group">
                                    <label for="domain" class="control-label">child_panels.form.domain</label>
                                    <input type="text" class="form-control" id="domain" name="CreateOrderForm[domain]"
                                            value="">
                                </div>
                                <div class="alert alert-warning dns_info">
                                    <br>
                                    <div>child_panels.form.ns.info</div>
                                    <ul style="padding-left: 20px">
                                                                                    <li>ns1.perfectdns.com</li>
                                                                                    <li>ns2.perfectdns.com</li>
                                                                            </ul>
                                </div>
                            </div>
                            <div class="form-group mt-1">
                                <label class="control-label"
                                        for="createorderform-currency">child_panels.form.currency</label>
                                <select id="createorderform-currency" class="form-control" name="CreateOrderForm[currency]"
                                        aria-required="true">
                                                                            <option value="USD" >
                                            United States Dollars (USD)
                                        </option>
                                                                            <option value="RUB" >
                                            Russian Rubles (RUB)
                                        </option>
                                                                            <option value="THB" >
                                            Thai Baht (THB)
                                        </option>
                                                                            <option value="TRY" >
                                            Turkish Lira (TRY)
                                        </option>
                                                                            <option value="EUR" >
                                            Euro (EUR)
                                        </option>
                                                                            <option value="IDR" >
                                            Indonesian Rupiah (IDR)
                                        </option>
                                                                            <option value="BRL" >
                                            Brazilian Real (BRL)
                                        </option>
                                                                            <option value="CNY" >
                                            Chinese Yuan (CNY)
                                        </option>
                                                                            <option value="KRW" >
                                            South Korean Won (KRW)
                                        </option>
                                                                            <option value="INR" >
                                            Indian Rupee (INR)
                                        </option>
                                                                            <option value="IRR" >
                                            Iranian Rial (IRR)
                                        </option>
                                                                            <option value="SAR" >
                                            Saudi Arabia Riyal (SAR)
                                        </option>
                                                                            <option value="PLN" >
                                            Polish złoty (PLN)
                                        </option>
                                                                            <option value="MYR" >
                                            Malaysian Ringgit (MYR)
                                        </option>
                                                                            <option value="GBP" >
                                            Pound sterling (GBP)
                                        </option>
                                                                            <option value="KWD" >
                                            Kuwaiti dinar (KWD)
                                        </option>
                                                                            <option value="SEK" >
                                            Swedish krona (SEK)
                                        </option>
                                                                            <option value="ILS" >
                                            Israeli shekel (ILS)
                                        </option>
                                                                            <option value="HKD" >
                                            Hong Kong dollar (HKD)
                                        </option>
                                                                            <option value="NGN" >
                                            Nigerian naira (NGN)
                                        </option>
                                                                            <option value="KES" >
                                            Kenyan shilling (KES)
                                        </option>
                                                                            <option value="JPY" >
                                            Japanese Yen (JPY)
                                        </option>
                                                                            <option value="ARS" >
                                            Argentine peso (ARS)
                                        </option>
                                                                            <option value="VND" >
                                            Vietnamese đồng (VND)
                                        </option>
                                                                            <option value="CAD" >
                                            Canadian dollar (CAD)
                                        </option>
                                                                            <option value="IQD" >
                                            Iraqi dinar (IQD)
                                        </option>
                                                                            <option value="TWD" >
                                            New Taiwan Dollar (TWD)
                                        </option>
                                                                            <option value="AZN" >
                                            Azerbaijani manat (AZN)
                                        </option>
                                                                            <option value="BYN" >
                                            Belarusian ruble (BYN)
                                        </option>
                                                                            <option value="KZT" >
                                            Kazakhstani tenge (KZT)
                                        </option>
                                                                            <option value="UAH" >
                                            Ukrainian hryvnia (UAH)
                                        </option>
                                                                            <option value="RON" >
                                            Romanian leu (RON)
                                        </option>
                                                                            <option value="AED" >
                                            United Arab Emirates dirham (AED)
                                        </option>
                                                                            <option value="COP" >
                                            Colombian peso (COP)
                                        </option>
                                                                            <option value="PKR" >
                                            Pakistan Rupee (PKR)
                                        </option>
                                                                            <option value="EGP" >
                                            Egyptian Pound (EGP)
                                        </option>
                                                                            <option value="PHP" >
                                            Philippine peso (PHP)
                                        </option>
                                                                            <option value="GHS" >
                                            Ghanaian Cedi (GHS)
                                        </option>
                                                                            <option value="BDT" >
                                            Bangladeshi taka (BDT)
                                        </option>
                                                                            <option value="MAD" >
                                            Moroccan dirham (MAD)
                                        </option>
                                                                            <option value="NPR" >
                                            Nepalese Rupee (NPR)
                                        </option>
                                                                            <option value="TND" >
                                            Tunisian Dinar (TND)
                                        </option>
                                                                            <option value="CLP" >
                                            Chilean Peso (CLP)
                                        </option>
                                                                            <option value="XOF" >
                                            CFA Franc BCEAO (XOF)
                                        </option>
                                                                            <option value="LYD" >
                                            Libyan Dinar (LYD)
                                        </option>
                                                                            <option value="TZS" >
                                            Tanzanian shilling (TZS)
                                        </option>
                                                                            <option value="MXN" >
                                            Mexican peso (MXN)
                                        </option>
                                                                            <option value="UGX" >
                                            Ugandan shilling (UGX)
                                        </option>
                                                                            <option value="ZAR" >
                                            South African rand (ZAR)
                                        </option>
                                                                            <option value="PGK" >
                                            Papua New Guinean kina (PGK)
                                        </option>
                                                                            <option value="RWF" >
                                            Rwandan franc (RWF)
                                        </option>
                                                                            <option value="XAF" >
                                            Central African CFA franc (XAF)
                                        </option>
                                                                            <option value="OMR" >
                                            Omani rial (OMR)
                                        </option>
                                                                            <option value="LAK" >
                                            Laotian kip (LAK)
                                        </option>
                                                                            <option value="UZS" >
                                            Uzbekistan Sum (UZS)
                                        </option>
                                                                            <option value="SDG" >
                                            Sudanese pound (SDG)
                                        </option>
                                                                            <option value="CZK" >
                                            Czech koruna (CZK)
                                        </option>
                                                                            <option value="SYP" >
                                            Syrian pound (SYP)
                                        </option>
                                                                            <option value="DKK" >
                                            Danish krone (DKK)
                                        </option>
                                                                            <option value="PEN" >
                                            Peruvian sol (PEN)
                                        </option>
                                                                            <option value="HUF" >
                                            Hungarian forint (HUF)
                                        </option>
                                                                            <option value="NOK" >
                                            Norwegian krone (NOK)
                                        </option>
                                                                            <option value="MZN" >
                                            Mozambican metical (MZN)
                                        </option>
                                                                            <option value="AOA" >
                                            Angolan kwanza (AOA)
                                        </option>
                                                                            <option value="YER" >
                                            Yemeni Rial (YER)
                                        </option>
                                                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"
                                        for="createorderform-username">child_panels.form.username</label>
                                <input
                                        type="text" id="createorderform-username" class="form-control"
                                        name="CreateOrderForm[username]" aria-required="true"
                                        value="">
                            </div>
    
                            <div class="form-group">
                                <label class="control-label"
                                        for="createorderform-password">child_panels.form.password</label>
                                <input
                                        type="password" id="createorderform-password" class="form-control"
                                        name="CreateOrderForm[password]" aria-required="true">
                            </div>
    
                            <div class="form-group">
                                <label class="control-label"
                                        for="createorderform-password_confirm">child_panels.form.confirm</label>
                                <input
                                        type="password" id="createorderform-password_confirm" class="form-control"
                                        name="CreateOrderForm[password_confirm]" aria-required="true">
                            </div>
                            
                            <div class="form-group">
                                <label for="price" class="control-label">child_panels.form.price</label>
                                <input type="text" class="form-control" id="price" value="$19.999" readonly>
                            </div>
                            <input type="hidden" name="_csrf" value="UxIn9UQ0QoeKIhQFeR9d3jj3cRXPwg-wSKRzSaznMJcKU0qUdHEs18IWU1MgVDuUarAwJvrzVcoqiQoB6ZN83A==">
                            
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary w-100">Submit Order</button>
                        </div>
                    </div>
                    </form>
                                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Child Panel Faq's -->
<div id="child_faq">
    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        What is child panel?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>A child panel is a panel with a limited selection of features that is linked to one of your regular panels such as <a href="/">Tech SMM.com</a></p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        How much cost for a child panel? 
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>It will cost you $19.999 per month. Please note, you paying for panel, not for services, you have to pay for the services you will purchase from Tech SMM</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        How long it will take to activate the child panel ?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>It will take 3-6 hrs to active your child panel if you changed your name server perfectly.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading4">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                        Do you need hosting for child panel ?
                      </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <p>No, for child panel you just need a domain and that's all.</p>
                      </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading5">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                        I have domain, what i can do next ?
                      </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <p>If you have domain, you can simply change your domain name server and point it to<br>
                            <b>ns1.perfectdns.com</b>
                            <b>ns2.perfectdns.com</b>
                            <br>
                            After you successfully changed the name server, you can submit a order for child panel
                          </p>
                      </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading6">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        How can i change name server for my domain?
                      </button>
                    </h2>
                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <p>Its actually depend on your domain provider, if you go to your domain settings and choose custom DNS and enter the name server given by Tech SMM.</p>
                      </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading7">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        How to i connect child panel with Tech SMM?
                      </button>
                    </h2>
                    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <p>You can simply go to https://yourdomain.com/admin/settings/providers and you will find out option to connect your panel with Tech SMM. You can a key to connect your panel with Tech SMM. This key you will find out on settings of your Tech SMM account.</p>
                      </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample2">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                        How can i get refund for child panel if i am not interested to continue?
                    </button>
                  </h2>
                  <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">
                        <p>Unfortunately refund not possible after we activate your child panel. But you can terminate your child panel any time by creating a ticket to us.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                        I want to change my child panel domain address, what i need to do ?
                    </button>
                  </h2>
                  <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">
                        <p>10.	You can simply, change your new domain name server and send to us your new domain address. We will replace your new domain with old domain. But, this change only possible for 1 time. </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-heading10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapseThree">
                        How can i activate affiliate on my child panel.
                    </button>
                  </h2>
                  <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">
                        <p>Unfortunately, there is no affiliate feature on child panel</p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading11">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                        How can i add payment gateway on our child panel?
                      </button>
                    </h2>
                    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample2">
                      <div class="accordion-body">
                        <p>You can visit https://yourdomain.com/admin/settings/payments - Add method - Choose Payment Method </p>
                      </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading12">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                        How can i collect money from our customer ?
                      </button>
                    </h2>
                    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample2">
                      <div class="accordion-body">
                        <p>You customer will pay to your own payment gateway account, they are not paying to us. So, you don't have to worry about payment. Setup your own payment gateway, and collect payment from your customers </p>
                      </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading13">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse6">
                        If i connect our child panel with Tech SMM, is there any way customer will find out about Tech SMM?
                      </button>
                    </h2>
                    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample2">
                      <div class="accordion-body">
                        <p>No, your customer will never know about Tech SMM.com. They will place order on your website and your order will automatically place to Tech SMM.com under your user account. </p>
                      </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading14">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                        How to i connect child panel with Tech SMM?
                      </button>
                    </h2>
                    <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample2">
                      <div class="accordion-body">
                        <p>You can simply go to https://yourdomain.com/admin/settings/providers and you will find out option to connect your panel with Tech SMM. You can a key to connect your panel with Tech SMM. This key you will find out on settings of your Tech SMM account.</p>
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