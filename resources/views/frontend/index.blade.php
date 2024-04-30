@extends('frontend.layouts.app')

@section('content')
    <!--=========== Slider Section Start =========-->
    <section class="tj-slider-section">
            <div class="slider_shape"><img src="{{ asset('frontend/images/banner/home-underline.png') }}" alt="Image" /></div>
            <div class="swiper sc-slider-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-1.webp') }}">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING & LOGISTICS SERVICES</h1>
                                <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                                customers and seeks your trust in return of our services.
                                </div>
                                <div class="tj-theme-button">
                                    <a class="tj-transparent-btn" href="contact.html">
                                        Read More <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape"></div>
                    </div>
                    <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-2.webp') }}">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING & LOGISTICS SERVICES</h1>
                                <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                                customers and seeks your trust in return of our services.
                                </div>
                                <div class="tj-theme-button">
                                    <a class="tj-transparent-btn" href="contact.html">
                                        Read More <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape"></div>
                    </div>
                    <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/home-slider-3.webp') }}">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h1 class="slider-title">RELIABLE, SECURE & VALUE FOR MONEY SHIPPING & LOGISTICS SERVICES</h1>
                                <div class="slider-desc">
                                ShipA1 has pledged to provide all-in-one auto transport solutions to all its
                                customers and seeks your trust in return of our services.
                                </div>
                                <div class="tj-theme-button">
                                    <a class="tj-transparent-btn" href="contact.html">
                                        Read More <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-shape"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="tj-service-icon-box">
                <ul class="list-gap">
                    <li>
                        <div class="service-item">
                            <div class="tj-service-icon">
                                <div class="service-icon">
                                    <i class="flaticon-delivery-van"></i>
                                </div>
                                <div class="sub-title">
                                    <span>VEHICLE <br>TRANSPORTATION</span>
                                </div>
                            </div>
                            <div class="service-arrow">
                                <a href="service-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-item">
                            <div class="tj-service-icon">
                                <div class="service-icon">
                                    <i class="flaticon-air-freight"></i>
                                </div>
                                <div class="sub-title">
                                    <span>HEAVY <br>TRANSPORTATION </span>
                                </div>
                            </div>
                            <div class="service-arrow">
                                <a href="service-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-item">
                            <div class="tj-service-icon">
                                <div class="service-icon">
                                    <i class="flaticon flaticon-ship"></i>
                                </div>
                                <div class="sub-title">
                                    <span>FREIGHT <br>TRANSPORTATION</span>
                                </div>
                            </div>
                            <div class="service-arrow">
                                <a href="service-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--=========== Slider Section End =========-->

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
                        <div class="tj-service-item" data-bg-image="{{ asset('frontend/images/service/vehicle-transport.webp') }}">
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
                        <div class="tj-service-item" data-bg-image="{{ asset('frontend/images/service/heavy-transport.webp') }}">
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
                        <div class="tj-service-item" data-bg-image="{{ asset('frontend/images/service/feright-transport.webp') }}">
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

    <!--=========== Cta Section Start =========-->
     <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/cta-auto-aucation.webp') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="flaticon flaticon-freight"></i>
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
                        <a class="tj-transparent-btn" href="contact.html">
                            Read More <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--=========== Cta Section End =========-->

    <!--=========== About Section Start =========-->
    <section class="tj-about-section">
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
                                    <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" />
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
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
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
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
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
                                    <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
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
                            <img class="p-z-idex" src="{{ asset('frontend/images/about/ab-1.jpg') }}" alt="Image" />
                        </div>
                        <img class="group-1 p-z-idex" src="{{ asset('frontend/images/about/kuch-be-rak-dy-is-ka-nam.webp') }}"
                            alt="Image" />
                        <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}"
                            alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End =========-->

    <!--=========== Feature Section Start =========-->
    <section class="tj-choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2"> Why Choose Us</span>
                            <h2 class="title">We are the Future of Cargo & Logistics</h2>
                            <p class="desc">
                                Quisque dignissim enim diam, eget pulvinar ex viverra id. Nulla a lobortis lectus,
                                id volutpat magna. Morbi consequat porttitor
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
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="{{ asset('frontend/images/banner/form-shape.png') }}">
                        <h4 class="title">Request a Quote</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-form">
                                    <label class="d-block"> Your Name:</label>
                                    <input type="text" id="first" name="name" placeholder="First Name"
                                        required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Your Email:</label>
                                    <input type="text" id="email" name="name" placeholder=" Email"
                                        required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Your Phone:</label>
                                    <input type="text" id="phone" name="name" placeholder="Phone"
                                        required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-input-range">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <label> Distance (miles):</label>
                                        <output class="output"></output>
                                    </div>
                                    <input class="tj-range-1" type="range" min="400" max="7000"
                                        step="10" value="800" />
                                </div>
                            </div>
                        </div>
                        <div class="row select-bm">
                            <div class="col-md-6">
                                <div class="input-form tj-select">
                                    <label> Freight Type:</label>
                                    <select class="nice-select">
                                        <option value="2">Select</option>
                                        <option value="1" disabled>Optimized Cost</option>
                                        <option value="2">Delivery on Time</option>
                                        <option value="3">Cargo</option>
                                        <option value="4">Safety & Reliability</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form tj-select">
                                    <label> Load:</label>
                                    <select class="nice-select">
                                        <option value="2">Select</option>
                                        <option value="1" disabled>Optimized Cost</option>
                                        <option value="2">Delivery on Time</option>
                                        <option value="3">Cargo</option>
                                        <option value="4">Safety & Reliability</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tj-theme-button">
                            <button class="tj-submit-btn" type="submit" value="submit">
                                Submit Now <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Feature Section End =========-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Our Services</span>
                        <h2 class="title">Pick Your Transport Type</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->

    <!--=========== Project Section Start =========-->
    <section class="tj-project-section">
        <div class="tj-project-slider owl-carousel">
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> logistics</span>
                    <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">CAR</span>
                    <h4><a href="project-details.html" class="title-link"> Sedan, SUV, Pickup etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> MOTORCYCLE</span>
                    <h4><a href="project-details.html" class="title-link"> Mopeds, ATV, Power Sports etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> HEAVY EQUIP.</span>
                    <h4><a href="project-details.html" class="title-link"> Trucks, Bulldozers, Mixer etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title">RORO</span>
                    <h4><a href="project-details.html" class="title-link">Cars, Trucks, trailers etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> ATV/UTV</span>
                    <h4><a href="project-details.html" class="title-link">Sport, Quads, Military etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> CONSTRUCTION</span>
                    <h4><a href="project-details.html" class="title-link"> Cranes, Drills, Grinders etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> FARM</span>
                    <h4><a href="project-details.html" class="title-link">Tractor, Planter, Baler etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/excavator-pickup.webp') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> EXCAVATOR</span>
                    <h4><a href="project-details.html" class="title-link"> Digger, Driller, Miners etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> TRUCKS</span>
                    <h4><a href="project-details.html" class="title-link">Commercial, Dump Trucks etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Reefer</span>
                    <h4><a href="project-details.html" class="title-link"> frozen , refrigerated etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Hazmat</span>
                    <h4><a href="project-details.html" class="title-link"> Explosive, Flammable, etc.</a></h4>
                </div>
            </div>
            <div class="tj-project-item">
                <img src="{{ asset('frontend/images/project/project1.jpg') }}" alt="Image" />
                <div class="arrow-icon">
                    <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
                </div>
                <div class="tj-project-content">
                    <span class="sub-title"> Dry van</span>
                    <h4><a href="project-details.html" class="title-link">palletized, boxed, freight etc.</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->

    <!--=========== Testimonial Section Start =========-->
    <section class="tj-testimonial-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Client Feedback</span>
                    <h2 class="title">Our Client Reviews</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper tj-testimonial-slider">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{ asset('frontend/images/icon/comment.svg') }}"
                                                    alt="Icon" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    @for ($i = 0; $i < (int) floor($review->rating); $i++)
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p>{{ $review->description }}</p>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 class="title">{{ $review->person_name }} </h5>
                                                    <span
                                                        class="sub-title">{{ !is_null($review->created_at) ? \Carbon\Carbon::parse($review->created_at)->format('M d, Y') : '' }}</span>
                                                </div>
                                                <div class="testimonial-comment">
                                                    @if ($review->site_name == 'BBB')
                                                        <img src="{{ asset('frontend/images/testimonial/bbb.png') }}"
                                                            alt="Image" />
                                                    @elseif ($review->site_name == 'Google')
                                                        <img src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                            alt="Image" />
                                                    @else
                                                        <img src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                            alt="Image" />
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <!--=========== Map Section Start =========-->
    <section class="tj-map-section">
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.167331138309!2d-76.66251388426676!3d39.496062943506464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81261c3eae243%3A0x81e995e93023e64a!2s201%20International%20Cir%20STE%20230%2C%20Hunt%20Valley%2C%20MD%2021030%2C%20USA!5e0!3m2!1sen!2s!4v1649863458559!5m2!1sen!2s">
            </iframe>
        </div>
        <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Contact us
                        </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <ul class="list-gap">
                                <li><i class="flaticon-placeholder"></i><span> 201 International Cir STE 230, Hunt Valley, MD 21030-1344</span></li>
                                <li>
                                    <i class="flaticon-mail"></i><a href="mailto:info@shipa1.com">
                                    shawntransport@shipa1.com</a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i><a href="tel:1 (844) 474-4721"> 1 (844) 474-4721</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Map Section End =========-->

    <!--=========== Blog Section Start =========-->
    <section class="tj-blog-section">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Latest News</span>
                    <h2 class="title">Latest News & Blog</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="tj-blog-item">
                            <div class="tj-blog-image">
                                <a href="{{ route('blog.details', $blog->slug_name) }}"> <img
                                        {{-- src="{{ asset($blog->post_image) }}" alt="Blog" /></a> --}}
                                        src="{{ !is_null($blog->post_image) ? $blog->post_image : '' }}" alt="Blog" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <div class="meta-date">
                                        <ul class="list-gap">
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</li>
                                            <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</li>
                                        </ul>
                                    </div>
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i><a href="#">
                                                    {{-- {{ $blog->user->name }}</a></li> --}}
                                                    {{ !is_null($blog->user->name) ? $blog->user->name : '' }}</a></li>
                                                    
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text-box">
                                    <div class="blog-header">
                                        <h4>
                                            <a class="title-link" href="{{ route('blog.details', $blog->slug_name) }}">
                                                {{-- {{ $blog->post_name }} --}}
                                                {{-- {{ Illuminate\Support\Str::limit($blog->post_name, 20, '...') }} --}}
                                                {{ !is_null($blog->post_name) ? Illuminate\Support\Str::limit($blog->post_name, 20, '...') : '' }}
                                            </a>
                                        </h4>
                                        {{-- <p>
                                            {!! Illuminate\Support\Str::limit($blog->post_description, 200, '...') !!}
                                        </p> --}}
                                    </div>
                                    <div class="blog-button">
                                        <ul class="list-gap">
                                            <li>
                                                <a href="{{ route('blog.details', $blog->slug_name) }}">
                                                    Read More <i class="fa-regular fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========== Blog Section End =========-->

    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection
