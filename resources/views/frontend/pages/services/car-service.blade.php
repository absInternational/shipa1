@extends('frontend.layouts.app')

@section('content')

<style>
    .full-width {
    width: 100%;
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
.card- {
        background: #29494e;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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


<section class="tj-blog-standard pb-0">
   <div class="container">
           <div class="row">
                <div class="col-lg-8">
							<div class="image-container">
                                <img class="img-fluid" src="{{ asset('frontend/images/about/moto-img.webp') }}" loading="lazy" alt="Motorcyle Transport">
                            </div>
                             <br>
                    <div class="text-container text-left">
                        <h3>The First Stop Platform of Car Shipping Services</h3>
                        <p>ShipA1 is committed to making available the car shipping service that one requires as a fundamental need to deliver his vehicle from one state to another. ShipA1 has worked a lot to get to the point where it now proudly announces that it has reached professionals that are behind the successful auto transport.
                             If you want to ship your car to a new destination and want to have it delivered in a secure style, then is what you need as your trusted car transporter.
                            ShipA1 always has secured the vision to give high-quality car transport services to their customers with an aim to provide innovative solutions to unique car transportation needs of the customers.
                             If you want to transport your vehicle in a very less amount of time, then you can use the service of ShipA1 car transport service as it is known for expedited shipping of vehicles.
                              With unique shipping styles that are a part of ShipA1, customers can easily transport their cars through open car transport service. 
                        <br>
                   Open car transport is about the shipment of the car in an open-air, and the trucker will be taking care of everything from the beginning till the end. Enclosed carriers are a part of ShipA1, and those carriers transport the cars in an enclosed environment where they are safe from the rough conditions of the environment like dust, wind, heavy rainfall, storms, etc. 
                    </p>  
                    </div>
                </div>
            <div class="col-lg-4 p-0">
                
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
                        <h4 class="title text-center">  Motorcycle   Quote!</h4>
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
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block">Phone:</label>
                                        <input type="tel" id="phone" name="phone" placeholder="Number"
                                            required="" />
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
                                        <input type="email" id="email" name="email" placeholder="Email "
                                            required="" />
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

                            <a class="add-car" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                Vehicle</a>

                            <div id="vehicles-container">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class=" " id="trailer_type" name="trailer_type">
                                            <option value="Open" selected>Open Carrier</option>
                                            <option value="Enclosed">Enclosed Carrier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class=" " id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
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

               <div class="row full-width">
                     <div class="col-12 custom-style">
                         <h4 class=" text-center">Premium Vehicle Transport Services</h4>
                         <p class=" text-center">ShipA1, with its standard enclosed vehicle shipping, makes it sure that vehicle transport is done in an exquisite and exclusive style. ShipA1 considers that Americans should have the luxury and convenience to indulge in the delight of having their car shipped right at their doors. For that, ShipA1 has devised a plan to provide door to door vehicle transport facility to Americans, and that plan has been executed hundreds of times successfully as well. Through such a facility, ShipA1 believes that it can provide services right at your doorsteps for your comfort. If you do not want to transport it on your doorsteps, then another facility that is provided by the ShipA1 is of the terminals.  </p>
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

    <section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> Car Transportation</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            ShipA1 always has believed in quality over quantity, and that is why at reasonable rates ShipA1 allocates the best resources and human-power for auto transport in order to strengthen the concept of quality over quantity. At reasonable rates, anyone with a need for auto relocation can get their car shipped at the right location and at the price that is affordable.
                            For those preferring alternatives, ShipA1 provides terminal services. Terminals are temporary storage spaces where vehicles are hauled and shipped. ShipA1 prioritizes quality over quantity, allocating top resources for affordable auto transport.  
                            <!-- <br> At Ship A1 you don’t just have 1 option for shipping your vehicle, here you can even
                            find various suitable services! For shipping your luxurious vehicle, you can opt for
                            enclosed trailers as they are made to protect your vehicle from road debris, scratches, the
                            uncertainty of weather conditions, and potential risks. However, if you are searching for
                            something equally cost-effective and safe, go for open transport! We have expedited options
                            and door-to-door delivery for fast vehicle shipping.
                            <br> So, what are you waiting for? Get a free online quote now and enjoy the ride! -->
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <!-- <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/Untitled design (32).png') }}" alt="Image">
                    </div> -->
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image">

                </div>
            </div>
            </div>
        </div>
</section>
@include('partials.reveiw-site')
    <section class="tj-about-section pt-4">
       

        <div class="container">
            <div class="row">
                
            
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Neoteric Solutions</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            The unravelment provided to the emerging and the existing problems of auto transport by ShipA1 is through the unique neoteric solutions.
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
                        <p class="card-text text-light">Although a bit expensive, it is a safe way to get your car transport. Enclosed carrier guards your car against the external environment such as weather ailments etc.</p>
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