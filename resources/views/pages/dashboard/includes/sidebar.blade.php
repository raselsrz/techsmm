<div class="sidebar">
    <div class="sidebar_top">
        <button class="close_btn_phone" onclick="toggleSidebar()">
            <i class="fas fa-times"></i>
        </button>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('img/hjzk7i0ydcb6cf5i.png') }}" class="logo_img img-fluid" alt="Tech SMM" title="Tech SMM" />
            </a>
        </div>
        <div class="user_data">
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
    </div>
    <div class="sidebar_bottom">
        <div class="sidebar_menu">
            <a href="{{ route('homes') }}" class="menu_item {{ request()->routeIs('homes') ? 'active' : '' }}">
                <div class="menu_icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="menu_name">
                    New order
                </div>
            </a>
    
            <a href="{{ route('massorderHome') }}" class="menu_item {{ request()->routeIs('massorderHome') ? 'active' : '' }}">
                <div class="menu_icon">
                    <i class="fas fa-list-ol"></i>
                </div>
                <div class="menu_name">
                    Bulk Order
                </div>
            </a>
    
            <a href="{{ route('orderHome') }}" class="menu_item {{ request()->routeIs('orderHome') ? 'active' : '' }}">
                <div class="menu_icon">
                    <i class="fas fa-history"></i>
                </div>
                <div class="menu_name">
                    Orders History
                </div>
            </a>
    
            <a href="{{ route('servicesHome') }}" class="menu_item {{ request()->routeIs('servicesHome') ? 'active' : '' }}">
                <div class="menu_icon">
                    <i class="fas fa-server"></i>
                </div>
                <div class="menu_name">
                    Services
                </div>
            </a>
    
            <a href="{{ route('addfundsHome') }}" class="menu_item {{ request()->routeIs('addfundsHome') ? 'active' : '' }}">
                <div class="menu_icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <div class="menu_name">
                    Add funds
                </div>
            </a>
    
            <a href="{{ route('ticketsHome') }}" class="menu_item {{ request()->routeIs('ticketsHome') ? 'active' : '' }}">
                <div class="menu_icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="menu_name">
                    Tickets Support
                </div>
            </a>
    
            <!-- Show More Btn Codes Start -->
            <div id="show_more_wrap">
                <button type="button" class="" id="showMore">
                    <div class="menu_name">
                        Show More
                    </div>
                    <div class="menu_icon">
                        <i class="far fa-caret-circle-down"></i>
                    </div>
                </button>
            </div>
    
            <div id="more_menu">
                <a href="{{ route('childPanelHome') }}" class="menu_item {{ request()->routeIs('childPanelHome') ? 'active' : '' }}">
                    <div class="menu_icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <div class="menu_name">
                        Child panel
                    </div>
                </a>
                <a href="{{ route('dashboardHome') }}" class="menu_item {{ request()->routeIs('dashboardHome') ? 'active' : '' }}">
                    <div class="menu_icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div class="menu_name">
                        Dashboard
                    </div>
                </a>
                <a href="{{ route('affiliatesHome') }}" class="menu_item {{ request()->routeIs('affiliatesHome') ? 'active' : '' }}">
                    <div class="menu_icon">
                        <i class="fab fa-adn"></i>
                    </div>
                    <div class="menu_name">
                        Affiliates
                    </div>
                </a>
                <a href="{{ route('updatesHome') }}" class="menu_item {{ request()->routeIs('updatesHome') ? 'active' : '' }}">
                    <div class="menu_icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="menu_name">
                        Updates
                    </div>
                </a>
                <a href="{{ route('apiHome') }}" class="menu_item {{ request()->routeIs('apiHome') ? 'active' : '' }}">
                    <div class="menu_icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <div class="menu_name">
                        API
                    </div>
                </a>
            </div>
            <!-- Show More Btn Codes End -->
        </div>
    </div>
    
</div>