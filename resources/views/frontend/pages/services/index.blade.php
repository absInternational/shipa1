@extends('frontend.layouts.app')

@section('content')
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                        <div class="service-content">
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
                    <div class="tj-input-form-ser" data-bg-image="">



                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
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
                                                <label class="error-message" id="pickup-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving To</h6>
                                            <label class="text-white mb-2">Where Are You Moving To?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="delivery-location"
                                                    placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="delivery-location-error">This field is
                                                    required.</label>
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
                                        <label class="error-message" id="tabSelector-error">This field is
                                            required.</label>

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
                                                <!-- <input class="form-control" required name="Custo_Name" type="text" placeholder="Customer Name"> -->
                                                <label class="error-message" id="Custo_Name-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div> --}}

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Email Address:</label>
                                                <input class="form-control" required name="Custo_Email" type="email"
                                                    placeholder="Email address">
                                                <label class="error-message" id="Custo_Email-error">This field is
                                                    required.</label>
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
                    </div>
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
                    <a href="{{ route('vehicleTransportDetail') }}" class="service-link">
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
                    <a href="{{ route('heavy-transport-detail') }}" class="service-link">
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
                    <a href="{{ route('freighttransport-detail') }}" class="service-link">
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
    {{-- <script>
        $(document).ready(function() {
            $(document).on('change', '.category', function() {
                var selectedCategory = $(this).val();

                $.ajax({
                    url: "{{ route('get.subcategories') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "category": selectedCategory
                    },
                    success: function(response) {
                        console.log(response);
                        console.log(response.length);

                        var html = '';
                        $('#subcategory-box').html('');

                        html += "<label for='subcategory'>Subcategory</label>";
                        html +=
                            "<select class='nice-select form-control' id='subcategory' name='subcategory'>";
                        html += "<option value='' disabled selected>Select</option>";
                        $.each(response, function(index, val) {
                            html +=
                                `<option value='${val.id}' style='white-space: nowrap;'>${val.name}</option>`;
                        });
                        html += "</select>";
                        console.log('html', html);

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
        function playVideo() {
            document.querySelector('.video-thumbnail').style.display = 'none';
            document.querySelector('.video-iframe').style.display = 'block';
            var iframe = document.getElementById('videoFrame');
            var videoSrc = iframe.src;
            iframe.src = videoSrc + "&autoplay=1"; // Autoplay the video
        }
    </script> --}}

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
                var currentYear = {{date('Y')}};
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
                var currentYear = {{date('Y')}};
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
        document.querySelectorAll('input[type="text"]').forEach((input) => {
            input.addEventListener("input", function() {
                this.value = this.value.replace(/[^0-9]/g, "");
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

@endsection