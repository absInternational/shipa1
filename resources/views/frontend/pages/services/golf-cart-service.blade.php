@extends('frontend.layouts.app')
@section('title', 'Golf Cart Shipping Service - Free Shipping Quotes and Calculator | ShipA1')
@section('meta_description', 'Best Golf cart shipping services in the USA, ship your vehicle countrywide or international in reasonable prices, Get Free shipping quotes - ShipA1.')
@section('content')
<style>
    .full-width {
        width: 100%;
    }
    .services {
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        padding: 10px 10px 30px 10px;
        background-color: #9d9e9f14;
    }
    .services-h1 {
        text-align:center;
        text-decoration: overline;
        margin-bottom: 50px;
        color: #8FC445;
    }
    .why-box {
        border-radius: 12px;
        padding: 40px 0px;
        background: #183c46eb;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
    }
    .card- {
        background: #29494e;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .custom-style {
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
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
</style>
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Golf Cart Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Golf Cart</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-blog-standard pb-0">
   <div class="container">
           <div class="row">
                <div class="col-lg-7">
							<div class="image-container">
                                <img class="img-fluid" src="{{ asset('frontend/images/project/golf-cart-service.webp') }}" loading="lazy" alt="Motorcyle Transport">
                            </div>
                             <br>
                    <div class="text-container text-left">
                        <h3>Choosing the best shipping company for your golf cart?</h3>
                        <p>Want to know the secret to choosing the best shipping company 
                            for your golf cart? We’ve got you. First, let's talk about it.</p> 
                            <h3>What is golf cart shipping?</h3>
                            <p>Similar to any vehicle shipping, golf carts are also modes of transport that have proven to be 100%
                                 convenient and cost-effective. Just like any other vehicle being shipped, they also require the
                                  same amount of maintenance, care, and the shipping process. Golf carts are not limited to the
                                   golf course but are also pretty well reputable in other factors.You must be wondering where and 
                                   how else are golf carts used. You will come across multiple golf carts being utilized in places
                                    like communities, hospitals, companies, resorts, etc.
                                    <h3>Why Choose Ship A1 Transport?</h3>
                                    <ul>
                                       <li>The Company’s experience. </li>
                                       <li>The References.</li>
                                       <li>Insurance Policy and coverage.</li>
                                       <li>Cost of the shipment</li>
                                    </ul>
                                    Choosing the right company for your shipping solutions is extremely crucial as it determines
                                     the security, timely delivery, and protection of your vehicles. Hence, <a class="pp-link-2" href="{{ route('welcome') }}">choosing Ship A1</a>
                                      Transport for your golf cart shipping has to be the best option for your transportation needs.

                            </p> 
                        
                       
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    
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
                            <h4 class="title text-center">Golf Cart Quote!</h4>
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
                                <input type="hidden" name="vehicle_opt" value="vehicle" hidden>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Name:</label>
                                            <input type="text" id="name" name="name" placeholder="Name"
                                                required="" />
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
                                    <!-- <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Phone:</label>
                                            <input type="tel" id="phone" name="phone" placeholder="Number"
                                                required="" />
                                            <small id="errPhone" class="err-style"></small>
                                        </div>
                                    </div> -->
                                    <div class="col-md-4">
                                            <div class="input-form">
                                                <label class="d-block">Phone:</label>
                                                <input type="tel" id="phone" name="phone" placeholder="Number"
                                                    required="" />
                                                <small id="errPhone" class="err-style"></small>
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Email:</label>
                                            <input type="email" id="email" name="email" placeholder="Email "
                                                required="" />
                                            <small id="errEmail" class="err-style"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row select-bm">
                                    <!-- <div class="col-md-12 text-center">
                                        <h4 class="text-white">Motorcycle Information</h4>
                                    </div> -->
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
                                            <input type="text" id="make" name="make[]" placeholder="Make"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select vehicle-model-div">
                                            <label>Model</label>
                                            <input type="text" id="model" name="model[]" placeholder="Model"
                                                required="" />
                                        </div>
                                    </div>
                                </div>

                                <a class="add-car-1 mb-2" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                    Vehicle</a>

                                <div id="vehicles-container">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                            <select class=" " id="trailer_type" name="trailer_type">
                                                <option value="1" selected>Open Carrier</option>
                                                <option value="2">Enclosed Carrier</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="condition" class="text-white">Condition</label>
                                            <select class=" " id="condition" name="condition">
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
                                            <input type="text" id="pickup-location" name="origin"
                                                placeholder="" required="" />
                                            <small id="errOLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-form">
                                            <label class="d-block  mb-0"> Delivery Location:</label>
                                            <input type="text" id="delivery-location" name="destination"
                                                placeholder="" required="" />
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
                                    <!-- <input class="form-control  image_input" type="file" id="image" name="image"
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
                                            <input class="" type="text" id="c" name="modify_info"
                                                placeholder="Modification" />
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
                                            <input class="form-control" type="url" id="link" name="link"
                                                placeholder="Link" />
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
               <div class="row full-width ps-4">
                     <div class="col-12 custom-style">
                         <h4 class=" text-center">What do we offer?</h4>
                         <p class=" text-center">Ship A1 Transport masters a range of multiple services to our customers, from 
                            cost-effective deals, white glove delivery, door-to-door delivery, and terminal-to-terminal delivery 
                            to enclosed and open-air transport. Whether you’re renting a golf cart, purchasing it for your needs, 
                            want it removed from one location and moved to another, or just need it to be sent for maintenance, we 
                            have you covered! Choosing Ship A1 Transport for your<a class="pp-link-2" href="{{ route('form.vehicle.golf_cart') }}"> Golf Cart Shipping </a>means you have entrusted us 
                            as your trusted and reliable partner who shares mutual feelings when it comes to professionalism and 
                            transparency.</p>
                         <div class="tj-theme-button  text-center mt-2">
                                                 <a class="tj-transparent-btn" href="http://127.0.0.1:8000/contact_us" target="_blank">
                                                     Get Quote
                                                     <i class="flaticon-right-1"></i>
                                                 </a>
                                             </div>
                     </div>
               </div>
   </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Why is that?</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            We not only focus on providing top-notch services, but we also ensure that our offerings are meticulously 
                            tailored to meet your unique needs and expectations. With years of accumulated experience and expertise, we can proudly 
                            state that our services are rooted in complete transparency and unwavering reliability. Our commitment goes beyond just 
                            fulfilling your requirements; we aim to exceed your expectations by delivering personalized solutions that align perfectly 
                            with your specific demands. Every aspect of our service is designed with your satisfaction in mind, ensuring that you receive 
                            the highest level of care and attention throughout the entire process. We take immense pride in our ability to offer services
                             that are not only of superior quality but also characterized by their dependability and openness. Our dedication to
                              maintaining the highest standards of service excellence is reflected in our long-standing reputation for trustworthiness 
                              and integrity in the industry.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/golf-cart-service-1.webp') }}" alt="Image">
                        </div>
                        <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/golf-cart service-2.webp') }}" alt="Image">
                        </div>
                        <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Golf Cart Shipping Methods</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">When it comes to shipping your golf cart from one place to another, there are multiple 
                                options to look at. Ship A1 provides a comprehensive range of services tailored to accommodate 
                                types of distances, timelines, and modes of protection for your golf cart.<br>
                                 Here are the most common modes of shipping used:
                            <ul>
                                       <li>Open-air Transport</li>
                                       <li>Enclosed Auto Transport</li>
                                       <li>Door-to-Door Delivery</li>
                                       <li>Terminal-to-Terminal Shipping</li>
                                    </ul>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">  
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Open-air Transport</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            If you are someone who wants to get their golf cart shipped on a budget, here is the best option for 
                            you. Open-air transport is another type of transport that supports and delivers your vehicle on a 
                            trailer or an open truck. <br> While it may seem to you that your vehicle can be prone to damage due to
                             weather or road conditions, we are here to assure you that our expert staff and services are 
                             specifically designed to ease your concerns and issues.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Enclosed Auto Transport</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            If you're looking to ship a luxurious golf cart then our best option for you would be enclosed auto 
                            transport. Why? Because, as opposed to Open-air Transport, enclosed auto transport guarantees maximum 
                            protection for your golf cart by sheltering your vehicle entirely in an enclosed truck or trailer. 
                            Although quite costly, this method of shipping is ideal if your golf cart is very valuable or 
                            custom-made, the distance is quite long, and there is a risk of bad weather conditions.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Door-to-Door Delivery</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            We present you with one of the safest options
                            also known as door-to-door delivery. <br>  Are you unable to pick up or drop off your golf cart? Why choose this?
                             <ul>
                                       <li>Door-to-door delivery is the easiest type of service, especially if you are someone who would rather let the company control the steering wheel.</li>
                                       <li>It provides you the option of getting your golf cart picked up from your location and dropping it off directly at the designated location without any hassles or issues.</li>
                                    </ul>
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading mb-4">
                            <span class="sub-title active-shape">Terminal-to-Terminal Shipping</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">This is another option if you're looking for cost-effective shipping for your golf cart. Similar to Door-to-Door Delivery 
                            in terms of being budget-friendly, Terminal-to-Terminal offers an even better shipping method. This involves dropping your 
                            golf cart at the nearest terminal which can be found near ports and airports and getting it picked up from your friend or
                             family from the terminal at your designated location. This has proven to be a far cheaper option especially 
                             if we’re talking about long distances since it requires you to drop off your vehicle halfway to the nearest 
                             terminal in your city and then get it picked up halfway from the nearest terminal in the designated drop-off
                              city.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</section>
{{-- @include('partials.reveiw-site') --}}
@include('partials.reveiw-small-detail') 

{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row justify-content-center services">
            <h1 class="services-h1">Discussing the Golf Cart Types!</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Standard Golf Cart</h5>
                        <p class="card-text text-light">Standard Golf Carts are preferred for their cost-effectiveness, 2-4 seat
                             capacity, electric or gas engines, and features like cup holders, golf bag holders, and basic seating.
                              Designed for smooth rides, they typically measure around 92 x 48 x 75 inches, with variations by
                               model and brand.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Utility Golf Cart</h5>
                        <p class="card-text text-light">Utility Golf Carts, categorized as Utility Vehicles (UTVs) or Golf Utility
                             Vehicles (GUVs), are versatile machines. Ship A1's models excel beyond golf courses, ideal for hauling
                              equipment, maintenance on large properties, and even on construction sites for transporting cement,
                               bricks, and tools.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Off-Road Golf Carts</h5>
                        <p class="card-text text-light">Have you tried karting or hunting? It's tough! Our Off-Road Golf Carts are built for rugged terrain with 
                            heavy-duty suspension, all-terrain tires, and powerful engines. Perfect for trail riding, hunting, camping, and exploring rough
                             terrain.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Luxury Golf Carts</h5>
                        <p class="card-text text-light">Want to golf in style? Explore our luxury Golf Carts with premium features for a smooth ride. 
                            Our carts include posh seating, polished chrome accents, woodgrain trim,
                             advanced technology like an excellent sound system, and GPS navigation, ensuring an outstanding golfing experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Street-Legal Golf Carts</h5>
                        <p class="card-text text-light">Drive with friends through streets in our Street-Legal Golf Cart! It combines car features
                             with golf cart convenience, meeting legal requirements. Equipped with
                             headlights, taillights, turn signals, seat belts, mirrors, it's perfect for gated communities and urban 
                             low-speed vehicle areas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="tj-faq-section tj-faq-page pt-0">
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long does it take to deliver a golf cart?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is one of the many factors that depend on miles covered, shipping methods, and the demand at that time. Usually, local shipment within just a few
                                             hundred miles takes 1-3 days, while cross-country transportation could come in anywhere from 5 to 10 days. 
                                             You will be given estimated delivery times as you book your transport and can track your shipment throughout.


                                    </div>
                                </div>
                            </div>
                            


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I need to prepare my golf cart for shipping?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <strong>Here's how you need to help get your golf cart ready for shipping:</strong>
                                    <ul>
                                        <li class="m-0 p-0">Empty the Cart: Clean out any dirt or other debris to prevent damage during shipping.</li>
                                        <li class="m-0 p-0">Remove Personal stuff: Clean up behind any wayward items and personal belongings.</li>
                                        <li class="m-0 p-0">Secure the Loose Parts: Make sure all parts of the car, including mirrors and other accessories, are either tightly secured or removed.</li>
                                        <li class="m-0 p-0">Disengage the Battery: Take apart the battery cords for your own safety.</li>
                                        <li class="m-0 p-0">Check Tire Pressure: This will ensure the proper inflation of tires so as not to encounter any sort of problem while loading and unloading.</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How much does it cost to transport a golf cart?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                The amount to ship your golf cart varies from a number of different elements involved: the distance,
                                 shipping method, open versus enclosed transport, and any added services for which you might want 
                                 to pay. Local transport, on average, will cost anything from $200 to $500, while intercontinental 
                                 may cost up to $600-$1,200. Please contact us with details of what you need that is, pickup and
                                  delivery locations, weight, and other specifications and we'll be sure to provide you with an 
                                  estimate of the cost involved.
                                </div>
                            </div>
                        </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-choose-us-section-service-golfcart">
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
                            <p class="desc-2">★ Offering wide range of shipping methods tailored to various needs, including vehicles, heavy equipment, and freight across the US.</p>
                        </div>

                        <div class="tj-icon-box">

                            <p class="desc-2">★ Providing top-notch quality service with a well-equipped and professional team dedicated to meeting customer expectations.</p>
                        </div>
                        <div class="tj-icon-box pb-4">

                            <p class="desc-2">★ Ensuring timely delivery of shipments, emphasizing reliability and efficiency in logistics.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">

                        <div class="tj-icon-box mr-3">

                            <p class="desc-2">★ Focusing on customer satisfaction by catering to their needs and maintaining loyalty through personalized service.</p>
                        </div>
                        <div class="tj-icon-box">

                            <p class="desc-2">★ Prioritizing safe and secure transportation, with a commitment to maintaining customer trust and peace of mind.</p>
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
            var currentYear = {{ date('Y') }};
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

            @foreach ($makes as $make)
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
@endsection