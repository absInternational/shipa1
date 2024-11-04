<style>
.Rightbutton {
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
        position: fixed;
        right: -375px;
        top: 17%;
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
        -o-box-shadow: 0 0 40px #00000026;
        border-left: 5px solid #8fc445;
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
</style>
<a href="{{ route('order.tracking') }}">
    <div id="" class="Rightbutton">
            <div class="clickbutton">
                <div class="crossplus">Track Order</div>
            </div>
       
        {{-- <div class="banner-form">
            <div class="banform">
                <div class="container">
                    <div class="row">
                        <div class="ban-form">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="Order_ID" class="Order_ID typeahead"
                                                placeholder="Enter Order ID *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="tj-theme-button text-center mt-3">
                                            <button class="tj-submit-btn" type="submit" value="submit">
                                                Search <i class="fa-light fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</a>