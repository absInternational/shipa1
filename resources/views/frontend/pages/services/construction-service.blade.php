@extends('frontend.layouts.app')

@section('title', 'Construction Equipment Transport - One State to Another State | ShipA1')
@section('meta_description', 'Construction equipment transport services in all over the USA, Ship your desired vehicle from one state to another state in one click - ShipA1.')

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

<section class="tj-choose-us-section-service-construction">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">CONSTRUCTION EQUIPMENT SERVICES</h2>
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


@include('partials.reveiw-site')

<section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">The First Stop
            Platform of Construction <br>Shipping Services</h2>

        
    </div>
</section>


<section class="tj-about-section pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Construction Equipment Transport</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            The advancement in the construction business has led to the growth of the heavy construction equipment marketplace. 
                            It is one of the most prominent and most competitive sectors of the U.S. manufacturing economy involved in the making of 
                            construction equipment. Since this industry is developing in its own way, the need for <a class="pp-link-2" href="{{ route('welcome') }}"> construction equipment transport </a> is 
                            increasing with time.
                            There are many companies that are in operation and business for the transportation of construction equipment.
                            Since every work you do depends upon the productivity of heavy equipment and relevant parts, goods, accessories,
                             and services, it is worth it to have a dependable resource to transport the equipment without harming them in any way. 
                             Over the last few decades, the automobile transportation market has grown tremendously,
                             and now has become the practical selection for people to transport their vehicles; both locally and internationally.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/contruction-1.webp') }}" alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
           
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
            <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/construction-2.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Expert Heavy Hauling</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            The<a class="pp-link-2" href="{{ route('frontend.pages.services.heavy-service') }}"> heavy machinery transport </a> business has used technology in the best way possible. There are many types of haulers that are
                             identified with ShipA1. Some are constructed to haul a single car, while some are developed to haul things which are 
                             incredibly long and heavy. For the mechanical edition, the truck needs a huge winch. Anything you need to ship,
                             ShipA1 has got trucks that are designed to move it. Flatbed trucks are available in many various shapes and sizes.
                             The company that specializes in construction equipment transport in America is ShipA1.  With such a wide variety of construction equipment 
                             out there, knowing precisely what you’re shipping will let ShipA1 secure you a better and more accurate car transport quote,
                              which, in turn, will help us get your construction equipment moved a lot more quickly.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
               
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Specialized Equipment Shipping</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Heavy equipment hauling can be a complicated undertaking and it’s important to select a company that specializes in this work.
                            One essential factor to think about aside from the professionalism and qualifications of the auto shipping company is the high
                            quality and ability of the machines to transport. They should have the ability to haul every load whatever the size, weight, 
                            quantity, or the kind of equipment. ShipA1, in this case, is quite competitive because of the experts that are a part of it. 
                            ShipA1 has, at its disposal, a variety of heavy haulers, that it uses for construction equipment transport. As construction 
                            equipment is a lot heavier and bulkier than even a huge pickup truck, ShipA1 locates a flatbed transporter with a large enough 
                            truck that has the ability to move your heavy equipment smoothly.


                            </p>
                        </div>
                        
                    </div>
                </div>

            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
            <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/contruction-4.webp') }}" alt="Image">
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
        <div class="container">
            <div class="row">
               

            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
            <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/contruction-5.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> Construction Transportation</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Heavy equipment shipping may be a challenging endeavor, and it’s important that you pick a specialized carrier company
                             that’s familiar and experienced with your hauling needs. One more thing that should be considered in regards to construction
                              equipment shipping is choosing the correct construction equipment transport support or company. Before the carrier service 
                              arrives, you should take the essential actions & check the <a class="pp-link-2" href="{{ route('frontend.forms.construction_transport') }}"> shipping quotes </a> so as to make sure your equipment is shielded and
                               secured for any unfavorable conditions it may encounter during its shipment.</p>
                        </div>
                        
                    </div>
                </div>

            
            
            </div>
        </div>

</section>


    <section class="tj-about-section pt-4">
        

        <div class="container">
            <div class="row">
                
            
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Experienced</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            You should know, not every shipping company has the ability for construction equipment shipping as it’s quite a daunting task and requires top-notch skilled personnel & the appropriate trailers that are necessary for doing the job.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Availability of Trailers</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            For construction equipment transport the car hauler must have (RGN) Removable Gooseneck Trailer, Flatbeds and Expendable trailers etc. And along with having these trailers and the dexterous employees we make it possible to ship your cars.</p>
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
            <h1 class="services-h1">Factors That Determine The Price</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Dimensions of the equipment</h5>
                        <p class="card-text text-light">We will need to evaluate the size, length etc. The permits that needs to be taken and if the equipments are large we have to dismantle it first & all these factors increases the price of your shipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Trailer Type</h5>
                        <p class="card-text text-light">From a wide range of options you should choose the trailer which is the most feasible for shipping. You will be guided whether a flatbed trailer is suitable or not etc and will modify the price you’re paying.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">International Shipping</h5>
                        <p class="card-text text-light">Although we don’t ship internationally, but we believe in educating our customers and creating awareness. This is also among the detrimental factors affect your price.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="tj-choose-us-section-service-construction">
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
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                        alt="Image">

                </div>
            </div>
        </div>
    </div>

</section>

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
                                        <strong>Yes, Ship A1 offers a variety of heavy equipment services specially tailored to your needs, whether it’s a
forklift, excavator, trailer, crane, etc. we are here to assist you with a 100% guarantee of quality, safety,
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
                                        <strong>It all depends on the type of equipment you are planning on shipping, other than that our estimated
delivery time also varies on the distance, weather conditions as well and road conditions. However, if
you want your heavy equipment to be delivered urgently then we would suggest you opt for expedited
shipping as it’s the fastest shipping service provided by Ship A1, while it is a bit pricey it would ensure
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
                                        <strong>ShipA1 can connect you with qualified heavy equipment loading and unloading service providers in your
                                        area. We can advise on the best approach based on your specific equipment and needs.</strong>
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
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    Not only you will get the insurance coverage. The carrier company will provide you with insurance up to a whopping upto $1 million. As soon as you get in touch with the driver you will get the documents which are related to your insurance.

                                        
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

<script>
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