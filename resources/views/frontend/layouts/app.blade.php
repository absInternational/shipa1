<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Ship A1')">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="ahrefs-site-verification" content="6cd07582328e97b072cfaad2711175d5b3d5f0d349648e8ede9c50ea23dfc68d">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ShipA1Transport">
    <meta name="twitter:title" content="ShipA1 Auto Transport Quotes | Best Vehicle Shipping Service in USA">
    <meta name="twitter:description" content="Get car shipping services in USA, scratchless vehicle transport service along with huge discount offers and FREE auto shipping quotes nationwide.">
    <meta name="twitter:image" content="https://www.shipa1.com/img/car-tranportation.png">

    <!-- Improved load performance -->
    <link rel="preload" href="{{ asset('/frontend/images/logo/favicon.webp') }}" as="image" type="image/webp">
    <link rel="apple-touch-icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}">
    <link rel="shortcut icon" href="{{ asset('/frontend/images/logo/favicon.webp') }}" type="image/x-icon">

    <!-- Preloading critical CSS and JS -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://code.jquery.com/jquery-3.6.0.min.js" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" as="style">
    
    <!-- Non-blocking external CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.2/dist/css/coreui.min.css" integrity="sha384-39e9UaGkm/+yp6spIsVfzcs3j7ac7G2cg0hzmDvtG11pT1d7YMnOC26w4wMPhzsL" crossorigin="anonymous" onload="this.onload=null;this.rel='stylesheet'">

    <!-- Local CSS with non-blocking load -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/meanmenu.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/sal.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/swiper.min.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/icons.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/odometer.min.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/nice-select.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/style.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('/public/frontend/css/responsive.css') }}" onload="this.onload=null;this.rel='stylesheet'">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- JSON-LD structured data for better SEO -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "ShipA1",
            "image": "https://shipa1.com/frontend/images/logo/LOGO%20NEW-2.png",
            "@id": "https://www.shipa1.com",
            "url": "https://www.shipa1.com/",
            "telephone": "(844) 474-4721",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "201 International Cir STE 230",
                "addressLocality": "Hunt Valley",
                "addressRegion": "MD",
                "postalCode": "21030",
                "addressCountry": "US"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 39.4960629,
                "longitude": -76.6603247
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "opens": "08:00",
                "closes": "19:00"
            },
            "sameAs": [
                "https://www.facebook.com/shipa1autotransport",
                "https://www.instagram.com/shipa1_transport",
                "https://www.youtube.com/@shipA1autotransport",
                "https://www.linkedin.com/in/shipa1-transport",
                "https://www.shipa1.com/"
            ]
        }
    </script>  
</head>    
<body class="fade-in">
    @php
    $currentRouteName = Route::currentRouteName();
    @endphp
    <div id="tj-overlay-bg2" class="tj-overlay-canvas"></div>
    <div class="tj-offcanvas-area">
        <div class="tj-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="logo-area text-center">
                <a href="{{ route('welcome') }}"><img src="{{ asset('/frontend/images/logo/LOGO NEW-2.webp') }}"
                        alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <i class="fa-light fa-xmark"></i>
                </a>
            </div>
        </div>
        <nav class="right_menu_togle mobile-navbar-menu d-lg-none" id="mobile-navbar-menu"></nav>
        <p class="des d-none d-lg-block">
            We take a bottom-line approach to each project. Our clients consistently, enhanced brand loyalty and new
            leads thanks to our work.
        </p>
    </div>
    @include('frontend.includes.header')
    @yield('content')
    @if (Route::currentRouteName() !== 'order.tracking')
    @include('frontend.includes.sidebtn-track')
    @endif
    @include('frontend.includes.footer')
    @yield('extraScript')
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
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6728df992480f5b4f5986b9c/1ibrqis6f';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('/frontend/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/meanmenu.js') }}" ></script>
    <script src="{{ asset('/frontend/js/imagesloaded.pkgd.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/isotope.pkgd.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/jquery.magnific-popup.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/swiper.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/owl.carousel.js') }}" ></script>
    <script src="{{ asset('/frontend/js/jquery.appear.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/odometer.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/sal.js') }}" ></script>
    <script src="{{ asset('/frontend/js/jquery.nice-select.min.js') }}" ></script>
    <script src="{{ asset('/frontend/js/main.js') }}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" ></script>
    {{-- <script src="/assets/intl-tel-input/intlTelInput.js"></script> --}}
    <script>
        $(document).ready(function() {
            var $emailInput = $('#email_newsletter');
            $('#newsletter-form').on('submit', function(event) {
                event.preventDefault();
                var email = $emailInput.val();
                if (!email || !isValidEmail(email)) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Invalid Email',
                        text: 'Please enter a valid email address.'
                    });
                    return;
                }
                Swal.fire({
                    icon: 'info',
                    title: 'Processing...',
                    text: 'Please wait while we process your subscription.',
                    showConfirmButton: false,
                    willOpen: () => {
                        Swal.showLoading();
                    }
                });
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
                            $emailInput.val('');
                        });
                    },
                    error: function(xhr) {
                        var response = xhr.responseJSON || { message: 'An error occurred. Please try again later.' };
                        Swal.fire({
                            icon: 'error',
                            title: 'Subscription Failed',
                            text: response.message
                        }).then(function() {
                            $emailInput.val('');
                        });
                    }
                });
            });
            function isValidEmail(email) {
                var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return regex.test(email);
            }
        });
    </script>
    <script>
        let selectedFiles = [];
        function previewImages(event) {
            var input = event.target;
            var imagePreviewContainer = document.getElementById('imagePreviewContainer');
            if (input.files) {
                Array.from(input.files).forEach(file => {
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
        // document.addEventListener("DOMContentLoaded", function () {
        //     const phoneInput = document.querySelector("#phone");
        //     const countryInput = document.querySelector('#country_code');
        //     const iti = window.intlTelInput(phoneInput, {
        //         separateDialCode: true,
        //         initialCountry: "auto",
        //         geoIpLookup: function (callback) {
        //             // Default to US for testing
        //             callback("us");
        //         },
        //         utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        //         flagsImagePath: "https://www.shipa1.com/public/frontend/images/icon/flags.webp"
        //     });
        //     let phoneMask;
        //     function updateMask() {
        //         const countryData = iti.getSelectedCountryData();
        //         const countryCode = countryData.iso2;
        //         const maskPatterns = {
        //             us: "(000) 000-0000",
        //             ca: "(000) 000-0000", // Add more patterns as needed
        //         };
        //         const maskPattern = maskPatterns[countryCode] || "";
        //         if (phoneMask) {
        //             phoneMask.destroy();
        //         }
        //         if (maskPattern) {
        //             phoneMask = IMask(phoneInput, { mask: maskPattern });
        //         }
        //         countryInput.value = countryData.dialCode;
        //     }
        //     function validatePhoneNumber() {
        //         if (!iti.isValidNumber()) {
        //             console.error("Invalid phone number");
        //             return false;
        //         }
        //         return true;
        //     }
        //     phoneInput.addEventListener('input', updateMask);
        //     phoneInput.addEventListener('countrychange', updateMask);
        //     phoneInput.addEventListener('blur', validatePhoneNumber);
        //     updateMask();
        // });
        document.addEventListener("DOMContentLoaded", function () {
            // Reusable function for initializing phone input
            function initializePhoneInput(phoneInput, countryInput, iti, phoneMask) {
                iti = window.intlTelInput(phoneInput, {
                    separateDialCode: true,
                    initialCountry: "auto",
                    geoIpLookup: function (callback) {
                        callback("us");
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                    flagsImagePath: "https://www.shipa1.com/public/frontend/images/icon/flags.webp"
                });

                function updateMask() {
                    const countryData = iti.getSelectedCountryData();
                    const countryCode = countryData.iso2;
                    const maskPatterns = {
                        us: "(000) 000-0000",
                        ca: "(000) 000-0000", // Add more patterns as needed
                    };
                    const maskPattern = maskPatterns[countryCode] || "";
                    if (phoneMask) {
                        phoneMask.destroy();
                    }
                    if (maskPattern) {
                        phoneMask = IMask(phoneInput, { mask: maskPattern });
                    }
                    countryInput.value = countryData.dialCode;
                }

                if (window.location.pathname == 'frontend.pages.marketing.vehicleTransportInNewyork') {
                    function validatePhoneNumber() {
                        if (!iti.isValidNumber()) {
                            console.error(`Invalid phone number (${phoneInput.id})`);
                            return false;
                        }
                        return true;
                    }
                }

                phoneInput.addEventListener('input', updateMask);
                phoneInput.addEventListener('countrychange', updateMask);
                phoneInput.addEventListener('blur', validatePhoneNumber);
                updateMask();
            }

            // Initialize first phone input
            const phoneInput1 = document.querySelector("#phone");
            const countryInput1 = document.querySelector('#country_code');
            let iti1, phoneMask1;
            initializePhoneInput(phoneInput1, countryInput1, iti1, phoneMask1);

            // Initialize second phone input
            const phoneInput2 = document.querySelector("#phone2");
            const countryInput2 = document.querySelector('#country_code2');
            let iti2, phoneMask2;
            initializePhoneInput(phoneInput2, countryInput2, iti2, phoneMask2);
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
            // Function to toggle visibility and required attribute
            function toggleVisibilityAndRequired(checkboxSelector, divSelector, inputSelector) {
                $(document).on('change', checkboxSelector, function() {
                    if ($(this).is(':checked')) {
                        $(divSelector).show();
                        $(inputSelector).attr('required', true);
                    } else {
                        $(divSelector).hide();
                        $(inputSelector).val('');
                        $(inputSelector).removeAttr('required');
                    }
                });
            }

            // Apply the function to #available_at_auction and #modification
            toggleVisibilityAndRequired('#available_at_auction', '.div-link', '#link');
            toggleVisibilityAndRequired('#modification', '.div-modify_info', '#c');
        });
    </script>
    <script>  
        $('#category').on('change', function() {
            $(this).closest('.input-form').find('.error-message').hide();
            if ($(this).val() === 'Others') {
                $('#otherCategoryInput').show().prop('disabled', false);
            } else {
                $('#otherCategoryInput').hide().prop('disabled', true);
            }
        });
        $(document).ready(function () {
            let debounceTimer;
            function showError(field, message) {
                $('#' + field).addClass('error-field');
                $('#' + field + '-error').text(message).show();
            }
            function hideError(field) {
                $('#' + field).removeClass('error-field');
                $('#' + field + '-error').hide();
            }
            function isValidFormat(value) {
                var regex = /^[A-Za-z\s]+,\s*[A-Za-z]{2},\s*\d{5}$/;
                return regex.test(value);
            }
            function validateStep(step) {
                var isValid = true;
                $('#' + step + ' input[required], #' + step + ' select[required], #' + step + ' textarea[required]')
                    .each(function () {
                        var field = $(this).attr('id');
                        var fieldValue = $(this).val();
                        if ($(this).hasClass('ajax-suggestion-input')) {
                            if (!$(this).data('selected') || $(this).val() === '') {
                                showError(field, 'Please select a valid option from suggestions.');
                                isValid = false;
                            } else {
                                hideError(field);
                            }
                        } else if (field === 'pickup-location' || field === 'delivery-location') {
                            if (!fieldValue) {
                                showError(field, 'This field is required.');
                                isValid = false;
                            } else if (!isValidFormat(fieldValue)) {
                                showError(field, 'Please enter the address in the format: City,State,ZipCode.');
                                isValid = false;
                            } else {
                                hideError(field);
                            }
                        } else {
                            if (!fieldValue) {
                                showError(field, 'This field is required.');
                                isValid = false;
                            } else {
                                hideError(field);
                            }
                        }
                    });
                return isValid;
            }
            function fetchSuggestions(inputField, suggestionsList) {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function () {
                    var inputValue = inputField.val();
                    if (inputValue.trim() === "") {
                        suggestionsList.hide();
                        return;
                    }
                    suggestionsList.empty().append("<li>Loading...</li>");
                    $.ajax({
                        url: "{{ route('get.zipcodes') }}",
                        method: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "input": inputValue
                        },
                        success: function (response) {
                            suggestionsList.empty();
                            inputField.data('selected', false);
                            if (response.length === 0) {
                                suggestionsList.append(
                                    $("<li>")
                                        .text("No results found")
                                        .css("color", "red")
                                );
                            } else {
                                $.each(response, function (index, suggestion) {
                                    $("<li>")
                                        .attr("role", "option")
                                        .attr("aria-selected", "false")
                                        .text(suggestion)
                                        .click(function () {
                                            inputField.val(suggestion);
                                            inputField.data('selected', true);
                                            suggestionsList.hide();
                                            hideError(inputField.attr("id"));
                                        })
                                        .appendTo(suggestionsList);
                                });
                            }
                            suggestionsList.show();
                        },
                        error: function (xhr, status, error) {
                            suggestionsList.empty();
                            console.error("Error:", error);
                        }
                    });
                }, 300);
            }
            $('#pickup-location').on('input', function () {
                var inputField = $(this);
                var suggestionsList = $('.suggestionsPickup');
                inputField.data('selected', false);
                fetchSuggestions(inputField, suggestionsList);
            });
            $('#delivery-location').on('input', function () {
                var inputField = $(this);
                var suggestionsList = $('.suggestionsDelivery');
                inputField.data('selected', false);
                fetchSuggestions(inputField, suggestionsList);
            });
            $(document).on('click', function (event) {
                if (!$(event.target).closest(".ajax-suggestion-input, .suggestionsPickup, .suggestionsDelivery").length) {
                    $(".suggestionsPickup, .suggestionsDelivery").hide();
                }
            });
            $('#step1_next').click(function () {
                if (validateStep('step1')) {
                    $('#step1').hide();
                    $('#step2').show();
                }
            });
            $('#step2_previous').click(function () {
                $('#step2').hide();
                $('#step1').show();
            });
            $('#step2_next').click(function () {
                if (validateStep('step2')) {
                    $('#step2').hide();
                    $('#step3').show();
                }
            });
            $('#step3_previous').click(function () {
                $('#step3').hide();
                $('#step2').show();
            });
        });
    </script>
    @php
        $makes = App\Models\VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
    @endphp
    <script>
        $(document).ready(function() {
            $('#example-multiple').select2();
        });
        $(document).ready(function() {
            $('#example-multiple-2').select2();
        });
    </script>
    <script> 
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
                        validSuggestions.length = 0;
                        $.each(response, function(index, suggestion) {
                            var listItem = $("<li>").text(suggestion).click(function() {
                                inputField.val(suggestion);
                                suggestionsList.css("display", "none");
                            });
                            validSuggestions.push(suggestion);
                            suggestionsList.append(listItem);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }
                $(document).on('keyup', '#pickup-location', function() {
                    var inputField = $(this);
                    var suggestionsList = inputField.siblings(".suggestionsTwo");
                    suggestionsList.css("display", "block");
                    if (inputField.val() === "") {
                        suggestionsList.css("display", "none");
                    }
                    updateSuggestions(inputField, suggestionsList, validPickupSuggestions);
                });
                $(document).on('keyup', '#delivery-location', function() {
                    var inputField = $(this);
                    var suggestionsList = inputField.siblings(".suggestionsTwo");
                    suggestionsList.css("display", "block");
                    if (inputField.val() === "") {
                        suggestionsList.css("display", "none");
                    }
                    updateSuggestions(inputField, suggestionsList, validDeliverySuggestions);
                });
                $(document).on('click', function(event) {
                    var target = $(event.target);
                    if (!target.closest('#pickup-location').length && !target.closest('#delivery-location').length && !target.closest('.suggestionsTwo').length) {
                        $('.suggestionsTwo').css("display", "none"); 
                    }
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
                console.log($(this).attr('id'), 'asdasd');
                if ($(this).attr('id') != 'marketing-form') {
                    var isPickupValid = validateLocationInput($("#pickup-location"), validPickupSuggestions, $(
                        "#errOLoc"));
                    var currentRoute = "{{ Route::currentRouteName() }}";
                    if (currentRoute !== 'form.vehicle.roro' && currentRoute !==
                        'frontend.pages.services.roro-service') {
                        var isDeliveryValid = validateLocationInput($("#delivery-location"),
                            validDeliverySuggestions, $("#errDLoc"));
                        if (!isPickupValid || !isDeliveryValid) {
                            event.preventDefault();
                        }
                    } else {
                        if (!isPickupValid) {
                            event.preventDefault();
                        }
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function setupScrollButtons(buttonClass, targetClass) {
                const buttons = document.querySelectorAll(buttonClass);
                const target = document.querySelector(targetClass);
                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    });
                });
            }
            setupScrollButtons('.scroll-up-btn', '.target-top');
            setupScrollButtons('.scroll-up-btn-1', '.target-top-1');
            setupScrollButtons('.scroll-up-btn-2', '.target-top-2');
            setupScrollButtons('.scroll-up-btn-3', '.target-top-3');
        });
    </script>
    <script>
        var selectedTab = '';
        $(document).on('change', '#tabSelector', function() {
            $('.vehicles-container').html('');
            selectedTab = $(this).val();
            var vehicleType = $(this).val();
            var currentRouteName = '{{ $currentRouteName }}';
            $('.tab-pane').removeClass('show active');
            $('#' + selectedTab).addClass('show active');
            $.ajax({
                url: "{{ route('get.partial.form') }}",
                method: 'GET',
                data: {
                    vehicleType: vehicleType,
                    currentRouteName: currentRouteName,
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
        $(document).on('click', '.addVehicleBtn', function() {
            if ($('#tabSelector').val() == 'Car') {
                console.log('yesss');
                addNewVehicle();
            } else {
                console.log('nooo');
                addOtherVehicle();
            }
        });
        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
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
            $('#feet-input, #inches-input').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
        $(document).ready(function() {
            $(document).on('input', '.inches-input1, .inches-input2', function() {
                if (this.value > 11) {
                    this.value = 11;
                } else if (this.value < 0) {
                    this.value = 0;
                }
            });
            $(document).on('input', '.feet-input1, .inches-input1, .feet-input, .inches-input2', function() {
                console.log('asdasd');
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
        function moveToNext(current, nextId) {
            if (current.value.length >= current.maxLength) {
                document.getElementById(nextId).focus();
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var forms = document.querySelectorAll('.validate-form');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    var valid = true;
                    var requiredInputs = form.querySelectorAll(
                        '[required]'); 
                    function createErrorSpan(inputElement, errorMessageClass) {
                        let errorSpan = inputElement.parentNode.querySelector('.' +
                            errorMessageClass);
                        if (!errorSpan) {
                            errorSpan = document.createElement('span');
                            errorSpan.className = errorMessageClass + ' error-message';
                            errorSpan.style.color = 'red'; 
                            inputElement.parentNode.appendChild(errorSpan);
                        }
                        return errorSpan;
                    }
                    requiredInputs.forEach(function(input) {
                        var errorMessageClass = 'err' + input.name.replace('[]',
                            ''); 
                        var errorSpan = createErrorSpan(input, errorMessageClass);
                        if (!input.value || (input.tagName === 'SELECT' && input.value ===
                                '')) {
                            errorSpan.textContent = input.tagName === 'SELECT' ?
                                'Please select an option.' : input.name + ' is required.';
                            input.style.border =
                                '2px solid red'; 
                            valid = false;
                        } else {
                            if (input.type === 'tel' && typeof iti !== 'undefined') {
                                const rawPhoneNumber = iti.getNumber();
                                if (!iti.isValidNumber()) {
                                    errorSpan.textContent =
                                        'Valid phone number is required.';
                                    input.style.border =
                                        '2px solid red'; 
                                    valid = false;
                                } else {
                                    errorSpan.textContent = ''; 
                                    input.style.border = ''; 
                                }
                            } else if (input.type === 'email' && !/\S+@\S+\.\S+/.test(input
                                    .value)) {
                                errorSpan.textContent = 'Valid email is required.';
                                input.style.border =
                                    '2px solid red'; 
                                valid = false;
                            } else {
                                errorSpan.textContent = ''; 
                                input.style.border = ''; 
                            }
                        }
                    })
                    if (!valid) {
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loadLazyBackgrounds = () => {
                document.querySelectorAll(".lazy-background").forEach(lazyBg => {
                    const imageSrc = lazyBg.dataset.bgImage;
                    if (imageSrc) {
                        const img = new Image();
                        img.src = imageSrc;
                        img.onload = () => lazyBg.style.backgroundImage = `url(${imageSrc})`;
                    }
                });
            };
            loadLazyBackgrounds();
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const swiperSelector = '.swiper-new-1';
            const swiperContainer = document.querySelector(swiperSelector);
            if (swiperContainer) {
                const swiper = new Swiper(swiperSelector, {
                    slidesPerView: 1,
                    loop: true,
                    spaceBetween: 10,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    speed: 800,
                    effect: 'fade',
                    fadeEffect: { crossFade: true },
                    breakpoints: {
                        0: { slidesPerView: 1 },
                        600: { slidesPerView: 1 },
                        1000: { slidesPerView: 1 },
                    }
                });
                swiperContainer.style.cssText = 'opacity: 1; visibility: visible;';
            }
        });
    </script>
</body>
</html>