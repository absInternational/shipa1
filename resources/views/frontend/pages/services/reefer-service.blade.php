@extends('frontend.layouts.app')
@section('title', 'Reliable Refrigerated Trucking Transport Services in USA')
@section('meta_description', 'We provide top refrigerated trucking transport services with full safety and security, delivering to your specified location across the USA.')
@section('content')
<style>
    .full-width {
        width: 100%;
    }
    .title-2 {
        color: #8fc445;
    }
    .desc-2 {
        color: white;
    }

    .custom-style {
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    .custom-style h4 {
        margin-top: 0;
    }
    .custom-style p {
        margin-bottom: 0;
    }
    .top-left-image {
        position: absolute;
        top: -25px;
        left: -25px;
        width: 100px;
        height: 100px; 
    }
    .why-box {
        border-radius: 12px;
        padding: 20px 0px;
        background: #f8f9fa;
    }
    .card- {
        /* background: #29494e; */
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
        background: url('../../img/1-background-image-Reefer-transport.webp');
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
</style>
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Reefer  Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Reefer </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.reveiw-small-detail')  
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">The World of Reefer Shipping</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">Reefer refers to refrigerated ships and shipping containers specifically designed to
                             transport goods that are sensitive to temperature fluctuations. From fruits and vegetables to meat,
                              fish, and dairy products, these vessels and containers play a crucial role in maintaining the quality
                               and freshness of the cargo they carry. <br>
                            Additionally, Cold chain logistics plays a crucial role in safeguarding the integrity of products 
                            like fresh produce, pharmaceuticals, vaccines, and more. Advocating for reefer shipping emphasizes 
                            the significance of these specialized services like: <br>
                            <ul>
                                <li>Maintaining product quality and safety</li>
                                <li>Reducing waste</li>
                                <li>Meeting the demands of consumers worldwide for fresh, high-quality goods</li>
                            </ul>                           
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/OLD/3a-image-for-Reefer-transport.webp') }}" alt="Image">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/OLD/3b-image-for-Reefer-transport.webp') }}" alt="Image">
                        </div>

                    </div>
                </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Cold Chain Logistics</span>
                        <p class="desc">
                            Cold chain logistics is a comprehensive process that encompasses temperature-controlled storage, 
                            transportation, continuous monitoring, quality control, and strict regulatory compliance. It is a 
                            highly specialized field dedicated to preserving the quality and safety of perishable goods throughout
                            their journey from production to the end consumer, making it crucial for industries reliant on 
                            maintaining product freshness and integrity. 
                            <!-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <ul class="ps-0">
                                        <li> <strong>General Awareness:</strong>  Employees should have a basic understanding of Reefer  safety and how your facility operates.</li>
                                        <li> <strong>Security Training:</strong>  Offer basic security awareness training for handling, storing, and transporting hazardous materials securely.</li>
                                        
                                    </ul>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <ul class=" ps-0">
                                        <li> <Strong>Safety Training:</Strong>  Teach them how to respond to emergencies and prevent accidents, fostering a safety-conscious workplace culture.</li>
                                        <li> <strong>Job-Specific Training:</strong>  Provide training that is tailored to their specific roles and responsibilities.</li>
                                        
                                    </ul>
                                </div>
                            </div> -->
                        </p>
                    </div>
                    
                </div>
            </div>  
        </div>
    </div>
</section>
<section class="tj-about-section pt-0 ">
    <div class="container pb-4">
        <div class="row">     
        <!-- <h2 class="title">Reefer  Rules</h2> -->
             <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Monitoring and Tracking</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">Advanced technology plays a vital role in cold chain logistics. Continuous monitoring and tracking systems are employed to keep a 
                        close eye on the environmental conditions inside the storage or transportation units.
                        </p>
                    </div>     
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Transportation</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">Once properly stored, goods must be transported while maintaining the specified temperature range. This can involve refrigerated trucks, 
                        refrigerated shipping containers, or reefer ships for international transport.</p>
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
                        <span class="sub-title active-shape">The World of Reefer Shipping</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">Ship A1 continually enhances services, providing peace of mind to businesses relying on refrigerated transport.
                            We guarantee reefer equipment availability and round-the-clock monitoring, ensuring temperature-sensitive cargo arrives in 
                            impeccable condition.
                            Our services extend beyond port delivery, offering complete cold chain end-to-end solutions. This allows businesses to 
                            delegate logistics to us, focusing on serving their customers and growing operations without cold logistics worries.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/OLD/3c-image-for-Reefer-transport.webp') }}" alt="Image">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row"> 
        <!-- <h2 class="title">Reefer  Rules</h2> -->
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Temperature-Controlled Storage</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">This is the foundational stage of the cold chain. Perishable goods, such as fruits, vegetables, dairy products, 
                        and pharmaceuticals, are stored in specialized refrigerated facilities or containers.
                        </p>
                    </div>     
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Quality Control</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">Proper handling and packaging are crucial components of cold chain logistics. Goods must be handled with care to minimize damage, 
                        especially during loading and unloading.</p>
                    </div>   
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded p-4">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Regulatory Compliance</span>
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <p class="desc">The cold chain industry operates under strict regulations and standards, particularly in sectors like food and pharmaceuticals. Compliance
                                with these regulations is essential to ensure the safety and quality of perishable products.
                        </p>
                    </div> 
                </div>
            </div>
        </div>
            <!-- <div class="row">
            <div class="col-lg-12 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Proper Use</span>
                            <p class="desc">In handling hazardous materials, employees should only use them for their intended purposes.
                                Avoid using substances for tasks they weren't designed for, ensuring safety and compliance.</p>
                        </div>  
                    </div>
                </div>  
            </div> -->
    </div>
</section>
<section class="tj-blog-standard pt-0 pb-4">
    <div class="container">
        <div class="row full-width ps-4 pt-4">
            <div class="col-12 custom-style">
                <h4 class=" text-center">Specialized Reefer Ships</h4>
                <p class=" text-center">Reefer ships, the workhorses of the cold chain industry, are specialized containerships for ferrying refrigerated containers. They differ from conventional counterparts in size, design, and power infrastructure, being smaller and equipped to power each container's cooling system. While essential for transporting delicate goods, refrigerated containers entail high running costs and regular maintenance.
                    Despite these challenges, the reefer shipping market is expanding due to the growing demand for temperature-controlled transportation. Ship A1 proudly serves customers across the states, ensuring prompt delivery and safer shipping by trained hands.
                    As a promising logistics company.</p>
                    <div class="tj-theme-button  text-center mt-2">
                        <a class="tj-transparent-btn" href="{{ route('frontend.forms.reefertrucking') }}" target="_blank">
                            Get Quote
                            <i class="flaticon-right-1"></i>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-slider">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div> 
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Advanced Refrigeration Technology:</h3>
                    <p class="slide-text">Our fully equipped trailers maintain precise temperature control
                        suitable for your cargo throughout the journey
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">On-Time Delivery:</h3>
                    <p class="slide-text"> At Ship A1 we keep in mind that time is equally valuable for both our customers and
                        our company which is why we ensure the quick delivery of your cargo as scheduled and in perfect
                        condition.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Experienced Professionals:</h3>
                    <p class="slide-text"> Our highly skilled and professional carriers and staff are experts in what they
                        do, which is handling, maintaining, and easily loading your vehicle on our trailers.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title"> Real-Time Tracking: </h3>
                    <p class="slide-text">Making it easy for our customers to easily track their vehicle’s current and updated
                        status anytime and anywhere.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support:</h3>
                    <p class="slide-text"> Our customers are our top priority, which is why we
                        offer 24/7 support to our customers to erase any doubt and offer tailored solutions to their needs and
                        concerns.</p>
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
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Which products can be shipped by reefer service?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Fresh produce, dairy, frozen foods, and pharmaceuticals.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How is the temperature managed during shipment?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Reefer containers feature leading-edge systems that allow constant monitoring and recording of the temperature, with real-time alerts of any deviation, including remote ones.
                                    Protocols include pre-cooling of containers, good packaging practices, container maintenance, security features, and temperature log review practices.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How will safety and quality in shipment be guaranteed?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This includes pre-cooled containers, proper packaging, regular maintenance, security features, and temperature log review.</strong>
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
@include('partials.blog-slider')
@endsection
@section('extraScript') 
@endsection