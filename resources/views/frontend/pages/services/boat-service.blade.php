@extends('frontend.layouts.app')
@section('title', 'Boat Transport - One State to Another State | ShipA1')
@section('meta_description', 'Boat transport services in all over the USA, Ship your desired vehicle
from one state to another state in one click - ShipA1.')
@section('content')
<style>
    .full-width {
    width: 100%;
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

    .title-2 {
    color: #8fc445;
    }
    
    .desc-2 {
    color: white;
    }
</style>
<!--========== breadcrumb Start ==============-->
<section class="tj-choose-us-section-service-boat">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">BOAT TRANSPORT SERVICE</h2>
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
            @include('partials.multi-form')
                
            </div>

        </div>
    </div>
</section>
@include('partials.reveiw-small-detail') 
{{-- @include('partials.reveiw-site') --}}
{{-- <section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-2 pb-4" data-sal="slide-left" data-sal-duration="800">
        The Best Boat Transport Services</h2>
    </div>
</section> --}}
<section class="tj-about-section pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            {{-- <span class="sub-title active-shape">Seamless Boat Transport</span> --}}
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Seamless Boat Transport</h3>
                            <p class="desc">Let's make transportation easy and swift with Ship A1 Auto Transport! If you are shipping your boat for the
                                 first time or if you are finding a suitable, budget-friendly company to partner with, then you have come to the right 
                                 place! Ship A1 is the best and most reputable leading auto transport company, with years of built experience we have 
                                 dedicated ourselves to providing quality, reliable, and smooth transportation services catered to your needs.  <br>
                                Here, we strive to soar higher day by day by delivering outstanding services and guaranteeing our customers a seamless 
                                & hassle-free transportation process.
                                </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/TEST.png') }}" alt="Image">
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
                        <img class="rounded" src="{{ asset('frontend/images/project/BOAT-2.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            {{-- <span class="sub-title active-shape">Boat Transport Services</span> --}}
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Boat Transport Services</h3>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">Here, we strive to soar higher day by day by delivering outstanding services
                                and guaranteeing our customers a seamless & hassle-free transportation process.
                                <ul>
                                    <li>Experience</li>
                                    <li>Cost-Effective Rates</li>
                                    <li>Reliability</li>
                                    <li>Good Customer Service</li>
                                    <li>Scope of Services</li>
                                    <li>Well Equipped Staff</li>
                                    </ul>
                                </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="tj-blog-standard pt-2 pb-4 mb-4">
    <div class="container">
        
            <div class="row full-width ps-4 pt-4">
                    <div class="col-12 custom-style">
                        <h4 class=" text-center">What is Boat Auto Shipping?</h4>
                        <p class=" text-center">The process of transporting or shipping boats from one place to another using specialized carriers is called Boat Auto Transport 
                            or Boat Shipping! Is it safe? Yes! Ship A1 ensures that your boat is delivered or picked up from the designated location safe and sound, with the
                            help of special and equipped carriers you don’t need to worry at all about the shipping process and completely trust us to ensure timely delivery 
                            with 100% transparency and 24/7 customer service to tend to your concerns and queries.</p>
                        <div class="tj-theme-button  text-center mt-2">
                                                <a class="tj-transparent-btn" href="{{ route('form.vehicle.boat') }}" target="_blank">
                                                    Get Quote
                                                    <i class="flaticon-right-1"></i>
                                                </a>
                                            </div>
                    </div>
            </div>

    </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            {{-- <span class="sub-title active-shape">Why is that?</span> --}}
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Why is that?</h3>
                            <p class="desc">Keeping in mind the daily rising expenses we have customized suitable and affordable
                                boat shipping solutions for you without compromising on the service quality or reliability! We
                                maintain 100% transparency when it comes to our services and rates so it is convenient for you
                                to choose the option that best fits your needs.<br>However, prices might differ depending on
                                    <ul>
                                    <li>Distance</li>
                                    <li>Size & weight of the boat</li>
                                    <li>Shipping method</li>
                                    <li>Additional services</li>        
                                    </ul>
                                    These factors play a significant role in determining the total cost of your shipping. To find
                                    out an estimated rate of your shipping go get your free online quotes now!  
                            </p>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/BOAT-4.webp') }}" alt="Image">
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/BOAT-3.webp') }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one">
                            <div class="tj-section-heading">
                                {{-- <span class="sub-title active-shape">Types of Shipping Methods</span> --}}
                                <!-- <h2 class="title">Why Choose Us?</h2> -->
                                <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Pick Your Perfect Shipping</h3>
                                    <p class="desc">
                                        Are you an indecisive person? Need help with choosing the perfect mode of shipping for you? Worry no 
                                        more! Ship A1 has a variety of shipping modes for your convenience, all you have to do is select the 
                                        type of shipping you think is best for you, and leave the rest to us!
                                        <ul>
                                        <li>Open Transport:</li>
                                        <li>Enclosed Transport:</li>
                                        <li>Flat Rack Transport:</li>
                                        </ul>
                                        Ship A1 offers these shipping modes to ensure your boat is transported and delivered on time with proper
                                        safety measures!
                                    </p>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                    Comprehensive Boat Transportation methods</h2>
                <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Open Transport:</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            This is the type of transport that is both cost-effective and suitable for
                            shipping. This shipping mode involves your boat being situated onto an open trailer or a flatbed truck.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Enclosed Transport:</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Enclosed transport may not be the cheapest mode of shipping but it does provide an extra layer
                            of protection for your luxury yachts and boats that require extra care.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Flat Rack Transport:</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            This mode of shipping includes placing and securing your boat on a flat rack, it is only suitable
                            for irregular-shaped boats or oversized boats which cannot be transported on standard trailers or carriers.
                            <!-- <ul>
                                    <li>Door-to-door delivery is the easiest type of service, especially if you are someone who would rather let the company control the steering wheel.</li>
                                    <li>It provides you the option of getting your golf cart picked up from your location and dropping it off directly at the designated location without any hassles or issues.</li>
                                    </ul> -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Tow-Away Transport</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">This is the method used for smaller boats and most of those that can be towed.
                                 The boat is attached to a towing vehicle and transported to its destination. This is quite 
                                 a simple and efficient solution.
                            <!-- <ul>
                                    <li>Door-to-door delivery is the easiest type of service, especially if you are someone who would rather let the company control the steering wheel.</li>
                                    <li>It provides you the option of getting your golf cart picked up from your location and dropping it off directly at the designated location without any hassles or issues.</li>
                                    </ul> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="tj-choose-us-section-service-commercial-4">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Boat Preparation and Documentation</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Clean & Inspect Boat</h5>
                        <p class="card-text text-dark">Ensure your Boat is clean inside and out,
                            and remove any dirt, debris, and personal belongings that have a risk of damaging your vehicle further.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Prepare Necessary Documentation</h5>
                        <p class="card-text text-dark">Make sure the necessary documents of your boat like registration papers,
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
{{-- <section class="tj-choose-us-section-service-commercial-2">
    <div class="container">
        <div class="row justify-content-center services">
            <h1 class="services-h1">Vehicle Preparation and Documentation</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Prepare Necessary Documentation</h5>
                        <p class="card-text text-light">Make sure the necessary documents of your boat like registration papers,
                            insurance certificates, or any permits and licenses required. </p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Clean & Inspect Vehicle</h5>
                        <p class="card-text text-light">Ensure your vehicle is clean inside and out,
                            and remove any dirt, debris, and personal belongings that have a risk of damaging your vehicle further. </p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Track your Ride</h5>
                        <p class="card-text text-light">If you are someone who constantly has to keep updates on their vehicle, 
                            worry not! Contact Ship A1 for timely updates, or you can even track your ride online.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-md-4 mb-4">
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
            </div> -->
        </div>
    </div>
</section> --}}
<section class="tj-faq-section tj-faq-page pt-4 pb-0">
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
                                    How do I need to prepare my boat for transport?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Take out personal items; tie up loose parts, drain tanks, disconnect batteries, and document any pre-existing damage.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How is my boat protected while in your care during a move?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Specialized trailers with the feature requirements of your boat's safe fastening and skilled handlers, frequent inspections along the route, and adherence to all safety regulations for all involved.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How is the cost for boat transportation calculated?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>The factors that determine the price of boat transport include the size and weight of your vessel, how far it must travel, special handling requirements, and what additional services are needed. Give us a call for an accurate quote 1 (844) 474-4721.</strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-choose-us-section-service-boat">
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
{{-- <script>
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
</script>  --}}
@endsection