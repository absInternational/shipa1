<style>
    .navbar-nav .nav-item {
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .navbar-nav .nav-item.active .nav-link {
        border-radius: 50px;
        background-color: #8FC445;
        color: #ffffff;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .navbar-nav .nav-item .nav-link {
        border-radius: 50px;
        color: #ffffff;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .navbar-nav .nav-item .nav-link:hover {
        border-radius: 50px;
        background-color: #8FC445;
        color: #ffffff;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
</style>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #062e39;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('blogs.index') }}">
        <div class="sidebar-brand-text mx-3"><img src="{{ asset('frontend/images/logo/logo-white.png') }}" style="width:100%;" alt=""> <sup></sup></div>
    </a>

    @php
        $sidebar_access = explode(',', Auth::user()->sidebar_access);
    @endphp

    <!-- Nav Item - Blogs -->
    @if (in_array('1', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Users Management</span>
            </a>
        </li>
    @endif
    @if (in_array('2', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('blogs.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('blogs.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Blogs</span>
            </a>
        </li>
    @endif
    @if (in_array('3', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('navbar.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('navbar.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Edit Frontend NavBar</span>
            </a>
        </li>
    @endif
    @if (in_array('4', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('services.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('services.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Services</span>
            </a>
        </li>
    @endif
    @if (in_array('5', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('service_categories.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('service_categories.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Service Categories</span>
            </a>
        </li>
    @endif
    @if (in_array('6', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('reviews.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('reviews.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Reviews</span>
            </a>
        </li>
    @endif
    @if (in_array('7', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('site_review.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('site_review.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add Site Reviews</span>
            </a>
        </li>
    @endif
    @if (in_array('8', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('faqs.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('faqs.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>FAQs</span>
            </a>
        </li>
    @endif
    @if (in_array('9', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('contact_messages.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('contact_messages.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Contact Messages</span>
            </a>
        </li>
    @endif
    @if (in_array('10', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('newsLetter.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('newsLetter.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Newsletter Emails</span>
            </a>
        </li>
    @endif
    @if (in_array('11', $sidebar_access) || Auth::user()->role == 'admin')
        <li class="nav-item {{ request()->routeIs('port-to-ports.index') ? 'active' : '' }}">
            <a class="nav-link  py-2 mb-2" href="{{ route('port-to-ports.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Port To Ports</span>
            </a>
        </li>
    @endif

</ul>
