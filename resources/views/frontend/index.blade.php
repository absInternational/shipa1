@extends('frontend.layouts.app')
@section('title', 'Trusted State to State Auto Transport Services in USA - SHIPA1')
@section('meta_description',
'Best state to state auto transport services in USA for quick, safe & secure auto vehicle delivery. We focus on your satisfaction with reliable, affordable services.')
@section('content')
<style>
    .custom-hover-service-heading:hover{
        color: green
    }
    .tj-testimonial-section {
        padding: 120px 0px 0px 0;
        background: #ffffff;
    }
    .tj-testimonial2-section {
        padding: 50px 0;
        /* background: #f9f9f9; */
    }
    .carousel-wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    .card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .card .row {
        display: flex;
        flex-wrap: wrap;
    }
    .card .col-6 {
        width: 50%;
    }
    .star {
        margin-top: 10px;
    }
    .fa-star {
        color: #f39c12;
    }
    .owl-nav button {
        background: none;
        border: none;
        font-size: 2rem;
        color: #333;
    }
    .owl-nav button {
        display: none;
        background: none;
        border: none;
        font-size: 2rem;
        color: #333;
    }
    .owl-dot {
        display: inline-block;
        width: 12px;
        height: 12px;
        background: #ddd;
        border-radius: 50%;
        margin: 0 5px;
    }
    .owl-dot.active {
        background: #333;
    }
    @keyframes custom-slides {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-80%);
        }
    }
    .lab-cos {
        font-size: 15px;
        font-weight: 500;
        color: var(--tj-white-color);
        margin-bottom: 10px;
    }
    .input-container {
        height: 34px;
        background: white;
        display: flex;
        align-items: center;
        /* border: 1px solid #ccc; */
        border-radius: 4px;
        padding: 8px 0px 8px 0px;
        width: fit-content;
    }
    .input-container1 {
        height: 34px;
        background: white;
        display: flex;
        align-items: center;
        /* border: 1px solid #ccc; */
        border-radius: 4px;
        padding: 8px 0px 8px 0px;
        width: fit-content;
    }
    .input-field {
        width: 50px;
        padding: 5px;
        font-size: 14px;
        border: none;
        outline: none;
    }
    .input-field-1 {
        width: 65px;
        padding: 0px 0px 0px 10px;
        font-size: 14px;
        border: none;
        outline: none;
    }
    .input-container input[type="number"] {
        -moz-appearance: textfield;
    }
    .input-container input[type="number"]::-webkit-outer-spin-button,
    .input-container input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .form-wrap {
        margin-bottom: 10px;
        position: relative;
    }
    .form-label-outside {
        color: white;
        display: block;
        margin-bottom: 5px;
    }
    .input-container {
        display: flex;
        align-items: center;
    }
    .input-container input {
        border: none;
        /* border-bottom: 1px solid #ccc; */
        padding: 5px 0px 5px 0px;
        font-size: 14px;
        width: 38px;
        text-align: center;
        /* margin-right: 5px; */
    }
    .input-container .placeholders {
        /* color:white; */
        position: relative;
        right: 72px;
        color: black;
        display: inline-block;
        width: auto;
        padding: 0px 8px;
        /* background: white; */
    }
    .tj-input-form .input-form label {
        font-size: 15px;
        font-weight: 500;
        color: var(--tj-white-color);
        margin-bottom: 10px;
    }
    .err-style {
        color: red;
    }
    .error-message {
        display: none;
        color: red;
    }
    .error-field {
        border: 2px solid red;
    }
    .separator {
        margin: 0px 0px 0px 0px;
        font-size: 14px;
    }
    .separators {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }
    .separators-w {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }
    .service-link {
        display: block;
        text-decoration: none;
        color: white;
    }
    .service-link:hover {
        text-decoration: none; /* Ensure no underline on hover */
    }
    .service-link:hover .tj-service-item {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
    }
    .service-link:hover .service-content {
        color: #8FC445; /* Change text color on hover */
    }
    .service-link:hover .icon-box i {
        color: white; /* Change icon color on hover */
    }
    .project-link {
        display: block;
        position: relative; /* Ensure it covers the .tj-project-item */
        text-decoration: none;
        color: inherit;
        width: 100%;
        height: 100%;
    }
    .tj-project-item {
        position: relative;
        overflow: hidden; /* Ensure content does not overflow */
    }
    .tj-project-item img {
        width: 100%;
        height: auto; /* Maintain aspect ratio */
        display: block;
    }
</style>
<!-- Preloader start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <!-- <div class="spinner">
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
            </div> -->
    </div>
    <!-- <button class="tj-primary-btn">Cancel Preloader</button> -->
</div>
<!-- Preloader end -->
<!--=========== Slider Section Start =========-->
<section class="tj-slider-section">
    <div class="slider_shape"><img src="{{ asset('frontend/images/banner/home-underline.png') }}" alt="Image" />
    </div>
    <div class="swiper sc-slider-1" data-autoplay="5000">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/DSF.webp') }}">
                <div class="container">
                    <div class="slider-content p-z-idex">
                        <h1 class="slider-title">Trustworthy, Efficient, And Cost-effective Auto Transport Solutions</h1>
                        <div class="slider-desc">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn ms-4 " href="{{ route('quote.form.combine') }}"
                                >
                                Get Quote<i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </div>
            <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-2.webp') }}">
                <div class="container">
                    <div class="slider-content p-z-idex">
                        <h4 class="slider-title">Trustworthy, Efficient and Cost-Effective Transportation Services</h4>
                        <div class="slider-desc">
                            ShipA1 has pledged to provide all-in-one Heavy Equipment transportation solutions to all its
                            customers and seeks your trust in return of our services.
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn ms-4 " href="{{ route('quote.form.combine') }}"
                                >
                                Get Quote<i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </div>
            <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/freight-banner-home.webp') }}">
                <div class="container">
                    <div class="slider-content p-z-idex">
                        <h4 class="slider-title">Trustworthy, Efficient and Cost-Effective Logistic Services</h4>
                        <div class="slider-desc">
                            ShipA1 has pledged to provide all-in-one Freight Shipping solutions to all its
                            customers and seeks your trust in return of our services.
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn ms-4 mt-4" href="{{ route('quote.form.combine') }}"
                                >
                                Get Quote<i class="flaticon-right-1"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </div>
        </div>
        <div class=""></div>
    </div>
    <div class="tj-service-icon-box">
        <ul class="list-gap">
            <li>
                <div class="service-item">
                <a href="{{ route('vehicleTransportDetail') }}" class="service-link">
                    <div class="tj-service-icon">
                        <div class="service-icon">
                            <i class="fa-light fa-car-side fa-2xs"></i>
                        </div>
                        <div class="sub-title">
                            <span>VEHICLE <br>TRANSPORTATION</span>
                        </div>
                    </div>
                    <div class="service-arrow">
                        <a href="{{ route('vehicleTransportDetail') }}" >
                            <i class="fa-light fa-arrow-right"></i>
                        </a>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="service-item">
                <a href="{{ route('heavy-transport-detail') }}" class="service-link">
                    <div class="tj-service-icon">
                        <div class="service-icon">

                            <i class="fa-light fa-tractor fa-xs"></i>
                        </div>
                        <div class="sub-title">
                            <span>HEAVY <br>TRANSPORTATION </span>
                        </div>
                    </div>
                    <div class="service-arrow">
                        <a href="{{ route('heavy-transport-detail') }}" > <i
                                class="fa-light fa-arrow-right"></i></a>
                    </div>
                    </a>
                </div>
            </li>
            <li>
                <div class="service-item">
                <a href="{{ route('freighttransport-detail') }}" class="service-link">
                    <div class="tj-service-icon">
                        <div class="service-icon">

                            <i class="fa-light fa-truck fa-xs"></i>
                        </div>
                        <div class="sub-title">
                            <span>FREIGHT <br>TRANSPORTATION</span>
                        </div>
                    </div>
                    <div class="service-arrow">
                        <a href="{{ route('freighttransport-detail') }}" > <i
                                class="fa-light fa-arrow-right"></i></a>
                    </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--=========== Slider Section End =========-->
<!--=========== Testimonial Section Start =========-->
@include('partials.reveiw-site')
<!--=========== Testimonial Section End =========-->
<!--=========== Testimonial Section Start =========-->
<!--=========== Service Section Start =========-->
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
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                <a href="{{ route('vehicleTransportDetail') }}" class="service-link">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/CAR-CARD.webp') }}">
                        <div class="icon-box">
                            <i class="fa-light fa-car-side fa-2xs"></i>
                            <!-- <i class="flaticon-air-freight"></i> -->
                        </div>
                        <div class="service-content">
                            <h4>VEHICLE TRANSPORTATION</h4>
                            <p>Everything you need to know about 100% insured
                                and secured vehicle transportation.</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-secondary btn-sm ms-2 mt-2" href="{{ route('vehicleTransportDetail') }}" style="background: #8fc445;color: white;">
                                    Read More<i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                <a href="{{ route('heavy-transport-detail') }}" class="service-link">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/HEAVY-CARD.webp') }}">
                        <div class="icon-box">
                            <i class="fa-light fa-tractor fa-2xs"></i>
                            <!-- <i class="flaticon-cargo-ship-1"></i> -->
                        </div>
                        <div class="service-content">
                            <h4>HEAVY TRANSPORTATION</h4>
                            <p>Ship A1 is your trusted partner for safely and
                                efficiently handling the toughest transportation challenges.</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-secondary btn-sm ms-2 mt-2" href="{{ route('heavy-transport-detail') }}" style="background: #8fc445;color: white;">
                                    Read More<i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <a href="{{ route('freighttransport-detail') }}" class="service-link">
                    <div class="tj-service-item"
                        data-bg-image="{{ asset('frontend/images/service/FREIGHT-CARD.webp') }}">
                        <div class="icon-box">
                            <i class="fa-light fa-truck fa-2xs"></i>
                            <!-- <i class="flaticon-delivery-van"></i> -->
                        </div>
                        <div class="service-content">
                            <h4>FREIGHT TRANSPORTATION</h4>
                            <p>Unlock the door to smooth freight logistic
                                transportation with Ship A1.</p>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-outline-secondary btn-sm ms-2 mt-2" href="{{ route('freighttransport-detail') }}" style="background: #8fc445;color: white;">
                                    Read More<i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--=========== Service Section End =========-->
<!--=========== Car Cta Section Start =========-->
@include('partials.car-cta-section')
<!--=========== Car Cta Section End =========-->
<!--=========== About Section Start =========-->
<section class="tj-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> A1 Transportation Company</span>
                        <h2 class="title">What Makes Us Dependable?</h2>
                        <p class="desc">
                            Among all the shipping companies out there, factors that make us stand out from the rest are:
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                <!-- <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" /> -->
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Our Values</h5>
                            </div>
                        </div>
                        <p class="desc">
                            We are a licensed Transportation company with high moral values and have attained customer
                            satisfaction through their remarks on esteemed platforms.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <i class="fa-light fa-bell-concierge fa-2xl" style="color: #8fc445;"></i>
                                <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Scope of Services</h5>
                            </div>
                        </div>
                        <p class="desc">
                            Range of vehicles, we ship, is not limited to just conventional cars and motorbikes.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <i class="fa-light fa-shield-heart fa-2xl" style="color: #8fc445;"></i>
                                <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Safety Is Our Priority</h5>
                            </div>
                        </div>
                        <p class="desc">
                            No matter which mode of transportation you use, ShipA1 assures its customers, atmost security
                            to their assets.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <i class="fa-light fa-handshake fa-2xl" style="color: #8fc445;"></i>
                                <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Skilful & Devoted Staff</h5>
                            </div>
                        </div>
                        <p class="desc">
                            Our team is loaded with highly experienced professionals of both customer dealing and vehicle
                            handling.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-right" data-sal-duration="800">
                <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                    <div class="tj-icon-box2 text-center">
                        <div class="number-icon">
                            <i class="flaticon-in-person"></i>
                        </div>
                        <div class="about-number">
                            <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                            <p class="desc">Satisfied Client</p>
                        </div>
                    </div>
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/about/about-3.webp') }}"
                            alt="Image" />
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/about/about-5.webp') }}"
                        alt="Image" />
                    <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                        alt="Image" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== About Section End =========-->
@include('partials.cta-section')
<section class="tj-step-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape"> Working Process</span>
                <h2 class="title">We Follow Great Process</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-step-area">
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div>
                                <i class="flaticon-economics"></i>
                                <span class="number"> 01.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title">Online Quote</h4>
                                <span> Get an instant online quote from our website or call our agent.</span>
                            </div>
                        </div>
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div>
                                <i class="flaticon-pick"></i>
                                <span class="number"> 02.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title">Confirm Order</h4>
                                <span> Confirm your order over the phone and fill out the booking form.</span>
                            </div>
                        </div>
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div>
                                <i class="flaticon-tracking"></i>
                                <span class="number"> 03.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title">Track Shipment
                                </h4>
                                <span>  Track your shipment by your unique order id number.</span>
                            </div>
                        </div>
                        <div class="tj-step-item text-center">
                            <div class="step-icon-box">
                                <div class="step-box"></div>
                                <i class="flaticon-delivery-van"></i>
                                <span class="number"> 04.</span>
                            </div>
                            <div class="step-content">
                                <h4 class="title">Shipment Delivery
                                </h4>
                                <span> Your shipment reached to their drop-off location.</span>
                            </div>
                            <div class="stp-arrow">
                                <i class="fa-regular fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-home">
    <div class="container">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1 ">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">Get Instant quote</span>
                        <h2 class="title">Get an instant quote in few simple steps</h2>
                        <p class="desc">ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-courier"></i>
                                <h6 class="title">Optimized Cost</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-cargo"></i>
                                <h6 class="title">Delivery on Time</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-agreement"></i>
                                <h6 class="title">Safety &amp; Reliability</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                @include('partials.multi-form')
            </div>
        </div>
    </div>
</section>
<!--=========== Feature Section End =========-->
<!--=========== Team Section Start =========-->
<section class="tj-team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Our Services</span>
                    <h2 class="title">Pick Your Transport Type</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Team Section End =========-->
<!--=========== Project Section Start =========-->
<section class="tj-project-section">
    <div class="tj-project-slider owl-carousel">
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.car-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/9.webp') }}" alt="Car Shipping Service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.car-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">CAR</span>
                <h4><a href="{{ route('frontend.pages.services.car-service') }}" 
                        class="title-link">Car Shipping Service</a></h4>
            </div>
        </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.bike-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/62.webp') }}" alt="Motorcycle Shipping Service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.bike-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">MOTORCYCLE</span>
                <h4><a href="{{ route('frontend.pages.services.bike-service') }}" 
                        class="title-link">Motorcycle Shipping Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.heavy-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/1.webp') }}" alt="Heavy Transportation Services" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.heavy-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">HEAVY EQUIP</span>
                <h4><a href="{{ route('frontend.pages.services.heavy-service') }}" 
                        class="title-link">Heavy Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.roro-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/roro-slider-image.webp') }}" alt="Roro Shipping" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.roro-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">RORO</span>
                <h4><a href="{{ route('frontend.pages.services.roro-service') }}" 
                        class="title-link">Roro Shipping International</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.golf-cart-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/4.webp') }}" alt="Golf Cart Transport Service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.golf-cart-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Golf Cart</span>
                <h4><a href="{{ route('frontend.pages.services.golf-cart-service') }}" 
                        class="title-link">Golf Cart Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.atv-utv-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/atv,utv-1.webp') }}" alt="ATV/UTV Transport Service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.atv-utv-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">ATV/UTV</span>
                <h4><a href="{{ route('frontend.pages.services.atv-utv-service') }}" 
                        class="title-link">ATV/UTV Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.construction-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/Commercial--.webp') }}" alt="Construction Transport Service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.construction-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">CONSTRUCTION</span>
                <h4><a href="{{ route('frontend.pages.services.construction-service') }}" 
                        class="title-link">Construction Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.farm-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/10.webp') }}" alt="Farm equipment Transport service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.farm-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">FARM</span>
                <h4><a href="{{ route('frontend.pages.services.farm-service') }}" 
                        class="title-link">Farm Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.excavator-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/excavator-pickup.webp') }}" alt="excavator Transport service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.excavator-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">EXCAVATOR</span>
                <h4><a href="{{ route('frontend.pages.services.excavator-service') }}" 
                        class="title-link">Excavator Shipping Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.commercial-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/commercial-truck.webp') }}" alt="commercial transport service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.commercial-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">TRUCKS</span>
                <h4><a href="{{ route('frontend.pages.services.commercial-service') }}" 
                        class="title-link">Truck Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.reefer-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/reefer-truck-1.webp') }}" alt="Reefer Transport Service" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.reefer-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Reefer</span>
                <h4><a href="{{ route('frontend.pages.services.reefer-service') }}" 
                        class="title-link">Reefer Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.hazmat-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/7.webp') }}" alt="Hazmat Transportation Services" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.hazmat-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Hazmat</span>
                <h4><a href="{{ route('frontend.pages.services.hazmat-service') }}" 
                        class="title-link">Hazmat Transportation Service</a></h4>
            </div>
            </a>
        </div>
        <div class="tj-project-item">
        <a href="{{ route('frontend.pages.services.dryvan-service') }}" class="project-link">
            <img src="{{ asset('frontend/images/project/5.webp') }}" alt="Dry van Transportation Services" />
            <div class="arrow-icon">
                <a href="{{ route('frontend.pages.services.dryvan-service') }}" > <i
                        class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">Dry van</span>
                <h4><a href="{{ route('frontend.pages.services.dryvan-service') }}" 
                        class="title-link">Dry van Transportation Service</a></h4>
            </div>
            </a>
        </div>
    </div>
</section>
<!--=========== Project Section End =========-->
<!--=========== Map Section Start =========-->
<section class="tj-map-section">
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s">
        </iframe>
    </div>
    <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Contact us
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <ul class="list-gap">
                            <li><i class="flaticon-placeholder"></i><a
                                href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+210301344,+USA/@39.4960629,-76.6603247,17z/data=!3m2!4b1!5s0x89c8128abe53a693:0xccf0052e1abf77f2!4m6!3m5!1s0x89c81261c3eae243:0x81e995e93023e64a!8m2!3d39.4960629!4d-76.6603247!16s%2Fg%2F11scxbqcdd?entry=ttu">201 International Cir STE 230, Hunt Valley,
                                    MD 21030-1344</a></li>
                            <li>
                                <i class="flaticon-mail"></i><a href="mailto:shawntransport@shipa1.com">
                                    shawntransport@shipa1.com</a>
                            </li>
                            <li>
                                <i class="flaticon-call"></i><a href="tel:1 (844) 474-4721"> 1 (844) 474-4721</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Map Section End =========-->
<!--=========== Counter Section Start =========-->
<section class="tj-counter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="tj-counter-area">
                    <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="300">
                        <div class="counter-icon">
                            <i class="fa-light fa-car-side mt-4 fa-2xs"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="318">0</span>k+</div>
                            <span class="sub-title">Succesful Shipment</span>
                        </div>
                    </div>
                    <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="400">
                        <div class="counter-icon">
                            <i class="flaticon-courier"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                            <span class="sub-title">Satisfied Clients</span>
                        </div>
                    </div>
                    <div class="counter-item d-flex align-items-center" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="500">
                        <div class="counter-icon">
                            <i class="flaticon-worldwide"></i>
                        </div>
                        <div class="counter-number">
                            <div class="tj-count"><span class="odometer" data-count="270,092">0</span>k</div>
                            <span class="sub-title">Miles Covered</span>
                        </div>
                    </div>
                    <!-- <div
                                class="counter-item d-flex align-items-center"
                                data-sal="slide-up"
                                data-sal-duration="800"
                                data-sal-delay="500">
                                <div class="counter-icon">
                                    <i class="flaticon-worldwide"></i>
                                </div>
                                <div class="counter-number">
                                    <div class="tj-count"><span class="odometer" data-count="2709">0</span></div>
                                    <span class="sub-title">Worldwide Clients</span>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Counter Section End ========= -->
<!--=========== Blog Section Start =========-->
@include('partials.blog-slider')
<!--=========== Blog Section End =========-->
<!--=========== Testimonial Section Start =========-->
@include('partials.reveiw-detail')
<!--=========== Testimonial Section End =========-->
<!--=========== Newsletter Section Start =========-->
@include('partials.newsletter')
<!--=========== Newsletter Section End =========-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Toggle dropdown on button click
    dropdownToggle.addEventListener('click', function (event) {
        dropdownMenu.classList.toggle('show');
        event.stopPropagation(); // Prevent click from bubbling up to the document
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show'); // Hide the dropdown
        }
    });
});
</script>
@endsection
