<style>
     /* Style for user name link */
.nav-item .nav-link.user-name {
    color: #858796 !important;
    font-weight: bold;
    transition: color 0.3s;
}

.nav-item .nav-link.user-name:hover {
    color: black !important;
    border-radius:0px!important;
}

/* Style for logout link */
.nav-item .nav-link.logout-link {
    color: #858796 !important;
    border-radius:0px!important;
    font-weight: bold;
    transition: color 0.3s;
}

.nav-item .nav-link.logout-link:hover {
    border-radius:0px!important;
    color: black !important;
}

/* Style adjustments for better alignment */
.nav-item .row.align-items-center {
    display: flex;
    align-items: center;
}

.nav-item .col-6 {
    padding: 0;
}

.nav-item .col-6.text-right {
    text-align: right;
}

.nav-item .col-6.text-left {
    text-align: left;
}

</style>

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="border-bottom: 2px solid #8FC445;">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color: #8FC445;">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    {{-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: #8FC445;">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
    <div class="row align-items-center">
        <div class="col-6 text-right">
            <a class="nav-link user-name" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline">{{ Auth::user()->name }}</span>
            </a>
        </div>
        <div class="col-6 text-left">
            <a class="nav-link logout-link" href="#" data-toggle="modal" data-target="#logoutModal">
                {{ __('Logout') }}
            </a>
        </div>
    </div>
</li>


    </ul>

</nav>
