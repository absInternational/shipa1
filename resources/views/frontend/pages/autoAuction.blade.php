@extends('frontend.layouts.app')
@section('title', 'Ship Car From Auction Auto Transport Services | ShipA1')
@section('meta_description', 'Transport your car from directly auction auto transport, Shipa1 provides door to door auto transport services with scratchless and insured auto shipping.')
@section('content')
<style>
    .top-left-image {
    position: absolute;
    top: -25px;
    left: -25px;
    width: 100px;
    height: 100px; 
    }
    .why-choose-us-slider {
    padding: 60px 0;
    background-color: #f9f9f9;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .section-description {
        text-align: center;
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 30px;
    }

    .slider {
        position: relative;
        overflow: hidden;
    }

    .slider-wrapper {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        min-width: 33.333%;
        box-sizing: border-box;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        border: 1px solid #ddd;
        text-align: center;
    }

    .slide-icon {
        margin-bottom: 20px;
    }

    .slide-icon img {
        width: 60px;
        height: 60px;
    }

    .slide-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .slide-text {
        font-size: 1rem;
        color: #666;
    }

    .slider-button {
        position: absolute;
        top: 50%;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        cursor: pointer;
        transform: translateY(-50%);
        z-index: 1000;
    }

    .prev-button {
        left: 10px;
    }

    .next-button {
        right: 10px;
    }

    @media (max-width: 768px) {
        .slide-icon img {
            width: 50px;
            height: 50px;
        }
    }

    @media (max-width: 576px) {
        .slide-icon img {
            width: 40px;
            height: 40px;
        }
    }

</style>
<!--========== breadcrumb Start ==============-->
{{-- <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Auctions Car Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Auctions Car</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="tj-choose-us-section-service-Auto-Transport">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">Specialized Service</span>
                        <h2 class="title">Auctions Auto Transport</h2>
                        <p class="desc-2 text-white">
                            We deliver quality, with prosperity. Because your Shipping needs, our solution.

                        </p>
                    </div>

                </div>
            </div>
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
            <div class="col-lg-6 mt-0" data-sal="slide-down" data-sal-duration="800">
            @include('partials.multi-form')
                
            </div>

        </div>
    </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-blog-standard pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Seamless Boat Transport</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">What are Auto Auctions?</h3>
                        <p class="desc">Ever heard of thrifting? Auctions are similar to that, basically at auctions all types of dealers and customers come to either purchase or sell out their vehicles in exceptional deals and rare models. Consider it a dynamic way of doing business, the best part is this dealing can be done both virtually and physically. Auto Auctions can handle a massive amount of all sorts of vehicles like motorcycles, cars,  golf carts, ATV, UTV pickup trucks, and so on.</p>
                        <br>
                        <p>If you’re confused about which Auto Auction to choose, below is a breakdown of the best auto auctions that cater to the needs of its customers:</p>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                <div class="image-box">
                    <img class="rounded" src="{{ asset('frontend/images/project/auto-auction.webp') }}" alt="Image">
                </div>
                <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                </div>
            </div>
        </div>
            {{-- <div class="row">
            <div class="col-lg-12">
                <br>
                <div class="text-container text-left">
                    
                    <p>On any regular and standard auction day, it isn’t unfamiliar or bizarre for hundreds and thousands of vehicles to get sold or purchased. Multiple good ratings and high-profile auctions monitor the purchasing and selling of 1000 vehicles in a single day, depending on the pace and high volume of transactions. For a company to run this well there should be a strong team and a reliable and efficient system. This is when Ship A1 comes into the picture, we work nationwide, providing transportation solutions that ensure every vehicle reaches its destination safe and sound.</p>
                    <br>
                    <p>When it comes to heavy equipment auctions, the scale and complexity of transportation are even more pronounced. Here are the key players in the heavy equipment auction space:</p>
                    <br>
                    <h5>RICHTEBROS:</h5>
                    <p>Dealing especially in heavy equipment and specializing in the efficient delivery of RICHTEBROS auctions requires precision and reliability to handle large machinery and equipment efficiently.</p>
                    <br>
                    <h5>Iron Planet:</h5>
                    <p>Specifically known for its online presence of heavy equipment auctions, Iron Planet specializes in and facilitates the selling of machinery. The transporting logistics of heavy equipment demand effective and efficient services to ensure the safe and timely shipping.</p>
                    <br>
                    <h5>Machinery Trader:</h5>
                    <p>This auction majorly focuses on the auction of heavy equipment and machinery, involving large and cumbersome items, as well as necessitating dependable transportation solutions to manage logistics.</p>
                    <br>
                    <h5>Proxi-bid:</h5>
                    <p>Offering a massive platform for the auction of multiple heavy equipment types and a wide range of machinery equipment. This auction provides a user-friendly interface for both buyers and sellers.</p>
                    <br>
                    <h3>Why Choose ShipA1?</h3>
                    <p>For both auto and heavy equipment auctions, ShipA1 is a reliable choice for transportation nationwide. With expertise in handling high volumes of vehicles and equipment, ShipA1 ensures that all items are transported securely and efficiently, meeting the needs of both buyers and sellers. Their comprehensive network and commitment to quality service make ShipA1 a trusted partner for smooth auction transportation.</p>
                    <br>
                    <a href="{{ route('quote.form.combine') }}"><img src="https://www.shipa1.com/img/banner-1-1600-x200-landing.webp" width="100%" loading="lazy" alt="Auction Car Transport"></a>
                    <br>
                    <br>
                    <p>Many customers tend to score great deals on auto auctions, but moving the automobiles to the consumers can be a challenge. In many cases, vehicles need to be removed from the auction premises right away. If clients wish to deliver their car to their home in another state, you can contact Ship-A1 for auction-to-consumer car shipping.</p>
                    <br>
                    <p>If you are selling or purchasing a vehicle through an auction, you must contemplate how the automobile will arrive at its destination. There are two main options available: either you drive the car or hire an auto mover. Choosing to ship your vehicle is the safest option because there are several advantages to hiring a professional company to transport a vehicle to or from the auction house. Below are some benefits:</p>
                    
                    <div class="list-wrapper">
                        <h4 class="list-title">Benefits</h4>
                        <div class="list-style">
                            <div class="list-content">
                                <h6>Safer Form of Transport</h6>
                                <p>We at Ship-A1 ensure that your automobile arrives in perfect condition, and so do other shipping companies. Driving your vehicle across the states will result in mileage accumulation, which can decrease your vehicle's market value. With auto transport, you can rest assured that the vehicle will arrive in the condition you bought it in.</p>
                            </div>
                            <div class="list-content">
                                <h6>Customize Delivery</h6>
                                <p>At Ship-A1, we provide a wide array of services, and you can choose the type of services that best fit your car requirements. We can also ship your inoperable vehicle and pick your vehicle directly from auction to your doorstep, saving you from spending hours stuck behind the wheel.</p>
                            </div>
                            <div class="list-content">
                                <h6>Attractive Rates and Discounts</h6>
                                <p>Many transport companies provide special discounts depending on the seasons. This feature is an advantage because it can save you a lot of money and time.</p>
                            </div>
                            <div class="list-content">
                                <h6>Save Money</h6>
                                <p>Shipping your vehicle is often your least expensive choice once you calculate all the costs. An auto carrier moves several cars at once, not just your vehicle. By delivering your automobiles, you do not need to pay for any accommodation, food, or gas. By shipping your car, you do not have to take time off from work.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="list-wrapper">
                        <h4 class="list-title">Auction Car Shipping Services</h4>
                        <p>Due to many variables during the auto transport process, it is recommended to plan in advance. The type of automobile you are shipping will decide which method of shipment is optimal for you. Here are some of the shipping services we provide:</p>
                        <div class="list-style list-2ndstyle">
                            <div class="list-content">
                                <h5 class="font-weight-bold">Open Carrier</h5>
                                <p>Under open carrier transport, cars are shipped in an open trailer with automobiles being exposed to the atmosphere. But do not let these facts distract you from the affordability and cheap services provided by an open carrier. They are the most popular mode of transportation, mostly because the vehicles are shipped on a two-level trailer with 7 to 10 automobiles shipped at one time. This makes them cheaper and provides faster services due to their efficiency.</p>
                            </div>
                            <div class="list-content">
                                <h5 class="font-weight-bold">Enclosed Carriers</h5>
                                <p>Enclosed carriers are covered to protect the vehicle from dust, road debris, rain, and snow. This service is optimal for antique automobiles, which require special care and experienced crew. This is a premium service that comes with added features like extra vehicle insurance, constant surveillance, and updates. This service will cost you more, but it offers more protection to the car.</p>
                            </div>
                            <div class="list-content">
                                <h5 class="font-weight-bold">Door to Door Transport</h5>
                                <p>Under door-to-door transport, our team will pick up the automobile at a pre-arranged location and drop it at the final destination. This service is practical for many clients who have busy schedules or cannot pick up or drop off the vehicle themselves. While this option is more convenient, it does cost more. The location of the destination and pickup can also affect the price and time taken for delivery.</p>
                            </div>
                            <div class="list-content">
                                <h5 class="font-weight-bold">Expedited Transport</h5>
                                <p>Expedited transport is a premium service that prioritizes the automobile to be delivered in less time than standard shipping. Although this service is quick and effective, it will cost you more than other options due to its priority status. For immediate delivery and availability, expedited transport is highly recommended.</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            </div> --}}
    </div>
</section>
<section class="tj-choose-us-section-two-1 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-us-top-content-1">
                    <div class="tj-section-heading-1">
                        <!-- <span class="sub-title-1 active-shape2"> Have any ideas in your mind?</span> -->
                        <h2 class="title-1">Auto Auctions</h2>
                    </div>
                    {{-- <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.dryvan') }}">
                            Get Quote <i class="flaticon-right-1"></i>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Copart:</h6>
                        </div>
                    </div>
                    <p>
                        Being one of the leading providers and suppliers of online auto auctions, Copart specializes in selling a wide range of vehicles daily, including salvage vehicles, clean title cars, and various other vehicle models and types. With its extensive inventory and innovative bidding platform, Copart is here to make itself renowned worldwide.
                    </p>
                </div>
            </div>
           
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Manheim:</h6>
                        </div>
                    </div>
                    <p>
                        A global leading auto auction that only offers a variety of vehicles and services but also allows customers
                        to bid however they want, whether it's online or a physical auction, it's your choice. Manheim provides a 
                        vast platform full of comprehensive solutions just for your comfort, from cars to motorcycles and plenty
                         of other vehicles Manheim provides the best vehicles.</p>
                </div>
            </div>
           
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">IAA:</h6>
                        </div>
                    </div>
                    <p>
                        Insurance Auto Auction short for IAA is also another premium platform for the purchasing and selling of
                         vehicles that are a total loss, salvage as well as clean title vehicles. With 100% transparency maintained,
                          they ensure their customers are aware of every vehicle’s situation, model, as well as price.</p>
                </div>
            </div>
           
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">ACV Auction:</h6>
                        </div>
                    </div>
                    <p>
                        Unlike the rest auctions, ACV only specializes in digital auto auctions, facilitating the purchasing and 
                        selling of vehicles through its online platform. Manheim’s system efficiency demands robust transportation 
                        to handle the quick bidding of vehicles.</p>
                </div>
            </div>
           
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">ADESA:</h6>
                        </div>
                    </div>
                    <p>
                        This auto auction offers its services both digitally and physically, allowing users to bid nationwide 
                        according to their convenience only. ADESA also has a vast network of vehicles of all kinds while ensuring 
                        its services meet the standards and comfort of customers.</p>
                </div>
            </div>
           
        </div>
    </div>
</section>
<section class="why-choose-us-slider">
    <div class="container">
        <h2 class="section-title">Why Choose Us?</h2>
        <p class="section-description">Discover the benefits of choosing ShipA1 through our interactive slider.</p>
        <div class="slider">
            <div class="slider-wrapper">
                <div class="slide">
                    <div class="slide-icon">
                        <img src="path/to/your/icon1.png" alt="Global Reach">
                    </div>
                    <div class="slide-content">
                        <h3 class="slide-title">Global Reach</h3>
                        <p class="slide-text">We offer shipping services to numerous international destinations, ensuring your vehicle reaches its destination safely and efficiently.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-icon">
                        <img src="path/to/your/icon2.png" alt="Reliable Service">
                    </div>
                    <div class="slide-content">
                        <h3 class="slide-title">Reliable Service</h3>
                        <p class="slide-text">Our team ensures your shipment is handled with the utmost care, providing reliable and punctual services.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-icon">
                        <img src="path/to/your/icon3.png" alt="Customer Support">
                    </div>
                    <div class="slide-content">
                        <h3 class="slide-title">Customer Support</h3>
                        <p class="slide-text">Exceptional customer support is our priority, guiding you through the shipping process with ease.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-icon">
                        <img src="path/to/your/icon4.png" alt="Secure Shipping">
                    </div>
                    <div class="slide-content">
                        <h3 class="slide-title">Secure Shipping</h3>
                        <p class="slide-text">We prioritize the safety of your vehicle with secure shipping practices and tracking throughout the journey.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-icon">
                        <img src="path/to/your/icon5.png" alt="Affordable Rates">
                    </div>
                    <div class="slide-content">
                        <h3 class="slide-title">Affordable Rates</h3>
                        <p class="slide-text">Enjoy competitive rates and transparent pricing with no hidden fees for all your shipping needs.</p>
                    </div>
                </div>
            </div>
            <button class="slider-button prev-button">&lt;</button>
            <button class="slider-button next-button">&gt;</button>
        </div>
    </div>
</section>


@endsection
@section('extraScript')
<script>
   document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slider-wrapper');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    let index = 0;
    const totalSlides = document.querySelectorAll('.slide').length;
    const slidesToShow = 3; // Number of slides to show at once

    function updateSlider() {
        const offset = -index * (100 / slidesToShow);
        slides.style.transform = `translateX(${offset}%)`;
    }

    nextButton.addEventListener('click', function() {
        index = (index + 1) % (totalSlides - slidesToShow + 1);
        updateSlider();
    });

    prevButton.addEventListener('click', function() {
        index = (index - 1 + (totalSlides - slidesToShow + 1)) % (totalSlides - slidesToShow + 1);
        updateSlider();
    });

    // Optional: Auto-slide functionality
    setInterval(function() {
        nextButton.click();
    }, 2000); // Change slide every 5 seconds
});

</script>
<script>
    $(document).ready(function() {
        function addNewVehicle() {
            var newVehicleHtml =
                `
                <div class="vehicle-info">
                <div class="row select-bm">
                    <!-- Bin icon for deleting vehicle -->
                    <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label>Year</label>
                            <select class="nice-select year" name="year[]" required id="year"> <option value="" disabled selected>Select Year</option>`;
            var currentYear = {{ date('Y') }};
            for (var year = currentYear; year >= 1936; year--) {
                newVehicleHtml += `<option value="${year}">${year}</option>`;
            }
            newVehicleHtml += `
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-form tj-select">
                            <label>Make</label>
                            <div class="dropdown">
                                <input class="form-control dropdown-toggle make" name="make[]" type="text" id="make" placeholder="Select Make" data-bs-toggle="dropdown" aria-expanded="false">
                                <ul class="dropdown-menu make-dropdown" aria-labelledby="make">
                                    <li><a class="dropdown-item" >Select Make</a></li>`;
            @foreach ($makes as $make)
                newVehicleHtml += `<li><a class="dropdown-item"  data-value="{{ $make->make }}">{{ $make->make }}</a></li>`;
            @endforeach
            newVehicleHtml += `
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-form tj-select model-div">
                            <label>Model</label>
                            <select class="nice-select model" name="model[]" id="model" required>
                                <!-- Options will be filled by JavaScript -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="condition" class="text-white">Condition</label>
                            <select class="nice-select" id="condition" name="condition[]">
                                <option value="1" selected>Running</option>
                                <option value="2">Non Running</option>
                            </select>
                        </div>
                    </div>
                </div>
                </div>
            `;
            $('#vehicles-container').append(newVehicleHtml);
        }

        $('#addVehicleBtn').click(function() {
            addNewVehicle();
        });

        $(document).on('click', '.delete-vehicle', function() {
            $(this).closest('.vehicle-info').remove();
        });

        $(document).on('click', '.make-dropdown .dropdown-item', function() {
            var make = $(this).data('value');
            $(this).closest('.dropdown').find('.form-control').val(make).end()
                .find('.dropdown-menu').removeClass('show');
            var vehicleInfo = $(this).closest('.vehicle-info');
            var year = vehicleInfo.find('.year').val();
            if (year && make) {
                getModel(year, make, vehicleInfo);
            }
        });
       
        $(document).on('click', '.year-dropdown .dropdown-item', function() {
            var selectedYear = $(this).data('value');
            $('#year').val(selectedYear);  // Set the selected value in the input field
        });        

        $(document).on('click', '.year, .make', function() {
            var year = $(this).closest('.vehicle-info').find('.year').val();
            var makeId = $(this).closest('.vehicle-info').find('.make').val();
            // alert(makeId);
            var vehicleInfo = $(this).closest('.vehicle-info');
            if (year && makeId) {
                getModel(year, makeId, vehicleInfo);
            }
        });


        function getModel(year, makeId, vehicleInfo) {
            $.ajax({
                url: "{{ route('get.models') }}",
                method: 'GET',
                data: {
                    year: year,
                    make: makeId
                },
                success: function(response) {
                    var modelDropdown = vehicleInfo.find('.model-dropdown');
                    var modelInput = vehicleInfo.find('.model-input');
                    var modelSelect = vehicleInfo.find('.model'); // Standard <select> element

                    // Update custom dropdown
                    if (modelDropdown.length && modelInput.length) {
                        modelDropdown.empty();
                        modelDropdown.append('<li><a class="dropdown-item" data-value="">Select Model</a></li>');

                        $.each(response, function(index, model) {
                            modelDropdown.append('<li><a class="dropdown-item" data-value="' + model + '">' + model + '</a></li>');
                        });

                        modelInput.on('focus', function() {
                            modelSelect.empty(); // Clear the <select> options
                            modelSelect.append('<option value="">Select Model</option>'); // Add default option
                            modelDropdown.show();
                        });

                        modelInput.on('input', function() {
                            var searchTerm = $(this).val().toLowerCase();
                            modelDropdown.find('li').each(function() {
                                var itemText = $(this).text().toLowerCase();
                                if (itemText.indexOf(searchTerm) !== -1 || searchTerm === '') {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                        });

                        modelDropdown.on('click', 'a.dropdown-item', function(e) {
                            e.preventDefault(); // Prevent default anchor behavior
                            var selectedText = $(this).text();
                            var selectedValue = $(this).data('value');

                            modelInput.val(selectedText); // Set the selected text in modelInput
                            modelDropdown.hide(); // Hide the custom dropdown

                            modelSelect.empty(); // Clear the <select> options
                            modelSelect.append('<option value="' + selectedValue + '">' + selectedText + '</option>');
                            modelSelect.val(selectedValue); // Set the selected value in the select dropdown
                        });

                        $(document).on('click', function(e) {
                            if (!modelInput.is(e.target) && !modelDropdown.is(e.target) && modelDropdown.has(e.target).length === 0) {
                                modelDropdown.hide();
                            }
                        });
                    }

                    // Handle standard <select> dropdown
                    if (modelSelect.length) {
                        modelSelect.empty(); // Clear any existing options
                        modelSelect.append('<option value="">Select Model</option>'); // Add default option

                        $.each(response, function(index, model) {
                            modelSelect.append('<option value="' + model + '">' + model + '</option>');
                        });

                        modelSelect.on('change', function() {
                            var selectedModel = $(this).val();
                            // Optional: Sync custom input when user selects from <select>
                            modelInput.val(modelSelect.find('option:selected').text());
                        });
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }






        $(document).on('input', '.dropdown-toggle', function() {
            var input = $(this).val().toLowerCase();
            $(this).siblings('.dropdown-menu').find('.dropdown-item').each(function() {
                var text = $(this).text().toLowerCase();
                $(this).toggle(text.indexOf(input) > -1);
            });
        });
    });
</script>
{{-- <script>
    $(document).ready(function() {
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
                newVehicleHtml += `<option value="{{ $make->make }}">{{ $make->make }}</option>`;
            @endforeach

            newVehicleHtml += `
            </select>
            </div>
            </div>
            <div class="col-md-4">
            <div class="input-form tj-select model-div">
            <label>Model</label>
            <select class="nice-select model" name="model[]" id="model" required>
            <!-- Options filled by JavaScript -->
            </select>
            <!-- Bin icon for deleting vehicle -->
            <span class="delete-vehicle"><i class="fa fa-trash" style="float: right; margin-top: 0px; color: red;"></i></span>
            </div>
            </div>
            </div>
            </div>
            `;

            $('#vehicles-container').append(newVehicleHtml);
        }

        $('#addVehicleBtn').click(function() {
            addNewVehicle();
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
            console.log('yes inn');
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
                        selectOptions += '<option value="' + model + '">' + model +
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
<script>
    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var year = $('.vehicle-year').val();
            var makeId = $('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId);
            }
        });
    });
        function getModel(year, makeId) {
            console.log('yes inn');
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

                    console.log('yesssss', response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }

    

    $(document).ready(function() {
        $('#available_at_auction').change(function() {
        if ($(this).is(':checked')) {
        $('.div-link').show();
        } else {
        $('.div-link').hide();
        }
        });
        $('#modification').change(function() {
            if ($(this).is(':checked')) {
                $('.div-modify_info').show();
            } else {
                $('.div-modify_info').hide();
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
                    var listItem = $("<li>").text(suggestion).click(function() {
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

    $("#pickup-location, #delivery-location").keyup(function() {
        var inputField = $(this);
        var suggestionsList = inputField.siblings(".suggestionsTwo");
        suggestionsList.css("display", "block");
        if (inputField.val() === "") {
            suggestionsList.css("display", "none");
        }
        updateSuggestions(inputField, suggestionsList);
    });
</script> --}}
@endsection