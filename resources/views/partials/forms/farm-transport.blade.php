<div class="row select-bm">

<div class="col-md-4">
    <div class="input-form tj-select">
        <label> Year</label>
        <select class="nice-select vehicle-year" name="year[]" id="year">
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

<a class="add-car addVehicleBtn" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
Vehicle</a>

<div class="vehicles-container">
</div>

                       
                            

                          
                        <input type="hidden" name="vehicle_opt" value="vehicle" hidden>

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
                                        <select class="nice-select" id="condition" name="condition">
                                            <option value="1" selected>Running</option>
                                            <option value="2">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="load_type" class="text-white">Load Type</label>
                                        <select class="nice-select" id="load_type" name="load_type">
                                            <option value="" disabled selected>Select</option>
                                            <option value="LTL (LESS THEN TRUCK LOAD)">LTL (LESS THEN TRUCK LOAD)</option>
                                            <option value="FTL (FULL TRUCK LOAD)">FTL (FULL TRUCK LOAD)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="load_method" class="text-white">Load Method</label>
                                        <select class="nice-select" id="load_method" name="load_method">
                                            <option value="" disabled selected>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="unload_method" class="text-white">Unload Method</label>
                                        <select class="nice-select" id="unload_method" name="unload_method">
                                            <option value="" disabled selected>Select</option>
                                            <option value="LOADING DOCK">LOADING DOCK</option>
                                            <option value="CRANE">CRANE</option>
                                            <option value="FORKLIFT">FORKLIFT</option>
                                            <option value="DRIVE ROLL">DRIVE ROLL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">




<div class="col-md-4">

    <label class="lab-cos">Length</label>
    <div class="input-container">
        <input type="number" id="feet-input" class="input-field" placeholder="" min="0" maxlength="3"
            oninput="limitDigits(this, 3)">
        <span class="separator">(Ft.)</span>
        <input type="number" id="inches-input" class="input-field" placeholder="" min="0" max="11"
            maxlength="2" oninput="limitDigits(this, 2)">
        <span class="separators">(In.)</span>
    </div>
</div>

<div class="col-md-4">

    <label class="lab-cos">Width</label>
    <div class="input-container">
        <input type="number" id="feet-input1" class="input-field" placeholder="" min="0" maxlength="3"
            oninput="limitDigits(this, 3)">
        <span class="separator">(Ft.)</span>
        <input type="number" id="inches-input1" class="input-field" placeholder="" min="0" max="11"
            maxlength="2" oninput="limitDigits(this, 2)">
        <span class="separators">(In.)</span>
    </div>
</div>

<div class="col-md-4">

    <label class="lab-cos">Height</label>
    <div class="input-container">
        <input type="number" id="feet-input2" class="input-field" placeholder="" min="0" maxlength="3"
            oninput="limitDigits(this, 3)">
        <span class="separator">(Ft.)</span>
        <input type="number" id="inches-input2" class="input-field" placeholder="" min="0" max="11"
            maxlength="2" oninput="limitDigits(this, 2)">
        <span class="separators">(In.)</span>
    </div>
</div>
</div>
<div class="row">


<div class="col-md-4">

    <label class="lab-cos">Weight</label>
    <div class="input-container1">
        <input type="" id="feet-input" class="input-field-1" placeholder="" min="0" maxlength="6"
            oninput="limitDigits(this, 6)">
        <span class="separators-w">(Lbs.)</span>

    </div>
</div>
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
                           
                                <input class="form-control image_input" type="file" accept="image/*" multiple onchange="previewImages(event)">
    <div class="image-preview-container" id="imagePreviewContainer"></div>
                        </div>