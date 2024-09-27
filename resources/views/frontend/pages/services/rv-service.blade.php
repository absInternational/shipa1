@extends('frontend.layouts.app')
@section('title', 'RV Transport - One State to Another State | ShipA1')
@section('meta_description', 'RV transport services in all over the USA, Ship your desired vehicle
from one state to another state in one click - ShipA1.')
@section('content')
<Style>
    .text-c-1 {
        background: #183c46eb;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
    }
    .why-box {
    border-radius: 12px;
    padding: 20px 0px;
    background: #f8f9fa9c;
    }
    .card- {
    background: #ffffff;
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 15px;
    box-shadow:0 5px 30px 0 rgba(35,43,54,.3);
        }
    .services {
    text-align: center;
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    border-radius: 12px;
    padding: 10px 30px 0px 30px;
    /* background-color: #9d9e9f14;*/
    }
    .services-h1 {
    text-align:center;
    /* text-decoration: overline; */
    margin-bottom: 50px;
    /* color: #ffffff; */
    }
    .why-choose-us-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adds a semi-transparent overlay */
        z-index: 0; /* Ensures it appears on top of the background */
    }

    .why-choose-us-slider {
        background: url('../../img/autoauction banner 2.webp');
        padding: 60px 0;
        background-color: #f9f9f9;
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1; /* Keeps the background behind the ::before element */
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        animation: fadeIn 1s ease-in-out;
    }

    .section-description {
        text-align: center;
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto 30px;
        opacity: 0.8;
        animation: fadeIn 1.2s ease-in-out;
    }

    .slide {
        min-width: 33.333%;
        box-sizing: border-box;
        padding: 20px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        border: 1px solid rgba(221, 221, 221, 0.6);
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .slide:hover {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
        background-color: rgba(255, 255, 255, 1);
    }

    .slide i {
        margin-bottom: 20px;
        color: #666;
        font-size: 3rem;
        transition: color 0.3s ease;
    }

    .slide:hover i {
        color: #8FC445;
    }

    .slide-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
        letter-spacing: 0.3px;
        transition: color 0.3s ease;
    }

    .slide:hover .slide-title {
        color: #8FC445;
    }

    .slide-text {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
        opacity: 0.9;
    }
</Style>
<!--========== blog details Start ==============-->
<section class="tj-choose-us-section-service-rv">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">RV TRANSPORT SERVICES</h2>
                        <p class="desc-2">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </p>
                    </div>
                </div>
            </div>
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
            <div class="col-lg-6 mt-0" data-sal="slide-down" data-sal-duration="800">
                @include('partials.multi-form-heavy')
            </div>
        </div>
    </div>
</section>
{{-- @include('partials.reveiw-site') --}}
@include('partials.reveiw-small-detail') 
{{-- <section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">Shipping Your
            RV with ShipA1 Transport</h2>
    </div>
</section> --}}
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> RV Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Discover Top-Notch RV Shipping with Ship A1</h3>
                        <p class="desc">
                            If you are someone who loves traveling then this might be the best option for you! RVs are commonly
                             shipped by people who love spending time in their RVs surrounded by nature If this is what you are 
                             looking for then there’s no better company than <a class="pp-link-2"
                             href="{{ route('welcome') }}"> Ship A1 Transport!  </a> <br>
                            We not only provide the shipping of RVs, but we also ensure you are being offered and provided the
                             best services along with a cost-effective budget. Ship A1 presents you with the best RV 
                             transportation tailored to the needs and expectations of our customers, with a variety of 
                             options, exclusive deals, and discounts as well as different modes of shipping you can choose 
                             easily from, we have got what it takes. Here, we will delve into the details of RV Shipping and
                              what services are provided for RVs by Ship A1 Transport!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/RV-2.webp') }}" alt="Image">
                    </div>
                </div>
                <!-- <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                </div> -->
            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/RV-1.webp') }}" alt="Image">
                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">What is RV Shipping ?</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">What is RV Shipping ?</h3>
                        <p class="desc">
                            Just like any other shipping of vehicles, RV shipping includes transporting your
                            recreational vehicle
                            from one state to another with a 100% guarantee of protection and timely delivery! This
                            service is
                            usually used by people who need to move their vehicles for multiple reasons, like
                            relocation, going
                            on trips and vacations, getting their RV removed, or even selling and purchasing. <br>
                            We have an entire variety of RVs ready to be shipped, ranging from
                        <ul class="list-inline">
                            <li class="list-inline-item">&bull; Motorhomes</li>
                            <li class="list-inline-item">&bull; Travel Trailers</li>
                            <li class="list-inline-item">&bull; Class B Motorhome</li>
                            <li class="list-inline-item">&bull; Class C Motorhome</li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">&bull; Fifth Wheels</li>
                            <li class="list-inline-item">&bull; Camper Vans</li>
                            <li class="list-inline-item">&bull; Truck Camper</li>
                            <li class="list-inline-item">&bull; Class A Motorhome</li>
                        </ul>
                        <ul class="list-inline">
                            <li class="list-inline-item">&bull; Folding Tent Trailer</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.cta-section')
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Types of Shipping Methods We Use</span> --}}
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Seamless RV Shipping with Customized Solutions</h3>
                        <p class="desc">Your go-to company for RV Transportation should be Ship A1! A leading transportation
                             company providing access to a number of the best, most affordable, and most convenient ways of RV 
                             shipping. These full services allow you the freedom to choose the method most suitable for your 
                             requirements, be it for cost economy, convenience, or speed. 
                            Want to see rates and shop around to find the right solution for your RV transport? <a
                            class="pp-link-2" href="{{ route('frontend.forms.rv_transport') }}"> Get an online 
                            quote now.</a> Take the first step toward a seamless shipping experience with Ship A1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/RV-3.webp') }}" alt="Image">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/RV-4.webp') }}" alt="Image">
                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">why Ship A1 Transport is your ideal shipping
                            partner!</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">why Ship A1 Transport
                             is your ideal shipping partner!</h3>
                        <p class="desc">
                            All of these factors ensure your vehicle is transported smoothly and efficiently, whether
                            you are
                            transporting, relocating, removing, or buying/selling an RV, you can trust Ship A1 Transport
                            to
                            deliver your vehicle safely and securely to its destination.
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <ul class="list-unstyled ps-0">
                                        <li>★ Specialization in RV Transport</li>
                                        <li>★ Customized Shipping Solutions</li>
                                        <li>★ 100% Insured Vehicles</li>
                                        <li>★ Quality and Professional Service</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <ul class="list-unstyled ps-0">
                                        <li>★ Nationwide Coverage</li>
                                        <li>★ Affordable Rates</li>
                                        <li>★ Customized Shipping Solutions</li>
                                        <li>★ Timely Delivery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tj-theme-button text-start mt-2">
                            <a class="tj-transparent-btn" href="" target="_blank">
                                Get Quote<i class="flaticon-right-1"></i>
                            </a>
                        </div> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                Advanced Services for RV Transportation</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Flatbed Trailer</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Why? Because of its professional and stable shipping process, this method is used for RVs
                            especially large-sized motorhomes and travel trailers. In this method, the RV is loaded onto
                            a
                            flatbed trailer and secured using straps or chains to prevent movement during transit.
                            Flatbed trailers
                            offer versatility, as they can accommodate various sizes and types of RVs.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Towing Service</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            For smaller-sized or lightweight RVs, this mode of shipping is best preferred. The process
                            is very
                            simple, a towing service will attach the RV to a specialized towing vehicle, such as a
                            pickup truck
                            or SUV, using a hitch or tow bar.<br> The towing vehicle then transports the RV to its
                            destination,
                            following all safety regulations and traffic laws.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 sal-animate text-align-center pt-4 mt-4" data-sal="slide-left"
                data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Drive Away RV Shipping</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            This method is super convenient especially if you are unable to drive your RV yourself, this
                            method involves hiring a professional driver to take your RV to its designated location!
                            What’s the process?
                            So basically, your RV will be picked up from its pickup location, It will be inspected for
                            any damages, and then driven by the driver to its drop-off location.
                            Now that these are covered let's talk about why you should trust Ship A1 to be your reliable
                            and trusted partner!
                            Whenever you are choosing a shipping company for your vehicle it is extremely essential to
                            do a background check and proper research beforehand, this goes for all companies, it not
                            only guarantees a positive experience but also guarantees 200% reliability, transparency,
                            and quality service.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-RV-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">RV Preparation and Documentation</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Clean & Inspect RV</h5>
                        <p class="card-text text-dark">Ensure your RV is clean inside and out,
                            and remove any dirt, debris, and personal belongings that have a risk of damaging your vehicle further.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Prepare Necessary Documentation</h5>
                        <p class="card-text text-dark">Make sure the necessary documents of your RV like registration papers,
                            insurance certificates, or any permits and licenses required.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Track your Ride</h5>
                        <p class="card-text text-dark">If you are someone who constantly has to keep updates on their vehicle, 
                            worry not! Contact Ship A1 for timely updates, or you can even track your ride online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-cta-section-two">
    <div class="tj_cta_image-4 w-100 h-50"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="tj-cta-content d-flex justify-content-around" style="bottom: 40px; z-index: 3;">
                    <div class="tj-section-heading ">
                        <span class="sub-title active-shape2"> Support Center 24/7 </span>
                        <p class="text-white mt-2">Feel Free To Contact Us For Additional Info</p>
                    </div>
                    <div class="tj-theme-button mt-2">
                        <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                            Get Support<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- <section class="tj-about-section-five">
            <div class="container">
                <div class="row services ">
                    <h1 class="services-h1">WHY SHIP A1 TRANSPORT IS YOUR IDEAL SHIPPING PARTNER!</h1>
                    <div class="col-12 col-md-12 mb-4">
                        <div class="card- bg-white  h-100">
                            <div class="card-body">
                                <h5 class="card-title text-dark">All of these factors ensure your vehicle is transported smoothly and efficiently</h5>
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-unstyled ps-0">
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Specialization in RV Transport</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Online Quotes</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ 100% Insured Vehicles</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Quality and Professional Service</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Nationwide Coverage</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Affordable Rates</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Customized Shipping Solutions</li></span>
                                        <span class="badge text-white text-c-1 fs-6 badge-success mb-2 p-2">   <li>★ Timely Delivery</li></span>
                                        </ul>
                                    </div>
                                    
                                </div>
                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
</section> -->
{{-- <section class="tj-choose-us-section-service-rv">
    <div class="container why-box">
        <div class="row">
            <div class="col-lg-8 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="about-content-two">
                    <div class="tj-section-heading">

                        <h2 class="title-2">Why Choose Us?</h2>
                        <p class="desc-2">
                            We have a distinct approach when it comes to the philosophy of business.<br>Our belief in
                            innovation & unique business practices differentiate us & here are the reasons why you must
                            choose us:
                        </p>
                    </div>
                    <div class="content-box d-flex align-items-center border-top">
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                            </div>
                            <p class="desc-2">★ Offering wide range of shipping methods tailored to various needs,
                                including vehicles, heavy equipment, and freight across the US.</p>
                        </div>
                        <div class="tj-icon-box">
                            <p class="desc-2">★ Providing top-notch quality service with a well-equipped and
                                professional team dedicated to meeting customer expectations.</p>
                        </div>
                        <div class="tj-icon-box pb-4">

                            <p class="desc-2">★ Ensuring timely delivery of shipments, emphasizing reliability and
                                efficiency in logistics.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">
                        <div class="tj-icon-box mr-3">

                            <p class="desc-2">★ Focusing on customer satisfaction by catering to their needs and
                                maintaining loyalty through personalized service.</p>
                        </div>
                        <div class="tj-icon-box">

                            <p class="desc-2">★ Prioritizing safe and secure transportation, with a commitment to
                                maintaining customer trust and peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                        alt="Image">
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="tj-choose-us-section-service-rv">
    <div class="container why-box">
        <div class="row">
            <div class="col-lg-8 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="about-content-two">
                    <div class="tj-section-heading">

                        <h2 class="title-2">Why Choose Us?</h2>
                        <p class="desc-2">
                            We have a distinct approach when it comes to the philosophy of business.<br>Our belief in
                            innovation & unique business practices differentiate us & here are the reasons why you must
                            choose us:
                        </p>
                    </div>

                    <div class="content-box d-flex align-items-center border-top">

                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">

                            </div>
                            <p class="desc-2">★ Offering wide range of shipping methods tailored to various needs,
                                including vehicles, heavy equipment, and freight across the US.</p>
                        </div>

                        <div class="tj-icon-box">

                            <p class="desc-2">★ Providing top-notch quality service with a well-equipped and
                                professional team dedicated to meeting customer expectations.</p>
                        </div>
                        <div class="tj-icon-box pb-4">

                            <p class="desc-2">★ Ensuring timely delivery of shipments, emphasizing reliability and
                                efficiency in logistics.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">

                        <div class="tj-icon-box mr-3">

                            <p class="desc-2">★ Focusing on customer satisfaction by catering to their needs and
                                maintaining loyalty through personalized service.</p>
                        </div>
                        <div class="tj-icon-box">

                            <p class="desc-2">★ Prioritizing safe and secure transportation, with a commitment to
                                maintaining customer trust and peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                        alt="Image">

                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="tj-faq-section tj-faq-page pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> How It’s Work</span>
                    <h2 class="title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What sorts of RVs can be transported?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong> From motor homes to travel trailers, fifth-wheel trailers, and camper vans
                                        and many more.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I prepare my RV for shipping?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Secure loose components, turn off propane tanks, remove all personal items,
                                        ensure the tire pressure is okay, and keep the RV clean and locked up.
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How is the cost of RV transport determined?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The actual fee will depend on the size and weight of the RV, the distance of
                                        transportation, and any special needs. For an accurate quote, call 1(844)
                                        474-4721.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false"
                                    aria-controls="collapsefour">
                                    How do I get a quote for RV transportation with ShipA1?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Give ShipA1 the specifics, including the size, weight, and condition of the RV as well as the locations
                                         for collection and delivery, to receive an estimate for RV transportation. With this data, ShipA1 will
                                          provide you with an accurate and affordable price.</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        {{-- <h2 class="section-title">Why Choose Us?</h2>
        <p class="section-description">Discover the benefits of choosing ShipA1 through our features.</p> --}}
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">24/7 Customer Support: Our customers are our top priority, which is why we offer
                         24/7 support to our customers to erase any doubt and offer tailored solutions to their needs and concerns.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">On-Time Delivery</h3>
                    <p class="slide-text">At Ship A1 we keep in mind that time is equally valuable for both our customers and our company which is why we 
                        ensure the quick delivery of your cargo as scheduled and in perfect condition.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Experienced Professionals</h3>
                    <p class="slide-text">Our highly skilled and professional carriers and staff are experts in what they do, which is handling, maintaining,
                         and easily loading your vehicle on our trailers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking</h3>
                    <p class="slide-text">Making it easy for our customers to easily track their vehicle’s current and updated status anytime and anywhere.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Refrigeration Technology</h3>
                    <p class="slide-text">Our fully equipped trailers maintain precise temperature control
                         suitable for your cargo throughout the journey</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Blog Section Start =========-->
@include('partials.blog-slider')
<!--=========== Blog Section End =========-->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="path/to/jquery.min.js"></script> --}}
{{-- <script src="path/to/owl.carousel.min.js"></script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#category').change(function() {
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
</script> --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io/json')
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(ipinfo) {
                        var countryCode = "us";
                        callback(countryCode);
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation etc.
        });
    });
</script> --}}
{{-- <script>
    document.querySelectorAll('input[type="text"]').forEach((input) => {
        input.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, "");
        });
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        $(document).on('change', '#available_at_auction', function() {
            if ($(this).is(':checked')) {
                $('.div-link').show();
            } else {
                $('.div-link').hide();
            }
        });

        $(document).on('change', '#modification', function() {
            if ($(this).is(':checked')) {
                $('.div-modify_info').show();
            } else {
                $('.div-modify_info').hide();
            }
        });
    });
</script> --}}
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1"; // Autoplay the video
    }
</script>
{{-- <script>
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

        function addNewVehicle() {
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label> Year</label>
                    <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
            var currentYear = {
                {
                    date('Y')
                }
            };
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }

            newVehicleHtml +=
                `</select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label>Make</label>
                    <select class="nice-select make" name="make[]" required id="make"> <option value="" disabled selected>Select Make</option>`;



            newVehicleHtml += `
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select model-div">
                    <label>Model</label>
                    <select class="nice-select model" name="model[]" id="model" required></select>`;

            newVehicleHtml +=
                `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

            newVehicleHtml += `
                        </div>
                        </div>
                        </div>
                        </div>
                        `;

            $('.vehicles-container').append(newVehicleHtml);
        }

        function addOtherVehicle() {
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
                    <div class="col-md-4">
                    <div class="input-form tj-select">
                    <label> Year</label>
                    <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
            var currentYear = {
                {
                    date('Y')
                }
            };
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }

            newVehicleHtml +=
                `</select>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="input-form tj-select">
                            <label>Make</label>
                            <input type="text" id="make" name="make[]"
                            placeholder="Enter Make" required="" />
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="input-form tj-select model-div">
                            <label>Model</label>
                            <input type="text" id="model" name="model[]" placeholder="Enter Model"
                            required="" />`
            newVehicleHtml +=
                `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

            newVehicleHtml += `</div>
                            </div>
                            </div>
                            </div>
                            `;

            $('.vehicles-container').append(newVehicleHtml);
        }

        $(document).on('click', '.addVehicleBtn', function() {
            if ($('#tabSelector').val() == 'Car') {
                addNewVehicle();
            } else {
                addOtherVehicle();
            }
        });

        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });

        $(document).ready(function() {
            $(document).on('change', '.vehicle-year, .vehicle-make', function() {
                var year = $('.vehicle-year').val();
                var makeId = $('.vehicle-make').val();
                if (year && makeId) {
                    getModel(year, makeId);
                }
            });

            function getModel(year, makeId) {
                console.log('yes inn');
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
                            selectOptions += '<option value="' + model + '">' +
                                model +
                                '</option>';
                        });
                        selectOptions += '</select>';
                        modelsDropdown.html(selectOptions);

                        console.log('yesssss', response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script> --}}
{{-- <script>
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

        // Optionally, you can also prevent the user from typing non-numeric characters.
        $('#feet-input, #inches-input').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    $(document).ready(function() {
        $('#inches-input1').on('input', function() {
            if (this.value > 11) {
                this.value = 11;
            } else if (this.value < 0) {
                this.value = 0;
            }
        });

        // Optionally, you can also prevent the user from typing non-numeric characters.
        $('#feet-input1, #inches-input1').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    $(document).ready(function() {
        $('#inches-input2').on('input', function() {
            if (this.value > 11) {
                this.value = 11;
            } else if (this.value < 0) {
                this.value = 0;
            }
        });

        // Optionally, you can also prevent the user from typing non-numeric characters.
        $('#feet-input, #inches-input2').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        function showError(field, message) {
            $('#' + field).addClass('error-field');
            $('#' + field + '-error').text(message).show();
        }

        function hideError(field) {
            $('#' + field).removeClass('error-field');
            $('#' + field + '-error').hide();
        }

        // Move to Step 2
        $('#step1_next').click(function() {
            var isValid = true;

            if (!$('#pickup-location').val()) {
                showError('pickup-location', 'This field is required.');
                isValid = false;
            } else {
                hideError('pickup-location');
            }

            if (!$('#delivery-location').val()) {
                showError('delivery-location', 'This field is required.');
                isValid = false;
            } else {
                hideError('delivery-location');
            }

            if (isValid) {
                $('#step1').hide();
                $('#step2').show();
            }
        });

        // Return to Step 1
        $('#step2_previous').click(function() {
            $('#step2').hide();
            $('#step1').show();
        });

        // Move to Step 3
        $('#step2_next').click(function() {
            var isValid = true;

            if (!$('#tabSelector').val()) {
                showError('tabSelector', 'This field is required.');
                isValid = false;
            } else {
                hideError('tabSelector');
            }

            if (isValid) {
                $('#step2').hide();
                $('#step3').show();
            }
        });

        // Return to Step 2
        $('#step3_previous').click(function() {
            $('#step3').hide();
            $('#step2').show();
        });
    });
</script> --}}
{{-- <script>
    function updateSuggestions(inputField, suggestionsList) {
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

                $.each(response, function(index, suggestion) {
                    var listItem = $("<li>").text(suggestion).click(function() {
                        inputField.val(suggestion);
                        suggestionsList.css("display", "none");
                    });
                    suggestionsList.append(listItem);
                });
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }

    $("#pickup-location, #delivery-location").keyup(function() {
        var inputField = $(this);
        var suggestionsList = inputField.siblings(".suggestionsTwo");
        suggestionsList.css("display", "block");
        if (inputField.val() === "") {
            suggestionsList.css("display", "none");
        }
        updateSuggestions(inputField, suggestionsList);
    });
</script> --}}
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
            console.log('yes inn');
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

                    console.log('yesssss', response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script> --}}
@endsection
