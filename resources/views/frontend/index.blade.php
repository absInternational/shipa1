@extends('frontend.layouts.app') @section('title', 'Trusted State to State Auto Transport Services in USA - SHIPA1')
@section('meta_description', 'Best state to state auto transport services in USA for quick, safe & secure auto vehicle
delivery. We focus on your satisfaction with reliable, affordable services.') @section('content')
<head>
    <link rel="preload" as="image" href="{{ asset('/frontend/images/banner/home-underline.webp') }}" type="image/webp">
</head>
<style>
        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .1)
        }

        .card .row {
            display: flex;
            flex-wrap: wrap
        }

        .card .col-6 {
            width: 50%
        }

        @keyframes custom-slides {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-80%)
            }
        }

        .input-field {
            width: 50px;
            padding: 5px;
            font-size: 14px;
            border: none;
            outline: 0
        }

        .input-field-1 {
            width: 65px;
            padding: 0 0 0 10px;
            font-size: 14px;
            border: none;
            outline: 0
        }

        .form-wrap {
            margin-bottom: 10px;
            position: relative
        }

        .form-label-outside {
            color: #fff;
            display: block;
            margin-bottom: 5px
        }

        .err-style {
            color: red
        }

        .error-message {
            display: none;
            color: red
        }

        .error-field {
            border: 2px solid red
        }

        .service-link {
            display: block;
            text-decoration: none;
            color: #fff
        }

        .service-link:hover {
            text-decoration: none
        }

        .service-link:hover .tj-service-item {
            box-shadow: 0 4px 8px rgba(0, 0, 0, .2)
        }

        .service-link:hover .service-content {
            color: #8fc445
        }

        .service-link:hover .icon-box i {
            color: #fff
        }

        .project-link {
            display: block;
            position: relative;
            text-decoration: none;
            color: inherit;
            width: 100%;
            height: 100%
        }

        .tj-project-item {
            position: relative;
            overflow: hidden
        }

        .tj-project-item img {
            width: 100%;
            height: auto;
            display: block
        }
    </style>
    <div id="preloader" class="preloader">
        <div class="animation-preloader"></div>
    </div>
    <section class="tj-slider-section">
        <div class="slider_shape"><img src="{{ asset('/frontend/images/banner/home-underline.webp') }}"
                fetchpriority="high" alt="Image" width="100%"></div>
        <div class="swiper sc-slider-1" data-autoplay="5000">
            <div class="swiper-wrapper">
                @php
                    $slides = [
                        ['image' => 'frontend/images/slider/DSF.webp', 'title' => 'Trustworthy, Efficient, And Cost-effective Auto Transport Solutions', 'desc' => 'ShipA1 has pledged to provide all-in-one auto transport solutions to all its customers and seeks your trust in return of our services.'],
                        ['image' => 'frontend/images/slider/home-slider-2.webp', 'title' => 'Trustworthy, Efficient and Cost-Effective Transportation Services', 'desc' => 'ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its customers and seeks your trust in return of our services.'],
                        ['image' => 'frontend/images/slider/freight-banner-home.webp', 'title' => 'Trustworthy, Efficient and Cost-Effective Logistic Services', 'desc' => 'ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its customers and seeks your trust in return of our services.']
                    ];
                @endphp
                @foreach ($slides as $slide)
                    <div class="swiper-slide slide-bg" style="background-image: url('{{ asset($slide['image']) }}');">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h4 class="slider-title">{{ $slide['title'] }}</h4>
                                <div class="slider-desc">{{ $slide['desc'] }}</div>
                                <div class="tj-theme-button">
                                    <a class="tj-transparent-btn ms-4 mt-4" href="{{ route('quote.form.combine') }}">
                                        Get Quote <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape"></div>
                    </div>
                @endforeach
            </div>            
            {{-- <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset('frontend/images/slider/DSF.webp') }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">Trustworthy, Efficient, And Cost-effective Auto Transport Solutions
                            </h1>
                            <div class="slider-desc">ShipA1 has pledged to provide all-in-one auto transport solutions to
                                all its customers and seeks your trust in return of our services.</div>
                            <div class="tj-theme-button"><a class="tj-transparent-btn ms-4"
                                    href="{{ route('quote.form.combine') }}">Get Quote<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide"  style="background-image: url('{{ asset('frontend/images/slider/home-slider-2.webp') }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h4 class="slider-title">Trustworthy, Efficient and Cost-Effective Transportation Services</h4>
                            <div class="slider-desc">ShipA1 has pledged to provide all-in-one Heavy Equipment transportation
                                solutions to all its customers and seeks your trust in return of our services.</div>
                            <div class="tj-theme-button"><a class="tj-transparent-btn ms-4"
                                    href="{{ route('quote.form.combine') }}">Get Quote<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                <div class="swiper-slide"  style="background-image: url('{{ asset('frontend/images/slider/freight-banner-home.webp') }}');">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h4 class="slider-title">Trustworthy, Efficient and Cost-Effective Logistic Services</h4>
                            <div class="slider-desc">ShipA1 has pledged to provide all-in-one Freight Shipping solutions to
                                all its customers and seeks your trust in return of our services.</div>
                            <div class="tj-theme-button"><a class="tj-transparent-btn ms-4 mt-4"
                                    href="{{ route('quote.form.combine') }}">Get Quote<i class="flaticon-right-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
            </div> --}}
            <div></div>
        </div>
        <div class="tj-service-icon-box">
            <ul class="list-gap">
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon"><i class="fa-light fa-car-side fa-2xs"></i></div>
                            <div class="sub-title"><span>VEHICLE<br>TRANSPORTATION</span></div>
                        </div>
                        <div class="service-arrow"><a href="{{ route('vehicleTransportDetail') }}"
                                aria-label="Learn about our vehicle transportation services"
                                title="Vehicle Transportation Services"><i class="fa-light fa-arrow-right"
                                    aria-hidden="true"></i></a></div>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon"><i class="fa-light fa-tractor fa-xs"></i></div>
                            <div class="sub-title"><span>HEAVY<br>TRANSPORTATION</span></div>
                        </div>
                        <div class="service-arrow"><a href="{{ route('heavy-transport-detail') }}"
                                aria-label="Learn more about heavy transportation services"
                                title="Heavy Transportation Services"><i class="fa-light fa-arrow-right"
                                    aria-hidden="true"></i></a></div>
                    </div>
                </li>
                <li>
                    <div class="service-item">
                        <div class="tj-service-icon">
                            <div class="service-icon"><i class="fa-light fa-truck fa-xs"></i></div>
                            <div class="sub-title"><span>FREIGHT<br>TRANSPORTATION</span></div>
                        </div>
                        <div class="service-arrow"><a href="{{ route('freighttransport-detail') }}"
                                aria-label="Learn more about freight transportation services"
                                title="Freight Transportation Services"><i class="fa-light fa-arrow-right"
                                    aria-hidden="true"></i></a></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    @include('partials.reveiw-site')
    <section class="tj-about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading"><span class="sub-title active-shape">A1 Transportation
                                Company</span>
                            <h2 class="title">What Makes Us Dependable?</h2>
                            <p class="desc">Among all the shipping companies out there, factors that make us stand out
                                from the rest are:</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><img loading="lazy"
                                        src="{{ asset('frontend/images/icon/winner.svg') }}" fetchpriority="high"
                                        alt="Icon"></div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Our Values</h6>
                                </div>
                            </div>
                            <p class="desc">We are a licensed Transportation company with high moral values and have
                                attained customer satisfaction through their remarks on esteemed platforms.</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><i class="fa-light fa-bell-concierge fa-2xl"
                                        style="color:#8fc445"></i></div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Scope of Services</h6>
                                </div>
                            </div>
                            <p class="desc">Range of vehicles, we ship, is not limited to just conventional cars and
                                motorbikes.</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><i class="fa-light fa-shield-heart fa-2xl"
                                        style="color:#8fc445"></i></div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Safety Is Our Priority</h6>
                                </div>
                            </div>
                            <p class="desc">No matter which mode of transportation you use, ShipA1 assures its customers,
                                atmost security to their assets.</p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon"><i class="fa-light fa-handshake fa-2xl" style="color:#8fc445"></i>
                                </div>
                                <div class="ab-title">
                                    <h6 class="title fs-5">Skilful & Devoted Staff</h6>
                                </div>
                            </div>
                            <p class="desc">Our team is loaded with highly experienced professionals of both customer
                                dealing and vehicle handling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-items-center justify-content-center sal-animate pt-4 mt-4"
                    data-sal="slide-right" data-sal-duration="800">
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon"><i class="flaticon-in-person"></i></div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                                <p class="desc">Satisfied Client</p>
                            </div>
                        </div>
                        <div class="image-box"><img class="p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                                src="{{ asset('/frontend/images/about/WMUD-Home.webp') }}" fetchpriority="high"
                                loading="lazy" alt="Image"></div><img
                            class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                            src="{{ asset('/frontend/images/about/about-3.webp') }}" fetchpriority="high" loading="lazy"
                            alt="Image" width="1200" height="800">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="tj-service-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center"><span class="sub-title active-shape">What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"><a
                        href="{{ route('vehicleTransportDetail') }}"
                        aria-label="Learn more about vehicle transportation services"
                        title="Vehicle Transportation Services" class="service-link">
                        <div class="tj-service-item lazy-bg" data-bg-image="{{ asset('frontend/images/service/CAR-CARD.webp') }}">
                            <div class="icon-box"><i class="fa-light fa-car-side fa-2xs"></i></div>
                            <div class="service-content">
                                <h4>VEHICLE TRANSPORTATION</h4>
                                <p>Everything you need to know about 100% insured and secured vehicle transportation.</p>
                                
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200"><a
                        href="{{ route('heavy-transport-detail') }}"
                        aria-label="Learn more about Heavy transportation services" title="Heavy Transportation Services"
                        class="service-link">
                        <div class="tj-service-item lazy-bg" data-bg-image="{{ asset('/frontend/images/service/Logistics-Home.webp') }}">
                            <div class="icon-box"><i class="fa-light fa-tractor fa-2xs"></i></div>
                            <div class="service-content">
                                <h4>HEAVY TRANSPORTATION</h4>
                                <p>Ship A1 is your trusted partner for safely and efficiently handling the toughest
                                    transportation challenges.</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300"><a
                        href="{{ route('freighttransport-detail') }}"
                        aria-label="Learn more about freight transportation services"
                        title="Freight Transportation Services" class="service-link">
                        <div class="tj-service-item lazy-bg"
                            data-bg-image="{{ asset('frontend/images/service/FREIGHT-CARD.webp') }}">
                            <div class="icon-box"><i class="fa-light fa-truck fa-2xs"></i></div>
                            <div class="service-content">
                                <h4>FREIGHT TRANSPORTATION</h4>
                                <p>Unlock the door to smooth freight logistic transportation with Ship A1.</p>
                                
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section> --}}
    {{-- @php
        $services = [
            [
                'route' => route('vehicleTransportDetail'),
                'image' => asset('frontend/images/service/CAR-CARD.webp'),
                'icon'  => 'fa-car-side',
                'title' => 'VEHICLE TRANSPORTATION',
                'description' => 'Everything you need to know about 100% insured and secured vehicle transportation.'
            ],
            [
                'route' => route('heavy-transport-detail'),
                'image' => asset('frontend/images/service/Logistics-Home.webp'),
                'icon'  => 'fa-tractor',
                'title' => 'HEAVY TRANSPORTATION',
                'description' => 'Ship A1 is your trusted partner for safely and efficiently handling the toughest transportation challenges.'
            ],
            [
                'route' => route('freighttransport-detail'),
                'image' => asset('frontend/images/service/FREIGHT-CARD.webp'),
                'icon'  => 'fa-truck',
                'title' => 'FREIGHT TRANSPORTATION',
                'description' => 'Unlock the door to smooth freight logistic transportation with Ship A1.'
            ],
        ];
    @endphp
    <section class="tj-service-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape">What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="{{ 100 * ($index + 1) }}">
                        <a href="{{ $service['route'] }}" aria-label="Learn more about {{ strtolower($service['title']) }} services"
                        title="{{ $service['title'] }}" class="service-link">
                            <div class="tj-service-item lazy-bg" data-bg-image="{{ $service['image'] }}">
                                <div class="icon-box">
                                    <i class="fa-light {{ $service['icon'] }} fa-2xs"></i>
                                </div>
                                <div class="service-content">
                                    <h4>{{ $service['title'] }}</h4>
                                    <p>{{ $service['description'] }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    @include('partials.car-cta-section')
    <section class="tj-step-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center"><span class="sub-title active-shape">Working Process</span>
                    <h2 class="title">We Follow Great Process</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tj-step-area">
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-economics"></i><span
                                        class="number">01.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Online Quote</h6><span>Get an instant online quote from our website
                                        or call our agent.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-pick"></i><span
                                        class="number">02.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Confirm Order</h6><span>Confirm your order over the phone and fill
                                        out the booking form.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-tracking"></i><span
                                        class="number">03.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Track Shipment</h6><span>Track your shipment by your unique order id
                                        number.</span>
                                </div>
                            </div>
                            <div class="tj-step-item text-center">
                                <div class="step-icon-box">
                                    <div class="step-box"></div><i class="flaticon-delivery-van"></i><span
                                        class="number">04.</span>
                                </div>
                                <div class="step-content">
                                    <h6 class="title fs-4">Shipment Delivery</h6><span>Your shipment reached to their drop-off
                                        location.</span>
                                </div>
                                <div class="stp-arrow"><i class="fa-regular fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.cta-section')
    <section class="tj-team-section">
        <div class="container text-center">
            <div class="tj-section-heading">
                <span class="sub-title active-shape">Our Services</span>
                <h2 class="title">Pick Your Transport Type</h2>
            </div>
        </div>
    </section>
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel">
            @php
                $services = [
                    ['route' => 'frontend.pages.services.car-service', 'img' => 'project/9.webp', 'title' => 'Car Shipping Service', 'label' => 'CAR'],
                    ['route' => 'frontend.pages.services.bike-service', 'img' => 'project/PYT-Bike.webp', 'title' => 'Motorcycle Shipping Service', 'label' => 'Motorcycle'],
                    ['route' => 'frontend.pages.services.heavy-service', 'img' => 'project/PYT-Heavy.webp', 'title' => 'Heavy Transportation Service', 'label' => 'HEAVY EQUIP'],
                    ['route' => 'frontend.pages.services.roro-service', 'img' => 'project/RORO-Slider (1)--.webp', 'title' => 'Roro Shipping International', 'label' => 'RORO'],
                    ['route' => 'frontend.pages.services.golf-cart-service', 'img' => 'project/PYT-Golf.webp', 'title' => 'Golf Cart Transportation Service', 'label' => 'Golf Cart'],
                    ['route' => 'frontend.pages.services.atv-utv-service', 'img' => 'project/PYT-ATV.webp', 'title' => 'ATV/UTV Transportation Service', 'label' => 'ATV/UTV'],
                    ['route' => 'frontend.pages.services.construction-service', 'img' => 'project/PYT-Construction.webp', 'title' => 'Construction Transportation Service', 'label' => 'CONSTRUCTION'],
                    ['route' => 'frontend.pages.services.farm-service', 'img' => 'project/PYT-Farm.webp', 'title' => 'Farm Transportation Service', 'label' => 'FARM'],
                    ['route' => 'frontend.pages.services.excavator-service', 'img' => 'project/PYT-Excavator.webp', 'title' => 'Excavator Shipping Service', 'label' => 'EXCAVATOR'],
                    ['route' => 'frontend.pages.services.commercial-service', 'img' => 'project/PYT-Commercial.webp', 'title' => 'Truck Transportation Service', 'label' => 'COMMERCIAL'],
                ];
            @endphp
    
            @foreach ($services as $index => $service)
                @php
                    $serviceRoute = route($service['route']);
                    $imgSrc = asset('/frontend/images/' . $service['img']);
                    $fetchPriority = $index === 0 ? 'high' : 'low';
                @endphp
    
                <div class="tj-project-item">
                    <a href="{{ $serviceRoute }}" class="project-link" aria-label="Learn more about {{ $service['title'] }}" title="{{ $service['title'] }}">
                        <img src="{{ $imgSrc }}" loading="lazy" fetchpriority="{{ $fetchPriority }}" alt="{{ $service['title'] }}">
                        
                        <div class="tj-project-content">
                            <span class="sub-title">{{ $service['label'] }}</span>
                            <h6>{{ $service['title'] }}</h6>
                        </div>
    
                        <div class="arrow-icon">
                            <i class="fa-light fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>        
    {{-- <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center"><span class="sub-title active-shape">Our Services</span>
                        <h2 class="title">Pick Your Transport Type</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel" aria-label="Loading indicator for carousel content">
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.car-service') }}"
                    aria-label="Learn more about Car Shipping Services" title="Car Shipping Services"
                    class="project-link"><img loading="lazy" src="{{ asset('/frontend/images/project/9.webp') }}"
                        fetchpriority="high" alt="Car Shipping Service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.car-service') }}"
                            aria-label="Learn more about Car Shipping Services" title="Car Shipping Services"><i
                                class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">CAR</span>
                        <h6><a href="{{ route('frontend.pages.services.car-service') }}"
                                aria-label="Learn more about Car Shipping Services" title="Car Shipping Services"
                                class="title-link">Car Shipping Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.bike-service') }}"
                    aria-label="Learn more about Motorcycle Shipping Services" title="Motorcycle Shipping Services"
                    class="project-link"><img loading="lazy" src="{{ asset('/frontend/images/project/PYT-Bike.webp') }}"
                        fetchpriority="high" alt="Motorcycle Shipping Service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.bike-service') }}"
                            aria-label="Learn more about Motorcycle Shipping Services"
                            title="Motorcycle Shipping Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">Motorcycle</span>
                        <h6><a href="{{ route('frontend.pages.services.bike-service') }}"
                                aria-label="Learn more about Motorcycle Shipping Services"
                                title="Motorcycle Shipping Services" class="title-link">Motorcycle Shipping Service</a>
                        </h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.heavy-service') }}"
                    aria-label="Learn more about Heavy Transportation Services" title="Heavy Transportation Services"
                    class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/PYT-Heavy.webp') }}" fetchpriority="high"
                        alt="Heavy Transportation Services">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.heavy-service') }}"
                            aria-label="Learn more about Heavy Transportation Services"
                            title="Heavy Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">HEAVY EQUIP</span>
                        <h6><a href="{{ route('frontend.pages.services.heavy-service') }}"
                                aria-label="Learn more about Heavy Transportation Services"
                                title="Heavy Transportation Services" class="title-link">Heavy Transportation Service</a>
                        </h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.roro-service') }}"
                    aria-label="Learn more about Roro Shipping Services" title="Roro Shipping Services"
                    class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/RORO-Slider (1)--.webp') }}" fetchpriority="high"
                        alt="Roro Shipping">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.roro-service') }}"
                            aria-label="Learn more about Roro Shipping Services" title="Roro Shipping Services"><i
                                class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">RORO</span>
                        <h6><a href="{{ route('frontend.pages.services.roro-service') }}"
                                aria-label="Learn more about Roro Shipping Services" title="Roro Shipping Services"
                                class="title-link">Roro Shipping International</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.golf-cart-service') }}"
                    aria-label="Learn more about Golf Cart Transportation Services"
                    title="Golf Cart Transportation Services" class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/PYT-Golf.webp') }}" fetchpriority="high"
                        alt="Golf Cart Transport Service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.golf-cart-service') }}"
                            aria-label="Learn more about Golf Cart Transportation Services"
                            title="Golf Cart Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">Golf Cart</span>
                        <h6><a href="{{ route('frontend.pages.services.golf-cart-service') }}"
                                aria-label="Learn more about Golf Cart Transportation Services"
                                title="Golf Cart Transportation Services" class="title-link">Golf Cart Transportation
                                Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.atv-utv-service') }}"
                    aria-label="Learn more about ATV/UTV Transportation Services" title="ATV/UTV Transportation Services"
                    class="project-link"><img loading="lazy" src="{{ asset('/frontend/images/project/PYT-ATV.webp') }}"
                        fetchpriority="high" alt="ATV/UTV Transport Service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.atv-utv-service') }}"
                            aria-label="Learn more about ATV/UTV Transportation Services"
                            title="ATV/UTV Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">ATV/UTV</span>
                        <h6><a href="{{ route('frontend.pages.services.atv-utv-service') }}"
                                aria-label="Learn more about ATV/UTV Transportation Services"
                                title="ATV/UTV Transportation Services" class="title-link">ATV/UTV Transportation
                                Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.construction-service') }}"
                    aria-label="Learn more about Construction Transportation Services"
                    title="Construction Transportation Services" class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/PYT-Construction.webp') }}" fetchpriority="high"
                        alt="Construction Transport Service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.construction-service') }}"
                            aria-label="Learn more about Construction Transportation Services"
                            title="Construction Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">CONSTRUCTION</span>
                        <h6><a href="{{ route('frontend.pages.services.construction-service') }}"
                                aria-label="Learn more about Construction Transportation Services"
                                title="Construction Transportation Services" class="title-link">Construction
                                Transportation Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.farm-service') }}"
                    aria-label="Learn more about Farm Transportation Services" title="Farm Transportation Services"
                    class="project-link"><img loading="lazy" src="{{ asset('/frontend/images/project/PYT-Farm.webp') }}"
                        fetchpriority="high" alt="Farm equipment Transport service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.farm-service') }}"
                            aria-label="Learn more about Farm Transportation Services"
                            title="Farm Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">FARM</span>
                        <h6><a href="{{ route('frontend.pages.services.farm-service') }}"
                                aria-label="Learn more about Farm Transportation Services"
                                title="Farm Transportation Services" class="title-link">Farm Transportation Service</a>
                        </h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.excavator-service') }}"
                    aria-label="Learn more about Excavator Shipping Services" title="Excavator Shipping Services"
                    class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/PYT-Excavator.webp') }}" fetchpriority="high"
                        alt="excavator Transport service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.excavator-service') }}"
                            aria-label="Learn more about Excavator Shipping Services"
                            title="Excavator Shipping Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">EXCAVATOR</span>
                        <h6><a href="{{ route('frontend.pages.services.excavator-service') }}"
                                aria-label="Learn more about Excavator Shipping Services"
                                title="Excavator Shipping Services" class="title-link">Excavator Shipping Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.commercial-service') }}"
                    aria-label="Learn more about Truck Transportation Services" title="Truck Transportation Services"
                    class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/PYT-Commercial.webp') }}" fetchpriority="high"
                        alt="commercial transport service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.commercial-service') }}"
                            aria-label="Learn more about Truck Transportation Services"
                            title="Truck Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">TRUCKS</span>
                        <h6><a href="{{ route('frontend.pages.services.commercial-service') }}"
                                aria-label="Learn more about Truck Transportation Services"
                                title="Truck Transportation Services" class="title-link">Truck Transportation Service</a>
                        </h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.reefer-service') }}"
                    aria-label="Learn more about Reefer Transportation Services" title="Reefer Transportation Services"
                    class="project-link"><img loading="lazy"
                        src="{{ asset('/frontend/images/project/reefer-truck-1.webp') }}" fetchpriority="high"
                        alt="Reefer Transport Service">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.reefer-service') }}"
                            aria-label="Learn more about Reefer Transportation Services"
                            title="Reefer Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">Reefer</span>
                        <h6><a href="{{ route('frontend.pages.services.reefer-service') }}"
                                aria-label="Learn more about Reefer Transportation Services"
                                title="Reefer Transportation Services" class="title-link">Reefer Transportation
                                Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.hazmat-service') }}"
                    aria-label="Learn more about Hazmat Transportation Services" title="Hazmat Transportation Services"
                    class="project-link"><img loading="lazy" src="{{ asset('/frontend/images/project/7.webp') }}"
                        fetchpriority="high" alt="Hazmat Transportation Services">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.hazmat-service') }}"
                            aria-label="Learn more about Hazmat Transportation Services"
                            title="Hazmat Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">Hazmat</span>
                        <h6><a href="{{ route('frontend.pages.services.hazmat-service') }}"
                                aria-label="Learn more about Hazmat Transportation Services"
                                title="Hazmat Transportation Services" class="title-link">Hazmat Transportation
                                Service</a></h6>
                    </div>
                </a></div>
            <div class="tj-project-item"><a href="{{ route('frontend.pages.services.dryvan-service') }}"
                    aria-label="Learn more about Dry van Transportation Services" title="Dry van Transportation Services"
                    class="project-link"><img loading="lazy" src="{{ asset('/frontend/images/project/5.webp') }}"
                        fetchpriority="high" alt="Dry van Transportation Services">
                    <div class="arrow-icon"><a href="{{ route('frontend.pages.services.dryvan-service') }}"
                            aria-label="Learn more about Dry van Transportation Services"
                            title="Dry van Transportation Services"><i class="fa-light fa-arrow-right"></i></a></div>
                    <div class="tj-project-content"><span class="sub-title">Dry van</span>
                        <h6><a href="{{ route('frontend.pages.services.dryvan-service') }}"
                                aria-label="Learn more about Dry van Transportation Services"
                                title="Dry van Transportation Services" class="title-link">Dry van Transportation
                                Service</a></h6>
                    </div>
                </a></div>
                <div class="owl-dots">
                    <button class="owl-dot active" aria-label="Go to slide 1"></button>
                    <button class="owl-dot" aria-label="Go to slide 2"></button>
                    <button class="owl-dot" aria-label="Go to slide 3"></button>
                    <button class="owl-dot" aria-label="Go to slide 4"></button>
                </div>                
        </div>
    </section> --}}
    <section class="tj-choose-us-section-home">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif @if (session('error'))
                        <div class="alert alert-error">{{ session('error') }}</div>
                    @endif
                    <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="choose-us-content-1">
                            <div class="tj-section-heading"><span class="sub-title active-shape2">Get Instant quote</span>
                                <h2 class="title">Get an instant quote in few simple steps</h2>
                                <p class="desc">ShipA1 has pledged to provide all-in-one auto transport solutions to all
                                    its customers and seeks your trust in return of our services.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-courier"></i>
                                        <h6 class="title">Optimized Cost</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-cargo"></i>
                                        <h6 class="title">Delivery on Time</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-6">
                                    <div class="tj-icon-box3 text-center"><i class="flaticon flaticon-agreement"></i>
                                        <h6 class="title">Safety &amp; Reliability</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">@include('partials.multi-form')
                    </div>
            </div>
        </div>
    </section>
    <section class="tj-map-section">
        <div class="google-map"><iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s"
                title="Google Maps location of [your specific location or purpose]" fetchpriority="high" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">Contact us</button></h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-gap">
                                <li><i class="flaticon-placeholder"></i><a fetchpriority="high"
                                        href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+210301344,+USA/@39.4960629,-76.6603247,17z/data=!3m2!4b1!5s0x89c8128abe53a693:0xccf0052e1abf77f2!4m6!3m5!1s0x89c81261c3eae243:0x81e995e93023e64a!8m2!3d39.4960629!4d-76.6603247!16s%2Fg%2F11scxbqcdd?entry=ttu">201
                                        International Cir STE 230, Hunt Valley, MD 21030-1344</a></li>
                                <li><i class="flaticon-mail"></i><a
                                        href="mailto:shawntransport@shipa1.com">shawntransport@shipa1.com</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:1 (844) 474-4721">1 (844) 474-4721</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-counter-area">
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="300">
                            <div class="counter-icon"><i class="fa-light fa-car-side mt-4 fa-2xs"></i></div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="318">0</span>k+</div><span
                                    class="sub-title">Succesful Shipment</span>
                            </div>
                        </div>
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="400">
                            <div class="counter-icon"><i class="flaticon-courier"></i></div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div><span
                                    class="sub-title">Satisfied Clients</span>
                            </div>
                        </div>
                        <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                            data-sal-delay="500">
                            <div class="counter-icon"><i class="flaticon-worldwide"></i></div>
                            <div class="counter-number">
                                <div class="tj-count"><span class="odometer" data-count="270,092">0</span>k</div><span
                                    class="sub-title">Miles Covered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.blog-slider')
     {{-- @include('partials.reveiw-detail')  --}}
    @include('partials.newsletter')
<script>
    document.addEventListener("DOMContentLoaded", (function() {
        const t = document.querySelector(".dropdown-toggle"),
            e = document.querySelector(".dropdown-menu");
        t.addEventListener("click", (function(t) {
            e.classList.toggle("show"), t.stopPropagation()
        })), document.addEventListener("click", (function(n) {
            t.contains(n.target) || e.contains(n.target) || e.classList.remove("show")
        }))
    }))
</script>@endsection
