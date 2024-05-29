@extends('frontend.layouts.app')

@section('content')
<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Our Services</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        >
                        <span>
                            <span> Service</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========== breadcrumb End ==============-->

<!--========== Service Section Start ==============-->
{{-- <section class="tj-service-section-four tj-service-page">
        <div class="container-flude">
    
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> What We Do</span>
                        <h2 class="title">Logistic & Transport</h2>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="service-item-three">
                            <div class="service-image">
                                <img src="{{ asset(!is_null($service->banner_image) ? $service->banner_image : '') }}"
alt="Image" />
</div>
<div class="service-content">
    <h4><a class="title" href="{{ route('service.details', $service->slug) }}"> {{ $service->name }}</a></h4>
    <p>{!! Illuminate\Support\Str::limit($service->text_to_show, 200, '...') !!}</p>
</div>
</div>
</div>
@endforeach
</div>


</div>
</section> --}}
<section class="tj-project-section">
</section>
<section class="tj-project-section">
    <div class="tj-project-slider owl-carousel">
        @foreach ($services as $service)
        <div class="tj-project-item">
            <img src="{{ asset(!is_null($service->banner_image) ? $service->banner_image : '') }}" alt="Image" />
            <div class="arrow-icon">
                <a href="project-details.html"> <i class="fa-light fa-arrow-right"></i></a>
            </div>
            <div class="tj-project-content">
                <span class="sub-title">{{ $service->name }}</span>
                <h4><a href="project-details.html" class="title-link"> {{ $service->name }}</a></h4>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!--========== Service Section End ==============-->

<!--=========== Feature Section Start =========-->
<section class="tj-choose-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="choose-us-content-1">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape2">Why Choose Us</span>
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
                <div class="tj-input-form w-100" data-bg-image="">
                    <h4 class="title">Request a Quote</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-form">
                                <label class="d-block"> Your Name:</label>
                                <input type="text" id="yourName" name="name" placeholder="First Name" required="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-form">
                                <label class="d-block"> Your Email:</label>
                                <input type="text" id="yourEmail" name="name" placeholder=" Email" required="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-form">
                                <label class="d-block"> Your Phone:</label>
                                <input type="text" id="yourPhone" name="name" placeholder="Phone" required="" />
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
                                <input class="tj-range-1" type="range" min="400" max="7000" step="10" value="800" />
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
<section class="tj-team-section-two">
    <div class="container">
        <div class="row">
            <div class="tj-section-heading text-center">
                <span class="sub-title active-shape"> Our Workers</span>
                <h2 class="title">Our Delivery Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="tj-team-item-two">
                    <div class="image-box">
                        <img class="circule-1" src="{{ asset('frontend/images/team/team-1.png') }}" alt="Image" />
                    </div>
                    <div class="team-content text-center">
                        <h4><a class="title-link" href="team-details.html">Mike Hardson</a></h4>
                        <span class="sub-title"> Manager</span>
                    </div>
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
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                <div class="tj-team-item-two">
                    <div class="image-box">
                        <img class="circule-1" src="{{ asset('frontend/images/team/team-2.png') }}" alt="Image" />
                    </div>
                    <div class="team-content text-center">
                        <h4><a class="title-link" href="team-details.html">David Cooper</a></h4>
                        <span class="sub-title"> Co Founder</span>
                    </div>
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
            </div>
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                <div class="tj-team-item-two">
                    <div class="image-box">
                        <img src="{{ asset('frontend/images/team/team-3.png') }}" alt="Image" />
                    </div>
                    <div class="team-content text-center">
                        <h4><a class="title-link" href="team-details.html">Lucas Damian</a></h4>
                        <span class="sub-title"> Architect</span>
                    </div>
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
            </div>
        </div>
    </div>
</section>
<!--=========== Team Section End =========-->

<!--=========== Newsletter Section Start =========-->
@include('partials.newsletter')
<!--=========== Newsletter Section End =========-->
@endsection