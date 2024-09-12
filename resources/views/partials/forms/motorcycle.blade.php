<input type="hidden" name="vehicle_opt" value="vehicle" hidden>
<input type="hidden" name="car_type" value="1" hidden>



<div class="row select-bm">

    <div class="col-md-4">
        <div class="input-form tj-select">
            <label> Year</label>
            <!-- <select class="nice-select vehicle-year" name="year[]" id="year" required>
                <option value="" disabled selected>Select Year
                </option>
                @php
                $currentYear = date('Y');
                for ($year = $currentYear; $year >= 1936; $year--) {
                echo "<option value='$year'>$year</option>";
                }
                @endphp
            </select> -->
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
    <div class="col-md-6">
        <div class="form-group">
            <label for="trailer_type" class="text-white">Select Trailer Type</label>
            <select class="nice-select " id="trailer_type" name="trailer_type">
                <option value="1" selected>Open Trailer</option>
                <option value="2">Enclosed Trailer</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="condition" class="text-white">Condition</label>
            <select class=" nice-select" id="condition" name="condition[]">
                <option value="1" selected>Running</option>
                <option value="2">Non Running</option>
            </select>
        </div>
    </div>
</div>
<a class="add-car addVehicleBtn" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
    Vehicle</a>

<div class="vehicles-container" id="vehicles-container">
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
    <di class="col-md-6">
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
    </di>
</div>
<div class="row ms-3">
    <div class="input-form mt-3">
        <label class="d-block" class="text-white"> Image:</label>
        <input class="form-control image_input" name="image[]" type="file" accept="image/*" multiple
            onchange="previewImages(event)">
        <div class="image-preview-container" id="imagePreviewContainer"></div>
        <!-- <input class="form-control image_input" type="file" id="image" name="image[]"
            placeholder="Upload File" /> -->
    </div>
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