<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <title>ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA</title>
    <meta name="description" content="" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/logo/favicon.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo/favicon.png') }}" />

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    <!-- Include jQuery -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-39e9UaGkm/+yp6spIsVfzcs3j7ac7G2cg0hzmDvtG11pT1d7YMnOC26w4wMPhzsL" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">

    <!-- Bootstrap  v5.1.3 css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

    {{-- csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
                <div class="loader-icon">
                    <img src="{{ asset('frontend/images/logo/favicon.png') }}"
                        alt="Corporate Business HTML Template" />
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading"> S </span>
                <span data-text-preloader="H" class="letters-loading"> H </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="P" class="letters-loading"> P </span>
                <span data-text-preloader="" class="letters-loading"> </span>
                <span data-text-preloader="A" class="letters-loading"> A </span>
                <span data-text-preloader="1" class="letters-loading"> 1 </span>
                <span data-text-preloader="" class="letters-loading"> </span>
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
                <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/images/logo/logo.png') }}"
                        alt="Logo" /></a>
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s"
                style="border: 0" allowfullscreen=""></iframe>
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

    {{-- page content --}}
    @yield('extraScript')

    <!-- start scrollUp  -->
    <div class="logiland-scroll-top progress-done">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    ">
            </path>
        </svg>
        <div class="logiland-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- End scrollUp  -->

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#newsletter-form').submit(function(event) {
                event.preventDefault();
                var email = $('#email_newsletter').val();
                console.log(email);

                $.ajax({
                    type: 'POST',
                    url: '{{ route('newsletter.subscribe') }}',
                    data: {
                        email: email,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Subscription Successful',
                            text: response.message
                        }).then(function() {
                            $('#email_newsletter').val('');
                        });
                    },
                    error: function(xhr, status, error) {
                        var response = xhr.responseJSON;
                        Swal.fire({
                            icon: 'error',
                            title: 'Subscription Failed',
                            text: response.message
                        }).then(function() {
                            $('#email_newsletter').val('');
                        });
                    }
                });
            });
        });

        function previewImage(event) {
            var input = event.target;
            var imagePreview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.src = '#';
                imagePreview.style.display = 'none';
            }
        }
    </script>
</body>

</html>
