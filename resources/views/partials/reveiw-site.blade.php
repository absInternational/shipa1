<style>
    .rates {
        background: #8FC445;
        font-size: 24px;
        color: #FFFFFF;
        font-weight: bold;
        box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7);
        width: 62px;
        height: 42px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
    }
    .tj-testimonial-section {
        padding: 80px 0 60px;
        background: #ffffff;
    }
    .carousel-wrapper {
        max-width: 1200px;
        margin: auto;
        padding: 0 15px;
    }
    .card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .star {
        margin-top: 10px;
    }
    .fa-star {
        color: #f39c12;
    }
</style>
<section class="tj-testimonial-section pb-0">
    <div class="container">
        <div class="swiper-container swiper-container-8">
            <div class="swiper-wrapper">
                @foreach ($site_reviews as $site_review)
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ $site_review->rating_url }}" target="_blank" style="text-decoration: none; color: inherit;">
                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            @php
                                                $images = [
                                                    'BBB' => 'bbb.png',
                                                    'Google' => 'google.png',
                                                    'Transport Reviews' => 'transport.png',
                                                    'Trust Pilot' => 'turst.png'
                                                ];
                                            @endphp
                                            @if(isset($images[$site_review->profile_name]))
                                                <img src="{{ asset('frontend/images/testimonial/' . $images[$site_review->profile_name]) }}"
                                                    width="100%" height="100%" alt="{{ $site_review->profile_name }}" loading="lazy"/>
                                            @endif
                                        </div>
                                        <div class="star">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa {{ $site_review->rating >= $i ? 'fa-star' : 'fa-star-o' }}" aria-hidden="true"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-end">
                                        <div class="rates">{{ $site_review->rating }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper('.swiper-container-8', {
            slidesPerView: 3,
            loop: true,
            spaceBetween: 10,
            autoplay: { delay: 3000, disableOnInteraction: false },
            speed: 800,
            breakpoints: {
                0: { slidesPerView: 1 },
                600: { slidesPerView: 2 },
                1000: { slidesPerView: 3 }
            }
        });
    });
</script>