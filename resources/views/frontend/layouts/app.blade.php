<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    {{-- <title>ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA</title> --}}
    <title>@yield('title')</title>
    {{-- <meta name="description" content="" /> --}}
    <meta name="description" content="@yield('meta_description', 'Ship A1')">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="ahrefs-site-verification" content="6cd07582328e97b072cfaad2711175d5b3d5f0d349648e8ede9c50ea23dfc68d">
    <!--==========twitter-card=============-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ShipA1Transport">
    <meta name="twitter:title" content="ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA">
    <meta name="twitter:description"
        content="Get car shipping services in USA, scratchless vehicle transport service along with huge discount offers and FREE auto shipping quotes nationwide.">
    <meta name="twitter:image" content="https://www.shipa1.com/img/car-tranportation.png">
    <!--========== twitter-card============-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/logo/favicon.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo/favicon.png') }}" />

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    <!-- Include jQuery -->
    <script src="https://unpkg.com/imask"></script>

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
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/ctas/cta-1/assets/css/cta-1.css">
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
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}" />

    {{-- csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>

   /* Smooth page transition loader */

    /* .page-transition-overlay {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        background: linear-gradient(45deg, rgba(0, 100, 0, 0.6), rgba(140, 196, 69, 0.9));
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.8s ease;
    }


    .page-transition-overlay.active {
        opacity: 1;
        pointer-events: all;
    }

  
    .fade-in {
        animation: fadeIn 0.8s ease forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: scale(1.02) translateY(20px); 
        }
        100% {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }


    .fade-out {
        animation: fadeOut 0.8s ease forwards;
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
        100% {
            opacity: 0;
            transform: scale(1) translateX(10px); 
        }
    }


    .page-transition-overlay::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 100px 40px rgba(255, 255, 255, 0.4);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
        }
        50% {
            transform: translate(-50%, -50%) scale(1.2);
        }
        100% {
            transform: translate(-50%, -50%) scale(1);
        }
    } */
    
    
    
    .error-field {
    border: 2px solid red!important;
    }
    
    /* Dropdown Container */
    .dropdown {
        position: relative;
        width: 100%;
    }

    /* Dropdown Input */
    .dropdown-toggle {
        width: 100%;
        padding: 0.375rem 0.75rem; /* Adjust padding as needed */
        font-size: 1rem; /* Adjust font size */
        line-height: 1.5;
        border: 1px solid #ced4da;
        border-radius: 0.25rem; /* Rounded corners */
    }

    /* Dropdown Menu */
    .dropdown-menu.year-dropdown {
        width: 100%; /* Full width of the container */
        max-height: 200px; /* Limit height for scrolling */
        overflow-y: auto; /* Enable scrolling */
        padding: 0; /* Remove default padding */
        margin: 0; /* Remove default margin */
        border: 1px solid #ced4da;
        border-radius: 0.25rem; /* Rounded corners */
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* Add shadow for better visibility */
    }

    /* Dropdown Items */
    .dropdown-item {
        padding: 0.375rem 0.75rem; /* Adjust padding */
        font-size: 1rem; /* Adjust font size */
        color: #212529; /* Text color */
        text-decoration: none; /* Remove underline */
    }

    .dropdown-item:hover {
        background-color: #f8f9fa; /* Highlight on hover */
        color: #16181b; /* Darker text color on hover */
    }

    /* Responsive Adjustments */
    @media (max-width: 576px) {
        .dropdown-menu.year-dropdown {
            position: static; /* Ensure proper alignment on small devices */
        }

        .dropdown-toggle {
            margin-bottom: 10px; /* Space below input */
        }
    }
    
    /* General dropdown style */
    .dropdown-menu {
        /* display: flex; */
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        margin: 0;
        padding: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        max-height: 300px;
        overflow-y: auto;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        width: auto;
    }

    .dropdown-item {
        padding: 10px 15px;
        font-size: 14px;
        color: #333;
        text-decoration: none;
        display: block;
        border-bottom: 1px solid #eee;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1;
    }

    /* Adjust dropdown on smaller screens */
    @media (max-width: 768px) {
        .dropdown-menu {
            width: 100%;
            position: relative;
            max-height: 400px;
        }

        .dropdown-item {
            padding: 12px 20px;
            font-size: 16px;
            text-align: center;
        }
    }

    /* Larger touch areas on smaller screens */
    @media (max-width: 480px) {
        .dropdown-item {
            font-size: 18px;
            padding: 15px 20px;
        }
    }

</style>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6675d43ceaf3bd8d4d1320dc/1i0u4a3i2';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->
<!--End of Tawk.to Script-->

<body class="fade-in">

    {{-- <div class="page-transition-overlay"></div> --}}
    
    <!-- Preloader start -->
    <!-- <div id="preloader" class="preloader">
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
    </div> -->
    <!-- Preloader end -->

    <!-- Offcanvas Area Start-->
    <div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/images/logo/LOGO NEW-2.png') }}"
                        alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        {{-- <div class="tj-search-box">
            <form action="#">
                <input type="text" class="form-control-1" name="search" id="searchTwo" placeholder="Search" />
                <a href="#"> <i class="fal fa-search"></i></a>
            </form>
        </div> --}}
        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
        <p class="des d-none d-lg-block">
            We take a bottom-line approach to each project. Our clients consistently, enhanced brand loyalty and new
            leads thanks to our work.
        </p>
        <!-- Canvas Menu end -->
        <!-- <div class="contact-info-list">
            <h4 class="offcanvas-title">Contact info</h4>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fa-light fa-location-dot"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block">Location:</span>
                    <p><a href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+210301344,+USA/@39.4960629,-76.6603247,17z/data=!3m2!4b1!5s0x89c8128abe53a693:0xccf0052e1abf77f2!4m6!3m5!1s0x89c81261c3eae243:0x81e995e93023e64a!8m2!3d39.4960629!4d-76.6603247!16s%2Fg%2F11scxbqcdd?entry=ttu"
                            target="_blank">201 International Cir STE 230,<br>Hunt Valley, MD 21030-1344</a></p>
                </div>
            </div>
            <div class="contact-box contact-box1">
                <div class="contact-icon">
                    <i class="flaticon-email-2"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block">Email us:</span>
                    <a href="mailto:info@shipa1.com">shawntransport@shipa1.com</a>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="flaticon-telephone"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block"> Call us:</span>
                    <a href="tel: 1 (844) 474-4721">1 (844) 474-4721</a>
                </div>
            </div>
        </div>
        <div class="tj-offcanvas-icon-list">
            <h4 class="offcanvas-title">Social Item</h4>
            <ul>
                <li>
                    <a href="https://www.facebook.com/ShipA1/" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/shipa1_transport/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@shipA1392" target="_blank"><i
                            class="fa-brands fa-youtube"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/shipa1-transport/" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </li>
            </ul>
        </div>
        <div class="contact-map d-none d-lg-block">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s"
                style="border: 0" allowfullscreen=""></iframe>
        </div>
        <div class="tj-theme-button tj-btn d-lg-none">
            <a class="tj-primary-btn" href="#">Track Order<i class="flaticon-right-1"></i> </a>
        </div> -->
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

    <!-- INDEX-HOME  -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="path/to/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="/assets/intl-tel-input/intlTelInput.js"></script>
    {{-- app js  --}}
    {{-- owl-caro --}}
    <script>
        $(document).ready(function() {
            $('#owl-caro').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
    {{-- owl-caro --}}

    {{-- email_newsletter --}}
    <script>
        $(document).ready(function() {
            $('#newsletter-form').submit(function(event) {
                event.preventDefault();
                var email = $('#email_newsletter').val();
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
    </script>
    {{-- email_newsletter --}}

    {{-- imagePreview --}}
    <script>
        let selectedFiles = [];
        function previewImages(event) {
            var input = event.target;
            var imagePreviewContainer = document.getElementById('imagePreviewContainer');
            if (input.files) {
                Array.from(input.files).forEach(file => {
                    if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                        selectedFiles.push(file);
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            var previewElement = document.createElement('div');
                            previewElement.classList.add('image-preview');
                            previewElement.innerHTML = `
                            <img src="${e.target.result}" alt="Image Preview">
                            <button class="remove-button" onclick="removeImage('${file.name}', ${file.size})">Remove</button>
                        `;
                            imagePreviewContainer.appendChild(previewElement);
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }
        }
        function removeImage(name, size) {
            var imagePreviewContainer = document.getElementById('imagePreviewContainer');
            selectedFiles = selectedFiles.filter(file => !(file.name === name && file.size === size));
            imagePreviewContainer.innerHTML = '';
            selectedFiles.forEach(file => {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var previewElement = document.createElement('div');
                    previewElement.classList.add('image-preview');
                    previewElement.innerHTML = `
                    <img src="${e.target.result}" alt="Image Preview">
                    <button class="remove-button" onclick="removeImage('${file.name}', ${file.size})">Remove</button>
                `;
                    imagePreviewContainer.appendChild(previewElement);
                }
                reader.readAsDataURL(file);
            });
        }
    </script>
    {{-- imagePreview --}}

    {{-- input --}}
    <script>
        $(document).ready(function() {
            $('input[type="number"]').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
    </script>
    {{-- input --}}

    {{-- phone mask  --}}
        <script>
            const phoneInput = document.querySelector("#phone");
            const countryInput = document.querySelector('#country_code');
            const iti = window.intlTelInput(phoneInput, {
                separateDialCode: true,
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    var countryCode = "us"; 
                    callback(countryCode);
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });

                function updateMask() {
                    const countryData = iti.getSelectedCountryData();
                    const countryCode = countryData.iso2;

                    let maskPattern = '';
                    if (countryCode === 'us') {
                        maskPattern = '(000) 000-0000';
                    } else {
                        maskPattern = ''; 
                    }
                    if (maskPattern) {
                        IMask(phoneInput, { mask: maskPattern });
                    } else {
                        phoneInput.inputmask.remove();
                    }
                    countryInput.value = countryData.dialCode;
                }
                phoneInput.addEventListener('input', updateMask);
                phoneInput.addEventListener('countrychange', updateMask);
                function validatePhoneNumber() {
                    if (!iti.isValidNumber()) {
                        // alert("valid phone number");
                        return false;
                    }
                    return true;
                }
                phoneInput.addEventListener('blur', validatePhoneNumber);
                updateMask();
            //  last-work
            // const phoneInput = document.querySelector("#phone");
            // const iti = window.intlTelInput(phoneInput, {
            //     separateDialCode: true,
            //     initialCountry: "auto",
            //     geoIpLookup: function(callback) {
            //         var countryCode = "us";
            //         callback(countryCode);
            //     },
            //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            // });

            // function updateMask() {
            //     const countryData = iti.getSelectedCountryData();
            //     const countryCode = countryData.iso2;

            //     if (countryCode === 'us') {
            //         $(".ophone").mask("(999) 999-9999");
            //     } else {
            //         $(".ophone").unmask();
            //     }
            //     document.querySelector('#country_code').value = countryData.dialCode;
            // }

            // function validatePhoneNumber() {
            //     const rawPhoneNumber = iti.getNumber();  // Gets the number in E.164 format
            //     if (!iti.isValidNumber()) {
            //         // alert("Please enter a valid phone number.");
            //         return false;
            //     }
            //     return true;
            // }

            // phoneInput.addEventListener('input', updateMask);
            // phoneInput.addEventListener('blur', validatePhoneNumber);  // Validation on blur or submit
            // updateMask();
            //  last-work
        </script>
    {{-- phone mask  --}}

    {{-- get.models --}}
    {{-- <script>
            $(document).ready(function() {
                $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                    var year = $('.vehicle-year').val();
                    var makeId = $('.vehicle-make').val();
                    if (year && makeId) {
                        getModel(year, makeId);
                    }
                });
                function getModel(year, makeId) {
                    $.ajax({
                        url: "{{ route('get.models') }}",
                        method: 'GET',
                        data: {
                            year: year,
                            make: makeId
                        },
                        success: function(response) {
                            var modelsDropdown = $('.vehicle-model-div');
                            modelsDropdown.empty();
                            var selectOptions =
                                '<label>Model</label><select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                            $.each(response, function(index, model) {
                                selectOptions += '<option value="' + model + '">' + model + '</option>';
                            });
                            selectOptions += '</select>';
                            modelsDropdown.html(selectOptions);
            
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        </script> --}}
    {{-- get.models --}}

    {{-- category subcategory --}}
    <script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {
                var selectedCategory = $(this).find('option:selected').data('id');

                $.ajax({
                    url: "{{ route('get.subcategories') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "category": selectedCategory
                    },
                    success: function(response) {

                        var html = '';
                        $('#subcategory-box').html('');

                        html += "<label for='subcategory'>Subcategory</label>";
                        html +=
                            "<select class='nice-select form-control' id='subcategory' name='subcategory'>";
                        html += "<option value='' disabled selected>Select</option>";
                        $.each(response, function(index, val) {
                            console.log('val', val);
                            html +=
                                `<option value='${val.name}' style='white-space: nowrap;'>${val.name}</option>`;
                        });
                        html += "</select>";

                        $('#subcategory-box').html(html);

                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            });
        });
    </script>
    {{-- category subcategory --}}

    {{-- modification / available_at_auction --}}
    <script>
        $(document).ready(function() {
            $(document).on('change', '#available_at_auction', function() {
                if ($(this).is(':checked')) {
                    $('.div-link').show();
                    $('#link').attr('required', true);
                } else {
                    $('.div-link').hide();
                    $('#link').val('');
                    $('#link').removeAttr('required');
                }
            });

            $(document).on('change', '#modification', function() {
                if ($(this).is(':checked')) {
                    $('.div-modify_info').show();
                    $('#c').attr('required', true);
                } else {
                    $('.div-modify_info').hide();
                    $('#c').val('');
                    $('#c').removeAttr('required');
                }
            });
        });
    </script>
    {{-- modification / available_at_auction --}}

    {{-- multi step form --}}
    <script>
        
        $('#category').on('change', function() {
            $(this).closest('.input-form').find('.error-message').hide(); // Hide the error message on change

            // Show input field if "Others" is selected
            if ($(this).val() === 'Others') {
                $('#otherCategoryInput').show().prop('disabled', false);
            } else {
                $('#otherCategoryInput').hide().prop('disabled', true);
            }
        });
        $(document).ready(function() {
            function showError(field, message) {
                $('#' + field).addClass('error-field');
                $('#' + field + '-error').text(message).show();
            }

            function hideError(field) {
                $('#' + field).removeClass('error-field');
                $('#' + field + '-error').hide();
            }

            // Regular expression for the desired format: "City,State,ZipCode"
            function isValidFormat(value) {
                var regex = /^[A-Za-z\s]+,[A-Z]{2},\d{5}$/; // Adjust regex if needed
                return regex.test(value);
            }

            function validateStep(step) {
                var isValid = true;
                $('#' + step + ' input[required], #' + step + ' select[required], #' + step + ' textarea[required]')
                    .each(function() {
                        var field = $(this).attr('id');
                        var fieldValue = $(this).val();

                        if ($(this).hasClass('ajax-suggestion-input')) {
                            if (!$(this).data('selected') || $(this).val() === '') {
                                showError(field, 'Please select a valid option from suggestions.');
                                isValid = false;
                            } else {
                                hideError(field);
                            }
                        } else if (field === 'pickup-location' || field === 'delivery-location') {
                            if (!fieldValue) {
                                showError(field, 'This field is required.');
                                isValid = false;
                            } else if (!isValidFormat(fieldValue)) {
                                showError(field, 'Please enter the address in the format: City,State,ZipCode.');
                                isValid = false;
                            } else {
                                hideError(field);
                            }
                        } else {
                            if (!fieldValue) {
                                showError(field, 'This field is required.');
                                isValid = false;
                            } else {
                                hideError(field);
                            }
                        }
                    });
                return isValid;
            }

            function fetchSuggestions(inputField, suggestionsList) {
                var inputValue = inputField.val();

                $.ajax({
                    url: "{{ route('get.zipcodes') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "input": inputValue
                    },
                    success: function(response) {
                    console.log('responseresponse', response);
                        suggestionsList.empty();
                        inputField.data('selected', false);
                        $.each(response, function(index, suggestion) {
                            var listItem = $("<li>").text(suggestion).click(function() {
                                inputField.val(suggestion);
                                inputField.data('selected', true);
                                suggestionsList.hide();
                                hideError(inputField.attr('id'));
                            });
                            suggestionsList.append(listItem);
                        });

                        suggestionsList.show();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }

            $('#pickup-location').on('input', function() {
                var inputField = $(this);
                var suggestionsList = $('.suggestionsPickup');
                inputField.data('selected', false);

                fetchSuggestions(inputField, suggestionsList);
            });

            $('#delivery-location').on('input', function() {
                var inputField = $(this);
                var suggestionsList = $('.suggestionsDelivery');
                inputField.data('selected', false);

                fetchSuggestions(inputField, suggestionsList);
            });

            $('#step1_next').click(function() {
                if (validateStep('step1')) {
                    $('#step1').hide();
                    $('#step2').show();
                }
            });

            $('#step2_previous').click(function() {
                $('#step2').hide();
                $('#step1').show();
            });

            $('#step2_next').click(function() {
                if (validateStep('step2')) {
                    $('#step2').hide();
                    $('#step3').show();
                }
            });

            $('#step3_previous').click(function() {
                $('#step3').hide();
                $('#step2').show();
            });
        });
    </script>
    {{-- multi step form end --}}

    {{-- app js  --}}
    @php
        $makes = App\Models\VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
    @endphp
    {{-- index js  --}}
    <script>
        $(document).ready(function() {
            $('#example-multiple').select2();
        });
        $(document).ready(function() {
            $('#example-multiple-2').select2();
        });
    </script>

    {{-- single form location validation --}}
    <script>
        // NEW CODE 
        // single form location validation 
        $(document).ready(function() {
            var validPickupSuggestions = [];
            var validDeliverySuggestions = [];

            function updateSuggestions(inputField, suggestionsList, validSuggestions) {
                var inputValue = inputField.val();

                $.ajax({
                    url: "{{ route('get.zipcodes') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "input": inputValue
                    },
                    success: function(response) {
                        suggestionsList.empty();
                        validSuggestions.length = 0; // Clear previous suggestions

                        $.each(response, function(index, suggestion) {
                            var listItem = $("<li>").text(suggestion).click(function() {
                                inputField.val(suggestion);
                                suggestionsList.css("display", "none");
                            });
                            validSuggestions.push(suggestion); // Add to valid suggestions
                            suggestionsList.append(listItem);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }

            // $("#pickup-location").keyup(function() {
            $(document).on('keyup', '#pickup-location', function() {
                var inputField = $(this);
                var suggestionsList = inputField.siblings(".suggestionsTwo");
                suggestionsList.css("display", "block");
                if (inputField.val() === "") {
                    suggestionsList.css("display", "none");
                }
                updateSuggestions(inputField, suggestionsList, validPickupSuggestions);
            });

            // $("#delivery-location").keyup(function() {
            $(document).on('keyup', '#delivery-location', function() {
                var inputField = $(this);
                var suggestionsList = inputField.siblings(".suggestionsTwo");
                suggestionsList.css("display", "block");
                if (inputField.val() === "") {
                    suggestionsList.css("display", "none");
                }
                updateSuggestions(inputField, suggestionsList, validDeliverySuggestions);
            });

            function validateLocationInput(inputField, validSuggestions, errorField) {
                var inputValue = inputField.val();
                if (!validSuggestions.includes(inputValue)) {
                    errorField.text("Please select a valid location.");
                    return false;
                } else {
                    errorField.text("");
                    return true;
                }
            }

            $("form").submit(function(event) {
                var isPickupValid = validateLocationInput($("#pickup-location"), validPickupSuggestions, $(
                    "#errOLoc"));
                var currentRoute = "{{ Route::currentRouteName() }}";

                if (currentRoute !== 'form.vehicle.roro' && currentRoute !==
                    'frontend.pages.services.roro-service') {
                    var isDeliveryValid = validateLocationInput($("#delivery-location"),
                        validDeliverySuggestions, $("#errDLoc"));
                    if (!isPickupValid || !isDeliveryValid) {
                        event.preventDefault();
                    }
                } else {
                    if (!isPickupValid) {
                        event.preventDefault();
                    }
                }
            });
        });
        // single form location validation end 
    </script>
    {{-- single form location validation --}}

    {{-- <script>
            $(document).ready(function() {
                $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                    var year = $('.vehicle-year').val();
                    var makeId = $('.vehicle-make').val();
                    if (year && makeId) {
                        getModel(year, makeId);
                    }
                });
                function getModel(year, makeId) {
                    $.ajax({
                        url: "{{ route('get.models') }}",
                        method: 'GET',
                        data: {
                            year: year,
                            make: makeId
                        },
                        success: function(response) {
                            var modelsDropdown = $('.vehicle-model-div');
                            modelsDropdown.empty();
                            var selectOptions =
                                '<label>Model</label> <select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                            $.each(response, function(index, model) {
                                selectOptions += '<option value="' + model + '">' + model +
                                    '</option>';
                            });
                            selectOptions += '</select>';
                            modelsDropdown.html(selectOptions);

                            // console.log('yesssss', response);
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        </script> --}}
    {{-- index js END  --}}

    {{-- scroll-up-btn --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollButtons = document.querySelectorAll('.scroll-up-btn');
            const targetHeading = document.querySelector('.target-top');
            scrollButtons.forEach(button => {
                button.addEventListener('click', function() {
                    targetHeading.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
            const scrollButtons1 = document.querySelectorAll('.scroll-up-btn-1');
            const targetHeading1 = document.querySelector('.target-top-1');
            scrollButtons1.forEach(button => {
                button.addEventListener('click', function() {
                    targetHeading1.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
            const scrollButtons2 = document.querySelectorAll('.scroll-up-btn-2');
            const targetHeading2 = document.querySelector('.target-top-2');
            scrollButtons2.forEach(button => {
                button.addEventListener('click', function() {
                    targetHeading2.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
            const scrollButtons3 = document.querySelectorAll('.scroll-up-btn-3');
            const targetHeading3 = document.querySelector('.target-top-3');
            scrollButtons3.forEach(button => {
                button.addEventListener('click', function() {
                    targetHeading3.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
        });
    </script>
    {{-- scroll-up-btn --}}

    {{-- tabSelector --}}
    <script>
        $(document).ready(function() {
            var selectedTab = '';
            $('#tabSelector').change(function() {
                $('.vehicles-container').html('');
                selectedTab = $(this).val();
                var vehicleType = $(this).val();
                $('.tab-pane').removeClass('show active');
                $('#' + selectedTab).addClass('show active');

                $.ajax({
                    url: "{{ route('get.partial.form') }}",
                    method: 'GET',
                    data: {
                        vehicleType: vehicleType,
                    },
                    success: function(response) {
                        $('#additionalContent').html('');
                        $('#additionalContent').html(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
            $(document).on('click', '.addVehicleBtn', function() {
                if ($('#tabSelector').val() == 'Car') {
                    console.log('yesss');
                    addNewVehicle();
                } else {
                    console.log('nooo');
                    addOtherVehicle();
                }
            });

            $(document).on('click', '.delete-vehicle', function() {
                $(this).closest('.vehicle-info').remove();
            });

            // $(document).on('change', '.year, .make', function() {
            //     var year = $(this).closest('.vehicle-info').find('.year').val();
            //     var makeId = $(this).closest('.vehicle-info').find('.make').val();
            //     var vehicleInfo = $(this).closest('.vehicle-info');
            //     if (year && makeId) {
            //         getModel(year, makeId, vehicleInfo);
            //     }
            // });

            // function getModel(year, makeId, vehicleInfo) {
            //     // console.log('yes inn');
            //     $.ajax({
            //         url: "{{ route('get.models') }}",
            //         method: 'GET',
            //         data: {
            //             year: year,
            //             make: makeId
            //         },
            //         success: function(response) {
            //             var modelsDropdown = vehicleInfo.find('.model');
            //             modelsDropdown.empty();
            //             var selectOptions = '<option value="">Select Model</option>';
            //             $.each(response, function(index, model) {
            //                 selectOptions += '<option value="' + model + '">' +
            //                     model +
            //                     '</option>';
            //             });
            //             modelsDropdown.html(selectOptions);
            //         },
            //         error: function(xhr) {
            //             console.log(xhr.responseText);
            //         }
            //     });
            // }
        });
    </script>
    {{-- tabSelector --}}

    {{-- L W H W --}}
    <script>
        function limitDigits(element, maxDigits) {
            if (element.value.length > maxDigits) {
                element.value = element.value.slice(0, maxDigits);
            }
        }
        $(document).ready(function() {
            $('#inches-input').on('input', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });
            $('#feet-input, #inches-input').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
        $(document).ready(function() {
            $(document).on('input', '.inches-input1, .inches-input2', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });
            $(document).on('input', '.feet-input1, .inches-input1, .feet-input, .inches-input2', function() {
                console.log('asdasd');
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
        function moveToNext(current, nextId) {
            if (current.value.length >= current.maxLength) {
                document.getElementById(nextId).focus();
            }
        }
    </script>
    {{-- L W H W --}}

    {{-- validate-form --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var forms = document.querySelectorAll('.validate-form');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    var valid = true;
                    var requiredInputs = form.querySelectorAll(
                        '[required]'); 
                    function createErrorSpan(inputElement, errorMessageClass) {
                        let errorSpan = inputElement.parentNode.querySelector('.' +
                            errorMessageClass);
                        if (!errorSpan) {
                            errorSpan = document.createElement('span');
                            errorSpan.className = errorMessageClass + ' error-message';
                            errorSpan.style.color = 'red'; 
                            inputElement.parentNode.appendChild(errorSpan);
                        }
                        return errorSpan;
                    }
                    requiredInputs.forEach(function(input) {
                        var errorMessageClass = 'err' + input.name.replace('[]',
                            ''); 
                        var errorSpan = createErrorSpan(input, errorMessageClass);
                        if (!input.value || (input.tagName === 'SELECT' && input.value ===
                                '')) {
                            errorSpan.textContent = input.tagName === 'SELECT' ?
                                'Please select an option.' : input.name + ' is required.';
                            input.style.border =
                                '2px solid red'; 
                            valid = false;
                        } else {
                            if (input.type === 'tel' && typeof iti !== 'undefined') {
                                const rawPhoneNumber = iti.getNumber();
                                if (!iti.isValidNumber()) {
                                    errorSpan.textContent =
                                        'Valid phone number is required.';
                                    input.style.border =
                                        '2px solid red'; 
                                    valid = false;
                                } else {
                                    errorSpan.textContent = ''; 
                                    input.style.border = ''; 
                                }
                            } else if (input.type === 'email' && !/\S+@\S+\.\S+/.test(input
                                    .value)) {
                                errorSpan.textContent = 'Valid email is required.';
                                input.style.border =
                                    '2px solid red'; 
                                valid = false;
                            } else {
                                errorSpan.textContent = ''; 
                                input.style.border = ''; 
                            }
                        }
                    })
                    if (!valid) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
    {{-- validate-form --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Apply fade-in effect on page load
            document.body.classList.add('fade-in');
    
            const transitionOverlay = document.querySelector('.page-transition-overlay');
    
            // Trigger the fade-out and overlay effect on link click
            const links = document.querySelectorAll('a[href^="/"], a[href^="{{ url('/') }}"]');
            links.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default link action
                    
                    // Activate transition overlay
                    transitionOverlay.classList.add('active');
                    
                    // Trigger fade-out effect on body
                    document.body.classList.add('fade-out');
                    
                    // Wait for the animation before navigating
                    setTimeout(() => {
                        window.location.href = link.href;
                    }, 800); // Match the duration of the animations
                });
            });
    
            // Fade-in on page load after overlay hides
            setTimeout(() => {
                transitionOverlay.classList.remove('active');
            }, 500); // Slight delay for overlay fade-out
        });
    </script> --}}
    
</body>

</html>
