@extends('frontend.layouts.app')
@section('title', 'Motorcycle Shipping Quote')
@section('meta_description', 'Get your instant motorcycle shipping quote today! Fast, reliable, and hassle-free service to transport your bike anywhere. Start your journey now!')
@section('content')
<style>
    .lab-cos {
        font-size: 15px;
        font-weight: 500;
        color: var(--tj-white-color);
        margin-bottom: 10px;
    }
    .input-container {
        height: 34px;
        background: white;
        display: flex;
        align-items: center;
        /* border: 1px solid #ccc; */
        border-radius: 4px;
        padding: 8px 0px 8px 0px;
        width: fit-content;
    }
    .input-container1 {
        height: 34px;
        background: white;
        display: flex;
        align-items: center;
        /* border: 1px solid #ccc; */
        border-radius: 4px;
        padding: 8px 0px 8px 0px;
        width: fit-content;
    }
    .input-field {
        width: 50px;
        padding: 5px;
        font-size: 14px;
        border: none;
        outline: none;
    }
    .input-field-1 {
        width: 65px;
        padding: 0px 0px 0px 10px;
        font-size: 14px;
        border: none;
        outline: none;
    }
    .separator {
        margin: 0px 0px 0px 0px;
        font-size: 14px;
    }
    .separators {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }
    .separators-w {
        margin: 0px 5px 0px 0px;
        font-size: 14px;
    }
    .input-container input[type="number"] {
        -moz-appearance: textfield;
    }
    .input-container input[type="number"]::-webkit-outer-spin-button,
    .input-container input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .form-wrap {
        margin-bottom: 10px;
        position: relative;
    }
    .form-label-outside {
        color: white;
        display: block;
        margin-bottom: 5px;
    }
    .input-container {
        display: flex;
        align-items: center;
    }
    .input-container input {
        border: none;
        /* border-bottom: 1px solid #ccc; */
        padding: 5px 0px 5px 0px;
        font-size: 14px;
        width: 38px;
        text-align: center;
        /* margin-right: 5px; */
    }
    .input-container .placeholders {
        /* color:white; */
        position: relative;
        right: 72px;
        color: black;
        display: inline-block;
        width: auto;

        padding: 0px 8px;
        /* background: white; */
    }
    .err-style {
        color: red;
    }
    .tj-input-form .input-form label {
        font-size: 15px;
        font-weight: 500;
        color: var(--tj-white-color);
        margin-bottom: 10px;
    }
</style>
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
<section class="tj-choose-us-section-bike">
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
                    <h4 class="title text-center">Instant Motorcycle Shipping Quote!</h4>
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
                                    <input type="text" id="name" name="name" placeholder="Full Name"
                                        required="" />
                                    <small id="errName" class="err-style"></small>
                                </div>
                            </div>
                            {{-- <div class="col-xl-4 col-lg-4">
                                <div class="single-input-field">
                                    <label class="d-block text-white"> Phone:</label>
                                    <input class="form-control" required name="phone" type="tel"
                                        placeholder="Customer Phone">
                                    <label class="error-message" id="Custo_Phone-error">This field is required.</label>
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block">Phone:</label>
                                    <input type="tel" id="phone" name="phone" class="ophone" placeholder="Phone Number" required="" />
                                    <small id="errPhone" class="err-style"></small>
                                    <input type="hidden" name="country_code" id="country_code" />
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Phone:</label>
                                        <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                                            required="" />
                                        <small id="errPhone" class="err-style"></small>
                                    </div>
                                </div> -->
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
                                <div class="input-form">
                                    <label class="d-block mb-0"> Pickup Location:</label>
                                    <input type="text" id="pickup-location" name="origin"
                                        placeholder="Ex: 90005 Or Los Angeles" required="" />
                                    <small id="errOLoc" class="err-loc"></small>
                                    <ul class="suggestions suggestionsTwo"></ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block  mb-0"> Delivery Location:</label>
                                    <input type="text" id="delivery-location" name="destination"
                                        placeholder="Ex: 90005 Or Los Angeles" required="" />
                                    <small id="errDLoc" class="err-loc"></small>
                                    <ul class="suggestions suggestionsTwo"></ul>
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
                                    {{-- <select class="nice-select vehicle-year" name="year[]" id="year">
                                        <option value="" disabled selected>Select Year</option>
                                        @php
                                            $currentYear = date('Y');
                                            for ($year = $currentYear; $year >= 1936; $year--) {
                                                echo "<option value='$year'>$year</option>";
                                            }
                                        @endphp
                                    </select> --}}
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
                                <div class="form-group">
                                    <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                    <select class=" " id="trailer_type" name="trailer_type">
                                        <option value="1" selected>Open Trailer</option>
                                        <option value="2">Enclosed Trailer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="condition" class="text-white">Condition</label>
                                    <select class=" " id="condition" name="condition[]">
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
                        <div class="input-form">
                            <label class="d-block text-white"> Image:</label>
                            <input class="form-control image_input" name="image[]" type="file" accept="image/*" multiple
                                onchange="previewImages(event)">
                            <div class="image-preview-container" id="imagePreviewContainer"></div>
                            <!-- <input class="form-control  image_input" type="file" id="image" name="image[]"
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
                                        placeholder="Enter Modification Information" />
                                </div>
                            </di>
                            <di class="col-md-6">
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
    </div>
</section>
@endsection
@section('extraScript')
{{-- new work --}}
<script>
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
</script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.querySelector('.year');
        const dropdownMenu = document.querySelector('.year-dropdown');
        const dropdownItems = dropdownMenu.querySelectorAll('.dropdown-item');
        
        // Function to filter dropdown items
        function filterDropdown() {
            const searchValue = input.value.toLowerCase();
            dropdownItems.forEach(function(item) {
                const text = item.textContent.toLowerCase();
                if (text.includes(searchValue) || searchValue === '') {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Filter dropdown items on input
        input.addEventListener('input', function() {
            filterDropdown();
        });

        // Set input value from dropdown item click
        dropdownMenu.addEventListener('click', function(e) {
            if (e.target.classList.contains('dropdown-item')) {
                input.value = e.target.textContent;
                dropdownMenu.style.display = 'none'; // Hide the dropdown after selection
            }
        });

        // Hide dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!input.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.style.display = 'none';
            }
        });

        // Show dropdown when input is focused
        input.addEventListener('focus', function() {
            dropdownMenu.style.display = 'block';
        });

        // Handle Enter key press to set the input value
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                const searchValue = input.value;
                // Check if the entered value exists in the dropdown
                const item = Array.from(dropdownItems).find(item => item.textContent === searchValue);
                if (item) {
                    input.value = item.textContent;
                }
                dropdownMenu.style.display = 'none'; // Hide the dropdown after selection
                e.preventDefault(); // Prevent default form submission behavior if in a form
            }
        });
    });
</script> -->
{{-- new work --}}
@endsection
