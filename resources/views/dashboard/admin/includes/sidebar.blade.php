<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('blogs.index') }}">
        <div class="sidebar-brand-text mx-3">ShipA1 <sup></sup></div>
    </a>

    @php
        $sidebar_access = explode(',', Auth::user()->sidebar_access);
    @endphp

    <!-- Nav Item - Blogs -->
    @if (in_array('1', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Users Management</span></a>
        </li>
    @endif
    @if (in_array('2', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('blogs.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Blogs</span></a>
        </li>
    @endif
    @if (in_array('3', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('navbar.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Edit Frontend NavBar</span></a>
        </li>
    @endif
    @if (in_array('4', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('services.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Services</span></a>
        </li>
    @endif
    @if (in_array('5', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('service_categories.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Service Categories</span></a>
        </li>
    @endif
    @if (in_array('6', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reviews.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Reviews</span></a>
        </li>
    @endif
    @if (in_array('7', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('site_review.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add Site Reviews</span></a>
        </li>
    @endif
    @if (in_array('8', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('faqs.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>FAQs</span></a>
        </li>
    @endif
    @if (in_array('9', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('contact_messages.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Contact Messages</span></a>
        </li>
    @endif
    @if (in_array('10', $sidebar_access))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('newsLetter.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Newsletter Emails</span></a>
        </li>
    @endif

    {{-- <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!
        </p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
