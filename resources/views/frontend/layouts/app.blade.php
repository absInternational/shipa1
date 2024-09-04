<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    {{-- <title>ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA</title> --}}
    <title>@yield('title')</title>
    {{-- <meta name="description" content="" /> --}}
    <meta name="description" content="@yield('meta_description', 'Ship A1')">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/logo/favicon.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo/favicon.png') }}" />

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />


    <!-- Include jQuery -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/css/coreui.min.css" rel="stylesheet"
        integrity="sha384-39e9UaGkm/+yp6spIsVfzcs3j7ac7G2cg0hzmDvtG11pT1d7YMnOC26w4wMPhzsL" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/ctas/cta-1/assets/css/cta-1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">

    <!-- Bootstrap  v5.1.3 css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <!-- Meanmenu  css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}" />
    <!-- Sal css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/sal.css') }}" />
    <!-- Magnific css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <!-- Swiper Slider css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" />
    <!-- Carousel css file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <!-- Icons css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/icons.css') }}" />
    <!-- Odometer css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/odometer.min.css') }}" />
    <!-- Select css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" />
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />

    {{-- csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
    /* Error styling */
    .error {
        border: 2px solid red;
    }
    .err-loc {
        color: #ff0000 !important; 
        font-size: 14px;
        font-weight: bold;
        margin-top: 5px;
        display: block;
    }
</style>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6675d43ceaf3bd8d4d1320dc/1i0u4a3i2';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->
<!--End of Tawk.to Script-->

<body>
    <!-- Preloader start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
                <div class="loader-icon">
                    <img src="{{ asset('frontend/images/logo/favicon.png') }}"
                        alt="Corporate Business HTML Template" />
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading"> S </span>
                <span data-text-preloader="H" class="letters-loading"> H </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="P" class="letters-loading"> P </span>
                <span data-text-preloader="" class="letters-loading"> </span>
                <span data-text-preloader="A" class="letters-loading"> A </span>
                <span data-text-preloader="1" class="letters-loading"> 1 </span>
                <span data-text-preloader="" class="letters-loading"> </span>
            </div>
        </div>
        <button class="tj-primary-btn">Cancel Preloader</button>
    </div> -->
    <!-- Preloader end -->

    <!-- Offcanvas Area Start-->
    <div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/images/logo/LOGO NEW-2.png') }}"
                        alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        <div class="tj-search-box">
            <form action="#">
                <input type="text" class="form-control-1" name="search" id="searchTwo" placeholder="Search" />
                <a href="#"> <i class="fal fa-search"></i></a>
            </form>
        </div>
        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
        <p class="des d-none d-lg-block">
            We take a bottom-line approach to each project. Our clients consistently, enhanced brand loyalty and new
            leads thanks to our work.
        </p>
        <!-- Canvas Menu end -->
        <!-- <div class="contact-info-list">
            <h4 class="offcanvas-title">Contact info</h4>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="fa-light fa-location-dot"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block">Location:</span>
                    <p><a href="https://www.google.com/maps/place/201+International+Cir+STE+230,+Hunt+Valley,+MD+210301344,+USA/@39.4960629,-76.6603247,17z/data=!3m2!4b1!5s0x89c8128abe53a693:0xccf0052e1abf77f2!4m6!3m5!1s0x89c81261c3eae243:0x81e995e93023e64a!8m2!3d39.4960629!4d-76.6603247!16s%2Fg%2F11scxbqcdd?entry=ttu"
                            target="_blank">201 International Cir STE 230,<br>Hunt Valley, MD 21030-1344</a></p>
                </div>
            </div>
            <div class="contact-box contact-box1">
                <div class="contact-icon">
                    <i class="flaticon-email-2"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block">Email us:</span>
                    <a href="mailto:info@shipa1.com">shawntransport@shipa1.com</a>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-icon">
                    <i class="flaticon-telephone"></i>
                </div>
                <div class="contact-link">
                    <span class="d-block"> Call us:</span>
                    <a href="tel: 1 (844) 474-4721">1 (844) 474-4721</a>
                </div>
            </div>
        </div>
        <div class="tj-offcanvas-icon-list">
            <h4 class="offcanvas-title">Social Item</h4>
            <ul>
                <li>
                    <a href="https://www.facebook.com/ShipA1/" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/shipa1_transport/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@shipA1392" target="_blank"><i
                            class="fa-brands fa-youtube"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/shipa1-transport/" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </li>
            </ul>
        </div>
        <div class="contact-map d-none d-lg-block">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s"
                style="border: 0" allowfullscreen=""></iframe>
        </div>
        <div class="tj-theme-button tj-btn d-lg-none">
            <a class="tj-primary-btn" href="#">Track Order<i class="flaticon-right-1"></i> </a>
        </div> -->
    </div>
    <!-- Offcanvas Area End-->

    {{-- Header Section Start --}}
    @include('frontend.includes.header')

    {{-- page content --}}
    @yield('content')

    {{-- Footer Section Start --}}
    @include('frontend.includes.footer')

    {{-- page content --}}
    @yield('extraScript')

    <!-- start scrollUp  -->
    <div class="logiland-scroll-top progress-done">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    ">
            </path>
        </svg>
        <div class="logiland-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- End scrollUp  -->

    <!-- INDEX-HOME  -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="path/to/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Modernizr.JS -->
    <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jQuery.min JS -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap.min JS -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('frontend/js/meanmenu.js') }}"></script>
    <!-- Imagesloaded JS -->
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific JS -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper.min JS -->
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <!-- Owl.min JS -->
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
    <!-- Odometer JS -->
    <script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
    <!-- Sal JS -->
    <script src="{{ asset('frontend/js/sal.js') }}"></script>
    <!-- Nice JS -->
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="/assets/intl-tel-input/intlTelInput.js"></script>
    {{-- app js  --}}
<script>
    $(document).ready(function() {
        $('#newsletter-form').submit(function(event) {
            event.preventDefault();
            var email = $('#email_newsletter').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('newsletter.subscribe') }}',
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Subscription Successful',
                        text: response.message
                    }).then(function() {
                        $('#email_newsletter').val('');
                    });
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    Swal.fire({
                        icon: 'error',
                        title: 'Subscription Failed',
                        text: response.message
                    }).then(function() {
                        $('#email_newsletter').val('');
                    });
                }
            });
        });
    });
    // function previewImage(event) {
    //     var input = event.target;
    //     var imagePreview = document.getElementById('imagePreview');

    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();

    //         reader.onload = function(e) {
    //             imagePreview.src = e.target.result;
    //             imagePreview.style.display = 'block';
    //         }

    //         reader.readAsDataURL(input.files[0]);
    //     } else {
    //         imagePreview.src = '#';
    //         imagePreview.style.display = 'none';
    //     }
    // }
</script>
<script>
    let selectedFiles = []; // Store selected files

    function previewImages(event) {
        var input = event.target;
        var imagePreviewContainer = document.getElementById('imagePreviewContainer');

        if (input.files) {
            Array.from(input.files).forEach(file => {
                // Check if the file is already in selectedFiles to avoid duplicates
                if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                    selectedFiles.push(file);
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var previewElement = document.createElement('div');
                        previewElement.classList.add('image-preview');
                        previewElement.innerHTML = `
                    <img src="${e.target.result}" alt="Image Preview">
                    <button class="remove-button" onclick="removeImage('${file.name}', ${file.size})">Remove</button>
                `;
                        imagePreviewContainer.appendChild(previewElement);
                    }

                    reader.readAsDataURL(file);
                }
            });
        }
    }
    function removeImage(name, size) {
        var imagePreviewContainer = document.getElementById('imagePreviewContainer');
        selectedFiles = selectedFiles.filter(file => !(file.name === name && file.size === size));

        // Clear container and re-render previews
        imagePreviewContainer.innerHTML = '';
        selectedFiles.forEach(file => {
            var reader = new FileReader();

            reader.onload = function(e) {
                var previewElement = document.createElement('div');
                previewElement.classList.add('image-preview');
                previewElement.innerHTML = `
            <img src="${e.target.result}" alt="Image Preview">
            <button class="remove-button" onclick="removeImage('${file.name}', ${file.size})">Remove</button>
        `;
                imagePreviewContainer.appendChild(previewElement);
            }

            reader.readAsDataURL(file);
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('input[type="number"]').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>
<script>
    // $(document).ready(function() {
    //     var input = document.querySelector("#phone");
    //     window.intlTelInput(input, {
    //         initialCountry: "us", // Default country code set to "us"
    //         utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    //     });
    // });
</script>
<script>
    // Initialize intl-tel-input
    const phoneInput = document.querySelector("#phone");
        const iti = window.intlTelInput(phoneInput, {
            separateDialCode: true,
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                // Directly using the default country code
                var countryCode = "us";
                callback(countryCode);
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        // Function to apply or remove mask
        function updateMask() {
            const countryData = iti.getSelectedCountryData();
            const countryCode = countryData.iso2;

            if (countryCode === 'us') {
                // Apply mask if the country code is US
                $(".ophone").mask("(999) 999-9999");
            } else {
                // Remove mask for other country codes
                $(".ophone").unmask();
            }

            // Update hidden field with country dial code
            document.querySelector('#country_code').value = countryData.dialCode;
        }

        // Event listener for input change
        phoneInput.addEventListener('input', updateMask);

        // Initial mask update based on the default country code
        updateMask();
    </script>
<script>
</script>
<script>
    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var year = $('.vehicle-year').val();
            var makeId = $('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId);
            }
        });
        function getModel(year, makeId) {
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelsDropdown = $('.vehicle-model-div');
                    modelsDropdown.empty();
                    var selectOptions =
                        '<label>Model</label><select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                    $.each(response, function(index, model) {
                        selectOptions += '<option value="' + model + '">' + model + '</option>';
                    });
                    selectOptions += '</select>';
                    modelsDropdown.html(selectOptions);
    
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>
<script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {
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
</script>
<script>
    $(document).ready(function() {  
        $(document).on('change', '#available_at_auction', function() {
            // console.log('abcd')
             if ($(this).is(':checked')) {
                 $('.div-link').show();
                 $('#link').attr('required', true); // Make input required
             } else {
                 $('.div-link').hide();
                 $('#link').val(''); // Clear the input field
                 $('#link').removeAttr('required'); // Remove required attribute
             }
         });
         
        $(document).on('change', '#modification', function() {
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
</script>
<script>
        $(document).ready(function() {
        // Function to show error messages
        function showError(field, message) {
            $('#' + field).addClass('error-field');
            $('#' + field + '-error').text(message).show();
        }

        // Function to hide error messages
        function hideError(field) {
            $('#' + field).removeClass('error-field');
            $('#' + field + '-error').hide();
        }

        // Function to validate fields in a given step
        function validateStep(step) {
            var isValid = true;

            // Iterate over each required field in the specified step
            $('#' + step + ' input[required], #' + step + ' select[required], #' + step + ' textarea[required]').each(function() {
                var field = $(this).attr('id');
                if (!$(this).val()) {
                    showError(field, 'This field is required.');
                    isValid = false;
                } else {
                    hideError(field);
                }
            });

            return isValid;
        }

        // Move to Step 2
        $('#step1_next').click(function() {
            if (validateStep('step1')) {
                $('#step1').hide();
                $('#step2').show();
            }
        });

        // Return to Step 1
        $('#step2_previous').click(function() {
            $('#step2').hide();
            $('#step1').show();
        });

        // Move to Step 3
        $('#step2_next').click(function() {
            if (validateStep('step2')) {
                $('#step2').hide();
                $('#step3').show();
            }
        });

        // Return to Step 2
        $('#step3_previous').click(function() {
            $('#step3').hide();
            $('#step2').show();
        });

        // function limitDigits(element, maxDigits) {
        //     if (element.value.length > maxDigits) {
        //         element.value = element.value.slice(0, maxDigits);
        //     }
        // }
    });
</script>
<script>
    // $(document).ready(function() {
    //     $('#other_year').attr('disabled', true);
    //     $('#other_make').attr('disabled', true);
    //     $('#other_model').attr('disabled', true);

    //     function handleOtherSelection(selectId, inputId) {
    //         $(selectId).on('change', function() {
    //             if ($(this).val() === 'other') {
    //                 $(this).addClass('d-none');
    //                 $(inputId).removeClass('d-none')
    //                         .attr('required', 'required')
    //                         .removeAttr('disabled');
    //             } else {
    //                 $(inputId).addClass('d-none')
    //                         .removeAttr('required')
    //                         .attr('disabled', true);
    //                 $(this).removeClass('d-none');
    //             }
    //         });
    //     }

    //     handleOtherSelection('#year', '#other_year');
    //     handleOtherSelection('#make', '#other_make');
    //     handleOtherSelection('#model', '#other_model');
    // });
</script>
{{-- app js  --}}
@php
    $makes = App\Models\VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
@endphp
{{-- index js  --}}
<script>
    $(document).ready(function() {
        var selectedTab = '';
        $('#tabSelector').change(function() {
            $('.vehicles-container').html('');
            selectedTab = $(this).val();
            var vehicleType = $(this).val();
            $('.tab-pane').removeClass('show active');
            $('#' + selectedTab).addClass('show active');

            $.ajax({
                url: "{{ route('get.partial.form') }}",
                method: 'GET',
                data: {
                    vehicleType: vehicleType,
                },
                success: function(response) {
                    $('#additionalContent').html('');
                    $('#additionalContent').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });

        function addNewVehicle() {
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
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

            newVehicleHtml +=
                `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

            newVehicleHtml += `
                        </div>
                        </div>
                        </div>
                        </div>
                        `;

            $('.vehicles-container').append(newVehicleHtml);
        }

        function addOtherVehicle() {
            var newVehicleHtml =
                `
                    <div class="vehicle-info">
                    <div class="row select-bm">
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
            newVehicleHtml +=
                `<span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 10px; color: red; cursor: pointer;"></i></span>`;

            newVehicleHtml += `</div>
                            </div>
                            </div>
                            </div>
                            `;

            $('.vehicles-container').append(newVehicleHtml);
        }

        $(document).on('click', '.addVehicleBtn', function() {
            if ($('#tabSelector').val() == 'Car') {
                // console.log('yesss');
                addNewVehicle();
            } else {
                // console.log('nooo');
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
            // console.log('yes inn');
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
                        selectOptions += '<option value="' + model + '">' +
                            model +
                            '</option>';
                    });
                    modelsDropdown.html(selectOptions);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>
{{-- <script>
    $(document).ready(function() {
        $(document).on('change', '#available_at_auction', function() {
            if ($(this).is(':checked')) {
                $('.div-link').show();
            } else {
                $('.div-link').hide();
            }
        });

        $(document).on('change', '#modification', function() {
            if ($(this).is(':checked')) {
                $('.div-modify_info').show();
            } else {
                $('.div-modify_info').hide();
            }
        });
    });
</script> --}}
<script>
    $(document).ready(function() {
        $('#owl-caro').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#example-multiple').select2();
    });
    $(document).ready(function() {
        $('#example-multiple-2').select2();
    });
</script>
<script>
    function limitDigits(element, maxDigits) {
        if (element.value.length > maxDigits) {
            element.value = element.value.slice(0, maxDigits);
        }
    }

    $(document).ready(function() {
        $('#inches-input').on('input', function() {
            if (this.value > 11) {
                this.value = 11;
            } else if (this.value < 0) {
                this.value = 0;
            }
        });

        // Optionally, you can also prevent the user from typing non-numeric characters.
        $('#feet-input, #inches-input').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    $(document).ready(function() {
        $('#inches-input1').on('input', function() {
            if (this.value > 11) {
                this.value = 11;
            } else if (this.value < 0) {
                this.value = 0;
            }
        });

        // Optionally, you can also prevent the user from typing non-numeric characters.
        $('#feet-input1, #inches-input1').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    $(document).ready(function() {
        $('#inches-input2').on('input', function() {
            if (this.value > 11) {
                this.value = 11;
            } else if (this.value < 0) {
                this.value = 0;
            }
        });

        // Optionally, you can also prevent the user from typing non-numeric characters.
        $('#feet-input, #inches-input2').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>
<script>
    // function updateSuggestions(inputField, suggestionsList) {
    //     var inputValue = inputField.val();

    //     $.ajax({
    //         url: "{{ route('get.zipcodes') }}",
    //         method: "POST",
    //         data: {
    //             "_token": "{{ csrf_token() }}",
    //             "input": inputValue
    //         },
    //         success: function(response) {
    //             suggestionsList.empty();

    //             $.each(response, function(index, suggestion) {
    //                 var listItem = $("<li>").text(suggestion).click(function() {
    //                     inputField.val(suggestion);
    //                     suggestionsList.css("display", "none");
    //                 });
    //                 suggestionsList.append(listItem);
    //             });
    //         },
    //         error: function(xhr, status, error) {
    //             console.error("Error:", error);
    //         }
    //     });
    // }

    // $("#pickup-location, #delivery-location").keyup(function() {
    //     var inputField = $(this);
    //     var suggestionsList = inputField.siblings(".suggestionsTwo");
    //     suggestionsList.css("display", "block");
    //     if (inputField.val() === "") {
    //         suggestionsList.css("display", "none");
    //     }
    //     updateSuggestions(inputField, suggestionsList);
    // });

    // NEW CODE 
    $(document).ready(function() {
    var validPickupSuggestions = [];
    var validDeliverySuggestions = [];

    function updateSuggestions(inputField, suggestionsList, validSuggestions) {
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
                validSuggestions.length = 0;  // Clear previous suggestions

                $.each(response, function(index, suggestion) {
                    var listItem = $("<li>").text(suggestion).click(function() {
                        inputField.val(suggestion);
                        suggestionsList.css("display", "none");
                    });
                    validSuggestions.push(suggestion);  // Add to valid suggestions
                    suggestionsList.append(listItem);
                });
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    }

    // $("#pickup-location").keyup(function() {
    $(document).on('keyup', '#pickup-location', function() {
        var inputField = $(this);
        var suggestionsList = inputField.siblings(".suggestionsTwo");
        suggestionsList.css("display", "block");
        if (inputField.val() === "") {
            suggestionsList.css("display", "none");
        }
        updateSuggestions(inputField, suggestionsList, validPickupSuggestions);
    });

    // $("#delivery-location").keyup(function() {
    $(document).on('keyup', '#delivery-location', function() {
        var inputField = $(this);
        var suggestionsList = inputField.siblings(".suggestionsTwo");
        suggestionsList.css("display", "block");
        if (inputField.val() === "") {
            suggestionsList.css("display", "none");
        }
        updateSuggestions(inputField, suggestionsList, validDeliverySuggestions);
    });

    function validateLocationInput(inputField, validSuggestions, errorField) {
        var inputValue = inputField.val();
        if (!validSuggestions.includes(inputValue)) {
            errorField.text("Please select a valid location.");
            return false;
        } else {
            errorField.text("");
            return true;
        }
    }

    $("form").submit(function(event) {
        var isPickupValid = validateLocationInput($("#pickup-location"), validPickupSuggestions, $("#errOLoc"));
        var isDeliveryValid = validateLocationInput($("#delivery-location"), validDeliverySuggestions, $("#errDLoc"));

        if (!isPickupValid || !isDeliveryValid) {
            event.preventDefault();  // Prevent form submission if validation fails
        }
    });
    });

</script>
<script>
    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var year = $('.vehicle-year').val();
            var makeId = $('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId);
            }
        });

        function getModel(year, makeId) {
            // console.log('yes inn');
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelsDropdown = $('.vehicle-model-div');
                    modelsDropdown.empty();
                    var selectOptions =
                        '<label>Model</label> <select class="nice-select model" name="model[]" id="model" required> <option value="">Select Model</option>';
                    $.each(response, function(index, model) {
                        selectOptions += '<option value="' + model + '">' + model +
                            '</option>';
                    });
                    selectOptions += '</select>';
                    modelsDropdown.html(selectOptions);

                    // console.log('yesssss', response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
    });
</script>
{{-- index js END  --}}

<script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
            // Year validation
            if ($('#year').val() === null) {
                e.preventDefault(); // Prevent form submission
                $('#year').closest('.input-form').find('.error-message').show(); // Show the error message
                $('#year').focus(); // Focus the select element
            } else {
                $('#year').closest('.input-form').find('.error-message').hide(); // Hide the error message
            }

            // Category validation
            if ($('#category').val() === null) {
                e.preventDefault(); // Prevent form submission
                $('#category').closest('.input-form').find('.error-message').show(); // Show the error message
                $('#category').focus(); // Focus the select element
            } else {
                $('#category').closest('.input-form').find('.error-message').hide(); // Hide the error message
            }
        });

        // Hide error on change
        $('#year').on('change', function () {
            $(this).closest('.input-form').find('.error-message').hide(); // Hide the error message on change
        });

        $('#category').on('change', function () {
            $(this).closest('.input-form').find('.error-message').hide(); // Hide the error message on change

            // Show input field if "Others" is selected
            if ($(this).val() === 'Others') {
                $('#otherCategoryInput').show().prop('disabled', false);
            } else {
                $('#otherCategoryInput').hide().prop('disabled', true);
            }
        });
    });
</script>
<script>
    // Select all buttons with the class 'scroll-up-btn'
    const scrollButtons = document.querySelectorAll('.scroll-up-btn');

    scrollButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Scroll to the top of the page
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // For smooth scrolling
            });
        });
    });
</script>
</body>

</html>
