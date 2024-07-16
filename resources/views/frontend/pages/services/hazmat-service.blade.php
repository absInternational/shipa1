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
                        <h1 class="breadcrumb-title text-center">Hazmat Transport</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Hazmat</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.reveiw-site')
    <section class="tj-about-section pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sal-animate " data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Safe Handling and Storage of Hazardous Materials</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">If you have any of the substances mentioned in the category above (hazardous materials
                                 or Hazmat), it's crucial to store them correctly. Storing them improperly can be dangerous, whether
                                  you're at home, in the office, or a storage facility.
                            In a storage facility, ensure that you have Materials Safety Data Sheets (MSDS) available for your 
                            employees. These are essential resources that provide guidance on how to handle various materials.
                           
                             <!-- <h3>What is FTL ?</h3> -->
                             You can find these sheets online, but be sure to use the most recent version and print multiple copies. Offering digital copies is a good idea to ensure easy access for your employees.
                             Additionally, it's essential to label all hazardous materials with the appropriate Hazmat symbols. Different symbols correspond to each category, so ensure correct labeling for proper handling.
                             Using the right containers for storage is crucial. For example, if you're storing a liquid, invest in a proper drum. Also, consider spill control pallets to prevent extensive clean-up in case of leaks.
                        </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/hazmat-service2.webp') }}" alt="Image">
                    </div>

                </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-4 sal-animate" data-sal="slide-left" data-sal-duration="800">
            <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/hazmat-service4.webp') }}" alt="Image">
                    </div>

                </div>
                </div>
                <div class="col-lg-8 sal-animate " data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Hazmat Training</span>
                            <p class="desc">
                                <h4>7.5 Tonne Luton Van</h4>
                                According to the Hazmat Training Handbook, there are four key points to make your employees aware of:
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <ul class="ps-0">
                                            <li> <strong>General Awareness:</strong>  Employees should have a basic understanding of Hazmat safety and how your facility operates.</li>
                                            <li> <strong>Security Training:</strong>  Offer basic security awareness training for handling, storing, and transporting hazardous materials securely.</li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <ul class=" ps-0">
                                            <li> <Strong>Safety Training:</Strong>  Teach them how to respond to emergencies and prevent accidents, fostering a safety-conscious workplace culture.</li>
                                            <li> <strong>Job-Specific Training:</strong>  Provide training that is tailored to their specific roles and responsibilities.</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
</section>





              
    
    
  
<section class="tj-about-section pt-0 ">
       

       <div class="container">
           <div class="row">
               
           <h2 class="title">Hazmat Rules</h2>
           <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                   <div class="about-content-one border rounded p-4">
                       <div class="tj-section-heading">
                           <span class="sub-title active-shape">Job Procedures</span>
                           <!-- <h2 class="title">Why Choose Us?</h2> -->
                           <p class="desc">Define specific procedures and job duties for each employee,
                                and ensure they receive job-specific training.
                           </p>
                       </div>
                       
                   </div>
               </div>
               <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                   <div class="about-content-one border rounded p-4">
                       <div class="tj-section-heading">
                           <span class="sub-title active-shape">Personal Protective Gear</span>
                           <!-- <h2 class="title">Why Choose Us?</h2> -->
                           <p class="desc">Always have personal protective equipment available. Employees should inspect it 
                               before use to ensure it's safe; if damaged, replace it.</p>
                       </div>
                       
                   </div>
               </div>
           </div>

           <div class="row justify-content-center">
                
            
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Proper Use</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">In handling hazardous materials, employees should only use them for their intended purposes.
                            Avoid using substances for tasks they weren't designed for, ensuring safety and compliance.
                             
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
     
                 <div class="row full-width ps-4">
                       <div class="col-12 custom-style">
                          <h4 class=" text-center">Safety First with Ship A1</h4>
                          <p class=" text-center">At Ship A1 Transport Service, our commitment to safety extends to the transportation 
                            of hazardous materials (Hazmat). We adhere to strict regulatory guidelines and industry best practices to
                            ensure the secure and compliant transport of these materials.Our specialized team undergoes rigorous
                             Hazmat training, covering everything from proper handling and packaging to emergency response procedures.
                               With Ship A1, you can have confidence in the safe and reliable transportation of Hazmat, protecting both
                              people and the environment throughout the journey.Choose Ship A1 for safe and reliable Hazmat transport.
                           </p>
                                         <div class="tj-theme-button  text-center mt-2">
                                              <a class="tj-transparent-btn" href="http://127.0.0.1:8000/contact_us" target="_blank">
                                                  Get Quote
                                                  <i class="flaticon-right-1"></i>
                                              </a>
                                        </div>
                    </div>
                </div>

          </div>
</section>
<section class="tj-cta-section-two pt-4">
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
                                <h2 class="title-1">Hazmat Shipping Services</h2>
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
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">What is HAZMAT?</h6>
                                </div>
                            </div>
                            <p>HAZMAT, (Hazardous Material), refers to substances that can be really risky for our health, safety, 
                                and even the things we build and use—if they're not handled and transported carefully. To make sure
                                 these dangerous materials are moved safely, there are important rules and guidelines to follow.
                            Some of these rules come from organizations like IATA, ICAO, the United Nations, and others. 
                            They create regulations like the Dangerous Goods Regulations and the International Maritime Dangerous 
                            Goods Code. These rules help everyone involved in transporting these materials do it safely.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">What Counts as HAZMAT?</h6>
                                </div>
                            </div>
                            <p>Understanding the classification of hazardous materials into different classes is crucial because it
                                 guides how these materials should be treated to ensure safety during their handling and 
                                 transportation. Each class has specific rules and precautions associated with it to prevent 
                                 accidents, spills, fires, or other dangers.
                            
                                 <div class="row">
        <div class="col-md-6 mb-3">
            <ul class="list-unstyled ps-0">
                <li>★ Explosives (Class 1): These are things that can explode, like fireworks, bullets, or dynamite.</li>
                <li>★ Gases (Class 2): These are gases that can catch fire easily, like the gas in lighters or aerosol sprays.</li>
                <li>★ Flammable Liquids (Class 3): These are liquids that can easily catch fire, like gasoline or paint.</li>
                <li>★ Flammable Solids (Class 4): These are solid things that can burn, like matches or certain metals.</li>
            </ul>
        </div>
        <div class="col-md-6 mb-3">
            <ul class="list-unstyled ps-0">
                <li>★  Oxidizing Substances (Class 5): These substances can make other things catch fire more easily.</li>
                <li>★  Toxic Substances (Class 6): These are things that can seriously hurt or even kill you if you're exposed to them. Think of strong acids or poisonous chemicals.</li>
                <li>★ Radioactive Materials (Class 7): These are materials that give off harmful radiation, like some medical stuff or uranium.</li>
                <!-- <li>★ Corrosives (Class 8): These can eat away at other materials, like strong acids or batteries.</li> -->
            </ul>
        </div>
    </div>
                                 
                            </p>
                        </div>
                    </div>
                   
                </div>
                <div class="row ">
                <h2 class="title-1">How to Safely Ship HAZMAT ?</h2>
                <p>Shipping hazardous materials, or HAZMAT, requires special care to keep everyone safe. 
                    They are often moved in special tank containers.</p>
                        
                    
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Proper Packaging</h6>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Correct Labels</h6>
                                </div>
                            </div>
                            
                        </div>
                   
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Safety Data Sheets (SDS)</h6>
                                </div>
                            </div>
                            
                        </div>
                   
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="choose-us-step-item-1">
                            <div class="choose-step-box-1">
                                <div class="choose-box-1"></div>
                                <div class="step-content-1">
                                    <h6 class="title-1">Separate Containers</h6>
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
                        <!-- <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">Reliable & Trustworthy</h6>
                                <p>Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                            </div>
                        </div>
                        <div class="faq-content">
                            <div class="faq-icon">
                                <i class="fa-regular fa-check"></i>
                            </div>
                            <div class="faq-text">
                                <h6 class="title">High Quality Material</h6>
                                <p>Trage agile frameworks to provide a robust synopsis for high level overviews.</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What kind of hazardous goods can be transported?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Chemicals, flammable liquids, gases, explosives, radio-activity, and toxic substances.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What are the basic safety measures in hazmat transportation?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Proper labeling and packaging, appropriate containers, secure loading, frequent vehicle inspections, and trained drivers.</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How will hazmat transport cost be determined?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Factors that may influence the cost include the type and amount of hazmat transportation, the distance it will cover, protective measures, special instruments/equipment that might be required, and adding insurance on top of everything. Please call us for an accurate quote 1(844) 474-4721.</strong>
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