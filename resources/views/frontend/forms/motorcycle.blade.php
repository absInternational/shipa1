@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Vehicle - Motorcycle</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Vehicle - Motorcycle</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <section class="tj-choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="{{ asset('frontend/images/banner/form-shape.png') }}">
                        <h4 class="title">Instant Motorcycle Shipping Quote!</h4>
                        <form action="#" method="post" class="rd-mailform" id="calculatePriceFrom"
                            data-parsley-validate data-parsley-errors-messages-disabled>
                            @csrf
                            <div class="form-check">
                                <input class="form-check-input" checked type="checkbox" id="available_at_auction"
                                    name="available_at_auction" />
                                <label class="form-check-label" for="available_at_auction"> Available at Auction?</label>
                            </div>
                            <div class="input-form div-link">
                                <label class="d-block"> Enter Link:</label>
                                <input class="form-control" type="text" id="link" name="link"
                                    placeholder="Enter Link" />
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Your Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Full Name"
                                            required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Phone:</label>
                                        <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                            required="" />
                                        <small id="errPhone" class="err-style"></small>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer_type">Select Trailer Type</label>
                                        <select class="form-control" id="trailer_type" name="trailer_type">
                                            <option value="Open" selected>Open</option>
                                            <option value="Enclosed">Enclosed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition">Condition</label>
                                        <select class="form-control" id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="modification" name="modification" />
                                <label class="form-check-label" for="modification"> Modification</label>
                            </div>
                            <div class="input-form div-modify_info" style="display: none;">
                                <label class="d-block"> Modification Information:</label>
                                <input class="" type="text" id="c" name="modify_info"
                                    placeholder="Enter Modification Information" />
                            </div>
                            <div class="form-group">
                                <label class="d-block"> Image:</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    placeholder="Upload File" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Location:</label>
                                        <input type="text" id="pickup-location" name="origin"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Location:</label>
                                        <input type="text" id="delivery-location" name="destination"
                                            placeholder="Ex: 90005 Or Los Angeles" required="" />
                                        <small id="errDLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row select-bm">
                                <div class="col-md-12 text-center">
                                    <h4 class="text-white">Vehicle Information</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form tj-select">
                                        <label> Year</label>
                                        <select class="nice-select vehicle-year" name="year[]" id="year">
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

                            <a class="text-primary" id="addVehicleBtn">Add Vehicle</a>

                            <div id="vehicles-container">
                            </div>
                            <div class="tj-theme-button">
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
            // Function to append new vehicle inputs
            function addNewVehicle() {
                // HTML structure for new vehicle
                var newVehicleHtml =
                    `
                    <div class="vehicle-info">
                        <div class="row select-bm">
                            <div class="col-md-4">
                                <div class="input-form tj-select">
                                    <label> Year</label>
                                    <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
                var currentYear = <?php echo date('Y'); ?>;
                for (var year = currentYear; year >= 1936; year--) {
                    newVehicleHtml += `<option value="${year}">${year}</option>`;
                }

                // Continue with the rest of the HTML
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
                                        required="" />
                                    <!-- Bin icon for deleting vehicle -->
                                    <span class="delete-vehicle"><i class="fa fa-trash"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                // Append new vehicle to vehicles container
                $('#vehicles-container').append(newVehicleHtml);
            }

            // Add vehicle button click event
            $('#addVehicleBtn').click(function() {
                addNewVehicle();
            });

            // Delete vehicle click event
            $(document).on('click', '.delete-vehicle', function() {
                $(this).closest('.vehicle-info').remove();
            });

            // $(document).on('change', '.year, .make', function() {
            //     var year = $(this).closest('.vehicle-info').find('.year').val();
            //     var makeId = $(this).closest('.vehicle-info').find('.make').val();
            //     var vehicleInfo = $(this).closest('.vehicle-info');
            //     if (year && makeId) {
            //         getModel(year, makeId, vehicleInfo);
            //     }
            // });

            // function getModel(year, makeId, vehicleInfo) {
            //     console.log('yes inn');
            //     $.ajax({
            //         url: "{{ route('get.models') }}",
            //         method: 'GET',
            //         data: {
            //             year: year,
            //             make: makeId
            //         },
            //         success: function(response) {
            //             var modelsDropdown = vehicleInfo.find('.model');
            //             modelsDropdown.empty();
            //             var selectOptions = '<option value="">Select Model</option>';
            //             $.each(response, function(index, model) {
            //                 selectOptions += '<option value="' + model + '">' + model +
            //                     '</option>';
            //             });
            //             modelsDropdown.html(selectOptions);
            //         },
            //         error: function(xhr) {
            //             console.log(xhr.responseText);
            //         }
            //     });
            // }
        });
    </script>

    <script>
        $(document).ready(function() {
            // $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            //     var year = $('.vehicle-year').val();
            //     var makeId = $('.vehicle-make').val();
            //     if (year && makeId) {
            //         getModel(year, makeId);
            //     }
            // });

            // function getModel(year, makeId) {
            //     console.log('yes inn');
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
            //                 '<label>Model</label> <select class="nice-select model" name="model" id="model"> <option value="">Select Model</option>';
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

            $('#available_at_auction').change(function() {
                if ($(this).is(':checked')) {
                    // $('#link').show();
                    $('.div-link').show();
                } else {
                    // $('#link').hide();
                    $('.div-link').hide();
                }
            });

            $('#modification').change(function() {
                if ($(this).is(':checked')) {
                    // $('#link').show();
                    $('.div-modify_info').show();
                } else {
                    // $('#link').hide();
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
                        // Append suggestion as list item with click event listener
                        var listItem = $("<li>").text(suggestion).click(function() {
                            // Autofill input field with clicked suggestion
                            inputField.val(suggestion);
                            suggestionsList.empty(); // Clear suggestions after selection
                        });
                        suggestionsList.append(listItem);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        }

        // Keyup event handler for input fields
        $("#pickup-location, #delivery-location").keyup(function() {
            var inputField = $(this);
            var suggestionsList = inputField.siblings(".suggestions");

            updateSuggestions(inputField, suggestionsList);
        });
    </script>
@endsection
