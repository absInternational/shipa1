@extends('frontend.layouts.app')

@section('content')

<style>
    .full-width {
    width: 100%;
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
                        <h1 class="breadcrumb-title text-center">Auctions Car Transport</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Auctions Car</span>
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
                                <img class="img-fluid" src="https://www.shipa1.com/img/banner-5-800x400-landing.webp" loading="lazy" alt="Auction Car Transport">
                            </div>
                             <br>
                    <div class="text-container text-left">
                        <h3>A Cost-Efficient Way of Motorcycle Shipping</h3>
                        <p>You can find many motorcycle shipping companies online that are providing the services nationwide, but often it becomes a nightmare for some of the people when they find that their motorcycle has not been shipped at the quoted time and then the company is demanding for hidden charges that one never knew existed. This kind of rip-off can hurt your sentiments related to the shipping service which is why ship A1 provides its customers with accurate shipping quotes. For one to get to know about the reliable motorcycle shipping company, one needs to do a lot of research and after only getting to know what others have to say about the particular company, will you be able to know about the motorcycle shipping company and whether or not you need to trust it with your motorcycle relocation. Well, you can trust the company that has relatively a sound experience in this field, and that is ShipA1. ShipA1 has an extraordinary connection with the service of motorcycle shipping because it excels in the motorcycle shipment across the United States of America. It has managed to ship many hundreds and thousands of motorcycles and all in a very good condition because ShipA1 only provides professional service</p> 
                        
                        <br>
                       
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
                 <div class="tj-input-form-car" data-bg-image="">
                    <img src="{{ asset('img/disco-.png') }}" alt="Your Image" class="top-left-image">
                   <h4 class="title text-center">Instant Car Shipping Quote!</h4>
                        <form action="{{ route('submit.quote') }}"  method="post" class="rd-mailform "
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
                                        <label class="d-block"> Name:</label>
                                        <input type="text" id="name" name="name" placeholder=""
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Phone:</label>
                                        <input type="text" id="phone" name="phone" placeholder=" "
                                            required="" />
                                        <small id="errPhone" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Email:</label>
                                        <input type="email" id="email" name="email" placeholder=""
                                            required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white mb-0">Vehicle Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year" required>
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
                                        <select class="nice-select vehicle-make" name="make[]" id="make" required>
                                            <option value="" disabled selected>Select</option>
                                            @foreach ($makes as $make)
                                                <option value="{{ $make->make }}">{{ $make->make }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <select class="nice-select vehicle-model" name="model[]" id="model" required>
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <a class="add-car-1 mb-2" id="addVehicleBtn">
                                <i class="fa fa-plus"> Add
                                    Vehicle </i>
                            </a>

                            <div id="vehicles-container">
                            </div>



                            <div class="row mt-0">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin"
                                            placeholder="" required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination"
                                            placeholder="" required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="line-height:23px;">
                                        <label for="trailer_type" class="text-white">Select</label>
                                        <select class="form-control" id="trailer_type" name="trailer_type">
                                            <option value="Open" selected>Open</option>
                                            <option value="Enclosed">Enclosed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class="form-control" id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="input-form mt-3">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" type="file" id="image" name="image"
                                    placeholder="Upload File" />
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
                                            placeholder="Modification Info" />
                                    </div>
                                </di>
                                <div class="col-md-6">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="available_at_auction"
                                        name="available_at_auction" value="1" />
                                    <label class="form-check-label text-white" for="available_at_auction">Available at
                                        Auction?</label>
                                </div>

                                <div class="input-form div-link mt-3" style="display: none;">
                                    <label class="d-block"> Enter Link:</label>
                                    <input class="form-control" type="url" id="link" name="link"
                                        placeholder="Enter Link" />
                                </div>
                                   
                                </div>
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
        <h4 class=" text-center">Delivering Motorcycles Promptly Nationwide</h4>
        <p class=" text-center">Many professionals truckers are a part of ShipA1, and that is the main reason behind the on-time delivery of motorcycles. Another way to look into what services look like in a particular company, you can always look at their feedback section, testimonials, and their rating to know about their services. ShipA1 and its motorcycle shipping are famous around the nation, and that is why you will always find satisfied customers when it comes to ShipA1 motorcycle shipping. Since ShipA1 has its own quality standards, it believes that the customers should be given a proper service across the nation.</p>
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