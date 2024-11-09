<style>
    .active {
        color: #8fc445 !important;
    }
  .ul-child-custom-heading {
    letter-spacing: 1px;
    font-size: larger;
    text-decoration: none;
    font-weight: bold;
    color: #212529;
  }
</style>
<header class="tj-header-section" id="header-sticky">
    <div class="container" style=" border-radius: 12px; ">
        <div class="row">
            <div class="col-lg-12" >
                <div class="bg-color d-flex flex-wrap">
                    <div class="logo-area">
                        <div class="logo-box">
                            <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/images/logo/LOGO NEW-2.png') }}"  loading="lazy"
                                    alt="Logo" /></a>
                        </div>
                    </div>
                    <div class="header-content-area">
                        <div class="header-topbar">
                            <div
                                class="topbar-content-area d-flex flex-wrap align-items-center justify-content-start">
                                <div class="header-content-right mr-4">
                                    <span><i class="fa-regular fa-mobile-screen fa-bounce fa-lg" style="color: #8fc445;"></i>
                                    <a href="tel: 1 (844) 474-4721" class="text-white nav-num-hover">1 (844) 474-4721</a> 
                                    </span>
                                </div>
                                <div class="header-content-left me-auto">
                                    <span><i class="fa-regular fa-envelope fa-bounce fa-lg" style="color: #8fc445;"></i>
                                        <a href="mailto:shawntransport@shipa1.com" class="text-white"> shawntransport@shipa1.com</a></span>
                                </div>
                                <div class="header-content-right">
                                    <div class="header-social-icon">
                                    <ul class="list-gap social-list">
                                        <li>
                                            <a href="https://www.facebook.com/shipa1autotransport" > <i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/@shipA1autotransport" > <i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/shipa1-transport/" > <i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://wa.me/+14107184031" > <i class="fa-brands fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/shipa1_transport/" > <i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                            <div class="mobile-logo-area d-lg-none">
                                <a href="{{ route('welcome') }}">
                                    <img src="{{ asset('frontend/images/logo/LOGO NEW-2.png') }}"  loading="lazy"
                                    alt="Logo" />
                                </a>
                            </div>
                            <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                <ul class="main-menu">
                                    @php
                                    $navbars = App\Models\Menu::where('status',1)->orderBy('id', 'ASC')->get();
                                    @endphp
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 1)
                                    <li class="ab-gap">
                                        <a href="{{ route('welcome') }}"
                                            class="{{ Request::routeIs('welcome') ? ' active' : '' }}"> {{ $navbar->menu_name }}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 2)
                                    <li class="ab-gap">
                                        <a href="{{ route('quote.form.combine') }}"
                                            class="{{ Request::routeIs('quote.form.combine') ? ' active' : '' }}"> {{ $navbar->menu_name }}</a>
                                        <ul class="list-gap sub-menu-list" >
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-4 bd-l bd-r">
                                                    <h4 class="mb-3 ul-child-custom-heading">Vehicle Transportation</h4>
                                                    <li>
                                                        <a class="title"  href="{{ route('form.vehicle.atv_utv') }}">Atv Utv Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('form.vehicle.car') }}">Car Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('form.vehicle.golf_cart') }}">Golf Cart Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('form.vehicle.form.vehicle.car') }}">Motorcycle Transport</a>
                                                    </li>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-4 bd-r">
                                                    <h4 class="mb-3 ul-child-custom-heading">Heavy Equipment</h4>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('form.vehicle.boat') }}"> Boat Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('commercial.truck.transport') }}">Commercial Truck Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('frontend.forms.construction_transport') }}">Construction Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('form.vehicle.heavyEquipment') }}">Heavy Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('frontend.forms.excavator') }}"> Excavator Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('frontend.forms.farm_transport') }}">Farm Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('frontend.forms.rv_transport') }}">RV Transport</a>
                                                    </li>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-4">
                                                    <h4 class="mb-3 ul-child-custom-heading">Freight Transportation</h4>
                                                    <li>
                                                        <a class="title"  href="{{ route('frontend.forms.hazmattransport') }}">Hazmat Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" href="{{ route('frontend.forms.dryvan') }}">Dry Van Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title"  href="{{ route('frontend.forms.reefertrucking') }}">Reefer Trucking</a>
                                                    </li>
                                                    <h4 class="mb-3 ul-child-custom-heading">RORO</h4>
                                                    <li>
                                                        <a class="title" href="{{ route('form.vehicle.roro') }}">Roro Transportation</a>
                                                    </li>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                    @php
                                        $categories = \App\Models\ServiceCategory::has('services')->get();
                                        $services = \App\Models\Service::where('status', '=', 1)->get();
                                    @endphp
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 3)
                                    <li class="current-menu-item menu-item-has-children">
                                        <a href="{{ route('services') }}"
                                            class="{{ Request::routeIs('services*') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                        <ul class="list-gap sub-menu-list" >
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-4 bd-l bd-r">
                                                    <h4 class="mb-3 ul-child-custom-heading">Vehicle Transportation</h4>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'Vehicle Transportation')
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                    <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.car-service') }}">
                                                                    Car Transport Service</a>
                                                            </li>
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.bike-service') }}">
                                                                    Motorcycle Transport Service</a>
                                                            </li>
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.atv-utv-service') }}">
                                                                    ATV/UTV Transport Service</a>
                                                            </li>
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.golf-cart-service') }}">
                                                                    Golf Cart Transport Service</a>
                                                            </li>
                                                            <!-- <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.bike-service') }}">
                                                                    Motorcycle Transport</a>
                                                            </li>
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.excavator-service') }}">
                                                                    Excavator Service Transport</a>
                                                            </li> -->
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-4 bd-r">
                                                    <h4 class="mb-3 ul-child-custom-heading">Heavy Equipment</h4>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'Heavy Equipment')
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.boat-service') }}">
                                                            Boat Transport Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.construction-service') }}">
                                                            Construction Equipment Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.commercial-service') }}">
                                                            Commercial Truck Transport</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.excavator-service') }}">
                                                            Excavator Transport Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.farm-service') }}">
                                                            Farm Transport Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.heavy-service') }}">
                                                            Heavy Equipment Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.rv-service') }}">
                                                            RV Transport Services</a>
                                                    </li>   
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-4 ">
                                                    <h4 class="mb-3 ul-child-custom-heading">Freight Transportation</h4>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'Freight Transportation')
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.dryvan-service') }}">
                                                                    Dry Van Transport</a>
                                                            </li>
                                                             <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.hazmat-service') }}">
                                                                    Hazmat Transport</a>
                                                            </li>
                                                            <li>
                                                                <a class="title" 
                                                                    href="{{ route('frontend.pages.services.reefer-service') }}">
                                                                    Reefer Transport</a>
                                                            </li>
                                                            
                                                    <h4 class="mb-3 ul-child-custom-heading">RORO</h4>
                                                    @foreach ($services as $service)
                                                        @if ($service->category->name == 'RORO')
                                                            <li>
                                                                <a class="title"  
                                                                    href="{{ route('service.details', $service->slug) }}">
                                                                    {{ $service->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach 
                                                     <li>
                                                        <a class="title" 
                                                            href="{{ route('frontend.pages.services.roro-service') }}">
                                                            Roro Shipping International</a>
                                                    </li> 
                                                </div>  
                                            </div>
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 4)
                                    <li class="ab-gap">
                                        <a href="{{ route('autoAuction') }}"
                                            class="{{ Request::routeIs('autoAuction') || Request::routeIs('heavyAuction') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                            <ul class="list-gap sub-menu-list sub-menu-list-2" >
                                                <div class="row">
                                                    <div class="col-sm-12 bd-l bd-r">
                                                        <h4 class="mb-3 ul-child-custom-heading">Auction Transport Service</h4>
                                                        <li>
                                                            <a class="title" 
                                                            href="{{ route('autoAuction') }}">
                                                            Auto Auction Transport</a>
                                                        </li>
                                                        <li>
                                                            <a class="title" 
                                                                href="{{ route('heavyAuction') }}">
                                                                Heavy Auction Transport</a>
                                                        </li>
                                                        {{-- <li>
                                                            <a class="title" 
                                                                href="{{ route('thirdPartyLogistics') }}">
                                                                Third Party Logistics</a>
                                                        </li> --}}
                                                    </div>  
                                                </div>
                                            </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 5)
                                    <li class="ab-gap">
                                        <a href="{{ route('blogs') }}"
                                            class="{{ Request::routeIs('blogs') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($navbars as $navbar)
                                    @if($navbar->id == 6)
                                    <li>
                                        <a href="{{ route('contactUs') }}"
                                            class="{{ Request::routeIs('contactUs') ? ' active' : '' }}">{{ $navbar->menu_name }}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="header-menu-select d-flex align-items-center justify-content-end">
                                <div class="tj-header-button d-none d-lg-block">
                                    <a class="tj-header-btn" href="{{ route('quote.form.combine') }}" >
                                        Get Quote<i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                                <div class="tj-hambagur-icon d-lg-none">
                                    <a class="canva_expander nav-menu-link menu-button" href="#">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>