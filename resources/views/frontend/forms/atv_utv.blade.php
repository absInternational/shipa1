@extends('frontend.layouts.app')
@section('title', 'Get Quote on ATV/UTV | ShipA1')

@section('meta_description',
    'Get an instant atv-utv shipping quote with ease! Trust our reliable service for
    nationwide coverage, transparent pricing, and secure transportation. Plan your shipment quickly and efficiently.')


@section('content')
    {{-- <style>
    .custom-select-style{
        background: #f0f2f7;
        width: 100%;
        font-size: 14px;
        font-weight: 500;
        height: 35px;
        line-height: 38px;
        padding: 15px 15px;
        border-radius: 3px;
    }
</style> --}}
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Vehicle - ATV/UTV</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Vehicle - ATV/UTV</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <section class="tj-choose-us-section-service-atv-utv">
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
                    <div class="tj-input-form" data-bg-image="{{ asset('frontend/images/banner/form-shape.png') }}">
                        <h4 class="title text-center">Instant ATV/UTV Shipping Quote!</h4>
                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form"
                            id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data" novalidate>
                            @csrf
                            <input type="hidden" name="car_type" value="1" hidden>
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
                                        <label class="d-block"> Your Name:</label>
                                        <input type="text" class="name" id="name" name="name"
                                            placeholder="Full Name" required />
                                        {{-- <span class="errName error-message"></span> --}}
                                        {{-- <small id="errName" class="err-style"></small> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block">Phone:</label>
                                        <input type="tel" id="phone" name="phone" class="ophone"
                                            placeholder="Phone Number" required />
                                        {{-- <small id="errPhone" class="err-style"></small> --}}
                                        <input type="hidden" name="country_code" id="country_code" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Email Address:</label>
                                        <input type="email" id="email" name="email" placeholder="Your Email Address"
                                            required />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin"
                                            placeholder="Ex: 90005 Or Los Angeles" required />
                                        <small id="errOLoc" class="err-loc" style="color: #ff0000 !important;"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination"
                                            placeholder="Ex: 90005 Or Los Angeles" required />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions suggestionsTwo"></ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white">Atv/Utv Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        {{-- <div class="dropdown">
                                            <input class="form-control dropdown-toggle year" type="text" name="year[]" id="year" 
                                            placeholder="Select Year" data-bs-toggle="dropdown" aria-expanded="false" required>
                                            <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                                <li><a class="dropdown-item">Select Year</a></li>
                                                @php
                                                    $currentYear = date('Y');
                                                    for ($year = $currentYear; $year >= 1936; $year--) {
                                                        echo "<li><a class='dropdown-item' data-value='$year'>$year</a></li>";
                                                    }
                                                @endphp
                                            </ul>
                                        </div> --}}
                                        <div class="dropdown">
                                            <input class="form-control dropdown-toggle year" type="text"
                                                name="year[]" id="year" placeholder="Select Year"
                                                data-bs-toggle="dropdown" aria-expanded="false" maxlength="4" required>
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
                                        <!-- <select class="nice-select year vehicle-year custom-select-style" name="year[]"
                                            id="year" required>
                                            <option value="" disabled selected>Select Year</option>
                                            @php
                                                $currentYear = date('Y');
                                                for ($year = $currentYear; $year >= 1936; $year--) {
                                                    echo "<option value='$year'>$year</option>";
                                                }
                                            @endphp
                                        </select> -->
                                        <div class="error-message" style="color: red; display: none;">
                                            Please select a year.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label>Make</label>
                                        <input type="text" id="make" name="make[]" placeholder="Enter Make"
                                            required="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select vehicle-model-div">
                                        <label>Model</label>
                                        <input type="text" id="model" name="model[]" placeholder="Enter Model"
                                            required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="trailer_type" class="text-white">Select Trailer
                                            Type</label>
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

                            <a class="add-car" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                Vehicle</a>

                            <div id="vehicles-container">
                            </div>


                            <div class="row">
                                <di class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1">
                                        <label class="form-check-label text-white ms-4" for="modification">
                                            Modified?</label>
                                    </div>

                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input class="" type="text" id="c" name="modify_info"
                                            placeholder="Enter Modification Information">
                                    </div>
                                </di>
                                <di class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1">
                                        <label class="form-check-label text-white" for="available_at_auction"> Available
                                            at
                                            Auction?</label>
                                    </div>

                                    <div class="input-form div-link" style="display: none;">
                                        <label class="d-block"> Enter Link:</label>
                                        <input class="" type="url" id="link" name="link"
                                            placeholder="Enter Link">
                                    </div>
                                </di>
                            </div>
                            <div class="input-form mt-3">
                                <label class="d-block" class="text-white"> Image:</label>
                                <!-- <input class="form-control image_input" type="file" id="image" name="image[]"
                                        placeholder="Upload File" /> -->
                                <input class="form-control image_input" type="file" name="image[]" accept="image/*"
                                    multiple onchange="previewImages(event)">
                                <div class="image-preview-container" id="imagePreviewContainer"></div>
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
<script>
    $(document).ready(function() {
        function addNewVehicle() {
            var newVehicleHtml =
                `
                <div class="vehicle-info custom-delete-class" style="display: none;">
                    <div class="row select-bm">
                        <!-- Bin icon for deleting vehicle -->
                        <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>
                        <div class="col-md-4">
                            <div class="input-form tj-select">
                                <label>Year</label>
                                <div class="dropdown">
                                    <input class="form-control dropdown-toggle year" type="text"
                                        name="year[]" id="year" placeholder="Select Year"
                                        data-bs-toggle="dropdown" aria-expanded="false" maxlength="4" required>
                                    <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                        <li><a class="dropdown-item">Select Year</a></li>`;
            
            var currentYear = {{ date('Y') }};
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<li><a class='dropdown-item' data-value='${year}'>${year}</a></li>`;
            }

            newVehicleHtml +=
                `               </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-form tj-select">
                                <label>Make</label>
                                <input type="text" id="make" name="make[]" placeholder="Enter Make" required="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-form tj-select model-div">
                                <label>Model</label>
                                <input type="text" id="model" name="model[]" placeholder="Enter Model" required="" />
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

            var $newVehicle = $(newVehicleHtml);
            $('#vehicles-container').append($newVehicle);

            // Animate the new vehicle info smoothly
            $newVehicle.slideDown('slow');

            // Initialize the searchable dropdown for new elements
            initializeSearchableDropdown();
        }

        function initializeSearchableDropdown() {
            $('.dropdown-toggle.year').on('input', function() {
                var input = $(this);
                var filter = input.val().toLowerCase();
                var dropdown = input.siblings('.dropdown-menu.year-dropdown');
                dropdown.find('.dropdown-item').each(function() {
                    var text = $(this).text().toLowerCase();
                    if (text.includes(filter) || filter === '') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            $('.dropdown-menu.year-dropdown').on('click', '.dropdown-item', function() {
                var item = $(this);
                var input = item.closest('.dropdown').find('.dropdown-toggle.year');
                input.val(item.text());
                item.closest('.dropdown-menu').hide(); // Hide the dropdown after selection
            });

            // Show dropdown when input is focused
            $('.dropdown-toggle.year').on('focus', function() {
                $(this).siblings('.dropdown-menu.year-dropdown').show();
            });

            // Hide dropdown when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.dropdown').length) {
                    $('.dropdown-menu.year-dropdown').hide();
                }
            });
        }

        $('#addVehicleBtn').click(function() {
            addNewVehicle();
        });

        // Smooth delete with custom class
        $(document).on('click', '.delete-vehicle', function() {
            var $vehicleInfo = $(this).closest('.custom-delete-class');
            
            // Slide up the element first, then remove it after the animation is done
            $vehicleInfo.slideUp('slow', function() {
                $vehicleInfo.remove();
            });
        });

        // Initialize the searchable dropdown for existing elements
        initializeSearchableDropdown();
    });
</script>
    {{-- <script>
            $(document).ready(function() {
                function addNewVehicle() {
                    var newVehicleHtml =
                        `
                        <div class="vehicle-info">
                        <div class="row select-bm">
                            <!-- Bin icon for deleting vehicle -->
                            <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>
                        <div class="col-md-4">
                        <div class="input-form tj-select">
                        <label>Year</label>
                        <div class="dropdown">
                            <input class="form-control dropdown-toggle year" type="text"
                                name="year[]" id="year" placeholder="Select Year"
                                data-bs-toggle="dropdown" aria-expanded="false" maxlength="4" required>
                            <ul class="dropdown-menu year-dropdown" aria-labelledby="year">
                                <li><a class="dropdown-item">Select Year</a></li>`;
                    var currentYear = {{ date('Y') }};
                    for (var year = currentYear; year >= 1936; year--) {
                        newVehicleHtml += `<li><a class='dropdown-item' data-value='${year}'>${year}</a></li>`;
                    }

                    newVehicleHtml +=
                        `</ul>
                        </div>
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
                        required="" />
                        
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
       
                    // Initialize the searchable dropdown for new elements
                    initializeSearchableDropdown();
                }

                function initializeSearchableDropdown() {
                    $('.dropdown-toggle.year').on('input', function() {
                        var input = $(this);
                        var filter = input.val().toLowerCase();
                        var dropdown = input.siblings('.dropdown-menu.year-dropdown');
                        dropdown.find('.dropdown-item').each(function() {
                            var text = $(this).text().toLowerCase();
                            if (text.includes(filter) || filter === '') {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
                    });

                    $('.dropdown-menu.year-dropdown').on('click', '.dropdown-item', function() {
                        var item = $(this);
                        var input = item.closest('.dropdown').find('.dropdown-toggle.year');
                        input.val(item.text());
                        item.closest('.dropdown-menu').hide(); // Hide the dropdown after selection
                    });

                    // Show dropdown when input is focused
                    $('.dropdown-toggle.year').on('focus', function() {
                        $(this).siblings('.dropdown-menu.year-dropdown').show();
                    });

                    // Hide dropdown when clicking outside
                    $(document).on('click', function(e) {
                        if (!$(e.target).closest('.dropdown').length) {
                            $('.dropdown-menu.year-dropdown').hide();
                        }
                    });
                }

                $('#addVehicleBtn').click(function() {
                    addNewVehicle();
                });

                $(document).on('click', '.delete-vehicle', function() {
                    $(this).closest('.vehicle-info').remove();
                });

                // Initialize Select2 on existing dropdowns (if needed)
                initializeSearchableDropdown();
            });
    </script> --}}
@endsection
