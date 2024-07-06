
                    <div class="tj-input-form w-100" data-bg-image="">
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
                            <div class="container mt-2">
                                <!-- Step 1: Moving From/To -->
                                <div class="route_quote_info" id="step1">
                                    <div class="row">
                                        <h4 class="title text-center">Quote Request!</h4>
                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving From</h6>
                                            <label class="text-white mb-2">Where Are You Moving From?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="pickup-location"
                                                    placeholder="Enter City or ZipCode" name="From_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="pickup-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 mb-4">
                                            <h6 class="text-white">Moving To</h6>
                                            <label class="text-white mb-2">Where Are You Moving To?</label>
                                            <div class="single-input-field">
                                                <input class="form-control" type="text" id="delivery-location"
                                                    placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                                <ul class="suggestions suggestionsTwo"></ul>
                                                <label class="error-message" id="delivery-location-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="price__cta-btn text-center">
                                                <button class="tj-submit-btn" type="button" id="step1_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2: Vehicle Information -->
                                <div class="vehicle_quote_info" id="step2" style="display: none;">
                                    <div class="row">
                                        <h4 class="title text-center">VEHICLE INFORMATION</h4>
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
                                                <button class="tj-submit-btn previous" id="step2_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">
                                                <button class="tj-submit-btn" type="button" id="step2_next">
                                                    Next <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3: Customer Information -->
                                <div class="basic_quote_info" id="step3" style="display: none;">
                                    <div class="row mb-3">
                                        <h4 class="text-center text-white">Customer Information</h4>
                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Your Name:</label>
                                                <input class="form-control" required name="phone" type="tel"
                                                    placeholder="Customer Name">
                                                <!-- <input class="form-control" required name="Custo_Name" type="text" placeholder="Customer Name"> -->
                                                <label class="error-message" id="Custo_Name-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white">Phone:</label>
                                                <input id="phone" class="form-control" required name="phone"
                                                    type="tel" placeholder="Customer Phone">
                                                <label class="error-message" id="Custo_Phone-error">This field is
                                                    required.</label>
                                            </div>
                                        </div> --}}

                                        <div class="col-xl-4 col-lg-4">
                                            <div class="single-input-field">
                                                <label class="d-block text-white"> Email Address:</label>
                                                <input class="form-control" required name="Custo_Email" type="email"
                                                    placeholder="Email address">
                                                <label class="error-message" id="Custo_Email-error">This field is
                                                    required.</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn">
                                                <button class="tj-submit-btn previous" id="step3_previous">
                                                    Previous <i class="fa-light fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="price__cta-btn float-end">

                                                <button class=" tj-submit-btn " href="" type="submit"
                                                    id="submit_instant_code" value="Submit Form">
                                                    Calculate Price <i class="fa-light fa-arrow-right"></i>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>





                    </div>
               