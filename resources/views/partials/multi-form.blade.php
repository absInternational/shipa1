<div class="tj-input-form w-100" data-bg-image="">
    <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form" novalidate id="calculatePriceFrom"
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
            <!-- Step 1: Moving From/To -->
            <div class="route_quote_info" id="step1">
                <div class="row">
                    <h4 class="title text-center target-top">Quote Request!</h4>
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <h6 class="text-white">Moving From</h6>
                        <label class="text-white mb-2">Where Are You Moving From?</label>
                        <div class="single-input-field">
                            <input class="form-control" type="text" id="pickup-location"
                                placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                <ul class="suggestions suggestionsPickup"></ul>
                            {{-- <ul class="suggestions suggestionsTwo"></ul> --}}
                            <label class="error-message" id="pickup-location">This field is
                                required.</label>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <h6 class="text-white">Moving To</h6>
                        <label class="text-white mb-2">Where Are You Moving To?</label>
                        <div class="single-input-field">
                            <input class="form-control" type="text" id="delivery-location"
                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                <ul class="suggestions suggestionsDelivery"></ul>
                            {{-- <ul class="suggestions suggestionsTwo"></ul> --}}
                            <label class="error-message" id="delivery-location">This field is
                                required.</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="price__cta-btn text-center">
                            <button class="tj-submit-btn scroll-up-btn" type="button" id="step1_next">
                                Next <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 2: Vehicle Information -->
            <div class="vehicle_quote_info" id="step2" style="display: none;">
                <div class="row">
                    <h4 class="title text-center target-top">VEHICLE INFORMATION</h4>
                    <select id="tabSelector" class="" aria-label="Tab selector" required>
                        <option value="" selected disabled>Select a Vehicle</option>
                        <option value="Atv">Atv Utv Transport</option>
                        <option value="Boat-Transport">Boat Transport</option>
                        <option value="Car">Car</option>
                        <option value="Freight-Transportation">Freight Transportation</option>
                        <option value="Golf-Cart">Golf Cart</option>
                        <option value="Heavy-Equipment">Heavy Equipment</option>
                        <option value="Motorcycle">Motorcycle</option>
                        <option value="RV-Transport">RV Transport</option>
                    </select>
                    <label class="error-message" id="tabSelector-error">This field is
                        required.</label>

                    <div class="tab-content mt-3" id="additionalContent"></div>
                </div>
                <div class="row mt-2">
                    <div class="col-xl-6 col-lg-6">
                        <div class="price__cta-btn">
                            <button class="tj-submit-btn previous scroll-up-btn" id="step2_previous">
                                Previous <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="price__cta-btn float-end">
                            <button class="tj-submit-btn scroll-up-btn" type="button" id="step2_next">
                                Next <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 3: Customer Information  -->
            <div class="basic_quote_info" id="step3" style="display: none;">
                <div class="row mb-3">
                    <h4 class="text-center text-white target-top">Customer Information</h4>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-input-field">
                            <label class="d-block text-white"> Your Name:</label>
                            <input class="form-control" id="name" name="name" type="tel"
                                placeholder="Customer Name" required>
                            <!-- <input class="form-control" required name="Custo_Name" type="text" placeholder="Customer Name"> -->
                            
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-input-field">
                            <label class="d-block text-white">Phone:</label>
                            <input id="phone" class="form-control ophone" name="phone" type="tel"
                                placeholder="Customer Phone" required>
                            <small id="errPhone" class="err-style"></small>
                            <input type="hidden" name="country_code" id="country_code" />
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="single-input-field">
                            <label class="d-block text-white"> Email Address:</label>
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="Email address" required>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="price__cta-btn">
                            <button class="tj-submit-btn previous scroll-up-btn" id="step3_previous">
                                Previous <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="price__cta-btn float-end">
                            <button class=" tj-submit-btn " href="" type="submit" id="submit_instant_code"
                                value="Submit Form">
                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- <script>
    // Form Validation
    function showError(field, message) {
            $('#' + field).addClass('error-field');
            $('#' + field + '-error').text(message).show();
        }
        function hideError(field) {
            $('#' + field).removeClass('error-field');
            $('#' + field + '-error').hide();
        }
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
</script> --}}
{{-- <script>
    $(document).ready(function() {
         $('#available_at_auction').change(function() {
             if ($(this).is(':checked')) {
                 $('.div-link').show();
                 $('#link').attr('required', true); // Make input required
             } else {
                 $('.div-link').hide();
                 $('#link').val(''); // Clear the input field
                 $('#link').removeAttr('required'); // Remove required attribute
             }
         });
         
         $('#modification').change(function() {
             if ($(this).is(':checked')) {
                 $('.div-modify_info').show();
                 $('#c').attr('required', true); // Make input required
             } else {
                 $('.div-modify_info').hide();
                 $('#c').val(''); // Clear the input field
                 $('#c').removeAttr('required'); // Remove required attribute
             }
         });
     });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        // Tab Selection and Content Loading
        $('#tabSelector').change(function() {
            var selectedTab = $(this).val();
            $('.tab-pane').removeClass('show active');
            $('#' + selectedTab).addClass('show active');

            $.ajax({
                url: "{{ route('get.partial.form') }}",
                method: 'GET',
                data: {
                    vehicleType: selectedTab
                },
                success: function(response) {
                    $('#additionalContent').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
        Add New Vehicle
        function addNewVehicle() {
            var newVehicleHtml = `
                <div class="vehicle-info">
                    <div class="row select-bm">
                        <div class="col-md-4">
                            <div class="input-form tj-select">
                                <label> Year</label>
                                <select class="nice-select year" name="year[]" required id="year">
                                    <option value="" disabled selected>Select Year</option>`;
            var currentYear = {{ date('Y') }};
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }
            newVehicleHtml += `</select></div></div><div class="col-md-4"><div class="input-form tj-select"><label>Make</label><select class="nice-select make" name="make[]" required id="make"><option value="" disabled selected>Select Make</option>`;
            @foreach ($makes as $make) {
                newVehicleHtml += `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
            }
            @endforeach
            newVehicleHtml += `</select></div></div><div class="col-md-4"><div class="input-form tj-select model-div"><label>Model</label><select class="nice-select model" name="model[]" id="model" required></select><span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span></div></div></div></div>`;
            $('.vehicles-container').append(newVehicleHtml);
        }
        function addOtherVehicle() {
            var newVehicleHtml = `
                <div class="vehicle-info">
                    <div class="row select-bm">
                        <div class="col-md-4">
                            <div class="input-form tj-select">
                                <label> Year</label>
                                <select class="nice-select year" name="year[]" id="year">
                                    <option value="" disabled selected>Select Year</option>`;
            var currentYear = {{ date('Y') }};
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }
            newVehicleHtml += `</select></div></div><div class="col-md-4"><div class="input-form tj-select"><label>Make</label><input type="text" id="make" name="make[]" placeholder="Enter Make" required="" /></div></div><div class="col-md-4"><div class="input-form tj-select model-div"><label>Model</label><input type="text" id="model" name="model[]" placeholder="Enter Model" required="" /><span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span></div></div></div></div>`;
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
        
        
        $(document).on('change', '.year, .make', function() {
            var year = $(this).closest('.vehicle-info').find('.year').val();
            var makeId = $(this).closest('.vehicle-info').find('.make').val();
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
        
        
        // Limit Digits Input
        function limitDigits(element, maxDigits) {
            if (element.value.length > maxDigits) {
                element.value = element.value.slice(0, maxDigits);
            }
        }
        $('#inches-input, #inches-input1, #inches-input2').on('input', function() {
            if (this.value > 11) {
                this.value = 11;
            } else if (this.value < 0) {
                this.value = 0;
            }
        });
        $('#feet-input, #feet-input1, #feet-input2').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        // Form Validation
        function showError(field, message) {
            $('#' + field).addClass('error-field');
            $('#' + field + '-error').text(message).show();
        }
        function hideError(field) {
            $('#' + field).removeClass('error-field');
            $('#' + field + '-error').hide();
        }
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
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#category').change(function() {
            var selectedCategory = $(this).find('option:selected').data('id');
            $.ajax({
                url: "{{ route('get.subcategories') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "category": selectedCategory
                },
                success: function(response) {
                    var html = '';
                    $('#subcategory-box').html('');
                    html += "<label for='subcategory'>Subcategory</label>";
                    html +=
                        "<select class='nice-select form-control' id='subcategory' name='subcategory'>";
                    html += "<option value='' disabled selected>Select</option>";
                    $.each(response, function(index, val) {
                        console.log('val', val);
                        html +=
                            `<option value='${val.name}' style='white-space: nowrap;'>${val.name}</option>`;
                    });
                    html += "</select>";
                    $('#subcategory-box').html(html);
                },
                error: function(xhr, status, error) {
                    console.error("Error:", error);
                }
            });
        });
    });
</script> --}}
