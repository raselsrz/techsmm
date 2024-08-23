@extends('layouts.dashboard') 
@section('content')

<script>
    if (localStorage.getItem("techSMMCurrentMode")) {
        const bodyFire2 = document.getElementById("body");
        bodyFire2.classList.add("nightmode");
    }
</script>
<main id="main_container">
    <div class="d-none mob_bg_closer_sidebar" onclick="toggleSidebar()"></div>

    @include('pages.dashboard.includes.sidebar')

    <div class="content_area">
        

      @include('pages.dashboard.includes.topHeader')

        <div class="content">
            <!-- page and other top info -->
            <div id="page_info"></div>
            <!-- // page and other top info -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user_statistic_wraper">
                            <div class="statistic__item">
                                <div class="statistic_inner">
                                    <div class="icon">
                                        <img src="https://cdn.mypanel.link/hmz1fi/bcpg233dh40fsdoc.png" class="img-fluid" alt="" />
                                    </div>
                                    <div class="user__data">
                                        <span>Username</span>
                                        <h4>sabozag</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="statistic__item">
                                <div class="statistic_inner">
                                    <div class="icon">
                                        <img src="https://cdn.mypanel.link/hmz1fi/raj356puppqixik9.png" class="img-fluid" alt="" />
                                    </div>
                                    <div class="user__data">
                                        <span>Balance</span>
                                        <h4 class="d-flex gap-2 align-items-center has_currency">
                                            $0
                                            <div class="dropdown">
                                                <a class="btn btn-sm fw-bold currency_change_btn" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                    (USD $)
                                                    <i class="fas fa-sort-down"></i>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="currencies-list">
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="AED" data-rate-symbol="د.إ">AED د.إ</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="BRL" data-rate-symbol="R$">BRL R$</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="CNY" data-rate-symbol="¥">CNY ¥</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="EGP" data-rate-symbol="£">EGP £</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="EUR" data-rate-symbol="€">EUR €</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="INR" data-rate-symbol="₹">INR ₹</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="KRW" data-rate-symbol="₩">KRW ₩</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="KWD" data-rate-symbol="KD">KWD KD</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="NGN" data-rate-symbol="₦">NGN ₦</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="PHP" data-rate-symbol="₱">PHP ₱</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="PKR" data-rate-symbol="Rs">PKR Rs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="RUB" data-rate-symbol="₽">RUB ₽</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="SAR" data-rate-symbol="ر.س">SAR ر.س</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="THB" data-rate-symbol="฿">THB ฿</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="TRY" data-rate-symbol="₺">TRY ₺</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" id="currencies-item" data-rate-key="VND" data-rate-symbol="₫">VND ₫</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="statistic__item">
                                <div class="statistic_inner">
                                    <div class="icon">
                                        <img src="https://cdn.mypanel.link/hmz1fi/mp50mc1fhx7sm8o1.png" class="img-fluid" alt="" />
                                    </div>
                                    <div class="user__data">
                                        <span>Total Orders</span>
                                        <h4>3832060</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="statistic__item">
                                <div class="statistic_inner">
                                    <div class="icon">
                                        <img src="https://cdn.mypanel.link/hmz1fi/aw21tyz9g0kxlk1u.png" class="img-fluid" alt="" />
                                    </div>
                                    <div class="user__data">
                                        <span>Announcement</span>
                                        <h4>
                                            <a href="https://whatsapp.com/channel/0029ValTz8V3bbV8zEly6o0c" class="btn btn-sm btn-primary join_now_btn" target="_blank">Join Now ➜</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- category Filters -->
            <div id="category_filter" class="mb-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="category_filter_wrap">
                                <div class="card card_v2">
                                    <div class="card-body">
                                        <div class="filter_btn_wrap" id="categoryFIlterWraper">
                                            <button class="btn_filter" onclick="filterStarted('instagram')">
                                                <i class="fab fa-instagram"></i>
                                                <span class="filter_txt">
                                                    Instagram
                                                </span>
                                            </button>
                                            <button class="btn_filter" onclick="filterStarted('Facebook')">
                                                <i class="fab fa-facebook"></i>
                                                <span class="filter_txt">
                                                    Facebook
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('youtube')">
                                                <i class="fab fa-youtube"></i>
                                                <span class="filter_txt">
                                                    Youtube
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Twitter')">
                                                <i class="fab fa-twitter"></i>
                                                <span class="filter_txt">
                                                    Twitter
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Spotify')">
                                                <i class="fab fa-spotify"></i>
                                                <span class="filter_txt">
                                                    Spotify
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Tiktok')">
                                                <i class="fab fa-tiktok"></i>
                                                <span class="filter_txt">
                                                    Tiktok
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Telegram')">
                                                <i class="fab fa-telegram"></i>
                                                <span class="filter_txt">
                                                    Telegram
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Linkedin')">
                                                <i class="fab fa-linkedin"></i>
                                                <span class="filter_txt">
                                                    Linkedin
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Discord')">
                                                <i class="fab fa-discord"></i>
                                                <span class="filter_txt">
                                                    Discord
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterStarted('Traffic')">
                                                <i class="fas fa-globe"></i>
                                                <span class="filter_txt">
                                                    Website Traffic
                                                </span>
                                            </button>

                                            <button class="btn_filter" onclick="filterOthers()">
                                                <i class="fas fa-star-christmas"></i>
                                                <span class="filter_txt">
                                                    Others
                                                </span>
                                            </button>
                                            <button class="btn_filter" onclick="filterStarted('everything')">
                                                <i class="far fa-ball-pile"></i>
                                                <span class="filter_txt">
                                                    Everythings
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //category Filters -->

            <!-- New Orders Part -->
            <div class="def_wraper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card_v2">
                                <div class="card-body" id="newOrderTabsWrap">
                                    <ul class="nav nav-pills tab_btn_wrap mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-order-tab" data-bs-toggle="pill" data-bs-target="#pills-order" type="button" role="tab" aria-controls="pills-order" aria-selected="true">
                                                <i class="fas fa-shopping-cart"></i> New Order
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation" id="pills-addfunds" data-bs-toggle="pill" data-bs-target="#pills-addfunds" type="button" role="tab" aria-controls="pills-addfunds" aria-selected="true">
                                            <button class="nav-link" onclick="window.location.href = '/addfunds'"><i class="fas fa-credit-card"></i> Add Funds</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab_wrap" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                            <div class="newordersr">
                                                <form action="/" method="post" id="order-form">
                                                    <div class="form-group">
                                                        <div class="search-dropdown" id="new-order-search" style="position: relative;" data-lang-placeholder="Search">
                                                            <div class="input-wrapper" style="position: relative;">
                                                                <button style="position: absolute; top: 50%; transform: translateY(-50%); padding: 0px 2px; background: none; border: none; left: 12px;" type="button">
                                                                    <span class="fas fa-search"></span>
                                                                </button>
                                                                <input type="text" class="form-control" id="template-input" value="" placeholder="Search" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="orderform-category" class="control-label">Category</label>
                                                        <select class="form-control" id="orderform-category" name="OrderForm[category]" data-select="true" data-select-search="true" data-select-search-placeholder="Search">
                                                            <option
                                                                value="133556"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                                selected
                                                            >
                                                                Instagram Followers | 𝗛𝗤 𝗥𝗘𝗔𝗟 𝟭𝟱+ 𝗣𝗢𝗦𝗧𝗦
                                                            </option>
                                                            <option
                                                                value="142773"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Followers | 𝗛𝗤 𝗥𝗘𝗔𝗟 𝗢𝗟𝗗 𝗔𝗖𝗖𝗢𝗨𝗡𝗧
                                                            </option>
                                                            <option
                                                                value="134418"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                Tiktok Follow | 𝐂𝐇𝐄𝐀𝐏 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="156756"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Follower | 𝗨𝗣𝗗𝗔𝗧𝗘𝗗 𝗪𝗢𝗥𝗞𝗜𝗡𝗚 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="157214"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Post Reactions Mix
                                                            </option>
                                                            <option
                                                                value="114209"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Services | 𝗨𝗣𝗗𝗔𝗧𝗘 𝗦𝗣𝗘𝗖𝗜𝗔𝗟
                                                            </option>
                                                            <option
                                                                value="156299"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Like | | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="154023"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Services | 𝗨𝗣𝗗𝗔𝗧𝗘 𝗦𝗣𝗘𝗖𝗜𝗔𝗟
                                                            </option>
                                                            <option
                                                                value="138350"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Service ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="149485"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Followers | 𝗨𝗣𝗗𝗔𝗧𝗘𝗗 𝗦𝗧𝗔𝗕𝗟𝗘
                                                            </option>
                                                            <option
                                                                value="151298"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Followers | 𝗔𝗟𝗪𝗔𝗬𝗦 𝗪𝗢𝗥𝗞𝗜𝗡𝗚
                                                            </option>
                                                            <option
                                                                value="29239"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Comments ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="149938"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Followers | 𝗨𝗣𝗗𝗔𝗧𝗘𝗗 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="148584"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook New Own Server
                                                            </option>
                                                            <option
                                                                value="521"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Reels Views | Package
                                                            </option>
                                                            <option
                                                                value="142328"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Services ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="148134"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Real Followers | No Refill
                                                            </option>
                                                            <option
                                                                value="144999"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Likes ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="140556"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                Tiktok Followers | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="138791"
                                                                data-icon="
                                                      <span class='fab fa-telegram-plane'></span>
                                                  "
                                                            >
                                                                Telegram Members | 𝗙𝗔𝗦𝗧
                                                            </option>
                                                            <option
                                                                value="116270"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Video Views | 𝗨𝗣𝗗𝗔𝗧𝗘 𝗦𝗣𝗘𝗖𝗜𝗔𝗟
                                                            </option>
                                                            <option
                                                                value="40634"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Video Views
                                                            </option>
                                                            <option
                                                                value="29776"
                                                                data-icon="
                                                      <span>♨️</span>
                                                  "
                                                            >
                                                                TechSMM - 𝗖heapest 𝗦ervices
                                                            </option>
                                                            <option
                                                                value="22915"
                                                                data-icon="
                                                      <img src='https://cdn.mypanel.link/hmz1fi/h8eawotqf0tuij6c.png' alt='𝗖𝗮𝗻𝘃𝗮 𝗣𝗿𝗼 ( 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 𝐄𝐝𝐢𝐭𝐢𝐧𝐠 𝐓𝐨𝐨𝐥) Own Provide' class='img-responsive btn-group-vertical'>
                                                  "
                                                            >
                                                                𝗖𝗮𝗻𝘃𝗮 𝗣𝗿𝗼 ( 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 𝐄𝐝𝐢𝐭𝐢𝐧𝐠 𝐓𝐨𝐨𝐥) Own Provide
                                                            </option>
                                                            <option
                                                                value="3"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - 60k 𝘁𝗼 600k watch time views
                                                            </option>
                                                            <option
                                                                value="70999"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook 60K to 600K Live Minutes
                                                            </option>
                                                            <option
                                                                value="8"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Page Followers
                                                            </option>
                                                            <option
                                                                value="9"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Profile Followers
                                                            </option>
                                                            <option
                                                                value="7"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Page Likes + Follow
                                                            </option>
                                                            <option
                                                                value="13"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Post Likes
                                                            </option>
                                                            <option
                                                                value="146341"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Post Emoticons | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="128853"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Post Reacticons | 𝗖𝗛𝗘𝗔𝗣 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="134419"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Post Reactions | 𝗦𝗧𝗔𝗕𝗟𝗘
                                                            </option>
                                                            <option
                                                                value="14"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Reaction 😍😀😢😡 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="30317"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Post Emoticons | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧
                                                            </option>
                                                            <option
                                                                value="42113"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Views ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | Cheapest
                                                            </option>
                                                            <option
                                                                value="33645"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Video/Reel Views | Fast🚨
                                                            </option>
                                                            <option
                                                                value="16"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Reels
                                                            </option>
                                                            <option
                                                                value="11"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Group Members
                                                            </option>
                                                            <option
                                                                value="12"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Event Join
                                                            </option>
                                                            <option
                                                                value="56621"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Comments | Custom
                                                            </option>
                                                            <option
                                                                value="56951"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Comment Reply | Random/Custom
                                                            </option>
                                                            <option
                                                                value="66063"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Share | Story Views
                                                            </option>
                                                            <option
                                                                value="15"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Comments
                                                            </option>
                                                            <option
                                                                value="52735"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook post likes Egyptians | Exclusive
                                                            </option>
                                                            <option
                                                                value="8558"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Bangladesh 🇧🇩 Followers
                                                            </option>
                                                            <option
                                                                value="137034"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                🇧🇩 Facebook - BANGLADESHI Services ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="137910"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                🇧🇩 Facebook - Reaction 😍😀😢😡 | Bangladeshi
                                                            </option>
                                                            <option
                                                                value="6"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Bangladesh 🇧🇩 Services
                                                            </option>
                                                            <option
                                                                value="102441"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Own Indian Service 🇮🇳
                                                            </option>
                                                            <option
                                                                value="5"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Indian 🇮🇳 Services
                                                            </option>
                                                            <option
                                                                value="32227"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Latin America ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="29238"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - USA 🇺🇸 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="2690"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Philippine 🇵🇭 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="7961"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Thailand 🇹🇭 Services ⁻ᴺᴱᵂ⁻
                                                            </option>
                                                            <option
                                                                value="101263"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Live Stream | Likes / Reaction
                                                            </option>
                                                            <option
                                                                value="96584"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Live Stream Views | Working
                                                            </option>
                                                            <option
                                                                value="109707"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Live Stream Viewers | 3K Per Live Stream | 𝗦𝗧𝗔𝗕𝗟𝗘 - Increase 100% - 120%
                                                            </option>
                                                            <option
                                                                value="33360"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook Exclusive LiveStream Views
                                                            </option>
                                                            <option
                                                                value="23"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Facebook - Live Stream Views | 𝐕𝐈𝐏
                                                            </option>
                                                            <option
                                                                value="66412"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Likes⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | 𝗔𝗟𝗪𝗔𝗬𝗦 𝗪𝗢𝗥𝗞𝗜𝗡𝗚
                                                            </option>
                                                            <option
                                                                value="22657"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Follow | 𝙁𝘼𝙎𝙏
                                                            </option>
                                                            <option
                                                                value="68168"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Recommend - ᴀʟᴡᴀʏs ᴡᴏʀᴋs
                                                            </option>
                                                            <option
                                                                value="70642"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Followers | 𝗢𝗿𝗴𝗮𝗻𝗶𝗰 𝗪𝗶𝘁𝗵 𝗠𝗶𝘀𝘀𝗶𝗼𝗻 𝗦𝘆𝘀𝘁𝗲𝗺 | 𝗛𝗤
                                                            </option>
                                                            <option
                                                                value="128002"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Followers | Real - User
                                                            </option>
                                                            <option
                                                                value="26586"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                Tiktok Like Provider ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ |⚡ 𝐁𝐮𝐥𝐥𝐞𝐭 𝐒𝐩𝐞𝐞𝐝
                                                            </option>
                                                            <option value="91217">
                                                                TikTok Likes | Provider Service ~ 𝙁𝘼𝙎𝙏
                                                            </option>
                                                            <option
                                                                value="25"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Likes ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="26"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Views
                                                            </option>
                                                            <option
                                                                value="70286"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - | Likes + Views
                                                            </option>
                                                            <option
                                                                value="59937"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Share | Save
                                                            </option>
                                                            <option
                                                                value="27"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Followers | Targeted
                                                            </option>
                                                            <option
                                                                value="28"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Likes | Targeted
                                                            </option>
                                                            <option
                                                                value="29"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Views | Targeted
                                                            </option>
                                                            <option
                                                                value="120428"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok ADS Views | Targeted
                                                            </option>
                                                            <option
                                                                value="135287"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Comments | Random
                                                            </option>
                                                            <option
                                                                value="135288"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Comment | Custom
                                                            </option>
                                                            <option
                                                                value="135289"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Comment | Emoji
                                                            </option>
                                                            <option
                                                                value="109298"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Custom Comments | Targeted
                                                            </option>
                                                            <option
                                                                value="32"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Verified Comments
                                                            </option>
                                                            <option
                                                                value="79601"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Brazil Services 🇧🇷
                                                            </option>
                                                            <option
                                                                value="54021"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                Tiktok PK Battle Services | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧
                                                            </option>
                                                            <option value="120429">
                                                                TikTok Ads Views [ From Ads ] %100 Discover
                                                            </option>
                                                            <option
                                                                value="96197"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Live Stream Views | 𝗖𝗛𝗘𝗔𝗣
                                                            </option>
                                                            <option
                                                                value="66762"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Live Stream | 𝗕𝗘𝗦𝗧 𝗣𝗥𝗜𝗖𝗘
                                                            </option>
                                                            <option
                                                                value="44835"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                Tiktok Live Stream | 𝗔𝗟𝗪𝗔𝗬𝗦 𝗪𝗢𝗥𝗞𝗜𝗡𝗚
                                                            </option>
                                                            <option
                                                                value="65021"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                Tiktok Live Views | Arab
                                                            </option>
                                                            <option
                                                                value="132697"
                                                                data-icon="
                                                      <span class='fab fa-facebook-square'></span>
                                                  "
                                                            >
                                                                Tiktok Live Stream Views + %50 Likes
                                                            </option>
                                                            <option
                                                                value="33"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok - Live Stream ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | Working
                                                            </option>
                                                            <option
                                                                value="76357"
                                                                data-icon="
                                                      <span class='fab fa-tiktok'></span>
                                                  "
                                                            >
                                                                TikTok Live Stream Views Services | Always Working
                                                            </option>
                                                            <option
                                                                value="26850"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Follow ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | Super Fast⚡
                                                            </option>
                                                            <option
                                                                value="42412"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 🇮🇳Indian Servicesᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="37"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Followers | BOT / LQ
                                                            </option>
                                                            <option
                                                                value="38"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Followers | 30 Days Refill
                                                            </option>
                                                            <option
                                                                value="41"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Followers | 365 Days Refill
                                                            </option>
                                                            <option
                                                                value="42"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Followers | Targeted
                                                            </option>
                                                            <option
                                                                value="43"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Likes
                                                            </option>
                                                            <option
                                                                value="44"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Likes | 100% Real
                                                            </option>
                                                            <option
                                                                value="45"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Likes | 𝗧𝗮𝗿𝗴𝗲𝘁𝗲𝗱
                                                            </option>
                                                            <option
                                                                value="30046"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Video Views ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="96972"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Followers | Real Data ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="150391"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Impression Services
                                                            </option>
                                                            <option
                                                                value="46065"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Other Services
                                                            </option>
                                                            <option
                                                                value="123363"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Like + Impressions + Reach + Save + Profile Visit Services
                                                            </option>
                                                            <option
                                                                value="123364"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Profile Visit | Impressions | Reach | Shares | Live Video Views
                                                            </option>
                                                            <option value="79966">
                                                                Instagram Followers | USA 🇺🇸 ᴺᴱᵂ
                                                            </option>
                                                            <option value="79967">
                                                                Instagram Followers | Pakistan 🇵🇰 ᴺᴱᵂ
                                                            </option>
                                                            <option value="79968">
                                                                Instagram Followers | India 🇮🇳
                                                            </option>
                                                            <option value="79971">
                                                                Instagram Followers |Turkey 🇹🇷
                                                            </option>
                                                            <option value="79970">
                                                                Instagram Followers | China 🇨🇳
                                                            </option>
                                                            <option
                                                                value="108890"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                🇧🇷 Instagram Followers | Brazil |100% Real People ᴺᴱᵂ
                                                            </option>
                                                            <option value="79969">
                                                                Instagram Followers | Brazil 🇧🇷
                                                            </option>
                                                            <option value="79972">
                                                                Instagram Followers | Indonesia 🇮🇩
                                                            </option>
                                                            <option value="79973">
                                                                Instagram Followers | All Country 🌎
                                                            </option>
                                                            <option
                                                                value="35648"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝗦𝘂𝗽𝗲𝗿 𝗥𝗲𝗮𝗹 𝗦𝗲𝗿𝘃𝗶𝗰𝗲𝘀
                                                            </option>
                                                            <option
                                                                value="46"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝐀𝗨𝐓𝐎 Likes
                                                            </option>
                                                            <option
                                                                value="47"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝐀𝗨𝐓𝐎 Likes + Impression
                                                            </option>
                                                            <option
                                                                value="48"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Video Views | 𝗪𝗼𝗿𝗹𝗱𝘄𝗶𝗱𝗲
                                                            </option>
                                                            <option
                                                                value="49"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Video Views | 𝗧𝗮𝗿𝗴𝗲𝘁𝗲𝗱
                                                            </option>
                                                            <option
                                                                value="14203"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Video Views | Targeted ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="50"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝐀𝗨𝐓𝐎 Views
                                                            </option>
                                                            <option
                                                                value="15138"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝐀𝐮𝐭𝐨 Comment | Impression | Save
                                                            </option>
                                                            <option
                                                                value="35649"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Services | Male / Female
                                                            </option>
                                                            <option
                                                                value="145446"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Live Stream Views | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧
                                                            </option>
                                                            <option
                                                                value="51"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Live Stream Views
                                                            </option>
                                                            <option
                                                                value="60608"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                𝐈𝐧𝐬𝐭𝐚𝐠𝐫𝐚𝐦 𝐋𝐢𝐯𝐞 𝐁𝐫𝐨𝐚𝐝𝐜𝐚𝐬𝐭 𝐈𝐧𝐬𝐭𝐚𝐧𝐭 𝐂𝐡𝐞𝐚𝐩𝐞𝐬𝐭 🥇
                                                            </option>
                                                            <option
                                                                value="67114"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram Live Stream - ᴀʟᴡᴀʏs ᴡᴏʀᴋs
                                                            </option>
                                                            <option
                                                                value="13070"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Story
                                                            </option>
                                                            <option
                                                                value="52"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - IGTV
                                                            </option>
                                                            <option
                                                                value="53"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝐑𝗘𝗘𝗟
                                                            </option>
                                                            <option
                                                                value="54"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Mentions
                                                            </option>
                                                            <option
                                                                value="56"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Comments
                                                            </option>
                                                            <option value="83694">
                                                                Instagram Comments | Random | Targeted 🌍 | Cheap
                                                            </option>
                                                            <option value="84068">
                                                                Instagram Comments | Random | Targeted 🌍 | %100 Real Accounts
                                                            </option>
                                                            <option value="84069">
                                                                Instagram Comments | Custom | Targeted 🌍 | %100 Real Accounts
                                                            </option>
                                                            <option value="84070">
                                                                Instagram Comments | Targeted 🌍 | %100 Real Accounts | Package
                                                            </option>
                                                            <option
                                                                value="57"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Arab 🇸🇦 Active Comments
                                                            </option>
                                                            <option
                                                                value="58"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - 𝐀𝗨𝐓𝐎 Comment | Impression | Save
                                                            </option>
                                                            <option
                                                                value="35651"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Russia 🇷🇺
                                                            </option>
                                                            <option
                                                                value="62"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Latin America Services
                                                            </option>
                                                            <option
                                                                value="63"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - USA 🇺🇸 Services
                                                            </option>
                                                            <option
                                                                value="64"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Türkiye 🇹🇷 Services
                                                            </option>
                                                            <option
                                                                value="66"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Indian 🇮🇳 Servicves
                                                            </option>
                                                            <option
                                                                value="67"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Nigeria 🇳🇬 Services
                                                            </option>
                                                            <option value="17275">
                                                                Threads - By Instagram ⁻ᴺᴱᵂ⁻
                                                            </option>
                                                            <option value="119593">
                                                                Threads Followers | Targeted
                                                            </option>
                                                            <option
                                                                value="13519"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Subscribers
                                                            </option>
                                                            <option
                                                                value="519"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Fastest Views
                                                            </option>
                                                            <option
                                                                value="12849"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Watch Time ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="78"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Views | Targeted
                                                            </option>
                                                            <option
                                                                value="82"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Likes | Dislikes
                                                            </option>
                                                            <option
                                                                value="80"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Premiere Views
                                                            </option>
                                                            <option value="97752">
                                                                YouTube Live Stream Views | Cheapest Working
                                                            </option>
                                                            <option value="79239">
                                                                YouTube Live Stream Views
                                                            </option>
                                                            <option
                                                                value="81"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Shorts Service
                                                            </option>
                                                            <option
                                                                value="83"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                Youtube - Comments
                                                            </option>
                                                            <option
                                                                value="32230"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Comments [ Targeted ]
                                                            </option>
                                                            <option
                                                                value="14201"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Views | Refill - Stable
                                                            </option>
                                                            <option
                                                                value="14204"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Unique Views [ Worldwide ] ⁻ᴺᴱᵂ⁻
                                                            </option>
                                                            <option
                                                                value="88"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Social Share
                                                            </option>
                                                            <option
                                                                value="89"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - USA Shares 🇺🇸
                                                            </option>
                                                            <option
                                                                value="91"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Thailand Shares 🇹🇭
                                                            </option>
                                                            <option value="13520">
                                                                YouTube - Community Services
                                                            </option>
                                                            <option
                                                                value="15139"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - Social Share | Targeted
                                                            </option>
                                                            <option
                                                                value="15140"
                                                                data-icon="
                                                      <span class='fab fa-youtube'></span>
                                                  "
                                                            >
                                                                YouTube - 𝐀𝐮𝐭𝐨 Social Shares
                                                            </option>
                                                            <option
                                                                value="117511"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter Likes | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘
                                                            </option>
                                                            <option
                                                                value="117510"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter Followers | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘
                                                            </option>
                                                            <option
                                                                value="117512"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter Retweet | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘
                                                            </option>
                                                            <option
                                                                value="95"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter (X) | 100% Real Services
                                                            </option>
                                                            <option
                                                                value="93"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter - Followers
                                                            </option>
                                                            <option
                                                                value="94"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter - Likes
                                                            </option>
                                                            <option
                                                                value="32793"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                X ( Twitter ) - Retweets
                                                            </option>
                                                            <option
                                                                value="22914"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter - Retweets | Targeted
                                                            </option>
                                                            <option
                                                                value="13517"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter - Impressions
                                                            </option>
                                                            <option
                                                                value="13516"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter - Views
                                                            </option>
                                                            <option
                                                                value="69931"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter Views & Profile Click & Link Click & Media Views & Impression Services
                                                            </option>
                                                            <option value="94656">
                                                                Twitter Poll Vote
                                                            </option>
                                                            <option
                                                                value="40633"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                X ( Twitter ) - Space Listeners
                                                            </option>
                                                            <option
                                                                value="13518"
                                                                data-icon="
                                                      <span class='fab fa-twitter'></span>
                                                  "
                                                            >
                                                                Twitter - Click | Vote | Bookmark
                                                            </option>
                                                            <option
                                                                value="53698"
                                                                data-icon="
                                                      <span class='fab fa-telegram'></span>
                                                  "
                                                            >
                                                                Telegram - Members
                                                            </option>
                                                            <option
                                                                value="75998"
                                                                data-icon="
                                                      <span class='fab fa-telegram'></span>
                                                  "
                                                            >
                                                                Telegram Views
                                                            </option>
                                                            <option
                                                                value="119"
                                                                data-icon="
                                                      <span class='fab fa-telegram'></span>
                                                  "
                                                            >
                                                                Telegram - Views | Targeted
                                                            </option>
                                                            <option
                                                                value="22153"
                                                                data-icon="
                                                      <span class='fab fa-telegram'></span>
                                                  "
                                                            >
                                                                Telegram - Views | Past Post
                                                            </option>
                                                            <option
                                                                value="53055"
                                                                data-icon="
                                                      <span class='fab fa-telegram'></span>
                                                  "
                                                            >
                                                                Telegram Reactions | ᴺᴱᵂ 𝐂𝐇𝐄𝐀𝐏 ᴺᴱᵂ
                                                            </option>
                                                            <option
                                                                value="120"
                                                                data-icon="
                                                      <span class='fab fa-telegram'></span>
                                                  "
                                                            >
                                                                Telegram - Comments | Share | Vote
                                                            </option>
                                                            <option value="93116">
                                                                Spotify Plays
                                                            </option>
                                                            <option value="107671">
                                                                Spotify Plays | Devices
                                                            </option>
                                                            <option value="107672">
                                                                Spotify Plays | ADS
                                                            </option>
                                                            <option value="93117">
                                                                Spotify Plays | Language Targeted
                                                            </option>
                                                            <option value="93118">
                                                                Spotify Plays | Country Targeted
                                                            </option>
                                                            <option value="93119">
                                                                Spotify Plays | From Spotify Algorithmic playlists | Country-Targeted
                                                            </option>
                                                            <option
                                                                value="106"
                                                                data-icon="
                                                      <span class='fab fa-spotify'></span>
                                                  "
                                                            >
                                                                Spotify - Plays | 𝐅𝐫𝐞𝐞 Accounts
                                                            </option>
                                                            <option
                                                                value="107"
                                                                data-icon="
                                                      <span class='fab fa-spotify'></span>
                                                  "
                                                            >
                                                                Spotify - Plays | 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 Accounts
                                                            </option>
                                                            <option
                                                                value="112"
                                                                data-icon="
                                                      <span class='fab fa-spotify'></span>
                                                  "
                                                            >
                                                                Spotify - Followers ( Artist | User | Playlist )
                                                            </option>
                                                            <option
                                                                value="113"
                                                                data-icon="
                                                      <span class='fab fa-spotify'></span>
                                                  "
                                                            >
                                                                Spotify - Monthly Listeners
                                                            </option>
                                                            <option
                                                                value="115"
                                                                data-icon="
                                                      <span class='fab fa-spotify'></span>
                                                  "
                                                            >
                                                                Spotify - Saves
                                                            </option>
                                                            <option value="118">
                                                                Telegram - Views
                                                            </option>
                                                            <option value="126">
                                                                Discord - Server Members
                                                            </option>
                                                            <option
                                                                value="22405"
                                                                data-icon="
                                                      <span class='fab fa-linkedin'></span>
                                                  "
                                                            >
                                                                LinkedIn ⁻ᴺᴱᵂ⁻
                                                            </option>
                                                            <option
                                                                value="43616"
                                                                data-icon="
                                                      <span class='fab fa-linkedin'></span>
                                                  "
                                                            >
                                                                LINKEDIN | 100% Real HQ Organic Users
                                                            </option>
                                                            <option
                                                                value="13064"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Save | Reach | Impression
                                                            </option>
                                                            <option value="13071">
                                                                Deezer
                                                            </option>
                                                            <option value="13072">
                                                                Audiomack
                                                            </option>
                                                            <option value="13073">
                                                                SoundCloud
                                                            </option>
                                                            <option value="13521">
                                                                Fansly
                                                            </option>
                                                            <option
                                                                value="14206"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Impressions | Reach | Profile Visits ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻
                                                            </option>
                                                            <option
                                                                value="15137"
                                                                data-icon="
                                                      <span class='fab fa-instagram'></span>
                                                  "
                                                            >
                                                                Instagram - Reel
                                                            </option>
                                                            <option value="17998">
                                                                Threads - Followers
                                                            </option>
                                                            <option value="46684">
                                                                Pinterest Pins
                                                            </option>
                                                            <option value="46685">
                                                                Pinterest Followers
                                                            </option>
                                                            <option value="46686">
                                                                Pinterest Saves
                                                            </option>
                                                            <option value="46687">
                                                                Pinterest Shares
                                                            </option>
                                                            <option value="136">
                                                                Reddit
                                                            </option>
                                                            <option value="46688">
                                                                Pinterest Monthly Views
                                                            </option>
                                                            <option value="46689">
                                                                Reddit Upvotes / DownVotes
                                                            </option>
                                                            <option value="46690">
                                                                Reddit Comment
                                                            </option>
                                                            <option value="46691">
                                                                Reddit Comment Upvotes
                                                            </option>
                                                            <option value="46692">
                                                                Reddit Comment Reply
                                                            </option>
                                                            <option
                                                                value="44529"
                                                                data-icon="
                                                      <span class='fab fa-twitch'></span>
                                                  "
                                                            >
                                                                Twitch - Live [Provider]
                                                            </option>
                                                            <option value="62291">
                                                                Rumble Views
                                                            </option>
                                                            <option value="113798">
                                                                Google Map Reviews
                                                            </option>
                                                            <option
                                                                value="41814"
                                                                data-icon="
                                                      <span class='fab fa-pinterest-p'></span>
                                                  "
                                                            >
                                                                Private 1
                                                            </option>
                                                            <option
                                                                value="127576"
                                                                data-icon="
                                                      <span>🔥</span>
                                                  "
                                                            >
                                                                PROVIDER ✌🏻
                                                            </option>
                                                            <option value="137909">
                                                                🇺🇸 Website Traffic from USA [ Cheap]
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="service" class="control-label">Service</label>
                                                        <select class="form-control" id="orderform-service" name="OrderForm[service]" data-select="true" data-select-search="true" data-select-search-placeholder="Search"></select>
                                                    </div>

                                                    <div class="mb-3 hidden fields" id="service_description">
                                                        <label for="service_description" class="control-label">Description</label>
                                                        <div class="panel-body border-solid border-rounded"></div>
                                                    </div>
                                                    <div id="fields"></div>
                                                    <div class="mb-3">
                                                        <label for="charge" class="control-label">Charge</label>
                                                        <input type="text" class="form-control" id="charge" value="" readonly />
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="2E6KE9_dP50LNtbSJUqve6W8qEFaiIeLoroRvM0sJDOBD-dy75hRzUMCkYR8Ackx9_vpcm-53fHAl2j0iFhoeA==" />
                                                    <button type="submit" class="btn btn-primary d-block w-100">Submit</button>
                                                </form>
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
                                            <i class="fas fa-server"></i>
                                        </div>
                                        <div class="name">
                                            Services Details
                                        </div>
                                    </div>
                                    <div class="tab-content tab_wrap" id="pills-tabContent">
                                        <!-- Details Start -->
                                        <div class="tab-pane fade show active" id="pills-details" role="tabpanel" aria-labelledby="pills-details-tab">
                                            <div class="details_data">
                                                <div class="item">
                                                    <div class="item_left">
                                                        <div class="icon">
                                                            <i class="fas fa-link"></i>
                                                        </div>
                                                        <h3>Example Link</h3>
                                                    </div>
                                                    <div class="item_content">
                                                        <span data-id="serviceLink" class="serviceLink"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details_data">
                                                <div class="item">
                                                    <div class="item_left">
                                                        <div class="icon">
                                                            <i class="fas fa-tachometer-alt-fast"></i>
                                                        </div>
                                                        <h3>Start Time</h3>
                                                    </div>
                                                    <div class="item_content">
                                                        <p><small data-id="serviceStart"></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details_data">
                                                <div class="item">
                                                    <div class="item_left">
                                                        <div class="icon">
                                                            <i class="fas fa-shipping-fast"></i>
                                                        </div>
                                                        <h3>Speed</h3>
                                                    </div>
                                                    <div class="item_content">
                                                        <p><small data-id="serviceSpeed"> </small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details_data">
                                                <div class="item">
                                                    <div class="item_left">
                                                        <div class="icon">
                                                            <i class="fas fa-recycle"></i>
                                                        </div>
                                                        <h3>Guarantee</h3>
                                                    </div>
                                                    <div class="item_content">
                                                        <p><small data-id="serviceRefill"></small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="details_data">
                                                <div class="item">
                                                    <div class="item_left">
                                                        <div class="icon">
                                                            <i class="fas fa-clock"></i>
                                                        </div>
                                                        <h3>Avarage Time</h3>
                                                    </div>
                                                    <div class="item_content">
                                                        <p><small id="average_time">Not enough data</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="descriptions_box">
                                                <div data-id="serviceDesc"></div>
                                            </div>
                                        </div>
                                        <!-- //Details Start -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // New Orders Part -->


            <script>

              const allCurrentCat =  [
                       { id: 133556, name: "Instagram Followers | 𝗛𝗤 𝗥𝗘𝗔𝗟 𝟭𝟱+ 𝗣𝗢𝗦𝗧𝗦", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 142773, name: "Instagram - Followers | 𝗛𝗤 𝗥𝗘𝗔𝗟 𝗢𝗟𝗗 𝗔𝗖𝗖𝗢𝗨𝗡𝗧", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 134418, name: "Tiktok Follow | 𝐂𝐇𝐄𝐀𝐏 ᴺᴱᵂ", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 156756, name: "Instagram Follower | 𝗨𝗣𝗗𝗔𝗧𝗘𝗗 𝗪𝗢𝗥𝗞𝗜𝗡𝗚 ᴺᴱᵂ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 157214, name: "Facebook Post Reactions Mix", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 114209, name: "Facebook Services | 𝗨𝗣𝗗𝗔𝗧𝗘 𝗦𝗣𝗘𝗖𝗜𝗔𝗟", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 156299, name: "TikTok Like | | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧 ᴺᴱᵂ", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 154023, name: "Instagram - Services | 𝗨𝗣𝗗𝗔𝗧𝗘 𝗦𝗣𝗘𝗖𝗜𝗔𝗟", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 138350, name: "TikTok Service ᴺᴱᵂ", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 149485, name: "TikTok - Followers  | 𝗨𝗣𝗗𝗔𝗧𝗘𝗗 𝗦𝗧𝗔𝗕𝗟𝗘", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 151298, name: "TikTok - Followers | 𝗔𝗟𝗪𝗔𝗬𝗦 𝗪𝗢𝗥𝗞𝗜𝗡𝗚", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 29239, name: "TikTok - Comments ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 149938, name: "TikTok - Followers | 𝗨𝗣𝗗𝗔𝗧𝗘𝗗 ᴺᴱᵂ", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 148584, name: "Facebook New Own Server", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 521, name: "Facebook - Reels Views | Package", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 142328, name: "Instagram Services ᴺᴱᵂ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 148134, name: "Instagram Real Followers | No Refill", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 144999, name: "Instagram Likes ᴺᴱᵂ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 140556, name: "Tiktok Followers | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧 ᴺᴱᵂ", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 138791, name: "Telegram Members | 𝗙𝗔𝗦𝗧", icon: "<span class='fab fa-telegram-plane'></span>" },
                   { id: 116270, name: "Instagram Video Views | 𝗨𝗣𝗗𝗔𝗧𝗘 𝗦𝗣𝗘𝗖𝗜𝗔𝗟", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 40634, name: "Facebook - Video Views", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 29776, name: "TechSMM - 𝗖heapest 𝗦ervices", icon: "<span>♨️</span>" },
                   { id: 22915, name: "𝗖𝗮𝗻𝘃𝗮 𝗣𝗿𝗼 ( 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 𝐄𝐝𝐢𝐭𝐢𝐧𝐠 𝐓𝐨𝐨𝐥) Own Provide", icon: "<img src='https://cdn.mypanel.link/hmz1fi/h8eawotqf0tuij6c.png' alt='𝗖𝗮𝗻𝘃𝗮 𝗣𝗿𝗼 ( 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 𝐄𝐝𝐢𝐭𝐢𝐧𝐠 𝐓𝐨𝐨𝐥) Own Provide' class='img-responsive btn-group-vertical'>" },
                   { id: 3, name: "Facebook - 60k 𝘁𝗼 600k watch time  views", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 70999, name: "Facebook 60K to 600K Live Minutes", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 8, name: "Facebook - Page Followers", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 9, name: "Facebook - Profile Followers", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 7, name: "Facebook - Page Likes + Follow", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 13, name: "Facebook - Post Likes", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 146341, name: "Facebook - Post Emoticons | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 128853, name: "Facebook Post Reacticons | 𝗖𝗛𝗘𝗔𝗣 ᴺᴱᵂ", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 134419, name: "Facebook Post Reactions | 𝗦𝗧𝗔𝗕𝗟𝗘", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 14, name: "Facebook - Reaction 😍😀😢😡  ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 30317, name: "Facebook - Post Emoticons | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 42113, name: "Facebook Views ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | Cheapest", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 33645, name: "Facebook Video/Reel Views | Fast🚨", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 16, name: "Facebook - Reels", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 11, name: "Facebook - Group Members", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 12, name: "Facebook - Event Join", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 56621, name: "Facebook Comments | Custom", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 56951, name: "Facebook Comment Reply | Random/Custom", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 66063, name: "Facebook Share | Story Views", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 15, name: "Facebook - Comments", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 52735, name: "Facebook post likes Egyptians | Exclusive", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 8558, name: "Facebook - Bangladesh 🇧🇩 Followers", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 137034, name: "🇧🇩 Facebook - BANGLADESHI Services ᴺᴱᵂ", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 137910, name: "🇧🇩 Facebook - Reaction 😍😀😢😡 | Bangladeshi", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 6, name: "Facebook - Bangladesh 🇧🇩 Services", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 102441, name: "Facebook Own Indian Service 🇮🇳", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 5, name: "Facebook - Indian 🇮🇳 Services", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 32227, name: "Facebook - Latin America ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 29238, name: "Facebook - USA 🇺🇸 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 2690, name: "Facebook - Philippine 🇵🇭 ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 7961, name: "Facebook - Thailand 🇹🇭 Services ⁻ᴺᴱᵂ⁻", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 101263, name: "Facebook Live Stream | Likes / Reaction", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 96584, name: "Facebook Live Stream Views | Working", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 109707, name: "Facebook Live Stream Viewers | 3K Per Live Stream | 𝗦𝗧𝗔𝗕𝗟𝗘 - Increase 100% - 120%", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 33360, name: "Facebook Exclusive LiveStream Views", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 23, name: "Facebook - Live Stream Views | 𝐕𝐈𝐏", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 66412, name: "TikTok Likes⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | 𝗔𝗟𝗪𝗔𝗬𝗦 𝗪𝗢𝗥𝗞𝗜𝗡𝗚", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 22657, name: "TikTok  Follow | 𝙁𝘼𝙎𝙏", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 68168, name: "TikTok Recommend - ᴀʟᴡᴀʏs ᴡᴏʀᴋs", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 70642, name: "TikTok Followers | 𝗢𝗿𝗴𝗮𝗻𝗶𝗰 𝗪𝗶𝘁𝗵 𝗠𝗶𝘀𝘀𝗶𝗼𝗻 𝗦𝘆𝘀𝘁𝗲𝗺 | 𝗛𝗤", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 128002, name: "TikTok Followers | Real - User", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 26586, name: "Tiktok Like Provider ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻  |⚡ 𝐁𝐮𝐥𝐥𝐞𝐭 𝐒𝐩𝐞𝐞𝐝", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 91217, name: "TikTok Likes | Provider Service ~ 𝙁𝘼𝙎𝙏", icon: "" },
                   { id: 25, name: "TikTok - Likes ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 26, name: "TikTok - Views", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 70286, name: "TikTok - | Likes + Views", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 59937, name: "TikTok - Share | Save", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 27, name: "TikTok - Followers | Targeted", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 28, name: "TikTok - Likes | Targeted", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 29, name: "TikTok - Views | Targeted", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 120428, name: "TikTok  ADS Views | Targeted", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 135287, name: "TikTok Comments | Random", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 135288, name: "TikTok Comment | Custom", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 135289, name: "TikTok Comment | Emoji", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 109298, name: "TikTok Custom Comments | Targeted", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 32, name: "TikTok - Verified Comments", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 79601, name: "TikTok Brazil Services 🇧🇷", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 54021, name: "Tiktok PK Battle Services | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 120429, name: "TikTok Ads Views [ From Ads ] %100 Discover", icon: "" },
                   { id: 96197, name: "TikTok Live Stream Views | 𝗖𝗛𝗘𝗔𝗣", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 66762, name: "TikTok - Live Stream | 𝗕𝗘𝗦𝗧 𝗣𝗥𝗜𝗖𝗘", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 44835, name: "Tiktok Live Stream | 𝗔𝗟𝗪𝗔𝗬𝗦 𝗪𝗢𝗥𝗞𝗜𝗡𝗚", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 65021, name: "Tiktok  Live Views | Arab", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 132697, name: "Tiktok Live Stream Views + %50 Likes", icon: "<span class='fab fa-facebook-square'></span>" },
                   { id: 33, name: "TikTok - Live Stream ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | Working", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 76357, name: "TikTok Live Stream Views Services  | Always Working", icon: "<span class='fab fa-tiktok'></span>" },
                   { id: 26850, name: "Instagram Follow  ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻ | Super Fast⚡", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 42412, name: "Instagram - 🇮🇳Indian Servicesᴺᴱᵂ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 37, name: "Instagram - Followers | BOT / LQ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 38, name: "Instagram - Followers | 30 Days Refill", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 41, name: "Instagram - Followers | 365 Days Refill", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 42, name: "Instagram - Followers | Targeted", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 43, name: "Instagram - Likes", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 44, name: "Instagram - Likes | 100% Real", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 45, name: "Instagram - Likes | 𝗧𝗮𝗿𝗴𝗲𝘁𝗲𝗱", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 30046, name: "Instagram - Video Views ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 96972, name: "Instagram Followers | Real Data ᴺᴱᵂ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 150391, name: "Instagram Impression Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 46065, name: "Instagram - Other Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 123363, name: "Instagram Like + Impressions + Reach + Save + Profile Visit Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 123364, name: "Instagram Profile Visit | Impressions | Reach | Shares | Live Video Views", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 79966, name: "Instagram Followers | USA 🇺🇸 ᴺᴱᵂ", icon: "" },
                   { id: 79967, name: "Instagram Followers | Pakistan 🇵🇰 ᴺᴱᵂ", icon: "" },
                   { id: 79968, name: "Instagram Followers | India 🇮🇳", icon: "" },
                   { id: 79971, name: "Instagram Followers |Turkey 🇹🇷", icon: "" },
                   { id: 79970, name: "Instagram Followers | China 🇨🇳", icon: "" },
                   { id: 108890, name: "🇧🇷 Instagram Followers | Brazil |100% Real People ᴺᴱᵂ", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 79969, name: "Instagram Followers | Brazil 🇧🇷", icon: "" },
                   { id: 79972, name: "Instagram Followers | Indonesia 🇮🇩", icon: "" },
                   { id: 79973, name: "Instagram Followers | All Country 🌎", icon: "" },
                   { id: 35648, name: "Instagram - 𝗦𝘂𝗽𝗲𝗿 𝗥𝗲𝗮𝗹 𝗦𝗲𝗿𝘃𝗶𝗰𝗲𝘀", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 46, name: "Instagram - 𝐀𝗨𝐓𝐎 Likes", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 47, name: "Instagram - 𝐀𝗨𝐓𝐎 Likes + Impression", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 48, name: "Instagram - Video Views | 𝗪𝗼𝗿𝗹𝗱𝘄𝗶𝗱𝗲", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 49, name: "Instagram - Video Views | 𝗧𝗮𝗿𝗴𝗲𝘁𝗲𝗱", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 14203, name: "Instagram - Video Views | Targeted ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 50, name: "Instagram - 𝐀𝗨𝐓𝐎 Views", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 15138, name: "Instagram - 𝐀𝐮𝐭𝐨 Comment | Impression | Save", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 35649, name: "Instagram - Services | Male / Female", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 145446, name: "Instagram Live Stream Views | 𝗖𝗛𝗘𝗔𝗣𝗘𝗦𝗧", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 51, name: "Instagram - Live Stream Views", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 60608, name: "𝐈𝐧𝐬𝐭𝐚𝐠𝐫𝐚𝐦 𝐋𝐢𝐯𝐞 𝐁𝐫𝐨𝐚𝐝𝐜𝐚𝐬𝐭 𝐈𝐧𝐬𝐭𝐚𝐧𝐭 𝐂𝐡𝐞𝐚𝐩𝐞𝐬𝐭 🥇", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 67114, name: "Instagram Live Stream - ᴀʟᴡᴀʏs ᴡᴏʀᴋs", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 13070, name: "Instagram - Story", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 52, name: "Instagram - IGTV", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 53, name: "Instagram - 𝐑𝗘𝗘𝗟", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 54, name: "Instagram - Mentions", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 56, name: "Instagram - Comments", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 83694, name: "Instagram Comments | Random | Targeted 🌍 | Cheap", icon: "" },
                   { id: 84068, name: "Instagram Comments | Random | Targeted 🌍 | %100 Real Accounts", icon: "" },
                   { id: 84069, name: "Instagram Comments | Custom | Targeted 🌍 | %100 Real Accounts", icon: "" },
                   { id: 84070, name: "Instagram Comments | Targeted 🌍 | %100 Real Accounts | Package", icon: "" },
                   { id: 57, name: "Instagram - Arab 🇸🇦 Active Comments", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 58, name: "Instagram - 𝐀𝗨𝐓𝐎 Comment | Impression | Save", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 35651, name: "Instagram - Russia 🇷🇺", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 62, name: "Instagram - Latin America Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 63, name: "Instagram - USA 🇺🇸 Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 64, name: "Instagram - Türkiye 🇹🇷 Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 66, name: "Instagram - Indian 🇮🇳 Servicves", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 67, name: "Instagram - Nigeria 🇳🇬 Services", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 17275, name: "Threads - By Instagram ⁻ᴺᴱᵂ⁻", icon: "" },
                   { id: 119593, name: "Threads Followers | Targeted", icon: "" },
                   { id: 13519, name: "YouTube - Subscribers", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 519, name: "YouTube - Fastest Views", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 12849, name: "YouTube - Watch Time  ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 78, name: "YouTube - Views | Targeted", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 82, name: "YouTube - Likes | Dislikes", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 80, name: "YouTube - Premiere Views", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 97752, name: "YouTube Live Stream Views | Cheapest Working", icon: "" },
                   { id: 79239, name: "YouTube Live Stream Views", icon: "" },
                   { id: 81, name: "YouTube - Shorts Service", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 83, name: "Youtube - Comments", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 32230, name: "YouTube - Comments [ Targeted ]", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 14201, name: "YouTube - Views | Refill - Stable", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 14204, name: "YouTube - Unique Views [ Worldwide ] ⁻ᴺᴱᵂ⁻", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 88, name: "YouTube - Social Share", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 89, name: "YouTube - USA Shares 🇺🇸", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 91, name: "YouTube - Thailand Shares 🇹🇭", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 13520, name: "YouTube - Community Services", icon: "" },
                   { id: 15139, name: "YouTube - Social Share | Targeted", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 15140, name: "YouTube - 𝐀𝐮𝐭𝐨 Social Shares", icon: "<span class='fab fa-youtube'></span>" },
                   { id: 117511, name: "Twitter Likes | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 117510, name: "Twitter Followers | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 117512, name: "Twitter Retweet | 𝗨𝗟𝗧𝗥𝗔 𝗙𝗔𝗦𝗧 𝗖𝗢𝗠𝗣𝗟𝗘𝗧𝗘", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 95, name: "Twitter (X) | 100% Real Services", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 93, name: "Twitter - Followers", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 94, name: "Twitter - Likes", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 32793, name: "X ( Twitter ) - Retweets", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 22914, name: "Twitter - Retweets | Targeted", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 13517, name: "Twitter - Impressions", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 13516, name: "Twitter - Views", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 69931, name: "Twitter Views & Profile Click & Link Click & Media Views & Impression Services", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 94656, name: "Twitter Poll Vote", icon: "" },
                   { id: 40633, name: "X ( Twitter ) - Space Listeners", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 13518, name: "Twitter - Click | Vote | Bookmark", icon: "<span class='fab fa-twitter'></span>" },
                   { id: 53698, name: "Telegram - Members", icon: "<span class='fab fa-telegram'></span>" },
                   { id: 75998, name: "Telegram Views", icon: "<span class='fab fa-telegram'></span>" },
                   { id: 119, name: "Telegram - Views | Targeted", icon: "<span class='fab fa-telegram'></span>" },
                   { id: 22153, name: "Telegram - Views | Past Post", icon: "<span class='fab fa-telegram'></span>" },
                   { id: 53055, name: "Telegram Reactions | ᴺᴱᵂ 𝐂𝐇𝐄𝐀𝐏 ᴺᴱᵂ", icon: "<span class='fab fa-telegram'></span>" },
                   { id: 120, name: "Telegram - Comments | Share | Vote", icon: "<span class='fab fa-telegram'></span>" },
                   { id: 93116, name: "Spotify Plays", icon: "" },
                   { id: 107671, name: "Spotify Plays | Devices", icon: "" },
                   { id: 107672, name: "Spotify Plays | ADS", icon: "" },
                   { id: 93117, name: "Spotify Plays | Language Targeted", icon: "" },
                   { id: 93118, name: "Spotify Plays | Country Targeted", icon: "" },
                   { id: 93119, name: "Spotify Plays | From Spotify Algorithmic playlists | Country-Targeted", icon: "" },
                   { id: 106, name: "Spotify - Plays | 𝐅𝐫𝐞𝐞 Accounts", icon: "<span class='fab fa-spotify'></span>" },
                   { id: 107, name: "Spotify - Plays | 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 Accounts", icon: "<span class='fab fa-spotify'></span>" },
                   { id: 112, name: "Spotify - Followers ( Artist | User | Playlist )", icon: "<span class='fab fa-spotify'></span>" },
                   { id: 113, name: "Spotify - Monthly Listeners", icon: "<span class='fab fa-spotify'></span>" },
                   { id: 115, name: "Spotify - Saves", icon: "<span class='fab fa-spotify'></span>" },
                   { id: 118, name: "Telegram - Views", icon: "" },
                   { id: 126, name: "Discord - Server Members", icon: "" },
                   { id: 22405, name: "LinkedIn ⁻ᴺᴱᵂ⁻", icon: "<span class='fab fa-linkedin'></span>" },
                   { id: 43616, name: "LINKEDIN | 100% Real HQ Organic Users", icon: "<span class='fab fa-linkedin'></span>" },
                   { id: 13064, name: "Instagram  - Save  | Reach | Impression", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 13071, name: "Deezer", icon: "" },
                   { id: 13072, name: "Audiomack", icon: "" },
                   { id: 13073, name: "SoundCloud", icon: "" },
                   { id: 13521, name: "Fansly", icon: "" },
                   { id: 14206, name: "Instagram - Impressions | Reach | Profile Visits ⁻ᵁᴾᴰᴬᵀᴱᴰ⁻", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 15137, name: "Instagram - Reel", icon: "<span class='fab fa-instagram'></span>" },
                   { id: 17998, name: "Threads - Followers", icon: "" },
                   { id: 46684, name: "Pinterest Pins", icon: "" },
                   { id: 46685, name: "Pinterest Followers", icon: "" },
                   { id: 46686, name: "Pinterest Saves", icon: "" },
                   { id: 46687, name: "Pinterest Shares", icon: "" },
                   { id: 136, name: "Reddit", icon: "" },
                   { id: 46688, name: "Pinterest Monthly Views", icon: "" },
                   { id: 46689, name: "Reddit Upvotes / DownVotes", icon: "" },
                   { id: 46690, name: "Reddit Comment", icon: "" },
                   { id: 46691, name: "Reddit Comment Upvotes", icon: "" },
                   { id: 46692, name: "Reddit Comment Reply", icon: "" },
                   { id: 44529, name: "Twitch - Live [Provider]", icon: "<span class='fab fa-twitch'></span>" },
                   { id: 62291, name: "Rumble Views", icon: "" },
                   { id: 113798, name: "Google Map Reviews", icon: "" },
                   { id: 41814, name: "Private 1", icon: "<span class='fab fa-pinterest-p'></span>" },
                   { id: 127576, name: "PROVIDER ✌🏻", icon: "<span>🔥</span>" },
                   { id: 137909, name: "🇺🇸 Website Traffic from USA [ Cheap]", icon: "" },
                      ];
           
           
              function filterNow(name) {
                 let result = [];
                 let resultHtml = '';
                 let necesItem = name.toLowerCase();
           
                 for (const item of allCurrentCat) {
                    const itemName = item.name.toLowerCase();
                    const itemIsTrue = itemName.includes(necesItem);
                    if (itemIsTrue == true) {
                       result.push(item);
                    }
                 }
                 if (result.length == 0) {
                    for (const item of allCurrentCat) {
                       resultHtml = resultHtml + `<option value="${item.id}" data-icon="${item.icon}">${item.name}</option>`;
                    }
                 } else {
                    for (const item of result) {
                       resultHtml = resultHtml + `<option value="${item.id}" data-icon="${item.icon}">${item.name}</option>`;
                    }
                 }
                 return resultHtml;
              }
           
              function filterEverything() {
                 let resultHtml;
                 let result = [];
                 for (const item of allCurrentCat) {
                    result.push(item);
                 }
           
                 for (const item of result) {
                    resultHtml = resultHtml + `<option value="${item.id}" data-icon="${item.icon}">${item.name}</option>`;
                 }
           
                 const getCatSelect = document.getElementById('orderform-category');
                 getCatSelect.innerHTML = resultHtml;
                 $('#orderform-category').trigger('change');
              }
           
              // other filter 
              function filterOthers() {
                 let resultHtml;
                 let result = [];
           
                 for (const item of allCurrentCat) {
                    const itemName = item.name.toLowerCase();
                    if (!itemName.includes('facebook') && !itemName.includes('instagram') && !itemName.includes('youtube') && !itemName.includes('twitter') && !itemName.includes('spotify') && !itemName.includes('tiktok') && !itemName.includes('linkedin') && !itemName.includes('discord') && !itemName.includes('telegram') && !itemName.includes('traffic')) {
                       result.push(item);
                    }
                 }
           
                 for (const item of result) {
                    resultHtml = resultHtml + `<option value="${item.id}">${item.name}</option>`;
                 }
           
                 const getCatSelect = document.getElementById('orderform-category');
                 getCatSelect.innerHTML = resultHtml;
                 $('#orderform-category').trigger('change');
              }
           
              function filterStarted(targetName) {
                 const getResults = filterNow(targetName);
                 const getCatSelect = document.getElementById('orderform-category');
                 getCatSelect.innerHTML = getResults;
                 $('#orderform-category').trigger('change');
              }
           
           
              var getFilterWrap = document.getElementById('categoryFIlterWraper');
           
              getFilterWrap.addEventListener('click', function (e) {
                 var getallActive = document.getElementsByClassName('activeItem');
                 if (getallActive.length > 0) {
                    for (item of getallActive) {
                       item.classList.remove('activeItem');
                    }
                 }
                 e.target.classList.add('activeItem');
              });
           
           </script>
        </div>
    </div>
</main>

<style>
    .whatsapp-container {
        padding: 24px;
    }
    .whatsapp-button {
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff !important;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none !important;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        transform: scale(0.9);
    }
    .whatsapp-button:hover {
        transform: scale(1);
        background-color: #1fcc5f;
    }
</style>
<div class="integration-fixed integration-fixed__bottom-right">
    <div class="whatsapp-container">
        <a href="https://api.whatsapp.com/send?phone=+8801708924551" target="_blank" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GBZ2DN" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Modal -->
<div class="modal fade" id="GGstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="GGstaticBackdropLabel" aria-hidden="true">
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
                            <button class="nav-link text-start active" id="v-pills-NEW-tab" data-bs-toggle="pill" data-bs-target="#v-pills-NEW" type="button" role="tab" aria-controls="v-pills-NEW" aria-selected="true">
                                <i class="fas fa-star"></i> NEW
                            </button>
                            <button class="nav-link text-start" id="v-pills-JUNIOR-tab" data-bs-toggle="pill" data-bs-target="#v-pills-JUNIOR" type="button" role="tab" aria-controls="v-pills-JUNIOR" aria-selected="false">
                                <i class="fas fa-child"></i> JUNIOR
                            </button>
                            <button class="nav-link text-start" id="v-pills-Regular-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Regular" type="button" role="tab" aria-controls="v-pills-Regular" aria-selected="false">
                                <i class="fad fa-user-astronaut"></i> REGULAR
                            </button>
                            <button class="nav-link text-start" id="v-pills-FREQUENT-tab" data-bs-toggle="pill" data-bs-target="#v-pills-FREQUENT" type="button" role="tab" aria-controls="v-pills-FREQUENT" aria-selected="false">
                                <i class="fas fa-gem"></i> FREQUENT
                            </button>

                            <button class="nav-link text-start" id="v-pills-ELITE-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ELITE" type="button" role="tab" aria-controls="v-pills-ELITE" aria-selected="false">
                                <i class="fas fa-badge-sheriff"></i> ELITE
                            </button>
                            <button class="nav-link text-start" id="v-pills-VIP-tab" data-bs-toggle="pill" data-bs-target="#v-pills-VIP" type="button" role="tab" aria-controls="v-pills-VIP" aria-selected="false">
                                <i class="fas fa-chess-king"></i> VIP
                            </button>

                            <button class="nav-link text-start" id="v-pills-MASTER-tab" data-bs-toggle="pill" data-bs-target="#v-pills-MASTER" type="button" role="tab" aria-controls="v-pills-MASTER" aria-selected="false">
                                <i class="fas fa-crown"></i> MASTER
                            </button>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-NEW" role="tabpanel" aria-labelledby="v-pills-NEW-tab">
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
                                    <h3><i class="fas fa-chess-king"></i> VIP</h3>
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
                                    <h3><i class="fas fa-crown"></i> MASTER</h3>
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
    <div id="myAliceWebChat">
        <div
            style="
                background: rgb(42, 171, 238);
                box-sizing: border-box;
                display: inline-flex;
                padding: 10px 14px;
                justify-content: center;
                align-items: center;
                color: rgb(255, 255, 255);
                cursor: pointer;
                border-radius: 20px;
                position: fixed;
                box-shadow: none;
                left: 20px;
                right: auto;
                bottom: 26px;
                z-index: 99999;
            "
        >
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    fill="#fff"
                    d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"
                ></path>
            </svg>
            <span style="margin-left: 8px; font-style: normal; font-size: 14px; font-weight: 600; line-height: 20px;">Join</span>
        </div>
    </div>
</a>

@stop
