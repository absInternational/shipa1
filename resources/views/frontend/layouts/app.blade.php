<!doctype html>
<html lang=zxx>

<head>
    <meta charset=utf-8>
    <title>@yield('title')</title>
    <meta name=description content="@yield('meta_description', 'Ship A1')">
    <meta http-equiv=x-ua-compatible content="ie=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=ahrefs-site-verification content=6cd07582328e97b072cfaad2711175d5b3d5f0d349648e8ede9c50ea23dfc68d>
    <meta name=twitter:card content=summary_large_image>
    <meta name=twitter:site content=@ShipA1Transport>
    <meta name=twitter:title content="ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA">
    <meta name=twitter:description
        content="Get car shipping services in USA, scratchless vehicle transport service along with huge discount offers and FREE auto shipping quotes nationwide.">
    <meta name=twitter:image content=https://www.shipa1.com/img/car-tranportation.png>
    <link rel=preload href="{{ asset('/frontend/images/logo/favicon.webp') }}" as=image type=image/png>
    <link rel=apple-touch-icon href="{{ asset('/frontend/images/logo/favicon.webp') }}">
    <link rel="shortcut icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}" type=image/x-icon>
    <link rel=preload href=https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css as=style
        onload='this.onload=null,this.rel="stylesheet"'>
    <script src=https://unpkg.com/imask async></script>
    <link rel=preload href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css as=style
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round&display=swap" rel=stylesheet>
    <link rel=stylesheet href=https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href=https://unpkg.com/swiper/swiper-bundle.min.css
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href=https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/css/coreui.min.css
        integrity=sha384-39e9UaGkm/+yp6spIsVfzcs3j7ac7G2cg0hzmDvtG11pT1d7YMnOC26w4wMPhzsL crossorigin=anonymous
        onload='this.onload=null,this.rel="stylesheet"'>
    {{-- <link rel=preload href="{{ asset('/frontend/css/bootstrap.min.css') }}" as=style
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    <link rel=stylesheet href="{{ asset('/frontend/css/meanmenu.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/sal.css') }}" onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/magnific-popup.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/swiper.min.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/owl.carousel.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/icons.css') }}" onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/odometer.min.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/nice-select.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/frontend/css/animate.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/public/frontend/css/style.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'>
    <link rel=stylesheet href="{{ asset('/public/frontend/css/responsive.css') }}"
        onload='this.onload=null,this.rel="stylesheet"'> --}}
    <!-- Preload Critical CSS -->
    <link rel="preload" href="{{ asset('/frontend/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('/frontend/css/style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    </noscript>
    <noscript>
        <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
    </noscript>

    <!-- Load Non-Critical CSS Asynchronously -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/meanmenu.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/sal.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/swiper.min.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/icons.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/odometer.min.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/nice-select.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/responsive.css') }}" media="print"
        onload="this.onload=null;this.removeAttribute('media');">

    <!-- Minified & Combined CSS (Optional for performance) -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/all.min.css') }}">

    {{-- <link rel="preload" href="{{ asset('/frontend/css/bootstrap.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/meanmenu.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/sal.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/swiper.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/icons.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/odometer.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/nice-select.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/style.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/responsive.css') }}" media="print" onload="this.media='all'"> --}}
    <meta name=csrf-token content="{{ csrf_token() }}">
    <link rel=preload href=https://code.jquery.com/jquery-3.6.0.min.js as=script>
    <link rel=preload href=https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css as=style>
    <link rel=preload href=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css as=style>
    <script src=https://code.jquery.com/jquery-3.6.0.min.js async></script>
    <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css>
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css>
    <script type=application/ld+json>
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "ShipA1",
            "image": "https://shipa1.com/frontend/images/logo/LOGO%20NEW-2.png",
            "@id": "https://www.shipa1.com",
            "url": "https://www.shipa1.com/",
            "telephone": "(844) 474-4721",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "201 International Cir STE 230",
                "addressLocality": "Hunt Valley",
                "addressRegion": "MD",
                "postalCode": "21030",
                "addressCountry": "US"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 39.4960629,
                "longitude": -76.6603247
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "opens": "08:00",
                "closes": "19:00"
            },
            "sameAs": [
                "https://www.facebook.com/shipa1autotransport",
                "https://www.instagram.com/shipa1_transport",
                "https://www.youtube.com/@shipA1autotransport",
                "https://www.linkedin.com/in/shipa1-transport",
                "https://www.shipa1.com/"
            ]
        }
    </script>


    <style>
        .css-1h1ne2e {
            cursor: pointer;
            max-width: 100%;
            position: absolute;
            bottom: 0;
            z-index: 2;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-end;
            -webkit-box-align: flex-end;
            -ms-flex-align: flex-end;
            align-items: flex-end;
            will-change: width, height, transform, opacity;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            padding: 0.8em 0.8em 0 0.8em;
            /*right: 0; remove by mohsin*/
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
        }

        .css-1aasxu6 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
        }

        .css-1g9ek8d {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-width: 0;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
        }

        .css-bubhx7 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-width: 0;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
        }

        .css-138p0k2 {
            position: relative;
            width: 255px;
            height: 50px;
            box-shadow: rgba(0, 0, 0, 0.125) 0px 0.362176px 0.941657px -1px, rgba(0, 0, 0, 0.18) 0px 3px 7.8px -2px;
            background: #FFFFFF;
            border-radius: 8px 8px 0px 0px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 0 0.9em;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
            position: relative;
            color: #FFFFFF;
            background-color: #00A1EF;
        }

        .css-e4pgre {
            margin: 1em 0;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            font-weight: 700;
            font-size: 0.9em;
            margin-right: 4px;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .css-1iovl8i {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            background: transparent;
            border: 0;
            display: inline-block;
            margin: 0;
            padding: 0.5em;
            color: inherit;
            cursor: pointer;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
            padding: 0 .5em;
            padding: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border: 0;
            border-radius: 6px;
            --primary-color: #2000F0;
            --secondary-color: #FFFFFF;
            --tertiary-color: #E3E3E3;
        }
    </style>
    <style>
        #chat-widget {
            display: none;
            transform-origin: top center;
        }

        /* Flip and bounce animation */
        @keyframes flipInAirBounce {
            0% {
                transform: perspective(600px) rotateX(90deg);
                opacity: 0;
            }

            60% {
                transform: perspective(600px) rotateX(0deg);
                opacity: 1;
            }

            80% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .flip-bounce {
            animation: flipInAirBounce 0.8s ease-out;
        }
    </style>
    <style>
        .inactivee {
            pointer-events: none;
            /* Disable clicks only when the iframe is hidden */
        }

        .activee {
            pointer-events: auto;
            /* Disable clicks only when the iframe is hidden */
        }
    </style>
</head>

<body>
    @php $currentRouteName = Route::currentRouteName(); @endphp
    <div id=tj-overlay-bg2 class=tj-overlay-canvas></div>
    <div class=tj-offcanvas-area>
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="{{ route('welcome') }}"><img src="{{ asset('/frontend/images/logo/LOGO NEW-2.webp') }}"
                        width="200" height="70" alt="Logo"></a>
            </div>
            <div class=offcanvas-icon>
                <a id="canva_close" href="#" aria-label="Close Menu">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id=mobile-navbar-menu></nav>
        <p class="des d-none d-lg-block">
            We take a bottom-line approach to each project. Our clients consistently, enhanced brand loyalty and new
            leads thanks to our work.
        </p>
    </div>
    @include('frontend.includes.header')
    @yield('content')
    <div class="chat">
        <div id="chat-widget-container"
            style="opacity: 1; visibility: visible; z-index: 1000; position: fixed; bottom: 0px; width: 450px; height: 625px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; transition: none !important;right:0">
            <iframe
                allow="clipboard-read; clipboard-write; autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;"
                id="chat-widget" name="chat-widget" title="LiveChat chat widget" scrolling="no"
                style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: transparent; border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none !important; display: none; visibility: visible;">
            </iframe>
            <div dir="ltr" role="main" data-lc-id="0" class="css-1h1ne2e e1558m8u1">
                <div class="css-1aasxu6 e131382t0">
                    <div class="css-1g9ek8d e1kv8om20"></div>
                    <div class="css-bubhx7 e1kv8om20">
                        <div data-lc-id="1" class="css-138p0k2 e16i86ec1" id="chat_with_us">
                            <p class="css-e4pgre e16i86ec0">Chat Us Now</p>
                            <button type="button" aria-label="Open LiveChat chat widget"
                                class="e1mwfyk10 css-1iovl8i ejbfa1m0">
                                <div class="css-1potzn5 e1dmt1bi3">
                                    <svg color="inherit" viewBox="0 0 32 32" class="css-1usdo54">
                                        <path fill="#FFFFFF"
                                            d="M12.63,26.46H8.83a6.61,6.61,0,0,1-6.65-6.07,89.05,89.05,0,0,1,0-11.2A6.5,6.5,0,0,1,8.23,3.25a121.62,121.62,0,0,1,15.51,0A6.51,6.51,0,0,1,29.8,9.19a77.53,77.53,0,0,1,0,11.2,6.61,6.61,0,0,1-6.66,6.07H19.48L12.63,31V26.46">
                                        </path>
                                        <path fill="#00A1EF"
                                            d="M19.57,21.68h3.67a2.08,2.08,0,0,0,2.11-1.81,89.86,89.86,0,0,0,0-10.38,1.9,1.9,0,0,0-1.84-1.74,113.15,113.15,0,0,0-15,0A1.9,1.9,0,0,0,6.71,9.49a74.92,74.92,0,0,0-.06,10.38,2,2,0,0,0,2.1,1.81h3.81V26.5Z"
                                            class="css-1adcsh3 eam5rsy0"></path>
                                    </svg>
                                    <div class="css-anyrkw e1dmt1bi2"></div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if (Route::currentRouteName() !== 'order.tracking')
        @include('frontend.includes.sidebtn-track')
    @endif @include('frontend.includes.footer') @yield('extraScript')
    <div class="logiland-scroll-top progress-done">
        <svg class="progress-circle svg-content" width=100% height=100% viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition:stroke-dashoffset 10ms linear 0s;stroke-dasharray:307.919px,307.919px;stroke-dashoffset:71.1186px">
            </path>
        </svg>
        <div class=logiland-scroll-top-icon>
            <svg xmlns=http://www.w3.org/2000/svg aria-hidden=true role=img width=1em height=1em viewBox="0 0 24 24"
                data-icon=mdi:arrow-up class="iconify iconify--mdi">
                <path fill=currentColor d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    {{-- <script>
        setTimeout(function() {
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date;
            var t = document.createElement("script"),
                e = document.getElementsByTagName("script")[0];
            t.async = true;
            t.src = "https://embed.tawk.to/6728df992480f5b4f5986b9c/1ibrqis6f";
            t.charset = "UTF-8";
            t.setAttribute("crossorigin", "*");
            e.parentNode.insertBefore(t, e);
        }, 5000);
    </script>
    <script src="{{ asset('/frontend/js/modernizr-2.8.3.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/meanmenu.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/imagesloaded.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/swiper.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/owl.carousel.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/jquery.appear.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/odometer.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/sal.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('/frontend/js/main.js') }}" defer></script> --}}


    {{--    remove by mohsin --}}
    {{--    <script> --}}
    {{--        var Tawk_API = Tawk_API || {}, --}}
    {{--            Tawk_LoadStart = new Date; --}}
    {{--        ! function() { --}}
    {{--            var t = document.createElement("script"), --}}
    {{--                e = document.getElementsByTagName("script")[0]; --}}
    {{--            t.async = !0, t.src = "https://embed.tawk.to/6728df992480f5b4f5986b9c/1ibrqis6f", t.charset = "UTF-8", t --}}
    {{--                .setAttribute("crossorigin", "*"), e.parentNode.insertBefore(t, e) --}}
    {{--        }() --}}
    {{--    </script> --}}

    <script>
        $('#chat_with_us').on('click', function() {
            if ($('#chat-widget').is(':visible')) {
                $('#chat-widget').removeClass('flip-bounce');
                $('#chat-widget').slideUp(300, function() {
                    $('#chat-widget-container').addClass('inactivee');
                    $('#chat_with_us').addClass('activee');
                });
            } else {
                $('#chat-widget-container').removeClass('inactivee');

                $('#chat-widget').css('display', 'block').addClass(
                'flip-bounce'); // Show and animate the chat widget
            }
        });

        $(window).on('load', function() {
            // Set the src of the iframe after the page is fully loaded
            $('#chat-widget').attr('src', "https://www.shipa1.com/chat_dashboard?user_id=0");

            // $('#chat-widget').fadeIn(300);
        });
    </script>

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6728df992480f5b4f5986b9c/1ibrqis6f';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> --}}
    <!--End of Tawk.to Script-->
    <script src=https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js></script>
    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js></script>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
    <script src=https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js></script>
    <script src=https://cdn.jsdelivr.net/npm/sweetalert2@11></script>
    <script src="{{ asset('/frontend/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/meanmenu.js') }}"></script>
    <script src="{{ asset('/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/sal.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js></script>
    <script>
        $(document).ready(function() {
            var $emailInput = $('#email_newsletter');
            $('#newsletter-form').on('submit', function(event) {
                event.preventDefault();
                var email = $emailInput.val();
                if (!email || !isValidEmail(email)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Email',
                        text: 'Please enter a valid email address.'
                    });
                    return;
                }
                Swal.fire({
                    icon: 'info',
                    title: 'Processing...',
                    text: 'Please wait while we process your subscription.',
                    showConfirmButton: false,
                    willOpen: () => {
                        Swal.showLoading();
                    }
                });
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
                            $emailInput.val('');
                        });
                    },
                    error: function(xhr) {
                        var response = xhr.responseJSON || {
                            message: 'An error occurred. Please try again later.'
                        };
                        Swal.fire({
                            icon: 'error',
                            title: 'Subscription Failed',
                            text: response.message
                        }).then(function() {
                            $emailInput.val('');
                        });
                    }
                });
            });

            function isValidEmail(email) {
                var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return regex.test(email);
            }
        });
    </script>
    <script>
        let selectedFiles = [];

        function previewImages(e) {
            var t = e.target,
                a = document.getElementById("imagePreviewContainer");
            t.files && Array.from(t.files).forEach((e => {
                if (!selectedFiles.some((t => t.name === e.name && t.size === e.size))) {
                    selectedFiles.push(e);
                    var t = new FileReader;
                    t.onload = function(t) {
                        var n = document.createElement("div");
                        n.classList.add("image-preview"), n.innerHTML =
                            `\n                            <img src="${t.target.result}" alt="Image Preview">\n                            <button class="remove-button" onclick="removeImage('${e.name}', ${e.size})">Remove</button>\n                        `,
                            a.appendChild(n)
                    }, t.readAsDataURL(e)
                }
            }))
        }

        function removeImage(e, t) {
            var a = document.getElementById("imagePreviewContainer");
            selectedFiles = selectedFiles.filter((a => !(a.name === e && a.size === t))), a.innerHTML = "", selectedFiles
                .forEach((e => {
                    var t = new FileReader;
                    t.onload = function(t) {
                        var n = document.createElement("div");
                        n.classList.add("image-preview"), n.innerHTML =
                            `\n                    <img src="${t.target.result}" alt="Image Preview">\n                    <button class="remove-button" onclick="removeImage('${e.name}', ${e.size})">Remove</button>\n                `,
                            a.appendChild(n)
                    }, t.readAsDataURL(e)
                }))
        }
    </script>
    <script>
        $(document).ready((function() {
            $('input[type="number"]').on("input", (function() {
                this.value = this.value.replace(/[^0-9]/g, "")
            }))
        }))
    </script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", (function() {
            function e(e, n, t, o) {
                function i() {
                    const i = t.getSelectedCountryData(),
                        d = {
                            us: "(000) 000-0000",
                            ca: "(000) 000-0000"
                        } [i.iso2] || "";
                    o && o.destroy(), d && (o = IMask(e, {
                        mask: d
                    })), n.value = i.dialCode
                }
                if (t = window.intlTelInput(e, {
                        separateDialCode: !0,
                        initialCountry: "auto",
                        geoIpLookup: function(e) {
                            e("us")
                        },
                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                        flagsImagePath: "https://www.shipa1.com/public/frontend/images/icon/flags.webp"
                    }), "frontend.pages.marketing.vehicleTransportInNewyork" == window.location.pathname);
                e.addEventListener("input", i), e.addEventListener("countrychange", i), e.addEventListener(
                    "blur", (function() {
                        return !!t.isValidNumber() || (console.error(`Invalid phone number (${e.id})`),
                            !1)
                    })), i()
            }
            e(document.querySelector("#phone"), document.querySelector("#country_code"), undefined, undefined);
            e(document.querySelector("#phone2"), document.querySelector("#country_code2"), undefined, undefined)
        }))
    </script> --}}
    {{-- <script>
        $(document).ready(function () {
            function setupIntlTelInput(e, n, t, o) {
                function updateMask() {
                    const selectedCountry = t.getSelectedCountryData(),
                        maskPattern = {
                            us: "(000) 000-0000",
                            ca: "(000) 000-0000"
                        }[selectedCountry.iso2] || "";
                    if (o) o.destroy();
                    if (maskPattern) {
                        o = IMask(e, { mask: maskPattern });
                    }
                    n.value = selectedCountry.dialCode;
                }

                if (t = window.intlTelInput(e, {
                    separateDialCode: true,
                    initialCountry: "auto",
                    geoIpLookup: function (callback) {
                        callback("us");
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                    flagsImagePath: "https://www.shipa1.com/public/frontend/images/icon/flags.webp"
                })) {
                    e.addEventListener("input", updateMask);
                    e.addEventListener("countrychange", updateMask);
                    e.addEventListener("blur", function () {
                        if (!t.isValidNumber()) {
                            console.error(`Invalid phone number (${e.id})`);
                            return false;
                        }
                    });
                    updateMask();
                }
            }
            // Check if the phone input fields exist before initializing
            if ($("#phone").length) {
                setupIntlTelInput(document.querySelector("#phone"), document.querySelector("#country_code"), undefined, undefined);
            }
            if ($("#phone2").length) {
                setupIntlTelInput(document.querySelector("#phone2"), document.querySelector("#country_code2"), undefined, undefined);
            }
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            const allowedPrefixes = [
                '205', '251', '256', '334', '938', '907', '480', '520', '602', '623', '928', '327', '479',
                '501', '870', '209', '213', '279', '310', '323', '341', '408', '415', '424', '442', '510',
                '530', '559', '562', '619', '626', '628', '650', '657', '661', '707', '714', '747', '752',
                '760', '805', '818', '820', '831', '858', '909', '916', '925', '949', '951', '303', '719',
                '720', '970', '203', '475', '860', '959', '302', '239', '305', '321', '352', '386', '407',
                '448', '561', '656', '727', '754', '772', '786', '813', '850', '863', '904', '941', '954',
                '229', '404', '470', '478', '678', '706', '762', '770', '912', '808', '208', '986', '217',
                '224', '309', '312', '331', '447', '464', '618', '630', '708', '773', '779', '815', '847',
                '872', '219', '260', '317', '463', '574', '765', '812', '930', '319', '515', '563', '641',
                '712', '316', '620', '785', '913', '270', '364', '502', '606', '859', '225', '318', '337',
                '504', '985', '207', '240', '301', '410', '443', '667', '339', '351', '413', '508', '617',
                '774', '781', '857', '978', '231', '248', '278', '313', '517', '586', '616', '679', '734',
                '810', '906', '947', '989', '218', '320', '507', '612', '651', '763', '952', '228', '601',
                '662', '769', '314', '417', '557', '573', '636', '660', '816', '406', '308', '402', '531',
                '702', '725', '775', '603', '201', '551', '609', '640', '732', '848', '856', '862', '908',
                '973', '505', '575', '212', '315', '332', '347', '516', '518', '585', '607', '631', '646',
                '680', '716', '718', '838', '845', '914', '917', '929', '934', '252', '336', '472', '704',
                '743', '828', '910', '919', '980', '984', '701', '216', '220', '234', '283', '326', '330',
                '380', '419', '440', '513', '567', '614', '740', '937', '405', '539', '572', '580', '918',
                '458', '503', '541', '971', '215', '223', '267', '272', '412', '445', '484', '570', '610',
                '717', '724', '814', '878', '401', '803', '839', '843', '854', '864', '605', '423', '615',
                '629', '731', '865', '901', '931', '210', '214', '254', '281', '325', '346', '361', '409',
                '430', '432', '469', '512', '682', '713', '726', '737', '806', '817', '830', '832', '903',
                '915', '936', '940', '956', '972', '979', '385', '435', '801', '802', '276', '434', '540',
                '571', '703', '757', '804', '206', '253', '360', '425', '509', '564', '304', '681', '262',
                '414', '534', '608', '715', '920', '307'
            ];

            function validatePhoneNumber(phoneInput) {
                let phoneNumber = phoneInput.val().replace(/\D/g, ''); // Remove all non-numeric characters

                if (phoneNumber.length === 10) { // Check if it has exactly 10 digits
                    let prefix = phoneNumber.substring(0, 3); // Extract the first three digits (prefix)

                    if (!allowedPrefixes.includes(prefix)) {
                        alert("Invalid phone prefix! Allowed prefixes are US-based only.");
                        phoneInput.val(''); // Clear input if prefix is invalid
                    }
                }
            }

            $("#phone").on("input", function() {
                validatePhoneNumber($(this));
            });

            $("#phone2").on("input", function() {
                validatePhoneNumber($(this));
            });

            function setupIntlTelInput(e, n, t, o) {
                if (e.classList.contains("iti-initialized")) return;
                e.classList.add("iti-initialized");

                function updateMask() {
                    if (o) o.destroy();
                    o = IMask(e, {
                        mask: "(000) 000-0000"
                    });
                    n.value = "+1";
                }

                t = window.intlTelInput(e, {
                    separateDialCode: true,
                    initialCountry: "us",
                    onlyCountries: ["us"],
                    allowDropdown: false,
                    showFlags: false,
                    utilsScript: false
                });

                e.addEventListener("input", updateMask);
                e.addEventListener("blur", function() {
                    if (!t.isValidNumber()) {
                        console.error(`Invalid phone number (${e.id})`);
                        return false;
                    }
                });
                updateMask();
            }

            if ($("#phone").length) {
                setupIntlTelInput(document.querySelector("#phone"), document.querySelector("#country_code"),
                    undefined, undefined);
            }
            if ($("#phone2").length) {
                setupIntlTelInput(document.querySelector("#phone2"), document.querySelector("#country_code2"),
                    undefined, undefined);
            }
        });
    </script>
    <script>
        window.onload = function() {
            document.querySelectorAll(".lazy-bg").forEach((element) => {
                element.style.backgroundImage = `url('${element.dataset.bgImage}')`;
            });
        };
    </script>
    <script>
        $(document).ready((function() {
            $(document).on("change", "#category", (function() {
                var e = $(this).find("option:selected").data("id");
                $.ajax({
                    url: "{{ route('get.subcategories') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        category: e
                    },
                    success: function(e) {
                        var o = "";
                        $("#subcategory-box").html(""), o +=
                            "<label for='subcategory'>Subcategory</label>", o +=
                            "<select class='nice-select form-control' id='subcategory' name='subcategory'>",
                            o += "<option value='' disabled selected>Select</option>", $
                            .each(e, (function(e, t) {
                                console.log("val", t), o +=
                                    `<option value='${t.name}' style='white-space: nowrap;'>${t.name}</option>`
                            })), o += "</select>", $("#subcategory-box").html(o)
                    },
                    error: function(e, o, t) {
                        console.error("Error:", t)
                    }
                })
            }))
        }))
    </script>
    <script>
        $(document).ready((function() {
            function i(i, n, e) {
                $(document).on("change", i, (function() {
                    $(this).is(":checked") ? ($(n).show(), $(e).attr("required", !0)) : ($(n)
                        .hide(), $(e).val(""), $(e).removeAttr("required"))
                }))
            }
            i("#available_at_auction", ".div-link", "#link"), i("#modification", ".div-modify_info", "#c")
        }))
    </script>
    <script>
        $("#category").on("change", (function() {
            $(this).closest(".input-form").find(".error-message").hide(), "Others" === $(this).val() ? $(
                "#otherCategoryInput").show().prop("disabled", !1) : $("#otherCategoryInput").hide().prop(
                "disabled", !0)
        })), $(document).ready((function() {
            let e;

            function t(e, t) {
                $("#" + e).addClass("error-field"), $("#" + e + "-error").text(t).show()
            }

            function i(e) {
                $("#" + e).removeClass("error-field"), $("#" + e + "-error").hide()
            }

            function s(e) {
                var s = !0;
                return $("#" + e + " input[required], #" + e + " select[required], #" + e +
                    " textarea[required]").each((function() {
                    var e = $(this).attr("id"),
                        o = $(this).val();
                    $(this).hasClass("ajax-suggestion-input") ? $(this).data("selected") && "" !==
                        $(this).val() ? i(e) : (t(e,
                            "Please select a valid option from suggestions."), s = !1) :
                        "pickup-location" === e || "delivery-location" === e ? o ?
                        /^[A-Za-z\s]+,\s*[A-Za-z]{2},\s*\d{5}$/.test(o) ? i(e) : (t(e,
                                "Please enter the address in the format: City,State,ZipCode."),
                            s = !1) : (t(e, "This field is required."), s = !1) : o ? i(e) : (t(e,
                            "This field is required."), s = !1)
                })), s
            }

            function o(t, s) {
                clearTimeout(e), e = setTimeout((function() {
                    var e = t.val();
                    "" !== e.trim() ? (s.empty().append("<li>Loading...</li>"), $.ajax({
                        url: "{{ route('get.zipcodes') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            input: e
                        },
                        success: function(e) {
                            s.empty(), t.data("selected", !1), 0 === e.length ? s
                                .append($("<li>").text("No results found").css(
                                    "color", "red")) : $.each(e, (function(e, o) {
                                    $("<li>").attr("role", "option").attr(
                                        "aria-selected", "false").text(
                                        o).click((function() {
                                        t.val(o), t.data(
                                                "selected", !0),
                                            s.hide(), i(t.attr(
                                                "id"))
                                    })).appendTo(s)
                                })), s.show()
                        },
                        error: function(e, t, i) {
                            s.empty(), console.error("Error:", i)
                        }
                    })) : s.hide()
                }), 300)
            }
            $("#pickup-location").on("input", (function() {
                var e = $(this),
                    t = $(".suggestionsPickup");
                e.data("selected", !1), o(e, t)
            })), $("#delivery-location").on("input", (function() {
                var e = $(this),
                    t = $(".suggestionsDelivery");
                e.data("selected", !1), o(e, t)
            })), $(document).on("click", (function(e) {
                $(e.target).closest(
                        ".ajax-suggestion-input, .suggestionsPickup, .suggestionsDelivery")
                    .length || $(".suggestionsPickup, .suggestionsDelivery").hide()
            })), $("#step1_next").click((function() {
                s("step1") && ($("#step1").hide(), $("#step2").show())
            })), $("#step2_previous").click((function() {
                $("#step2").hide(), $("#step1").show()
            })), $("#step2_next").click((function() {
                s("step2") && ($("#step2").hide(), $("#step3").show())
            })), $("#step3_previous").click((function() {
                $("#step3").hide(), $("#step2").show()
            }))
        }))
    </script>
    @php $makes = App\Models\VehicleName::select('make') ->where('UserId', 14) ->where('status', 0) ->groupBy('make') ->orderBy('make', 'ASC') ->get(); @endphp
    <script>
        $(document).ready((function() {
            $("#example-multiple").select2()
        })), $(document).ready((function() {
            $("#example-multiple-2").select2()
        }))
    </script>
    <script>
        $(document).ready((function() {
            var o = [],
                n = [];

            function t(o, n, t) {
                var e = o.val();
                $.ajax({
                    url: "{{ route('get.zipcodes') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        input: e
                    },
                    success: function(e) {
                        n.empty(), t.length = 0, $.each(e, (function(e, s) {
                            var i = $("<li>").text(s).click((function() {
                                o.val(s), n.css("display", "none")
                            }));
                            t.push(s), n.append(i)
                        }))
                    },
                    error: function(o, n, t) {
                        console.error("Error:", t)
                    }
                })
            }

            function e(o, n, t) {
                var e = o.val();
                return n.includes(e) ? (t.text(""), !0) : (t.text("Please select a valid location."), !1)
            }
            $(document).on("keyup", "#pickup-location", (function() {
                var n = $(this),
                    e = n.siblings(".suggestionsTwo");
                e.css("display", "block"), "" === n.val() && e.css("display", "none"), t(n, e, o)
            })), $(document).on("keyup", "#delivery-location", (function() {
                var o = $(this),
                    e = o.siblings(".suggestionsTwo");
                e.css("display", "block"), "" === o.val() && e.css("display", "none"), t(o, e, n)
            })), $(document).on("click", (function(o) {
                var n = $(o.target);
                n.closest("#pickup-location").length || n.closest("#delivery-location").length || n
                    .closest(".suggestionsTwo").length || $(".suggestionsTwo").css("display",
                        "none")
            })), $("form").submit((function(t) {
                if (console.log($(this).attr("id"), "asdasd"), "marketing-form" != $(this).attr(
                        "id")) {
                    var s = e($("#pickup-location"), o, $("#errOLoc")),
                        i = e($("#delivery-location"), n, $("#errDLoc"));
                    s && i || t.preventDefault()
                }
            }))
        }))
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", (function() {
            function t(t, o) {
                const e = document.querySelectorAll(t),
                    n = document.querySelector(o);
                e.forEach((t => {
                    t.addEventListener("click", (function() {
                        n.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        })
                    }))
                }))
            }
            t(".scroll-up-btn", ".target-top"), t(".scroll-up-btn-1", ".target-top-1"), t(".scroll-up-btn-2",
                ".target-top-2"), t(".scroll-up-btn-3", ".target-top-3")
        }))
    </script>
    <script>
        var selectedTab = "";
        $(document).on("change", "#tabSelector", (function() {
            $(".vehicles-container").html(""), selectedTab = $(this).val();
            var e = $(this).val();
            $(".tab-pane").removeClass("show active"), $("#" + selectedTab).addClass("show active"), $.ajax({
                url: "{{ route('get.partial.form') }}",
                method: "GET",
                data: {
                    vehicleType: e,
                    currentRouteName: "{{ $currentRouteName }}"
                },
                success: function(e) {
                    $("#additionalContent").html(""), $("#additionalContent").html(e)
                },
                error: function(e) {
                    console.log(e.responseText)
                }
            })
        })), $(document).on("click", ".addVehicleBtn", (function() {
            "Car" == $("#tabSelector").val() ? (console.log("yesss"), addNewVehicle()) : (console.log("nooo"),
                addOtherVehicle())
        })), $(document).on("click", ".delete-vehicle", (function() {
            $(this).closest(".vehicle-info").remove()
        }))
    </script>
    <script>
        function limitDigits(e, n) {
            e.value.length > n && (e.value = e.value.slice(0, n))
        }

        function moveToNext(e, n) {
            e.value.length >= e.maxLength && document.getElementById(n).focus()
        }
        $(document).ready((function() {
            $("#inches-input").on("input", (function() {
                this.value > 11 ? this.value = 11 : this.value < 0 && (this.value = 0)
            })), $("#feet-input, #inches-input").on("input", (function() {
                this.value = this.value.replace(/[^0-9]/g, "")
            }))
        })), $(document).ready((function() {
            $(document).on("input", ".inches-input1, .inches-input2", (function() {
                this.value > 11 ? this.value = 11 : this.value < 0 && (this.value = 0)
            })), $(document).on("input", ".feet-input1, .inches-input1, .feet-input, .inches-input2", (
                function() {
                    console.log("asdasd"), this.value = this.value.replace(/[^0-9]/g, "")
                }))
        }))
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", (function() {
            document.querySelectorAll(".validate-form").forEach((function(e) {
                e.addEventListener("submit", (function(t) {
                    var r = !0;
                    e.querySelectorAll("[required]").forEach((function(e) {
                        var t = "err" + e.name.replace("[]", ""),
                            n = function(e, t) {
                                let r = e.parentNode.querySelector("." + t);
                                return r || (r = document.createElement(
                                            "span"), r.className = t +
                                        " error-message", r.style.color =
                                        "red", e.parentNode.appendChild(r)),
                                    r
                            }(e, t);
                        if (!e.value || "SELECT" === e.tagName && "" === e
                            .value) n.textContent = "SELECT" === e.tagName ?
                            "Please select an option." : e.name +
                            " is required.", e.style.border =
                            "2px solid red", r = !1;
                        else if ("tel" === e.type && "undefined" !=
                            typeof iti) {
                            iti.getNumber();
                            iti.isValidNumber() ? (n.textContent = "", e
                                .style.border = "") : (n.textContent =
                                "Valid phone number is required.", e
                                .style.border = "2px solid red", r = !1)
                        } else "email" !== e.type || /\S+@\S+\.\S+/.test(e
                            .value) ? (n.textContent = "", e.style
                            .border = "") : (n.textContent =
                            "Valid email is required.", e.style.border =
                            "2px solid red", r = !1)
                    })), r || t.preventDefault()
                }))
            }))
        }))
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", (function() {
            document.querySelectorAll(".lazy-background").forEach((e => {
                const n = e.dataset.bgImage;
                if (n) {
                    const o = new Image;
                    o.src = n, o.onload = () => e.style.backgroundImage = `url(${n})`
                }
            }))
        }))
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", (function() {
            const e = ".swiper-new-1",
                i = document.querySelector(e);
            if (i) {
                new Swiper(e, {
                    slidesPerView: 1,
                    loop: !0,
                    spaceBetween: 10,
                    autoplay: {
                        delay: 3e3,
                        disableOnInteraction: !1
                    },
                    speed: 800,
                    effect: "fade",
                    fadeEffect: {
                        crossFade: !0
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 1
                        },
                        600: {
                            slidesPerView: 1
                        },
                        1e3: {
                            slidesPerView: 1
                        }
                    }
                });
                i.style.cssText = "opacity: 1; visibility: visible;"
            }
        }))
    </script>
</body>

</html>
