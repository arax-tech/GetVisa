<div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
    <div class="container-fluid">
        <!-- LOGO -->
        <a href="{{ url('admin/dashboard') }}" class="navbar-brand mr-0 mr-md-2 logo">
            <span class="logo-lg">
                <img src="{{ asset('backend/images/logo.png') }}" alt="" height="24" />
                <span class="d-inline h5 ml-1">{{ auth::user()->name }}</span>
            </span>
            <span class="logo-sm">
                <img src="{{ asset('backend/images/logo.png2wbmp(pngname, wbmpname, dest_height, dest_width, threshold)') }}" alt="" height="24">
            </span>
        </a>

        <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
            <li class="">
                <button class="button-menu-mobile open-left disable-btn">
                    <i data-feather="menu" class="menu-icon"></i>
                    <i data-feather="x" class="close-icon"></i>
                </button>
            </li>
        </ul>

    </div>

</div>