<input type="hidden" name="vehicle_opt" value="heavy" hidden>
<input type="hidden" name="car_type" value="2" hidden>
<div class="row select-bm">
    <div class="col-md-4">
        <div class="input-form tj-select">
            <label> Year</label>
            {{-- <!-- <select class="nice-select vehicle-year" name="year[]" id="year">
                <option value="" disabled selected>Select Year
                </option>
                @php
                $currentYear = date('Y');
                for ($year = $currentYear; $year >= 1936; $year--) {
                echo "<option value='$year'>$year</option>";
                }
                @endphp
            </select> --> --}}
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
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-form tj-select">
            <label>Make</label>
            <input type="text" id="make" name="make[]" placeholder="Enter Make" required />
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-form tj-select vehicle-model-div">
            <label>Model</label>
            <input type="text" id="model" name="model[]" placeholder="Enter Model" required/>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-4">
        <label class="lab-cos">Length</label>
        <div class="input-container">
            <input type="number" id="feet-input" name="length_ft[]" class="input-field" placeholder=""
                min="0" maxlength="3" oninput="limitDigits(this, 3)">
            <span class="separator">(Ft.)</span>
            <input type="number" id="inches-input" class="inches-input1 input-field" name="length_in[]" placeholder=""
                min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
            <span class="separators">(In.)</span>
        </div>
    </div>
    <div class="col-md-4">
        <label class="lab-cos">Width</label>
        <div class="input-container">
            <input type="number" id="feet-input1" class="input-field" placeholder="" name="width_ft[]"
                min="0" maxlength="3" oninput="limitDigits(this, 3)">
            <span class="separator">(Ft.)</span>
            <input type="number" id="inches-input1" class="inches-input2 input-field" placeholder="" name="width_in[]"
                min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
            <span class="separators">(In.)</span>
        </div>
    </div>
    <div class="col-md-4">
        <label class="lab-cos">Height</label>
        <div class="input-container">
            <input type="number" id="feet-input2" class="input-field" placeholder="" name="height_ft[]"
                min="0" maxlength="3" oninput="limitDigits(this, 3)">
            <span class="separator">(Ft.)</span>
            <input type="number" id="inches-input2" class="inches-input2 input-field" placeholder="" name="height_in[]"
                min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
            <span class="separators">(In.)</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label class="lab-cos">Weight</label>
        <div class="input-container1">
            <input type="" id="feet-input" class="input-field-1" name="weight[]" placeholder=""
                min="0" maxlength="6" oninput="limitDigits(this, 6)">
            <span class="separators-w">(Lbs.)</span>

        </div>
    </div>
</div>
                        
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="trailer_type" class="text-white">Select Trailer Type</label>
            <select class="nice-select " id="trailer_type" name="trailer_type">
                <option value="RGN" selected>RGN</option>
                <option value="VAN (V)">VAN (V)</option>
                <option value="FLATBED (F)">FLATBED (F)</option>
                <option value="STEP DECK (SD)">STEP DECK (SD)</option>
                <option value="REMOVABLE GOOSENECK (RGN)">REMOVABLE GOOSENECK (RGN)</option>
                <option value="CONESTOGA (CS)">CONESTOGA (CS)</option>
                <option value="CONTAINER / DRAYAGE (C)">CONTAINER / DRAYAGE (C)</option>
                <option value="TRUCK (T)">TRUCK (T)</option>
                <option value="POWER ONLY (PO)">POWER ONLY (PO)</option>
                <option value="HOT SHOT (HS)">HOT SHOT (HS)</option>
                <option value="LOWBOY (LB)">LOWBOY (LB)</option>
                <option value="ENDUMP (ED)">ENDUMP (ED)</option>
                <option value="LANDOLL (LD)">LANDOLL (LD)</option>
                <option value="PARTIAL (PT)">PARTIAL (PT)</option>
                <option value="20ft container">20ft container</option>
                <option value="40ft container">40ft container</option>
                <option value="48ft container">48ft container</option>
                <option value="53ft container">53ft container</option>
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
<div class="row mt-3">
    {{-- <div class="col-md-4">
        <div class="form-group">
            <label for="load_type" class="text-white">Load Type</label>
            <select class="nice-select" id="load_type" name="load_type">
                <option value="" disabled selected>Select</option>
                <option value="LTL (LESS THEN TRUCK LOAD)">LTL (LESS THEN TRUCK LOAD)</option>
                <option value="FTL (FULL TRUCK LOAD)">FTL (FULL TRUCK LOAD)</option>
            </select>
        </div>
    </div> --}}
    <div class="col-md-6">
        <div class="form-group">
            <label for="load_method" class="text-white">Load Method</label>
            <select class="nice-select" id="load_method" name="load_method[]">
                <option value="" disabled selected>Select</option>
                <option value="LOADING DOCK">LOADING DOCK</option>
                <option value="CRANE">CRANE</option>
                <option value="FORKLIFT">FORKLIFT</option>
                <option value="DRIVE ROLL">DRIVE ROLL</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="unload_method" class="text-white">Unload Method</label>
            <select class="nice-select" id="unload_method" name="unload_method[]">
                <option value="" disabled selected>Select</option>
                <option value="LOADING DOCK">LOADING DOCK</option>
                <option value="CRANE">CRANE</option>
                <option value="FORKLIFT">FORKLIFT</option>
                <option value="DRIVE ROLL">DRIVE ROLL</option>
            </select>
        </div>
    </div>
</div>
<a class="add-car addVehicleBtn" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
    Equipment</a>
<div class="vehicles-container" id="vehicles-container">
</div> 
<div class="row mt-3">
    <div class="col-md-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="available_at_auction"
                name="available_at_auction" value="1" />
            <label class="form-check-label text-white" for="available_at_auction"> Available at
                Auction?</label>
        </div>
        <div class="input-form div-link mt-3" style="display: none;">
            <label class="d-block"> Enter Link:</label>
            <input class="form-control" type="url" id="link" name="link"
                placeholder="Enter Link" />
        </div>
    </div>
</div>
<div class="input-form mt-3">
    <label class="d-block text-white"> Image:</label>
    
        <input class="form-control image_input"  name="image[]" type="file" accept="image/*" multiple onchange="previewImages(event)">
    <div class="image-preview-container" id="imagePreviewContainer"></div>
</div>

<script>
    function addOtherVehicle() {
        var newVehicleHtml =
            `
            <div class="vehicle-info">
                <div class="row select-bm">
                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label> Year</label>
                            <select class="nice-select year" name="year[]" id="year"> <option value="" disabled selected>Select Year</option>`;
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
                        <input type="text" id="make" name="make[]"
                        placeholder="Enter Make" required="" />
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="input-form tj-select model-div">
                        <label>Model</label>
                        <input type="text" id="model" name="model[]" placeholder="Enter Model"
                        required="" />`

                    newVehicleHtml += `</div>
                                    </div>
                </div>
                
                    <div class="row mb-3">
                        <div class="col-4">
                            <label class="lab-cos">Length</label>
                            <div class="input-container">
                                <input type="number" id="feet-input" name="length_ft[]" class="feet-input1 input-field" placeholder=""
                                    min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                <span class="separator">(Ft.)</span>
                                <input type="number" id="inches-input" class="inches-input1 input-field" name="length_in[]" placeholder=""
                                    min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                <span class="separators">(In.)</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="lab-cos">Height</label>
                            <div class="input-container">
                                <input type="number" id="feet-input2" name="height_ft[]" class="input-field" placeholder=""
                                    min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                <span class="separator">(Ft.)</span>
                                <input type="number" id="inches-input2" name="height_in[]" class="inches-input2 input-field" placeholder=""
                                    min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                <span class="separators">(In.)</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="lab-cos">Width</label>
                            <div class="input-container">
                                <input type="number" id="feet-input1" name="width_ft[]" class="feet-input1 input-field" placeholder=""
                                    min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                <span class="separator">(Ft.)</span>
                                <input type="number" id="inches-input1" name="width_in[]" class="inches-input1 input-field" placeholder=""
                                    min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                <span class="separators">(In.)</span>
                            </div>
                        </div>            
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="lab-cos">Weight</label>
                            <div class="input-container1">
                                <input type="" id="feet-input" class="feet-input1 input-field-1" name="weight[]" placeholder=""
                                    min="0" maxlength="6" oninput="limitDigits(this, 6)">
                                <span class="separators-w">(Lbs.)</span>
                            </div>
                        </div>
                    </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="load_method" class="text-white">Load Method</label>
                            <select class="nice-select" id="load_method" name="load_method[]">
                                <option value="" disabled selected>Select</option>
                                <option value="LOADING DOCK">LOADING DOCK</option>
                                <option value="CRANE">CRANE</option>
                                <option value="FORKLIFT">FORKLIFT</option>
                                <option value="DRIVE ROLL">DRIVE ROLL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="unload_method" class="text-white">Unload Method</label>
                            <select class="nice-select" id="unload_method" name="unload_method[]">
                                <option value="" disabled selected>Select</option>
                                <option value="LOADING DOCK">LOADING DOCK</option>
                                <option value="CRANE">CRANE</option>
                                <option value="FORKLIFT">FORKLIFT</option>
                                <option value="DRIVE ROLL">DRIVE ROLL</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
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

        $('.vehicles-container').append(newVehicleHtml);
        // Initialize the searchable dropdown for new elements
        initializeSearchableDropdown();
    }
</script>

   <!-- year search work -->

   <script>
    // Initialize Select2 on existing dropdowns (if needed)
    initializeSearchableDropdown();
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
    
</script>

<!-- year search work -->