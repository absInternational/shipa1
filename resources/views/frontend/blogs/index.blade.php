@extends('frontend.layouts.app')

@section('title')
    Ship A1 Blog Page
@endsection

@section('content')
    <style>
        font {
        display: contents;
        }
    </style>

    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Blog Standard</h1>
                        <div class="breadcrumb-link">
                            <span>
                                <a href="{{ route('welcome') }}">
                                    <span>Home</span>
                                </a>
                            </span>
                            >
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
    <section class="tj-blog-standard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page-details-wrapper">
                        @foreach ($blogs as $blog)
                            <div class="tj-blog-item-three">
                                <div class="tj-blog-image">
                                    <a
                                        @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}"
                                        @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                        {{-- <img src="{{ asset('frontend/images/blog/blog-14.jpg') }}" alt="Blog" /></a> --}}
                                        <img src="{{ asset($blog->post_image) }}" alt="Blog" />
                                    </a>
                                </div>
                                <div class="active-text">
                                    <span class="p-2">
                                        <span><i class="fa-light fa-user"></i></span> <span
                                            style="margin-right: 10px;">{{ $blog->user->name }}</span>
                                        <span><i class="flaticon-calendar"></i></span>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                    </span>
                                </div>
                                <div class="tj-content-box">
                                    <div class="blog-content-area">
                                        <div class="blog-header">
                                            <h1>
                                                <a class="title-link"
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                                    href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                                    {{ $blog->post_name }}
                                                </a>
                                            </h1>
                                        </div>
                                        <div class="blog-meta">
                                            {{-- <div class="meta-list">
                                            <ul class="list-gap">
                                                <li><i class="fa-light fa-user"></i> <a href="#">
                                                        {{ $blog->user->name }}</a></li>
                                                <li>
                                                    <i class="flaticon-calendar"></i> <span>
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                                                </li>

                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                    {{-- <p>
                                        {!! Illuminate\Support\Str::limit($blog->post_description, 200, '...') !!}
                                    </p> --}}
                                    <div>
                                        {!! Illuminate\Support\Str::limit($blog->post_short_description ?: $blog->post_description, 120, '...') !!}
                                    </div>
                                    <div class="read-more">
                                        <a
                                            @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}"
                                            @else href="{{ route('blog.details', $blog->slug_name) }}" @endif>
                                            Read More <i class="fa-light fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar-inner">
                        <div class="tj-sidebar-widget sidebar-search">
                            <form action="#">
                                <input type="text" class="form-control" name="search" id="searchOne"
                                    placeholder="Search">
                                <i class="flaticon-loupe"></i>
                            </form>
                        </div>
                        <div class="tj-sidebar-widget sidebar-post">
                            <h5 class="details_title">Recent Blogs</h5>

                            @foreach ($recent_blogs as $blog)
                                <div class="tj-post-content">
                                    <div class="tj-auother-img">
                                        <a href="">
                                            <img src="{{ asset($blog->post_image) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="tj-details-text">
                                        <div class="tj-details-header">
                                            <h6>
                                                <a
                                                    @if ($blog->type == 'old') href="{{ route('blog.details.noSlug', $blog->slug_name) }}" @else
                                                        href="{{ route('blog.details', $blog->slug_name) }}" @endif>

                                                    {{ $blog->post_name }}
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tj-appointment-box" data-bg-image="/assets/images/service/service-15.jpg">
                            <div class="tj-appointment-bg" data-bg-image="/assets/images/banner/service_shape.png"></div>
                            <div class="tj-appointment-body">
                                <div class="appointment-percent text-center">
                                    <span class="text-uppercase">100% <br />Quality
                                    </span>
                                </div>
                                <div class="appointment-content text-center">
                                    <h4 class="title">Make An Appointment</h4>

                                    <a class="tel-link" href="tel:+18444744721">1 (844) 474-4721</a>
                                    <p>Perfectly simple & easy to distinguish free hour when power.</p>
                                    <div class="tj-theme-button">
                                        <a href="{{ route('quote.form.combine') }}" target="_blank">
                                            <button class="tj-transparent-btn submit-btn2" type="submit" value="submit">
                                                Get a Quote <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $blogs->links('partials.custom_pagination') }}
        </div>
    </section>
    <!--========== blog details End ==============-->

    <!--=========== Newsletter Section Start =========-->
    @include('partials.newsletter')
    <!--=========== Newsletter Section End =========-->
@endsection
