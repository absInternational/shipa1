@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Vehicle - Golf Cart</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> Vehicle - Golf Cart</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <section class="tj-choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="{{ asset('frontend/images/banner/form-shape.png') }}">
                        <h4 class="title">Instant Golf Cart Shipping Quote!</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block"> Your Name:</label>
                                    <input type="text" id="first" name="name" placeholder="Full Name"
                                        required="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block"> Phone:</label>
                                    <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                        required="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form">
                                    <label class="d-block"> Email Address:</label>
                                    <input type="email" id="email" name="email" placeholder="Your Email Address"
                                        required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Pickup Location:</label>
                                    <input type="text" id="pickup-location" name="pickup-location"
                                        placeholder="Ex: 90005 Or Los Angeles" required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Delivery Location:</label>
                                    <input type="text" id="delivery-location" name="delivery-location"
                                        placeholder="Ex: 90005 Or Los Angeles" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row select-bm">
                            <div class="col-md-12 text-center">
                                <h4 class="text-white">Vehicle Information</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select">
                                    <label> Year</label>
                                    <select class="nice-select" name="year" id="year">
                                        <option value="2">Select Year</option>
                                        <option value="1">2024</option>
                                        <option value="2">2023</option>
                                        <option value="3">2022</option>
                                        <option value="4">2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select" name="make" id="make">
                                    <label>Make</label>
                                    <select class="nice-select">
                                        <option value="2">Select Make</option>
                                        <option value="1">Acura</option>
                                        <option value="2">Alfa Romeo</option>
                                        <option value="3">Aptera</option>
                                        <option value="4">Aston Martin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-form tj-select">
                                    <label>Model</label>
                                    <select class="nice-select">
                                        <option value="2">Select Model</option>
                                        <option value="1">Model One</option>
                                        <option value="2">Model Two</option>
                                        <option value="3">Model Three</option>
                                        <option value="4">Model Four</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tj-theme-button">
                            <button class="tj-submit-btn" type="submit" value="submit">
                                Calculate Price <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
