@extends('frontend.layouts.app')

@section('content')

<style>
    .full-width {
    width: 100%;
}
.why-box {
    border-radius: 12px;
    padding: 40px 0px;
    background: #183c46eb;
}
.title-2 {
    color: #8fc445;
}

.desc-2 {
    color: white;
}

.card- {
        background: #29494e;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    .services {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    padding: 10px 10px 30px 10px;
    background-color: #9d9e9f14;
}

.services-h1 {
    text-align:center;
    text-decoration: overline;
    margin-bottom: 50px;
    color: #8FC445;
}
.card- {
        background: #29494e;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Dry Van Transport</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Dry Van</span>
                            </span>
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
                                <h2 class="title-1">Dry-van Shipping Services</h2>
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="contact.html">
                                    Get Quote <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Introduction</h6>
                                </div>
                            </div>
                            <p>
                            You may have heard of dry van transportation services or freight shipping in your lifetime or when you seek solutions to reallocation.
                            In this comprehensive guide, we will explain in detail about dry van shipping so that you can make wise decisions while thinking about your reallocation or moving your goods.
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
                                    <h6 class="title-1">What is Dry Van Shipping?</h6>
                                </div>
                            </div>
                            <p>
                            Freight shipping, often referred to as "box trailer" or "dry van transport," is a fundamental and versatile method for moving goods in the freight transportation industry.
                            Dry van shipping is a widely preferred choice due to its versatility and cost-effectiveness. It is particularly well-suited for transporting goods that do not necessitate specific temperature conditions or specialised handling. Dry van trailers offer the convenience of easy loading and unloading at various locations, including warehouses, distribution centres, and shipping ports.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="row ">
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

            </div>
</section>

<section class="tj-cta-section-two">
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
                                <a class="tj-transparent-btn" href="http://127.0.0.1:8000/contact_us" target="_blank">
                                    Get Support<i class="flaticon-right-1"></i>
                                </a>
                            </div>
                          

                        </div>
                        
                        
                    </div>
                </div>
            </div>
</section>

    <section class="tj-about-section pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">LTL and FTL Frieght Shipping</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Shipping can be a daunting task, especially when it comes to choosing between FTL and LTL.
                             Both methods have their own unique advantages and disadvantages, Which is why it's important to 
                             understand the differences between them because ate Day Dispatch we empower you to choice with your 
                             own needs.
                           
                             <h3>What is FTL ?</h3>
                             If you have a large amount of freight that needs to be shipped, FTL is probably the best option for you. With FTL shipping, you'll have access to an entire trailer that's dedicated solely to your freight.
This means that your shipment won't be mixed with other shipments, and it'll be delivered directly to its destination.
However, FTL shipping can be more expensive than LTL, especially if you don't have enough freight to fill an entire trailer.
FTL carriers typically base their rates on industry capacity, transportation type, and fuel costs.
FTL carriers are often less strict about charging for accessorial,
                        </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                  <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <!-- <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/Untitled design (32).png') }}" alt="Image">
                    </div> -->
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image">

                  </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                  <div class="about-group-image2 d-flex flex-wrap align-items-start flex-column mt-4">
                    <div class="image-box">
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/Untitled design (32).png') }}" alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                  </div>
                </div>
                <div class="col-lg-8 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">LTL and FTL Frieght Shipping</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            <h3>What is LTL ?</h3>
                            If you have a smaller shipment that doesn't require an entire trailer, LTL might be a better option. With LTL shipping, your shipment will be combined with other shipments from various businesses.
This means that your shipment might be loaded and unloaded multiple times before reaching its final destination, which can result in longer delivery times.
However, LTL shipping can be more cost-effective than FTL, especially if you're shipping smaller quantities of freight.
LTL carriers, use the National Motor Freight Traffic Association's freight classification system to determine rates.
LTL carriers are more likely to charge extra fees for any disruptions or delays in the flow of freight movement.
Hence, the choice between FTL and LTL comes down to the size and type of your shipment, as well as your budget and timeline.
By understanding the differences between these two methods, you can make an informed decision that meets your specific shipping needs.</p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
</section>





              
    <section class="tj-about-section pt-0">
       

        <div class="container">
            <div class="row">
                
            
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Materials Used</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Dry van trailers are typically constructed from various materials, including galvanised steel, aluminium, 
                            hardwood, or iron. The choice of material can impact the trailer's durability, weight, and cost.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Limitations</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Despite various benefits, the shippers must consider the following limitations and discuss them with the
                             customer service team of the logistic company while shipping their valuable assets.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                
            
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">No Climate Control</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            Unlike refrigerated containers, often referred to as "reefers," dry vans do not have climate control capabilities. This means they are not equipped to maintain specific temperature conditions within the trailer. Therefore, dry van 
                            shipping is best suited for goods that do not require temperature-sensitive handling, such as frozen or refrigerated items.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Enclosed Container</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            One of the defining features of dry van shipping is the use of fully enclosed trailers. These trailers have walls, a roof, and a floor, creating a sealed container to protect cargo from external elements. 
                            This enclosure provides a high level of security against weather conditions, dust, and theft. Dry van shipping involves sealed containers attached to semi-trucks. </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    @include('partials.reveiw-site')
    <section class="tj-about-section-five">
    <div class="container">
        <div class="row services ">
            <h1 class="services-h1">Common Sizes</h1>
            <div class="col-12 col-md-6 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">28' (pup trailer)</h5>
                        <p class="card-text text-light">
                            <ul class="list-unstyled ps-0 text-light">
                                <li>★ Length: 8.5 metres (28 feet)</li>
                                <li>★ Width: 2.4 metres</li>
                                <li>★ Height: 2.7 metres</li>
                                <li>★ Approximate Load Capacity:
                                Typically, pup trailers can carry up to 14 pallets.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                    <h5 class="card-title text-white">48' Dry Van:</h5>
                        <p class="card-text text-light">
                            <ul class="list-unstyled ps-0 text-light">
                                <li>★ Length: 14.6 metres (48 feet)</li>
                                <li>★ Width: 2.59 metres</li>
                                <li>★ Height: 4 metres</li>
                                <li>★ Approximate Load Capacity:
                                These trailers can accommodate around 24 pallets of cargo.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                    <h5 class="card-title text-white">53' Dry Van:</h5>
                        <p class="card-text text-light">
                            <ul class="list-unstyled ps-0 text-light">
                                
                                <li>★ Length: 16 metres (53 feet)</li>
                                <li>★ Width: 2.59 metres</li>
                                <li>★ Height: 2.59 metres</li>
                                <li>★ Approximate Load Capacity:
53-foot dry vans are among the largest and can carry
approximately 26 pallets.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                    <h5 class="card-title text-white">Straight or Box Truck:</h5>
                        <p class="card-text text-light">
                            <ul class="list-unstyled ps-0 text-light">
                                <li>★ Dimensions can vary, but a common size is approximately:</li>
                                <li>★ Length: 7.3 metres</li>
                                <li>★ Width: 2.4 metres</li>
                                <li>★ Height: 2.59 metres</li>
                                <li>★ Approximate Load Capacity:
                                       These trucks can typically handle payloads of up to
                                       4,500 kilogrammes.
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
                                    <h6 class="title">Customer Service</h6>
                                </div>
                            </div>
                            <p>
                            Professional & responsive customer service available 24/7.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Range Services</h6>
                                </div>
                            </div>
                            <p>
                            A wide range of services such as open, enclosed & expedited.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Prompt Delivery</h6>
                                </div>
                            </div>
                            <p>
                            Prompt delivery due to efficient use of trailers.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Experienced Truckers</h6>
                                </div>
                            </div>
                            <p>
                            Legion of truckers available with years old network.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="choose-us-step-item">
                            <div class="choose-step-box">
                                <div class="choose-box"></div>
                                <div class="step-content">
                                    <h6 class="title">Shipping Quotes</h6>
                                </div>
                            </div>
                            <p>
                            Get online shipping quotes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--========== Chhose Section End ==============-->

<section class="tj-faq-section tj-faq-page pt-4">
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
                <div class="col-lg-6 sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="tj-faq-left-content">
                        <div class="faq-image">
                            <img src="{{ asset('frontend/images/slider/FAQ.webp') }}" alt="Image">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I prepare my vehicle for transport?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>We'll provide detailed instructions, but you'll need to remove personal belongings, as well as make sure to follow guidelines or instructions based on the chosen transport method.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I get a quote?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>At Ship A1 we have the convenience of providing free online quotes to our customers, you can check them out at www.shipa1.com</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I track my vehicle during transport?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Yes!  ShipA1 provides a user-friendly tracking system for real-time updates on your vehicle's location throughout the journey.</strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
   



@include('partials.blog-slider')
@endsection

@section('extraScript')
    <script>
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
    </script>
    @endsection