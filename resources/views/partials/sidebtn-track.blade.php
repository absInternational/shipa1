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
/* sticky button */	
/* #feedback1 {
    border-left: 5px solid #8fc445;
    height: 0px;
    width: 85px;
    position: fixed;
    right: 0;
    top: 30%;
    z-index: 1000;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

#feedback1 a {
	display: block;
	background:url(pc.png) no-repeat;
	height: 52px;
	width: 155px;	
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;

}
#feedback1 a:hover {
	background:url(pc-over.png) no-repeat;
}

#feedback {
	height: 0px;
	width: 85px;
	position: fixed;
	right: 0;
	top: 50%;
	z-index: 1000;
	transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
#feedback a {
	display: block;
	background:#000;
	height: 52px;
	padding-top: 10px;
	width: 155px;
	text-align: center;
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;
}
#feedback a:hover {
	background:#00495d;
} */
</style>
{{-- <a class="text-white" href="{{ route('order.tracking') }}" style="text-decoration: none;"> --}}
    {{-- <div class="Rightbutton">
        <div class="clickbutton">
            <div class="crossplus text-white">
                <a class="text-white" href="{{ route('order.tracking') }}">
                    Track Order
                </a>
            </div>
        </div>
    </div> --}}
{{-- </a> --}}

<div class="Rightbutton">
    <div class="clickbutton">
        <div class="crossplus" onclick="window.location.href='{{ route('order.tracking') }}';">Track Order</div>
    </div>
</div>
{{-- <div id="feedback">
    <a href="{{ route('order.tracking') }}">Track Order</a>
</div> --}}