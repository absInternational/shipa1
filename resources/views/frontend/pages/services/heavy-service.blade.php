@extends('frontend.layouts.app')
@section('title', 'Heavy Equipment Shipping Services - Shipping Quotes and Calculator | ShipA1')
@section('meta_description', 'Get Heavy Equipment Shipping Services with insurance get vehicle transport with safety in
the easiest way nationwide, Get free shipping quotes now - Shipa1.')
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
    background: #f8f9fa;
    }
    .card- {
    /* background: #29494e; */
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
<section class="tj-choose-us-section-service-heavy">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">HEAVY EQUIPMENT SERVICES</h2>
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
            Platform of Heavy Shipping Services</h2>
    </div>
</section> --}}
<section class="tj-about-section pt-4 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> Heavy Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Heavy Transportation</h3>
                        <p class="desc">
                            Oversized and heavy equipment can have logistical and managerial challenges if you’re
                            unfamiliar with the
                            transportation procedure or the way <a class="pp-link-2"
                                href="https://www.shipa1.com/heavy-equipment-hauling/"> heavy equipment shipping </a> is
                            done.
                            So if you’re considering shipping heavy equipment nationwide,
                            ShipA1 is well equipped to manage any form of shipment through all stages of the approach.
                            Services of ShipA1 are accessible to our clients nationwide. Before the carrier service
                            arrives, you will have to take the essential steps so as
                            to make sure your equipment is shielded and secured for any unfavorable and risky conditions
                            it may encounter during its shipment.
                            Heavy equipment shipping services are available all over the nation to facilitate customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/CONSTRUCTION-1.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/CONSTRUCTION-2.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> Heavy Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Heavy Transportation</h3>
                        <p class="desc">
                            In the event of any query, you may also contact our customer service representative, they’ll
                            be delighted to help you with your shipment queries, or you could mail us.
                            If during the shipment, your equipment becomes damaged, the company is going to take care of
                            it and will cover all the damages.ShipA1 always ship heavy equipment with care. As
                            construction equipment is quite a bit heavier and bulkier than even a huge pickup truck,
                            we’ll want to locate a flatbed transporter with a large enough truck to have the ability to
                            move it.
                            You may discover that it’s more cost-effective to avail the services offered by the ShipA1
                            as transporting the heavy equipment on your own will cost you a lot more and it will be a
                            big deal because heavy equipment shipping is not something that you should take lightly.
                            Obviously, you will need to have the correct equipment and trailer required to haul the
                            particular load.
                            Since certain equipment are loaded on the basis of particular guidelines, therefore you
                            should know about the specification of the equipment.

                        </p>
                    </div>

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
                        {{-- <span class="sub-title active-shape"> Heavy Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Heavy Transportation</h3>
                        <p class="desc">
                            ShipA1 is able to handle every type of heavy equipment therefore one doesn’t need to worry.
                            Equipment may vary greatly based on the load and its need. Heavy equipment hauling can be a
                            troublesome endeavor and it’s important to pick a business that specializes in heavy
                            equipment shipping. You can get exact <a class="pp-link-2" href="{{ route('welcome') }}">
                                shipping quotes for your euipment </a> by entering all the specifice.
                            Shipping heavy equipment is a dangerous procedure if you’re unfamiliar with the potential
                            trouble spots. Many heavy equipment hauling companies will promise you with limitless
                            offers, but you need to trust the one that is the most reliable. ShipA1 with its heavy
                            equipment shipping promise high-quality at competitive rates.
                            ShipA1 has experts to handle your heavy equipment and is equipped with all the trailers and
                            tools that are necessary for the heavy equipment shipping; therefore there is no point of
                            not trusting ShipA1.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/CONSTRUCTION-4.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Frequent Delivery</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Heavy equipment Shipping is often needed to shift it from one site to another that’s is why
                            we have special focus on frequent movement of heavy equipment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Insurance Coverage</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            One of the most important aspect while shipping heavy equipment is the risk of damage which
                            is protected with complete Insurance coverage.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-choose-us-section-service-commercial-6">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Ins & Outs of Heavy Equipment</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Affordable cost for shipping</h5>
                        <p class="card-text text-dark">The good news is that the price to ship a heavy equipment
                            wouldn’t be as big as the size of your equipment. We have affordable prices with optimum
                            service.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Type of trailers used in Heavy Equipment</h5>
                            <p class="card-text text-dark">A vast majority of the heavy equipments are being shipped by a
                                hotshot trailer or a lowboy trailer. Our network of skilled truckers know how to pickup &
                                offload equipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Kind of equipments that could be shipped</h5>
                        <p class="card-text text-dark">As a matter of fact, There are a plethora of equipment types
                            that could be shipped. Such as semi tractors, tanks, forklifts, and bulldozer. At ShipA1 we
                            have the right match of truckers & trailers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Ins & Outs of Heavy Equipment</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-white">Type of trailers used in Heavy Equipment</h5>
                        <p class="card-text text-light">A vast majority of the heavy equipments are being shipped by a
                            hotshot trailer or a lowboy trailer. Our network of skilled truckers know how to pickup &
                            offload equipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-white">Affordable cost for shipping</h5>
                        <p class="card-text text-light">The good news is that the price to ship a heavy equipment
                            wouldn’t be as big as the size of your equipment. We have affordable prices with optimum
                            service.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bolder text-white">Kind of equipments that could be shipped</h5>
                        <p class="card-text text-light">As a matter of fact, There are a plethora of equipment types
                            that could be shipped. Such as semi tractors, tanks, forklifts, and bulldozer. At ShipA1 we
                            have the right match of truckers & trailers.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
{{-- <section class="tj-choose-us-section-service-heavy">
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
<section class="tj-faq-section tj-faq-page">
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
                                    Are your vehicles insured?
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
