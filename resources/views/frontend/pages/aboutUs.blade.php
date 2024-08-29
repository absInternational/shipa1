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
                    Ship A1 Transport is one of the top logistic and shipping companies, with a vast variety of 
                    shipping methods, quality services, and a well-equipped staff we are proficient in transporting 
                    your vehicles, heavy equipment and freight from one place to another with timely delivery all 
                    across the US. At Ship A1 Transport we believe that our top priority is providing our customers 
                    with top-notch quality as well as catering to their needs from time to time. We ensure our 
                    customers' satisfaction and peace of mind and maintain customer loyalty with them. Your trust 
                    is our goal. Ship A1 Transport not only believes in safe and secure transportation we also care 
                    about what our customers require from us, with our professional, expert, and highly equipped team 
                    we can fully meet your needs and expectations without any hassle.
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
<section class="tj-choose-us-section-two-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-us-top-content-1">
                    <div class="tj-section-heading-1">
                        <!-- <span class="sub-title-1 active-shape2"> Have any ideas in your mind?</span> -->
                        <h2 class="title-1">Customer Commitment at Ship A1 Transport </h2>
                    </div>
                    <!-- <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="contact.html">
                            Get Quote <i class="flaticon-right-1"></i>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <!-- <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1"></h6>
                        </div>
                    </div> -->
                    <p>
                    At ShipA1 transport, We think it's important to build long-term relationships with our clients. We focus on getting to know what you need and providing custom solutions that go above and beyond. Here's how we show our dedication to you:</p>
                </div>
            </div>
        
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Personalized Service:</h6>
                        </div>
                    </div>
                    <p>We make sure to hear your specific needs offering transport solutions tailored just for you. Whether you need to move one car or a big shipment of goods, we adapt our services to make sure you're happy.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Clear Communication:</h6>
                        </div>
                    </div>
                    <p>We keep the lines of communication open during the whole transport process. From our first talk to the final drop-off, we keep you in the loop at all times. Our customer service team is always ready to answer your questions and help with any issues you might have.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Reliability and Trust:</h6>
                        </div>
                    </div>
                    <p>We've earned our reputation as a trusted partner in the logistics and shipping world by being reliable and trustworthy. We always keep our word making sure your packages get to their destination and on schedule. You can rely on us to provide dependable service every single time.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">New Ideas:</h6>
                        </div>
                    </div>
                    <p>We keep putting money into the newest tech and industry methods to offer cutting-edge transport answers. By staying committed to keeping up with what's new in the industry, we make sure we give you the most productive and useful services we can.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Safety and Compliance:</h6>
                        </div>
                    </div>
                    <p>Ship A1 Transport takes good care of your goods. We follow the strictest safety rules and laws to make sure your shipments. Our transportation professional knows how to handle even the toughest shipping jobs with skill and attention.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Solving Problems:</h6>
                        </div>
                    </div>
                    <p>The shipping business can have its share of bumps, but we stay ahead of them. We look out for possible issues and fix them fast so your shipment doesn't get held up.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="choose-us-step-item-1">
                    <div class="choose-step-box-1">
                        <div class="choose-box-1"></div>
                        <div class="step-content-1">
                            <h6 class="title-1">Listening and Getting Better:</h6>
                        </div>
                    </div>
                    <p>We want to hear what you think, and we use your thoughts to make our service better. What you tell us helps us improve how we work and stay your top choice for shipping. ShipA1 always try to do better and give you great service.</p>
                </div>
            </div>
        </div>    
            <!-- <div class="row ">
                    <h2 class="title-1">Advantages and Key Features of Dry Van Transportation:</h2>
                    <p>
                    This method of shipping involves the use of fully enclosed trailers to protect cargo from external elements such as weather,
                    dust, and theft. It is well known for its key features, which are:</p>
                        
                    
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Versatility</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Convenience</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Cost-effectiveness</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Security</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Additional Dry Van Services</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Same-Day Shipping</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Expedited Freight</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Shipment Pairing</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">High-Value Cargo Protection Services</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Drop Trailers</h6>
                                </div>
                            </div>
                            
                        </div>
                
                    </div>
                 </div>  -->
    </div> 
</section>
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
                        <a class="tj-transparent-btn" href="{{ route('quote.form.combine') }}">
                        Get Quote<i class="flaticon-right-1"></i>
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
