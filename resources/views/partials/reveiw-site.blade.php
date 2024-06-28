 <style>
     .rates {
         background:#8FC445 ;
         font-size: 24px; 
         color: #FFFFFF; 
         font-weight: bold; 
         box-shadow: 0 0px 30px 0 #56ff0061;
         width: 62px;
         height: 42px;
         float: right;
         border-radius: 5px;
         display: flex;
         align-items: center;
         justify-content: center;
         margin: auto;
         -webkit-box-shadow: 0px 0px 15px 5px rgba(143,196,69,0.7);
         -moz-box-shadow: 0px 0px 15px 5px rgba(143,196,69,0.7);
         box-shadow: 0px 0px 15px 5px rgba(143,196,69,0.7);
         }
        .tj-testimonial-section {
            padding: 60px 0px 60px 0;
            background: #ffffff;
        }

        .tj-testimonial2-section {
            padding: 50px 0;
            /* background: #f9f9f9; */
        }

        .carousel-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card .row {
            display: flex;
            flex-wrap: wrap;
        }

        .card .col-6 {
            width: 50%;
        }

        .star {
            margin-top: 10px;
        }

        .fa-star {
            color: #f39c12;
        }

        .owl-nav button {
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-nav button {
            display: none;
            background: none;
            border: none;
            font-size: 2rem;
            color: #333;
        }

        .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
        }

        .owl-dot.active {
            background: #333;
        }


        @keyframes custom-slides {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-80%);
            }
        }
 </style>
 
 <!--=========== Testimonial Section Start =========-->
 <section class="tj-testimonial-section">
        <div class="carousel-wrapper">
            <div class="owl-carousel owl-theme" id="owl-caro">
                
                @foreach ($site_reviews as $site_review)
                    <div class="item">
                        <div class="card">
                            <a href="{{ $site_review->rating_url }}" target="_blank" style="text-decoration: none; color: inherit;">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        {{-- new for condition --}}
                                        <div>
                                            @if ($site_review->profile_name == 'BBB')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/bbb.png') }}"
                                                    width="100%" height="100%" alt="BBB" />
                                            @elseif ($site_review->profile_name == 'Google')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/google.png') }}"
                                                    width="100%" height="100%" alt="Google" />
                                            @elseif($site_review->profile_name == 'Transport Reviews')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/transport.png') }}"
                                                    width="100%" height="100%" alt="Transport Reviews" />
                                            @elseif($site_review->profile_name == 'Trust Pilot')
                                                <img loading="lazy" src="{{ asset('frontend/images/testimonial/turst.png') }}"
                                                    width="100%" height="100%" alt="Trust Pilot" />        
                                            @endif
                                        </div>
                                        {{-- end for condition --}}
                                        <div class="star">
                                            {{-- @for ($i = 0; $i < (int) floor($site_review->rating); $i++)
                                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                            @endfor --}}
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($site_review->rating >= $i)
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                @elseif ($site_review->rating >= $i - 0.5)
                                                    <i class="fa a-star-o" aria-hidden="true"></i>
                                                @else
                                                    <i class="fa fa-star-o text-light" aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div class="rates">
                                            {{ $site_review->rating }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========== Testimonial Section End =========-->

    <script src="path/to/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#owl-caro').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 4000, // 2 seconds
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
        
    </script>