@extends('frontend.layouts.app')
@section('title', 'Car Shipping Service - Vehicle Delivery With Professionals | ShipA1')
@section('meta_description', 'Get car shipping service in the USA, scratchless vehicle transport services along with
huge discount offers and free shipping quotes nationwide.')
@section('content')
<style>
    .full-width {
        width: 100%;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
    }
    .custom-style {
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 5px 30px 0 rgba(35,43,54,.3);
        border-radius: 15px;
    }
    .custom-style h4 {
        margin-top: 0;
    }
    .custom-style p {
        margin-bottom: 0;
    }
    .top-left-image {
        position: absolute;
        top: -25px;
        left: -25px;
        width: 100px;
        height: 100px;
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
</style>
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Car Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Car</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-blog-standard pb-0 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="{{ asset('frontend/images/project/CAR-SERVICE-MAIN.webp') }}"
                        loading="lazy" alt="Motorcyle Transport">
                </div>
                <br>
                <div class="text-container text-left">
                    <h3>The First Stop Platform of Car Shipping Services</h3>
                    <p>Ship A1, your go-to partner in transportation services! We prioritize the needs of our customers and
                         ensure their shipping services are as smooth as possible. With over 16 years of experience, we can
                          proudly count ourselves as one of the leading transportation companies. <br>
                        Ready to ship your car to a new destination? Say no more, Ship A1 offers the best car transportation
                         services, as well as equipped with advanced trailers for your vehicle.
                        </p>
                </div>
                <div class="row mt-4">
                    <div class="col-6 text-center">
                        <h4><i class="fas fa-ship" style="color: var(--tj-primary-color);"></i> Successful Shipment</h4>
                        <div class="review-counter fs-2">
                            <span id="counter-value" class="ms-3" data-target="318" style="color: var(--tj-secondary-color);">0</span>k+
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <h4><i class="fas fa-smile" style="color: var(--tj-primary-color);"></i> Satisfied Clients</h4>
                        <div class="review-counter fs-2">
                            <span id="counter-value-2" class="ms-3 " data-target="289" style="color: var(--tj-secondary-color);">0</span>k+
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-5">

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

                <!-- <span class="dix-1"> <img src="" alt=""> </span> -->
                <div class="tj-input-form w-100" data-bg-image="">
                    <h4 class="title text-center">Car Quote!</h4>
                    <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform" id="calculatePriceFrom"
                        data-parsley-validate data-parsley-errors-messages-disabled enctype="multipart/form-data">
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
                        <input type="hidden" name="vehicle_opt" value="vehicle" hidden>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Name" required="" />
                                    <small id="errName" class="err-style"></small>
                                </div>
                            </div>
                            {{-- <div class="col-xl-4 col-lg-4">
                                    <div class="single-input-field">
                                        <label class="d-block text-white">Phone:</label>
                                        <input class="form-control" required name="phone" type="tel"
                                            placeholder="Phone">
                                        <label class="error-message" id="Custo_Phone-error">This field is required.</label>
                                    </div>
                                </div> --}}
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block">Phone:</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Number" required="" />
                                    <small id="errPhone" class="err-style"></small>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Phone:</label>
                                            <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                                                required="" />
                                            <small id="errPhone" class="err-style"></small>
                                        </div>
                                    </div> -->
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block">Email:</label>
                                    <input type="email" id="email" name="email" placeholder="Email " required="" />
                                    <small id="errEmail" class="err-style"></small>
                                </div>
                            </div>
                        </div>

                        <div class="row select-bm">
                            <div class="col-md-12 text-center">
                                <h4 class="text-white">Motorcycle Information</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select">
                                    <label> Year</label>
                                    <select class="nice-select vehicle-year" name="year[]" id="year">
                                        <option value="" disabled selected>Select</option>
                                        @php
                                        $currentYear = date('Y');
                                        for ($year = $currentYear; $year >= 1936; $year--) {
                                        echo "<option value='$year'>$year</option>";
                                        }
                                        @endphp
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select">
                                    <label>Make</label>
                                    <input type="text" id="make" name="make[]" placeholder="Make" required="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select vehicle-model-div">
                                    <label>Model</label>
                                    <input type="text" id="model" name="model[]" placeholder="Model" required="" />
                                </div>
                            </div>
                        </div>

                        <a class="add-car" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                            Vehicle</a>

                        <div id="vehicles-container">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                    <select class=" " id="trailer_type" name="trailer_type">
                                        <option value="1" selected>Open Trailer</option>
                                        <option value="2">Enclosed Carrier</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="condition" class="text-white">Condition</label>
                                    <select class=" " id="condition" name="condition[]">
                                        <option value="1" selected>Running</option>
                                        <option value="2">Non Running</option>
                                    </select>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block mb-0"> Pickup Location:</label>
                                    <input type="text" id="pickup-location" name="origin" placeholder="" required="" />
                                    <small id="errOLoc" class="err-loc"></small>
                                    <ul class="suggestions suggestionsTwo"></ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block  mb-0"> Delivery Location:</label>
                                    <input type="text" id="delivery-location" name="destination" placeholder=""
                                        required="" />
                                    <small id="errDLoc" class="err-loc"></small>
                                    <ul class="suggestions suggestionsTwo"></ul>
                                </div>
                            </div>
                        </div>

                        <div class="input-form">
                            <label class="d-block text-white"> Image:</label>
                            <input class="form-control image_input" type="file" accept="image/*" multiple
                                onchange="previewImages(event)">
                            <div class="image-preview-container" id="imagePreviewContainer"></div>
                            <!-- <input class="form-control  image_input" type="file" id="image" name="image[]"
                                        placeholder="Upload File" /> -->
                        </div>


                        <div class="row">
                            <di class="col-md-6">
                                <div class="form-group">
                                    <input class="form-check-input " type="checkbox" id="modification"
                                        name="modification" value="1" />
                                    <label class="form-check-label text-white ms-4" for="modification">
                                        Modified?</label>
                                </div>

                                <div class="input-form div-modify_info" style="display: none;">
                                    <label class="d-block"> Modification Information:</label>
                                    <input class="" type="text" id="c" name="modify_info" placeholder="Modification" />
                                </div>
                            </di>
                            <di class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="available_at_auction"
                                        name="available_at_auction" value="1" />
                                    <label class="form-check-label text-white" for="available_at_auction">
                                        Auction?</label>
                                </div>

                                <div class="input-form div-link mt-3" style="display: none;">
                                    <label class="d-block"> Enter Link:</label>
                                    <input class="form-control" type="url" id="link" name="link" placeholder="Link" />
                                </div>
                            </di>
                        </div>

                        <div class="tj-theme-button text-center mt-3">
                            <button class="tj-submit-btn" type="submit" value="submit">
                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/car-transport.webp') }}" alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Quality and Affordability</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Quality and Affordability</h3>
                        <p class="desc">
                            Worried about emptying your bank accounts? Ship A1 is here to save the day, with our affordable 
                            rates and seamless services our customers can sustain their peace of mind for a long time. Yes! 
                            We provide cheaper rates than most companies without compromising the quality of our services. <br> 
                            Sounds like you have hit the jackpot! Ship A1 has multiple services that offer you the comfort 
                            of affordability like open transport, Terminal to Terminal Shipping as well as bundles of discounts
                             and amazing deals.
                            </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Fast and Secure Vehicle Transport with ShipA1</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Fast and Secure Vehicle Transport with ShipA1</h3>
                        <p class="desc">
                            A sudden change of plans? Emergencies? Urgent shipping? If any of this matches your situation, 
                            then you are at the right place. <br>
                            Ship A1 Transport is the trusted choice for expedited auto shipping. With years of experience in the 
                            industry, we have perfected our processes to deliver superior service and reliability. Our team of
                            professionals is committed to providing personalized attention to each shipment, ensuring that your
                            vehicle is handled with the utmost care and attention from pickup to delivery. 
                            Moreover, we offer competitive rates and transparent pricing, giving you value for your
                            money without compromising quality.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/tuxpi.com.1724264978.webp') }}" alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                </div>
            </div>
        </div>
        <div class="row full-width mt-4 ms-1">
            <div class="col-12 custom-style">
                <h4 class=" text-center">Premium Vehicle Transport Services</h4>
                <p class=" text-center">ShipA1, with its standard <a class="pp-link-2"
                        href="{{ route('form.vehicle.car') }}">enclosed vehicle shipping,</a> makes it sure that vehicle
                    transport is done in an exquisite and exclusive style. ShipA1 considers that Americans should have
                    the luxury and convenience to indulge in the delight of having their car shipped right at their
                    doors. For that, ShipA1 has devised a plan to provide door to door vehicle transport facility to
                    Americans, and that plan has been executed hundreds of times successfully as well. Through such a
                    facility, ShipA1 believes that it can provide services right at your doorsteps for your comfort. If
                    you do not want to transport it on your doorsteps, then another facility that is provided by the
                    ShipA1 is of the terminals. </p>
                <div class="tj-theme-button  text-center mt-2">
                    <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                        Get Quote
                        <i class="flaticon-right-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Find the Ideal Shipping Solution for Your Vehicle</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Find the Ideal Shipping Solution for Your Vehicle</h3>
                        <p class="desc">
                             At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even
                            find various suitable services! For shipping your luxurious vehicle, you can opt for
                            enclosed trailers as they are made to protect your vehicle from road debris, scratches, the
                            uncertainty of weather conditions, and potential risks. However, if you are searching for
                            something equally cost-effective and safe, go for open transport! We have expedited options
                            and door-to-door delivery for fast vehicle shipping.
                            <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/open vs enclosed.webp') }}" alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-4 mt-4">   
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
            Auto Transport Hauling Services</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">open transport</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            This is the usual method we use while shipping cars. The most affordable choice for car transportation
                            is an open transport, which makes it perfect for individuals looking for a low-cost option. Due of its
                            price and effectiveness, this method is very popular even if your car faces exposure to the environment
                            while in transit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Enclosed transport</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Enclosed transport service is the ideal option for people who want to provide their cars
                            additional security. Although a little more expensive, guarantees that your vehicle
                            is completely protected from outside elements including weather, road debris, and other possible
                            threats.</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Expedited Shipping</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Our expedited shipping service provides the quickest route to delivery for the vehicle when
                            time is of the importance. This service caters to your urgent shipping needs, whether you're
                            moving on short notice or just need your vehicle delivered as soon as possible. We give your
                            shipment top priority in order to guarantee the quickest arrival possible, giving you piece 
                            of mind throughout your shipment.
                        </p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Door to Door Transport</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Under door to door transport delivery, your automobile will be picked right from your door and 
                            will be delivered to your exact location. This is the most popular method of car shipping because 
                            it is more convenient for both the auto shipping company and the customer. With door to door
                             delivery, you do not need to drive your vehicle to a terminal. You also do not need to pay to
                              have it spend time in a card terminal.
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-choose-us-section-service-cars-2 mt-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">The Premier Unmatched Excellence</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Neoteric Solutions</h5>
                        <p class="card-text text-dark">The unravelment provided to the emerging and the existing problems of auto transport by
                            ShipA1 is through the unique neoteric solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Premium Quality</h5>
                        <p class="card-text text-dark">You must expect nothing less than an optimum level service when talking about ShipA1. You
                            will get the best car transport experience with us.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Customer-First Perspective</h5>
                        <p class="card-text text-dark">Customers are the center of every decision made by ShipA1. We provide 
                            customized solutions to fulfill specific requirements, guaranteeing a smooth and personalized journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section pt-4">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate" data-sal="slide-left" data-sal-duration="800">
                The Premier Unmatched Excellence in the Auto Transport</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Neoteric Solutions</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            The unravelment provided to the emerging and the existing problems of auto transport by
                            ShipA1 is through the unique neoteric solutions.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> Premium Quality</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            You must expect nothing less than an optimum level service when talking about ShipA1. You
                            will get the best car transport experience with us.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">A Customer-First Perspective</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Customers are the center of every decision made by ShipA1. We provide 
                            customized solutions to fulfill specific requirements, guaranteeing a smooth and personalized journey.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Advanced Technologies</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            At ShipA1, we use cutting-edge technology to improve transparency and efficiency.
                             Our cutting-edge technology make sure you're constantly aware of and in charge of your cargo.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> --}}
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
{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Car Hauling Services</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Enclosed Carrier</h5>
                        <p class="card-text text-light">Although a bit expensive, it is a safe way to get your car
                            transported. Enclosed carrier guards your car against the external environment such as
                            weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Open Trailer</h5>
                        <p class="card-text text-light">It’s the standard method with which we ship cars. It is the best
                            option if you want a <a class="pp-link-2"
                                href="https://shipa1.com/cheapest-car-shipping-service-cheap-car-transport"> cheap car
                                moving service</a></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Expedited Shipping</h5>
                        <p class="card-text text-light">If you are looking to move quickly to a new place and need your
                            car moved along with you then expedited shipping service must be your first choice.</p>
                    </div>
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
                                    How do I prepare my vehicle for transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We'll provide detailed instructions, but you'll need to remove personal
                                        belongings, as well as make sure to follow guidelines or instructions based on
                                        the chosen transport method.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I get a quote?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    At Ship A1, we have the convenience of free quotes that we offer to all our
                                    customers online.<br>You can call our direct
                                    number<a class="pp-link" href="#"> 1 (844) 474-4721</a> for an instant quote.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I track my vehicle during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes! ShipA1 provides a user-friendly tracking system for real-time updates
                                        on your vehicle's location throughout the journey.</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-choose-us-section-service-car-2">
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
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}"
                        alt="Image">

                </div>
            </div>
        </div>
    </div>

</section> --}}
@include('partials.blog-slider')
@endsection
@section('extraScript')
<script>
    $(document).ready(function() {
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

            @foreach($makes as $make)
            newVehicleHtml += `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
            @endforeach

            newVehicleHtml += `
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select model-div">
                    <label>Model</label>
                    <select class="nice-select model" name="model[]" id="model" required>
                    <!-- Options filled by JavaScript -->
                    </select>
                    <!-- Bin icon for deleting vehicle -->
                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
                    </div>
                    </div>
                    </div>
                    </div>
                    `;

            $('#vehicles-container').append(newVehicleHtml);
        }

        $('#addVehicleBtn').click(function() {
            addNewVehicle();
        });

        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });

        $(document).on('change', '.year, .make', function() {
            var year = $(this).closest('.vehicle-info').find('.year').val();
            var makeId = $(this).closest('.vehicle-info').find('.make').val();
            var vehicleInfo = $(this).closest('.vehicle-info');
            if (year && makeId) {
                getModel(year, makeId, vehicleInfo);
            }
        });

        function getModel(year, makeId, vehicleInfo) {
            console.log('yes inn');
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelsDropdown = vehicleInfo.find('.model');
                    modelsDropdown.empty();
                    var selectOptions = '<option value="">Select Model</option>';
                    $.each(response, function(index, model) {
                        selectOptions += '<option value="' + model + '">' + model +
                            '</option>';
                    });
                    modelsDropdown.html(selectOptions);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var year = $('.vehicle-year').val();
            var makeId = $('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId);
            }
        });
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
    $(document).ready(function() {
        $('#available_at_auction').change(function() {
            if ($(this).is(':checked')) {
                $('.div-link').show();
            } else {
                $('.div-link').hide();
            }
        });
        $('#modification').change(function() {
            if ($(this).is(':checked')) {
                $('.div-modify_info').show();
            } else {
                $('.div-modify_info').hide();
            }
        });
    });
</script>
<script>
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
</script>
<script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        items: 3, // Default number of items
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1 // Show 1 item on screens smaller than 600px
          },
          600: {
            items: 2 // Show 2 items on screens larger than 600px
          },
          1000: {
            items: 3 // Show 3 items on screens larger than 1000px
          }
        }
      });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const counter = document.getElementById('counter-value');
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const increment = target / 50; // Adjust this value to control the speed

        const updateCounter = () => {
            if (count < target) {
                count = Math.ceil(count + increment);
                counter.textContent = count;
                setTimeout(updateCounter, 50); // Adjust this value to control the speed
            } else {
                counter.textContent = target;
            }
        };

        updateCounter();
    });
    document.addEventListener("DOMContentLoaded", function () {
        const counter = document.getElementById('counter-value-2');
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const increment = target / 50; // Adjust this value to control the speed

        const updateCounter = () => {
            if (count < target) {
                count = Math.ceil(count + increment);
                counter.textContent = count;
                setTimeout(updateCounter, 50); // Adjust this value to control the speed
            } else {
                counter.textContent = target;
            }
        };

        updateCounter();
    });
</script> 
@endsection