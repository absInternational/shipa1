@extends('frontend.layouts.app')
@section('title', 'ATV or UTV Shipping Services USA - Change the Way of Shipping | ShipA1')
@section('meta_description', 'Get ATV or UTV shipping services in the USA, transport your vehicle at your holiday places before you reach without any scratch, best auto transport service.')
@section('content')
<style>
    .full-width {
        width: 100%;
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
</style>
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">ATV/UTV Transport</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> ATV/UTV</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-blog-standard pb-0 pt-4">
   <div class="container">
        <div class="row">
            <div class="col-lg-7">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('frontend/images/project/atv-urv service.webp') }}" loading="lazy" alt="Motorcyle Transport">
                        </div>
                            <br>
                <div class="text-container text-left">
                    <h3>ATV/UTV Transport Service</h3>
                    <p>Are you in search of a trustworthy ATV/UTV transport company for your shipment? Well, then you are on the right platform.
                         Ship A1 is a dominating vehicle transport company providing top-rated ATV/UTV services to its valuable customers at competitive 
                         market rates. Choosing the right company will save you from trouble, and you will have a remarkable journey. 
                        We will share some noteworthy factors that come into play whenever you plan to ship an ATV/UTV. <br> The key considerations
                         during the ATV shipment that you need to consider are:
                         <br>
                         
                            <ul>
                            <li>Convenience</li>
                            <li>Ratings</li>
                            <li>Insurance Policy and Coverage</li>
                            <li>Affordability</li>
                            </ul> 
                    </p> 
                    
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
                        <h4 class="title text-center">ATV/UTV Quote!</h4>
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
                                <!-- <div class="col-md-12 text-center">
                                    <h4 class="text-white">Motorcycle Information</h4>
                                </div> -->
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

                            <a class="add-car-1 mb-2" id="addVehicleBtn"><i class="fa fa-plus"></i> Add
                                Vehicle</a>

                            <div id="vehicles-container">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trailer_type" class="text-white">Select Trailer Type</label>
                                        <select class=" " id="trailer_type" name="trailer_type">
                                            <option value="1" selected>Open Trailer</option>
                                            <option value="2">Enclosed Carrier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="condition" class="text-white">Condition</label>
                                        <select class=" " id="condition" name="condition[]">
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
                                <!-- <input class="form-control  image_input" type="file" id="image" name="image[]"
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
   </div>
</section>
@include('partials.reveiw-small-detail') 
<section class="tj-about-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            {{-- <span class="sub-title active-shape">Insurance and Safety</span> --}}
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <h3 class="sal-animate" data-sal="slide-left" 
                             data-sal-duration="800">Insurance and Safety</h3>
                            <p class="desc">
                                Apart from the company’s experience, ratings, and shipping services, another thing that you need to consider
                                 when choosing an All-Terrain transport company is the insurance coverage. We all are vulnerable to unexpected 
                                 incidents, and all we can do is prepare ourselves beforehand to avoid any trouble in the long run, and for that,
                                  insurance coverage is essential. <br>
                                Before making any step towards the shipment process ask all the necessary questions about the insurance policy. 
                                Some shipping companies provide the full insurance package. However, it is smart to ask beforehand so to free yourself 
                                in case there is any mishap during the shipment. You can also have a conversation with the company’s representative 
                                if you are having any problems understanding the process.
                                </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="mt-4 rounded">
                        <div class="image-box">
                            <img class="rounded" src="{{ asset('frontend/images/project/ATV-1.webp') }}" alt="Image">
                        </div>
                        <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->

                    </div>
               </div>
            </div>
        </div>
        <div class="container pb-4">
            <div class="row">    
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                 <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('frontend/images/project/ATV-2.webp') }}" alt="Image">
                    </div>
                    <!-- <img class="group-1 p-z-idex" src="{{ asset('frontend/images/project/Untitled design (31).png') }}" alt="Image"> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        {{-- <span class="sub-title active-shape">Pricing Factors Consideration</span> --}}
                        <!-- <h2 class="title">Why Choose Us?</h2> -->
                        <h3 class="sal-animate" data-sal="slide-left" 
                        data-sal-duration="800">Pricing Factors Consideration</h3>
                    <p class="desc">
                        At last, you cannot erase the price factor from the list when talking about
                         All-Terrain transportation. The price for the shipment of an ATV depends on several factors such as <br>
                         <ul>
      
                            <li>Weight</li>
                            <li>Size</li>
                            <li>Shape</li>
                            <li>Distance traveled</li>
                            </ul> 
                            Apart from that, other things that can impact the price include fuel costs, the time of the year, and other additional
                             insurance. 
                            Weight is the main factor affecting the price of the shipment. Considering all these factors, Ship A1 is the all-in-one 
                            choice for anyone willing to ship their All-Terrain vehicle. You can get our services all over the United States with ease. 
                            So, get your quotes and start your car transport journey with us.

                    </p>
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
        @include('partials.cta-section')
        <div class="container">
            <div class="row">
                <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                    Why Choose Us?</h2>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Access To All Locations</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            We currently ship all around the contiguous United States and in case of ATV/UTV 
                            it’s easier to reach locations because the trailers aren’t big in size for atv shipping.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Types of ATV/UTV</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                            A wide range of ATV’s and UTV’s could be shipped with the car hauling method 
                            of door to door transport such as Quads, Sports ATV etc.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Advanced Trailers</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                                We offer our customers 2 premium and most convenient modes of trailers that are enclosed and open. Enclosed trailers are expensive 
                                as they ensure the protection of your vehicle and ship it in a closed trailer whereas an open trailer is the most cost-effective and standard mode of shipping your vehicle,
                                 in this mode your vehicle will be shipped in an open trailer with utmost care and safety. 
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 sal-animate pt-4 mt-0" data-sal="slide-left" data-sal-duration="800">
                    <div class="about-content-one border rounded p-4">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape">Tracking System</span>
                            <!-- <h2 class="title">Why Choose Us?</h2> -->
                            <p class="desc">
                                When transporting with Ship A1 you will have the benefit of tracking
                                 your shipment from anywhere and anytime.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row full-width ps-4 pt-4">
                <div class="col-12 custom-style">
                    <h4 class=" text-center">Company Performance and Quality</h4>
                    <p class=" text-center">The first thing that you need to consider when selecting any auto transport company 
                        for your ATV shipment is to check the overall company’s performance. For that, you can visit the company’s platform
                         and check customer reviews and ratings. Our customer reviews are 100% original and genuine, they will give you a clear idea 
                         of where the company stands in the shipping industry. You will find everything you need for your All-Terrain Vehicle Transport
                          on our platform.
                        Ship A1 stands tall in the auto transportation business because we ensure the quality of our customer’s
                         vehicles and keep them as our top priority. So what are you waiting for? Get a free quote from our website 
                         now and get a rough estimate of your shipment!
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
{{-- @include('partials.reveiw-site') --}}
<section class="tj-choose-us-section-service-atv-utv-2">
    <div class="container why-box">
        <div class="row services">
            <div class="col-12">
                <h1 class="services-h1">Things To Keep In Mind</h1>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Transit Insured</h5>
                        <p class="card-text text-dark">One of the things that is a make or break for the customer is whether he 
                            would get insurance or not?. At ShipA1 you will get a full insurance coverage during transit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Suspension for Safer Transit</h5>
                        <p class="card-text text-dark">The ATV/UTV hauling service becomes even more safer because of the suspensions
                            our trailers are equipped with. It will nullify the road debris completely.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Tracking of ATV/UTV</h5>
                        <p class="card-text text-dark">In some of the cases we give you the system to track the activity of the
                            trucker where he has reached & how long would it take to deliver shipment?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="tj-about-section-five">
    <div class="container">
        <div class="row services">
            <h1 class="services-h1">Things To Keep In Mind</h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Transit Insured</h5>
                        <p class="card-text text-light">One of the things that is a make or break for the customer is whether he 
                            would get insurance or not?. At ShipA1 you will get a full insurance coverage during transit.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Suspension for Safer Transit</h5>
                        <p class="card-text text-light">The ATV/UTV hauling service becomes even more safer because of the suspensions
                             our trailers are equipped with. It will nullify the road debris completely.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card- h-100">
                    <div class="card-body">
                        <h5 class="card-title text-white">Tracking of ATV/UTV</h5>
                        <p class="card-text text-light">In some of the cases we give you the system to track the activity of the
                             trucker where he has reached & how long would it take to deliver shipment?</p>
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
                                    How much does it cost to ship an ATV/UTV?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The price to send an ATV/UTV will depend on distance, the type of car shipping, open or enclosed,
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
                                number<a class="pp-link" href="#"> 1 (844) 474-4721</a> for an instant quote.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long does it take for an ATV/UTV to be shipped?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    The time it will take to ship an ATV/UTV is dependent on the distance of shipment, method of
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
{{-- <section class="tj-choose-us-section-service-atv">
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