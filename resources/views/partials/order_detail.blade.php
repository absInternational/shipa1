<div class="container " style=" margin-top: 0px; ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"
                    style="    border-bottom-color:transparent;background-color:#8fc445 !important; color:#fff !important;">
                    <div class=" mb-0 w-100"><strong class="heading">Book Order #{{ $data['id'] }} </strong>

                        {{-- <p class="subhead">Your IP address - {{ $ip_address }}</p> --}}

                    </div>
                </div>
                <div class="card-body">

                    <form action="/order_payment" method="post" autocomplete="off" class="needs-validation">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data['id'] }}">
                        <input type="hidden" name="ip" value="{{ $ip_address }}">
                        <input type="hidden" name="ipcity" value="">
                        <input type="hidden" name="ipregion" value="">
                        <input type="hidden" name="ipcountry" value="">
                        <input type="hidden" name="iploc" value="">
                        <input type="hidden" name="ippostal" value="">
                        <input type="hidden" name="browser" value=" ">
                        <input type="hidden" name="platform" value="">

                        @if (Auth::check())
                            <input type="hidden" name="pay_by_user" value="1" />
                        @else
                            <input type="hidden" name="pay_by_customer" value="1" />
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" style="border: 0px">
                                    <div class="card-body">
                                        <div class="col-sm-12 border">
                                            <div style="margin-left: -16px;margin-right: -16px;    
                                    border-width: 0px 0px 1px 0px !important;
                                    background-color:#8fc445 !important; color:#fff !important;"
                                                class="card-header bg-secondary text-white font-weight-bold">
                                                SUMMARY
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <br>
                                                    <strong>Order Information</strong>
                                                    <table class="table customtable">
                                                        @php
                                                            $vehiclearray = explode('*^-', $data['ymk']);
                                                            $vin_num = explode('*^', $data['vin_num']);
                                                            $condition1 = explode('*^', $data['condition']);
                                                            $transport = explode('*^', $data['transport']);
                                                        @endphp
                                                        @php
                                                            if ($data['freight']) {
                                                                # code...
                                                                $frieght_class = $data['freight']['frieght_class'];
                                                                $equipment_type = implode(
                                                                    ', ',
                                                                    explode('^*', $data['freight']['equipment_type']),
                                                                );
                                                                $trailer_specification =
                                                                    $data['freight']['trailer_specification'];
                                                                $ex_pickup_date = $data['freight']['ex_pickup_date'];
                                                                $ex_pickup_time = $data['freight']['ex_pickup_time'];
                                                                $ex_delivery_date =
                                                                    $data['freight']['ex_delivery_date'];
                                                                $ex_delivery_time =
                                                                    $data['freight']['ex_delivery_time'];
                                                                $commodity_detail =
                                                                    $data['freight']['commodity_detail'];
                                                                $commodity_unit = $data['freight']['commodity_unit'];
                                                                $total_weight_lb = $data['freight']['total_weight_lbs'];
                                                                $pick_up_service = implode(
                                                                    ', ',
                                                                    explode('^*', $data['freight']['pick_up_services']),
                                                                );
                                                                $deliver_service = implode(
                                                                    ', ',
                                                                    explode('^*', $data['freight']['deliver_services']),
                                                                );
                                                                $shipment_prefences =
                                                                    $data['freight']['shipment_prefences'];
                                                            }
                                                        @endphp
                                                        <tbody>
                                                            <tr>
                                                                <td>Order#</td>
                                                                <td class="font-weight-bold">{{ $data['id'] }}
                                                                </td>
                                                            </tr>
                                                            @if ($data['car_type'] != 3)
                                                                <tr>
                                                                    <td>Vehicle Name</td>
                                                                    <td class="font-weight-bold">
                                                                        @foreach ($vehiclearray as $key => $vhicle)
                                                                            {{ $vhicle }}
                                                                            (Vin:{{ isset($vin_num[$key]) ? (!empty(trim($vin_num[$key])) ? $vin_num[$key] : 'N/A') : 'N/A' }})
                                                                            <br>
                                                                        @endforeach

                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Condition</td>
                                                                    <td class="font-weight-bold">
                                                                        @if ($data['condition'] == 1)
                                                                            return "Running
                                                                        @else
                                                                            Not- Running
                                                                        @endif
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Transport</td>
                                                                    <td class="font-weight-bold">
                                                                        @if ($data['transport'] == 1)
                                                                            Open
                                                                        @else
                                                                            Enclosed
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @else
                                                                <tr>
                                                                    <td>Commodity details</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $commodity_detail }}
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Equipment type</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $equipment_type }}
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Trailer Specifications</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $trailer_specification }}
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            <tr>
                                                                <td>Pickup Location</td>
                                                                <td class="font-weight-bold">
                                                                    {{ $data['originzsc'] }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Delivery Location</td>
                                                                <td class="font-weight-bold">
                                                                    {{ $data['destinationzsc'] }}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                </div>
                                                <div class="col-sm-6">
                                                    <br>

                                                    <strong>Pricing Information</strong>


                                                    <table class="table customtable">
                                                        <tbody>
                                                            <tr>
                                                                <td>Booking Price</td>
                                                                <td class="font-weight-bold text-right">
                                                                    ${{ $data['payment'] }}</td>
                                                            </tr>
                                                            <?php
                                                            $coupon_price = 0;
                                                            if (isset($data['coupon_id'])) {
                                                                $coupon = \App\Coupon::find($data['coupon_id']);
                                                                if (isset($coupon->id)) {
                                                                    $coupon_price = $coupon->coupon_price ?? 0;
                                                                }
                                                            }
                                                            ?>
                                                            @if (!empty($data['payment']))
                                                                @if ($coupon_price > 0)
                                                                    <tr>
                                                                        <td>Coupon Price</td>
                                                                        <td class="font-weight-bold text-right"> -
                                                                            ${{ $coupon_price }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Remaining Price</td>
                                                                        <td class="font-weight-bold text-right">
                                                                            ${{ $data['payment'] - $coupon_price }}
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endif
                                                            <tr>
                                                                <td>Deposit</td>
                                                                <td class="font-weight-bold text-right">
                                                                    {{ isset($data['deposit_amount']) ? '$' . $data['deposit_amount'] : '$0' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Balance Amount</td>
                                                                <td class="font-weight-bold text-right">
                                                                    {{ isset($data['balance']) ? '$' . $data['balance'] : '$0' }}
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($data['car_type'] == 3)
                                <div class="col-lg-12">
                                    <div class="card" style="border: 0px">
                                        <div class="card-body">
                                            <div class="col-sm-12 border">
                                                <div style="margin-left: -16px;margin-right: -16px;
                                    border-width: 0px 0px 1px 0px !important;
                                    background-color:#8fc445 !important; color:#fff !important;"
                                                    class="card-header bg-secondary text-white font-weight-bold">
                                                    Freight Detail
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <strong>Order Information</strong>
                                                        <table class="table customtable">

                                                            <tbody>
                                                                <tr>
                                                                    <td>Freight Class</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $frieght_class }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Equipment Type</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $equipment_type }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Trailer Specification</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $trailer_specification }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expected Pickup Date</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $ex_pickup_date }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expected Pickup Time</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $ex_pickup_time }}</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <table class="table customtable">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Expected Delivery Date</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $ex_delivery_date }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expected Delivery Time</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $ex_delivery_time }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Commodity Detail</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $commodity_detail }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Commodity Unit</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $commodity_unit }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total Weight (lbs)</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $total_weight_lb }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pickup Services</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $pick_up_service }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Delivery Services</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $deliver_service }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shipment Preferences</td>
                                                                    <td class="font-weight-bold">
                                                                        {{ $shipment_prefences }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="text-muted text-right">
                            <strong>Note: </strong>Please fill out all the fields that are required (*).
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mainTitle">
                                    <div class="stepContainer">
                                        <span>1</span>
                                    </div>
                                    <div class="stepTitle">
                                        <h5>
                                            Customer information
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="@if ($data['car_type'] != 3) col-lg-6 @else col-lg-12 @endif col-sm-12">
                                <div class="card-header font-weight-bold"
                                    style="background-color:#8fc445 !important; color:#fff !important;">
                                    Customer Information
                                </div>

                                <div class="card-body border">

                                    <div class="form-group">
                                        <label for="name"><strong>Full Name</strong><span class="text-danger">
                                                *</span></label>
                                        <input autocomplete="nope" type="text" class="form-control"
                                            id="name" name="name" placeholder="Enter Name" required=""
                                            value="{{ $data['oname'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="phone"><strong>Phone #</strong><span class="text-danger">
                                                    *</span></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                maxlength="15" id="phone" name="phone"
                                                placeholder="Enter Phone #" required=""
                                                value="{{ $data['main_ph'] }}">

                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone2"><strong>Second Phone #</strong></label>
                                            <input autocomplete="nope" type="text" value=""
                                                class="form-control" id="phone2" name="phone2" maxlength="15"
                                                placeholder="Enter Second Phone #">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="address"><strong>Address</strong><span class="text-danger">
                                                *</span></label>
                                        <input autocomplete="nope" type="text" class="form-control"
                                            id="address" name="address" placeholder="Enter Address" required=""
                                            value="{{ $data['oaddress'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>



                                    <div id="zip">
                                        <div class="form-group">
                                            <label class="form-label">Zip Code
                                                <span class="text-danger"> *</span>
                                            </label>
                                            <input type="text" id="o_zip1" class="form-control "
                                                maxlength="11" name="o_zip1"
                                                @if ($data['originzsc']) readonly @endif
                                                value="{{ $data['originzsc'] }}" placeholder="ZIP CODE" required />
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="email"><strong>Email Address</strong>
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input autocomplete="nope" type="email" class="form-control"
                                            id="email" name="email" placeholder="Enter Email Address"
                                            required="" value="{{ $data['oemail'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12"
                                @if ($data['car_type'] == 3) style="display: none" @endif>
                                <div class="card-header  font-weight-bold"
                                    style="background-color:#8fc445 !important; color:#fff !important;">
                                    Vehicle Information
                                </div>

                                <div class="card-body border">

                                    <div class="form-group">
                                        <label for="carrier"><strong>Carrier Type</strong></label>
                                        <input autocomplete="nope" type="text" class="form-control"
                                            value="@foreach ($transport as $val3){{--  --}} @endforeach"
                                            disabled="">
                                    </div>


                                    <div class="form-group">
                                        <label for="year"><strong>
                                                Vehicle Name</strong></label>
                                        @php
                                            $vehiclearray2 = explode('*^', $data['ymk']);
                                            $vehiclearraycondition = explode('*^', $data['condition']);
                                        @endphp
                                        <input type="text" class="form-control"
                                            value="@foreach ($vehiclearray2 as $veh) {{ $veh }} @endforeach"
                                            disabled="">
                                    </div>

                                    <div class="form-group">
                                        <label for="make"><strong>Vehicle Runs</strong></label>
                                        <input type="text" class="form-control"
                                            value="@foreach ($vehiclearraycondition as $condition) @if ($condition == 1) Running @else Not Running @endif @endforeach"
                                            disabled="">
                                    </div>

                                    <div class="form-group">
                                        <label for="auction"><strong>Is it in Auction?</strong><span
                                                class="text-danger"> *</span></label>
                                        <select name="auction" id="auction" class="form-control select2" required>
                                            <option value="" selected="">Select</option>
                                            <option @if (!empty($data['oauction'])) selected @endif value="yes">
                                                Yes</option>
                                            <option @if (empty($data['oauction'])) selected @endif value="no">
                                                No</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div id="auctionYes">
                                        @if (!empty($data['oauction']))
                                            <div class="form-group">
                                                <label for="auction_name"><strong>Auction Name</strong>
                                                    <span class="text-danger"> *</span></label>
                                                </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input autocomplete="nope" type="text" name="auction_name"
                                                        required id="auction_name" class="form-control"
                                                        value="{{ $data['oauction'] }}"
                                                        placeholder="Enter Auction Name">
                                                    <div class="form-control-position">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="buyer_num"><strong>Buyer/Lot/StockNumber</strong>
                                                    <span class="text-danger"> *</span></label>
                                                </label>
                                                <div class="controls position-relative has-icon-left">
                                                    <input autocomplete="nope" type="text" name="buyer_num"
                                                        id="buyer_num" required class="form-control"
                                                        value="{{ $data['obuyer_no'] }}"
                                                        placeholder="Enter Buyer/Lot/Stock Number">
                                                    <div class="form-control-position">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label for="vin"><strong>Last 8 of Vin#</strong>
                                            <span class="text-danger"> *</span></label>

                                        <div class="controls position-relative has-icon-left">
                                            <input autocomplete="nope" type="text" name="vin" id="vin"
                                                value="{{ $data['vin_num'] }}" required class="form-control"
                                                maxlength="8" placeholder="Enter Last 8 of Vin#">

                                            <div class="form-control-position">
                                                {{-- <i class="la la-edit"></i> --}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="vkey"><strong>Key</strong>
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <select name="vkey" id="vkey" class="form-control" required="">
                                            <option @if ($data['key_has'] == 'yes') selected @endif value="yes">
                                                Yes</option>
                                            <option @if ($data['key_has'] == 'no') selected @endif value="no">
                                                No</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="vehicleDate"><strong>Vehicle First Available Date</strong><span
                                                class="text-danger"> *</span></label>
                                        <input type="date" autocomplete="nope" required=""
                                            data-date-format="dd/mm/yyyy" id="datepicker" class="form-control"
                                            name="vehicledate" placeholder="Vehicle First Available Date"
                                            value="{{ $data['vehicle_available_date'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="mainTitle">
                                    <div class="stepContainer">
                                        <span>2</span>
                                    </div>
                                    <div class="stepTitle">
                                        <h5>Location Details</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="card-header  font-weight-bold"
                                    style="background-color:#8fc445 !important; color:#fff !important;">
                                    Origin Information
                                </div>

                                <div class="card-body border">

                                    <div class="form-group">
                                        <label for="oname"><strong>Contact Name</strong><span class="text-danger">
                                                *</span></label>
                                        <input autocomplete="nope" type="text" class="form-control"
                                            id="oname" name="oname" placeholder="Enter Contact Name"
                                            required="" value="{{ $data['oname'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="oemail"><strong>Email Address</strong><span class="text-danger">
                                                *</span></label>
                                        <input autocomplete="nope" type="email" class="form-control"
                                            id="oemail" name="oemail" placeholder="Enter Email Address"
                                            required="" value="{{ $data['oemail'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="ophone"><strong>Phone #</strong><span class="text-danger">
                                                    *</span></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                id="ophone" name="ophone" placeholder="Enter Phone #"
                                                required="" value="{{ $data['main_ph'] }}">

                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ophone2"><strong>Second Phone #</strong></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                id="ophone2" name="ophone2" placeholder="Enter Second Phone #"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="oaddress"><strong>Street Address</strong><span
                                                class="text-danger"> *</span></label>
                                        <input autocomplete="nope" type="text" required=""
                                            class="form-control" id="oaddress" name="oaddress"
                                            placeholder="Enter Street Address" value="{{ $data['oaddress'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="state"><strong>City, State, Zip</strong><span
                                                class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" required=""
                                            value="{{ $data['originzsc'] }}"
                                            @if ($data['originzsc']) disabled="" @endif>

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="card-header  font-weight-bold"
                                    style="background-color:#8fc445 !important; color:#fff !important;">
                                    Destination Information
                                </div>

                                <div class="card-body border">

                                    <div class="form-group">
                                        <label for="dname"><strong>Contact Name</strong><span class="text-danger">
                                                *</span></label>
                                        <input autocomplete="nope" type="text" class="form-control"
                                            id="dname" name="dname" placeholder="Enter Contact Name"
                                            required="" value="{{ $data['dname'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="demail"><strong>Email Address</strong>
                                            <span class="text-danger"> *</span>
                                        </label>
                                        <input autocomplete="nope" type="email" class="form-control"
                                            id="demail" name="demail" required placeholder="Enter Email Address"
                                            value="{{ $data['demail'] }}">
                                    </div>
                                    @php
                                        $dphone1 = '';
                                        $dphone2 = '';
                                        $vehiclearray = explode('*^', $data['dphone']);
                                        if (count($vehiclearray) > 0) {
                                            $dphone1 = $vehiclearray[0];
                                        }
                                        if (count($vehiclearray) > 1) {
                                            $dphone2 = $vehiclearray[1];
                                        }
                                    @endphp
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dphone"><strong>Phone #</strong><span class="text-danger">
                                                    *</span></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                id="dphone" name="dphone" placeholder="Enter Phone #"
                                                required="" value="{{ $dphone1 }}">

                                            <div class="invalid-feedback">
                                                This field is required.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dphone2"><strong>Second Phone #</strong></label>
                                            <input autocomplete="nope" type="text" class="form-control"
                                                id="dphone2" name="dphone2" placeholder="Enter Second Phone #"
                                                value="{{ $dphone2 }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="daddress"><strong>Street Address</strong><span
                                                class="text-danger"> *</span></label>
                                        <input autocomplete="nope" required="" type="text"
                                            class="form-control" id="daddress" name="daddress"
                                            placeholder="Enter Street Address" value="{{ $data['daddress'] }}">

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="state"><strong>City, State, Zip</strong><span
                                                class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" required=""
                                            value="{{ $data['destinationzsc'] }}"
                                            @if ($data['destinationzsc']) disabled="" @endif>

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card-header  font-weight-bold"
                                    style="background-color:#8fc445 !important; color:#fff !important;">
                                    Additional Vehicle Information (Optional)
                                </div>

                                <div class="card-body border">

                                    <div class="form-group">
                                        <textarea name="additional_2" id="additional_2" cols="30" rows="5" class="form-control"> {{ $data['additional_2'] }}</textarea>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">

                                <div class="mainTitle">
                                    <div class="stepContainer">
                                        <span>3</span>
                                    </div>
                                    <div class="stepTitle">
                                        <h5>Confirm Order</h5>
                                    </div>
                                </div>

                                <div id="accordion">

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="mb-0">
                                                <button type="button" class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    [+] Terms &amp; Conditions
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" style="display: none" class="collapse "
                                            aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">

                                                <ol>
                                                    <li class="text-justify">
                                                        ShipA1 Transport is licensed and bonded by the FMCSA and
                                                        does agree to arrange to have vehicle(s) described in
                                                        quotation shipped on or about the dates available depending
                                                        on the carrier/transports schedule. ShipA1 Transport will
                                                        designate a reliable carrier/transporter to fill the terms
                                                        and conditions of the agreement. ShipA1 Transport is a
                                                        broker and does not guarantee specific pickup or delivery
                                                        dates. Pickup and delivery dates are only estimating and
                                                        there are no guarantees. The carrier/transporter or ShipA1
                                                        Transport will not be held responsible for delays for any
                                                        reason. After ShipA1 Transport has confirmed scheduling with
                                                        a reliable carrier/transporter, ShipA1 Transport has
                                                        fulfilled our service agreement.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        This order is subject to all terms and conditions of the
                                                        carrier/transporter's straight bill of lading. Copies of
                                                        which are available at the office of the
                                                        carrier/transporter. Once a carrier/transporter has been
                                                        assigned to your order, the bill of lading will then be the
                                                        only agreement in effect along with the terms and conditions
                                                        of the carrier/transporter assigned to your order.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        The carrier/transporter has primary insurance responsibility
                                                        during transit of your vehicle. All claims will be settled
                                                        at actual cost. All claims are to be made to the actual
                                                        carrier/transporter who transported your vehicle(s). Refer
                                                        to the carrier/transporter's bill of lading for information
                                                        regarding the claim process. The customer agrees that this
                                                        is the only contract between the parties covering the
                                                        arrangement of transport and no other agreements or
                                                        contracts are in effect until arrangement of scheduling has
                                                        been made with an authorized carrier, at this time the
                                                        carrier/transporter's contract and bill of lading will be in
                                                        effect immediately. No claims or legal action of any kind
                                                        may be initiated against the transport broker. All claims
                                                        for damage must be made to the carrier/transporter.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        The carrier/transporter will not be responsible for any
                                                        damages caused by freezing of engine, cooling system,
                                                        batteries, or due to leaking fluids, etc. The
                                                        carrier/transporter will not be responsible for any exhaust
                                                        system, mufflers, tail pipes, or any mechanical function
                                                        damage to include engine, transmission, rear end, drive
                                                        trains, wiring systems, air bags, clutches, computerized
                                                        components (anything that is mechanical or electrical). The
                                                        carrier/transporter will not be responsible for any
                                                        convertible tops that are loose, torn, or have visible wear.
                                                        This includes any canvas or material coverings.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        The customer is responsible for preparing the vehicle for
                                                        transport, Including: disarming any alarms, removing any
                                                        loose parts, accessories, hanging spoilers, etc. Any part of
                                                        the vehicle that falls off during transport is the
                                                        customer's responsibility including damages caused to any
                                                        and all other vehicles involved.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        No auto rental will be honored for delays, damage,
                                                        accidents, acts of God, or for any other reason.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        If a carrier/transporter is sent to acquire the vehicle and
                                                        it is not there, is unavailable, has been moved or cannot be
                                                        picked up for any other reason, the customer authorizes
                                                        ShipA1 Transport to charge an additional $100 reposting fee
                                                        that will be added to your transport order for the reposting
                                                        of your order to our dispatching department for
                                                        rescheduling, depending on the first available date given at
                                                        the time the service order was placed.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        The vehicle owner or customer must in their absence,
                                                        designate a person to act as their agent at the point of
                                                        pickup or deliver. In which will be noted on the order form.
                                                        Customer/Shipper can be notified for pickup a minimum of
                                                        3-24 hours.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        All vehicles to be delivered with a balance owing shall be
                                                        paid by CASH or CASHIER'S CHECK ONLY (U.S. Dollars) payable
                                                        to the carrier/transporter. Should delivery be attempted
                                                        after proper notification (3-24 hours voice notification to
                                                        phone numbers provided by customer/shipper) and
                                                        customer/shipper or his designated agent does not have
                                                        proper funds or is unavailable to receive delivery,
                                                        vehicle(s) will be taken to and left at the nearest
                                                        terminal, where shipper is responsible and will have to
                                                        retrieve, pay for storage or redelivery fees. It is the
                                                        customer's responsibility to have payment in full when
                                                        carrier/transporter arrives. If carrier/transporter notices
                                                        that he is unable to drive to the address at the time of
                                                        delivery the customer agrees to meet the carrier/transporter
                                                        at a nearby location. The customer agrees that if the
                                                        payment cannot be made by cash or cashier's check, the
                                                        vehicle will be stored at the customer's expense. Should the
                                                        customer be unable to accept delivery for any reason, the
                                                        vehicle will be stored at the customer's expense.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        The customer agrees that should this vehicle become
                                                        inoperative for any reason at pickup or during transport, a
                                                        $150 non-operable fee will be assessed to the customer at
                                                        the time of delivery.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        The carrier/transporter will not be responsible for any
                                                        damages not resulting from carrier/transporter negligence.
                                                        The customer verifies the vehicle is free of contents, to
                                                        and including trunk, therefore ShipA1 Transport and assigned
                                                        carrier/transporter do not take any responsibility for
                                                        personal items left inside vehicle.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        Exceptions for damages must be noted on the post transport
                                                        inspection form at the time of delivery, any claim for
                                                        damages not documented on the post-trip inspection form will
                                                        not be honored.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        All claims, litigation or legal action must have a right of
                                                        venue in that state of Maryland, County of Baltimore, in the
                                                        Superior Court.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        You may cancel your order at anytime; cancellations must be
                                                        made in writing by fax or email. ShipA1 Transport has $99.00
                                                        cancellations fee. If you cancel your transport prior to you
                                                        vehicle(S) are assigned to carrier. If booked order is
                                                        cancelled after assigned to carrier there is a $199.00
                                                        charge which you agree to be charged. However, if in fact
                                                        your vehicle is not scheduled for pickup within 30 days from
                                                        your first available date, you are entitled to a full refund
                                                        of your deposit.
                                                    </li>
                                                    <br>
                                                    <li class="text-justify">
                                                        We reserve the right to refuse service to anyone who
                                                        violates any of the terms and conditions written above. Or
                                                        for any other reason we feel necessary. Threats, harassment,
                                                        etc. will result in immediate cancellation of your service
                                                        order and the administrative fee will not be refunded as we
                                                        have actively worked on your order, the remainder of your
                                                        deposit will be refunded.
                                                    </li>

                                                </ol>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="yourname"><strong>Your Name</strong><span class="text-danger">
                                            *</span></label>
                                    <input autocomplete="nope" type="text" class="form-control" id="yourname"
                                        name="yourname"
                                        value="{{ isset($data['orderpayment']->your_name) ? $data['orderpayment']->your_name : '' }}"
                                        placeholder="Enter Your Name" required>

                                    <div class="invalid-feedback">
                                        This field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="signature"><strong>Your Signature</strong><span class="text-danger">
                                            *</span></label>
                                    <input autocomplete="nope" type="text" class="form-control" id="signature"
                                        name="signature" placeholder="Enter Your Signature" required>

                                    <div class="invalid-feedback">
                                        This field is required.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="signtures"></div>

                        <div class="row mt-2">
                            <div class="col-lg-12 col-sm-12">

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="confirm"
                                            id="confirm" required="" value="1">
                                        <label class="form-check-label" for="confirm">
                                            I have read and accept the Terms &amp; Conditions for this transport.
                                            (Click the plus sign above to view.)<span class="text-danger"> *</span>
                                        </label>

                                        <div class="invalid-feedback">
                                            This field is required.
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row mb-3">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg submit" name="nextStep">Next
                                    Step >>
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modaldemo05">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body text-center p-4">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                        aria-hidden="true">&times;</span></button>
                <i class="fe fe-x-circle fs-100 text-danger lh-1 mb-5 d-inline-block"></i>
                <h4 class="text-danger">Please fill out the required fields!</h4>
            </div>
        </div>
    </div>
</div>
