@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="assets/images/banner/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Service Details</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="#">
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

    <!--========== blog details Start ==============-->
    <section class="tj-service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper service-details-wrapper">
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <a href="service-details.html">
                                    <img src="{{ !is_null($service->banner_image) ? asset($service->banner_image) : '' }}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="service-details.html"> {{ !is_null($service->heading_one) ? $service->heading_one : '' }}</a>
                                    </h3>
                                </div>
                            </div>
                            <p>
                                {{ !is_null($service->desc_one) ? $service->desc_one : '' }}
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="check-image">
                                    <img src="{{ !is_null($service->image2) ? asset($service->image2) : '' }}" alt="Blog" />
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="check-list">
                                    <h5 class="title">{{ !is_null($service->heading_two) ? $service->heading_two : '' }}</h5>
                                    <ul class="list-gap">
                                        <li><i class="fa-light fa-check"></i>{{ !is_null($service->desc_two_one) ? $service->desc_two_one : '' }}</li>
                                        <li><i class="fa-light fa-check"></i>{{ !is_null($service->desc_two_two) ? $service->desc_two_two : '' }}</li>
                                        <li><i class="fa-light fa-check"></i>{{ !is_null($service->desc_two_three) ? $service->desc_two_three : '' }}</li>
                                        <li><i class="fa-light fa-check"></i>{{ !is_null($service->desc_two_four) ? $service->desc_two_four : '' }}</li>
                                        <li><i class="fa-light fa-check"></i>{{ !is_null($service->desc_two_five) ? $service->desc_two_five : '' }}</li>
                                        <li><i class="fa-light fa-check"></i>{{ !is_null($service->desc_two_six) ? $service->desc_two_six : '' }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="details-video-content">
                            {{-- <h4 class="title">Communicate With Us</h4>
                            <p>
                                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                amet finibus eros. Lorem Ipsum
                            </p> --}}
                            {{ !is_null($service->extra) ? $service->extra : '' }}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sevice-image">
                                        <img src="{{ !is_null($service->image3) ? asset($service->image3) : '' }}" alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-faq-area">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Is My Technology Allowed on Tech?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    How Long Does air Freight Take?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    What Payment Methods are Supported?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Methods are Supported What Payment?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Methods are Supported What Payment?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>There are many variations of passages of available but the
                                                        Ut elit tellus luctus nec ullamcorper at mattis</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-search">
                            <form action="#">
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="Search" />
                                <i class="flaticon-loupe"></i>
                            </form>
                        </div>
                        <div class="tj-sidebar-widget sidebar-service">
                            <h5 class="details_title">Logistics Services</h5>
                            <ul class="list-gap">
                                <li>
                                    <a href="#">Land Transport
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Ocean Transport
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Road Transport
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Train Transportation
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Vegetative Roofing
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Air Freight Service
                                        <i class="flaticon-right-chevron"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tj-sidebar-widget sidebar-documents">
                            <h5 class="details_title">Documents</h5>
                            <ul class="list-gap">
                                <li>
                                    <a href="#">
                                        Our Company Details <br />
                                        [450KB] <i class="fa-solid fa-cloud-arrow-down"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        Our Company Details <br />
                                        [450KB] <i class="fa-solid fa-cloud-arrow-down"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tj-appointment-box" data-bg-image="assets/images/service/service-15.jpg">
                            <div class="tj-appointment-bg" data-bg-image="assets/images/banner/service_shape.png"></div>
                            <div class="tj-appointment-body">
                                <div class="appointment-percent text-center">
                                    <span class="text-uppercase">100% <br />
                                        Quality</span>
                                </div>
                                <div class="appointment-content text-center">
                                    <h4 class="title">Make An Appointment</h4>
                                    <a class="tel-link" href="tel:+51-(0)-888-455-369"> +51-(0)-888-455-369</a>
                                    <p>Perfectly simple & easy to distinguish free hour when power.</p>
                                    <div class="tj-theme-button">
                                        <button class="tj-transparent-btn submit-btn2" type="submit" value="submit">
                                            Get a Quote <i class="fa-light fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->
@endsection
