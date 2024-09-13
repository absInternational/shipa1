@extends('frontend.layouts.app')
@section('title', 'Get Car Shipping Quote | ShipA1')
@section('meta_description',
    'Experience seamless car shipping with Shipa Car Transport. Get an instant quote,
    nationwide coverage, and transparent pricing. Trust us for swift and secure vehicle transportation.')
@section('content')

    <style>
        /* Error styling */
        .error {
            border: 2px solid red;
        }

        .make-dropdown {
            max-height: 200px;
            /* Set the maximum height */
            overflow-y: auto;
            /* Enable vertical scrolling */
        }

        .dropdown-item {
            white-space: nowrap;
            /* Prevent text wrapping */
        }

        /* Ensure the dropdown menu does not push the page */
        .model-dropdown {
            max-height: 200px;
            /* Adjust based on your design */
            overflow-y: auto;
            position: absolute;
            /* Ensures dropdown is properly positioned */
            z-index: 1000;
            /* Ensures dropdown appears above other content */
        }

        /* Adjust this if needed to prevent overflow issues */
        .input-form.tj-select {
            position: relative;
        }
    </style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Vehicle - Car</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Vehicle - Car</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->
    <section class="tj-choose-us-section">
        <div class="container-flude">
            <div class="row">
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
                <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="">
                        <h4 class="title text-center">Instant Car Shipping Quote!</h4>
                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form"
                            id="calculatePriceFrom" novalidate data-parsley-validate data-parsley-errors-messages-disabled
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
                            <input type="hidden" name="car_type" value="1" hidden>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Your Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Full Name"
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Phone:</label>
                                        <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                                            required="" />
                                        <small id="errPhone" class="err-style"></small>
                                    </div>
                                </div> --}}
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block">Phone:</label>
                                        <input type="tel" id="phone" name="phone" class="ophone"
                                            placeholder="Phone Number" required="" />
                                        <small id="errPhone" class="err-style"></small>
                                        <input type="hidden" name="country_code" id="country_code" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Email Address:</label>
                                        <input type="email" id="email" name="email" placeholder="Your Email Address"
                                            required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-0">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>
                            {{-- bootstrap --}}
                            <!-- Initial Vehicle Information -->
                            <div class="vehicle-info">
                                <div class="row select-bm">
                                    <div class="col-md-12 text-center">
                                        <h4 class="text-white">Car Information</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label>Year</label>
                                            <div class="dropdown">
                                                <input class="form-control dropdown-toggle year" type="text"
                                                    name="year[]" id="year" placeholder="Select Year"
                                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                                <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                                    <li><a class="dropdown-item">Select Year</a></li>
                                                    @php
                                                        $currentYear = date('Y');
                                                        for ($year = $currentYear; $year >= 1936; $year--) {
                                                            echo "<li><a class='dropdown-item' data-value='$year'>$year</a></li>";
                                                        }
                                                    @endphp
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label>Make</label>
                                            <div class="dropdown">
                                                <input class="form-control dropdown-toggle make" name="make[]" required
                                                    type="text" id="make" placeholder="Select Make"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <ul class="dropdown-menu make-dropdown" style=""
                                                    aria-labelledby="make">
                                                    <li><a class="dropdown-item">Select Make</a></li>
                                                    @foreach ($makes as $make)
                                                        <li><a class="dropdown-item"
                                                                data-value="{{ $make->make }}">{{ $make->make }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-form tj-select model-div">
                                            <label>Model</label>
                                            <div class="dropdown">
                                                <input class="form-control dropdown-toggle model-input" name="model[]"
                                                    type="text" id="model" required placeholder="Select Model"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                <ul class="dropdown-menu model-dropdown" style=""
                                                    aria-labelledby="model">
                                                    <li><a class="dropdown-item" href="#">Select Model</a></li>
                                                    <!-- Options filled by JavaScript -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- <a id="addVehicleBtn" class="add-car mt-3">Add Vehicle</a> --}}
                            {{-- <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white mb-0">Car Information</h4>
                                </div>
                            
                                <!-- Year Dropdown -->
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Year</label>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="yearDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Year
                                            </button>
                                            <ul class="dropdown-menu w-100" aria-labelledby="yearDropdown">
                                                <li><input type="text" class="form-control" id="searchYear" placeholder="Search year..."></li>
                                                @php
                                                    $currentYear = date('Y');
                                                    for ($year = $currentYear; $year >= 1936; $year--) {
                                                        echo "<li><a class='dropdown-item' href='#' data-value='$year'>$year</a></li>";
                                                    }
                                                @endphp
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Make Dropdown -->
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Make</label>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="makeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Make
                                            </button>
                                            <ul class="dropdown-menu w-100" aria-labelledby="makeDropdown">
                                                <li><input type="text" class="form-control" id="searchMake" placeholder="Search make..."></li>
                                                @foreach ($makes as $make)
                                                    <li><a class="dropdown-item"  data-value="{{ $make->make }}">{{ $make->make }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Model Dropdown -->
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="modelDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Model
                                            </button>
                                            <ul class="dropdown-menu w-100" aria-labelledby="modelDropdown">
                                                <li><input type="text" class="form-control" id="searchModel" placeholder="Search model..."></li>
                                                <!-- Models will be filled dynamically via AJAX -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- bootstrap --}}
                            {{-- my code --}}
                            {{-- <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white mb-0">Car Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year" required>
                                            <option value="" disabled selected>Select Year</option>
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
                                            <option value="" disabled selected>Select Make</option>
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
                                            <option value="">Select Model</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- my code --}}
                            {{-- <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white mb-0">Car Information</h4>
                                </div>
                                <!-- Year -->
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year" required>
                                            <option value="" disabled selected>Select Year</option>
                                            @php
                                                $currentYear = date('Y');
                                                for ($year = $currentYear; $year >= 1936; $year--) {
                                                    echo "<option value='$year'>$year</option>";
                                                }
                                            @endphp
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" class="form-control mt-2 d-none" name="year[]" id="other_year" placeholder="Enter Year">
                                    </div>
                                </div>
                                <!-- Make -->
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Make</label>
                                        <select class="nice-select vehicle-make" name="make[]" id="make" required>
                                            <option value="" disabled selected>Select Make</option>
                                            @foreach ($makes as $make)
                                                <option value="{{ $make->make }}">{{ $make->make }}</option>
                                            @endforeach
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" class="form-control mt-2 d-none" name="make[]" id="other_make" placeholder="Enter Make">
                                    </div>
                                </div>
                                <!-- Model -->
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <select class="nice-select vehicle-model" name="model[]" id="model" required>
                                            <option value="" disabled selected>Select Model</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <input type="text" class="form-control mt-2 d-none" name="model[]" id="other_model" placeholder="Enter Model">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group" style="line-height:23px;">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class="form-control" id="trailer_type" name="trailer_type">
                                            <option value="1" selected>Open Trailer</option>
                                            <option value="2">Enclosed Trailer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class="form-control" id="condition" name="condition[]">
                                            <option value="1" selected>Running</option>
                                            <option value="2">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <a id="addVehicleBtn" class="add-car">
                                <i class="fa fa-plus"> Add Vehicle </i>
                            </a>
                            <div id="vehicles-container">
                            </div>
                            {{-- <div class="input-form mt-3">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" type="file" id="image" name="image"
                                    placeholder="Upload File" />
                            </div> --}}
                            <div class="row">
                                <div class="input-form mt-1">
                                    <label class="d-block text-white"> Image:</label>
                                    <input class="form-control image_input" name="image[]" type="file"
                                        accept="image/*" multiple onchange="previewImages(event)">
                                    <div class="image-preview-container" id="imagePreviewContainer"></div>
                                    <!-- <input class="form-control image_input" type="file" id="image" name="image" onchange="previewImage(event)" />
                                                                                                                                <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100px; max-height: 100px; margin-top: 10px;"> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1" />
                                        <label class="form-check-label text-white ms-4" for="modification">
                                            Modified?</label>
                                    </div>
                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input class="" type="text" id="c" name="modify_info"
                                            placeholder="Enter Modification Information" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label text-white" for="available_at_auction"> Available
                                            at
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
        </div>
    </section>
@endsection
@section('extraScript')
    <!-- Include Selectize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css" rel="stylesheet" />
    <!-- Include jQuery and Selectize JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     // Initialize Select2 on the select element
        //     $('.year').select2({
        //         placeholder: "Select Year",
        //         allowClear: true
        //     });
        // });
    </script>
    {{-- <script>
    $(document).ready(function() {
        function addNewVehicle() {
            var newVehicleHtml =
                `
                <div class="vehicle-info">
                <div class="row select-bm">
                    <!-- Bin icon for deleting vehicle -->
            <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
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
            
            </div>
            </div>
            <div class="col-md-6">
                            <div class="form-group">
                                <label for="condition" class="text-white">Condition</label>
                                <select class="nice-select" id="condition" name="condition[]">
                                    <option value="1" selected>Running</option>
                                    <option value="2">Non Running</option>
                                </select>
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
        // function getModel(year, makeId) {
        //     $.ajax({
        //         url: "{{ route('get.models') }}",
        //         method: 'GET',
        //         data: {
        //             year: year,
        //             make: makeId
        //         },
        //         success: function(response) {
        //             var modelsDropdown = $('.vehicle-model-div');
        //             modelsDropdown.empty();
        //             var selectOptions =
        //                 '<label>Model</label> <select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
        //             $.each(response, function(index, model) {
        //                 selectOptions += '<option value="' + model + '">' + model +
        //                     '</option>';
        //             });
        //             selectOptions += '</select>';
        //             modelsDropdown.html(selectOptions);
        //             console.log('yesssss', response);
        //         },
        //         error: function(xhr) {
        //             console.log(xhr.responseText);
        //         }
        //     });
        // }
    
</script> --}}
    <script>
        // $(document).ready(function() {
        //         $('select').niceSelect(); // Initialize nice-select
        //     });
        $(document).ready(function() {
            function addNewVehicle() {
                var newVehicleHtml =
                    `
                <div class="vehicle-info">
                <div class="row select-bm">
                    <!-- Bin icon for deleting vehicle -->
                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label>Year</label>
                            <div class="dropdown">
                                <input class="form-control dropdown-toggle year" type="text"
                                    name="year[]" id="year" placeholder="Select Year"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                    <li><a class="dropdown-item">Select Year</a></li>`;
                var currentYear = {{ date('Y') }};
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<li><a class='dropdown-item' data-value='${year}'>${year}</a></li>`;
                }
                newVehicleHtml += `
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label>Make</label>
                            <div class="dropdown">
                                <input class="form-control dropdown-toggle make" name="make[]" type="text" id="make" placeholder="Select Make" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu make-dropdown" aria-labelledby="make">
                                    <li><a class="dropdown-item" >Select Make</a></li>`;
                @foreach ($makes as $make)
                    newVehicleHtml +=
                        `<li><a class="dropdown-item"  data-value="{{ $make->make }}">{{ $make->make }}</a></li>`;
                @endforeach
                newVehicleHtml += `
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-form tj-select model-div">
                            <label>Model</label>
                            <select class="nice-select model" name="model[]" id="model" required>
                                <!-- Options will be filled by JavaScript -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="condition" class="text-white">Condition</label>
                            <select class="nice-select" id="condition" name="condition[]">
                                <option value="1" selected>Running</option>
                                <option value="2">Non Running</option>
                            </select>
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

            $(document).on('click', '.make-dropdown .dropdown-item', function() {
                var make = $(this).data('value');
                $(this).closest('.dropdown').find('.form-control').val(make).end()
                    .find('.dropdown-menu').removeClass('show');
                var vehicleInfo = $(this).closest('.vehicle-info');
                var year = vehicleInfo.find('.year').val();
                if (year && make) {
                    getModel(year, make, vehicleInfo);
                }
            });
            // $(document).on('change', '.year, .make', function() {
            //     var year = $(this).closest('.vehicle-info').find('.year').val();
            //     var makeId = $(this).closest('.vehicle-info').find('.make').val();
            //     alert(makeId);
            //     var vehicleInfo = $(this).closest('.vehicle-info');
            //     if (year && makeId) {
            //         getModel(year, makeId, vehicleInfo);
            //     }
            // });
            $(document).on('click', '.year-dropdown .dropdown-item', function() {
                var selectedYear = $(this).data('value');
                $('#year').val(selectedYear); // Set the selected value in the input field
            });

            $(document).on('click', '.year, .make', function() {
                var year = $(this).closest('.vehicle-info').find('.year').val();
                var makeId = $(this).closest('.vehicle-info').find('.make').val();
                // alert(makeId);
                var vehicleInfo = $(this).closest('.vehicle-info');
                if (year && makeId) {
                    getModel(year, makeId, vehicleInfo);
                }
            });

            function getModel(year, makeId, vehicleInfo) {
                $.ajax({
                    url: "{{ route('get.models') }}",
                    method: 'GET',
                    data: {
                        year: year,
                        make: makeId
                    },
                    success: function(response) {
                        var modelDropdown = vehicleInfo.find('.model-dropdown');
                        var modelInput = vehicleInfo.find('.model-input');
                        var modelSelect = vehicleInfo.find('.model'); // Standard <select> element

                        // Update custom dropdown
                        if (modelDropdown.length && modelInput.length) {
                            modelDropdown.empty();
                            modelDropdown.append(
                                '<li><a class="dropdown-item" data-value="">Select Model</a></li>');

                            $.each(response, function(index, model) {
                                modelDropdown.append(
                                    '<li><a class="dropdown-item" data-value="' + model +
                                    '">' + model + '</a></li>');
                            });

                            modelInput.on('focus', function() {
                                modelSelect.empty(); // Clear the <select> options
                                modelSelect.append(
                                    '<option value="">Select Model</option>'
                                ); // Add default option
                                modelDropdown.show();
                            });

                            modelInput.on('input', function() {
                                var searchTerm = $(this).val().toLowerCase();
                                modelDropdown.find('li').each(function() {
                                    var itemText = $(this).text().toLowerCase();
                                    if (itemText.indexOf(searchTerm) !== -1 ||
                                        searchTerm === '') {
                                        $(this).show();
                                    } else {
                                        $(this).hide();
                                    }
                                });
                            });

                            modelDropdown.on('click', 'a.dropdown-item', function(e) {

                                e.preventDefault(); // Prevent default anchor behavior
                                var selectedText = $(this).text();
                                var selectedValue = $(this).data('value');

                                modelInput.val(
                                    selectedText); // Set the selected text in modelInput
                                modelDropdown.hide(); // Hide the custom dropdown

                                modelSelect.empty(); // Clear the <select> options
                                modelSelect.append('<option value="' + selectedValue + '">' +
                                    selectedText + '</option>');
                                modelSelect.val(
                                    selectedValue
                                ); // Set the selected value in the select dropdown
                            });

                            $(document).on('click', function(e) {
                                if (!modelInput.is(e.target) && !modelDropdown.is(e.target) &&
                                    modelDropdown.has(e.target).length === 0) {
                                    modelDropdown.hide();
                                }
                            });
                        }

                        // Handle standard <select> dropdown
                        if (modelSelect.length) {
                            modelSelect.empty(); // Clear any existing options
                            modelSelect.append(
                                '<option value="">Select Model</option>'); // Add default option

                            $.each(response, function(index, model) {
                                modelSelect.append('<option value="' + model + '">' + model +
                                    '</option>');
                            });

                            modelSelect.on('change', function() {

                                var selectedModel = $(this).val();
                                // Optional: Sync custom input when user selects from <select>
                                modelInput.val(modelSelect.find('option:selected').text());
                            });
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }

            $(document).on('input', '.dropdown-toggle', function() {
                var input = $(this).val().toLowerCase();
                $(this).siblings('.dropdown-menu').find('.dropdown-item').each(function() {
                    var text = $(this).text().toLowerCase();
                    $(this).toggle(text.indexOf(input) > -1);
                });
            });
        });
    </script>
    {{-- function getModel(year, makeId, vehicleInfo) {
        $.ajax({
            url: "{{ route('get.models') }}",
            method: 'GET',
            data: {
                year: year,
                make: makeId
            },
            success: function(response) {
                console.log('AJAX Response:', response);

                var modelsDropdown = vehicleInfo.find('.model');
                console.log('Models Dropdown:', modelsDropdown); // Ensure it's targeting the right element

                modelsDropdown.empty(); // Clear existing options

                var selectOptions = '<option value="">Select Model</option>';

                $.each(response, function(index, model) {
                    console.log('Adding model:', model);
                    selectOptions += '<option value="' + model + '">' + model + '</option>';
                });

                // Update the original <select> element
                modelsDropdown.html(selectOptions);

                // Reinitialize the nice-select plugin
                modelsDropdown.niceSelect('update');
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    } --}}
    {{-- <script>
    $(document).ready(function() {
        function addNewVehicle() {
            var newVehicleHtml =
                `
            <div class="vehicle-info">
                <div class="row select-bm">
                        <!-- Bin icon for deleting vehicle -->
                        <span class="delete-vehicle"><i class="fa fa-trash mt-3" style="float: right; color: red;"></i></span>
                    <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year" required>
                                            <option value="" disabled selected>Select Year</option>`;
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
                                        <select class="nice-select vehicle-make" name="make[]" id="make" required>
                                            <option value="" disabled selected>Select Make</option>`;

                            @foreach ($makes as $make)
                                newVehicleHtml += `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
                            @endforeach

                            newVehicleHtml += `
                            </select>
                                    </div>
                                </div>
                    <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <select class="nice-select vehicle-model" name="model[]" id="model" required>
                                            <option value="">Select Model</option>
                                           
                                        </select>
                                    </div>
                                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="condition" class="text-white">Condition</label>
                            <select class="form-control" id="condition" name="condition[]">
                                <option value="1" selected>Running</option>
                                <option value="2">Non Running</option>
                            </select>
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
</script> --}}

@endsection
