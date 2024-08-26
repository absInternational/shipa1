@extends('frontend.layouts.app')
@section('title', 'Motorcycle Shipping Service - Free Shipping Quotes and Calculator | ShipA1')
@section('meta_description', 'Best Motorcycle shipping services in the USA, ship your vehicle countrywide or international in reasonable prices, Get Free shipping quotes - ShipA1.')
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
</style>
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Motorcyle Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Motorcyle</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-blog-standard pb-0">
   <div class="container">
           <div class="row">
                <div class="col-lg-7">
							<div class="image-container">
                                <img class="img-fluid" src="{{ asset('frontend/images/project/motorcycle-service.webp') }}" loading="lazy" alt="Motorcyle Transport">
                            </div>
                             <br>
                    <div class="text-container text-left">
                        <h3>A Cost-Efficient Way of Motorcycle Shipping</h3>
                        <p>You can find many<a class="pp-link-2" href="{{ route('welcome') }}"> motorcycle shipping companies </a>online that are providing the services nationwide, but often it becomes a nightmare for some of the people when they find that their motorcycle has not been shipped at the quoted time and then the company is demanding for hidden charges that one never knew existed. This kind of rip-off can hurt your sentiments related to the shipping service which is why ship A1 provides its customers with accurate <a class="pp-link-2" href="{{ route('form.vehicle.form.vehicle.car') }}">  shipping quotes.</a> For one to get to know about the reliable motorcycle shipping company, one needs to do a lot of research and after only getting to know what others have to say about the particular company, will you be able to know about the motorcycle shipping company and whether or not you need to trust it with your motorcycle relocation. Well, you can trust the company that has relatively a sound experience in this field, and that is ShipA1. ShipA1 has an extraordinary connection with the service of motorcycle shipping because it excels in the motorcycle shipment across the United States of America. It has managed to ship many hundreds and thousands of motorcycles and all in a very good condition because ShipA1 only provides professional service</p> 
                        
                        <br>
                       
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    
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
                    
                        <!-- <span class="dix-1"> <img src="" alt=""> </span> -->
                        <div class="tj-input-form w-100" data-bg-image="">
                            <h4 class="title text-center">Motorcycle Quote!</h4>
                            <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform"
                                id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                                enctype="multipart/form-data">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <input type="hidden" name="vehicle_opt" value="vehicle" hidden>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Name:</label>
                                            <input type="text" id="name" name="name" placeholder="Name"
                                                required="" />
                                            <small id="errName" class="err-style"></small>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-4 col-lg-4">
                                        <div class="single-input-field">
                                            <label class="d-block text-white">Phone:</label>
                                            <input class="form-control" required name="phone" type="tel"
                                                placeholder="Phone">
                                            <label class="error-message" id="Custo_Phone-error">This field is required.</label>
                                        </div>
                                    </div> --}}
                                    <!-- <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Phone:</label>
                                            <input type="tel" id="phone" name="phone" placeholder="Number"
                                                required="" />
                                            <small id="errPhone" class="err-style"></small>
                                        </div>
                                    </div> -->
                                    <div class="col-md-4">
                                            <div class="input-form">
                                                <label class="d-block">Phone:</label>
                                                <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                                                    required="" />
                                                <small id="errPhone" class="err-style"></small>
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="input-form">
                                            <label class="d-block">Email:</label>
                                            <input type="email" id="email" name="email" placeholder="Email "
                                                required="" />
                                            <small id="errEmail" class="err-style"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row select-bm">
                                    <div class="col-md-12 text-center">
                                        <h4 class="text-white">Motorcycle Information</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label> Year</label>
                                            <select class="nice-select vehicle-year" name="year[]" id="year">
                                                <option value="" disabled selected>Select</option>
                                                @php
                                                    $currentYear = date('Y');
                                                    for ($year = $currentYear; $year >= 1936; $year--) {
                                                        echo "<option value='$year'>$year</option>";
                                                    }
                                                @endphp
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select">
                                            <label>Make</label>
                                            <input type="text" id="make" name="make[]" placeholder="Make"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-form tj-select vehicle-model-div">
                                            <label>Model</label>
                                            <input type="text" id="model" name="model[]" placeholder="Model"
                                                required="" />
                                        </div>
                                    </div>
                                </div>

                                <a class="add-car" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                    Vehicle</a>

                                <div id="vehicles-container">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                            <select class=" " id="trailer_type" name="trailer_type">
                                                <option value="1" selected>Open Carrier</option>
                                                <option value="2">Enclosed Carrier</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="condition" class="text-white">Condition</label>
                                            <select class=" " id="condition" name="condition">
                                                <option value="1" selected>Running</option>
                                                <option value="2">Non Running</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-form">
                                            <label class="d-block mb-0"> Pickup Location:</label>
                                            <input type="text" id="pickup-location" name="origin"
                                                placeholder="" required="" />
                                            <small id="errOLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-form">
                                            <label class="d-block  mb-0"> Delivery Location:</label>
                                            <input type="text" id="delivery-location" name="destination"
                                                placeholder="" required="" />
                                            <small id="errDLoc" class="err-loc"></small>
                                            <ul class="suggestions suggestionsTwo"></ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-form">
                                    <label class="d-block text-white"> Image:</label>
                                    <input class="form-control image_input" type="file" accept="image/*" multiple
                                        onchange="previewImages(event)">
                                    <div class="image-preview-container" id="imagePreviewContainer"></div>
                                    <!-- <input class="form-control  image_input" type="file" id="image" name="image"
                                            placeholder="Upload File" /> -->
                                </div>


                                <div class="row">
                                    <di class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-check-input " type="checkbox" id="modification"
                                                name="modification" value="1" />
                                            <label class="form-check-label text-white ms-4" for="modification">
                                                Modified?</label>
                                        </div>

                                        <div class="input-form div-modify_info" style="display: none;">
                                            <label class="d-block"> Modification Information:</label>
                                            <input class="" type="text" id="c" name="modify_info"
                                                placeholder="Modification" />
                                        </div>
                                    </di>
                                    <di class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="available_at_auction"
                                                name="available_at_auction" value="1" />
                                            <label class="form-check-label text-white" for="available_at_auction">
                                                Auction?</label>
                                        </div>

                                        <div class="input-form div-link mt-3" style="display: none;">
                                            <label class="d-block"> Enter Link:</label>
                                            <input class="form-control" type="url" id="link" name="link"
                                                placeholder="Link" />
                                        </div>
                                    </di>
                                </div>

                                <div class="tj-theme-button text-center mt-3">
                                    <button class="tj-submit-btn" type="submit" value="submit">
                                        Calculate Price <i class="fa-light fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                </div>
           </div>
               <div class="row full-width">
                     <div class="col-12 custom-style">
                         <h4 class=" text-center">Delivering Motorcycles Promptly Nationwide</h4>
                         <p class=" text-center">Many professionals truckers are a part of ShipA1, and that is the main reason behind the on-time delivery of motorcycles. Another way to look into what services look like in a particular company, you can always look at their feedback section, testimonials, and their rating to know about their services. ShipA1 and its motorcycle shipping are famous around the nation, and that is why you will always find satisfied customers when it comes to ShipA1 motorcycle shipping. Since ShipA1 has its own quality standards, it believes that the customers should be given a proper service across the nation.</p>
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
<section class="tj-about-section pt-0">
        <div class="container pb-4">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Affordable and Secure Shipping</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            If you are worried about the increased rates of the motorcycle shipping, and you don’t want to continue 
                            the shipment because of that fear, then you don’t have to worry because the shipment is made on the 
                            basis of stable rates because ShipA1 believes in giving a quality offer to the customers rather than
                             using the opportunity against them. <br> ShipA1 takes into account everything that can be a potential threat 
                             to the safety and security of the motorcycle, and that is the reason it has maintained the status of 
                             shipping the motorcycles with ultimate care and attention.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/MOTORCYCLE-1.webp') }}" alt="Image">
                        </div>
                        <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                    </div>
                </div>
            </div>
        </div>
        @include('partials.cta-section')
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/MOTORCYCLE-2.webp') }}" alt="Image">
                        </div>
                        <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Stress-Free Motorcycle Shipping</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            You can ride your bike at a particular location, but it involves risk and demands specific information 
                            about routes and places, but with ShipA1 there is no risk involved because they are well aware of all 
                            the things that are necessary for the shipment of motorcycles. <br> Huge pressure will be lifted off both 
                            physically and mentally once you ship your motorcycle with the ShipA1 and you will notice that it was 
                            not a bad idea trusting ShipA1 with your needs of motorcycle shipping from one state to another of the 
                            USA.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Secure Shipment</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            The shipment of your vehicle is handled with utmost care and in a completely guarded way with us.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded-5 p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Affordable Price</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            The combination of affordable price & timely vehicles delivery is what make our services unique and special.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
{{-- @include('partials.reveiw-site') --}}
<section class="tj-choose-us-section-service-commercial-2">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Car Hauling Services</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Enclosed Carrier</h5>
                        <p class="card-text text-dark">Although a bit expensive, it is a safe way to get your car 
                            transported. Enclosed carrier guards your car against the external environment such as 
                            weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Open Trailer</h5>
                        <p class="card-text text-dark">Although a bit expensive, it is a safe way to get your car transport. Enclosed carrier guards your car
                             against the external environment such as weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Expedited Shipping</h5>
                        <p class="card-text text-dark">If you are looking to move quickly to a new place and
                             need your car moved along with you then expedited shipping service must be your first choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Car Hauling Services</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Enclosed Carrier</h5>
                        <p class="card-text text-light">Although a bit expensive, it is a safe way to get your car transported. Enclosed carrier guards your car against the external environment such as weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Open Trailer</h5>
                        <p class="card-text text-light">Although a bit expensive, it is a safe way to get your car transport. Enclosed carrier guards your car against the external environment such as weather ailments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Expedited Shipping</h5>
                        <p class="card-text text-light">If you are looking to move quickly to a new place and need your car moved along with you then expedited shipping service must be your first choice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
                                    How much does it cost to ship  Motorcycle?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The price to send  Motorcycle will depend on distance, the type of car shipping, open or enclosed,
                                     and any other services that might be necessary, such as an expedited service.
                                     Local hauling is usually around $200 to $600, and coast-to-coast shipping would
                                     run from $600 to $1500. Please feel free to contact us with the details so we can provide you with an exact quote for your shipment.

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
                                At Ship A1, we have the convenience of free quotes that we offer to all our customers online.<br>You can call our direct 
                                number<a class="pp-link-2" href="#"> 1 (844) 474-4721</a> for an instant quote.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long does it take for  Motorcycle to be shipped?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The time it will take to ship  Motorcycle is dependent on the distance of shipment, method of
                                    shipment, and demand at the point of shipment. The conveyance of local units,
                                    which is up to a few hundred miles, may take up to 1-3 days. And you should
                                    consider that cross-country shipment usually takes 5 to 10 days. you will
                                    always know where your shipment is.

                                    </div>
                                </div>
                            </div> 
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-choose-us-section-service-car-2">
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
                        <img class="p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}"
                            alt="Image">
                    </div>
                    <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/vehicle-detail-page.webp') }}"
                        alt="Image">

                </div>
            </div>
        </div>
    </div>

</section> --}}
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