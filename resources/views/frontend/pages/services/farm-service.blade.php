@extends('frontend.layouts.app')
@section('title', 'Farm Transport Services - Heavy Haul Trucking Shipping Service | ShipA1')
@section('meta_description', 'Farm Transport Services, Ship your farming vehicle at your desired place in the USA with
insurance services and securely without any scratch - Shipa1.')
@section('content')
<Style>
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
</Style>
<!--========== blog details Start ==============-->
<section class="tj-choose-us-section-service-farm">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">FARM EQUIPMENT SERVICES</h2>
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
{{-- @include('partials.reveiw-site') --}}
@include('partials.reveiw-small-detail') 
{{-- <section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">The First Stop
            Platform of Farm <br>Shipping Services</h2>
    </div>
</section> --}}
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> Farm Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Efficient Farm Transportation</h3>
                        <p class="desc">
                            Transportation has its importance in every industry, whether it be the industrial sector or
                             the business sector. If we talk about farming, farmers most importantly need to deliver goods 
                             from the field to the storage house to ensure smooth cultivation and procedures. Farm transportation 
                             or simply farm transport begins and ends with a properly managed shipment process. <br>
                            Farmers need proper equipment to perform their tasks efficiently, this is where Ship A1 plays an 
                            important role in delivering the best and most efficient farm transportation services.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/farm-2.webp') }}"
                            alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/farm-1.webp') }}"
                            alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> Farm Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Choosing Reliable Farm Transportation service</h3>
                        <p class="desc">
                            Whether it comes to harvesting the crops or arranging the goods for the crops, transport is an
                             essential part of this industry. However, the process of farm transportation is a difficult task.
                              You cannot rely on any random company offering services for transportation at affordable rates. 
                              One has to be careful when choosing a reliable resource as there are plenty of fraudulent companies
                               and scammers. <br>
                            Ship A1, a leading transportation company with a proven record of 16 successful years of dealing with
                             shipments across the USA is fully equipped with advanced vehicles used for farming, along with 
                             affordable rates, and multiple modes of services we are here to offer what we do best!

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
                        {{-- <span class="sub-title active-shape"> Farm Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Method used in Farm Transport</h3>
                        <p class="desc">
                            The two main categories of farm transport are:
                        <ul>
                            <li>
                                The manual mode of transport.
                            </li>
                            <li>
                                The advanced or mechanized method of transport.

                            </li>
                        </ul>
                        Both services have their pros and cons. The traditional method is the oldest, and farmers have
                        been using it for decades. There is no modern equipment involved in this mode of transportation.
                        Therefore, the manual mode consumes more physical effort and time of the farmers. This method is
                        compatible with short distances, usually from the field to the storage place.
                        The advanced method of transport is the modern method, and it is best for long-distance
                        transportation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/farm-4.webp') }}"
                            alt="Image">
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
                        <img class="rounded" src="{{ asset('frontend/images/project/farm-3.webp') }}"
                            alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> Farm Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Factors Affecting Cost and Efficiency</h3>
                        <p class="desc">
                            In advanced farm transportation, modern equipment, and the latest machinery is used for
                            transportation. Therefore, there is less consumption of time and energy in this mode of
                            transport. Ship A1 offers all these services at affordable price rates.
                            The price of these services depends on certain factors that you should always consider when
                            you plan to ship your farm material.
                        <ul>
                            <li>
                                The total distance of your journey.
                            </li>
                            <li>
                                Types of goods need to be transported.
                            </li>
                            <li>
                                The overall size and quantity of the goods.
                            </li>
                            <li>
                                Additional services if there are any.
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
                Why Choose Ship A1?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Safeguarding From Insurance</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Expert shipping firms like Ship A1 offer complete insurance coverage for your farm equipment 
                            during transportation, making sure you are covered and reimbursed in the event that any damage occurs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Professional Shipping Team</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Our knowledgeable shipping staff prioritizes your equipment's safety by securely fastening it with straps and following
                             all required safety measures, guaranteeing your total pleasure with our service.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Timely Delivery </span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Ship A1 places a high value on timeliness, ensuring that your farm equipment reaches its destination on schedule. 
                            This minimizes delays and keeps your farming operations operating efficiently.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Personalized Transportation Options</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Based on the unique requirements of your Farm equipment, we provide customized transport solutions. This includes choosing the
                             right trailers and organizing the necessary logistics to guarantee a timely and safe delivery.</p>
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
                        <a class="tj-transparent-btn" href="href="{{ config('app.url') }}/contact_us" target="_blank">
                            Get Support<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="tj-choose-us-section-service-farm-8">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Additional Services Provided</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Experienced Network of Truckers</h5>
                        <p class="card-text text-dark">The vast network of competent truckers enables us to deliver
                            your shipment timely and they are also aware of the areas that they would encounter during
                            transit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Tracking Services</h5>
                        <p class="card-text text-dark">We offer tracking services to the people who want their
                            construction equipment shipped so that they can track the time for the arrival of shipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Trailer Type</h5>
                        <p class="card-text text-dark">You could choose an option for construction equipment where
                            your shipment will be prioritized but it has a price attached to it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Additional Services Provided</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Experienced Network of Truckers</h5>
                        <p class="card-text text-light">The vast network of competent truckers enables us to deliver
                            your shipment timely and they are also aware of the areas that they would encounter during
                            transit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Tracking Services</h5>
                        <p class="card-text text-light">We offer tracking services to the people who want their
                            construction equipment shipped so that they can track the time for the arrival of shipment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Trailer Type</h5>
                        <p class="card-text text-light">You could choose an option for construction equipment where
                            your shipment will be prioritized but it has a price attached to it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="tj-choose-us-section-service-farm">
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
<!--========== Faq Section Start ==============-->
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
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                    </div>

                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Do you transport all kinds of heavy equipment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, Ship A1 offers a variety of heavy equipment services specially tailored
                                        to your needs, whether it’s a
                                        forklift, excavator, trailer, crane, etc. we are here to assist you with a 100%
                                        guarantee of quality, safety,
                                        and flexible rates for your route.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much time will it take to ship my heavy equipment?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>It all depends on the type of equipment you are planning on shipping, other
                                        than that our estimated
                                        delivery time also varies on the distance, weather conditions as well and road
                                        conditions. However, if
                                        you want your heavy equipment to be delivered urgently then we would suggest you
                                        opt for expedited
                                        shipping as it’s the fastest shipping service provided by Ship A1, while it is a
                                        bit pricey it would ensure
                                        your equipment reaches you in your desired timeframe.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can you arrange for the loading and unloading of my equipment?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>ShipA1 can connect you with qualified heavy equipment loading and unloading
                                        service providers in your
                                        area. We can advise on the best approach based on your specific equipment and
                                        needs.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Are your equipment insured?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Not only you will get the insurance coverage. The carrier company will provide you
                                    with insurance up to a whopping upto $1 million. As soon as you get in touch with
                                    the driver you will get the documents which are related to your insurance.


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========== Faq Section End ==============-->
<!--=========== Blog Section Start =========-->
@include('partials.blog-slider')
<!--=========== Blog Section End =========-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="path/to/jquery.min.js"></script>
{{-- <script src="path/to/owl.carousel.min.js"></script> --}}
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
<script>
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
</script>
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1"; // Autoplay the video
    }
</script>
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
</script>
<script>
    // document.querySelectorAll('input[type="text"]').forEach((input) => {
    //     input.addEventListener("input", function() {
    //         this.value = this.value.replace(/[^0-9]/g, "");
    //     });
    // });
</script>
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
</script>
<script>
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
</script>
<script>
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
