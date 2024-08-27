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
                    <h1 class="breadcrumb-title text-center">Hazmat Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Hazmat Transport</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-details-wrapper service-details-wrapper">
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <a href="service-details.html">
                                    <img src="{{ asset('frontend/images/slider/home-slider-3.webp') }}" alt="Blog"
                                /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="service-details.html"> Road Transport</a>
                                    </h3>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s,
                                when an unknown printer took a galley
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="check-image">
                                    <img src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}" alt="Blog" />
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="check-list">
                                    <h5 class="title">Logistics Around the World</h5>
                                    <ul class="list-gap">
                                        <li>
                                            <i class="fa-light fa-check"></i> Those who do not know how to pursue
                                        </li>
                                        <li><i class="fa-light fa-check"></i> Pleasure rationally encounter</li>
                                        <li>
                                            <i class="fa-light fa-check"></i> Consequences that are extremely
                                            painful.
                                        </li>
                                        <li>
                                            <i class="fa-light fa-check"></i> Nor again is there anyone who loves or
                                            pursues
                                        </li>
                                        <li><i class="fa-light fa-check"></i> Service Guarantee</li>
                                        <li><i class="fa-light fa-check"></i> Excellence in Healthcare every</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="details-video-content">
                            <h4 class="title">Communicate With Us</h4>
                            <p>
                                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                amet finibus eros. Lorem Ipsum
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sevice-image">
                                        <img src="{{ asset('frontend/images/about/about-3.webp') }}" alt="Image" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sevice-image">
                                        <img src="{{ asset('frontend/images/about/about-3.webp') }}" alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-faq-area">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button
                                                    class="accordion-button"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne"
                                                >
                                                    Is My Technology Allowed on Tech?
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseOne"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <strong
                                                        >There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo"
                                                >
                                                    How Long Does air Freight Take?
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseTwo"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <strong
                                                        >There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"
                                                >
                                                    What Payment Methods are Supported?
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseThree"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingThree"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <strong
                                                        >There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFour"
                                                >
                                                    Methods are Supported What Payment?
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseFour"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingFour"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <strong
                                                        >There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFive"
                                                >
                                                    Methods are Supported What Payment?
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseFive"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingFive"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <strong
                                                        >There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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