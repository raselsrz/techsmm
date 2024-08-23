<div class="top_header">
    <div class="top_head_wrap">
        <div class="item">
            <button class="sidebar_menu_icon" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <div class="logo_off_nav">
                <a href="/">
                    <img src="{{ asset('img/hjzk7i0ydcb6cf5i.png') }}" class="img-fluid" alt="" />
                </a>
            </div>
        </div>
        <div class="item"></div>
        <div class="item user_settings">
            <a href="javascript:void(0)" class="day_night_btn" onclick="toggleThemeMode()">
                <span class="active_circle"></span>
                <span class="night_mode"> <i class="fas fa-moon"></i> </span>
                <span class="day_mode"><i class="fas fa-sun"></i></span>
            </a>
            <div class="dropdown">
                <button class="btn btn-secondarybtn_profiles" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="user_top_avatar">
                        <img src="{{ asset('img/xnihm05yyakf6ouk.png') }}" width="40px" class="img-fluid" alt="" id="profile2" />
                    </span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                            <a href="/">
                                <img src="{{ asset('img/hjzk7i0ydcb6cf5i.png') }}" class="img-fluid offcanvas_site_logo" alt="" />
                            </a>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <div class="user_data mb-3">
                                <div class="user_badges" data-bs-toggle="modal" data-bs-target="#GGstaticBackdrop">
                                    <h4>
                                        NEW
                                    </h4>
                                </div>
                                <div class="total_data">
                                    <div class="user_wrap">
                                        <div class="v2_avatar">
                                            <img src=" {{ asset('img/xnihm05yyakf6ouk.png') }}" class="img-fluid" alt="Tech SMM Avatar" id="profile1" />
                                        </div>
                                        <div class="v2_user_info">
                                            <h5>sabozag</h5>
                                        </div>
                                    </div>
                                    <div class="user_balance">
                                        <span class="balance">$0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="user_menu_wraper">
                                <div class="user__menu">
                                    <a class="user_menu__item" href="{{ route('accountHome') }}">
                                        <span class="user_menu_icon"><i class="fas fa-cog"></i></span>
                                        <span class="user_menu_text">Settings</span>
                                    </a>

                                    <a class="user_menu__item" href="{{ route('termsHome') }}">
                                        <span class="user_menu_icon"><i class="fas fa-list"></i></span>
                                        <span class="user_menu_text">Terms</span>
                                    </a>
                                    <a class="user_menu__item" href="{{ route('faqHome') }}">
                                        <span class="user_menu_icon"><i class="fas fa-question-circle"></i></span>
                                        <span class="user_menu_text">Faq</span>
                                    </a>
                                    <a class="user_menu__item"  href="/logout">
                                        <span class="user_menu_icon"> <i class="fas fa-sign-out"></i></span>
                                        <span class="user_menu_text">Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>