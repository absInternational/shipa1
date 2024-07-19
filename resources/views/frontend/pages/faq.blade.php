@extends('frontend.layouts.app')

@section('content')
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/slider/FAQ.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">FAQ!</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span>FAQ!</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========== breadcrumb End ==============-->

<!--========== Faq Section Start ==============-->
<section class="tj-faq-section tj-faq-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> How It’s Work</span>
                    <h2 class="title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
               <div class="col-lg-12">
                                    <div class="slider-tabs slider-tabs-two ">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">
                                                    <i class="flaticon-shipped"></i> Vehicle Transportation
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                                                    <i class="flaticon-global-navigation"></i> Heavy Equipment
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    <i class="flaticon-cargo-ship-1"></i> Freight Transportation
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="text-dark title">Reliable & Trustworthy</h6>
                            <p class="text-dark" >Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                        </div>
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="text-dark title">High Quality Material</h6>
                            <p class="text-dark" >Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What type of vehicle do you transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We transport all types of cars, motorcycles, trucks, SUVs, vans, ATV, UTV,
                                        Golf cart.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can I get a quote to ship my vehicle?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>You can get a quote by visiting our website and filling up the online quote
                                        form, providing your details of your vehicle with your transportation
                                        requirements. Or you can contact us directly for an instant quote at 1 (844)
                                        474-4721.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is my vehicle insured during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, your vehicle is fully insured during transportation. Our insurance
                                        covers any possible damage that may be caused during transit. Please refer to
                                        our insurance policy for more details.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How long does it take to transport my vehicle?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The time it takes to transport your vehicle varies based on distance and
                                        route. Estimated times for transport are 2-9 days cross country and 1-3 days for
                                        shorter distances. We will provide a more exact estimate once you book your
                                        transport with us.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I track the progress of my vehicle transport?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, you can track the status of your vehicle transport through our online
                                        tracking system or by contacting our customer service team for updates.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How should I prepare my vehicle for shipment?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Be sure to wash your vehicle, remove all personal belongings, mark existing
                                        damage, ensure the gas tank is not over a quarter full, and turn off your
                                        alarms. We'll email more detailed preparation instructions once you book your
                                        transport.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Can I carry personal items in my vehicle?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We do not suggest that you leave personal items inside the vehicle during
                                        transport. Our insurance doesn't cover personal items; also, they may shift
                                        during transit and cause damage.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What kinds of transport services do you offer?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We offer both open and enclosed transport services. The open transport is
                                        more cost-effective and suitable for most vehicles, while the enclosed transport
                                        provides extra protection, especially for luxury, classic, or high-value
                                        vehicles.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    What if my vehicle is damaged during transportation?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>In case your vehicle gets damaged during transit, our insurance covers the
                                        cost of repair. You need to document the damage and contact our claims
                                        department to initiate the process.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Am I able to choose a specific pick-up and delivery date?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We can accommodate flexible scheduling based on your needs. If specific
                                        dates are possible, we will provide a pick-up and delivery window for the most
                                        efficient transport service. Please discuss any requirements with our scheduling
                                        team when you book.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="text-dark title">Reliable & Trustworthy</h6>
                            <p class="text-dark" >Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                        </div>
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="text-dark title">High Quality Material</h6>
                            <p class="text-dark" >Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What type of vehicle do you transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We transport all types of cars, motorcycles, trucks, SUVs, vans, ATV, UTV,
                                        Golf cart.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can I get a quote to ship my vehicle?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>You can get a quote by visiting our website and filling up the online quote
                                        form, providing your details of your vehicle with your transportation
                                        requirements. Or you can contact us directly for an instant quote at 1 (844)
                                        474-4721.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is my vehicle insured during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, your vehicle is fully insured during transportation. Our insurance
                                        covers any possible damage that may be caused during transit. Please refer to
                                        our insurance policy for more details.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How long does it take to transport my vehicle?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The time it takes to transport your vehicle varies based on distance and
                                        route. Estimated times for transport are 2-9 days cross country and 1-3 days for
                                        shorter distances. We will provide a more exact estimate once you book your
                                        transport with us.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I track the progress of my vehicle transport?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, you can track the status of your vehicle transport through our online
                                        tracking system or by contacting our customer service team for updates.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How should I prepare my vehicle for shipment?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Be sure to wash your vehicle, remove all personal belongings, mark existing
                                        damage, ensure the gas tank is not over a quarter full, and turn off your
                                        alarms. We'll email more detailed preparation instructions once you book your
                                        transport.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Can I carry personal items in my vehicle?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We do not suggest that you leave personal items inside the vehicle during
                                        transport. Our insurance doesn't cover personal items; also, they may shift
                                        during transit and cause damage.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What kinds of transport services do you offer?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We offer both open and enclosed transport services. The open transport is
                                        more cost-effective and suitable for most vehicles, while the enclosed transport
                                        provides extra protection, especially for luxury, classic, or high-value
                                        vehicles.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    What if my vehicle is damaged during transportation?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>In case your vehicle gets damaged during transit, our insurance covers the
                                        cost of repair. You need to document the damage and contact our claims
                                        department to initiate the process.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Am I able to choose a specific pick-up and delivery date?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We can accommodate flexible scheduling based on your needs. If specific
                                        dates are possible, we will provide a pick-up and delivery window for the most
                                        efficient transport service. Please discuss any requirements with our scheduling
                                        team when you book.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image" />
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="text-dark title">Reliable & Trustworthy</h6>
                            <p class="text-dark" >Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                        </div>
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="text-dark title">High Quality Material</h6>
                            <p class="text-dark" >Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What type of vehicle do you transport?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We transport all types of cars, motorcycles, trucks, SUVs, vans, ATV, UTV,
                                        Golf cart.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can I get a quote to ship my vehicle?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>You can get a quote by visiting our website and filling up the online quote
                                        form, providing your details of your vehicle with your transportation
                                        requirements. Or you can contact us directly for an instant quote at 1 (844)
                                        474-4721.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is my vehicle insured during transport?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, your vehicle is fully insured during transportation. Our insurance
                                        covers any possible damage that may be caused during transit. Please refer to
                                        our insurance policy for more details.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How long does it take to transport my vehicle?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The time it takes to transport your vehicle varies based on distance and
                                        route. Estimated times for transport are 2-9 days cross country and 1-3 days for
                                        shorter distances. We will provide a more exact estimate once you book your
                                        transport with us.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I track the progress of my vehicle transport?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, you can track the status of your vehicle transport through our online
                                        tracking system or by contacting our customer service team for updates.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How should I prepare my vehicle for shipment?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Be sure to wash your vehicle, remove all personal belongings, mark existing
                                        damage, ensure the gas tank is not over a quarter full, and turn off your
                                        alarms. We'll email more detailed preparation instructions once you book your
                                        transport.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Can I carry personal items in my vehicle?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We do not suggest that you leave personal items inside the vehicle during
                                        transport. Our insurance doesn't cover personal items; also, they may shift
                                        during transit and cause damage.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What kinds of transport services do you offer?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We offer both open and enclosed transport services. The open transport is
                                        more cost-effective and suitable for most vehicles, while the enclosed transport
                                        provides extra protection, especially for luxury, classic, or high-value
                                        vehicles.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    What if my vehicle is damaged during transportation?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>In case your vehicle gets damaged during transit, our insurance covers the
                                        cost of repair. You need to document the damage and contact our claims
                                        department to initiate the process.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Am I able to choose a specific pick-up and delivery date?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We can accommodate flexible scheduling based on your needs. If specific
                                        dates are possible, we will provide a pick-up and delivery window for the most
                                        efficient transport service. Please discuss any requirements with our scheduling
                                        team when you book.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
            
        </div>
    </div>
</section>
<!--========== Faq Section End ==============-->
@endsection