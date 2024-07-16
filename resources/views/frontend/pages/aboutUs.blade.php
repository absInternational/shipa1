@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->

    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">About Us</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> About</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--========== breadcrumb End ==============-->

    <!--=========== About Section Start =========-->

    <section class="tj-service-details pt-4 pb-0">
           <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape">Ship A1 Transport</span>
                        <p>
                        Ship A1 Transport is one of the top logistic and shipping companies, with a vast variety of shipping methods, quality services, and a well-equipped staff we are proficient in transporting your vehicles, heavy equipment and freight from one place to another with timely delivery all across the US. At Ship A1 Transport we believe that our top priority is providing our customers with top-notch quality as well as catering to their needs from time to time. We ensure our customers' satisfaction and peace of mind and maintain customer loyalty with them. Your trust is our goal. Ship A1 Transport not only believes in safe and secure transportation we also care about what our customers require from us, with our professional, expert, and highly equipped team we can fully meet your needs and expectations without any hassle.

                        </p>
                        <!-- <h2 class="title">Welcome to the  &amp; privacy policy </h2> -->
                    </div>
                </div>
            </div>
           </div>
    </section>

    <section class="tj-about-section pt-4">
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
                                <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                    <!-- <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" /> -->
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
                                <i class="fa-light fa-bell-concierge fa-2xl" style="color: #8fc445;"></i>
                                    <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
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
                                <i class="fa-light fa-shield-heart fa-2xl" style="color: #8fc445;"></i>
                                    <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
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
                                <i class="fa-light fa-handshake fa-2xl" style="color: #8fc445;"></i>
                                    <!-- <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" /> -->
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

    <!--=========== Cta Section Start =========-->

    <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/cta-auto-aucation.webp') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                            <i class="fa-light fa-car-rear"></i>
                            <!-- <i class="fa-solid fa-gavel"></i> -->
                                <!-- <i class="flaticon flaticon-freight"></i> -->
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
                        <a class="tj-transparent-btn" target="_blank" href="{{ route('quote.form.combine') }}">
                            GET QUOTE<i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--=========== Cta Section End =========-->
    
    <!--=========== Service Section Start =========-->

    <section class="tj-service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> What We Do</span>
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

    <!--=========== Testimonial Section Start =========-->
    @include('partials.reveiw-detail')
    <!--=========== Testimonial Section End =========-->

    <section class="tj-cta-section-two">
            <div class="tj_cta_image"></div>
            <div class="tj_cta_image1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="tj-cta-content">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape2"> Here We Are</span>
                                <h4 class="title"> Get Anytype Quote From Your Shipping Need</h4>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="{{ route('quote.form.combine') }}" target="_blank">
                                    Get Quote<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tj-cta-content tj-cta-content2">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape2"> Support Center 24/7 </span>
                                <h4 class="title">Feel Free To Contact Us For Additional Info</h4>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                                    Get Support<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
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
                                <h6 class="title">Reliable & Trustworthy</h6>
                                <p>Safe, trustworthy, and reliable for all of your shipping and transportation needs.</p>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">High Quality service</h6>
                                <p>Attention to detail and customer satisfaction are incorporated in delivering quality service consistently.</p>
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
                                        What should I choose for my luxurious vehicle?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>If you have a luxurious vehicle, we would suggest you go for the enclosed trailer as it protects your vehicle and offers you peace of mind, or if you are looking for a cheaper option then open transport is the best for you, without compromising the quality experience the best, safe and secure shipping with Ship A1!</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get a quote?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>At Ship A1 we have the convenience of providing free online quotes to our customers, you can check them out at www.shipa1.com</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Can I track my vehicle during transport?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Yes!  ShipA1 provides a user-friendly tracking system for real-time updates on your vehicle's location throughout the journey.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        How do I prepare my vehicle for transport?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We'll provide detailed instructions, but you'll need to remove personal belongings, as well as make sure to follow guidelines or instructions based on the chosen transport method.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        FAQ Five
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>FAQ Five Content: Trage agile frameworks to provide a robust synopsis for
                                            high level overviews.</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--========== Faq Section End ==============-->

    <!--========== Chhose Section Start ==============-->
    <section class="tj-choose-us-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="choose-us-top-content">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape2">Have any ideas in your mind?</span>
                                <h2 class="title">Reasons Why You Choose Us.</h2>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="contact.html">
                                    Read More <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Shipping Methods:</h6>
                                </div>
                            </div>
                            <p>
                            Offering wide range of shipping methods tailored to various needs, including vehicles, heavy equipment, and freight across the US.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Quality Service:</h6>
                                </div>
                            </div>
                            <p>
                            Providing top-notch quality service with a well-equipped and professional team dedicated to meeting customer expectations.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Timely Delivery: </h6>
                                </div>
                            </div>
                            <p>
                            Ensuring timely delivery of shipments, emphasizing reliability and efficiency in logistics.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Customer focused Approach: </h6>
                                </div>
                            </div>
                            <p>
                            Focusing on customer satisfaction by catering to their needs and maintaining loyalty through personalized service.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Trustworthiness & Security:</h6>
                                </div>
                            </div>
                            <p>
                            Prioritizing safe and secure transportation, with a commitment to maintaining customer trust and peace of mind.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--========== Chhose Section End ==============-->

    <!--=========== Blog Section Start =========-->
    @include('partials.blog-slider')
    <!--=========== Blog Section End =========-->

    <!--=========== Newsletter Section Start =========-->

    @include('partials.newsletter')

    <!--=========== Newsletter Section End =========-->

@endsection
