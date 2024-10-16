@extends('frontend.layouts.app')
@section('title', 'State to State Commercial Truck Transport Services in USA')
@section('meta_description', 'Experience hassle free commercial truck transport with our trusted services in USA. We provide efficient and cost-effective solutions for truck transportation.')
@section('content')
<Style>
    .title-2 {
    color: #8fc445;
    }
    .desc-2 {
        color: white;
    }
    .why-box {
        border-radius: 12px;
        padding: 20px 0px;
        background: #f8f9fa9c;
    }
    .card- {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 15px;
            box-shadow:0 5px 30px 0 rgba(35,43,54,.3);
        }
    .services {
        text-align: center;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        border-radius: 12px;
        padding: 10px 30px 0px 30px;
        /* background-color: #9d9e9f14;*/
    }

    .services-h1 {
        text-align:center;
        /* text-decoration: overline; */
        margin-bottom: 50px;
        /* color: #ffffff; */
    }
    .why-choose-us-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adds a semi-transparent overlay */
        z-index: 0; /* Ensures it appears on top of the background */
    }

    .why-choose-us-slider {
        background: url('../../img/autoauction banner 2.webp');
        padding: 60px 0;
        background-color: #f9f9f9;
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1; /* Keeps the background behind the ::before element */
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        animation: fadeIn 1s ease-in-out;
    }

    .section-description {
        text-align: center;
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto 30px;
        opacity: 0.8;
        animation: fadeIn 1.2s ease-in-out;
    }

    .slide {
        min-width: 33.333%;
        box-sizing: border-box;
        padding: 20px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        border: 1px solid rgba(221, 221, 221, 0.6);
        text-align: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .slide:hover {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
        background-color: rgba(255, 255, 255, 1);
    }

    .slide i {
        margin-bottom: 20px;
        color: #666;
        font-size: 3rem;
        transition: color 0.3s ease;
    }

    .slide:hover i {
        color: #8FC445;
    }

    .slide-title {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
        font-weight: bold;
        letter-spacing: 0.3px;
        transition: color 0.3s ease;
    }

    .slide:hover .slide-title {
        color: #8FC445;
    }

    .slide-text {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
        opacity: 0.9;
    }
</Style>
<!--========== blog details Start ==============-->
<section class="tj-choose-us-section-service-commercial">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">COMMERCIAL TRUCK TRANSPORT</h2>
                        <p class="desc-2">
                            ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                            customers and seeks your trust in return of our services.
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
            @include('partials.multi-form-heavy')
                
            </div>

        </div>
    </div>
</section>
<!-- <section class="tj-about-section-four pt-0">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">
        How Commercial Truck Transport<br>Works?</h2>

        
    </div>
</section> -->
@include('partials.reveiw-small-detail') 
<section class="tj-about-section pt-0 pb-4 mb-2">
    <div class="container">
        <div class="row">
            <!-- First Row -->
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Overview of Commercial Truck Transport</h3>
                        <p class="desc">Whether it comes to transporting standard vehicles or delivering goods through commercial trucks, all these 
                            services are accessible on the Internet easily. The industry of auto transport is increasing rapidly and has successfully 
                            spread over multiple domains and categories, offering a variety of different services. <br>
                            Ship A1 is a leading transportation company that has been in the market for 16 years, we not only offer multiple services
                             to our valuable customers. We also ensure we have gained their trust by giving our 100% to them. With advanced trailers 
                             and top-tier quality, Ship A1 has made more than 1000 successful deliveries nationwide. 
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/3b image for commercial truck transport (1).webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Second Row -->
            <div class="col-lg-4 col-md-12 order-sm-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/3a images for commercial transport.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Choosing a Truck Transport Service</h3>
                        <p class="desc">There are certain terms and conditions that you need to know before you go to search for 
                            commercial truck transport service through a reliable shipping company. Although the companies offering auto transport 
                            services are in great numbers, finding a suitable service at a market-competitive price that meets your transportation 
                            requirements is not an easy job. <br>
                            When you are looking for a commercial truck shipping service, some key points come into play affecting the overall price
                             factor and the service quality. The factors that you need to consider will determine your overall shipping journey. When 
                             transporting your vehicle some scenarios play a major role in the price and service you are getting for example distance,
                              route, and time.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
                <div class="row">           
                    <div class="col-lg-8 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one">
                            <div class="tj-section-heading">
                            <h3 class="sal-animate" 
                            data-sal="slide-left" data-sal-duration="800">Safe and Affordable Truck Transport</h3>
                                <span class="sub-title active-shape">Specialized Equipment Shipping</span>
                                <p class="desc">
                                    It is risky to transport the vehicle on 
                                    your own on certain routeways; that is why ShipA1 offers reliable commercial truck transport 
                                    service at an affordable cost. One does not need to worry again. We have an extensive network of workers 
                                    who are experts in the vehicle shipping industry. They are aware of the routes and pathways that work best 
                                    during the shipment. To add more safety and security, our team tracks your vehicle continuously during the 
                                    shipment. Another factor that is the reason behind the increase and decrease in the prices is the factor of 
                                    the weather and time period. Since the residents of the United States are blessed to experience all kinds of 
                                    weather conditions, there is one special weather when the price reaches its highest level. In winters, commercial 
                                    truck transport becomes difficult, and that is why not many car shipping companies are up for the task.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                        <div class="mt-4 rounded">
                            <div class="image-box">
                                <img class="rounded img-fluid" src="{{ asset('frontend/images/project/COMMERCIAL-SERVICE-2.webp') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                </div> -->
                <!-- <div class="container">
                    <div class="row">    
                        <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                            <div class="mt-4 rounded">
                                <div class="image-box">
                                    <img class="rounded img-fluid" src="{{ asset('frontend/images/project/COMMERCIAL-SERVICE4.webp') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-8 col-md-12 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape"> Construction Transportation</span>
                                <p class="desc">ShipA1 is one of those generous car shipping companies that give services of 
                                    commercial truck transport at reasonable rates, no matter what the time and weather of the year.
                                    ShipA1 has full command over providing well-organized and stable commercial truck transport
                                    services to people who want such a service. Apart from the pickup and drop off location and the
                                    dimensions of the truck, another main factor playing a major role in the commercial truck 
                                    shipping service is the type of trailer or truck you need to ship. The trailers can vary
                                        depending upon the commercial requirements of your business industry. We deal in all kinds of
                                        commercial truck transport so that you get a one-stop solution for your shipping journey. 
                                        Get your online quotes and start your journey today.</p>
                            </div>
                        </div>
                    </div>
                </div>
    </div> -->
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-4 mt-2 pb-0">
    <div class="container">
        <div class="row">           
            <div class="col-lg-8 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                    <h3 class="sal-animate" 
                    data-sal="slide-left" data-sal-duration="800">Safe and Affordable Truck Transport</h3>
                        <!-- <span class="sub-title active-shape">Specialized Equipment Shipping</span> -->
                        <p class="desc">
                            We understand that It is quite risky to transport the vehicle on your own, especially on certain routes. One does not need to
                             worry again because ShipA1 offers reliable commercial truck transport service at an affordable cost. <br>
                            Ship A1 has an extensive network of workers who are experts in the vehicle shipping industry as well as aware of the 
                            routes and pathways that work best during the shipment. To add more safety and security, our team tracks your vehicle
                             continuously during the shipment. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sal-animate d-flex align-items-center justify-content-center" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded img-fluid" src="{{ asset('frontend/images/project/3c images for commercial transport.webp') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
<section class="tj-about-section pt-4 mt-4">   
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center" data-sal="slide-left" data-sal-duration="800">
            Why Choose Ship A1 Transport for Your Truck Hauling Needs?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Affordable Pricing</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                        The reason why we standout as a supreme quality truck hauling company is our stellar quality with pricing. We haul your trucks with utmost care and prompt delivery.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Country-Wide Shipping</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                        Even if you are looking to move commercial truck to a new state you won’t feel any obstacle in shipping with us. We ship all around the contiguous United States.</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Dependability You Can Count On</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                        You may feel easy knowing that your vehicles are being carried by a team of experts who work together to ensure safety and security throughout the entire procedure.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-2" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 mb-0">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">High-Tech Equipment</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                        In order to minimize the possibility of damage occurring during transit, we load, move, and unload your trucks quickly and efficiently using the newest technology and equipment.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="tj-cta-section-two">
            <div class="tj_cta_image-4 w-100 h-50"></div>
            <div class="container">
                <div class="row">  
                    <div class="col-lg-12 col-md-6">
                        <div class="tj-cta-content d-flex justify-content-around" style="bottom: 40px; z-index: 3;">
                            <div class="tj-section-heading ">
                                <span class="sub-title active-shape2"> Support Center 24/7 </span>
                                <p class="text-white mt-2">Feel Free To Contact Us For Additional Info</p>
                            </div>      
                            <div class="tj-theme-button mt-2">
                                <a class="tj-transparent-btn" href="{{ route('contactUs') }}" target="_blank">
                                    Get Support<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
</section> -->
<section class="tj-choose-us-section-service-commercial-2">

    <div class="container why-box">
        <div class="row services">
            <div class="col-12">

                <h1 class="services-h1">Factors Affecting the Price</h1>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Dimensions of the Truck</h5>
                        <p class="card-text text-dark">The size and weight of the moving vehicle is the detrimental factor that
                            brings change to the price. The trailer type also varies as per the dimensions of the truck.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Underlying Trailer Type</h5>
                        <p class="card-text text-dark">To ship a truck in a safe manner from one place to another destination,
                            you need to have a specific trailer type. For mid-size trucks a flatbed trailer is fine but not for 
                            every truck.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Pick-up and drop-off location</h5>
                        <p class="card-text text-dark">Its a no-brainer to calculate the per-mile cost of delivery. Lesser the miles more the cost & vice versa. If the route being travelled is common then also the cost will be down.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- <section class="tj-choose-us-section-service-commercial">

    <div class="container why-box">
        <div class="row">
        <div class="col-lg-8 sal-animate" data-sal="slide-right" data-sal-duration="800">
                <div class="about-content-two">
                    <div class="tj-section-heading">

                        <h2 class="title-2">Why Choose Us?</h2>
                        <p class="desc-2">
                            We have a distinct approach when it comes to the philosophy of business.<br>Our belief in
                            innovation & unique business practices differentiate us & here are the reasons why you must
                            choose us:
                        </p>
                    </div>

                    <div class="content-box d-flex align-items-center border-top">

                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">

                            </div>
                            <p class="desc-2">★ Offering wide range of shipping methods tailored to various needs, including vehicles, heavy equipment, and freight across the US.</p>
                        </div>

                        <div class="tj-icon-box">

                            <p class="desc-2">★ Providing top-notch quality service with a well-equipped and professional team dedicated to meeting customer expectations.</p>
                        </div>
                        <div class="tj-icon-box pb-4">

                            <p class="desc-2">★ Ensuring timely delivery of shipments, emphasizing reliability and efficiency in logistics.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">

                        <div class="tj-icon-box mr-3">

                            <p class="desc-2">★ Focusing on customer satisfaction by catering to their needs and maintaining loyalty through personalized service.</p>
                        </div>
                        <div class="tj-icon-box">

                            <p class="desc-2">★ Prioritizing safe and secure transportation, with a commitment to maintaining customer trust and peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/heavy-choose-1.webp') }}"
                        alt="Image">

                </div>
            </div>
        </div>
    </div>

</section> -->
<!--========== Faq Section Start ==============-->
<section class="tj-faq-section tj-faq-page pt-5">
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
                    
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Do you transport all kinds of heavy equipment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes, Ship A1 offers a variety of heavy equipment services specially tailored to your needs, whether it’s a
                        forklift, excavator, trailer, crane, etc. we are here to assist you with a 100% guarantee of quality, safety,
                        and flexible rates for your route.
                        </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much time will it take to ship my heavy equipment?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>It all depends on the type of equipment you are planning on shipping, other than that our estimated
                                        delivery time also varies on the distance, weather conditions as well and road conditions. However, if
                                        you want your heavy equipment to be delivered urgently then we would suggest you opt for expedited
                                        shipping as it’s the fastest shipping service provided by Ship A1, while it is a bit pricey it would ensure
                                        your equipment reaches you in your desired timeframe.
                                        </strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can you arrange for the loading and unloading of my equipment?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>ShipA1 can connect you with qualified heavy equipment loading and unloading service providers in your
                                    area. We can advise on the best approach based on your specific equipment and needs.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Are your equipment insured?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                Not only you will get the insurance coverage. The carrier company will provide you with 
                                insurance up to a whopping upto $1 million. As soon as you get in touch with the driver you 
                                will get the documents which are related to your insurance.  
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
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        {{-- <h2 class="section-title">Why Choose Us?</h2>
        <p class="section-description">Discover the benefits of choosing ShipA1 through our features.</p> --}}
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">24/7 Customer Support: Our customers are our top priority, which is why we offer
                         24/7 support to our customers to erase any doubt and offer tailored solutions to their needs and concerns.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">On-Time Delivery</h3>
                    <p class="slide-text">At Ship A1 we keep in mind that time is equally valuable for both our customers and our company which is why we 
                        ensure the quick delivery of your cargo as scheduled and in perfect condition.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Experienced Professionals</h3>
                    <p class="slide-text">Our highly skilled and professional carriers and staff are experts in what they do, which is handling, maintaining,
                         and easily loading your vehicle on our trailers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking</h3>
                    <p class="slide-text">Making it easy for our customers to easily track their vehicle’s current and updated status anytime and anywhere.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Refrigeration Technology</h3>
                    <p class="slide-text">Our fully equipped trailers maintain precise temperature control
                         suitable for your cargo throughout the journey</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Blog Section Start =========-->
@include('partials.blog-slider')
<!--=========== Blog Section End =========-->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> --}}
{{-- <script src="path/to/jquery.min.js"></script> --}}
{{-- <script src="path/to/owl.carousel.min.js"></script> --}}
{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io/json')
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(ipinfo) {
                        var countryCode = "us";
                        callback(countryCode);
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // for formatting/validation etc.
        });
    });
</script> --}}
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1"; // Autoplay the video
    }
</script>
{{-- <script>
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
        var currentYear = {{date('Y')}};
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
        var currentYear = {{date('Y')}};
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
            addNewVehicle();
        } else {
            addOtherVehicle();
        }
    });

    $(document).on('click', '.delete-vehicle', function() {
        $(this).closest('.vehicle-info').remove();
    });

    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var year = $('.vehicle-year').val();
            var makeId = $('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId);
            }
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
                        selectOptions += '<option value="' + model + '">' +
                            model +
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
    });
    });
</script> --}}
{{-- <script>
    document.querySelectorAll('input[type="text"]').forEach((input) => {
        input.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, "");
        });
    });
</script> --}}
{{-- <script>
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
</script> --}}
{{-- <script>
    $(document).ready(function() {
        function showError(field, message) {
            $('#' + field).addClass('error-field');
            $('#' + field + '-error').text(message).show();
        }

        function hideError(field) {
            $('#' + field).removeClass('error-field');
            $('#' + field + '-error').hide();
        }

        // Move to Step 2
        $('#step1_next').click(function() {
            var isValid = true;

            if (!$('#pickup-location').val()) {
                showError('pickup-location', 'This field is required.');
                isValid = false;
            } else {
                hideError('pickup-location');
            }

            if (!$('#delivery-location').val()) {
                showError('delivery-location', 'This field is required.');
                isValid = false;
            } else {
                hideError('delivery-location');
            }

            if (isValid) {
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
            var isValid = true;

            if (!$('#tabSelector').val()) {
                showError('tabSelector', 'This field is required.');
                isValid = false;
            } else {
                hideError('tabSelector');
            }

            if (isValid) {
                $('#step2').hide();
                $('#step3').show();
            }
        });

        // Return to Step 2
        $('#step3_previous').click(function() {
            $('#step3').hide();
            $('#step2').show();
        });
    });
</script> --}}
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
{{-- <script>
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
{{-- <script>
    $(document).ready(function() {
        $(document).on('change', '.vehicle-year, .vehicle-make', function() {
            var year = $('.vehicle-year').val();
            var makeId = $('.vehicle-make').val();
            if (year && makeId) {
                getModel(year, makeId);
            }
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
    });
</script> --}}
{{-- <script>
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