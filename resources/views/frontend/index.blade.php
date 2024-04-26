@extends('frontend.layouts.app')

@section('content')
    <!--=========== Slider Section Start =========-->
    <section class="tj-slider-section">
            <div class="slider_shape"><img src="{{ asset('frontend/images/banner/shape-1.png') }}" alt="Image" /></div>
            <div class="swiper sc-slider-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/slider-1.jpg') }}">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h1 class="slider-title">Flexible Transport And Logistics Services</h1>
                                <div class="slider-desc">
                                    Explain to you how all this mistaken denouncing pleasure and praising pain was born
                                    and we will give you
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
                    <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/slider-2.jpg') }}">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h1 class="slider-title">Flexible Transport And Logistics Services</h1>
                                <div class="slider-desc">
                                    Explain to you how all this mistaken denouncing pleasure and praising pain was born
                                    and we will give you
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
                    <div class="swiper-slide" data-bg-image="{{ asset('frontend/images/slider/slider-6.jpg') }}">
                        <div class="container">
                            <div class="slider-content p-z-idex">
                                <h1 class="slider-title">Flexible Transport And Logistics Services</h1>
                                <div class="slider-desc">
                                    Explain to you how all this mistaken denouncing pleasure and praising pain was born
                                    and we will give you
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
                                    <span>Road Freight </span>
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
                                    <span>Air Freight </span>
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
                                    <span>Ocean Freight </span>
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
                        <div class="tj-service-item" data-bg-image="{{ asset('frontend/images/service/service-1.jpg') }}">
                            <div class="icon-box">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <div class="service-content">
                                <h4><a class="title-link" href="service-details.html"> Air Freight Service</a></h4>
                                <p>Long established fact that reader will be distracted by the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="tj-service-item" data-bg-image="{{ asset('frontend/images/service/service-2.jpg') }}">
                            <div class="icon-box">
                                <i class="flaticon-cargo-ship-1"></i>
                            </div>
                            <div class="service-content">
                                <h4>
                                    <a class="title-link" href="service-details.html"> Ship Transport</a>
                                </h4>
                                <p>Long established fact that reader will be distracted by the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="tj-service-item" data-bg-image="{{ asset('frontend/images/service/service-3.jpg') }}">
                            <div class="icon-box">
                                <i class="flaticon-delivery-van"></i>
                            </div>
                            <div class="service-content">
                                <h4><a class="title-link" href="service-details.html"> Road Transport</a></h4>
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
            <div class="cta-inner" data-bg-image="{{ asset('frontend/images/cta/cta-1.jpg') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-content-area">
                            <div class="cta-content">
                                <div class="cta-icon">
                                    <i class="flaticon flaticon-freight"></i>
                                </div>
                                <div class="cta-text">
                                    <h3 class="title">Would you Like to get The Best Transport Services?</h3>
                                    <p class="desc">Dapibus interdum senectus malesuada est nec morbi cursus.</p>
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
                                <span class="sub-title active-shape"> Transportation Company</span>
                                <h2 class="title">We Provide Full Range Global Logistics</h2>
                                <p class="desc">
                                    Quisque dignissim enim diam, eget pulvinar ex viverra id. Nulla a lobortis lectus,
                                    id volutpat magna. Morbi consequat porttitor fermentum. Nulla vestibulum tincidunt
                                    viverra. Vestibulum accumsan
                                </p>
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="{{ asset('frontend/images/icon/global.svg') }}" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Worldwide Service</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Lorem ipsum is simply velit anod<br />
                                    ipas aliquet enean quis.
                                </p>
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="{{ asset('frontend/images/icon/winner.svg') }}" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Certified & Awward Winner</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Lorem ipsum is simply velit anod<br />
                                    ipas aliquet enean quis.
                                </p>
                            </div>
                            <div class="ab-button-box d-flex align-items-center">
                                <div class="tj-theme-btn">
                                    <a class="tj-primary-btn" href="contact.html">
                                        Read More <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                                <div class="right-text">
                                    <img src="{{ asset('frontend/images/icon/auother.svg') }}" alt="Image" />
                                </div>
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
                            <img class="group-1 p-z-idex" src="{{ asset('frontend/images/about/ab-2.jpg') }}" alt="Image" />
                            <img class="group-shape" src="{{ asset('frontend/images/about/ab-shape.png') }}" alt="Image" />
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
                                        <input
                                            type="text"
                                            id="first"
                                            name="name"
                                            placeholder="First Name"
                                            required=""
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Your Email:</label>
                                        <input type="text" id="email" name="name" placeholder=" Email" required="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-form">
                                        <label class="d-block"> Your Phone:</label>
                                        <input type="text" id="phone" name="name" placeholder="Phone" required="" />
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
                                        <input
                                            class="tj-range-1"
                                            type="range"
                                            min="400"
                                            max="7000"
                                            step="10"
                                            value="800"
                                        />
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
                            <span class="sub-title active-shape"> Our Workers</span>
                            <h2 class="title">Our Delivery Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="tj-team-item">
                            <div class="image-box">
                                <img src="{{ asset('frontend/images/team/team-1.jpg') }}" alt="Image" />
                                <div class="social-icon-box">
                                    <ul class="social-icon">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4><a class="title-link" href="team-details.html">Kevin Martin</a></h4>
                                <span class="sub-title"> Co Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="tj-team-item">
                            <div class="image-box">
                                <img src="{{ asset('frontend/images/team/team-2.jpg') }}" alt="Image" />
                                <div class="social-icon-box">
                                    <ul class="social-icon">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4><a class="title-link" href="team-details.html">David Cooper</a></h4>
                                <span class="sub-title"> Consultant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="tj-team-item">
                            <div class="image-box">
                                <img src="{{ asset('frontend/images/team/team-3') }}.jpg" alt="Image" />
                                <div class="social-icon-box">
                                    <ul class="social-icon">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4><a class="title-link" href="team-details.html">Kevin Martin</a></h4>
                                <span class="sub-title"> Co Founder</span>
                            </div>
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
                        <span class="sub-title"> logistics</span>
                        <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                    </div>
                </div>
                <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
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
                        <span class="sub-title"> logistics</span>
                        <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                    </div>
                </div>
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
                        <span class="sub-title"> logistics</span>
                        <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                    </div>
                </div>
                <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
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
                        <span class="sub-title"> logistics</span>
                        <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                    </div>
                </div>
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
                        <span class="sub-title"> logistics</span>
                        <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
                    </div>
                </div>
                <div class="tj-project-item">
                    <img src="{{ asset('frontend/images/project/project2.jpg') }}" alt="Image" />
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
                        <span class="sub-title"> logistics</span>
                        <h4><a href="project-details.html" class="title-link"> Air Freight Solution</a></h4>
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
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{ asset('frontend/images/testimonial/test.png') }}" alt="Image" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco
                                            </p>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 class="title">Kimberly Hansen</h5>
                                                    <span class="sub-title"> Manager</span>
                                                </div>
                                                <div class="testimonial-comment">
                                                    <img src="{{ asset('frontend/images/icon/comment.svg') }}" alt="Icon" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{ asset('frontend/images/testimonial/test1.png') }}" alt="Image" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco
                                            </p>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 class="title">Miah Robbani</h5>
                                                    <span class="sub-title"> Manager</span>
                                                </div>
                                                <div class="testimonial-comment">
                                                    <img src="{{ asset('frontend/images/icon/comment.svg') }}" alt="Icon" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{ asset('frontend/images/testimonial/test.png') }}" alt="Image" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco
                                            </p>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 class="title">Kimberly Hansen</h5>
                                                    <span class="sub-title"> Manager</span>
                                                </div>
                                                <div class="testimonial-comment">
                                                    <img src="{{ asset('frontend/images/icon/comment.svg') }}" alt="Icon" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{ asset('frontend/images/testimonial/test1.png') }}" alt="Image" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco
                                            </p>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 class="title">Miah Robbani</h5>
                                                    <span class="sub-title"> Manager</span>
                                                </div>
                                                <div class="testimonial-comment">
                                                    <img src="{{ asset('frontend/images/icon/comment.svg') }}" alt="Icon" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    src="https://maps.google.com/maps?width=100%25&amp;height=750&amp;hl=en&amp;q=New%20york+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                >
                </iframe>
            </div>
            <div class="tj-map-tabs" data-bg-image="{{ asset('frontend/images/banner/form-shape2.png') }}">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                London Office
                            </button>
                        </h4>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample"
                            style=""
                        >
                            <div class="accordion-body">
                                <ul class="list-gap">
                                    <li><i class="flaticon-placeholder"></i><span> Commercial Road, London</span></li>
                                    <li>
                                        <i class="flaticon-mail"></i
                                        ><a href="mailto:subai2025@gmail.com"> subai2025@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i
                                        ><a href="tel:+92(8800)-987025"> +92 (8800) - 9870 25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                Australia Office
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <ul class="list-gap">
                                    <li><i class="flaticon-placeholder"></i><span> Commercial Road ,London</span></li>
                                    <li>
                                        <i class="flaticon-mail"></i
                                        ><a href="mailto:subai2025@gmail.com"> subai2025@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i
                                        ><a href="tel:+92(8800)-987025"> +92 (8800) - 9870 25</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                Canada office
                            </button>
                        </h2>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <ul class="list-gap">
                                    <li><i class="flaticon-placeholder"></i><span> Commercial Road ,London</span></li>
                                    <li>
                                        <i class="flaticon-mail"></i
                                        ><a href="mailto:subai2025@gmail.com"> subai2025@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i
                                        ><a href="tel:+92(8800)-987025"> +92 (8800) - 9870 25</a>
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
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="tj-blog-item">
                            <div class="tj-blog-image">
                                <a href="blog-details.html"> <img src="{{ asset('frontend/images/blog/blog-1.jpg') }}" alt="Blog" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <div class="meta-date">
                                        <ul class="list-gap">
                                            <li>30</li>
                                            <li>May</li>
                                        </ul>
                                    </div>
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i><a href="#"> Admin</a></li>
                                            <li><i class="fa-light fa-comment"></i> <span> Comment (5)</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text-box">
                                    <div class="blog-header">
                                        <h4>
                                            <a class="title-link" href="blog-details.html">
                                                Guarantees varying Complexity, Long-Term</a
                                            >
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, atomorum ds sosidon ium est as Id vim rrem
                                            princi pes suas molesti interpretaris
                                        </p>
                                    </div>
                                    <div class="blog-button">
                                        <ul class="list-gap">
                                            <li>
                                                <a href="blog-details.html">
                                                    Read More <i class="fa-regular fa-arrow-right"></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="tj-blog-item">
                            <div class="tj-blog-image">
                                <a href="blog-details.html"> <img src="{{ asset('frontend/images/blog/blog-2.jpg') }}" alt="Blog" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <div class="meta-date">
                                        <ul class="list-gap">
                                            <li>12</li>
                                            <li>Feb</li>
                                        </ul>
                                    </div>
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i><a href="#"> Admin</a></li>
                                            <li><i class="fa-light fa-comment"></i> <span> Comment (5)</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text-box">
                                    <div class="blog-header">
                                        <h4>
                                            <a class="title-link" href="blog-details.html">
                                                Introduce new suas boat service in this spring</a
                                            >
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, atomorum ds sosidon ium est as Id vim rrem
                                            princi pes suas molesti interpretaris
                                        </p>
                                    </div>
                                    <div class="blog-button">
                                        <ul class="list-gap">
                                            <li>
                                                <a href="blog-details.html">
                                                    Read More <i class="fa-regular fa-arrow-right"></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                        <div class="tj-blog-item">
                            <div class="tj-blog-image">
                                <a href="blog-details.html"> <img src="{{ asset('frontend/images/blog/blog-3.jpg') }}" alt="Blog" /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-meta">
                                    <div class="meta-date">
                                        <ul class="list-gap">
                                            <li>18</li>
                                            <li>Nov</li>
                                        </ul>
                                    </div>
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i> <a href="#"> Admin</a></li>
                                            <li><i class="fa-light fa-comment"></i> <span> Comment (5)</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-text-box">
                                    <div class="blog-header">
                                        <h4>
                                            <a class="title-link" href="blog-details.html">
                                                We very careful handling the valuable goods</a
                                            >
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, atomorum ds sosidon ium est as Id vim rrem
                                            princi pes suas molesti interpretaris
                                        </p>
                                    </div>
                                    <div class="blog-button">
                                        <ul class="list-gap">
                                            <li>
                                                <a href="blog-details.html">
                                                    Read More <i class="fa-regular fa-arrow-right"></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== Blog Section End =========-->

        <!--=========== Newsletter Section Start =========-->
        <section class="tj-subscribe-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="subscribe-content-box d-flex align-items-center justify-content-between"
                            data-bg-image="{{ asset('frontend/images/banner/subscribe.png') }}"
                        >
                            <div class="subscribe-content d-flex align-items-center">
                                <div class="mail-icon">
                                    <img src="{{ asset('frontend/images/icon/email.svg') }}" alt="Icon" />
                                </div>
                                <div class="subscribe-title">
                                    <h3 class="title">Subscribe Our Newslatter</h3>
                                </div>
                            </div>
                            <div class="subscribe-form d-flex align-items-center">
                                <div class="subscribe-input">
                                    <input
                                        type="text"
                                        id="emailOne"
                                        name="emailAddress"
                                        placeholder="Email Address"
                                        required=""
                                    />
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
            </div>
        </section>
        <!--=========== Newsletter Section End =========-->
@endsection