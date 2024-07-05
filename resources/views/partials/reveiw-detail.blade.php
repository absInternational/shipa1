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
                                                        <li><i class="fa fa-star text-warning"></i></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p style="height: 100px;">{{ $review->description }}</p>
                            <br><br><br>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 style="" class="title pt-5">{{ $review->person_name }} </h5>
                                                    <span
                                                        class="sub-title pt-5">{{ !is_null($review->created_at) ? \Carbon\Carbon::parse($review->created_at)->format('M d, Y') : '' }}</span>
                                                </div>
                                                <div class="testimonial-comment pt-5">
                                                    @if ($review->site_name == 'BBB')
                                                        <img src="{{ asset('frontend/images/testimonial/bbb.png') }}"
                                                            alt="Image" style="width: 184px; height: 69px;" />
                                                    @elseif ($review->site_name == 'Google')
                                                        <img src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                            alt="Image" style="width: 184px; height: 69px;" />
                                                    @else
                                                        <img src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                            alt="Image" style="width: 184px; height: 69px;" />
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