@extends('frontend.layouts.app')
@section('title', 'Heavy Construction Equipment Transport & Shipping in USA ')
@section('meta_description', 'Get your heavy construction equipment transport and shipping safely across the USA. Our expert services ensure timely delivery and peace of mind for your projects.')
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
        /* background: #29494e; */
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
<section class="tj-choose-us-section-service-construction">
    <div class="container mt-4">
        <div class="row mt-4">

            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">CONSTRUCTION EQUIPMENT SERVICES</h2>
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
{{-- @include('partials.reveiw-site') --}}
@include('partials.reveiw-small-detail') 
{{-- <section class="tj-about-section-four">
    <div class="container">
        <h2 class="title sal-animate text-center mb-4 pb-4" data-sal="slide-left" data-sal-duration="800">The First Stop
            Platform of Construction <br>Shipping Services</h2>
    </div>
</section> --}}
<section class="tj-about-section pt-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Construction Equipment Transport</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Construction Equipment Transport</h3>
                        <p class="desc">
                            Heavy construction equipment is one of the most prominent and most competitive sectors of the U.S. 
                            manufacturing economy involved in the making of construction equipment. Since this industry is 
                            developing in its way, the need for construction equipment transport is increasing with time. 
                            Because of this, many companies are currently in operation and business for the transportation 
                            of construction equipment, it is extremely crucial to have a dependable resource that can assure 
                            you peace of mind as well as amazing services. Ship A1, is a top leading auto shipping company that 
                            offers its services to the customer based on their needs and requirements. <br>
                            Our renowned services consist of:
                            <ul>
                                <li>Affordability</li>
                                <li>Convenience</li>
                                <li>Fast and Secure Shipping</li>
                                <li> 100% Insurance</li>
                                <li>24/7 Customer Support</li>
                                <li>Advanced Equipment</li>
                                <li>Professional and Experience Staff</li>
                            </ul>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/4b image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/4c image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Expert Heavy Hauling</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Expert Heavy Hauling</h3>
                        <p class="desc">
                            The <a class="pp-link-2" href="{{ route('frontend.pages.services.heavy-service') }}">heavy machinery </a> transport business has used technology in the best way possible. Many types of
                             haulers are identified with ShipA1. Some are constructed to haul a single car, while some are
                              developed to haul things that are incredibly long and heavy. For the mechanical edition, the 
                              truck needs a huge winch. <br>
                            For anything you need to ship, ShipA1 has advanced trucks that are designed to move it. 
                            With such a wide variety of construction equipment out there, knowing precisely what you’re
                             shipping will let ShipA1 secure you a better and more accurate Construction Equipment transport
                              quote, which, in return, will help us get your construction equipment moved a lot more quickly.

                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('partials.cta-section')
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Specialized Equipment Shipping</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Specialized Equipment Shipping</h3>
                        <p class="desc">
                            Heavy equipment hauling can be a complicated undertaking and it’s important to select a company
                             that specializes in this work. One essential factor to think about aside from the professionalism 
                             and qualifications of the auto shipping company is the high quality and ability of the machines to 
                             transport. They should have the ability to haul every load whatever the size, weight, quantity, or
                              kind of equipment. <br>
                            ShipA1, in this case, is quite competitive. We are equipped with a variety of heavy haulers used for
                             construction equipment transport that can move your heavy equipment smoothly.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/4d image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/4a image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape"> Construction Transportation</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Key Considerations for Choosing the Right Carrier</h3>
                        <p class="desc">
                            One more thing that should be considered regarding construction equipment shipping is choosing the
                             correct construction equipment transport support or company. Before the carrier service arrives, 
                             you should take the essential actions & check the shipping quotes to make sure your equipment is 
                             shielded and secured for any unfavorable conditions it may encounter during its shipment.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                Why Choose Ship A1</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Experienced</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            You should know, not every shipping company has the ability for construction equipment
                            shipping as it’s quite a daunting task and requires top-notch skilled personnel & the
                            appropriate trailers that are necessary for doing the job.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Availability of Trailers</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            For construction equipment transport the hauler must have (RGN) Removable Gooseneck
                            Trailer, Flatbeds and Expendable trailers etc. And along with having these trailers and the
                            dexterous employees we make it possible to ship your Equipment.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Specialized Handling</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Construction equipment calls for handling with precision and care. Our staff at Ship A1 is
                             specially trained in the loading and offloading requirements of heavy machinery and securing 
                             each piece of equipment during transport.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Tailor-Made Solutions</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">
                            Every construction project differs. Ship A1 offers personalized transport solutions with a 
                            customized combination of trailers and logistical expertise in order to meet the specifications 
                            of the equipment, giving flexibility and reliability.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-cta-section-two">
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
</section> --}}
<section class="tj-choose-us-section-service-commercial-3">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Factors That Determine The Price</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Dimensions of the equipment</h5>
                        <p class="card-text text-dark">We will need to evaluate the size, length etc. The permits that
                            needs to be taken and if the equipments are large we have to dismantle it first & all these
                            factors increases the price of your shipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Trailer Type</h5>
                        <p class="card-text text-dark">From a wide range of options you should choose the trailer
                            which is the most feasible for shipping. You will be guided whether a flatbed trailer is
                            suitable or not etc and will modify the price you’re paying.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">International Shipping</h5>
                        <p class="card-text text-dark">Although we don’t ship internationally, but we believe in
                            educating our customers and creating awareness. This is also among the detrimental factors
                            affect your price.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Factors That Determine The Price</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Dimensions of the equipment</h5>
                        <p class="card-text text-light">We will need to evaluate the size, length etc. The permits that
                            needs to be taken and if the equipments are large we have to dismantle it first & all these
                            factors increases the price of your shipment.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Trailer Type</h5>
                        <p class="card-text text-light">From a wide range of options you should choose the trailer
                            which is the most feasible for shipping. You will be guided whether a flatbed trailer is
                            suitable or not etc and will modify the price you’re paying.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">International Shipping</h5>
                        <p class="card-text text-light">Although we don’t ship internationally, but we believe in
                            educating our customers and creating awareness. This is also among the detrimental factors
                            affect your price.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="tj-choose-us-section-service-construction">
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
                            <p class="desc-2">★ Offering wide range of shipping methods tailored to various needs,
                                including vehicles, heavy equipment, and freight across the US.</p>
                        </div>

                        <div class="tj-icon-box">

                            <p class="desc-2">★ Providing top-notch quality service with a well-equipped and
                                professional team dedicated to meeting customer expectations.</p>
                        </div>
                        <div class="tj-icon-box pb-4">

                            <p class="desc-2">★ Ensuring timely delivery of shipments, emphasizing reliability and
                                efficiency in logistics.</p>
                        </div>
                    </div>
                    <div class="content-box d-flex align-items-center">

                        <div class="tj-icon-box mr-3">

                            <p class="desc-2">★ Focusing on customer satisfaction by catering to their needs and
                                maintaining loyalty through personalized service.</p>
                        </div>
                        <div class="tj-icon-box">

                            <p class="desc-2">★ Prioritizing safe and secure transportation, with a commitment to
                                maintaining customer trust and peace of mind.</p>
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

</section> --}}
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
                                    <strong>Yes, Ship A1 offers a variety of heavy equipment services specially tailored
                                        to your needs, whether it’s a
                                        forklift, excavator, trailer, crane, etc. we are here to assist you with a 100%
                                        guarantee of quality, safety,
                                        and flexible rates for your route.</strong>
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
                                    <strong>It all depends on the type of equipment you are planning on shipping, other
                                        than that our estimated
                                        delivery time also varies on the distance, weather conditions as well and road
                                        conditions. However, if
                                        you want your heavy equipment to be delivered urgently then we would suggest you
                                        opt for expedited
                                        shipping as it’s the fastest shipping service provided by Ship A1, while it is a
                                        bit pricey it would ensure
                                        your equipment reaches you in your desired timeframe.</strong>
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
                                    <strong>ShipA1 can connect you with qualified heavy equipment loading and unloading
                                        service providers in your
                                        area. We can advise on the best approach based on your specific equipment and
                                        needs.</strong>
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
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Not only you will get the insurance coverage. The carrier company will provide you
                                    with insurance up to a whopping upto $1 million. As soon as you get in touch with
                                    the driver you will get the documents which are related to your insurance.


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
        {{-- <div class="row">
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
        </div> --}}
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability: </h3>
                    <p class="slide-text">We offer the best rates in the market, and that too without compromising the quality of
                        our services.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Fast and Secure Shipping:</h3>
                    <p class="slide-text"> Gain access to our super speedy services like door-to-door and expedited,
                        specially tailored to the tailored needs of our customers.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">100% Insurance:</h3>
                    <p class="slide-text"> Each vehicle at Ship A1 is 100% protected to avoid unforeseen incidents</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support: </h3>
                    <p class="slide-text">We are present 24/7 for our customers to best assist them according to their
                        logistic concerns and needs.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Real-Time Tracking: </h3>
                    <p class="slide-text">Avail our real-time tracking service that allows the customer to track their shipment
                        status anytime.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Blog Section Start =========-->
@include('partials.blog-slider')
<!--=========== Blog Section End =========-->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="path/to/jquery.min.js"></script> --}}
{{-- <script src="path/to/owl.carousel.min.js"></script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#category').change(function() {
            var selectedCategory = $(this).find('option:selected').data('id');

    $.ajax({
        url: "{{ route('get.subcategories') }}",
        method: "POST",
        data: {
            "_token": "{{ csrf_token() }}",
            "category": selectedCategory
        },
        success: function(response) {
            console.log(response);
            console.log(response.length);

            var html = '';
            $('#subcategory-box').html('');

            html += "<label for='subcategory'>Subcategory</label>";
            html +=
                "<select class='nice-select form-control' id='subcategory' name='subcategory'>";
            html += "<option value='' disabled selected>Select</option>";
            $.each(response, function(index, val) {
                html +=
                    `<option value='${val.id}' style='white-space: nowrap;'>${val.name}</option>`;
            });
            html += "</select>";
            console.log('html', html);

            $('#subcategory-box').html(html);
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
        }
    });
</script> --}}
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
            var currentYear = {
                {
                    date('Y')
                }
            };
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
            var currentYear = {
                {
                    date('Y')
                }
            };
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
