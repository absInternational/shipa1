<style>
    .fa-star {
    color: #f39c12;
    }
    .rates {
        background: #8FC445;
        font-size: 12px;
        color: #FFFFFF;
        font-weight: bold;
        width: 36px;
        height: 22px;
        float: right;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        /* box-shadow: 0 0px 30px 0 #56ff0061; */
        /* -webkit-box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7);
        -moz-box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7);
        box-shadow: 0px 0px 15px 5px rgba(143, 196, 69, 0.7); */
    }
</style>
<section class="pt-4 mt-4">
    <div class="container">
        <h3 class="text-center mb-4">See what customers say about their experience with ShipA1 Transport.</h3>
        <div class="owl-carousel owl-theme">
            @foreach ($site_reviews as $key => $site_review)  
                <div class="item">
                    <div class="card" >
                        <div class="firstrow px-2 pt-2 d-flex justify-content-between">
                            <div>{{ $site_review->user }}</div>
                            <div class="d-flex">
                                <div class="rates">{{ $site_review->rating }}</div>
                                <div>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($site_review->rating >= $i)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @elseif ($site_review->rating >= $i - 0.5)
                                        <i class="fa a-star-o" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star-o text-light" aria-hidden="true"></i>
                                    @endif
                                @endfor
                                    <!-- <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i> -->
                                </div>
                            </div>
                        </div>
                        <div class="secondrow px-2 ">
                            <p style="font-size:15px;">
                                <a href="{{ $site_review->rating_url }}" >
                                    <span class="text-dark">
                                    {!! \Illuminate\Support\Str::limit($site_review->description, 100) !!}
                                    </span>
                                    <span style="display:none;" class="text-dark">
                                    {!! $site_review->description !!}
                                    <!-- <span class="text-muted readless">Read Less</span> -->
                                    </span>
                                </a>
                            </p>
                        </div>
                        <div class="thirdrow px-2 py-2 d-flex justify-content-between">
                            <div class="date">{{ $site_review->date }}</div>
                            <div>
                                <div class="images">
                                    @if ($site_review->profile_name == 'BBB')
                                        <img class="float-end" loading="lazy"
                                            src="{{ asset('frontend/images/testimonial/bbb.png') }}" width="60%"
                                            height="100%" alt="BBB" />
                                    @elseif ($site_review->profile_name == 'Google')
                                        <img class="float-end" loading="lazy"
                                            src="{{ asset('frontend/images/testimonial/google.png') }}"
                                            width="40%" height="100%" alt="Google" />
                                    @elseif($site_review->profile_name == 'Transport Reviews')
                                        <img class="float-end" loading="lazy"
                                            src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                            width="90%" height="100%" alt="Transport Reviews" />
                                    @elseif($site_review->profile_name == 'Trust Pilot')
                                        <img class="float-end" loading="lazy"
                                            src="{{ asset('frontend/images/testimonial/turst.png') }}"
                                            width="70%" height="100%" alt="Trust Pilot" />
                                    @endif
                                    <!-- <div class="title">BBB Reviews</div> -->
                                    <!-- <img class="float-end" loading="lazy" src="{{ asset('frontend/images/testimonial/bbb.png') }}" width="40%" height="50%" alt="BBB"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                {{-- <div class="item">
                    <div class="card">
                        <div class="firstrow px-2 pt-2 d-flex justify-content-between">
                            <div>Peter A</div>
                            <div class="d-flex">
                                <div class="rate">5.0</div>
                                <div>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="secondrow px-2 ">
                            <p>
                                <a href="#" >
                                    <span class="less">
                                    I have used Sean Auto Transport (Ship A1) for over 10 years, and of course  <span class="text-muted readmore">Read More</span>
                                    </span>
                                    <span style="display:none;" class="more">
                                    I have used Sean Auto Transport (Ship A1) for over 10 years, and of course given referred them to several people. These guys are reliable and competitively priced. Sean is really a nice guy to work with. There was a time he arranged a pickup for me without any margin because the driver delayed in picking them up. Good guys I can also recommend without a shred of doubt.
                                    <span class="text-muted readless">Read Less</span>
                                    </span>
                                </a>
                            </p>
                        </div>
                        <div class="thirdrow px-2 py-2 d-flex justify-content-between">
                            <div class="date">Sep,22 2022</div>
                            <div>
                                <div class="images">
                                    <!-- <div class="title">BBB Reviews</div> -->
                                    <img class="float-end" loading="lazy" src="{{ asset('frontend/images/testimonial/google.png') }}" width="40%" height="50%" alt="BBB">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="firstrow px-2 pt-2 d-flex justify-content-between">
                            <div>Peter A</div>
                            <div class="d-flex">
                                <div class="rate">5.0</div>
                                <div>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="secondrow px-2 ">
                            <p>
                                <a href="#" >
                                    <span class="less">
                                    I have used Sean Auto Transport (Ship A1) for over 10 years, and of course  <span class="text-muted readmore">Read More</span>
                                    </span>
                                    <span style="display:none;" class="more">
                                    I have used Sean Auto Transport (Ship A1) for over 10 years, and of course given referred them to several people. These guys are reliable and competitively priced. Sean is really a nice guy to work with. There was a time he arranged a pickup for me without any margin because the driver delayed in picking them up. Good guys I can also recommend without a shred of doubt.
                                    <span class="text-muted readless">Read Less</span>
                                    </span>
                                </a>
                            </p>
                        </div>
                        <div class="thirdrow d-flex justify-content-between py-2 px-2">
                            <div class="date">Sep,22 2022</div>
                            <div>
                                <div class="images">
                                    <!-- <div class="title">BBB Reviews</div> -->
                                    <img class="float-end" loading="lazy" src="{{ asset('frontend/images/testimonial/transport.png') }}" width="50%" height="50%" alt="BBB">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="firstrow px-2 pt-2 d-flex justify-content-between">
                            <div>Peter A</div>
                            <div class="d-flex">
                                <div class="rate">5.0</div>
                                <div>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="secondrow px-2 ">
                            <p>
                                <a href="#" >
                                    <span class="less">
                                    I have used Sean Auto Transport (Ship A1) for over 10 years, and of course  <span class="text-muted readmore">Read More</span>
                                    </span>
                                    <span style="display:none;" class="more">
                                    I have used Sean Auto Transport (Ship A1) for over 10 years, and of course given referred them to several people. These guys are reliable and competitively priced. Sean is really a nice guy to work with. There was a time he arranged a pickup for me without any margin because the driver delayed in picking them up. Good guys I can also recommend without a shred of doubt.
                                    <span class="text-muted readless">Read Less</span>
                                    </span>
                                </a>
                            </p>
                        </div>
                        <div class="thirdrow px-2 py-2 d-flex justify-content-between">
                            <div class="date">Sep,22 2022</div>
                            <div>
                                <div class="images">
                                    <!-- <div class="title">BBB Reviews</div> -->
                                    <img class="float-end" loading="lazy" src="{{ asset('frontend/images/testimonial/turst.png') }}" width="50%" height="50%" alt="BBB">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        items: 3, // Default number of items
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1 // Show 1 item on screens smaller than 600px
          },
          600: {
            items: 2 // Show 2 items on screens larger than 600px
          },
          1000: {
            items: 3 // Show 3 items on screens larger than 1000px
          }
        }
      });
    });
</script>