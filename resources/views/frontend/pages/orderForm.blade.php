@extends('frontend.layouts.app')

@section('content')
    <style>
        body {
            scroll-behavior: smooth;
        }

        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Rock+Salt|Shadows+Into+Light|Cedarville+Cursive');

        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Rock+Salt|Shadows+Into+Light|Cedarville+Cursive');

        .border {
            border: 1px solid #000000 !important;
        }

        .highlight {
            background: black;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid black;
            border-radius: .25rem;
        }

        .mainTitle {
            width: 100%;
            float: left;
            padding: 10px;
            margin-bottom: 10px;
        }

        .text-justify {
            text-align: justify !important;
        }

        ul,
        ol {
            margin: 0px;
            padding: 0px;
            list-style-type: none;
        }

        .stepContainer span {
            font-size: 25px;
            width: 40px;
            background: #FF9800;
            padding: 10px;
            border-radius: 50%;
            margin-right: 2%;
            float: left;
            line-height: 20px;
            text-align: center;
            color: white;
            font-weight: 600;
        }

        .header_cover {
            width: 100%;
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .header_heading {

            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            position: absolute;
            top: 12pc;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .sign1 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'Shadows Into Light', cursive;
            font-weight: bold;
        }

        .sign2 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'Rock Salt', cursive;
            font-weight: bold;

        }

        .sign3 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'Jazz LET, fantasy';
            font-weight: bold;
        }

        .sign4 {
            padding: 19px 15px 12px 38px;
            font-size: 30px;
            line-height: 30px;
            color: #000;
            background: #fff;
            border: 1px solid #000;
            font-family: 'prestige';
            font-size: 36px;
            font-weight: bold;
        }

        .sign1:hover,
        .sign2:hover,
        .sign3:hover,
        .sign4:hover {
            background-color: black;
            color: white;
        }

        #signShw1,
        #signShw2,
        #signShw3,
        #signShw4 {
            width: 95%;

        }


        .checkedClass {
            background-color: black;
        }

        input[type=radio] {
            display: none;
        }

        .heading {
            line-height: 66px;
            font-size: 36px;
            font-family: math;
            font-weight: 900;
            float: left;
        }

        .subhead {
            float: right;
            margin-top: 15px;
            font-size: 23px;
            font-family: cursive;
        }

        .bg-secondary {
            background-color: #080808 !important;
        }

        .img {
            background-image: url(https://www.Autotransportgo.com/img/roadtransport.jpg);
            filter: drop-shadow(10px 10px 10px grey);
            width: 100%;
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            filter: blur(2px);
            -webkit-filter: blur(8px);


        }

        strong,
        h5 {
            font-family: "Luminari", "fantasy";
        }

        input,
        select,
        textarea {
            border: 1px solid #b0a6e0 !important;
        }

        body {
            /*background-image: linear-gradient(to right, rgb(109, 213, 250), rgb(255, 255, 255), rgb(41, 128, 185)) !important;*/
            box-shadow: 2px 2px #9E9E9E !important;
            background-color: white;
        }

        .card-header {
            color: black !important;
            justify-content: center !important;
            font-weight: 800 !important;
            font-size: 25px !important;
            border: 2px solid black !important;
            background-color: #6c757d47 !important;

        }

        .card-body {
            border: 2px solid black !important;
        }

        .stepTitle {
            position: relative;
            top: 12px;
        }

        .app-content .side-app {
            padding: 0px !important;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>

    <section class="breadcrumb-wrapper" id="breadcrumb-wrapper-hide">
        <div class="container-flude">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="col-lg-12" data-sal="slide-down" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="">
                        <h4 class="title">Enter Details</h4>
                        <form action="{{ route('get.order.details') }}" method="post" class="rd-mailform"
                            id="calculatePriceFrom" data-parsley-validate data-parsley-errors-messages-disabled
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="number" name="order_id" id="order_id"
                                    class="form-control form-control-lg" placeholder="Enter order#" />
                                <label class="form-label" for="form3Example3">Order #.</label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                                    placeholder="Enter a valid email address" required />
                                <label class="form-label" for="form3Example3">Email address</label>
                                <div class="invalid-feedback fw-bold fs-5" style="display: none"></div>
                            </div>

                            <div class="tj-theme-button mt-3">
                                <button class="tj-submit-btn" type="submit" value="submit">
                                    Submit <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumb-wrapper-2" id="all-order-details">
    </section>
@endsection

@section('extraScript')
    <script>
        $(document).ready(function() {
            function get_cartype($id) {
                if ($id == 1) {
                    return "Open";
                } else {
                    return "Enclosed";
                }
            }

            function get_condtion($id) {
                if ($id == 1) {
                    return "Running";
                } else {
                    return "Not- Running";
                }
            }


            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $('#calculatePriceFrom').submit(function(event) {
                event.preventDefault();

                var formData = $('#calculatePriceFrom').serialize();
                $('.invalid-feedback').hide();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('get.order.details') }}',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        $('#all-order-details').html(response);
                        // $('#all-order-details').load('https://washington.shawntransport.com/email_order/OTIzMTAw/MQ==');
                        // var encryptvuserid = btoa({{ 1 }});
                        // var encryptvoderid = btoa($('#order_id').val());
                        
                        // window.location.href =
                        //     'https://washington.shawntransport.com/email_order/' + encryptvoderid + '/' + encryptvuserid;
                    },
                    error: function(xhr, status, error) {
                        $('#all-order-details').html('');
                        var errorMessage = xhr.responseText;
                        $('.invalid-feedback').html(errorMessage);
                        $('.invalid-feedback').show();
                    }
                });
            });
        });
    </script>
    <script>
        @if (!empty($data->oauction))
            setTimeout(function() {

                //$('#auction').trigger('change');
            }, 500);
        @endif
    </script>

    <script>
        $(".app-sidebar").hide();
        $(".app-header").hide();
        $(".switcher-wrapper").hide();
    </script>

    <script type="text/javascript">
        $(function() {
            $("#o_zip1").autocomplete({
                source: "/get_zip"
            });
        });

        $(document).ready(function() {
            $("#signtures").click(function() {
                if ($("#signature1").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#first_sign").css("background-color", "black");
                    $("#first_sign").css("color", "white");


                }
                if (!$("#signature1").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#first_sign").css("background-color", "white");
                    $("#first_sign").css("color", "black");


                }
                if ($("#signature2").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#second_sign").css("background-color", "black");
                    $("#second_sign").css("color", "white");


                }
                if (!$("#signature2").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#second_sign").css("background-color", "white");
                    $("#second_sign").css("color", "black");


                }
                if ($("#signature3").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#third_sign").css("background-color", "black");
                    $("#third_sign").css("color", "white");

                }
                if (!$("#signature3").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#third_sign").css("background-color", "white");
                    $("#third_sign").css("color", "black");
                }

                if ($("#signature4").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#fourth_sign").css("background-color", "black");
                    $("#fourth_sign").css("color", "white");

                }
                if (!$("#signature4").is(":checked")) {
                    // do something if the checkbox is NOT checked
                    $("#fourth_sign").css("background-color", "white");
                    $("#fourth_sign").css("color", "black");
                }
            });

        });


        $("#s1").click(function() {
            $("#signature1").prop("checked", true);
            var checked = $(this).is(':checked');
            if (checked) {
                alert('checked');
            } else {
                alert('unchecked');
            }

        });
        $(".sign2").click(function() {
            $("#signature2").prop("checked", true);

        });
        $(".sign3").click(function() {
            $("#signature3").prop("checked", true);

        });
        $(".sign4").click(function() {
            $("#signature4").prop("checked", true);

        });

        $('.btn-link').click(function() {
            $('#collapseTwo').toggle();
        });
        $("#phone").mask("(999) 999-9999");
        $("#phone2").mask("(999) 999-9999");
        $("#ophone").mask("(999) 999-9999");
        $("#ophone2").mask("(999) 999-9999");
        $("#dphone").mask("(999) 999-9999");
        $("#dphone2").mask("(999) 999-9999");


        $("#signature").change(function() {
            var valueSign = $(this).val();
            $("#signtures").html('');
            if (valueSign) {
                $("#signtures").html(`
                        <div class="row skin skin-line">

                            <div class="col-md-6 col-sm-12 mt-2 radio_style "  id="s1">
                                <fieldset class="sign1" id="first_sign">
                                    <input required type="radio"  name="signatureShw" value="1" id="signature1">
                                    <label for="signature1"  style="font-weight: bolder;font-style: oblique" id="signShw1">${valueSign}</label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-2 radio_style" id="s2">
                                <fieldset class="sign2" id="second_sign">
                                    <input required type="radio"  name="signatureShw" value="2" id="signature2">
                                    <label for="signature2" style="font-weight: bolder;font-style: oblique" id="signShw2">${valueSign}</label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-2 radio_style" id="s3">
                                <fieldset class="sign3" id="third_sign">
                                    <input required type="radio"  name="signatureShw" value="3" id="signature3">
                                    <label for="signature3"  style="font-family:monsieur;font-weight: bolder;font-style: oblique"  id="signShw3">${valueSign}</label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-2 radio_style" id="s4">
                                <fieldset class="sign4" id="fourth_sign">
                                    <input required type="radio" name="signatureShw" value="4" id="signature4">
                                    <label for="signature4" style="font-family:monospace;font-weight: bolder;font-style: oblique"  id="signShw4">${valueSign}</label>
                                </fieldset>
                            </div>

                        </div>`);
            }
        });

        $("#auction").change(function() {

            var valueAuction = $(this).val();

            $("#auctionYes").html('');

            if (valueAuction == 'yes') {
                $("#auctionYes").html(`

              <div class="form-group">
                <label for="auction_name"><strong>Auction Name</strong>
                   <span class="text-danger"> *</span></label>
                </label>
                <div class="controls position-relative has-icon-left">
                    <input autocomplete="nope" type="text" name="auction_name"
                   required id="auction_name" class="form-control" value="" placeholder="Enter Auction Name">
                    <div class="form-control-position">
                        <!--<i class="la la-newspaper-o"></i>-->
                    </div>
                </div>
              </div>

                <div class="form-group">
                    <label for="buyer_num"><strong>Buyer/Lot/Stock
                        Number</strong>
                           <span class="text-danger"> *</span></label>
                        </label>
                    <div class="controls position-relative has-icon-left">
                        <input autocomplete="nope" type="text" name="buyer_num" id="buyer_num"
                          required  class="form-control" value="" placeholder="Enter Buyer/Lot/Stock Number">
                        <div class="form-control-position">
                            <!--<i class="la la-phone"></i>-->
                        </div>
                    </div>
                </div>
                `);
                $("#auctionYes").show();
            } else {
                $("#auctionYes").hide();
                $("#auctionYes").html('');
            }
        });
    </script>
    <script>
        $(".submit").click(function(e) {
            var allinput = $("input[required]");
            var i = 0;
            $(".text-danger").remove();
            allinput.removeAttr('style');
            allinput.each(function() {
                if ($(this).val() == '') {
                    e.preventDefault();
                    // console.log($(this));
                    // $(".container").children('.alert').remove();
                    $(this).attr("style", "border-color:red!important");
                    $(this).after(`<div class="text-danger">This field is required!</div>`);
                    // $(".container").prepend(`
                //     <div class="alert bg-danger text-white alert-dismissible fade show mt-2" role="alert">
                //         <strong style="font-size:1.6rem;">Please fill out the required fields!</strong>
                //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //             <span aria-hidden="true">&times;</span>
                //         </button>
                //     </div>
                // `);
                    // $(".container").animate({ scrollTop: 0 }, 1000);
                    i++;
                }
            })
            if (i > 0) {
                // $('#modaldemo05').modal('show');
                alert('Please fill out the required fields!');
            }

        })
    </script>
@endsection
