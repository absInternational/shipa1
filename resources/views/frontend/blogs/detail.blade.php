@extends('frontend.layouts.app')

@section('content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Blog Details</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('/') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            <span>
                                <span>Blog</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--========== blog details Start ==============-->
    <section class="tj-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper">
                        <div class="tj-blog-item-three">
                            <div class="tj-blog-image">
                                <a href="blog-details.html">
                                    <img src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                            </div>
                            <div class="active-text">
                                <a href="blog-details.html"> {{ $blog->meta_title }}</a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h3>
                                        <a class="title-link" href="blog-details.html">
                                            {{ $blog->post_name }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="blog-meta">
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i> <a href="#">
                                                    {{ $blog->user->name }}</a></li>
                                            <li><i class="flaticon-calendar"></i> <span>
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                            </li>
                                            {{-- <li><i class="fa-light fa-comment"></i> <span> Comment (5)</span></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                {{ $blog->post_description }}
                            </p>
                        </div>
                        {{-- <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="check-image">
                                    <img src="{{ asset('frontend/images/blog/blog-10.jpg') }}" alt="Blog" />
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="check-list">
                                    <ul class="list-gap">
                                        <li><i class="fa-light fa-check"></i> Those who do not know how to</li>
                                        <li><i class="fa-light fa-check"></i> Pleasure rationally encounter</li>
                                        <li><i class="fa-light fa-check"></i> Consequences that painful.</li>
                                        <li><i class="fa-light fa-check"></i> Nor again is there anyone</li>
                                        <li><i class="fa-light fa-check"></i> Service Guarantee</li>
                                        <li><i class="fa-light fa-check"></i> Excellence in Healthcare</li>
                                        <li><i class="fa-light fa-check"></i> Service Guarantee</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="details-video-content">
                            <h4 class="title">We Exist to Inspire the World to Play</h4>
                            <p>
                                England dotted with a lush, green landscape, rustic villages and throbbing with
                                humanity. South Asian country that has plenty to offer to visitors with its diverse
                                wildlife .We have helped students, business persons, tourists, clients with medical
                                needs. There are many variations of passages of Lorem Ipsum available.
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="video-image">
                                        <img src="{{ asset('frontend/images/blog/blog-11.jpg') }}" alt="Image" />
                                        <div class="video-box">
                                            <a class="popup-videos-button" data-autoplay="true" data-vbtype="video"
                                                href="https://www.youtube.com/watch?v=ADmQTw4qqTY">
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-image">
                                        <img src="{{ asset('frontend/images/blog/blog-12.jpg') }}" alt="Image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details-quote-content">
                            <h4 class="title">An Airborne Crisis on Two Fronts</h4>
                            <p>
                                South Asian country that has plenty to offer to visitors with its diverse wildlife.
                                England dotted with a lush, green landscape, rustic villages and throbbing with
                                humanity .We have helped students, business persons, tourists, clients with medical
                                needs.
                            </p>
                            <div class="details-quote-box">
                                <img src="{{ asset('frontend/images/icon/quote.svg') }}" alt="Icon" />
                                <p>
                                    Tosser argy-bargy mush loo at public school Elizabeth up the duff buggered
                                    chinwag on your bike mate don’t get shirty with me super, Jeffrey bobby Richard
                                    cheesed off spend a penny a load of old tosh blag horseTosser argy-bargy mush
                                    loo at public school Elizabeth up the duff buggered chinwag on your bike mate
                                    don’t get
                                </p>
                                <h5 class="title">David Smith</h5>
                            </div>
                        </div>
                        <div class="details-tags-box">
                            <div class="tags-link">
                                <span> Tags</span>
                                <a href="#">Transport</a>
                                <a href="#">Delivery</a>
                                <a href="#">Logistics</a>
                            </div>
                            <div class="share-link">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="details-comment-content">
                            <h4 class="details_title">Comments (2)</h4>
                            <div class="comment-auother-box">
                                <div class="auother-image">
                                    <img src="{{ asset('frontend/images/blog/blog-1.png') }}" alt="Blog" />
                                </div>
                                <div class="auother-content">
                                    <h4><a class="title-link" href="blog-details.html"> Isaac Herman</a></h4>
                                    <span> June 14, 2023 / 12:00 AM</span>
                                    <p>
                                        Imperdiet in nulla sed viverraut loremut dapib estetur Lorem ipsum dolor sit
                                        amet eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniy
                                        minim sed exe ullamco laboris nisi ut aliquip cepteur
                                    </p>
                                    <div class="detils-reply">
                                        <a href="blog-details.html"> Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-auother-box">
                                <div class="auother-image">
                                    <img src="{{ asset('frontend/images/blog/blog-2.png') }}" alt="Blog" />
                                </div>
                                <div class="auother-content">
                                    <h4><a class="title-link" href="blog-details.html"> John Doe</a></h4>
                                    <span> June 12, 2023 / 12:05 AM</span>
                                    <p>
                                        Imperdiet in nulla sed viverraut loremut dapib estetur Lorem ipsum dolor sit
                                        amet eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniy
                                        minim sed exe ullamco laboris nisi ut aliquip cepteur
                                    </p>
                                    <div class="detils-reply">
                                        <a href="blog-details.html"> Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-title">
                                <h4 class="details_title">Leave a Reply</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="details-input">
                                    <input type="text" id="name" name="name" placeholder="Your Name"
                                        required="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="details-input">
                                    <input type="text" id="emailAdd" name="name" placeholder="Email Address"
                                        required="" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="details-input">
                                    <input type="text" id="site" name="name" placeholder="Email Address"
                                        required="" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="details-input">
                                    <textarea name="massage" class="form-control" cols="30" rows="10" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tj-theme-button">
                                    <button class="tj-primary-btn submit-btn" type="submit" value="submit">
                                        Post Comment <i class="fa-light fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-search">
                            <form action="#">
                                <input type="text" class="form-control" name="search" id="searchOne"
                                    placeholder="Search" />
                                <i class="flaticon-loupe"></i>
                            </form>
                        </div>
                        <div class="tj-sidebar-widget sidebar-post">
                            <h5 class="details_title">Recent Blogs</h5>
                            @foreach ($blogs as $blog)
                            <div class="tj-post-content">
                                <div class="tj-auother-img">
                                    <a href="{{ route('blog.details', $blog->slug_name) }}">
                                        <img src="{{ asset($blog->post_image) }}" alt="Blog" /></a>
                                </div>
                                <div class="tj-details-text">
                                    <div class="details-meta">
                                        <ul class="list-gap">
                                            <li><i class="flaticon-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</li>
                                        </ul>
                                    </div>
                                    <div class="tj-details-header">
                                        <h6>
                                            <a href="{{ route('blog.details', $blog->slug_name) }}">
                                                {{ $blog->post_name }}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- <div class="tj-sidebar-widget sidebar-catagory">
                            <h5 class="details_title">All Catagory</h5>
                            <ul class="list-gap">
                                <li>
                                    <a href="#">Introductions
                                        <span> 15</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Engineering
                                        <span> 14</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Transport
                                        <span> 07</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Logistics
                                        <span> 04</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Business
                                        <span> 06</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Work Permits
                                        <span> 08</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tj-sidebar-widget sidebar-tags">
                            <h5 class="details_title">Popular Tags</h5>
                            <div class="tagcloud">
                                <a href="#"> Business</a>
                                <a href="#"> Career</a>
                                <a href="#"> Logistics</a>
                                <a href="#"> Delivery</a>
                                <a href="#"> Consulting</a>
                                <a href="#"> Travel</a>
                                <a href="#">Education</a>
                                <a href="#">America</a>
                                <a href="#">Maintenance</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->

    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection
