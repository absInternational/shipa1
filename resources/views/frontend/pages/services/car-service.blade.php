@extends('frontend.layouts.app')

@section('content')
<Style>
    .why-box{
        border-radius:12px;
        padding: 40px 0px;
        background:#183c46;
    }
    .title-2{
        color:white;
    }
    .desc-2{
        color:white;
    }
    .services {
            text-align: center;
            padding: 50px 0;
            background-color: #ffffff;
        }
        .services h1 {
            margin-bottom: 50px;
            color: #8FC445;
        }
        .service-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .service-box {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 300px;
            text-align: left;
        }
        .service-box img {
            height: 40px;
            width: 40px;
        }
        .service-box h3 {
            margin: 20px 0 10px;
            color: #333333;
        }
        .service-box p {
            color: #666666;
        }
</Style>
    <!--========== breadcrumb Start ==============-->
    <!-- <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center"></h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <span>
                                <span> Service</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--========== breadcrumb End ==============-->

    <!--========== blog details Start ==============-->

    <section class="tj-choose-us-section-service-car">
        <div class="container mt-4">
            <div class="row mt-4">

                <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2">SERVICES</span>
                            <h2 class="title">CAR SHIPPING SERVICES</h2>
                            <p class="desc-2">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                                customers and seeks your trust in return of our services.
                            </p>
                        </div>
                        <!-- <div class="row">
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
                        </div> -->
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
                    <div class="tj-input-form-car mt-4 w-100" data-bg-image="">



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
                                            <option value="Car">Car</option>
                                            <option value="Golf-Cart">Golf Cart</option>
                                            <option value="Motorcycle">Motorcycle</option>
                                            <!-- <option value="Boat-Transport">Boat Transport</option> -->
                                            <!-- <option value="Freight-Transportation">Freight Transportation</option> -->
                                            <!-- <option value="Heavy-Equipment">Heavy Equipment</option> -->
                                            <!-- <option value="RV-Transport">RV Transport</option> -->
                                        </select>
                                        <label class="error-message" id="tabSelector-error">This field is required.</label>

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
                                                <input class="form-control" required name="Custo_Name" type="text"
                                                    placeholder="Customer Name">
                                                <label class="error-message" id="Custo_Name-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <!-- <div class="col-xl-4 col-lg-4">
                        <div class="single-input-field">
                            <label class="d-block text-white"> Phone:</label>
                            <input class="form-control" required name="Custo_Phone" type="tel" placeholder="Customer Phone">
                            <label class="error-message" id="Custo_Phone-error">This field is required.</label>
                        </div>
                    </div> -->
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="Custo_Phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

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
                                                <button class="tj-submit-btn" type="submit" id="submit_instant_code"
                                                    value="submit">
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

    
    @include('partials.reveiw-site')
    
    <section class="tj-about-section-four">
            <div class="container">
            <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">The First Stop Platform of Car <br>Shipping Services</h2>

                <div class="row">
                  
                    <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">

                        <div class="about-content-three">
                            
                            <div class="tj-section-heading">
                                <!-- <span class="sub-title active-shape ">Ship A1 Transport</span> -->
                                <p class="desc">
                                Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your comfort is our top priority, ship the best vehicles at reasonable rates without compromising quality. Our professional and expert team provides you with 100% insured and secure vehicle transport solutions that are specifically tailored to your needs.
                         <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even find various suitable services! For shipping your luxurious vehicle, you can opt for enclosed trailers as they are made to protect your vehicle from road debris, scratches, the uncertainty of weather conditions, and potential risks. However, if you are searching for something equally cost-effective and safe, go for open transport! We have expedited options and door-to-door delivery for fast vehicle shipping.
                         <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
                                </p>
                            </div>
                            <!-- <div class="content-box d-flex align-items-center">
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title">Our Mission</h5>
                                        </div>
                                    </div>
                                    <p class="desc">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div>
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/winner.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title">Our Vision</h5>
                                        </div>
                                    </div>
                                    <p class="desc">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div>
                            </div> -->
                            <div class="tj-theme-button">
                                <a class="tj-primary-btn" href="{{ route('quote.form.combine') }}" target="_blank">
                                Get Quote<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                        <div class="about_image text-center">
                            <img src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="tj-about-section-four">
            <div class="container">
            <!-- <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">The First Stop Platform of Car <br>Shipping Services</h2> -->

                <div class="row">
                <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                        <div class="about_image text-center">
                            <img src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">

                        <div class="about-content-three">
                            
                            <div class="tj-section-heading">
                                <!-- <span class="sub-title active-shape ">Ship A1 Transport</span> -->
                                <p class="desc">
                                Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your comfort is our top priority, ship the best vehicles at reasonable rates without compromising quality. Our professional and expert team provides you with 100% insured and secure vehicle transport solutions that are specifically tailored to your needs.
                         <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even find various suitable services! For shipping your luxurious vehicle, you can opt for enclosed trailers as they are made to protect your vehicle from road debris, scratches, the uncertainty of weather conditions, and potential risks. However, if you are searching for something equally cost-effective and safe, go for open transport! We have expedited options and door-to-door delivery for fast vehicle shipping.
                         <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
                                </p>
                            </div>
                            <!-- <div class="content-box d-flex align-items-center">
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title">Our Mission</h5>
                                        </div>
                                    </div>
                                    <p class="desc">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div>
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/winner.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title">Our Vision</h5>
                                        </div>
                                    </div>
                                    <p class="desc">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div>
                            </div> -->
                            <div class="tj-theme-button">
                                <a class="tj-primary-btn" href="{{ route('quote.form.combine') }}" target="_blank">
                                Get Quote<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </section>

    
    <section class="tj-about-section-five">
            <div class="container">
                <div class="row">
                <div class="services">
        <h1>Car Hauling Services</h1>
        <div class="service-container">
            <div class="service-box">
                <!-- <img src="https://via.placeholder.com/40" alt="Icon 1"> -->
                <h6>Open Trailer</h6>
                <p>It’s the standard method with which we ship cars. It is the best option if you want a cheap car moving service.</p>
            </div>
            <div class="service-box">
                <!-- <img src="https://via.placeholder.com/40" alt="Icon 2"> -->
                <h6>Enclosed Carrier</h6>
                <p>Although a bit expensive, it is a safe way to get your car transport. Enclosed carrier guards your car against the external environment such as weather ailments etc.</p>
            </div>
            <div class="service-box">
                <!-- <img src="https://via.placeholder.com/40" alt="Icon 3"> -->
                <h6>Expedited Shipping</h6>
                <p>If you are looking to move quickly to a new place and need your car moved along with you then expedited shipping service must be your first choice.</p>
            </div>
        </div>
    </div>
                    <!-- <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-three">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape ">Ship A1 Transport</span>
                                <p class="desc">
                                Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your comfort is our top priority, ship the best vehicles at reasonable rates without compromising quality. Our professional and expert team provides you with 100% insured and secure vehicle transport solutions that are specifically tailored to your needs.
                         <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even find various suitable services! For shipping your luxurious vehicle, you can opt for enclosed trailers as they are made to protect your vehicle from road debris, scratches, the uncertainty of weather conditions, and potential risks. However, if you are searching for something equally cost-effective and safe, go for open transport! We have expedited options and door-to-door delivery for fast vehicle shipping.
                         <br> So, what are you waiting for? Get a free online quote now and enjoy the ride!
                                </p>
                            </div>
                            
                            <div class="tj-theme-button">
                                <a class="tj-primary-btn" href="{{ route('quote.form.combine') }}" target="_blank">
                                Get Quote<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                        <div class="about_image text-center">
                            <img src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                        </div>
                    </div> -->
                </div>
            </div>
    </section>

    <section class="tj-choose-us-section-service-car">
    <div class="container why-box">
                <div class="row"> 
                    <div class="col-lg-8 sal-animate" data-sal="slide-right" data-sal-duration="800">
                        <div class="about-content-two">
                            <div class="tj-section-heading">
                                <!-- <span class="sub-title active-shape"> See Sea Transport Benifit</span> -->
                                <h2 class="title-2">Why Choose Us?</h2>
                                <p class="desc-2">
                                We have a distinct approach when it comes to the philosophy of business.<br>Our belief in innovation & unique business practices differentiate us & here are the reasons why you must choose us:
                                </p>
                            </div>

                            <div class="content-box d-flex align-items-center border-top">
                                <!-- <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title-2">Our Mission</h5>
                                        </div>
                                    </div>
                                    <p class="desc-2">Lorem ipsum is simply velit anod ipas aliquet enean quis.</p>
                                </div> -->
                                <div class="tj-icon-box">
                                    <div class="ab-text d-flex align-items-center">
                                        <!-- <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title-2">Our Mission</h5>
                                        </div> -->
                                    </div>
                                    <p class="desc-2">★ Professional & responsive customer service available 24/7.</p>
                                </div>
                                
                                <div class="tj-icon-box">
                                    <!-- <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title-2">Our Mission</h5>
                                        </div>
                                    </div> -->
                                    <p class="desc-2">★ A wide range of services such as open, enclosed & expedited.</p>
                                </div>
                                <div class="tj-icon-box pb-4">
                                    <!-- <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/winner.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title-2">Our Vision</h5>
                                        </div>
                                    </div> -->
                                    <p class="desc-2">★ Prompt delivery due to efficient use of trailers.</p>
                                </div>
                            </div>
                            <div class="content-box d-flex align-items-center">
                                
                                <div class="tj-icon-box">
                                    <!-- <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/winner.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title-2">Our Vision</h5>
                                        </div>
                                    </div> -->
                                    <p class="desc-2">★ Legion of truckers available with years old network.</p>
                                </div>
                                <div class="tj-icon-box">
                                    <!-- <div class="ab-text d-flex align-items-center">
                                        <div class="ab-icon">
                                            <img src="assets/images/icon/global.svg" alt="Icon">
                                        </div>
                                        <div class="ab-title">
                                            <h5 class="title-2">Our Mission</h5>
                                        </div>
                                    </div> -->
                                    <p class="desc-2">★ Get online car shipping quotes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                            <div class="image-box">
                                <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                            </div>
                            <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                            <!-- <img class="group-shape" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image"> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    
   
    <!--========== blog details End ==============-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#category').change(function() {
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
    </script>

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
