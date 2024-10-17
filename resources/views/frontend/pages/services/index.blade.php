@extends('frontend.layouts.app')
@section('content')
<style>
    /* Container Styling */
    .tj-service-section-four {
        background-color: #f8f9fa;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    /* Service Item */
    .service-item-three {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        overflow: hidden;
        position: relative;
        margin-bottom: 30px;
        cursor: pointer;
    }
    .service-item-three:hover {
        transform: translateY(-10px);
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
    }
    /* Overlay Effect */
    .service-item-three .overlay {
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(6 46 57 / 59%);
        transition: top 0.3s ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }
    .service-item-three:hover .overlay {
        top: 0; /* Slides down from the top */
    }
    /* Service Image */
    .service-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease-in-out;
    }
    .service-item-three:hover .service-image img {
        transform: scale(1.05);
    }
    /* Service Content */
    .service-content-1 {
        padding: 20px;
        text-align: center;
    }
    .service-content-1 h4 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .service-content-1 h4 a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }
    /* Animation */
    [data-sal="slide-up"] {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }
    [data-sal="slide-up"].sal-animate {
        opacity: 1;
        transform: translateY(0);
    }
    /* Smooth Scroll Animation */
    .tj-service-section-four {
        scroll-behavior: smooth;
    }
    /* Responsive */
    @media (max-width: 991px) {
        .tj-section-heading .title {
            font-size: 28px;
        }
        .service-content-1 h4 {
            font-size: 18px;
        }
    }
    </style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Service Page</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Service</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->
    <!--========== Service Section Start ==============-->
    <!-- <section class="tj-service-section-four tj-service-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tj-section-heading text-center">
                                <span class="sub-title active-shape"> What We Do</span>
                                <h2 class="title">Logistic & Transport</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <div class="service-item-three">
                                    <div class="service-image">
                                        <img src="{{ asset(!is_null($service->banner_image) ? $service->banner_image : '') }}"
                                            alt="Image" />
                                        {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                                    </div>
                                    <div class="service-content">
                                        <h4><a class="title" href="{{ route('service.details', $service->slug) }}">
                                                {{ $service->name }}</a></h4>
                                        <p>{!! Illuminate\Support\Str::limit($service->text_to_show, 200, '...') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    </section> -->
    <section class="tj-service-section-four tj-service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('frontend/images/slider/car-transports.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        {{-- <div class="overlay">
                            <div class="row">
                                <div class="col-12 text-dark">The First Stop Platform of Car Shipping Services</div>
                                <div class="col-12">
                                    <div class="price__cta-btn">
                                        <button class=" tj-submit-btn previous" 
                                        href="{{ route('frontend.pages.services.car-service') }}" type="button">
                                            Car Shipping Service <i class="fa-light fa-arrow-left"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <!-- Icon Section -->
                                <div class="col-12 text-center mb-3">
                                    <i class="fa fa-car fa-3x text-white"></i> <!-- Add your icon here -->
                                </div>
                                
                                <!-- Text Section -->
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">The First Stop Platform of Car Shipping Services</h4>
                                </div>
                        
                                <!-- Button Section -->
                                <div class="col-12 text-center">
                                    <a href="{{ route('frontend.pages.services.car-service') }}">
                                        <button class="tj-submit-btn">
                                            Car Shipping Service <i class="fa fa-arrow-left"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.car-service') }}">
                                    Car Shipping Service </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('frontend/images/project/motorcycle-service.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="overlay">
                            <div class="row justify-content-center align-items-center">
                                <!-- Icon Section -->
                                <div class="col-12 text-center mb-3">
                                    <i class="fa fa-motorcycle fa-3x"></i>
                                </div>
                                
                                <!-- Text Section -->
                                <div class="col-12 text-center text-white mb-3">
                                    <h4 class="overlay-title">Cost-Effective Way of Motorcycle Shipping</h4>
                                </div>
                        
                                <!-- Button Section -->
                                <div class="col-12 text-center">
                                    <a class="fs-5" href="{{ route('frontend.pages.services.bike-service') }}">
                                        <button class="tj-submit-btn fs-5">
                                            Motorcycle Service <i class="fa fa-arrow-left"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.bike-service') }}">
                                    Motorcycle Shipping Service </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('frontend/images/project/atv-urv service.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.atv-utv-service') }}">
                                    ATV/UTV Shipping Service </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('frontend/images/project/golf-cart-service.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4> <a class="title" href="{{ route('frontend.pages.services.golf-cart-service') }}">
                                    Golf Cart Shipping Service </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/BOAT-BANNER.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.boat-service') }}">
                                    Boat Transport Services</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/construction-banner.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4> <a class="title" href="{{ route('frontend.pages.services.construction-service') }}">
                                    Construction Equipment Services</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/COMMERCIAL-TRUCK-BANNER.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4> <a class="title" href="{{ route('frontend.pages.services.commercial-service') }}">
                                    Commercial Truck Transport</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/excavator-banner.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.excavator-service') }}">
                                    Excavator Transport Services</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/farm-service-1.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4> <a class="title" href="{{ route('frontend.pages.services.farm-service') }}">
                                    Farm Transport Services</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/heavy-equipment-service.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.heavy-service') }}">
                                    Heavy Equipment Services </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/rv-banner.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4> <a class="title" href="{{ route('frontend.pages.services.rv-service') }}">
                                    RV Transport Services </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/dry-van.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.dryvan-service') }}">
                                    Dry Van Transport </a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/HAZMAT-BANNER.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.hazmat-service') }}">
                                    Hazmat Transport</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/ReeferTruck3.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4> <a class="title" href="{{ route('frontend.pages.services.reefer-service') }}">
                                    Reefer Transport</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="service-item-three">
                        <div class="service-image">
                            <img src="{{ asset('img/roro-banner.webp') }}" alt="Image" />
                            {{-- <img src="{{ asset($service->banner_image) }}" alt="Image" /> --}}
                        </div>
                        <div class="service-content-1">
                            <h4><a class="title" href="{{ route('frontend.pages.services.roro-service') }}">
                                    Roro Shipping International</a></h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Service Section End ==============-->
    <!--=========== Feature Section Start =========-->
    <section class="tj-choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2"> Why Choose Us</span>
                            <h2 class="title">We are the Future of Cargo & Logistics</h2>
                            <p class="desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all
                                 its customers and seeks your trust in return of our services.
                            </p>
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
                                    <h6 class="title">Safety & Reliability</h6>
                                </div>
                            </div>
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
                <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                    @include('partials.multi-form')
                    {{-- <div class="tj-input-form-ser" data-bg-image=""><form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
                            id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="container mt-2">
                                <!-- Step 1: Moving From/To -->
                                <div class="route_quote_info" id="step1">
                                    <div class="row">
                                        <h4 class="title text-center">Quote Request!</h4>
                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving From</h6>
                                            <label class="text-white mb-2">Where Are You Moving From?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="pickup-location"
                                                    placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving To</h6>
                                            <label class="text-white mb-2">Where Are You Moving To?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="delivery-location"
                                                    placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="price__cta-btn text-center">
                                                <button class="tj-submit-btn" type="button" id="step1_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2: Vehicle Information -->
                                <div class="vehicle_quote_info" id="step2" style="display: none;">
                                    <div class="row">
                                        <h4 class="title text-center">VEHICLE INFORMATION</h4>
                                        <select id="tabSelector" class="" aria-label="Tab selector" required>
                                            <option value="" selected disabled>Select a Vehicle</option>
                                            <option value="Atv">Atv Utv Transport</option>
                                            <option value="Boat-Transport">Boat Transport</option>
                                            <option value="Car">Car</option>
                                            <option value="Freight-Transportation">Freight Transportation</option>
                                            <option value="Golf-Cart">Golf Cart</option>
                                            <option value="Heavy-Equipment">Heavy Equipment</option>
                                            <option value="Motorcycle">Motorcycle</option>
                                            <option value="RV-Transport">RV Transport</option>
                                        </select>

                                        <div class="tab-content mt-3" id="additionalContent"></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step2_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">
                                                <button class="tj-submit-btn" type="button" id="step2_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3: Customer Information -->
                                <div class="basic_quote_info" id="step3" style="display: none;">
                                    <div class="row mb-3">
                                        <h4 class="text-center text-white">Customer Information</h4>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Your Name:</label>
                                                <input class="form-control" required name="phone" type="tel"
                                                    placeholder="Customer Name">
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="phone"
                                                    type="tel" placeholder="Customer Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Email Address:</label>
                                                <input class="form-control" required name="Custo_Email" type="email"
                                                    placeholder="Email address">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step3_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">

                                                <button class=" tj-submit-btn " href="" type="submit"
                                                    id="submit_instant_code" value="Submit Form">
                                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--=========== Feature Section End =========-->
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
                    <a href="{{ route('vehicleTransportDetail') }}" class="service-link text-decoration-none">
                        <div class="tj-service-item"
                            data-bg-image="{{ asset('frontend/images/service/CAR-CARD.webp') }}">
                            <div class="icon-box">
                                <i class="fa-light fa-car-side fa-2xs"></i>
                                <!-- <i class="flaticon-air-freight"></i> -->
                            </div>
                            <div class="service-content">
                                <h4 class="text-white">VEHICLE TRANSPORTATION</h4>
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
                    <a href="{{ route('heavy-transport-detail') }}" class="service-link text-decoration-none">
                        <div class="tj-service-item"
                            data-bg-image="{{ asset('frontend/images/service/HEAVY-CARD.webp') }}">
                            <div class="icon-box">
                                <i class="fa-light fa-tractor fa-2xs"></i>
                                <!-- <i class="flaticon-cargo-ship-1"></i> -->
                            </div>
                            <div class="service-content">
                                <h4 class="text-white">HEAVY TRANSPORTATION</h4>
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
                    <a href="{{ route('freighttransport-detail') }}" class="service-link text-decoration-none">
                        <div class="tj-service-item"
                            data-bg-image="{{ asset('frontend/images/service/FREIGHT-CARD.webp') }}">
                            <div class="icon-box">
                                <i class="fa-light fa-truck fa-2xs"></i>
                                <!-- <i class="flaticon-delivery-van"></i> -->
                            </div>
                            <div class="service-content">
                                <h4 class="text-white">FREIGHT TRANSPORTATION</h4>
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
    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection