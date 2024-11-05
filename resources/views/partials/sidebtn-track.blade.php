<style>
    .Rightbutton {
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
        position: fixed;
        right: -370px;
        top: 35%;
        font-size: 0;
        width: 420px;
        z-index: 999
    }
    .Rightbutton.active {
        right: 0;
        z-index: 9;
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s
    }
    .Rightbutton .clickbutton {
        border-left: 4px solid #8fc445;
        background: #062e39;
        width: 40px;
        z-index: 999;
        height: 160px;
        cursor: pointer;
        box-shadow: -20px 7px 18px -7px rgba(87, 184, 151, 0.09);
        border-radius: 30px 0 0 3px;
        display: inline-block;
        padding-top: 0;
        vertical-align: top;
        margin-top: 0px;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        position: relative;
        font-family: 'Heebo', sans-serif;
        box-shadow: 0 0 40px #00000026;
        -webkit-box-shadow: 0 0 40px #00000026;
        -ms-box-shadow: 0 0 40px #00000026;
        -o-box-shadow: 0 0 40px #00000026
    }
    .Rightbutton .clickbutton .crossplus:before {
        content: "";
        display: none;
        position: absolute;
        width: 20px;
        height: 2px;
        right: 0;
        background: #fbb334;
        z-index: 99;
        top: 0;
        left: 0;
        bottom: 0;
        margin: auto
    }
    .Rightbutton .clickbutton .crossplus:after {
        content: "";
        display: none;
        position: absolute;
        width: 2px;
        height: 20px;
        right: 0;
        background: #fab334;
        z-index: 99;
        top: 0;
        left: 0;
        bottom: 0;
        margin: auto
    }
    .Rightbutton .clickbutton .crossplus {
        position: absolute;
        display: block;
        transform: rotate(-90deg);
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
        left: -22px;
        white-space: pre;
        bottom: 70px
    }
    .Rightbutton .clickbutton .crossplus.rotate {
        transform: rotate(45deg);
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s
    }
    .Rightbutton .clickbutton .crossplus i {
        font-size: 18px;
        color: #fff;
        margin: 17px 0 0 15px
    }
    .banner-form {
        background: #fff;
        padding: 30px;
        position: relative;
        z-index: 9 !important;
        border-radius: 5px;
        margin: 0;
        width: 370px;
        display: inline-block;
        box-shadow: 0 0 30px #0000001f
    }
    .ban-form input {
        width: 100%;
        margin: 0;
        border: 1px solid #333333;
        background: white;
        padding: 10px 15px;
        color: gray;
        font-size: 14px;
        border-radius: 3px;
        height: 50px;
        font-weight: 400;
        outline: none !important;
    }
    .banner-form .intl-tel-input {
        width: 100%
    }
    .banner-form h3 {
        color: #141315;
        font-size: 24px;
        margin-bottom: 5px;
        font-weight: 700
    }
    .banner-form h3 strong {
        font: 24px/24px "Montserrat", sans-serif;
        font-weight: 600
    }
    .ban-form button[type="search"] {
        color: #0e0e0e;
        font-weight: 600;
        border-radius: 3px;
        text-align: center;
        padding: 10px 15px;
        border: 3px solid #3c3c3c;
        cursor: pointer;
        font-size: 16px;
    }
    .ban-form .form-group.inpchecbx label {
        display: inline-block;
        margin: 0;
        line-height: 1.4;
        color: #676767;
        font-size: 13px
    }
    .ban-form .form-group.inpchecbx input {
        display: inline-block;
        width: auto;
        height: auto;
        margin: 0
    }
</style>
{{-- <div class="Rightbutton">
    <div class="clickbutton">
        <div class="crossplus" onclick="window.location.href='{{ route('order.tracking') }}';">Track Order</div>
    </div>
    <div class="banner-form">
        <div class="banform">
            <div class="container">
                <div class="row">
                    <div class="ban-form">
                        <form id="orderTrackingForm">
                            @csrf
                            <div class="row">
                                <div class="tj-section-heading">
                                    <span class="sub-title active-shape">Get Status of Your Order</span>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="order_num" id="order_num"
                                            placeholder=" " />
                                        <label class="form__label">Order #:</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button id="submitButton" class="tj-primary-btn contact-btn" type="button">
                                        Track Order <i class="flaticon-right-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row align-items-center justify-content-center mt-3" id="orderTrackingHtml">
</div>
<script>
    $(document).ready(function() {
        $('#submitButton').click(function() {
            var formData = $('#orderTrackingForm').serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('track.order') }}',
                data: formData,
                success: function(response) {
                    if (response['status_code'] == 400) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                        $('#orderTrackingHtml').html('');
                    } else {
                        $('#orderTrackingHtml').html(response);
                    }
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            });
        });
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        $(".clickbutton").click(function() {
            $('.Rightbutton').toggleClass("active");
        });
        $('.floating_strip .rotatekaro a').on('click', function(e) {
            $('.floating_form').toggleClass("open");
        });
    });
</script> --}}
<div class="Rightbutton">
    <div class="clickbutton">
        <div class="crossplus" onclick="window.location.href='{{ route('order.tracking') }}';">Track Order</div>
    </div>
    <div class="banner-form">
        <div class="banform">
            <div class="container">
                <div class="row">
                    <div class="ban-form">
                        <form id="orderTrackingForm">
                            @csrf
                            <input type="hidden" name="modal" value="1">
                            <div class="row">
                                <div class="tj-section-heading">
                                    <span class="sub-title active-shape">Get Status of Your Order</span>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input" name="order_num" id="order_num"
                                            placeholder=" " />
                                        <label class="form__label">Order #:</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button id="submitButton" class="tj-primary-btn contact-btn" type="button">
                                        Track Order <i class="flaticon-right-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal HTML -->
<div class="modal fade" id="trackingResultModal" tabindex="-1" role="dialog" aria-labelledby="trackingResultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trackingResultModalLabel">Order Tracking Result</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body" id="orderTrackingHtml">
                <!-- Tracking result will be displayed here -->
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#submitButton').click(function() {
            var formData = $('#orderTrackingForm').serialize();
            $.ajax({
                type: 'POST',
                url: '{{ route('track.order') }}',
                data: formData,
                success: function(response) {
                    if (response['status_code'] == 400) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                        $('#orderTrackingHtml').html('');
                    } else {
                        $('#orderTrackingHtml').html(response);
                        $('#trackingResultModal').modal('show'); // Show the modal with the response content
                    }
                },
                error: function(xhr, status, error) {
                    var response = xhr.responseJSON;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message
                    });
                }
            });
        });

        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

        $(".clickbutton").click(function() {
            $('.Rightbutton').toggleClass("active");
        });

        $('.floating_strip .rotatekaro a').on('click', function(e) {
            $('.floating_form').toggleClass("open");
        });
    });
</script>
