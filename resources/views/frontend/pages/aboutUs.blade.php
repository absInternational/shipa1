@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">About Us</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
                            <span>
                                <span> About</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

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

    <!--========== Team Section Start ==============-->
    <section class="tj-team-section-three">
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
                    <div class="team-item-three">
                        <img src="{{ asset('frontend/images/team/team-4.jpg') }}" alt="Image" />
                        <div class="arrow-icon">
                            <ul class="team-social list-gap">
                                <li class="social-active">
                                    <i class="flaticon-plus"></i>
                                    <ul class="list-gap team-social-dropdown">
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
                                </li>
                            </ul>
                        </div>
                        <div class="tj-project-content">
                            <span class="sub-title"> Founder</span>
                            <h4><a href="team-details.html" class="title-link"> Selina Donald</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="team-item-three">
                        <img src="{{ asset('frontend/images/team/team-5.jpg') }}" alt="Image" />
                        <div class="arrow-icon">
                            <ul class="team-social list-gap">
                                <li class="social-active">
                                    <i class="flaticon-plus"></i>
                                    <ul class="list-gap team-social-dropdown">
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
                                </li>
                            </ul>
                        </div>
                        <div class="tj-project-content">
                            <span class="sub-title"> Senior Manager</span>
                            <h4><a href="team-details.html" class="title-link"> Jessica Brown</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                    <div class="team-item-three">
                        <img src="{{ asset('frontend/images/team/team-6.jpg') }}" alt="Image" />
                        <div class="arrow-icon">
                            <ul class="team-social list-gap">
                                <li class="social-active">
                                    <i class="flaticon-plus"></i>
                                    <ul class="list-gap team-social-dropdown">
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
                                </li>
                            </ul>
                        </div>
                        <div class="tj-project-content">
                            <span class="sub-title"> Senior Manager</span>
                            <h4><a href="team-details.html" class="title-link"> Kevin Martin</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Team Section End ==============-->

    <!--=========== Testimonial Section Start =========-->
    <section class="tj-testimonial-section tj-testimonial-page">
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
                                                        class="sub-title">{{ \Carbon\Carbon::parse($review->created_at)->format('M d, Y') }}</span>
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
                            <img src="{{ asset('frontend/images/slider/slider-4.jpg') }}" alt="Image" />
                        </div>
                        <div class="faq-content">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-faq-area">
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $key => $faq)
                                <div class="accordion-item {{ $key === 0 ? 'show' : '' }}">
                                    <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                        <button class="accordion-button {{ $key === 0 ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne{{ $faq->id }}"
                                            aria-expanded="{{ $key === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapseOne{{ $faq->id }}">
                                            {{ $faq->heading }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne{{ $faq->id }}"
                                        class="accordion-collapse collapse {{ $key === 0 ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>{{ $faq->description }}</strong>
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
    <!--========== Faq Section End ==============-->

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
                                <a
                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                    <img src="{{ !is_null($blog->post_image) ? $blog->post_image : '' }}"
                                        alt="Blog" /></a>
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
                                            <a class="title-link"
                                                @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
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
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
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
