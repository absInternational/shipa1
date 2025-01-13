<div class="tj-input-form mt-4 w-100" data-bg-image="">
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
    <form action="{{ route('lead.generation') }}" method="post" class="rd-mailform validate-form"
        id="" novalidate data-parsley-validate data-parsley-errors-messages-disabled
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
            {{-- <div class="route_quote_info" id="step1"> --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-form">
                            <label class="d-block">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Name" required="" />
                            <small id="errName" class="err-style"></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-form">
                            <label class="d-block">Phone:</label>
                            <input class="ophone" type="tel" id="phone2" name="phone" placeholder="Number" required="" />
                            <small id="errPhone" class="err-style"></small>
                            <input type="hidden" name="country_code" id="country_code2" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-form">
                            <label class="d-block">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email " required="" />
                            <small id="errEmail" class="err-style"></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-white">Services:</label>
                            {{-- <select>
                                <option value="" selected="" disabled="">Service</option> 
                                <option value="Vehicle">Vehicle Transportation</option>
                                <option value="Heavy">Heavy Equipment</option>
                                <option value="Freight">Freight Transportation</option>
                                <option value="RORO">RORO</option>
                            </select> --}}
                            <select name="service" id="service" class="" required="">
                                <option value="" selected="" disabled="">Service</option>
                                <option value="Car Transport Service">Car Transport Service</option>
                                <option value="Motorcycle Transport Service">Motorcycle Transport Service</option>
                                <option value="ATV/UTV Transport Service">ATV/UTV Transport Service</option>
                                <option value="Golf Cart Transport Service">Golf Cart Transport Service</option>
                                <option value="Boat Transport Services">Boat Transport Services</option>
                                <option value="Construction Equipment Services">Construction Equipment Services</option>
                                <option value="Commercial Truck Transport">Commercial Truck Transport</option>
                                <option value="Excavator Transport Services">Excavator Transport Services</option>
                                <option value="Farm Transport Services">Farm Transport Services</option>
                                <option value="Heavy Equipment Services">Heavy Equipment Services</option>
                                <option value="RV Transport Services">RV Transport Services</option>
                                <option value="Dry Van Transport">Dry Van Transport</option>
                                <option value="Hazmat Transport">Hazmat Transport</option>
                                <option value="Reefer Transport">Reefer Transport</option>
                                @foreach ($services as $service)
                                    @if ($service->category->name == 'RORO')
                                        <option value="{{ $service->name }}">{{ $service->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-form">
                            <label class="">Message:</label>
                            <br>
                            <textarea placeholder="Enter your message" name="message" required="" class="bg-white border rounded custom-textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tj-theme-button text-center mt-3">
                    {{-- <button class="tj-submit-btn" type="submit" value="submit">
                        Submit <i class="fa-light fa-arrow-right"></i>
                    </button> --}}
                    <button class="tj-submit-btn" type="submit" id=""
                        value="submit">
                        Submit<i class="fa-light fa-arrow-right"></i>
                    </button>
                </div>
            {{-- </div> --}}
        </div>
    </form>
</div>