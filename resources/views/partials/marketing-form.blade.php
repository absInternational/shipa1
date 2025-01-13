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
    <form id="marketing-form" action="{{ route('lead.generation') }}" method="post" novalidate data-parsley-validate data-parsley-errors-messages-disabled>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="input-form">
                        <label class="d-block">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Name" required />
                        <small id="errName" class="err-style"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-form">
                        <label class="d-block">Phone:</label>
                        <input class="ophone" type="tel" id="phone2" name="phone" placeholder="Number" required />
                        <small id="errPhone" class="err-style"></small>
                        <input type="hidden" name="country_code" id="country_code2" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-form">
                        <label class="d-block">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Email" required />
                        <small id="errEmail" class="err-style"></small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-white">Services:</label>
                        <select name="service" id="service" required>
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
                        </select>
                        <small id="errService" class="err-style"></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-form">
                        <label class="">Message:</label>
                        <br>
                        <textarea placeholder="Enter your message" name="message" required class="bg-white border rounded custom-textarea"></textarea>
                        <small id="errMessage" class="err-style"></small>
                    </div>
                </div>
            </div>
            <div class="tj-theme-button text-center mt-3">
                <button class="tj-submit-btn" type="submit" id="submitBtn" value="submit">
                    Submit<i class="fa-light fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        // Custom validation function for input fields
        function validateInput(inputField, errorField, validationFunction) {
            var inputValue = inputField.val().trim();
            if (!validationFunction(inputValue)) {
                if (errorField) {
                    errorField.text("This field is required.");
                }
                return false;
            } else {
                if (errorField) {
                    errorField.text("");
                }
                return true;
            }
        }

        // Validate if the email is valid
        function validateEmail(inputValue) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(inputValue);
        }

        // Handle form submission
        $("form").submit(function(event) {
            var isNameValid = validateInput($('#name'), $("#errName"), function(value) {
                return value !== "";
            });
            var isPhoneValid = validateInput($('#phone2'), $("#errPhone"), function(value) {
                return value !== "";
            });
            var isEmailValid = validateInput($('#email'), $("#errEmail"), validateEmail);
            var isMessageValid = validateInput($('textarea[name="message"]'), $("#errMessage"), function(value) {
                return value !== "";
            });
            var isServiceValid = validateInput($('#service_name'), $("#errService"), function(value) {
                return value !== "";
            });

            // Handle validation and prevent form submission if invalid
            if (!isNameValid || !isPhoneValid || !isEmailValid || !isMessageValid || !isServiceValid) {
                event.preventDefault();

                // Show error messages for the invalid fields
                if (!isNameValid) {
                    $("#errName").text("Name is required.");
                }
                if (!isPhoneValid) {
                    $("#errPhone").text("Phone number is required.");
                }
                if (!isEmailValid) {
                    $("#errEmail").text("Valid email is required.");
                }
                if (!isMessageValid) {
                    $("#errMessage").text("Message is required.");
                }
                if (!isServiceValid) {
                    $("#errService").text("Please select a service.");
                }
            }
        });
    });
</script>