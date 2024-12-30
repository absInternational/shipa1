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
        background: #ffffff;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 15px;
        box-shadow:0 5px 30px 0 rgba(35,43,54,.3);
        }
    .services {
        text-align: center;
        border-radius: 12px;
        padding: 10px 30px 0px 30px;
    }
    .services-h1 {
        text-align:center;
        margin-bottom: 50px;
    }
    .why-choose-us-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }
    .why-choose-us-slider {
        background: url('/img/1-background-image-construction-equipment.webp');
        padding: 60px 0;
        background-color: #f9f9f9;
        position: relative;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: 1;
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
    .about-content-one {
            overflow: hidden;
    }
    .hover-effect:hover .overlay {
        opacity: 1;
    }
    .hover-effect:hover .desc {
        color: white;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #062e39d4; 
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .tj-section-heading {
        position: relative;
        z-index: 2; 
    }
    .sub-title,
    .desc {
        transition: color 0.3s ease;
    }
</Style>
<section class="tj-choose-us-section-service-construction">
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-6 sal-animate mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">SERVICES</span>
                        <h2 class="title">Vehicle Transportation In New York </h2>
                        <p class="desc-2">
                            ShipA1’s New York car shipping services mean swift vehicle delivery in no time. 
                            Wanna find out how this magic works? Reach out to us now!
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-courier"></i>
                                <h6 class="title">Optimized Cost</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-cargo"></i>
                                <h6 class="title">Delivery on Time</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-6">
                            <div class="tj-icon-box3 text-center">
                                <i class="flaticon flaticon-agreement"></i>
                                <h6 class="title">Safety & Reliability</h6>
                            </div>
                        </div>
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
            {{-- @include('partials.multi-form-heavy') --}}
            <div class="tj-input-form mt-4 w-100" data-bg-image="">
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
                <form action="{{ route('submit.quote') }}" method="post" class="rd-mailform validate-form"
                    id="calculatePriceFrom" novalidate data-parsley-validate data-parsley-errors-messages-disabled
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
                    <div class="container mt-2">
                        {{-- <div class="route_quote_info" id="step1"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Name:</label>
                                        <input type="text" id="name" name="name" placeholder="Name" required="" />
                                        <small id="errName" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Phone:</label>
                                        <input class="ophone" type="tel" id="phone" name="phone" placeholder="Number" required="" />
                                        <small id="errPhone" class="err-style"></small>
                                        <input type="hidden" name="country_code" id="country_code" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block">Email:</label>
                                        <input type="email" id="email" name="email" placeholder="Email " required="" />
                                        <small id="errEmail" class="err-style"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Services:</label>
                                        <select>
                                            <option value="" selected="" disabled="">Service</option> 
                                            <option value="Vehicle">Vehicle Transportation</option>
                                            <option value="Heavy">Heavy Equipment</option>
                                            <option value="Freight">Freight Transportation</option>
                                            <option value="RORO">RORO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-form">
                                        <label class="">Message:</label>
                                        <br>
                                        <textarea placeholder="Enter your message" required="" class="bg-white border rounded" style="height: 100px;width: 100%;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-theme-button text-center mt-3">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Submit <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </div>
                        {{-- </div> --}}
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="tj-about-section pt-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-1 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
                        <h3 class="sal-animate" data-sal="slide-left" data-sal-duration="800">Fast & Reliable New York Car Shipping Services</h3>
                        <p class="desc">How do you transport cargo in a state that never sleeps? At ShipA1, 
                            we've offered hassle-free vehicle transport in New York for more than ten years. 
                            We provide smooth operations and punctual deliveries from the vibrant streets of
                            Manhattan to its quieter suburbs. We operate our way through New York's dynamic 
                            traffic, strict regulations, and seasonal demands. From door-to-door to terminal-to-terminal 
                            services, we take care of individuals and businesses. Trust ShipA1 with reliable and precise
                            car shipping.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-2 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/slider/1-content.webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container pb-4">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-sm-1 order-md-1 order-2 d-flex align-items-center justify-content-center sal-animate" data-sal="slide-left" data-sal-duration="800">
                <div class="mt-4 rounded">
                    <div class="image-box">
                        <img class="rounded" src="{{ asset('/frontend/images/project/4c image for construction-equipment (1).webp') }}"
                            alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 order-sm-2 order-md-2 order-1 d-flex align-items-center justify-content-center sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading">
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
    </div> --}}
</section>
@include('partials.reveiw-detail')
<section class="tj-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one">
                    <div class="tj-section-heading"><span class="sub-title active-shape">A1 Transportation
                            Company</span>
                        <h2 class="title">What Makes Us Dependable?</h2>
                        <p class="desc">Among all the shipping companies out there, factors that make us stand out
                            from the rest are:</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><img loading="lazy"
                                    src="{{ asset('frontend/images/icon/winner.svg') }}" fetchpriority="high"
                                    alt="Icon"></div>
                            <div class="ab-title">
                                <h5 class="title">Our Values</h5>
                            </div>
                        </div>
                        <p class="desc">We are a licensed Transportation company with high moral values and have
                            attained customer satisfaction through their remarks on esteemed platforms.</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-bell-concierge fa-2xl"
                                    style="color:#8fc445"></i></div>
                            <div class="ab-title">
                                <h5 class="title">Scope of Services</h5>
                            </div>
                        </div>
                        <p class="desc">Range of vehicles, we ship, is not limited to just conventional cars and
                            motorbikes.</p>
                    </div>
                    <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-shield-heart fa-2xl"
                                    style="color:#8fc445"></i></div>
                            <div class="ab-title">
                                <h5 class="title">Safety Is Our Priority</h5>
                            </div>
                        </div>
                        <p class="desc">No matter which mode of transportation you use, ShipA1 assures its customers,
                            atmost security to their assets.</p>
                    </div>
                    {{-- <div class="tj-icon-box">
                        <div class="ab-text d-flex align-items-center">
                            <div class="ab-icon"><i class="fa-light fa-handshake fa-2xl" style="color:#8fc445"></i>
                            </div>
                            <div class="ab-title">
                                <h5 class="title">Skilful & Devoted Staff</h5>
                            </div>
                        </div>
                        <p class="desc">Our team is loaded with highly experienced professionals of both customer
                            dealing and vehicle handling.</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 align-items-center justify-content-center sal-animate pt-4 mt-4"
                data-sal="slide-right" data-sal-duration="800">
                <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                    <div class="tj-icon-box2 text-center">
                        <div class="number-icon"><i class="flaticon-in-person"></i></div>
                        <div class="about-number">
                            <div class="tj-count"><span class="odometer" data-count="289">0</span>k+</div>
                            <p class="desc">Satisfied Client</p>
                        </div>
                    </div>
                    <div class="image-box"><img class="p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                            src="{{ asset('/frontend/images/slider/gif-img.webp') }}" fetchpriority="high"
                            loading="lazy" alt="Image"></div><img
                        class="group-1 p-z-idex aspect-ratio aspect-ratio-3x2 img-fluid"
                        src="{{ asset('/frontend/images/about/about-3.webp') }}" fetchpriority="high" loading="lazy"
                        alt="Image" width="1200" height="800">
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.cta-section')
<section class="tj-about-section pt-0 pb-4">
    <div class="container">
        <div class="row">
            <h2 class="title sal-animate text-center pt-4" data-sal="slide-left" data-sal-duration="800">
                Why Choose Ship A1?</h2>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Experienced</span>
                        <p class="desc">
                            Our dominance in car shipping started a decade ago but our grounding area was New York. 
                            And who can say to a service provider packed with expert shippers, skilled carriers, and high-tech haulers?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Availability of Trailers</span>
                        <p class="desc">
                            Our services depend on your personal choices. Do you want to ship your car to New York in an open or enclosed trailer? 
                            Or is it the transport from or to New York? Your car shipping smart trailers are just one call away.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Specialized Handling</span>
                        <p class="desc">
                            Stress about the roll-on/roll-off and car shipping security? Don’t worry about it. 
                            Your vehicles for shipping in New York are covered. It’s ShipA1, your trusted transport partner.
                            Your precious car is our priority.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sal-animate pt-4 mt-4" data-sal="slide-left" data-sal-duration="800">
                <div class="about-content-one border rounded-5 p-4 position-relative shadow-sm hover-effect">
                    <div class="overlay"></div>
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape">Tailor-Made Solutions</span>
                        <p class="desc">
                            What? Need smart GPS, active monitoring, fast delivery, and flexible services? Just say it. 
                            Our customized solutions are open to people in New York. This state is the dominating hub of ShipA1. 
                            So, talk to us and get tailor-made solutions today!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-choose-us-slider mb-3">
    <div class="container">
        <div class="tj-section-heading text-center">
            <h2 class="title text-white">Why Choose Us?</h2>
            <span class="sub-title active-shape">Discover the benefits of choosing ShipA1 through our features.</span>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-users icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">24/7 Customer Support</h3>
                    <p class="slide-text">What? Query from New York? We never miss it! Take advantage of our 24/7 active assistance.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-dollar-sign icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Affordability</h3>
                    <p class="slide-text">No hidden charges, no extra fares. ShipA1’s services mean cost-efficiency for all New Yorkers.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-clock icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Convenience</h3>
                    <p class="slide-text">Challenges in car shipping by ShipA1, what’s that? Try out our services and be satisfied. It’s your shipping brand.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-headset icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Door to Door</h3>
                    <p class="slide-text">We handle every step, picking up the vehicle from your location and delivering it to your destination, saving you time and effort.</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 mb-4">
                <div class="slide text-center">
                    <i class="fas fa-shield-alt icon-hover-shake" style="font-size: 50px;"></i>
                    <h3 class="slide-title">Insurance</h3>
                    <p class="slide-text">Your vehicles are 100% covered. You are partnering with ShipA1. Your cars are a luxury to us. So, sit back and relax.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function playVideo() {
        document.querySelector('.video-thumbnail').style.display = 'none';
        document.querySelector('.video-iframe').style.display = 'block';
        var iframe = document.getElementById('videoFrame');
        var videoSrc = iframe.src;
        iframe.src = videoSrc + "&autoplay=1"; 
    }
</script>
@endsection