@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .icon {
        font-size: 32px;
        font-weight: bold;
        letter-spacing: 32px;
        position: relative;
    }

    .confetti {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 100%;
        height: 200px;
        top: 0;
        left: 0;
        overflow: hidden;
        pointer-events: none; /* Ensure confetti does not block interaction */
    }

    .confetti-piece {
        position: absolute;
        width: 8px;
        height: 16px;
        top: 0;
        opacity: 0;
    }

    .confetti-piece:nth-child(odd) {
        background: #17d3ff;
    }

    .confetti-piece:nth-child(even) {
        z-index: 1;
    }

    .confetti-piece:nth-child(4n) {
        width: 5px;
        height: 12px;
        animation-duration: 2000ms;
    }

    .confetti-piece:nth-child(3n) {
        width: 3px;
        height: 10px;
        animation-duration: 2500ms;
        animation-delay: 1000ms;
    }

    .confetti-piece:nth-child(4n-7) {
        background: #ff4e91;
    }

    @keyframes makeItRain {
        from {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
        to {
            transform: translateY(200px);
        }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-30px);
        }
        60% {
            transform: translateY(-15px);
        }
    }

    .confetti-piece:nth-child(1) {
        left: 7%;
        transform: rotate(-30deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 0ms;
        animation-duration: 1200ms;
    }
    .confetti-piece:nth-child(2) {
        left: 14%;
        transform: rotate(45deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 500ms;
        animation-duration: 700ms;
    }
    .confetti-piece:nth-child(3) {
        left: 21%;
        transform: rotate(-10deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1000ms;
        animation-duration: 800ms;
    }
    .confetti-piece:nth-child(4) {
        left: 28%;
        transform: rotate(15deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1500ms;
        animation-duration: 900ms;
    }
    .confetti-piece:nth-child(5) {
        left: 35%;
        transform: rotate(-45deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 200ms;
        animation-duration: 1100ms;
    }
    .confetti-piece:nth-child(6) {
        left: 42%;
        transform: rotate(25deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 400ms;
        animation-duration: 1300ms;
    }
    .confetti-piece:nth-child(7) {
        left: 49%;
        transform: rotate(-35deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 600ms;
        animation-duration: 900ms;
    }
    .confetti-piece:nth-child(8) {
        left: 56%;
        transform: rotate(50deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 800ms;
        animation-duration: 1100ms;
    }
    .confetti-piece:nth-child(9) {
        left: 63%;
        transform: rotate(-20deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1000ms;
        animation-duration: 1200ms;
    }
    .confetti-piece:nth-child(10) {
        left: 70%;
        transform: rotate(35deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1200ms;
        animation-duration: 1000ms;
    }
    .confetti-piece:nth-child(11) {
        left: 77%;
        transform: rotate(-50deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1400ms;
        animation-duration: 800ms;
    }
    .confetti-piece:nth-child(12) {
        left: 84%;
        transform: rotate(30deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1600ms;
        animation-duration: 900ms;
    }
    .confetti-piece:nth-child(13) {
        left: 91%;
        transform: rotate(-10deg);
        animation: makeItRain 1000ms infinite ease-out;
        animation-delay: 1800ms;
        animation-duration: 1000ms;
    }
</style>

<!--========== breadcrumb Start ==============-->
<section class="breadcrumb-wrapper" data-bg-image="{{ asset('frontend/images/banner/all-cover-banner.webp') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h1 class="breadcrumb-title text-center">Thank You</h1>
                    <div class="breadcrumb-link">
                        <span>
                            <a href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>
                            <span> Thank You</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========== breadcrumb End ==============-->

<!--========== Thank You Section Start ==============-->
<section class="thank-you-section py-5 position-relative">
    <div class="confetti">
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
        <div class="confetti-piece"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <i class="fas fa-thumbs-up fa-5x mb-4" style="color: #8fc445; animation: bounce 2s infinite;"></i>
                <h2 class="thank-you-title">Thank You!</h2>
                <h2 class="thank-you-title">
                    @if (isset($price))
                        {{ $price }}
                    @endif
                </h2>
                <p class="thank-you-message">We appreciate your interest and will get back to you soon.</p>
                <!-- <a href="{{ route('welcome') }}" class="btn btn-primary mt-3">Go Back to Home</a> -->
            </div>
        </div>
    </div>
</section>
<!--========== Thank You Section End ==============-->

@endsection
