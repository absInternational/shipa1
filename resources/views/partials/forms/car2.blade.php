                            
<input type="hidden" name="vehicle_opt" value="vehicle" hidden>
<input type="hidden" name="car_type" value="1" hidden>
<div class="row mb-3 ">
    <div class="col-md-4">
        <div class="input-form tj-select">
            <label> Year</label>
            <select class="nice-select vehicle-year" name="year[]" id="year" required>
                <option value="" disabled selected>Select Year
                </option>
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
                <option value="" disabled selected>Select Make
                </option>
                @foreach ($makes as $make)
                    <option value="{{ $make->make }}">
                        {{ $make->make }}</option>
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
</div>

<div class="row mb-3 ">
    <div class="col-md-6">
        <div class="form-group" style="line-height:23px;">
            <label for="trailer_type" class="text-white">Select Trailer
                Type</label>
            <select class="form-control" id="trailer_type" name="trailer_type">
                <option value="Open" selected>Open</option>
                <option value="Enclosed">Enclosed</option>
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
<a class="add-car addVehicleBtn" id="addVehicleBtn">
    <i class="fa fa-plus"> Add
        Vehicle </i>
</a>
<div class="vehicles-container">
</div>
<div class="row ms-3">
    <di class="col-md-6">
        <div class="form-group">
            <input class="form-check-input " type="checkbox" id="modification" name="modification" value="1" />
            <label class="form-check-label ms-4 text-white" for="modification">
                Modified?</label>
        </div>
        <div class="input-form div-modify_info" style="display: none;">
            <label class="d-block"> Modification Information:</label>
            <input class="" type="text" id="c" name="modify_info"
                placeholder="Enter Modification Information" />
        </div>
    </di>
    <div class="col-md-6">
    <div class="form-check">
            <input class="form-check-input" type="checkbox" id="available_at_auction" name="available_at_auction"
                value="1"  />
            <label class="form-check-label text-white" for="available_at_auction"> Available
                at
                Auction?</label>
        </div>
        <div class="input-form div-link" style="display: none;">
            <label class="d-block"> Enter Link:</label>
            <input class="" type="url" id="link" name="link" placeholder="Enter Link"  />
        </div>
    </div>
</div>
<div class="input-form">
    <label class="d-block text-white"> Image:</label>
    <input class="form-control image_input" type="file" accept="image/*" multiple onchange="previewImages(event)">
    <div class="image-preview-container" id="imagePreviewContainer"></div>
    <!-- <input class="form-control image_input" type="file" id="image" name="image[]" placeholder="Upload File" /> -->
</div>
<script>
        function addNewVehicle() {
                console.log('abcd')
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
                        <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>
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
                newVehicleHtml +=
                    `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
            @endforeach

            newVehicleHtml += `
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="input-form tj-select model-div">
                    <label>Model</label>
                    <select class="nice-select model" name="model[]" id="model" required></select>`;
            newVehicleHtml += `
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
        } 
</script>