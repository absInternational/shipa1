<header class="tj-header-section" id="header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-color d-flex flex-wrap">
                    <!-- Logo Area Start -->
                    <div class="logo-area">
                        <div class="logo-box">
                            <a href="index.html"><img src="{{ asset('frontend/images/logo/SHIPA1logo.webp') }}"
                                    alt="Logo" /></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->

                    <div class="header-content-area">
                        <!-- Topbar Section Start -->
                        <div class="header-topbar">
                            <div
                                class="topbar-content-area d-flex flex-wrap align-items-center justify-content-between">
                                <div class="header-content-left">
                                    <span> Mon - Sat: 8 am - 5 pm, Sunday: Closed</span>
                                </div>
                                <div class="header-content-right">
                                    <div class="header-social-icon">
                                        <ul class="list-gap social-list">
                                            <li>
                                                <a href="https://www.facebook.com/ShipA1/"> <i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.youtube.com/@shipA1392"> <i
                                                        class="fa-brands fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/in/shipa1-transport/"> <i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/ShipA1Transport"> <i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Topbar Section End-->

                        <!-- Header menu Start -->
                        <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="mobile-logo-area d-lg-none">
                                <a href="index.html"><img src="{{ asset('frontend/images/logo/SHIPA1logo.webp')}}"
                                        alt="Logo" /></a>
                            </div>
                            <!-- Mainmenu Item Start -->
                            <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                <ul class="main-menu">
                                    <li class="ab-gap">
                                        <a href="{{ url('/') }}"> Home</a>
                                    </li>
                                    <li class="ab-gap">
                                        <a href="{{ route('aboutUs') }}"> About Us</a>
                                    </li>
                                    {{-- <li class="ab-gap">
                                        <a href="{{ route('services') }}"> Service</a>
                                    </li> --}}
                                    <li class="current-menu-item menu-item-has-children">
                                        <a class="active" href="{{ route('services') }}"> Service</a>
                                        <ul class="list-gap sub-menu-list">
                                            <!-- <li><a class="active" href="service.html">Service</a></li> -->
                                            <li><a href="{{ route('services-detail') }}">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="ab-gap">
                                        <a href="{{ route('autoAuction') }}"> auto Auction</a>
                                    </li>
                                    <li class="ab-gap">
                                        <a class="active" href="{{ route('blogs') }}"> Blog</a>
                                    </li>
                                    <li><a href="{{ route('contactUs') }}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Mainmenu Item End -->

                            <div class="header-menu-select d-flex align-items-center justify-content-end">
                                {{--  <div class="header-language">
                                    <ul class="languages dropdown">
                                        <li class="activated"></li>
                                        <li>
                                            <ul class="lang_lists">
                                                <li>
                                                    <a
                                                        ><img src="{{ asset('frontend/images/icon/flag-1.png')}}"
                                alt="Icon"
                                /></a>
                                </li>
                                <li>
                                    <a><img src="{{ asset('frontend/images/icon/flag-2.png')}}" alt="Icon" /></a>
                                </li>
                                <li class="active">
                                    <a><img src="{{ asset('frontend/images/icon/flag4.png')}}" alt="Icon" /></a>
                                </li>
                                </ul>
                                </li>
                                </ul>
                            </div> --}}
                            <div class="tj-header-button d-none d-lg-block">
                                <a class="tj-header-btn" href="contact.html">
                                    Track Order <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                            <div class="tj-hambagur-icon d-lg-none">
                                <a class="canva_expander nav-menu-link menu-button" href="#">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Header end End -->
                </div>
            </div>
        </div>
    </div>
    </div>
</header>