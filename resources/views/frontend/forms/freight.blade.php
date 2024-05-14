@extends('frontend.layouts.app')

@section('content')
<style>
    .suggestionsTwo{
        background: #fff;
        font-size: 14px;
        margin-top: -2px;
        padding-bottom: 20px;
        list-style: none;
        line-height: 28px;
        padding-left: 14px;
        display: none;
    }
    .suggestionsTwo li{
        cursor: pointer;
    }
    .suggestionsTwo li:hover{
        color: #8fc445;
    }
    .image_input{
        padding: 0px !important;
        padding-left: 10px !important;
    }
</style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Heavy</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Heavy</span>
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
                <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="{{ asset('frontend/images/banner/form-shape.png') }}">
                        <h4 class="title">Instant Heavy Shipping Quote!</h4>
                        <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
                            id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
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
                            <div class="input-form">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category">
                                    <option value="" disabled selected>Select</option>
                                    <option value="LTL USED COMMERCIAL GOODS">LTL USED COMMERCIAL GOODS</option>
                                    <option value="LTL NEW COMMERCIAL GOODS">LTL NEW COMMERCIAL GOODS</option>
                                    <option value="LTL USED GOODS">LTL USED GOODS</option>
                                    <option value="LTL NEW GOODS">LTL NEW GOODS</option>
                                    <option value="FTL FULL TRUCK LOAD">FTL FULL TRUCK LOAD</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" checked type="checkbox" id="available_at_auction"
                                    name="available_at_auction" value="1" />
                                <label class="form-check-label text-white" for="available_at_auction"> Available at
                                    Auction?</label>
                            </div>
                            <div class="input-form div-link mt-3">
                                <label class="d-block"> Enter Link:</label>
                                <input class="form-control" type="url" id="link" name="link"
                                    placeholder="Enter Link" />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" checked type="checkbox" id="boat_on_trailer"
                                    name="boat_on_trailer" value="1" />
                                <label class="form-check-label text-white" for="boat_on_trailer"> Is your freight already on a
                                    trailer?</label>
                            </div>
                            <div class="row mt-3">
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
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Commodity Detail:</label>
                                        <input type="text" id="commodity_detail" name="commodity_detail"
                                            placeholder="Commodity Detail" required="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Select Handling Unit:</label>
                                        <select class="form-control" id="handling_unit" name="handling_unit">
                                            <option value="" selected disabled>Select</option>
                                            <option value="Pallet">Pallet</option>
                                            <option value="Crate">Crate</option>
                                            <option value="Box">Box</option>
                                            <option value="Bag">Bag</option>
                                            <option value="Bale">Bale</option>
                                            <option value="Bundle">Bundle</option>
                                            <option value="Can">Can</option>
                                            <option value="Carton">Carton</option>
                                            <option value="Case">Case</option>
                                            <option value="Coil">Coil</option>
                                            <option value="Cylinder">Cylinder</option>
                                            <option value="Drum">Drum</option>
                                            <option value="Loose">Loose</option>
                                            <option value="Pail">Pail</option>
                                            <option value="Reel">Reel</option>
                                            <option value="Roll">Roll</option>
                                            <option value="Pipe">Pipe</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-form">
                                        <label class="d-block"> Commodity Unit:</label>
                                        <input type="number" id="commodity_unit" name="commodity_unit"
                                            placeholder="Commodity Unit" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer_specification" class="text-white">Trailer
                                            Specification</label>
                                        <select class="form-control" id="trailer_specification"
                                            name="trailer_specification">
                                            <option value="" selected disabled>Select</option>
                                            <option value="Air Ride(A)">Air Ride(A)</option>
                                            <option value="Blanket Wrap (B)">Blanket Wrap (B)</option>
                                            <option value="B-Train (BT)">B-Train (BT)</option>
                                            <option value="Chain(CH)">Chain(CH)</option>
                                            <option value="Chassis (CS)">Chassis (CS)</option>
                                            <option value="Conestoga(CO)">Conestoga(CO)</option>
                                            <option value="Curtain(C)">Curtain(C)</option>
                                            <option value="Double(2)">Double(2)</option>
                                            <option value="Extendable (E)">Extendable (E)</option>
                                            <option value="E-Track (ET)">E-Track (ET)</option>
                                            <option value="Hazmat (Z)">Hazmat (Z)</option>
                                            <option value="Hot Shot (HS)">Hot Shot (HS)</option>
                                            <option value="Insulated (N)">Insulated (N)</option>
                                            <option value="Lift Gate (LG)">Lift Gate (LG)</option>
                                            <option value="Load Out (LO)">Load Out (LO)</option>
                                            <option value="Load Ramp (LR)">Load Ramp (LR)</option>
                                            <option value="Moving (MV)">Moving (MV)</option>
                                            <option value="Open Top (OT)">Open Top (OT)</option>
                                            <option value="Oversized (O)">Oversized (O)</option>
                                            <option value="Pallet Exchange (X)">Pallet Exchange (X)</option>
                                            <option value="Side Kit (S)">Side Kit (S)</option>
                                            <option value="Tarp(T)">Tarp(T)</option>
                                            <option
                                                value="Team Driver(M)\">Team Driver(M)\</option>
                                            <option value="Temp
                                                Control (TC)">Temp Control (TC)</option>
                                            <option value="Triple (3)">Triple (3)</option>
                                            <option value="Vented (V)">Vented (V)</option>
                                            <option value="Walking Floor (WF)">Walking Floor (WF)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="equipment_type" class="text-white">Equipment Type</label>
                                        <select class="form-control" id="equipment_type" name="equipment_type">
                                            <option value="" disabled selected>Select</option>
                                            <option value="VAN (V)">VAN (V)</option>
                                            <option value="REEFER (RE)">REEFER (RE)</option>
                                            <option value="FLATBED (F)">FLATBED (F)</option>
                                            <option value="STEP DECK (SD)">STEP DECK (SD)</option>
                                            <option value="REMOVABLE GOOSENECK (RGN) ">REMOVABLE GOOSENECK (RGN) </option>
                                            <option value="CONESTOGA (CS)">CONESTOGA (CS)</option>
                                            <option value="CONTAINER / DRAYAGE (C)">CONTAINER / DRAYAGE (C)</option>
                                            <option value="TRUCK (T)">TRUCK (T)</option>
                                            <option value="HAZMAT (hazardous materials)">HAZMAT (hazardous materials)
                                            </option>
                                            <option value="POWER ONLY (PO)">POWER ONLY (PO)</option>
                                            <option value="HOT SHOT (HS)">HOT SHOT (HS)</option>
                                            <option value="LOWBOY (LB)">LOWBOY (LB)</option>
                                            <option value="ENDUMP (ED)">ENDUMP (ED)</option>
                                            <option value="LANDOLL (LD)">LANDOLL (LD)</option>
                                            <option value="PARTIAL (PT)">PARTIAL (PT)</option>
                                            <option value="20ft container">20ft container</option>
                                            <option value="40ft container">40ft container</option>
                                            <option value="48ft container">48ft container</option>
                                            <option value="53ft container">53ft container</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="hazardous" name="hazardous"
                                    value="1" />
                                <label class="form-check-label text-white" for="hazardous"> Hazardous</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="stackable" name="stackable"
                                    value="1" />
                                <label class="form-check-label text-white" for="stackable"> Stackable</label>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pick_up_services" class="text-white">Pickup Services</label>
                                        <select class="form-control" id="pick_up_services" name="pick_up_services">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Construction / Utility">Construction / Utility</option>
                                            <option value="Container Station">Container Station</option>
                                            <option value="Exhibition">Exhibition</option>
                                            <option value="Inside Pickup">Inside Pickup</option>
                                            <option value="Lift Gate Service">Lift Gate Service</option>
                                            <option value="Residential">Residential</option>
                                            <option value="Single Shipment">Single Shipment</option>
                                            <option value="Sorting / Segregation">Sorting / Segregation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deliver_services" class="text-white">Deliver Services</label>
                                        <select class="form-control" id="deliver_services" name="deliver_services">
                                            <option value="" disabled selected>Select</option>
                                            <option value="After Business Hours Delivery">After Business Hours Delivery
                                            </option>
                                            <option value="Construction / Utility">Construction / Utility</option>
                                            <option value="Appointment">Appointment</option>
                                            <option value="Container Station">Container Station</option>
                                            <option value="Exhibition">Exhibition</option>
                                            <option value="In Bond Freight">In Bond Freight</option>
                                            <option value="In Bond TIR Caret">In Bond TIR Caret</option>
                                            <option value="Inside - Same Level as Delivery Vehicle">Inside - Same Level as
                                                Delivery Vehicle</option>
                                            <option value="Lift Gate Service">Lift Gate Service</option>
                                            <option value="Residential">Residential</option>
                                            <option value="Mine / Govt / Airport">Mine / Govt / Airport</option>
                                            <option value="Notification Prior Delivery">Notification Prior Delivery
                                            </option>
                                            <option value="Delivery appointment required">Delivery appointment required
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Date:</label>
                                        <input type="date" id="ex_pickup_date" name="ex_pickup_date" required="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Pickup Time:</label>
                                        <input type="date" id="ex_pickup_time" name="ex_pickup_time" required="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Date:</label>
                                        <input type="date" id="ex_delivery_date" name="ex_delivery_date" required="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Delivery Time:</label>
                                        <input type="date" id="ex_delivery_time" name="ex_delivery_time" required="" />
                                    </div>
                                </div>
                            </div>
                            <div class="input-form mt-3">
                                <label class="d-block" class="text-white"> Image:</label>
                                <input class="form-control image_input" type="file" id="image" name="image" placeholder="Upload File" />
                            </div>
                            <div class="row">
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
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Length (Ft.)</label>
                                        <input type="number" id="" name="length_ft" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Length (In.)</label>
                                        <input type="number" id="" name="length_in" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Width (Ft.)</label>
                                        <input type="number" id="" name="width_ft" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Width (In.)</label>
                                        <input type="number" id="" name="width_in" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Height (Ft.)</label>
                                        <input type="number" id="" name="height_ft" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Height (In.)</label>
                                        <input type="number" id="" name="height_in" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-form">
                                        <label class="d-block"> Weight (Lbs.)</label>
                                        <input type="number" id="" name="weight" placeholder=""
                                            required="" value="0" />
                                        <small id="errOLoc" class="err-loc"></small>
                                        <ul class="suggestions"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="text-white">Additional Services</h4>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="protect_from_freezing"
                                            name="protect_from_freezing" value="1" />
                                        <label class="form-check-label text-white" for="protect_from_freezing" style="font-size: 14px;"> Protect from freezing</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="sort_segregate"
                                            name="sort_segregate" value="1" />
                                        <label class="form-check-label text-white" for="sort_segregate" style="font-size: 14px;"> Sort & Segregate</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="blind_shipment"
                                            name="blind_shipment" value="1" />
                                        <label class="form-check-label text-white" for="blind_shipment" style="font-size: 14px;"> Blind Shipment</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-theme-button mt-3">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#available_at_auction').change(function() {
                if ($(this).is(':checked')) {
                    // $('#link').show();
                    $('.div-link').show();
                } else {
                    // $('#link').hide();
                    $('.div-link').hide();
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

// Keyup event handler for input fields
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
