@extends('frontend.layouts.app')

@section('content')

<Style>

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

</Style>
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
                <!-- <div class="tj-input-form-car mt-4 w-100" data-bg-image="">



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
                        <div class="container mt-2">

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

                            <div class="vehicle_quote_info" id="step2" style="display: none;">
                                <div class="row">
                                    <h4 class="title text-center">VEHICLE INFORMATION</h4>
                                    <select id="tabSelector" class="" aria-label="Tab selector" required>
                                        <option value="" selected disabled>Select a Vehicle</option>
                                        <option value="Atv">Atv Utv Transport</option>
                                        <option value="Car">Car</option>
                                        <option value="Golf-Cart">Golf Cart</option>
                                        <option value="Motorcycle">Motorcycle</option>

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


                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white">Phone:</label>
                                            <input id="phone" class="form-control" required name="phone"
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


                </div> -->
            </div>

        </div>
    </div>
</section>


@include('partials.reveiw-site')

<section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">The First Stop
            Platform of Car <br>Shipping Services</h2>

        
    </div>
</section>


<section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> Car Transportation</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your
                            comfort is our top priority, ship the best vehicles at reasonable rates without compromising
                            quality. Our professional and expert team provides you with 100% insured and secure vehicle
                            transport solutions that are specifically tailored to your needs.
                            <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even
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
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">

                </div>
            </div>
            </div>
        </div>
</section>


    <section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Image">

                </div>
            </div>
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> Car Transportation</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Want to ship your vehicle without worrying about emptying your bank account? At Ship A1 your
                            comfort is our top priority, ship the best vehicles at reasonable rates without compromising
                            quality. Our professional and expert team provides you with 100% insured and secure vehicle
                            transport solutions that are specifically tailored to your needs.
                            <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even
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
            </div>
        </div>

        <div class="container">
            <div class="row">
                
            
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> Neoteric Solutions</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            The unravelment provided to the emerging and the existing problems of auto transport by ShipA1 is through the unique neoteric <br> solutions.
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
                            You must expect nothing less than an optimum level service when talking about ShipA1. You will get the best car transport experience with us.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tj-cta-section-two">
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
                                <a class="tj-transparent-btn" href="http://127.0.0.1:8000/contact_us" target="_blank">
                                    Get Support<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                          

                        </div>
                        
                        
                    </div>
                </div>
            </div>
</section>

<section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Car Hauling Services</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Enclosed Carrier</h5>
                        <p class="card-text text-light">Although a bit expensive, it is a safe way to get your car transported. Enclosed carrier guards your car against the external environment such as weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Open Trailer</h5>
                        <p class="card-text text-light">It’s the standard method with which we ship cars. It is the best option if you want a cheap car moving service.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Expedited Shipping</h5>
                        <p class="card-text text-light">If you are looking to move quickly to a new place and need your car moved along with you then expedited shipping service must be your first choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="tj-choose-us-section-service-car-2">
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
                            <p class="desc-2">★ Professional & responsive customer service available 24/7.</p>
                        </div>

                        <div class="tj-icon-box">

                            <p class="desc-2">★ A wide range of services such as open, enclosed & expedited.</p>
                        </div>
                        <div class="tj-icon-box pb-4">

                            <p class="desc-2">★ Prompt delivery due to efficient use of trailers.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">

                        <div class="tj-icon-box">

                            <p class="desc-2">★ Legion of truckers available with years old network.</p>
                        </div>
                        <div class="tj-icon-box">

                            <p class="desc-2">★ Get online car shipping quotes.</p>
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

</section>

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
                                    How do I prepare my vehicle for transport?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We'll provide detailed instructions, but you'll need to remove personal belongings, as well as make sure to follow guidelines or instructions based on the chosen transport method.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get a quote?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>At Ship A1 we have the convenience of providing free online quotes to our customers, you can check them out at www.shipa1.com</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I track my vehicle during transport?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Yes!  ShipA1 provides a user-friendly tracking system for real-time updates on your vehicle's location throughout the journey.</strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>







<!--=========== Blog Section Start =========-->
@include('partials.blog-slider')
<!--=========== Blog Section End =========-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="path/to/jquery.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>

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