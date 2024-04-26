<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tag -->
        <meta charset="utf-8" />
        <title>LogiLand - Transport & Logistics Service HTML Template</title>
        <meta name="description" content="" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="{{ asset('frontend/images/fav.svg') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/fav.svg') }}" />

        <!-- Bootstrap  v5.1.3 css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
        <!-- Meanmenu  css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}" />
        <!-- Sal css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/sal.css') }}" />
        <!-- Magnific css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
        <!-- Swiper Slider css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" />
        <!-- Carousel css file -->
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
        <!-- Icons css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/icons.css') }}" />
        <!-- Odometer css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/odometer.min.css') }}" />
        <!-- Select css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" />
        <!-- Animate css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
        <!-- Style css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    </head>

    <body>
        <!-- Preloader start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                    <div class="loader-icon">
                        <img src="{{ asset('frontend/images/logo/SHIPA1logo.webp') }}" alt="Corporate Business HTML Template" />
                    </div>
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading"> S </span>
                    <span data-text-preloader="H" class="letters-loading"> H </span>
                    <span data-text-preloader="I" class="letters-loading"> I </span>
                    <span data-text-preloader="P" class="letters-loading"> P </span>
                    <span data-text-preloader="" class="letters-loading">  </span>
                    <span data-text-preloader="A" class="letters-loading"> A </span>
                    <span data-text-preloader="1" class="letters-loading"> 1 </span>
                    <span data-text-preloader="" class="letters-loading">  </span>
                </div>
            </div>
            <button class="tj-primary-btn">Cancel Preloader</button>
        </div>
        <!-- Preloader end -->

        <!-- Offcanvas Area Start-->
        <div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>
        <div class="tj-offcanvas-area">
            <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
                <div class="logo-area text-center">
                    <a href="index.html"><img src="{{ asset('frontend/images/logo/logo.png') }}" alt="Logo" /></a>
                </div>
                <div class="offcanvas-icon">
                    <a id="canva_close" href="#">
                        <i class="fa-light fa-xmark"></i>
                    </a>
                </div>
            </div>
            <div class="tj-search-box">
                <form action="#">
                    <input type="text" class="form-control-1" name="search" id="searchTwo" placeholder="Search" />
                    <a href="#"> <i class="fal fa-search"></i></a>
                </form>
            </div>
            <!-- Canvas Mobile Menu start -->
            <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
            <p class="des d-none d-lg-block">
                We take a bottom-line approach to each project. Our clients consistently, enhanced brand loyalty and new
                leads thanks to our work.
            </p>
            <!-- Canvas Menu end -->
            <div class="contact-info-list">
                <h4 class="offcanvas-title">Contact info</h4>
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="fa-light fa-location-dot"></i>
                    </div>
                    <div class="contact-link">
                        <span class="d-block"> Location:</span>
                        <p>14A/ Pure Street City</p>
                    </div>
                </div>
                <div class="contact-box contact-box1">
                    <div class="contact-icon">
                        <i class="flaticon-email-2"></i>
                    </div>
                    <div class="contact-link">
                        <span class="d-block"> Email us:</span>
                        <a href="mailto:info@example.com"> info@example.com</a>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon">
                        <i class="flaticon-telephone"></i>
                    </div>
                    <div class="contact-link">
                        <span class="d-block"> Call us:</span>
                        <a href="tel:+1800-456-7890"> +1800-456-7890</a>
                    </div>
                </div>
            </div>
            <div class="tj-offcanvas-icon-list">
                <h4 class="offcanvas-title">Social Item</h4>
                <ul>
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
            <div class="contact-map d-none d-lg-block">
                <iframe
                    src="https://maps.google.com/maps?q=manhatan&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                    style="border: 0"
                    allowfullscreen=""
                ></iframe>
            </div>
            <div class="tj-theme-button tj-btn d-lg-none">
                <a class="tj-primary-btn" href="#"> Track Order <i class="flaticon-right-1"></i> </a>
            </div>
        </div>
        <!-- Offcanvas Area End-->

        {{-- Header Section Start --}}
        @include('frontend.includes.header')

        {{-- page content --}}
        @yield('content')

        {{-- Footer Section Start --}}
        @include('frontend.includes.footer')

        <!-- start scrollUp  -->
        <div class="logiland-scroll-top progress-done">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path
                    d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    "
                ></path>
            </svg>
            <div class="logiland-scroll-top-icon">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="img"
                    width="1em"
                    height="1em"
                    viewBox="0 0 24 24"
                    data-icon="mdi:arrow-up"
                    class="iconify iconify--mdi"
                >
                    <path
                        fill="currentColor"
                        d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"
                    ></path>
                </svg>
            </div>
        </div>
        <!-- End scrollUp  -->

        <!-- Modernizr.JS -->
        <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jQuery.min JS -->
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <!-- Bootstrap.min JS -->
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('frontend/js/meanmenu.js') }}"></script>
        <!-- Imagesloaded JS -->
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Isotope JS -->
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <!-- Magnific JS -->
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Swiper.min JS -->
        <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
        <!-- Owl.min JS -->
        <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
        <!-- Appear JS -->
        <script src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
        <!-- Odometer JS -->
        <script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
        <!-- Sal JS -->
        <script src="{{ asset('frontend/js/sal.js') }}"></script>
        <!-- Nice JS -->
        <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
