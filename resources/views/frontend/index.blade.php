@extends('frontend.layouts.app')

@section('content')
<style>
.lab-cos {
    font-size: 15px;
    font-weight: 500;
    color: var(--tj-white-color);
    margin-bottom: 10px;
}


.input-container {
    height: 34px;
    background: white;
    display: flex;
    align-items: center;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
    padding: 8px 0px 8px 0px;
    width: fit-content;

}

.input-container1 {
    height: 34px;
    background: white;
    display: flex;
    align-items: center;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
    padding: 8px 0px 8px 0px;
    width: fit-content;

}

.input-field {
    width: 50px;
    padding: 5px;
    font-size: 14px;
    border: none;
    outline: none;
}

.input-field-1 {
    width: 65px;
    padding: 0px 0px 0px 10px;
    font-size: 14px;
    border: none;
    outline: none;
}

.separator {
    margin: 0px 0px 0px 0px;
    font-size: 14px;
}

.separators {
    margin: 0px 5px 0px 0px;
    font-size: 14px;
}

.separators-w {
    margin: 0px 5px 0px 0px;
    font-size: 14px;
}

.input-container input[type="number"] {
    -moz-appearance: textfield;
}

.input-container input[type="number"]::-webkit-outer-spin-button,
.input-container input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.form-wrap {
    margin-bottom: 10px;
    position: relative;
}

.form-label-outside {
    color: white;
    display: block;
    margin-bottom: 5px;
}

.input-container {
    display: flex;
    align-items: center;
}

.input-container input {
    border: none;
    /* border-bottom: 1px solid #ccc; */
    padding: 5px 0px 5px 0px;
    font-size: 14px;
    width: 38px;
    text-align: center;
    /* margin-right: 5px; */
}

.input-container .placeholders {
    /* color:white; */
    position: relative;
    right: 72px;
    color: black;
    display: inline-block;
    width: auto;

    padding: 0px 8px;
    /* background: white; */
}

.err-style {
    color: red;
}

.tj-input-form .input-form label {
    font-size: 15px;
    font-weight: 500;
    color: var(--tj-white-color);
    margin-bottom: 10px;
}
</style>

<!--=========== Slider Section Start =========-->
<section class="tj-slider-section">
    <div class="slider_shape"><img src="{{ asset('frontend/images/banner/home-underline.png') }}" alt="Image" /></div>
    <div class="swiper sc-slider-1">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-1.webp') }}">
                <div class="container">
                    <div class="slider-content p-z-idex">
                        <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING & LOGISTICS SERVICES</h1>
                        <div class="slider-desc">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn" href="contact.html">
                                Read More <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </div>
            <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-2.webp') }}">
                <div class="container">
                    <div class="slider-content p-z-idex">
                        <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING & LOGISTICS SERVICES</h1>
                        <div class="slider-desc">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn" href="contact.html">
                                Read More <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </div>
            <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-3.webp') }}">
                <div class="container">
                    <div class="slider-content p-z-idex">
                        <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING & LOGISTICS SERVICES</h1>
                        <div class="slider-desc">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
                        </div>
                        <div class="tj-theme-button">
                            <a class="tj-transparent-btn" href="contact.html">
                                Read More <i class="flaticon-right-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="tj-service-icon-box">
        <ul class="list-gap">
            <li>
                <div class="service-item">
                    <div class="tj-service-icon">
                        <div class="service-icon">
                            <i class="flaticon-delivery-van"></i>
                        </div>
                        <div class="sub-title">
                            <span>VEHICLE <br>TRANSPORTATION</span>
                        </div>
                    </div>
                    <div class="service-arrow">
                        <a href="service-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            <li>
                <div class="service-item">
                    <div class="tj-service-icon">
                        <div class="service-icon">
                            <i class="flaticon-air-freight"></i>
                        </div>
                        <div class="sub-title">
                            <span>HEAVY <br>TRANSPORTATION </span>
                        </div>
                    </div>
                    <div class="service-arrow">
                        <a href="service-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            <li>
                <div class="service-item">
                    <div class="tj-service-icon">
                        <div class="service-icon">
                            <i class="flaticon flaticon-ship"></i>
                        </div>
                        <div class="sub-title">
                            <span>FREIGHT <br>TRANSPORTATION</span>
                        </div>
                    </div>
                    <div class="service-arrow">
                        <a href="service-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--=========== Slider Section End =========-->

<!--=========== Service Section Start =========-->
<section class="tj-service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape">What We Do</span>
                    <h2 class="title">Logistic & Transport</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                <div class="tj-service-item"
                    data-bg-image="{{ asset('frontend/images/service/vehicle-transport.webp') }}">
                    <div class="icon-box">
                        <i class="flaticon-air-freight"></i>
                    </div>
                    <div class="service-content">
                        <h4><a class="title-link" href="service-details.html"> VEHICLE TRANSPORTATION</a></h4>
                        <p>Long established fact that reader will be distracted by the</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                <div class="tj-service-item"
                    data-bg-image="{{ asset('frontend/images/service/heavy-transport.webp') }}">
                    <div class="icon-box">
                        <i class="flaticon-cargo-ship-1"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <a class="title-link" href="service-details.html"> HEAVY TRANSPORTATION</a>
                        </h4>
                        <p>Long established fact that reader will be distracted by the</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="tj-service-item"
                    data-bg-image="{{ asset('frontend/images/service/feright-transport.webp') }}">
                    <div class="icon-box">
                        <i class="flaticon-delivery-van"></i>
                    </div>
                    <div class="service-content">
                        <h4><a class="title-link" href="service-details.html"> FREIGHT TRANSPORTATION</a></h4>
                        <p>Long established fact that reader will be distracted by the</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Service Section End =========-->

<!--=========== Cta Section Start =========-->
<section class="tj-cta-section icon-animate">
    <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/cta-auto-aucation.webp') }}"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="cta-content-area">
                    <div class="cta-content">
                        <div class="cta-icon">
                            <i class="flaticon flaticon-freight"></i>
                        </div>
                        <div class="cta-text">
                            <h3 class="title">SHIP A CAR DIRECT FROM AUTO Auction</h3>
                            <p class="desc">We deliver quality, with prosperity. Because your Shipping needs, our
                                solution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 position-relative">
                <div class="tj-theme-button">
                    <a class="tj-transparent-btn" href="contact.html">
                        Read More <i class="flaticon-right-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Cta Section End =========-->

<!--=========== About Section Start =========-->
<section class="tj-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"> A1 Transportation Company</span>
                        <h2 class="title">What Makes Us Dependable?</h2>
                        <p class="desc">
                            Among all the shipping companies out there, factors that make us stand out from therest are:
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" />
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Our Values</h5>
                            </div>
                        </div>
                        <p class="desc">
                            We are a licensed Transportation company with high moral values and have attained customer
                            satisfaction through their remarks on esteemed platforms.

                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Scope of Services</h5>
                            </div>
                        </div>
                        <p class="desc">
                            Range of vehicles, we ship, is not limited to just conventional cars and motorbikes.
                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Safety Is Our Priority</h5>
                            </div>
                        </div>
                        <p class="desc">
                            No matter which mode of transportation you use, ShipA1 assures its customers, utmostsecurity
                            to their assets.


                        </p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon">
                                <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Skilful & Devoted Staff</h5>
                            </div>
                        </div>
                        <p class="desc">
                            Our team is loaded with highly experienced professionals of both customer dealing andvehicle
                            handling.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                    <div class="tj-icon-box2 text-center">
                        <div class="number-icon">
                            <i class="flaticon-in-person"></i>
                        </div>
                        <div class="about-number">
                            <div class="tj-count"><span class="odometer" data-count="1700">0</span></div>
                            <p class="desc">Satisfied Client</p>
                        </div>
                    </div>
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/about/resize 410-630.jpg') }}"
                            alt="Image" />
                    </div>
                    <img class="group-1 p-z-idex"
                        src="{{ asset('frontend/images/about/kuch-be-rak-dy-is-ka-nam.webp') }}" alt="Image" />
                    <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}" alt="Image" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== About Section End =========-->
<section class="tj-choose-us-section">
    <div class="container-flude">
        <div class="row">
            <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                <div class="tj-input-form" data-bg-image="">



                    <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform" id="calculatePriceFrom"
                        data-parsley-validate data-parsley-errors-messages-disabled enctype="multipart/form-data">
                        @csrf
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
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 mb-4">
                                        <h6 class="text-white">Moving To</h6>
                                        <label class="text-white mb-2">Where Are You Moving To?</label>
                                        <div class="single-input-field">
                                            <input class="form-control" type="text" id="delivery-location"
                                                placeholder="Enter City or ZipCode" name="To_ZipCode" required>
                                            <ul class="suggestions suggestionsTwo"></ul>
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

                                    <div class="col-xl-12 col-lg-12 mb-3">
                                        <label class="text-white mb-2">Select Vehicle</label>
                                        <div class="single-input-field">
                                            <select class="form-control" id="select_vehicle" required>
                                                <option selected value="">Select Type</option>
                                                <option value="Car">Car</option>
                                                <option value="MotorCycle">MotorCycle</option>
                                                <option value="Heavy Equipment">Heavy Equipment</option>
                                                <option value="Dryvan">Freight shipping</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="vehicle_specific_fields"></div>
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
                                            <input class="form-control" name="Custo_Name" type="text"
                                                placeholder="Customer Name">
                                        </div>
                                    </div>


                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Phone:</label>
                                            <input class="form-control" name="Custo_Phone" type="tel"
                                                placeholder="Customer Phone">
                                        </div>
                                    </div>


                                    <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white"> Email Address:</label>
                                            <input class="form-control" name="Custo_Email" type="email"
                                                placeholder="Email address">
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
                                            <button class="tj-submit-btn" type="submit" id="submit_instant_code"
                                                value="submit">
                                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Feature Section End =========-->

<!--=========== Team Section Start =========-->
<section class="tj-team-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Our Services</span>
                    <h2 class="title">Pick Your Transport Type</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Team Section End =========-->

<!--=========== Project Section Start =========-->
<section class="tj-project-section">
    <div class="tj-project-slider owl-carousel">
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> logistics</span>
                <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">CAR</span>
                <h4><a href="project-details.html" class="title-link"> Sedan, SUV, Pickup etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> MOTORCYCLE</span>
                <h4><a href="project-details.html" class="title-link"> Mopeds, ATV, Power Sports etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> HEAVY EQUIP.</span>
                <h4><a href="project-details.html" class="title-link"> Trucks, Bulldozers, Mixer etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">RORO</span>
                <h4><a href="project-details.html" class="title-link">Cars, Trucks, trailers etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> ATV/UTV</span>
                <h4><a href="project-details.html" class="title-link">Sport, Quads, Military etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> CONSTRUCTION</span>
                <h4><a href="project-details.html" class="title-link"> Cranes, Drills, Grinders etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> FARM</span>
                <h4><a href="project-details.html" class="title-link">Tractor, Planter, Baler etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/excavator-pickup.webp') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> EXCAVATOR</span>
                <h4><a href="project-details.html" class="title-link"> Digger, Driller, Miners etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> TRUCKS</span>
                <h4><a href="project-details.html" class="title-link">Commercial, Dump Trucks etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> Reefer</span>
                <h4><a href="project-details.html" class="title-link"> frozen , refrigerated etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> Hazmat</span>
                <h4><a href="project-details.html" class="title-link"> Explosive, Flammable, etc.</a></h4>
            </div>
        </div>
        <div class="tj-project-item">
            <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title"> Dry van</span>
                <h4><a href="project-details.html" class="title-link">palletized, boxed, freight etc.</a></h4>
            </div>
        </div>
    </div>
</section>
<!--=========== Project Section End =========-->

<!--=========== Testimonial Section Start =========-->
<section class="tj-testimonial-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape"> Client Feedback</span>
                <h2 class="title">Our Client Reviews</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper tj-testimonial-slider">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="tj-testimonial-item">
                                <div class="testimonial-rating d-flex justify-content-between">
                                    <div class="testimoniasl-image">
                                        <img src="{{ asset('frontend/images/icon/comment.svg') }}" alt="Icon" />
                                    </div>
                                    <div class="rating-icon">
                                        <ul class="list-gap">
                                            @for ($i = 0; $i < (int) floor($review->rating); $i++)
                                                <li><i class="fa-solid fa-star"></i></li>
                                                @endfor
                                        </ul>
                                    </div>
                                </div>
                                <div class="content-area">
                                    <p>{{ $review->description }}</p>
                                    <div class="testimonial-content d-flex justify-content-between">
                                        <div class="testimonial-auother">
                                            <h5 class="title">{{ $review->person_name }} </h5>
                                            <span
                                                class="sub-title">{{ !is_null($review->created_at) ? \Carbon\Carbon::parse($review->created_at)->format('M d, Y') : '' }}</span>
                                        </div>
                                        <div class="testimonial-comment">
                                            @if ($review->site_name == 'BBB')
                                            <img src="{{ asset('frontend/images/testimonial/bbb.png') }}" alt="Image" />
                                            @elseif ($review->site_name == 'Google')
                                            <img src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                alt="Image" />
                                            @else
                                            <img src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                alt="Image" />
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Testimonial Section End =========-->

<!--=========== Map Section Start =========-->
<section class="tj-map-section">
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s">
        </iframe>
    </div>
    <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Contact us
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <ul class="list-gap">
                            <li><i class="flaticon-placeholder"></i><span> 201 International Cir STE 230, Hunt Valley,
                                    MD 21030-1344</span></li>
                            <li>
                                <i class="flaticon-mail"></i><a href="mailto:info@shipa1.com">
                                    shawntransport@shipa1.com</a>
                            </li>
                            <li>
                                <i class="flaticon-call"></i><a href="tel:1 (844) 474-4721"> 1 (844) 474-4721</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Map Section End =========-->

<!--=========== Blog Section Start =========-->
<section class="tj-blog-section">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape"> Latest News</span>
                <h2 class="title">Latest News & Blog</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="tj-blog-item">
                    <div class="tj-blog-image">
                        <a @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                            <img src="{{ !is_null($blog->post_image) ? $blog->post_image : '' }}" alt="Blog" /></a>
                    </div>
                    <div class="blog-content-area">
                        <div class="blog-meta">
                            <div class="meta-date">
                                <ul class="list-gap">
                                    <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</li>
                                    <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</li>
                                </ul>
                            </div>
                            <div class="meta-list">
                                <ul class="list-gap">
                                    <li><i class="fa-light fa-user"></i><a href="#">
                                            {{-- {{ $blog->user->name }}</a></li> --}}
                                    {{ !is_null($blog->user->name) ? $blog->user->name : '' }}</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="blog-text-box">
                            <div class="blog-header">
                                <h4>
                                    <a class="title-link" @if ($blog->type == 'old')
                                        href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                        {{-- {{ $blog->post_name }} --}}
                                        {{-- {{ Illuminate\Support\Str::limit($blog->post_name, 20, '...') }} --}}
                                        {{ !is_null($blog->post_name) ? Illuminate\Support\Str::limit($blog->post_name, 20, '...') : '' }}
                                    </a>
                                </h4>
                                {{-- <p>
                                        {!! Illuminate\Support\Str::limit($blog->post_description, 200, '...') !!}
                                        </p> --}}
                            </div>
                            <div class="blog-button">
                                <ul class="list-gap">
                                    <li>
                                        <a @if ($blog->type == 'old')
                                            href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                            href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                            Read More <i class="fa-regular fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--=========== Blog Section End =========-->

<!--=========== Newsletter Section Start =========-->
@include('partials.newsletter')
<!--=========== Newsletter Section End =========-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
$(document).ready(function() {
    // Move to Step 2
    $('#step1_next').click(function() {
        $('#step1').hide();
        $('#step2').show();
    });

    // Return to Step 1
    $('#step2_previous').click(function() {
        $('#step2').hide();
        $('#step1').show();
    });

    // Move to Step 3
    $('#step2_next').click(function() {
        $('#step2').hide();
        $('#step3').show();
    });

    // Return to Step 2
    $('#step3_previous').click(function() {
        $('#step3').hide();
        $('#step2').show();
    });

    // Show vehicle specific fields based on selection
    $('#select_vehicle').change(function() {
        event.preventDefault();
        var vehicleType = $(this).val();
        var specificFields = '';




        $.ajax({
            url: "{{ route('get.partial.form') }}",
            method: 'GET',
            data: {
                vehicleType: vehicleType,
            },
            success: function(response) {
                console.log('response', response);
                // modelsDropdown.html(selectOptions);
                $('#vehicle_specific_fields').append(response);

                // below code
                if (vehicleType === 'Car') {
                    specificFields = `
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="line-height:23px;">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class="form-control" id="trailer_type" name="trailer_type">
                                            <option value="Open" selected>Open</option>
                                            <option value="Enclosed">Enclosed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class="form-control" id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="input-form mt-3">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" type="file" id="image" name="image"
                                    placeholder="Upload File" />
                            </div>
    
                            <div class="row">
                                <di class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1" />
                                        <label class="form-check-label text-white" for="modification"> Modification</label>
                                    </div>
    
                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input class="" type="text" id="c" name="modify_info"
                                            placeholder="Enter Modification Information" />
                                    </div>
                                </di>
                                <di class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label text-white" for="available_at_auction"> Available at
                                            Auction?</label>
                                    </div>
    
                                    <div class="input-form div-link" style="display: none;">
                                        <label class="d-block"> Enter Link:</label>
                                        <input class="" type="url" id="link" name="link" placeholder="Enter Link" />
                                    </div>
                                </di>
                            </div>`;
                } else if (vehicleType === 'MotorCycle') {
                    specificFields = `
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="line-height:23px;">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class="form-control" id="trailer_type" name="trailer_type">
                                            <option value="Open" selected>Open</option>
                                            <option value="Enclosed">Enclosed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class="form-control" id="condition" name="condition">
                                            <option value="Running" selected>Running</option>
                                            <option value="Non Running">Non Running</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="input-form mt-3">
                                <label class="d-block text-white"> Image:</label>
                                <input class="form-control image_input" type="file" id="image" name="image"
                                    placeholder="Upload File" />
                            </div>
    
                            <div class="row">
                                <di class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-check-input " type="checkbox" id="modification"
                                            name="modification" value="1" />
                                        <label class="form-check-label text-white" for="modification"> Modification</label>
                                    </div>
    
                                    <div class="input-form div-modify_info" style="display: none;">
                                        <label class="d-block"> Modification Information:</label>
                                        <input class="" type="text" id="c" name="modify_info"
                                            placeholder="Enter Modification Information" />
                                    </div>
                                </di>
                                <di class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="available_at_auction"
                                            name="available_at_auction" value="1" />
                                        <label class="form-check-label text-white" for="available_at_auction"> Available at
                                            Auction?</label>
                                    </div>
    
                                    <div class="input-form div-link" style="display: none;">
                                        <label class="d-block"> Enter Link:</label>
                                        <input class="" type="url" id="link" name="link" placeholder="Enter Link" />
                                    </div>
                                </di>
                            </div>
                        
                        `
                } else if (vehicleType === 'Heavy Equipment') {
                    specificFields = `
    
                            <div class="row select-bm">
                            </div>
    
                            <div class="row">
                                    <div class="col-6">
                                        <div class="input-form">
                                            <label for="category">Category</label>
                                            <select class="form-control" id="category" name="category">
                                                <option value="" disabled selected>Select</option>
                                               
                                                    <option value=""></option>
                                               
                                            </select>
                                            <input type="text" class="form-control" id="otherCategoryInput" name="category"
                                                disabled style="display: none;" placeholder="Specify Category">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-form" id="subcategory-box">
                                            <label for="subcategory">Subcategory</label>
                                            <select class="form-control" id="subcategory" name="subcategory">
                                                <option value="" disabled selected>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                               
    
                                
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                            <select class="form-control" id="trailer_type" name="trailer_type">
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
                                            <select class="form-control" id="condition" name="condition">
                                                <option value="Running" selected>Running</option>
                                                <option value="Non Running">Non Running</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="load_type" class="text-white">Load Type</label>
                                            <select class="form-control" id="load_type" name="load_type">
                                                <option value="" disabled selected>Select</option>
                                                <option value="LTL (LESS THEN TRUCK LOAD)">LTL (LESS THEN TRUCK LOAD)</option>
                                                <option value="FTL (FULL TRUCK LOAD)">FTL (FULL TRUCK LOAD)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="load_method" class="text-white">Load Method</label>
                                            <select class="form-control" id="load_method" name="load_method">
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
                                            <select class="form-control" id="unload_method" name="unload_method">
                                                <option value="" disabled selected>Select</option>
                                                <option value="LOADING DOCK">LOADING DOCK</option>
                                                <option value="CRANE">CRANE</option>
                                                <option value="FORKLIFT">FORKLIFT</option>
                                                <option value="DRIVE ROLL">DRIVE ROLL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                
    
                                <div class="row mt-3">
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
    
    
                                                            <div class="row mb-3">
                                    <div class="col-md-3">
    
                                    <label class="lab-cos">Length</label>
                                    <div class="input-container">
                                        <input type="number" id="feet-input" class="input-field" placeholder=""
                                            min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                        <span class="separator">(Ft.)</span>
                                        <input type="number" id="inches-input" class="input-field" placeholder=""
                                            min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                        <span class="separators">(In.)</span>
                                    </div>
                                    </div>
    
                                    <div class="col-md-3">
    
                                        <label class="lab-cos">Width</label>
                                        <div class="input-container">
                                    <input type="number" id="feet-input1" class="input-field" placeholder=""
                                        min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                    <span class="separator">(Ft.)</span>
                                    <input type="number" id="inches-input1" class="input-field" placeholder=""
                                        min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                    <span class="separators">(In.)</span>
                                        </div>
                                        </div>
    
                                    <div class="col-md-3">
    
                                <label class="lab-cos">Height</label>
                                <div class="input-container">
                                    <input type="number" id="feet-input2" class="input-field" placeholder=""
                                        min="0" maxlength="3" oninput="limitDigits(this, 3)">
                                    <span class="separator">(Ft.)</span>
                                    <input type="number" id="inches-input2" class="input-field" placeholder=""
                                        min="0" max="11" maxlength="2" oninput="limitDigits(this, 2)">
                                    <span class="separators">(In.)</span>
                                </div>
                                    </div>
    
                                    <div class="col-md-3">
    
                                <label class="lab-cos">Weight</label>
                                <div class="input-container1">
                                    <input type="" id="feet-input" class="input-field-1" placeholder=""
                                        min="0" maxlength="6" oninput="limitDigits(this, 6)">
                                    <span class="separators-w">(Lbs.)</span>
                                    
                                </div>
                                    </div>
                                   </div>
    
    
    
                              
    
                                <div class="input-form mt-3">
                                    <label class="d-block" class="text-white"> Image:</label>
                                    <input class="form-control image_input" type="file" id="image" name="image"
                                        placeholder="Upload File" />
                                </div>
    
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
    
                               
    
                        
                        `
                } else if (vehicleType === 'Dryvan') {
                    specificFields = `
                            <div class="col-xl-12 col-lg-12">
                                
                            </div>`;
                }
                // below code end

                $('#vehicle_specific_fields').append(specificFields);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });

    });

});
</script>

<script>
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
</script>
@endsection